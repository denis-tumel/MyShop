@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')

          <div class="row">
             <h2> {{ $obj -> name }}</h2>
             {!! $obj -> body !!}
             <hr/>
             @foreach ($products as $one) 
             <div class="col-md-4">
             	<h3> {{ $one->name}}</h3>
             	@if($one->picture)
								<img src="{{asset('uploads/thumb/'.$one->picture)}}" class="pic" width="100%"/>
             	@else
             	<img src="/media/nophoto.png" class="pic" />
             	@endif
             </div>
             @endforeach
          </div>

          <!-- /.row -->
@stop