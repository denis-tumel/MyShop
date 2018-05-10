@extends('layouts.base')
@section('styles')
 @parent
     <link href="{{asset('css/main.css')}}" rel="stylesheet">
@stop
@section('content')  
<div class="col-lg-9 fixed-photo">
<div class="row">
  @foreach($names as $name)
            <div class="col-md-4  marg-form search">
              <div class="card h-100 my-card">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{asset('character/'.$name->id)}}">{{ $name -> name}}</a>
                  </h5>
                  <table width="100%">
                    <tr>
                      <td width="200px" valign="top">
                <a href="#">             
              @if($name->picture)
                <img src="{{asset('uploads/thumb/'.$name->picture)}}" class="pic img"   height="167,8px" width="83,8px"/>
              @else
              <img src="/media/nophoto.png" class="pic img" />
              @endif</a> 
              </td>
              </tr>
            </table>
                <h5>{{$name->price }} {{$name->currency}}</h5>
                  <p class="card-text card-text-my">{{ $name -> status }}</p>
                </div>
                <div class="w3-btn-my add">
                  <small> <a id="good-{{$name->id}}-{{$name->price}}" class="addCart text-muted-my">ДОБАВИТЬ В КОРЗИНУ</a></small>
                </div>
              </div>
            </div>
  @endforeach
</div>
</div>
@stop