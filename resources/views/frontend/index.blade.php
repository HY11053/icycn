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
                                        <option value="1">零食店加盟</option>
                                        <option value="3">炒货加盟</option>
                                        <option value="4">干果加盟</option>
                                        <option value="5">进口零食加盟</option>
                                      </select>
                                    </span>
                                        </p>
                                        <p>
                                    <span class="cont">
                                      <select name="select2" id="select2" class="select_bk">
                                        <option selected="selected" value="0">投资金额</option>
                                        <option>1~5万</option>
                                        <option>5~10万</option>
                                        <option>10~20万</option>
                                        <option>20万~50万</option>
                                        <option>50~100万</option>
                                      </select>
                                    </span>
                                        </p>
                                        <p>
                                    <span class="cont">
                                      <select name="select3" id="select3" class="select_bk">
                                        <option selected="selected" value="0">店铺面积</option>
                                        <option>1~10平米</option>
                                        <option>10~30平米</option>
                                        <option>30~50平米</option>
                                        <option>50~80平米</option>
                                        <option>100平米以上</option>
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
                                <a title="1-5万元项目" href="/project/0-1~5-0-0.shtml">1-5万元</a>
                                <a title="5－10万元项目" href="/project/0-5~10-0-0.shtml">5-10万元</a>
                                <a title="10－20万元项目" href="/project/0-10~20-0-0.shtml">10-20万元</a>
                                <a title="20－50万元项目" href="/project/0-20~50-0-0.shtml">20-50万元</a>
                                <a title="50-100万元项目" href="/project/0-50~100-0-0.shtml">50-100万元</a>
                                <a title="100万元以上项目" href="/project/0-100-0-0.shtml">100万以上</a>
                            </div>
                            <div class="tit">面积：</div>
                            <div class="area">
                                <a title="10平以下" href="/project/0-0-1~10-0.shtml">10平以下</a>
                                <a title="10-30平米" href="/project/0-0-10~30-0.shtml">10-30平米</a>
                                <a title="30-80平米" href="/project/0-0-30~50-0.shtml">30-50平米</a>
                                <a title="80-150平米" href="/project/0-0-50~80-0.shtml">50-80平米</a>
                                <a title="150平以上" href="/project/0-0-100-0.shtml">100平以上</a>
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
                                        <li>
                                            <a target="_blank" href="/xm/467.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/2590d3c1b3b282c5a7a42ffd243f71d1.png" style=""></a>
                                            <p>品牌名称：<span>乐宁教育</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">20-30万</span><a target="_blank" href="/xm/467.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/105.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/08390eeacb9d64243f427258123e0c51.png" style=""></a>
                                            <p>品牌名称：<span>智康一对一</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">10-20万元</span><a target="_blank" href="/xm/105.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/315.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/a6af07d08d926fcf8f04e382e5e2d6b3.png" style=""></a>
                                            <p>品牌名称：<span>仁德国际教育</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">10-20万</span><a target="_blank" href="http://www.jjedu.com.cn/xm/315.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/214.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/9271590b2458478987322b74cecdd9d1.png" style=""></a>
                                            <p>品牌名称：<span>北大青鸟国际教育</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">36.5-48.46万</span><a target="_blank" href="/xm/214.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/131.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/4e0339412824c6992ab8224c2295c89f.png" style=""></a>
                                            <p>品牌名称：<span>北大青鸟IT教育</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">40.8-57.4万元</span><a target="_blank" href="/xm/131.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/466.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/e2a4e1e3b97bc7d01d5620506d0a31a7.png" style=""></a>
                                            <p>品牌名称：<span>韦博国际英语</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">30-40万</span><a target="_blank" href="/xm/466.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/210.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/89460657dbced1d1c8b74ec243255edc.png" style=""></a>
                                            <p>品牌名称：<span>大桥英语</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">22.75-36.87万元</span><a target="_blank" href="/xm/210.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/263.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/0607ebeaa6d81df8b65cc5c6fe6b9ea1.png" style=""></a>
                                            <p>品牌名称：<span>七色光幼儿园</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">100-400万元</span><a target="_blank" href="/xm/263.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/261.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/9fcfee07edcedc6fd64606a8b9fe2157.png" style=""></a>
                                            <p>品牌名称：<span>清华幼儿双语幼儿园</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">38.98-95.98万元</span><a target="_blank" href="/xm/261.shtml">了解详情</a>
                                            </p>
                                        </li>
                                        <li>
                                            <a target="_blank" href="/xm/204.shtml"><img width="174" height="140" alt="" src="http://www.jjedu.com.cn/storage/uploads/2018/11/21/2bf1367771de65f50f6d8cab4daa6947.png" style=""></a>
                                            <p>品牌名称：<span>优宝小主播</span></p>
                                            <p>
                                                <span>￥</span><span class="sq">63.3-121.2万</span><a target="_blank" href="/xm/204.shtml">了解详情</a>
                                            </p>
                                        </li>
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
                                <h4 class="f-l">精品推荐</h4>
                                <ul class="f-li clearfix f-r" data-id="pc_jptj" data-type="cmsadpos">
                                    <li><a href="/other/" target="_blank">其他</a></li>
                                    <li><a href="/wangxiao/" target="_blank">网校</a></li>
                                    <li><a href="/quannaokf/" target="_blank">全脑开发</a></li>
                                    <li><a href="/yinyuepeixun/" target="_blank">音乐培训</a></li>
                                    <li><a href="/taoyi/" target="_blank">手工陶艺</a></li>
                                    <li><a href="/taijiao/" target="_blank">胎教</a></li>
                                    <li><a href="/xm/" target="_blank">更多+</a></li>
                                </ul>
                            </div>
                            <section>
                            <div class="index_box3 clearfix">
                                <div class="index_box3_l">
                                    <div class="img_show"><a href="/lingshidianpp/" target="_blank"><img src="/receptions/images/index_pic1.jpg" title="零食店品牌" alt="零食店加盟"/></a></div>
                                    <p class="tit"><a href="/lingshidianpp/" target="_blank">零食店加盟</a></p>
                                    <p class="desc">精美零食 抢占商机</p>
                                    <p class="more"><a href="/lingshidianpp/" target="_blank" title="零食店品牌">查看详情&gt;</a></p>
                                </div>
                                <div class="index_box3_r" id="index_box3s_r">
                                    <div class="hd">
                                        <span class="tit">零食品牌</span>
                                        <span class="desc">精选全球好品牌、看得见的商机前景</span>
                                        <span class="more"><a href="/lingshidianpp/" target="_blank">更多&gt;&gt;</a></span>
                                    </div>
                                    <div class="bd">
                                        <div class="bd_l">

                                            <dl>
                                                <dd><a href="/lingshidianpp/4883.shtml" title="盛味佳加盟" target="_blank">盛味佳加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4879.shtml" title="甘源加盟" target="_blank">甘源加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4878.shtml" title="友臣加盟" target="_blank">友臣加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4877.shtml" title="可心零食店加盟" target="_blank">可心零食店加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4800.shtml" title="亚细亚加盟" target="_blank">亚细亚加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4787.shtml" title="一鱿未尽加盟" target="_blank">一鱿未尽加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4786.shtml" title="享之味加盟" target="_blank">享之味加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4785.shtml" title="一本零食加盟" target="_blank">一本零食加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4779.shtml" title="爱尚零食屋加盟" target="_blank">爱尚零食屋加盟</a></dd>

                                            </dl>
                                            <dl>
                                                <dd><a href="/lingshidianpp/4777.shtml" title="嘟嘟乐干果加盟" target="_blank">嘟嘟乐干果加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4776.shtml" title="艾比利加盟" target="_blank">艾比利加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4775.shtml" title="比锦味小站加盟" target="_blank">比锦味小站加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4774.shtml" title="禧福堂加盟" target="_blank">禧福堂加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4773.shtml" title="源屋曲加盟" target="_blank">源屋曲加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4772.shtml" title="畅选加盟" target="_blank">畅选加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4771.shtml" title="酷帕滋加盟" target="_blank">酷帕滋加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4770.shtml" title="宫颐府加盟" target="_blank">宫颐府加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4764.shtml" title="汇吃巴加盟" target="_blank">汇吃巴加盟</a></dd>

                                            </dl>
                                            <dl>
                                                <dd><a href="/lingshidianpp/4760.shtml" title="栗品香加盟" target="_blank">栗品香加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4738.shtml" title="九品铺子加盟" target="_blank">九品铺子加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4737.shtml" title="花生兄弟加盟" target="_blank">花生兄弟加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4736.shtml" title="棒棒娃加盟" target="_blank">棒棒娃加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4735.shtml" title="珠穆朗玛加盟" target="_blank">珠穆朗玛加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4734.shtml" title="立洲加盟" target="_blank">立洲加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4733.shtml" title="台尚加盟" target="_blank">台尚加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4732.shtml" title="优米客加盟" target="_blank">优米客加盟</a></dd>



                                                <dd><a href="/lingshidianpp/4731.shtml" title="俏食客加盟" target="_blank">俏食客加盟</a></dd>

                                            </dl>
                                        </div>
                                        <div class="bd_r">
                                            <div class="index_txt_list_wrap">
                                                <div class="index_txt_list">

                                                    <dl>                                     <dd><a href="/lingshidianpp/4730.shtml" title=" 爱加一加盟" target="_blank"> 爱加一加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4729.shtml" title="豫川香加盟" target="_blank">豫川香加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4728.shtml" title="宜人家加盟" target="_blank">宜人家加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4727.shtml" title="妙妙萌食加盟" target="_blank">妙妙萌食加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4726.shtml" title="爽米芭加盟" target="_blank">爽米芭加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4725.shtml" title=" 雪山果园加盟" target="_blank"> 雪山果园加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4724.shtml" title="雅特加盟" target="_blank">雅特加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4723.shtml" title="森林猴加盟" target="_blank">森林猴加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4719.shtml" title="味到舌足加盟" target="_blank">味到舌足加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4718.shtml" title="范老大加盟" target="_blank">范老大加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4717.shtml" title="海西坊加盟" target="_blank">海西坊加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4716.shtml" title="蒙粮加盟" target="_blank">蒙粮加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4714.shtml" title="金泰旺加盟" target="_blank">金泰旺加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4715.shtml" title="丫眯乐加盟" target="_blank">丫眯乐加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4713.shtml" title="馋馋享加盟" target="_blank">馋馋享加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4712.shtml" title="好心人加盟" target="_blank">好心人加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4711.shtml" title="阿幸加盟" target="_blank">阿幸加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4710.shtml" title="诺梵加盟" target="_blank">诺梵加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4708.shtml" title="优利佳加盟" target="_blank">优利佳加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4707.shtml" title="南北特加盟" target="_blank">南北特加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4706.shtml" title="蜀道香加盟" target="_blank">蜀道香加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4705.shtml" title="新农哥加盟" target="_blank">新农哥加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4704.shtml" title="心味果园加盟" target="_blank">心味果园加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4703.shtml" title="辣将军加盟" target="_blank">辣将军加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4702.shtml" title=" 迪客加盟" target="_blank"> 迪客加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4701.shtml" title="香卡吧加盟" target="_blank">香卡吧加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4700.shtml" title="南农加盟" target="_blank">南农加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4699.shtml" title="谭德记加盟" target="_blank">谭德记加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4695.shtml" title="巴喜村加盟" target="_blank">巴喜村加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4693.shtml" title="阿茹娜加盟" target="_blank">阿茹娜加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4691.shtml" title="奥味加盟" target="_blank">奥味加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4680.shtml" title="旭东加盟" target="_blank">旭东加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4679.shtml" title="智道加盟" target="_blank">智道加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4678.shtml" title="留一口加盟" target="_blank">留一口加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4677.shtml" title="盈誉加盟" target="_blank">盈誉加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4676.shtml" title="嘉善国威加盟" target="_blank">嘉善国威加盟</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4675.shtml" title="疯果脆加盟" target="_blank">疯果脆加盟</a></dd>



                                                        <dd><a href="/lingshidianpp/4674.shtml" title="七宝一丁" target="_blank">七宝一丁</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4673.shtml" title="佬香翁" target="_blank">佬香翁</a></dd>



                                                        <dd><a href="/lingshidianpp/4672.shtml" title="因味有你" target="_blank">因味有你</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4671.shtml" title="美味美" target="_blank">美味美</a></dd>



                                                        <dd><a href="/lingshidianpp/4655.shtml" title="多米乐" target="_blank">多米乐</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4654.shtml" title="贝贝乐" target="_blank">贝贝乐</a></dd>



                                                        <dd><a href="/lingshidianpp/4653.shtml" title="广香园" target="_blank">广香园</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4652.shtml" title="好利源" target="_blank">好利源</a></dd>



                                                        <dd><a href="/lingshidianpp/4651.shtml" title="吃货居" target="_blank">吃货居</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4650.shtml" title="润成" target="_blank">润成</a></dd>



                                                        <dd><a href="/lingshidianpp/4649.shtml" title="脆升升" target="_blank">脆升升</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4648.shtml" title="米米佳" target="_blank">米米佳</a></dd>



                                                        <dd><a href="/lingshidianpp/4647.shtml" title="疯狂诱惑" target="_blank">疯狂诱惑</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4646.shtml" title="庆仔" target="_blank">庆仔</a></dd>



                                                        <dd><a href="/lingshidianpp/4630.shtml" title="江太公" target="_blank">江太公</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4629.shtml" title="知味轩" target="_blank">知味轩</a></dd>



                                                        <dd><a href="/lingshidianpp/4628.shtml" title="多伊颗" target="_blank">多伊颗</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4627.shtml" title="鲜品屋" target="_blank">鲜品屋</a></dd>



                                                        <dd><a href="/lingshidianpp/4626.shtml" title="兔巴哥" target="_blank">兔巴哥</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4625.shtml" title="萨哈林" target="_blank">萨哈林</a></dd>



                                                        <dd><a href="/lingshidianpp/4624.shtml" title="满师傅" target="_blank">满师傅</a></dd>

                                                    </dl>

                                                    <dl>                                     <dd><a href="/lingshidianpp/4623.shtml" title="莲香楼" target="_blank">莲香楼</a></dd>



                                                        <dd><a href="/lingshidianpp/4622.shtml" title="好巴食" target="_blank">好巴食</a></dd>

                                                    </dl>
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
                                        <div class="img_show"><a href="/chaohuodian/" target="_blank"><img src="/receptions/images/index_pic2.jpg" alt="炒货品牌"/></a></div>
                                        <p class="tit"><a href="/chaohuodian/" target="_blank">炒货品牌</a></p>
                                        <p class="desc">松子/坚果/开心果/巴旦木</p>
                                        <p class="more"><a href="/chaohuodian/" target="_blank" title="炒货店品牌">查看详情&gt;</a></p>
                                    </div>
                                    <div class="index_box3_r">
                                        <div class="hd">
                                            <span class="tit">炒货品牌</span>
                                            <span class="desc">颗颗饱满、开口易剥 笑口常开</span>
                                            <span class="more"><a href="/chaohuodian/" target="_blank" title="炒货店品牌">更多&gt;&gt;</a></span>
                                        </div>
                                        <div class="bd">
                                            <div class="bd_l">


                                                <dl>
                                                    <dd><a href="/chaohuodian/4778.shtml" title="天天炒货加盟" target="_blank">天天炒货加盟</a></dd>



                                                    <dd><a href="/chaohuodian/4762.shtml" title="岭峥炒栗加盟" target="_blank">岭峥炒栗加盟</a></dd>



                                                    <dd><a href="/chaohuodian/4761.shtml" title="一哆瓜子加盟" target="_blank">一哆瓜子加盟</a></dd>



                                                    <dd><a href="/chaohuodian/4565.shtml" title="达坂城老李炒货" target="_blank">达坂城老李炒货</a></dd>



                                                    <dd><a href="/chaohuodian/4552.shtml" title="曲记炒货" target="_blank">曲记炒货</a></dd>



                                                    <dd><a href="/chaohuodian/4548.shtml" title="江苏炒货" target="_blank">江苏炒货</a></dd>



                                                    <dd><a href="/chaohuodian/4248.shtml" title="上海炒货加盟" target="_blank">上海炒货加盟</a></dd>



                                                    <dd><a href="/chaohuodian/4244.shtml" title="丁老头炒货加盟" target="_blank">丁老头炒货加盟</a></dd>



                                                    <dd><a href="/chaohuodian/9.shtml" title="戴永红炒货" target="_blank">戴永红炒货</a></dd>

                                                </dl>
                                                <dl>
                                                    <dd><a href="/chaohuodian/8.shtml" title="盐津铺子" target="_blank">盐津铺子</a></dd>



                                                    <dd><a href="/chaohuodian/17.shtml" title="飘零大叔" target="_blank">飘零大叔</a></dd>



                                                    <dd><a href="/chaohuodian/177.shtml" title="方林富炒货加盟" target="_blank">方林富炒货加盟</a></dd>



                                                    <dd><a href="/chaohuodian/176.shtml" title="神栗" target="_blank">神栗</a></dd>



                                                    <dd><a href="/chaohuodian/172.shtml" title="傻乐瓜子" target="_blank">傻乐瓜子</a></dd>



                                                    <dd><a href="/chaohuodian/171.shtml" title="同盛昌炒货" target="_blank">同盛昌炒货</a></dd>



                                                    <dd><a href="/chaohuodian/147.shtml" title="鑫忆品香炒货" target="_blank">鑫忆品香炒货</a></dd>



                                                    <dd><a href="/chaohuodian/141.shtml" title="我佳炒货" target="_blank">我佳炒货</a></dd>



                                                    <dd><a href="/chaohuodian/140.shtml" title="张二嘎" target="_blank">张二嘎</a></dd>

                                                </dl>
                                                <dl>
                                                    <dd><a href="/chaohuodian/137.shtml" title="品忆香炒货" target="_blank">品忆香炒货</a></dd>



                                                    <dd><a href="/chaohuodian/136.shtml" title="粒中王" target="_blank">粒中王</a></dd>



                                                    <dd><a href="/chaohuodian/133.shtml" title="佳佳香炒货" target="_blank">佳佳香炒货</a></dd>



                                                    <dd><a href="/chaohuodian/132.shtml" title="吴大头炒货" target="_blank">吴大头炒货</a></dd>



                                                    <dd><a href="/chaohuodian/130.shtml" title="白老五炒货" target="_blank">白老五炒货</a></dd>



                                                    <dd><a href="/chaohuodian/128.shtml" title="苗家炒货" target="_blank">苗家炒货</a></dd>



                                                    <dd><a href="/chaohuodian/127.shtml" title="杨记炒货" target="_blank">杨记炒货</a></dd>



                                                    <dd><a href="/chaohuodian/126.shtml" title="七里香炒货" target="_blank">七里香炒货</a></dd>



                                                    <dd><a href="/chaohuodian/125.shtml" title="久久顺炒货" target="_blank">久久顺炒货</a></dd>

                                                </dl>
                                            </div>
                                            <div class="bd_r">
                                                <div class="index_brand_list">
                                                    <ul>
                                                        <li><a href="/chaohuodian/123.shtml" target="_blank"><img src="/images/thread/2017/04/18/14c67609178a7c62f7e30febb34aa8b3.jpg" title="果仁张" alt="果仁张"><span>果仁张</span></a></li>
                                                        <li><a href="/chaohuodian/121.shtml" target="_blank"><img src="/images/thread/2017/04/18/cc62b43252ca7133742e87b119062892.jpg" title="佳源香甘栗炒货" alt="佳源香甘栗炒货"><span>佳源香甘栗炒货</span></a></li>
                                                        <li><a href="/chaohuodian/119.shtml" target="_blank"><img src="/images/thread/2017/04/18/9b6b8b84d1699791d24ca196773dcdc8.jpg" title="曹记炒货" alt="曹记炒货"><span>曹记炒货</span></a></li>
                                                        <li><a href="/chaohuodian/118.shtml" target="_blank"><img src="/images/thread/2017/04/18/c489e38df2a07e4f4a8c2e6182e4746b.jpg" title="陶永祥炒货 " alt="陶永祥炒货 "><span>陶永祥炒货 </span></a></li>
                                                        <li><a href="/chaohuodian/113.shtml" target="_blank"><img src="/images/thread/2017/04/18/1307736c864789044429b1f219e852b6.png" title="厚生记" alt="厚生记"><span>厚生记</span></a></li>
                                                        <li><a href="/chaohuodian/107.shtml" target="_blank"><img src="/images/thread/2017/04/18/1eb198590f5b7f9e65da840781e6cfb0.jpg" title="孟令华炒货" alt="孟令华炒货"><span>孟令华炒货</span></a></li>
                                                        <li><a href="/chaohuodian/105.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/04/18/7666aea999876f83e3468119f11f0fb6.jpg" title="民味园炒货加盟" alt="民味园炒货加盟"><span>民味园炒货加盟</span></a></li>
                                                        <li><a href="/chaohuodian/101.shtml" target="_blank"><img src="/images/thread/2017/04/18/e2c0f1995c67206a7e31245570d183d7.jpg" title="孟记炒货" alt="孟记炒货"><span>孟记炒货</span></a></li>
                                                        <li><a href="/chaohuodian/100.shtml" target="_blank"><img src="/images/thread/2017/04/18/cd0bcd412648640c158940c8833e8d7a.jpg" title="傻二炒货" alt="傻二炒货"><span>傻二炒货</span></a></li>
                                                        <li><a href="/chaohuodian/86.shtml" target="_blank"><img src="/images/thread/2017/04/17/2dc7df7adfd96c60c6cdad75c6a06349.jpg" title="王胖子炒货" alt="王胖子炒货"><span>王胖子炒货</span></a></li>
                                                        <li><a href="/chaohuodian/74.shtml" target="_blank"><img src="/images/thread/2017/04/17/59f91120d52ceb2bb5862ff9cf37ad6c.jpg" title="德雅村炒货" alt="德雅村炒货"><span>德雅村炒货</span></a></li>
                                                        <li><a href="/chaohuodian/66.shtml" target="_blank"><img src="/images/thread/2017/04/17/6856e844245e98b3ecf517254ddf7b92.jpg" title="一品香炒货" alt="一品香炒货"><span>一品香炒货</span></a></li>
                                                        <li><a href="/chaohuodian/61.shtml" target="_blank"><img src="/images/thread/2017/04/17/673bb690861ad59bea7a84743e31a518.jpg" title="金傻二炒货" alt="金傻二炒货"><span>金傻二炒货</span></a></li>
                                                        <li><a href="/chaohuodian/57.shtml" target="_blank"><img src="/images/thread/2017/04/17/63cc2fc9b7f9e40214949dfdfeed2c03.jpg" title="正林炒货" alt="正林炒货"><span>正林炒货</span></a></li>
                                                        <li><a href="/chaohuodian/56.shtml" target="_blank"><img src="/images/thread/2017/04/17/ed8b04cab4f195ab4438f159e73dfeda.jpg" title="口水码头" alt="口水码头"><span>口水码头</span></a></li>
                                                        <li><a href="/chaohuodian/55.shtml" target="_blank"><img src="/images/thread/2017/04/17/d0759d0deaeaf84c46515a5ef7eb3507.jpg" title="口水娃" alt="口水娃"><span>口水娃</span></a></li>
                                                        <li><a href="/chaohuodian/51.shtml" target="_blank"><img src="/images/thread/2017/04/17/257b0d604a639d13975512bfe10f323d.jpg" title="百味林" alt="百味林"><span>百味林</span></a></li>
                                                        <li><a href="/chaohuodian/49.shtml" target="_blank"><img src="/images/thread/2017/04/17/138a2006b0233a9bf6ddde8961e1f6b4.jpg" title="圣客炒货" alt="圣客炒货"><span>圣客炒货</span></a></li>
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
                                        <div class="img_show"><a href="/jinkoulingshi/" target="_blank"><img src="/receptions/images/index_pic3.jpg" alt="进口零食"/></a></div>
                                        <p class="tit"><a href="/jinkoulingshi/" target="_blank">进口零食</a></p>
                                        <p class="desc">原装进口 精挑细选</p>
                                        <p class="more"><a href="/jinkoulingshi/" target="_blank">查看详情&gt;</a></p>
                                    </div>
                                    <div class="index_box3_r">
                                        <div class="hd">
                                            <span class="tit">进口零食</span>
                                            <span class="desc">汇聚全球零食品牌,上千款进口食品助您月利10万,掀起疯狂抢购狂潮</span>
                                            <span class="more"><a href="/jinkoulingshi/" target="_blank">更多&gt;&gt;</a></span>
                                        </div>
                                        <div class="bd">
                                            <div class="bd_l">

                                                <dl>
                                                    <dd><a href="/jinkoulingshi/4696.shtml" title="久久顺炒货" target="_blank">澳生活加</a></dd>



                                                    <dd><a href="/jinkoulingshi/4604.shtml" title="久久顺炒货" target="_blank">真惠子</a></dd>



                                                    <dd><a href="/jinkoulingshi/4592.shtml" title="久久顺炒货" target="_blank">万福客</a></dd>



                                                    <dd><a href="/jinkoulingshi/4575.shtml" title="久久顺炒货" target="_blank">7物语</a></dd>



                                                    <dd><a href="/jinkoulingshi/4573.shtml" title="久久顺炒货" target="_blank">蒙卡蒂</a></dd>



                                                    <dd><a href="/jinkoulingshi/4564.shtml" title="久久顺炒货" target="_blank">Q客家</a></dd>



                                                    <dd><a href="/jinkoulingshi/4463.shtml" title="久久顺炒货" target="_blank">长沙进口</a></dd>



                                                    <dd><a href="/jinkoulingshi/4420.shtml" title="久久顺炒货" target="_blank">太空谷</a></dd>



                                                    <dd><a href="/jinkoulingshi/4378.shtml" title="久久顺炒货" target="_blank">一粒志</a></dd>

                                                </dl>
                                                <dl>
                                                    <dd><a href="/jinkoulingshi/4344.shtml" title="久久顺炒货" target="_blank">御食园</a></dd>



                                                    <dd><a href="/jinkoulingshi/4343.shtml" title="久久顺炒货" target="_blank">泉城烤薯</a></dd>



                                                    <dd><a href="/jinkoulingshi/4340.shtml" title="久久顺炒货" target="_blank">快乐星汉</a></dd>



                                                    <dd><a href="/jinkoulingshi/4309.shtml" title="久久顺炒货" target="_blank">韩味源</a></dd>



                                                    <dd><a href="/jinkoulingshi/4307.shtml" title="久久顺炒货" target="_blank">魔呀零食</a></dd>



                                                    <dd><a href="/jinkoulingshi/4305.shtml" title="久久顺炒货" target="_blank">艾莉克丝</a></dd>



                                                    <dd><a href="/jinkoulingshi/4303.shtml" title="久久顺炒货" target="_blank">今磨坊</a></dd>



                                                    <dd><a href="/jinkoulingshi/2377.shtml" title="久久顺炒货" target="_blank">小资小味</a></dd>



                                                    <dd><a href="/jinkoulingshi/305.shtml" title="久久顺炒货" target="_blank">自由自在</a></dd>

                                                </dl>
                                                <dl>
                                                    <dd><a href="/jinkoulingshi/301.shtml" title="久久顺炒货" target="_blank">悦丰</a></dd>



                                                    <dd><a href="/jinkoulingshi/282.shtml" title="久久顺炒货" target="_blank">优壹家</a></dd>



                                                    <dd><a href="/jinkoulingshi/278.shtml" title="久久顺炒货" target="_blank">优米客</a></dd>



                                                    <dd><a href="/jinkoulingshi/267.shtml" title="久久顺炒货" target="_blank">优客龙</a></dd>



                                                    <dd><a href="/jinkoulingshi/265.shtml" title="久久顺炒货" target="_blank">优之良品</a></dd>



                                                    <dd><a href="/jinkoulingshi/245.shtml" title="久久顺炒货" target="_blank">五洲会</a></dd>



                                                    <dd><a href="/jinkoulingshi/233.shtml" title="久久顺炒货" target="_blank">兔子家</a></dd>



                                                    <dd><a href="/jinkoulingshi/231.shtml" title="久久顺炒货" target="_blank">七天优品</a></dd>



                                                    <dd><a href="/jinkoulingshi/229.shtml" title="久久顺炒货" target="_blank">甜蜜小筑</a></dd>

                                                </dl>                                             </div>
                                            <div class="bd_r">
                                                <div class="index_brand_list">
                                                    <ul>

                                                        <li><a href="/jinkoulingshi/4696.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/11/09/3263d555b0e4b9c77194e9fbfda7f7d7.jpg" title="澳生活加盟" alt="澳生活加盟"><span>澳生活加盟</span></a></li>
                                                        <li><a href="/jinkoulingshi/4604.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/11/05/4e9414391c3ade5f424ae883876aaff7.png" title="真惠子" alt="真惠子"><span>真惠子</span></a></li>
                                                        <li><a href="/jinkoulingshi/4592.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/11/02/c2ab0834307bb95fba50768eb0326b43.jpg" title="万福客" alt="万福客"><span>万福客</span></a></li>
                                                        <li><a href="/jinkoulingshi/4575.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/11/01/f8a1b8b0f8b45ebc91f499d3359316d8.jpg" title="7物语" alt="7物语"><span>7物语</span></a></li>
                                                        <li><a href="/jinkoulingshi/4573.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/11/01/abd1ede9e042a47ef5d5a4efe52e6777.jpg" title="蒙卡蒂" alt="蒙卡蒂"><span>蒙卡蒂</span></a></li>
                                                        <li><a href="/jinkoulingshi/4564.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/31/7d93c6712be6e85e753723e60be3bf91.jpg" title="Q客家" alt="Q客家"><span>Q客家</span></a></li>
                                                        <li><a href="/jinkoulingshi/4463.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/26/c6bed3cf0a4f9f81c6d7f04e8fe5ddce.jpg" title="长沙进口食品" alt="长沙进口食品"><span>长沙进口食品</span></a></li>
                                                        <li><a href="/jinkoulingshi/4420.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/25/b96622f779720980a9b431615ae72e69.jpg" title="太空谷" alt="太空谷"><span>太空谷</span></a></li>
                                                        <li><a href="/jinkoulingshi/4378.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/24/3d74ab1511052c5422731797971875f3.png" title="一粒志" alt="一粒志"><span>一粒志</span></a></li>
                                                        <li><a href="/jinkoulingshi/4344.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/23/bc574eb44ea47db1a3bf3d2450b8c816.png" title="御食园" alt="御食园"><span>御食园</span></a></li>
                                                        <li><a href="/jinkoulingshi/4343.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/23/c99dd8fc472bd152ca4ae6fd8e522ad7.jpg" title="泉城烤薯" alt="泉城烤薯"><span>泉城烤薯</span></a></li>
                                                        <li><a href="/jinkoulingshi/4340.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/23/f172f293b995dfbd016e14a2d797711e.jpg" title="快乐星汉堡" alt="快乐星汉堡"><span>快乐星汉堡</span></a></li>
                                                        <li><a href="/jinkoulingshi/4309.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/24/330b95ed229d9680efe605bad9888c79.jpg" title="韩味源" alt="韩味源"><span>韩味源</span></a></li>
                                                        <li><a href="/jinkoulingshi/4307.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/22/3dc292178524368dddcebdf6f87a8822.jpg" title="魔呀零食" alt="魔呀零食"><span>魔呀零食</span></a></li>
                                                        <li><a href="/jinkoulingshi/4305.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/22/172797b15dbf46a544c71fb8beafada9.jpg" title="艾莉克丝" alt="艾莉克丝"><span>艾莉克丝</span></a></li>
                                                        <li><a href="/jinkoulingshi/4303.shtml" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/22/b34b6115ac4c0ffbd02378ca9229758a.jpg" title="今磨坊" alt="今磨坊"><span>今磨坊</span></a></li>
                                                        <li><a href="/jinkoulingshi/2377.shtml" target="_blank"><img src="/images/thread/2017/07/03/9e6d157c19284fe0773942fa0fb53c67.png" title="小资小味" alt="小资小味"><span>小资小味</span></a></li>
                                                        <li><a href="/jinkoulingshi/305.shtml" target="_blank"><img src="/images/thread/2017/04/28/d4f7a34473aad01230c8dffa0a230ee9.png" title="自由自在" alt="自由自在"><span>自由自在</span></a></li>
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
                    <h2>大家都在看</h2>
                    <div class="con_fir">
                        <div class="fir_left">

                            <div class="li_div"><a href="/ganguodian/367.shtml" title="逗妮开心加盟" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/05/03/bc96022a75800a75a81c582ce1961700.jpg"></a><span><a href="/ganguodian/367.shtml" target="_blank">逗妮开心加盟</a><br><font color="#9c9c9c">3086人</font><em><a href="#" target="_blank">咨询</a></em></span></div>

                            <div class="li_div"><a href="/jinkoulingshi/216.shtml" title="魔呀" target="_blank"><img src="/images/thread/2017/04/25/f1da97e5a112b847f3b7f7261c3509e6.jpg"></a><span><a href="/jinkoulingshi/216.shtml" target="_blank">魔呀</a><br><font color="#9c9c9c">8656人</font><em><a href="#" target="_blank">咨询</a></em></span></div>

                            <div class="li_div"><a href="/ganguodian/52.shtml" title="方家铺子加盟" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/04/17/1c32b8f1b30169abe807e1315f7946cb.jpg"></a><span><a href="/ganguodian/52.shtml" target="_blank">方家铺子加盟</a><br><font color="#9c9c9c">2786人</font><em><a href="#" target="_blank">咨询</a></em></span></div>

                            <div class="li_div"><a href="/ganguodian/2.shtml" title="百草味" target="_blank"><img src="/images/thread/2017/04/12/27cca2278e5dada6bc4b93a15cd2080e.jpg"></a><span><a href="/ganguodian/2.shtml" target="_blank">百草味</a><br><font color="#9c9c9c">2307人</font><em><a href="#" target="_blank">咨询</a></em></span></div>

                            <div class="li_div"><a href="/jinkoulingshi/212.shtml" title="常青藤" target="_blank"><img src="/images/thread/2017/04/25/bdc50348a7e2502fe53213c09a3feced.jpg"></a><span><a href="/jinkoulingshi/212.shtml" target="_blank">常青藤</a><br><font color="#9c9c9c">8186人</font><em><a href="#" target="_blank">咨询</a></em></span></div>
                        </div>
                        <div class="fir_right">
                            <ul>
                                <li>
                                    <div class="jg">￥8-15万元</div>
                                    <div class="wz"><a href="/ganguodian/367.shtml" title="逗妮开心加盟" target="_blank">逗妮开心加盟</a><br><span class="fl">行业：<font color="#666">干果店品牌</font></span><span class="fr">3086人咨询</span></div>
                                </li>
                                <li>
                                    <div class="jg">￥4-15万</div>
                                    <div class="wz"><a href="/jinkoulingshi/216.shtml" title="魔呀" target="_blank">魔呀</a><br><span class="fl">行业：<font color="#666">进口零食品牌</font></span><span class="fr">8656人咨询</span></div>
                                </li>
                                <li>
                                    <div class="jg">￥10万</div>
                                    <div class="wz"><a href="/ganguodian/52.shtml" title="方家铺子加盟" target="_blank">方家铺子加盟</a><br><span class="fl">行业：<font color="#666">干果店品牌</font></span><span class="fr">2786人咨询</span></div>
                                </li>
                                <li>
                                    <div class="jg">￥10万元</div>
                                    <div class="wz"><a href="/ganguodian/2.shtml" title="百草味" target="_blank">百草味</a><br><span class="fl">行业：<font color="#666">干果店品牌</font></span><span class="fr">2307人咨询</span></div>
                                </li>
                                <li>
                                    <div class="jg">￥5-15万</div>
                                    <div class="wz"><a href="/jinkoulingshi/212.shtml" title="常青藤" target="_blank">常青藤</a><br><span class="fl">行业：<font color="#666">进口零食品牌</font></span><span class="fr">8186人咨询</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cont4_con fr">
                    <h2>生意百科</h2>
                    <div class="con_sec">
                        <ul>
                            <li class=" one  bor">
                                <span><a href="/ask/1.shtml" title="三只松鼠能加盟吗，怎么代理?" target="_blank">三只松鼠能加盟吗，怎么代理?</a></span>
                                <p> 　　本人是全职妈妈，现在孩子已经上学了，孩子很喜欢吃三只松鼠的零...</p>
                            </li>
                            <li class=" two  bor">
                                <span><a href="/ask/2.shtml" title="想开家一扫光零食店，说不要加盟费，是真的吗" target="_blank">想开家一扫光零食店，说不要加盟费，是真的吗</a></span>
                                <p> 　　想开家一扫光零食店，网上说不要加盟费，是真的吗，说是原来湖南...</p>
                            </li>
                            <li class=" three  bor">
                                <span><a href="/ask/3.shtml" title="现在开家零食店赚钱吗？利润有多少" target="_blank">现在开家零食店赚钱吗？利润有多少</a></span>
                                <p> 　　打算开家零食店，想了解下利润有多少？现在在我们老家扬州开设一...</p>
                            </li>
                        </ul>
                        <textarea class="question" onclick="this.value = '';" name="question">#说出您创业疑问，10分钟将得到答案#</textarea>
                        <input type="button" class="wd_submit" value="提问">
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="index_box5">
                <div class="cont5_left">
                    <h2>创业大讲堂</h2>
                    <div class="left_one">
                        <div class="one_top">
                            <div class="li_d"> <a href="/lingshizx/3120.shtml" title="休闲食品果来仁加盟有哪些优势？" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/11/22/512ad2a07cf13df63d260af9dc48deb3.png" alt="休闲食品果来仁加盟有哪些优势？"></a>
                                <div class="d_wz">
                                    <h3><a href="/lingshizx/3120.shtml" target="_blank" title="休闲食品果来仁加盟有哪些优势？">休闲食品果来仁加盟有哪些优势？</a></h3>
                                    <p>休闲食品果来仁加盟有哪些优势?休闲小吃是当代人们最喜爱吃的产品之一，其受到了众多消费者的喜...</p>
                                </div>
                            </div>
                            <div class="li_d"> <a href="/lingshizx/3118.shtml" title="开家姚太太休闲食品店好不好 ?姚太太休闲食品加盟有优惠吗?" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/11/21/31cb769d29c4a8c7591db934772830be.jpg" alt="开家姚太太休闲食品店好不好 ?姚太太休闲食品加盟有优惠吗?"></a>
                                <div class="d_wz">
                                    <h3><a href="/lingshizx/3118.shtml" target="_blank" title="开家姚太太休闲食品店好不好 ?姚太太休闲食品加盟有优惠吗?">开家姚太太休闲食品店好不好 ?姚太太休闲食品加盟有优惠吗?</a></h3>
                                    <p>开家姚太太休闲食品店好不好?姚太太休闲食品加盟有优惠吗?休闲食品的市场一向都比较受欢迎，各种...</p>
                                </div>
                            </div>
                        </div>
                        <div class="one_cen">
                            <ul>
                                <li><a href="lingshidianpp/4900.shtml" title="肥妹凉果零食店加盟利润怎么样？13.5万元轻松开家小型店" target="_blank">肥妹凉果零食店加盟利润怎么样？13.5万元轻松开家小型店 </a></li>
                                <li><a href="lingshidianpp/4899.shtml" title="三零食品零食店加盟利润高吗？三零食品零食店怎么加盟" target="_blank">三零食品零食店加盟利润高吗？三零食品零食店怎么加盟 </a></li>
                                <li><a href="lingshidianpp/4898.shtml" title="上海炒货店加盟赚钱吗？上海炒货加盟怎么样" target="_blank">上海炒货店加盟赚钱吗？上海炒货加盟怎么样 </a></li>
                                <li><a href="lingshidianpp/4897.shtml" title="馋嘴猫零食店加盟利润怎么样？一年竟然赚取25.5万元" target="_blank">馋嘴猫零食店加盟利润怎么样？一年竟然赚取25.5万元 </a></li>
                                <li><a href="lingshidianpp/4896.shtml" title="马路村干果店加盟赚钱吗？一年净赚25.5万元" target="_blank">马路村干果店加盟赚钱吗？一年净赚25.5万元 </a></li>
                                <li><a href="lingshidianpp/4895.shtml" title="食尚零食铺加盟利润好不好？食尚零食铺怎么加盟" target="_blank">食尚零食铺加盟利润好不好？食尚零食铺怎么加盟 </a></li>
                            </ul>
                        </div>
                        <div class="one_bot">
                            <dl>
                                <dt>人群解读</dt>
                                <dd><a href="/lingshidianpp/4894.shtml" target="_blank" title="自然派零食店加盟费多少钱？自然派零食店加盟怎么样"><font color="#D71318">自然派零</font>自然派零食店加盟费多少钱？自然派零食店加盟怎么样</a></dd>
                                <dd><a href="/lingshidianpp/4893.shtml" target="_blank" title="天泉甜甜干果加盟利润如何？一年竟赚23万利润"><font color="#D71318">天泉甜甜</font>天泉甜甜干果加盟利润如何？一年竟赚23万利润</a></dd>
                                <dd><a href="/lingshidianpp/4892.shtml" target="_blank" title="新疆干果店加盟利润高吗？一年竟然能赚23万元"><font color="#D71318">新疆干果</font>新疆干果店加盟利润高吗？一年竟然能赚23万元</a></dd>
                                <dd><a href="/lingshidianpp/4891.shtml" target="_blank" title="来伊份零食店加盟利润怎么样？年利润高达38.16万元"><font color="#D71318">来伊份加</font>来伊份零食店加盟利润怎么样？年利润高达38.16万元</a></dd>
                                <dd><a href="/lingshidianpp/4890.shtml" target="_blank" title="糖巢量贩零食加盟赚钱吗？一年净赚29.52万元"><font color="#D71318">糖巢量贩</font>糖巢量贩零食加盟赚钱吗？一年净赚29.52万元</a></dd>
                                <dd><a href="/lingshidianpp/4889.shtml" target="_blank" title="田良君炒货加盟利润怎么样？加盟田良君炒货有什么条件"><font color="#D71318">田良君炒</font>田良君炒货加盟利润怎么样？加盟田良君炒货有什么条件</a></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="left_two">
                        <h4>零食采购信息</h4>
                        <dl>
                            <dd><span>2018-01-22</span><i class=" ye ">1.</i><a href="/jinhuopf/3321.shtml" target="_blank" title="加盟能解决零食店进货问题吗？进货渠道更好">加盟能解决零食店进货问题吗？进货渠道更好</a></dd>
                            <dd><span>2017-06-28</span><i class=" ye ">2.</i><a href="/jinhuopf/2231.shtml" target="_blank" title="做强特色做优品质做大品牌 助推提升成都开放型经济水平">做强特色做优品质做大品牌 助推提升成都开放型经济水平</a></dd>
                            <dd><span>2017-06-26</span><i class=" ye ">3.</i><a href="/jinhuopf/2128.shtml" target="_blank" title="多快好省，市民食品采购有了新选择——第五届亚太批发市场大会">多快好省，市民食品采购有了新选择——第五届亚太批发市场大会</a></dd>
                            <dd><span>2017-04-26</span><i class=" ye ">4.</i><a href="/jinhuopf/232.shtml" target="_blank" title="千家企业+万名采购商,共聚2017上海食品包装机械展">千家企业+万名采购商,共聚2017上海食品包装机械展</a></dd>
                        </dl>
                    </div>
                    <div class="left_two">
                        <h4>创业指导</h4>
                        <dl>
                            <dt><a href="/lingshizx/4536.shtml" title="加盟淘豆零食店多少钱？淘豆加盟怎么样" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2018/10/30/9d29a0bc5d1bfe2ea0d534422ef8ef2c.jpg"></a><span>加盟淘豆零食店多少钱？淘豆加盟怎么样？苏州淘豆【<a href="/lingshizx/4536.shtml" style="color:#D71318;" target="_blank">阅读</a>】</span></dt>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4531.shtml" target="_blank" title="采芝斋零食店加盟费是多少？采芝斋加盟有哪些要求">采芝斋零食店加盟费是多少？采芝斋加盟有哪些要求</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4530.shtml" target="_blank" title="加盟仇二零食店需要多少钱？仇二加盟怎么样">加盟仇二零食店需要多少钱？仇二加盟怎么样</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4526.shtml" target="_blank" title="西域果农零食店加盟多少钱？加盟西域果农怎么样">西域果农零食店加盟多少钱？加盟西域果农怎么样</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4519.shtml" target="_blank" title="加盟好想来需要多少钱？怎么加盟好想来">加盟好想来需要多少钱？怎么加盟好想来</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4518.shtml" target="_blank" title="加盟果园老农零食店多少钱？怎么加盟果园老农">加盟果园老农零食店多少钱？怎么加盟果园老农</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4516.shtml" target="_blank" title="七乐食尚零食店加盟费是多少？七乐食尚加盟怎么样">七乐食尚零食店加盟费是多少？七乐食尚加盟怎么样</a></dd>
                            <dd><span>2018-10-30</span><a href="/lingshizx/4512.shtml" target="_blank" title="甜格格零食王国加盟需要多少钱？甜格格怎么加盟">甜格格零食王国加盟需要多少钱？甜格格怎么加盟</a></dd>
                        </dl>
                    </div>
                </div>
                <div class="cont5_right">
                    <h2>零食展会信息</h2>
                    <div class="right_con">
                        <dl>
                            <dt><a href="zhanhui/296.shtml" title="22大国际展团齐聚“2017世界食品广州展”" target="_blank"><img src="http://www.58lingshi.com/uploads/image/2017/04/28/d802b1c7e50098bac9f73dbc5bc58a25.jpg" alt="22大国际展团齐聚“2017世界食品广州展”" style="height: 85px; overflow: hidden"></a></dt>
                            <dd><a href="zhanhui/296.shtml" title="22大国际展团齐聚“2017世界食品广州展”" target="_blank">22大国际展团齐聚“2017世界食品广州展”</a></dd>
                            <dd><a href="zhanhui/295.shtml" title="市长戴启远出席2017淮北食品工业博览会欢迎会举行" target="_blank">市长戴启远出席2017淮北食品工业博览会欢迎会举行</a></dd>
                            <dd><a href="zhanhui/292.shtml" title="聚国内外千家美食大咖，展食品行业盛宴-中国国际休闲食品及进口食品博览会" target="_blank">聚国内外千家美食大咖，展食品行业盛宴-中国国际休闲食品及进口食品博览会</a></dd>
                            <dd><a href="zhanhui/290.shtml" title="2017上海食品博览会/休闲食品展览会/进口食品展会" target="_blank">2017上海食品博览会/休闲食品展览会/进口食品展会</a></dd>
                            <dd><a href="zhanhui/289.shtml" title="北京进口食品博览会/美酒饮品/休闲糖果零食" target="_blank">北京进口食品博览会/美酒饮品/休闲糖果零食</a></dd>
                            <dd><a href="zhanhui/288.shtml" title="2017北京食品博览会/休闲食品展览会" target="_blank">2017北京食品博览会/休闲食品展览会</a></dd>
                            <dd><a href="zhanhui/287.shtml" title="中国国际休闲食品及进口食品博览会" target="_blank">中国国际休闲食品及进口食品博览会</a></dd>
                            <dd><a href="zhanhui/286.shtml" title="2017(上海)进口高端食品饮料展览会 食品行业盛会" target="_blank">2017(上海)进口高端食品饮料展览会 食品行业盛会</a></dd>
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
            <a href="http://www.ganxi360.net" target="_blank">干洗店加盟</a>
            <a href="http://www.xiuxianshipin.com/" target="_blank">火爆餐饮网</a>
            <a href="http://www.51xxsp.com/" target="_blank">51加盟网</a>
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