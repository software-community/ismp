<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'ismp';
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
                <div class="blog-page-title">Institute Student Mentorship Programme</div><br>
                <div class="blog blog-auth blog-no-sep">
                    <div class="blog-auth-photo">
                        <img src="../images/blogs/ppl/team-avatar.jpg">
                    </div>
                    <div class="name">ISMP Team</div>
                    <div class="date">Older · 2 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
                </div>
                <div class="blog-page-article">
                    <p>Congratulations on making it to IIT Ropar, where you’ll spend some of the best times of your life. You’ve probably received loads of congratulations on your success in JEE. Let us add ours to this pile. Now down to business about the Student Mentorship Program.As you pack your bags for IIT Ropar, there are likely to be a lot of questions on your mind about your future life here. We have tried to answer many of these here. Many new questions will emerge as you maneuver around the labyrinth of processes and procedures, courses and activities at IIT. This is where your mentor comes in.</p>
                    <p>IIT Ropar will strive to assist your upcoming journey. The journey, where you not only aim about emplacement but also add a lot of escapades in your life. Of course, there will be obstacles which you need to hurdle upon. This is where we think the experiences of your next higher students comes into play to mentor you.The Institute Student Mentorship Program (ISMP), is a program within the IIT Ropar, with the primary objective to enable constructive and positive interaction, guidance and mentorship of junior students by senior students.</p>
                    <p>The vision is to inculcate right attitude from beginning and sustain an environment that promotes personal growth and participation in creation of tender community. For this purpose, the ISMP carefully selects mentors from amongst senior students at IIT Ropar-someone that you can approach with queries on any issue like academics, extracurricular, personal life or the issue of maintaining a balance between them. They will be your friends, philosophers and guides through your exciting journey in IIT Ropar. We will try to ensure that each individual’s personal and academic life is hassle free while his/her stay in IIT Ropar .We will keep in touch with you all through out the year, interacting and learning from you about your experiences through this system.</p>
                    <p><b>Wishing you good luck for your stay at IIT Ropar.</b></p>
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