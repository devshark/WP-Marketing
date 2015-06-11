<?php

function theme_option_styles() {

    function hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array($r, $g, $b);
        return implode(",", $rgb); // returns the rgb values separated by commas
        //return $rgb; // returns an array with the rgb values
    }
    ?>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: <?php echo eva_option('body_text_font', 'face'); ?>, sans-serif;
			font-size: <?php echo eva_option('body_text_font', 'size'); ?>; 
            font-weight: <?php echo eva_option('body_text_font', 'style'); ?>; 
            color: <?php echo eva_option('body_text_font', 'color'); ?>;
            <?php
            if (eva_option('theme_layout') == 'Boxed Layout') {
                if (eva_option('background_color') != "") {
                    echo 'background-color: ' . eva_option('background_color') . ';';
                }
                if (eva_option('background_image') != "") {
                    echo 'background-image: url(' . eva_option('background_image') . ');';
                }
                if (eva_option('background_repeat') != 'Strech Image') {
                    echo 'background-repeat: ' . eva_option('background_repeat') . ';';
                } else {
                    echo '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
                }
                echo "background-attachment: fixed;";
                echo "margin-top:" . eva_option('margin_top') . "px;";
                echo "margin-bottom:" . eva_option('margin_bottom') . "px";
            }
            ?>
        }
        h1,h2,h3,h4,h5,h6 {font-family: <?php echo eva_option('heading_font'); ?>, sans-serif;}
        h1{ font-size: <?php echo eva_option('h1_spec_font', 'size'); ?>; color: <?php echo eva_option('h1_spec_font', 'color'); ?>; }
        h2{ font-size: <?php echo eva_option('h2_spec_font', 'size'); ?>; color: <?php echo eva_option('h2_spec_font', 'color'); ?>; }
        h3{ font-size: <?php echo eva_option('h3_spec_font', 'size'); ?>; color: <?php echo eva_option('h3_spec_font', 'color'); ?>; }
        h4{ font-size: <?php echo eva_option('h4_spec_font', 'size'); ?>; color: <?php echo eva_option('h4_spec_font', 'color'); ?>; }
        h5{ font-size: <?php echo eva_option('h5_spec_font', 'size'); ?>; color: <?php echo eva_option('h5_spec_font', 'color'); ?>; }
        h6{ font-size: <?php echo eva_option('h6_spec_font', 'size'); ?>; color: <?php echo eva_option('h6_spec_font', 'color'); ?>; }

        a{ color: <?php echo eva_option('link_color'); ?>; }
        a:hover, a:focus{ color: <?php echo eva_option('link_hover_color'); ?>; }
		
		input, button, select, textarea {font-family: <?php echo eva_option('heading_font'); ?>, sans-serif;}
		
		::selection {background: <?php echo eva_option('theme_color'); ?>; color:#fff;}
		::-moz-selection {background: <?php echo eva_option('theme_color'); ?>; color:#fff;}
		
		
		/* Theme Color */
		.theme_color { color: <?php echo eva_option('theme_color'); ?> !important; }
		.top_bar_phone i, .top_bar_address i { color: <?php echo eva_option('theme_color'); ?>; }
		#top_menu li.current-menu-item a.main-menu-link:after, #top_menu li.current-menu-parent a.main-menu-link:after, #top_menu li:hover a.main-menu-link:after { background-color: <?php echo eva_option('theme_color'); ?>; }
		#top_menu .sub-menu li.current-menu-item i, #top_menu .sub-menu li:hover i { color: <?php echo eva_option('theme_color'); ?>; }
		#breadcrumbs-wrap span:before { border-color: <?php echo eva_option('theme_color'); ?>; }
		.widget_pages ul li a:hover, .widget_pages ul li.current_page_parent a, .widget_pages ul li.current_page_item a { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_pages ul li a:hover:before, .widget_pages ul li.current_page_parent a:before, footer .widget_nav_menu ul li:hover a:before, .widget_nav_menu ul li.current-menu-item a:before { border-color: <?php echo eva_option('theme_color'); ?>; }
		.widget_recent_entries li:hover .post-date { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_meta li:hover a, .widget_archive li:hover a, .widget_categories li:hover a, .widget_meta li:hover i, .widget_archive li:hover i, .widget_categories li:hover i { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_search .search_form i { background-color: <?php echo eva_option('theme_color'); ?>; }
		.widget_product_tag_cloud a:hover, .meta-tag-list a:hover, .widget_tag_cloud a:hover { color:#fff; background-color: <?php echo eva_option('theme_color'); ?>; }
		.widget_evatheme_tabbed li.active { border-top: 2px solid <?php echo eva_option('theme_color'); ?>; }
		.widget_evatheme_tabbed .tab-content .date { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_nav_menu li.current-menu-item a { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_nav_menu ul li:hover a, .widget_nav_menu li:hover a:before, .widget_nav_menu li.current-menu-item a:before { color: <?php echo eva_option('theme_color'); ?>; }
		.widget_nav_menu ul li li:hover a, .widget_nav_menu li li:hover a:before { color: <?php echo eva_option('theme_color'); ?> !important; }
		.eva-recent-posts-widget .eva-recent-content .date { color: <?php echo eva_option('theme_color'); ?> !important; }
		.loop-meta li.date { color: <?php echo eva_option('theme_color'); ?>; }
		.type-post-wrap .more-link { background-color: <?php echo eva_option('theme_color'); ?>; }
		.type-post-wrap:hover { border-top-color: <?php echo eva_option('theme_color'); ?>; }
		.pagination span.current { border-color: <?php echo eva_option('theme_color'); ?>; }
		.pagination a:hover { border-color: <?php echo eva_option('theme_color'); ?>; background-color: <?php echo eva_option('theme_color'); ?>; }
		.pagination a.prev:hover, .pagination a.next:hover { color: <?php echo eva_option('theme_color'); ?>; }
		#comments .comment-reply-link:hover { background-color: <?php echo eva_option('theme_color'); ?>; }
		#commentform input[type="submit"] { background-color: <?php echo eva_option('theme_color'); ?>; }
		blockquote { border-left-color: <?php echo eva_option('theme_color'); ?>; }
		.single-post-pagination a:hover { background-color: <?php echo eva_option('theme_color'); ?>; }
		.portfolio-img-wrap { background-color: <?php echo eva_option('theme_color'); ?>; }
		.portfolio-zoom { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-infinite-scroll a { background-color: <?php echo eva_option('theme_color'); ?>; }
		.project_info li:before { color: <?php echo eva_option('theme_color'); ?>; }
		.loop-gallery .flex-control-nav li a.flex-active, .loop-gallery .flex-control-nav li a:hover, .gallery-block .flex-control-nav li a:hover, .gallery-block .flex-control-nav li a.flex-active { box-shadow: 0 0 0 2px <?php echo eva_option('theme_color'); ?> inset; }
		.gallery-columns .gallery-item { background-color: <?php echo eva_option('theme_color'); ?>; }
		.gallery-columns .gallery-item i.fa { color: <?php echo eva_option('theme_color'); ?>; }
		.tp-bullets.simplebullets.round .bullet.selected, .tp-bullets.simplebullets.round .bullet:hover { box-shadow: 0 0 0 2px <?php echo eva_option('theme_color'); ?> inset; }
		.tp-bannertimer { background-color: <?php echo eva_option('theme_color'); ?>; }
		.likeit:hover i, .likeit:hover span { color: <?php echo eva_option('theme_color'); ?>; }
		#error404-container form i { color: <?php echo eva_option('theme_color'); ?>; }
		form.wpcf7-form input[type="submit"] { background: <?php echo eva_option('theme_color'); ?>; }
		.eva-twitter.carousel li p a:hover { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-twitter li i { color: <?php echo eva_option('theme_color'); ?>; }
		.owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span { background-color: <?php echo eva_option('theme_color'); ?>; }
		#scrollTop:hover { background-color: <?php echo eva_option('theme_color'); ?>; }
		
		
		/* PageBuilder Elements */
		.eva-service-box.style1 .fa, .eva-service-box.style3 .fa { color: <?php echo eva_option('theme_color'); ?> !important; }
		.eva-service-box.style2 .fa, .eva-service-box.style4 .fa { background-color: <?php echo eva_option('theme_color'); ?> !important; }
		.eva-service-box .eva-service-content p { color:<?php echo eva_option('body_text_font', 'color'); ?>; }
		.eva-counter-wrap.style2 .eva-counter-icon { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-counter-wrap.style1 span, .eva-counter-wrap.style3 span { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-counter-wrap.style3 span:before { background-color: <?php echo eva_option('theme_color'); ?>; }
		.price_item_btn a.btn { border-color: <?php echo eva_option('theme_color'); ?>; }
		.price_popular .price_item_btn a.btn, .price_item_btn a.btn:hover { background-color: <?php echo eva_option('theme_color'); ?> !important; }
		.pricing_table_item.price_popular .pricing_table_price_wrap { background-color: <?php echo eva_option('theme_color'); ?>; }
		.accordion-body.in:before { background-color: <?php echo eva_option('theme_color'); ?>; }
		.accordion-heading .accordion-toggle.active { color: <?php echo eva_option('theme_color'); ?>; }
		.accordion-heading .accordion-toggle.active:before { background-color: <?php echo eva_option('theme_color'); ?>; border-color: <?php echo eva_option('theme_color'); ?>; }
		.accordion-heading .accordion-toggle:hover:before { border-color: <?php echo eva_option('theme_color'); ?>; }
		.accordion-heading .accordion-toggle:after { background-color: <?php echo eva_option('theme_color'); ?>; }
		.eva-tab .nav-tabs li.active a, .eva-tab .nav-tabs li.active a:hover, .eva-tab .nav-tabs li.active a:focus { border-top: 2px solid <?php echo eva_option('theme_color'); ?>; }
		.eva-tab.tabs-left .nav-tabs li.active a, .eva-tab.tabs-left .nav-tabs li.active a:hover, .eva-tab.tabs-left .nav-tabs li.active a:focus { border-left: 2px solid <?php echo eva_option('theme_color'); ?>; }
		.member-description-wrap p { color: <?php echo eva_option('theme_color'); ?>; }
		.member-description-wrap p:before { background-color: <?php echo eva_option('theme_color'); ?>; }
		.testimonials-position { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-testimonials.flexslider .testimonials-avatar:before { color: <?php echo eva_option('theme_color'); ?>; }
		.eva-testimonials.flexslider .time-line span { background-color: <?php echo eva_option('theme_color'); ?>; }
		
		
        /* Header */
		#header .logo{ margin-top: <?php echo eva_option('logo_top'); ?>; margin-bottom: <?php echo eva_option('logo_bottom'); ?>; }
		
		
        /* Main */
		body.error404 #main {background-image: url(<?php echo eva_option('page404_bg_image') ?>);}

		
		/* Blog Sidebar */
		#sidebar .widget h6 {font-family: <?php echo eva_option('sidebar_widgets_title', 'face'); ?>, sans-serif; font-size: <?php echo eva_option('sidebar_widgets_title', 'size'); ?>; font-weight: <?php echo eva_option('sidebar_widgets_title', 'style'); ?>; color: <?php echo eva_option('sidebar_widgets_title', 'color'); ?>; }
		
		
        /* Footer */  
        footer{ background: <?php echo eva_option('footer_background'); ?>; }
        footer{ color: <?php echo eva_option('footer_text_color'); ?>; }
        footer a{ color: <?php echo eva_option('footer_link_color'); ?>; }
        footer a:hover, footer a:focus, #footer .eva-recent-posts-widget h4 a:hover{ color: <?php echo eva_option('footer_link_hover_color'); ?>; }
        footer h6.widget-title {font-family: <?php echo eva_option('footer_widgets_title', 'face'); ?>, sans-serif; font-size: <?php echo eva_option('footer_widgets_title', 'size'); ?>; font-weight: <?php echo eva_option('footer_widgets_title', 'style'); ?>; color: <?php echo eva_option('footer_widgets_title', 'color'); ?>; }

        <?php echo eva_option('custom_css'); ?>
    </style>

    <?php
}

add_action('wp_head', 'theme_option_styles', 100);
?>