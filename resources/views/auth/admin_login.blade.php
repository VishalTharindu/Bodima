@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-2 d-flex justify-content-center">Admin Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                                <span class="input-group-text">Email<i class="ni ni-lock-circle-open"></i></span>
                            </div>                           
                            <input class="form-control" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Password<i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" id="password" type="password"  name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
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
                    <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember">
                        <label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label>
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
