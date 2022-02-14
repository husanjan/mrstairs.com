const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/help-resource.js', 'public/js')

    .js('resources/js/home/plugins/revslider/public/assets/js/rs6.min.js', 'public/js')


    .js('resources/js/home/script.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/global/helpers.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/wc/woocommerceNotices.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/wc/woocommerceWrappTable.min.js', 'public/js')
    .js('resources/js/home/themes/mrstairs-wm/js/theme.min.js', 'public/js')
    .js('resources/js/home/themes/mrstairs-wm/js/bootbox.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/header/headerBuilder.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/wc/wishlist.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/wc/onRemoveFromCart.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/menu/menuOffsets.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/menu/menuSetUp.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/global/lazyLoading.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/global/scrollTop.min.js', 'public/js')

    .js('resources/js/home/themes/woodmart/js/scripts/menu/mobileNavigation.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/libs/autocomplete.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/global/ajaxSearch.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/wc/cartWidget.min.js', 'public/js')
    .js('resources/js/home/themes/woodmart/js/scripts/global/searchFullScreen.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/js/frontend-modules.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/lib/dialog/dialog.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/lib/waypoints/waypoints.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/lib/swiper/swiper.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/lib/share-link/share-link.min.js', 'public/js')
    .js('resources/js/home/plugins/revslider/public/assets/js/rbtools.min.js', 'public/js')
    .js('resources/js/home/plugins/elementor/assets/js/frontend.min.js', 'public/js')
    .js('resources/js/gallery.js', 'public/js')

mix
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/login.css', 'public/css')
    .css('resources/css/register.css', 'public/css')
    .css('resources/css/help-resource.css', 'public/css')
    .css('resources/css/gallery.css', 'public/css')
    .css('resources/css/contact.css', 'public/css')

    .css('resources/css/home/plugins/revslider/public/assets/css/rs6.css', 'public/css')
    .css('resources/css/home/themes/mrstairs-wm/css/theme.min.css', 'public/css')
    .css('resources/css/home/combine/wprev-public_combine.css', 'public/css')
    .css('resources/css/home/plugins/if-menu/assets/if-menu-site.css', 'public/css')
    .css('resources/css/home/plugins/elementor/assets/css/frontend.min.css', 'public/css')
    .css('resources/css/home/uploads/elementor/css/post-8.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/base.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/widget-comments.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/widget-nav.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-layered-nav-stock-status.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-active-filters.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-slider-price-filter.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-other.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/footer-base.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/opt-lazy-load.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/wp-gutenberg.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/int-wpcf7.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/int-revolution-slider.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/mod-notices-fixed.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woocommerce-base.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/mod-tools.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-base.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-base.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/el-social-icons.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-my-account.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-search.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-cart-side.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-cart.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-shopping-cart.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/woo-widget-product-list.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/opt-scrolltotop.min.css', 'public/css')
    .css('resources/css/home/themes/woodmart/css/parts/header-el-search-fullscreen.min.css', 'public/css')

    .css('resources/css/home/styles.css', 'public/css')
    .css('resources/css/home/Font.css', 'public/css')


    .css('resources/css/profile.css', 'public/css');
