@extends('layouts.frontend.register')

@section('content')



    <form class="woocommerce-form woocommerce-form-login login" method="post">

        @csrf


        <p class="woocommerce-form-row form-row  ms-form-control material">
            <label for="reg_email">
                Email address
                <span class="required">*</span>
            </label>

            <input
                type="email"
                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                name="email"
                id="reg_email"
                autocomplete="email"
            />
        </p>


        <p class="woocommerce-form-row form-row  ms-form-control material">
            <label for="reg_password">
                Password
                <span class="required">*</span>
            </label>

            <input
                type="password"
                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                name="password"
                id="reg_password"
                autocomplete="new-password"
            />
        </p>

        <p
            class="woocommerce-form-row form-row  ms-form-control material"
        >
            <label for="reg_password">
                Confirm
                <span class="required">*</span>
            </label>

            <input
                type="password"
                class="woocommerce-Input woocommerce-Input--text input-text form-control"
                name="password"
                id="reg_password"
                autocomplete="new-password"
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

        <div class="anr_captcha_field">
            <div
                id="anr_captcha_field_1"
                class="anr_captcha_field_div"
            >
                <input type="hidden" name="g-recaptcha-response" value=""/>
            </div>
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
