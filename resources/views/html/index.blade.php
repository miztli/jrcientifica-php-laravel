@extends('html.app')

@section('content')

<!-- Slider
================================================== -->
<div class="container fullwidth-element home-slider">

	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>

				<!-- Slide 1  -->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
					<img src="images/pipette_1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="50" data-y="270" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Promo Pipetas</h2>
						<h3>¡Tu vieja por una nueva!</h3>
						<a href="single-product-page.html" class="caption-btn">Ir a promoción</a>
					</div>
				</li>
				<!--
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
 					<img src="images/pipette_2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption dark sfb fadeout" data-x="700" data-y="150" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Promo Pipetas 2</h2>
						<h3>¡Tu vieja por una nueva!</h3>
						<a href="single-product-page.html" class="caption-btn">Ver promoción</a>
					</div>
				</li>
				<li data-transition="fadetotopfadefrombottom" data-slotamount="7" data-masterspeed="1000">
 					<img src="images/pipette_2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="50" data-y="250" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Promo Pipetas 3</h2>
						<h3>¡Tu vieja por una nueva!</h3>
						<a href="single-product-page.html" class="caption-btn">Ver promoción</a>
					</div>
				</li>-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000">
 					<img src="images/tip_1.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="700" data-y="50" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Promo Puntas</h2>
						<h3>¡Apúntate unas Brand!</h3>
						<a href="single-product-page.html" class="caption-btn">Ver promoción</a>
					</div>
				</li>  
				<!--
				<li data-transition="fadetotopfadefrombottom" data-slotamount="7" data-masterspeed="1500" >
					<img src="images/pipette_tip_2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="700" data-y="270" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Promo Puntas 2</h2>
						<h3>¡Apúntate unas Brand!</h3>
						<a href="single-product-page.html" class="caption-btn">Detalle de promoción</a>
					</div>
				</li>
				-->
			</ul>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<!-- Container -->
<div id="products" class="container">
	<!-- Headline -->
	<div class="sixteen columns" >
		<h3 class="headline">Productos</h3>
		<span class="line margin-bottom-30"></span>
	</div>

	<div class="clearfix"></div>

	<!-- Portfolio Wrapper-->
	<div id="portfolio-wrapper">

		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing accessories">
			<figure>
				<div class="portfolio-holder">
					<a href="shop-with-sidebar.html">
						<img alt="" src="images/volumetric_material.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Material volumétrico</span>
						<h5>Aparatos de medición de alta calidad.</h5>
					</section>
				</a>

			</figure>
		</div>
		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing other">
			<figure>
				<div class="portfolio-holder">
					<a href="shop-with-adv-search.html">
						<img alt="" src="images/liquid_handling.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Manejo de líquidos</span>
						<h5>Productos para la manipulación y transferencia precisa de líquidos.</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories clothing technology">
			<figure>
				<div class="portfolio-holder">
					<a href="shop-full-width.html">
						<img alt="" src="images/consumables.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Consumibles</span>
						<h5>Productos de plástico desechables de alto rendimiento.</h5>
					</section>
				</a>

			</figure>
		</div>
	</div>
			<!-- Portfolio Item -->
		<div class="one-third column portfolio-item food other accessories">
			<figure>
				<div class="portfolio-holder">
					<a href="portfolio-3-columns.html">
						<img alt="" src="images/equipment.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Equipos</span>
						<h5>Los equipos más avanzados con tecnología de punta.</h5>
					</section>
				</a>

			</figure>
		</div>
		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item other food">
			<figure>
				<div class="portfolio-holder">
					<a href="portfolio-4-columns.html">
						<img alt="" src="images/reactives.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Reactivos</span>
						<h5>Calidad y pureza para obtener mayor exactitud en tus análisis.</h5>
					</section>
				</a>

			</figure>
		</div>
	<!-- Portfolio Wrapper / End -->
</div>

<!-- Featured
================================================== -->
<!--
<div class="container" >

	<div class="one-third column">
		<a href="#" class="img-caption" >
			<figure>
				<img src="images/featured_img_1.jpg" alt="" />
				<figcaption>
					<h3>Men's Shirts</h3>
					<span>25% Off Summer Styles</span>
				</figcaption>
			</figure>
		</a>
	</div>

	<div class="one-third column">
		<a href="#" class="img-caption" >
			<figure>
				<img src="images/featured_img_2.jpg" alt="" />
				<figcaption>
					<h3>Running Shoes</h3>
					<span>Sports Discount</span>
				</figcaption>
			</figure>
		</a>
	</div>

	<div class="one-third column">
		<a href="#" class="img-caption" >
			<figure>
				<img src="images/featured_img_3.jpg" alt="" />
				<figcaption>
					<h3>Winter Jackets</h3>
					<span>End-of Season Sales</span>
				</figcaption>
			</figure>
		</a>
	</div>

</div>
<div class="clearfix"></div>
-->
<div class="margin-top-30"></div>

