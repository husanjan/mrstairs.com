@extends('layouts.frontend.app', ['disableQuestions' => true])

@section('styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('title', 'Contact Us')

@section('content')

    <div class="elementor elementor-316">

        <div class="elementor-inner">

            <div class="elementor-section-wrap">

                <section
                        class="elementor-element elementor-element-ebed061 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                >
                    <div class="elementor-container elementor-column-gap-default">

                        <div class="elementor-row">

                            <div
                                    class="elementor-element elementor-element-2fa7385 elementor-column elementor-col-100 elementor-top-column"
                            >

                                <div class="elementor-column-wrap  elementor-element-populated">

                                    <div class="elementor-widget-wrap">

                                        <div
                                                class="elementor-element elementor-element-ce9877f elementor-widget elementor-widget-text-editor"
                                        >

                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Get in touch – we’d love to hear from you.</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <section
                        class="elementor-element elementor-element-aa37161 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                >
                    <div class="elementor-container elementor-column-gap-default">

                        <div class="elementor-row">

                            <div
                                    class="elementor-element elementor-element-e063298 elementor-column elementor-col-66 elementor-top-column"
                            >

                                <div class="elementor-column-wrap  elementor-element-populated">

                                    <div class="elementor-widget-wrap">

                                        <div
                                                class="elementor-element elementor-element-14e57e9 elementor-widget elementor-widget-text-editor"
                                        >
                                            <div class="elementor-widget-container">

                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>
                                                        If you need a
                                                        little help, why not first have a look at
                                                        our&nbsp;<a href="/help-resources">Help and Guides</a>&nbsp;section?
                                                        If this doesn’t help, don’t
                                                        hesitate to contact us in whichever way is more convenient for
                                                        you. We have highly trained advisers that are specialists in
                                                        bespoke staircase
                                                        design and, unlike a lot of other online companies, we handle
                                                        all
                                                        Customer Services in house. This means that our advisors have
                                                        everyone to hand, be that the Programmers, Drivers or Joiners.
                                                    </p>
                                                    <p>
                                                        So if you have questions about any aspect of your dream stairs,
                                                        our
                                                        advisors will be able to help you and provide any information or
                                                        images that you may need.
                                                    </p>
                                                </div>

                                            </div>

                                        </div>

                                        <div
                                                class="elementor-element elementor-element-37a67f1 elementor-widget elementor-widget-shortcode"
                                        >

                                            <div class="elementor-widget-container">

                                                <div class="elementor-shortcode">

                                                    <div
                                                            role="form"
                                                            class="wpcf7"
                                                    >
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>

                                                        <form
                                                                action="{{ route('frontend.contact.send') }}"
                                                                method="post"
                                                                class="wpcf7-form init"
                                                                novalidate="novalidate"
                                                                data-status="init"
                                                        >
                                                            @csrf

                                                            <p>
                                                                <label>
                                                                    Your Name (required)<br/>
                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                        <input
                                                                                type="text" name="your_name" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                        />

                                                                        @error('your_name')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
                                                                        @enderror
                                                                    </span>
                                                                </label>
                                                            </p>

                                                            <p>
                                                                <label>
                                                                    Your Email (required)<br/>
                                                                    <span
                                                                            class="wpcf7-form-control-wrap your-email"
                                                                    >
                                                                        <input
                                                                                type="email"
                                                                                name="your_email"
                                                                                value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                        />
                                                                        @error('your_email')
                                                                            <span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
                                                                        @enderror
                                                                    </span>
                                                                </label>
                                                            </p>

                                                            <p>
                                                                <label>
                                                                    Subject (required)<br/>
                                                                    <span
                                                                            class="wpcf7-form-control-wrap your-subject"
                                                                    >
                                                                        <input
                                                                                type="text" name="your_subject" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                        />
                                                                        @error('your_subject')
																		    <span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
                                                                        @enderror
                                                                    </span>
                                                                </label>
                                                            </p>

                                                            <p>
                                                                <label>
                                                                    Your Message (required)<br/>
                                                                    <span
                                                                            class="wpcf7-form-control-wrap your-message"
                                                                    >
                                                                        <textarea
                                                                                name="your_message"
                                                                                cols="40"
                                                                                rows="10"
                                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                        ></textarea>

																		@error('your_message')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
																		@enderror
                                                                    </span>
                                                                </label>
                                                            </p>

                                                            <p>
                                                                <input
                                                                        type="submit"
                                                                        value="Send"
                                                                        class="wpcf7-form-control has-spinner wpcf7-submit"
                                                                />
                                                            </p>
                                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                    class="elementor-element elementor-element-a43e923 elementor-column elementor-col-33 elementor-top-column"
                            >

                                <div class="elementor-column-wrap  elementor-element-populated">

                                    <div class="elementor-widget-wrap">

                                        <div
                                                class="elementor-element elementor-element-7f97856 elementor-widget elementor-widget-google_maps"
                                        >
                                            <div class="elementor-widget-container">

                                                <div class="elementor-custom-embed">
                                                    <iframe
                                                            loading="lazy"
                                                            frameborder="0"
                                                            scrolling="no"
                                                            marginheight="0"
                                                            marginwidth="0"
                                                            src="https://maps.google.com/maps?q=MrStairs.com&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
                                                            aria-label="MrStairs.com"
                                                            class="entered"
                                                    ></iframe>

                                                    <noscript>
                                                        <iframe
                                                                frameborder="0"
                                                                scrolling="no"
                                                                marginheight="0"
                                                                marginwidth="0"
                                                                src="https://maps.google.com/maps?q=MrStairs.com&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
                                                                aria-label="MrStairs.com"
                                                        ></iframe>
                                                    </noscript>
                                                </div>

                                            </div>

                                        </div>

                                        <div
                                                class="elementor-element elementor-element-57dc494 elementor-widget elementor-widget-text-editor"
                                        >

                                            <div class="elementor-widget-container">

                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>
                                                        <span style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">{{config('company.address.building')}},&nbsp;<br></span>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 11pt;">
                                                            {{config('company.address.street')}}, <br>
                                                            {{config('company.address.town')}},
                                                            {{config('company.address.postcode')}}<br>
                                                        </span><br>
                                                        <span style="font-family: Calibri, sans-serif;">
                                                            <span style="font-size: 14.6667px;">
                                                                Tel:
                                                                <a
                                                                        href="tel: {{config('company.phone')}}"
                                                                >
                                                                    {{config('company.phone')}}
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span style="font-family: Calibri, sans-serif;">
                                                            <span style="font-size: 14.6667px;">WhatsApp: </span>
                                                        </span>
                                                        <span style="font-family: Calibri, sans-serif;">
                                                            <span style="font-size: 14.6667px;">
                                                                <a
                                                                        href="https://api.whatsapp.com/send?phone={{ trim(config('company.whatsapp')) }}&amp;text=MrStairs.com%20Web%20Contact"
                                                                        target="_blank"
                                                                        rel="noopener"
                                                                >
                                                                    +{{config('company.whatsapp')}}
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span style="font-family: Calibri, sans-serif;">Email:&nbsp;</span>
                                                        <a
                                                                style="font-size: 16px; background-color: #ffffff;"
                                                                href="mailto:{{config('company.salesEmail')}}"
                                                                target="_blank"
                                                                rel="noopener"
                                                        >
                                                            {{config('company.salesEmail')}}
                                                        </a>
                                                    </p>
                                                    <p>
                                                        <span style="font-family: Calibri, sans-serif;">
                                                            <span style="font-size: 11pt;">Opening hours:&nbsp;</span>
                                                        </span>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 11pt;"><br></span>
                                                    </p>
                                                    <p>
                                                        <span
                                                                style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;"
                                                        >
                                                            {{config('company.open_hours')}}
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <i>
                                                            Please contact us at least 24 hours before collection to
                                                            arrange a time.
                                                        </i>
                                                        <span style="font-family: Calibri, sans-serif; font-size: 11pt;"><br></span>
                                                    </p>
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