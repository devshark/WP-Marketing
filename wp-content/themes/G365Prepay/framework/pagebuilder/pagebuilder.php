<?php
add_action('admin_print_scripts', 'pagebuilder_admin_scripts');
add_action('admin_print_styles', 'pagebuilder_admin_styles');
if (!function_exists('pagebuilder_admin_scripts')) {
    function pagebuilder_admin_scripts() {
        global $pagenow,$post_type;
        if (current_user_can('edit_posts') && ($pagenow == 'post-new.php' || $pagenow == 'post.php') && ($post_type==='page'||$post_type==='post'||$post_type==='portfolio'||$post_type==='partner'||$post_type==='testimonial')) {
            wp_register_script('post-pagebuilder', THEME_DIR . '/framework/assets/js/pagebuilder.js');
            wp_enqueue_script('jquery-ui-dialog');
            wp_enqueue_script('post-pagebuilder');
            wp_enqueue_script('farbtastic');
        }
    }
}
if (!function_exists('pagebuilder_admin_styles')) {
    function pagebuilder_admin_styles() {
        global $pagenow,$post_type;
        if (current_user_can('edit_posts') && ($pagenow == 'post-new.php' || $pagenow == 'post.php') && ($post_type==='page'||$post_type==='post'||$post_type==='portfolio'||$post_type==='partner'||$post_type==='testimonial')) {
            wp_enqueue_style('farbtastic');
            wp_register_style('post-pagebuilder', THEME_DIR . '/framework/assets/css/pagebuilder.css', false, '1.00', 'screen');
            wp_register_style('font-awesome', THEME_DIR . '/assets/css/font-awesome/font-awesome.min.css', false, '1.00', 'screen');
            wp_enqueue_style('post-pagebuilder');
            wp_enqueue_style('font-awesome');
        }
    }
}

//====== START - Globals  ======
global $eva_pbItems, $eva_pbHeadSettings;
//Sidebar
$arraySidebar = array("Default sidebar" => "Default sidebar");
$sidebars = get_option('sbg_sidebars');
if (!empty($sidebars)) {
    foreach ($sidebars as $sidebar) {
        $arraySidebar[$sidebar] = $sidebar;
    }
}
// Slider
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$arraySlider  = array("0" => "Select Slider");
if (is_plugin_active( 'revslider/revslider.php' )) {
 global $wpdb;
 $table_name = $wpdb->prefix . "revslider_sliders";
 $sliders = $wpdb->get_results( "SELECT * FROM $table_name" );
 if(!empty($sliders)) {
     foreach($sliders as $item) {
         $name = empty($item->title) ? ('Unnamed('.$item->id.')') : $item->title;
         $arraySlider[$item->id]=$name;
     }
 }
}
//Link Target
$linkTarget = array("_blank" => "Blank", "_self" => "Self");
//Yes No
$arrayYesNo = array("true" => "Yes", "false" => "No");
//Post Type
$arrayPostType = array("post" => "Post", "portfolio" => "Portfolio");
//Post Catigories
$categories = get_categories("hide_empty=0");
$post_categories = array("0" => "Select Category");
if(!empty($categories)) {
    foreach ($categories as $category) {
        $post_categories["$category->term_id"] = $category->name;
    }
}
//Portfolio Catigories
$portfolios = get_terms('portfolios', 'hide_empty=0');
$port_categories = array("0" => "Select Category");
if(!empty($portfolios)) {
    foreach ($portfolios as $portfolio) {
        $port_categories["$portfolio->term_id"] = $portfolio->name;
    }
}
//Partner Catigories
$partners = get_terms('partners', 'hide_empty=0');
$part_categories = array("0" => "Select Category");
if(!empty($partners)) {
    foreach ($partners as $partner) {
        $part_categories["$partner->term_id"] = $partner->name;
    }
}
//Team Catigories
$teams = get_terms('position', 'hide_empty=0');
$team_categories = array("0" => "Select Category");
if(!empty($teams)) {
    foreach ($teams as $team) {
        $team_categories["$team->term_id"] = $team->name;
    }
}
//Testimonials Catigories
$testimonials = get_terms('testimonials', 'hide_empty=0');
$testim_categories = array("0" => "Select Category");
if(!empty($testimonials)) {
    foreach ($testimonials as $testimonial) {
        $testim_categories["$testimonial->term_id"] = $testimonial->name;
    }
}
//includes
require_once (THEME_PATH . "/framework/pagebuilder/elements.php");
require_once (THEME_PATH . "/framework/pagebuilder/pagebuilder_render.php");
//====== END   - Globals   ======
//====== START - Functions ======
if (!function_exists('pbInitGlobalScripts')) {
    function pbInitGlobalScripts() {
        global $post;
        $pID='';
        if(isset($post->ID)){
            $pID=$post->ID;
        }
        echo'<script type="text/javascript">var $homeURI="' . esc_url( home_url() ) . '";var pID="' . esc_html( $pID ) . '";</script>';
    }
} add_action('admin_footer', 'pbInitGlobalScripts');

if (!function_exists('pbTextToFoundation')) {
    function pbTextToFoundation($size = '1 / 2') {
        switch ($size) {
            case'size-1-6' :
            case'1 / 6' : {
                $size = 'span2';
                break;
            }
			case'size-1-4' :
            case'1 / 4' : {
                $size = 'span3';
                break;
            }
            case'size-1-3' :
            case'1 / 3' : {
                $size = 'span4';
                break;
            }
            case'size-1-2' :
            case'1 / 2' : {
                $size = 'span6';
                break;
            }
            case'size-2-3' :
            case'2 / 3' : {
                $size = 'span8';
                break;
            }
            case'size-3-4' :
            case'3 / 4' : {
                $size = 'span9';
                break;
            }
            case'size-1-1' :
            case'1 / 1' : {
                $size = 'span12';
                break;
            }
        }
        return $size;
    }
}
if (!function_exists('pbTextToInt')) {
    function pbTextToInt($size = '1 / 3') {
        switch ($size) {
            case'size-1-6' :
            case'1 / 6' : {
                $size = 2;
                break;
            }
			case'size-1-4' :
            case'1 / 4' : {
                $size = 3;
                break;
            }
            case'size-1-3' :
            case'1 / 3' : {
                $size = 4;
                break;
            }
            case'size-1-2' :
            case'1 / 2' : {
                $size = 6;
                break;
            }
            case'size-2-3' :
            case'2 / 3' : {
                $size = 8;
                break;
            }
            case'size-3-4' :
            case'3 / 4' : {
                $size = 9;
                break;
            }
            case'size-1-1' :
            case'1 / 1' : {
                $size = 12;
                break;
            }
        }
        return $size;
    }
}

if (!function_exists('pbSizeToText')) {
    function pbSizeToText($size = 'size-1-3') {
        switch ($size) {
            case'size-1-6' : {
                $size = '1 / 6';
                break;
            }
			case'size-1-4' : {
                $size = '1 / 4';
                break;
            }
            case'size-1-3' : {
                $size = '1 / 3';
                break;
            }
            case'size-1-2' : {
                $size = '1 / 2';
                break;
            }
            case'size-2-3' : {
                $size = '2 / 3';
                break;
            }
            case'size-3-4' : {
                $size = '3 / 4';
                break;
            }
            case'size-1-1' : {
                $size = '1 / 1';
                break;
            }
        }
        return $size;
    }
}

if (!function_exists('pbTextToSize')) {
    function pbTextToSize($size = '1 / 3') {
        switch ($size) {
            case'1 / 6' : {
                $size = 'size-1-6';
                break;
            }case'1 / 4' : {
                $size = 'size-1-4';
                break;
            }
            case'1 / 3' : {
                $size = 'size-1-3';
                break;
            }
            case'1 / 2' : {
                $size = 'size-1-2';
                break;
            }
            case'2 / 3' : {
                $size = 'size-2-3';
                break;
            }
            case'3 / 4' : {
                $size = 'size-3-4';
                break;
            }
            case'1 / 1' : {
                $size = 'size-1-1';
                break;
            }
        }
        return $size;
    }
}

if (!function_exists('getItemField')) {
    function getItemField($itemSlug, $itemArray) {
        $title = isset($itemArray['title']) ? $itemArray['title'] : '';
        $type = isset($itemArray['type']) ? $itemArray['type'] : '';
        $default = isset($itemArray['default']) ? $itemArray['default'] : '';
        $desc = isset($itemArray['desc']) ? $itemArray['desc'] : '';
        $holder = isset($itemArray['holder']) ? $itemArray['holder'] : '';
        $selector = isset($itemArray['selector']) ? $itemArray['selector'] : '';
        $save_to = isset($itemArray['save_to']) ? $itemArray['save_to'] : '';
        $tinyMCE = isset($itemArray['tinyMCE']) ? $itemArray['tinyMCE'] : '';
        $class = 'field'; ?>
        <div class="field-item<?php echo ('hidden' === $type) ? ' hidden' : ''; echo ' type' . esc_attr( $type ); echo (true == $tinyMCE) ? ' editor' : ''; ?>"><?php
            if($type!='container'){
                echo '<div class="field-title">'.esc_html( $title ).'</div>';
                $default = rawUrlDecode($default);
            } ?>
            <div class="field-data"><?php
                switch ($type) {
                    case 'fa' : { ?>
                        <div class="button show-fa-modal"><?php _e('Add Icon','evatheme'); ?></div>
                        <div class="button remove-fa"><?php _e('Delete Icon','evatheme'); ?></div>
                        <div class="fa-viewer"></div>
                        <?php
                        break;
                    }
                    case 'gallery':
                    case 'hidden':
                    case 'button':
                    case 'text' : {
                        $typeOrg=$type;
                        if($type==='gallery'){$type='hidden';} ?>
                        <input    data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" data-type-org="<?php echo esc_attr( $typeOrg ); ?>" class="<?php echo esc_attr( $class ); ?>" value="<?php echo esc_attr( $default ); ?>" placeholder="<?php echo esc_attr( $holder ); ?>" data-selector="<?php echo esc_attr( $selector ); ?>" data-save-to="<?php echo esc_attr( $save_to ); ?>" type="<?php echo esc_attr( $type ); ?>" /><?php
                        if (!empty($itemArray['data'])) {
                            global $eva_pbItems;
                            echo '<div class="data hidden">';
                            $tmpItem = $itemArray['data']['item'];
                            $tmpSettings = $itemArray['data']['settings'];
                            getItemField($tmpSettings, $eva_pbItems[$tmpItem]['settings'][$tmpSettings]);
                            echo '</div>';
                        }
                        if($typeOrg==='gallery'){
                            echo '<ul class="gallery-images">';
                                $images = empty($default) ? false : explode(",", $default);
                                if($images){foreach ($images as $id) {if(!empty($id)){ ?><li><img width="100" height="auto" src="<?php echo wp_get_attachment_url($id); ?>"></li><?php }}}
                            echo '</ul>';
                        }
                        $type=$typeOrg;
                        break;
                    }
                    case 'color': { ?>
                        <div style="background-color: <?php echo empty($default)?'':esc_attr( $default ); ?>;" class="color-info"></div>
                        <input    data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" class="<?php echo esc_attr( $class ); ?>" value="<?php echo empty($default)?'':esc_attr( $default ); ?>" placeholder="<?php echo esc_attr( $holder ); ?>" type="text" /><?php
                        break;
                    }
                    case 'checkbox': { ?>
                        <input    data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" class="<?php echo esc_attr( $class ); ?> hidden" value="<?php echo esc_attr( $default ); ?>" placeholder="<?php echo esc_attr( $holder ); ?>" type="checkbox" <?php echo ('true'===$default)?'checked':''; ?> />
                        <div class="checkbox-text clearfix"><div class="checkbox-true"><?php _e('ON','evatheme'); ?></div><div class="checkbox-false"><?php _e('OFF','evatheme'); ?></div></div><?php
                        break;
                    }
                    case 'textArea': { ?>
                        <textarea data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" class="<?php echo esc_attr( $class ); ?>" placeholder="<?php echo esc_attr( $holder ); ?>" data-tinyMCE="<?php echo esc_attr( $tinyMCE ); ?>" ><?php echo esc_attr( $default ); ?></textarea><?php
                        break;
                    }
                    case 'category':
                    case 'select': { ?>
                        <select   data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" class="<?php echo esc_attr( $class ); ?>"><?php
                            $hide = isset($itemArray['hide']) ? $itemArray['hide'] : '';
                            foreach ($itemArray['options'] as $val => $text) {
                                echo '<option value="' . esc_attr( $val ) . '"' . ($default === strval($val) ? ' selected="selected"' : '') . ' hide="' . (isset($hide[$val]) ? esc_attr( $hide[$val] ) : '') . '">' . esc_html( $text ) . '</option>';
                            } ?>
                        </select>
                        <span class="select-text"></span><?php
                        if($type === 'category'){
                            echo '<div class="category-list-container"></div>';
                        }
                        break;
                    }
                    case 'container': {
                        $title_as = isset($itemArray['title_as']) ? $itemArray['title_as'] : '';
                        $add_button = isset($itemArray['add_button']) ? $itemArray['add_button'] : '';
                        $container_type = isset($itemArray['container_type']) ? $itemArray['container_type'] : ''; ?>
                        <div data-name="<?php echo esc_attr( $itemSlug ); ?>" data-type="<?php echo esc_attr( $type ); ?>" data-container-type="<?php echo esc_attr( $container_type ); ?>" class="<?php echo esc_attr( $class ); ?> container" placeholder="<?php echo esc_attr( $holder ); ?>" data-title-as="<?php echo esc_attr( $title_as ); ?>" data-add-button="<?php echo esc_attr( $add_button ); ?>" ><?php
                            if(!empty($default)) {
                                foreach ($default as $data) { ?>
                                    <div class="container-item<?php echo ('image_slider'===$container_type)?' expanded':''; ?>">
                                        <div class="list clearfix">
                                            <div class="name"><?php echo esc_html( $data[$title_as]['default'] ); ?></div>
                                            <div class="actions">
                                                <a href="#" class="action-expand"><span class="opened">-</span><span class="closed">+</span></a>
                                                <a href="#" class="action-duplicate" title="Duplicate">D</a>
                                                <a href="#" class="action-delete"  title="Delete">X</a>
                                            </div>
                                        </div>
                                        <div class="content"><?php
                                            if($container_type==='image_slider'){
                                                echo '<img class="image-src" src="'.esc_attr( $data[$title_as]['default'] ).'" />';
                                            }
                                            $faPrint=true;
                                            foreach ($data as $slug => $setting) {
                                                if(isset($setting['need_fa'])&&$setting['need_fa']==='true'&&$faPrint){
                                                    echo getItemField('fa', array("type"=> "fa"));
                                                }
                                                if($slug==='fa'){$faPrint=false;}
                                                echo getItemField($slug, $setting);
                                            } ?>
                                        </div>
                                    </div><?php
                                }
                            }?>
                        </div><?php
                        break;
                    }
                } ?>
            </div><?php
            if($type!='container'){ echo '<div class="field-desc">'.esc_html( $desc ).'</div>';} ?>
        </div><?php
    }
}

if (!function_exists('pbGetItem')) {
    function pbGetItem($itemSlug, $itemNewData = array()) {
        global $eva_pbHeadSettings, $eva_pbItems;
        $itemArray = $eva_pbItems[$itemSlug];
        $itemArray['size'] = empty($itemNewData['size']) ? $itemArray['size'] : pbTextToSize($itemNewData['size']);
        ob_start();
        ?>
        <div class="item <?php echo esc_attr( $itemArray['size'] ); ?>" data-slug="<?php echo esc_attr( $itemSlug ); ?>" <?php if(isset($itemArray['min-size'])){echo ' data-min="'.esc_attr( $itemArray['min-size'] ).'"';} ?> title="<?php echo esc_attr( $itemSlug ); ?>">
            <div class="thumb"><span class="<?php echo esc_attr( $itemSlug ); ?>"></span><?php echo esc_html( $itemArray['name'] ); ?></div>
            <div class="list clearfix">
                <div class="size-sizer-container">
                    <div class="size"><?php echo pbSizeToText($itemArray['size']); ?></div>
                    <div class="sizer"><a class="down" href="#"><</a><a class="up" href="#">></a></div>
                </div>
                <div class="name"><?php echo esc_html( $itemArray['name'] ); ?></div>
                <div class="actions clearfix">
                    <a href="#" class="action-duplicate">D</a>
					<a href="#" class="action-edit">E</a>
                    <a href="#" class="action-delete">X</a>
                </div>
            </div>
            <div class="data">
                <div class="general-field-container"><?php
                    foreach ($eva_pbHeadSettings as $pbHeadSettingSlug => $pbHeadSetting) {
                        $pbHeadSetting['default'] = isset($itemNewData[$pbHeadSettingSlug]) ? $itemNewData[$pbHeadSettingSlug] : $pbHeadSetting['default'];
                        echo getItemField($pbHeadSettingSlug, $pbHeadSetting);
                    }
                    ?>
                </div>
                <div class="custom-field-container"><?php
                    foreach ($itemArray['settings'] as $pbItemSettingSlug => $pbItemSetting) {
                        if ($pbItemSetting['type'] === 'container' && isset($itemNewData['settings'][$pbItemSettingSlug])) {
                            $templateContainerItem = $pbItemSetting['default'][0];
                            foreach ($itemNewData['settings'][$pbItemSettingSlug] as $index => $containerItemNewData) {
                                foreach ($containerItemNewData as $containerItemNewFieldSlug => $containerItemNewFieldValue) {
                                    $templateContainerItem[$containerItemNewFieldSlug]['default'] = $containerItemNewFieldValue;
                                    $itemNewData['settings'][$pbItemSettingSlug][$index][$containerItemNewFieldSlug] = $templateContainerItem[$containerItemNewFieldSlug];
                                }
                            }
                        }
                        $pbItemSetting['default'] = isset($itemNewData['settings'][$pbItemSettingSlug]) ? $itemNewData['settings'][$pbItemSettingSlug] : $pbItemSetting['default'];
                        echo getItemField($pbItemSettingSlug, $pbItemSetting);
                    }
                    ?>
                </div>
            </div>
        </div><?php
        $output = ob_get_clean();
        return $output;
    }
}
if (!function_exists('pbSection')) {
    function pbSection() {
        add_meta_box('cmeta_pagebuilder', __('Page Builder', 'cmeta_pagebuilder_td'), 'pbSectionBox', 'page', 'normal', 'high');
    }
}
if (eva_option('pagebuilder')){
    add_action('admin_print_styles', 'pbSection', 1);
}

if (!function_exists('pbSectionBox')) {
    function pbSectionBox() {
        global $post, $eva_pbItems;
        $items = '';
        $_pb_content_area = '';
        $_pb_content_area_layouts = '';
        $_pb_content = get_post_meta($post->ID, '_pb_content', true);
        $_pb_layout_array = json_decode(rawUrlDecode($_pb_content), true);
        $pbLayoutCount=0;
        if(!empty($_pb_layout_array)){
            foreach($_pb_layout_array as $_pb_layout){
                $pbLayoutCount++;
                $_layout_open='<div class="clearfix builder-area '.$_pb_layout['size'].'">';
                $_pb_content_area_layouts .= $_layout_open;
                $_pb_content_area         .= $_layout_open;
                    foreach ($_pb_layout['items'] as $item_array) {
                        $_pb_content_area .= pbGetItem($item_array['slug'], $item_array);
                    }
                $_layout_close='</div>';
                $_pb_content_area_layouts .= $_layout_close;
                $_pb_content_area         .= $_layout_close;
            }
        }
        while($pbLayoutCount++<3){
            $_empty_layout = '<div class="clearfix 2 builder-area size-"></div>';
            $_pb_content_area         .= $_empty_layout;
            $_pb_content_area_layouts .= $_empty_layout;
        }

        wp_nonce_field(plugin_basename(__FILE__), 'myplugin_noncename');
        foreach ($eva_pbItems as $pbItemSlug => $pbItemArray) {
            if(empty($pbItemArray['only']) || $pbItemArray['only']==='builder'){
                $items .= pbGetItem($pbItemSlug);
            }
        }
        $pbLayout = get_metabox('layout');
        if($pbLayout===''){$pbLayout='full';};
        $pbLayouts = '<a href="#" class="sidebar left-sidebar'.($pbLayout==='left'?' active':'').'"   data-value="1-4,3-4,0-0" data-input="left">Left Sidebar</a>
                      <a href="#" class="sidebar full'.($pbLayout==='full'?' active':'').'"                   data-value="0-0,1-1,0-0" data-input="full">Full</a>
                      <a href="#" class="sidebar right-sidebar'.($pbLayout==='right'?' active':'').'" data-value="0-0,3-4,1-4" data-input="right">Right Sidebar</a>';
        echo '<div class="pagebuilder-container">
                <div class="pagebuilder-head-container">
                    <div class="eva-one">
                        <h4>Select page layout <span>(Select the location of your page)</span></h4>
                    </div>
                    <div class="eva-two clearfix" id="pagebuilder-select-layout">
                        <input name="pb-page-layout" class="page-layout" type="hidden" value="'.htmlspecialchars_decode(esc_html( $pbLayout )).'" />' . htmlspecialchars_decode( esc_html( $pbLayouts ) ) . '
                    </div>
                </div>
                <div class="pagebuilder-head-container">
                    <div class="eva-one">
                        <h4>Select your element <span>(Select an item and place it lower part)</span></h4>
                    </div>
                    <div class="eva-two" class="clearfix">
                        <div id="pagebuilder-elements-container" class="clearfix">' . htmlspecialchars_decode( esc_html( $items ) ) . '</div>
                    </div>
                </div>
                <textarea id="pb_content" name="pb_content" class="hidden">' . htmlspecialchars_decode( esc_html( $_pb_content ) ) . '</textarea>
                <ul id="size-list" class="hidden">
                    <li data-class="size-1-6" data-text="1 / 6" class="min"></li>
					<li data-class="size-1-4" data-text="1 / 4"></li>
                    <li data-class="size-1-3" data-text="1 / 3"></li>
                    <li data-class="size-1-2" data-text="1 / 2"></li>
                    <li data-class="size-2-3" data-text="2 / 3"></li>
                    <li data-class="size-3-4" data-text="3 / 4"></li>
                    <li data-class="size-1-1" data-text="1 / 1" class="max"></li>
                </ul>
                <div id="pagebuilder-area" class="clearfix">'.htmlspecialchars_decode( esc_html( $_pb_content_area_layouts ) ).'</div>
                <div id="pagebuilder-area-source" class="hidden">' . htmlspecialchars_decode( esc_html( $_pb_content_area ) ) . '</div>
            </div>';
    }
}

