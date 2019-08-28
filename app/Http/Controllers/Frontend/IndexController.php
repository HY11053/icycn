<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    function Index()
    {
        //幻灯底部推荐
        $muyingnavlists=Cache::remember('index_muyingnavlists', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('typeid',1)->orderBy('id','asc')->take(10)->get(['id','brandname']);
        });
        //母婴生活馆
        $muyingshgnavlists=Cache::remember('index_muyingshgnavlists', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('typeid',2)->orderBy('id','asc')->take(10)->get(['id','brandname']);
        });
        //母婴用品
        $muyingypnavlists=Cache::remember('index_muyingypnavlists', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('typeid',3)->orderBy('id','asc')->take(10)->get(['id','brandname']);
        });

        $latestbrands=Cache::remember('index_latestbrands', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('mid',1)->take(5)->latest()->get(['id','brandname','litpic','brandpay','description']);
        });
        $cbrands=Cache::remember('index_cbrands', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::whereIn('id',[23,13,40,24])->latest()->get(['id','brandname','litpic','brandpsp','description']);
        });
        $hotbrands=Cache::remember('index_hotbrands', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('mid',1)->where('typeid',2)->skip(10)->take(5)->orderBy('id','asc')->get(['id','brandname']);
        });
        $lefthotbrands=Cache::remember('index_lefthotbrands', config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::where('mid',1)->where('typeid',1)->skip(10)->take(7)->orderBy('id','asc')->get(['id','litpic','brandname']);
        });
        //友情链接
        $flinks=Cache::remember('index_flinks', 60, function(){
            return   flink::latest()->orderBy('created_at','desc')->take(30)->get();
        });

        return view('frontend.index',compact('muyingnavlists','muyingshgnavlists','muyingypnavlists','latestbrands','cbrands','hotbrands','lefthotbrands'));
    }

}
