@extends('layouts.default')

@section('content')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
	<div class="row">
		<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
			<div class="breadcrumb-fullscreen-parent phone-menu-bg">
				<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/content/bio.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<div class="breadTxt">
						<h1>
							Shanice Ross
						</h1>
						<p>
							A new and rising L.A. based female rapper, is one of the fresh faces<br>
							in West Coast rap to watch for. Born in Lynwood, California<br>
							she hails from a family of musicians. From an early age,<br>
						</p>
                        <a href="biography.html#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
                            View More <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =============== END BREADCRUMB ================ -->

@include('includes.about')
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
