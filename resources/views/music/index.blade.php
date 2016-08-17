@extends('layouts.default')

@section('content')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
	<div class="row">
		<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
			<div class="breadcrumb-fullscreen-parent phone-menu-bg">
				<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/header/s11.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =============== END BREADCRUMB ================ -->

@include('includes.music')
@endsection

@section('scripts')
<!-- ================================================== -->
<!-- =============== START JQUERY SCRIPTS ================ -->
<!-- ================================================== -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/jplayer/jplayer/jquery.jplayer.js"></script>
<script src="assets/js/jPlayer.js"></script>
<script src="assets/js/mainVideo.js"></script>

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
