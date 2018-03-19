
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TEDxUFMT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TEDxUFMT"/>
	<meta name="keywords" content="tedx, tedxufmt, ted, catalises, cuiaba, transforma, disruptivo" />
	<meta name="author" content="TEDxUFMT" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/static/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/static/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="/static/css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/static/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/static/css/owl.theme.default.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/static/css/bootstrap.css">

	<link rel="shortcut icon" href="https://pa.tedcdn.com/favicon.ico">
	
	<link rel="stylesheet" href="/static/css/style.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="/static/css/style.css">
	<!-- End demo purposes only -->

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style>
	/* For demo purpose only */
	
	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: inline;
	}
	#colour-variations li a {
		width: 20px;
		height: 20px;
		position: relative;
		float: left;
		margin: 5px;
	}
	#colour-variations li a[data-theme="style"] {
		background: #6173f4;
	}
	#colour-variations li a[data-theme="pink"] {
		background: #f64662;
	}
	#colour-variations li a[data-theme="blue"] {
		background: #2185d5;
	}
	#colour-variations li a[data-theme="turquoise"] {
		background: #00b8a9;
	}
	#colour-variations li a[data-theme="orange"] {
		background: #ff6600;
	}
	#colour-variations li a[data-theme="lightblue"] {
		background: #5585b5;
	}
	#colour-variations li a[data-theme="brown"] {
		background: #a03232;
	}
	#colour-variations li a[data-theme="green"] {
		background: #65d269;
	}

	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #f64662;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		max-width: 270px;
		margin: auto;
		text-align: center;
		padding-bottom: 1px;
		border-radius: 6px;
		height: 580px;
	}
	</style>
	<!-- End demo purposes only -->


	<!-- Modernizr JS -->
	<script src="/static/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="/static/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<?php
		include("head.php");
	?>

	<?php
		include("home.php");
	?>
	
	<?php
		include("ted.php");
	?>

	<?php
		include("tedxufmt.php");
	?>

	<?php
		include("speakers.php");
	?>

	<?php
		include("team.php");
	?>

	<!-- ?php
		include("blog.php");
	?> -->

	<?php
		include("features.php");
	?>

	<?php
		include("depoimentos.php");
	?>

	<?php
		include("patrocinadores.php");
	?>

	<?php
		include("inscricoes.php");
	?>
	
	<?php
		include("footer.php");
	?>		
	
	<!-- jQuery -->
	<script src="/static/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/static/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/static/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/static/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="/static/js/owl.carousel.min.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="/static/js/jquery.style.switcher.js"></script>
	<script>
	$(function(){
		$('#colour-variations ul').styleSwitcher({
			defaultThemeId: 'theme-switch',
			hasPreview: false,
			cookie: {
	          	expires: 30,
	          	isManagingLoad: true
	      	}
		});	
		$('.option-toggle').click(function() {
			$('#colour-variations').toggleClass('sleep');
		});
	});

	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	})
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="/static/js/main.js"></script>

	</body>
</html>
