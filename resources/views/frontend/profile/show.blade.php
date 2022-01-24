@extends('layouts.frontend.app')

@section('styles')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection

@section('title', 'My Account')

@section('content')
<div class="site-content col-lg-12 col-12 col-md-12" role="main">
    <article id="post-20" class="post-20 page type-page status-publish hentry">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="woocommerce-my-account-wrapper">
                    <div class="wd-my-account-sidebar woodmart-my-account-sidebar">
                        <h3 class="woocommerce-MyAccount-title entry-title">
                            My account
                        </h3>
                        <nav class="woocommerce-MyAccount-navigation" role="navigation">
                            <div class="list-group"> <a href="https://www.mrstairs.com/my-account/"
                                    class="list-group-item list-group-item-action">Dashboard</a> <a
                                    href="https://www.mrstairs.com/my-account/orders/"
                                    class="list-group-item list-group-item-action">Orders</a> <a
                                    href="https://www.mrstairs.com/my-account/downloads/"
                                    class="list-group-item list-group-item-action">Downloads</a> <a
                                    href="https://www.mrstairs.com/my-account/edit-address/"
                                    class="list-group-item list-group-item-action">Addresses</a> <a
                                    href="https://www.mrstairs.com/my-account/edit-account/"
                                    class="list-group-item list-group-item-action">Account details</a> <a
                                    href="https://www.mrstairs.com/my-account/customer-logout/?_wpnonce=08f22c7623"
                                    class="list-group-item list-group-item-action">Logout</a> </div>
                        </nav>
                    </div>
                    <!-- .wd-my-account-sidebar -->
                    <div class="woocommerce-MyAccount-content">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-EditAccountForm edit-account" action="" method="post">
                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                <label for="account_first_name">First name&nbsp;<span class="required">*</span></label>
                                <input 
                                    type="text" 
                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="first_name" 
                                    id="account_first_name" 
                                    autocomplete="given-name"
                                    value="{{ $user->first_name }}" />
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                <label for="account_last_name">Last name&nbsp;<span class="required">*</span></label>
                                <input 
                                    type="text" 
                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="last_name" id="account_last_name" 
                                    autocomplete="family-name"
                                    value="{{ $user->last_name }}" />
                            </p>
                            <div class="clear"></div>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="name">Display name&nbsp;<span
                                        class="required">*</span></label>
                                <input 
                                    type="text" 
                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="account_display_name" 
                                    id="account_display_name" 
                                    value="{{ $user->name }}" />
                                <span><em>This will be how your name will be displayed in the account section and in
                                        reviews</em></span>
                            </p>
                            <div class="clear"></div>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
                                <input 
                                    type="email" 
                                    class="woocommerce-Input woocommerce-Input--email input-text"
                                    name="account_email" 
                                    id="account_email" 
                                    autocomplete="email"
                                    value="{{ $user->email }}" 
                                    required/>
                            </p>
                            <fieldset>
                                <legend>Password change</legend>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password_current">Current password (leave blank to leave
                                        unchanged)</label> <span class="password-input">
                                        <input 
                                            type="password"
                                            class="woocommerce-Input woocommerce-Input--password input-text"
                                            name="password_current" 
                                            id="password_current" 
                                            autocomplete="off" />
                                            <span class="show-password-input"></span> </span>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password_1">New password (leave blank to leave unchanged)</label> <span
                                        class="password-input">
                                        <input type="password"
                                            class="woocommerce-Input woocommerce-Input--password input-text"
                                            name="password_1" 
                                            id="password_1" 
                                            autocomplete="off" /><span
                                            class="show-password-input"></span> </span>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password_2">Confirm new password</label> 
                                    <span class="password-input">
                                        <input type="password"
                                            class="woocommerce-Input woocommerce-Input--password input-text"
                                            name="password_2"
                                            id="password_2" 
                                            autocomplete="off" />
                                            <span class="show-password-input"></span> 
                                    </span>
                                </p>
                            </fieldset>
                            <div class="clear"></div>
                            <p>  
                                <button type="submit" 
                                    class="woocommerce-Button button" 
                                    name="save_account_details"
                                    value="Save changes"> Save changes </button>
                            </p>
                        </form>
                    </div>
                    <!-- .woocommerce-my-account-wrapper -->
                </div>
            </div>
        </div>
    </article>
    <!-- #post -->
</div>
@endsection