<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en" itemscope itemtype="http://schema.org/Product"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->
	<head>
		<script type="text/javascript">
		<!--
		if (screen.width < 768) {
		document.location = "mobile";
		}
		//-->
		</script>

		<!-- title -->
		<title><?php wp_title( ' | ', true, 'left' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			   More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="i-use is an extended payment consulting brand of CSP, offering integrated solutions for corporate clients with an emphasis on internet, international and instant transactions, through an innovative, co-branded prepaid card product"/>
		<meta name="keywords" content="i-use, i-use Prepaid Card, i-use Prepaid Visa, i-use Prepaid Visa Card, i-use Prepaid, Prepaid Card, Visa Prepaid Card"/>
		<link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/imports.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/index.css">
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Dosis:200,400,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>			   
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/libs/modernizr-2.0.6.min.js"></script>

		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

	<header style="padding-bottom: 35px;">
		<div class="container top" id="home" style="width: 100%;">
			<div id="mobile-nav">
				<div class="menu-btn">
					<div class="nav-expand"><img src="<?php echo get_template_directory_uri();?>/images/mobile-nav-icon.png"></div>
				</div><!--menu-btn-->
				<div class="logo">
					<div class="container">
						<a href="/" title="Home"><img src="<?php echo get_template_directory_uri();?>/img/iuse-logo.png"></a>
					</div>
				</div><!--logo-->
				<div class="contact-btn">
					<a href="#contact"><img src="<?php echo get_template_directory_uri();?>/images/mobile-nav-contact.png"></a>
				</div><!--contact-btn-->
				<div class="line"></div>
				<div style="clear: both;"></div>
				<div class="nav-links">
					<ul>
						<li><a href="/#offer">The Offer</a></li>
						<li><a href="/#usage">Card Usage</a></li>
						<li><a href="/#management">Account Management</a></li>
						<li><a href="/#sms">SMS Functionality</a></li>
						<li><a href="/#loaded">Money Loaded</a></li>
						<li><a href="/#safety">Card Safety</a></li>
						<li><a href="/#fees">Fees</a></li>
						<li><a href="/#faqs">FAQs</a></li>
						<li><a href="/#about">About us</a></li>
					</ul>
				</div><!--nav-links-->
			</div><!--mobile-nav-->

			<section class="row">
				<!--LOGO -->
				<div id="logo-org" class="four columns smalltoppadding">
				<!-- ideal size for logo is 200px x 70px -->
					<a href="/" title="Home"><img src="<?php echo get_template_directory_uri();?>/img/iuse-logo.png" style="width: 120px; margin-top: 10px;" alt="logo"></a>
				</div>
				<!--END LOGO -->
				<!-- SOCIAL MEDIA ICONS - REPLACE LINKS -->
				<div class="seven columns push_one" id="top-link-set">
					<ul id="header-links">
						<li style="height: 93px; border-left: 1px solid rgb(88, 88, 88); padding: 0px 30px;"><a href="#about" style="line-height: 93px; color: #fff !important;">CONTACT US</a></li>
						<li style="height: 93px; border-left: 1px solid rgb(88, 88, 88); padding: 0px 30px;"><a href="https://www.secure.i-usecard.com/register" style="line-height: 93px; color: #fff !important;">REGISTER CARD</a></li>
						<li style="height: 93px; border-left: 1px solid rgb(88, 88, 88); padding: 0px 30px;"><a href="https://www.secure.i-usecard.com/" style="line-height: 93px; color: #fff !important;">LOGIN</a></li>
					</ul>
				</div><!--seven columns push_one-->
			</section><!--row-->
		</div><!--container top-->
		
	<div class="container" id="navbar">
		<section class="row">
			<!-- NAVIGATION -->
			<div class="eight columns">
				<nav id="navigationmain">
					<ul id="menu">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="/#offer">THE OFFER</a></li>
						<li>
							<a class="functionality" style="cursor: pointer;">FUNCTIONALITY</a>
							<ul>
								<li><a href="/#usage">USAGE</a></li>
								<li><a href="/#management">ACCOUNT MANAGEMENT</a></li>
								<li><a href="/#sms">SMS FUNCTIONALITY</a></li>
							</ul>
						</li><!--end functionality-->
						<li>
							<a class="security" style="cursor: pointer;">SECURITY</a>
							<ul>
								<li><a href="/#loaded">MONEY LOADED</a></li>
								<li><a href="/#safety">CARD SAFETY</a></li>
							</ul>
						</li><!--end security-->
						<li><a href="/#fees">FEES</a></li>
						<li><a href="/#faq">FAQS</a></li>
						<li><a href="/#about">ABOUT US</a></li>
						<li><a href="https://www.secure.i-usecard.com/">LOGIN</a></li>
					</ul><!--end menu-->
				<div style="clear:both;"></div>
				</nav><!--navigationmain-->
			</div>
			<!-- END NAVIGATION -->
			<!-- NEWSLETTER -->
			<div class="four columns">
				<div class="small-logo-hidden" style="float: right; width: 125px; margin-top: 6px; opacity: 0;"><img src="<?php echo get_template_directory_uri();?>/img/iuse-logo.png" width="85" style="position: relative; top: -5px; float: right;"></div>
					<div id="newsletter-field">
						<div class="three columns smalltoppadding"></div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div><!--END NEWSLETTER-->
		</section><!--row-->
	</header>
	<!-- END HEADER -->
