@extends('frontend.frontend')
@section('title'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜_{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行榜-{{config('app.indexname')}}@stop
@section('keywords'){{str_replace('加盟','',$thistypeinfo->typename)}}加盟排行榜,{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行榜,{{str_replace('加盟','',$thistypeinfo->typename)}}品牌排行@stop
@section('description')中教招商网为您全方位解读{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌排行信息。分享{{str_replace('加盟','',$thistypeinfo->typename)}}门店信息，{{str_replace('加盟','',$thistypeinfo->typename)}}排行榜分类提供性价比最高{{str_replace('加盟','',$thistypeinfo->typename)}}品牌加盟排行榜信息，供你快速的选择适合自己的{{str_replace('加盟','',$thistypeinfo->typename)}}加盟品牌@stop
@section('header_libs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <link rel="stylesheet" type="text/css" href="/receptions/css/news.css"/>
@stop
@section('main_content')
    <div id="ny_main">
        <div class="fenlei_jianjie">
            <div class="fenlei_jianjie_ph"></div>
            <div class="fenlei_jianjie_c">	中教招商网综合排行榜是中教招商网推出的互联网教育品牌加盟品牌排行榜。所有入驻中教招商网的优质品牌都将获得一定的排名。本次排名根据中教招商网用户的偏好等综合因素进行排名，加盟排行榜不作为官方和权威的行业排名，仅供投资者进行参考。中教招商网定期对所有教育品牌品牌进行排名，包括早教品牌排名榜、幼儿园品牌排行榜、舞蹈培训加盟品牌排行榜、国学馆排行榜等……中教招商网温馨提示:所有创业加盟项目及相关信息均来自互联网及用户自主添加，筛选品牌前务必进行实地考察和咨询。
            </div>
        </div>
        <div class="paihang_center">
            <div class="path"><p>当前位置：<a href="/">首页</a>&gt;<a class="dq" href="/paihangbang/" title="品牌排行榜">品牌排行榜</a></p></div>
            <div class="paihang_left">
                <div class="ph_l">
                    <p class="tit">中教招商网排行榜</p>
                    <ul>
                        <li><a target="_self" href="/paihangbang/xm/">教育机构加盟品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/zaojiao/">早教加盟品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/shaoer/">少儿英语加盟品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/youeryuan/">幼儿园加盟品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/qianneng/">潜能教育品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/liuxue/">出国留学品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/xuedifudao/">学习辅导品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/jiqiren/">机器人教育品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/wudao/">舞蹈培训品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/yishujiaoyu/">艺术教育品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/shaoerbiancheng/">少儿编程品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/guoxue/">国学馆品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/meishu/">美术教育品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/zuowen/">作文培训品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/taijiao/">胎教品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/yiduiyi/">一对一辅导品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/taiquandao/">跆拳道品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/youyongguan/">游泳馆品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/yinyuepeixun/">音乐培训品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/taoyi/">手工陶艺品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/quannaokf/">全脑开发品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/wangxiao/">网校品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/other/">其他品牌排行榜</a></li>
                        <li><a target="_self" href="/paihangbang/paihangbang/">排行榜品牌排行榜</a></li>
                    </ul>
                </div>
            </div>
            <div class="paihang_right">
                <div class="sheyLbox">
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/467.shtml" class="pp-pic-name" title="乐宁教育"><img src="/images/thread/2018/11/20/4193349c44f9de70206b4d22b0f6dc41.png" alt="乐宁教育"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第1名</em>
                                            <a href="/xm/467.shtml" title="乐宁教育" target="_blank">乐宁教育</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：上海乐宁教育培训有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海市虹口区西江湾路388号(B)04层05F/36/37B</p>
                                    <p class="ismoney">投资金额：￥20-30万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数23 </li>
                                        <li class="renqi" style="color: red">指数 2476</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 300-500平米㎡</li>
                                        <li class="taoxi">品牌发源地 上海</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 816 </li>
                                        <li class="renqi">成立时间 2007 </li>
                                        <li class="pinglun">注册资金 1050万</li>
                                        <li class="zuopin">加盟区域 北京、深圳、天津</li>
                                        <li class="taoxi">经营范围 少儿英语</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>协助近40万青少儿取得英语「交际能力+学业表现」的成果</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/355.shtml" class="pp-pic-name" title="金色童年幼儿园"><img src="http://www.jjedu.com.cn/storage/uploads/image/2018/10/25/f1cb2b0c0765edb2bfaf59c382447100.jpg" alt="金色童年幼儿园"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第2名</em>
                                            <a href="/xm/355.shtml" title="金色童年幼儿园" target="_blank">金色童年幼儿园</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：金色童年幼教集团 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 山东省聊城市</p>
                                    <p class="ismoney">投资金额：￥38.98-95.98万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>在岗投资、自由创业</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数20 </li>
                                        <li class="renqi" style="color: red">指数 2255</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 300-500平米㎡</li>
                                        <li class="taoxi">品牌发源地 聊城</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 359 </li>
                                        <li class="renqi">成立时间 2004 </li>
                                        <li class="pinglun">注册资金 1000万</li>
                                        <li class="zuopin">加盟区域 郑州、重庆、深圳</li>
                                        <li class="taoxi">经营范围 幼儿园</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>坚持高端办园、提供高品质保教服务</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/23.shtml" class="pp-pic-name" title="爱贝少儿英语"><img src="/images/thread/2018/09/05/20180905164936_74492.jpg" alt="爱贝少儿英语"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第3名</em>
                                            <a href="/xm/23.shtml" title="爱贝少儿英语" target="_blank">爱贝少儿英语</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：ABIE爱贝国际少儿英语 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海市浦东新区陆家嘴花旗集团大厦23楼</p>
                                    <p class="ismoney">投资金额：￥10-20万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>白领、工薪阶层</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数112 </li>
                                        <li class="renqi" style="color: red">指数 2197</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 500平米以上㎡</li>
                                        <li class="taoxi">品牌发源地 上海市</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 3078 </li>
                                        <li class="renqi">成立时间 2013年 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 石家庄、醴陵、东营</li>
                                        <li class="taoxi">经营范围 在线教育谘询、在线英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>励步一直坚持远离浮躁与功利，做好真正的素质教育事业</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/96.shtml" class="pp-pic-name" title="上海金太阳幼儿园"><img src="/images/thread/2018/09/06/20180906103926_93970.jpg" alt="上海金太阳幼儿园"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第4名</em>
                                            <a href="/xm/96.shtml" title="上海金太阳幼儿园" target="_blank">上海金太阳幼儿园</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：上海金太阳幼儿园 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海市虹口区</p>
                                    <p class="ismoney">投资金额：￥20-30万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>下岗工人、80后创业</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数189 </li>
                                        <li class="renqi" style="color: red">指数 2160</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 200-300平米㎡</li>
                                        <li class="taoxi">品牌发源地 上海市</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 4900 </li>
                                        <li class="renqi">成立时间 2015年 </li>
                                        <li class="pinglun">注册资金 2000万</li>
                                        <li class="zuopin">加盟区域 石家庄、苏州、瑞安</li>
                                        <li class="taoxi">经营范围 在线教育谘询、在线英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>独享总部支持，轻松打开市场，坐享财富事业</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/474.shtml" class="pp-pic-name" title="灵子舞蹈"><img src="/storage/uploads/2018/11/23/a1fb584d02d95e92653c5f70cac8a02e.png" alt="灵子舞蹈"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第5名</em>
                                            <a href="/xm/474.shtml" title="灵子舞蹈" target="_blank">灵子舞蹈</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：广州灵子文化艺术有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 广州市增城区新塘镇解放北路173号</p>
                                    <p class="ismoney">投资金额：￥20万～30万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资爱好者、工薪阶层、下岗工人、自由职业者、</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数500 </li>
                                        <li class="renqi" style="color: red">指数 1821</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 500平米以上㎡</li>
                                        <li class="taoxi">品牌发源地 广州</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 793 </li>
                                        <li class="renqi">成立时间 2011 </li>
                                        <li class="pinglun">注册资金 2000万</li>
                                        <li class="zuopin">加盟区域 来宾、嘉兴、白山、哈密、克拉玛依、</li>
                                        <li class="taoxi">经营范围 教育培训，中小学教育，教育加盟咨询，英语培训，</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>健身，娱乐，就业一体化</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/315.shtml" class="pp-pic-name" title="仁德国际教育"><img src="/images/thread/2018/10/19/f2b305610a7c85bb56f26c30b0533d3a.jpg" alt="仁德国际教育"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第6名</em>
                                            <a href="/xm/315.shtml" title="仁德国际教育" target="_blank">仁德国际教育</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：北京东方仁德国际教育 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京市朝阳区北辰东路8号汇园国际F座</p>
                                    <p class="ismoney">投资金额：￥10-20万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数61 </li>
                                        <li class="renqi" style="color: red">指数 1799</li>
                                        <li class="pinglun">品牌好评97%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 456 </li>
                                        <li class="renqi">成立时间 2010 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 郑州、上海、天津</li>
                                        <li class="taoxi">经营范围 少儿英语</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>集高端数字化教育产品研发、教研项目推广、教学配套服务于一体的教育科研机构</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3618.shtml" class="pp-pic-name" title="辫豆HABA儿童馆"><img src="/storage/uploads/2018/12/06/f190e65fe4ed753d2c7e1fa2bc8220a2.png" alt="辫豆HABA儿童馆"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第7名</em>
                                            <a href="/xm/3618.shtml" title="辫豆HABA儿童馆" target="_blank">辫豆HABA儿童馆</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：辫豆HABA儿童馆 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海市闵行区程家桥支路201弄智地大厦301室</p>
                                    <p class="ismoney">投资金额：￥15-20万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数500 </li>
                                        <li class="renqi" style="color: red">指数 1760</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 上海</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 816 </li>
                                        <li class="renqi">成立时间 2004 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 北京、上海、天津</li>
                                        <li class="taoxi">经营范围 全脑开发、早教</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>世界上最好的幼儿逻辑思维课程之一，真正做到“玩中学”、“做中学”</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3616.shtml" class="pp-pic-name" title="巧虎早教"><img src="/storage/uploads/2018/11/30/bbe236ad00272a61be4d9bd8210802fd.png" alt="巧虎早教"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第8名</em>
                                            <a href="/xm/3616.shtml" title="巧虎早教" target="_blank">巧虎早教</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：倍乐生商贸（中国）有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海市徐汇区中山西路</p>
                                    <p class="ismoney">投资金额：￥10-15万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数61 </li>
                                        <li class="renqi" style="color: red">指数 1723</li>
                                        <li class="pinglun">品牌好评99%</li>
                                        <li class="zuopin">所需面积 100平米以下㎡</li>
                                        <li class="taoxi">品牌发源地 上海</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 599 </li>
                                        <li class="renqi">成立时间 2007 </li>
                                        <li class="pinglun">注册资金 12500万</li>
                                        <li class="zuopin">加盟区域 北京、上海、天津</li>
                                        <li class="taoxi">经营范围 早教</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>“全方位学习”理念和内容，设计丰富多彩的学习活动来激发孩子的兴趣</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/335.shtml" class="pp-pic-name" title="婴乐早教"><img src="http://www.jjedu.com.cn/storage/uploads/image/2018/10/23/14b7fb6d2282a98f4d3f52d731ee8906.png" alt="婴乐早教"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第9名</em>
                                            <a href="/xm/335.shtml" title="婴乐早教" target="_blank">婴乐早教</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：婴乐早教中心 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京回龙观</p>
                                    <p class="ismoney">投资金额：￥20-30万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数17 </li>
                                        <li class="renqi" style="color: red">指数 1698</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 300-500平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 301 </li>
                                        <li class="renqi">成立时间 2014 </li>
                                        <li class="pinglun">注册资金 100万</li>
                                        <li class="zuopin">加盟区域 郑州、上海、天津</li>
                                        <li class="taoxi">经营范围 早教</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>让孩子在健康聪明的基础上完善性格</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/2263.shtml" class="pp-pic-name" title="弘艺跆拳道"><img src="/storage/uploads/2019/01/08/42e6093320ee58b1c763a48f0861bc7a.png" alt="弘艺跆拳道"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第10名</em>
                                            <a href="/xm/2263.shtml" title="弘艺跆拳道" target="_blank">弘艺跆拳道</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：弘艺跆拳道俱乐部 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 浙江省宁波市姜山嘉悦广场三楼</p>
                                    <p class="ismoney">投资金额：￥6.68~9.43万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>二次创业、兼职教师、下岗工人、80后</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数930 </li>
                                        <li class="renqi" style="color: red">指数 1585</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 浙江</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 558 </li>
                                        <li class="renqi">成立时间 2007-07-24 </li>
                                        <li class="pinglun">注册资金 2000万</li>
                                        <li class="zuopin">加盟区域 普洱、宝鸡、平凉、庆阳、廊坊</li>
                                        <li class="taoxi">经营范围 教育培训，文化艺术策划，中小学教育，教育加盟咨询</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>使每位学员懂礼感恩，积极健康，善于合作，提升自信</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3609.shtml" class="pp-pic-name" title="妙事多幼教"><img src="/storage/uploads/2018/12/13/9d32a0c3c0354601b45567553ffa00ea.png" alt="妙事多幼教"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第11名</em>
                                            <a href="/xm/3609.shtml" title="妙事多幼教" target="_blank">妙事多幼教</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：妙事多幼教 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海</p>
                                    <p class="ismoney">投资金额：￥2.4-5.3万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数589 </li>
                                        <li class="renqi" style="color: red">指数 1504</li>
                                        <li class="pinglun">品牌好评97%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 美国</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 684 </li>
                                        <li class="renqi">成立时间 1994-01-13 </li>
                                        <li class="pinglun">注册资金 150万</li>
                                        <li class="zuopin">加盟区域 北京、上海、天津</li>
                                        <li class="taoxi">经营范围 教育培训，文化艺术交流，中小学教育，英语培训，</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>在全世界以多种语言在许多国家的幼儿教学中实施和运用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3619.shtml" class="pp-pic-name" title="禾普情商教育"><img src="/storage/uploads/2018/12/06/0fa33ca90f9d70021ef8c3936447e110.jpg" alt="禾普情商教育"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第12名</em>
                                            <a href="/xm/3619.shtml" title="禾普情商教育" target="_blank">禾普情商教育</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：长春禾普情商教育 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 长春</p>
                                    <p class="ismoney">投资金额：￥13.58万-24.78万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资爱好者、兼职教师、下岗工人、白领</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数668 </li>
                                        <li class="renqi" style="color: red">指数 1493</li>
                                        <li class="pinglun">品牌好评99%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 长春</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 1024 </li>
                                        <li class="renqi">成立时间 2008 </li>
                                        <li class="pinglun">注册资金 200万</li>
                                        <li class="zuopin">加盟区域 襄樊、喀什、荆门、恩施</li>
                                        <li class="taoxi">经营范围 教育培训，文化艺术策划，中小学教育，英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>国内唯一通过政府教育部门批准的专业从事3—12岁儿童情商教育的权威机构。</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3607.shtml" class="pp-pic-name" title="音乐谷儿童艺术培训"><img src="/storage/uploads/2018/12/25/09ee1047d07db9127e9f9dd87cf67c7d.jpg" alt="音乐谷儿童艺术培训"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第13名</em>
                                            <a href="/xm/3607.shtml" title="音乐谷儿童艺术培训" target="_blank">音乐谷儿童艺术培训</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：音乐谷儿童娱乐教育 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 上海</p>
                                    <p class="ismoney">投资金额：￥5.18~8.63万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>兼职教师、工薪阶层、下岗工人、自由职业者</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数834 </li>
                                        <li class="renqi" style="color: red">指数 1493</li>
                                        <li class="pinglun">品牌好评98%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 上海</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 531 </li>
                                        <li class="renqi">成立时间 2000-01-01 </li>
                                        <li class="pinglun">注册资金 2000万</li>
                                        <li class="zuopin">加盟区域 舟山、龙岩、东营、玉树、邵阳</li>
                                        <li class="taoxi">经营范围 文化艺术交流，中小学教育，教育加盟咨询，英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>为孩子提供充满童真的儿童音乐系列用品</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/2348.shtml" class="pp-pic-name" title="韩武跆拳道"><img src="/storage/uploads/2019/01/21/d3f445440b45ddf307bb0e845e46e89c.png" alt="韩武跆拳道"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第14名</em>
                                            <a href="/xm/2348.shtml" title="韩武跆拳道" target="_blank">韩武跆拳道</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：韩武跆拳道有限责任公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京市海淀区</p>
                                    <p class="ismoney">投资金额：￥7.34~9.95万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资爱好者、工薪阶层、大学生、自由职业者</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数673 </li>
                                        <li class="renqi" style="color: red">指数 1463</li>
                                        <li class="pinglun">品牌好评97%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 695 </li>
                                        <li class="renqi">成立时间 1998-09-24 </li>
                                        <li class="pinglun">注册资金 1500万</li>
                                        <li class="zuopin">加盟区域 枣庄、湖州、石河子、鄂州、永州</li>
                                        <li class="taoxi">经营范围 教育培训，教育投资咨询，中小学教育，英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>打造韩武跆拳道多元风格购物新体验和高标准销售体系</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/2590.shtml" class="pp-pic-name" title="尚学教育"><img src="/storage/uploads/2019/01/09/16d57b2d0ebff09d08baa36d47d1a53d.png" alt="尚学教育"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第15名</em>
                                            <a href="/xm/2590.shtml" title="尚学教育" target="_blank">尚学教育</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：尚学教育有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京市朝阳区</p>
                                    <p class="ismoney">投资金额：￥6~10万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>二次创业、教育投资爱好者、兼职教师、80后</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数215 </li>
                                        <li class="renqi" style="color: red">指数 1433</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 577 </li>
                                        <li class="renqi">成立时间 2004-09-14 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 南昌、保定、合肥、大同、梅州</li>
                                        <li class="taoxi">经营范围 教育培训，教育投资咨询，文化艺术交流，文化艺术策划</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>有着多年在青少年教育领域的全新经营经验</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/57.shtml" class="pp-pic-name" title="艺术才谜早教"><img src="/images/thread/2018/09/06/20180906100305_52073.jpg" alt="艺术才谜早教"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第16名</em>
                                            <a href="/xm/57.shtml" title="艺术才谜早教" target="_blank">艺术才谜早教</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：艺术才谜 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京市北京市朝阳区北京市朝阳区湖景东路9号新奥购物中心B2层B2-12号</p>
                                    <p class="ismoney">投资金额：￥15~20万元
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资者、工薪阶层</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数130 </li>
                                        <li class="renqi" style="color: red">指数 1393</li>
                                        <li class="pinglun">品牌好评99%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京市</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 1650 </li>
                                        <li class="renqi">成立时间 2013年 </li>
                                        <li class="pinglun">注册资金 200万</li>
                                        <li class="zuopin">加盟区域 南阳、常宁、高平</li>
                                        <li class="taoxi">经营范围 在线教育谘询、在线英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>课程设置丰富，专业教师团队助阵，培训成果高效显着，深得信赖</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3161.shtml" class="pp-pic-name" title="童画少儿美术教育"><img src="/storage/uploads/2018/12/24/20d897c0534120640a0e582c05e6bdd5.jpg" alt="童画少儿美术教育"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第17名</em>
                                            <a href="/xm/3161.shtml" title="童画少儿美术教育" target="_blank">童画少儿美术教育</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：深圳童画教育管理有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 广东省深圳市龙岗区中央悦城长兴北路童画</p>
                                    <p class="ismoney">投资金额：￥5万~10万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资爱好者、兼职教师、下岗工人、白领</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数175 </li>
                                        <li class="renqi" style="color: red">指数 1378</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 广东省深圳市</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 610 </li>
                                        <li class="renqi">成立时间 2001-03-01 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 十堰、吴忠、辽阳、赤峰、河源</li>
                                        <li class="taoxi">经营范围 文化艺术交流，文化艺术策划，中小学教育，英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>锻造成熟人格，精彩人生</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/630.shtml" class="pp-pic-name" title="UBTV小主播"><img src="/storage/uploads/2018/11/28/625f143dcab0469d88f1e27d78d7a5f8.png" alt="UBTV小主播"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第18名</em>
                                            <a href="/xm/630.shtml" title="UBTV小主播" target="_blank">UBTV小主播</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：杭州优宝文化传媒有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 浙江省杭州市西湖区</p>
                                    <p class="ismoney">投资金额：￥19.9万-25.59万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>自由创业,在岗投资</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数846 </li>
                                        <li class="renqi" style="color: red">指数 1370</li>
                                        <li class="pinglun">品牌好评98%</li>
                                        <li class="zuopin">所需面积 100平米以下㎡</li>
                                        <li class="taoxi">品牌发源地 杭州</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 619 </li>
                                        <li class="renqi">成立时间 2008 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 北京、上海、天津</li>
                                        <li class="taoxi">经营范围 教育培训，文化艺术策划，教育加盟咨询，英语培训，</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>给孩子一个独一无二的天才视野的教育理念</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3602.shtml" class="pp-pic-name" title="威凯幼儿园"><img src="/storage/uploads/2018/12/11/3c3711f2dec661bb0eeccd705098eb8b.jpg" alt="威凯幼儿园"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第19名</em>
                                            <a href="/xm/3602.shtml" title="威凯幼儿园" target="_blank">威凯幼儿园</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：威凯幼儿园 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 河南省开封市鼓楼区</p>
                                    <p class="ismoney">投资金额：￥42万~109万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>教育投资爱好者、兼职教师、工薪阶层、下岗工人</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数576 </li>
                                        <li class="renqi" style="color: red">指数 1363</li>
                                        <li class="pinglun">品牌好评96%</li>
                                        <li class="zuopin">所需面积 300-500平米㎡</li>
                                        <li class="taoxi">品牌发源地 北京</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 680 </li>
                                        <li class="renqi">成立时间 2010-06-15 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 吉林、克拉玛依、锦州、拉萨、定安县</li>
                                        <li class="taoxi">经营范围 文化艺术交流，文化艺术策划，中小学教育，教育加盟咨询</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>摆脱“成人化”教育，最求自然成长</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="sheyLlist clearfix">

                        <div class="hdzjbox">
                            <div class="pro-Img fl">
                                <a target="_blank" href="/xm/3096.shtml" class="pp-pic-name" title="乐游宝宝亲子游泳"><img src="/storage/uploads/2018/12/25/ab07a9987ff09ce50c23022738bd9088.jpg" alt="乐游宝宝亲子游泳"></a>
                            </div>
                        </div>
                        <div class="sheyincont">
                            <div class="clearfix">
                                <div class="incontTop">
                                    <div class="clearfix">
                                        <h3 class="inshoptit"><em class="paihang">第20名</em>
                                            <a href="/xm/3096.shtml" title="乐游宝宝亲子游泳" target="_blank">乐游宝宝亲子游泳</a>
                                        </h3>
                                        <ul class="inrzbox clearfix">
                                            <li><a class="hdicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="ddlicon rz_show"><em></em><i></i></a></li>
                                            <li><a class="hoticon rz_show"><em></em><i></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="xiaobaonewbox">
                                    </div>
                                    <p class="inaddtxt">公司名称：爱乐土教育科技（北京）有限公司 </p>
                                    <p class="inaddtxt inyuyuepeo">公司地址： 北京市朝阳区来广营勇士营30号</p>
                                    <p class="ismoney">投资金额：￥5万~9万
                                    </p>
                                    <p class="inpostcont"><span>适合人群<em></em></span>二次创业、教育投资爱好者、工薪阶层、大学生</p> </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">门店总数159 </li>
                                        <li class="renqi" style="color: red">指数 1361</li>
                                        <li class="pinglun">品牌好评95%</li>
                                        <li class="zuopin">所需面积 100-200平米㎡</li>
                                        <li class="taoxi">品牌发源地 美国</li>
                                    </ul>
                                </div>
                                <div class="iniconbox">
                                    <ul>
                                        <li class="xishu">申请加盟 783 </li>
                                        <li class="renqi">成立时间 2012-01-13 </li>
                                        <li class="pinglun">注册资金 500万</li>
                                        <li class="zuopin">加盟区域 万宁、柳州、六安、金华、南昌</li>
                                        <li class="taoxi">经营范围 文化艺术交流，文化艺术策划，教育加盟咨询，英语培训</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="newyouhui">
                                <ul class="newyouhuiinner coupon_more ">
                                    <li><span>【品牌特色】<em></em></span>提供源于美国的国际化亲子游泳早教课程</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
@stop