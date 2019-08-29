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
    <div class="bg-fff mt10 pt20">
        <div class="tc">
            <span class="title-ribbon">{{$thistypeinfo->typename}}</span>
        </div>
        <div class="mt10 catering-tab-box">
            <div class="tab-box-flex"></div>
            <div>
                <ul class="catering-list ">
                    @foreach($pagelists as $pagelist)
                        <li><a href="/xm/{{$pagelist->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$pagelist->id}}.shtml" class="pic"><img src="{{$pagelist->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$pagelist->id}}.shtml">{{$pagelist->brandname}}</a>
                            </div><p class="fee">投资金额：{{$pagelist->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$pagelist->description}}……
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($cnewslists as $cnewslist)
                <div class="item7list">
                    <a href="/news/{{$cnewslist->id}}.shtml">
                        <div class="left fl">
                            <div class="lefttitle">{{$cnewslist->title}}</div>
                            <div class="text">
                                <div class="message">来源 ：{{config('app.indexname')}}</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$cnewslist->litpic}}" alt="{{$cnewslist->title}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop