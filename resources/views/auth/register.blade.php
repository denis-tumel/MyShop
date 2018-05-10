@extends('layouts.base')
@section('styles')
 @parent
<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
@stop
@section('content')
<div class="col-lg-9 fixed-photo">
<h1 class="header-w3ls" style="color:black;">ЗАПОЛНИЕТ ФОРМУ</h1>
        
<div class="art-bothside">
    <div class="Up-sign-form text-center">
        <h2> Регистрация</h2>
        <p>Заполните поля ниже, что бы продолжить...</p>
    </div>
    <div class="mid-cls">
        <div class="art-left-w3ls">
            <div class="header-social wthree">
                <div class="line-mid">
                    <h4>Или войдите используя</h4>
                </div>
                <ul>
                    <li><a href="#" class="f"><span class="fa fa-facebook" aria-hidden="true"></span>Регистрация через Facebook</a></li>
                    <li><a href="#" class="g"><span class="fa fa-google-plus" aria-hidden="true"></span>Регистрация через Google+</a></li>
                </ul>
            </div>
        </div>
        <div class="art-right-w3ls">
            <form action="{{route('register')}}" method="POST">{{ csrf_field() }}
                <div class="main">
                    <div class="form-left-to-w3l form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <p>Имя</p>
                        <input type="text" name="name" placeholder="Имя" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        <div class="clear"></div>
                    </div>

                    <div class="form-left-w3l form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>E-mail</p>
                        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
        
                    <div class="form-right-w3ls form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <p>Пароль</p>
                        <input type="password" name="password" placeholder="Пароль" id="password" required="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="clear"></div>
                    </div>
        
                    <div class="form-right-w3ls ">
                        <p>Повторите пороль</p>
                        <input type="password" placeholder="Повторите пароль" id="confirm_password" required>
                    </div>
        
                    <div class="btnn">
                        <button type="submit">Войти</button><br>
                        <div class="clear"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
