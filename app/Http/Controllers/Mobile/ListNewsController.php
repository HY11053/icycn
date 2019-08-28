<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ListNewsController extends Controller
{
    /**文档列表 通配 包含普通文档 品牌文档及产品文档
     * @param $path
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listNews(Request $request,$path,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        //当前栏目信息缓存
        $thistypeinfo=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        $cid=$path;
        //针对不同栏目类型返回不同类型页面
        //普通文档列表
        if($thistypeinfo->mid==0)
        {
            $pagelists=Archive::where('typeid',$typeid)->orderBy('id','desc')->paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $hotnew=Cache::remember('hotnew'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%h%')->latest()->first(['id','title','litpic']);
            });
            $cnewtop=Cache::remember('cnewtop'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->latest()->first(['title','id','description']);
            });

            $cnewtops=Cache::remember('cnewtops'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->skip(1)->take(10)->latest()->get(['id','title']);
            });
            $paihangbangs= Cache::remember('phb', config('app.cachetime')+60*24*365, function(){
                return Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            $abrandlists= Cache::remember('abrandlist', config('app.cachetime')+60*24*365, function(){
                return Brandarticle::where('mid','1')->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
            });
            $latestbrands=Cache::remember('latestbrands',   config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            $latestnews=Cache::remember('platestnews'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
                return Archive::where('typeid','<>',$thistypeinfo->id)->take(7)->latest()->get();
            });
            return view('mobile.list_article',compact('thistypeinfo','pagelists','hotnew','cnewtop','cnew','cnewtops','paihangbangs','latestbrands','latestnews','abrandlists'));
        }elseif ($thistypeinfo->mid==1)
        {
            $cid=preg_replace('/\/page\/[0-9]+/','',$path);
            if (!$thistypeinfo->reid)
            {
                $typeids=Arctype::where('reid',0)->where('mid',1)->pluck('id');
            }else{
                $typeids=Arctype::where('id',$thistypeinfo->id)->where('mid',1)->pluck('id');
            }
            $pagelists=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$thistypeinfo->id)->orderBy('id','desc')->distinct()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $topbrandnavs=Cache::remember('topbrandnavs', config('app.cachetime')+60*24*365, function() {
                return Arctype::where('mid',1)->where('reid','<>',0)->orderBy('sortrank','asc')->get(['real_path','typename']);
            });
            $paihangbangs= Cache::remember('phb'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
                return  Brandarticle::where('typeid',$thistypeinfo->id)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            $flashlingshibrands=Cache::remember('flashlingshibrands', config('app.cachetime')+rand(60,60*24), function() {
                return Brandarticle::where('mid','1')->where('flags','like','%'.'h'.'%')->take(7)->orderBy('id','desc')->get();
            });
            //店铺面积缓存
            $acreagements=Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
                return Acreagement::pluck('type','id');
            });
            $cnewslists=Cache::remember('cnewslists'.$thistypeinfo->id,  rand(10,60), function() use($thistypeinfo){
                return Archive::whereIn('brandid',Brandarticle::where('typeid',$thistypeinfo->id)->latest()->pluck('id'))->take(7)->latest()->get();
            });

            return view('mobile.brands',compact('thistypeinfo','topbrandnavs','pagelists','paihangbangs','flashlingshibrands','cnewslists','hotbrandsearch','acreagements'));
        }

    }

    /**品牌分类筛选
     * @param $path
     * @param $tid
     * @param $cid
     * @param $zid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projectBrandLists($path,$tid=0,$cid=0,$zid=0,$page=0)
    {
        //栏目查找
        $thistypeinfo=Arctype::where('real_path',$path)->first();
        if (empty($thistypeinfo))
        {
            abort(404);
        }
        $pagelists=Brandarticle::when($tid, function ($query) use ($tid) {
            return $query->where('tzid',$tid);
        })->when($cid, function ($query) use ($cid) {
            return $query->whereIn('country',Area::where('parentid',$cid)->pluck('regionname'));
        })->when($zid, function ($query) use ($zid) {
            return $query->where('acreage',$zid);
        })->paginate($perPage = 32, $columns = ['*'], $pageName = 'page', $page);
        if ($pagelists->total() <1)
        {
            $pagelists=Brandarticle::take(10)->latest()->inRandomOrder()->paginate($perPage = 32, $columns = ['*'], $pageName = 'page', $page);
        }
        $topbrandnavs=Cache::remember('topbrandnavs', 60*24*365, function() {
            return Arctype::where('mid',1)->where('reid','<>',0)->orderBy('sortrank','asc')->get(['real_path','typename']);
        });
        $paihangbangs= Cache::remember('phb'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            $paihangbangs= Brandarticle::where('typeid',$thistypeinfo->id)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            if (!$paihangbangs->count())
            {
                $paihangbangs=Brandarticle::take(10)->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            }
            return $paihangbangs;
        });
        $flashlingshibrands=Cache::remember('flashlingshibrands', config('app.cachetime')+rand(60,60*24), function() {
            return Brandarticle::where('mid','1')->where('flags','like','%'.'h'.'%')->take(7)->orderBy('id','desc')->get();
        });
        //店铺面积缓存
        $acreagements=Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
            return Acreagement::pluck('type','id');
        });
        $cnewslists=Cache::remember('cnewslists'.$thistypeinfo->id,  rand(10,60), function() use($thistypeinfo){
            return Archive::whereIn('brandid',Brandarticle::where('typeid',$thistypeinfo->id)->latest()->pluck('id'))->take(7)->latest()->get();
        });
        //此处为生成的标题传值
        switch ($tid)
        {
            case 1:
                $tid='10~15万';
                break;
            case 2:
                $tid='15~20万';
                break;
            case 3:
                $tid='20~30万';
                break;
            case 4:
                $tid='30~50万';
                break;
            case 5:
                $tid='50~100万';
                break;
            case 6:
                $tid='100~150万';
                break;
            default:
                $tid=null;
        }
        if ($cid)
        {
            $cid=Area::where('id',$cid)->value('regionname');
        }else{
            $cid=null;
        }
        if ($zid)
        {
            $zid=Acreagement::where('id',$zid)->value('type');
        }else{
            $zid=null;
        }
        return view('mobile.project_brands',compact('thistypeinfo','flashlingshibrands','topbrandnavs','pagelists','paihangbangs','tid','cid','cnewslists','zid','acreagements'));
    }


}
