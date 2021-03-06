@extends('html.app')

@section('content')

<!-- Titlebar
================================================== -->
<section class="titlebar">
<div class="container">
	<div class="sixteen columns">
		<h2>Tienda</h2>
		
		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Productos</a></li>
				<li><a href="#">Consumibles</a></li>
				<li>Pipetas</li>
			</ul>
		</nav>
	</div>
</div>
</section>


<div class="container">

<!-- Slider
================================================== -->
	<div class="eight columns" >
		<div class="slider-padding">
			<div id="product-slider-vertical" class="royalSlider rsDefault">
			    <a href="images/product_item_04a-big.jpg" class="mfp-gallery" title="First Title"><img class="rsImg" src="images/product_item_04a.jpg" data-rsTmb="images/product_item_thumb_04a.png" alt="" /></a>
			    <a href="images/product_item_04b-big.jpg" class="mfp-gallery" title="Second Title"><img class="rsImg" src="images/product_item_04b.jpg" data-rsTmb="images/product_item_thumb_04b.png" alt="" /></a>
			    <a href="images/product_item_04c-big.jpg" class="mfp-gallery" title="Third Title"><img class="rsImg" src="images/product_item_04c.jpg" data-rsTmb="images/product_item_thumb_04c.png" alt="" /></a>
			 </div>
			 <div class="clearfix"></div>
		</div>
	</div>


<!-- Content
================================================== -->
	<div class="eight columns">
		<div class="product-page">
			
			<!-- Headline -->
			<section class="title">
				<h2>Producto</h2>
				<span class="product-price">$49.00</span>
			</section>

			<!-- Text Parapgraph -->
			<section>
				<p class="margin-reset">Maecenas consequat mauris nec semper tristique. Etiam fermentum augue ac vulputate pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque <a href="#">ThemeForest</a> arcu sed mollis. Nulla egestas nulla elit, eu condimentum diam fringilla blandit.</p>

				<!-- Share Buttons -->	
				<div class="share-buttons">
					<ul>
						<li><a href="#">Compartir</a></li>
						<li class="share-facebook"><a href="#">Facebook</a></li>
						<li class="share-twitter"><a href="#">Twitter</a></li>
						<li class="share-gplus"><a href="#">Google Plus</a></li>
						<li class="share-pinit"><a href="#">Pin It</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
								
			</section>


			<section class="linking">

					<form action='#'>
						<div class="qtyminus"></div>
						<input type='text' name="quantity" value='1' class="qty" />
						<div class="qtyplus"></div>
					</form>

					<a href="#" class="button adc">Agregar al carrito</a>
					<div class="clearfix"></div>

			</section>

		</div>
	</div>

</div>


<div class="container">
	<div class="sixteen columns">
			<!-- Tabs Navigation -->
			<ul class="tabs-nav">
				<li class="active"><a href="#tab1">Descripción del producto</a></li>
				<li><a href="#tab2">Información adicional</a></li>
				<li><a href="#tab3">Reseñas <span class="tab-reviews">(0)</span></a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					<p>Lorem ipsum pharetra lorem felis. Aliquam egestas consectetur elementum class aptentea taciti sociosqu ad litora torquent perea conubia nostra lorem consectetur adipiscing elit. Donec vestibulum justo a diam ultricies pellentesque. Fusce vehicula libero arcu, vitae ornare turpis elementum at. Etiam posuere quam nec ligula dignissim iaculis donec eleifend laoreet ornare. Quisque mattis luctus est, a placerat elit pharetra.</p>
				</div>

				<div class="tab-content" id="tab2">

					<table class="basic-table">
						<tr>
							<th>Material</th>
							<td>Wool</td>
						</tr>

						<tr>
							<th>Tamaño</th>
							<td>Medium</td>
						</tr>
					</table>

				</div>

				<div class="tab-content" id="tab3">

					<!-- Reviews -->
					<section class="comments">
						<p class="margin-bottom-10">There are no reviews yet.</p>

						<a href="#small-dialog" class="popup-with-zoom-anim button color margin-left-0">Agregar reseña</a>

						<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
							<h3 class="headline">Agregar reseña</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

							<!-- Form -->
							<form id="add-comment" class="add-comment">
								<fieldset>

									<div>
										<label>Nombre:</label>
										<input type="text" value=""/>
									</div>

									<div>
										<label>Calificación:</label>
										<span class="rate">
											<span class="star"></span>
											<span class="star"></span>
											<span class="star"></span>
											<span class="star"></span>
											<span class="star"></span>
										</span>
										<div class="clearfix"></div>
									</div>

									<div class="margin-top-20">
										<label>Correo electrónico: <span>*</span></label>
										<input type="text" value=""/>
									</div>

									<div>
										<label>Reseña: <span>*</span></label>
										<textarea cols="40" rows="3"></textarea>
									</div>

								</fieldset>

								<a href="#" class="button color">Agregar Reseña</a>
								<div class="clearfix"></div>

							</form>
						</div>

					</section>

				</div>

			</div>
	</div>
</div>

<!-- Related Products -->
<div class="container margin-top-5">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Productos Relacionados</h3>
		<span class="line margin-bottom-0"></span>
	</div>

	<!-- Products -->
	<div class="products">

		<!-- Product #1 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="#">
						<img alt="" src="images/shop_item_01.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_01_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
				</div>

				<a href="#">
					<section>
						<span class="product-category">Skirts</span>
						<h5>Brown Mini Skirt</h5>
						<span class="product-price">$79.00</span>
					</section>
				</a>
			</figure>
		</div>

		<!-- Product #2 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="#">
						<img alt="" src="images/shop_item_04.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_04_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
				</div>

				<a href="#">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Vintage Stripe Jumper</h5>
						<span class="product-price">$49.00</span>
					</section>
				</a>
			</figure>
		</div>

		<!-- Product #3 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="#">
						<img alt="" src="images/shop_item_07.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_07_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
				</div>

				<a href="#">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Shirt in Navy Stripe</h5>
						<span class="product-price">$49.00</span>
					</section>
				</a>
			</figure>
		</div>

		<!-- Product #4 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="#">
						<img alt="" src="images/shop_item_09.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_09_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
				</div>

				<a href="#">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Long Sleeve Check Shirt</h5>
						<span class="product-price">$69.00</span>
					</section>
				</a>
			</figure>
		</div>

	</div>
</div>
@endsection