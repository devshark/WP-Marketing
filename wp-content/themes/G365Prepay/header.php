<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!-- Meta Tags
		================================================== -->
		<?php global $options_data; global $post;
		$description= '';
		$keywords= '';
		$author = '';
		if(isset($post)){
			$terms = wp_get_post_terms( $post->ID, array('post_tag','category',"page_keywords"), array("fields" => "names"));
			$post_categories = wp_get_post_categories( $post->ID );
			$author = get_the_author_meta('display_name', $post->post_author);
			if(get_the_title($post->ID) != '') {
				$description = get_the_title($post->ID).' | '.get_bloginfo('name').' - '.get_bloginfo('description');
			}else{
				$description = bloginfo('name').' - '.bloginfo('description');
			}
		}

		$cats='';

		if(!empty($terms)) {
			foreach($terms as $term){
				$keywords .= $term.', ';
			}
		} else {
			$terms = get_terms( array('post_tag','category'), array('orderby' => 'count', 'order' => 'DESC', "fields" => "names", 'number'=> 9) );
			foreach($terms as $term){
				$keywords .= $term.', ';
			}
		}
		$description .= ', '.$keywords;
		?>
		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<?php
		$check_seodisable = eva_option('check_seodisable');
		if(!isset($check_seodisable) || $check_seodisable != 1 ) {?>
			<meta name="description" content="<?php echo esc_attr( $description ); ?>">
			<meta name="keywords" content="<?php echo esc_attr( $keywords ); ?>">
			<meta name="author" content="<?php echo esc_attr( $author ); ?>">
		<?php } ?>
		
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Favicon
        ================================================== -->

<link rel="shortcut icon" href="/wp-content/uploads/2015/02/favicon.png">

        
		
		<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
        <?php
		global $eva_end;
        $eva_start = $eva_end = '';
        if (eva_option('theme_layout') != "Fullwidth") {
            $eva_start = '<div class="theme-boxed">';
            $eva_end = '</div>';
        }
        ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class() ?>>
        <?php echo htmlspecialchars_decode( esc_html( $eva_start ) ); ?>

		<!-- Preloader -->
		<?php if(eva_option('theme_preloader')) { echo '<div id="preloader"><img src="/wp-content/uploads/2015/02/loader.gif" alt="" /></div>'; } ?>
		<!-- //Preloader -->

		<!-- Page Wrap -->
		<div class="page-wrap">

			<!-- Top Bar -->
			<?php if (eva_option("top_bar")) {?>

				<div id="top_bar">
					<div class="container">
						<?php
							$top_bar_phone = eva_option('top_bar_phone');
							$top_bar_address = eva_option('top_bar_address');
							$top_social_icons = eva_option('top_social_icons');
						?>
						<?php if ($top_bar_phone) { ?>
							<div class="top_bar_phone"><i class="fa fa-phone"></i><?php echo esc_html( $top_bar_phone ); ?> </div>
						<?php } ?>
						<?php if ($top_bar_address) { ?>
							<div class="top_bar_address"><i class="fa fa-map-marker"></i><?php echo esc_html( $top_bar_address ); ?> </div>
						<?php } ?>
						<?php if ($top_social_icons) { ?>
							<div class="eva-social-icon"><?php eva_social(); ?></div>
						<?php } ?>

	

						<div id="cardholder-links" style="float: right; margin-top: 10px !important;">

						<ul class="menu">
							<li class="nav-item menu-item-depth-0 current-menu-item"><a href="https://secure.g365prepay.com/register" class="menu-link main-menu-link register-card"><span class="item-title">Register card</span></a></li>
							<li class="nav-item menu-item-depth-0"><a href="https://secure.g365prepay.com/" class="menu-link main-menu-link"><span class="item-title">Login</span></a></li>
						</ul>						

						</div>
						
					</div>
				</div>
			<?php } ?>
			<!-- //Top Bar -->

			<header class="<?php if (eva_option('header_sticky')) { echo 'header_sticky';} ?> <?php if (eva_option("top_bar")) { echo 'with-topbar';}?>">
				<div class="container">

					<!-- Logo -->
					<div id="top_logo">
						<?php theme_logo(); ?>
					</div>
					<!-- //Logo -->

					<!-- Main Menu -->
					<div id="top_menu">
						<i class="mobile_menu_icon fa fa-bars"></i>
						<?php theme_menu(); ?>
					</div>
					<!-- //Main Menu -->

				</div>
			</header>
			<!-- End Header -->

			<!-- Start Slider -->

			<?php if(is_front_page() ) { ?>

			<section id="sliderbanner">
			<div id="slider">
				<div class="wrap"> 
					<div class="panel slide1" style="background: url(<?php $value = get_field("slide1_image", 24); echo $value; ?>) no-repeat;">
						<div class="outer-holder">
    							<div class="inner-holder">
        							
						
                                                               <?php $page_id = 173;
                                                                 $page_object = get_page( $page_id );
                                                                 echo $page_object->post_content; ?>


        						</div>
    						</div>
					</div> 

					<div class="panel slide2" style="background: url(<?php $value = get_field("slide2_image", 24); echo $value; ?>) no-repeat;">
						<div class="outer-holder">
    							<div class="inner-holder">
        							
                                                                <?php $page_id = 208;
                                                                 $page_object = get_page( $page_id );
                                                                 echo $page_object->post_content; ?>

       							</div>
    						</div>
					</div> 

					<div class="panel slide3" style="background: url(<?php $value = get_field("slide3_image", 24); echo $value; ?>) no-repeat;">
						<div class="outer-holder">
    							<div class="inner-holder">
        							
                                                                 <?php $page_id = 210;
                                                                 $page_object = get_page( $page_id );
                                                                 echo $page_object->post_content; ?>

        						</div>
    						</div>
					</div>

				</div>

				<div class="previous"></div>
				<div class="next"></div>

			</div>

			<div class="progress_bar">
    				<ul> 
        				<li></li>
       					<li></li>
        				<li></li>
    				</ul>
			</div>

			<div class="nav">
				<ul>
					<li></li>
					<li></li>
					<li></li>
				<ul>
			</div>

			</section>

			<?php } ?>

			<!-- End Slider -->

			<!-- Card Img -->

			<div id="mobile-card-img" style="width: 80%; margin: 0 auto; margin-bottom: 80px; margin-top: 130px;"><img style="width: 100%;" src="wp-content/uploads/2015/01/card.png"></div>

			<!-- Start Main -->
			<section id="main" <?php if(is_page('24')) { echo "style=\"margin-top: 0 !important\""; }?>>
				<div class="container">