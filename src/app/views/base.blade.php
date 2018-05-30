<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<!-- Title here -->
	<title>Manual de Prácticas</title>
	<!-- Description, Keywords and Author -->
	<meta name="description" content="Manual de prácticas de laboratorio para el procesamiento de imágenes de satélite y análisis de datos Geoespaciales">
	<meta name="keywords" content="procesamiento,geoespaciales">
	<meta name="author" content="DICYG">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Flex Slider CSS -->
	<link href="css/flexslider.css" rel="stylesheet">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<!--<link rel="stylesheet" href="css/settings.css" media="screen" />-->
	<!-- Pretty Photo -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<!-- Font awesome CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">		
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
	<link href="css/blue.css" rel="stylesheet"> 

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon/favicon.png">
    </head>

    <body>
	<!-- Header starts -->
	<header>
	    <div class="container">
		<div class="row">
		    <div class="col-md-4 col-sm-4">
			<!-- Logo and site link -->
			<div class="logo">
			    <h1><a href="index.html">Laboratorio Geoespacial<span class="color">.</span></a></h1>
			</div>
		    </div>
		</div>
	    </div>
	</header>
	<!--/ Header ends -->

	<!-- Navigation Starts -->
	<!-- Note down the syntax before editing. It is the default twitter bootstrap navigation -->
	<div class="navbar bs-docs-nav" role="banner">
	    <div class="container">
		<div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		    <!-- Navigation links starts here -->
		    <ul class="nav navbar-nav">
			<li><a href="{{ home_url() }}">Inicio</a></li>
			<!-- Navigation with sub menu. Please note down the syntax before you need. Each and every link is important. -->
			<li><a href="acerca">Acerca de</a></li>
			<li><a href="videos">Videos</a></li>
			<li><a href="practicas">Prácticas</a></li>
			<li><a href="citas">Citas</a></li>
			<li><a href="contacto">Contacto</a></li>
		    </ul>
		</nav>
	    </div>
	</div>
	<!--/ Navigation Ends -->   

	@yield('content')

	<!-- Footer -->
	<footer>
	    <div class="container">
		<div class="row">
		    <div class="col-md-4">
			<!-- Widget 1 -->
			<div class="widget">
			    <h4>Autores</h4>
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum. </p>
			    <!-- Social Media -->
			    <div class="social">
				<a href="#"><i class="fa fa-twitter twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook facebook"></i></a>
				<a href="#"><i class="fa fa-google-plus google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin linkedin"></i></a>
			    </div>
			</div>
		    </div>
		    <div class="col-md-4">
			<!-- widget 2 -->
			<div class="widget">
			    <h4>Ligas de Interes</h4>
			    <ul>
				<li><i class="fa fa-angle-right"></i> <a href="#">Sed eu leo orci, in rhoncus puru</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="#">Condimentum gravida metus</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="#">Lpsum, in rhoncus purus</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="#">Etiam at in rhoncus puru nul</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="#">Fusce vel magnais dapibus facilisis</a></li>
			    </ul>
			</div>
		    </div>
		    <div class="col-md-4">
			<!-- Widget 3 -->
			<div class="widget">
			    <h4>Software Libre</h4>
			    <ul>
				<li><i class="fa fa-angle-right"></i> <a href="https://qgis.org/es/site/">QGIS</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="http://www.saga-gis.org/en/index.html">SAGA</a></li>
				<li><i class="fa fa-angle-right"></i> <a href="https://step.esa.int/main/download/">SNAP</a></li>
			    </ul>
			</div>
		    </div>
		</div>
		<div class="row">
		    <hr />
		    <div class="col-md-12"><p class="copy pull-left">
			<!-- Copyright information. You can remove my site link. -->
			Copyright &copy; <a href="#">Laboratorio Geoespacial</a> | Designed by <a href="http://dicyg.fi-c.unam.mx">DICYG</a></p></div>
		</div>
	    </div>
	</footer>		
	<!--/ Footer -->

	<!-- Scroll to top -->
	<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 

	<!-- Javascript files -->
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Isotope, Pretty Photo JS -->
	<script src="js/jquery.isotope.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Support Page Filter JS -->
	<script src="js/filter.js"></script>
	<!-- Flex slider JS -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<!--<script src="js/jquery.themepunch.tools.min.js"></script>-->
	<!--<script src="js/jquery.themepunch.revolution.min.js"></script>-->
	<!-- Respond JS for IE8 -->
	<script src="js/respond.min.js"></script>
	<!-- HTML5 Support for IE -->
	<script src="js/html5shiv.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	<script>
	/* Flex Slider */

	$(window).load(function() {
	    $('.flexslider').flexslider({
	    animation: "slide",
		controlNav: true,
		pauseOnHover: true,
		slideshowSpeed: 15000
	    });
	});
	</script>
    </body>	
</html>
