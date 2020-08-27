<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>The Revolution</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
	<link rel="stylesheet" href={{asset('css/main.css')}} id="color-switcher-link">
	<link rel="stylesheet" href={{asset('css/animations.css')}}>
	<link rel="stylesheet" href={{asset('css/fonts.css')}}>

	@yield('custom_css')

</head>

<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<section class="page_topline ds table_section transparent_section columns_padding_0">
				<div class="fluid-container">
					<div class="row">
						<div class="col-sm-3 col-xs-12 text-center text-sm-left">
							<div class="page_social_icons">
								<a class="social-icon color-icon soc-facebook" href="https://www.facebook.com/Colebrookekendle" title="Facebook"></a>
								<a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon color-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
								<a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12 text-center">
							<h4>
								East Grand Bahama
								<a href="./" class="logo logo_image">
									<img src={{asset('images/logo.png')}} alt="">
								</a>
								Candidate
							</h4>
						</div>

						<div class="col-sm-3 col-xs-12 text-center text-sm-right">
							<div class="top_meta">
								<i class="fa fa-phone highlight"></i>
								<span class="vidaloka grey">1 (242) 810 1857</span>
								<a href="#" class="search_modal_button">
									<i class="fa fa-search highlight"></i>
								</a>
							</div>
						</div>

					</div>
				</div>
			</section>

			<header class="page_header header_white columns_padding_0">
				<div class="fluid-container">
					<div class="row display_table_md">
						<div class="col-lg-2 col-md-3 col-xs-6 nowrap hidden-md display_table_cell_md hidden-xs">
							<div class="page_social_icons">
								<a class="social-icon color-icon soc-facebook" href="https://www.facebook.com/Colebrookekendle" title="Facebook"></a>
								<a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon color-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
								<a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
							</div>
						</div>
						<div class="col-lg-8 col-md-12 text-right text-md-center display_table_cell_md">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper inline-block">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="index.html">Home&nbsp;&nbsp;&nbsp;&nbsp</a>
									</li>

									<li>
										<a href="index.html">&nbsp;&nbspAbout&nbsp;&nbsp</a>
									</li>

									
												
												

									<!-- gallery -->
									
										

											<!-- Gallery full width -->
											<li>
												<a href="index.html">&nbsp;&nbspGallery&nbsp;&nbsp</a>
												
											</li>
											<!-- eof Gallery full width -->
									<!-- contacts -->
									<li>
										<a href="contact.html">&nbsp;&nbspContact&nbsp;&nbsp</a>
									</li>
									<!-- eof contacts -->

								</ul>
							</nav>
							<!-- eof main nav -->
							<span class="toggle_menu">
								<span></span>
							</span>
							<a href="#" class="theme_button color1 donate">Donate</a>
						</div>
						<div class="col-lg-2 col-md-3 text-right nowrap hidden-md hidden-sm hidden-xs display_table_cell_md">
							<div class="top_meta">
								<i class="fa fa-phone highlight"></i>
								<span class="vidaloka grey">1 (242) 810 1857</span>
								<a href="#" class="search_modal_button">
									<i class="fa fa-search highlight"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</header>

            @yield('content')

			<footer class="page_footer parallax ds section_padding_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src={{asset('images/logo.png')}} alt="">
								</div>
								<div class="media-body">
									<h4 class="bottommargin_0 topmargin_5">East Grand Bahama
										<br> Candidate</h4>
								</div>
							</div>
							<p class="topmargin_20">
								Coming soon, coming soon, coming soon, Coming soon, coming soon, coming soon, Coming soon, coming soon, coming soon,Coming soon, coming soon, coming soon 29 
							</p>
						</div>

						<div class="col-md-4 col-sm-6">
							<h4 class="bottommargin_30 topmargin_5">Mail form</h4>
							<form class="contact-form" method="post" action="/">

								<p class="contact-form-name">
									<label for="footer-name" class="sr-only">Full Name
										<span class="required">*</span>
									</label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control with-icon" placeholder="">
									<i class="fa fa-user"></i>
								</p>
								<p class="contact-form-email">
									<label for="footer-email" class="sr-only">Email address
										<span class="required">*</span>
									</label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control with-icon" placeholder="">
									<i class="fa fa-envelope"></i>
								</p>
								<p class="contact-form-message">
									<label for="footer-message" class="sr-only">Message</label>
									<textarea aria-required="true" rows="6" cols="45" name="message" id="footer-message" class="form-control with-icon" placeholder=""></textarea>
									<i class="fa fa-pencil"></i>
								</p>
								<p class="contact-form-submit topmargin_40">
									<button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color1 margin_0">Send Us</button>
								</p>

							</form>
						</div>

						<div class="col-md-4 col-sm-6">
							<h4 class="bottommargin_30 topmargin_5">Contacts</h4>

							<div class="media small-teaser">
								<div class="media-left right-15">
									<i class="fa fa-map-marker highlight fontsize_14"></i>
								</div>
								<div class="media-body">
									Freeport, Grand Bahama
								</div>
							</div>

							<div class="media small-teaser">
								<div class="media-left right-15">
									<i class="fa fa-phone highlight fontsize_14"></i>
								</div>
								<div class="media-body">
									1 (242) 810-1857
								</div>
							</div>

							<div class="media small-teaser">
								<div class="media-left right-15">
									<i class="fa fa-file-text-o highlight fontsize_14"></i>
								</div>
								<div class="media-body">
									1 (242) 810-1857
								</div>
							</div>

							<div class="media small-teaser">
								<div class="media-left right-15">
									<i class="fa fa-envelope-o highlight fontsize_14"></i>
								</div>
								<div class="media-body">
									<a href="mailto:justice@support.com">kendle@iamtherevolution.com</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</footer>

			<section class="page_copyright section_padding_45 ds columns_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>© Copyright 2020
								<a>The Enough Movement</a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src={{asset('js/compressed.js')}}></script>
	<script src={{asset('js/main.js')}}></script>
	<script src={{asset('js/vendor/respond.min.js')}}></script>
	<script src={{asset('js/vendor/modernizr-2.6.2.min.js')}}></script>
	@yield('custom_js')


</body>

</html>