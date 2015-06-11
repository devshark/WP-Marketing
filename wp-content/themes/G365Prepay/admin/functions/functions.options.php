<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");

		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");
		//Testing
		$of_layout_select 	= array("fullwidth" => "Fullwidth","boxed" => "Boxed Layout");
                $of_options_bg_repeat   = array("stretch" => "Strech Image","repeat" => "repeat","no-repeat" => "no-repeat","repeat-y" => "repeat-y","repeat-x" => "repeat-x");
                $of_options_bg_size   = array("auto" => "Auto","cover" => "Cover","contain" => "Contain");
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
                $border_width   	= array("1px" => "1px","2px" => "2px","3px" => "3px","4px" => "4px","5px" => "5px");

		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		(
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			),
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();

		if ( is_dir($alt_stylesheet_path) )
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) )
		    {
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false )
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();

		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) {
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }
		    }
		}


		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/

		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center");

		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post");


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options,$eva_googlefonts;
$of_options = array();

/*      Evatheme custom admin section started     */
//      General TAB
$of_options[] = array( 	"name" 		=> "General",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "General",
						"desc" 		=> "",
						"id" 		=> "general_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">General Options</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Page builder ?",
						"desc" 		=> "This will enable, disable PageBuilder.",
						"id" 		=> "pagebuilder",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);

$of_options[] = array( 	"name" 		=> "Theme Preloader",
						"desc" 		=> "",
						"id" 		=> "theme_preloader",
						"std" 		=> "<h3 style=\"margin: 3px;\">Theme Preloader</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Theme Preloader",
						"desc" 		=> "See this site for a preloader?",
						"id" 		=> "theme_preloader",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Upload Preloader",
						"desc" 		=> "Downloadable preloader should be 64 by 64 pixels",
						"id" 		=> "theme_preloader_upload",
						"std" 		=> "",
						"fold" 		=> "theme_preloader",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Theme Layout",
						"desc" 		=> "",
						"id" 		=> "layout_theme_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Theme Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Theme Layout Style",
						"desc" 		=> "Choose the Theme layout style.",
						"id" 		=> "theme_layout",
						"std" 		=> "Fullwidth",
						"type" 		=> "select",
						"options" 	=> $of_layout_select
				);
$of_options[] = array( 	"name" 		=> "Layout Options if boxed",
						"desc" 		=> "",
						"id" 		=> "layout_opt_boxed_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">If boxed Theme Layout Style chosen.</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Background Color",
						"desc" 		=> "Choose the background color.",
						"id" 		=> "background_color",
						"std" 		=> "#d1d1d1",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Background Image",
						"desc" 		=> "This option will only works under boxed layout chosen.",
						"id" 		=> "background_image",
						"std" 		=> "",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Background Image Repeat",
						"desc" 		=> "Choose the repeat or stretch image option.",
						"id" 		=> "background_repeat",
						"std" 		=> "repeat",
						"type" 		=> "select",
						"options" 	=> $of_options_bg_repeat
				);
$of_options[] = array( 	"name" 		=> "Margin from Top",
						"desc" 		=> "Boxed Layout margin top.",
						"id" 		=> "margin_top",
						"std" 		=> "0",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Margin from Bottom",
						"desc" 		=> "Boxed Layout margin bottom.",
						"id" 		=> "margin_bottom",
						"std" 		=> "0",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Page 404",
						"desc" 		=> "",
						"id" 		=> "general_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Page 404</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Page 404 Title",
						"desc" 		=> "",
						"id" 		=> "page404_title",
						"std" 		=> "404",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Page 404 Subtitle",
						"desc" 		=> "",
						"id" 		=> "page404_subtitle",
						"std" 		=> "Error! This page not found.",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Page 404 text of button",
						"desc" 		=> "",
						"id" 		=> "page404_btn_text",
						"std" 		=> "Go to home page",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Page 404 Background Image",
						"desc" 		=> "",
						"id" 		=> "page404_bg_image",
						"std" 		=> "",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_info",
						"std" 		=> __("<h3 style=\"margin: 3px;\">SEO</h3>",'evatheme-framework'),
						"icon" 		=> false,
						"type" 		=> "info"
				);
