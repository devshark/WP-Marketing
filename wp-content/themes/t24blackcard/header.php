<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<!-- Character set -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Title -->
	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<!-- Configure viewport for mobile / tabled devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Define keywords for search engines -->
	<meta name="keywords" content="Keyword1, Keyword2, Keyword3">

	<!-- Define a description of your web page -->
	<meta name="description" content="The only prepaid credit card alternative for high net worth individuals. Enjoy $50,000 load limit, Priority Pass and complimentary travel insurance.">

	<!-- Shorcut icon -->
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">

	<!-- Apple Touch Icon  -->
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-precomposed.png">

	<!-- Call Google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/jquery.bxslider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/jquery.sidr.dark.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/jqm-inlinetabs.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/perfect-icons.css" />
	<?php if ( ! is_home()){ ?>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/non-home.css" />
	<?php } ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="sidr-right" class="scrollto">
	<!-- Your content -->
	<nav>
		<ul>
			<li><a onclick="ga('send','event','Menu','Click','Home');" href="#home">Home</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Overview');" href="#card-overview">Overview</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Features');" href="#card-features">Features</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Fee Highlights');" href="#card-fees">Fee Highlights</a></li>
			<li><a onclick="ga('send','event','Menu','Click','FAQ');" href="#card-faq">FAQ</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Contact');" href="#contact">Contact</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Register Card');" href="#">Register Card</a></li>
			<li><a onclick="ga('send','event','Menu','Click','Sign In');" href="#">Sign in</a></li>
		</ul>
	</nav>
</div> 


<!-- HOME -->
<div id="home" class="home1" data-stellar-background-ratio="0.5" style="background-image:url(/wp-content/uploads/sites/8/2015/06/header-bg.jpg);">
	<div class="overlay"></div>
     <!-- Content -->
     <div id="home_content" class="slide" data-color="white">



		<!-- Header -->
          <div id="header">
     
               <!-- Logo Image -->
               <div id="logo">
                    <img onclick="ga('send','event','Header','Click','Logo');" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" width="150" alt="" />
               </div>
               
               <div class="menu-links">
               <span style="display: inline; margin-right: 20px;"><a onclick="ga('send','event','Header','Click','Apply Now');" href="https://apply.t24blackcard.com/apply" style="color: #fff !important;">APPLY NOW</a></span>
               <span style="display: inline; margin-right: 20px;"><a onclick="ga('send','event','Header','Click','Login');" href="https://www.secure.t24prepaid.com/" style="color: #fff !important;">LOGIN</a></span>
               <span style="display: inline;"><a onclick="ga('send','event','Header','Click','Register');" href="https://www.secure.t24prepaid.com/register" style="color: #fff !important;">REGISTER CARD</a></span>
               </div>
               

          <div class="clear"></div>
          </div>
          <!-- End: Header -->

          <!-- Header -->
          <div id="header" class="fixed" style="position: fixed; top: 30px; z-index: 999;">

               
               <div class="menu-button" id="simple-menu" href="#sidr">
                  <span class="menu-label">MENU</span>
                  <div class="menu-lines">
                       <span class="menu-line"></span>
                       <span class="menu-line"></span>
                       <span class="menu-line"></span>
                  </div>
               </div>

          <div class="clear"></div>
          </div>
          <!-- End: Header -->
