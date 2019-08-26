@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim(str_replace('官网','',$thisarticleinfos->description))}}@stop
@section('headlibs')
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
    <link rel="stylesheet" href="/frontend/css/article.css" />
    <link rel="stylesheet" href="/frontend/css/index.css" />
@stop
@section('main_content')
    <div style="background-color: #f5f5f5;">
    <div class="w1200">
        <div class="path"><p>当前位置：<a href="/">首页</a>&gt; <a class="dq" href="{{config('app.url')}}/{{$thistypeinfo->real_path}}/" title="{{$thistypeinfo->typename}}">{{$thistypeinfo->typename}}</a></p></div>
        <div class="clearfix pb50">
            <div class="fl w870">
                @if(isset($thisarticlebrandinfos))
                <div class="top-box">
                    <div class="left"><img src="{{$thisarticlebrandinfos->litpic}}" width="191" height="118" alt="{{$thisarticlebrandinfos->brandname}}"></div>
                    <div class="mid">
                        <h3 class="nowrap"><a href="/xm/{{$thisarticlebrandinfos->id}}.shtml">{{$thisarticlebrandinfos->brandname}}</a></h3>
                        <span class="nowrap">{{$thisarticlebrandinfos->brandgroup}}</span>
                        <a clsss="bl" href="#wyjm" rel="nofollow" target="">加盟扶持</a>
                        <p>
                            <em>￥{{$thisarticlebrandinfos->brandpay}}</em>
                            <i class="nowrap">区域特许：{{$thisarticlebrandinfos->brandarea}}</i>
                            <i class="nowrap">加盟人气：{{$thisarticlebrandinfos->brandnum}}</i>
                        </p>
                    </div>
                    <div class="right"><a  href="/xm/{{$thisarticlebrandinfos->id}}.shtml" >查看项目详情</a></div>
                </div>
                @endif
                    <div class="detail-page">
                    <div class="det-tit">
                        <h1>{{$thisarticleinfos->title}}</h1>
                        <div class="info">
                            <span>{{$thisarticleinfos->created_at}}</span><span>来源：<em class="s-c59">{{config('app.indexname')}}</em></span><span class="s-oe"><i class="iconfont icon-Category"></i>{{$thistypeinfo->typename}}</span>
                        </div>
                    </div>
                    <div class="det-nr">
                        {!! $thisarticleinfos->body !!}
                    </div>
                    <div class="other">
                        <div class="fl tag">
                            <span>标签：</span><h3 class="btn">{{$thisarticleinfos->tags}}</h3>
                        </div>
                    </div>
                </div>

                <div class="ar_infos">
                    <div class="shangxiapian">
                        <p>@if(isset($prev_article->id)) <span>上一篇：<a href="{{config('app.url')}}/news/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif </p>
                        <p>@if(isset($next_article->id))  <span class="right">下一篇：<a href="{{config('app.url')}}/news/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif  </p>
                    </div>
                    @include('frontend.liuyan')
                    <div class="xg_news">
                        <div class="title"><strong>@if(isset($thisarticlebrandinfos->brandname)) {{$thisarticlebrandinfos->brandname}}加盟资讯@endif</strong></div>
                        <div class="xw">
                            <ul class="clearfix">
                                @if(isset($latestbrandnews))
                                    @foreach($latestbrandnews as $latestbrandnew)
                                        <li><a href="/news/{{$latestbrandnew->id}}.shtml" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="fr w320">
                <div class="plr20-tb15 bg-ff box-shadow mb20 ">
                    <div class="lh24">
                        <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                        <h3 class="f22">@if(isset($thisbrandtypeinfo->typename)){{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@else 热门@endif加盟项目</h3>
                    </div>
                    <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                        @foreach($abrandlists as $index=>$abrandlist)
                            <dd class="magnify magnify-txt @if(($index+1)%2) mr10 @endif"><a target="_blank" href="/xm/{{$abrandlist->id}}.shtml" class="img-block">
                                    <img src="{{$abrandlist->litpic}}" alt=" {{$abrandlist->brandname}}">
                                    <div class="img-bg"></div>
                                    <p>{{$abrandlist->brandname}}</p>
                                </a>
                            </dd>
                        @endforeach
                        <div class="clear"></div>
                    </dl>
                </div>

                <dl class="rank-bar mr30" style="margin-top: 0px; margin-bottom: 20px;">
                    <dt>
                        <h3>@if(isset($thisbrandtypeinfo->typename)){{str_replace('加盟','',$thisbrandtypeinfo->typename)}}@endif综合排行</h3>
                        <span class="fr">关注量</span></dt>
                    @foreach($paihangbangs as $index=>$paihangbang)
                        <dd @if($loop->first)  class="show" @endif>
                            <div class="item">
                                <i class="icon-all @if($index<3) i-a3{{$index}}@else i-a33 @endif">{{$index+1}}</i>
                                <div class="default">
                                    <span class="fr">{{$paihangbang->brandnum}}</span><a target="_blank" href="/xm/{{$paihangbang->id}}.shtml" class="f16">{{$paihangbang->brandname}}</a>
                                </div>
                                <div class="tips">
                                    <a target="_blank" href="/xm/{{$paihangbang->id}}.shtml"><img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}" class="fr"></a>
                                    <p> {{$paihangbang->description}}</p>
                                </div>
                            </div>
                        </dd>
                    @endforeach
                </dl>

                <div class="plr20-tb15 bg-ff box-shadow mt20">
                    <div class="lh24">
                        <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                        <h3 class="f22">最新加盟项目</h3>
                    </div>
                    <ul class="jm-xm-list mt5 mb10" style="margin-top: 10px;">
                        @foreach($latestbrands as $latestbrand)
                        <li><a target="_blank" href="/xm/{{$latestbrand->id}}.shtml" class="img-block magnify"><img src="{{$latestbrand->litpic}}" alt=""></a>
                            <p class="f16">
                                <a target="_blank" href="/xm/{{$latestbrand->id}}.shtml">{{$latestbrand->brandname}}</a>
                            </p>
                            <p class="f14">
                                投资金额：<span class="s-oe">￥{{$latestbrand->brandpay}}</span>
                            </p>
                            <p class="f14">门店总数：<span class="s-oe">{{$latestbrand->brandnum}}</span>
                            </p>
                        </li>
                       @endforeach
                    </ul>
                </div>
                <div class="plr20-tb15 bg-ff box-shadow mt20" >
                    <div class="lh24" style="margin-bottom: 10px;">
                        <a target="_blank" href="/news/" class="fr s-c999">更多</a>
                        <h3 class="f22">最新品牌加盟新闻</h3>
                    </div>
                    @foreach($latesttypenews as $latesttypenew)
                        @if($loop->first)
                        <a target="_blank" href="/news/{{$latesttypenew->id}}.shtml" class="img-block magnify magnify-txt h213 mt15"><img src="{{$latesttypenew->litpic}}" alt="{{$latesttypenew->title}}">
                            <div class="img-bg"></div>
                            <p>{{$latesttypenew->title}} </p>
                        </a>
                        @endif
                    @endforeach

                    <ul class="tw-list tw-list-h80 mt5">
                        @foreach($latesttypenews as $latesttypenew)
                            @if(!$loop->first)
                            <li><a target="_blank" href="/news/{{$latesttypenew->id}}.shtml" class="img-block magnify"><img @if($latesttypenew->litpic) src="{{$latesttypenew->litpic}}" alt="{{$latesttypenew->tite}}" @else src="/public/images/noimg.jpg" @endif /></a>
                                <p class="f16"><a target="_blank" href="/news/{{$latesttypenew->id}}.shtml">{{$latesttypenew->title}}</a></p>
                                <p class="f14 s-8c">{{$latesttypenew->created_at}}</p>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>
@stop