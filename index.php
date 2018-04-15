<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<head>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!--Default Theme Style -->
	<link rel="stylesheet" href="css/style.css">


	<style>
	/*cutom css*/	
	.testimonial-align{
		margin-top: 15px !important;
	}
	</style>


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php
	/*if ($_FILES["fileToUpload"]["size"] > 500000) {}*/
	
	//$name = $_FILES['fileToUpload']['name'];
        //$tp_nme = $_FILES['fileToUpload']['tmp_name'];
        
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$subject = $name .','. $email.' ,'.$phone.','.$message;
	mail("info@scribble3d.in","Scribble Contact Form",$subject );
?>

<div class="jumbotron text-xs-center">
  <h1 class="display-3 text-center">Thank You for contacting us!</h1>
  <p class="lead text-center"><strong>We will respond to your query as soon as posssible.</strong> </p>
  <hr>
  <p class="lead text-center">
    <a class="btn btn-primary btn-sm" href="http://www.scribble3d.in" role="button-primary">Continue to homepage</a>
  </p>
</div>

<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>