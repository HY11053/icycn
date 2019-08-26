<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PaihangbangController extends Controller
{
    public function Paihangbang($path='')
    {
        if(!$path)
        {
            $thistypeinfo=Arctype::where('id',1)->first();
        }else{
            $thistypeinfo=Arctype::where('real_path',$path)->first();
        }
        if(!$thistypeinfo)
        {
            abort(404);
        }
        $typeids=Arctype::where('reid',1)->orWhere('topid',1)->pluck('id');
        $paihangbrands=Cache::remember('phblist'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*360), function() use ($path,$typeids) {
            $paihangbrands=Brandarticle::take(20)->when($path, function ($query) use ($path) {
                return $query->where('typeid',Arctype::where('real_path',$path)->value('id'));
            })->orderBy('click','desc')->get();
            if (!$paihangbrands->count())
            {
                $paihangbrands=Brandarticle::whereIn('typeid',$typeids)->take(20)->orderBy('click','desc')->get();
            }
            return $paihangbrands;
        });

        $brandnavs=Cache::remember('phbbrandnavs', config('app.cachetime')+rand(60,60*360), function() {
            return Arctype::where('mid',1)->get(['typename','real_path']);
        });
        $acreagements=Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
            return Acreagement::pluck('type','id');
        });
        return view('mobile.paihangbang',compact('thistypeinfo','paihangbrands','brandnavs','acreagements'));
    }
}
