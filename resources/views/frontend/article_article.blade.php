@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim(str_replace('官网','',$thisarticleinfos->description))}}@stop
@section('header_libs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
    <link rel="stylesheet" type="text/css" href="/receptions/css/news.css"/>
@stop
@section('main_content')
    <div class="main">
        <div class="bn1190"><img src="/receptions/images/temp/bn7.jpg" alt=""></div>
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></div>
        <div class="main clearfix">
            <div class="center_list clearfix">
                <div class="news_center">
                    <div class="ny_message">
                        <h1> {{$thisarticleinfos->title}}</h1>
                        <div class="ny_message-js"> 时间：{{$thisarticleinfos->created_at}} <span>来源：{{config('app.indexname')}}</span> <span>浏览：{{$thisarticleinfos->click}}</span> </div>
                    </div>
                    <div class="body_tit clearfix">
                        {!! $thisarticleinfos->body !!}
                    </div>
                    <div class="fenxiang">
                        <div class="fenxiangdao">分享到：</div>
                        <div class="bdsharebuttonbox bdshare-button-style1-16" data-tag="share_1" data-bd-bind="1566885820139">
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        </div>
                        <div class="nr_biaoqian"><b>标签：</b>{{$thisarticleinfos->tags}}</div>
                    </div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                     <div class="shangxiapian">
                         <p>@if(isset($prev_article->id)) <span>上一篇：<a href="{{config('app.url')}}/news/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif </p>
                         <p>@if(isset($next_article->id))  <span class="right">下一篇：<a href="{{config('app.url')}}/news/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif  </p>
                    </div>
                    @include('frontend.liuyan')
                    <div class="xg_news">
                        <div class="title"><strong>{{$thisarticleinfos->bdname}}资讯</strong></div>
                        <div class="xw">
                            <ul class="clearfix">
                                @foreach($latestbrandnews as $latestbrandnew)
                                <li><em>{{$latestbrandnew->created_at}}</em><a href="/news/{{$latestbrandnew->id}}.shtml" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="new_right">
                    <div class="new_bt">
                        <h3> <i></i> @if(isset($thisbrandtypeinfo)) {{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@else 母婴店加盟@endif排行榜 </h3>
                        <div class="rank_bd">
                            <ul>
                                @foreach($paihangbangs as $paihangbang)
                                    @if($loop->first)
                                        <li class="top"> <a href="/xm/{{$paihangbang->id}}.shtml" target="_blank" title="{{$paihangbang->brandname}}"><i class="num">1 </i> <img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}"></a>
                                            <div class="cont">
                                                <p><a href="/xm/{{$paihangbang->id}}.shtml" target="_blank">{{$paihangbang->brandname}}</a></p>
                                                <p><span>投资金额：</span><i>{{$paihangbang->brandpay}}</i></p>
                                                <p class="btn"><a href="/xm/{{$paihangbang->id}}.shtml">查看详情</a></p>
                                            </div>
                                        </li>
                                    @else
                                        <li class="top"> <i class="num">{{$loop->iteration}}</i> <span class="name"><a href="/xm/{{$paihangbang->id}}.shtml" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a></span> <span class="price">{{$paihangbang->brandpay}}</span> </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新@if(isset($thisbrandtypeinfo)){{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@else 母婴店@endif加盟项目 </h3>
                        <div class="bt_xiangmu">
                            <ul>
                                @foreach($latestbrands as $latestbrand)
                                <li> <a href="/xm/{{$latestbrand->id}}.shtml">{{$latestbrand->brandname}}</a> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新@if(isset($thisbrandtypeinfo)){{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@else 母婴店@endif新闻 </h3>
                        <div class="bts com_news">
                            <div class="common">
                                <ul>
                                    @foreach($latesttypenews as $latesttypenew)
                                    <li><a href="/news/{{$latesttypenew->id}}.shtml" target="_blank" title="{{$latesttypenew->title}}">{{$latesttypenew->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ff p20">
                        <div class="lh24">
                            <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                            <h3 class="f22">@if(isset($thisbrandtypeinfo)){{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@else 母婴店@endif热门加盟项目</h3>
                        </div>
                        <ul class="join-project mt30">
                            @foreach($abrandlists as $abrandlist)
                            <li>
                                <a target="_blank" href="/xm/{{$abrandlist->id}}.shtml" class="img-block magnify"><img src="{{$abrandlist->litpic}}" alt="{{$abrandlist->brandname}}"></a>
                                <p class="f16"><a target="_blank" href="/xm/{{$abrandlist->id}}.shtml">{{$abrandlist->brandname}}</a></p>
                                <p class="f14">投资金额：<span class="s-oe">{{$abrandlist->brandpay}}</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">{{$abrandlist->brandnum}}</span></p>
                            </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop