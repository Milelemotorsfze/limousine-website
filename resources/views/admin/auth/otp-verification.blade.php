@extends('admin.layouts.auth-main')

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b style="color: #ef891c">Milele</b> Limousine</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">OTP Login</p>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert"> {{session('success')}}
                        </div>
                    @endif

                    @if (Session::get('error') )
                        <div class="alert alert-danger" role="alert"> { {{ Session::get('error') }}
                        </div>
                    @endif
                    @if (Session::get('status') )
                        <div class="alert alert-success" role="alert"> { {{ Session::get('status') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}" />
                        <input type="hidden" name="email" value="{{$email}}" />
                        <input type="hidden" name="password" value="{{$password}}" />
                        <div class="input-group mb-3">
                            <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}"
                                   required autocomplete="otp" autofocus placeholder="Enter OTP">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('otp')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>




@endsection
