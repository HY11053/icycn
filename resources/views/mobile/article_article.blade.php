@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}} @stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></span>
    </div>
    <div id="ar_content">
        <div class="detail-tit">
            <h1>{{$thisarticleinfos->title}}</h1>
            <div class="titstyle">
                <span>来源：{{config('app.indexname')}}</span> <span>时间：{{$thisarticleinfos->created_at}}</span>
            </div>
            <div class="item-detail-add fixed"> <a href="/xiaochi/pangziguokui.html" class="img"> <img src="http://img.canyin.com/2018/12/167C0069078.jpg"></a>
                <div class="item-detail-con">
                    <p class="title"><a href="/xiaochi/pangziguokui.html">胖子锅盔</a></p>
                    <div class="con clearfix"><span class="money">134</span><span>人意向加盟</span></div>
                </div>
                <div class="btn jm-popup" data-role="#jm-live-mes"><a href="#" onclick="lightbox('#lybox')">获取资料</a></div>
            </div>
        </div>

        <div class="detail-text detail-zs-text">
            {!! $thisarticleinfos->body !!}
        </div>
    </div>
    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="item8content">
                <div class="item8list  fr ">
                    <a href="/xm/3607.shtml">
                        <img src="http://m.jjedu.com.cn/storage/uploads/2018/12/25/09ee1047d07db9127e9f9dd87cf67c7d.jpg" alt="音乐谷儿童艺术培训">
                        <div class="item8listcontent">
                            <div class="listtitle">音乐谷儿童艺术培训</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">￥5.18~8.63万元
                            </div>
                            <div class="textright fr">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="item8list  fl ">
                    <a href="/xm/3097.shtml">
                        <img src="http://m.jjedu.com.cn/storage/uploads/2018/12/26/a2cd40a88a272fc09b33c6b645c5c167.jpg" alt="中德央音">
                        <div class="item8listcontent">
                            <div class="listtitle">中德央音</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">￥5万~9万
                            </div>
                            <div class="textright fr">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="item8list  fr ">
                    <a href="/xm/1362.shtml">
                        <img src="http://m.jjedu.com.cn/storage/uploads/2018/12/10/5871c5b12c9debb42a65f66fcf1013df.png" alt="东方童民族艺术教育">
                        <div class="item8listcontent">
                            <div class="listtitle">东方童民族艺术教育</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">￥3~10万
                            </div>
                            <div class="textright fr">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="item8list  fl ">
                    <a href="/xm/3035.shtml">
                        <img src="http://m.jjedu.com.cn/storage/uploads/2019/01/16/268af5413023fd98a09cb81b4b67d5d0.png" alt="米娜凯威礼仪艺术教育">
                        <div class="item8listcontent">
                            <div class="listtitle">米娜凯威礼仪艺术教育</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">￥6.48~9.02万元
                            </div>
                            <div class="textright fr">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                <div class="item7list">
                    <a href="/news/14747.shtml">
                        <div class="left fl">
                            <div class="lefttitle">安阳鹏程教育加盟费多少钱？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/23/ac74dd7c0b3e97d27f9970d54c3f8284.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14745.shtml">
                        <div class="left fl">
                            <div class="lefttitle">加盟双语学校需要什么条件？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/23/8b937fc50e2cf7d85d5633ff0df8f5af.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14651.shtml">
                        <div class="left fl">
                            <div class="lefttitle">五六点教育加盟赚钱吗？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/22/c2b6deae083123ac668a0d2ea7278f36.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14624.shtml">
                        <div class="left fl">
                            <div class="lefttitle">北京艺术教育加盟有哪些？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/20/bfab794d4123345d6bb5593b35e3332f.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14618.shtml">
                        <div class="left fl">
                            <div class="lefttitle">培飞数学加盟费用多少钱？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/20/b7dd2f0c1da30a4aeeaeb26b569504c2.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14667.shtml">
                        <div class="left fl">
                            <div class="lefttitle">小荷作文加盟靠不靠谱？加盟支持有哪些？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/22/9f1adff61b8a4c176c1c16ef7a40f60c.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="item7list">
                    <a href="/news/14666.shtml">
                        <div class="left fl">
                            <div class="lefttitle">加盟小荷作文培训机构怎么样？</div>
                            <div class="text">
                                <div class="message">编辑：中教招商网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="http://m.jjedu.com.cn/storage/uploads/2019/08/22/a2317d181931af81b60a0354625fb55a.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop