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

    <div data-elementor-type="wp-page" data-elementor-id="1951" class="elementor elementor-1951"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-element elementor-element-163272a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                        data-id="163272a" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                    class="elementor-element elementor-element-a0cec9b elementor-column elementor-col-100 elementor-top-column"
                                    data-id="a0cec9b" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bda6be9 elementor-widget elementor-widget-text-editor"
                                            data-id="bda6be9" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <!-- CSS Part Start From Here-->

                                                    <div class="row text-center">
                                                        <ul class="simplefilter simplefilter_1959">
                                                            <li id="all" class="active" data-filter="all">All</li>
                                                            @foreach ($categories as $category)
                                                                <li data-filter="{{ $category->id }}">{{ $category->name }}</li>
                                                            @endforeach
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

                                                        @foreach ($galleryItems as $item)
                                                            <div
                                                                    data-category="{{join(", ", $item->categoryIds())}}"
                                                                    data-sort="2018-02-25 10.08.08-min"
                                                                    class="pfg_theme_1 filtr-item filtr_item_1959 single_one col-lg-3 col-md-12 col-sm-4 col-xs-6"
                                                                    style="opacity: 1; visibility: visible; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;"
                                                            >
                                                                <a
                                                                        href="{{$item->path}}"
                                                                        data-lightbox="example-set"
                                                                        data-title="{{$item->label}}"
                                                                        title="{{$item->label}}"
                                                                >
                                                                    <figure class="snip1352">
                                                                        <img
                                                                                alt="{{$item->label}}"
                                                                                src="{{$item->path}}"
                                                                                title="{{$item->label}}"
                                                                                class="thumbnail_1959 portfolio_thumbnail"
                                                                        >
                                                                        <i class="fa fa-search"></i>
                                                                    </figure>
                                                                </a>
                                                                <!-- If image type is video -->
                                                                <!--/video-->
                                                            </div>
                                                        @endforeach

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
    <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
            integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"
            integrity="sha512-7g5NUcH79A/d1+q+cj3KTJ31mCUPkD8f58sFEc98H5015295lT+ZBKWkaMeS6Snbu3m2VdfoW4VbSo9hOAJqYw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/gallery.js') }}"></script>
@endsection