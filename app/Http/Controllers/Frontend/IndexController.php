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
        $cbrands=Cache::remember('index_cbrands', 60*24*365, function(){
            return Brandarticle::whereIn('id',[112,124,44,5])->orderBy('click','desc')->get(['id','brandname','brandpsp','indexpic']);
        });
        //项目抢先看
        $hotbrandsearch=Cache::remember('index_hotbrandsearch', 10, function(){
            return Brandarticle::where('mid','1')->latest()->take(5)->orderBy('click','desc')->get(['id','brandname','description','brandpay','litpic']);
        });
        $ctbrand=Cache::remember('index_ctbrand', 60*24*365, function(){
            return Brandarticle::where('id',113)->first(['id','brandname','indexpic']);
        });
        //精品推荐左侧
        $otbrands=Cache::remember('index_otbrands', 60*24*365, function(){
            return  Brandarticle::where('mid','1')->where('flags','like','%h%')->take(6)->orderBy('id','desc')->get(['id','brandname','litpic']);
        });
        //精品推荐右侧
        $cbrandrs=Cache::remember('index_cbrandrs', 60*24*365, function(){
            return Brandarticle::where('mid','1')->whereIn('id',[131,204,105,467,315,261,263,466,214,210])->orderBy('click','desc')->get(['id','brandname','brandpay','indexpic']);
        });
        //新品上线
        $lbrand=Cache::remember('index_lbrand', 60*24*365, function(){
            return Brandarticle::where('id',263)->first(['id','brandname','litpic']);
        });
        $latestbrandrs=Cache::remember('index_latestbrandrs', 10, function(){
            return Brandarticle::where('mid','1')->skip(5)->take(6)->orderBy('id','desc')->get(['id','brandname','litpic','indexpic']);
        });

        $latestbrands=Cache::remember('index_latestbrands', 10, function(){
            return Brandarticle::where('mid','1')->skip(11)->take(10)->orderBy('id','desc')->get(['id','brandname','litpic','brandpay']);
        });
        //项目大全
        $czaojiaobrands=Cache::remember('index_czaojiaobrands', 60*24*365, function(){
            return Brandarticle::where('typeid',3)->where('flags','like','%'.'s'.'%')->take(3)->latest()->get(['id','brandname']);
        });

        $fzaojiaobrands=Cache::remember('index_fzaojiaobrands', 60*24*365, function(){
            return Brandarticle::where('typeid',3)->where('flags','like','%'.'f'.'%')->take(3)->latest()->get(['id','brandname','litpic']);
        });

        $azaojiaobrands=Cache::remember('index_azaojiaobrands', 10, function(){
            return Brandarticle::where('typeid',3)->take(6)->latest()->get(['id','brandname']);
        });

        $youerbrands=Cache::remember('index_youerbrands', 60*24*365, function(){
            return Brandarticle::where('typeid',5)->where('flags','like','%'.'s'.'%')->take(3)->latest()->get(['id','brandname']);
        });

        $fyouerbrands=Cache::remember('index_fyouerbrands',60*24*365, function(){
            return Brandarticle::where('typeid',5)->where('flags','like','%'.'f'.'%')->take(3)->latest()->get(['id','brandname','litpic']);
        });

        $ayouerbrands=Cache::remember('index_ayouerbrands', 10, function(){
            return Brandarticle::where('typeid',5)->take(6)->latest()->get(['id','brandname']);
        });

        $cshaoerbrands=Cache::remember('index_cshaoerbrands', 60*24*365, function(){
            return Brandarticle::where('typeid',4)->where('flags','like','%'.'s'.'%')->take(3)->latest()->get(['id','brandname']);
        });

        $fshaoerbrands=Cache::remember('index_fshaoerbrands', 60*24*365, function(){
            return Brandarticle::where('typeid',4)->where('flags','like','%'.'f'.'%')->take(3)->latest()->get(['id','brandname','litpic']);
        });

        $ashaoerbrands=Cache::remember('index_ashaoerbrands', 10, function(){
            return Brandarticle::where('typeid',4)->take(6)->latest()->get(['id','brandname']);
        });

        $cwudaobrands=Cache::remember('index_cwudaobrands', 60*24*365, function(){
            return Brandarticle::where('typeid',10)->where('flags','like','%'.'s'.'%')->take(3)->latest()->get(['id','brandname']);
        });

        $fwudaobrands=Cache::remember('index_fwudaobrands',  60*24*365, function(){
            return  Brandarticle::where('typeid',10)->where('flags','like','%'.'f'.'%')->take(3)->latest()->get(['id','brandname','litpic']);
        });

        $awudaobrands=Cache::remember('index_awudaobrands', 10, function(){
            return  Brandarticle::where('typeid',10)->take(6)->latest()->get(['id','brandname']);
        });

        //项目排行榜
        $paihangbangs=Cache::remember('index_paihangbangs', 60*24*365, function(){
            return  Arctype::where('mid','1')->where('topid','<>',0)->take(12)->orderBy('id','asc')->get(['typename','real_path','litpic']);
        });
        //品牌新闻推荐
        $cnews=Cache::remember('index_cnews', 10, function(){
            return  Archive::latest()->where('typeid',2)->take(5)->orderBy('id','desc')->get(['id','litpic','title','description']);
        });
        $fnew=Cache::remember('index_fnew', 60*24*365, function(){
            return  Archive::where('flags','like','%a%')->first(['id','litpic','title']);
        });

        $zhinannews=Cache::remember('index_zhinannews', 10, function(){
            return  Archive::latest()->where('typeid',25)->take(5)->orderBy('id','desc')->get(['id','litpic','title','description','created_at']);
        });

        $jingyingnews=Cache::remember('index_jingyingnews', 10, function(){
            return  Archive::latest()->where('typeid',27)->take(5)->orderBy('id','desc')->get(['id','litpic','title','description','created_at']);
        });

        //友情链接
        $flinks=Cache::remember('index_flinks', 60, function(){
            return   flink::latest()->orderBy('created_at','desc')->take(30)->get();
        });

        $topnavs=Cache::remember('index_topnavs', 60*24*30, function(){
            return   Arctype::where('mid',1)->where('reid','<>',0)->take(6)->orderBy('sortrank','desc')->get(['real_path','typename']);
        });
        $topnav2s=Cache::remember('index_topnav2s', 60*24*30, function(){
            return   Arctype::where('mid',1)->where('reid','<>',0)->skip(6)->take(6)->orderBy('sortrank','desc')->get(['real_path','typename']);
        });
        return view('frontend.index',compact('cbrands','hotbrandsearch','ctbrand','otbrands','cbrandrs','lbrand','latestbrandrs','latestbrands',
            'czaojiaobrands','fzaojiaobrands','azaojiaobrands','youerbrands','fyouerbrands','ayouerbrands','cshaoerbrands','fshaoerbrands','ashaoerbrands','cwudaobrands',
            'fwudaobrands','awudaobrands','paihangbangs','cnews','zhinannews','jingyingnews','fnew','flinks','topnavs','topnav2s'
            ));
    }

}
