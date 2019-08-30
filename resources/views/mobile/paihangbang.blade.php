@extends('mobile.mobile')
@section('title'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜_{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行榜-{{config('app.indexname')}}@stop
@section('keywords'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜,{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行榜,{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行@stop
@section('description')世纪母婴网为您全方位解读{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌排行信息。分享{{str_replace('加盟','',$thistypeinfo->typename)}}门店信息，{{str_replace('加盟','',$thistypeinfo->typename)}}排行榜分类提供性价比最高{{str_replace('加盟','',$thistypeinfo->typename)}}品牌加盟排行榜信息，供你快速的选择适合自己的{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&gt;<a class="dq" href="/paihangbang/" title="品牌排行榜">品牌排行榜</a></span>
    </div>
    <div class="bg-fff mt10 pt20">
        <div class="tc">
            <span class="title-ribbon">{{$thistypeinfo->typename}}品牌排行榜</span>
        </div>
        <div class="mt10 catering-tab-box">
            <div class="tab-box-flex"></div>
            <div>
                <ul class="catering-list ">
                    @foreach($paihangbrands as $paihangbrand)
                        <li><a href="/xm/{{$paihangbrand->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$paihangbrand->id}}.shtml" class="pic"><img src="{{$paihangbrand->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$paihangbrand->id}}.shtml">{{$paihangbrand->brandname}}</a>
                            </div><p class="fee">投资金额：{{$paihangbrand->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$paihangbrand->description}}……
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