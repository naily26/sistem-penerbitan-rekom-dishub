@extends('layouts.admin.base')

@section('slot')
<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo mb-5 mt-5">
        {{-- <img src="{{ asset('logo-big.png') }}" alt="logo" width="50%"> --}}
        <div class="logo">DISHUB JATIM</div>
    </div>
    <div class="box-login">
        <h3>Update Password?</h3>
        <p>
            Enter your new password bellow.
        </p>
        <form class="form-forgot" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
            </div>
            <fieldset>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                            autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="fa fa-envelope"></i> </span>
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input id="password" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-group">
                    <span class="input-icon">
                        <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">

                        <i class="fa fa-lock"></i> </span>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-bricky pull-right">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="copyright">
        {{ date('Y') }} &copy; Sistem Penerbitan Rekom Dishub by Naily.
    </div>
</div>

@endsection
@push('script')
<script>
    document.body.classList.add('login', 'example2');
</script>
@endpush
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
