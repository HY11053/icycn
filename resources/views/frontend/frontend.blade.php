<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    @yield('headlibs')
    <link rel="stylesheet" href="/frontend/css/common.css" />
    <link rel="stylesheet" href="/frontend/css/swiper.min.css" />
</head>
<body>
<div class="zong_topbar clear">
    <div class="wrap_mar f12 clear">
        <div id="testDiv">
            <ul class="fl topbar_left"> <li class="fl"><span class="webtitle">欢迎访问中教招商网 @if(Request::getrequesturi()=='/') @endif </span> </li></ul>
        </div>
        <div class="top_right">
            <a href="/sprodlist/all/" rel="nofollow"><em class="zxm"></em>搜项目</a>
            <a href="/paihangbang/"><em class="phb"></em>品牌排行榜</a>
            <a href="/storage/sitemap.xml"><em class="kdh"></em>快导航</a>
            <a href="http://m.jjedu.com.cn"><em class="sjb"></em>手机版</a>
        </div>
    </div>
</div>
<!-- logo -->
<div class="zong_logo wrap_mar clear" style="margin-top:0">
    @if(Request::getrequesturi()=='/')
    <h1 class="fl"><a href="{{config('app.url')}}" title="中教招商网" class="logo_left" target="_self">中教招商网</a></h1>
    @else
        <h2 class="fl"><a href="{{config('app.url')}}" title="中教招商网" class="logo_left" target="_self">中教招商网</a></h2>
    @endif
    <div class="logo_center fr">
        <div class="logo_find clear">
            <div class="logo_select f14 pr fl">行业<i class="zong_icon i7"></i></div>
            <form action="{{config('app.url')}}/sprodlist/all/" method="post">
                {{csrf_field()}}
            <input type="text" name="keywords" value="请输入您想查找的项目" class="fl text fontW" id="keyword_fenci" onfocus="if(this.value=='请输入您想查找的项目'){this.value='';}" onblur="if(this.value==''){this.value='请输入您想查找的项目';}"/>
            <input type="submit" value="搜索" class="button f16 fontW fr" />
            </form>
        </div>
        <ul class="f12">
            <li><a href="/xm/112.shtml" title="聚能教育加盟" target="_blank">聚能教育加盟</a> |</li>
            <li><a href="/xm/204.shtml" title="UBTV小主播加盟" target="_blank">UBTV小主播加盟</a> |</li>
            <li><a href="/xm/190.shtml" title="昂立留学" target="_blank">昂立留学</a> |</li>
            <li><a href="/xm/5.shtml" title="昂立教育加盟" target="_blank">昂立教育加盟</a> |</li>
            <li><a href="#" title="巴布豆早教加盟" target="_blank">巴布豆早教加盟</a></li>
        </ul>
    </div>
</div>
<!-- 导航 -->
<div class="menu">
    <div class="menu_box">
        <div class="header_menu show"><div class="tit">行业分类</div></div>
        <ul class="menu_list">
            <li><a href="/" target="_self">首页</a></li>
            <li><a href="/xm/" target="_self">教育品牌大全</a></li>
            <li><a href="/news/" target="_self">品牌新闻</a></li>
            <li><a href="/paihangbang/" target="_blank">教育加盟排行榜</a></li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer clear">
    <div class="footer_nav">
        <span>关于我们</span>|
        <span>本站法律顾问</span>|
        <span><a href="/deletenews/" rel="nofollow">投诉删除</a></span>|
        <a href="/storage/sitemap.xml">网站地图</a>|
        <span>法律声明</span>|
        <span>联系我们</span>
    </div>
    <div class="cert"><img src="/frontend/images/index07.jpg" alt="信用保障"></div>
    <div class="copyright">
        <p>中教招商网友情提示：多打电话、多咨询、实地考察，可降低投资风险！广告热线4008858878</p>
        <p> Copyright © 2015-2018 www.jjedu.com.cn Corporation, All Rights Reserved  沪ICP备16046217号-17	 版权所有</p>
        <p><a rel="nofollow" href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank">  沪ICP备16046217号-17	</a></p>
    </div>
</div>
<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/swiper.min.js"></script>
<script src="/frontend/js/frontend.js"></script>
@yield('footlibs')
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?e01a299661b326a270d6e5fca36bd5c9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
