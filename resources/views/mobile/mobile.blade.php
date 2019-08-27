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
    @yield('headlibs')
</head>
<body>
<header class="header pl110">
    <span class="right" id="mulu"><i class="iconfont icon-xiangmu"></i></span>
    <a href="javascript:void(0);" class="logo"><img src="mobile/images/m_200_72.png" /></a>
    <div class="ptb9">
        <a href="/search/?type=1" class="serch-link"><i class="iconfont icon-sousuo"></i> <span>搜索加盟项目、菜谱、食材</span></a>
    </div>
</header>
<div class="bg-black"></div>
<ul class="mulu-list">
    <li><a href="/"><i class="iconfont icon-shouye"></i>首页</a></li>
    <li><a href="/jm/menu/"><i class="iconfont icon-xiangmuku"></i>项目库</a></li>
    <li><a href="/ph/"><i class="iconfont icon-paihangbang"></i>排行榜</a></li>
    <li><a href="/jmzs/"><i class="iconfont icon-jiamengzhishi"></i>加盟知识</a></li>
    <li><a href="/jmzx/"><i class="iconfont icon-jiamengzixun"></i>加盟资讯</a></li>
    <li><a href="/zt/"><i class="iconfont icon-meishizhuanti1"></i>加盟专题</a></li>
    <li><a href="/chuangye/"><i class="iconfont icon-shipin"></i>经验分享</a></li>
</ul>
@yield('main_content')


@yield('footlibs')

</body>
</html>
