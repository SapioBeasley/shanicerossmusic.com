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
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent">
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
							<a href="bio.html#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
								View More <i class="fa fa-angle-down"></i>
							</a>
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
	<section style="background-image:url(assets/img/content/bio2.jpg);" class="biography bgkIphone padding " id="content">
		<div class="container">
			<div class="sectionTitle">
				<span class="heading-t3"></span>
				<h2><a href="albums.html">Biography</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div class="col-sm-6">
					<p>A new and rising L.A. based female rapper, is one of the fresh faces in West Coast rap to watch for. Born in Lynwood, California she hails from a family of musicians. From an early age, friends and family of the artist believed she was destined to entertain. At the age of 14 she began recording as posture of a rap trio, Dime Divas Baddest. The group toured local venues throughout Southern California for two years before Shanice would eventually go on to become a solo artist. Today, the young artist spends much of her time between recording studios and live stages like many artists aimed at succeeding in the music industry.</p>
				</div>
				<div class="col-sm-6">
					<p>However, her multi-genre fusions set her apart from the conventional rapper. Elements of rock, dub-step, pop, r&amp;b and dance can often be found in much of the music that identifies her unique style. Shanice demonstrates her versatility as she can often be found on the production side of music as well. She is not only the writer, but also the co-producer of her own music. She often collaborates in projects for other aspiring artists as well. As a multi-talented artist, writer and producer Shanice Ross is definitely an up and coming force to watch for.</p>
					<!-- <div class="signature">
						<a href="http://www.emihaze.com/showcase">Emili Haze:</a>
						<div class="imgSignuature">
							<img src="assets/img/content/signature.png" alt="">
						</div>
					</div> -->
				</div>
			</div>
		</div><!-- end container -->
	</section>

	<!-- ================================================== -->
	<!-- =============== END CONTENT ================ -->
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
