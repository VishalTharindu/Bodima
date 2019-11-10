<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- Style links --}}
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
</head>
<body class="lgb">

{{-- navibar include --}}
@include('incfile.navibar') 
{{-- break --}}

<div class="r">
    <section class="login is-fullheight">  
        <div class="login-body"> 
            <div class="container">
                <div class="columns login-page">
                    <div class="column is-5 login-sidebar">
                    <div class="login-gradient-background">
                        <h1>Login</h1>
                    </div>
                    </div>
                    <div class="column is-7 login-form-wrapper">
                        <div class="columns">
                            <div class="column is-8">
                                <h1 class="login-heading">Welcome to the Bodima.lk</h1>
                                <p class="login-subheading">Fill out this to login to the website and enjoy it's features</p>
                            </div>
                            <div class="column is-4 has-text-right register-btn has-text-white">
                                <a class="btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        </div>
                    <div class="column is-12 ﬁeld-box">
                        <div class="column is-7 is-oﬀset-1">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="ﬁeld">
                                    <p class="control has-icons-left has-icons-right">
                                        <input class="input is-medium" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <span class="icon is-medium is-left">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                        {{-- <span class="icon is-small is-right">
                                        <i class="fa fa-check"></i>
                
                                        </span> --}}
                                        @error('email')
                                            <span class="" role="alert">
                                                <strong class="has-text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                </div>
                                <div class="ﬁeld">
                                    <p class="control has-icons-left has-icons-right">
                                        <input class="input is-medium" id="password" type="password" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                        <span class="icon is-medium is-left">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                        {{-- <span class="icon is-small is-right">
                                        <i class="fa fa-check"></i>
                
                                        </span> --}}
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ﬁeld is-grouped is-grouped-centered login-btn-group">
                                    <p class="control">
                                        <button type="submit" class="login-btn">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="forgot-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </p>    
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                <!-- is-8 ends -->
                </div>
            </div>
        <!-- div.container ends -->
        </div>
    </section>
</div>
    
</body>
</html>