<?php
/**
 * The Header for forexpayouts theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Story
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<!--ga('send','event','Page-Header','Click','Transact24 Logo');-->
<head>
	<!-- Basic
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="The T24 PayVault Visa prepaid card is a card-based payout solutions for comissions, expenses and payroll. It offers a limit of 20,000USD, instant card loads and comprehensive backend support.">
	<meta name="keywords" content="Employee Payout Card, Payroll Payout Card, Payroll Payout Cards, Staff Payout Card, Visa Payout Card, Staff Payout Cards, Payroll Payout Solutions, Employee Payout Cards, Prepaid Payout Card, Prepaid Payout Cards, Payout Cards, Payout Card, Staff Payroll Cards, Payroll Card, Staff Payroll Cards, Payroll Card, Staff Payout, Payroll Solution, Staff Payouts, Employee Payouts, Employee Payout, Employee Payroll Cards, Staff Payroll Card, Payroll Cards, Payroll Solyutions, Visa Payout Cards, Prepaid Payroll Cards, Visa Payroll Card, Payroll Visa Cards, Payroll Visa Card, Employee Payroll Card, Payroll Prepaid Card, Payroll Prepaid Cards, Visa Payroll Cards, Prepaid Payroll Card">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/base.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/rome.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/layout.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/devices.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.bxslider.css">

	<!-- Fonts
  ================================================== -->
	<link href='<?php echo get_template_directory_uri();?>/fonts/Montserrat/Montserrat.css' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
	<!--<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-114x114.png">-->

<style>

body {
	background: #000000;
}

@font-face {
font-family: ft81;
src: url(fonts/ft81%20Normal.ttf);
}

#top-top-nav .link-holder .link a:link,#top-top-nav .link-holder .link a:active, #top-top-nav .link-holder .link a:visited {
	
opacity: 0.4;

}

#top-top-nav .link-holder .link a:hover {
	
opacity: 1;

}

#top-top-nav .link-holder .link-last a:link,#top-top-nav .link-holder .link-last a:active, #top-top-nav .link-holder .link-last a:visited {
	
opacity: 0.4;

}

#top-top-nav .link-holder .link-last a:hover {
	
opacity: 1;

}

.dotted-overlay {
display: table;
height: 100%;
width: 100%;
position: relative;
z-index: 98;
margin-bottom: 0;
background: url(<?php echo get_template_directory_uri();?>/img/grid.png) repeat;
}


</style>

<?php wp_head(); ?>
</head>
<body style="min-width:500px;" <?php //body_class(); ?>>

<div class="wrapper">

		<header style="-webkit-box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.3);
       -moz-box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.3);">

			<!-- container -->
			<div class="container clearfix">

				<div class="one-third column">

					<!-- logo -->
					<div class="logo" style="display: table;"><div style="display: table-cell; vertical-align: middle;"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" style="width: 230px; vertical-align: bottom;"></div></div>
					<div class="menu">Menu</div>
					<!-- logo -->

				</div>

				<div class="two-thirds column" style="margin-right: 0px;">

					<!-- navigation -->
					<div class="navigation">
						<ul>
							<?php if(is_home()){ ?>
							<li data-url="home" data-type="in" class="active" onClick="toTop()">Home</a></li>
							<?php } else{ ?>
							<li data-url="home" data-type="in" onClick="toTop()">Home</a></li>
							<?php } ?>
							<li data-url="payouts" data-type="in"><a href="payout-management.html">Payouts</a></li>
							<li data-url="cardusage" data-type="in"><a href="card-usage.html">Card Usage</a></li>
							<li data-url="security" data-type="in"><a href="card-security.html">Security</a></li>
							<li data-url="fees" data-type="in"><a href="fees.html">Fees</a></li>
							<li data-url="faq" data-type="in"><a href="faqs.html">FAQ</a></li>
                            <li data-url="contact" data-type="in">Contact</li>
                            <li data-url="https://www.secure.t24prepaid.com/" data-type="out">Login</li>
                            <li data-url="https://www.secure.t24prepaid.com/register" data-type="out">Register</li>
						</ul>
					</div>
					<!-- navigation -->

				</div>

			</div>

		</header>
		<!-- header -->
