<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hiteks</title> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 		
		<meta name="Danny Glix" content="">
		<!--<meta name="Danny Glix" content="awerest - interactive agency">-->
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
					<div class="header-container" style="width:935px;margin:auto;font-family:CondorWide Medium;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a href="#intro" class="brand"><img alt="image" src="images/logo.png"></a>
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
		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="span12" style="margin:auto;">
						<div class="wrapper wrapper2" style="margin-top:-180px;">
							<div class="content-box">
								<div class="searchbox_style">
									<img style="z-index:100;position:relative;margin-top:21px;" class="first" src="images/first1.png" alt="first">
									<div class="back" style="">
										<form style="display:none" method="post" class="form">
										<input  type="text" name="text" class="search" />
										<a class="btn btn-default"  href="#">GO</a>
										</form>
									</div>
									<img style="z-index:100;position:relative;margin-top:21px;" class="second" src="images/second2.png" alt="first">
								</div>
							</div>
						</div>
					</div>	
					
					<?php
						$img=1;
						for($i=1;$i<=50;$i++){
							$img++;
							if($img==51){
								$img=1;
							}
							echo "<div class='$i aObjects' style='display:none;opacity:.3;position:absolute;z-index:1;left:50%;top:40%;'><img alt='icon' src='icon/$img.png'/></div>";
						}
					?>
				</div>	
			</div>
			<div class="footer-upper">
				<div class="wrapper">
					<p style="color:#000;">Expert Medial terminolgy simplified & explained with our easy search toolkit & advanced API. Anyone can use Hiteks, because everyone's time is valuable.</p>
					<p class="text" style="color:#000">Medicine's First and Only affordable & Accurate Clinical NLP Solution <a href="#" class="btn btn-mfast-5" style="margin-left:20px;"><img alt="image" src="images/licence-img.png" /> Licence it Now</a><a href="#" class="btn btn-mfast-5" style="margin-left:10px;"><img alt="image" src="images/video.png" /> Watch demo</a></p>
				</div>
			</div>
			<hr class="horizontal-line" />
			<div id="home_footer">	
				<div class="footer-wrapper">
					<div class="footer-blog1">
						<div id="footer_slider">
								<a>
									<img class="slider_img" src="img/footer_slider/jquery1.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
									
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery2.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery3.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery4.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery5.png" alt="" />	
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a> 
									<img class="slider_img" src="img/footer_slider/jquery6.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery7.png" alt="" />	
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery8.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<!-- <a>
									<div class="img_shadow">
										<img class="slider_img" src="img/footer_slider/iStock_000000409116_L2.jpg" alt="" />
									</div>
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a> -->
							</div>
					</div>
				<div class="footer-blog3">
				    <img alt="image" src="images/letter-breaks.png" style="float:left;" />
				    <ul>
					    <li>Hiteks. Medical Language Technology.</li>
					    <li>Achieve Clinical Interoperability ability and Semantic search</li>
					    <li>521 Fifth Ave, 32nd Floor. New York, NY 10175</li>
					    <li>+1 212.920.0929 info@hiteks.com @hiteks</li>
				    </ul>
				</div>
				<div class="company-names" style="clear:both;padding-top:15px">
					<img src="images/icon1.png" alt="" style="margin-right:20px; margin-left:12px;" />
					<img src="images/icon2.png" alt="" style="margin-right:20px;" />
					<img src="images/icon3.png" alt="" style="margin-right:20px;margin-top:5px" />
					<img src="images/icon4.png" alt="" style="margin-right:20px;" />
					<img src="images/icon5.png" alt="" style="margin-right:20px;" />
					<img src="images/icon6.png" alt="" style="" />
					<!-- <img src="images/icon1.png" alt="2" style="margin-right:18px; height:24px" class="firstnames" />
				    <img src="images/fda-logo-vector.png" alt="3" style="height:50px;padding-right:8px" />
					<img src="images/anolinx.png" alt="4" style="height:50px;width:80px"/>
					<img src="images/fda_logo.png" alt="5" style="height:43px" />
					<img src="images/acupera.png" alt="6" style="height:25px" />
					<img src="images/eellas_logo.png" alt="6" style="height:50px;margin-top:-10px" /> -->
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
					<img alt="image" src="images/big-skelton.png" class="big-skelton">
				</div>
			</div>
			<div style="clear:both;"></div>
			<!--<div class="fadeInUp delay animated hidden-phone" id="more">
				<a href="#services-top" class="m-btn a-btn blue big icn-only"><i class="icon-sort-down icon-3x pull-left"></i></a>
			</div>-->			
		</section>
	<!--start services intro footer
	
		<section id="intro">-->
	<!--start services-desktop header-->

	<!--start services-mobile header-->
			<!-- <section id="services-top-mobile" class="hidden-desktop">
				<h1 class="header">Services</h1>
				<p class="header">How awesome can it be?</p>
			</section> 
		</section>-->
		
	
		<section id="services-top">
	<!--start services-desktop header-->
			<section id="services-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
					<div class="page_style">
						<!-- <img src="images/services.png" alt="" /> -->
						<h1 class="header">About</h1>
					</div>
				<!--<p class="header">How awesome can it be?</p>-->
			</section>
	<!--start services-mobile header-->
			<section id="services-top-mobile" class="hidden-desktop">
				
					<h1 class="header"><!-- <img src="images/services.png" alt="" /> --> About</h1>
				
				<!--<p class="header">How awesome can it be?</p>-->
			</section>
		</section>
	<!--start services-->
		<section id="services">
			<div class="container" style="width:935px">
				<div class="row divide">
					<div class="span12" style="width:920px;">
					<p>
						Hiteks supports health care providers, researchers and insurers with responsive, high quality data systems that allow for quickly answering clinical, research and administrative questions.
					</p>
					
					
					<p>Hiteks Solutions was founded to support and promote advanced yet practical capabilities in Medical Informatics and Clinical Decision Support. Health care organizations seek to achieve an ability to work more intuitively and meaningfully with clinical data, which is necessary to compete in today’s and tomorrow’s healthcare environments. The ability to influence and monitor clinical decisions to enhance patient safety, ensure quality, control costs and discover new medical knowledge can only be achieved through user-friendly, efficient technologies and access to the right clinical information. Amidst the confusion set forth in the marketplace, Hiteks outlines a clear value proposition to our current and potential customers.</p>

					<p>Our focus is to provide the guidance and tools required for clinicians, researchers and administrators to make informed decisions. Once they can access information comfortably, they can use their expertise to choose amongst the thousands of data-driven recommendations available to better understand diseases and achieve quality care. Our core team of medical informaticists and clinicians approach problem-solving and decision-making with an emphasis that allows for our customers and partners to achieve better actionable information at the right time.</p>

					<p>Because our origins are from practicing patient care as clinicians and developing innovative medicines as researchers, we are sensitive to how we approach problems, engage with customers and deliver technologies. Healthcare at the end of the day is not too different from other industries, and informed consumers make for better customers. We pride ourselves on being able to educate professionals in health care industries to facilitate truly informed decision-making that takes patient outcomes, efficiencies and costs into consideration.</p>
					
					
					
						<ul class="thumbnails">
							<li class="span4" style="width:285px;">
								<div class="thumbnail">
									<i class="icon-cogs"></i>
									<h4>Careers</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										Innovative thinking and creative learning are part of the work culture at Hiteks. We have a young and vibrant work environment where new ideas are encouraged. The team consists of people from a diverse set of backgrounds and experiences. New employees benefit from the collaborative and one-on-one training via our mentoring programs.
									</p>
									<p>
										Our strategy is to learn from each engagement and use those experiences to craft out packaged products and services. The innovation at Hiteks does not halt when projects are delivered; in fact it takes a challenging trajectory that culminates into better offerings that serve a much larger audience. Employees are constantly challenged to think out of box and beyond the obvious. Our team is on the look out to create the next generation technology products and explore product centric collaborative ventures while retaining their individuality and independent thinking.
									</p>
								</div>
							</li>
							<li class="span4" style="width:285px;">
								<div class="thumbnail">
									<i class="icon-eye-open"></i>
									<h4>Services</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										With a deep understanding of population-based research using health informatics techniques, we focus our attention on providing tools to enable clinicians to assess and act on information quality issues which support public health, outcomes research, health economics and translational research & development.
									</p>
									<p>
										Through its partners and network of research-optimized clinical and research sites, Hiteks enables Electronic Clinical Research, including database studies, registries, health economics analyses, translational medicine and clinical trials.  Clinical Cloud™ also supports cross-center recruitment for industry-sponsored and other studies by using data-driven approaches to finding the most difficult to find patient records, or patients themselves.  The Clinical Cloud™ uses industry leading data transformations, data models and data visualization to accommodate all forms of phenotype and genotype data which can be used to support cutting-edge translational research programs.
									</p>
								</div>
							</li>
							<li class="span4" style="width:285px;">
								<div class="thumbnail">
									<i class="icon-stethoscope"></i>
									<h4>Hiteks Team</h4>
									<!--<span>HTML5 & CSS3 Valide Code</span>-->
									<p>
										As a company and as individuals, we are committed to improving the daily lives of clinicians, scientists and health administrators. By working closely with our clients and partners, we find methods to make business processes and technologies work together. Through meaningful interactions with our network, our business regularly finds out new capabilities and interests in those with whom we work. Our most precious interactions, of course, are with our team members. The Hiteks team is comprised of management and advisory board members with the experience necessary to direct the company’s day-to-day operations and growth strategy, while continually looking for innovative ways to meet the needs of clients and investors. 
									</p>
									<p>
										At Hiteks we love metamorphosing complex technology into simple and clean information at your fingertips. Founded by a group of creative entrepreneurs, Hiteks has an energetic and vibrant atmosphere.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="fullHeight"></div>
		</section>
		<!--<section id="hint1">
			<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank"><strong>HEADS UP!</strong> Click here to check all <strong>249 icons</strong> that we integrated in this template</a>
		</section>-->
	<!--start works header-->
		<section id="works-top">
	<!--start works-desktop header-->
			<section id="works-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="page_style">
					<!-- <img src="images/jj_natlgeodude.jpg" alt="" /> -->
					<h1 class="header">Products</h1>
				</div>


				<!--<p class="header">How awesome it is?</p>-->
			</section>
	<!--start works-mobile header-->
			<section id="works-top-mobile" class="hidden-desktop">
				<h1 class="header"><!-- <img src="images/jj_natlgeodude.jpg" alt="" /> --> Products</h1>
				<!--<p class="header">How awesome it is?</p>-->
			</section>
		</section>
	<!--start works-->
		<section id="works">
			<div class="container" style="width:935px;">
				<div class="row divide">
					<div class="span12" style="width:920px;">
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
					
					<!--<div class="span8 offset2">-->
						<h1>Hiteksite</h1>
						<p>Aoccdrnig to a rscheearch at Cmabrigde Uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, 
						the olny iprmoetnt tihng is taht the frist and lsat ltteer be at the rghit pclae.
						The rset can be a toatl mses and you can sitll raed it wouthit porbelm. 
						Tihs is bcuseae the huamn mnid deos not raed ervey lteter by istlef, but the wrod as a wlohe. Awesomeness, true story!</p>
						
						<h1>Unique Clinical Data Sources</h1>
						<p>Health authorities, Life Sciences, payers, providers and patient groups are asking for more meaningful, actionable, detailed clinical information to assess the appropriateness of medical therapies, differential diagnoses, medication safety, efficacy and comparability of populations in different geographies and demographics.  The information needed to support these requests means being able to find sources that can help address these questions.  The ideal sources can be identified through new networks of digital, de-identified, clinical databases which can be secured for multiple purposes.  With a deep understanding of population-based research using health informatics techniques, we have constructed for clients the tools to structure databases to support information needs in public health, outcomes research, health economics and drug research & development.</p>
						
						<h1>Next Generation Clinical Databases</h1>
						<p>Creating a structured set of databases that can be distributed through existing channels of Commercial Data Companies in the Life Sciences, Insurance and Consumer Health has a tremendous value that can be realized by understanding the type of data available, physician specialties represented, and the extent of linkage to other data sources and the longitudinal nature of the data.  The commercialization process would include setting up a refresh rate of availability of new data to meet the market needs (e.g. daily or weekly for marketing, and monthly or quarterly for epidemiology) as well as an efficient way to train on and to provide access to the data that allows for de-identification and the ability to drill down and conduct medical chart reviews in an electronic streamlined process.  Due to payer, clinical, regulatory and marketing needs, data needs to be efficiently analyzed and presented when clinical and business questions arise related to understanding patient populations and the medical market.  Access to real-time intelligence allows consumer of the data to leverage insight from multiple rich sources so that they can better understand diseases and their management.</p>
						
						<h1>Medical Intelligence</h1>
						<p>Understanding and responsibly using clinical information allows today’s healthcare organizations to leverage insight from rich sources of clinical data to identify targeted clinical data that better characterizes diseases and their management.  Both structured and unstructured clinical and administrative data can create a more complete picture of clinical populations.  Although data standardization complicates matters, there are straightforward ways to deal with this issue that enables apples-to-apples comparisons.  The challenge is no longer to simply report on clinical data, rather to conduct real-time analytics on clinical databases so that knowledgeable experts can become more informed.   To help support research, most medical centers have the doctors and patients who are eligible for and interested in participating in research, but not the optimal administration or facilities required to attract sponsored industry research.  Enhances in recruitment are possible for difficult to find patient records, or patients themselves although the number of potentially eligible patients who need to be screened increases significantly compared to manual identification methods for protocols.  Through the appropriate data and insight, consumers can apply algorithms and understand how patient data is stored, structured and transmitted to target only the most protocol-relevant patients with a high positive predictive value.</p>
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
			<div class="fullHeight"></div>
		</section>
		<!--<section id="hint2">
			<a href="http://twitter.github.com/bootstrap/base-css.html" target="_blank"><strong>Heads up!</strong> Click here to check all built-in shortcodes</a>
		</section>-->
	<!--start gallery header-->
		<section id="gallery-top">
	<!--start gallery-desktop header-->
			<section id="gallery-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="page_style">
					<!-- <img src="images/head7.png" alt="" /> -->
					<h1 class="header">Services</h1>
				</div>

				<!--<p class="header">Alternative Works Version</p>-->
			</section>
	<!--start gallery-mobile header-->
			<section id="gallery-top-mobile" class="hidden-desktop">
				<h1 class="header"><!-- <img src="images/head7.png" alt="" /> --> Services</h1>
				<!--<p class="header">Alternative Works Version</p>-->
			</section>
		</section>
	<!--start gallery-->
	<!--start thumbnails section-->
		<section id="gallery">
			<div class="container" style="width:935px;">
				<div class="row divide">
					<div class="span12" style="width:920px;">
					<!--<div class="span8 offset2">-->
						<h1>Services</h1>
						<p>With a deep understanding of population-based research using health informatics techniques, we focus our attention on providing tools to enable clinicians to assess and act on information quality issues which support public health, outcomes research, health economics and translational research & development.
						</p>
						<p>
							Using existing, available electronic healthcare data collected by most medical centers and doctors’ offices, or applying Hiteks’ tools and platform for data capture and processing, we work with customers in the following ways:
						</p>
						<h3>Electronic Clinical Research (Clinical Cloud™)</h3>
						<p>
							Through its partners and network of research-optimized clinical and research sites, Hiteks enables Electronic Clinical Research, including database studies, registries, health economics
						</P>
						<p>
							Through its partners and network of research-optimized clinical and research sites, Hiteks enables Electronic Clinical Research, including database studies, registries, health economics analyses, translational medicine and clinical trials.  Clinical Cloud™ also supports cross-center recruitment for industry-sponsored and other studies by using data-driven approaches to finding the most difficult to find patient records, or patients themselves.  The Clinical Cloud™ uses industry leading data transformations, data models and data visualization to accommodate all forms of phenotype and genotype data which can be used to support cutting-edge translational research programs.
						</p>
						<h3>Clinical Data Intelligence (Health Insights™)</h3>
						<p>
							Easy access to rich sources of clinical data to better understand diseases and their management are supported through the transformation of structured and unstructured clinical and administrative data and presented with an intuitive user-friendly interface that allows for population cohort selection, sub-setting, drill-down, slicing and dicing.  As a modern clinical data analytics system should, Health InsightsTM applies customizable queries against electronic clinical data.  Differentiating us from others, we do not require tedious, lengthy data standardization up-front, rather we conduct all the data standardization on the back-end using a unique ontology-creation approach that enables us to compare apples to apples. Health InsightsTM is the only tool on the market which has both an intuitive user-friendly interface and works on all types of data sources to support population-based analytics.
						</P>
						<h3>Data Processing (Data Xpress™)</h3>
						<p>
							Because more than half of all meaningful clinical information is captured as clinical documentation (through typed, dictated and/or transcribed processes) to use in progress notes, discharge summaries, radiology reports, consult notes, history & physical, etc., Hiteks has attracted the world leaders in structured data and natural language processing to its team.  Our experts use both open-source and proprietary frameworks to accomplish accurate pre-processing, parsing, tokenizing and medical concept and relationship structuring on electronic records, the internet, medical journals, and drug and device labels to present the results in a user-friendly interface.  Knowledge bases can be created through Data XpressTM  that allow for them to be plugged into other marketed Clinical Decision Support tools or into Health InsightsTM .
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
			<div class="fullHeight"></div>
		</section>
	<!--end thumbnails section-->
	<!--start lightboxes-->
		<!--<div id="gallery_1" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
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
		</div>-->
	<!--end lightbox section-->
		<!--<section id="hint3">
			<a href="http://twitter.github.com/bootstrap/components.html" target="_blank"><strong>Heads up!</strong> Click here to check all built-in components</a>
		</section>-->
	<!--start team header-->
		<section id="team-top">
	<!--start team-desktop header-->
			<section id="team-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="page_style">
					<!-- <img src="images/brain_fly.jpg" alt="" /> -->
					<h1 class="header">Support</h1>
				</div>

				<!--<p class="header">Coffees and Apple</p>-->
			</section>
	<!--start team-mobile header-->
			<section id="team-top-mobile" class="hidden-desktop">
					
					<h1 class="header"><!-- <img src="images/brain_fly.jpg" alt="" />  -->Support</h1>
			
				<!--<p class="header">Coffees and Apple</p>-->
			</section>
		</section>
	<!--start team-->
		<section id="team">
			<div class="container" style="width:935px;">
				<div class="row divide">
				<div class="span12" style="width:920px;">
					<!--<div class="span8 offset2">-->
						<h1>We are Hiteks</h1>
						<p class="center">
							As a company and as individuals, we are committed to improving the daily lives of clinicians, scientists and health administrators. By working closely with our clients and partners, we find methods to make business processes and technologies work together. Through meaningful interactions with our network, our business regularly finds out new capabilities and interests in those with whom we work. Our most precious interactions, of course, are with our team members. The Hiteks team is comprised of management and advisory board members with the experience necessary to direct the company’s day-to-day operations and growth strategy, while continually looking for innovative ways to meet the needs of clients and investors. 
						</p>
						<p>
							Our belief is that we can help our customers with better and more actionable clinical information at the right time. As in other disciplines, health care providers, researchers and insurers have reached a tipping point in that they can now have the ability to leverage the power of responsible, secure, and timely sharing of clinical knowledge from text-based documentation, medical journals, FDA drug labels and Clinical Trial Protocols.
						</p>
						<p>
							At Hiteks we love metamorphosing complex technology into simple and clean information at your fingertips. Founded by a group of creative entrepreneurs, Hiteks has an energetic and vibrant atmosphere.
						</p>	
						<p>
							The Hiteks team is comprised of individuals from diversified backgrounds; data management, portal design, user experience, financial services, pharmaceuticals, and healthcare.
						</p>
						<p>	
							This collective intelligence combined with a broad industry skills enables us to assist clients in leveraging technology to improve their business processes and gain a competitive advantage. 
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
			<div class="fullHeight"></div>
		</section>
	<!--start contact header-->
		<section id="contact-top">
	<!--start contact-desktop header-->
			<section id="contact-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<div class="page_style">
					<!-- <img src="images/skelton.png" alt="" /> -->
					<h1 class="header">Sign in</h1>
				</div>

				<!--<p class="header">Fill up our inbox, we like that</p>-->
			</section>
	<!--start contact-mobile header-->
			<section id="contact-top-mobile" class="hidden-desktop">
				<h1 class="header"><!-- <img src="images/skelton.png" alt="" /> --> Signin</h1>
				<!--<p class="header">Fill up our inbox, we like that</p>-->
			</section>
		</section>
	<!--start contact-->
		<section id="contact">
