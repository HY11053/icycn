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
                        <div class="img"> <img src="{{$thisarticleinfos->litpic}}"> </div>
                        <div class="con">
                            <div class="title">
                                <h1>{{$thisarticleinfos->brandname}}</h1>
                            </div>
                            <div class="tzje">{{$thisarticleinfos->brandgroup}}</div>
                            <div class="tzje">分类：<span><a href="/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a></span></div>
                        </div>
                        <div class="zhishu"> <em>加盟费用</em> <a href="#item5" rel="nofollow">查看详情</a> </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
                <div class="bg-fff mt10 ptb10 plr15">
                    <a href="#item5" rel="nofollow" class="kd-btn fr ml10 btn-marklog" data-marktype="18">免费开店方案</a>
                    <h3 class="f16 lh24 fw6">基本投资: <em style="color: red">{{$thisarticleinfos->brandpay}}</em> </h3>
                    <div class="mt5">
                        <em class="pin-tag">所属公司</em>
                        <span class="f14 s-c595">{{$thisarticleinfos->brandgroup}}</span>
                    </div>
                    <span class="mt10 pin-time"><i class="iconfont icon-shijiantu"></i>{{$thisarticleinfos->created_at}}</span>
                </div>
            <div class="layout">
                <div class="jm-info">
                    <div><i><em>{{$thisarticleinfos->brandattch}}</em>人</i><span>意向加盟</span></div>
                    <div><i><em>{{$thisarticleinfos->brandapply}}</em>人</i><span>申请加盟</span></div>
                    <div><i><em>{{$thisarticleinfos->brandnum}}</em>家</i><span>门店数</span></div>
                    <div><i><em>100㎡</em></i><span>面积</span></div>
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
    @include('mobile.liuyan')
    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="item8content">
                @foreach($abrandlists as $abrandlist)
                    <div class="item8list  @if(($loop->iteration)%2==0) fr @else fl @endif">
                        <a href="/xm/{{$abrandlist->id}}.shtml">
                            <img src="{{$abrandlist->litpic}}" alt="{{$abrandlist->brandname}}">
                            <div class="item8listcontent">
                                <div class="listtitle">{{$abrandlist->brandname}}</div>
                                <div class="listtext">
                                    <p></p>
                                </div>
                                <div class="textleft fl">￥{{$abrandlist->brandpay}}
                                </div>
                                <div class="textright fr">

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($latestbrandnews as $index=>$latestbrandnew)
                    @if($index<7)
                    <div class="item7list">
                        <a href="/news/{{$latestbrandnew->id}}.shtml">
                            <div class="left fl">
                                <div class="lefttitle">{{$latestbrandnew->title}}</div>
                                <div class="text">
                                    <div class="message">来源：{{config('app.indexname')}}</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <img src="{{$latestbrandnew->litpic}}" alt="{{$latestbrandnew->title}}">
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop