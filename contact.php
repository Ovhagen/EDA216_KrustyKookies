<?php
session_start();

if (!isset($_SESSION['username'])) {
	die(header('location: index.html'));
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
        <link rel="icon" href="images/cookie1.png">

		<title>Krusty Kookies</title>

		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="css/carousel.css" rel="stylesheet">
	</head>
	<!-- NAVBAR
	 ================================================== -->
	 <body>
		 <div class="navbar-wrapper">
			 <div class="container">

				 <nav class="navbar navbar-inverse navbar-static-top navbar-custom">
					 <div class="container">
						 <div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								 <span class="sr-only">Toggle navigation</span>
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>
							 </button>
							 <a class="navbar-brand" href="home.php">Krusty Kookies</a>
						 </div>
						 <div id="navbar" class="navbar-collapse collapse">
							 <ul class="nav navbar-nav">
								 <li><a href="home.php">Home</a></li>
								 <li><a href="cookies.php">Cookies</a></li>
								 <li><a href="production.php">Production</a></li>
								 <li><a href="orders.php">Orders</a></li>
								 <li class="active"><a href="contact.php">Contact</a></li>
							 </ul>
							 <ul class="nav navbar-nav navbar-right">
								 <li><a href="php/logout.php">Logout</a></li>
							 </ul>
						 </div>
					 </div>
				 </nav>

			 </div>
		 </div>


		 <!-- Carousel
	   ================================================== -->
	   <div id="myCarousel" class="carousel slide" data-ride="carousel">
		   <!-- Indicators -->
		   <ol class="carousel-indicators">
			   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   <li data-target="#myCarousel" data-slide-to="1"></li>
			   <li data-target="#myCarousel" data-slide-to="2"></li>
		   </ol>
		   <div class="carousel-inner" role="listbox">
			   <div class="item active">
				   <img class="first-slide" src="images/cookie1.png" alt="First slide">
				   <div class="container">
					   <div class="carousel-caption">
						   <h1>Fabulous</h1>
						   <!--              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>-->
						   <!--              <p><a class="btn btn-lg btn-primary" href="#" role="button" background-color>Sign up today</a></p>-->
					   </div>
				   </div>
			   </div>
			   <div class="item">
				   <img class="second-slide" src="images/cookie1.png" alt="Second slide">
				   <div class="container">
					   <div class="carousel-caption">
						   <h1>Amazing</h1>
						   <!--              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
						   <!--              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
					   </div>
				   </div>
			   </div>
			   <div class="item">
				   <img class="third-slide" src="images/cookie1.png" alt="Third slide">
				   <div class="container">
					   <div class="carousel-caption">
						   <h1>Fantastic</h1>
						   <!--              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
						   <!--              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
					   </div>
				   </div>
			   </div>
		   </div>
		   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			   <span class="sr-only">Previous</span>
		   </a>
		   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			   <span class="sr-only">Next</span>
		   </a>
	   </div><!-- /.carousel -->      

	   <div class="container marketing">


		   <!-- Main jumbotron for a primary marketing message or call to action -->
		   <div class="jumbotron">
			   <h1>Contact</h1>
			   <p>Here are the three musketeers of Krusty Kookies AB.</p>
		   </div>    

		   <hr class="featurette-divider">

		   <!-- Three columns of text below the carousel -->
		   <div class="row">
			   <div class="col-lg-4">
				   <img class="img-circle" src="images/emil.jpg" alt="Generic placeholder image" width="140" height="140">
				   <h2>Emil Hammarström</h2>
				   <p><strong>Position:</strong> Developer, back-end</p>
				   <p><strong>Email:</strong> Dic14eh2@student.lu.se</p>
				   <p><strong>Phone number:</strong> 073-656 80 82</p>
				   <p><strong>Favourite cookie:</strong> Singoalla</p>
				   <!--          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			   </div><!-- /.col-lg-4 -->
			   <div class="col-lg-4">
				   <img class="img-circle" src="images/pontus.jpg" alt="Generic placeholder image" width="140" height="140">
				   <h2>Pontus Ovhagen</h2>
				   <p><strong>Position:</strong> Developer, design and scripting of database</p>
				   <p><strong>Email:</strong> Dic14pov@student.lu.se</p>
				   <p><strong>Phone number:</strong> 073-386 42 37</p>
				   <p><strong>Favourite cookie:</strong> Kvarg-cookie</p>
				   <!--          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			   </div><!-- /.col-lg-4 -->
			   <div class="col-lg-4">
				   <img class="img-circle" src="images/adam.jpg" alt="Generic placeholder image" width="140" height="140">
				   <h2>Adam Thuvesen</h2>
				   <p><strong>Position:</strong> Developer, front-end</p>
				   <p><strong>Email:</strong> Dic14ath@student.lu.se</p>
				   <p><strong>Phone number:</strong> 070-775 05 92</p>
				   <p><strong>Favourite cookie:</strong> Ballerina</p>
				   <!--          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
			   </div><!-- /.col-lg-4 -->
		   </div><!-- /.row -->    

		   <hr class="featurette-divider">


		   <!-- FOOTER -->
		   <footer>
			   <p class="pull-right"><a href="#">Back to top</a></p>
			   <p>&copy; 2016 Krusty Kookies, AB. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		   </footer>
	   </div><!-- /.container -->


	   <!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="dist/js/bootstrap.min.js"></script>
		<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
		<script src="assets/js/vendor/holder.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	 </body>
</html>
