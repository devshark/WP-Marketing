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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="keywords" content="T24 Prepaid,Visa Prepaid Cards,Visa Prepaid Cards,Program Management,Prepaid Management" />
	<meta name="description" content="T24 Prepaid is the Program Management division for Visa and MasterCard branded prepaid cards of Transact24. At T24, we strongly believe that each card program must have a unique selling point. By tailoring each program and consciously segmenting your target audience, you get full use of your prepaid program and the ability to offer something unique in the prepaid consumer market." />
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="intro">
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<!--<div id="loading_div"> <img src="img/loading.gif" height="66" width="66" alt="Insperia">
	<p>Loading...</p>
</div>-->
<div id="loaded" style="display: block;">
