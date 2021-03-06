@extends('html.app')

@section('content')

<!-- Titlebar
================================================== -->
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="images/titlebar_bg_01.jpg" alt="" />
	<div class="parallax-overlay"></div>

	<div class="parallax-content">
		<h2>Shop <span>International Shipping</span></h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Shop</a></li>
				<li>Products</li>
			</ul>
		</nav>
	</div>

</section>


<div class="container">

	<!-- Content
	================================================== -->

	<div class="sixteen columns full-width">

		<!-- Ordering -->
		<select class="orderby">
			<option>Default Sorting</option>
			<option>Sort by Popularity</option>
			<option>Sort by Newness</option>
		</select>

	</div>

	<!-- Products -->
	<div class="products">

		<!-- Product #1 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="images/shop_item_01.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_01_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="variable-product-page.html">
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
					<a href="single-product-page.html">
						<img alt="" src="images/shop_item_02.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_02_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="single-product-page.html">
					<section>
						<span class="product-category">Shoes</span>
						<h5>Glory High Shoes </h5>
						<span class="product-price">$99.00</span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #3 -->
		<div class="four columns">
			<figure class="product">
				<div class="product-discount">SALE</div>
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="images/shop_item_03.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_03_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="variable-product-page.html">
					<section>
						<span class="product-category">Suits</span>
						<h5>Wool Two-Piece Suit</h5>
						<span class="product-price-discount">$499.00<i>$399.00</i></span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #4 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="images/shop_item_04.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_04_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="variable-product-page.html">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Vintage Stripe Jumper</h5>
						<span class="product-price">$49.00</span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #5 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="single-product-page.html">
						<img alt="" src="images/shop_item_05.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_05_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="single-product-page.html">
					<section>
						<span class="product-category">Accessories</span>
						<h5>Vintage Sunglasses</h5>
						<span class="product-price">$29.00</span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #6 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="images/shop_item_06.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_06_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="variable-product-page.html">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Solid Blue Polo Shirt</h5>
						<span class="product-price">$29.00</span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #7 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="images/shop_item_07.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_07_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="variable-product-page.html">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Shirt in Navy Stripe</h5>
						<span class="product-price">$49.00</span>
					</section>
				</a>
			</figure>
		</div>


		<!-- Product #8 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="single-product-page.html">
						<img alt="" src="images/shop_item_09.jpg"/>
						<div class="cover">
							<img alt="" src="images/shop_item_09_hover.jpg"/>
						</div>
					</a>
					<a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
				</div>

				<a href="single-product-page.html">
					<section>
						<span class="product-category">Shirts</span>
						<h5>Long Sleeve Check Shirt</h5>
						<span class="product-price">$69.00</span>
					</section>
				</a>
			</figure>
		</div>
		<div class="clearfix"></div>


		<!-- Pagination -->
		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</nav>

			<nav class="pagination-next-prev full-width">
				<ul>
					<li><a href="#" class="prev"></a></li>
					<li><a href="#" class="next"></a></li>
				</ul>
			</nav>
		</div>

	</div>

</div>

@endsection