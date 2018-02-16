@extends('html.app')

@section('content')


<!-- Titlebar
================================================== -->
<section class="titlebar margin-bottom-0">
<div class="container">
	<div class="sixteen columns">
		<h2>Contact</h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Contact</li>
			</ul>
		</nav>
	</div>
</div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container fullwidth-element">

	<!-- Google Maps -->
	<section class="google-map-container">
		<div id="googlemaps" class="google-map google-map-full"></div>
	</section>
	<!-- Google Maps / End -->

</div>
<!-- Container / End -->

<!-- Container -->
<div class="container">
<div class="four columns">

	<!-- Information -->
	<div class="widget margin-top-10">
		<div class="accordion">

			<!-- Section 1 -->
			<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="fa fa-file-text"></i> Information</h3>
			<div>
				<p>Phasellus pellentesque purus in massa aenean in pede phasellus libero ac tellus pellentesque semper.</p>
			</div>

			<!-- Section 2 -->
			<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="fa fa-thumb-tack"></i> Address</h3>
			<div>
				<ul class="contact-informations margin-top-0">
					<li><span class="address">45 Park Avenue, Apt. 303</span></li>
					<li><span class="address">New York, NY 10016</span></li>
				</ul>
			</div>

			<!-- Section 3 -->
			<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="fa fa-user"></i> Contact</h3>
			<div>
				<ul class="contact-informations second">
					<li><i class="fa fa-phone"></i> <p>+48 880 440 110</p></li>
					<li><i class="fa fa-envelope"></i> <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cea3afa7a28eabb6afa3bea2abe0ada1a3">[email&#160;protected]</a></p></li>
					<li><i class="fa fa-globe"></i> <p>www.example.com</p></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Social -->
	<div class="widget">
		<h3 class="headline">Get Social</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>
		<ul class="social-icons">
			<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
			<li><a class="dribbble" href="#"><i class="icon-dribbble"></i></a></li>
			<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
			<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
			<li><a class="forrst" href="#"><i class="icon-forrst"></i></a></li>
			<li><a class="rss" href="#"><i class="icon-rss"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	<br>
	</div>

</div>

<!-- Contact Form -->
<div class="twelve columns">
	<div class="extra-padding left">
		<h3 class="headline">Get in Touch</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

		<!-- Contact Form -->
		<section id="contact">

			<!-- Success Message -->
			<mark id="message"></mark>

			<!-- Form -->
			<form method="post" name="contactform" id="contactform">

				<fieldset>

					<div>
						<label>Name:</label>
						<input name="name" type="text" id="name" />
					</div>

					<div>
						<label >Email: <span>*</span></label>
						<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
					</div>

					<div>
						<label>Message: <span>*</span></label>
						<textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
					</div>

				</fieldset>
				<div id="result"></div>
				<input type="submit" class="submit" id="submit" value="Send Message" />
				<div class="clearfix"></div>
			</form>

		</section>
		<!-- Contact Form / End -->
	</div>
</div>
</div>
<!-- Container / End -->


@endsection