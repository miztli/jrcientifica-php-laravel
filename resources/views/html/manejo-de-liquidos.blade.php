@extends('html.app')

@section('content')


<!-- Titlebar
================================================== -->
<section class="titlebar">
<div class="container">
	<div class="sixteen columns">
		<h2>Portfolio</h2>
		
		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li>3 Columns</li>
			</ul>
		</nav>
	</div>
</div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<!-- Filters -->
	<div class="sixteen columns">
		<div id="filters" class="filters-dropdown headline"><span></span>
			<ul class="option-set" data-option-key="filter">
				<li><a href="#filter" class="selected" data-filter="*">All</a></li>
				<li><a href="#filter" data-filter=".accessories">Accessories</a></li>
				<li><a href="#filter" data-filter=".clothing">Clothing</a></li>
				<li><a href="#filter" data-filter=".technology">Technology</a></li>
				<li><a href="#filter" data-filter=".food">Food</a></li>
				<li><a href="#filter" data-filter=".other">Other</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>


	<!-- Portfolio Wrapper-->
	<div id="portfolio-wrapper">

		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing other">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-01.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Clothing</span>
						<h5>Retro Shoes</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories clothing technology">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-02.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Accessories</span>
						<h5>Luxury Watch</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing accessories">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-03.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Clothing</span>
						<h5>Coat Button</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item other food">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-04.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Other</span>
						<h5>Green Leaf</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item food other accessories">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-05.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Food</span>
						<h5>Raspberries</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories clothing technology">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-06.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Accessories</span>
						<h5>Fashion Glasses</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item technology ">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-07.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Technology</span>
						<h5>RPM Tachometer</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item technology other">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-08.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Technology</span>
						<h5>Old Plane Propeller</h5>
					</section>
				</a>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item other">
			<figure>
				<div class="portfolio-holder">
					<a href="single-project.html">
						<img alt="" src="images/portfolio/portfolio-09.jpg"/>
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
					</a>
				</div>

				<a href="single-project-half.html">
					<section class="item-description">
						<span>Other</span>
						<h5>Little Pitbull’s Look</h5>
					</section>
				</a>

			</figure>
		</div>

	</div>
	<!-- Portfolio Wrapper / End -->

</div>
<!-- Container / End -->

@endsection