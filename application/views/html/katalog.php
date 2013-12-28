<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ecommerce Pentani Online</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/customize.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<!-- flexslider css-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.html">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		<header>
			<div class="upperHeader">
				<div class="container">
					<p class="pull-right inline">
					Welcome to ShopFine, <a href="<?php echo base_url(); ?>index.php/login">Login</a> or <a href="register.html">Create new account</a>
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

			<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="<?php echo base_url(); ?>">ShopFine</a></h1>
					</div>

					<div class="pull-right">
						<form method="#" action="#" class="siteSearch">
							<div class="input-append">
								<input type="text" class="span2" id="appendedInputButton" placeholder="Search...">
								<button class="btn btn-primary" type="submit" name=""><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					<div class="pull-right">
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    <i class="icon-shopping-cart"></i> 0 Items
							    <span class="caret"></span>
							</a>
						</div><!--end pull-right-->
					</div><!--end middleCoontainer-->

					</div><!--end container-->
				</div><!--end middleHeader-->
			</div>

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					      	
				      	<ul class="nav">
				      		<li class="active"><a href="#"><i class="icon-home"></i></a></li>
				      		<li>
				      			<a href="#">Kategori &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"><span>-</span>Pupuk</a></li>
					      				<li><a href="#"><span>-</span>Bibit</a></li>
					      				<li><a href="#"><span>-</span>Mesin</a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="<?php echo base_url(); ?>index.php/katalog">Katalog Produk</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/carapesan">Cara Pemesanan</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/carabayar">Cara Pembayaran</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/contact">Kontak Kami</a></li>
				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->
			
		</header>
		<!-- end header -->



<div class="container">

			<div class="row">

				<aside class="span3">

					<div class="categories">
						<div class="titleHeader clearfix">
							<h3>Categories</h3>
						</div><!--end titleHeader-->
						<ul class="unstyled">
							<li><a class="invarseColor active" href="#">Women (16)</a>
								<ul class="submenu">
									<li><a class="invarseColor" href="#">Beauty (3)</a></li>
									<li><a class="invarseColor active" href="#">Dresses (4)</a></li>
									<li><a class="invarseColor" href="#">Shorts (6)</a></li>
									<li><a class="invarseColor" href="#">Shoes (2)</a></li>
									<li><a class="invarseColor" href="#">Tops (1)</a></li>
									<li><a class="invarseColor" href="#">Jakets &amp; Coats (7)</a></li>
								</ul>
							</li>
							<li><a class="invarseColor" href="#">Men (6)</a></li>
							<li><a class="invarseColor" href="#">Children (8)</a></li>
							<li><a class="invarseColor" href="#">FootWear (3)</a></li>
							<li><a class="invarseColor" href="#">Accesspries (56)</a></li>
							<li><a class="invarseColor" href="#">Outlet (12)</a></li>
							<li><a class="invarseColor" href="#">Community (0)</a></li>
						</ul>
					</div><!--end categories-->

					<div class="pro-range-slider">
						<div class="titleHeader clearfix">
							<h3>Shop By Price</h3>
						</div><!--end titleHeader-->
						<div class="price-range">
							<p class="clearfix">
							  <label>Price:</label>
							  <input type="text" id="amount">
							</p>
							<div id="slider-range"></div>
						</div>
					</div><!--end pro-range-slider-->


					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the title here
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
								</div>
							</li>
						</ul>
					</div><!--end special-->

				</aside><!--end aside-->


				<div class="span9">

					<div id="productSlider" class="carousel slide">
						<!-- Carousel items -->
					    <div class="carousel-inner">
					      <div class="active item"><img src="<?php echo base_url(); ?>assets/img/694x240.jpg" alt=""></div>
					      <div class="item"><img src="<?php echo base_url(); ?>assets/img/694x240.jpg" alt=""></div>
					      <div class="item"><img src="<?php echo base_url(); ?>assets/img/694x240.jpg" alt=""></div>
					    </div>

					    <!-- Carousel nav -->
					    <a class="carousel-control left" href="#productSlider" data-slide="prev">&lsaquo;</a>
					    <a class="carousel-control right" href="#productSlider" data-slide="next">&rsaquo;</a>
					</div><!--end productSlider-->


					<div class="productFilter clearfix">

						<div class="sortBy inline pull-left">
							Sort By
							<select name="sortItem">
								<option value="Default">Default</option>
								<option value="">Name (A-A)</option>
								<option value="">Name (Z-A)</option>
								<option value="">Price (Low-Hight)</option>
								<option value="">Price (Height-Low)</option>
								<option value="">Highest Rating</option>
								<option value="">Lowest Rating</option>
								<option value="">Model (A-Z)</option>
								<option value="">Model (Z-A)</option>
							</select>
						</div>

						<div class="showItem inline pull-left">
							Show
							<select name="showItem">
								<option value="15">15</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="75">75</option>
								<option value="100">100</option>
							</select>
						</div><!--end sortBy-->

						<div class="compareItem inline pull-left">
							<button class="btn">Product Compare (4)</button>
						</div><!--end compareItem-->

						<div class="displaytBy inline pull-right">
							Display
							<div class="btn-group">
								<button class="btn btn-primary active"><i class="icon-th"></i></button>
								<button class="btn"><i class="icon-list"></i></button>
							</div>
						</div><!--end displaytBy-->

					</div><!--end productFilter-->


					<div class="row">
						<ul class="hProductItems clearfix">
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>

							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>assets/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
						</ul>
					</div><!--end row-->

					<div class="pagination pagination-right">
						<span class="pull-left">Showing 9 of 20 pages:</span>
						<ul>
							<li><a class="invarseColor" href="#">Prev</a></li>
							<li class="active"><a class="invarseColor" href="#">1</a></li>
							<li><a class="invarseColor" href="#">2</a></li>
							<li><a class="invarseColor" href="#">2</a></li>
							<li><a class="invarseColor" href="#">3</a></li>
							<li><a class="invarseColor" href="#">Next</a></li>
						</ul>
					</div><!--end pagination-->

				</div><!--end span9-->

			</div><!--end row-->

		</div><!--end conatiner-->

		<br><br>

		<div class="container">
			<div class="row">
				<div class="span12">
					<p>© Copyrights 2013 for petanionline.com</p>
				</div>
			</div>
		</div>
		</footer>
		<!--end footer-->

	</div><!--end mainContainer-->

	<!-- JS
	================================================== -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <!-- jQuery.Cookie -->
	<script src="<?php echo base_url() ?>assets/js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="<?php echo base_url() ?>assets/js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="<?php echo base_url() ?>assets/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="<?php echo base_url() ?>assets/js/jquery.tweet.js"></script>
    <!-- placeholder -->
    <script src="<?php echo base_url() ?>assets/js/jquery.placeholder.min.html"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    
</body>

</html>