<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<!-- METADATA -->
		<meta name="description" content="The Transact24 UnionPay prepaid card. A brand new payment product for Hong Kong. Withdraw cash and shop in over 142 countries at more than 7.2 million merchants where China UnionPay is accepted" />
		<meta name="keywords" content="EOS, Bootstrap, Landing page, Template, App, Mobile, Android, iOS" />
		<meta name="author" content="David Rozando" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- PAGE TITLE -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- FAVICON -->
		<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicons/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicons/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicons/apple-touch-icon-114x114.png" />

		<!--
		=================================
		STYLESHEETS
		=================================
		-->

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" />

		<!-- WEB FONTS -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

		<!-- ICON FONTS -->
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" />

		<!-- OTHER STYLES -->
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css" />

		<!-- MAIN STYLES -->
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />

		<!-- COLORS -->
		<link id="color-css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/green.css" />

		<?php wp_head(); ?>
	</head>
	<body class="with-preloader">

<?php require get_template_directory() . '/language_post_reference.php'; ?>

<?php if ( (is_front_page() && is_home()) || in_array($post->ID, $language_post_en) ) : //list of postID to show this section ?>
	
		<!--
		=================================
		PRELOADER
		=================================
		-->
		<div id="preloader" class="preloader">
			<div class="preloader-inner">
				<span class="preloader-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="#" />
					<strong>Loading</strong>
				</span>
			</div>
		</div>

		<div id="document" class="document">

			<!--
			=================================
			HEADER
			=================================
			-->
			<header class="header-section navbar navbar-fixed-top navbar-default header-floating">
				<div class="container">

					<div class="navbar-header">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- NAVBAR LOGO -->
						<a class="navbar-brand navbar-logo" onClick="$('html, body').animate({scrollTop : 0},800);"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="T24 China UnionPay Prepaid Card"/></a>
					</div>

					<div id="navigation" class="navbar-collapse collapse">
						
						<!-- NAVIGATION LINKS -->
						<ul class="nav navbar-nav navbar-right">
							<?php if(is_front_page()){ ?>
                        	<li><a onClick="$('html, body').animate({scrollTop : 0},800);" style="cursor: pointer;">Home</a></li>
                        	<?php }else{ ?>
                        	<li><a href="/" style="cursor: pointer;">主页</a></li>
                        	<?php } ?>
							<li><a href="/#features">Features</a></li>
							<li><a href="/#fees">Fees</a></li>
                            <li><a href="/#offers">Merchant Offers</a></li>
							<li><a href="/#faqs">FAQs</a></li>
                            <li><a href="/#contact">Contact Us</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">English</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_cn' ) ); ?>">简体</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_hk' ) ); ?>">繁體</a></li>
						</ul>

					</div>

				</div>
			</header>
<?php elseif ( in_array($post->ID, $language_post_zh_cn) ) : //list of postID to show this section ?>
	
		<!--
		=================================
		PRELOADER
		=================================
		-->
		<div id="preloader" class="preloader">
			<div class="preloader-inner">
				<span class="preloader-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="#" />
					<strong>加载</strong>
				</span>
			</div>
		</div>

		<div id="document" class="document">

			<!--
			=================================
			HEADER
			=================================
			-->
			<header class="header-section navbar navbar-fixed-top navbar-default header-floating">
				<div class="container">

					<div class="navbar-header">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- NAVBAR LOGO -->
						<a class="navbar-brand navbar-logo" onClick="$('html, body').animate({scrollTop : 0},800);" style="cursor: pointer;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="#" style="width: 200px;"/></a>
					</div>

					<div id="navigation" class="navbar-collapse collapse">
						
						<!-- NAVIGATION LINKS -->
						<ul class="nav navbar-nav navbar-right">
							<?php if($post->ID===17){?>
                        	<li><a onClick="$('html, body').animate({scrollTop : 0},800);" style="cursor: pointer;">主页</a></li>
                        	<?php }else{ ?>
                        	<li><a href="/zh_cn/" style="cursor: pointer;">主页</a></li>
                        	<?php } ?>
							<li><a href="/zh_cn/#features">特点</a></li>
							<li><a href="/zh_cn/#fees">费用</a></li>
                            <li><a href="/zh_cn/#offers">商户优惠</a></li>
							<li><a href="/zh_cn/#faqs">常见问题</a></li>
                            <li><a href="/zh_cn/#contact">联系我们</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">English</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_cn' ) ); ?>">简体</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_hk' ) ); ?>">繁體</a></li>
						</ul>

					</div>

				</div>
			</header>

<?php elseif ( in_array($post->ID, $language_post_zh_hk) ) : //list of postID to show this section ?>
	
		<!--
		=================================
		PRELOADER
		=================================
		-->
		<div id="preloader" class="preloader">
			<div class="preloader-inner">
				<span class="preloader-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="#" />
					<strong>載入</strong>
				</span>
			</div>
		</div>

		<div id="document" class="document">

			<!--
			=================================
			HEADER
			=================================
			-->
			<header class="header-section navbar navbar-fixed-top navbar-default header-floating">
				<div class="container">

					<div class="navbar-header">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- NAVBAR LOGO -->
						<a class="navbar-brand navbar-logo" onClick="$('html, body').animate({scrollTop : 0},800);" style="cursor: pointer;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="#" style="width: 200px;"/></a>
					</div>

					<div id="navigation" class="navbar-collapse collapse">
						
						<!-- NAVIGATION LINKS -->
						<ul class="nav navbar-nav navbar-right">
							<?php if($post->ID===19){?>
                        	<li><a onClick="$('html, body').animate({scrollTop : 0},800);" style="cursor: pointer;">主頁</a></li>
                        	<?php }else{ ?>
                        	<li><a href="/zh_hk/" style="cursor: pointer;">主頁</a></li>
                        	<?php } ?>
							<li><a href="/zh_hk/#features">特點</a></li>
							<li><a href="/zh_hk/#fees">費用</a></li>
                            <li><a href="/zh_hk/#offers">商戶優惠</a></li>
							<li><a href="/zh_hk/#faqs">常見問題</a></li>
                            <li><a href="/zh_hk/#contact">聯繫我們</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">English</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_cn' ) ); ?>">简体</a></li>
                            <li class="language-option"><a href="<?php echo esc_url( home_url( '/zh_hk' ) ); ?>">繁體</a></li>
						</ul>

					</div>

				</div>
			</header>

	<?php endif; ?>
