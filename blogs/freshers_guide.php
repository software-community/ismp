<?php include('../elem/connection.php'); ?>
<?php 
$blog_id = 'freshers_guide';
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
                <div class="blog-page-title">Fresher's Guide</div><br>
                <div class="blog blog-auth blog-no-sep">
                    <div class="blog-auth-photo">
                        <img src="../images/blogs/ppl/team-avatar.jpg">
                    </div>
                    <div class="name">ISMP Team</div>
                    <div class="date">Older · 3 min read | <i class="fa fa-eye" aria-hidden="true"></i><?php echo"&nbsp&nbsp$view";?></div>
                </div>
                <div class="blog-page-article">
                    <h3><b>IMPORTANT NOTES:</b></h3>
                    <p>Hostel rooms will be allotted on first come first serve basis.</p>
                    <p>Hostels are well equipped with LAN and Wi-Fi. You will not be able to access them immediately but you can, in a day or two after you get user id and password from IT section at IIT Ropar.</p>
                    <p>Register yourself with library as early as possible as it will be the sole source for your initial study.
                        Get your bonafide certificates from the academic section on first or very next day as it will help you to get a new mobile connection and a bank account at IIT Ropar branch of SBI</p>
                    <p>Get yourself an account at SBI branch IIT Ropar asap, as it will be the only account you can handle easily and easily access from the campus itself for your stay in campus.</p>
                    <p>Get in touch with your seniors asap as they will be a handy source to guide you well for remaining rest of your 4 years</p>
                    <h3><b>Necessary Things to buy for hostels:</b></h3>
                    <ol class="list-1" style="margin-left:-40px">
                        <li> Scientific Calculator – fx 991 ES (preferably) or Fx 991-MS. You will require this more than your books for next four years. So it is better to buy it from home only.</li>
                        <li>A well conditioned medium size college bag. Forget about all the movie stuffs you will have to carry much more here. In later stages laptop will be the thing you will be carrying the most.</li>
                        <li>Bedsheets .But no special need of buying daily stuff like bucket, mug and matteresses from home as they will be available to buy inside the campus on the day of registration. Also it is good to buy from there only.</li>
                        <li>Some locks and keys as you will have to lock your luggage on the first day as it will be very busy .
                            After that it will be ok …</li>
                    </ol>
                    <h3><b>Facilities inside and around campus:</b></h3>
                    <ol class="list-1" style="margin-left:-40px">
                        <li>Cafeteria inside the campus generally open from 8 in the morning to 12 in the night.
                            Also there is a Juice Corner in Utility Block.</li>
                        <li>Laundary services are available within the hostels. You just have to give Rs15 for 10 clothes and you are done. Giving your own detergent is optional.</li>
                        <li>One stationary shop inside campus.</li>
                        <li> Geysers are available inside the hostels 24 hrs. Believe it most of us use only once a week in winters </li>
                        <li> In initial stages laptop will not be necessary as you will be having computer labs and that will be sufficient. Also laptop at such a starting stage gets you neglect your study more….its just a general experience!</li>
                    </ol>
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