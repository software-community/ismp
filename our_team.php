<?php
include('elem/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our Team | ISMP'20 IIT Ropar</title>

	<?php $root_path = '';
	include("elem/stylesheets.php"); ?>

	<style>
		.page-sticky-head-holder {
			position: sticky;
			top: 80px;
			background-color: #eee;
			z-index: 10;
			margin-bottom: 30px;
		}

		.page-sticky-head {
			font-family: 'Montserrat';
			font-size: 16px;
			letter-spacing: 10px;
			color: #0d6c7c;
			font-weight: 600;
			border-bottom: 1px solid #ccc;
			width: 60%;
			margin-left: 7%;
			padding: 20px 30px;
			box-shadow: 0px 8px 6px -6px #ddd;
		}


		@media (max-width: 660px) {
			.page-sticky-head-holder {
				top: 68px;
			}

			.page-sticky-head {
				margin-left: 2%;
				width: 90%;
				letter-spacing: 5px;
				;
			}
		}

		.desc_text {
			font-family: 'Raleway';
			line-height: 30px;
			font-size: 20px;
			margin-top: 30px;
		}

		@media (max-width: 660px) {
			.desc_text {
				line-height: 26px;
				font-size: 16px;
				margin-top: 30px;
			}
		}
	</style>

</head>

<body style="background-color:#eee">
	<?php include("elem/navbar.php"); ?>

	<div class="row page-head-holder">
		<p class="page-head" style="margin-top:40px;">
			OUR TEAM
		</p>
	</div>

	<!-- Faculty -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				FACULTY
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$post_select = 'FACULTY IN-CHARGE';
				$phone_col = 'col-12';
				include("elem/our_team_selector.php");
				?>
				<div class="col-md-8 desc_text">
					<b>Dr. Pradeep Duhan</b>, Assistant Professor in the Department of Electrical Engineering, IIT Ropar is the faculty in-charge of this programme and has taken special interest to help and encourage the students to form this Mentorship Programme. He has made a special effort in order to prepare the events for counselling of the 2022 Batch. With his mentorship we ensure that we will counsel the freshers to the best extent possible.
				</div>
			</div>
		</div>
	</div>

	<!-- Core Team -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				CORE TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$phone_col = 'col-6';
				$post_select = 'SECRETARY';
				include("elem/our_team_selector.php");
				$post_select = 'CO-SECRETARY';
				include("elem/our_team_selector.php");
				$post_select = 'ONLINE COUNSELLING HEAD';
				include("elem/our_team_selector.php");
				$post_select = 'WEB DESIGNING HEAD';
				include("elem/our_team_selector.php");
				?>
			</div>
		</div>
	</div>

	<!-- Team Members -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				TEAM MEMBERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$phone_col = 'col-6';
				$post_select = 'VIDEO EDITOR & MENTOR';
				include("elem/our_team_selector.php");
				$post_select = 'CONTENT WRITER';
				include("elem/our_team_selector.php");
				$post_select = 'CONTENT WRITER & MENTOR';
				include("elem/our_team_selector.php");
				$post_select = 'MENTOR';
				include("elem/our_team_selector.php");
				?>
			</div>
		</div>
	</div>

	<!-- Core Team -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				PREV TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$phone_col = 'col-6';
				$post_select = 'ABCD';
				include("elem/our_team_selector.php");
				$post_select = 'Ex-CO-SECRETARY';
				include("elem/our_team_selector.php");
				$post_select = 'Ex-WEB-DEVELOPER';
				include("elem/our_team_selector.php");
				$post_select = 'Ex-ONLINE COUNSELLING HEAD';
				include("elem/our_team_selector.php");
				// $post_select = 'ONLINE COUNSELLING HEAD';
				// include("elem/our_team_selector.php");
				// $post_select = 'WEB DESIGNING HEAD';
				// include("elem/our_team_selector.php");
				?>
			</div>
		</div>
	</div>

	<!-- Founding Members -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				FOUNDING MEMBERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$phone_col = 'col-6';
				$post_select = 'FOUNDING MEMBER';
				include("elem/our_team_selector.php");
				?>
			</div>
		</div>
	</div>
	<br>
	<hr><br>
	<div style="text-align:center; font-size:20px; font-weight:500; font-family:'Jost'; color:#333 !important;">
		<a class="no-color-link" href="user-login/index.php"><img src="images/logo/google.png" style="display:inline; width:30px;">&nbsp;&nbsp;Mentor Login</a>
	</div>
	<br><br>
	<?php include("elem/footer.php"); ?>

	<?php include("elem/scripts.php"); ?>

</body>

</html>