@extends('layouts.default')

@section('content')
<body>

	@include('includes.preload')

	<!-- ================================================== -->
	<!-- =============== START PLAYER ================ -->
	<!-- ================================================== -->
	@include('includes.player')
	<!-- .jp-container_N -->
	<!-- ================================================== -->
	<!-- =============== END PLAYER ================ -->
	<!-- ================================================== -->

	<!-- ================================================== -->
	<!-- =============== MENU CONTAINER ================ -->
	<!-- ================================================== -->
	@include('includes.menu')
	<!-- end logo-container-top -->

	<!-- ================================================== -->
	<!-- =============== START BREADCRUMB ================ -->
	<!-- ================================================== -->
	<section class="no-mb" id="top">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent breadcrumbCustom">
					<div class="breadcrumb breadcrumbCustom breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/content/contact.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="contactTitle">
							<h1>Contact</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== -->
	<!-- =============== END BREADCRUMB ================ -->
	<!-- ================================================== -->

	<!-- ================================================== -->
	<!-- =============== CONTENT ================ -->
	<!-- ================================================== -->
	<section style="background-image:url(assets/img/content/contact1.jpg); padding-bottom:0;" class="contactSingle bgkIphone padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="singleBlogForm contactForm">
						<h2>Get in Touch</h2>
						<form action="contact.html#" method="post" class="comment-form">
							<input id="author" name="author" type="text" value="" aria-required="true" required placeholder="First Name *">
							<input id="lastName" name="email" type="text" value="" aria-required="true" required placeholder="Last Name">
							<input id="url" name="url" type="text" value="" placeholder="Subject* ">
							<input id="address" name="url" type="text" value="" placeholder="Email Address* ">
							<textarea name="comment" placeholder="Message..." rows="6" required></textarea>
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Send Email">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div><!-- end container -->
	</section>
	<!-- ================================================== -->
	<!-- =============== END CONTENT ================ -->
	<!-- ================================================== -->

	<!-- ================= MAP ==================== -->
	<section class="">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div id="map-canvas" class="google-map" data-lat="34.0500" data-long="-118.2500" data-img="assets/img/contact/marker.png"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- ================================================== -->
	<!-- =============== START FOOTER ================ -->
	<!-- ================================================== -->
	@include('includes.footer')
	<!-- ================================================== -->
	<!-- =============== END FOOTER ================ -->
	<!-- ================================================== -->

	<!-- ================================================== -->
	<!-- =============== START JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/counter.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/map.js"></script>
	<script type="text/javascript" src="assets/jplayer/jplayer/jquery.jplayer.js"></script>
	<script type="text/javascript" src="assets/jplayer/add-on/jplayer.playlist.js"></script>
	<script type="text/javascript" src="assets/js/playlist.js"></script>
	<script src="assets/js/main.js"></script>

	<!--[if lte IE 9 ]>
		<script src="assets/js/placeholder.js"></script>
		<script>
			jQuery(function() {
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- ================================================== -->
	<!-- =============== END JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->
@endsection
