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
                                    <a href="https://www.mrstairs.com/my-account/" class="list-group-item list-group-item-action">Dashboard</a>
                                    <a href="https://www.mrstairs.com/my-account/orders/" class="list-group-item list-group-item-action">Orders</a>
                                    <a href="https://www.mrstairs.com/my-account/downloads/" class="list-group-item list-group-item-action">Downloads</a>
                                    <a href="https://www.mrstairs.com/my-account/edit-address/" class="list-group-item list-group-item-action">Addresses</a>
                                    <a href="https://www.mrstairs.com/my-account/edit-account/" class="list-group-item list-group-item-action">Account
                                        details</a>
                                    <a href="https://www.mrstairs.com/my-account/customer-logout/?_wpnonce=bdc5e1ddb5" class="list-group-item list-group-item-action">Logout</a>
                                </div>
                            </nav>

                        </div><!-- .wd-my-account-sidebar -->
                        <div class="woocommerce-MyAccount-content">
                            <div class="woocommerce-notices-wrapper"></div>

                            <p>
                                The following addresses will be used on the checkout page by default.</p>

                            <div class="u-columns woocommerce-Addresses col2-set addresses">


                                <div class="u-column woocommerce-Address">
                                    <header class="woocommerce-Address-title title">
                                        <h3>Billing address</h3>
                                        <a href="/address/edit/{{\App\Models\UserAddress::ADDRESS_TYPE_BILLING}}" class="edit">Edit</a>
                                    </header>
                                    <address>Akmal Gafforov<br>1<br>71 Prospect Hill<br>E1 7AY</address>
                                </div>


                                <div class="u-column woocommerce-Address">
                                    <header class="woocommerce-Address-title title">
                                        <h3>Shipping address</h3>
                                        <a href="/address/edit/{{\App\Models\UserAddress::ADDRESS_TYPE_SHIPPING}}" class="edit">Edit</a>
                                    </header>
                                    <address>You have not set up this type of address yet.</address>
                                </div>


                            </div>

                        </div><!-- .woocommerce-my-account-wrapper --></div>
                </div>
            </div>


        </article><!-- #post -->


    </div>

@endsection