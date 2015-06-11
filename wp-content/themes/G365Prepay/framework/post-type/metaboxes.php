<?php
if (!function_exists('settings_checkbox')) {
    function settings_checkbox($settings){
        $default = $settings['value'];
        $datashow = $datahide = $klass = "";
        if (!empty($settings['hide'])) {
            $klass = " check-show-hide";
            $datahide = $settings['hide'];
        }
        if (!empty($settings['show'])) {
            $klass = " check-show-hide";
            $datashow = $settings['show'];
        } ?>
        <tr id="field_<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <input type="hidden" name="<?php echo esc_attr( $settings['id'] ); ?>" id="<?php echo esc_attr( $settings['id'] ); ?>" value="0"/>
                <input type="checkbox" class="yesno<?php echo esc_attr( $klass ); ?>" id="<?php echo esc_attr( $settings['id'] ); ?>" data-show="<?php echo esc_attr( $datashow ); ?>" data-hide="<?php echo esc_attr( $datahide ); ?>" name="<?php echo esc_attr( $settings['id'] ); ?>" value="1" <?php echo checked($default, 1, false);?> />
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_textarea')) {
    function settings_textarea($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <textarea rows="5" name="<?php echo esc_attr( $settings['id'] ); ?>"><?php echo esc_html( $settings['value'] ); ?></textarea>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_text')) {
    function settings_text($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <input type="text" name="<?php echo esc_attr( $settings['id'] ); ?>" id="<?php echo esc_attr( $settings['id'] ); ?>" value="<?php echo esc_attr( $settings['value'] ); ?>" />
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_file')) {
    function settings_file($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <input type="text" id="<?php echo esc_attr( $settings['id'] ); ?>" name="<?php echo esc_attr( $settings['id'] ); ?>" value="<?php echo esc_attr( $settings['value'] ); ?>" placeholder="Your Custom BG Image URL" size=""/>
                <a href="#" class="button insert-images theme_button format" onclick="browseimage('<?php echo esc_attr( $settings['id'] ); ?>')"><?php _e('Insert image', "evatheme"); ?></a>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_selectbox')) {
    function settings_selectbox($settings){
        $settings['options'] = array('true', 'default', 'false'); ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <select class="selectbox" name="<?php echo esc_attr( $settings['id'] ); ?>" data-value="<?php echo esc_attr( $settings['value'] );?>"><?php
                    foreach ($settings['options'] as $meta) {
                        echo '<option value="' . esc_attr( $meta ) . '" ';
                        echo ($meta == $settings['value']) ? 'selected ' : '';
                        echo '>' . esc_html( $meta ) . '</option>';
                    } ?>
                </select>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_layoutpage')) {
    function settings_layoutpage($settings){}
}
if (!function_exists('settings_layout')) {
    function settings_layout($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <div class="type_layout">
                    <a href="javascript:;" data-value="left" class="left-sidebar"></a>
                    <a href="javascript:;" data-value="right" class="right-sidebar"></a>
                    <a href="javascript:;" data-value="full" class="without-sidebar"></a>
                    <input name="<?php echo esc_attr( $settings['id'] );?>" type="hidden" value="<?php echo esc_attr( $settings['value'] );?>" />
                </div>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_radio')) {
    function settings_radio($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <td>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>"><?php echo esc_html( $settings['name'] ); ?></label>
                <div class="type_radio"><?php
                    foreach ($settings['options'] as $option) {
                        echo '<input type="radio" style="margin-right:5px;" name="' . esc_attr( $settings['name'] ) . '" value="' . esc_html( $option ) . '" ';
                        echo ($option == $settings['value']) ? 'checked ' : '';
                        echo '><span style="margin-right:20px;">' . esc_html( $option ) . '</span><br />';
                    } ?>
                </div>
            </td>
            <td>
                <span>
                    <?php echo esc_html( $settings['desc'] ); ?>
                </span>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_color')) {
    function settings_color($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <div class="color_selector">
                    <div class="color_picker"><div style="background-color: <?php echo esc_attr( $settings['value'] ); ?>;" class="color_picker_inner"></div></div>
                    <input type="text" class="color_picker_value" id="<?php echo esc_attr( $settings['id'] ); ?>" name="<?php echo esc_attr( $settings['id'] ); ?>" value="<?php echo esc_attr( $settings['value'] ); ?>" />
                </div>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_select')) {
    function settings_select($settings){ ?>
        <tr id="<?php echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <div class="type_select add_item_medium">
                    <select class="medium" name="<?php echo esc_attr( $settings['id'] ); ?>" data-value="<?php echo esc_attr( $settings['value'] );?>"><?php
                        foreach($settings['options'] as $key=>$value) {
                                echo '<option value="'.esc_attr( $key ).'">'.esc_html( $value ).'</option>';
                        } ?>
                    </select>
                </div>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_gallery')) {
    function settings_gallery($settings){
        global $post;
        $meta = get_post_meta( $post->ID, 'gallery_image_ids', true );
        $gallery_thumbs = '';
        $button_text = ($meta) ? __('Edit Gallery', 'evatheme') : __('Upload Images', 'evatheme');
        if( $meta ) {
            $thumbs = explode(',', $meta);
            foreach( $thumbs as $thumb ) {
                $gallery_thumbs .= '<li>' . wp_get_attachment_image( $thumb, array(32,32) ) . '</li>';
            }
        } ?>
        <tr id="<?php //echo esc_attr( $settings['id'] ); ?>">
            <th>
                <label for="<?php echo esc_attr( $settings['id'] ); ?>">
                    <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                    <span><?php echo esc_html( $settings['desc'] ); ?></span>
                </label>
            </th>
            <td>
                <input type="button" class="button" name="<?php echo esc_attr( $settings['id'] ); ?>" id="gallery_images_upload" value="<?php echo esc_attr( $button_text ); ?>" />
                <input type="hidden" name="gallery_image_ids" id="gallery_image_ids" value="<?php echo (true == $meta) ? esc_attr( $meta ) : 'false'; ?>" />
                <ul class="gallery-thumbs"><?php echo htmlspecialchars_decode( esc_html( $gallery_thumbs ) ); ?></ul>
            </td>
        </tr><?php
    }
}
if (!function_exists('settings_slideshow')) {
    function settings_slideshow($settings){
        if (!is_plugin_inactive('revslider/revslider.php')) {
            global $wpdb;
            $table_name = $wpdb->prefix . "revslider_sliders";
            // $sliders = $wpdb->prepare( "SELECT * FROM $table_name" );
            $sliders = $wpdb->get_results( "SELECT * FROM $table_name" );
            if (!empty($sliders)) { ?>
            <tr id="<?php echo esc_attr($settings['id']); ?>">
                <th>
                    <label for="<?php echo esc_attr($settings['id']); ?>">
                        <strong><?php echo esc_html( $settings['name'] ); ?></strong>
                        <span><?php echo esc_html( $settings['desc'] ); ?></span>
                    </label>
                </th>
                <td>
                    <select class="medium" name="<?php echo esc_attr($settings['id']); ?>" data-value="<?php echo esc_attr($settings['value']);?>"><?php
                        if(!empty($sliders)) {
                                foreach($sliders as $key => $item) {
                                        $name = empty($item->title) ? ('Unnamed('.$item->id.')') : $item->title;
                                        echo '<option value="[rev_slider '.esc_attr( $item->id ).']">'.esc_html( $name ).'</option>';
                                }
                        } ?>
                    </select>
                </td>
            </tr><?php } else {
                return false;
            }
        } else {
            return false;
        }
    }
}


/* ================================================================================== */
/*      MetaBox Keywords
/* ================================================================================== */
add_action( 'init', 'evatheme_page_keywords', 0 );
function evatheme_page_keywords(){
	$labels = array(
		'name'              => __("Keywords",'evatheme'),
		'singular_name'     => __("keyword",'evatheme'),
		'search_items'      => __( 'Search Keywords','evatheme'),
		'all_items'         => __( 'All Keywords','evatheme'),
		'parent_item'       => __( 'Parent keyword','evatheme' ),
		'parent_item_colon' => __( 'Parent keyword:','evatheme' ),
		'edit_item'         => __( 'Edit keyword','evatheme' ),
		'update_item'       => __( 'Update keyword','evatheme' ),
		'add_new_item'      => __( 'Add New keyword','evatheme' ),
		'new_item_name'     => __( 'New keyword Name','evatheme' ),
		'menu_name'         => __( 'Keywords','evatheme' )
	);
	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'rewrite'           => true
	);
	register_taxonomy("page_keywords", array("page"), $args);
}
?>
