@extends('layouts.base')
@section('styles')
 @parent
<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
@stop
@section('content')  

    <!-- Page Content -->
    <div class="container ">
      <div class="row ">  
        <div class="col-lg-3 fixed-catalog">
          <h2 class="my-4 cl ">КАТАЛОГ:</h2><hr class="line-catalog">
          <div>
            <form action="{{asset('/search')}}" method="get" class="navbar-search pull-left">
              <input type="text" class="span3 search-query my" autocomplate="off" name="search" placeholder="Поиск...">
              <button class="w3-btn-my">Найти</button><hr class="line-catalog">
            </form>
          </div>
            <div class="search white-col" id="basket">
            <table>
                <tr style="display: none;" class="hPb ">
                  <td>Выбрано:</td>
                  <td>
                    <span id="totalGoods">0</span> товаров
                  </td>
                </tr>
                <tr style="display: none;" class="hPb">
                  <td>Сумма: &asymp; </td>
                  <td>
                    <span id="totalPrice">0</span> $.
                  </td>
                </tr>
                <tr style="display: table-row;" class="hPe">
                  <td colspan="2">Корзина пуста</td>
                </tr>
                <tr >
                  <td><a style="display: none;" id="clearBasket" class="w3-btn-my hi" href="#">Очистить</a></td>
                  <td><a style="display: none;" id="checkOut" class="w3-btn-my hi" href="{{asset('card')}}">Оформить</a></td>
                </tr>
            </table>
          </div><hr class="line-catalog">
          <div class="list-group">
            @foreach($catalogs as $one)
            <a href="{{asset('page/'.$one->id)}}" class="list-group-item list-item">{{$one->name}}</a>
            @endforeach
          </div>
        </div>
        @stop
