@extends('layouts.front')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Login</h1>
                </div>
                <div class="col-lg-6 text-lg-end">

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="h5 text-uppercase mb-4">{{__('login')}}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-small text-uppercase" for="username">Username</label>
                                <input type="text" name="username" class="form-control form-control-lg"  value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter Username.">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-small text-uppercase" for="username">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg"  value="{{ old('password') }}" required placeholder="Enter your password.">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-dark" type="submit">{{__('login')}}</button>
                                @if(Route::has('password.request'))
                                    <a class="btn btn-link" href="{{route('password.request')}}">
                                        {{__("Forgot Your Password")}}
                                    </a>
                                @endif

                                @if(Route::has('register'))
                                    <a class="btn btn-secondary float-right" href="{{route('register')}}">
                                        {{__('Have\'t an account')}}
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>



@endsection
