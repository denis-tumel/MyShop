@extends('layouts.base')
@section('styles')
 @parent
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
@stop
@section('content')  
<div class="col-lg-9 fixed-photo">
<h1 class="header-w3ls">ЗАПОЛНИТЕ ФОРМУ</h1>

<div class="art-bothside art-bothside-card">
    <div class="Up-sign-form text-center">
        <h2>Оформление заказа</h2>
        <p>Заполните поля ниже, что бы продолжить...</p>
    </div>
    <div class="mid-cls">
        <div class="art-right-w3ls">
          <table width="737px" border="1" >
            <tr class="blue">
              <th>Фото</th><th>Название</th><th>Цена</th><th>Количество</th><th>Сумма</th><th>Действие</th>
            </tr>
            <?php 
            $count = 0;
            $sum = 0;
             ?>
            @foreach($products as $obj)
            
            <?php
              $summa = 0;
              $num = $counts[$obj->id]*$obj->price;
              $summa+= $num;
              $count++; 
              $sum+= $summa; 
            ?>
            
            <tr>
              <th><img src="{{asset('uploads/thumb/'.$obj->picture)}}" class="pic img img-1"   height="167,8px" width="83,8px"/>
              </th><th>{{$obj->name}}</th><th>{{$obj->price}}</th><th><input style="width:30px;"type="text" value="{{$counts[$obj->id]}}"></input></th><th>{{$summa}}</th><th><a href="#">Удалить</a>/<a href="#">изменить</a></th>
            </tr>

            @endforeach

            <tr>
              <th>Количество: {{$counts[$obj->id] * $count}}</th><th>Сумма: {{$sum}}</th>
            </tr>
          </table>
<!--           <form  method="post" action="{{ route('contact')}}">{{ csrf_field() }}           
      <div class="main my-main">
        <p style="padding-bottom: 20px;">Заполните поля ниже, что бы продолжить...</p>
          <div class="form-group">
              <p>Имя</p>
              <input type="text" class="width-input" id="name" name="name" placeholder="имя" value="{{old('name')}}" required>

    </div>  
          <div class="form-group">
              <p>E-mail</p>
              <input type="email" class="width-input" name="email" id="email" placeholder="E-mail" value="{{old('email')}}" required>
          </div>                 

    <div class="form-group">
              <p>Ваше сообщение</p>
              <textarea class="form-control my-form-control" id="text" name="text" rows="5" placeholder="your messege">{{old('text')}}</textarea>
    </div>

          <div class="form-left-w3l">
              <div class="btnn my-btnn">
                  <button type="submit">
                      Отправить
                  </button>                           
              </div>
          </div>
      </div>

  </form> -->
        </div>
    </div>
</div>
</div>
@stop