<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lavoro | Home 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="{{ asset('fonts/font-icon.css') }}">
		
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('custom-slider/css/nivo-slider.css') }}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('custom-slider/css/preview.css') }}" type="text/css" media="screen" />
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-one">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		@include('components.header')
		<!-- header area end -->
		<!-- start home slider -->
        <div class="slider-area an-1 hm-1">
             <!-- slider -->
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides">	
					<img src="img/slider/home-1/slider1-1.jpg" alt="" title="#slider-direction-1"  />
					<img src="img/slider/home-1/slider1-2.jpg" alt="" title="#slider-direction-2"  />
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-cn s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl s-tb slider-2 lft-pr">
						<div class="title-container s-tb-c">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div>
			</div>
			<!-- slider end-->
		</div>
        <!-- end home slider -->
		<!-- product section start -->
		<div class="our-product-area">
			<div class="container">
				<!-- area title start -->
				<div class="area-title">
					<h2>Our products</h2>
				</div>
				<!-- area title end -->
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="features-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
								<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
							</ul>
							<!-- Tab pans -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<div class="row">
										<div class="features-curosel">
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-1.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-3.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-4.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$240.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-5.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$280.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-7.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$333.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-9.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$400.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$100.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-2.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$110.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-4.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-6.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-8.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$400.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-10.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$330.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$213.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$340.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$222.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
											</div>
											<!-- single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="profile">
									<div class="row">
										<div class="features-curosel">
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$110.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$200.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-8.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$370.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-10.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$170.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-2.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-4.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$350.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-6.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-9.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$180.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$310.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-5.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-7.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$178.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- banner-area start -->
		<div class="banner-area">
			<div class="container-fluid">
				<div class="row">
					<a href=""><img src="img/banner/banner-1.jpg" alt="" /></a>
				</div>
			</div>
		</div>
		<!-- banner-area end -->
		<!-- product section start -->
		<div class="our-product-area new-product">
			<div class="container">
				<div class="area-title">
					<h2>New products</h2>
				</div>
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="features-curosel">
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-1.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$200.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-5.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$300.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-9.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$270.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
									
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-13.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$340.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<span class="sale-text">Sale</span>
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-4.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$360.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-8.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$400.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-11.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$280.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-11.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$222.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>	
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- latestpost area start -->
		<div class="latest-post-area">
			<div class="container">
				<div class="area-title">
					<h2>Latest Post</h2>
				</div>
				<div class="row">
					<div class="all-singlepost">
						<!-- single latestpost start -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-post">
								<div class="post-thumb">
									<a href="#">
										<img src="img/post/post-1.jpg" alt="" />
									</a>
								</div>
								<div class="post-thumb-info">
									<div class="post-time">
										<a href="#">Beauty</a>
										<span>/</span>
										<span>Post by</span>
										<span>BootExperts</span>
									</div>
									<div class="postexcerpt">
										<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas...</p>
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single latestpost end -->
						<!-- single latestpost start -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-post">
								<div class="post-thumb">
									<a href="#">
										<img src="img/post/post-2.jpg" alt="" />
									</a>
								</div>
								<div class="post-thumb-info">
									<div class="post-time">
										<a href="#">Fashion</a>
										<span>/</span>
										<span>Post by</span>
										<span>BootExperts</span>
									</div>
									<div class="postexcerpt">
										<p>Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus...</p>
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single latestpost end -->
						<!-- single latestpost start -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-post">
								<div class="post-thumb">
									<a href="#">
										<img src="img/post/post-3.jpg" alt="" />
									</a>
								</div>
								<div class="post-thumb-info">
									<div class="post-time">
										<a href="#">Brunch Network</a>
										<span>/</span>
										<span>Post by</span>
										<span>BootExperts</span>
									</div>
									<div class="postexcerpt">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...</p>
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single latestpost end -->
					</div>
				</div>
			</div>
		</div>
		<!-- latestpost area end -->
		<!-- block category area start -->
		<div class="block-category">
			<div class="container">
				<div class="row">
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Featureds</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-1.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-2.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>On Sales</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-10.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Populers</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
				</div>
			</div>
		</div>
		<!-- block category area end -->
		<!-- testimonial area start -->
		<div class="testimonial-area lap-ruffel">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="crusial-carousel">
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>BootExperts</span>
							</div>
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>Lavoro Store!</span>
							</div>
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>MR Selim Rana</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial area end -->
		<!-- Brand Logo Area Start -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel">
						<div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Brand Logo Area End -->
		<!-- FOOTER START -->
        @include('components.footer')
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
		
		<!-- Nivo slider js
		============================================ --> 		
		<script src="{{ asset('custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('custom-slider/home.js') }}" type="text/javascript"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="{{ asset('js/price-slider.js') }}"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>	
        
   		<!-- wow js
		============================================ -->       
        <script src="{{ asset('js/wow.js') }}"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="{{ asset('js/plugins.js') }}"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>