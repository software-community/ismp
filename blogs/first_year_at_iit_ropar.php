<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'first_year_at_iit_ropar';
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
                <div class="blog-page-title">First year @ IIT Ropar</div><br>
                <div class="blog blog-auth blog-no-sep">
					<div class="blog-auth-photo">
						<img src="../images/blogs/ppl/no-image.jpg">
					</div>
					<div class="name">
                        Naman Goyal <font class="name-det">(2015 Batch Computer Science and Engineering)</font>
                    </div>
					<div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
				</div>
                <div class="blog-page-article">
                    <p>I’m sure after reading this piece you would get an insight of what awaits for you at IIT Ropar and where you would be in next year.</p>
                    <p>The 1st day when you enter IIT Ropar; you will hear from the greatest authority of the institute the honorable director. You would soon realize that he no less than Mark Antony and even our PM in delivering great heart filling speeches. He is a man working against all odds to forth towards the progress of the institute.
                    </p>
                    <p>The starting one week would be like an incubation period with lots of intros and fun activities. A more of get to know each other.Then will come orientation from different clubs and societies and I recommend all of you try attending them. The clubs range from Cultural to Technical catering to all different tastes and needs. As the classes start you will get a better insight of the academic system. Then follows the fresher’s night which most of you would consider as the most amazing thing in your life but rest assured as this title would soon be snatched by an upcoming event. As and when Mid Semester arrives you would see a lot of change around you giving you a glimpse of group work and competition.
                    </p>
                    <p>Ohh I almost forget, you may get a chance to cast vote in elections where whole institute would seem like a big campaign with lots of new faces visiting you for the first time just to get votes. The scene would resemble the the Lok Sabha elections of India. Then would come the Inter IIT Sports Meet where the best compete the best. By this time who would have gained a lot of exposure to develop your soft and technical skills from various events and seminar at the institute. Sometimes you might find the new life challenging where we seniors or better say experienced friends would help you tide out. The finale for the first semester would be the end semester where you would realize sometimes their are other things dearer than sleep. By the time you return home, many of you would have lots of experiences to share a lot with your family and old friends about your amazing life at Ropar and the countless trips you would have made to Chandigarh, Amritsar, Manali.
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