<!-- Container: Cambiar estilos del container-->
<div class="container related">

	<div class="sixteen columns">
		<h3 class="headline">Distribuidor directo de</h3><span class="line margin-bottom-30"></span><div class="clearfix"></div>
	</div>
		<!-- Portfolio Item -->
		<div class="four columns portfolio-item">
			<figure>
				<div class="portfolio-holder">
					<a href="#">
						<img alt="" src="images/brand_logo.jpg"/>
						<div class="hover-cover"></div>
					</a>
				</div>
			</figure>
		</div>
 		<!-- Portfolio Item -->
		<div class="four columns portfolio-item">
			<figure>
				<div class="portfolio-holder">
					<a href="#">
						<img alt="" src="images/scilogex_logo.jpg"/>
						<div class="hover-cover"></div>
					</a>
				</div>
			</figure>
		</div>
 		<!-- Portfolio Item -->
		<div class="four columns portfolio-item">
			<figure>
				<div class="portfolio-holder">
					<a href="#">
						<img alt="" src="images/adam_logo_2.jpg"/>
						<div class="hover-cover"></div>
					</a>
				</div>
			</figure>
		</div>
		<!-- Portfolio Item -->
		<div class="four columns portfolio-item">
			<figure>
				<div class="portfolio-holder">
					<a href="#">
						<img alt="" src="images/isolab_logo.png"/>
						<div class="hover-cover"></div>
					</a>
				</div>
			</figure>
		</div>
</div>
<div class="margin-top-30"></div>

<!-- Our Clients
================================================== -->

<!-- Container -->
<div class="container">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Más marcas</h3>
		<span class="line margin-bottom-0"></span>
	</div>

	<!-- Navigation / Left -->
	<div class="one carousel column"><div id="showbiz_left_2" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i></div></div>

	<!-- ShowBiz Carousel -->
	<div id="our-clients" class="showbiz-container fourteen carousel columns" >

	<!-- Portfolio Entries -->
	<div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
		<div class="overflowholder">

			<ul>
				<!-- Item -->
				<li><img src="images/eppendorf-logo.jpg" alt="" /></li>
				<li><img src="images/thermo-logo.png" alt="" /></li>
				<li><img src="images/sigma-aldrich-logo.jpg" alt="" /></li>
				<li><img src="images/axygen-logo.jpg" alt="" /></li>
				<li><img src="images/felisa-logo.png" alt="" /></li>
				<li><img src="images/jtbaker-logo.jpg" alt="" /></li>
				<li><img src="images/merck-logo.png" alt="" /></li>
				<li><img src="images/ohaus-logo.jpg" alt="" /></li>
				<li><img src="images/bd-logo.jpg" alt="" /></li>
				<li><img src="images/sarstedt-logo.jpg" alt="" /></li>
				<li><img src="images/meyer-logo.jpg" alt="" /></li>
				<li><img src="images/solbat-logo.jpg" alt="" /></li>
				<li><img src="images/daigger-logo.jpg" alt="" /></li>
				<li><img src="images/avantor-logo.jpg" alt="" /></li>
				<li><img src="images/advantec-logo.jpg" alt="" /></li>
				<li><img src="images/branson-logo.jpg" alt="" /></li>
				<li><img src="images/torrey-logo.jpg" alt="" /></li>
				<li><img src="images/hycel-logo.jpg" alt="" /></li>
				<li><img src="images/brannan-logo.png" alt="" /></li>
				<li><img src="images/corning-logo.jpg" alt="" /></li>
				<li><img src="images/wienerlab-logo.jpg" alt="" /></li>
				<li><img src="images/reasol-logo.png" alt="" /></li>
				<li><img src="images/heathrow-logo.jpg" alt="" /></li>
				<li><img src="images/hanna-instruments-logo.jpg" alt="" /></li>
			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>

	<!-- Navigation / Right -->
	<div class="one carousel column"><div id="showbiz_right_2" class="sb-navigation-right-2"><i class="fa fa-angle-right"></i></div></div>

</div>
<!-- Container / End -->
<!-- Happy Clients
================================================== -->

<!-- Container -->
<div id="testimonios" class="container">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Testimonios</h3>
		<span class="line margin-bottom-20"></span>
	</div>

	<!-- Navigation / Left -->
	<div id="showbiz_left_3" class="sb-navigation-left-2 alt"><i class="fa fa-angle-left"></i></div>

	<!-- ShowBiz Carousel -->
	<div id="happy-clients" class="showbiz-container sixteen carousel columns" >

	<!-- Portfolio Entries -->
	<div class="showbiz our-clients" data-left="#showbiz_left_3" data-right="#showbiz_right_3">
		<div class="overflowholder">

			<ul>

				<li>
					<div class="happy-clients-photo"><img src="images/happy-clients-01.jpg" alt="" /></div>
					<div class="happy-clients-cite">Simple and clean - that's what people and me like the most! Beautifully crafted, well organized and thoroughly documented.</div>
					<div class="happy-clients-author">Jennie Wilson</div>
				</li>
				
				<li>
					<div class="happy-clients-photo"><img src="images/happy-clients-02.jpg" alt="" /></div>
					<div class="happy-clients-cite">Astrum is ridiculously powerful and easy to use, beginner or advanced. Always been on the hunt for handcrafted, clean themes.</div>
					<div class="happy-clients-author">Thomas Smith</div>
				</li>
				
				<li>
					<div class="happy-clients-photo"><img src="images/happy-clients-03.jpg" alt="" /></div>
					<div class="happy-clients-cite">What impressed me was the fast response to questions and helpful community conversation in the support forums.</div>
					<div class="happy-clients-author">Robert Lindstrom</div>
				</li>

			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>

	<!-- Navigation / Right -->
	<div id="showbiz_right_3" class="sb-navigation-right-2 alt"><i class="fa fa-angle-right"></i></div>

</div>

@endsection