@extends('layouts.default')

@section('content')
<body>

	@include('includes.preload')

	<!-- ================================================== -->
	<!-- =============== MENU CONTAINER ================ -->
	<!-- ================================================== -->
	@include('includes.menu')

	<!-- ================================================== -->
	<!-- =============== START BREADCRUMB ================ -->
	<!-- ================================================== -->
	<section class="no-mb" id="top">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent breadcrumbCustom">
					<div class="breadcrumb breadcrumbCustom breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/header/s11.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<!-- ORIGINAL IMAGE assets/img/content/music.jpg -->
						<div class="contactTitle">
							<h1>Music</h1>
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
	<!-- =============== ENVENTS SECTION ================ -->
	<!-- ================================================== -->
	<section class="padding eventsSection  dzsparallaxer auto-init" data-options='{mode_scroll:"normal",direction: "reverse",animation_duration: "1"}' >
		<div class="divimage dzsparallaxer--target" style="width: 100%; height: 100%; background-image: url(assets/img/content/eventBgk.jpg);"></div>
		<!-- Content Container -->
		<div class="container">
			<div class="col-sm-12">
				<div class="sectionTitle">
					<span class="heading-t3"></span>
					<h2><a href="albums.html">Music</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->
				<!-- Content Container -->
				<div class="content-container clearfix">
					<div class="col-md-6 col-md-offset-3" style="height: 650px; overflow: hidden;">
						<iframe width="100%" height="670" scrolling="no" frameborder="no" src="https://www.reverbnation.com/widget_code/html_widget/artist_1076745?widget_id=55&pwc[included_songs]=1&context_type=page_object" style="width:0px;min-width:100%;max-width:100%;"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== -->
	<!-- =============== END ENVENTS SECTION ================ -->
	<!-- ================================================== -->

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
	<script src="assets/js/plugins.js"></script>
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

</body>
@endsection
