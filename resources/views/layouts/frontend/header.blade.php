<!-- HEADER -->
<header class="whb-header whb-sticky-shadow whb-scroll-stick whb-sticky-real">

    <div class="whb-main-header">

        <div class="whb-row whb-top-bar whb-not-sticky-row whb-with-bg whb-without-border whb-color-dark whb-flex-flex-middle">
            <div class="container">
                <div class="whb-flex-row whb-top-bar-inner">
                    <div class="whb-column whb-col-left whb-visible-lg">
                        <div class="wd-header-text set-cont-mb-s reset-last-child  whb-text-element">
                            <strong class="color-white" style="visibility: hidden;">ADD ANYTHING HERE OR JUST
                                REMOVEIT…</strong>
                        </div>
                    </div>
                    <div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-right whb-visible-lg">

                        <div class="wd-social-icons woodmart-social-icons text-left icons-design-default icons-size-small color-scheme-light social-share social-form-circle">
                            <a rel="noopener noreferrer nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-facebook">
                                <span class="wd-icon"></span>
                            </a>

                            <a rel="noopener noreferrer nofollow" href="https://twitter.com/share?url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-twitter">
                                <span class="wd-icon"></span>
                            </a>


                            <a rel="noopener noreferrer nofollow" href="https://pinterest.com/pin/create/button/?url=https://www.mrstairs.com/help-resources/&media=https://www.mrstairs.com/wp-includes/images/media/default.png&description=Help+%26%23038%3B+Resources" target="_blank" class=" wd-social-icon social-pinterest">
                                <span class="wd-icon"></span>
                            </a>


                            <a rel="noopener noreferrer nofollow" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-linkedin">
                                <span class="wd-icon"></span>
                            </a>

                            <a rel="noopener noreferrer nofollow" href="https://telegram.me/share/url?url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-tg">
                                <span class="wd-icon"></span>
                            </a>
                        </div>
                    </div>

                    <div class="whb-column whb-col-mobile whb-hidden-lg">

                        <div class="wd-social-icons woodmart-social-icons text-left icons-design-default icons-size-small color-scheme-light social-share social-form-circle">

                            <a rel="noopener noreferrer nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-facebook">
                                <span class="wd-icon"></span>
                            </a>

                            <a rel="noopener noreferrer nofollow" href="https://twitter.com/share?url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-twitter">
                                <span class="wd-icon"></span>
                            </a>


                            <a rel="noopener noreferrer nofollow" href="https://pinterest.com/pin/create/button/?url=https://www.mrstairs.com/help-resources/&media=https://www.mrstairs.com/wp-includes/images/media/default.png&description=Help+%26%23038%3B+Resources" target="_blank" class=" wd-social-icon social-pinterest">
                                <span class="wd-icon"></span>
                            </a>


                            <a rel="noopener noreferrer nofollow" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-linkedin">
                                <span class="wd-icon"></span>
                            </a>


                            <a rel="noopener noreferrer nofollow" href="https://telegram.me/share/url?url=https://www.mrstairs.com/help-resources/" target="_blank" class=" wd-social-icon social-tg">
                                <span class="wd-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whb-row whb-general-header whb-not-sticky-row whb-without-bg whb-border-fullwidth whb-color-dark whb-flex-flex-middle">
            <div class="container">
                <div class="whb-flex-row whb-general-header-inner">
                    <div class="whb-column whb-col-left whb-visible-lg">
                        <div class="site-logo
 wd-switch-logo">
                            <a href="https://www.mrstairs.com/" class="wd-logo wd-main-logo woodmart-logo woodmart-main-logo" rel="home">
                                <img src="https://www.mrstairs.com/wp-content/uploads/2020/10/mrstairs-logo.svg" alt="MrStairs ®" style="max-width: 270px;"/>
                            </a>
                            <a href="https://www.mrstairs.com/" class="wd-logo wd-sticky-logo" rel="home">
                                <img src="https://www.mrstairs.com/wp-content/uploads/2020/10/mrstairs-logo.svg" alt="MrStairs ®" style="max-width: 250px;"/>
                            </a>
                        </div>
                    </div>
                    <div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-right whb-visible-lg">
                        <div class="wd-header-my-account wd-tools-element wd-event-hover  wd-account-style-text my-account-with-text woodmart-header-links woodmart-navigation item-event-hover menu-simple-dropdown">

                            @guest
                                @if (Route::has('login'))
                                <a href="login" title="My account">
			                <span class="wd-tools-icon">
							        </span>
                                    <span class="wd-tools-text">
				                Login / Register			</span>
                                </a>
                                @endif
                        </div>

                        <div class="wd-header-my-account wd-tools-element wd-event-hover  wd-account-style-text my-account-with-text woodmart-header-links woodmart-navigation item-event-hover menu-simple-dropdown">
                            @else <a href="https://www.mrstairs.com/my-account/" title="My account">
			<span class="wd-tools-icon">
							</span>
                                <span class="wd-tools-text">
			   {{ Auth::user()->name }}

                                </span>
                            </a>


                            <div class="wd-dropdown wd-dropdown-menu menu-item-my-account wd-dropdown-my-account wd-design-default menu-item-register sub-menu-dropdown">
                                <ul class="wd-sub-menu sub-menu">
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                        <a href="https://www.mrstairs.com/my-account/"><span>Dashboard</span></a>
                                    </li>
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                        <a href="https://www.mrstairs.com/my-account/orders/"><span>Orders</span></a>
                                    </li>
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                        <a href="https://www.mrstairs.com/my-account/downloads/"><span>Downloads</span></a>
                                    </li>
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                        <a href="https://www.mrstairs.com/my-account/edit-address/"><span>Addresses</span></a>
                                    </li>
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                        <a href="https://www.mrstairs.com/my-account/edit-account/"><span>Account details</span></a>
                                    </li>
                                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                        <a href="https://www.mrstairs.com/my-account/customer-logout/?_wpnonce=b2ed06cb46"><span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>@endguest
                        </div>


                        <div class="wd-header-search wd-tools-element wd-display-full-screen search-button" title="Search">
                            <a href="javascript:void(0);">
		<span class="wd-tools-icon search-button-icon">
					</span>
                            </a>
                        </div>

                        <div class="wd-header-wishlist wd-tools-element wd-style-icon woodmart-wishlist-info-widget" title="My Wishlist">
                            <a href="https://www.mrstairs.com/help-resources/">
		<span class="wd-tools-icon wishlist-icon">

					</span>
                                <span class="wd-tools-text wishlist-label">
			Wishlist		</span>
                            </a>
                        </div>

                        <div class="wd-header-cart wd-tools-element wd-design-2 woodmart-cart-alt cart-widget-opener woodmart-shopping-cart woodmart-cart-design-2">
                            <a href="https://www.mrstairs.com/cart/" title="Shopping cart">
		<span class="wd-tools-icon wd-icon-alt woodmart-cart-icon">
													<span class="wd-cart-number woodmart-cart-number">0 <span>items</span></span>
							</span>
                                <span class="wd-tools-text woodmart-cart-totals">

			<span class="subtotal-divider">/</span>
						<span class="wd-cart-subtotal woodmart-cart-subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>0.00</bdi></span></span>
				</span>
                            </a>
                        </div>
                    </div>
                    <div class="whb-column whb-mobile-left whb-hidden-lg">
                        <div class="wd-tools-element wd-header-mobile-nav wd-style-text woodmart-burger-icon">
                            <a href="#" rel="nofollow">
		<span class="wd-tools-icon woodmart-burger">
					</span>

                                <span class="wd-tools-text">Menu</span>
                            </a>
                        </div><!--END wd-header-mobile-nav--></div>
                    <div class="whb-column whb-mobile-center whb-hidden-lg">
                        <div class="site-logo
 wd-switch-logo">
                            <a href="https://www.mrstairs.com/" class="wd-logo wd-main-logo woodmart-logo woodmart-main-logo" rel="home">
                                <img src="https://www.mrstairs.com/wp-content/uploads/2020/10/mrstairs-logo.svg" alt="MrStairs ®" style="max-width: 140px;"/>
                            </a>
                            <a href="https://www.mrstairs.com/" class="wd-logo wd-sticky-logo" rel="home">
                                <img src="https://www.mrstairs.com/wp-content/uploads/2020/10/mrstairs-logo.svg" alt="MrStairs ®" style="max-width: 150px;"/>
                            </a>
                        </div>
                    </div>
                    <div class="whb-column whb-mobile-right whb-hidden-lg">

                        <div class="wd-header-cart wd-tools-element wd-design-5 woodmart-cart-alt cart-widget-opener woodmart-shopping-cart woodmart-cart-design-5">
                            <a href="https://www.mrstairs.com/cart/" title="Shopping cart">
		<span class="wd-tools-icon wd-icon-alt woodmart-cart-icon">
													<span class="wd-cart-number woodmart-cart-number">0 <span>items</span></span>
							</span>
                                <span class="wd-tools-text woodmart-cart-totals">

			<span class="subtotal-divider">/</span>
						<span class="wd-cart-subtotal woodmart-cart-subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>0.00</bdi></span></span>
				</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whb-row whb-header-bottom whb-not-sticky-row whb-without-bg whb-without-border whb-color-dark whb-flex-flex-middle whb-hidden-mobile">
            <div class="container">
                <div class="whb-flex-row whb-header-bottom-inner">
                    <div class="whb-column whb-col-left whb-visible-lg">
                        <div class="wd-header-nav wd-header-main-nav text-left navigation-style-default" role="navigation">
                            <ul id="menu-main-menu" class="menu wd-nav wd-nav-main wd-style-default">
                                <li id="menu-item-1074" class=" @yield('home-menu-classes') menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1074 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="/" class="woodmart-nav-link"><span class="nav-link-text">Home</span></a>
                                </li>
                                <li id="menu-item-1076" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1076 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="https://www.mrstairs.com/stair-builder/choose-staircase-type/" class="woodmart-nav-link"><span class="nav-link-text">Stair Builder</span></a>
                                </li>
                                <li id="menu-item-3073" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-3073 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="https://shop.mrstairs.com" class="woodmart-nav-link"><span class="nav-link-text">Stair Parts Shop</span></a>
                                </li>
                                <li id="menu-item-1077" class="@yield('help-menu-classes')  menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-688 current_page_item menu-item-1077 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="/help-resources" class="   woodmart-nav-link"><span class="nav-link-text">Help &#038; Resources</span></a>
                                </li>
                                <li id="menu-item-2288" class=" @yield('gallery-menu-classes') menu-item menu-item-type-post_type menu-item-object-page menu-item-2288 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="/gallery" class="woodmart-nav-link"><span class="nav-link-text">Gallery</span></a>
                                </li>
                                 <li id="menu-item-1078"class="@yield('contact-menu-classes') menu-item menu-item-type-post_type menu-item-object-page menu-item-1078 item-level-0 menu-item-design-default menu-simple-dropdown wd-event-hover">
                                    <a href="/contact" class="woodmart-nav-link"><span class="nav-link-text">Contact Us</span></a>
                                </li>
                            </ul>
                        </div><!--END MAIN-NAV-->
                    </div>
                    <div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-right whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-mobile whb-hidden-lg whb-empty-column">
                    </div>
                </div>
            </div>
        </div>
    </div>

</header><!--END MAIN HEADER-->




