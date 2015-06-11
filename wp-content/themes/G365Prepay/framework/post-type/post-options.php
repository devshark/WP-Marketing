<?php    
$selectsidebar = array();
$selectsidebar["Default sidebar"] = "Default sidebar";
$sidebars = get_option('sbg_sidebars');
if (!empty($sidebars)) {
    foreach ($sidebars as $sidebar) {
        $selectsidebar[$sidebar] = $sidebar;
    }
}
$header_type = array(
    'subtitle'=>'Title and Subtitle',
    'slider'=>'Slider',
	'none'=>'None'
);

/* * *********************** */
/* Post options */
/* * *********************** */
$eva_post_settings = Array(
    Array(        
        'name' => __('Post Author Show?', 'evatheme'),
        'desc' => __('Default setting will take from theme options.', 'evatheme'),
        'id' => 'post_authorr',
        'std' => 'true',
        'type' => 'selectbox'
	),
    Array(
        'name' => __('Featured Media Show?', 'evatheme'),
        'desc' => __('Default setting will take from theme options.', 'evatheme'),
        'id' => 'feature_show',
        'std' => 'true',
        'type' => 'selectbox'
	),
	Array(        
        'name' => __('Breadcrumbs on this page?', 'evatheme'),
        'desc' => __('Default setting will take from theme options.', 'evatheme'),
        'id' => 'breadcrumps',
        'std' => 'default',
        'type' => 'selectbox'
	),
    Array(        
        'name' => __('Choose Post Layout?', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'layout',
        'std' => 'right',
        'type' => 'layout'
	),
    Array(        
        'name' => __('Choose Sidebar ?', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'sidebar',
        'options' => $selectsidebar,
        'std' => 'Default sidebar',
        'type' => 'select'
	)
);


/* * *********************** */
/* Page options */
/* * *********************** */
$eva_page_settings = Array(
    Array(
        'name' => __('Header type ?', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'header_type',
        'std' => 'subtitle',
        'options' => $header_type,
        'type' => 'select'
	),
    Array(
        'name' => __('Select Slideshow', 'evatheme'),
        'desc' => __('All of your created sliders will be included here.', 'evatheme'),
        'id' => 'slider_id',
        'type' => 'slideshow'
	),
	 Array(
        'name' => __('Sub Title', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'subtitle',
        'type' => 'text'
	),
    Array(
        'name' => __('Background image of page title', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'bg_image',
        'type' => 'file'
	),
    Array(        
        'name' => __('Breadcrumbs on this post?', 'evatheme'),
        'desc' => __('Default setting will take from theme options.', 'evatheme'),
        'id' => 'breadcrumps',
        'std' => 'true',
        'type' => 'selectbox'
	),
);
if(!eva_option("pagebuilder")){
    $eva_page_settings[] = Array(
        'name' => __('Page Layout ?', 'evatheme'),
        'desc' => __('Choose the Layout', 'evatheme'),
        'id'   => 'layout',
        'std'  => 'full',
        'type' => 'layout'
    );
    $eva_page_settings[] = Array(
        'name' => __('Sidebar ?', 'evatheme'),
        'desc' => __('Choose your Sidebar', 'evatheme'),
        'id'   => 'custom_sidebar',
        'options' => $selectsidebar,
        'std'  => 'Default sidebar',
        'type' => 'select'
    );
}


/* * *********************** */
/* Portfolio options */
/* * *********************** */
$eva_portfolio_settings = array(
	array(        
		'name' => __('Featured image location style', 'evatheme'),
		'desc' => __('Select the location of the images and descriptions.', 'evatheme'),
		'id' => 'portfolio_settings_columns',
		'options' => array('port_full_width'=>'Full width','port_column'=>'Columns'),
		'std' => 'port_column',
		'type' => 'select'
	),
	array(
		'name' => __('Sub Title', 'evatheme'),
		'desc' => __('', 'evatheme'),
		'id' => 'subtitle',
		'type' => 'text'
	),
	array(
		'name' => __('Background image of page title', 'evatheme'),
		'desc' => __('', 'evatheme'),
		'id' => 'title_bg_image',
		'type' => 'file'
	),
	array(
		'name' => __('Preview url', 'evatheme'),
		'desc' => __('', 'evatheme'),
		'id' => 'preview_url',
		'type' => 'text'
	),
	array(
		'name' => __('Client', 'evatheme'),
		'desc' => __('', 'evatheme'),
		'id' => 'portfolio_client',
		'type' => 'text'
	)
);
$eva_portfolio_gallery = array(
	array( "name" => __('Upload images', 'framework'),
		"desc" => __('Select the images that should be upload to this gallery', 'framework'),
		"id" => "gallery_image_ids",
		"type" => 'gallery'
	)
);
$eva_portfolio_video = array(
	array( "name" => __('M4V File URL','framework'),
		"desc" => __('The URL to the .m4v video file','framework'),
		"id" => "format_video_m4v",
		"type" => "text",
		'std' => ''
	),
	array( "name" => __('Video Thumbnail Image','framework'),
		"desc" => __('The preivew image.','framework'),
		"id" => "format_video_thumb",
		"type" => "text",
		'std' => ''
	),
	array( "name" => __('Embeded Code','framework'),
		"desc" => __('If you\'re not using self hosted video then you can include embeded code here.','framework'),
		"id" => "format_video_embed",
		"type" => "textarea",
		'std' => ''
	)	
);


/* * *********************** */
/* Testimonial options */
/* * *********************** */
$eva_testimonial_settings = Array(
    Array(
        'name' => __('Author position', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'company',
        'type' => 'text'),
    Array(
        'name' => __('Link to url', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'url',
        'type' => 'text'),
);


/* * *********************** */
/* Team options */
/* * *********************** */
$eva_team_settings = Array(
    Array(
        'name' => __('Position', 'evatheme'),
        'desc' => __('Member position', 'evatheme'),
        'id' => 'position',
        'type' => 'text'),
	Array(
        'name' => __('Description', 'evatheme'),
        'desc' => __('Member description', 'evatheme'),
        'id' => 'description',
        'type' => 'text'),
    Array(
        'name' => __('Facebook url', 'evatheme'),
        'desc' => __('Facebook url', 'evatheme'),
        'id' => 'facebook',
        'type' => 'text'),
    Array(
        'name' => __('Google Plus url', 'evatheme'),
        'desc' => __('Google Plus url', 'evatheme'),
        'id' => 'google',
        'type' => 'text'),
    Array(
        'name' => __('Twitter url', 'evatheme'),
        'desc' => __('Twitter url', 'evatheme'),
        'id' => 'twitter',
        'type' => 'text'),
    Array(
        'name' => __('Dribbble url', 'evatheme'),
        'desc' => __('Dribbble url', 'evatheme'),
        'id' => 'dribbble',
        'type' => 'text'),
	Array(
        'name' => __('Website url', 'evatheme'),
        'desc' => __('Website url', 'evatheme'),
        'id' => 'website',
        'type' => 'text'),
);


/* * *********************** */
/* Partner options */
/* * *********************** */
$eva_partner_settings = Array(
    Array(
        'name' => __('Partner Link to URL', 'evatheme'),
        'desc' => __('', 'evatheme'),
        'id' => 'link',
        'type' => 'text'),
);



add_action('admin_init', 'post_settings_custom_box', 1);
if (!function_exists('post_settings_custom_box')) {
    function post_settings_custom_box() {
        global $eva_post_settings;
        add_meta_box('post_meta_settings',__( 'Post settings', 'evatheme' ),'metabox_render','post','normal','core',$eva_post_settings);
    }
}

add_action('admin_init', 'page_settings_custom_box', 1);
if (!function_exists('page_settings_custom_box')) {
    function page_settings_custom_box() {
        global $eva_page_settings;
        add_meta_box('page_meta_settings',__( 'Page settings', 'evatheme' ),'metabox_render','page','normal','core',$eva_page_settings);
    }
}

add_action('admin_init', 'portfolio_settings_custom_box');
if (!function_exists('portfolio_settings_custom_box')) {
    function portfolio_settings_custom_box() {
        global $eva_portfolio_gallery,$eva_portfolio_video,$eva_portfolio_settings;
        add_meta_box('eva_portfolio_settings',__( 'Portfolio settings', 'evatheme' ),'metabox_render','portfolio','normal','high',$eva_portfolio_settings);
        add_meta_box('portfolio_gallery_settings',__( 'Portfolio gallery settings', 'evatheme' ),'metabox_render','portfolio','normal','high',$eva_portfolio_gallery);
        add_meta_box('portfolio_video_settings',__( 'Portfolio video settings', 'evatheme' ),'metabox_render','portfolio','normal','high',$eva_portfolio_video);
    }
}

add_action('admin_init', 'testimonial_settings_custom_box');
if (!function_exists('testimonial_settings_custom_box')) {
    function testimonial_settings_custom_box() {
        global $eva_testimonial_settings;
        add_meta_box('testimonial_meta_settings',__( 'Testimonial settings', 'evatheme' ),'metabox_render','testimonial','normal','high',$eva_testimonial_settings);
    }
}

add_action('admin_init', 'team_settings_custom_box');
if (!function_exists('team_settings_custom_box')) {
    function team_settings_custom_box() {
        global $eva_team_settings;
        add_meta_box('team_meta_settings',__( 'Team settings', 'evatheme' ),'metabox_render','team','normal','high',$eva_team_settings);
    }
}

add_action('admin_init', 'partner_settings_custom_box');
if (!function_exists('partner_settings_custom_box')) {
    function partner_settings_custom_box() {
        global $eva_partner_settings;
        add_meta_box('partner_meta_settings',__( 'Partner settings', 'evatheme' ),'metabox_render','partner','normal','high',$eva_partner_settings);
    }
}

add_action('admin_init', 'price_settings_custom_box');
if (!function_exists('price_settings_custom_box')) {
    function price_settings_custom_box() {
        global $eva_price_settings;
        add_meta_box('price_meta_settings',__( 'Price settings', 'evatheme' ),'metabox_render','price','normal','high',$eva_price_settings);
    }
} ?>