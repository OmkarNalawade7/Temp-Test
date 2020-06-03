<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$con = mysqli_connect('localhost', 'root', '', 'iwp');
if (!$con) {
	die("Connection failed:" . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$sql = "insert into query(name,email,phno,msg) values(?,?,?,?)";
	$stmt = mysqli_prepare($con, $sql);
	$stmt->bind_param("ssis", $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
	$stmt->execute();
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Lifecode Proteomics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="New Party Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- animation -->
	<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
	<!-- //animation -->
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
	<!-- //font -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		function validate() {
			var phno = document.forms["submitquery"]["phone"].value;
			var msg = document.forms["submitquery"]["message"].value;
			if (msg.length > 250) {
				alert("Message length exceeds 250 characters");
				return false;
			} else if (phno.length != 10 || isNaN(phno)) {
				alert("Incorrect phone number");
				return false;
			} else {
				return true;
			}
		}
	</script>


</head>

<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
		<div class="wthree-different-dot">
			<div class="head">
				<div class="container">
					<div class="navbar-top">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand logo ">
								<h1><a href="index.html">LifeCode <br> Proteomics </br></a></h1>
								<h3 class="heading-agileinfo" style="color : white"><span>Your Vision,Our Innovation.</span></h3>
							</div>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="index.html">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#services" class="scroll">Principal Companies</a></li>
								<li><a href="#gallery" class="scroll">Gallery</a></li>

								<!--
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">More</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="#client" class="scroll">Testimonials</a></li>
										<li><a href="#pricing" class="scroll">Pricing</a></li>
										<li><a href="#team" class="scroll">Team</a></li>
										<li><a href="#event" class="scroll">Events</a></li>
									</ul>
								</li>   
-->

								<li><a href="#book" class="scroll">Send Query</a></li>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</div>
			</div>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="slider">

						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function() {
								// Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager: true,
									nav: true,
									speed: 500,
									namespace: "callbacks",
									before: function() {
										$('.events').append("<li>before event fired.</li>");
									},
									after: function() {
										$('.events').append("<li>after event fired.</li>");
									}
								});
							});
						</script>
						<div id="top" class="callbacks_container-wrap">
							<ul class="rslides" id="slider3">
								<li>
									<div class="slider-info" data-aos="fade-left">
										<h6>WELCOME TO THE</h6>
										<h3>WORLD OF DIAGNOSTICS</h3>
										<div class="more-button">
											<!--											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>-->
										</div>
									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
										<h6>LIFECODE PROTEOMICS OFFERS</h6>
										<h3>COMPLETE DIAGNOSTIC SOLUTIONS</h3>
										<div class="more-button">
											<!--											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>-->
										</div>
									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
										<h6>SPECIALIZED SERVICES IN</h6>
										<h3> IMMUNOASSAY-CLIA & ELISA</h3>
										<!--
										<div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>
										</div>
-->
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">New Party</h4>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">About Us</h3>

			<h4 class="about">We, Lifecode Proteomics offer turnkey solutions for Pathology Laboratory & Diagnostic centre setup.Having experience of 25+ years in the field of Indian Diagnostics, Lifecode Proteomics intends to provide Highly Specialized and Professional Services in Immunoassay Platforms,Bio-Chemistry Automation,Point Of Care Systems,Blood Gas & Electrolyte Analyzers,HPLC Systems,Haematology Range,Molecular Platforms,Kits & Consumables for the same.</h4>

			<!--
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<h3>SPECIAL PROGRAMS</h3>
					<p>Enjoy the event throughout the entire night and do not sleep till the morning easy.</p>
					
					<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid" data-aos="fade-up">
					<div class="w3_agile_services_grid1">
						<img src="images/g2.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<h3>TOP PROGRAMS</h3>
					<p>Enjoy the event throughout the entire night and do not sleep till the morning easy.</p>
					
					<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid" data-aos="fade-left">
					<div class="w3_agile_services_grid1">
						<img src="images/g3.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<h3>NON-STOP PARTY</h3>
					<p>Enjoy the event throughout the entire night and do not sleep till the morning easy.</p>
					
					<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
