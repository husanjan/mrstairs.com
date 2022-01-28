@extends('layouts.frontend.app')

@section('title', 'Reset password')

@section('content')
    {!! RecaptchaV3::initJs() !!}
    <form
        method="post"
        action="{{ route('password.email') }}"
        class="woocommerce-ResetPassword lost_reset_password"
    >
        @csrf
        <p>
            Lost your password? Please enter your username or email address. You will receive a link to create a new
            password via email.
        </p>

        <p
            class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first"
        >
            <label for="user_login">Email</label>

            <input
                id="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus
            >

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </p>

        <div class="clear"></div>

        <p class="woocommerce-form-row form-row">
            <button
                type="submit"
                class="woocommerce-Button button"
                value="Reset password"
            >
                Reset password
            </button>
        </p>
    </form>

@endsection
