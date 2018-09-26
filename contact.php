<?php

if ($_POST["submit"]) {

      
      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
     
     
     if (!$_POST['phone']) {
     
      $error.="<br /> Please enter your phone number";
     
     }
     
      
     if (!$_POST['message']) {

       $error.="<br />Please enter a message";

     }
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }
     
      
     if ($error) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

      /* THE EMAIL WHERE YOU WANT TO RECIEVE THE CONTACT MESSAGES */
 if (mail("youremailaddress.com", "Message from Your Website Name",
  
 
"Name: ".$_POST['name']."
Email: ".$_POST['email']."
Phone: ".$_POST['phone']." 
Message: ".$_POST['message'])) {
$result='<div class="alert alert-success"> <strong> Thank
you!</strong> We\'ll get back to you shortly.</div>';
} else {
$result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
}
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
  <!-- Meta Description -->
  <meta content="" name="description">

  <title>Contact Chiropractors</title>

      <!-- CSS Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/contact-page-styling.css" rel="stylesheet" type="text/css">
  <link href="css/navbar.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">

  <!-- Favicon -->
  <link href="images/chiropractors-favicon.png" rel="icon">

</head>

<body>

  <div align="center" id="top-banner">

    <p align="right" class="top-quote">Are you a Chiropractor?<br> 

      <a href="https://yourwebsitename.com/apply-to-be-listed.html"><strong>Apply to be Listed Here</strong></a></p>

    <!--Website Logo-->

      <a href="https://yourwebsitename.com/"><img alt="chiropractors-logo" class="logo img-responsive" src="images/chiropractors-logo-img.png"></a>

        <p class="tagline">Chiropractors in Seattle</p>

  </div><!-- /.top-banner-->

  <nav class="navbar navbar-default navbar-static-top" id="topnavbar" role="navigation">

    <div class="container">

      <div class="navbar-header">

        <button class="navbar-toggle" data-target=" .navbar-collapse" data-toggle="collapse" type="button">

            <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>

        </button>

      </div><!-- /.navbar-header-->

      <div align="center" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">

            <li class="dropdown">

              <p aria-expanded="false" aria-haspopup="true" class="dropdown-toggle highlighted" data-toggle="dropdown" role="button">VIEW CHIROPRACTORS <span class="caret"></span></p>

                <ul class="dropdown-menu">

                  <li><a href="https://yourwebsitename.com/chiropractors-capitol-hill.html">CAPITOL HILL</a></li>

                    <li class="divider" role="separator"></li>

                  <li><a href="https://yourwebsitename.com/chiropractors-mount-baker.html">MOUNT BAKER</a></li>

                    <li class="divider" role="separator"></li>

                  <li><a href="https://yourwebsitename.com/chiropractors-greenwood.html">GREENWOOD</a></li>

                    <li class="divider" role="separator"></li>

                  <li><a href="https://yourwebsitename.com/chiropractors-ravenna.html">RAVENNA</a></li>
            
                </ul>

            </li><!--- /.dropdown-->

            <li><a href="https://yourwebsitename.com/apply-to-be-listed.html"><span class="hvr-underline-from-center">APPLY TO BE LISTED</span></a></li>

            <li><a href="https://yourwebsitename.com/blog.html"><span class="hvr-underline-from-center">BLOG</span></a></li>

            <li><a href="https://yourwebsitename.com/contact.php"><span class="hvr-underline-from-center">CONTACT</span></a></li>

        </ul>

      </div><!-- /.navbar-collapse-->

    </div><!-- /.conatiner-->

  </nav><!-- /nav-->

  
  <div class="contact-banner">

    <div class="row">

      <div class="col-md-4 col-md-offset-4">

        <h3 align="center">CONTACT US</h3><br><br><br><br><br><br>

        <p align="center" id="result"><?php echo $result; ?></p>

      </div><!--- /.col-md-->

    </div><!--- /.row-->

  </div><!--- /.contact-banner-->

  <div class="contactusform">

    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-5 contact-details"><br>

        <div class="contact-info">

          <p class="contact-heading">CONTACT</p><br>

          <p class="info">If you have any questions or you would like to get listed on the website you can either email us directly or just fill the form and we will get back to you.</p><br>
          <br>

          <p class="info"><strong><u>TEL</u> -</strong> +1-202-555-0170<br><br>

          <strong><u>EMAIL</u> :</strong> info [@] yourwebsitenanme.com</p><br><br><br><hr>

        </div><!--- /.contact-info-->

      </div><!--- /.contact-info-->

      <div align="center" class="col-md-6 emailForm">
      
        <h4 align="center">If you have any questions, please fill in the form and we will get back to you asap.</h4>

        <form method="post">

          <div class="form-group">
            <label for="name">Name:</label> <input class="form-control" name="name" placeholder="Your Name" type="text" value="<?php echo $_POST['name']; ?>">
          </div>

          <div class="form-group">
            <label for="email">Email:</label> <input class="form-control" name="email" placeholder="Your Email" type="email" value="<?php echo $_POST['email']; ?>">
          </div>

          <div class="form-group">
            <label for="phone">Contact Number:</label> <input class="form-control" name="phone" placeholder="Your Phone" type="tel" value="<?php echo $_POST['phone']; ?>">
          </div>

          <div class="form-group">
            <label for="message">Message:</label> 
            <textarea class="form-control" id="message" name="message"><?php echo $_POST['message']; ?></textarea>
          </div><br><br>

          <p align="center"><input class="btn btn-success btn-lg" name="submit" type="submit" value="Send Message"></p><br>
        </form>

      </div><!--- /.emailForm-->

    </div><!-- /.row-->

  </div><!--- /.contactusform-->


<footer class="footer">

    <div align="center" class="footerlinks">

      <a href="https://yourwebsitename.com/apply-to-be-listed.html">APPLY TO BE LISTED</a> 

      <a href="https://yourwebsitename.com/blog.html">BLOG</a> 

      <a href="https://yourwebsitename.com/contact.php">CONTACT</a>

    </div><!-- /footerlinks-->

    <div align="center" class="social-links">

      <a href="https://www.facebook.com/" target="_blank"><svg style="width:35px; height:35px" viewbox="0 0 24 24">
      <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" fill="#d6d6d6"></path></svg></a>

    </div><!-- /.social-link-->

    <div align="center" class="policy-links">

      <a href="https://yourwebsitename.com/privacy-policy.html" rel="nofollow">Privacy Policy</a> 
      <a href="https://yourwebsitename.com/terms-and-conditions.html" rel="nofollow">Terms &amp; Conditions</a>

    </div><!-- /.policy-links-->


    <p align="center" class="text-muted footertext">&copy; yourwebsitename.com</p> 

</footer><!-- /footer-->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
  </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <script src="js/bootstrap.min.js">
  </script> 

  <!-- Navbar Affix Script-->
  <script>
  $('#topnavbar').affix({
     offset: {
         top: $('#top-banner').height()
     }   
  }); 
  </script>

</body>

</html>