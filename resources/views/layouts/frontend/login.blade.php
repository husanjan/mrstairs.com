<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link
            rel="stylesheet"
            media="print"
            onload="this.onload=null;this.media='all';"
            id="ao_optimized_gfonts"
            href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%7CLato%3A400%2C700%7CPoppins%3A400%2C600%7CLato%3A400%2C700%7CPoppins%3A400%2C600%7CLato%3A400%2C700&amp;display=swap"
    />

    <title>MrStairs ® - UK&#039;s #1 Staircase Manufacturer - Login</title>

    <meta name="theme-color" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {!! RecaptchaV3::initJs() !!}
</head>

<body class="page-template page-template-page-templates page-template-login page-template-page-templateslogin-php page page-id-587 full-height theme-woodmart woocommerce-no-js wrapper-full-width  form-style-square  form-border-width-2 categories-accordion-on woodmart-ajax-shop-on offcanvas-sidebar-mobile offcanvas-sidebar-tablet notifications-sticky elementor-default">

<div class="hfeed site" id="page">

    <div class="wrapper login" id="full-width-page-wrapper">

        <div class="full-height-container-fluid" id="content">

            <div class="row full-height-row">

                <div class="content-area col-12 col-md-4" id="primary">

                    <main class="site-main" id="main" role="main">

                        <div class="site-logo m-1">
                            <!-- Your site title as branding in the menu -->


                            <div class="woodmart-logo-wrap p-0 m-0">
                                <a href="https://www.mrstairs.com/" class="woodmart-logo woodmart-main-logo" rel="home">
                                    <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="MrStairs ®" style="max-width: 250px;" data-lazy-src="https://231252-706733-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2019/08/mrstairs-logo.svg">
                                    <noscript>
                                        <img src="https://231252-706733-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2019/08/mrstairs-logo.svg" alt="MrStairs ®" style="max-width: 250px;">
                                    </noscript>
                                </a>
                            </div>


                            <!-- end custom logo -->
                        </div>

                        <div class="step-info text-left">
                            <h1>Welcome Back!</h1>
                            <p>Please login to your account.</p>
                        </div>


                        <div class="woocommerce-notices-wrapper"></div>
                        @yield("content")


                    </main><!-- #main -->

                </div><!-- #primary -->

                <div id="login-background" style="min-height:100vh;" class="d-none d-md-block col-md-8">

                </div>

            </div><!-- .row end -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

</div> <!-- end wrapper -->

</body>

</html>
