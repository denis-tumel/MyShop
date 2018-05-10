@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')
<div class="col-lg-9 fixed-photo">
  <div class="container my_container">
    <div class="row">  
      <h2> {{ $obj -> name }}</h2>
      <div> {!! $obj -> bode !!}</div>
    </div>
  </div>
</div>
@stop
<<!--></!-->
