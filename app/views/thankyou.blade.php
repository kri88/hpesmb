@extends('_layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('header')
<header id="side">
    <h1>{{Lang::get('general.title')}}</h1>
    <small>{{Lang::get('general.sub-title')}}</small>
    <h2 class="blue big">{{$heading}}</h2>
    <p class="result">{{$sub1}}</p>
</header>
@stop

@section('main')
<section id="page">
    <h2 class="title">{{Lang::get('general.wait')}}</h2>
    <a class="button-tweet" href="http://twitter.com/home/?status={{$tweet}}" target="_blank">Tweet</a>
</section>
@stop

@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/main.js')}}}"></script>
@if (isset($script))
<script>
$(function() {
    @foreach ($script as $s)
       {{ $s }}
    @endforeach
});
</script>
@endif
@stop