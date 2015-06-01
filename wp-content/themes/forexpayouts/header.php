<?php
/**
 * The Header for forexpayouts theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Story
 */
?><!DOCTYPE html>

<html>
  <head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="keywords" content="T24 Prepaid,Visa Prepaid Cards,Visa Prepaid Cards,Program Management,Prepaid Management" />
	<meta name="description" content="T24 Prepaid is the Program Management division for Visa and MasterCard branded prepaid cards of Transact24. At T24, we strongly believe that each card program must have a unique selling point. By tailoring each program and consciously segmenting your target audience, you get full use of your prepaid program and the ability to offer something unique in the prepaid consumer market." />

    <link href="<?php echo get_template_directory_uri();?>/img/favicon.png" rel="icon" type="image/png" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,700|Bitter:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 3.1.0 -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.css" rel="stylesheet" />
    <!-- Flexslider 2 -->
    <link href="<?php echo get_template_directory_uri();?>/css/flexslider.css" rel="stylesheet" />
    <!-- ionicons font -->
    <link href="<?php echo get_template_directory_uri();?>/css/ionicons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri();?>/css/green.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <style>
	#panels-1-block p {
		text-align: center;
	}
	</style>
    
	<?php wp_head(); ?>
  </head>

  <body style="overflow-x: hidden; background: #222222;" <?php body_class(); ?>>
    
    <header style="position: fixed; top: 0; left: 0; width: 100%; z-index: 999; background: #ffffff;">
      <div class="container">
        <div class="row">

          <div id="logo-region" class="col-md-3 text-center-sm" style="display: table; height: 80px;">
          	<div style="display: table-cell; vertical-align: middle;">
            <a onclick="ga('send','event','Page-Header','Click','Transact24 Logo');" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo" class="img-responsive" style="width: 200px;" /></a>
            </div>
          </div> <!-- /logo-region -->

          <div id="menu-region" class="col-md-9">
            <nav class="navbar nestor-main-menu" role="navigation">
              <!-- Menu button for mobile display -->
              <div class="navbar-header">
                <div type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="position: absolute; top: -76px; right: 0;"><i class="ion-navicon-round text-color-theme" style="font-size: 36px;"></i></div>
              </div>
          
              <!-- Navigation links -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-right navbar-nav">
					<li><a onclick="ga('send','event','Menu','Click','Functionality');" href="#content-1-region" class="nav" style="padding: 0 25px; line-height: 80px;">Functionality</a></li>
					<li><a onclick="ga('send','event','Menu','Click','White Label');" href="#content-2-region" class="nav" style="padding: 0 25px; line-height: 80px;">White Label</a></li>
					<li><a onclick="ga('send','event','Menu','Click','T24 Branded');" href="#content-8-region" class="nav" style="padding: 0 25px; line-height: 80px;">T24 Branded</a></li>
					<li><a onclick="ga('send','event','Menu','Click','Instant Loads');" href="#content-11-region" class="nav" style="padding: 0 25px; line-height: 80px;">Instant Loads</a></li>
					<li><a onclick="ga('send','event','Menu','Click','System Features');" href="#content-12-region" class="nav" style="padding: 0 25px; line-height: 80px;">System Features</a></li>
					<li><a onclick="ga('send','event','Menu','Click','Contact Us');" href="#content-5-region" class="nav" style="padding: 0 25px; line-height: 80px;">Contact Us</a></li>
                </ul>
              </div> <!-- /navbar-collapse -->
            </nav>
          </div> <!-- /menu-region -->

        </div> <!-- /row -->
      </div> <!-- container -->
    </header>