$of_options[] = array(  "name" 		=> __("SEO default settings (meta-description, meta-keywords, etc.).",'evatheme-framework'),
						"desc" 		=> __("Check to disable those settings.",'evatheme-framework'),
						"id" 		=> "check_seodisable",
						"std" 		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Tracking",
						"desc" 		=> "",
						"id" 		=> "track_code_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Tracking</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "tracking_code",
						"std" 		=> "",
						"type" 		=> "textarea"
				);


//      Blog
$of_options[] = array( 	"name" 		=> "Blog",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Page Title Background Image",
						"desc" 		=> "Inserted picture must be above 1600px width and height is atleast 120px. You can redefine or choose other option to your specific page on meta options.",
						"id" 		=> "title_bg_image",
						"std" 		=> "",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Blog Page Title",
						"desc" 		=> "Insert Title of your Blog page.",
						"id" 		=> "blog_title",
						"std" 		=> "Blog",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Blog Page Subtitle",
						"desc" 		=> "Insert Sub Title of your Blog page.",
						"id" 		=> "blog_subtitle",
						"std" 		=> "The most interesting recent blog entries",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Breadcrumps?",
						"desc" 		=> "This will enable or disable Breadcrumps.",
						"id" 		=> "breadcrumps",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Post Author section on post single?",
						"desc" 		=> "If it's On then it will be showed, Off will be hidden.",
						"id" 		=> "post_author",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Facebook Comment",
						"desc" 		=> "",
						"id" 		=> "facebook_twitter_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Facebook Comment API section</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Facebook comment?",
						"desc" 		=> "On will be enabling facebook comment, Off will be Wordpress default comment.",
						"id" 		=> "facebook_comment",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Facebook api key",
						"desc" 		=> "Create your own Facebook Application and <a href='https://developers.facebook.com/apps' target='_blank'>get ID</a>.",
						"id" 		=> "facebook_app_id",
						"std" 		=> "",
						"fold" 		=> "facebook_comment", /* the checkbox hook */
						"type" 		=> "text"
				);


