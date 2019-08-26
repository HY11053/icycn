<?php

namespace App\Http\Controllers\Mip;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    /**普通文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsArticle(Request $request,$id)
    {
        //获取当前文档并缓存
        $thisarticleinfos = Cache::remember('thisarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
            return Archive::findOrFail($id);
        });
        //获取当前栏目信息并缓存
        $thistypeinfo = Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
            return Arctype::where('id',$thisarticleinfos->typeid)->first();
        });
        //获取文档上一篇并缓存
        $prev_article =Cache::remember('thisarticleinfos_prev'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Archive::latest('created_at')->where('id',$this->getPrevArticleId($thisarticleinfos->id))->first(['title','id']);
        });
        //获取文档下一篇并缓存
        $next_article = Cache::remember('thisarticleinfos_next'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Archive::latest('created_at')->where('id',$this->getNextArticleId($thisarticleinfos->id))->first(['title','id']);
        });
        //获取当前文档所属品牌并缓存
        if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
        {
            $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
            });
        }
        //获取当前文档所属品牌分类
        if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
        {
            //当前文档所属品牌所属分类
            $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return  Arctype::where('id',$thisarticlebrandinfos->typeid)->first();
            });
        }
        if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
        {
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$thisarticlebrandinfos){
                $brandnews=Archive::where('brandid',$thisarticleinfos->brandid)->take(10)->latest()->get(['id','title','created_at','litpic']);
                if ($brandnews->count()<10)
                {
                    $completionnews=Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',Archive::where('brandid',$thisarticleinfos->brandid)->pluck('id'))->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
                }else{
                    $completionnews=collect([]);
                }
                $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
                return $latestbrandnews;
            });
            $abrandlists= Cache::remember('abrandlist'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return Brandarticle::where('mid','1')->where('typeid',$thisarticlebrandinfos->typeid)->take(4)->orderBy('id','desc')->get();
            });
            $paihangbangs= Cache::remember('phb'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            $latestbrands=Cache::remember('thisarticleinfos_latestbrands'.$thisarticlebrandinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return $latestbrands=Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            $latesttypenews=Cache::remember('brandtypenews'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews,$thisarticlebrandinfos){
                $notids=[];
                foreach ($latestbrandnews as $latestbrandnew)
                {
                    $notids[]=$latestbrandnew->id;
                }
                return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',$notids)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
            });

        }else{
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
            });
            $abrandlists= Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('mid','1')->take(4)->orderBy('id','desc')->get();
            });
            $paihangbangs= Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            $latestbrands=Cache::remember('latestbrands',  config('app.cachetime')+rand(60,60*24), function(){
                return  Brandarticle::latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            $latesttypenews=Cache::remember('typenews'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return  Archive::where('typeid', $thisarticleinfos->typeid)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
            });

        }
        //店铺面积缓存
        $acreagements=Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
            return Acreagement::pluck('type','id');
        });
        return view('mip.article_article',compact('acreagements','thisarticleinfos','thistypeinfo','thisarticlebrandinfos','prev_article','next_article','thisbrandtypeinfo','paihangbangs','latestbrands','latestbrandnews','latesttypenews','abrandlists'));
    }

    /**品牌文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function BrandArticle($id)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
            return Brandarticle::findOrFail($id);
        });
        //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
        $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return  Arctype::where('id',$thisarticleinfos->typeid)->first();
        });
        $abrandlists= Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->take(4)->orderBy('id','desc')->get();
        });
        //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
        $paihangbangs= Cache::remember('phb'.$thisarticleinfos->typeid,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
        });
        //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足 保持缓存名称和普通文档相关品牌文档缓存名称相同
        $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$id,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            $brandnews=Archive::where('brandid',$thisarticleinfos->id)->take(10)->latest()->get(['id','title','created_at','litpic']);
            if ($brandnews->count()<10)
            {
                $completionnews=Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticleinfos->typeid)->pluck('id'))->whereNotIn('id',Archive::where('brandid',$thisarticleinfos->id)->pluck('id'))->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
            }else{
                $completionnews=collect([]);
            }
            $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
            return $latestbrandnews;
        });
        //当前品牌相关资讯 右侧
        $latesttypenews=Cache::remember('brandtypenews'.$thisarticleinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews){
            $notids=[];
            foreach ($latestbrandnews as $latestbrandnew)
            {
                $notids[]=$latestbrandnew->id;
            }
            return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticleinfos->typeid)->pluck('id'))->whereNotIn('id',$notids)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
        });
        //最新入驻品牌
        $latestbrands=Cache::remember('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->latest()->take(5)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
        });
        //店铺面积缓存
        $acreagements=Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
                return Acreagement::pluck('type','id');
            });
        return view('mip.brand_article',compact('thisarticleinfos','thisbrandtypeinfo','paihangbangs','latestbrandnews','latesttypenews','latestbrands','abrandlists','acreagements'));
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->orderBy('id','desc')->value('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->orderBy('id','asc')->value('id');
    }

}
