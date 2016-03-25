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
						{!! Form::open(['route' => 'contact.send'], ['class' => 'comment-form']) !!}
							{!! Form::text('first_name', null, ['aria-required' => 'true', 'required', 'placeholder' => 'First Name *']) !!}
							{!! Form::text('last_name', null, ['aria-required' => 'true', 'required', 'placeholder' => 'Last Name']) !!}
							{!! Form::text('subject', null, ['placeholder' => 'Subject']) !!}
							{!! Form::text('email', null, ['placeholder' => 'Email Address']) !!}
							{!! Form::textarea('message', null, ['placeholder' => 'Message...']) !!}
							<p class="form-submit">
								{!! Form::submit('Send Email') !!}
							</p>
						{!! Form::close() !!}
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
