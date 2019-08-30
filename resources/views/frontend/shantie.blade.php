@extends('frontend.frontend')
@section('title')删帖页面-世纪母婴网@stop
@section('keywords')删帖页面@stop
@section('description')删帖页面@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/article.css" />
    <link rel="stylesheet" href="/frontend/css/index.css" />
    <style>
        body{background: #F5F5F5;}
    </style>
@stop
@section('main_content')
    <main>
        <!--主体开始-->
        <div class="main clearfix">
            <!--左侧开始-->
            <div class="about_l">
                <div class="hd"></div>
                <div class="bd">
                    <ul>
                        <li class="cur"><a href="/deletenews/" target="_blank">投诉删帖</a></li>
                    </ul>
                </div>
            </div>
            <!--左侧结束-->

            <!--右侧开始-->
            <div class="about_r">
                <div class="hd">投诉及删帖须知</div>
                <div class="bd">
                    <div class="about_law">
                        1.<a style="color: red; font-size: 16px; font-weight: bold;" href="/frontend/images/shantie.doc">*点击下载《删除信息申请表》</a><br/>
                        2. 将申请表、公司营业执照扫描件（个人用户提供身份证扫描件）以及其他相关权属证明资料一并发送至投诉邮箱shantie5988@qq.com。 邮件主题注明，XXX公司关于XXX删除的申请（例如：上海XX网络科技有限公司关于贵站涉及商标侵权内容的删除申请）。<br>
                        3.我们将会在3-5个工作日内审核您的相关资料做出相应处理并以邮件回复您处理结果。<br>
                       <br>
                        <b>常见问题解答</b><br>
                        1、提交删除申请表后，我需要做什么？<br>
                        2、我们收到您的投诉材料，会及时核实您的身份、权属证明资料有效性与投诉内容的真实性与合法性后，交予相关部门尽快处理。您要做的就是耐心地等待处理结果了。<br>

                        注：为了保证您的问题能够及时有效的处理，请您在第一次提交材料的时候，务必提交真实有效、完整清晰的材料，以免造成您的问题处理不成功或无法受理。<br>

                        3、如何查看投诉处理结果？<br>
                        在投诉申请发起后，请注意查收邮件回函，我们会将处理结果在3-5个工作日内发送到您的邮箱。<br>

                        4、友情提示：当您的投诉申请已成功提交后，请耐心等待处理结果即可。不需要反复投诉或提交相同的多个投诉，均不被受理。<br>

                        5、为什么我的投诉内容未被受理？<br>
                        1)、投诉材料不真实、不完整、不清晰或者资料涉嫌盗用及虚假，本站均不被受理；<br>
                        2)、投诉内容非本站处理范围的不被受理；<br>
                        3)、投诉内容无侵犯其他机构或个人权益行为的的不被受理。<br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;本网站之声明以及其修改权、更新权及最终解释权均属本网站所有。<br>
                        <br>
                    </div>
                </div>
            </div>
            <!--右侧结束-->
        </div>
        <!--主体结束-->

    </main>
@stop