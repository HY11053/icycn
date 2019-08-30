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
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" type="text/css" href="/receptions/css/news.css"/>
@stop
@section('main_content')
    <div class="main">
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a></div>
        <div class="main clearfix">
            <div class="layout2">
                <div class="brand_slide">
                    <ul class="bigImg" style="position: relative; width: 296px; height: 295px;">
                        @foreach(array_filter(explode(',',$thisarticleinfos->imagepics)) as $pic)
                            <li><img src="{{$pic}}" alt="【{{$thisarticleinfos->brandname}}】"></li>
                        @endforeach
                    </ul>
                    <div class="smallScroll"><a class="sPrev prevStop" href="javascript:void(0)"></a>
                        <div class="smallImg">
                            <ul>
                                @foreach(explode(',',$thisarticleinfos->imagepics) as $pic)
                                <li class=""><img src="{{$pic}}" alt="【{{$thisarticleinfos->brandname}}】"></li>
                                @endforeach
                            </ul>
                        </div>
                        <a class="sNext nextStop" href="javascript:void(0)"></a> </div>
                </div>

                <div class="info">
                    <h1 class="tit">【{{$thisarticleinfos->brandname}}】</h1>
                    <div class="detail">
                        <ul>
                            <li>投资金额：<span class="price">{{$thisarticleinfos->brandpay}}</span></li>
                            <li>所属行业：<span class="crumbs">{{$thisbrandtypeinfo->typename}}</span></li>
                        </ul>
                    </div>
                    <div class="tit_pice">
                        <ul>
                            <li>成立时间：<span class="price">{{$thisarticleinfos->brandtime}}</span></li>
                            <li>门店总数：<span class="price">{{$thisarticleinfos->brandnum}}</span></li>
                            <li>加盟区域：<span class="price">{{$thisarticleinfos->brandarea}}</span></li>
                            <li>适合人群：<span class="price">{{$thisarticleinfos->brandperson}}</span></li>
                            <li>经营范围：<span class="price">{{$thisarticleinfos->brandmap}}</span></li>
                            <li>店铺面积：<span class="price">60㎡</span></li>
                        </ul>
                    </div>
                    <div class="jiem">
                        <ul>
                            <li>意向加盟 <span class="price">{{$thisarticleinfos->brandattch}}</span></li>
                            <li style=" margin-left:35px">申请加盟：<span class="price">{{$thisarticleinfos->brandapply}}</span></li>
                            <li style=" margin-left:35px">品牌好评率 <span class="price">{{rand(90,99)}}%</span></li>
                        </ul>
                    </div>
                    <div class="tel">联系电话：<span>400-885-8878</span></div>
                    <div class="btn_area"> <a id="chatNowButton" href="#msg" class="zixun_btn">立即咨询</a> <a href="javascript:;" class="suoyao_btn ico-quoted">成本预算</a> </div>
                </div>
                <div class="layout2_right fl">
                    <div class="comp_box">
                        <div class="comp_info"> <b>公司信息</b>
                            <div class="comp_logo"> <img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->brandname}}"></div>
                            <div class="comp_info_con">
                                <h3 title="{{$thisarticleinfos->brandgroup}}">{{$thisarticleinfos->brandgroup}}</h3>
                                <ul>
                                    <li><span>企业性质</span><em>{{$thisarticleinfos->genre}}</em></li>
                                    <li><span>注册资金</span><em>{{$thisarticleinfos->registeredcapital}}</em></li>
                                    <li><span>所在地</span><em>{{$thisarticleinfos->brandarea}}</em></li>
                                    <li><span>地址</span><em>{{$thisarticleinfos->brandaddr}}</em></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comp_fenx">
                        <div class="renZ_info">
                            <ul>
                                <li class="mr15"><span class="beian1"> </span><em>备案企业</em></li>
                                <li class="mr15"><span class="renzheng1"></span><em>企业认证</em></li>
                                <li><span class="baozhang1"></span><em>投资保障</em></li>
                            </ul>
                        </div>
                        <div class="fx">
                            <div class="fxd">分享到：</div>
                            <div class="bdsharebuttonbox bdshare-button-style1-16" data-tag="share_1" data-bd-bind="1566882717164">
                                <a href="#" class="bds_qzone1" data-cmd="tsina" title="分享到QQ空间"></a>
                                <a href="#" class="bds_tsina1" data-cmd="qzone" title="分享到新浪微博"></a>
                                <a href="#" class="bds_weixin1" data-cmd="weixin" title="分享到微信"></a>
                            </div>
                            <script>
                                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center_list clearfix">
                <div class="news_box">
                    <div class="w870">
                        <div class="fixed_nav">
                            <div class="cont_tab">
                                <ul>
                                    <li class="js_join"><a href="javaScript:void(0)" rel="nofollow">品牌介绍</a></li>
                                    @foreach($navlists as $index=>$navlist)
                                        @if(!$loop->last)
                                            <li class="js_join"><a href="javaScript:void(0)" rel="nofollow">{{$navlist}}</a></li>
                                        @else
                                            <li  class="noactive"><a href="#msg" rel="nofollow">在线留言</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news_center">

                        <div class="join_cont">
                            <div class="join_intro">
                                <h2>{{$thisarticleinfos->brandname}}品牌介绍</h2>
                                {!! $content !!}
                            </div>
                            <div class="join_tit"> <h2 class="tit">【{{$thisarticleinfos->brandname}}】<em>品牌展示</em></h2> </div>
                            <div class=" join_img">
                                <ul>
                                    @foreach(explode(',',$thisarticleinfos->imagepics) as $pic)
                                    <li><img src="{{$pic}}" alt="【{{$thisarticleinfos->brandname}}】" style="border-radius: 5px;"></li>
                                   @endforeach
                                </ul>
                            </div>
                            <div class="cy_img"><img src="/receptions/images/cye_03.jpg" alt="加盟步骤" style="border-radius: 5px;"> </div>
                            <div class="xg_news">
                                <div class="title"><strong>{{$thisarticleinfos->brandname}}资讯</strong></div>
                                <div class="xw">
                                    <ul class="clearfix">
                                        @foreach($latestbrandnews as $latestbrandnew)
                                        <li><em>{{date('Y-m-d',strtotime($latestbrandnew->created_at))}}</em><a href="/news/{{$latestbrandnew->id}}.shtml" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @include('frontend.liuyan')
                        </div>
                    </div>
                </div>
                <div class="new_right">
                    <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                        <div class="lh24">
                            <h3 class="f22">{{str_replace('加盟','',$thisbrandtypeinfo->typename)}}加盟项目</h3>
                        </div>

                        <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                            @foreach($abrandlists as $abrandlist)
                            <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/xm/{{$abrandlist->id}}.shtml" class="img-block">
                                    <img src="{{$abrandlist->litpic}}" alt="{{$abrandlist->brandname}}">
                                    <div class="img-bg"></div>
                                    <p>{{$abrandlist->brandname}}</p>
                                </a>
                            </dd>
                            @endforeach
                            <div class="clear"></div>
                        </dl>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> {{str_replace('加盟','',$thisbrandtypeinfo->typename)}}加盟排行榜 </h3>
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
                        <h3> <i></i> 最新{{str_replace('加盟','',$thisbrandtypeinfo->typename)}}加盟项目 </h3>
                        <div class="bt_xiangmu">
                            <ul>
                                @foreach($latestbrands as $latestbrand)
                                    <li> <a href="/xm/{{$latestbrand->id}}.shtml">{{$latestbrand->brandname}}</a> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新{{str_replace('加盟','',$thisbrandtypeinfo->typename)}}新闻 </h3>
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
                            <h3 class="f22">{{str_replace('加盟','',$thisbrandtypeinfo->typename)}}热门加盟项目</h3>
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
@section('footerlibs')
    <script>
        $(".cont_tab ul li.js_join").each(function(i){
            $(this).click(
                function () {
                    var sTop=$(".join_intro").find("h2:eq("+i+")").offset().top-45;
                    $('html,body').animate({scrollTop:sTop+"px"},500);
                }
            );
        });
    </script>
@stop