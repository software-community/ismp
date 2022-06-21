<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'aarohan';
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
				<div class="blog-page-title">Aarohan-Annual Sports Festival</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
				</div>
				<div class="blog-page-article">
					<p>Aarohan is the annual sports fest of Indian Institute of Technology, Ropar, one among the most reputed institutes in the country. Since its inception in 2016, Aarohan has unceasingly progressed each year. Spread over a period of three days, Aarohan, IIT Ropar’s flagship sporting fest, is nothing short of a sporty pageant. Aarohan attracts a wide spectrum of the youth from all over the north India by providing excellent organisational infrastructure facilities and motivation to enable students achieve the zenith of their respective sports performances. Aarohan offers a platform for students from all over India to showcase their talent and compete with the best upcoming sportspersons in the country in a highly charged and competitive ambience with highly equipped sports facilities.</p>
					<p>Having witnessed over 550 participants and an impressive start and inaugural by in its third edition, the fest has provided students from different colleges and institutes an opportunity to participate and explore. AAROHAN’19, the third edition of Aarohan marked its commencement on 15th March,2019 and continued for 3 days. This Mega Event was inaugurated by our dynamic Director Prof. SK DAS and it incorporated a wide range of outdoor as well as indoor sports activities like cricket, badminton, volleyball, basketball, football, tennis and athletics events witnessing the immense participation of 14 colleges from North India.</p>
					<p>IIT Ropar too displayed its proficient talent and versatility by taking part in each and every event that took place in the field with its huge and enthusiastic contigent. The indefatigable work force and the vigorous efforts of the core team which started way back in April,2018 finally brought fruit at the awarding and closing ceremony on 17th March, 2019 by our Chief Guests Mr. Mukesh Kumar (National Champion in 25m rapid fire-pistol) and Mr. Surjit Singh (Distinguished Sports Administrator of Punjab) by their triggering words. Being one of the most successful fest in the history of IIT Ropar, Aarohan promises to be even larger and better in its next edition at the Permanent Campus by diversifying its sports panel.
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