-->
		</div>
	</div>
	<!-- services -->
	<div class="services jarallax" id="services">
		<h3 class="heading-agileinfo" data-aos="zoom-in">Our Principal Companies<span class="thr">We are the Authorized Resellers of following esteemed Diagnostics Corporations</span></h3>
		<div class="container">

			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1">

					<img src="images/1qiagen.png">
				</div>
			</div>


			<div class="col-md-4 ser-1" data-aos="fade-down">
				<div class="grid1">

					<img src="images/2suyog.png">
				</div>
			</div>


			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<img src="images/4mindray.png">
				</div>
			</div>


			<div class="col-md-4 ser-1" data-aos="fade-right">
				<div class="grid1">

					<img src="images/9medso.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-up">
				<div class="grid1">

					<img src="images/6sdBiosensor.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<img src="images/8rsz_alere.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<img src="images/2wd.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<img src="images/8iris.png">
				</div>
			</div>
			<div class="col-md-4 ser-1" data-aos="fade-left">
				<div class="grid1">

					<img src="images/9diasorin.png">
				</div>
			</div>



			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //services -->

	<!-- Portfolio section -->
	<section class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Snippets of our product range</h3>
			<div class="gallery-grids">
				<div class="tab_img">
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/QiaConnect.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/QiaConnect.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Rotaq.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Rotaq.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Qiaht.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Qiaht.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Cl900i.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Cl900i.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Cl1000i.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Cl1000i.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/bs480.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/bs480.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Bs600.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Bs600.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
						<a href="images/Bs240.png" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="images/Bs240.png" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper">
								<i class="fa fa-search-plus" aria-hidden="true"></i>

							</div>
						</a>
					</div>

					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</section>
	<!-- /Portfolio section -->
	<!-- Clients -->
	<!--
	<div class="clients-main jarallax" id="client">
		<div class="container">
			 Owl-Carousel 
			<h3 class="heading-agileinfo" data-aos="zoom-in">TESTIMONIALS<span class="thr">Events Is A Professionally Managed Event </span></h3>
			<div class="cli-ent" data-aos="fade-down">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/1.png" alt="" />
											<h4>Franklin</h4>
											<span>Lorem Ipsum</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/3.png" alt="" />
											<h4>Anderson</h4>
											<span>Lorem Ipsum</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/2.png" alt="" />
											<h4>Williamson</h4>
											<span>Lorem Ipsum</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
											Quisque nibh ipsum,Ut accumsan.</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
-->
	<!--			</div>-->
	<!--// Owl-Carousel -->
	<!--
		</div>
	</div>
-->
	<!--// Clients -->
	<!--
	<div class="pricing" id="pricing">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Pricing<span>Events Is A Professionally Managed Event</span></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g4.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<div class="pr-ta">
						<h3>Table deposit</h3>
						<p>Save the spot and be the first to party.</p>
						<span class="moto-color1_3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp; December 28, 2017</span>
						<div class="tabl-erat">
							<div class="col-md-5 ratt">
								<h6>$99.55</h6>
							</div>
							<div class="col-md-7 tag">
								<a href="#book" class="scroll">Book Now</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid" data-aos="fade-up">
					<div class="w3_agile_services_grid1">
						<img src="images/g5.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<div class="pr-ta">
						<h3>Table deposit</h3>
						<p>Save the spot and be the first to party.</p>
						<span class="moto-color1_3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp; December 28, 2017</span>
						<div class="tabl-erat">
							<div class="col-md-5 ratt">
								<h6>$99.55</h6>
							</div>
							<div class="col-md-7 tag">
								<a href="#book" class="scroll">Book Now</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid" data-aos="fade-left">
					<div class="w3_agile_services_grid1">
						<img src="images/g6.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<div class="pr-ta">
						<h3>Table deposit</h3>
						<p>Save the spot and be the first to party.</p>
						<span class="moto-color1_3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp; December 28, 2017</span>
						<div class="tabl-erat">
							<div class="col-md-5 ratt">
								<h6>$99.55</h6>
							</div>
							<div class="col-md-7 tag">
								<a href="#book" class="scroll">Book Now</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
-->
	<!-- register -->
	<div class="register-sec-w3l jarallax" id="book">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Send a Query<span class="thr">We will get back to you as soon
					as possible</span></h3>
			<div class="book-appointment" data-aos="zoom-in">
				<form name="submitquery" action="" onsubmit="return validate()" method="post">
					<div class="gaps">
						<p></p>
						<input type="text" name="name" placeholder="Name" required="" />
						<p></p>
						<input type="email" name="email" placeholder="Email" required="" />
						<p></p>
						<input type="text" name="phone" placeholder="Phone Number" required="" />
						<textarea name="message" placeholder="Your query... " required=""></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>

		</div>
	</div>
	<!-- //register -->
	<!--
 Team section 
<section class="team" id="team">
	<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">OUR DJ TEAM<span>Events Is A Professionally Managed Event</span></h3>
		<div class="team-grid-top">
			<div class="col-md-3 team1" data-aos="fade-right">
				<div class="inner-team1">
				<img src="images/t1.jpg" alt="" />
				<h3>Steve</h3>
				<h4>Lorem</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1" data-aos="fade-down">
				<div class="inner-team1">
				<img src="images/t3.jpg" alt="" />
				<h3>Smith</h3>
				<h4>Lorem</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1" data-aos="fade-up">
				<div class="inner-team1">
				<img src="images/t2.jpg" alt="" />
				<h3>Warner</h3>
				<h4>Lorem</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1" data-aos="fade-left">
				<div class="inner-team1">
				<img src="images/t4.jpg" alt="" />
				<h3>Watson</h3>
				<h4>Lorem</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</section>
