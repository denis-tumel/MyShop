@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')       
     <div class="row">
             @foreach ($products as $one) 
             <div class="col-md-8 products tbl">
              <div class="card h-100">
                <a href="#">             
              @if($one->picture)
								<img src="{{asset('uploads/thumb/'.$one->picture)}}" class="pic img"   height="167,8px" width="83,8px"/>
             	@else
             	<img src="/media/nophoto.png" class="pic img" />
             	@endif</a>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="#">{{ $one -> name}}</a>
                  </h5>
                  <h5>{{$one->price }} {{$one->currency}}</h5>
                  <p class="card-text">{{ $one -> status }}</p>
                </div>
                <div href="#" class="card-footer">
                  <small class="text-muted"> <a href="#">Add to cart</a></small>
                </div>
              </div>
            </div>
             @endforeach
          </div>

          <!-- /.row -->
@stop