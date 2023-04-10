@extends('layouts.admin.base')

@section('slot')
<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo mb-5 mt-5">
        <img src="{{ asset('logo-big.png') }}" alt="logo" width="50%">
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Registrasi Akun</h3>
        <p>
            Silahkan lengkapi form di bawah ini untuk registrasi akun anda.
        </p>
        <form class="form-login" method="POST" action="{{ route('register') }}">
            @csrf
            <fieldset>
                <div class="form-group">
                    <span class="input-icon">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Nama " value="{{ old('name') }}" required
                             autofocus>
                        <i class="fa fa-user"></i>
                    </span>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email" value="{{ old('email') }}" required>
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
                            placeholder="Password" required >
                        <i class="fa fa-lock"></i>
                    </span>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group form-actions">

                    <span class="input-icon">
                        <input id="password-confirm" type="password" class="form-control  @error('password-confirm') is-invalid @enderror" 
                        name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                        <i class="fa fa-lock"></i>
                    </span>

                    @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary pull-right">
                        Daftar <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
                
            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <!-- start: COPYRIGHT -->
    <div class="copyright">
        {{ date('Y') }} &copy; LSP Poliwangi by Intermediatech Corp.
    </div>
    <!-- end: COPYRIGHT -->
</div>
@endsection

@push('script')
    <script>
        document.body.classList.add('login', 'example2');
    </script>
@endpush

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
