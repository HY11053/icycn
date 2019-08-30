<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <link href="/mobile/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/mobile/css/iconfont.css" />
    @yield('headlibs')
</head>
<body>
<header class="header pl110">
    <span class="right" id="mulu"><i class="iconfont icon-xiangmu"></i></span>
    <a href="/" class="logo"><img src="/mobile/images/m_200_72.png" /></a>
    <form class="ptb9" method="post" action="/search/">
        {{--<a href="/search/?type=1" class="serch-link"><i class="iconfont icon-sousuo"></i> <span>搜索加盟项目、菜谱、食材</span></a>--}}
        {{csrf_field()}}
         <input type="text" class="serch-link" placeholder="搜索加盟项目、菜谱、食材" name="title">
    </form>
</header>
<div class="bg-black"></div>
<ul class="mulu-list">
    <li><a href="/"><i class="iconfont icon-shouye"></i>首页</a></li>
    <li><a href="/jm/menu/"><i class="iconfont icon-xiangmuku"></i>母婴店加盟</a></li>
    <li><a href="/ph/"><i class="iconfont icon-paihangbang"></i>母婴生活馆</a></li>
    <li><a href="/jmzs/"><i class="iconfont icon-jiamengzhishi"></i>母婴品牌</a></li>
    <li><a href="/paihangbang/"><i class="iconfont icon-jiamengzixun"></i>排行榜</a></li>
    <li><a href="/touzi/"><i class="iconfont icon-meishizhuanti1"></i>投资分析</a></li>
</ul>
@yield('main_content')

<footer class="footer footer-b mt10">
    <div class="footer-con">
        <a href="/" class="logo"><img src="/mobile/images/m_200_72.png" /></a>
        <ul class="foot-ul mt20">
            <li><a href="/">首页</a></li>
            <li><a href="/muying/">母婴店加盟</a></li>
            <li><a href="/muyingshg/">母婴生活馆</a></li>
            <li><a href="/zhaoshang/">母婴品牌</a></li>
        </ul>
        <p class="mt15 f12 s-ccc"><a target="_blank" class="s-ccc" href="http://www.miitbeian.gov.cn">沪ICP备16055116号-22</a> Copyright&copy; 2019-2020</p>
    </div>
</footer>
<script src="/mobile/js/jquery.min.js"></script>
<script src="/mobile/js/index.js"></script>
@yield('footlibs')

</body>
</html>
