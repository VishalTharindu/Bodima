<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Style links --}}
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
</head>
<body class="lgb">
<section class="login is-fullheight">  
    <div class="login-body"> 
        <div class="container v-middle">
            <div class="columns login-page">
                <div class="column is-5 login-sidebar">
                <div class="login-gradient-background">
                    <h1>Login</h1>
                </div>
                </div>
                <div class="column is-7 login-form-wrapper">
                <div class="column is-12 has-text-right register-btn">
                    <a class="btn" name="button">Register</a>
                </div>
                <div class="column is-12 ﬁeld-box">
                    <div class="column is-7 is-oﬀset-1">
                    <h1 class="login-heading">Welcome to the Bodima.lk</h1>
                    <p class="login-subheading">Fill out this to login to the website and enjoy it's features</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="ﬁeld">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="icon is-medium is-left">
                                <i class="fa fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fa fa-check"></i>
        
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="ﬁeld">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" id="password" type="password" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                <span class="icon is-medium is-left">
                                <i class="fa fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fa fa-check"></i>
        
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
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
                            <a class="login-btn">
                            Login
                            </a>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </p>
                        <p class="control">
                            <a class="forgot-link" >Forgot Password</a>
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
    
</body>
</html>