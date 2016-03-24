@extends('layouts.default')

@section('content')
<body class="indexResp">

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
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/header/s11.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="home" style="position: absolute;left: 0;top: 0;">
						    <div class="intro-header">
						        <div class="js-height-full star" style="height: 955px;">
						            <div class="star-pattern-1 js-height-full" style="height: 955px;"></div>
						            <div class="col-sm-12">
						                <div class="starTitle">
						                	<h4> ARTIST • SONGWRITER</h4>
						                	<h1>Shanice Ross</h1>
						                	<h4>COMING SOON</h4>
						                </div>
						                <canvas class="cover" width="1920" height="955"></canvas>
						            </div>
						        </div>
						    </div>
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

</body>
@endsection
