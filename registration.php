<!DOCTYPE html>
<html lang="en">
<?php include('connect.php') ?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>
  
  <body id="page-top">
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Motorbike Diaries</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            
            <!--
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin.php" target="_blank">Admin</a> 
            </li>
            -->
          </ul>
        </div>
      </div>
    </nav>
<!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Register</div>
          <div class="intro-heading ">You must register to send message!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#register">Register</a>
		  </br>
		  <div class="intro-heading-2 ">Already a member?</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="login.php">Log in</a>
        </div>
      </div>
    </header>

<!-- Contact -->
    <section id="register">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <h2 class="section-heading text-uppercase">Register</h2>
            <h3 class="section-subheading text-muted">Get enrolled</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" action="registration.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password_1" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" type="password" name="password_2" placeholder="Confirm Password *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="col-lg-12 ">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="reg_user">Register!</button>
                </div>
              </div>
            </form>
			
          </div>
        </div>
      </div>
    </section>
	</body>
	</html>