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
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/content/galSg.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
							<h1>
								Gallery Grid
							</h1>
							<p>
								A portrait is not a likeness. The moment an emotion or fact is transformed into a photograph <br> it is no longer a fact but an opinion. There is no such thing as inaccuracy in a photograph. <br> All photographs are accurate. None of <br> them is the truth.
							</p>
							<a href="gallerySaracie.html#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
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
	<!-- =============== GALLERY ================ -->
	<!-- ================================================== -->
	<section class="padding galleryIndex " id="content">
		<div class="gallerySection">
			<div class="container" style="padding:0;">
				<div class="col-sm-12">
					<!-- Content Container -->
					<div class="content-container clearfix">
						<!-- Single Album Container -->
						<div class="single-photo-album-container">
							<div class="row">
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/11.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/22.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/33.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/44.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/55.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-4">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<img src="assets/img/gallery/66.jpg" alt="">
										</figcaption>
										<!-- Single Album View Button -->
										<a href="gallerySg.html">
											Central Park
										</a>
										<h4>December 15, 2015</h4>
									</figure>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end container -->
		</div>
	</section>
	<!-- ================================================== -->
	<!-- =============== END GALLERY ================ -->
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
