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
	@include('includes.music')
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
