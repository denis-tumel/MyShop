<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@section('styles')
    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css')}}"" rel="stylesheet">
@show
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{('/')}}">Главная</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('home')}}">Home-страница
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('about')}}">О сайте</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('services')}}">Сервис</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('contact')}} ">Контакты</a>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
               @guest
                            <li><a href="{{ route('login') }}">Login </a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Name</h1>
          <div class="list-group">
            @foreach($catalogs as $one)
            <a href="{{asset('page/'.$one->id)}}" class="list-group-item">{{$one->name}}</a>
            @endforeach
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          @yield('content')
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
