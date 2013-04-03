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
				<div class="container" style="background:#CCCCCC;">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a href="#intro" class="brand"><img src="img/logo.png" alt=""></a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right" style="font-family:CondorWide Medium; font-size:10px;">
							<li><a href="#intro">Home</a></li>
							<li><a href="#services-top">About</a></li>
							<li><a href="#works-top">Products</a></li>
							<li><a href="#gallery-top">Services</a></li>
							<li><a href="#team-top">Support</a></li>
							<li><a href="#contact-top">Login in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<section id="intro" style="position:relative;">
			<div class="container">
				<div class="row">
					<div class="span12" style="margin-left:-150px;">
						<div class="wrapper wrapper2" style="margin-top:-180px;">
							<div class="content-box">
								<div class="searchbox_style">
									<img style="z-index:100;margin-top:21px;" class="first" src="images/first1.png" alt="first">
									<div class="back" style="">
										<form style="display:none" method="post" class="form">
										<input  type="text" name="text" class="search" />
										<a class="btn btn-default"  href="#">GO</a>
										</form>
									</div>
									<img style="z-index:100;margin-top:21px;" class="second" src="images/second2.png" alt="first">
								</div>
							</div>
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
			<div class="footer-upper">
				<div class="wrapper">
					<p style="color:#000;">HITEKS’ Mission is to improve the interoperability of clinical data and transform data into actionable intelligence.</p>
					<p class="text" style="color:#000">Medicine's First and Only Affordable, Accurate, Commercial & Extensible Clinical NLP Solution, <a href="#" class="btn btn-mfast-5" style="margin-left:20px;"><img alt="image" src="images/licence-img.png" /> Licence it Now</a><a href="#" class="btn btn-mfast-5" style="margin-left:10px;"><img alt="image" src="images/video.png" /> Watch demo</a></p>
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
									<p>We officially launched our <span style="color:#F24BD0">{</span><b> Medical Language Technology</b> <span style="color:#F24BD0">}</span> platform at HIMSS, New Orleans, March 3-7, 2013, Booth #5251</p>
									
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery2.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#1 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery3.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#2 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery4.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#3 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery5.png" alt="" />	
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#4 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a> 
									<img class="slider_img" src="img/footer_slider/jquery6.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#5 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery7.png" alt="" />	
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#6 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
								</a>
								<a>
									<img class="slider_img" src="img/footer_slider/jquery8.png" alt="" />
									<img src="img/footer_slider/humedica.png" alt="" />
									<img src="img/footer_slider/himss.png" alt="" />
									<p>#7 Meet Hiteks at New Orleans, March 3-7 Humedica Conference/HIMSS Booth #5221</p>
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
					    <li>HITEKS <b><span style="color:#F24BD0">{</span>  Medical Language Technology <span style="color:#F24BD0">}</span></b></li>
					    <li>Achieve Clinical Interoperability and Semantic Search</li>
					    <li>HITEKS Solutions Inc., 521 Fifth Ave, 32nd Floor. New York, NY 10175</li>
					    <li>+1 212.920.0929 info@HITEKS.com</li>
				    </ul>
				</div>
				<div class="company-names" style="clear:both;padding-top:15px">
					<img src="images/icon1.png" alt="" style="margin-right:13px; margin-left:12px;" />
					<img src="images/icon2.png" alt="" style="margin-right:13px;" />
					<img src="images/icon3.png" alt="" style="margin-right:13px;" />
					<img src="images/icon4.png" alt="" style="margin-right:13px;" />
					<img src="images/icon5.png" alt="" style="margin-right:13px; margin-bottom:10px;" />
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
				<h1 class="header"><span style="color:#F24BD0">{</span> About <span style="color:#F24BD0">}</span></h1>
			</section>
	<!--start services-mobile header-->
			<section id="services-top-mobile" class="hidden-desktop">
				<h1 class="header"><span style="color:#F24BD0">{</span> About <span style="color:#F24BD0">}</span></h1>
			</section>
		</section>
	<!--start services-->
		<section id="services">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<p class="center">
							HITEKS’ focus on unstructured data and the re-use of clinical information has come from years of understanding the clinical practice and research workflows that produce the data through an elaborate documentation and discovery process. The majority (>70%) of useful clinical data exist as unstructured clinical notes, medical journal articles, drug/device label information and 3rd party content that is applied to both patient care and research. Being able to categorize the clinical information so that it is understandable by humans and computers alike enables the information to be shared efficiently and meaningfully with the consumers of the data. Consumers of this data are doctors, payers, quality improvement, researchers, brand manufacturers, and patients. HITEKS uses a 3-pronged software development approach to solving problems: HITEKS’ proprietary tools, open-source and 3rd party software solutions which are integrated into a platform that is optimized for the processing of millions of documents and patient records in various domains (Clinical Documentation, Medical Journals, FDA Drug Labels, Clinical Trial Protocols, 3rd party content) through our { Medical Language Technology } platform. 
						</p>
						<p class="center">
							Licenses are provided to both small and big organizations in a B2B manner that enables HITEKS to support the growing needs and expansion opportunities entertained by clinical informatics and research organizations. Embedding HITEKS software and capabilities into other applications enables these 
						</p>
						<p class="center">
							organizations to manage and process textual clinical data in a way that otherwise would require expensive consulting from custom software development groups. HITEKS has the expertise to achieve its customer’s intended functionality through either Software as a Service, Graphical User Interfaces and local deployment into a customer’s internal environment. HITEKS is soon becoming a standard in Commercial Clinical NLP due to its flexibility in the use of multiple Controlled Medical Terminologies (SnomedCT, RXNORM, LOINC, MedDRA, ICD10, CPT, UMLS, etc.) and applying { Medical Language Technology } to multiple types of health care domains. 
						</p>
					</div>			
					<div class="span8">
						<ul class="thumbnails">
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-cogs"></i>
									<h4>Careers</h4>
									<p class="center">
										Innovative thinking and creative learning are part of the work culture at HITEKS. We have a young and vibrant work environment where new ideas are encouraged. The team consists of people from a diverse set of backgrounds and experiences. New employees benefit from the collaborative and one-on-one training via our mentoring programs.

										Our strategy is to learn from each engagement and use those experiences to craft out packaged products and services. The innovation at HITEKS does not halt when projects are delivered; in fact it takes a challenging trajectory that culminates into better offerings that serve a much larger audience. Employees are constantly challenged to think out of box and beyond the obvious. Our team is on the look out to create the next generation technology products and explore product centric collaborative ventures while retaining their individuality and independent thinking. 
									</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-eye-open"></i>
									<h4>Services</h4>
									<p class="center">
										With a deep understanding of population-based research using health informatics techniques, we focus our attention on providing tools to enable clinicians and their Health IT vendors’s systems to assess and act on information quality issues which support public health, outcomes research, health economics and translational research & development.

										Through its partners and network of research-optimized clinical and research sites, HITEKS enables Electronic Clinical Research, including database studies, registries, health economics analyses, translational medicine and clinical trials. Pharma uses of HITEKS products and services include cross-center recruitment for industry-sponsored studies by using data-driven approaches to match the most difficult to find patients by using details hidden in their clinical documentation. HITEKS provides Semantic Search that leads the industry in finding and visualizing all forms of phenotype and genotype data which can be used to improve care through efficiency, new insight and application of translational research programs. 
									</p>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<i class="icon-stethoscope"></i>
									<h4>Hiteks Team</h4>
									<p class="center">
										As a company and as individuals, we are committed to improving the daily lives of clinicians, scientists, patients and administrators. By working closely with our clients and partners, we find methods to make business processes and technologies work together. Through meaningful interactions with our network, our business regularly finds out new capabilities and interests in those with whom we work. Our most precious interactions, of course, are with our team members. The HITEKS team is comprised of management and advisory board members with the experience necessary to direct the company’s day-to-day operations and growth strategy, while continually looking for innovative ways to meet the needs of clients and investors. At HITEKS we love metamorphosing complex technology into simple and clean information at your fingertips. Founded by a group of creative entrepreneurs, HITEKS has an energetic and vibrant atmosphere. 
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!--start works header-->
		<section id="works-top">
	<!--start works-desktop header-->
			<section id="works-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header"><span style="color:#F24BD0">{</span> Products <span style="color:#F24BD0">}</span></h1>
			</section>
	<!--start works-mobile header-->
			<section id="works-top-mobile" class="hidden-desktop">
				<h1 class="header"><span style="color:#F24BD0">{</span> Products <span style="color:#F24BD0">}</span></h1>
			</section>
		</section>
	<!--start works-->
		<section id="works">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<h1>
							Hiteksite	
						</h1>
						<p class="center">
							According to a research at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind dose not read every letter by itself, but the word as a whole. <br>
							HITEKS follows an analogous path, allowing computers to read through medical text in a way where it doesn’t matter how a diagnosis or medication is written or represented. HITEKS’ { Medical Language Technology } knows all the lexical variations, word orders, synonyms and hyponyms possible in clinical text and stores clinical phrases (e.g. Shortness of Breath, Difficulty Breathing, Breathlessness) unambiguously (e.g. as ‘Dyspnea') in a database so that the concepts can be understood and used by other applications. Awesomeness, true story! 
						</p>
						<h1>
							Unique Clinical Data Sources
						</h1>
						<p class="center">
							Health authorities, Life Sciences, payers, providers and patient groups are asking for more meaningful, actionable, detailed clinical information to assess the appropriateness of medical therapies, differential diagnoses, medication safety, efficacy and comparability of populations in different geographies and demographics. The information needed to support these requests can be identified through new networks of digital, de-identified, clinical databases which can be secured for multiple purposes. With a deep understanding of population-based research using health informatics techniques, we have constructed for clients the tools to structure databases to support information needs in medical practice, public health, outcomes research, health economics, market research and pharma research & development.
						</p>
						<h1>
							Next Generation Clinical Databases
						</h1>
						<p class="center">
							Creating a structured set of databases from previously hidden and computer-inaccessible clinical documents has tremendous value. Practitioners and Researchers can create complex clinical queries to better understand the content of documents. Statistics can be generated to improve understanding of the content of such documents, such as the quantity and types of medical concepts (Chief Complaints, Diagnoses, Medications, Labs, Allergies, Genotypes, Phenotypes, etc.) present, the physician specialties represented, the extent of linkage to other data sources and the longitudinal nature of the data. Due to payer, clinical, regulatory and marketing needs, data needs to be efficiently analyzed and presented when clinical and business questions arise related to understanding patient populations and the medical market. Access to real-time intelligence allows consumer of the data to leverage insight from multiple rich sources so that they can better understand diseases and their management. 
						</p>
						<h1>
							Medical Intelligence
						</h1>
						<p class="center">
							Understanding and responsibly using clinical information allows today’s healthcare organizations to leverage insight from rich sources of clinical data to reveal information that better characterizes diseases and their management. Both structured and unstructured clinical and administrative data can create a more complete picture of clinical populations. Although data standardization complicates matters, there are straightforward ways to deal with this issue that enables apples-to-apples comparisons. The challenge is no longer to simply report on clinical data, rather to conduct real-time analytics on clinical databases so that knowledgeable experts can become more informed. To help support research, many medical centers have the doctors and patients who are eligible for and interested in participating in research, but not the optimal targeted mechanisms to match the patients with the right studies. Enhancements in recruitment are possible to find potentially eligible patients who need to be screened. 
						</p>						
					</div>
				</div>
				<div class="divider"></div>
			</div>
		</section>
	<!--start gallery header-->
		<section id="gallery-top">
	<!--start gallery-desktop header-->
			<section id="gallery-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header"><span style="color:#F24BD0">{</span> Services <span style="color:#F24BD0">}</span></h1>
			</section>
	<!--start gallery-mobile header-->
			<section id="gallery-top-mobile" class="hidden-desktop">
				<h1 class="header"><span style="color:#F24BD0">{</span> Services <span style="color:#F24BD0">}</span></h1>
			</section>
		</section>
	<!--start gallery-->
	<!--start thumbnails section-->
		<section id="gallery">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<p class="center">
							With a deep understanding of clinical decision support and population-based research using health informatics techniques, we focus our attention on providing tools to enable clinicians to assess and act on information. Using existing, available electronic healthcare data collected by most medical centers and doctors’ offices, and applying HITEKS’ { Medical Language Technology } platform to create clinical data interoperability and semantic search, we work with customers in the following ways: 
						</p>
						<p>
							<h3>
								Clinical Care Optimization
							</h3>
						</p>
						<p class="center">
							Because greater than 70% of all meaningful clinical information is captured as clinical documentation (through typed, dictated and/or transcribed processes) in the form of progress notes, discharge summaries, radiology reports, consult notes, history & physical, etc., HITEKS exposes the necessary data and applies it for purposes such as Medication Reconciliation, Active Problem List and Allergy Maintenance, and Semantic Search across Integrated Delivery Networks and other health enterprises. 
						</p>
						<p>
							<h3>
								Health Information Exchange
							</h3>
						</p>
						<p class="center">
							EUnambiguously structuring and coding rich sources of clinical documentation helps Health Exchanges to more reliably and responsibly transform structured and unstructured clinical and administrative data between parties. As a modern clinical data analytics and decision support system should, HITEKS applies customizable queries against unstructured clinical data so that understanding information from different sources does not require tedious, lengthy data standardization up-front. Data standardization can take place on the back-end using common ontology-creation approaches that enables accommodation of data into a standard Clinical Element Model.
						</p>
						<p>
							<h3>
								Research & Analytics
							</h3>
						</p>
						<p class="center">
							HITEKS facilitates the creation of Research Databases with structured clinical content from multiple sources linked by medical concepts & their relationships. Electronic Clinical Research to reveal novel indications for medication orders, linking clinical concepts across document sources, and better health economics understanding. HITEKS also supports cross-center recruitment for industry-sponsored and other studies by using data-driven approaches to finding the most difficult to find patients. 
						</p>						
					</div>
				</div>
			</div>
		</section>
	<!--end thumbnails section-->
	<!--start team header-->
		<section id="team-top">
	<!--start team-desktop header-->
			<section id="team-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header"><span style="color:#F24BD0">{</span> Support <span style="color:#F24BD0">}</span></h1>
			</section>
	<!--start team-mobile header-->
			<section id="team-top-mobile" class="hidden-desktop">
				<h1 class="header"><span style="color:#F24BD0">{</span> Support <span style="color:#F24BD0">}</span></h1>
			</section>
		</section>
	<!--start team-->
		<section id="team">
			<div class="container">
				<div class="row divide">
					<div class="span8 offset2">
						<h1>We are HITEKS</h1>
						<p class="center">
							HITEKS was founded to support and promote advanced yet practical capabilities in Medical Informatics and Clinical Decision Support. Health care organizations seek to achieve an ability to work more intuitively and meaningfully with clinical data, which is necessary to compete in today’s and tomorrow’s healthcare environments. The ability to influence and monitor clinical decisions to enhance patient safety, ensure quality, control costs and discover new medical knowledge can only be achieved through user-friendly, efficient technologies and access to the right clinical information. Amidst the confusion set forth in the marketplace, HITEKS outlines a clear value proposition to our current and future customers. 
						</p>
						<p class="center">
							Our focus is to provide the guidance and tools required for clinicians, researchers and administrators to make informed decisions. Once they can access information comfortably, they can use their expertise to choose amongst the thousands of data-driven recommendations available to better understand diseases and achieve quality care. Our core team of medical informaticists and clinicians approach problem-solving and decision-making with an emphasis that allows for our customers and partners to achieve better actionable information at the right time. 
						</p>
						<p class="center">
							Because our origins are from practicing patient care as clinicians and developing innovative medicines as researchers, we are sensitive to how we approach problems, engage with customers and deliver technologies. Healthcare at the end of the day is not too different from other industries, and informed consumers make for better customers. We pride ourselves on being able to educate professionals in health care industries to facilitate truly informed decision-making that takes patient outcomes, efficiencies and costs into consideration. 
						</p>
						<p class="center">
							As a company and as individuals, we are committed to improving the daily lives of clinicians, scientists and health administrators. By working closely with our clients and partners, we find methods to make business processes and technologies work together. Through meaningful interactions with our network, our business regularly finds out new capabilities and interests in those with whom we work. Our most precious interactions, of course, are with our team members. The HITEKS team is comprised of management and advisory board members with the experience necessary to direct the company’s day-to-day operations and growth strategy, while continually looking for innovative ways to meet the needs of clients and investors. 
						</p>
						<p class="center">
							At HITEKS we love metamorphosing complex technology into simple and clean information at your fingertips. Founded by a group of creative entrepreneurs, HITEKS has an energetic and vibrant atmosphere. This collective intelligence combined with a broad industry skills enables us to assist clients in leveraging technology to improve their business processes and gain a competitive advantage. 
						</p>						
					</div>
				</div>
			</div>
		</section>
	<!--start contact header-->
		<section id="contact-top">
	<!--start contact-desktop header-->
			<section id="contact-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
				<h1 class="header"><span style="color:#F24BD0">{</span> Sign in <span style="color:#F24BD0">}</span></h1>
			</section>
	<!--start contact-mobile header-->
			<section id="contact-top-mobile" class="hidden-desktop">
				<h1 class="header"><span style="color:#F24BD0">{</span> Sign in <span style="color:#F24BD0">}</span></h1>
			</section>
		</section>
	<!--start contact-->
		<section id="contact">
			<div class="container">
				<div class="row divide">
					<div class="span7">
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
								<div class="span7">
									<label>Message:</label>
									<textarea rows="6" name="message" class="span8"></textarea>
								</div>
								<div class="span7">
									<div class="message"><div class="alert"></div></div>
									<input type="submit" value="Send" class="m-btn blue"/>
								</div>
							</form>
						</div>
					</div>
	<!--start sidebar-->
					<div class="span2" id="address">
						<p>NEW YORK<br>
						521 Fifth Ave,<br>
						32nd Floor New York,<br>
						NY 10175<br></p>
						<p><abbr title="Phone">P:</abbr>+1-212-920-0929<br>
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
						<a href="#intro" class="brand"><img src="img/logo.png" alt=""></a>
						<p>2013 © Hiteks</p><br><br><br><br><br><br>
						<p>
							<b>Design by</b><br>
							<span>
								<a href="http://dannyglix.com">Glix</a> & James
								<a href="http://voris.org">Voris</a>
							</span>
						</p>
					</div>
	<!--footer menu-->
					<div class="span2 offset4">
						<ul>
							<li><h5>Menu</h5></li>
							<li><a href="#intro">Home</a></li>
							<li><a href="#services-top">About</a></li>
							<li><a href="#works-top">Products</a></li>
							<li><a href="#gallery-top">Services</a></li>
							<li><a href="#team-top">Support</a></li>
							<li><a href="#contact-top">Login in</a></li>
						</ul>
					</div>
	<!--link to social networks-->
					<div class="span2 offset1">
						<ul>
							<li><h5>Social</h5></li>
							<li><a class="facebook" href="http://www.facebook.com/awerest" target="_blank">Facebook</a></li>
							<li><a class="twitter" href="http://www.twitter.com/awerest" target="_blank">Twitter</a></li>
							<li><a class="google" href="https://plus.google.com/u/0/104533843132286032110/posts" target="_blank">Google+</a></li>
							<li><a class="instagram" href="http://www.instagram.com/awerest" target="_blank">Instagram</a></li>
							<li><a class="pinterest" href="http://www.pinterest.com/awerest" target="_blank">Pinterest</a></li>
							<li>&nbsp;</li>
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
					width=$(window).width()-150;
					minx = 0;
					miny= 0;
					var position = $('.footer-upper').position();
					height = position.top;
				}else{
					minx = $(window).width() / 2-300;
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
				$(".first").animate({'margin-left':'-200'},2000);
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