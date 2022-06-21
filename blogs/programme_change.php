<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'programme_change';
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
				<div class="blog-page-title">Programme Change</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/neha_kapoor.jpg">
					</div>
					<div class="name">
						Neha Kapoor <font class="name-det">(2016 Batch Mechanical Engineering)</font>
					</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
				</div>
				<div class="blog-page-article">
					<p>If you think JEE Counselling hasn’t given you the branch of your choice and feel that you can perform much better in another discipline of engineering, you still have your chance buddy. Branch change is your ray of hope.</p>
					<p>
						There is a provision of Programme Change at the end of First Year.</p>
					<p>
						Following are the norms for Programme Change:
					</p>
					<p>
						<b>a.</b> A student is eligible to apply for change of branch at the end of the first year only, provided he / she satisfies the following criteria:</p>
					<ol class="list-1" style="margin-left:-30px;">
						<li> CGPA for GEN / OBC category students: - >7.50</li>
						<li> CGPA for SC / ST / PD category students: - > 6.50</li>
						<li> Earned credits at the end of the first academic session are 40 credits or more.</li>
					</ol>
					</p>
					<p>
						<b>b.</b> Change of the branch will be permitted strictly in the order of merit, in each category, as determined by CGPA at the end of the first year, subject to the limitation that the actual number of students in the third semester in the branch to which transfer is to be made should not exceed its sanctioned strength by more than 10% and the strength of the branch from which transfer is being sought does not fall below 85% of its sanctioned strength.
					</p>
					<p>
						<b>c.</b> The conditions mentioned in items I-III above will not be insisted upon for change to a branch in which a vacancy exists with reference to the sanctioned strength, and the concerned student was eligible as per JEE Rank for admission to that branch at the time of entry to IIT Ropar. However, these conditions will continue to apply in case of students seeking change to a branch to which the concerned student was not eligible for admission at the time of entry to IIT Ropar.
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