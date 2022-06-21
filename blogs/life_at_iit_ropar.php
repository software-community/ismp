<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'life_at_iit_ropar';
include('../elem/blog_count_selector.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog | ISMP'20 IIT Ropar</title>

	<?php $root_path = '../';
	include("../elem/stylesheets.php"); ?>

	<style>
		.card-body h4 {
			line-height: 1.15;
		}

		.card-body p {
			font-size: 18px;
			text-align: justify;
		}
	</style>
</head>

<body>
	<?php include("../elem/navbar.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="blog-page-title">Life at IIT Ropar</div><br>
				<div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/abhishek_goyal.jpg">
					</div>
					<div class="name">
						Abhishek Goyal <font class="name-det">(2016 Batch Computer Science and Engineering)</font>
					</div>
					<div class="date">Older · 4 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
				</div>
				<div class="blog-page-article">
					<p>So..... I've just completed my first year at IIT Ropar. Here are some of my ramblings about the experience upto now and what you could expect after joining this institute:-</p>
					<ol class="list-1" style="margin-left:-40px;">

						<li> In my very first days at IIT Ropar, the one thing that really struck me was the sheer amount of activities I engaged myself in. Maybe it's because the earlier days after JEE were spent idly, but the busy college life really took me by a surprise.
							<br>
							That's probably the thing I like the most about my life here, you always have something to do, have something to look forward to, that's what makes it so exciting!
						</li>

						<li> In a lot of ways, I find the life here to be like a choose-your-own-adventure book (apart from the fact that these books are universally lame :P), you can be what you want to be, do whatever you're interested in. You can be the guitarist, the fitness freak, the dancer, the athlete, the nerd (FYI nerds aren't uncool), the gamer, pretty much anything you've ever wanted to be no matter your past. With a wide range of technical and cultural clubs available plus a lot of sports, just join whatever you're interested in and voila! You're good to go :)
						</li>

						<li> As the legend that is Barney Stinson once said "Whatever you do in this life, it's not legendary unless your friends are there to see it." Well, No problemo. If you're not like the total anti-social, hate humanity type, well then I can bet that you'll make a lot of close friends here. Maybe it's because of the lower number of people or the generally peaceful environment but it's like almost everyone here is super friendly, always up for some fun. Oh, and having people from pretty much all the corners of India , there's a looot of diversity here. We celebrate almost every Indian festival from Pongal to Vaisakhi. Diversityâ€™s super fun.
						</li>
						<li>As most of you will be over 18 by now and it could be your first time living away from your parents, you do feel a certain kind of power that you possess over your actions that you simply didn't have before. And as Peter Parker's uncle mentioned, with great power you do get some responsibilities. These come in the shape of classes to attend, assignments, projects and of course the dreaded mid and end term exams. They may make your day hectic at times but compared to the JEE, the first year courses are a piece o' cake (a bit of hyperbole FTW xD). Seriously though, you don't have to sacrifice your academics for a healthy social life.</li>

						<li>My biggest gripe about living here would be the city of Ropar. Apart from some really awesome off road exploration spots and a few decent restaurants, there isn't really many places to hang out in Ropar outside the campus. Fortunately though, Chandigarh is like 40 mins away on a bus. So while you can't really order-in a Domino's pizza here, you could always pop onto a bus with your friends and hang out in Chandigarh for the day. Having the whole weekend off does help in this regard too.
						</li>

						<li>Maybe you'll be managing some of them or participating in some, amazing events are organized in the insti around the year. Like for freshers, there is the fresher's party, various competitions organized by the clubs such as debating, dancing 'n stuff and then there are the big daddy (-ies) of them all, our cultural fest, Zeitgeist and technical fest, Advitiya. These fests are organised solely by the students. From closing out sponsorship deals with major companies to hosting the events at the fest, there's a lot of work that's shared among the students. So apart from the fest days being the pinnacle of your college year in-itself, you do also get a giddy feeling that you were crucial for their success.
						</li>
					</ol>
					<p>
						Sooo... cheers to three more years of midnight football kickabouts, full day CSGO matches, impromptu travel plans, 4 am philosophical talks, (… and some studying too) for me, and maybe 4/5 years for you.
					</p>

					<br><br>

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