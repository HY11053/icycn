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
        <div class="bn1190"><img src="/receptions/images/temp/bn8.jpg" alt=""></div>
        <div class="path">当前位置：<a href="/">首页</a> &gt; <a href="/lingshidianpp/">零食店品牌</a></div>

        <div class="main clearfix">

            <div class="cate_sort">
                <dl>
                    <dt>项目分类</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    <dd><a target="_self" href="/lingshidianpp/">零食店品牌</a></dd>
                    <dd><a target="_self" href="/chaohuodian/">炒货店品牌</a></dd>
                    <dd><a target="_self" href="/ganguodian/">干果店品牌</a></dd>
                    <dd><a target="_self" href="/jinkoulingshi/">进口零食品牌</a></dd>
                    <dd><a target="_self" href="/shushidian/">熟食店品牌</a></dd>
                    <dd><a target="_self" href="/paihangbang/">零食品牌排行榜</a></dd>
                    <dd><a target="_self" href="/pinpai/">零食品牌大全</a></dd>

                </dl>
                <dl>
                    <dt>投资金额</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    <dd><a target="_self" href="/project/0-1~5-0-0.shtml">1-5万元</a></dd>
                    <dd><a target="_self" href="/project/0-5~10-0-0.shtml">5-10万元</a></dd>
                    <dd><a target="_self" href="/project/0-10~20-0-0.shtml">10-20万元</a></dd>
                    <dd><a target="_self" href="/project/0-20~30-0-0.shtml">20-30万元</a></dd>
                    <dd><a target="_self" href="/project/0-30~50-0-0.shtml">30-50万元</a></dd>
                    <dd><a target="_self" href="/project/0-50~100-0-0.shtml">50-100万元</a></dd>
                </dl>
                <dl>
                    <dt>店铺面积</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    <dd><a target="_self" href="/project/0-0-1~10-0.shtml">10平米以下</a></dd>
                    <dd><a target="_self" href="/project/0-0-10~30-0.shtml">10-30平米</a></dd>
                    <dd><a target="_self" href="/project/0-0-30~50-0.shtml">30-50平米</a></dd>
                    <dd><a target="_self" href="/project/0-0-50~80-0.shtml">50-80平米</a></dd>
                    <dd><a target="_self" href="/project/0-0-100-0.shtml">100平米以上</a></dd>
                </dl>
                <dl>
                    <dt>所在地区</dt>
                    <dd><a class="hover" target="_self" href="#">全部</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-1.shtml">北京</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-125.shtml">济南</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-71.shtml">广州</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-281.shtml">合肥</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-401.shtml">上海</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-282.shtml">芜湖</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-195.shtml">武汉</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-112.shtml">南京</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-296.shtml">长沙</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-126.shtml">青岛</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-72.shtml">深圳</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-164.shtml">成都</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-139.shtml">沈阳</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-29.shtml">重庆</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-212.shtml">郑州</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-101.shtml">杭州</a></dd>
                    <dd><a target="_self" href="/project/0-0-0-83.shtml">佛山</a></dd>
                </dl>
            </div>
            <div class="rec_brand_list">
                <ul>
                    <li><a href="/lingshidianpp/5.shtml" target="_blank" title="三只松鼠" class="pic"><img src="/images/thread/2017/04/12/3353f2d4c9eacd918b8afcfb28554583.jpg" alt="三只松鼠"><em>三只松鼠</em></a></li>
                    <li><a href="/chaohuodian/8.shtml" target="_blank" title="盐津铺子" class="pic"><img src="/images/thread/2017/04/13/c74990e280bd9596e04c57fe8ce4b1cf.jpg" alt="盐津铺子"><em>盐津铺子</em></a></li>
                    <li><a href="/lingshidianpp/38.shtml" target="_blank" title="良品铺子" class="pic"><img src="/images/thread/2017/04/14/0bd504b4a3542dfd6af6417b00962879.png" alt="良品铺子"><em>良品铺子</em></a></li>
                    <li><a href="/chaohuodian/9.shtml" target="_blank" title="戴永红炒货" class="pic"><img src="/images/thread/2017/04/13/8b45deb678f769725ba9557a22f6c4c3.jpg" alt="戴永红炒货"><em>戴永红炒货</em></a></li>
                    <li><a href="/chaohuodian/51.shtml" target="_blank" title="百味林" class="pic"><img src="/images/thread/2017/04/17/257b0d604a639d13975512bfe10f323d.jpg" alt="百味林"><em>百味林</em></a></li>
                    <li><a href="/lingshidianpp/91.shtml" target="_blank" title="一扫光" class="pic"><img src="http://www.58lingshi.com/uploads/image/2017/04/17/0e755c7dffa82f4bd20287291a31d8db.jpg" alt="一扫光"><em>一扫光</em></a></li>
                    <li><a href="/chaohuodian/18.shtml" target="_blank" title="戴永红炒货" class="pic"><img src="http://www.58lingshi.com/images/thread/2017/04/13/08cead2c0aac14f9f70529ca3c18c972.jpg" alt="戴永红炒货"><em>戴永红炒货</em></a></li>
                    <li><a href="/ganguodian/14.shtml" target="_blank" title="好想你枣" class="pic"><img src="/images/thread/2017/04/13/3191b10bd7d2e2a346f5b58a83cd4811.jpg" alt="好想你枣"><em>好想你枣</em></a></li>
                    <li><a href="/lingshidianpp/53.shtml" target="_blank" title="老婆大人" class="pic"><img src="/images/thread/2017/04/17/77484503c2bc694ecf802cee7a2f2e1d.jpg" alt="老婆大人"><em>老婆大人</em></a></li>
                </ul>
            </div>

            <div class="w910">
                <div class="order_item">
                    <div class="order_item_l">
                        <a class="cur" href="#">默认排序</a>
                        <a href="#">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
                    </div>
                    <div class="order_item_r">共找到<span>516</span>个零食品牌加盟项目</div>
                </div>

                <div class="brand_list" id="productBox">
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4883.shtml" class="pp-pic-name" title="盛味佳加盟"><img src="http://www.58lingshi.com/uploads/image/2018/12/10/145c1d9b7774a4bcf262edeb9a8d20be.png" alt="盛味佳加盟"></a>
                            <p class="pro_p">了解盛味佳加盟怎么样,盛味佳加盟多少钱,盛味佳怎么加盟,盛味佳加盟利润等盛味佳加盟问题，欢迎访问零食店加盟网，汇集百万零食加盟品牌，创业找加盟项目，访问58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4883.shtml" title="盛味佳加盟"><h3 class="list-Name fl">盛味佳加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">上海</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">678</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1498</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4883.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4883,&quot;name&quot;:&quot;盛味佳加盟&quot;,&quot;pic&quot;:&quot;http://www.58lingshi.com/uploads/image/2018/12/10/145c1d9b7774a4bcf262edeb9a8d20be.png&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4883.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4879.shtml" class="pp-pic-name" title="甘源加盟"><img src="/images/thread/2018/12/07/376c833601afcb12124829b5e80cf6b5.jpg" alt="甘源加盟"></a>
                            <p class="pro_p">58零食店加盟网，汇集百万零食加盟品牌，点击了解甘源加盟怎么样,甘源加盟费多少钱,甘源怎么加盟,甘源加盟利润如何等甘源加盟问题，欢迎访问58零食店加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4879.shtml" title="甘源加盟"><h3 class="list-Name fl">甘源加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">江西</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">629</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1405</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4879.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4879,&quot;name&quot;:&quot;甘源加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/12/07/376c833601afcb12124829b5e80cf6b5.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4879.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4878.shtml" class="pp-pic-name" title="友臣加盟"><img src="/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg" alt="友臣加盟"></a>
                            <p class="pro_p">零食店加盟网为您提供最新友臣加盟信息,帮您解答友臣加盟费多少钱,友臣怎么加盟,友臣加盟利润,友臣加盟赚钱吗等友臣加盟问题，查找更多零食加盟品牌，尽在58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4878.shtml" title="友臣加盟"><h3 class="list-Name fl">友臣加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">福建</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">563</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1609</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4878.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4878,&quot;name&quot;:&quot;友臣加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4878.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div><div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4878.shtml" class="pp-pic-name" title="友臣加盟"><img src="/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg" alt="友臣加盟"></a>
                            <p class="pro_p">零食店加盟网为您提供最新友臣加盟信息,帮您解答友臣加盟费多少钱,友臣怎么加盟,友臣加盟利润,友臣加盟赚钱吗等友臣加盟问题，查找更多零食加盟品牌，尽在58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4878.shtml" title="友臣加盟"><h3 class="list-Name fl">友臣加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">福建</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">563</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1609</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4878.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4878,&quot;name&quot;:&quot;友臣加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4878.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div><div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4878.shtml" class="pp-pic-name" title="友臣加盟"><img src="/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg" alt="友臣加盟"></a>
                            <p class="pro_p">零食店加盟网为您提供最新友臣加盟信息,帮您解答友臣加盟费多少钱,友臣怎么加盟,友臣加盟利润,友臣加盟赚钱吗等友臣加盟问题，查找更多零食加盟品牌，尽在58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4878.shtml" title="友臣加盟"><h3 class="list-Name fl">友臣加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">福建</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">563</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1609</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4878.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4878,&quot;name&quot;:&quot;友臣加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/12/07/50c37a262dfac8103d47b09800d3c744.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4878.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4877.shtml" class="pp-pic-name" title="可心零食店加盟"><img src="http://www.58lingshi.com/uploads/image/2018/12/07/16557556027141b706cce1befa9be843.png" alt="可心零食店加盟"></a>
                            <p class="pro_p">了解可心零食店加盟怎么样,可心零食店加盟多少钱,可心零食店怎么加盟,可心零食店加盟利润等可心零食店加盟问题，欢迎访问零食店加盟网，汇集百万零食加盟品牌，创业找加盟项目，访问58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4877.shtml" title="可心零食店加盟"><h3 class="list-Name fl">可心零食店加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">上海</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">655</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1519</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4877.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4877,&quot;name&quot;:&quot;可心零食店加盟&quot;,&quot;pic&quot;:&quot;http://www.58lingshi.com/uploads/image/2018/12/07/16557556027141b706cce1befa9be843.png&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4877.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4800.shtml" class="pp-pic-name" title="亚细亚加盟"><img src="http://www.58lingshi.com/uploads/image/2018/11/26/b847a68929b4e49d7f424697ffa1239e.jpg" alt="亚细亚加盟"></a>
                            <p class="pro_p">了解亚细亚加盟怎么样,亚细亚加盟多少钱,亚细亚怎么加盟,亚细亚加盟利润等亚细亚加盟问题，欢迎访问零食店加盟网，汇集百万零食加盟品牌，创业找加盟项目，访问58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4800.shtml" title="亚细亚加盟"><h3 class="list-Name fl">亚细亚加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">10-20万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">福建</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">485</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">887</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4800.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4800,&quot;name&quot;:&quot;亚细亚加盟&quot;,&quot;pic&quot;:&quot;http://www.58lingshi.com/uploads/image/2018/11/26/b847a68929b4e49d7f424697ffa1239e.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4800.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4787.shtml" class="pp-pic-name" title="一鱿未尽加盟"><img src="http://www.58lingshi.com/uploads/image/2018/11/22/8960d91c9a6726a95976d1112e0a35b7.jpg" alt="一鱿未尽加盟"></a>
                            <p class="pro_p">58零食店加盟网，汇集百万零食加盟品牌，点击了解一鱿未尽加盟怎么样,一鱿未尽加盟费多少钱,一鱿未尽怎么加盟,一鱿未尽加盟利润如何等一鱿未尽加盟问题，欢迎访问58零食店加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4787.shtml" title="一鱿未尽加盟"><h3 class="list-Name fl">一鱿未尽加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">1-5万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">广东</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">973</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">2274</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4787.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4787,&quot;name&quot;:&quot;一鱿未尽加盟&quot;,&quot;pic&quot;:&quot;http://www.58lingshi.com/uploads/image/2018/11/22/8960d91c9a6726a95976d1112e0a35b7.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4787.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4786.shtml" class="pp-pic-name" title="享之味加盟"><img src="/images/thread/2018/11/22/f32d8f757f9e344bfa8f3b6e4d2abf87.jpg" alt="享之味加盟"></a>
                            <p class="pro_p">零食店加盟网为您提供最新享之味加盟信息,帮您解答享之味加盟费多少钱,享之味怎么加盟,享之味加盟利润,享之味加盟赚钱吗等享之味加盟问题，查找更多零食加盟品牌，尽在58零食加盟网</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4786.shtml" title="享之味加盟"><h3 class="list-Name fl">享之味加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">福建</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">730</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">2513</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4786.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4786,&quot;name&quot;:&quot;享之味加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/11/22/f32d8f757f9e344bfa8f3b6e4d2abf87.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4786.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4785.shtml" class="pp-pic-name" title="一本零食加盟"><img src="/images/thread/2018/11/22/5a83dd79e96b3d58f0f9c68a29169c06.jpg" alt="一本零食加盟"></a>
                            <p class="pro_p">了解一本零食加盟怎么样一本零食加盟多少钱,一本零食怎么加盟,一本零食加盟利润等一本零食加盟问题，欢迎访问零食店加盟网，汇集百万零食加盟品牌，创业找加盟项目，访问58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4785.shtml" title="一本零食加盟"><h3 class="list-Name fl">一本零食加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">浙江</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">745</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1403</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4785.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4785,&quot;name&quot;:&quot;一本零食加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/11/22/5a83dd79e96b3d58f0f9c68a29169c06.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4785.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4779.shtml" class="pp-pic-name" title="爱尚零食屋加盟"><img src="http://www.58lingshi.com/uploads/image/2018/11/21/538d90d0e02a6fe3e438e782ed75a8bb.jpg" alt="爱尚零食屋加盟"></a>
                            <p class="pro_p">了解爱尚零食屋加盟怎么样,爱尚零食屋加盟多少钱,爱尚零食屋怎么加盟,爱尚零食屋加盟利润等爱尚零食屋加盟问题，欢迎访问零食店加盟网，汇集百万零食加盟品牌，创业找加盟项目，访问58零食加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4779.shtml" title="爱尚零食屋加盟"><h3 class="list-Name fl">爱尚零食屋加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">黑龙江</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">559</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">912</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4779.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4779,&quot;name&quot;:&quot;爱尚零食屋j加盟&quot;,&quot;pic&quot;:&quot;http://www.58lingshi.com/uploads/image/2018/11/21/538d90d0e02a6fe3e438e782ed75a8bb.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4779.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/lingshidianpp/4777.shtml" class="pp-pic-name" title="嘟嘟乐干果加盟"><img src="/images/thread/2018/11/21/15a10f73d9c3c64aae95f162b3ba32ab.jpg" alt="嘟嘟乐干果加盟"></a>
                            <p class="pro_p">58零食店加盟网，汇集百万零食加盟品牌，点击了解嘟嘟乐干果加盟怎么样,嘟嘟乐干果加盟费多少钱,嘟嘟乐干果怎么加盟,嘟嘟乐干果加盟利润如何等嘟嘟乐干果加盟问题，欢迎访问58零食店加盟网。</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/lingshidianpp/4777.shtml" title="嘟嘟乐干果加盟"><h3 class="list-Name fl">嘟嘟乐干果加盟</h3></a>
                                <span class="money fr h4">投资额度：&nbsp;<em class="red">5-10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">山东</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">693</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">1557</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/lingshidianpp/4777.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro="{&quot;pid&quot;:4777,&quot;name&quot;:&quot;嘟嘟乐干果加盟&quot;,&quot;pic&quot;:&quot;/images/thread/2018/11/21/15a10f73d9c3c64aae95f162b3ba32ab.jpg&quot;,&quot;url&quot;:&quot;http://www.58lingshi.com/lingshidianpp/4777.shtml&quot;}">
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="page">
                    <ul class="pagination">

                        <li class="disabled"><span>上一页</span></li>





                        <li class="active"><span>1</span></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/2/">2</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/3/">3</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/4/">4</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/5/">5</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/6/">6</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/7/">7</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/8/">8</a></li>

                        <li class="disabled"><span>...</span></li>





                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/51/">51</a></li>
                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/52/">52</a></li>


                        <li><a href="http://www.58lingshi.com/lingshidianpp/page/2/">下一页</a></li>
                    </ul>

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
                    <h3> <i></i> <a href="/paihangbang/blist/canyin_28/">餐饮品牌排行榜 </a></h3>
                    <div class="rank_bd">
                        <ul>
                            <li class="top">
                                <div class="first_num" href="/brand/423/" target="_blank" title="三只松鼠加盟"><i id="num">1 </i> <img src="/images/thread/2018/08/21/e00044d1b6ce8be494642a9270ab9f6f.jpg" alt="三只松鼠加盟">
                                </div>
                                <div class="cont">
                                    <p><a href="/brand/423/" target="_blank">三只松鼠加盟</a></p>
                                    <p><span>投资金额：</span><i>5万~8万</i></p>
                                    <p class="btn"><a href="/brand/423/">查看详情</a></p>
                                </div>
                            </li>
                            <li class="top"> <i class="num">2</i> <span class="name"><a href="/brand/228/" target="_blank" title="良品铺子加盟">良品铺子加盟</a></span> <span class="price">3万~5万</span> </li>
                            <li class="top"> <i class="num">3</i> <span class="name"><a href="/brand/433/" target="_blank" title="老婆大人加盟">老婆大人加盟</a></span> <span class="price">3万~5万</span> </li>
                            <li class="top"> <i class="num">4</i> <span class="name"><a href="/brand/1297/" target="_blank" title="一点点加盟">一点点加盟</a></span> <span class="price">12万~15万</span> </li>
                            <li class="top"> <i class="num">5</i> <span class="name"><a href="/brand/230/" target="_blank" title="百草味加盟">百草味加盟</a></span> <span class="price">3万~5万</span> </li>
                            <li class="top"> <i class="num">6</i> <span class="name"><a href="/brand/1202/" target="_blank" title="华莱士炸鸡汉堡加盟">华莱士炸鸡汉堡加盟</a></span> <span class="price">8万~12万</span> </li>
                            <li class="top"> <i class="num">7</i> <span class="name"><a href="/brand/1198/" target="_blank" title="德克士加盟">德克士加盟</a></span> <span class="price">8万~12万</span> </li>
                            <li class="top"> <i class="num">8</i> <span class="name"><a href="/brand/1223/" target="_blank" title="泰芒了奶茶加盟">泰芒了奶茶加盟</a></span> <span class="price">8万~12万</span> </li>
                            <li class="top"> <i class="num">9</i> <span class="name"><a href="/brand/1222/" target="_blank" title="贡茶加盟">贡茶加盟</a></span> <span class="price">3万~5万</span> </li>
                            <li class="top"> <i class="num">10</i> <span class="name"><a href="/brand/1196/" target="_blank" title="叫了个炸鸡加盟">叫了个炸鸡加盟</a></span> <span class="price">5万~8万</span> </li>
                        </ul>
                    </div>
                </div>


                <div class="side_news">
                    <div class="common_bt">
                        <div class="tit">推荐文章</div>
                    </div>
                    <div class="common_list">
                        <ul>
                            <li><a href="/lingshidianpp/5.shtml" target="_blank" title="三只松鼠实体店加盟-投资8.64万元开创致富之路">三只松鼠实体店加盟-投资8.64万元开创致富之路</a></li>
                            <li><a href="/chaohuodian/8.shtml" target="_blank" title="盐津铺子加盟条件,10.5万元投资，2人50平米年赚上百万">盐津铺子加盟条件,10.5万元投资，2人50平米年赚上百万</a></li>
                            <li><a href="/lingshidianpp/38.shtml" target="_blank" title="良品铺子休闲食品加盟 黄晓明代言 加盟开店吸金能力强">良品铺子休闲食品加盟 黄晓明代言 加盟开店吸金能力强</a></li>
                            <li><a href="/chaohuodian/9.shtml" target="_blank" title="戴永红炒货加盟费多少,70平仅需28万元">戴永红炒货加盟费多少,70平仅需28万元</a></li>
                            <li><a href="/chaohuodian/51.shtml" target="_blank" title="百味林加盟要多少钱?20.58万元轻松创业不是梦">百味林加盟要多少钱?20.58万元轻松创业不是梦</a></li>
                            <li><a href="/lingshidianpp/91.shtml" target="_blank" title="一扫光零食店加盟, 邀您共创财富之路!">一扫光零食店加盟, 邀您共创财富之路!</a></li>
                            <li><a href="/chaohuodian/18.shtml" target="_blank" title="戴永红炒货加盟费多少?11.4万元轻松创业">戴永红炒货加盟费多少?11.4万元轻松创业</a></li>
                            <li><a href="/ganguodian/14.shtml" target="_blank" title="好想你枣加盟费多少？12万成功圆你财富梦">好想你枣加盟费多少？12万成功圆你财富梦</a></li>
                            <li><a href="/lingshidianpp/53.shtml" target="_blank" title="老婆大人零食店加盟项目驾到，助您轻松开店创业！">老婆大人零食店加盟项目驾到，助您轻松开店创业！</a></li>
                            <li><a href="/lingshidianpp/226.shtml" target="_blank" title="不二家加盟模式高效，时尚店面引客源！">不二家加盟模式高效，时尚店面引客源！</a></li>
                            <li><a href="/lingshidianpp/226.shtml" target="_blank" title="不二家加盟模式高效，时尚店面引客源！">不二家加盟模式高效，时尚店面引客源！</a></li>
                            <li><a href="/lingshidianpp/226.shtml" target="_blank" title="不二家加盟模式高效，时尚店面引客源！">不二家加盟模式高效，时尚店面引客源！</a></li>
                        </ul>
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
@stop
