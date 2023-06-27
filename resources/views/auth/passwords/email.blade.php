@extends('layouts.admin.base')

@section('slot')
<div class="main-login col-sm-4 col-sm-offset-4">
    <div class="logo mb-5 mt-5">
        {{-- <img src="{{ asset('logo-big.png') }}" alt="logo" width="50%"> --}}
        <div class="logo">DISHUB JATIM</div>
    </div>
    <div class="box-login">
        <h3>Forget Password?</h3>
        <p>
            Enter your e-mail address below to reset your password.
        </p>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <form class="form-forgot" method="POST" action="{{ route('password.email') }}">
            @csrf

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
                <div class="form-actions">
                    <button type="submit" class="btn btn-bricky pull-right">
                        {{ __('Send Password Reset Link') }} <i class="fa fa-arrow-circle-right"></i>
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
