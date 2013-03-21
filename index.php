<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hiteks</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="MyWay - Parallax Retina Bootstrap Multipurpose Template">
		<meta name="author" content="awerest - interactive agency">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap-lightbox.min.css" rel="stylesheet">
		<link href="css/m-styles.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="image_src" href="thumbnail.png">
		<link rel="icon" type="image/ico" href="favicon.ico">
		<script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $('#footer_slider')
				.after('<div id="slider_nav">')
				.cycle({
			        fx: 'fade',
			        timeout: 500,
			        speedIn:3000,
					pager:  '#slider_nav'
			    });
			    $('#slider_nav a').empty();
			});
		</script>
		<style>

		</style>	
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset='64' onLoad="$.stellar();">
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
	
	<!--start navigation -->
		<div class="navbar navbar-fixed-top" id="navigation">
			<div class="navbar-inner">
				<div class="container" style="background:#ccc;width:100%">
					<div class="header-container" style="width:870px;margin:auto;font-family:penguin-bold;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a href="#intro" class="brand"><img src="images/logo.png"></a>
						<div class="nav-collapse collapse">
							<ul class="nav pull-right">
								<li><a href="#intro">HOME</a></li>
								<li><a href="#services-top">ABOUT</a></li>
								<li><a href="#works-top">PRODUCTS</a></li>
								<li><a href="#gallery-top">SERVICES</a></li>
								<li><a href="#team-top">SUPPORT</a></li>
								<li><a href="#contact-top">SIGN IN</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="intro" style="min-height:650px!important;">
			<div class="container">
				<div class="row">
					<div class="wrapper wrapper2">
						<div class="content-box">
							<img style="z-index:100;position:relative;" class="first" src="images/first1.png" alt="first">
							<div class="back" style="">
								<form style="display:none" method="post" action="" class="form">
								<input  type="text" name="text" class="search" placeholder="SEARCH HERE" />
								<a class="btn btn-default"  href="#">GO</a>
								</form>
							</div>
							<img style="z-index:100;position:relative;"class="second" src="images/second2.png" alt="first">
						</div>
					</div>
					<?php
						$img=1;
						for($i=1;$i<=50;$i++){
							$img++;
							if($img==33){
								$img=1;
							}
							echo "<div class='$i aObjects' style='display:none;opacity:.4;position:absolute;z-index:1;left:630px;top:400px;'><img src='icon/$img.png'/></div>";
						}
					?>
				</div>	
			</div>
			<!--<div class="fadeInUp delay animated hidden-phone" id="more">
				<a href="#services-top" class="m-btn a-btn blue big icn-only"><i class="icon-sort-down icon-3x pull-left"></i></a>
			</div>-->
		</section>
	<!--start services intro footer-->
		<section id="intro">
	<!--start services-desktop header-->
			<div class="footer-upper">
				<div class="wrapper">
					<p>Expert Medial terminolgy simplified & explained with our easy search toolkit & advanced API. Anyone can use Hiteks, because everyone's time is valueable.</p>
					<p class="text">Medicine's First and Only affordable & Accurate Clinical NLP Solution, <img src="images/licence-img.png" style="padding-left:40px; padding-right:5px;"> Licence it Now  <img src="images/video.png" style="padding-left:35px; padding-right:3px;"> Watch demo</p>
				</div>
			</div>
			<hr class="horizontal-line" />
			<div id="footer">	
				<div class="footer-wrapper">
					<div class="footer-blog1">
						<div id="footer_slider">
								<!-- <a>
									<img class="slider_img" src="img/footer_slider/skelton.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a> -->
								<a>
									<img class="slider_img" src="img/footer_slider/iStock_000003473034Large.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/iStock_000006811627XSmall.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/iStock_000010754350XLarge.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jj_natlgeodude.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/mind chalk.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a> 
									<img class="slider_img" src="img/footer_slider/XR_041.JPG" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/brain fly.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/head7.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/iStock_000000409116_L2.jpg" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
							</div>
						<!-- <img src="images/skelton.png" class="skelton" /> -->
					</div>
				<!--<div class="footer-blog2">
					<img src="images/humedica.png" />
					<ul>
					    <li>Meet Hiteks at New Orleans, March 3-7</li>
					    <li>Humedica Conference/HIMSS Booth #5221</li>
					</ul>
				</div>-->
				<div class="footer-blog3">
				    <img src="images/letter-breaks.png" style="float:left;" />
				    <ul>
					    <li>Hiteks. Medical Language Technology.</li>
					    <li>Achieve Clinical Interoperability ability and Semantic search</li>
					    <li>521 Fifth Ave, 32nd Floor. New York,NY 10175</li>
					    <li>+1 212.920.0929 info@hiteks.com @hiteks</li>
				    </ul>
				</div>
				<div class="company-names" style="clear:both;">
					<!-- <img src="images/footer1.png" alt="2" style="margin-right:20px;" class="firstnames">
				    <img src="images/footer3.png" alt="3" style="margin-right:15px">
					<img src="images/footer5.png" alt="4" style="margin-right:15px">
					<img src="images/footer7.png" alt="5" style="margin-right:15px">
					<img src="images/footer9.png" alt="6" style="margin-right:15px">
					<img src="images/footer10.png" alt="6" style="margin-right:15px"> -->
					<img src="images/footer1.png" alt="2" style="margin-right:8px; height:25px" class="firstnames" />
				    <img src="images/fda-logo-vector.png" alt="3" style="height:60px;" />
					<img src="images/anolinx.png" alt="4" style="height:50px;width:100px"/>
					<img src="images/fda_logo.png" alt="5" style="height:50px" />
					<img src="images/acupera.png" alt="6" style="height:25px" />
					<img src="images/eellas_logo.png" alt="6" style="margin-right:8px;" />
				</div>
				<div style="float:left;">
					<div class="footer-nav">
					    <ul>
						    <li><a href="#">Home</a></li>
						<li><a href="#services-top">About</a></li>
						<li><a href="#works-top">Products</a></li>
						<li><a href="#gallery-top">Services</a></li>
						<li><a href="#team-top">Support</a></li>
						<li><a href="#contact-top">Sign In</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Sitemap</a></li>
					    </ul>
					</div>
				</div>
				<div class="social-links">
					<img src="images/facebook.png" alt="facebook" style="padding-right:18px;">
					<img src="images/google.png" alt="facebook" style="padding-right:18px;">
					<img src="images/twitter.png" alt="facebook" style="padding-right:18px;">
					<img src="images/inshare.png" alt="facebook" >
									
					
				</div>
					<img src="images/big-skelton.png" class="big-skelton">
				</div>
			</div>
	<!--start services-mobile header-->
			<section id="services-top-mobile" class="hidden-desktop">
				<h1 class="header">Services</h1>
				<p class="header">How awesome can it be?</p>
			</section>
		</section>
		
	
		<section id="services-top">
	<!--start services-desktop header-->
			<section id="services-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header">About</h1>
				<!--<p class="header">How awesome can it be?</p>-->
			</section>
	<!--start services-mobile header-->
			<section id="services-top-mobile" class="hidden-desktop">
				<h1 class="header">About</h1>
				<!--<p class="header">How awesome can it be?</p>-->
			</section>
		</section>
	<!--start services-->
		<section id="services">
			<div class="container">
				<div class="row divide">
					<div class="span12">
						<ul class="thumbnails">
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-cogs"></i>
									<h4>Careers</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										Innovative thinking and creative learning are part of the work culture at Hiteks. We have a young and vibrant work environment where new ideas are encouraged. The team consists of people from a diverse set of backgrounds and experiences. New employees benefit from the collaborative and one-on-one training via our mentoring programs.
									</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-eye-open"></i>
									<h4>Services</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										With a deep understanding of population-based research using health informatics techniques, we focus our attention on providing tools to enable clinicians to assess and act on information quality issues which support public health, outcomes research, health economics and translational research & development.
									</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-stethoscope"></i>
									<h4>Hiteks Team</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										At Hiteks we love metamorphosing complex technology into simple and clean information at your fingertips. Founded by a group of creative entrepreneurs, Hiteks has an energetic and vibrant atmosphere.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--<section id="hint1">
			<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank"><strong>HEADS UP!</strong> Click here to check all <strong>249 icons</strong> that we integrated in this template</a>
		</section>-->
	<!--start works header-->
		<section id="works-top">
	<!--start works-desktop header-->
			<section id="works-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header">Products</h1>
				<!--<p class="header">How awesome it is?</p>-->
			</section>
	<!--start works-mobile header-->
			<section id="works-top-mobile" class="hidden-desktop">
				<h1 class="header">Products</h1>
				<!--<p class="header">How awesome it is?</p>-->
			</section>
		</section>
	<!--start works-->
		<section id="works">
			<div class="container">
				<div class="row divide">
					<div class="span12">
						<!--<div id="carousel_vertical_slide" class="carousel slide vertical">
							<div class="carousel-inner">
								<div class="active item">
									<img src="img/works/works_1.jpg" alt="">
								</div>
								<div class="inactive item">
									<img src="img/works/works_2.jpg" alt="">
								</div>
							</div>
							<button class="carousel-control left m-btn icn-only" href="#carousel_vertical_slide" data-slide="prev"><i class="icon-chevron-left"></i></button>
							<button class="carousel-control right m-btn icn-only" href="#carousel_vertical_slide" data-slide="next"><i class="icon-chevron-right"></i></button>
						</div>-->
					</div>
					<div class="span8 offset2">
						<h1>Hiteksite</h1>
						<!--<h4>Works layout 1 + carousel with vertical slide effect</h4>-->
						<p class="center">Aoccdrnig to a rscheearch at Cmabrigde Uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, 
						the olny iprmoetnt tihng is taht the frist and lsat ltteer be at the rghit pclae.
						The rset can be a toatl mses and you can sitll raed it wouthit porbelm. 
						Tihs is bcuseae the huamn mnid deos not raed ervey lteter by istlef, but the wrod as a wlohe. Awesomeness, true story!</p>
					</div>
				</div>
				<!--<div class="divider"></div>-->
				<!--<div class="row divide">
					<div class="span12">
						<div id="carousel_horizontal_slide" class="carousel slide horizontal">
							<div class="carousel-inner">
								<div class="active item">
									<img src="img/works/works_3.jpg" alt="">
								</div>
								<div class="inactive item">
									<img src="img/works/works_4.jpg" alt="">
								</div>
							</div>
							<button class="carousel-control left m-btn icn-only" href="#carousel_horizontal_slide" data-slide="prev"><i class="icon-chevron-left"></i></button>
							<button class="carousel-control right m-btn icn-only" href="#carousel_horizontal_slide" data-slide="next"><i class="icon-chevron-right"></i></button>
						</div>
						<h1>Fully Responsive</h1>
						<h4>Works layout 2 + carousel with horizontal slide effect</h4>
					</div>
					<div class="span7 offset1">
						<p>Aoccdrnig to a rscheearch at Cmabrigde Uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, 
						the olny iprmoetnt tihng is taht the frist and lsat ltteer be at the rghit pclae.
						The rset can be a toatl mses and you can sitll raed it wouthit porbelm. 
						Tihs is bcuseae the huamn mnid deos not raed ervey lteter by istlef, but the wrod as a wlohe. Awesomeness, true story!</p>
					</div>
					<div class="span2 offset1">
						<p><strong>Client:</strong> Themeforest<br>
						<strong>Date:</strong> 21.02.1986
						<a href="#" class="m-btn blue span2">View online</a>
					</div>
				</div>-->
				<!--<div class="divider"></div>-->
				<!--<div class="row divide">
					<div class="span12">
					</div>
					<div class="span7">
						<div id="carousel_fade" class="carousel slide carousel-fade">
							<div class="carousel-inner">
								<div class="active item">
									<img src="img/works/works_5.jpg" alt="">
								</div>
								<div class="inactive item">
									<img src="img/works/works_6.jpg" alt="">
								</div>
							</div>
							<button class="carousel-control left m-btn icn-only" href="#carousel_fade" data-slide="prev"><i class="icon-chevron-left"></i></button>
							<button class="carousel-control right m-btn icn-only" href="#carousel_fade" data-slide="next"><i class="icon-chevron-right"></i></button>
						</div>
					</div>
					<div class="span5 divide">
						<h1>Tons of shortcodes</h1>
						<h4>Works layout 3 + carousel with fade effect</h4>
						<p>Aoccdrnig to a rscheearch at Cmabrigde Uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, 
						the olny iprmoetnt tihng is taht the frist and lsat ltteer be at the rghit pclae.
						The rset can be a toatl mses and you can sitll raed it wouthit porbelm. 
						Tihs is bcuseae the huamn mnid deos not raed ervey lteter by istlef, but the wrod as a wlohe. Awesomeness, true story!</p>
						<a href="#" class="m-btn blue pull-right">View online</a>
						<p><strong>Client:</strong> Themeforest<br>
						<strong>Date:</strong> 21.02.1986
					</div>
				</div>-->
				<!--<div class="divider"></div>-->
				<!--<div class="row divide">
					<div class="span5 divide">
						<h1>Supereasy to customize</h1>
						<h4>Works layout 3 + carousel with fade effect</h4>
						<p>Aoccdrnig to a rscheearch at Cmabrigde Uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, 
						the olny iprmoetnt tihng is taht the frist and lsat ltteer be at the rghit pclae.
						The rset can be a toatl mses and you can sitll raed it wouthit porbelm. 
						Tihs is bcuseae the huamn mnid deos not raed ervey lteter by istlef, but the wrod as a wlohe. Awesomeness, true story!</p>
						<a href="#" class="m-btn blue pull-right">View online</a>
						<p><strong>Client:</strong> Themeforest<br>
						<strong>Date:</strong> 21.02.1986
					</div>
					<div class="span7">
						<div id="carousel_fade_2" class="carousel slide carousel-fade">
							<div class="carousel-inner">
								<div class="active item">
									<img src="img/works/works_6.jpg" alt="">
								</div>
								<div class="inactive item">
									<img src="img/works/works_5.jpg" alt="">
								</div>
							</div>
							<button class="carousel-control left m-btn icn-only" href="#carousel_fade_2" data-slide="prev"><i class="icon-chevron-left"></i></button>
							<button class="carousel-control right m-btn icn-only" href="#carousel_fade_2" data-slide="next"><i class="icon-chevron-right"></i></button>
						</div>
					</div>
				</div>-->
			</div>
		</section>
		<!--<section id="hint2">
			<a href="http://twitter.github.com/bootstrap/base-css.html" target="_blank"><strong>Heads up!</strong> Click here to check all built-in shortcodes</a>
		</section>-->
	<!--start gallery header-->
		<section id="gallery-top">
	<!--start gallery-desktop header-->
			<section id="gallery-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header">Services</h1>
				<!--<p class="header">Alternative Works Version</p>-->
			</section>
	<!--start gallery-mobile header-->
			<section id="gallery-top-mobile" class="hidden-desktop">
				<h1 class="header">Services</h1>
				<!--<p class="header">Alternative Works Version</p>-->
			</section>
		</section>
	<!--start gallery-->
	<!--start thumbnails section-->
		<section id="gallery">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<h1>Clinical Data Intelligence (Health Insights™)</h1>
						<p class="center">
							Easy access to rich sources of clinical data to better understand diseases and their management are supported through the transformation of structured and unstructured clinical and administrative data and presented with an intuitive user-friendly interface that allows for population cohort selection, sub-setting, drill-down, slicing and dicing.  As a modern clinical data analytics system should, Health InsightsTM applies customizable queries against electronic clinical data.  Differentiating us from others, we do not require tedious, lengthy data standardization up-front, rather we conduct all the data standardization on the back-end using a unique ontology-creation approach that enables us to compare apples to apples. Health InsightsTM is the only tool on the market which has both an intuitive user-friendly interface and works on all types of data sources to support population-based analytics.
						</p>
					</div>
					<!--<div class="span12">
						<ul class="thumbnails">
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_1" data-toggle="lightbox">
										<img src="img/gallery/gallery_1.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_2" data-toggle="lightbox">
										<img src="img/gallery/gallery_2.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_3" data-toggle="lightbox">
										<img src="img/gallery/gallery_3.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_4" data-toggle="lightbox">
										<img src="img/gallery/gallery_4.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_5" data-toggle="lightbox">
										<img src="img/gallery/gallery_5.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_6" data-toggle="lightbox">
										<img src="img/gallery/gallery_6.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_7" data-toggle="lightbox">
										<img src="img/gallery/gallery_7.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_8" data-toggle="lightbox">
										<img src="img/gallery/gallery_8.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_9" data-toggle="lightbox">
										<img src="img/gallery/gallery_9.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_10" data-toggle="lightbox">
										<img src="img/gallery/gallery_10.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="top">
									<a href="#gallery_11" data-toggle="lightbox">
										<img src="img/gallery/gallery_11.jpg" alt="">
									</a>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail" data-thumb="tooltip" title="Click me" data-placement="bottom">
									<a href="#gallery_12" data-toggle="lightbox">
										<img src="img/gallery/gallery_12.jpg" alt="">
									</a>
								</div>
							</li>
						</ul>
					</div>-->
				</div>
			</div>
		</section>
	<!--end thumbnails section-->
	<!--start lightboxes-->
		<div id="gallery_1" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_1@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_2" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_2@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_3" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_3@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_4" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_4@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_5" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_5@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_6" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_6@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_7" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_7@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_8" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_8@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_9" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_9@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_10" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_10@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_11" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_11@2x.jpg" alt="">
			</div>
		</div>
		<div id="gallery_12" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<img src="img/gallery/gallery_12@2x.jpg" alt="">
			</div>
		</div>
	<!--end lightbox section-->
		<!--<section id="hint3">
			<a href="http://twitter.github.com/bootstrap/components.html" target="_blank"><strong>Heads up!</strong> Click here to check all built-in components</a>
		</section>-->
	<!--start team header-->
		<section id="team-top">
	<!--start team-desktop header-->
			<section id="team-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header">Support</h1>
				<!--<p class="header">Coffees and Apple</p>-->
			</section>
	<!--start team-mobile header-->
			<section id="team-top-mobile" class="hidden-desktop">
				<h1 class="header">Support</h1>
				<!--<p class="header">Coffees and Apple</p>-->
			</section>
		</section>
	<!--start team-->
		<section id="team">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<h1>We are Hiteks</h1>
						<p class="center">
							As a company and as individuals, we are committed to improving the daily lives of clinicians, scientists and health administrators. By working closely with our clients and partners, we find methods to make business processes and technologies work together. Through meaningful interactions with our network, our business regularly finds out new capabilities and interests in those with whom we work. Our most precious interactions, of course, are with our team members. The Hiteks team is comprised of management and advisory board members with the experience necessary to direct the company’s day-to-day operations and growth strategy, while continually looking for innovative ways to meet the needs of clients and investors. 
						</p>
					</div>
					<!--<div class="span12">
						<ul class="thumbnails">
							<li class="span4">
								<div class="thumbnail">
									<img src="img/team/team_1.jpg" alt="">
									<h4>Aleksandar Macanovic</h4>
									<span>Founder</span>
									<p>Girlfriend, Amiga500, Star Wars, Coffee.</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img src="img/team/team_2.jpg" alt="">
									<h4>Kristina Nikolic</h4>
									<span>Marketing Manager</span>
									<p>Cognac, Job, PopCorn, LEGO, Theatre.</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img src="img/team/team_3.jpg" alt="">
									<h4>Barnetta Stinson</h4>
									<span>Developer</span>
									<p>Legendary, High Five, Challenge Accepted.</p>
								</div>
							</li>
						</ul>
					</div>-->
				</div>
			</div>
		</section>
	<!--start contact header-->
		<section id="contact-top">
	<!--start contact-desktop header-->
			<section id="contact-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header">Signin</h1>
				<!--<p class="header">Fill up our inbox, we like that</p>-->
			</section>
	<!--start contact-mobile header-->
			<section id="contact-top-mobile" class="hidden-desktop">
				<h1 class="header">Signin</h1>
				<!--<p class="header">Fill up our inbox, we like that</p>-->
			</section>
		</section>
	<!--start contact-->
		<section id="contact">
			<div class="container">
				<div class="row divide">
					<div class="span8">
						<div class="row">
							<form action="js/sendmail.php" method="post" id="contactForm">
								<div class="span4">
									<label>Name:</label>
									<input type="text" name="name" value="" id="name" class="span4"/>
								</div>
								<div class="span4">
									<label>Email:</label>
									<input type="text" name="email" value="" id="email"  class="span4"/>
								</div>
								<span class="honeypot">
									<label>Honeypot:</label>
									<input type="text" name="last" value="" id="last"/>
								</span>
								<div class="span8">
									<label>Message:</label>
									<textarea rows="6" name="message" class="span8"></textarea>
								</div>
								<div class="span8">
									<div class="message"><div class="alert"></div></div>
									<input type="submit" value="Send" class="m-btn blue"/>
								</div>
							</form>
						</div>
					</div>
	<!--start sidebar-->
					<div class="span4" id="address">
						<p>NEW YORK<br>
						521 Fifth Ave,<br> 32nd Floor New York,<br> NY 10175</p>
						<p><abbr title="Phone">P:</abbr>  +1-212-920-0929<br>
						<abbr title="Fax">F:</abbr> +1-212-931-5508 <br></p>
					</div>
				</div>
			</div>
		</section>
	<!--start footer-->
		<section id="footer">
			<div class="container">
				<div class="row divide">
	<!--logo and copyright-->
					<div class="span3">
						<a href="#intro" class="brand"><img src="images/logo.png"></a>
						<p>2013 © Hiteks</p><br>
						<!--<p>myway is product <br> of <a href="http://www.awerest.com" target="_blank">awerest</a></p><br>-->
					</div>
	<!--footer menu-->
					<div class="span2 offset4">
						<ul>
							<li><h5>Menu</h5></li>
							<li><a href="#intro">Home</a></li>
							<li><a href="#services-top">Services</a></li>
							<li><a href="#works-top">Works</a></li>
							<li><a href="#gallery-top">Gallery</a></li>
							<li><a href="#team-top">Team</a></li>
						</ul>
					</div>
	<!--link to social networks-->
					<div class="span2 offset1">
						<ul>
							<li><h5>Social</h5></li>
							<li><a class="facebook" href="#" target="_blank">Facebook</a></li>
							<li><a class="twitter" href="#" target="_blank">Twitter</a></li>
							<li><a class="google" href="#" target="_blank">Google+</a></li>
							<li><a class="instagram" href="#" target="_blank">Instagram</a></li>
							<li><a class="pinterest" href="#" target="_blank">Pinterest</a></li>
						</ul>
					</div>	
				</div>	
			</div>
		</section>
	<!--latest jQuery-->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
	<!--main bootstrap js-->
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<!--custom js-->
		<script src="js/custom.js" type="text/javascript"></script>
	<!--preloader-->
		<script type="text/javascript">
			$(window).load(function() {
				$("#status").fadeOut();
				$("#preloader").delay(350).fadeOut("slow");
			})
		</script>
	<!--retina support-->
		<script src="js/retina.js" type="text/javascript"></script>
	<!--smooth scroll on page-->
		<script src="js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
	<!--custom scrollbar-->
		<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<!--parallax-->
		<script src="js/jquery.stellar.js" type="text/javascript"></script>
	<!--contact-->
		<script src="js/jquery.form.js"></script>		
	<!--gallery lightbox-->
		<script src="js/bootstrap-lightbox.min.js"></script>
	<!--google analytics-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		
		<script>
			var timeoutHolder;
			var animateToCenter = false;
			
			
			function getRandomInt (min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}


			function initObjects(){
				$('.aObjects').css('display', 'block');
			}
			
			function startAnimation(){
				initObjects()
				for(var i=1;i<=50;i++){
					animateObject("."+i);
				}
			}
			
			
			
			function animateObject(object){
				var cord = getRandomCord();
				
				$(object).animate({left: cord.x, top: cord.y},(animateToCenter)?8000:getRandSpeed());
			}
			
			function getRandomCord(){
				var minx = 0;
				var miny = 0;
				var width;
				var height;
				if(animateToCenter == false){
					width=$(window).width();
					height = 700;
					minx = 0;
					miny= 0;
				}else{
					minx = $(window).width() / 2+50;
					height=500;
					miny= 250;
					width= 400;
				}
				
				var left = getRandomInt(minx, width);
				
				var top = getRandomInt(miny, height);
				
				return {x:left, y:top};
			}
			
			function getRandSpeed(){
				return Math.floor(Math.random()*5000)+5000;	
			}
				
			$(document).ready(function(){
				$(".first").animate({'margin-left':'-190'},2000);
				$(".second").animate({'margin-left':'380'},2000);
				setTimeout(function(){
					$(".second").animate({"margin-left":'0'},10)
						$('.back').delay(5).fadeIn(2000);
						$('.form').fadeIn(2000);
					},2000);
				
				;
				timeoutHolder = setInterval(startAnimation, 200);
				
				$('.search').keyup(function(event){
					var s=$(this).val();
					console.log(s);
					if(s == ""){
						stateNormal();
					}else{
						stateCenter();
					}
				}); 
				
				function stateCenter(){
					/* var queue = $('.aObjects').queue();
					$('.aObjects').queue(queue.slice(0,1)); */
					$('.aObjects').stop(true);
					animateToCenter=true;
				}
				function stateNormal(){
					/* var queue = $('.aObjects').queue();
					$('.aObjects').queue(queue.slice(0,1)); */
					$('.aObjects').stop(true);
					animateToCenter=false;
				}

				/* $('.search').focusin(function(){
					var queue = $('.aObjects').queue();
					$('.aObjects').queue(queue.slice(0,1));
					animateToCenter=true;
				}).focusout(function(){
					var queue = $('.aObjects').queue();
					$('.aObjects').queue(queue.slice(0,1));
					animateToCenter=false;
				}); */
					
				
				//setTimeout(function(){ clearTimeout(timeoutHolder)}, 5000)
				/* var animate=function(){
					for(var i=1;i<=50;i++){
						$("."+i).css("display","block");
						random(object="."+i);
					}		
				}
				var interval = setInterval(animate,3000);
				function random(){
					var width=$(window).width();
					var left = Math.floor(Math.random()*width);
					var top = Math.floor(Math.random()*700);
					var speed = Math.floor(Math.random()*5000)+5000;
					$(object).animate({left: left, top: top},speed);
				} */
			});
		</script>
		
	</body>
</html>