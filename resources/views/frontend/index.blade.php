@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('header_libs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:image" content="{{config('app.url')}}/receptions/images/logo.jpg"/>
    <link href="/receptions/css/jquery.selectlist.css" rel="stylesheet" type="text/css" />
    <link href="/receptions/css/swiper.min.css" rel="stylesheet" type="text/css" />
@stop
@section('sub_nav')
    <div class="sub_nav">
        <dl>
            <dt class="icon1"><a href="/muying/" target="_blank">母婴店加盟</a></dt>
            @foreach($muyingnavlists as $muyingnavlist)
            <dd><a href="/xm/{{$muyingnavlist->id}}.shtml" target="_blank" title="{{$muyingnavlist->brandname}}">{{$muyingnavlist->brandname}}</a></dd>
            @endforeach
        </dl>
        <dl class="dl_wid1">
            <dt class="icon2"><a href="/muyingshg/" target="_blank" >母婴生活馆加盟</a></dt>
            @foreach($muyingshgnavlists as $muyingshgnavlist)
                <dd><a href="/xm/{{$muyingshgnavlist->id}}.shtml" target="_blank" title="{{$muyingshgnavlist->brandname}}">{{$muyingshgnavlist->brandname}}</a></dd>
            @endforeach
        </dl>
        <dl class="dl_wid1">
            <dt class="icon3"><a href="/muyingp/" target="_blank">母婴用品加盟</a></dt>
            @foreach($muyingypnavlists as $muyingypnavlist)
                <dd><a href="/xm/{{$muyingypnavlist->id}}.shtml" target="_blank" title="{{$muyingypnavlist->brandname}}">{{$muyingypnavlist->brandname}}</a></dd>
            @endforeach
        </dl>
    </div>
@stop
@section('main_content')
    <div class="main">
        <section>
            <div class="index_box1 clearfix">
                <div class="index_box1_l">
                    <div class="search_db">
                        <div class="hd">项目查找</div>
                        <div class="bd">
                            <form onsubmit="return false">
                                <input type="hidden" name="_token" value="KESR5bff18w9GW9v6YS0PZIFbyTgQqyHnyC8gOvQ">
                                <div class="select_mod">
                                    <div class="clearfix">
                                        <p>
                                    <span class="cont">
                                      <select name="select1" id="select1" class="select_bk">
                                        <option selected="selected" value="0">行业分类</option>
                                        <option value="1">母婴店</option>
                                        <option value="3">母婴生活馆</option>
                                        <option value="4">母婴产品代理</option>
                                      </select>
                                    </span>
                                        </p>
                                        <p>
                                    <span class="cont">
                                      <select name="select2" id="select2" class="select_bk">
                                        <option selected="selected" value="0">投资金额</option>
                                          @foreach($touziids as $touziid)
                                            <option>{{$investments[$touziid]}}</option>
                                          @endforeach
                                      </select>
                                    </span>
                                        </p>
                                        <p>
                                    <span class="cont">
                                      <select name="select3" id="select3" class="select_bk">
                                        <option selected="selected" value="0">店铺面积</option>
                                          @foreach($acreagements as $acreagement)
                                            <option>{{$acreagement}}</option>
                                        @endforeach
                                      </select>
                                    </span>
                                        </p>
                                        <p>
                                            <span class="cont"><input name="keywordValue" id="ppmc" class="input_bk" value="请输入文本" onfocus="if (value =='请输入文本'){value =''}" onblur="if (value ==''){value='请输入文本'}"></span>
                                        </p>
                                    </div>
                                    <p><input type="submit" width="126" height="35" id="sub_btn" class="btn" value="项目搜索"></p>

                                </div>
                            </form>
                            <div class="tit">投资金额：</div>
                            <div class="price">
                                @foreach($touziids as $touziid)
                                <a title="{{$investments[$touziid]}}项目" href="/filter/p{{$touziid}}/">{{$investments[$touziid]}}</a>
                                @endforeach
                            </div>
                            <div class="tit">面积：</div>
                            <div class="area">
                                @foreach($acreagements as $index=>$acreagement)
                                <a title="{{$acreagement}}" href="/filter/m{{$index}}/">{{$acreagement}}㎡</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jm-index clearfix">
                    <div class="fl">
                        <div class="carousel carousel-bar1">
                            <div class="ovh swiper-container">
                                <ul class="ban-ul swiper-wrapper">
                                    <a target="_blank" href="/xm/112.shtml" class="item img-block swiper-slide"><img src="http://www.jjedu.com.cn/frontend/images/yidiandianad.jpg" alt="聚能教育"></a>
                                    <a target="_blank" href="/xm/1764.shtml" class="item img-block swiper-slide"><img src="http://www.jjedu.com.cn/frontend/images/feiyu.jpg" alt="鲱鱼宝宝加盟"></a>
                                    <a target="_blank" href="/xm/204.shtml" class="item img-block swiper-slide"><img src="http://www.jjedu.com.cn/frontend/images/aebed277ee964c94bfeaa080c0e0c64a.jpg" alt="UBTV小主播"></a>
                                </ul>
                            </div>
                            <div class="dot">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        @foreach($cbrands as $cbrand)
                        <dl class="fl char-type char-type-h172  mt20">
                             <dd class="magnify  @if(!$loop->last) mr20  @endif ">
                                <a target="_blank" href="/xm/{{$cbrand->id}}.shtml" class="img-block magnify"><img src="{{$cbrand->litpic}}" alt="" style="width:170px;height:170px">
                                    <div class="txt">
                                        <p class="f18">{{$cbrand->brandname}}</p>
                                        <p class="f14">{{str_limit($cbrand->description,33,'...')}}</p>
                                    </div>
                                </a>
                            </dd>
                        </dl>
                        @endforeach
                    </div>
                    <div class="fr xm-qingxian">
                        <h2>最新入驻品牌</h2>
                        <div class="carousel xm-carousel">
                            <div class="ovh swiper-container">
                                <ul class="ban-ul swiper-wrapper">
                                    @foreach($latestbrands as $latestbrand)
                                    <li class="item swiper-slide">
                                        <div style="padding:0 20px">
                                            <img src="{{$latestbrand->litpic}}" width="190" height="190">
                                            <p class="f16"> {{$latestbrand->brandname}}</p>
                                            <p class="f14">
                                                投资金额：<b class="s-oe">{{$latestbrand->brandpay}}</b>
                                            </p>
                                            <p class="h72">{{$latestbrand->description}}</p>
                                            <div class="btn-bar">
                                                <a target="_blank" href="/xm/{{$latestbrand->id}}.shtml" class="btn btn-oe-line fl">详细考察</a><a href="javascript:void(0);" class="btn btn-oe fr btn-wyzx">我要咨询</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="dot">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="fine navhotbox">
                <div class="conta">
                    <div class="clearfix">
                        <div class="fine-left f-l">
                            <div class="fine-left-top clearfix">
                                <h4 class="f-l">热门母婴品牌推荐</h4>
                                <ul class="f-li clearfix f-r" data-id="pc_jptj" data-type="cmsadpos">
                                    @foreach($hotbrands as $hotbrand)
                                     <li><a href="/xm//{{$hotbrand->id}}.shtml" target="_blank">{{$hotbrand->brandname}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="fine-left-bottom clearfix">
                                <div class="fine-left-bottomL f-l">
                                    <ul class="f-li clearfix" data-id="pc_a02_1" data-type="cmsadpos">
                                        @foreach($lefthotbrands as $lefthotbrand)
                                            @if($loop->first)
                                            <li class="li-first" style="position: relative;"><a target="_blank" href="/xm/{{$lefthotbrand->id}}.shtml"><img width="260" height="242" alt="{{$lefthotbrand->brandname}}" src="{{$lefthotbrand->litpic}}" style=""></a></li>
                                            @else
                                            <li><a target="_blank" href="/xm/{{$lefthotbrand->id}}.shtml"><img alt="{{$lefthotbrand->brandname}}" src="{{$lefthotbrand->litpic}}" style=""></a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="fine-left-bottomR f-r">
                                    <ul class="f-li clearfix" data-id="pc_a03_1" data-type="cmsadpos">
                                        @foreach($sbrands as $sbrand)
                                        <li>
                                            <a target="_blank" href="/xm/{{$sbrand->id}}.shtml"><img width="174" height="140" alt="" src="{{$sbrand->indexpic}}"></a>
                                            <p>品牌名称：<span>{{$sbrand->brandname}}</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">{{$sbrand->brandpay}}</span><a target="_blank" href="/xm/{{$sbrand->id}}.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advment" data-id="pc_image1" data-type="cmsadpos">
                        <a href="/xm/112.shtml" title="聚能教育品牌广告" data-id="1181" data-type="cmsad" target="_blank"> <img class="lazy" width="1200" height="110" alt="聚能教育品牌广告" src="http://www.jjedu.com.cn/frontend/images/adjuneng.png"></a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="fine navhotbox">
                <div class="conta">
                    <div class="clearfix">
                        <div class="fine-left f-l">
                            <div class="fine-left-top clearfix">
                                <h4 class="f-l">母婴分类品牌汇总</h4>
                                <ul class="f-li clearfix f-r" data-id="pc_jptj" data-type="cmsadpos">
                                    @foreach($brandtypes as $brandtype)
                                    <li><a href="/{{$brandtype->real_path}}/" target="_blank">{{$brandtype->typename}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <section>
                            <div class="index_box3 clearfix">
                                <div class="index_box3_l">
                                    <div class="img_show"><a href="/muying/" target="_blank"><img src="/receptions/images/index_pic1.jpg" title="零食店品牌" alt="零食店加盟"/></a></div>
                                    <p class="tit"><a href="/muying/" target="_blank">母婴店加盟</a></p>
                                    <p class="desc">百城千店 有实力更有保障</p>
                                    <p class="more"><a href="/muying/" target="_blank" title="母婴店加盟">查看详情&gt;</a></p>
                                </div>
                                <div class="index_box3_r" id="index_box3s_r">
                                    <div class="hd">
                                        <span class="tit">母婴店品牌</span>
                                        <span class="desc">造就母婴精品 一站式关键服务 创业无忧</span>
                                        <span class="more"><a href="/muying/" target="_blank">更多&gt;&gt;</a></span>
                                    </div>
                                    <div class="bd">
                                        <div class="bd_l">
                                            <dl>
                                                @foreach($latestmuyingbrands as $index=>$latestmuyingbrand)
                                                    @if($index<9)
                                                    <dd><a href="/xm/{{$latestmuyingbrand->id}}.shtml" title="{{$latestmuyingbrand->brandname}}" target="_blank">{{$latestmuyingbrand->brandname}}</a></dd>
                                                    @endif
                                                @endforeach
                                            </dl>
                                            <dl>
                                                @foreach($latestmuyingbrands as $index=>$latestmuyingbrand)
                                                    @if($index>8 && $index<18)
                                                        <dd><a href="/xm/{{$latestmuyingbrand->id}}.shtml" title="{{$latestmuyingbrand->brandname}}" target="_blank">{{$latestmuyingbrand->brandname}}</a></dd>
                                                    @endif
                                                @endforeach
                                            </dl>
                                            <dl>
                                                @foreach($latestmuyingbrands as $index=>$latestmuyingbrand)
                                                    @if($index>17 && $index<27)
                                                        <dd><a href="/xm/{{$latestmuyingbrand->id}}.shtml" title="{{$latestmuyingbrand->brandname}}" target="_blank">{{$latestmuyingbrand->brandname}}</a></dd>
                                                    @endif
                                                @endforeach
                                            </dl>
                                        </div>
                                        <div class="bd_r">
                                            <div class="index_txt_list_wrap">
                                                <div class="index_txt_list">
                                                    @foreach($latestrmuyingbrands as $index=>$latestrmuyingbrand)
                                                        @if($index%2 ==0)
                                                            <dl>
                                                            <dd><a href="/xm/{{$latestrmuyingbrand->id}}.shtml" title="{{$latestrmuyingbrand->brandname}}" target="_blank">{{$latestrmuyingbrand->brandname}}</a></dd>
                                                       @else
                                                                <dd><a href="/xm/{{$latestrmuyingbrand->id}}.shtml" title="{{$latestrmuyingbrand->brandname}}" target="_blank">{{$latestrmuyingbrand->brandname}}</a></dd>
                                                               </dl>
                                                    @endif
                                                    @if($loop->last && $index%2 ==0)</dl>@endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>
                            <section>
                                <div class="index_box3 clearfix">
                                    <div class="index_box3_l h420">
                                        <div class="img_show"><a href="/muyingshg/" target="_blank"><img src="/receptions/images/index_pic2.jpg" alt="母婴生活馆"/></a></div>
                                        <p class="tit"><a href="/muyingshg/" target="_blank">母婴生活馆</a></p>
                                        <p class="desc">全国连锁招商品牌母婴生活馆</p>
                                        <p class="more"><a href="/muyingshg/" target="_blank" title="母婴生活馆">查看详情&gt;</a></p>
                                    </div>
                                    <div class="index_box3_r">
                                        <div class="hd">
                                            <span class="tit">母婴生活馆</span>
                                            <span class="desc">打造婴童信赖平台 让开店更有保障</span>
                                            <span class="more"><a href="/muyingshg/" target="_blank" title="母婴生活馆">更多&gt;&gt;</a></span>
                                        </div>
                                        <div class="bd">
                                            <div class="bd_l">
                                                <dl>
                                                    @foreach($latestmuyingshgbrands as $index=>$latestmuyingshgbrand)
                                                        @if($index<9)
                                                            <dd><a href="/xm/{{$latestmuyingshgbrand->id}}.shtml" title="{{$latestmuyingshgbrand->brandname}}" target="_blank">{{$latestmuyingshgbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                                <dl>
                                                    @foreach($latestmuyingshgbrands as $index=>$latestmuyingshgbrand)
                                                        @if($index>8 && $index<18)
                                                            <dd><a href="/xm/{{$latestmuyingshgbrand->id}}.shtml" title="{{$latestmuyingshgbrand->brandname}}" target="_blank">{{$latestmuyingshgbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                                <dl>
                                                    @foreach($latestmuyingshgbrands as $index=>$latestmuyingshgbrand)
                                                        @if($index>17 && $index<27)
                                                            <dd><a href="/xm/{{$latestmuyingshgbrand->id}}.shtml" title="{{$latestmuyingshgbrand->brandname}}" target="_blank">{{$latestmuyingshgbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>

                                            </div>
                                            <div class="bd_r">
                                                <div class="index_brand_list">
                                                    <ul>
                                                        @foreach($latestrmuyingshgbrands as $latestrmuyingshgbrand)
                                                        <li><a href="/xm/{{$latestrmuyingshgbrand->id}}.shtml" target="_blank"><img src="{{$latestrmuyingshgbrand->litpic}}" title="{{$latestrmuyingshgbrand->brandname}}" alt="{{$latestrmuyingshgbrand->brandname}}"><span>{{$latestrmuyingshgbrand->brandname}}</span></a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="index_box3 clearfix">
                                    <div class="index_box3_l h420">
                                        <div class="img_show"><a href="/zhaoshang/" target="_blank"><img src="/receptions/images/index_pic3.jpg" alt="母婴品牌招商"/></a></div>
                                        <p class="tit"><a href="/zhaoshang/" target="_blank">母婴品牌招商</a></p>
                                        <p class="desc">全线母婴产品正品自由代理 </p>
                                        <p class="more"><a href="/zhaoshang/" target="_blank">查看详情&gt;</a></p>
                                    </div>
                                    <div class="index_box3_r">
                                        <div class="hd">
                                            <span class="tit">母婴品牌招商</span>
                                            <span class="desc">母婴工厂店 集中规模化采购 一站式低价代理</span>
                                            <span class="more"><a href="/zhaoshang/" target="_blank">更多&gt;&gt;</a></span>
                                        </div>
                                        <div class="bd">
                                            <div class="bd_l">
                                                <dl>
                                                    @foreach($latestzsbrands as $index=>$latestzsbrand)
                                                        @if($index<9)
                                                            <dd><a href="/xm/{{$latestzsbrand->id}}.shtml" title="{{$latestzsbrand->brandname}}" target="_blank">{{$latestzsbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                                <dl>
                                                    @foreach($latestzsbrands as $index=>$latestzsbrand)
                                                        @if($index>8 && $index<18)
                                                            <dd><a href="/xm/{{$latestzsbrand->id}}.shtml" title="{{$latestzsbrand->brandname}}" target="_blank">{{$latestzsbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                                <dl>
                                                    @foreach($latestzsbrands as $index=>$latestzsbrand)
                                                        @if($index>17 && $index<27)
                                                            <dd><a href="/xm/{{$latestzsbrand->id}}.shtml" title="{{$latestzsbrand->brandname}}" target="_blank">{{$latestzsbrand->brandname}}</a></dd>
                                                        @endif
                                                    @endforeach
                                                </dl>
                                            </div>
                                            <div class="bd_r">
                                                <div class="index_brand_list">
                                                    <ul>
                                                        @foreach($latestrzsbrands as $latestrzsbrand)
                                                            <li><a href="/xm/{{$latestrzsbrand->id}}.shtml" target="_blank"><img src="{{$latestrzsbrand->litpic}}" title="{{$latestrzsbrand->brandname}}" alt="{{$latestrzsbrand->brandname}}"><span>{{$latestrmuyingshgbrand->brandname}}</span></a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                          </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="bn">
            <ul>
                <li><a href="/lingshidianpp/91.shtml" target="_blank"><img src="/receptions/images/temp/bn1.jpg" /></a></li>
                <li><a href="/lingshidianpp/111.shtml" target="_blank"><img src="/receptions/images/temp/bn2.jpg" /></a></li>
            </ul>
        </div>

        <section>
            <div class="index_box4 clearfix">
                <div class="cont4_con fl">
                    <h2>品牌关注排行榜</h2>
                    <div class="con_fir">
                        <div class="fir_left">
                            @foreach($hbrands as $hbrand)
                            <div class="li_div"><a href="/xm/{{$hbrand->id}}.shtml" title="{{$hbrand->brandname}}" target="_blank"><img src="{{$hbrand->litpic}}"></a><span><a href="/xm/{{$hbrand->id}}.shtml" target="_blank">{{$hbrand->brandname}}</a><br><font color="#9c9c9c">{{$hbrand->brandattch}}人</font><em><a href="/xm/{{$hbrand->id}}" target="_blank">咨询</a></em></span></div>
                            @endforeach
                         </div>
                        <div class="fir_right">
                            <ul>
                                @foreach($hbrands as $hbrand)
                                <li>
                                    <div class="jg">￥{{$hbrand->brandpay}}</div>
                                    <div class="wz"><a href="/xm/{{$hbrand->id}}.shtml" title="{{$hbrand->brandname}}" target="_blank">{{$hbrand->brandname}}</a><br><span class="fl">行业：<font color="#666">{{$brandalltypes[$hbrand->typeid]}}</font></span><span class="fr">{{$hbrand->brandapply}}人咨询</span></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cont4_con fr">
                    <h2>加盟小百科</h2>
                    <div class="con_sec">
                        <ul>
                            @foreach($asknews as $index=>$asknew)
                                <li class=" @if($index==0) one @elseif($index==1)  two @elseif($index=2) three @else three @endif bor">
                                    <span><a href="/news/{{$asknew->id}}.shtml" title="{{$asknew->title}}" target="_blank">{{$asknew->title}}</a></span>
                                    <p> {{str_limit($asknew->description,60)}}...</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="index_box5">
                <div class="cont5_left">
                    <h2>品牌新闻</h2>
                    <div class="left_one">
                        <div class="one_top">
                            @foreach($latestnews as $index=>$latestnew)
                                @if($index<2)
                                <div class="li_d"> <a href="/news/{{$latestnew->id}}.shtml" title="{{$latestnew->title}}" target="_blank"><img src="{{$latestnew->litpic}}" alt="{{$latestnew->title}}"></a>
                                    <div class="d_wz">
                                        <h3><a href="/lingshizx/3120.shtml" target="_blank" title="{{$latestnew->title}}">{{$latestnew->title}}</a></h3>
                                        <p>{{str_limit($latestnew->description,90)}}...</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="one_cen">
                            <ul>
                                @foreach($latestnews as $index=>$latestnew)
                                    @if($index>1 && $index<8)
                                    <li><a href="/news/{{$latestnew->id}}.shtml" title="{{$latestnew->title}}" target="_blank">{{$latestnew->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="one_bot">
                            <dl>
                                <dt>品牌资讯</dt>
                                @foreach($latestnews as $index=>$latestnew)
                                    @if($index>7 && $index<14)
                                    <dd><a href="/news/{{$latestnew->id}}.shtml" target="_blank" title="{{$latestnew->title}}"><font color="#D71318">{{$latestnew->bdname}}</font>{{$latestnew->title}}</a></dd>
                                    @endif
                                @endforeach
                                </dl>
                        </div>
                    </div>
                    <div class="left_two">
                        <h4>加盟费用</h4>
                        <dl>
                            @foreach($jmfnews as $jmfnew)
                            <dd><span>{{date('Y-m-d',strtotime($jmfnew->created_at))}}</span><i class=" ye ">{{$loop->iteration}}.</i><a href="/news/{{$jmfnew->id}}.shtml" target="_blank" title="{{$jmfnew->title}}">{{$jmfnew->title}}</a></dd>
                            @endforeach
                        </dl>
                    </div>
                    <div class="left_two">
                        <h4>创业指导</h4>
                        <dl>
                            @foreach($cynews as $cynew)
                                @if($loop->first)
                                    <dt><a href="/news/{{$cynew->id}}.shtml" title="{{$cynew->title}}" target="_blank"><img src="{{$cynew->litpic}}"></a><span>{{$cynew->title}}【<a href="/news/{{$cynew->id}}.shtml" style="color:#D71318;" target="_blank">阅读</a>】</span></dt>
                                @else
                                    <dd><span>{{date('Y-m-d',strtotime($cynew->created_at))}}</span><a href="/news/{{$cynew->id}}.shtml" target="_blank" title="{{$cynew->title}}">{{$cynew->title}}</a></dd>
                                @endif
                            @endforeach
                        </dl>
                    </div>
                </div>
                <div class="cont5_right">
                    <h2>加盟投资分析</h2>
                    <div class="right_con">
                        <dl>
                            @foreach($touzinews as $touzinew)
                                @if($loop->first)
                                 <dt><a href="/news/{{$touzinew->id}}.shtml" title="{{$touzinew->title}}" target="_blank"><img src="{{$touzinew->litpic}}" alt="{{$touzinew->title}}" style="height: 85px; overflow: hidden"></a></dt>
                                @else
                                    <dd><a href="/news/{{$touzinew->id}}.shtml" title="{{$touzinew->title}}" target="_blank">{{$touzinew->title}}</a></dd>
                                @endif
                            @endforeach
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        <div class="bn">
            <ul>
                <li><a href="/lingshidianpp/53.shtml" target="_blank"><img src="/receptions/images/temp/bn3.jpg" /></a></li>
                <li><a href="//35.shtml" target="_blank"><img src="/receptions/images/temp/bn4.jpg" /></a></li>
            </ul>
        </div>

        <div class="friend_links">
            <span>友情链接：</span>
            @foreach($flinks as $flink)
                <a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a>
            @endforeach
        </div>
    </div>
@stop
@section('footerlibs')
    <script type="text/javascript" src="/receptions/js/jquery.selectlist.js"></script>
    <script type="text/javascript" src="/receptions/js/swiper.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".select_bk").selectlist({
                zIndex:10,
                width:139,
                height:32,
                triangleSize:6,
                triangleColor:'#D6D6D6'
            });
        })
    </script>
@stop