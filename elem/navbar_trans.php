<style>
  nav {
    padding-top: 0 !important;
    padding-bottom: 5px !important;
  }

  .reg-button {
    background: transparent;
    padding: 6px 10px;
    color: #f44336;
    border: 1px solid #f44336;
    font-weight: 600 !important;
    font-family: 'Montserrat';
    margin: auto;
    transition: all 0.15s ease-in-out;
  }

  .reg-button:hover {
    color: #aaa;
    border: 1px solid #aaa;
  }

  .navbar .container {
    /*background-color: rgba(0,0,0,0.6) !important;*/
    margin: auto !important;
    max-width: 100% !important;
    font-size: 25px !important;
    padding: 7px !important;
  }

  @media (max-width: 660px) {
    .navbar .container {
      max-width: 100% !important;
    }

    .navbar-collapse {
      overflow-y: auto;
      background: white;
      margin-right: -8px !important;
    }
  }

  .navbar .container li a {
    font-family: 'Montserrat' !important;
    letter-spacing: 0.5px !important;
  }

  .navbar-brand img {
    width: 150px;
  }

  @media (min-width: 1250px) {
    .navbar .container li a {
      font-size: 12px !important;
    }

  }

  @media (max-width: 1249px) {
    .navbar .container li a {
      font-size: 9.5px !important;
    }
  }

  @media (max-width: 1180px) {
    .navbar .container li a {
      font-size: 9px !important;
    }

    .navbar-brand img {
      width: 100px !important;
      margin-top: -5px !important;
    }
  }

  @media (max-width: 1100px) {
    .navbar .container li a {
      font-size: 7.5px !important;

    }

    .navbar-brand img {
      width: 100px !important;
      margin-top: -5px !important;
    }

    .nav-item-md {
      width: 80px !important;
    }
  }

  @media (min-width: 992px) {}

  @media (max-width: 992px) {
    .navbar .container li a {
      font-size: 12px !important;
    }

    .navbar-brand img {
      width: 150px !important;
    }

    .nav-item-md {
      width: 100% !important;
    }

    .nav-item-md img {
      margin-bottom: 50px;
      width: 70% !important;
    }
  }

  @media (min-width: 768px) {

    .nav-item-md {
      width: 120px;
      height: 50px;
      line-height: 0px !important;
    }

    .nav-item-md img {
      width: 100%;
    }
  }

  @media (max-width: 767px) {}
</style>


<nav class="navbar bg-white navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="<?php echo "$root_path"; ?>index.php">
        <div class="row">
          <img src="<?php echo "$root_path"; ?>images/logo/logo.png" class="img-fluid" style="margin-top: -15px; margin-left:30px; margin-right: 30px;">
        </div>
      </a>

      <!--<a class="navbar-brand" href="index.php"><h1>IIT Ropar</h1><h2>ISMP</h2></a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>about_us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>schedule.php">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>campus_life.php">Campus Life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.iitrpr.ac.in/jee-aspirants/index.php" target="_blank" rel="noopener noreferrer">JEE Aspirants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>our_team.php">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$root_path"; ?>faqs.php">FAQs</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="margin:auto !important">
          <a class="nav-link" href="<?php echo "$root_path"; ?>register.php">
            <div class="reg-button"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspRegister</div>
          </a>
        </li>
        <li class="nav-item" style="margin:auto !important">
          <a class="nav-link" href="<?php echo "$root_path"; ?>contact_us.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp&nbspContact Us</a>
        </li>
        <!--
        <li class="nav-item nav-item-md" style="margin:auto !important;">
          <a href="" download="<?php echo $root_path; ?>app/ismp.apk">
            <img src="<?php echo $root_path; ?>images/logo/app.png" style="border-radius:5px;">
          </a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>