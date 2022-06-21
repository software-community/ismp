<?php
include('elem/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us | ISMP'20 IIT Ropar</title>

	<?php $root_path = '';
	include("elem/stylesheets.php"); ?>

</head>

<body>
	<?php
	include("elem/navbar.php");
	?>
	<div style="background-color:#054854; margin-top:-100px; padding-top:100px; padding-bottom:60px;">
		<div class="container">

			<div class="row page-head-holder">
				<p class="page-head" style="color: #fff !important; margin-top:40px;">
					CONTACT US
				</p>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="row footer-cat">
						<span style="margin-bottom:30px; color:#eee">Address</span>
					</div>
					<div class="row" style="margin-left:20px;">
						<div class="footer-add">
							Main Campus<br>
							Indian Institute of Technology Ropar<br>
							Rupnagar<br>
							Punjab, INDIA 140001<br><br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row footer-cat">
						<span style="margin-bottom:30px; color:#eee">Phone</span>
					</div>
					<div class="row" style="margin-left:20px;">
						<div class="footer-add">
							<i class="fa fa-phone" aria-hidden="true"></i> +91-1881-227078 <br>
							<i class="fa fa-phone" aria-hidden="true"></i> +91-1881-223395 <br><br><br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6842.171798211328!2d76.46966899063011!3d30.96808497283615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390554d4ffffffff%3A0xb81f1e2708c91100!2sIndian%20institute%20of%20Technology%20Ropar!5e0!3m2!1sen!2sin!4v1593175269344!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>

			<div class="row" style="margin-top:50px;">
				<div class="col-md-4">
					<div class="row footer-cat">
						<span style="margin-bottom:15px; color:#eee">Connect With Us</span>
					</div>

					<a class="button" href="https://www.facebook.com/IITROPARmentorship/" style="margin:auto; margin-top:30px; margin-bottom: 20px;" data-aos="fade" target="_blank" rel="noopener noreferrer">
						<span>
							<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-facebook-square"></i>&nbsp&nbspISMP FACEBOOK
						</span>
					</a>
					<a class="button" href="https://www.instagram.com/ismp_iit_ropar/" style="margin:auto; margin-top:20px; margin-bottom: 50px;" data-aos="fade" target="_blank" rel="noopener noreferrer">
						<span>
							<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-instagram"></i>&nbsp&nbspISMP INSTAGRAM
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<div class="row footer-cat">
						<span style="margin-bottom:15px; color:#eee">Questions</span>
					</div>
					<div class="search-box" style="width:100% !important; margin-top:30px; position: relative !important; top:0 !important">
						<input type="text" class="search" name="search_faq" placeholder="Type keywords to find answers">
						<div class="search-button">
							<svg height="30" viewBox="0 0 24 24" width="30">
								<path d="M0 0h24v24H0z" fill="none" />
								<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" style="fill:rgb(200,200,200)" />
							</svg>
						</div>
					</div>
					<a class="button" href="faqs.php" style="margin:auto; margin-top:30px; margin-bottom: 20px;" data-aos="fade" target="_blank" rel="noopener noreferrer">
						<span>
							<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-eye"></i>&nbsp&nbspCHECKOUT FAQS
						</span>
					</a>
					<a class="button" href="http://www.iitrpr.ac.in/jee-aspirants/register.php" style="margin:auto; margin-bottom:50px;" data-aos="fade" target="_blank" rel="noopener noreferrer">
						<span>
							<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-question"></i>&nbsp&nbspASK A QUESTION
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<div class="row footer-cat">
						<span style="margin-bottom:15px; color:#eee">Registration</span>
					</div>
					<a class="button" href="register.php" style="margin:auto; margin-top:30px; margin-bottom: 50px;" data-aos="fade">
						<span>
							<i style="font-size:1.2em; padding-top: 2px; color:#444;" class="fa fa-user"></i>&nbsp&nbspREGISTER HERE
						</span>
					</a>
				</div>
			</div>

		</div>
	</div>
	<div class="container" style="margin-bottom:50px;">
		<div class="row page-head-holder">
			<p class="page-head" style=" margin-top:40px;">
				TEAM
			</p>
		</div>

		<div class="row">
			<?php
			$phone_col = 'col-12';
			$post_select = 'FACULTY IN-CHARGE';
			include("elem/our_team_selector.php");
			?>
		</div>

		<div class="row">
			<?php
			$phone_col = 'col-6';
			$post_select = 'SECRETARY';
			include("elem/our_team_selector.php");
			?>
			<?php
			$post_select = 'CO-SECRETARY';
			include("elem/our_team_selector.php");
			?>
		</div>
		<div class="row" style="margin-top:50px">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<a class="button" href="our_team.php" style="margin:auto; width:300px; margin-top: -30px; margin-bottom: 30px; border:1px solid #ddd" data-aos="fade" data-aos-delay="100">
					<span>
						MEET OUR TEAM
					</span>
				</a>
			</div>
		</div>
	</div>


	<?php include("elem/footer.php"); ?>

	<?php include("elem/scripts.php"); ?>

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

</body>

</html>