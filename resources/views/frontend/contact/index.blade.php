@extends('layouts.frontend.app')

@section('content')
<div class="row">
	<div class="container-fluid">

		<div data-elementor-type="wp-page" data-elementor-id="316" class="elementor elementor-316"
			data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
					<section
						class="elementor-element elementor-element-ebed061 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
						data-id="ebed061" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-element elementor-element-2fa7385 elementor-column elementor-col-100 elementor-top-column"
									data-id="2fa7385" data-element_type="column">
									<div class="elementor-column-wrap  elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-ce9877f elementor-widget elementor-widget-text-editor"
												data-id="ce9877f" data-element_type="widget"
												data-widget_type="text-editor.default">
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
						data-id="aa37161" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-element elementor-element-e063298 elementor-column elementor-col-66 elementor-top-column"
									data-id="e063298" data-element_type="column">
									<div class="elementor-column-wrap  elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-14e57e9 elementor-widget elementor-widget-text-editor"
												data-id="14e57e9" data-element_type="widget"
												data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>If you need a little help, why not first have a look at our
															<a href="https://www.mrstairs.com/help-resources/">Help and
																Guides</a> section? If this doesn’t help, don’t hesitate
															to contact us in whichever way is more convenient for you.
															We have highly trained advisers that are specialists in
															bespoke staircase design and, unlike a lot of other online
															companies, we handle all Customer Services in house. This
															means that our advisors have everyone to hand, be that the
															Programmers, Drivers or Joiners.
														</p>
														<p>So if you have questions about any aspect of your dream
															stairs, our advisors will be able to help you and provide
															any information or images that you may need.</p>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-37a67f1 elementor-widget elementor-widget-shortcode"
												data-id="37a67f1" data-element_type="widget"
												data-widget_type="shortcode.default">
												<div class="elementor-widget-container">
													<div class="elementor-shortcode">
														<div role="form" class="wpcf7" id="wpcf7-f665-p316-o1"
															lang="en-US" dir="ltr">
															<div class="screen-reader-response">
																<p role="status" aria-live="polite" aria-atomic="true">
																</p>
																<ul></ul>
															</div>
															<form action="{{ route('frontend.contact.send') }}"
																method="post" class="wpcf7-form init"
																novalidate="novalidate" data-status="init">
																@csrf

																<p><label> Your Name (required)<br />
																		<span
																			class="wpcf7-form-control-wrap your-name"><input
																				type="text" name="your_name" value=""
																				size="40"
																				class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																				aria-required="true"
																				aria-invalid="false" />
																			@error('your_name')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
																			@enderror
																		</span>
																	</label>
																</p>
																<p><label> Your Email (required)<br />
																		<span
																			class="wpcf7-form-control-wrap your-email"><input
																				type="email" name="your_email" value=""
																				size="40"
																				class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																				aria-required="true"
																				aria-invalid="false" />
																			@error('your_email')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
																			@enderror
																		</span>
																	</label>
																</p>
																<p><label> Subject (required)<br />
																		<span
																			class="wpcf7-form-control-wrap your-subject"><input
																				type="text" name="your_subject" value=""
																				size="40"
																				class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																				aria-required="true"
																				aria-invalid="false" />
																			@error('your_subject')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
																			@enderror
																		</span> </label>
																</p>
																<p><label> Your Message (required)<br />
																		<span
																			class="wpcf7-form-control-wrap your-message"><textarea
																				name="your_message" cols="40" rows="10"
																				class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
																				aria-required="true"
																				aria-invalid="false"></textarea>
																			@error('your_message')
																			<span class="wpcf7-not-valid-tip">
																				{{ $message }}
																			</span>
																			@enderror
																		</span>
																	</label></p>

																<p><input type="submit" value="Send"
																		class="wpcf7-form-control has-spinner wpcf7-submit" />
																</p>
																<div class="wpcf7-response-output" aria-hidden="true">
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-a43e923 elementor-column elementor-col-33 elementor-top-column"
									data-id="a43e923" data-element_type="column">
									<div class="elementor-column-wrap  elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-7f97856 elementor-widget elementor-widget-google_maps"
												data-id="7f97856" data-element_type="widget"
												data-widget_type="google_maps.default">
												<div class="elementor-widget-container">
													<div class="elementor-custom-embed"><iframe loading="lazy"
															frameborder="0" scrolling="no" marginheight="0"
															marginwidth="0" src="about:blank" aria-label="MrStairs.com"
															data-rocket-lazyload="fitvidscompatible"
															data-lazy-src="https://maps.google.com/maps?q=MrStairs.com&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"></iframe><noscript><iframe
																frameborder="0" scrolling="no" marginheight="0"
																marginwidth="0"
																src="https://maps.google.com/maps?q=MrStairs.com&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
																aria-label="MrStairs.com"></iframe></noscript></div>
												</div>
											</div>
											<div class="elementor-element elementor-element-57dc494 elementor-widget elementor-widget-text-editor"
												data-id="57dc494" data-element_type="widget"
												data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p><span
																style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Unit
																8 Midas Business Centre, <br /></span><span
																style="font-family: Calibri, sans-serif; font-size: 11pt;">Wantz
																Road, <br />Dagenham, RM10 8PS<br /></span><br /><span
																style="font-family: Calibri, sans-serif;"><span
																	style="font-size: 14.6667px;">Tel: <a
																		href="tel: 0208 004 8656">0208 004
																		8656</a></span></span></p>
														<p><span style="font-family: Calibri, sans-serif;"><span
																	style="font-size: 14.6667px;">WhatsApp:
																</span></span><span
																style="font-family: Calibri, sans-serif;"><span
																	style="font-size: 14.6667px;"><a
																		href="https://api.whatsapp.com/send?phone=447897486314&amp;text=MrStairs.com%20Web%20Contact"
																		target="_blank" rel="noopener">+44 7897 486
																		314</a></span></span></p>
														<p><span style="font-family: Calibri, sans-serif;">Email:
															</span><a
																style="font-size: 16px; background-color: #ffffff;"
																href="mailto:sales@mrstairs.com" target="_blank"
																rel="noopener">sales@mrstairs.com</a>
														</p>
														<p><span style="font-family: Calibri, sans-serif;"><span
																	style="font-size: 11pt;">Opening
																	hours:
																</span></span><span
																style="font-family: Calibri, sans-serif; font-size: 11pt;"><br /></span>
														</p>
														<p><span
																style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Mon
																– Fri 8:00am – 5:00pm</span></p>
														<p><i> Please contact us at least 24 hours before collection to
																arrange a time.</i><span
																style="font-family: Calibri, sans-serif; font-size: 11pt;"><br /></span>
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
	</div><!-- .main-page-wrapper -->
</div> <!-- end row -->
</div> <!-- end container -->


@endsection
