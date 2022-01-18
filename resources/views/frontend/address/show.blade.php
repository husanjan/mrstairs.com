@extends('layouts.frontend.app')

@section('styles')
	<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
	<script src="{{ asset('js/iziToast.js') }}"></script>
@endsection

@section('title', 'My Account')

@section('content')

@if ($errors->any())
<script>
	@foreach ($errors->all() as $error)
		iziToast.warning({
			message: '{{ $error }}'
		});
	@endforeach
</script>
@endif
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
							<h3>Billing address</h3>
							<div class="woocommerce-address-fields">
								<div class="woocommerce-address-fields__field-wrapper">
									<p class="form-row address-field validate-required form-row-wide"
										id="billing_address_1_field" data-priority="6">
										<label for="billing_address_1" class="">Street
											address&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="street_address"
												id="billing_address_1" placeholder="House number and street name"
												value="{{ old('street_address') }}" autocomplete="address-line1"
												data-placeholder="House number and street name">
										</span>
									</p>
									<p class="form-row address-field form-row-wide" id="billing_address_2_field"
										data-priority="7">
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="street_address_2"
												id="billing_address_2"
												placeholder="Apartment, suite, unit, etc. (optional)" value="{{ old('street_address_2') }}"
												autocomplete="address-line2"
												data-placeholder="Apartment, suite, unit, etc. (optional)">
										</span>
									</p>
									<p class="form-row form-row-first validate-required" id="billing_first_name_field"
										data-priority="10">
										<label for="billing_first_name" class="">First
											name&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="first_name"
												id="billing_first_name" placeholder="" value="{{ old('first_name') }}"
												autocomplete="given-name">
										</span>
									</p>
									<p class="form-row form-row-last validate-required" id="billing_last_name_field"
										data-priority="20">
										<label for="billing_last_name" class="">Last
											name&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="last_name"
												id="billing_last_name" placeholder="" value="{{ old('last_name') }}"
												autocomplete="family-name">
										</span>
									</p>
									<p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
										<label for="billing_company" class="">Company
											name&nbsp;
											<span class="optional">(optional)</span>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="company_name"
												id="billing_company" placeholder="" value="{{ old('company_name') }}"
												autocomplete="organization">
										</span>
									</p>
									<p class="form-row form-row-wide address-field update_totals_on_change validate-required"
										id="billing_country_field" data-priority="40">
										<label for="billing_country" class="">Country /
											Region&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<strong>United Kingdom (UK)</strong>
											<input type="hidden" name="billing_country" id="billing_country" value="GB"
												autocomplete="country" class="country_to_state" readonly="readonly">
										</span>
									</p>
									<p class="form-row address-field validate-required form-row-wide"
										id="billing_city_field" data-priority="70"
										data-o_class="form-row form-row-wide address-field validate-required">
										<label for="billing_city" class="">Town /
											City&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="city" id="billing_city"
												placeholder="" value="{{ old('city') }}" autocomplete="address-level2">
										</span>
									</p>
									<p class="form-row address-field validate-state form-row-wide"
										id="billing_state_field" data-priority="70"
										data-o_class="form-row form-row-wide address-field validate-state">
										<label for="billing_state" class="">County&nbsp;
											<span class="optional">(optional)</span>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " value="{{ old('county') }}" placeholder=""
												name="county" id="billing_state" data-plugin="select2"
												data-allow-clear="true" aria-hidden="true" autocomplete="address-level1"
												data-input-classes="">
										</span>
									</p>
									<p class="form-row address-field validate-required validate-postcode form-row-wide"
										id="billing_postcode_field" data-priority="90"
										data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
										<label for="billing_postcode" class="">Postcode&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="text" class="input-text " name="postcode"
												id="billing_postcode" placeholder="" value="{{ old('postcode') }}"
												autocomplete="postal-code">
										</span>
									</p>
									<p class="form-row form-row-wide validate-required validate-phone"
										id="billing_phone_field" data-priority="100">
										<label for="billing_phone" class="">Phone&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="tel" class="input-text " name="phone"
												id="billing_phone" placeholder="" value="{{ old('phone') }}"
												autocomplete="tel">
										</span>
									</p>
									<p class="form-row form-row-wide validate-required validate-email"
										id="billing_email_field" data-priority="110">
										<label for="billing_email" class="">Email
											address&nbsp;
											<abbr class="required" title="required">*</abbr>
										</label>
										<span class="woocommerce-input-wrapper">
											<input type="email" class="input-text " name="email"
												id="billing_email" placeholder="" value="{{ old('email') }}"
												autocomplete="email username">
										</span>
									</p>
								</div>
								<p>
									<button type="submit" class="button" name="save_address" value="Save address">
										Save address
									</button>
									<input type="hidden" id="woocommerce-edit-address-nonce"
										name="woocommerce-edit-address-nonce" value="062a468215">
									<input type="hidden" name="_wp_http_referer"
										value="/my-account/edit-address/billing/">
									<input type="hidden" name="action" value="edit_address">
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