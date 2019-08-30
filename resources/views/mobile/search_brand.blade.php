@extends('mobile.mobile')
@section('title')品牌搜索页面-世纪母婴网@stop
@section('keywords')品牌搜索页面 @stop
@section('description')品牌搜索页面@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;&gt;&nbsp; 品牌搜索页</span>
    </div>
    <div class="bg-fff mt10 pt20">
        <div class="tc">
            <span class="title-ribbon">共找到{{$pagelists->total()}}个结果</span>
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
@stop