<div class="container" style="width:935px">
<div class="row divide">
<div class="span10" style="width:700px;">
<div class="row">
<form action="js/sendmail.php" method="post" id="contactForm">
<div class="span3">
<label>Name:</label>
<input type="text" name="name" value="" id="name" class="span3"/>
</div>
<div class="span3">
<label>Email:</label>
<input type="text" name="email" value="" id="email" class="span3"/>
</div>
<span class="honeypot">
<label>Honeypot:</label>
<input type="text" name="last" value="" id="last"/>
</span>
<div class="span6">
<label>Message:</label>
<textarea rows="6" name="message" class="span6"></textarea>
</div>
<div class="span6">
<div class="message"><div class="alert"></div></div>
<input type="submit" value="Send" class="m-btn blue"/>
</div>
</form>
</div>
</div>
<!--start sidebar-->
<div class="span2" id="address">
<p>NEW YORK<br>
521 Fifth Ave,<br> 32nd Floor New York,<br> NY 10175</p>
<p><abbr title="Phone">P:</abbr> +1-212-920-0929<br>
<abbr title="Fax">F:</abbr> +1-212-931-5508 <br></p>
</div>
</div>
</div>
<div class="fullHeight"></div>
</section>

	<!--start footer-->
		<section id="footer">
			<div class="container">
				<div class="row divide">
	<!--logo and copyright-->
					<div class="span3" style="margin-left:150px; width:120px;">
						<a href="#intro" class="brand"><img alt="image" src="images/logo.png"></a>
						<p>2013 © Hiteks</p><br>
						<!--<p>myway is product <br> of <a href="http://www.awerest.com" target="_blank">awerest</a></p><br>-->
						<div class="desinBy">
							<span class="design">Design by</span><br/>
							<span><a href="http://dannyglix.com">Glix</a> & James
							<a href="http://voris.org">Voris</a></span>
						</div>
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
			$('.search').click(function(){
				$('.back').css('background-image','url(images/search_background2.png)');
			}).focusout(function(){
				$('.back').css('background-image','url(images/search_background.png)');
			});
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
					minx = 0;
					miny= 0;
					var position = $('.footer-upper').position();
					height = position.top;
				}else{
					minx = $(window).width() / 2-200;
					width= $(window).width() / 2+50;
					height = $('.back').position().top + 200;
					miny = $('.back').position().top;
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
				
				$('.btn').on('click',function(){
					if($('.search').val().length > 0){
						stateNormal();
						setInterval(function(){
							$('.form').submit();
						},3000);
					}	
				});
				
				$('.search').keyup(function(event){
					var s=$(this).val();
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
				$(window).resize(function(){
					$('.search').focus();
				});

			});	
			$(window).resize(function(){
				$('.fullHeight').css({'height':$(window).height()});
			});
			setInterval(function(){
				if($('.search').val().length > 0){
					 $('.search').css({'background-image':'none'});
				}else{
					$('.search').css({'background-image':'url(images/placeholder.png)','background-repeat':'no-repeat'});
				}	 
			},1);
		</script>
		
	</body>
</html>