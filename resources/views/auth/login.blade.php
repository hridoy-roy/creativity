<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/frontend/img/home_page/dc-fav-icon.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
    <style>
        body{
            background: #002B36;
        }
        .card-wrap{
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100vh;

        }
        .card{
            width: 400px;
        }
        .logo{
            padding: 30px 0px;
        }
        .logo img{
            width: 70px;
            height: 70px;
            padding: 8px;
            border: 5px solid #009b97;
            border-radius: 50%;
        }
        .form-control:focus {
            border-color: #009b97;
            box-shadow: none;
        }
        .login{
            font-family: 'Great Vibes', cursive;
            margin-bottom: 0px;
            color: #008893;
        }
        .btn-login{
            background: #009b97;
            color: white;
            padding: 7px 25px;
        }
        .btn-login:hover{
            background: #008d88;
            color: white;
        }
        .forgot, .register, a{
            font-weight: bold;
            color: #009b97;
        }
        .forgot, .register, a:hover{
            font-weight: bold;
            color: #008883;
        }
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
    </style>
</head>
<body>
  <div class="card-wrap">
    <div class="card">
        <div class="logo text-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/frontend/img/home_page/dc-fav-icon.png') }}" alt="">
            </a>
        </div>
        <div class="heading text-center">
            <h2 class="login"><strong>Login</strong></h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class=""><strong>{{ __('E-Mail Address') }}</strong></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password"><strong>{{ __('Password') }}</strong></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <strong>{{ __('Remember Me') }}</strong>
                        </label>
                    </div>
                    <div class="register">
                        <a href="{{ route('register') }}">
                            Create an account
                        </a>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-login"><i class="fas fa-sign-in-alt"></i>
                        {{ __('Login') }}
                    </button>
                    <div class="forgot">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
