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
<body>

    @include('incfile.navibar')

    <div class="r">

        <section class="regis is-fullheight">  
            <div class="regis-body"> 
                <div class="container">
                    <div class="columns regis-page">
                        <div class="column is-5 regis-sidebar">
                        <div class="regis-gradient-background">
                            <h1>Registration</h1>
                        </div>
                        </div>
                        <div class="column is-12 regis-form-wrapper">
                        <div class="column is-12 ﬁeld-box">
                            <div class="column is-7 is-oﬀset-1">
                                <div class="columns">
                                    <div class="column is-6">
                                        <h1 class="regis-heading">Welcome to the Bodima.lk</h1>
                                        <p class="regis-subheading">Fill out this form to Register used the website and enjoy it's features</p>
                                    </div>
                                    <div class="column is-6 has-text-right register-btn">
                                        <a class="btn" name="button">Login</a>
                                    </div>
                                </div>  
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <div class="columns">
                                    <div class="column">
                                        <div class="ﬁeld">
                                            
                                            <p class="control has-icons-left has-icons-right">
                                            
                                                <input class="input  is-success" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            
                                            </p>
    
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ﬁeld">
                                            <p class="control has-icons-left has-icons-right">
                                            
                                                <input class="input  is-success" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            
                                            </p>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="ﬁeld">
                                            <p class="control has-icons-left has-icons-right">
                                            
                                                <input class="input  is-success" id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                            
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            
                                            </p>
    
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ﬁeld">
                                            <p class="control has-icons-left has-icons-right">
                                            
                                                <input class="input  is-success" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                            
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            
                                            </p>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="ﬁeld">
                                           <p class="control has-icons-left has-icons-right">
                                            
                                                <input class="input  is-success" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                            
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ﬁeld">
                                            
                                            <p class="control has-icons-left has-icons-right">
                                                
                                                <input id="password-confirm" type="password" class="input  is-success" name="password_confirmation" required autocomplete="new-password">
                                                
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                
                                                <span class="icon is-small is-right">
                                                    <i class="fa fa-eye"></i>
                                                
                                                </span>
                                            
                                            </p>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="ﬁeld is-grouped is-grouped-centered regis-btn-group">
                                    <button type="submit" class="regis-btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                        <!-- is-8 ends -->
                    </div>
                </div>
                <!-- div.container ends -->
                </div>
            </section>
    </div>

        {{-- @include('incfile.footersec') --}}
    </body>
</html>