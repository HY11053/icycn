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
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></div>
        <!--主体开始-->
        <div class="main clearfix">
            <!--左侧开始-->
            <div class="about_l">
                <div class="hd"></div>
                <div class="bd">
                    <ul>
                        @foreach($indexartopnavs as $indexartopnav)
                        <li @if(Request::getrequesturi() =='/'.$indexartopnav->real_path.'/')class="cur" @endif ><a href="/{{$indexartopnav->real_path}}/" >{{$indexartopnav->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--左侧结束-->

            <!--右侧开始-->
            <div class="about_r">
                <div class="hd">{{$thistypeinfo->typename}}</div>
                <div class="bd">
                    <div class="about_law">
                        {!! $thistypeinfo->contents !!}
                    </div>
                </div>
            </div>
            <!--右侧结束-->
        </div>
        <!--主体结束-->
    </div>
@stop
