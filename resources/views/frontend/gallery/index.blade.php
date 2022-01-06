@extends('layouts.frontend.app')

@section('styles')
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link
            rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
            integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
@endsection

@section('title', 'Gallery')

@section('content')

    <div data-elementor-type="wp-page" data-elementor-id="1951" class="elementor elementor-1951" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-element elementor-element-163272a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="163272a" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-a0cec9b elementor-column elementor-col-100 elementor-top-column" data-id="a0cec9b" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bda6be9 elementor-widget elementor-widget-text-editor" data-id="bda6be9" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <!-- CSS Part Start From Here-->

                                                    <div class="row text-center">
                                                        <ul class="simplefilter simplefilter_1959">
                                                            <li id="all" class="active" data-filter="all">All</li>
                                                            <li id="1" value="1" data-filter="1">Oak</li>
                                                            <li id="2" value="2" data-filter="2">Cut String</li>
                                                            <li id="3" value="3" data-filter="3">Pine</li>
                                                            <li id="4" value="4" data-filter="4">Quarter Turn</li>
                                                            <li id="5" value="5" data-filter="5">Straight Staircase</li>
                                                            <li id="6" value="6" data-filter="6">Half Turn</li>
                                                        </ul>
                                                    </div>

                                                    <!-- progress button -->
                                                    <div class="loader_img pw-loader-wrapper" style="display: none;">
                                                        <section class="pf_loader page page--mover">
                                                            <div class="la-square-loader">
                                                                <div></div>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <!-- progress-button -->
                                                    <div
                                                            id="galleryContainer"
                                                            class="filtr-container filters-div"
                                                            style="opacity: 1; padding: 0px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 4826.17px;"
                                                    >

                                                        <div data-category="1, 4" data-sort="2018-02-25 10.08.08-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.08.08-min.jpg" data-lightbox="example-set" data-title="2018-02-25 10.08.08-min" title="2018-02-25 10.08.08-min">
                                                                <figure class="snip1352">
                                                                    <img title="2018-02-25 10.08.08-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.08.08-min.jpg" alt="2018-02-25 10.08.08-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>

                                                        <div data-category="1, 4" data-sort="2018-02-25 10.08.30-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.08.30-min.jpg" data-lightbox="example-set" data-title="2018-02-25 10.08.30-min" title="2018-02-25 10.08.30-min">
                                                                <figure class="snip1352">
                                                                    <img title="2018-02-25 10.08.30-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.08.30-min.jpg" alt="2018-02-25 10.08.30-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="2018-02-25 10.09.11-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.09.11-min.jpg" data-lightbox="example-set" data-title="2018-02-25 10.09.11-min" title="2018-02-25 10.09.11-min">
                                                                <figure class="snip1352">
                                                                    <img title="2018-02-25 10.09.11-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.09.11-min.jpg" alt="2018-02-25 10.09.11-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="2018-02-25 10.10.43-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.10.43-min.jpg" data-lightbox="example-set" data-title="2018-02-25 10.10.43-min" title="2018-02-25 10.10.43-min">
                                                                <figure class="snip1352">
                                                                    <img title="2018-02-25 10.10.43-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/2018-02-25-10.10.43-min.jpg" alt="2018-02-25 10.10.43-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG_0635-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 489.109px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0635-min.jpg" data-lightbox="example-set" data-title="IMG_0635-min" title="IMG_0635-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG_0635-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0635-min.jpg" alt="IMG_0635-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG-20140722-WA0001-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 489.109px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG-20140722-WA0001-min.jpg" data-lightbox="example-set" data-title="IMG-20140722-WA0001-min" title="IMG-20140722-WA0001-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG-20140722-WA0001-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG-20140722-WA0001-min.jpg" alt="IMG-20140722-WA0001-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG-20140722-WA0000-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 489.109px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG-20140722-WA0000-min.jpg" data-lightbox="example-set" data-title="IMG-20140722-WA0000-min" title="IMG-20140722-WA0000-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG-20140722-WA0000-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG-20140722-WA0000-min.jpg" alt="IMG-20140722-WA0000-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG_0622-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 489.109px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0622-min.jpg" data-lightbox="example-set" data-title="IMG_0622-min" title="IMG_0622-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG_0622-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0622-min.jpg" alt="IMG_0622-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG_0625-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 977.64px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0625-min.jpg" data-lightbox="example-set" data-title="IMG_0625-min" title="IMG_0625-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG_0625-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0625-min.jpg" alt="IMG_0625-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="IMG_0626-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 858.437px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0626-min.jpg" data-lightbox="example-set" data-title="IMG_0626-min" title="IMG_0626-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG_0626-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0626-min.jpg" alt="IMG_0626-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="IMG_0630-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 858.437px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0630-min.jpg" data-lightbox="example-set" data-title="IMG_0630-min" title="IMG_0630-min">
                                                                <figure class="snip1352">
                                                                    <img title="IMG_0630-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/IMG_0630-min.jpg" alt="IMG_0630-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="2, 5" data-sort="Pars Joinery Staircase-min" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 977.64px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2018/12/Pars-Joinery-Staircase-min.jpg" data-lightbox="example-set" data-title="Pars Joinery Staircase-min" title="Pars Joinery Staircase-min">
                                                                <figure class="snip1352">
                                                                    <img title="Pars Joinery Staircase-min" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2018/12/Pars-Joinery-Staircase-min.jpg" alt="Pars Joinery Staircase-min">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="4" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 1466.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/4.jpg" data-lightbox="example-set" data-title="4" title="4">
                                                                <figure class="snip1352">
                                                                    <img title="4" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/4-300x300.jpg" alt="4">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="3" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 1346.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/3.jpg" data-lightbox="example-set" data-title="3" title="3">
                                                                <figure class="snip1352">
                                                                    <img title="3" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/3-300x300.jpg" alt="3">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="2" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 1346.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/2.jpg" data-lightbox="example-set" data-title="2" title="2">
                                                                <figure class="snip1352">
                                                                    <img title="2" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/2-300x300.jpg" alt="2">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="1" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 1466.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/1.jpg" data-lightbox="example-set" data-title="1" title="1">
                                                                <figure class="snip1352">
                                                                    <img title="1" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/1-300x300.jpg" alt="1">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="pine1-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 1746.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-c.jpg" data-lightbox="example-set" data-title="pine1-c" title="pine1-c">
                                                                <figure class="snip1352">
                                                                    <img title="pine1-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-c-300x300.jpg" alt="pine1-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="pine1-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 1626.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-a.jpg" data-lightbox="example-set" data-title="pine1-a" title="pine1-a">
                                                                <figure class="snip1352">
                                                                    <img title="pine1-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-a-300x300.jpg" alt="pine1-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="pine1-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 1626.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-b.jpg" data-lightbox="example-set" data-title="pine1-b" title="pine1-b">
                                                                <figure class="snip1352">
                                                                    <img title="pine1-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/pine1-b-300x300.jpg" alt="pine1-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="Pine6-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 1746.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-b.jpg" data-lightbox="example-set" data-title="Pine6-b" title="Pine6-b">
                                                                <figure class="snip1352">
                                                                    <img title="Pine6-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-b-300x300.jpg" alt="Pine6-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3" data-sort="Pine6-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 2026.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-c.jpg" data-lightbox="example-set" data-title="Pine6-c" title="Pine6-c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine6-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-c-300x300.jpg" alt="Pine6-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine6-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 1906.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-a.jpg" data-lightbox="example-set" data-title="Pine6-a" title="Pine6-a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine6-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-a-300x300.jpg" alt="Pine6-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine6-e" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 1906.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-e.jpg" data-lightbox="example-set" data-title="Pine6-e" title="Pine6-e">
                                                                <figure class="snip1352">
                                                                    <img title="Pine6-e" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-e-300x300.jpg" alt="Pine6-e">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine6-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 2026.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-d.jpg" data-lightbox="example-set" data-title="Pine6-d" title="Pine6-d">
                                                                <figure class="snip1352">
                                                                    <img title="Pine6-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine6-d-300x300.jpg" alt="Pine6-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 3, 5" data-sort="Oak&amp;P-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 2306.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-c.jpg" data-lightbox="example-set" data-title="Oak&amp;P-c" title="Oak&amp;P-c">
                                                                <figure class="snip1352">
                                                                    <img title="Oak&amp;P-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-c-300x300.jpg" alt="Oak&amp;P-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 3, 5" data-sort="Oak&amp;P-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 2186.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-a.jpg" data-lightbox="example-set" data-title="Oak&amp;P-a" title="Oak&amp;P-a">
                                                                <figure class="snip1352">
                                                                    <img title="Oak&amp;P-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-a-300x300.jpg" alt="Oak&amp;P-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 3, 5" data-sort="Oak&amp;P-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 2186.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-b.jpg" data-lightbox="example-set" data-title="Oak&amp;P-b" title="Oak&amp;P-b">
                                                                <figure class="snip1352">
                                                                    <img title="Oak&amp;P-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine5-b-300x300.jpg" alt="Oak&amp;P-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak2-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 2306.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-c.jpg" data-lightbox="example-set" data-title="Oak2-c" title="Oak2-c">
                                                                <figure class="snip1352">
                                                                    <img title="Oak2-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-c-300x300.jpg" alt="Oak2-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak2-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 2586.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-b.jpg" data-lightbox="example-set" data-title="Oak2-b" title="Oak2-b">
                                                                <figure class="snip1352">
                                                                    <img title="Oak2-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-b-300x300.jpg" alt="Oak2-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak2-e" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 2466.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-e.jpg" data-lightbox="example-set" data-title="Oak2-e" title="Oak2-e">
                                                                <figure class="snip1352">
                                                                    <img title="Oak2-e" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-e-300x300.jpg" alt="Oak2-e">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak2-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 2466.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-d.jpg" data-lightbox="example-set" data-title="Oak2-d" title="Oak2-d">
                                                                <figure class="snip1352">
                                                                    <img title="Oak2-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-d-300x300.jpg" alt="Oak2-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak2-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 2586.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-a.jpg" data-lightbox="example-set" data-title="Oak2-a" title="Oak2-a">
                                                                <figure class="snip1352">
                                                                    <img title="Oak2-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak2-a-300x300.jpg" alt="Oak2-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine-MDF-1b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 2866.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1b.jpg" data-lightbox="example-set" data-title="Pine-MDF-1b" title="Pine-MDF-1b">
                                                                <figure class="snip1352">
                                                                    <img title="Pine-MDF-1b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1b-300x300.jpg" alt="Pine-MDF-1b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine-MDF-1a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 2746.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1a.jpg" data-lightbox="example-set" data-title="Pine-MDF-1a" title="Pine-MDF-1a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine-MDF-1a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1a-300x300.jpg" alt="Pine-MDF-1a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine-MDF-1c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 2746.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1c.jpg" data-lightbox="example-set" data-title="Pine-MDF-1c" title="Pine-MDF-1c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine-MDF-1c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1c-300x300.jpg" alt="Pine-MDF-1c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine-MDF-1d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 2866.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1d.jpg" data-lightbox="example-set" data-title="Pine-MDF-1d" title="Pine-MDF-1d">
                                                                <figure class="snip1352">
                                                                    <img title="Pine-MDF-1d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine-MDF-1d-300x300.jpg" alt="Pine-MDF-1d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine7-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 3146.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-c.jpg" data-lightbox="example-set" data-title="Pine7-c" title="Pine7-c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine7-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-c-300x300.jpg" alt="Pine7-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine7-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 3026.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-a.jpg" data-lightbox="example-set" data-title="Pine7-a" title="Pine7-a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine7-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-a-300x300.jpg" alt="Pine7-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3" data-sort="Pine7-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 3026.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-b.jpg" data-lightbox="example-set" data-title="Pine7-b" title="Pine7-b">
                                                                <figure class="snip1352">
                                                                    <img title="Pine7-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine7-b-300x300.jpg" alt="Pine7-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine4-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 3146.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-b.jpg" data-lightbox="example-set" data-title="Pine4-b" title="Pine4-b">
                                                                <figure class="snip1352">
                                                                    <img title="Pine4-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-b-300x300.jpg" alt="Pine4-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4, 6" data-sort="Pine4-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 3426.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-d.jpg" data-lightbox="example-set" data-title="Pine4-d" title="Pine4-d">
                                                                <figure class="snip1352">
                                                                    <img title="Pine4-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-d-300x300.jpg" alt="Pine4-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine4-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 3306.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-a.jpg" data-lightbox="example-set" data-title="Pine4-a" title="Pine4-a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine4-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-a-300x300.jpg" alt="Pine4-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine4-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 3306.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-c.jpg" data-lightbox="example-set" data-title="Pine4-c" title="Pine4-c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine4-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-c-300x300.jpg" alt="Pine4-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 4" data-sort="Pine4-e" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 3426.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-e.jpg" data-lightbox="example-set" data-title="Pine4-e" title="Pine4-e">
                                                                <figure class="snip1352">
                                                                    <img title="Pine4-e" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine4-e-300x300.jpg" alt="Pine4-e">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3" data-sort="Pine2-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 3706.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-a.jpg" data-lightbox="example-set" data-title="Pine2-a" title="Pine2-a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine2-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-a-300x300.jpg" alt="Pine2-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="Pine2-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 3586.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-c.jpg" data-lightbox="example-set" data-title="Pine2-c" title="Pine2-c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine2-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-c-300x300.jpg" alt="Pine2-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 6" data-sort="Pine2-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 3586.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-b.jpg" data-lightbox="example-set" data-title="Pine2-b" title="Pine2-b">
                                                                <figure class="snip1352">
                                                                    <img title="Pine2-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-b-300x300.jpg" alt="Pine2-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine2-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 3706.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-d.jpg" data-lightbox="example-set" data-title="Pine2-d" title="Pine2-d">
                                                                <figure class="snip1352">
                                                                    <img title="Pine2-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine2-d-300x300.jpg" alt="Pine2-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine3-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 3986.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-a.jpg" data-lightbox="example-set" data-title="Pine3-a" title="Pine3-a">
                                                                <figure class="snip1352">
                                                                    <img title="Pine3-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-a-300x300.jpg" alt="Pine3-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine3-bjpg" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 3866.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-bjpg.jpg" data-lightbox="example-set" data-title="Pine3-bjpg" title="Pine3-bjpg">
                                                                <figure class="snip1352">
                                                                    <img title="Pine3-bjpg" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-bjpg-300x300.jpg" alt="Pine3-bjpg">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine3-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 3866.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-c.jpg" data-lightbox="example-set" data-title="Pine3-c" title="Pine3-c">
                                                                <figure class="snip1352">
                                                                    <img title="Pine3-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-c-300x300.jpg" alt="Pine3-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="3, 5" data-sort="Pine3-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 3986.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-d.jpg" data-lightbox="example-set" data-title="Pine3-d" title="Pine3-d">
                                                                <figure class="snip1352">
                                                                    <img title="Pine3-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Pine3-d-300x300.jpg" alt="Pine3-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-g" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 4266.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-g.jpg" data-lightbox="example-set" data-title="Oak1-g" title="Oak1-g">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-g" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-g-300x300.jpg" alt="Oak1-g">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-c" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 4146.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-c.jpg" data-lightbox="example-set" data-title="Oak1-c" title="Oak1-c">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-c" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-c-300x300.jpg" alt="Oak1-c">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-a" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 4146.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-a.jpg" data-lightbox="example-set" data-title="Oak1-a" title="Oak1-a">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-a" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-a-300x300.jpg" alt="Oak1-a">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 4" data-sort="Oak1-e" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(840px, 4266.08px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-e.jpg" data-lightbox="example-set" data-title="Oak1-e" title="Oak1-e">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-e" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-e-300x300.jpg" alt="Oak1-e">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-f" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 4546.17px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-f.jpg" data-lightbox="example-set" data-title="Oak1-f" title="Oak1-f">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-f" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-f-300x300.jpg" alt="Oak1-f">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-d" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(280px, 4426.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-d.jpg" data-lightbox="example-set" data-title="Oak1-d" title="Oak1-d">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-d" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-d-300x300.jpg" alt="Oak1-d">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                        <div data-category="1, 6" data-sort="Oak1-b" class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6" style="opacity: 1; visibility: visible; transform: scale(1) translate3d(560px, 4426.97px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
                                                            <a href="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-b.jpg" data-lightbox="example-set" data-title="Oak1-b" title="Oak1-b">
                                                                <figure class="snip1352">
                                                                    <img title="Oak1-b" class="thumbnail_1959 portfolio_thumbnail " src="https://www.mrstairs.com/wp-content/uploads/2019/04/Oak1-b-300x300.jpg" alt="Oak1-b">
                                                                    <i class="fa fa-search"></i>
                                                                </figure>
                                                            </a>
                                                            <!-- If image type is video -->
                                                            <!--/video-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script
            src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
            integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>

    <script
            src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"
            integrity="sha512-7g5NUcH79A/d1+q+cj3KTJ31mCUPkD8f58sFEc98H5015295lT+ZBKWkaMeS6Snbu3m2VdfoW4VbSo9hOAJqYw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/gallery.js') }}"></script>
@endsection