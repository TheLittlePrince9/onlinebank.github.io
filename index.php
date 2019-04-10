<?php  session_start();
$y=1;# themewagon.com ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>myBanking</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
  <div id="preloader"></div>

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">abcd@gmail.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">


 
      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Signatory Banking</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
		<?php
		if(isset($_GET['logout']))
		{
			if($_GET['logout'] == 1)
			{
				if(empty($_SESSION['user']))
				{?>
					<script>
                    	window.location.href="index.php";
                    </script>	
				<?php 
				}
			}
		}
		########################### FROM DETAILS TABLE #############################
		 	if(isset($_SESSION['user']))# From login details      
			{  
			$y=0;
			?> 
     	 		<nav id="nav-menu-container">
        			<ul class="nav-menu">
          				<li class="menu-active"><a href="#body">Home</a></li>
          				<li><a href="#about">About Us</a></li>
          				<li><a href="#services">Services</a></li>
          				<li><a href="#portfolio">Help</a></li>
          				<li><a href="#team">Members</a></li>
          			<!--
          			<?php if(!isset($_GET['success'])) # ADMIN icon disappear after login
		  			{?>
          				<li><a href="#" data-toggle="modal" data-target="#myModal2">Admin</a></li>
		  			<?php } ?>-->
         			<!-- 
         			#Login disappear when user is logged in 
            		<li class="menu-has-children"><a href="">Login</a>
           			<ul>
            		  <li><a href="#" data-toggle="modal" data-target="#myModall">New User</a></li>
            		  <li><a href="#" data-toggle="modal" data-target="#myModal">Existing User</a></li>-->
            	  <!--<li><a href="#">Drop Down 4</a></li>
            		  <li><a href="#">Drop Down 5</a></li>
            		</ul>
          			</li>-->
                    <li>Welcome <?php echo $_SESSION['user']['name']?></li>
         				<li><a href="controls/logout.php">Logout</a></li><!--<a href="#contact">Logout</a>-->
         			</ul>
      			</nav><!-- #nav-menu-container -->
     	 <?php }?>
		 
      <?php ##################### FROM ACCOUNT HOLDER TABLE ########################
		  if(isset($_SESSION['user1']))# From login details      
			{ $y=0;  
			?> 
     	 		<nav id="nav-menu-container">
        			<ul class="nav-menu">
          				<li class="menu-active"><a href="#body">Home</a></li>
          				<li><a href="#about">About Us</a></li>
          				<li><a href="#services">Services</a></li>
          				<li><a href="#portfolio">Help</a></li>
          				<li><a href="#team">Members</a></li>
          			<!--
          			<?php if(!isset($_GET['success'])) # ADMIN icon disappear after login
		  			{?>
          				<li><a href="#" data-toggle="modal" data-target="#myModal2">Admin</a></li>
		  			<?php } ?>-->
         			<!-- 
         			#Login disappear when user is logged in 
            		<li class="menu-has-children"><a href="">Login</a>
           			<ul>
            		  <li><a href="#" data-toggle="modal" data-target="#myModall">New User</a></li>
            		  <li><a href="#" data-toggle="modal" data-target="#myModal">Existing User</a></li>-->
            	  <!--<li><a href="#">Drop Down 4</a></li>
            		  <li><a href="#">Drop Down 5</a></li>
            		</ul>
          			</li>-->
                    <li>Welcome <?php echo $_SESSION['user1']['name']?></li>
         				<li><a href="controls/logout.php">Logout</a></li><!--<a href="#contact">Logout</a>-->
         			</ul>
      			</nav><!-- #nav-menu-container -->
     	 <?php }
			 if($y!=0)
	  		{  ?>
     		 <nav id="nav-menu-container">
        		<ul class="nav-menu">
          			<li class="menu-active"><a href="#body">Home</a></li>
          			<li><a href="#about">About Us</a></li>
          			<li><a href="#services">Services</a></li>
          			<li><a href="#portfolio">Help</a></li>
          			<li><a href="#team">Members</a></li>
          
          			<?php if(!isset($_GET['success'])) # ADMIN icon disappear after login
		  			{?>
          			<li><a href="#" data-toggle="modal" data-target="#myModal2">Admin</a></li>
		  			<?php } ?>
                    
          			<li class="menu-has-children"><a href="">Login</a>
            		<ul>
              			<li><a href="#" data-toggle="modal" data-target="#myModall">New User</a></li>
              			<li><a href="#" data-toggle="modal" data-target="#myModal">Existing User</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModalA">Account Holders</a></li>
              <!--<li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>-->
           	 		</ul>
          			</li>
          			<li><a href="#contact">Contact Us</a></li>
         		</ul>
      		</nav><!-- #nav-menu-container -->			  
	  <?php 
	 		 } ?>
			 
	 		 
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="wow fadeIn">

    <div class="intro-content">
      <h2>Your Money is <span>Secured</span><br>with Us!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">work</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/abcd.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
  <?php ###### INCLUDED files ################## KEEP IN BODY and not in header section
 include ('controls/connection.php');
 include ('view/loginView.php');
 include ('view/signupView.php');
 include ('admin/view/adloginView.php');
 include ('view/accountopen.php');
 include ('view/accountholderlogin.php');
 include ('view/userprofileView.php');
 include ('view/sendmoney.php');
 include ('view/transhistory.php');

 ###############################################?>

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>BANKING FOR ALL</h2>
            <h3>In India, Signatory plc is one of the largest INDIA employers and employs over 23,000 people spread across it's banking, technology and shared services operations.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Signatory Bank plc, which has had a branch presence in India since 1990, has achieved market leading positions in it's chosen lines of business that include Corporate Banking. </li>
              <li><i class="ion-android-checkmark-circle"></i> Signatory has been a Top 5 arranger of domestic debt since 2018 and a Top 3 arranger of offshore bonds in 2018.</li>
              <li><i class="ion-android-checkmark-circle"></i> Wealth Management, which operates through Signatory Securities & Investments Pvt Ltd (SSIPL), has attained a leading position within just one year of being set up and has been voted the Best Private Bank in India by The Asset for this year.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>We offer simple Banking Solutions including Debit Card facility and UPI based transactions with your AADHAR</p>
        </div>

        <div class="row">
  <?php 
		if(isset($_SESSION['user1']))     # Account holder loged in
		{ ?>
         
		<div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="" data-toggle="modal" data-target="#myModalP">Profile</a></h4>
              <p class="description">Look into your existing profile and update it as per your need.</p>
            </div>
          </div>

         <!-- <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Loans</a></h4>
              <p class="description">Be it a Car Loan, Education Loan, Home Loan or Personal Loans, we offer Solutions to every problems with door to door connectivity and Simplicity.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Debit Cards</a></h4>
              <p class="description">Apply for your New Debit Card or renew your Old Card Here. We provide VISA, MASTER CARD & RUPAY Debit Cards for national or international use.</p>
            </div>
          </div>-->

<!--/*          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">AADHAR Link</a></h4>
              <p class="description">Link your all important AADHAR by just providing your card. Remember, your data is secured with Us.</p>
            </div>
          </div>
*/-->


 <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="#" data-toggle="modal" data-target="#myModaltrans">Transactions</a></h4>
              <p class="description">Check your Monetary Transactions right Here.</p>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="#" data-toggle="modal" data-target="#myModalsendmoney">Send Money</a></h4>
              <p class="description">Want to Send Moeny? </p>
            </div>
          </div>
			<?php } 
            else #of session
			{ ?>
		  <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="" data-toggle="modal" data-target="#myModal3">Account Opening</a></h4>
              <p class="description">Savings Bank Account can easily be operated and created with one touch connectivity from anywhere on the Planet.</p>
            </div>
          </div>

         <!-- <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Loans</a></h4>
              <p class="description">Be it a Car Loan, Education Loan, Home Loan or Personal Loans, we offer Solutions to every problems with door to door connectivity and Simplicity.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Debit Cards</a></h4>
              <p class="description">Apply for your New Debit Card or renew your Old Card Here. We provide VISA, MASTER CARD & RUPAY Debit Cards for national or international use.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">AADHAR Link</a></h4>
              <p class="description">Link your all important AADHAR by just providing your card. Remember, your data is secured with Us.</p>
            </div>
          </div>-->



 <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Transactions</a></h4>
              <p class="description">Check your Monetary Transactions right Here.</p>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Send Money</a></h4>
              <p class="description">Want to Send Moeny? </p>
            </div>
          </div>	
		<?php	
			}#end of session end ?>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
   <!-- <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Help</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
   <!-- <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section>--><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
   <!-- <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>--><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Kaustav Mandal</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Abhas Somya</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

         <!-- <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>-->

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>

     <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <script>
  function edit(id,col,val,tick){
		
		alert(val);
		$.ajax({
			url:"controls/saveChanges.php",
			data:{id:id,col:col,val:val},
			type:"POST",
			success: function(response){
				if(response==1)
				{
					$(tick).fadeIn(1000);
					
						setTimeout(function(){ $("#showprofile").load("controls/updateViewprofile.php");},4000);
						
				}else{
					alert(response);	
				}
			}
		});
  }
  </script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
  $(document).ready(function(e) {//to load updateViewprofile.php instead of loading the whole page. using jquery 
			
                $("#showprofile").load("controls/updateViewprofile.php");//display
            });
  </script>

</body>
</html>
