<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'baja';
include('../elem/blog_count_selector.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog | ISMP'20 IIT Ropar</title>

	<?php $root_path = '../';
	include("../elem/stylesheets.php"); ?>

</head>

<body>
	<?php include("../elem/navbar.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="blog-page-title">BAJA (SAE India)</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
				</div>
				<div class="blog-page-article">
					<div>
						<p class="text-center">“BAJA aims at helping engineers enhance their dexterity in formulating new technologies and is being held for the first time in this part of India.”<br>
							<span>
								- Director IIT Ropar <br>
								S.K Das
							</span>
						</p>
					</div>

					<p>BAJA SAEINDIA is a national level engineering student competition under the directions of SAEINDIA in which 25-member students team, representing their college, are tasked to design and build an all-terrain off-road vehicle (ATV). The goal in Baja SAE racing is to design, build and race off-road vehicles that can withstand the harshest elements of rough terrain. The vehicles used in Baja SAE racing are often similar in appearance to dune buggies.</p>

					<p>IIT Ropar takes immense pleasure in being the only IIT as the host of BAJA SAE INDIA. This mega off-road event held at the new campus of IIT Ropar in March witnessed 60 colleges from all over India and had an efficacious result. Navjot Singh Sidhu flagged the 4-hour long endurance race and gave a positive review of the event as well as its’ host.
					</p>
					<p>IIT Ropar too participated in the event being the host and now has a well built ATV car of its own.
					</p>
				</div>
				<div class="blogs-back-box">
					<a class="blogs-back" href="../blogs.php">
						<i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp&nbspBack to blogs
					</a>
				</div>
			</div>

		</div>
	</div>

	<?php include("../elem/footer.php"); ?>

	<?php include("../elem/scripts.php"); ?>

</body>

</html>