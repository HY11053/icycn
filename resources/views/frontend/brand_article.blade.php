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
        <div class="bn1190"><img src="http://www.58lingshi.com/receptions/images/temp/bn9.jpg" alt=""></div>
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/lingshidianpp/">零食店品牌</a></div>
        <div class="main clearfix">
            <div class="layout2">
                <div class="brand_slide">
                    <ul class="bigImg" style="position: relative; width: 296px; height: 295px;">
                        <li style="position: absolute; width: 296px; left: 0px; top: 0px; display: none;"><img src="/images/thread/2017/04/14/88c046aca6ee1fd046f2a0ac9a36d2d9.jpg" alt="【良品铺子】"></li>
                        <li style="position: absolute; width: 296px; left: 0px; top: 0px; display: list-item;"><img src="/images/thread/2017/04/14/f33a4e08764e3d0d38422d50eb737917.jpg" alt="【良品铺子】"></li>
                        <li style="position: absolute; width: 296px; left: 0px; top: 0px; display: none;"><img src="/images/thread/2017/04/14/36b40eb8dbc403b116aaa5af608378fe.jpg" alt="【良品铺子】"></li>
                    </ul>
                    <div class="smallScroll"><a class="sPrev prevStop" href="javascript:void(0)"></a>
                        <div class="smallImg">
                            <ul>
                                <li class=""><img src="/images/thread/2017/04/14/88c046aca6ee1fd046f2a0ac9a36d2d9.jpg" alt="【良品铺子】"></li>
                                <li class="on"><img src="/images/thread/2017/04/14/f33a4e08764e3d0d38422d50eb737917.jpg" alt="【良品铺子】"></li>
                                <li class=""><img src="/images/thread/2017/04/14/36b40eb8dbc403b116aaa5af608378fe.jpg" alt="【良品铺子】"></li>


                            </ul>
                        </div>
                        <a class="sNext nextStop" href="javascript:void(0)"></a> </div>
                </div>

                <div class="info">
                    <h1 class="tit">【良品铺子】</h1>
                    <div class="detail">
                        <ul>
                            <li>投资金额：<span class="price">30~60万</span></li>
                            <li>所属行业：<span class="crumbs">零食</span></li>
                        </ul>
                    </div>
                    <div class="tit_pice">
                        <ul>
                            <li>成立时间：<span class="price">2006</span></li>
                            <li>门店总数：<span class="price">1200</span></li>
                            <li>加盟区域：<span class="price">湖南、湖北、江西等</span></li>
                            <li>适合人群：<span class="price">白领、二次创业、自由职业者等</span></li>
                            <li>经营范围：<span class="price">零食、坚果、饮料</span></li>
                            <li>店铺面积：<span class="price">60㎡</span></li>
                        </ul>
                    </div>
                    <div class="jiem">
                        <ul>
                            <li>意向加盟 <span class="price">8020</span></li>
                            <li style=" margin-left:35px">申请加盟：<span class="price">36520</span></li>
                            <li style=" margin-left:35px">品牌好评率 <span class="price">95%</span></li>
                        </ul>
                    </div>
                    <div class="tel">联系电话：<span>400-8896-216</span></div>
                    <div class="btn_area"> <a id="chatNowButton" href="#msg" class="zixun_btn">立即咨询</a> <a href="javascript:;" class="suoyao_btn ico-quoted">成本预算</a> </div>
                </div>
                <div class="layout2_right fl">
                    <div class="comp_box">
                        <div class="comp_info"> <b>公司信息</b>
                            <div class="comp_logo"> <img src="/images/thread/2017/04/14/0bd504b4a3542dfd6af6417b00962879.png" alt="良品铺子"></div>
                            <div class="comp_info_con">
                                <h3 title="湖北良品铺子食品有限公司">湖北良品铺子食品有限公司</h3>
                                <ul>
                                    <li><span>企业性质</span><em>国有企业</em></li>
                                    <li><span>注册资金</span><em>100 万元</em></li>
                                    <li><span>所在地</span><em>武汉</em></li>
                                    <li><span>商业特许经营许可证号：</span><em>单店加盟</em></li>
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
                                    <li class="js_join_1 cur"><a href="javascript:void(0)">品牌介绍</a></li>
                                    <li class="js_join_2"><a href="javascript:void(0)">加盟优势</a></li>
                                    <li class="js_join_3"><a href="javascript:void(0)">加盟流程</a></li>
                                    <li class="js_join_4"><a href="javascript:void(0)">开店要求</a></li>
                                    <li class="js_join_5"><a href="javascript:void(0)">开店必看</a></li>
                                    <li class="js_join_6"><a href="javascript:void(0)">投资分析</a></li>
                                    <li class="js_join_7"><a href="javascript:void(0)">用户点评</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news_center">

                        <div class="join_cont">
                            <div class="join_intro">
                                {!! $thisarticleinfos->body !!}
                            </div>
                            <div class="join_tit"> <h2 class="tit">【良品铺子】<em>品牌展示</em></h2> </div>
                            <div class=" join_img">
                                <ul>
                                    <li><img src="/images/thread/2017/04/14/88c046aca6ee1fd046f2a0ac9a36d2d9.jpg" alt="【良品铺子】" style="border-radius: 5px;"></li>
                                    <li><img src="/images/thread/2017/04/14/f33a4e08764e3d0d38422d50eb737917.jpg" alt="【良品铺子】" style="border-radius: 5px;"></li>
                                    <li><img src="/images/thread/2017/04/14/36b40eb8dbc403b116aaa5af608378fe.jpg" alt="【良品铺子】" style="border-radius: 5px;"></li>
                                </ul>
                            </div>
                            <div class="cy_img"><img src="/receptions/images/cye_03.jpg" alt="加盟步骤" style="border-radius: 5px;"> </div>
                            <div class="xg_news">
                                <div class="title"><strong>良品铺子资讯</strong></div>
                                <div class="xw">
                                    <ul class="clearfix">
                                        <li><em>2017-05-11</em><a href="/lingshidianpp/38.shtml" title="良品铺子休闲食品加盟 黄晓明代言 加盟开店吸金能力强">良品铺子休闲食品加盟 黄晓明代言 加盟开店吸金能力强 </a></li>
                                        <li><em>2018-01-02</em><a href="/lingshizx/3210.shtml" title="投资良品铺子零食加盟店前景怎样？市场发展空间大">投资良品铺子零食加盟店前景怎样？市场发展空间大 </a></li>
                                        <li><em>2017-07-04</em><a href="/lingshidianpp/2409.shtml" title="良品铺子怎么加盟？轻松6步简单开店">良品铺子怎么加盟？轻松6步简单开店 </a></li>
                                        <li><em>2018-03-20</em><a href="/lingshidianpp/3570.shtml" title="投资加盟零食店风险小就选良品铺子">投资加盟零食店风险小就选良品铺子 </a></li>
                                        <li><em>2018-03-02</em><a href="/lingshidianpp/3363.shtml" title="零食加盟排行哪个品牌好？良品铺子带你致富">零食加盟排行哪个品牌好？良品铺子带你致富 </a></li>
                                        <li><em>2017-11-15</em><a href="/lingshidianpp/3111.shtml" title="怎么经营良品铺子零食加盟店？技巧简单开店方便">怎么经营良品铺子零食加盟店？技巧简单开店方便 </a></li>
                                        <li><em>2018-03-01</em><a href="/lingshidianpp/3406.shtml" title="良品铺子加盟有何优势？加盟优势介绍">良品铺子加盟有何优势？加盟优势介绍 </a></li>
                                        <li><em>2017-07-04</em><a href="/lingshidianpp/2408.shtml" title="良品铺子加盟费多少？8万元左右即可启动">良品铺子加盟费多少？8万元左右即可启动 </a></li>
                                        <li><em>2017-10-16</em><a href="/lingshidianpp/3098.shtml" title="选择良品铺子加盟要多少钱？几万块钱成功开店">选择良品铺子加盟要多少钱？几万块钱成功开店 </a></li>
                                        <li><em>2017-12-19</em><a href="/lingshidianpp/3152.shtml" title="良品铺子一年能回本吗?一季度之内回本">良品铺子一年能回本吗?一季度之内回本 </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gbook" id="msg">
                                <div class="hd">
                                    <span class="tit">我要咨询</span>
                                    <em>(24小时内获得企业的快速回复)</em>
                                    <span class="tips">(<i>*</i>为必填选项)</span>
                                </div>

                                <div class="bd">
                                    <ul>
                                        <li><span class="txt"><i>*</i>姓名</span><input type="text" name="guestname" id="guestname" value="" class="input_bk" placeholder="您的真实姓名">
                                            <span class="sex"><label><input type="radio" value="男" name="Sex" class="ly_radio"><em>先生</em></label><label><input type="radio" name="Sex" value="女" class="ly_radio"><em>女士</em></label></span></li>
                                        <li><span class="txt"><i>*</i>手机</span><input type="text" class="input_bk" id="phonenum" name="iphone" placeholder="电话是与您联系的重要方式"></li>
                                        <li><span class="txt">地址</span><input type="text" class="input_bk" name="adr" id="addresss" placeholder="与您联系的重要方式"></li>
                                        <li>
                                            <span class="txt"><i>*</i>留言</span><textarea id="note" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                                            <div class="check_msg">
                                                <div class="check_msg_tit">请填写留言或根据意向选择下列快捷留言</div>
                                                <div class="check_msg_bd">
                                                    <ul>
                                                        <li><a href="javascript:;" class="no" target="_self">我加盟后，您们还会提供哪些服务？</a></li>
                                                        <li><a href="javascript:;" class="no" target="_self">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                                                        <li><a href="javascript:;" class="no" target="_self">请问我这个地方有加盟商了吗？</a></li>
                                                        <li><a href="javascript:;" class="no" target="_self">请将详细投资方案和资料寄给本人。</a></li>
                                                        <li><a href="javascript:;" class="no" target="_self">初步打算加盟贵公司，请寄资料。</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="txt">&nbsp;</span><input type="submit" value="提交留言" id="tj_btn" class="btn">
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="new_right">
                    <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                        <div class="lh24">
                            <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                            <h3 class="f22">幼儿园加盟热门加盟项目</h3>
                        </div>
                        <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                            <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/xm/13008.shtml" class="img-block">
                                    <img src="/storage/uploads/2019/08/26/e0ba0b0c08c9ab4e48a6d8c8578b96f7.png" alt=" 绘元识字">
                                    <div class="img-bg"></div>
                                    <p>绘元识字</p>
                                </a>
                            </dd>
                            <dd class="magnify magnify-txt "><a target="_blank" href="/xm/13006.shtml" class="img-block">
                                    <img src="/storage/uploads/2019/08/26/60ee905dab618a2d03ae23bfff775b64.png" alt=" 诺艾玛保育园">
                                    <div class="img-bg"></div>
                                    <p>诺艾玛保育园</p>
                                </a>
                            </dd>
                            <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/xm/13005.shtml" class="img-block">
                                    <img src="/storage/uploads/2019/08/26/838c04678fd67250c2de6fb1d171029f.png" alt=" 菁华鹿鸣教育">
                                    <div class="img-bg"></div>
                                    <p>菁华鹿鸣教育</p>
                                </a>
                            </dd>
                            <dd class="magnify magnify-txt "><a target="_blank" href="/xm/13004.shtml" class="img-block">
                                    <img src="/storage/uploads/2019/08/26/ca72a508096068f896ab3e7f5751ddc0.png" alt=" SNBB圣娜贝彼国际托育早教">
                                    <div class="img-bg"></div>
                                    <p>SNBB圣娜贝彼国际托育早教</p>
                                </a>
                            </dd>
                            <div class="clear"></div>
                        </dl>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 零食店加盟排行榜 </h3>
                        <div class="rank_bd">
                            <ul>
                                <li class="top"> <a href="/lingshidianpp/5.shtml" target="_blank" title="三只松鼠"><i class="num">1 </i> <img src="/images/thread/2017/04/12/3353f2d4c9eacd918b8afcfb28554583.jpg" alt="三只松鼠"></a>
                                    <div class="cont">
                                        <p><a href="/lingshidianpp/5.shtml" target="_blank">三只松鼠</a></p>
                                        <p><span>投资金额：</span><i>10~20万元以上</i></p>
                                        <p class="btn"><a href="/lingshidianpp/5.shtml">查看详情</a></p>
                                    </div>
                                </li>


                                <li class="top"> <i class="num">2</i> <span class="name"><a href="/chaohuodian/8.shtml" target="_blank" title="盐津铺子">盐津铺子</a></span> <span class="price">10.5~44万元</span> </li>


                                <li class="top"> <i class="num">3</i> <span class="name"><a href="/lingshidianpp/38.shtml" target="_blank" title="良品铺子">良品铺子</a></span> <span class="price">30~60万</span> </li>


                                <li class="top"> <i class="num">4</i> <span class="name"><a href="/chaohuodian/9.shtml" target="_blank" title="戴永红炒货">戴永红炒货</a></span> <span class="price">28.2~47.9万元</span> </li>


                                <li class="top"> <i class="num">5</i> <span class="name"><a href="/chaohuodian/51.shtml" target="_blank" title="百味林">百味林</a></span> <span class="price">20.58万元以上</span> </li>


                                <li class="top"> <i class="num">6</i> <span class="name"><a href="/lingshidianpp/91.shtml" target="_blank" title="一扫光">一扫光</a></span> <span class="price">10~20万</span> </li>


                                <li class="top"> <i class="num">7</i> <span class="name"><a href="/chaohuodian/18.shtml" target="_blank" title="戴永红炒货">戴永红炒货</a></span> <span class="price">11.4万元以上</span> </li>


                                <li class="top"> <i class="num">8</i> <span class="name"><a href="/ganguodian/14.shtml" target="_blank" title="好想你">好想你</a></span> <span class="price">10万元</span> </li>


                                <li class="top"> <i class="num">9</i> <span class="name"><a href="/lingshidianpp/53.shtml" target="_blank" title="老婆大人">老婆大人</a></span> <span class="price">20~40万</span> </li>


                                <li class="top"> <i class="num">10</i> <span class="name"><a href="/lingshidianpp/226.shtml" target="_blank" title="不二家">不二家</a></span> <span class="price">18~38万</span> </li>


                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新休闲食品加盟项目 </h3>
                        <div class="bt_xiangmu">
                            <ul>
                                <li> <a href="/lingshidianpp/4883.shtml">盛味佳加盟</a> </li>
                                <li> <a href="/lingshidianpp/4879.shtml">甘源加盟</a> </li>
                                <li> <a href="/lingshidianpp/4878.shtml">友臣加盟</a> </li>
                                <li> <a href="/lingshidianpp/4877.shtml">可心零食店加盟</a> </li>
                                <li> <a href="/lingshidianpp/4800.shtml">亚细亚加盟</a> </li>
                                <li> <a href="/lingshidianpp/4787.shtml">一鱿未尽加盟</a> </li>
                                <li> <a href="/lingshidianpp/4786.shtml">享之味加盟</a> </li>
                                <li> <a href="/lingshidianpp/4785.shtml">一本零食加盟</a> </li>
                                <li> <a href="/lingshidianpp/4779.shtml">爱尚零食屋加盟</a> </li>
                                <li> <a href="/chaohuodian/4778.shtml">天天炒货加盟</a> </li>
                                <li> <a href="/lingshidianpp/4777.shtml">嘟嘟乐干果加盟</a> </li>
                                <li> <a href="/lingshidianpp/4776.shtml">艾比利加盟</a> </li>
                                <li> <a href="/lingshidianpp/4775.shtml">比锦味小站加盟</a> </li>
                                <li> <a href="/lingshidianpp/4774.shtml">禧福堂加盟</a> </li>
                                <li> <a href="/lingshidianpp/4773.shtml">源屋曲加盟</a> </li>
                                <li> <a href="/lingshidianpp/4772.shtml">畅选加盟</a> </li>
                                <li> <a href="/lingshidianpp/4771.shtml">酷帕滋加盟</a> </li>
                                <li> <a href="/lingshidianpp/4770.shtml">宫颐府加盟</a> </li>
                                <li> <a href="/lingshidianpp/4764.shtml">汇吃巴加盟</a> </li>
                                <li> <a href="/ganguodian/4763.shtml">俏俏果加盟</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="new_bt">
                        <h3> <i></i> 最新零食新闻 </h3>
                        <div class="bts com_news">
                            <div class="common">
                                <ul>
                                    <li><a href="/lingshidianpp/4900.shtml" target="_blank" title="肥妹凉果零食店加盟利润怎么样？13.5万元轻松开家小型店">肥妹凉果零食店加盟利润怎么样？13.5万元轻松开家小型店</a></li>
                                    <li><a href="/lingshidianpp/4899.shtml" target="_blank" title="三零食品零食店加盟利润高吗？三零食品零食店怎么加盟">三零食品零食店加盟利润高吗？三零食品零食店怎么加盟</a></li>
                                    <li><a href="/lingshidianpp/4898.shtml" target="_blank" title="上海炒货店加盟赚钱吗？上海炒货加盟怎么样">上海炒货店加盟赚钱吗？上海炒货加盟怎么样</a></li>
                                    <li><a href="/lingshidianpp/4897.shtml" target="_blank" title="馋嘴猫零食店加盟利润怎么样？一年竟然赚取25.5万元">馋嘴猫零食店加盟利润怎么样？一年竟然赚取25.5万元</a></li>
                                    <li><a href="/lingshidianpp/4896.shtml" target="_blank" title="马路村干果店加盟赚钱吗？一年净赚25.5万元">马路村干果店加盟赚钱吗？一年净赚25.5万元</a></li>
                                    <li><a href="/lingshidianpp/4895.shtml" target="_blank" title="食尚零食铺加盟利润好不好？食尚零食铺怎么加盟">食尚零食铺加盟利润好不好？食尚零食铺怎么加盟</a></li>
                                    <li><a href="/lingshidianpp/4894.shtml" target="_blank" title="自然派零食店加盟费多少钱？自然派零食店加盟怎么样">自然派零食店加盟费多少钱？自然派零食店加盟怎么样</a></li>
                                    <li><a href="/lingshidianpp/4893.shtml" target="_blank" title="天泉甜甜干果加盟利润如何？一年竟赚23万利润">天泉甜甜干果加盟利润如何？一年竟赚23万利润</a></li>
                                    <li><a href="/lingshidianpp/4892.shtml" target="_blank" title="新疆干果店加盟利润高吗？一年竟然能赚23万元">新疆干果店加盟利润高吗？一年竟然能赚23万元</a></li>
                                    <li><a href="/lingshidianpp/4891.shtml" target="_blank" title="来伊份零食店加盟利润怎么样？年利润高达38.16万元">来伊份零食店加盟利润怎么样？年利润高达38.16万元</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ff p20">
                        <div class="lh24">
                            <a target="_blank" href="/xm/" class="fr s-c999">更多</a>
                            <h3 class="f22">幼儿园加盟热门加盟项目</h3>
                        </div>
                        <ul class="join-project mt30">
                            <li>
                                <a target="_blank" href="/xm/1512.shtml" class="img-block magnify"><img src="/storage/uploads/2018/12/19/9efee19b14a794ebaacfbbc5445c1cc3.png" alt="新东方泡泡少儿英语"></a>
                                <p class="f16"><a target="_blank" href="/xm/1512.shtml">新东方泡泡少儿英语</a></p>
                                <p class="f14">投资金额：<span class="s-oe">5~10万</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">824</span></p>
                            </li>
                            <li>
                                <a target="_blank" href="/xm/458.shtml" class="img-block magnify"><img src="/storage/uploads/2018/12/25/33de3c9f1389aa7a777c85b085c6259f.png" alt="海伦多兰少儿英语"></a>
                                <p class="f16"><a target="_blank" href="/xm/458.shtml">海伦多兰少儿英语</a></p>
                                <p class="f14">投资金额：<span class="s-oe">68-95万元</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">28</span></p>
                            </li>
                            <li>
                                <a target="_blank" href="/xm/355.shtml" class="img-block magnify"><img src="http://www.jjedu.com.cn/storage/uploads/image/2018/10/25/f1cb2b0c0765edb2bfaf59c382447100.jpg" alt="金色童年幼儿园"></a>
                                <p class="f16"><a target="_blank" href="/xm/355.shtml">金色童年幼儿园</a></p>
                                <p class="f14">投资金额：<span class="s-oe">38.98-95.98万</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">20</span></p>
                            </li>
                            <li>
                                <a target="_blank" href="/xm/335.shtml" class="img-block magnify"><img src="http://www.jjedu.com.cn/storage/uploads/image/2018/10/23/14b7fb6d2282a98f4d3f52d731ee8906.png" alt="婴乐早教"></a>
                                <p class="f16"><a target="_blank" href="/xm/335.shtml">婴乐早教</a></p>
                                <p class="f14">投资金额：<span class="s-oe">20-30万</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">17</span></p>
                            </li>
                            <li>
                                <a target="_blank" href="/xm/265.shtml" class="img-block magnify"><img src="http://www.jjedu.com.cn/storage/uploads/image/2018/10/12/57c0572f00e6f433960c5a1ac9026257.png" alt="品格幼儿园"></a>
                                <p class="f16"><a target="_blank" href="/xm/265.shtml">品格幼儿园</a></p>
                                <p class="f14">投资金额：<span class="s-oe">20-30万元</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">268</span></p>
                            </li>
                            <li>
                                <a target="_blank" href="/xm/261.shtml" class="img-block magnify"><img src="/storage/uploads/2018/12/25/3b22d6b8de9a3d0103c0548e1d2b9dbd.png" alt="清华幼儿双语幼儿园"></a>
                                <p class="f16"><a target="_blank" href="/xm/261.shtml">清华幼儿双语幼儿园</a></p>
                                <p class="f14">投资金额：<span class="s-oe">38.98-95.98万元</span></p>
                                <p class="f14">加盟门店数：<span class="s-oe">7000</span></p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
</div>
@stop
@section('footlibs')
@stop