//      Portfolio
$of_options[] = array( 	"name" 		=> "Portfolio",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Hide 'Other Works' portfolios on single?",
						"desc" 		=> "",
						"id" 		=> "port_related",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				


//      Header and Footer TAB
$of_options[] = array( 	"name" 		=> "Header and Footer",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Top Bar",
						"desc" 		=> "",
						"id" 		=> "top_bar_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Top Bar</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Top Bar",
						"desc" 		=> "Displaying the top bar.",
						"id" 		=> "top_bar",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch",
				);
$of_options[] = array( 	"name" 		=> "Top Bar Phone",
						"desc" 		=> "Phone number in the top bar",
						"id" 		=> "top_bar_phone",
						"fold" 		=> "top_bar", /* the checkbox hook */
						"std" 		=> "(123) 456-78-90",
						"type" 		=> "text",
				);
$of_options[] = array( 	"name" 		=> "Top Bar Address",
						"desc" 		=> "Address in the top bar",
						"id" 		=> "top_bar_address",
						"fold" 		=> "top_bar", /* the checkbox hook */
						"std" 		=> "18 Main Street, Suite 820, BuldingName, LA 188 USA",
						"type" 		=> "text",
				);
$of_options[] = array( 	"name" 		=> "Top Social Icons",
						"desc" 		=> "Displaying the top social icons in the header.",
						"id" 		=> "top_social_icons",
						"fold" 		=> "top_bar", /* the checkbox hook */
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch",
				);
$of_options[] = array( 	"name" 		=> "Sticky Header",
						"desc" 		=> "",
						"id" 		=> "header_layout_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Sticky Header</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Sticky Header",
						"desc" 		=> "Check this to make header stick to top on scroll.",
						"id" 		=> "header_sticky",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch",
				);
$of_options[] = array( 	"name" 		=> "Top Search",
						"desc" 		=> "",
						"id" 		=> "top_search_inf",
						"std" 		=> "<h3 style=\"margin: 3px;\">Top Search</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Top Search",
						"desc" 		=> "Displaying the search in the header.",
						"id" 		=> "top_search",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch",
				);
$of_options[] = array( 	"name" 		=> "Logo option heading",
						"desc" 		=> "",
						"id" 		=> "logo_opt_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Logo options</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Upload Standard Logo",
						"desc" 		=> "Please insert your logo.",
						"id" 		=> "theme_logo",
						"std" 		=> "",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Logo Margin from Top",
						"desc" 		=> "Note: You need to insert only value.",
						"id" 		=> "logo_top",
						"std" 		=> "0",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Logo Margin from Bottom",
						"desc" 		=> "Note: You need to insert only value.",
						"id" 		=> "logo_bottom",
						"std" 		=> "0",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Retina Logo",
						"desc" 		=> "",
						"id" 		=> "logo_retina",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Upload Retina Logo (2x)",
						"desc" 		=> "Note: You retina logo must be larger than 2x. Example: Main logo 120x200 then Retina must be 240x400.",
						"id" 		=> "theme_logo_retina",
						"std" 		=> "",
						"mod" 		=> "min",
						"fold" 		=> "logo_retina", /* the checkbox hook */
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Standard Logo Width",
						"desc" 		=> "You need to insert Non retina logo width. Height auto",
						"id" 		=> "logo_width",
						"std" 		=> "158",
						"fold" 		=> "logo_retina", /* the checkbox hook */
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Favicon option heading",
						"desc" 		=> "",
						"id" 		=> "favicon_opt_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Favicon options</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Upload Standard Favicon",
						"desc" 		=> "Please insert your favicon 16x16 icon. You may use <a href='http://www.favicon.cc/' target='_blank'>favicon.cc</a>",
						"id" 		=> "theme_favicon",
						"std" 		=> "",
						"mod" 		=> "min",
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Retina Favicon",
						"desc" 		=> "",
						"id" 		=> "favicon_retina",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Favicon for iPhone (57x57)",
						"desc" 		=> "Please upload your favicon 57x57.",
						"id" 		=> "favicon_iphone",
						"std" 		=> "",
						"mod" 		=> "min",
                                                "fold" 		=> "favicon_retina", /* the checkbox hook */
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Retina Favicon for iPhone (114x114)",
						"desc" 		=> "Please upload your favicon 114x114.",
						"id" 		=> "favicon_iphone_retina",
						"std" 		=> "",
						"mod" 		=> "min",
                                                "fold" 		=> "favicon_retina", /* the checkbox hook */
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Favicon for iPad (72x72)",
						"desc" 		=> "Please upload your favicon 72x72.",
						"id" 		=> "favicon_ipad",
						"std" 		=> "",
						"mod" 		=> "min",
                                                "fold" 		=> "favicon_retina", /* the checkbox hook */
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Retina Favicon for iPad (144x144)",
						"desc" 		=> "Please upload your favicon 144x144.",
						"id" 		=> "favicon_ipad_retina",
						"std" 		=> "",
						"mod" 		=> "min",
                                                "fold" 		=> "favicon_retina", /* the checkbox hook */
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Footer section",
						"desc" 		=> "",
						"id" 		=> "footer_section_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Footer section</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Footer Widget",
						"desc" 		=> "",
						"id" 		=> "footer_widget",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
                                );
$url =  ADMIN_DIR . 'assets/images/footer/';
$of_options[] = array( 	"name" 		=> "Footer Layout",
						"desc" 		=> "Choose footer layout.",
						"id" 		=> "footer_layout",
						"std" 		=> "3-3-3-3",
						"type" 		=> "images",
                                                "fold" 		=> "footer_widget", /* the checkbox hook */
						"options" 	=> array(
											'12' 	  => $url . '1.png',
											'6-6' 	  => $url . '2.png',
											'4-4-4'   => $url . '3.png',
											'3-3-3-3' => $url . '4.png'
										)
				);
$of_options[] = array( 	"name" 		=> "Footer Logo",
						"desc" 		=> "",
						"id" 		=> "footer_logo",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "switch"
				);
$of_options[] = array( 	"name" 		=> "Upload Footer Logo",
						"desc" 		=> "",
						"id" 		=> "theme_footer_logo",
						"std" 		=> "",
						"mod" 		=> "min",
						"fold" 		=> "footer_logo", /* the checkbox hook */
						"type" 		=> "upload"
				);
$of_options[] = array( 	"name" 		=> "Footer Social",
						"desc" 		=> "",
						"id" 		=> "footer_social",
						"std" 		=> 1,
						"folds" 	=> 1,
						"type" 		=> "switch"
                                );
$of_options[] = array( 	"name" 		=> "Copyright Text",
						"desc" 		=> "Insert Copyright Text.",
						"id" 		=> "copyright_text",
						"std" 		=> "&copy; 2014 Perfecti | Made by <a href='http://evatheme.com'>Evatheme</a>",
						"type" 		=> "textarea"
				);



//      Colors and Styling TAB
$of_options[] = array( 	"name" 		=> "Colors and Styling",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "General",
						"desc" 		=> "",
						"id" 		=> "colors_and_styling_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">General</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Theme Color",
						"desc" 		=> "Pick the color of theme (default: #f07241).",
						"id" 		=> "theme_color",
						"std" 		=> "#f07241",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Link Color",
						"desc" 		=> "Pick the color of links (default: #333333).",
						"id" 		=> "link_color",
						"std" 		=> "#333333",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Link Hover Color",
						"desc" 		=> "Pick the color of links on hover (default: #f07241).",
						"id" 		=> "link_hover_color",
						"std" 		=> "#f07241",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Body Colors",
						"desc" 		=> "",
						"id" 		=> "body_colors_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Body</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Body Background Color",
						"desc" 		=> "Pick a background color for the body (default: #fff).",
						"id" 		=> "body_background",
						"std" 		=> "#fff",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Footer Colors",
						"desc" 		=> "",
						"id" 		=> "footer_colors_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Footer</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"desc" 		=> "Pick a background color for the footer (default: #1c1c1c).",
						"id" 		=> "footer_background",
						"std" 		=> "#1c1c1c",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Footer Text Color",
						"desc" 		=> "Pick a footers text color (default: #666666).",
						"id" 		=> "footer_text_color",
						"std" 		=> "#666666",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Footer Link Color",
						"desc" 		=> "Pick a footers a tag color (default: #999999).",
						"id" 		=> "footer_link_color",
						"std" 		=> "#999999",
						"type" 		=> "color"
				);
$of_options[] = array( 	"name" 		=> "Footer Link Hover Color",
						"desc" 		=> "Pick a footers a tag hover color (default: #ffffff).",
						"id" 		=> "footer_link_hover_color",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
				);



//      Typography TAB
$of_options[] = array( 	"name" 		=> "Typography",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Body",
						"desc" 		=> "",
						"id" 		=> "body_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Body</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Body text font",
						"desc" 		=> "Specify the body font properties",
						"id" 		=> "body_text_font",
						"std" 		=> array('size' => '14px','line-height' => '24px','face' => 'Source Sans Pro','style' => 'normal','color' => '#666666'),
						"type" 		=> "typography"
				);

$of_options[] = array( 	"name" 		=> "Widget",
						"desc" 		=> "",
						"id" 		=> "widget_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Widget</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Sidebar Widgets Title",
						"desc" 		=> "Specify the sidebar headline font properties",
						"id" 		=> "sidebar_widgets_title",
						"std" 		=> array('size' => '16px','face' => 'Source Sans Pro','style' => '700','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "Footer Widgets Title",
						"desc" 		=> "Specify the sidebar headline font properties",
						"id" 		=> "footer_widgets_title",
						"std" 		=> array('size' => '16px','face' => 'Source Sans Pro','style' => '700','color' => '#ffffff'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "Headers font styling",
						"desc" 		=> "",
						"id" 		=> "header_font_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Headlines</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Heading Font Family",
						"desc" 		=> "",
						"id" 		=> "heading_font",
						"std" 		=> "Source Sans Pro",
						"type" 		=> "select_google_font",
						"options" 	=> $eva_googlefonts
				);
$of_options[] = array( 	"name" 		=> "H1 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h1_spec_font",
						"std" 		=> array('size' => '34px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "H2 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h2_spec_font",
						"std" 		=> array('size' => '28px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "H3 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h3_spec_font",
						"std" 		=> array('size' => '24px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "H4 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h4_spec_font",
						"std" 		=> array('size' => '22px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "H5 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h5_spec_font",
						"std" 		=> array('size' => '18px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "H6 - Specify Font Properties",
						"desc" 		=> "",
						"id" 		=> "h6_spec_font",
						"std" 		=> array('size' => '16px','color' => '#333333'),
						"type" 		=> "typography"
				);
$of_options[] = array( 	"name" 		=> "Google Font Subset",
						"desc" 		=> "",
						"id" 		=> "google_font_subset",
						"std" 		=> "<h3 style=\"margin: 3px;\">Google Font Subset</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Google Font Subset",
						"desc" 		=> "Some of Google fonts have additional subsets. Please insert those subsets seperated with comma (,). More information <a href='https://developers.google.com/fonts/docs/getting_started' target='_blank'>Google Font Subset</a>",
						"id" 		=> "google_font_subset",
						"std" 		=> "",
						"type" 		=> "text"
				);



//      Social Icons TAB
$of_options[] = array( 	"name" 		=> "Social Icons",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Social Icons heading",
						"desc" 		=> "",
						"id" 		=> "social_icons_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Inserted Social Icons will be displayed on top Header section.</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Facebook ID",
						"desc" 		=> "Enter the Facebook ID.",
						"id" 		=> "facebook_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Flickr Username",
						"desc" 		=> "Enter the Flickr Username.",
						"id" 		=> "flickr_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Google + ID",
						"desc" 		=> "Enter the Google + Username.",
						"id" 		=> "googleplus_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Twitter Username",
						"desc" 		=> "Enter the Twitter Username.",
						"id" 		=> "twitter_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Instagram Username",
						"desc" 		=> "Enter the Instagram Username.",
						"id" 		=> "instagram_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "RSS URL",
						"desc" 		=> "Enter the RSS URL.",
						"id" 		=> "rss_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Pinterest Username",
						"desc" 		=> "Enter the Pinterest Username.",
						"id" 		=> "pinterest_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Skype Username",
						"desc" 		=> "Enter the Skype Username.",
						"id" 		=> "skype_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Vimeo Username",
						"desc" 		=> "Enter the Vimeo Username.",
						"id" 		=> "vimeo_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Youtube Username",
						"desc" 		=> "Enter the Youtube Username.",
						"id" 		=> "youtube_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Dribbble Username",
						"desc" 		=> "Enter the Dribbble Username.",
						"id" 		=> "dribbble_username",
						"std" 		=> "",
						"type" 		=> "text"
				);
$of_options[] = array( 	"name" 		=> "Linkedin Username",
						"desc" 		=> "Enter the Linkedin Username.",
						"id" 		=> "linkedin_username",
						"std" 		=> "",
						"type" 		=> "text"
				);



//      Custom CSS TAB
$of_options[] = array( 	"name" 		=> "Custom CSS",
						"type" 		=> "heading"
				);
$of_options[] = array( 	"name" 		=> "Custom CSS",
						"desc" 		=> "",
						"id" 		=> "custom_css_info",
						"std" 		=> "<h3 style=\"margin: 3px;\">Enter the Custom CSS of your custom Modify.</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Custom CSS",
						"desc" 		=> "Paste your own customized CSS code.",
						"id" 		=> "custom_css",
						"std" 		=> "",
						"type" 		=> "textarea"
				);
//     Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading"
				);

$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);

$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
