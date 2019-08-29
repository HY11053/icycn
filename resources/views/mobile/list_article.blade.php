@extends('mobile.mobile')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')


@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></span>
    </div>
    <div class="bg-fff mt10 pb20">
        <div class="f18 tc fw6 ptb20 borb1">
            {{$thistypeinfo->typename}}
        </div>
        <ul class="restaurant-list">
            @foreach($pagelists as $pagelist)
                <li>
                    <a href="/news/{{$pagelist->id}}.shtml">
                        <div class="pic"><img src="{{$pagelist->litpic}}" /></div>
                        <div class="tit">{{$pagelist->title}}</div>
                        <div class="ovh mt10">
                            <span class="tag">{{$thistypeinfo->typename}}</span>
                            <span class="time">{{$pagelist->created_at}}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="item8content">
                @foreach($latestbrands as $latestbrand)
                <div class="item8list  @if(($loop->iteration)%2==0) fr @else fl @endif">
                    <a href="/xm/{{$latestbrand->id}}.shtml">
                        <img src="{{$latestbrand->litpic}}" alt="{{$latestbrand->brandname}}">
                        <div class="item8listcontent">
                            <div class="listtitle">{{$latestbrand->brandname}}</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">￥{{$latestbrand->brandpay}}
                            </div>
                            <div class="textright fr">

                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($latestnews as $latestnew)
                <div class="item7list">
                    <a href="/news/{{$latestnew->id}}.shtml">
                        <div class="left fl">
                            <div class="lefttitle">{{$latestnew->title}}</div>
                            <div class="text">
                                <div class="message">来源：{{config('app.indexname')}}</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$latestnew->litpic}}" alt="{{$latestnew->title}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@stop