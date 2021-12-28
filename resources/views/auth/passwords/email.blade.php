@extends('layouts.frontend.lost')

@section('content')

    <form method="post" action="{{ route('password.email') }}" class="woocommerce-ResetPassword lost_reset_password">
        @csrf
        <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
        <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
            <label for="user_login">Username or email</label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="email" id="user_login" autocomplete="username" />
        </p>

        <div class="clear"></div>

        <div class="anr_captcha_field"><div id="anr_captcha_field_1" class="anr_captcha_field_div"><input type="hidden" name="g-recaptcha-response" value=""/></div></div>
        <p class="woocommerce-form-row form-row">
            <input type="hidden" name="wc_reset_password" value="true" />
            <button type="submit" class="woocommerce-Button button" value="Reset password">Reset password</button>
        </p>

        <input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="73a0f987f0" /><input type="hidden" name="_wp_http_referer" value="/my-account/lost-password/" />
    </form>









@endsection
