<?php include('../elem/connection.php'); ?>
<?php
$blog_id = 'zeitgeist';
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
				<div class="blog-page-title">Zeitgeist</div><br>
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
						The annual cultural fest of IIT ROPAR, "Zeitgeist" is German for "The spirit of Times". The fest is generally organised in October in a stretch of three days.
					</p>
					<p>
						It is considered to be the finest cultural fest of Punjab with a footfall of over 2000 people from colleges throughout North-India ; one can expect to witness innumerable music, dance, dramatics and other cultural events.
					</p>
					<p style="text-align:center;"><b>PHOTO GALLERY</b></p>
					<img src="../images/blogs/blog/zeitgeist/diljit.jpg">
					<img src="../images/blogs/blog/zeitgeist/zakir.jpg">
					<img src="../images/blogs/blog/zeitgeist/sitar-metal.jpg">
					<img src="../images/blogs/blog/zeitgeist/ktm-show.jpg">
					<img src="../images/blogs/blog/zeitgeist/music.jpg">
					<img src="../images/blogs/blog/zeitgeist/dance.jpg">
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