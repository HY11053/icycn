@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('header_libs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <link rel="stylesheet" type="text/css" href="/receptions/css/news.css"/>
@stop
@section('main_content')
    <div class="main">
        <div class="bn1190"><img src="/receptions/images/temp/bn8.jpg" alt=""></div>
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></div>
        <div class="main clearfix">
            <div class="center_list clearfix">
                <div class="news_center">

                    <div class="ww_330">
                        @foreach($pagelists as $pagelist)
                        <dl>
                            <dt><a href="/news/{{$pagelist->id}}.shtml" target="_blank"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}"></a></dt>
                            <dd class="tit"><a href="/news/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">{{$pagelist->title}}</a> </dd>
                            <dd class="desc">{{$pagelist->description}} </dd>
                            <dd class="date">发布于：<span>{{$pagelist->created_at}} </span> <a href="/news/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}">阅读全文&gt;&gt;</a></dd>
                        </dl>
                       @endforeach
                    </div>
                    <div class="page">
                        {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                    </div>
                </div>
                <div class="new_right">
                    <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                        <div class="lh24">
                            <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                            <h3 class="f22">幼儿园加盟热门加盟项目</h3>
                        </div>
                        <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                            @foreach($abrandlists as $abrandlist)
                            <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/xm/{{$abrandlist->id}}.shtml" class="img-block">
                                    <img src="{{$abrandlist->litpic}}" alt=" {{$abrandlist->brandname}}">
                                    <div class="img-bg"></div>
                                    <p>{{$abrandlist->brandname}}</p>
                                </a>
                            </dd>
                            @endforeach
                            <div class="clear"></div>
                        </dl>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 母婴店加盟排行榜 </h3>
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
                        <h3> <i></i> 最新加盟项目 </h3>
                        <div class="bt_xiangmu">
                            <ul>
                                @foreach($latestbrands as $latestbrand)
                                <li> <a href="/xm/{{$latestbrand->id}}.shtml">{{$latestbrand->brandname}}</a> </li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新资讯 </h3>
                        <div class="bts com_news">
                            <div class="common">
                                <ul>
                                    @foreach($latestnews as $latestnew)
                                    <li><a href="/news/{{$latestnew->id}}.shtml" target="_blank" title="{{$latestnew->title}}">{{$latestnew->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ff p20">
                        <div class="lh24">
                            <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                            <h3 class="f22">热门加盟项目</h3>
                        </div>
                        <ul class="join-project mt30">
                            @foreach($typeabrandlists as $typeabrandlist)
                                <li>
                                    <a target="_blank" href="/xm/{{$typeabrandlist->id}}.shtml" class="img-block magnify"><img src="{{$typeabrandlist->litpic}}" alt="{{$typeabrandlist->typename}}"></a>
                                    <p class="f16"><a target="_blank" href="/xm/{{$typeabrandlist->id}}.shtml">{{$typeabrandlist->typename}}</a></p>
                                    <p class="f14">投资金额：<span class="s-oe">{{$typeabrandlist->brandpay}}</span></p>
                                    <p class="f14">加盟门店数：<span class="s-oe">{{$typeabrandlist->brandnum}}</span></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
