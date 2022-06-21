<?php include('../elem/connection.php'); ?>
<?php
$blog_id = 'advitiya';
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
				<div class="blog-page-title">Advitiya</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/rajmohini_soni.jpg">
					</div>
					<div class="name">Rajmohini Soni <font class="name-det">(2019 Batch Civil Engineering)</font>
					</div>
					<div class="date">Jul 6 '20 · 1 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo "&nbsp&nbsp$view"; ?></div>
				</div>
				<div class="blog-page-article">
					<p>
						The annual TechFest of IIT ROPAR, ADVITIYA is organised during the month of February.
					</p>
					<p>
						Many events such as Robowars, gaming competition and technological models at display can be enjoyed throughout the fest. Talented minds from all over India become a part of ADVITIYA and showcase their abilities.
					</p>
					<p style="text-align:center;"><b>PHOTO GALLERY</b></p>
					<img src="../images/blogs/blog/advitiya/motor-racing.jpg">
					<img src="../images/blogs/blog/advitiya/exhibition.jpg">
					<img src="../images/blogs/blog/advitiya/robowar.jpg">
					<img src="../images/blogs/blog/advitiya/drone.jpg">
					<img src="../images/blogs/blog/advitiya/rc-plane.jpg">
					<img src="../images/blogs/blog/advitiya/bassi.jpg">
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