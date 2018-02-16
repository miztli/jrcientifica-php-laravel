@extends('html.app')

@section('content')

<!-- Titlebar
================================================== -->
<section class="titlebar">
<div class="container">
	<div class="sixteen columns">
		<h2>Acerca</h2>
		
		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Acerca</li>
			</ul>
		</nav>
	</div>
</div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="sixteen columns">	
		<h3 class="headline">Nuestra historia</h3><span class="line margin-bottom-30"></span><div class="clearfix"></div>
	</div>

	<!-- Who We Are? -->
	<div class="eight columns">
		<p>Donec ut molestie turpis, elementum tempor metus. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida.</p>
		<p>Aliquam posuere ornare convallis. Etiam vel egestas tortor. Phasellus nec rhoncus ligula. Pellentesque vitae sollicitudin nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed id odio elementum sodales.</p>
	</div>

	<!-- Our Skills -->
	<div class="eight columns">

		<div id="skillzz">

			<div class="skill-bar">
				<span class="skill-title">Ventas <i>90%</i></span>
				<div class="skill-bar-value" style="width: 90%;"></div>
			</div>
	
			<div class="skill-bar">
				<span class="skill-title">Marketing <i>80%</i></span>
				<div class="skill-bar-value" style="width: 80%;"></div>
			</div>

			<div class="skill-bar">
				<span class="skill-title">Servicio al cliente <i>70%</i></span>
				<div class="skill-bar-value" style="width: 70%;"></div>
			</div>
		</div>

	</div>

</div>
<!-- Container / End -->

<br>

<!-- Container -->
<div class="container">

	<div class="four columns">
		<div class="counter-box colored">
			<i class="fa fa-thumbs-o-up"></i>
			<span class="counter">2,147</span>
			<p>Clientes satisfechos</p>
		</div>
	</div>
	
	<div class="four columns">
		<div class="counter-box">
			<i class="fa fa-group"></i>
			<span class="counter">3,275</span>
			<p>Clientes registrados</p>
		</div>
	</div>

	<div class="four columns">
		<div class="counter-box">
			<i class="fa  fa-shopping-cart"></i>
			<span class="counter">289</span>
			<p>Productos disponibles</p>
		</div>
	</div>

	<div class="four columns">
		<div class="counter-box">
			<i class="fa  fa-tree"></i>
			<span class="counter">1,563</span>
			<p>Ventas anuales</p>
		</div>
	</div>

</div>
<!-- Container / End -->

<br>
<br>

<div class="parallax-banner fullwidth-element"  data-background="#000" data-opacity="0.4" data-height="200">
	<img src="images/parallax_03.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<div class="parallax-title">BRINGING DESIGN TO LIFE <span>WE BUILD FUNCTIONAl DIGITAL PRODUCTS</span></div>
</div>


<!-- Container -->
<div class="container">

	<div class="sixteen columns">	
		<h3 class="headline">Nuestro equipo</h3><span class="line margin-bottom-35"></span><div class="clearfix"></div>
	</div>

	<!-- #1 -->
	<div class="one-third column">
		<article class="the-team">

			<figure class="the-team-image">
				<img src="images/team-01.jpg" alt="" />
			</figure>

			<section class="the-team-content">
				<h5>Jane Smith</h5>
				<i>Chief Executive Officer / CEO</i>
				<span>Pellentesque ultricies vehicula eleifend. Aenean eu nunc semper faucibus sapien viverra neque.</span>
					<ul class="social-icons the-team-social">
						<li><a class="facebook tooltip top" title="Facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter tooltip top" title="Twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="gplus tooltip top" title="Google Plus" href="#"><i class="icon-gplus"></i></a></li>
					</ul>
					<div class="clearfix"></div>
			</section>

		</article>
	</div>

	<!-- #2 -->
	<div class="one-third column">
		<article class="the-team">

			<figure class="the-team-image">
				<img src="images/team-02.jpg" alt="" />
			</figure>

			<section class="the-team-content">
				<h5>Michael Smith</h5>
				<i>Project Manager</i>
				<span>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat.</span>
					<ul class="social-icons the-team-social">
						<li><a class="facebook tooltip top" title="Facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter tooltip top" title="Twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="gplus tooltip top" title="Google Plus" href="#"><i class="icon-gplus"></i></a></li>
						<li><a class="linkedin tooltip top" title="Linked In" href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
					<div class="clearfix"></div>
			</section>

		</article>
	</div>

	<!-- #3 -->
	<div class="one-third column">
		<article class="the-team">

			<figure class="the-team-image">
				<img src="images/team-03.jpg" alt="" />
			</figure>

			<section class="the-team-content">
				<h5>John Doe</h5>
				<i>Web Designer</i>
				<span>Adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas tempora incidunt.</span>
					<ul class="social-icons the-team-social">
						<li><a class="facebook tooltip top" title="Facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter tooltip top" title="Twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="dribbble tooltip top" title="Dribbble" href="#"><i class="icon-dribbble"></i></a></li>
						<li><a class="forrst tooltip top" title="Forrst" href="#"><i class="icon-forrst"></i></a></li>
						<li><a class="pinterest tooltip top" title="Pinterest" href="#"><i class="icon-pinterest"></i></a></li>
					</ul>
					<div class="clearfix"></div>
			</section>

		</article>
	</div>



</div>
<!-- Container / End -->
@endsection