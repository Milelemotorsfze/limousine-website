@extends('admin.layouts.auth-main')
@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b style="color: #ef891c">Milele</b> Limousine</a>
                {{--                <img src="{{asset('/images/car_rental_logo.png')}}" class="text-dark" width="150px;" alt="Milele Car rental logo"></img>--}}
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert"> {{session('success')}}
                        </div>
                    @endif

                    @if (Session::get('status') )
                        <div class="alert alert-success" role="alert">  {{ Session::get('status') }}
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
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
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-3 mb-1">
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                    {{--                    <p class="mb-0">--}}
                    {{--                        <a href="register.html" class="text-center">Register a new membership</a>--}}
                    {{--                    </p>--}}
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
