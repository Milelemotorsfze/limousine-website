
@extends('admin.layouts.auth-main')
@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b style="color: #ef891c">Milele</b> Limousine</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert"> {{session('success')}}
                        </div>
                    @endif

                    @if (Session::get('error') )
                        <div class="alert alert-danger" role="alert">  {{ Session::get('error') }}
                        </div>
                    @endif
                    @if (Session::get('status') )
                        <div class="alert alert-success" role="alert">  {{ Session::get('status') }}
                        </div>
                    @endif
                    <form action="{{ route('otp.loginOtpGenerate') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" value="{{old('password')}}" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    {{--                                    <div class="social-auth-links text-center mb-3">--}}
                    {{--                                        <p>- OR -</p>--}}
                    {{--                                        <a href="#" class="btn btn-block btn-primary">--}}
                    {{--                                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
                    {{--                                        </a>--}}
                    {{--                                        <a href="#" class="btn btn-block btn-danger">--}}
                    {{--                                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                    <!-- /.social-auth-links -->--}}
                    @if (Route::has('password.request'))
                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">I forgot my password</a>
                        </p>
                    @endif
                    {{--                                    <p class="mb-0">--}}
                    {{--                                        <a href="register.html" class="text-center">Register a new membership</a>--}}
                    {{--                                    </p>--}}
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
