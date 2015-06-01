<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
define('CURRENT_PAGE_ID', get_the_ID());
require_once(get_template_directory() . '/inc/language_map.php');
//require_once(get_template_directory() . '/check.php');
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php if(is_archive()):?>
	<title><?php echo 'Blogs | ' . get_bloginfo('name');?></title>
	<?php else:?>
		<?php if($_LANG == LANG_EN):?>
			<title><?php echo wp_title( '|', true, 'right' ); ?></title>
		<?php else: ?>
			<title><?php echo $front_page->getPost($_LANG)->description . get_bloginfo('name');?></title>
		<?php endif;?>
	<?php endif;?>
	<!--<?php echo get_the_ID();?>-->
	<!--<?php echo CURRENT_PAGE_ID;?>-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="vmU4Z2RghS9kNdUC1uROHG7g34U3tbKaYLUH_yeX6UM" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/html5shiv.js"></script>
	<script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/respond.min.js"></script>
	<![endif]-->

	<link href="<?php print esc_url( get_template_directory_uri() ); ?>/dist/css/bootstrap.css" rel="stylesheet">
	<link href="<?php print esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
				<?php
				/*
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				*/?>
<div class="navbar-wrapper" style="width: 100%; background: #fff;"> 
    <div class="topbar-wrapper" style="width: 100%; height: 40px; border-bottom: 1px dotted #dddddd;">
  	 	<div class="container">
    		<div style="float: left;">
    			<div style="float: left; padding: 0 10px 0 0;">
    				<span class="glyphicon glyphicon-comment" style="line-height: 39px;"></span>
    			</div>   
    
    		<div style="float: right;">   
    		<div id="top-text-slider" class="carousel vertical slide" style="height: 36px !important; background: none !important; min-width: 500px !important; position: relative; top: 2px;">
    
    		<!-- Carousel items -->
    			<div class="carousel-inner">
        			<div class="active item blog-header0"><a onclick="ga('send','event','Carousel Items','Click','blog-header0');" href="#" target="_blank"></a></div>
        			<div class="item blog-header1"><a onclick="ga('send','event','Carousel Items','Click','blog-header1');" href="#" target="_blank"></a></div>
        			<div class="item blog-header2"><a href="#" onclick="ga('send','event','Carousel Items','Click','blog-header2');" target="_blank"></a></div>
        			<div class="item blog-header3"><a href="#" onclick="ga('send','event','Carousel Items','Click','blog-header3');" target="_blank"></a></div> 
        			<div class="item blog-header4"><a href="#" onclick="ga('send','event','Carousel Items','Click','blog-header4');" target="_blank"></a></div> 
        			<div class="item blog-header5"><a href="#" onclick="ga('send','event','Carousel Items','Click','blog-header5');" target="_blank"></a></div> 
    			</div>
    		</div>
    	</div>
    	<div style="clear: both;"></div>
    </div>
    
    <div style="float: right;">
    <div style="float: left;"><p class="advisor"><?php echo $i18n_arr['header']['sales_call']; ?><span class="sales_number" onclick="ga('send','event','Page-Header','Click','Sales Number');"> +852 2851 0145</span></p></div> 
