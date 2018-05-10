<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Смартфоны на акции</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@section('styles')
    <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">

@show
  </head>

  <body>

    @section('menu')
    <header class="navbar navbar-expand-lg navbar-dark fixed-top my-brand">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><h1><sub>Discounts</sub>Phone</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item white-col">
              <a class="nav-link" href="{{asset('about')}}">О нас</a>
            </li>

            <li class="nav-item white-col">
              <a class="nav-link" href="{{ route('404')}}">Сервис</a>
            </li>
            <li class="nav-item white-col">
              <a class="nav-link" href="{{ route('home')}}">Каталог</a>
            </li>
            <li class="nav-item white-col">
              <a class="nav-link" href="{{ route('contact')}} ">Контакты</a>
            </li>
            <li class="nav-item white-col">
              <a class="nav-link" href="{{ route('card') }} ">Корзина</a>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
            @guest
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('login') }}">Войти</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item active">
                                        <a href="{{ route('logout')}}" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        </div>
      </div>
    </header>
    @show
@section('catalog')
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
@show


          @yield('content')
 
      </div>
    </div>
      <!-- Footer -->
      <div class="footer">
        <p >Copyright &copy; Denis Tumel 2017-2018</p>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery-cooke.js')}}"></script>
    <script src="{{asset('js/card.js')}}"></script>

  </body>

</html>
