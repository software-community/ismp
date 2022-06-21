<?php
	include('elem/connection.php');
	$sql = "UPDATE website_view SET views = views+1 WHERE id = 'website'";
	$conn->query($sql);
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>
	Home | ISMP'20 IIT Ropar
	</title>

	<?php $root_path = '';
	include("elem/stylesheets.php"); ?>


	<style>
		@media (max-width: 660px) {}
	</style>
	<style>
		/*Video Box*/
		.video-box {
			width: 97%;
			margin: auto;
			margin-bottom: 20px;
		}

		@media (max-width: 660px) {
			.video-box {
				width: 92%;
				margin: auto;
			}
		}
	</style>
	<style type="text/css">
		/* Container */
		.container {
			width: 90% !important;
			max-width: 2000px !important;
		}

		@media (max-width: 660px) {
			.container {
				width: 100% !important;
				max-width: 2000px !important;
			}
		}
	</style>
	<style type="text/css">
		/* Homepage Heading */
		.title{
			font-family: 'Roboto Slab';
			font-size:50px;
		}
		.color-head {
			color: #f44336;
		}
		.head-title-container{
			width:600px !important; 
			position:absolute; 
			right:0; 
			top:-125px;
		}
		.head-quote{
			margin-top:30px; 
			font-family:'Merienda One';
			font-size:20px;
		}
		@media (max-width: 660px) {
			.title{
				font-size:44px !important;
			}
			.head-title-container{
				max-width: 320px !important;
				width:90% !important;
				right:20px !important;
			}
			.head-quote{
				font-size:16px !important;
			}
		}
		@media (max-width: 290px) {
			.title{
				font-size:30px !important;
			}
			.head-quote{
				font-size:14px !important;
			}
		}
	</style>
	<style type="text/css">
		/* IITRPR Logo */
		.iitrpr_logo {
			width: 200px;
			height: 220px;
			margin: auto;
			margin-top: -150px;
			margin-bottom: 50px;
		}

		@media (max-width: 660px) {
			.iitrpr_logo {
				width: 100px !important;
				height: 110px !important;
				margin-top: -70px !important;
			}
		}
	</style>
	<style type="text/css">
		/* Carousel container */
		.back-car {
			background-image: url('images/elem/back/carousel.jpg');
			background-size: 100% auto;
			padding: 10% 5%;
			background-position: center center;
			background-attachment: fixed;
		}

		.cont-car {
			/*transform: perspective(1000px) rotateY(-15deg) ;*/
			width: 100%;
		}

		.back-car .car-head {
			width: 80%;
			font-size: 28px;
			color: #efe;
			margin: auto;
			margin-bottom: 25px;
			text-align: left;
			font-family: 'Source Sans Pro';
			letter-spacing: 1px;
			display: block;
			line-height: 45px;
			text-align: center;
		}

		.car-head-col {
			font-size: 45px;
			color: #f44336;
		}

		@media (max-width: 660px) {
			.back-car {
				background-size: auto 100%;
				background-origin: 100px 100px;
			}

			.back-car .car-head {
				width: 90%;
				font-size: 20px;
				line-height: 40px;
				text-align: left;
				margin-top: 10%;
				margin-bottom: 0;
				display: block;
				text-align: center;
			}

			.back-car .car-head-col {
				font-size: 28px;
			}

			.cont-car {
				transform: perspective(1000px) rotateY(0deg);
				margin: auto;
			}

			.car-head-col {
				font-size: 100px;
				color: #f44336;
			}
		}
	</style>
	<style type="text/css">
		/* Body Segments */
		.segment {
			padding-bottom: 4%;
		}

		.segment p {
			width: 80%;
			margin: auto;
		}

		.segment-head {
			font-family: 'Source Sans Pro';
			font-size: 40px;
			margin-bottom: 20px;
			width: 100%;
			padding: 1.5% 3%;
			color: white;
			font-weight: 400;
		}

		.caps {
			font-family: 'Montserrat' !important;
			font-size: 28px !important;
			letter-spacing: 5px !important;
			text-align: center !important;
			margin-bottom: 40px !important;
		}

		.segment-body {
			font-family: 'Source Sans Pro';
			font-size: 22px;
			line-height: 34px;
			color: #D0EEFF;
			padding: 0.5% 3%;
			font-weight: 300;
		}

		.segment-body-col {
			color: #f44336;
			font-weight: 400;
		}

		@media (max-width: 660px) {
			.segment-head {
				font-size: 40px;
			}

			.caps {
				font-size: 24px !important;
			}

			.segment-body {
				font-size: 21px;
				line-height: 36px;
			}

			.segment p {
				width: 95%;
				margin: auto;
			}
		}
	</style>
	<style type="text/css">
		/* Button */
		.button {
			position: relative;
			display: block;
			background-color: white;
			text-align: center;
			overflow: hidden;
		}

		.button span {
			font-size: 20px;
			padding: 25px;
			line-height: 50px;
			font-family: 'Montserrat';
			letter-spacing: 3.5px;
			color: #333333;
			z-index: 3;
		}

		.button::before {
			content: '';
			background-color: #f44336;
			width: 0px;
			height: 100px;
			margin-bottom: -100px;
			display: block;
			top: 0;
			z-index: 2;
			-webkit-transition: all 200ms ease-in-out;
			-moz-transition: all 200ms ease-in-out;
			-o-transition: all 200ms ease-in-out;
			-ms-transition: all 200ms ease-in-out;
			transition: all 200ms ease-in-out;
		}

		.button:hover::before,
		.button:focus::before {
			width: 100%;
		}

		@media (max-width: 660px) {
			.button span {
				font-size: 14px;
				padding: 15px;
				line-height: 50px;
				letter-spacing: 3.5px;
			}
		}
	</style>
	<style type="text/css">
		/* Display Card */
		.dispcard {
			width: 100%;
			overflow: hidden;
			background-color: white;
			display: block;
			position: relative;
			height: 95%;
			margin: 25px 0px !important;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			-o-transition: all 300ms ease-in-out;
			-ms-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
		}

		.dispcard-more {
			color: #999999;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			-o-transition: all 300ms ease-in-out;
			-ms-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
		}

		.dispcard:hover .dispcard-more,
		.dispcard:focus .dispcard-more {
			color: #222222;
		}

		.dispcard:hover,
		.dispcard:focus {
			box-shadow: 0px 0px 15px 1px #00313A;
		}

		.dispcard img {
			width: 100%;
			display: block;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			-o-transition: all 300ms ease-in-out;
			-ms-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
			z-index: 1;
		}

		.dispcard-text {
			background-color: white;
			z-index: 2;
			position: relative;
		}

		.dispcard-text::before {
			content: '';
			height: 100px;
			width: 110%;
			display: block;
			margin-bottom: -120px;
			margin-left: -30px;
			position: absolute;
			top: 15px;
			transform: rotateZ(-3deg);
			background-color: white;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			-o-transition: all 300ms ease-in-out;
			-ms-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
			z-index: 1;
		}

		.dispcard:hover .dispcard-text::before,
		.dispcard:focus .dispcard-text::before {
			top: -30px;
		}

		.dispcard-sub-head {
			margin-left: 20px !important;
			margin-right: 20px !important;
			font-family: 'Georgia';
			font-size: 18px;
			font-style: italic;
			font-weight: bold;
			margin-top: 25px !important;
			color: #333333;
			z-index: 3;
			position: relative;
		}

		.dispcard-head {
			margin-left: 20px !important;
			margin-right: 20px !important;
			font-family: 'Montserrat';
			font-size: 30px;
			letter-spacing: 0.15em;
			margin-top: 25px !important;
			color: #333333;
			text-decoration: none;
			color: #d62518;
			z-index: 3;
			position: relative;
			-webkit-transition: all 300ms ease-in-out;
			-moz-transition: all 300ms ease-in-out;
			-o-transition: all 300ms ease-in-out;
			-ms-transition: all 300ms ease-in-out;
			transition: all 300ms ease-in-out;
		}

		.dispcard:hover .dispcard-head,
		.dispcard:focus .dispcard-head {
			color: #3e1916;
		}

		.dispcard:hover img,
		.dispcard:focus img {
			transform: scale(1.2);
		}

		.dispcard-desc {
			margin: auto !important;
			font-family: 'Arial';
			font-size: 17px;
			line-height: 34px;
			margin-top: 25px !important;
			color: #333333;
			margin-bottom: 25px !important;
			z-index: 3;
			position: relative;

			width: 90% !important;
		}
	</style>
	<style type="text/css">
		/* AOS Custom Animation */
		[data-aos="fade-up-little"] {
			position: relative;
			top: 80px;
		}

		[data-aos="fade-up-little"].aos-animate {
			top: 0px;
		}
	</style>
	<style type="text/css">
		/* Team container */
		.back-team {
			background-image: url('images/elem/back/team.jpg');
			background-position: center;
			background-size: 100% auto;
			background-attachment: fixed;
			width:100%;
		}

		.back-team .team-head {
			width: 80%;
			font-size: 46px;
			color: white;
			margin-top: 70px;
			margin-left: 100px;
			margin-bottom: 0;
			text-align: left;
			font-family: 'Source Sans Pro';
			display: block;
			padding:0;
		}

		.team-head-col {
			font-size: 64px;
			color: #f44336;
			font-style: italic;
		}

		.back-team .team-des {
			width: 50%;
			font-size: 26px;
			color: white;
			margin:auto;
			text-align: left;
			font-family: 'Source Sans Pro';
			display: block;
			line-height: 50px;
			text-align:center;
		}

		@media (max-width: 660px) {
			.back-team {
				background-size: auto 100%;
				background-origin: 100px 100px;
			}

			.back-team .team-head {
				width: 100%;
				font-size: 26px !important;
				margin-left: 30px;
			}

			.team-head-col{
				font-size:46px;
			}

			.back-team .team-des {
				width: 85%;
				margin:auto;
				font-size:22px !important;
			}
		}
	</style>
	<style>
		/*Questions?*/
		.ques {
			background-color: #f5f5f5;
			padding-top: 40px;
			padding-bottom: 100px;
			position: relative;
			overflow: hidden;
		}

		.ques-head {
			font-family: 'Source Sans Pro';
			font-size: 34px;
			vertical-align: middle;
			font-weight: 400;
			margin-left: 50px;
		}

		.ques-mark {
			height: 100%;
			width: auto;
			position: absolute;
			top: 0;
			right: 0;
			/* margin-bottom: 100px;
			margin-top: -50px;
			margin-right: 100px; */
			opacity: 0.6;
		}

		.search-box {
			margin-top: 10px;
		}

		@media (max-width: 660px) {
			.ques {
				text-align: center;
			}

			.ques-head {
				margin: 0;
			}

			.ques-mark {
				margin-right: 0%;
			}
		}
	</style>
	<style>
		.achievements {
			background-image: url('images/elem/back/achievements.jpg');
			perspective: 2px;
			padding-top: 40px;
			padding-bottom: 100px;
		}
	</style>
