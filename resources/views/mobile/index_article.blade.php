@extends('mobile.mobile')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('main_content')
    <div class="bg-fff mt10 pt20">
        <div class="tc">
            <span class="title-ribbon">{{$thistypeinfo->typename}}</span>
        </div>
        <div class="detail-text detail-zs-text">
            {!! $thistypeinfo->contents !!}
        </div>
    </div>
@stop
