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
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" href="/frontend/css/index.css" />
    <link rel="stylesheet" href="/frontend/css/article.css" />
    <link rel="stylesheet" href="/frontend/css/brand_article.css" />
@stop
@section('main_content')
    <div style="background-color: #f5f5f5;">
    <div class="w1200">
        <div class="path"><p>当前位置：<a href="/">首页</a>&gt; <a class="dq" href="{{config('app.url')}}/{{$thisbrandtypeinfo->real_path}}/" title="{{$thisbrandtypeinfo->typename}}">{{$thisbrandtypeinfo->typename}}</a></p></div>
        <div class="clearfix">
           @include('frontend.brand_info')
            <div class="fl w870 brand_left">
                <div class="clear"></div>
                <div class="nv-stair">
                    <h2 class="cur">品牌介绍</h2>
                    <h2 class="">品牌展示</h2>
                    <h2 class="">投资分析</h2>
                    <h2 class="">项目咨询</h2>
                    <h2 class="">品牌资讯</h2>
                    <h2 class="">项目点评</h2>
                </div>
                <div class="clearfix">
                    <div class="brand_content">
                        <div class="stair-wz stair-wz_new">
                            {{$thisarticleinfos->brandname}}——{{str_limit($thisarticleinfos->brandpsp,64,'')}}
                        </div>
                        <div class="det-jies">
                         {!! $thisarticleinfos->body !!}
                        </div>
                        <div class="stair-wz stair-wz_new">
                            {{$thisarticleinfos->brandname}}<b class="s-oe">品牌展示</b>
                        </div>
                        <div class=" join_img">
                            <ul>
                                @foreach(array_filter(explode(',',$thisarticleinfos->imagepics)) as $index=>$pic)
                                <li> <a href="{{$pic}}" data-fancybox="gallery" data-caption="{{$thisarticleinfos->brandname}}面信息展示{{$index}}"><img width="140" height="105" src="{{$pic}}" alt="{{$thisarticleinfos->brandname}}" style="border-radius: 5px;"></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="stair-wz stair-wz_new">
                            {{$thisarticleinfos->brandname}}<b class="s-oe">运营综合分析</b>
                        </div>
                        <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                            <tbody>
                            <tr>
                                <td class="td_color" >品牌名称</td>
                                <td class="td_style">{{$thisarticleinfos->brandname}}</td>
                                <td class="td_color">装修费用</td>
                                <td class="td_style">{{$thisarticleinfos->decorationpay}}</td>
                            </tr>
                            <tr>
                                <td class="td_color" >前两季度房租</td>
                                <td class="td_style">{{$thisarticleinfos->quartersrent}}</td>
                                <td class="td_color">教材/设备费用</td>
                                <td class="td_style">{{$thisarticleinfos->equipmentcost}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">流动资金</td>
                                <td class="td_style">{{$thisarticleinfos->workingcapital}}</td>
                                <td class="td_color">人工开支</td>
                                <td class="td_style">{{$thisarticleinfos->laborquarter}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">工商税务杂项</td>
                                <td class="td_style">{{$thisarticleinfos->miscellaneous}}</td>
                                <td class="td_color">水电(元/月)</td>
                                <td class="td_style">{{$thisarticleinfos->watercoal}}</td>

                            </tr>
                            <tr>
                                <td class="td_color">月收入</td>
                                <td class="td_style">{{ceil(($thisarticleinfos->dailyvolume*$thisarticleinfos->dailyvolume)-(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30)))*30/10000}}万</td>
                                <td class="td_color">年收入</td>
                                <td class="td_style">{{ceil(($thisarticleinfos->dailyvolume*$thisarticleinfos->dailyvolume)-(($thisarticleinfos->decorationpay/365)+($thisarticleinfos->quartersrent/180)+($thisarticleinfos->equipmentcost/365)+($thisarticleinfos->laborquarter/365)+($thisarticleinfos->miscellaneous/365)+($thisarticleinfos->watercoal/30)))*365/10000}}万</td>
                            </tr>
                            </tbody>
                        </table>
                        @include('frontend.liuyan')
                        <div class="xg_news stair-wz_new">
                            <div class="title"><strong> {{$thisarticleinfos->brandname}}加盟资讯</strong></div>
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

            </div>
            <div class="fr w320">
                <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                    <div class="lh24">
                        <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                        <h3 class="f22">{{$thisbrandtypeinfo->typename}}热门加盟项目</h3>
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
                        <h3>{{$thisbrandtypeinfo->typename}}排行榜</h3>
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
                        <h3 class="f22">最新入驻品牌</h3>
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
                                <div class="img-bg">
                                </div>
                                <p> {{$latesttypenew->title}}</p>
                            </a>
                        @endif
                    @endforeach
                    <ul class="tw-list tw-list-h80 mt5">
                        @foreach($latesttypenews as $latesttypenew)
                        <li><a target="_blank" href="/news/{{$latesttypenew->id}}.shtml" class="img-block magnify"><img src="{{$latesttypenew->litpic}}" alt="{{$latesttypenew->title}}"></a>
                            <p class="f16"><a target="_blank" href="/news/{{$latesttypenew->id}}.shtml">{{$latesttypenew->title}}</a></p>
                            <p class="f14 s-8c">{{$latesttypenew->created_at}}</p>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
    </div>
@stop
@section('footlibs')
    <script type="text/javascript" src="/frontend/js/count.js"></script>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        var slideFlag=true;
        var clickFlag=true;

        $(".ico-quoted").click(function(){
            $(".calculator_popup_mask,.calculator_popup").show();
            clickFlag=false;
        });

        //关闭弹窗
        $("#calculator_popup_close").click(function(){
            $(".calculator_popup_mask,.calculator_popup").hide();
            clickFlag=true;
        });

    </script>
@stop