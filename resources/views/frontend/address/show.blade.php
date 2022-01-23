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
                                My account </h3>
                            <nav class="woocommerce-MyAccount-navigation" role="navigation">
                                <div class="list-group">
                                    <a href="https://www.mrstairs.com/my-account/"
                                       class="list-group-item list-group-item-action">Dashboard</a>
                                    <a href="https://www.mrstairs.com/my-account/orders/"
                                       class="list-group-item list-group-item-action">Orders</a>
                                    <a href="https://www.mrstairs.com/my-account/downloads/"
                                       class="list-group-item list-group-item-action">Downloads</a>
                                    <a href="https://www.mrstairs.com/my-account/edit-address/"
                                       class="list-group-item list-group-item-action">Addresses</a>
                                    <a href="https://www.mrstairs.com/my-account/edit-account/"
                                       class="list-group-item list-group-item-action">Account
                                        details</a>
                                    <a href="https://www.mrstairs.com/my-account/customer-logout/?_wpnonce=08f22c7623"
                                       class="list-group-item list-group-item-action">Logout</a>
                                </div>
                            </nav>
                        </div>
                        <!-- .wd-my-account-sidebar -->
                        <div class="woocommerce-MyAccount-content">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form method="post" action="{{ route('frontend.address.edit') }}">
                                @csrf

                                @if ($userAddress->address_type == \App\Models\UserAddress::ADDRESS_TYPE_BILLING)
                                    <h3>Billing address</h3>
                                @else
                                    <h3>Shipping address</h3>
                                @endif

                                <div class="woocommerce-address-fields">

                                    <div
                                            class="woocommerce-address-fields__field-wrapper"
                                    >
                                        <p
                                                id="billing_address_1_field"
                                                class="form-row address-field validate-required form-row-wide"
                                                data-priority="6"
                                        >
                                            <label for="billing_address_1" class="">
                                                Street address&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text is-invalid"
                                                        name="street_address"
                                                        id="billing_address_1"
                                                        placeholder="House number and street name"
                                                        value="{{ old('street_address') ?? $userAddress->street_address }}"
                                                        autocomplete="address-line1"
                                                        data-placeholder="House number and street name"
                                                >
                                                @error('street_address')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </p>

                                        <p
                                                class="form-row address-field form-row-wide"
                                                id="billing_address_2_field"
                                                data-priority="7"
                                        >
                                            <span class="woocommerce-input-wrapper">
                                                <input
                                                        type="text"
                                                        class="input-text "
                                                        name="street_address_2"
                                                        id="billing_address_2"
                                                        placeholder="Apartment, suite, unit, etc. (optional)"
                                                        value="{{old('street_address_2') ?? $userAddress->street_address_2 }}"
                                                        autocomplete="address-line2"
                                                        data-placeholder="Apartment, suite, unit, etc. (optional)"
                                                >
                                                @error('street_address_2')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </p>

                                        <p
                                                id="billing_first_name_field"
                                                class="form-row form-row-first validate-required"
                                                data-priority="10"
                                        >
                                            <label for="billing_first_name" class="">
                                                First name&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        name="first_name"
                                                        id="billing_first_name"
                                                        placeholder=""
                                                        value="{{ old('first_name') ?? $userAddress->first_name }}"
                                                        autocomplete="given-name"
                                                >
                                                @error('first_name')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>


                                        <p
                                                class="form-row form-row-last validate-required"
                                                id="billing_last_name_field"
                                                data-priority="20"
                                        >
                                            <label
                                                    for="billing_last_name"
                                            >
                                                Last name&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        name="last_name"
                                                        id="billing_last_name"
                                                        placeholder=""
                                                        value="{{ old('last_name') ?? $userAddress->last_name }}"
                                                        autocomplete="family-name"
                                                >
                                                @error('last_name')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>

                                        <p
                                                id="billing_company_field"
                                                class="form-row form-row-wide"
                                                data-priority="30"
                                        >
                                            <label for="billing_company" class="">
                                                Company name&nbsp;
                                                <span class="optional">(optional)</span>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        name="company_name"
                                                        id="billing_company"
                                                        placeholder=""
                                                        value="{{ old('company_name') ?? $userAddress->company_name }}"
                                                        autocomplete="organization"
                                                >
                                                @error('company_name')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </p>

                                        <p
                                                class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="billing_country_field"
                                                data-priority="40"
                                        >
                                            <label for="billing_country" class="">
                                                Country / Region&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <span class="woocommerce-input-wrapper">
											    <strong>United Kingdom (UK)</strong>
											    <input
                                                        type="hidden"
                                                        name="billing_country"
                                                        id="billing_country"
                                                        value="GB"
                                                        autocomplete="country"
                                                        class="country_to_state"
                                                        readonly="readonly"
                                                >
                                                @error('billing_country')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>


                                        <p
                                                class="form-row address-field validate-required form-row-wide"
                                                id="billing_city_field"
                                                data-priority="70"
                                                data-o_class="form-row form-row-wide address-field validate-required"
                                        >
                                            <label for="billing_city" class="">
                                                Town / City&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        name="city"
                                                        id="billing_city"
                                                        placeholder=""
                                                        value="{{ old('city') ?? $userAddress->city }}"
                                                        autocomplete="address-level2"
                                                >
                                                @error('city')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>

                                        <p
                                                class="form-row address-field validate-state form-row-wide"
                                                id="billing_state_field"
                                                data-priority="70"
                                                data-o_class="form-row form-row-wide address-field validate-state"
                                        >
                                            <label for="billing_state" class="">
                                                County&nbsp;
                                                <span class="optional">(optional)</span>
                                            </label>
                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        value="{{ old('county') ?? $userAddress->county }}"
                                                        placeholder=""
                                                        name="county"
                                                        id="billing_state"
                                                        data-plugin="select2"
                                                        data-allow-clear="true"
                                                        aria-hidden="true"
                                                        autocomplete="address-level1"
                                                        data-input-classes=""
                                                >
                                                @error('county')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>

                                        <p
                                                class="form-row address-field validate-required validate-postcode form-row-wide"
                                                id="billing_postcode_field"
                                                data-priority="90"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode"
                                        >
                                            <label for="billing_postcode" class="">
                                                Postcode&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="text"
                                                        class="input-text "
                                                        name="post_code"
                                                        id="billing_postcode"
                                                        placeholder=""
                                                        value="{{ old('post_code') ?? $userAddress->post_code }}"
                                                        autocomplete="postal-code"
                                                >
                                                @error('post_code')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>

                                        <p
                                                class="form-row form-row-wide validate-required validate-phone"
                                                id="billing_phone_field"
                                                data-priority="100"
                                        >
                                            <label for="billing_phone" class="">
                                                Phone&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="tel"
                                                        class="input-text "
                                                        name="phone"
                                                        id="billing_phone"
                                                        placeholder=""
                                                        value="{{ old('phone') ?? $userAddress->phone }}"
                                                        autocomplete="tel"
                                                >
                                                @error('phone')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>

                                        <p
                                                class="form-row form-row-wide validate-required validate-email"
                                                id="billing_email_field"
                                                data-priority="110"
                                        >
                                            <label for="billing_email" class="">
                                                Email address&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </label>

                                            <span class="woocommerce-input-wrapper">
											    <input
                                                        type="email"
                                                        class="input-text "
                                                        name="email"
                                                        id="billing_email"
                                                        placeholder=""
                                                        value="{{ old('email') ?? $userAddress->email }}"
                                                        autocomplete="email username"
                                                >
                                                @error('email')
                                                    <span class="has-error">{{ $message }}</span>
                                                @enderror
										    </span>
                                        </p>
                                    </div>

                                    <p>
                                        <button type="submit" class="button" name="save_address" value="Save address">
                                            Save address
                                        </button>

                                        <input type="hidden" name="address_type" value="{{old('address_type') ?? $userAddress->address_type}}">
                                    </p>
                                </div>
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