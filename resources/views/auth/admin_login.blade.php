@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right"></label>

                        <div class="col-md-6">
                            <input class="input is-medium" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                        <div class="col-md-6">
                            <input class="input is-medium" id="password" type="password"  name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
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
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" > 
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            Login
                            </button>

                        <a class="btn btn-link" href=""></a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