<!--  languages -->
<div style="float: right; padding: 0 0 0 10px;">
    <ul style="list-style-type: none; padding: 0; margin: 7px 0 0 0;">
    <li class="dropdown">
                  <a href="#" class="dropdown-toggle" onclick="ga('send','event','Page-Header','Click','Languages');" data-toggle="dropdown">
                    <img src="<?php print esc_url( get_template_directory_uri() ); ?>/images/<?php $current_language_option=get_current_language(false); echo $current_language_option['image']; ?>"> <b class="caret" style="color: #999999;"></b>
                  </a>                 
                  <ul class="dropdown-menu languages">
                  <li>
                  <ul>
                    <?php 
                    foreach($wp_active_languages as $data){ ?>
                  	   <li><a onclick="ga('send','event','Page-Header','Click','Languages/<?php echo $data['name'];?>');" href="/<?php echo $data['path']; ?>" target="_self"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/<?php echo $data['image']; ?>">  <?php echo $data['name']; ?></a></li>
                    <?php } ?>
                    </ul>
                    </li>
                  </ul>
                  
                </li>
           </ul>
    </div>
	
    </div>
    </div>
    
    </div>
    
      <div class="container" style="margin-top: 20px;">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" onclick="ga('send','event','Page-Header','Click','Transact24 Logo');" href="<?php echo esc_url( home_url( "/{$current_language_option['path']}" ) ); ?>" target="_self"><img src="<?php print esc_url( get_template_directory_uri() ); ?>/images/logo.png" width="210px"/></a>
            </div><!--navbar-header-->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a onclick="ga('send','event','Menu','Click','Home');" href="#"><?php echo $i18n_arr['header']['menu_home']; ?></a></li>
                <li><a onclick="ga('send','event','Menu','Click','About');" href="#about" id="menu_about"><?php echo $i18n_arr['header']['menu_about']; ?></a></li>
                <li><a onclick="ga('send','event','Menu','Click','Contact');" href="#contact" id="cta-btn"><?php echo $i18n_arr['header']['menu_contact']; ?></a></li>
                <li class="dropdown">
                  <a href="#" onclick="ga('send','event','Menu','Click','Solutions');" class="dropdown-toggle" data-toggle="dropdown"><?php echo $i18n_arr['header']['menu_solutions']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li>
                  <ul>
                    <li data-target="#contentCarousel" data-slide-to="1">
                    	<a onclick="ga('send','event','Menu','Click','Automated Clearing House Payment Processing');" title="Automated Clearing House Payment Processing" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#ach-processing"><?php echo $page_ach_processing->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="2">
                    	<a onclick="ga('send','event','Menu','Click','Alipay Payment Processing Solution');" title="Alipay Payment Processing Solution" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#alipay"><?php echo $page_alipay_solution->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="3">
							<a onclick="ga('send','event','Menu','Click','Credit/Debit Card Processing');" title="Credit/Debit Card Processing" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#card-payment-processing"><?php echo $page_card_processing->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="4">
                    	<a onclick="ga('send','event','Menu','Click','China UnionPay Payment Processing');" title="China UnionPay Payment Processing" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#china-union-pay"><?php echo $page_china_unionPay->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="5">
                    	<a onclick="ga('send','event','Menu','Click','Prepaid Card Management Solutions');" title="Prepaid Card Management Solutions" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#prepaid-cards"><?php echo $page_prepaid_cards->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="6">
                    	<a onclick="ga('send','event','Menu','Click','Corporate Travel Insurance Solutions');" title="Corporate Travel Insurance Solutions" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#travel-insurance"><?php echo $page_travel_insurance->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="7">
                    	<a onclick="ga('send','event','Menu','Click','White Label Payment Processing Solutions');" title="White Label Payment Processing Solutions" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#white-label-gateway"><?php echo $page_white_label_gateway->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="8">
                    	<a onclick="ga('send','event','Menu','Click','Virtual Prepaid Cards');" title="Virtual Prepaid Cards" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#virtual-prepaid-cards"><?php echo $page_virtual_prepaid_cards->getPost($_LANG)->post_title; ?></a>
                    </li>
                    <li data-target="#contentCarousel" data-slide-to="9">
                    	<a onclick="ga('send','event','Menu','Click','Careers');" title="Careers" href="<?php echo esc_url( home_url( '/' ) ); ?><?php print $current_language_option['path']; ?>#careers"><?php echo $page_careers->getPost($_LANG)->post_title; ?></a>
                    </li>
                   <!-- 
                   <li data-target="#contentCarousel" data-slide-to="8">
                   	<a><?php //$page = load_page_by_page_id(12); echo $page['title']; ?></a>
                   </li>
                    -->
                    </ul>
                  </ul>
                </li>
				<li><a onclick="ga('send','event','Menu','Click','Blog');" href="<?php echo esc_url( home_url( "/blog/" . trim($current_language_option['path']) ) ); ?>"><?php echo $i18n_arr['header']['menu_blog']; ?></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
