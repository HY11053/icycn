@inject('positions',App\Position')
<div class="box weizhi1">
    <a href="/" title="中教招商网">中教招商网</a>&gt;
    <a class="dq" href="{{config('app.url')}}/{{$positions->positions(Request::getrequesturi())->real_path}}/" title="{{$positions->positions(Request::getrequesturi())->typename}}">{{$positions->positions(Request::getrequesturi())->typename}}</a></div>