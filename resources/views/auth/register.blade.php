@extends('layouts.frontend.register')

@section('content')

    <form
        class="woocommerce-form woocommerce-form-login login"
        method="post"
    >
        @csrf

        <p class="woocommerce-form-row form-row  ms-form-control material">
            <label for="name">
                Name
                <span class="required">*</span>
            </label>

            <input
                id="name"
                type="text"
                class="form-control input-text"
                name="name"
                placeholder="Name"
                required
                autofocus
            >

            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </p>

        <p class="woocommerce-form-row form-row  ms-form-control material">
            <label for="email_address">
                Email address
                <span class="required">*</span>
            </label>

            <input
                type="text"
                placeholder="Email"
                id="email_address"
                class="form-control input-text"
                name="email"
                required
            >

            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </p>

        <p class="woocommerce-form-row form-row  ms-form-control material">
            <label for="password">
                Password
                <span class="required">*</span>
            </label>

            <input
                id="password"
                type="password"
                placeholder="Password"
                class="form-control"
                name="password"
                required
            >

            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </p>

        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

            <div class="col-md-6">

                {!! RecaptchaV3::field('register') !!}

                @if ($errors->has('g-recaptcha-response'))

                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>

                @endif

            </div>

        </div>


        <p
            class="woocommerce-form-row form-row  ms-form-control material"
        >
            <label for="password_confirmation">
                Confirm
                <span class="required">*</span>
            </label>

            <input
                type="password"
                class="input-text form-control"
                name="password_confirmation"
                id="password_confirmation"
                autocomplete="new-password"
                placeholder="Confirm Password"
            />
        </p>



        <div class="woocommerce-privacy-policy-text">
            <p>
                Your personal data will be used to support your experience throughout this website, to manage access to
                your account, and for other purposes described in our
                <a
                    href="https://www.mrstairs.com/privacy-policy/"
                    class="woocommerce-privacy-policy-link"
                    target="_blank"
                >
                    privacy policy
                </a>.
            </p>
        </div>

        <p class="d-block clearfix mt-2 mb-4">
            <a class="d-inline-block" href="https://www.mrstairs.com">Already have an account?</a>
        </p>

        <div class="actions">
            <button
                type="submit"
                class="btn-lg float-left btn btn-primary"
                name="register"
                value="Log in"
            >
                Register
            </button>
        </div>
    </form>

@endsection
