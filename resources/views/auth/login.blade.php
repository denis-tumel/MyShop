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
<h1 class="header-w3ls" style="color:black;">ЗАПОЛНИТЕ ФОРМУ</h1>
        
<div class="art-bothside">
    <div class="Up-sign-form text-center">
        <h2> Аунтификация</h2>
        <p>Заполните поля ниже, что бы продолжить...</p>
    </div>
    <div class="mid-cls">
        <div class="art-right-w3ls">
            <form action="{{route('login')}}" method="POST">{{ csrf_field() }}
                <div class="main">
                    <div class="form-left-w3l form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>E-mail</p>
                        <input type="email" class="width-input" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
        
                    <div class="form-right-w3ls form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <p>Пароль</p>
                        <input type="password" class="width-input" name="password" placeholder="Пароль" id="password" required="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="clear"></div>
                    </div>
        
                    <div class="form-left-w3l">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить пароль
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-left-w3l">
                        <div class="btnn">
                            <button type="submit">
                                Войти
                            </button>

                            <a class="btn btn-link btn-link-my" href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
