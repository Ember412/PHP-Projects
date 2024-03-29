<!DOCTYPE html>
<html lang="en">
<head>

	<title>Register Page:Embery Doughnuts Online Delievery Service</title>
<!--

Tooplate 2083 Steak House

https://www.tooplate.com/view/2083-steak-house

-->
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

    <link href="eat.css" type=" text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>

<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <img class="logo" src="images/logo.jpg">
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="index.php" class="smoothScroll">Back to Homepage</a></li>
        
      </ul>
    </div>

  </div>
</div>

<!-- Contact section -->
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Here to Register</h2>
<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>

</div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					<form id="contact-form" method="post" action="#">
						<input type="text" id="t1" name="t1" class="form-control" placeholder="Your Name" required>
						<input type="email" id="t2" name="t2" class="form-control" placeholder="Your Email" required>
            <input type="password" id="t3" name="t3" class="form-control" placeholder="Password" required>
            <input type="phone" id="t4" name="t4" class="form-control" placeholder="Contact Number" required>
            <input type="city" id="t5" name="t5" class="form-control" placeholder="Your City" required>
            <input type="country" id="t6" name="t6" class="form-control" placeholder="Your Country" required>
						<input type="submit"  name="sub"  id="sub" class="form-control submit" value="REGISTER">
            <input type="reset"  name="Cancle"  id="Cancle" class="form-control submit" value="CANCLE">
					</form>
                    <h2><?php echo $error;?></h2>
				    </div>
           
			</div>
    </div>
		</div>
	</div>
</section>


<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
      <p>Copyright © Embery Doughnuts 2022
        
        - Designed by <a rel="nofollow" class="designed-by" href="https://www.facebook.com/yoon.yatilwin.7">Ember</a></p>
      </div>  

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#top" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>