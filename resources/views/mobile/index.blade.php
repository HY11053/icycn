@extends('mobile.mobile')
@section('title'){{ config('app.webname') }}@stop
@section('keywords'){{ config('app.keywords') }}@stop
@section('description'){{ config('app.description') }}@stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/mobile/css/swiper.min.css" />
@stop
@section('main_content')
    <div class="ban-box">
        <div class="ovh swiper-container">
            <ul class="ban-list swiper-wrapper">
                <li class="swiper-slide"><a href="/jm/520563//"><img src="/mobile/uploads/8ec392a96e8743fcb5b2daef626ddc02.jpg?x-oss-process=image/format,jpg/interlace,1/watermark,image_RGVmYXVsdC9iLnBuZw==,t_35,g_se,x_10,y_10" /></a></li>
                <li class="swiper-slide"><a href="/jm/520714//"><img src="/mobile/uploads/897de9cc379e4874b8d6770036839ebe.jpg?x-oss-process=image/format,jpg/interlace,1/watermark,image_RGVmYXVsdC9iLnBuZw==,t_35,g_se,x_10,y_10" /></a></li>
                <li class="swiper-slide"><a href="/jm/246//"><img src="/mobile/uploads/f775018fd8b34514874467cab21ccbe9.jpg?x-oss-process=image/format,jpg/interlace,1/watermark,image_RGVmYXVsdC9iLnBuZw==,t_35,g_se,x_10,y_10" /></a></li>
                <li class="swiper-slide"><a href="jm/522352//"><img src="/mobile/uploads/ba2ea5b1f6b74908b697e70f90eff01f.jpg?x-oss-process=image/format,jpg/interlace,1/watermark,image_RGVmYXVsdC9iLnBuZw==,t_35,g_se,x_10,y_10" /></a></li>
            </ul>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="fenlei-list">
        <a href="/muying/"><img src="/mobile/uploads/1_f88a193.png" /><p>母婴店</p></a>
        <a href="/muyingshg/"><img src="/mobile/uploads/2_cba2bb1.png" /><p>母婴生活馆</p></a>
        <a href="/zhaoshang/"><img src="/mobile/uploads/5_c29537b.png" /><p>品牌招商</p></a>
        <a href="/paihangbang/"><img src="/mobile/uploads/4_ec1249d.png" /><p>品牌排行榜</p></a>
        <a href="/touzi/"><img src="/mobile/uploads/10_ce86b08.png" /><p>投资分析</p></a>
        <a href="/feiyong/"><img src="/mobile/uploads/6_b6ca7ec.png" /><p>加盟费用</p></a>
        <a href="/chuangye/"><img src="/mobile/uploads/7_b928fed.png" /><p>创业指导</p></a>
        <a href="/jingying/"><img src="/mobile/uploads/all-btn_cf9eee5.png" /><p>经营管理</p></a>
    </div>
    <div class="bg-fff mt10 pt20">
        <div class="tc">
            <span class="title-ribbon">母婴店加盟</span>
        </div>
        <div class="mt10 catering-tab-box">
            <div class="tab-box-flex">
                <span class="cur">推荐</span>
                <span class="">热门</span>
                <span class="">母婴店</span>
                <span class="">生活馆</span>
                <span class="">品牌招商</span>
            </div>
            <div>
                <ul class="catering-list ">
                    @foreach($cbrands as $cbrand)
                    <li><a href="/xm/{{$cbrand->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$cbrand->id}}.shtml" class="pic"><img src="{{$cbrand->indexpic}}" /></a>
                        <div class="tit">
                            <a href="/xm/{{$cbrand->id}}.shtml">{{$cbrand->brandname}}</a>
                        </div><p class="fee">投资金额：{{$cbrand->brandpay}}</p>
                        <div class="det">
                            品牌简介：{{$cbrand->description}}……
                        </div>
                    </li>
                    @endforeach
                </ul>
                <ul class="catering-list none">
                    @foreach($hotbrands as $hotbrand)
                        <li><a href="/xm/{{$hotbrand->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$hotbrand->id}}.shtml" class="pic"><img src="{{$hotbrand->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$hotbrand->id}}.shtml">{{$hotbrand->brandname}}</a>
                            </div><p class="fee">投资金额：{{$hotbrand->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$hotbrand->description}}……
                            </div>
                        </li>
                    @endforeach
                </ul>
                <ul class="catering-list none">
                    @foreach($muyingnavlists as $muyingnavlist)
                        <li><a href="/xm/{{$muyingnavlist->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$muyingnavlist->id}}.shtml" class="pic"><img src="{{$muyingnavlist->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$muyingnavlist->id}}.shtml">{{$muyingnavlist->brandname}}</a>
                            </div><p class="fee">投资金额：{{$muyingnavlist->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$muyingnavlist->description}}……
                            </div>
                        </li>
                    @endforeach
                </ul>
                <ul class="catering-list none">
                    @foreach($muyingshgnavlists as $muyingshgnavlist)
                        <li><a href="/xm/{{$muyingshgnavlist->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$muyingshgnavlist->id}}.shtml" class="pic"><img src="{{$muyingshgnavlist->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$muyingshgnavlist->id}}.shtml">{{$muyingshgnavlist->brandname}}</a>
                            </div><p class="fee">投资金额：{{$muyingshgnavlist->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$muyingshgnavlist->description}}……
                            </div>
                        </li>
                    @endforeach

                </ul>
                <ul class="catering-list none">
                    @foreach($muyingypnavlists as $muyingypnavlist)
                        <li><a href="/xm/{{$muyingypnavlist->id}}.shtml" class="btn">我要加盟</a> <a href="/xm/{{$muyingypnavlist->id}}.shtml" class="pic"><img src="{{$muyingypnavlist->litpic}}" /></a>
                            <div class="tit">
                                <a href="/xm/{{$muyingypnavlist->id}}.shtml">{{$muyingypnavlist->brandname}}</a>
                            </div><p class="fee">投资金额：{{$muyingypnavlist->brandpay}}</p>
                            <div class="det">
                                品牌简介：{{$muyingypnavlist->description}}……
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="bg-fff mt10 pb20">
        <div class="f18 tc fw6 ptb20 borb1">
            品牌资讯
        </div>
        <ul class="restaurant-list">
            @foreach($latestnews as $latestnew)
            <li><a href="/news/{{$latestnew->id}}.shtml">
                    <div class="pic"><img src="{{$latestnew->litpic}}" /></div>
                    <div class="tit">{{$latestnew->title}}</div>
                    <div class="ovh mt10">
                        <span class="tag">资讯</span>
                        <span class="time">{{$latestnew->created_at}}</span>
                    </div></a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="bg-fff mt10 plr15 ptb20">
        <h2 class="f16 tc">隐私保护</h2>
        <div class="cont-all mt20">
            <div class="cont-box">
                <div class="cont-nr">
                    <p>1. 我方平台为信息发布平台，您的留言将在我方平台发布或提供给相应商家；</p>
                    <p>2. 如不需要发布信息，请勿在本平台留言 ；</p>
                    <p>3. 公司对与任何包含、经由、或链接、下载或从任何与本网站有关服务所获得的资讯、内容或广告，不声明或保证其内容的正确性、真实性或可靠性；并且，对于您透过本网广告、资讯或要约而展示、购买或取得的任何产品、资讯或资料，本网站亦不负品质保证的责任。您与此接受并承认信赖任何信息所产生之风险应自行承担，本网对任何使用或提供本网站信息的商业活动及其风险不承担任何责任。</p>
                    <p>4. 本网站若因线路及非本公司控制范围外的硬件故障或其它不可抗力，以及黑客政击、计算机病毒侵入或发而造成的个人资料泄露、丢失、被盗用或被篡改等，本网站亦不负任何责任。</p>
                    <p>5. 当本网站以链接形式推荐其他网站内容时，本网站并不对这些网站或资源的真实性、可用性、合法性负责，且不保证从这些网站获取的任何内容、产品、服务或其他材料的真实性、合法性，对于任何因使用或信赖从此类网站上获取的内容、产品、资源、服务或其他材料而造成的任何直接或间接的损失均由您自行承担，本网站均不承担任何责任。</p>
                </div>
            </div>
            <div class="cont-btn">
                展开全部
                <i class="iconfont icon-zhankaiquanbu"></i>
            </div>
        </div>
    </div>
    <div class="website-declaration">
        <span>友情提醒：</span>投资有风险 加盟需谨慎。为规避投资风险，建议您在投资前务必多咨询，多考察，降低投资风险
        <br />
        <span>网站声明：</span>世纪母婴网为用户免费提供浏览与咨询服务，本网站遵循相关法律法规严格审核相关内容，只要您使用本网站服务 ，即代表您已阅读并同意《世纪母婴网用户使用协议》
    </div>

@stop
@section('footlibs')
    <script src="/mobile/js/swiper.min.js"></script>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
                stopOnLastSlide: false,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        })
        $(".tab-box-flex span").click(function () {
            $(".catering-list").hide().eq($(this).index()).show();
            $(this).addClass("cur").siblings().removeClass("cur");
        });
    </script>
@stop
