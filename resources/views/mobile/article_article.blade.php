@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}} @stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></span>
    </div>
    <div id="ar_content">
        <div class="detail-tit">
            <h1>{{$thisarticleinfos->title}}</h1>
            <div class="titstyle">
                <span>来源：{{config('app.indexname')}}</span> <span>时间：{{$thisarticleinfos->created_at}}</span>
            </div>
            @if(isset($thisarticlebrandinfos))
                <div class="item-detail-add fixed"> <a href="/xm/{{$thisarticlebrandinfos->id}}.shtml" class="img"> <img src="{{$thisarticlebrandinfos->litpic}}"></a>
                    <div class="item-detail-con">
                        <p class="title"><a href="/xm/{{$thisarticlebrandinfos->id}}.shtml">{{$thisarticlebrandinfos->brandname}}</a></p>
                        <div class="con clearfix"><span class="money">{{$thisarticlebrandinfos->brandattch}}</span><span>人意向加盟</span></div>
                    </div>
                    <div class="btn jm-popup" data-role="#item5"><a href="#item5" rel="nofollow">获取资料</a></div>
                </div>
            @endif
        </div>
        <div class="detail-text detail-zs-text">
            {!! $thisarticleinfos->body !!}
        </div>
    </div>
    @include('mobile.liuyan')
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
                @foreach($latestbrandnews as $latestbrandnew)
                    <div class="item7list">
                        <a href="/news/{{$latestbrandnew->id}}.shtml">
                            <div class="left fl">
                                <div class="lefttitle">{{$latestbrandnew->title}}</div>
                                <div class="text">
                                    <div class="message">来源：{{config('app.indexname')}}</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <img src="{{$latestbrandnew->litpic}}" alt="{{$latestbrandnew->title}}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop