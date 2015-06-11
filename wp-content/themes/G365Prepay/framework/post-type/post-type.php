<?php
add_action('admin_print_scripts', 'postsettings_admin_scripts');
add_action('admin_print_styles', 'postsettings_admin_styles');
if (!function_exists('postsettings_admin_scripts')) {
    function postsettings_admin_scripts(){
        global $post,$pagenow;

        if (current_user_can('edit_posts') && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
            if( isset($post) ) {
                wp_localize_script( 'jquery', 'script_data', array(
                    'post_id' => $post->ID,
                    'nonce' => wp_create_nonce( 'evatheme-ajax' ),
                    'image_ids' => get_post_meta( $post->ID, 'gallery_image_ids', true ),
                    'label_create' => __("Create Featured Gallery", "wpthemes"),
                    'label_edit' => __("Edit Featured Gallery", "wpthemes"),
                    'label_save' => __("Save Featured Gallery", "wpthemes"),
                    'label_saving' => __("Saving...", "wpthemes")
                ));
            }

            wp_register_script('post-colorpicker', THEME_DIR.'/framework/assets/js/colorpicker.js');
            wp_register_script('post-metaboxes', THEME_DIR.'/framework/assets/js/metaboxes.js');

            wp_enqueue_script('post-colorpicker');
            wp_enqueue_script('post-metaboxes');
        }
    }
}

if (!function_exists('postsettings_admin_styles')) {
    function postsettings_admin_styles(){
        global $pagenow;
        if (current_user_can('edit_posts') && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
            wp_register_style('post-colorpicker', THEME_DIR.'/framework/assets/css/colorpicker.css', false, '1.00', 'screen');
            wp_register_style('post-metaboxes', THEME_DIR.'/framework/assets/css/metaboxes.css', false, '1.00', 'screen');

            wp_enqueue_style('post-colorpicker');
            wp_enqueue_style('post-metaboxes');
        }
    }
}

add_action("manage_posts_custom_column", "posttype_custom_columns");
if (!function_exists('posttype_custom_columns')) {
    function posttype_custom_columns($column) {
        global $post;
        switch ($column) {
            case "thumbnail":
                echo post_image_show() ? post_image_show(45,45) : ("<img src='".esc_attr( THEME_DIR )."/resources/images/no-thumb.png'>");
                break;
            case "portfolio":
                echo get_the_term_list($post->ID, 'portfolios', '', ', ', '');
                break;
            case "prices":
                echo get_the_term_list($post->ID, 'prices', '', ', ', '');
                break;
            case "team":
                echo get_the_term_list($post->ID, 'position', '', ', ', '');
                break;
            case "testimonial":
                echo get_the_term_list($post->ID, 'testimonials', '', ', ', '');
                break;
            case "partner":
                echo get_the_term_list($post->ID, 'partners', '', ', ', '');
                break;
        }
    }
}

/* * *********************** */
/* Custom post type: Portfolio */
/* * *********************** */

add_action('init', 'portfolio_register');
if (!function_exists('portfolio_register')) {
    function portfolio_register() {
        $labels = array(
            'name' => __('Portfolio', 'evatheme'),
            'singular_name' => __('Portfolio', 'evatheme'),
            'add_new' => __('Add New', 'evatheme'),
            'add_new_item' => __('Add New Portfolio', 'evatheme'),
            'edit_item' => __('Edit Portfolio', 'evatheme'),
            'new_item' => __('New Portfolio', 'evatheme'),
            'all_items' => __('All Portfolios', 'evatheme'),
            'view_item' => __('View Portfolio', 'evatheme'),
            'search_items' => __('Search Portfolios', 'evatheme'),
            'not_found' =>  __('No Portfolio found', 'evatheme'),
            'not_found_in_trash' => __('No Portfolio found in Trash', 'evatheme'),
            'menu_name' => __('Portfolios', 'evatheme')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            '_builtin' => false,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-format-gallery',
            'hierarchical' => false,
            'rewrite' => array( 'slug' => 'portfolio'),
            'supports' => array('title', 'editor', 'thumbnail')
        );
        register_post_type('portfolio', $args);
        flush_rewrite_rules();
    }
}

register_taxonomy("portfolios", array("portfolio"), array("hierarchical" => true, "label" => __("Categories", "evatheme"), "singular_label" => __("Portfolio Category", "evatheme"), "rewrite" => true));

add_filter('manage_edit-portfolio_columns', 'portfolio_edit_columns');
if (!function_exists('portfolio_edit_columns')) {
    function portfolio_edit_columns($columns){
        $columns = array(
            "cb" => "<input type=\"checkbox\" />",
            "title" => __("Portfolio Title", "evatheme"),
            "portfolio" => __("Categories", "evatheme"),
            "date" => __("Date", "evatheme"),
        );
        return $columns;
    }
}


/* * *********************** */
/* Custom post type: Team */
/* * *********************** */

add_action('init', 'team_register');
function team_register() {
    $labels = array(
        'name' => __('Member', 'evatheme'),
        'singular_name' => __('Member', 'evatheme'),
        'add_new' => __('Add New', 'evatheme'),
        'add_new_item' => __('Add New Member', 'evatheme'),
        'edit_item' => __('Edit Member', 'evatheme'),
        'new_item' => __('New Member', 'evatheme'),
        'all_items' => __('All Members', 'evatheme'),
        'view_item' => __('View Member', 'evatheme'),
        'search_items' => __('Search Member', 'evatheme'),
        'not_found' =>  __('No member found', 'evatheme'),
        'not_found_in_trash' => __('No member found in Trash', 'evatheme'),
        'menu_name' => __('Team', 'evatheme')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-groups',
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'team'),
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('team', $args);
    flush_rewrite_rules();
}

register_taxonomy("position", array("team"), array("hierarchical" => true, "label" => __("Categories", "evatheme"), "singular_label" => __("Category", "evatheme"), "rewrite" => true));

add_filter('manage_edit-team_columns', 'team_edit_columns');
function team_edit_columns($columns){
        $columns = array(
            "cb" => "<input type=\"checkbox\" />",
            "thumbnail" => __("Image", "evatheme"),
            "title" => __("Name", "evatheme"),
            "team" => __("Categories", "evatheme"),
            "date" => __("Date", "evatheme"),
        );
        return $columns;
}

/* * *********************** */
/* Custom post type: Testimonial */
/* * *********************** */

add_action('init', 'testimonial_register');
function testimonial_register() {
    $labels = array(
        'name' => __('Testimonial', 'evatheme'),
        'singular_name' => __('Testimonial', 'evatheme'),
        'add_new' => __('Add New', 'evatheme'),
        'add_new_item' => __('Add New Testimonial', 'evatheme'),
        'edit_item' => __('Edit Testimonial', 'evatheme'),
        'new_item' => __('New Testimonial', 'evatheme'),
        'all_items' => __('All Testimonials', 'evatheme'),
        'view_item' => __('View Testimonial', 'evatheme'),
        'search_items' => __('Search Testimonials', 'evatheme'),
        'not_found' =>  __('No testimonial found', 'evatheme'),
        'not_found_in_trash' => __('No testimonial found in Trash', 'evatheme'),
        'menu_name' => __('Testimonials', 'evatheme')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-format-quote',
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'testimonial'),
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('testimonial', $args);
    flush_rewrite_rules();
}

register_taxonomy("testimonials", array("testimonial"), array("hierarchical" => true, "label" => __("Categories", "evatheme"), "singular_label" => __("Testimonial Category", "evatheme"), "rewrite" => true));

add_filter('manage_edit-testimonial_columns', 'testimonial_edit_columns');
function testimonial_edit_columns($columns){
        $columns = array(
            "cb" => "<input type=\"checkbox\" />",
            "title" => __("Name", "evatheme"),
            "testimonial" => __("Categories", "evatheme"),
            "date" => __("Date", "evatheme"),
        );
        return $columns;
}


/* * *********************** */
/* Custom post type: Partner */
/* * *********************** */

add_action('init', 'partner_register');
function partner_register() {
    $labels = array(
        'name' => __('Our Partners', 'evatheme'),
        'singular_name' => __('Partner', 'evatheme'),
        'add_new' => __('Add New', 'evatheme'),
        'add_new_item' => __('Add New Partner', 'evatheme'),
        'edit_item' => __('Edit Item', 'evatheme'),
        'new_item' => __('New Item', 'evatheme'),
        'all_items' => __('All Partners', 'evatheme'),
        'view_item' => __('View Partner', 'evatheme'),
        'search_items' => __('Search Partners', 'evatheme'),
        'not_found' =>  __('No Partner found', 'evatheme'),
        'not_found_in_trash' => __('No partner in Trash', 'evatheme'),
        'menu_name' => __('Partners', 'evatheme')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-businessman',
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'partner'),
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('partner', $args);
    flush_rewrite_rules();
}

register_taxonomy("partners", array("partner"), array("hierarchical" => true, "label" => __("Categories", "evatheme"), "singular_label" => __("Partner Category", "evatheme"), "rewrite" => true));

add_filter('manage_edit-partner_columns', 'partner_edit_columns');
function partner_edit_columns($columns){
        $columns = array(
            "cb" => "<input type=\"checkbox\" />",
            "thumbnail" => __("Image", "evatheme"),
            "title" => __("Partners", "evatheme"),
            "partner" => __("Categories", "evatheme"),
            "date" => __("Date", "evatheme"),
        );
        return $columns;
}

require_once ( THEME_PATH . '/framework/post-type/metaboxes.php');
require_once ( THEME_PATH . '/framework/post-type/post-options.php');

function metabox_render($post, $metabox) {
    global $post;
    $options = get_post_meta($post->ID, 'evatheme_'.strtolower(THEMENAME).'_options', true);?>
        <input type="hidden" name="evatheme_meta_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__));?>" />
        <table class="form-table eva-metaboxes">
            <tbody>
                    <?php
                    foreach ($metabox['args'] as $settings) {
                        $settings['value'] = isset($options[$settings['id']]) ? $options[$settings['id']] : (isset($settings['std']) ? $settings['std'] : '');
                        call_user_func('settings_'.$settings['type'], $settings);
                    }
                    ?>
            </tbody>
        </table>
<?php
}

add_action('save_post', 'savePostMeta');
function savePostMeta($post_id) {
    global $eva_post_settings, $eva_page_settings, $eva_portfolio_settings, $eva_portfolio_gallery, $eva_portfolio_video, $eva_price_settings, $eva_testimonial_settings, $eva_team_settings, $eva_partner_settings;

    $meta = 'evatheme_'.strtolower(THEMENAME).'_options';

    // verify nonce
    if (!isset($_POST['evatheme_meta_box_nonce']) || !wp_verify_nonce($_POST['evatheme_meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                    return $post_id;
            }
    } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    if($_POST['post_type']=='post')
        $metaboxes = $eva_post_settings;
    elseif($_POST['post_type']=='page')
        $metaboxes = $eva_page_settings;
    elseif($_POST['post_type']=='portfolio')
        $metaboxes = array_merge($eva_portfolio_settings,$eva_portfolio_gallery,$eva_portfolio_video);
    elseif($_POST['post_type']=='team')
        $metaboxes = $eva_team_settings;
    elseif($_POST['post_type']=='testimonial')
        $metaboxes = $eva_testimonial_settings;
    elseif($_POST['post_type']=='prices')
        $metaboxes = $eva_price_settings;
    elseif($_POST['post_type']=='partner')
        $metaboxes = $eva_partner_settings;

    if(!empty($metaboxes)) {
        $myMeta = array();

        foreach ($metaboxes as $metabox) {
            $myMeta[$metabox['id']] = isset($_POST[$metabox['id']]) ? $_POST[$metabox['id']] : "";
        }

        update_post_meta($post_id, $meta, $myMeta);

    }
}

/* ================================================================================== */
/*      Save gallery images
/* ================================================================================== */

function evatheme_save_images() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	if ( !isset($_POST['ids']) || !isset($_POST['nonce']) || !wp_verify_nonce( $_POST['nonce'], 'evatheme-ajax' ) )
		return;

	if ( !current_user_can( 'edit_posts' ) ) return;

	$ids = strip_tags(rtrim($_POST['ids'], ','));
	update_post_meta($_POST['post_id'], 'gallery_image_ids', $ids);

	// update thumbs
	$thumbs = explode(',', $ids);
	$gallery_thumbs = '';
	foreach( $thumbs as $thumb ) {
		$gallery_thumbs .= '<li>' . wp_get_attachment_image( $thumb, array(32,32) ) . '</li>';
	}

	echo htmlspecialchars_decode( esc_html( $gallery_thumbs ) );

	die();
}
add_action('wp_ajax_evatheme_save_images', 'evatheme_save_images');
?>