// Save fields data
if (!function_exists('pbSectionBoxSavePostData')) {
    function pbSectionBoxSavePostData($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;
        if (isset($_GET['post_type']) && 'page' == $_GET['post_type']) {
            if (!current_user_can('edit_page', $post_id))
                return $post_id;
        } else {
            if (!current_user_can('edit_post', $post_id))
                return $post_id;
        }
        if (isset($_POST['pb_content'])) {
            update_post_meta($post_id, '_pb_content', $_POST['pb_content']);
        }
        if (isset($_POST['pb_content'])) {
            set_metabox('layout',$_POST['pb-page-layout']);
        }
    }
} add_action('save_post', 'pbSectionBoxSavePostData');

// Template Ajax Action
if (!function_exists('pbTemplateAdd') && is_user_logged_in()) {
    function pbTemplateAdd() {
        if (isset($_REQUEST['template_name']) && isset($_REQUEST['template_layout']) && isset($_REQUEST['template_content'])) {
            $response = '';
            $templates_array = get_option('eva_pb_'.strtolower(THEMENAME).'_templates');
            if (isset($templates_array[$_REQUEST['template_name']])) {
                $response .= '<div class="error">' . __('Template name is allready exist. Please insert the template name and try again', 'evatheme') . '</div>';
            } else {
                $templates_array[$_REQUEST['template_name']] = array(
                    'layout' => $_REQUEST['template_layout'],
                    'content' => $_REQUEST['template_content']
                );
                update_option('eva_pb_'.strtolower(THEMENAME).'_templates', $templates_array);
                $response .= '<div class="succes">' . __('Template added', 'evatheme') . '</div>';
            }
            die('<div class="response">' . $response . '</div>');
        }
    }
} add_action('wp_ajax_template_add', 'pbTemplateAdd');

if (!function_exists('pbTemplateGet') && is_user_logged_in()) {
    function pbTemplateGet() {
        if (isset($_REQUEST['template_name'])) {
            $response = '';
            $templates_array = get_option('eva_pb_'.strtolower(THEMENAME).'_templates');
            if (isset($templates_array[$_REQUEST['template_name']])) {
                $template = $templates_array[$_REQUEST['template_name']];
                $response .= '<div class="data">';
                $response .= '<div class="layout">' . $template['layout'] . '</div>';
                $response .= '<div class="content">'. rawUrlDecode($template['content']) . '</div>';
                $response .= '</div>';
            } else {
                $response .= '<div class="error">' . __('Template name not exsist', 'evatheme') . '</div>';
            }
            die('<div class="response">' . $response . '</div>');
        }
    }
} add_action('wp_ajax_template_get', 'pbTemplateGet');

if (!function_exists('pbTemplateRemove') && is_user_logged_in()) {
    function pbTemplateRemove() {
        if (isset($_REQUEST['template_name'])) {
            $response = '';
            $templates_array = get_option('eva_pb_'.strtolower(THEMENAME).'_templates');
            if (isset($templates_array[$_REQUEST['template_name']])) {
                unset($templates_array[$_REQUEST['template_name']]);
                update_option('eva_pb_'.strtolower(THEMENAME).'_templates', $templates_array);
            } else {
                $response .= '<div class="error">' . __('Template name not exsist', 'evatheme') . '</div>';
            }
            die('<div class="response">' . $response . '</div>');
        }
    }
} add_action('wp_ajax_template_remove', 'pbTemplateRemove');

if (!function_exists('pbGetFontawesome') && is_user_logged_in()) {
    function pbGetFontawesome() {
        require_once (THEME_PATH . "/framework/pagebuilder/font-awesome.php");
        die();
    }
} add_action('wp_ajax_get_fontawesome', 'pbGetFontawesome');
