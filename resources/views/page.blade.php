@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')

          <div class="row">
             <h2> {{ $obj -> name }}</h2>
             {!! $obj -> body !!}
          </div>
          <!-- /.row -->
@stop