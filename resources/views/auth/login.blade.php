@extends('layouts.frontend.login')

@section('content')
    <form class="woocommerce-form woocommerce-form-login login" action="{{ route('login') }}" method="post">

        @csrf

        <div class="form-row mdc-text-field col-12 validate-required">
            <label class="mdc-floating-label" for="username">
                Email Address
            </label>
            <span class="woocommerce-input-wrapper">
                <input autofocus placeholder="" name="email" id="username" autocomplete="username" class="mdc-text-field__input">
            </span>

        </div>
        <div class="mt-2 form-row mdc-text-field col-12 validate-required">
            <label class="mdc-floating-label" for="username">
                Password
            </label>
            <span class="woocommerce-input-wrapper">
                <input placeholder="" type="password" name="password" id="password" class="mdc-text-field__input">
            </span>
        </div>


        @if (config('captcha.enabled'))

            <div class="col-md-6">

                {!! RecaptchaV3::field('login') !!}

                @if ($errors->has('g-recaptcha-response'))

                    <span class="help-block">

                        <strong style="color: red">{{ $errors->first('g-recaptcha-response') }}</strong>

                    </span>

                @endif

            </div>

        @endif

        <div class="form-row col-12 d-block clearfix mt-2 mb-4">

            <span class="custom-control custom-checkbox d-inline-block">
                    <input
                            id="rememberme"
                            type="checkbox"
                            name="rememberme"
                            class="custom-control-input"
                            value="forever"
                    >
                    <label class="custom-control-label" for="rememberme">Remember me</label>
            </span>

            <div class="row mb-3">
                <div class="col-md-6">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

        </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Lost your password??') }}
            </a>
        @endif
        <div class="actions">
            <button
                    type="submit"
                    class="btn-lg float-left btn btn-primary"
                    name="login"
                    value="Log in"
            >
                Login
            </button>

            <a
                    class="btn-lg float-right btn btn-outline-secondary"
                    href="register"
            >
                Create an account
            </a>
        </div>

    </form>

@endsection
