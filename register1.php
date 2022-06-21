<?php
include('elem/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<title>Register | ISMP'20 IIT Ropar</title>

	<?php $root_path = ''; include("elem/stylesheets.php"); ?>

	<style>
		.expand_contract_button {
			color: #bbb;
			margin-left: 50px;
			transition: all 0.2s ease 0s;
		}

		.expand_contract_button:hover {
			color: #eee;
		}

		.expand {
			height: 230px;
			overflow: hidden;
			margin-bottom: 10px;
			transition: all 0.7s cubic-bezier(.28, .31, 0, .96);
		}

		@media (max-width: 660px) {
			.expand_contract_button {
				margin-left: 30px;
			}

			.expand {
				height: 290px;
				transition: all 2s cubic-bezier(.28, .31, 0, .96);
			}
		}
	</style>

</head>

<body style="background-color:#054854">



	<?php include('elem/navbar.php'); ?>

	<div class="row page-head-holder">
		<p class="page-head" style="margin-top:40px; color:#ddd">
			REGISTRATION
		</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="segment-head">
				Welcome
			</div>
			<div class="expand">
				<div class="segment-body">
					<p>
						<b>Congratulations</b> on making it to IIT Ropar, where you'll spend some of the best times of your life. You've probably received loads of congratulations on your success in JEE. Let us add ours to this pile.
					</p>
					<p>
						Now down to business about the Student Mentorship Program. As you pack your bags for IIT Ropar, there are likely to be a lot of questions on your mind about your future life here. We have tried to answer many of these here. Many new questions will emerge as you maneuver around the labyrinth of processes and procedures, courses and activities at IIT. This is where your mentor comes in. IIT Ropar will strive to assist your upcoming journey. The journey, where you not only aim about emplacement but also add a lot of escapades in your life. Of course ,there will be obstacles which you need to overcome.
					</p>
					<p>
						This is where we think the experiences of your senior comes into play to mentor you.The Institute Student Mentorship Program (ISMP), is a program within the IIT Ropar, with the primary objective to enable constructive and positive interaction, guidance and mentorship of junior students by senior students. The vision is to inculcate the right attitude from the beginning and sustain an environment that promotes personal growth and participation in creation of a healthy community. For this purpose, the ISMP carefully selects mentors from amongst senior students at IIT Ropar-someone that you can approach with queries on any issue be it acad...
					</p>
					<p>
						They will be your friends, philosophers and guides through your exciting journey in IIT Ropar. We will try to ensure that each individual's personal and academic life is hassle free while his/her stay in IIT Ropar .We will keep in touch with you all throughout the year, interacting and learning from you about your experiences through this system.
					</p>
					<p>
						<b>Wishing you good luck for your stay at IIT Ropar!</b>
					</p>
				</div>
			</div>
			<div class="expand_contract_button expand_button">

				Read More...

			</div>
		</div>
		<hr style="margin:60px; border-color:#ddd;">
		<div class="row">
			<div class="segment-body" style="text-align:center; margin:auto;">
				<p style="font-weight:500;">
					Please fill the form given below
				</p>
				<p style="font-size:15px;">
					It would help us to know you better and record your interest in ISMP. We will reach you with a mentor shortly after you fill this form.
				</p>
			</div>
		</div>

			<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeZhQTMZHQZOmf4HH4iFAd0-UoLs7aHZQErHIk-gRFA8Ob6Vg/viewform?embedded=true" width="100%" height="2550px" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>


	</div>



	<?php include("elem/footer.php"); ?>

	<?php include("elem/scripts.php"); ?>

	<script>
		$(document).ready(function() {
			$('.expand_contract_button').css("cursor", "pointer");
			var height;
			$(document).on('click', '.contract_button', function() {
				$('.expand').css("height", height);
				$('.contract_button').html('Read More...');
				$('.contract_button').addClass('expand_button').removeClass('contract_button');
				var body = $("html, body");
				body.stop().animate({
					scrollTop: 300
				}, 1000, 'swing');
			});
			$(document).on('click', '.expand_button', function() {
				height = $('.expand').height();
				$('.expand').css("height", $('.segment-body').height());
				$('.expand_button').html('Read Less...');
				$('.expand_button').addClass('contract_button').removeClass('expand_button');
			});
		});
	</script>
</body>

</html>