@extends('layouts.default')

@section('content')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
	<div class="row">
		<div class="col-sm-12">
			<div class="breadcrumb-fullscreen-parent phone-menu-bg">
				<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/header/s11.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<div id="home" style="position: absolute;left: 0;top: 0;">
						<div class="intro-header">
							<div class="js-height-full star" style="height: 955px;">
								<div class="star-pattern-1 js-height-full" style="height: 994px;"></div>
								<div class="col-sm-12">
									<div class="starTitle">
										<h4> ARTIST • SONGWRITER</h4>
										<h1 style="font-size:30px">Shanice Ross</h1>
										<h4>#RossUp</h4>
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
<!-- =============== END BREADCRUMB ================ -->

@include('includes.about')

<!-- =============== START TWITTER SECTION ================ -->
<section class="padding background-properties" style="background-image: url(assets/img/content/twitterBgk.jpg);">
	<div class="twitter">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="twitterLogo">
						<a href="index.html#"><img src="{{$twitterUser->profile_image_url_https}}" alt="twitterLogo"></a>
						<a href="index.html#" class="linkTwitter">@ROSStheQUEEN</a>
					</div>
					@foreach($tweets as $tweet)
						<p>{{$tweet->text}}</p>
					@endforeach
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =============== END TWITTER SECTION ================ -->

@include('includes.music')

@include('includes.videos')
@endsection

@section('scripts')
<!-- ================================================== -->
<!-- =============== START JQUERY SCRIPTS ================ -->
<!-- ================================================== -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jplayer/jplayer/jquery.jplayer.js"></script>
<script src="assets/js/jPlayer.js"></script>
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
@endsection
