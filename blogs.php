<?php include('elem/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Blogs | ISMP'20 IIT Ropar</title>

	<?php $root_path = '';
	include("elem/stylesheets.php"); ?>

</head>

<body>

	<?php include("elem/navbar.php"); ?>

	<div class="container">

		<div class="row page-head-holder">
			<p class="page-head" style=" margin-top:40px;">
				BLOGS
			</p>
		</div>

		<div class="row">
			<a href="blogs/places_to_visit_near_ropar.php" class="col-md-4 blog" data-aos="fade">
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
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Jun 27 '20 · 13 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'places_to_visit_near_ropar'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/what_to_expect_in_college.php" class="col-md-4 blog" data-aos="fade">
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
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/deepan_maitra.jpg">
					</div>
					<div class="name">Deepan Maitra</div>
					<div class="date">Jul 2 '20 · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'new_1'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/facilities.php" class="col-md-4 blog" data-aos="fade">
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
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/rajmohini_soni.jpg">
					</div>
					<div class="name">Rajmohini Soni</div>
					<div class="date">Jul 6 '20 · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'facilities'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/advice_to_juniors.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/advice_to_juniors.jpg">
				<div class="blog-title">
					Advice to Juniors
				</div>
				<div class="blog-desc">
					Coming here, you'll find people from all around the country, with different backgrounds, different cultures and even languages too....
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/abhishek_goyal.jpg">
					</div>
					<div class="name">Abhishek Goyal</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'advice_to_juniors'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/first_year_at_iit_ropar.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/first_year_at_iit_ropar.jpg">
				<div class="blog-title">
					First year @ IIT Ropar
				</div>
				<div class="blog-desc">
					I’m sure after reading this piece you would get an insight of what awaits for you at IIT Ropar and where you would be in next year. The 1st day when you enter IIT Ropar...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/no-image.jpg">
					</div>
					<div class="name">Naman Goyal</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'first_year_at_iit_ropar'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/how_to_make_decisions.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/how_to_make_decisions.jpg">
				<div class="blog-title">
					How to make decisions?
				</div>
				<div class="blog-desc">
					Leaving homes and stepping into the hostel for the next four years, will be a huge turning point in your life. So friends, why not turn in the right direction, for...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/vikrant_syal.jpg">
					</div>
					<div class="name">Vikrant Syal</div>
					<div class="date">Older · 3 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'how_to_make_decisions'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/freshers_guide.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/freshers_guide.jpg">
				<div class="blog-title">
					Fresher's Guide
				</div>
				<div class="blog-desc">
					Hostel rooms will be allotted on first come first serve basis. Hostels are well equipped with LAN and Wi-Fi. You will not be able to access them immediately...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 3 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'freshers_guide'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/life_at_iit_ropar.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/life_at_iit_ropar.jpg">
				<div class="blog-title">
					Life at IIT Ropar
				</div>
				<div class="blog-desc">
					So..... I've just completed my first year at IIT Ropar. Here are some of my ramblings about the experience upto now and what you could expect after joining this...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/abhishek_goyal.jpg">
					</div>
					<div class="name">Abhishek Goyal</div>
					<div class="date">Older · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'life_at_iit_ropar'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/ismp.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/ismp.jpg">
				<div class="blog-title">
					Institute Student Mentorship Programme
				</div>
				<div class="blog-desc">
					Congratulations on making it to IIT Ropar, where you’ll spend some of the best times of your life. You’ve probably received loads of congratulations on your success in...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'ismp'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/programme_change.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/programme_change.jpg">
				<div class="blog-title">
					Programme Change
				</div>
				<div class="blog-desc">
					Programme Change If you think JEE Counselling hasn’t given you the branch of your choice and feel that you can perform much better in another discipline...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/neha_kapoor.jpg">
					</div>
					<div class="name">Neha Kapoor</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'programme_change'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/advitiya.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/advitiya.jpg">
				<div class="blog-title">
					Advitiya
				</div>
				<div class="blog-desc">
					The annual TechFest of IIT ROPAR, ADVITIYA is organised during the month of February. Many events such as Robowars, gaming competition and technological...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/rajmohini_soni.jpg">
					</div>
					<div class="name">Rajmohini Soni</div>
					<div class="date">Jul 6 '20 · 1 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'advitiya'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/zeitgeist.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/zeitgeist.jpg">
				<div class="blog-title">
					Zeitgeist
				</div>
				<div class="blog-desc">
				The annual cultural fest of IIT ROPAR, "Zeitgeist" is German for "The spirit of Times". The fest is generally organised in October in a stretch of three days...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/rajmohini_soni.jpg">
					</div>
					<div class="name">Rajmohini Soni</div>
					<div class="date">Jul 6 '20 · 1 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'zeitgeist'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/aarohan.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/aarohan.jpg">
				<div class="blog-title">
					Aarohan-Annual Sports Festival
				</div>
				<div class="blog-desc">
					Aarohan is the annual sports fest of Indian Institute of Technology, Ropar, one among the most reputed institutes in the country. Since its inception in 2016, Aarohan...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'aarohan'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
			<a href="blogs/baja.php" class="col-md-4 blog" data-aos="fade">
				<img src="images/blogs/thumbs/baja.jpg">
				<div class="blog-title">
					BAJA (SAE India)
				</div>
				<div class="blog-desc">
					"BAJA aims at helping engineers enhance their dexterity in formulating new technologies and is being held for the first time in this part of India." BAJA SAE INDIA is a...
				</div>
				<div class="blog-read-more">
					Read More
				</div>
				<div class="blog-auth">
					<div class="blog-auth-photo">
						<img src="images/blogs/ppl/team-avatar.jpg">
					</div>
					<div class="name">ISMP Team</div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php $blog_id = 'baja'; include('elem/blog_count_shower.php'); ?></div>
				</div>
			</a>
		</div>
	</div>

	<?php include("elem/footer.php"); ?>

	<?php include("elem/scripts.php"); ?>

</body>

</html>