-->
	<!-- //Team section -->




	<!-- Stats -->
	<!--
	<div class="stats news-w3layouts jarallax"> 
		<div class="container">    
			<div class="stats-agileinfo agileits-w3layouts">
				<div class="col-sm-3 col-xs-6 stats-grid" data-aos="fade-right">
					<div class="stats-img">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<p>hours of music were played</p>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000' data-delay='.5' data-increment="100">157000</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid" data-aos="fade-up">
					<div class="stats-img w3-agileits">
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
					</div>
					<p>parties last month</p>
-->
	<!--
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8' data-increment="1">850</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid" data-aos="fade-down">
					<div class="stats-img w3-agileits">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
					</div>	
					<p>visitors last month</p> 
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5000' data-delay='.5' data-increment="10">5000</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid" data-aos="fade-left">
					<div class="stats-img w3-agileits">
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</div>
					<p>residents played</p>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='110' data-delay='8' data-increment="1">110</div>
-->
	<!--
				</div>
				<div class="clearfix"></div>
			</div> 
-->
	<!-- Progressive-Effects-Animation-JavaScript -->
	<!--			<script type="text/javascript" src="js/numscroller-1.0.js"></script>-->
	<!-- //Progressive-Effects-Animation-JavaScript -->
	<!--		</div>-->
	<!--	</div>-->
	<!-- //Stats -->







	<!-- event schedule -->
	<!--
                <div class="event-time " id="event">
                    <div class="container">
						<h3 class="heading-agileinfo" data-aos="zoom-in">News & Events<span>Events Is A Professionally Managed Event</span></h3>
                        <div class="testi-info">
-->
	<!-- Nav tabs -->
	<!--
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">2016</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2017</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">2018</a>
                                </li>
                            </ul>
-->
	<!--                             Tab panes -->
	<!--
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="testi">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="images/g7.jpg" class="img-responsive" alt="">
-->
	<!--
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5>31 Dec,2016.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
-->
	<!--
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
-->
	<!--
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                    <img src="images/g1.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>31 Dec,2016.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
-->
	<!--
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/g3.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>31 Dec,2016.</h5>

                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
-->
	<!--                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>-->
	<!--
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/g5.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>31 Dec,2016.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right">
                                                   <img src="images/g8.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left">
                                                    <h5>31 Dec,2017.</h5>
-->
	<!--

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right">
                                                    <img src="images/g7.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news">
                                                    <h5>31 Dec,2017.</h5>

                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
-->
	<!--
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right">
                                                    <img src="images/g6.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left">
                                                    <h5>31 Dec,2017.</h5>

                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right">
                                                   <img src="images/g5.jpg" class="img-responsive" alt="">
-->
	<!--
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news">
                                                    <h5>31 Dec,2017.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right">
                                                    <img src="images/g4.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left">
                                                    <h5>31 Dec,2018.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
-->
	<!--
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right">
                                                    <img src="images/g3.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news">
                                                    <h5>31 Dec,2018.</h5>

                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right">
                                                   <img src="images/g2.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left">
                                                    <h5>31 Dec,2018.</h5>

                                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
-->
	<!--
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right">
                                                   <img src="images/g1.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news">
                                                    <h5>31 Dec,2018.</h5>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Madison Avenue</h6>
                                                    <a href="#" data-toggle="modal" data-target="#myModal">view details</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
-->
	<!--     //event schedule -->







	<!-- map -->
	<!--
	<div class="frame">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d690415.8595893653!2d-74.7110867032345!3d40.6473139136453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25896356b49af%3A0xf92eb4d6b65851e5!2sMadison+Ave%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1513403926503"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
-->
	<!-- //map -->





	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="f-bg-w3l">
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-right">
					<h2>Contact Information</h2>
					<ul class="con_inner_text">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>Flat No:A-1,Ashwini Co-op.Hsg. Soc.,<label>S.No.147,Plot No 10,Lane No A-17,Garmal,Dhayari,Pune-411041</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">lifecodeproteomics@gmail.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9371236345</li>
					</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<!--
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-down">
					<h2>Subscribe Newsletter</h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
-->
				<!--
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-left">
					<h3>Recent Events</h3>
					  <ul class="con_inner_text midimg">
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g5.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g6.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g7.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g8.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
-->



				<div class="clearfix"> </div>
			</div>
		</div>
		<p class="copyright">© 2020 | All Rights Reserved | Designed & Developed by Omkar Nalawade <a href="https://w3layouts.com/" target="_blank"></a></p>
	</div>
	<!-- //footer -->

	<!-- js for portfolio lightbox -->
	<script src="js/jQuery.lightninBox.js"></script>
	<script type="text/javascript">
		$(".lightninBox").lightninBox();
	</script>
	<!-- /js for portfolio lightbox -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script><!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->


	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 500);
			});
		});
	</script>
	<!-- //scrolling script -->
	<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
	<!-- animation effects-js files-->

</body>

</html>