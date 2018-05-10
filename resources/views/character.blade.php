@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')  
<div class="col-lg-9 fixed-photo">
    <h1 class="white-col-name ">{{ $obj -> name}}</h1>   
    <div class="row" name="close">
             <div class="col-lg-12  tbl">
              <div class="card h-100 my-card-1">
                <div class="card-body">
                  <table width="100%">
                  	<tr>
                  		<td width="200px" valign="top">
                <a href="#">             
              @if($obj->picture)
								<img src="{{asset('uploads/thumb/'.$obj->picture)}}" class="pic img"   height="167,8px" width="83,8px"/>
             	@else
             	<img src="/media/nophoto.png" class="pic img" />
             	@endif</a> 
             	</td>
             	<td valign="top" align="left">   
             	<div class="my-tabl" id="my_{{$obj->id}}">              
								{!!$obj -> character!!}
								<button class="w3-btn-my open_add">open</button>
              </div>
                </td>
              </tr>
            </table>
                <h5>{{$obj->price }} {{$obj->currency}}</h5>
                  <p class="card-text">{{ $obj -> status }}</p><hr class="line-product">
                </div>
                <div class="w3-btn-my add-1">
                  <small> <a id="good-{{$obj->id}}-{{$obj->price}}" class="addCart text-muted-my">ДОБАВИТЬ В КОРЗИНУ</a></small>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- /.row -->
@stop