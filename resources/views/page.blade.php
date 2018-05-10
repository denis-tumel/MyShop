@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')  
<div class="col-lg-9 fixed-photo">
    <h1 class="white-col-name">{{ $obj -> name}}</h1>   
    <div class="row" name="close">
             @foreach ($products as $one) 
             <div class="col-md-4 marg-form">
              <div class="card h-100 my-card">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{asset('character/'.$one->id)}}">{{ $one -> name}}</a><hr class="line-product">
                  </h5>
                  <table width="100%">
                  	<tr>
                  		<td width="200px" valign="top">
                <a href="#">             
              @if($one->picture)
								<img src="{{asset('uploads/thumb/'.$one->picture)}}" class="pic img"   height="167,8px" width="83,8px"/>
             	@else
             	<img src="/media/nophoto.png" class="pic img" />
             	@endif</a> 
             	</td>
              </tr>
            </table>
                <h5>{{$one->price }} {{$one->currency}}</h5>
                  <p class="card-text card-text-my">{{ $one -> status }}</p>
                </div>
                <div class="w3-btn-my add">
                  <small> <a id="good-{{$one->id}}-{{$one->price}}" class="addCart text-muted-my">ДОБАВИТЬ В КОРЗИНУ</a></small>
                </div>
              </div>
            </div>
             @endforeach
             <div class="pagination">{{$products->links()}}</div>
          </div>
</div>
          <!-- /.row -->
@stop