<!DOCTYPE html>
 	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ghure Ashi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/animate.css') ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/icomoon.css') ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/bootstrap.css') ?>">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/superfish.css') ?>">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/magnific-popup.css') ?>">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/bootstrap-datepicker.min.css') ?>">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/cs-select.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/cs-skin-border.css') ?>">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/FrontEnd/css/style.css') ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/FrontEnd/js/modernizr-2.6.2.min.js') ?>"></script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="<?php echo base_url('home') ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo base_url('home') ?>"><i class="icon-airplane"></i>Ghure Ashi</a></h1>

					<nav id="fh5co-menu-wrap" role="navigation">
				<ul class="sf-menu" id="fh5co-primary-menu">
				    <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                    
                    
                    <?php if ($this->session->userdata('id')) { ?>
                    <li><a href="<?php echo base_url('home/package') ?>">Packages</a></li>
                    <li><a href="<?php echo base_url('home/places') ?>">Places</a></li>
                    <li><a href="<?php echo base_url('home/guide') ?>">Guide</a></li>
                    <li><a href="<?php echo base_url('home/contact') ?>">Contact</a></li>
                   	<li>
								<a href="" class="fh5co-sub-ddown">User Account</a>
								<ul class="fh5co-sub-menu">
									 <li><a href="<?php echo base_url('home/logout') ?>">Logout</a></li>
                    <li><a href="<?php echo base_url('home/customerPackage') ?>">Your Package</a></li>
                    <li><a href="<?php echo base_url('home/customerWithGuide') ?>">Your Guide</a></li>
								</ul>
							</li>


                   
                   <?php } elseif($this->session->userdata('User_type')) { ?>
						<li><a style="" href="<?php echo base_url('home/customerRequestToGuide') ?>">Your Customer</a></li>
						<li><a href="<?php echo base_url('home/contact') ?>">Contact</a></li>
                      	<li><a style="" href="<?php echo base_url('home/logout') ?>">Logout</a></li>

                   <?php } else{ ?>
	                   	<li><a href="<?php echo base_url('home/package') ?>">Packages</a></li>
	                    <li><a href="<?php echo base_url('home/places') ?>">Places</a></li>
	                    <li><a href="<?php echo base_url('home/guide') ?>">Guide</a></li>
	                    <li><a href="<?php echo base_url('home/contact') ?>">Contact</a></li>
                     	<li>
								<a href="" class="fh5co-sub-ddown">Signin</a>
								<ul class="fh5co-sub-menu">
									 
                    <li><a href="<?php echo base_url('home/signin') ?>">User Signin</a></li>
                    <li><a href="<?php echo base_url('home/guidesignin') ?>">Guide Signin</a></li>
								</ul>
							</li>
                   <?php } ?>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>