</head>


<body>

	<!-- Loader -->
	<div class="loader-back">
		<div class="loader">
			<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
				<path fill="#f44236" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				</path>
			</svg>
		</div>
	</div>
	<div class="body-cont">
		<?php include("elem/navbar_trans.php"); ?>
		<div class="page-header header-filter" data-parallax="true" style="background-image: url('./images/index/profile.jpg');">
			<div class="container">
				<div class="row">
					<!--<div class="col-md-5">
					</div>-->
					<div class="text-right head-title-container">
						<h1 class="title" data-aos="zoom-in-left" data-aos-delay="1000" data-aos-duration="800">
							<font class="color-head">I</font>nstitute <font class="color-head">S</font>tudent <font class="color-head">M</font>entorship <font class="color-head">P</font>rogramme
						</h1>
						<h4 data-aos="fade-up" data-aos-delay="1400" data-aos-duration="800" class="head-quote"><i class="fa fa-quote-left color-head" aria-hidden="true"></i>&nbspEscorting you on this new journey&nbsp<i class="fa fa-quote-right color-head" aria-hidden="true"></i></h4>
						<br>
						<a href="https://www.youtube.com/watch?v=rT1mCQEhkX4" target="_blank" class="btn btn-danger btn-raised btn-lg" data-aos="fade-up" data-aos-delay="1800" data-aos-duration="800">
							<i class="fa fa-play"></i> Watch video
						</a>
					</div>
				</div>
				<div class="row">
					<br><br><br><br>
				</div>
			</div>
		</div>
		<div class="main">

			<!-- IITRPR Logo -->
			<div class="container" style="background-color: #054854; width: 100% !important; margin-bottom:-5px;">
				<div class="container-fluid">
					<div class="row">
						<img src="images/logo/iitrpr.png" class="iitrpr_logo logo_img">
					</div>
				</div>
			</div>

			<!-- Mission -->
			<div class="segment" style="background-color: #054854;">
				<p class="segment-head" data-aos="fade">
					Mission
				</p>

				<p class="segment-body" data-aos="fade">
					<font class="segment-body-col">Institute Student Mentorship Program</font> (ISMP) is a student initiative of IIT Ropar, which aims to provide a comprehensive and in-depth knowledge to freshmen on critical issues like academics, co and extra-curricular activities and how to bring about an optimum balance between them which proves decisive in shaping an individual's contentment levels in the institute.
				</p><br><br style="line-height: 10px;">
				<p class="segment-body" data-aos="fade">
					To ensure this, every fresher is allotted a mentor who obviously is a senior student with substantial experience in plethora of matters to guide the freshmen through the transition process. The mentors are selected through a rigorous process to make sure they can guide mentees to take informed decisions in all spheres.
				</p>
			</div>

			<!-- Achievements -->
			<div class="achievements parallax-bg">
				<div class="container" style="margin-top: 40px;">
					<div class="segment">
						<p class="segment-head caps">
							ACHIEVEMENTS
						</p>
						<div class="row">
							<div class="video-box">
								<iframe width="100%" height="400px" src="https://www.youtube.com/embed/AVEozYc5Zm4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="dispcard" data-aos="fade" data-aos-delay="0">
									<img src="images/achievements/the_asia.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Ranking
										</p>
										<p class="dispcard-head">
											THE ASIA
										</p>
										<p class="dispcard-desc">
											Out of 350 ranked universities maximum is from Japan followed by China. India has 56 universities in the list with two in the top 50 - IISc Bangalore 36th and HOLD YOUR BREATH, IITRopar 47th.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dispcard" data-aos="fade" data-aos-delay="0">
									<img src="images/achievements/the_young.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Ranking
										</p>
										<p class="dispcard-head">
											THE Young
										</p>
										<p class="dispcard-desc">
											IIT Ropar emerges as the Top Indian Institution in Times Young Univeristy Rankings 2020. It is ranked highest in the nation in Young University Rankings 2020. It is among top 70 young universities with 62nd Rank in the world.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dispcard" data-aos="fade" data-aos-delay="0">
									<img src="images/achievements/nirf.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Ranking
										</p>
										<p class="dispcard-head">
											NIRF
										</p>
										<p class="dispcard-desc">
											Indian Institute of Technology, Ropar has been ranked 39th in the overall category and climbed to rank 25th in the Engineering category in the latest India Rankings 2020 by the National Institutional Ranking Framework (NIRF).
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Carousel and Campus Life -->
			<div style="background-color:black; height:120%; border:0.1px solid transparent">
				<div class="back-car">
					<div class="row" style="width:100% !important; margin:0 !important">
						<div class="col-md-8 order-md-4">
							<div class="cont-car" data-aos="fade">
								<?php
								include('elem/connection.php');
								include('elem/carousel.php');
								?>
							</div>
						</div>
						<div class="col-md-4" data-aos="fade" data-aos-delay="100">
							<div class="row">
								<div class="car-head" data-aos="fade">
									Take a subtle <font class="car-head-col">look</font> at the infrastructure and the flora and fauna of this beautiful institution through the eyes of its skillful photographers.....
								</div>
							</div>
							<div class="row">
								<a class="button" href="campus_life.php" style="margin:auto; margin-top:30px; margin-bottom: 50px;" data-aos="fade" data-aos-delay="100">
									<span>
										VIEW CAMPUS LIFE
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fests -->
			<div style="background-color: #054854;  padding-top:40px; padding-bottom:100px;">
				<div class="container" style="margin-top: 40px;">
					<div class="segment">
						<p class="segment-head caps">
							FESTS
						</p>
						<div class="row">
							<div class="col-md-4">
								<a href="https://advitiya.in/" class="dispcard" data-aos="fade" data-aos-delay="0">
									<img src="images/fests/advitiya.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Technical Fest
										</p>
										<p class="dispcard-head">
											ADVITIYA
										</p>
										<p class="dispcard-desc">
											An ambience of tech, with air of celebration, a plethora of imagination, and constellation of celebrities, Advitiya
											<br>
											<font class="dispcard-more">Read More...</font>
										</p>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.zeitgeist.org.in/" class="dispcard" data-aos="fade" data-aos-delay="200">
									<img src="images/fests/zeitgeist.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Cultural Fest
										</p>
										<p class="dispcard-head">
											ZEITGEIST
										</p>
										<p class="dispcard-desc">
											All colours of life will come alive in this stunning festival of celebration and zeal, the Zeitgeist
											<br>
											<font class="dispcard-more">Read More...</font>
										</p>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.facebook.com/aarohan.iitrpr/" class="dispcard" data-aos="fade" data-aos-delay="400">
									<img src="images/fests/aarohan.jpg">
									<div class="dispcard-text">
										<p class="dispcard-sub-head">
											Sports Fest
										</p>
										<p class="dispcard-head">
											AAROHAN
										</p>
										<p class="dispcard-desc">
											Our sports fest, Aarohan, is renowned for working wonders! Because as they say, "I can't do it" never accomplished anything but, "I'll try" has performed miracles!
											<br>
											<font class="dispcard-more">Read More...</font>
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Team -->
			<div style="background-color:black; height:120%; border:0.1px solid transparent">
				<div class="back-team">
					<div class="row" style="width:100% !important;">
						<div class="team-head" data-aos="fade">
							<font class="team-head-col">Our Team</font>
						</div>
					</div>
					<div class="row" style="width:100% !important; margin:0;">
						<div class="team-des" data-aos="fade">
							A team with members that are willing to be there for you.<br>We, team ISMP, promise you days full of excitement and thrill!
						</div>
					</div>
					<div class="row" style="width:100%; margin: auto; ">
						<a class="button" href="our_team.php" style="margin:auto; width:300px; margin-top: -30px; margin-bottom: 70px;" data-aos="fade" data-aos-delay="100">
							<span>
								MEET OUR TEAM
							</span>
						</a>
					</div>	
				</div>
			</div>

			<!-- Blogs -->
			<div style="background-color: #054854;  padding-top:40px; padding-bottom:100px;">
				<div class="container" style="margin-top: 40px;">
					<div class="segment">
						<p class="segment-head caps">
							BLOGS
						</p>

						<div class="row">
							<div class="col-md-4" data-aos="fade">
								<div class="blog">
									<a href="blogs/places_to_visit_near_ropar.php">
										<img src="images/blogs/thumbs/places_to_visit_near_ropar.jpg">
										<div class="blog-title">
											Places to visit near Ropar
										</div>
										<div class="blog-desc">
											I don’t know if people would consider it a place worth visiting or not but for me its surely a bliss and I would surely recommend everyone to visit the beautiful...
										</div>
										<div class="blog-read-more">
											Read More
										</div>
										<div class="blog-auth blog-no-sep">
											<div class="blog-auth-photo">
												<img src="images/blogs/ppl/team-avatar.jpg">
											</div>
											<div class="name">ISMP Team</div>
											<div class="date">Jun 27 '20 · 13 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'places_to_visit_near_ropar'; include('elem/blog_count_shower.php'); ?></div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4" data-aos="fade">
								<div class="blog">
									<a href="blogs/what_to_expect_in_college.php">
										<img src="images/blogs/thumbs/what_to_expect_in_college.jpg">
										<div class="blog-title">
											What to expect in college?
										</div>
										<div class="blog-desc">
											You made it. The continuous hard work of two years (or maybe more?) to crack that one dreaded exam: the JEE Advanced. Remember the sleepless nights to solve that one...
										</div>
										<div class="blog-read-more">
											Read More
										</div>
										<div class="blog-auth blog-no-sep">
											<div class="blog-auth-photo">
												<img src="images/blogs/ppl/deepan_maitra.jpg">
											</div>
											<div class="name">Deepan Maitra</div>
											<div class="date">Jul 2 '20 · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'new_1'; include('elem/blog_count_shower.php'); ?></div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4" data-aos="fade">
								<div class="blog">
									<a href="blogs/facilities.php">
										<img src="images/blogs/thumbs/facilities.jpg">
										<div class="blog-title">
											Facilities
										</div>
										<div class="blog-desc">
											IIT ROPAR aims at providing best possible resources to every student living on campus. To ensure ease of living, the students can avail the following...
										</div>
										<div class="blog-read-more">
											Read More
										</div>
										<div class="blog-auth blog-no-sep">
											<div class="blog-auth-photo">
												<img src="images/blogs/ppl/rajmohini_soni.jpg">
											</div>
											<div class="name">Rajmohini Soni</div>
											<div class="date">Jul 6 '20 · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'facilities'; include('elem/blog_count_shower.php'); ?></div>
										</div>
									</a>
								</div>
							</div>
						</div>

						<div class="row">
							<a href="blogs.php" style="margin:auto; color:white; margin-top:50px;font-family:'Source Sans Pro'; text-decoration:none; font-size:20px;">
								SEE MORE
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Questions -->
			<div class="ques">
				
				<div class="container" style="margin-top: 40px;">
				<img class="ques-mark parallax-bg" src="images/elem/question/ques-mark.png">
					<font class="ques-head">
						Questions
					</font>
					<div class="search-box ">
						<input type="text" class="search" name="search_faq" placeholder="Type keywords to find answers">
						<div class="search-button">
							<svg height="30" viewBox="0 0 24 24" width="30">
								<path d="M0 0h24v24H0z" fill="none" />
								<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" style="fill:rgb(200,200,200)" />
							</svg>
						</div>
					</div>
					<div class="row">
						
						<div class="col-fluid">
							<a class="button" href="contact_us.php" style="margin:auto; margin-top:30px; margin-bottom: 50px;" data-aos="fade">
								<span>
									<i class="fa fa-home" style="font-size:1.2em; padding-top: 2px; color:#444;"></i>&nbsp&nbspCONTACT US
								</span>
							</a>
							<a class="button" href="http://www.iitrpr.ac.in/jee-aspirants/register.php" style="margin:auto; margin-bottom:50px;" data-aos="fade" target="_blank" rel="noopener noreferrer">
								<span>
									<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-question"></i>&nbsp&nbspASK A QUESTION
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		
			
		
		

		
		
		<!-- Testimonials -->
		<div class="testimonial">
			<div class="cd-testimonials-wrapper cd-container" data-aos="fade" style="margin:0; margin-bottom: -20px;">
				<p class="testimonial-head" style="font-family: 'Montserrat' !important; font-size:24px !important; letter-spacing: 1px !important; margin-bottom:30px !important;">TESTIMONIALS</p>
				<ul class="cd-testimonials">
					<li>
						<div class="cd-author">
							<img src="images/testimonial/aneeket.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Aneeket</li>
								<li>Computer Science and Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>Ropar was a new place, as it was for other freshers. Away from freinds and family, I felt lonely initially, had signs of homesickness. At first, it felt impossible to spend 4 years of my life here, but thanks to the ISMP programme here. The activities of ISMP gives the opportunity to meet other people on campus, make new freinds and gather experiences. I got to know about the various clubs at the college. Also, each student gets a mentor from second year who gives you breif idea of the functioning of the college and provide tips for balancing studies and co curricular. After 10 days of this programme, this place felt home, with a new family of new freinds. In short, it's fun, amusing and an experience for life.</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/diksha.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Diksha</li>
								<li>Mathematics and Computing, 3rd Year</li>
							</ul>
						</div>
						<p>Being a person who have never stayed away from family, coming to such a new place and living all alone appeared no more than a nightmare. But ISMP helped me a lot getting over all this. Introducing me to a lot of amazing people and whole of the place the program helped me a lot in being comfortable in the college. The activities conducted by the clubs introduced me to them and helped me find people with similar interests. The days were a nice combination of both the informative and fun sessions. On the whole, the activities kept me engaged throughout the day and made me ready for the things to come.</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/nitish.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Nitish</li>
								<li>Computer Science and Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>Being from Punjab, I was quite surprised at finding rather few students from the home state and numerous from others. At times, I even felt out of place listening to people converse in their native language when I did not have anyone to talk to. I never knew anyone beforehand unlike almost everyone else, who had friends from coaching. But I soon made a lot of friends, thanks to the institute’s ISMP programme. The mentor interactions played a significant role in breaking the ice and helped get over the feeling of loneliness that had begun to dawn on me. The major takeaway was getting to know the campus well and the various opportunities it offered while getting acquainted with its people and culture. The various activities organised by the different clubs helped me meet people with shared interests and were instrumental in developing a bond with my seniors.</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/priyasha.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Priyasha</li>
								<li>Electrical Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>When you enter the premises of a college, it's an entirely new world. It was a no different situation for me. Just like a regular teen I too was skeptical about mine. Beginning our day with the dynamic bhangra sessions was enough to break the dormancy and fill us with energy. The club activities and the sports sessions with a few senior interactions aided me to know about my interests, explore the campus, and bridge the gaps between the seniors and freshers. It also gave me the chance to interact with students, not only of my department but others as well. These things helped me make new friends and cope up with all my general concerns. At last, I can say that ISMP helped me in a stable transition into college life.</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/sudhanshu.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Sudhanshu</li>
								<li>Computer Science and Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>
							The moment I made it here to the college, I knew this was a new phase in a whole different atmosphere from the past and a new atmosphere always demands the individual to accept and inhabit it with the people already in it. To get to know the structure and working of the system, to get along with the people who came with you, and who came before you, eventually learn about your interests and types of activities you want to be a part of, ISMP provided the necessary push to every single one of us.
							<br><br>
							If I were to call it a necessity over an option, I wouldn’t be exaggerating. It holds all the introductory interactions among freshers and freshers and among freshers and seniors, and also helps you explore through the various clubs present in the college. I found my people in the group we were a part of during our ISMP days, I found a supportive and friendly senior in the mentor who was assigned to us, and so many seniors I can turn to when I feel troubled. After attending the sessions of the clubs I am currently part of, I just knew, I had to join them and stick to them.
							<br><br>
							ISMP helps you make many acquaintances, you find your friends, your advice panel in seniors you come in touch with, and helps you explore the inner you by having a go at all the club activities. You can trust us on that, you’ll sure be enjoying a ride that goes up and up.
						</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/kalarchita.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Kalarchita K</li>
								<li>Mechanical Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>
							I’m kalarchita sophomore of IITRPR. Here I’m going to brief my view about my ISMP. everything about the institute is new for me. And to know about me , I’m an introvert and never used to open up or express anything.It was a tough task for me to socialise among my fellow mates. This is the place where ISMP helped me the most. So far I can say the best period of my first year is ISMP. ISMP conducted mentor interaction different types of tasks to make me come out of my comfort zone and open up. Apart from all the mentor interaction sessions we had club sessions and sports hours. Where it was planned and divided among the students for 6 days. This provides us with a chance to experience everything and decide in which we likely want to excel.They took us to two different field trips. These are the two best experiences.last but not the least they’ve conducted treasure hunt and performed cultural night. These two events worth remembering cause the fun and joy it created in me were immeasurable.
							<br><br>
							College life is all about culture and how to socialise ourselves in it. ISMP helped me a lot to overcome my fear and other parameters , successfully made me a person who will deal with things is a better way.
						</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/mazhar-laljee.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Mohamed Mazhar Laljee</li>
								<li>Chemical Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>
							My happiness knew no bounds when I got selected for admission in one of the prestigious 23 IITs. I was looking forward to the new experience but thoughts about how good or bad it would be and the realisation that I’d have to befriend people from different parts of the country belonging to different cultural backgrounds worried me a little. Fortunately, IIT Ropar’s induction programme (called ISMP) took care of my concerns. The assigned student mentors did a great job in facilitating the breaking of ice among the freshers and between the freshers and seniors as well. Team building activities, sports and interactive sessions during the programme helped us in knowing our batchmates, and having a lot of fun at the same time. The mentors also gave us an excellent overview of life at the institute, opportunities that might come our way, various club activities and helped in striking a balance between academic and non-academic stuff. Memories made during this period will stay with us for years to come. ISMP thus plays an integral role in facilitating a fresher’s smooth transition from school life to college life.
						</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/ishan-sawant.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Ishan Sawant</li>
								<li>Mechanical Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>
							One of the best things about ISMP is the vast number of activities you do throughout the day. This is important as we are kept engaged throughout the day and this led to the feeling of already belonging there. When I came here, I did worry about homesickness as Punjab is quite far from my hometown. However, the interactions with the freshmen and seniors through the activities made me forget about it. Understanding the IIT culture through ISMP made me realise the numerous areas for self development and self growth which will help me in becoming a valuable human being. ISMP ensures smooth transition from common school level mindset to a professional mindset. It is one of the many life changing experiences you will ever encounter.
						</p>
					</li>
					<li>
						<div class="cd-author">
							<img src="images/testimonial/ritik-garg.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>Ritik Garg</li>
								<li>Computer Science and Engineering, 3rd Year</li>
							</ul>
						</div>
						<p>
							Being the youngest in my family, my parents were quite anxious before the college admissions, about how would I assimilate into the new atmosphere at a completely oblivious place. I also had uncertainties and ambiguities about the new phase of my life, which were further compounded by the constant disquietness of my family members. However, the very first interaction with the ISMP mentors significantly alleviated the anxieties of my parents, after they observed the courteous and affable behavior of the mentors towards their juniors, which definitely was not a pretense, as can be assured from personal experience.
							<br><br>
							ISMP has been an unparalleled and memorable experience of my college life. It not only made me familiar with the college and its customs but also paved a way for an exceptional interaction with the seniors. It is hard to imagine a college life without the assistance of seniors, who are accessible to mentor you, support you, and accelerate your journey towards success. ISMP enabled me to interact with people, assimilate into the new atmosphere, enjoy the transition, and unconstrain my spirit to embrace the new teachings in my life.
						</p>
					</li>
				</ul>
				<a href="#0" class="cd-see-all">See all</a>
			</div>
			<div class="cd-testimonials-all">
				<div class="cd-testimonials-all-wrapper">
					<ul>
						<li class="cd-testimonials-item">
							<p>Ropar was a new place, as it was for other freshers. Away from freinds and family, I felt lonely initially, had signs of homesickness. At first, it felt impossible to spend 4 years of my life here, but thanks to the ISMP programme here. The activities of ISMP gives the opportunity to meet other people on campus, make new freinds and gather experiences. I got to know about the various clubs at the college. Also, each student gets a mentor from second year who gives you breif idea of the functioning of the college and provide tips for balancing studies and co curricular. After 10 days of this programme, this place felt home, with a new family of new freinds. In short, it's fun, amusing and an experience for life.</p>
							<div class="cd-author">
								<img src="images/testimonial/aneeket.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Aneeket</li>
									<li>CSE, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>Being a person who have never stayed away from family, coming to such a new place and living all alone appeared no more than a nightmare. But ISMP helped me a lot getting over all this. Introducing me to a lot of amazing people and whole of the place the program helped me a lot in being comfortable in the college. The activities conducted by the clubs introduced me to them and helped me find people with similar interests. The days were a nice combination of both the informative and fun sessions. On the whole, the activities kept me engaged throughout the day and made me ready for the things to come.</p>
							<div class="cd-author">
								<img src="images/testimonial/diksha.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Diksha</li>
									<li>MNC, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>Being from Punjab, I was quite surprised at finding rather few students from the home state and numerous from others. At times, I even felt out of place listening to people converse in their native language when I did not have anyone to talk to. I never knew anyone beforehand unlike almost everyone else, who had friends from coaching. But I soon made a lot of friends, thanks to the institute’s ISMP programme. The mentor interactions played a significant role in breaking the ice and helped get over the feeling of loneliness that had begun to dawn on me. The major takeaway was getting to know the campus well and the various opportunities it offered while getting acquainted with its people and culture. The various activities organised by the different clubs helped me meet people with shared interests and were instrumental in developing a bond with my seniors.</p>
							<div class="cd-author">
								<img src="images/testimonial/nitish.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Nitish</li>
									<li>CSE, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>When you enter the premises of a college, it's an entirely new world. It was a no different situation for me. Just like a regular teen I too was skeptical about mine. Beginning our day with the dynamic bhangra sessions was enough to break the dormancy and fill us with energy. The club activities and the sports sessions with a few senior interactions aided me to know about my interests, explore the campus, and bridge the gaps between the seniors and freshers. It also gave me the chance to interact with students, not only of my department but others as well. These things helped me make new friends and cope up with all my general concerns. At last, I can say that ISMP helped me in a stable transition into college life.</p>
							<div class="cd-author">
								<img src="images/testimonial/priyasha.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Priyasha</li>
									<li>EE, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>
								The moment I made it here to the college, I knew this was a new phase in a whole different atmosphere from the past and a new atmosphere always demands the individual to accept and inhabit it with the people already in it. To get to know the structure and working of the system, to get along with the people who came with you, and who came before you, eventually learn about your interests and types of activities you want to be a part of, ISMP provided the necessary push to every single one of us.
								<br><br>
								If I were to call it a necessity over an option, I wouldn’t be exaggerating. It holds all the introductory interactions among freshers and freshers and among freshers and seniors, and also helps you explore through the various clubs present in the college. I found my people in the group we were a part of during our ISMP days, I found a supportive and friendly senior in the mentor who was assigned to us, and so many seniors I can turn to when I feel troubled. After attending the sessions of the clubs I am currently part of, I just knew, I had to join them and stick to them.
								<br><br>
								ISMP helps you make many acquaintances, you find your friends, your advice panel in seniors you come in touch with, and helps you explore the inner you by having a go at all the club activities. You can trust us on that, you’ll sure be enjoying a ride that goes up and up.
							</p>
							<div class="cd-author">
								<img src="images/testimonial/sudhanshu.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Sudhanshu</li>
									<li>CSE, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>
								I’m kalarchita sophomore of IITRPR. Here I’m going to brief my view about my ISMP. everything about the institute is new for me. And to know about me , I’m an introvert and never used to open up or express anything.It was a tough task for me to socialise among my fellow mates. This is the place where ISMP helped me the most. So far I can say the best period of my first year is ISMP. ISMP conducted mentor interaction different types of tasks to make me come out of my comfort zone and open up. Apart from all the mentor interaction sessions we had club sessions and sports hours. Where it was planned and divided among the students for 6 days. This provides us with a chance to experience everything and decide in which we likely want to excel.They took us to two different field trips. These are the two best experiences.last but not the least they’ve conducted treasure hunt and performed cultural night. These two events worth remembering cause the fun and joy it created in me were immeasurable.
								<br><br>
								College life is all about culture and how to socialise ourselves in it. ISMP helped me a lot to overcome my fear and other parameters , successfully made me a person who will deal with things is a better way.
							</p>
							<div class="cd-author">
								<img src="images/testimonial/kalarchita.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Kalarchita K</li>
									<li>ME, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>
								My happiness knew no bounds when I got selected for admission in one of the prestigious 23 IITs. I was looking forward to the new experience but thoughts about how good or bad it would be and the realisation that I’d have to befriend people from different parts of the country belonging to different cultural backgrounds worried me a little. Fortunately, IIT Ropar’s induction programme (called ISMP) took care of my concerns. The assigned student mentors did a great job in facilitating the breaking of ice among the freshers and between the freshers and seniors as well. Team building activities, sports and interactive sessions during the programme helped us in knowing our batchmates, and having a lot of fun at the same time. The mentors also gave us an excellent overview of life at the institute, opportunities that might come our way, various club activities and helped in striking a balance between academic and non-academic stuff. Memories made during this period will stay with us for years to come. ISMP thus plays an integral role in facilitating a fresher’s smooth transition from school life to college life.
							</p>
							<div class="cd-author">
								<img src="images/testimonial/mazhar-laljee.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Mohamed Mazhar Laljee</li>
									<li>CE, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>
								One of the best things about ISMP is the vast number of activities you do throughout the day. This is important as we are kept engaged throughout the day and this led to the feeling of already belonging there. When I came here, I did worry about homesickness as Punjab is quite far from my hometown. However, the interactions with the freshmen and seniors through the activities made me forget about it. Understanding the IIT culture through ISMP made me realise the numerous areas for self development and self growth which will help me in becoming a valuable human being. ISMP ensures smooth transition from common school level mindset to a professional mindset. It is one of the many life changing experiences you will ever encounter.
							</p>
							<div class="cd-author">
								<img src="images/testimonial/ishan-sawant.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Ishan Sawant</li>
									<li>ME, 3rd Year</li>
								</ul>
							</div>
						</li>
						<li class="cd-testimonials-item">
							<p>
								Being the youngest in my family, my parents were quite anxious before the college admissions, about how would I assimilate into the new atmosphere at a completely oblivious place. I also had uncertainties and ambiguities about the new phase of my life, which were further compounded by the constant disquietness of my family members. However, the very first interaction with the ISMP mentors significantly alleviated the anxieties of my parents, after they observed the courteous and affable behavior of the mentors towards their juniors, which definitely was not a pretense, as can be assured from personal experience.
								<br><br>
								ISMP has been an unparalleled and memorable experience of my college life. It not only made me familiar with the college and its customs but also paved a way for an exceptional interaction with the seniors. It is hard to imagine a college life without the assistance of seniors, who are accessible to mentor you, support you, and accelerate your journey towards success. ISMP enabled me to interact with people, assimilate into the new atmosphere, enjoy the transition, and unconstrain my spirit to embrace the new teachings in my life.
							</p>
							<div class="cd-author">
								<img src="images/testimonial/ritik-garg.jpg" alt="Author image">
								<ul class="cd-author-info">
									<li>Ritik Garg</li>
									<li>CSE, 3rd Year</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<a href="#0" class="close-btn">Close</a>
			</div>
		</div>

		<?php include("elem/footer.php"); ?>
	</div>

	<?php include("elem/scripts.php"); ?>

	<script>
		/*Parallax scrolling*/
		$.fn.isInViewport = function() {
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();

			var viewportTop = $(window).scrollTop();
			var viewportBottom = viewportTop + $(window).height();

			return elementBottom > viewportTop && elementTop < viewportBottom;
		};

		$(window).scroll(function() {
			var scrolled = $(window).scrollTop();
			$('.parallax-bg').each(function(index, element) {
				var initY = $(this).offset().top;
				var height = $(this).height();
				var endY = initY + $(this).height();

				// Check if the element is in the viewport.
				var visible = $(this).isInViewport();
				if (visible) {
					var diff = -scrolled + initY;
					var ratio = (diff / height) * 100;
					if (screen.width > 660)
						$(this).css('background-position', 'center ' + parseInt((-ratio * 10) - 100) + 'px');
					else
						$(this).css('background-position', 'center ' + parseInt((-ratio * 18) - 170) + 'px');
				}
			});
		})
	</script>

	<script>
		// Search Question in FAQ
		$(document).ready(function() {

			// Search Button Click
			$('.search-button').on('click', function() {
				window.location.href = "faqs.php?q=" + $('.search').val();
			});

			//Search Button Show-Hide
			$('.search').on('keyup', function(e) {
				if ($('.search').val() != '' && e.which == 13)
					$(".search-button").click();

				if ($('.search').val() != '') {
					$('.search-button').css("display", "block");
					setTimeout(function() {
						$('.search-button').css("opacity", "1");
					}, 2);
				} else {
					$('.search-button').css("opacity", "0");
					setTimeout(function() {
						$('.search-button').css("display", "none");
					}, 200);
				}
			});

			//Show search button in starting if text is there
			$(".search").keyup();

		});
	</script>


	<script>
		/*
      $(window).scroll(function() {
      var scrollTop = $(this).scrollTop();

        $('.iitrpr_logo').css({
          opacity: function() {
            var elementHeight = $(this).height(),
            opacity = ((1 - (elementHeight - scrollTop) / elementHeight) * 0.8) + 0.;

            return opacity;
          }
        });
      });*/
	</script>
	<script>
		/*for disabling scroll of page while seeing all testimonials*/
		$('.cd-testimonials-all-wrapper').bind('mousewheel DOMMouseScroll', function(e) {
			var scrollTo = null;

			if (e.type == 'mousewheel') {
				scrollTo = (e.originalEvent.wheelDelta * -1);
			} else if (e.type == 'DOMMouseScroll') {
				scrollTo = 40 * e.originalEvent.detail;
			}

			if (scrollTo) {
				e.preventDefault();
				$(this).scrollTop(scrollTo + $(this).scrollTop());
			}
		});
	</script>
	<script type="text/javascript">
		/*For auto scrolling testimonial*/
		$(document).ready(function() {
			var slide = true;
			setInterval(function() {
				if (slide) {
					$('.flex-next').click();
				}
			}, 20000);
			$('.testimonial').hover(function() {
				slide = false;
			}, function() {
				slide = true;
			});
		});
		/*For auto scrolling carousel*/
		$(document).ready(function() {
			var slide = true;
			setInterval(function() {
				if (slide) {
					$('.carousel-control-next').click();
				}
			}, 3000);
			$('.carousel').hover(function() {
				slide = false;
			}, function() {
				slide = true;
			});
		});
	</script>

</body>

</html>