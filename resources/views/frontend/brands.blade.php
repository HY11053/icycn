@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class="main">
        {{--<div class="bn1190"><img src="/receptions/images/temp/bn8.jpg" alt=""></div>--}}
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></div>
        <div class="main clearfix">
            <div class="cate_sort">
                <dl>
                    <dt>项目分类</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    @foreach($topbrandnavs as $topbrandnav)
                    <dd><a target="_self" href="/{{$topbrandnav->real_path}}/">{{$topbrandnav->typename}}</a></dd>
                    @endforeach
                </dl>
                <dl>
                    <dt>投资金额</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    @foreach($touziids as $touziid)
                        <dd><a target="_self" href="/{{$thistypeinfo->real_path}}/filter/p{{$touziid}}/">{{$investments[$touziid]}}</a></dd>
                    @endforeach
                </dl>
                <dl>
                    <dt>店铺面积</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    @foreach($acreagements as $index=>$acreagement)
                        <dd><a target="_self" href="/{{$thistypeinfo->real_path}}/filter/m{{$index}}/">{{$acreagement}}平米</a></dd>
                    @endforeach

                </dl>
                <dl>
                    <dt>所在地区</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    @foreach($arealists as $arealist)
                    <dd><a target="_self" href="/{{$thistypeinfo->real_path}}/filter/a{{$arealist->id}}/">{{$arealist->regionname}}</a></dd>
                   @endforeach
                </dl>
            </div>
            <div class="rec_brand_list">
                <ul>
                    @foreach($flashlingshibrands as $flashlingshibrand)
                    <li><a href="/xm/{{$flashlingshibrand->id}}.shtml" target="_blank" title="{{$flashlingshibrand->brandname}}" class="pic"><img src="{{$flashlingshibrand->litpic}}" alt="{{$flashlingshibrand->brandname}}"><em>{{$flashlingshibrand->brandname}}</em></a></li>
                   @endforeach
                    </ul>
            </div>

            <div class="w910">
                <div class="order_item">
                    <div class="order_item_l">
                        <a class="cur" href="#" rel="nofollow">默认排序</a>
                        <a href="#" rel="nofollow">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
                    </div>
                    <div class="order_item_r">共找到<span>{{$pagelists->total()}}</span>个{{str_replace('加盟','',$thistypeinfo->typename)}}加盟项目</div>
                </div>

                <div class="brand_list" id="productBox">
                    @foreach($pagelists as $pagelist)
                        <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/xm/{{$pagelist->id}}.shtml" class="pp-pic-name" title="{{$pagelist->brandname}}"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->brandname}}"></a>
                            <p class="pro_p">{{$pagelist->description}}</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/xm/{{$pagelist->id}}.shtml" title="{{$pagelist->brandname}}"><h3 class="list-Name fl">{{$pagelist->brandname}}</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">{{$pagelist->brandpay}}</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">{{$pagelist->brandarea}}</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">{{$pagelist->brandnum}}</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">{{$pagelist->brandattch}}</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/xm/{{$pagelist->id}}.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="page">
                    {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                </div>
            </div>

            <div class="w260">
                <div class="w260_calculator">
                    <div class="hd"><em>260000</em>元</div>
                    <div class="bd">
                        <form onsubmit="return false;">
                            <ul>
                                <li>
                                    <select id="r_Shen" name="r_Shen" class="select_Shen" onchange="set_city(this, document.getElementById('r_city'));">
                                        <option value="0">省/市</option>
                                        <option value="安徽">A 安徽</option>
                                        <option value="北京">B 北京</option>
                                        <option value="重庆">C 重庆</option>
                                        <option value="福建">F 福建</option>
                                        <option value="广西">G 广西</option>
                                        <option value="贵州">G 贵州</option>
                                        <option value="广东">G 广东</option>
                                        <option value="甘肃">G 甘肃</option>
                                        <option value="海南">H 海南</option>
                                        <option value="湖北">H 湖北</option>
                                        <option value="黑龙江">H 黑龙江</option>
                                        <option value="河南">H 河南</option>
                                        <option value="河北">H 河北</option>
                                        <option value="湖南">H 湖南</option>
                                        <option value="江苏">J 江苏</option>
                                        <option value="吉林">J 吉林</option>
                                        <option value="江西">J 江西</option>
                                        <option value="辽宁">L 辽宁</option>
                                        <option value="内蒙古">N 内蒙古</option>
                                        <option value="宁夏">N 宁夏</option>
                                        <option value="澳门">O 澳门</option>
                                        <option value="青海">Q 青海</option>
                                        <option value="四川">S 四川</option>
                                        <option value="陕西">S 陕西</option>
                                        <option value="上海">S 上海</option>
                                        <option value="山东">S 山东</option>
                                        <option value="山西">S 山西</option>
                                        <option value="台湾">T 台湾</option>
                                        <option value="天津">T 天津</option>
                                        <option value="西藏">X 西藏</option>
                                        <option value="香港">X 香港</option>
                                        <option value="新疆">X 新疆</option>
                                        <option value="云南">Y 云南</option>
                                        <option value="浙江">Z 浙江</option>
                                    </select>
                                    <select id="r_city" name="r_city" class="select_Citys">
                                        <option value="0">市/地区</option>
                                    </select>
                                </li>
                                <li><input type="text" class="text area_text" name="dpzj" id="dpzj_left" placeholder="店铺租金"><em>元</em></li>
                                <li><input type="text" class="text area_text" name="rycb" id="rycb_left" placeholder="人员成本"><em>元</em></li>
                                <li><input type="text" class="text area_text" name="mrcb" id="mrcb_left" placeholder="日成交量"><em>元</em></li>
                                <li><input type="text" class="text area_text" name="mdjj" id="mdjj_left" placeholder="每单均价"><em>元</em></li>
                                <li><input type="text" class="text area_text" name="jmfy" id="jmfy_left" placeholder="加盟费用"><em>元</em></li>
                                <li><input type="text" class="text area_text" name="phone" id="zxys_phonenumber_left" placeholder="输入手机号，获取报价结果"></li>
                                <li><input type="button" class="btn" id="btn_hqbj" name="btn_hqbj" value="获取报价"></li>
                            </ul>
                        </form>
                    </div>
                    <!--计算结果 开始-->
                    <div class="w260_result" id="results">
                        <div class="w260_result_total"><span class="w260_result_span">您的开店预算</span><b id="bprice">？</b><span>元</span></div>
                    </div>
                    <!--计算结果 结束-->
                </div>
                <script src="/receptions/js/GlobalProvinces.js" type="text/javascript"></script>
                <div class="s_new_bt">
                    <h3> <i></i> <a href="/paihangbang/{{$thistypeinfo->real_path}}/">{{str_replace('加盟','',$thistypeinfo->typename)}}排行榜 </a></h3>
                    <div class="rank_bd">
                        <ul>
                            @foreach($paihangbangs as $paihangbang)
                                @if($loop->first)
                                <li class="top">
                                    <div class="first_num" href="/xm/{{$paihangbang->id}}.shtml" target="_blank" title="{{$paihangbang->brandname}}"><i class="num">1 </i> <img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}">
                                    </div>
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


                <div class="side_news">
                    <div class="common_bt">
                        <div class="tit">推荐文章</div>
                    </div>
                    <div class="common_list">
                        <ul>
                            @foreach($cnewslists as $cnewslist)
                            <li><a href="/news/{{$cnewslist->id}}.shtml" target="_blank" title="{{$cnewslist->title}}">{{$cnewslist->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-ff p20">
                    <div class="lh24">
                        <h3 class="f22">{{str_replace('加盟','',$thistypeinfo->typename)}}项目</h3>
                    </div>
                    <ul class="join-project mt30">
                        @foreach($hotbrands as $hotbrand)
                        <li>
                            <a target="_blank" href="/xm/{{$hotbrand->id}}.shtml" class="img-block magnify"><img src="{{$hotbrand->litpic}}" alt="{{$hotbrand->brandname}}"></a>
                            <p class="f16"><a target="_blank" href="/xm/{{$hotbrand->id}}.shtml">{{$hotbrand->brandname}}</a></p>
                            <p class="f14">投资金额：<span class="s-oe">{{$hotbrand->brandpay}}</span></p>
                            <p class="f14">加盟门店数：<span class="s-oe">{{$hotbrand->brandnum}}</span></p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
@stop
