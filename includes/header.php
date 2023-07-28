<?php 
  session_start();


  define("APPURL","http://localhost/jobboard");
?>


<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/custom-bs.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/fonts/line-icons/style.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/style.css">    
  </head>
  <body id="top">

  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="<?php echo APPURL; ?>">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
<<<<<<< Updated upstream
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
              
            
              <li><a href="contact.html">Contact</a></li>
              <?php if(isset($_SESSION['username'])):?>
              <li><a href="contact.html"><?php echo $_SESSION['username']; ?></a></li>
              <li><a href="<?php echo APPURL; ?>/Auth/logout.php">Logout</a></li>
                  <?php endif; ?>
=======
            <ul style="margin-right: -500px" class="site-menu js-clone-nav d-inline d-xl-block ml-0 pl-0">
              <li><a href="<?php echo APPURL; ?>" class="nav-link active">Home</a></li>
              <li><a href="<?php echo APPURL; ?>/about.php">About</a></li>
              <li><a href="<?php echo APPURL; ?>/contact.php">Contact</a></li>


              <?php if(isset($_SESSION['username'])):?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php echo $_SESSION['username'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo APPURL; ?>/users/public-profile.php?id=<?php echo $_SESSION['id'];?>">Public Profile</a>
                  <a class="dropdown-item" href="#">Update Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo APPURL; ?>/Auth/logout.php">Logout</a>
                </div>
              </li>
              <li class="d-lg-inline"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
                  <?php else:; ?>
>>>>>>> Stashed changes

              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="<?php echo APPURL;?>/Auth/login.php">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="<?php echo APPURL;?>/Auth/login.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
              <a href="<?php echo APPURL;?>/Auth/register.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Register</a>

            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>