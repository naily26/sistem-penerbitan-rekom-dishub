@extends('layouts.admin.base')

@section('slot')
<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo mb-5 mt-5">
        {{-- <img src="{{ asset('logo-big.png') }}" alt="logo" width="50%"> --}}
        <div class="logo">DISHUB JATIM</div>
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Login ke akun Anda</h3>
        <p>
            Masukkan email dan password Anda untuk login ke sistem.
        </p>
        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset>
                <div class="form-group">
                    <span class="input-icon">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email " value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        <i class="fa fa-envelope"></i>
                    </span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required autocomplete="current-password">
                        <i class="fa fa-lock"></i>
                        @if(Route::has('password.request'))
                            <a class="forgot" href="{{ route('password.request') }}">
                                Lupa password
                            </a>
                        @endif
                    </span>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary pull-right">
                        Login <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
                <div class="new-account">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="register">
                        Daftar sekarang
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <!-- start: COPYRIGHT -->
    <div class="copyright">
        {{ date('Y') }} &copy; Sistem Penerbitan Rekom Dishub by Naily.
    </div>
    <!-- end: COPYRIGHT -->
</div>
@endsection

@push('script')
    <script>
        document.body.classList.add('login', 'example2');
        function forgetPassword() {
        alert("Silahkan hubungi admin untuk melakukan reset password ulang!");
        }
    </script>
@endpush

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
