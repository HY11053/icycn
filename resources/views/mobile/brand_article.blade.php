@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}} @stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')


@stop
@section('main_content')
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a></span>
    </div>
    <div class="item-header">
        <div class="item-detail">
            <div class="layout">
                <ul>
                    <li>
                        <div class="img"> <img src="http://img.canyin.com/2018/10/166A3E902A4.jpg"> </div>
                        <div class="con">
                            <div class="title">
                                <h1>金湖茶餐厅</h1>
                            </div>
                            <div class="tzje">金湖茶餐厅</div>
                            <div class="tzje">分类：<span><a href="/xiangmu/zhongcan/">中餐</a></span></div>
                        </div>
                        <div class="zhishu"> <em>加盟费用</em> <a href="#liuyan">查看详情</a> </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
                <div class="bg-fff mt10 ptb10 plr15">
                    <a href="#wyjm" class="kd-btn fr ml10 btn-marklog" data-marktype="18">免费开店方案</a>
                    <h3 class="f16 lh24 fw6">基本投资: <em style="color: red">{{$thisarticleinfos->brandpay}}</em> </h3>
                    <div class="mt5">
                        <em class="pin-tag">所属公司</em>
                        <span class="f14 s-c595">成都飚锅餐饮管理有限公司</span>
                    </div>
                    <span class="mt10 pin-time"><i class="iconfont icon-shijiantu"></i>2019-08-22 18:01</span>
                </div>
            <div class="layout">
                <div class="jm-info">
                    <div><i><em>180</em>人</i><span>意向加盟</span></div>
                    <div><i><em>121</em>人</i><span>申请加盟</span></div>
                    <div><i><em>314</em>家</i><span>门店数</span></div>
                    <div><i><em>314</em>家</i><span>门店数</span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="item4">
        <div class="item4box">
            <div class="item4content">
                <div class="content">
                    <div class="jm_xq" id="b-info">
                        <div class="tb-first">
                            <div class="jm_xq_con on">
                                @php
                                    $content=$thisarticleinfos->body;
                                    $content=$content=str_replace(PHP_EOL,'',$content);
                                    $content=str_replace(['<p >','<strong >','<br >','<br />'],['<p>','<strong>','<br>','<br/>'],$content);
                                    $content=str_replace(
                                          [
                                          '<p><strong><br/></strong></p>',
                                          '<p><strong><br></strong></p>',
                                          '<p><br></p>',
                                          '<p><br/></p>',
                                          '　　'
                                          ],'',$content
                                          );
                                    $pattens=array(
                                        "#<p>[\s| |　]?<strong>[\s| |　]?</strong></p>#",
                                        "#<p>[\s| |　]?<strong>[\s| |　]+</strong></p>#",
                                        "#<p>[\s| |　]+<strong>[\s| |　]+</strong></p>#",
                                        "#<p><strong><br/></strong></p>#",
                                        "#<p><strong><br></strong></p>#",
                                        "#<p><br></p>#",
                                        "#<p><br/></p>#",
                                        "#<p>[\s| |　]?</p>#",
                                        "#<p>[\s| |　]+</p>#",
                                        "#&nbsp;#"
                                    );
                                    $content=preg_replace($pattens,'',$content);
                                      $content=preg_replace(["/style=.+?['|\"]/i","/height=.+?['|\"]/i","/width=.+?['|\"]/i","/font-size=.+?['|\"]/i","/microsoft=.+?['|\"]/i",'/yahei";=""/'],'',$content);
                                 echo $content;
                                @endphp
                            </div>
                            <div class="display" style="display: block;"><span>展开全文</span><i></i></div>
                            <div class="hidden" style="display: none;"><span>收起全文</span><i></i></div>
                        </div>
                        <div class="zhuanzai">
                            <i></i>如需更进一步了解{{$thisarticleinfos->brandname}}品牌加盟相关信息，可留言咨询我们，如因内容、版权或其它问题，请及时和本站取得联系，我们将第一时间删除内容！
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="item5" class="clearfix">
        <div class="item5box">
            <i></i>
            <div class="title">在线留言</div>
            <form onsubmit="return false;">
                <div class="inputbox">
                    <input type="text" name="username" id="guestname" value="" placeholder="您的真实姓名">
                    <span>姓名：</span>
                    <div class="tip">*姓名不可以为空</div>
                </div>
                <div class="inputbox">
                    <input type="tel" name="iphone" id="phonenum" value="" placeholder="电话是与您联系的重要方式">
                    <span>手机：</span>
                    <div class="tip">*不是完整的11位手机号或者正确的手机号前七位</div>
                </div>
                <div class="inputbox">
                    <input type="text" name="note" id="note" value="" placeholder="我对此项目很感兴趣，请联系我。">
                    <span>留言：</span>
                    <div class="tip">*留言不可以为空</div>
                </div>
                <button type="submit" id="tj_btn" class="submitmessagebtn">提交留言</button>
            </form>
            <div class="lysm">
                本站为资讯展示网站，本网页信息来源互联网，本平台不保证信息的真实性，请用户自行与商家联系核对真实性。此次留言将面向网站内所有页面项目产生留言。
            </div>
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