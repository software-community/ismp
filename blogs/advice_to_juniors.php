<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'advice_to_juniors';
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
				<div class="blog-page-title">Advice to Juniors</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/abhishek_goyal.jpg">
					</div>

					<div class="name">Abhishek Goyal <font class="name-det">(2016 Batch Computer Science and Engineering)</font>
					</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>

				</div>
				<div class="blog-page-article">
					<h3><b>1. Be open and friendly.</b></h3>
					<p>Coming here, you'll find people from all around the country, with different backgrounds, different cultures and even languages too. Don't make the mistake of maintaining a friend circle consisting of only people with similar interests, or from the same community as you.
					</p>

					<h3><b>2. Explore yourself</b></h3>
					<p>This is the time to explore your interests. My advice would be to try out all things and everything. Attend the initial sessions of all the clubs, try out all the sports. Believe me, you might find something that you've never even considered, to be extremely fun or something you're naturally good at. Try out some debating, dancing, jamming some music, as I said everything really.
					</p>

					<h3><b>3. Cause CG will not make you smile, but memories will.</b></h3>
					<p>Don't focus solely on academics but at the same time, don't ignore them completely. Remember, this is the time to do some crazy fun stuff, make some long lasting memories. You'll be burdened by responsibilities after you graduate, so this is really the best time to just enjoy yourself. But then again, an easy mistake that you can make is to ignore the academics completely. Simply put, maintain a good balance.
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