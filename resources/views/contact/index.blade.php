@extends('layouts.default')

@section('content')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
	<div class="row">
		<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
			<div class="breadcrumb-fullscreen-parent phone-menu-bg">
				<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/contact/contact.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<div class="breadTxt">
                        <h1>
                            Contact
                        </h1>
                        <p>
                        	Get in contact with me. Regardless if you just want to say hi,<br>looking to collaborate or book me.<br> I am one click away.
                        </p>
                        <a href="#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
                            Contact Me <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =============== END BREADCRUMB ================ -->

<!-- =============== START CONTACT ================ -->
<section class="contactSingle padding background-properties" id="content">
	<div class="container">
		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">
				<div class="singleBlogForm">
					<h2>Get in Touch</h2>
					<form action="{{route('contact.send')}}" method="post" class="comment-form">
					{{-- {!! Form::open(['route' => 'contact.send', 'class' => 'comment-form']) !!} --}}
						{!! Form::text('first_name', null, ['aria-required' => 'true', 'required', 'placeholder' => 'First Name *']) !!}
						{!! Form::text('last_name', null, ['aria-required' => 'true', 'required', 'placeholder' => 'Last Name']) !!}
						{!! Form::text('subject', null, ['placeholder' => 'Subject']) !!}
						{!! Form::text('email', null, ['placeholder' => 'Email Address']) !!}
						{!! Form::textarea('message', null, ['placeholder' => 'Message...']) !!}
						<p class="form-submit">
							{!! Form::submit('Send Email') !!}
						</p>
					</form>
				</div><!-- end contactForm -->
			</div><!-- end col-sm-7 col-sm-offset-1 -->
		</div>
	</div><!-- end container -->
</section>
<!-- =============== END CONTACT ================ -->
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
