<?php

/* ================================================================================== */
/*      Item Shortcode Container
/* ================================================================================== */

if (!function_exists('shortcode_eva_item')) {
    function shortcode_eva_item($atts, $content) {
        if($atts['row_type']==='row'){
            $atts['size']=$atts['layout_size'];
        }else{
            if($atts['layout_size']==='span3'){
                $atts['size']='span12';
            }
        }
        $output = '<div class="'.esc_attr($atts['size']).'">'.apply_filters('widget_text', $content).'</div>';
        return $output;
    }
}
add_shortcode('eva_item', 'shortcode_eva_item');


/* ================================================================================== */
/*      Layout Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_layout')) {
    function shortcode_eva_layout($atts, $content) {
        $output = '<div class="'.(pbTextToFoundation($atts['size'])==="span3"?'span3 sidebar-container':pbTextToFoundation($atts['size'])).'">'.do_shortcode($content).'</div>';
        return $output;
    }
}
add_shortcode('eva_layout', 'shortcode_eva_layout');


/* ================================================================================== */
/*      Sidebar Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_sidebar')) {
    function shortcode_eva_sidebar($atts, $content) {
        ob_start();
        echo '<section id="sidebar">';
        if(!dynamic_sidebar($atts['name'])) {
                echo 'There is no widget. You should add your widgets into <strong>';
                echo esc_html( $atts['name'] );
                echo '</strong> sidebar area on <strong>Appearance => Widgets</strong> of your dashboard. <br/><br/>';
        }
        echo '</section>';
        $output = ob_get_clean();
        return $output;
    }
}
add_shortcode('eva_sidebar', 'shortcode_eva_sidebar');



/* ================================================================================== */
/*      Accordion Shortcode
/* ================================================================================== */

// Accordion container
if (!function_exists('shortcode_eva_accordion')) {
    function shortcode_eva_accordion($atts, $content) {
        $output = '<div class="eva-accordion" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= apply_filters('widget_text',$content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_accordion', 'shortcode_eva_accordion');
// Accordion Item
if (!function_exists('shortcode_eva_accordion_item')) {
    function shortcode_eva_accordion_item($atts, $content) {
        $expand=(!empty($atts['item_expand'])&&$atts['item_expand']=='true')?true:false;

        $output = '<div class="accordion-group">';
            $output .= '<div class="accordion-heading">';
                $output .= '<a class="accordion-toggle '.($expand?' active':'').'" data-toggle="collapse" data-parent="" href="#">';
					$output .= apply_filters('widget_title', $atts['item_title']);
                $output .= '</a>';
            $output .= '</div>';
            $output .= '<div class="accordion-body collapse'.($expand?' in':'').'" >';
                $output .= '<div class="accordion-inner">';
                    $output .= apply_filters("the_content",$content);
                $output .= '</div>';
            $output .= '</div>';
        $output .= '</div>';


        return $output;
    }
}
add_shortcode('eva_accordion_item', 'shortcode_eva_accordion_item');




/* ================================================================================== */
/*      Toggle Shortcode
/* ================================================================================== */

// Toggle container
if (!function_exists('shortcode_eva_toggle')) {
    function shortcode_eva_toggle($atts, $content) {
        $output = '<div class="eva-toggle" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= apply_filters('widget_text', $content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_toggle', 'shortcode_eva_toggle');
// Toggle Item
if (!function_exists('shortcode_eva_toggle_item')) {
    function shortcode_eva_toggle_item($atts, $content) {
        $expand=(!empty($atts['item_expand'])&&$atts['item_expand']=='true')?true:false;

        $output = '<div class="accordion-group">';
            $output .= '<div class="accordion-heading '.($expand?' active':'').'">';
                $output .= '<a class="accordion-toggle toggle '.($expand?' active':'').'" data-toggle="collapse" href="#">';
                    $output .= apply_filters('widget_title', $atts['item_title']);
                $output .= '</a>';
            $output .= '</div>';
            $output .= '<div class="accordion-body collapse'.($expand?' in':'').'" >';
                $output .= '<div class="accordion-inner">';
                    $output .= apply_filters("the_content",$content);
                $output .= '</div>';
            $output .= '</div>';
        $output .= '</div>';


        return $output;
    }
}
add_shortcode('eva_toggle_item', 'shortcode_eva_toggle_item');





/* ================================================================================== */
/*      Tab Shortcode
/* ================================================================================== */

// Tab container
if (!function_exists('shortcode_eva_tab')) {
    function shortcode_eva_tab($atts, $content) {
        $position=(!empty($atts['position'])||$atts['position']!='top')?(' tabs-'.$atts['position']):'';
        $output = '<div class="eva-tab tabbable'.$position.'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= apply_filters('widget_text', $content);
        $output .= '<ul class="nav nav-tabs"></ul>';
        $output .= '<div class="tab-content"></div>';
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_tab', 'shortcode_eva_tab');
// Tab Item
if (!function_exists('shortcode_eva_tab_item')) {
    function shortcode_eva_tab_item($atts, $content) {
        $output = '<li><a href="">'.apply_filters('widget_title', $atts['title']).'</a></li>';
        $output .= '<div class="tab-pane" id="">';
            $output .= apply_filters("the_content",$content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_tab_item', 'shortcode_eva_tab_item');






/* ================================================================================== */
/*      Blog Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_blog')) {
    function shortcode_eva_blog($atts, $content) {
        global $paged,$eva_options;
		add_action( 'wp_footer', 'blog_isotope');
		if ($atts['style']=='carousel') {
			add_action( 'wp_footer', 'blog_owlCarousel_script');
		}
        $output = '<div class="eva-blog '.$atts['style'].' '.$atts['columns'].'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $query = Array(
            'post_type' => 'post',
            'posts_per_page' => $atts['post_count'],
            'paged' => $paged,
        );
        $cats = empty($atts['category_ids']) ? false : explode(",", $atts['category_ids']);
        if ($cats) {
            $query['tax_query'] = Array(Array(
                    'taxonomy' => 'category',
                    'terms' => $cats,
                    'field' => 'id'
                )
            );
        }
        $eva_options['show_pagination'] = $atts['pagination'] == 'true' ? true : false;
        $eva_options['excerpt_count'] = $atts['excerpt_count'];
        $eva_options['more_text'] = $atts['more_text'];
        query_posts($query);
        ob_start();
        get_template_part("loop");
        $output .= ob_get_clean();
        wp_reset_query();
        $output .= '</div>';
        return $output;
    }
}

function blog_isotope() {
    wp_enqueue_script('isotope', THEME_DIR.'/assets/js/jquery.isotope.min.js', false, false, true); ?>
<?php }
function blog_owlCarousel_script() {
    wp_enqueue_script('owlCarousel', THEME_DIR.'/assets/js/owl.carousel.min.js', false, false, true); ?>
<?php }
add_shortcode('eva_blog', 'shortcode_eva_blog');





/* ================================================================================== */
/*      Column Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_column')) {
    function shortcode_eva_column($atts, $content) {
        $output = '<div class="eva-column-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">'. apply_filters("the_content",$content) .'</div>';
        return $output;
    }
}
add_shortcode('eva_column', 'shortcode_eva_column');



/* ================================================================================== */
/*      Item Title Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_item_title')) {
    function shortcode_eva_item_title($atts, $content) {
        $output='<div class="eva-title-container" style="padding-bottom:'.$atts['padding_bottom_module'].';"><h3 class="eva-title">'.apply_filters('widget_title', $atts['title']).'</h3></div>';
        return $output;
    }
}
add_shortcode('eva_item_title', 'shortcode_eva_item_title');



/* ================================================================================== */
/*      Core Content Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_content')) {
    function shortcode_eva_content($atts, $content) {
        $output = '<div class="eva-content-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">'. apply_filters("the_content",get_the_content()) .'</div>';
		return $output;
    }
}
add_shortcode('eva_content', 'shortcode_eva_content');





/* ================================================================================== */
/*      Service Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_service')) {
    function shortcode_eva_service($atts, $content) {
        $output = '<div class="eva-service">';
        $output .= apply_filters('widget_text', $content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_service', 'shortcode_eva_service');


// Service Item
if (!function_exists('shortcode_eva_service_item')) {
    function shortcode_eva_service_item($atts, $content) {
        $style = $atts['service_style'];
        $thumb=do_shortcode('[eva_fontawesome fa_icon="'.$atts['fa_icon'].'"]');
        $style_for_desc='';
        $output = '';

		if(!empty($atts['more_url'])) {
			$output .= '<a href="'.$atts['more_url'].'" target="'.$atts['more_target'].'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<div class="eva-service-box '.$style.'">';
					$output .= '<div class="eva-service-icon">'.$thumb.'</div>';
					$output .= '<div class="eva-service-content '.$style_for_desc.'">';
						$output .= '<h3>'.apply_filters('widget_title', $atts['title']).'</h3>';
						$output .= '<p>'.apply_filters('widget_text', $content).'</p>';
					$output .= '</div>';
				$output .= "</div>";
			$output .= '</a>';
		} else {
			$output .= '<div class="eva-service-box '.$style.'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<div class="eva-service-icon">'.$thumb.'</div>';
				$output .= '<div class="eva-service-content '.$style_for_desc.'">';
					$output .= '<h3>'.apply_filters('widget_title', $atts['title']).'</h3>';
					$output .= '<p>'.apply_filters('widget_text', $content).'</p>';
				$output .= '</div>';
			$output .= "</div>";
		}
        return $output;
    }
}
add_shortcode('eva_service_item', 'shortcode_eva_service_item');




/* ================================================================================== */
/*      Font Awesome Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_fontawesome')) {
    function shortcode_eva_fontawesome($atts, $content) {
        $output = '';
		if (!empty($atts['fa_icon'])) {
			$output='<i class="fa '.$atts['fa_icon'].'"></i>';
		} else {
		}
        return $output;
    }
}
add_shortcode('eva_fontawesome', 'shortcode_eva_fontawesome');





/* ================================================================================== */
/*      Divider Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_divider')) {
    function shortcode_eva_divider($atts, $content) {
        $output = '';
        if($atts['type'] == 'colored') {
            $output = '<div class="eva-divider type-colored" style="background-color:'.$atts['color'].'; margin-bottom:'.$atts['padding_bottom_module'].';"></div>';
        } elseif ($atts['type'] == 'light') {
            $output = '<div class="eva-divider type-light" style="margin-bottom:'.$atts['padding_bottom_module'].';"></div>';
		} elseif ($atts['type'] == 'dark') {
            $output = '<div class="eva-divider type-dark" style="margin-bottom:'.$atts['padding_bottom_module'].';"></div>';
		} elseif ($atts['type'] == 'with_dot') {
            $output = '<div class="eva-divider type-dot" style="margin-bottom:'.$atts['padding_bottom_module'].';"></div>';
		}
        return $output;
    }
}
add_shortcode('eva_divider', 'shortcode_eva_divider');




/* ================================================================================== */
/*      Messagebox Shortcode
/* ================================================================================== */

// Messagebox container
if (!function_exists('shortcode_message_box')) {
    function shortcode_message_box($atts, $content) {
        $output = '<div class="eva-messages-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= do_shortcode($content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_message_box', 'shortcode_message_box');
// Messagebox Item
if (!function_exists('shortcode_eva_message_box_item')) {
    function shortcode_eva_message_box_item($atts, $content) {
        $type = "alert-warning";
        $icon = '';
		$message_title = $atts['message_title'];

        if($atts['type'] == 'warning') {
            $type="alert-warning";
            $icon = '<i class="fa fa-bullhorn"></i></i>';
        } elseif($atts['type'] == 'info') {
            $type="alert-info";
            $icon = '<i class="fa fa-asterisk"></i>';
        } elseif($atts['type'] == 'success') {
            $type="alert-success";
            $icon = '<i class="fa fa-check"></i>';
        } elseif($atts['type'] == 'error') {
            $type="alert-error";
            $icon = '<i class="fa fa-ban"></i>';
        }
        $output = '<div class="message-box '.$type.'">';
            $output .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            $output .= '<p>'.$message_title.'</p>';
            $output .= apply_filters('widget_text', $content);
            $output .= $icon;
        $output .= '</div>';

        return $output;
    }
}
add_shortcode('eva_message_box_item', 'shortcode_eva_message_box_item');




/* ================================================================================== */
/*      Progress Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_progress')) {
    function shortcode_eva_progress($atts, $content) {
        $output = '';
        $output .= '<div class="eva-progress-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">' .do_shortcode($content). '</div>';
		return $output;
    }
}
add_shortcode('eva_progress', 'shortcode_eva_progress');
if (!function_exists('shortcode_eva_progress_item')) {
    function shortcode_eva_progress_item($atts, $content) {
        $progress_type = $atts['type'];

		$output = '<div class="progress-items '. $progress_type .'">';
        if($atts['type'] == 'line') {
            $output .= '<div class="skill_item">';
				$output .= '<span>'.apply_filters('widget_title', $atts['progress_title']).'</span>';
				$output .= '<div class="skill-bar" data-percent="'.$atts['percent'].'%">';
					$output .= '<div class="progress-complete" data-width="'.$atts['percent'].'%" style="background-color: '.$atts['color'].'"></div>';
				$output .= '</div>';
			$output .= '</div>';
		} elseif($atts['type'] == 'circle') {
            $output .= '<div class="chart" data-percent="'.$atts['percent'].'" data-bar-color="'.$atts['color'].'" data-animate="2000">';
				$output .= '<div class="chart-content">';
					$output .= '<div class="percent" style="color:'.$atts['color'].';"></div>';
				$output .= '</div>';
			$output .= '</div>';
			$output .= '<h4 class="chart-title">'.apply_filters('widget_title', $atts['progress_title']).'</h4>';
		}
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_progress_item', 'shortcode_eva_progress_item');


/* ================================================================================== */
/*      Video Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_video')) {
    function shortcode_eva_video($atts, $content) {

        $video_embed = $content;
        $video_thumb = $atts['video_thumb'];
        $video_m4v = $atts['video_m4v'];
        $video_type = $atts['insert_type'];
		$videoPaddingBottom = $atts['padding_bottom_module'];

        ob_start();

        if ($video_type == 'type_embed') {
            echo '<div class="eva-video-wrap" style="padding-bottom:'. esc_attr( $videoPaddingBottom ) .'">' .apply_filters("the_content", $video_embed). '</div>';
        } elseif (!empty($video_m4v)) {
            global $post;
            add_action('wp_footer', 'jplayer_script');
            ?>

			<div class="eva-video-wrap" style="padding-bottom:<?php echo esc_attr( $videoPaddingBottom ); ?>">
				<div id="jquery_jplayer_<?php echo esc_attr( $post->ID ); ?>" class="jp-jplayer jp-jplayer-video" data-pid="<?php echo esc_attr( $post->ID ); ?>" data-m4v="<?php echo esc_attr( $video_m4v ); ?>" data-thumb="<?php echo esc_attr( $video_thumb ); ?>"></div>
				<div class="jp-video-container">
					<div class="jp-video">
						<div class="jp-type-single">
							<div id="jp_interface_<?php echo esc_attr( $post->ID ); ?>" class="jp-interface">
								<ul class="jp-controls">
									<li><div class="seperator-first"></div></li>
									<li><div class="seperator-second"></div></li>
									<li><a href="#" class="jp-play" tabindex="1"><i class="fa fa-play"></i></a></li>
									<li><a href="#" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
									<li><a href="#" class="jp-mute" tabindex="1"><i class="fa fa-volume-up"></i></a></li>
									<li><a href="#" class="jp-unmute" tabindex="1"><i class="fa fa-volume-off"></i></a></li>
								</ul>
								<div class="jp-progress-container">
									<div class="jp-progress">
										<div class="jp-seek-bar">
											<div class="jp-play-bar"></div>
										</div>
									</div>
								</div>
								<div class="jp-volume-bar-container">
									<div class="jp-volume-bar">
										<div class="jp-volume-bar-value"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <?php
        }
        $output = ob_get_clean();
        return $output;
    }
}
add_shortcode('eva_video', 'shortcode_eva_video');





/* ================================================================================== */
/*      Promo Text Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_promo_text')) {
    function shortcode_eva_promo_text($atts, $content) {
        $type = '';
        if($atts['type'] == 'white_style') {
            $type = 'white_style';
        } elseif($atts['type'] == 'black_style') {
            $type = 'black_style';
        }
        $promo_text_bt=isset($atts['btn_text'])?$atts['btn_text']:'';
        $promo_text_bt_url=!empty($atts['btn_url'])?to_url($atts['btn_url']):'#';
        $promo_text_bt_color=!empty($atts['btn_url'])?(' style="background-color:'.$atts['btn_color'].'"'):'#';
        $promo_text_bt_target=isset($atts['btn_target'])?$atts['btn_target']:'_blank';
        $promo_text_bt_full='<a href="' . esc_url( $promo_text_bt_url ) . '"'.$promo_text_bt_color.' target="'.$promo_text_bt_target.'" class="btn">'.apply_filters('widget_title', $promo_text_bt).'</a>';

        $output = '<div class="eva-promo-text'.(!empty($promo_text_bt) ? ' with-button' : '').' '.$type.'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
			$output .= '<div class="promo_text clearfix">';
				$output .= '<div class="promo-text-content">';
					$output .= '<h3>'.apply_filters('widget_text', $content).'</h3>';
					$output .= '<p>'.$atts['description'].'</p>';
				$output .= '</div>';
				$output .= !empty($promo_text_bt) ? $promo_text_bt_full : '';
			$output .= '</div>';
		$output .= '</div>';

        return $output;
    }
}
add_shortcode('eva_promo_text', 'shortcode_eva_promo_text');





/* ================================================================================== */
/*      Revolution Slider Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_slider')) {
    function shortcode_eva_slider($atts, $content) {
        $output = '';
        if($atts["id"]>0){
            $output .= '<div class="eva-slider-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">'. do_shortcode('[rev_slider '.$atts["id"].']') .'</div>';
        }else{
            $output .= '<div class="eva-slider-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';"><pre>'.__('Choose Slider','evatheme').'</pre></div>';
        }

        return $output;
    }
}
add_shortcode('eva_slider', 'shortcode_eva_slider');





/* ================================================================================== */
/*      Pricing Table Shortcode
/* ================================================================================== */

// Pricing Table container
if (!function_exists('shortcode_eva_pricing_table')) {
    function shortcode_eva_pricing_table($atts, $content) {
        $output = '<div class="eva-pricing-wrapper clearfix" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= apply_filters('widget_text',$content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_pricing_table', 'shortcode_eva_pricing_table');
// Pricing Table Item
if (!function_exists('shortcode_eva_pricing_table_item')) {
    function shortcode_eva_pricing_table_item($atts, $content) {
        $expand=(!empty($atts['item_expand'])&&$atts['item_expand']=='true')?true:false;
        $new_item=(!empty($atts['new_item'])&&$atts['new_item']=='true')?true:false;

		$price_text_btn=isset($atts['item_caption'])?$atts['item_caption']:'';
        $price_text_btn_url=!empty($atts['item_get_it_now'])?$atts['item_get_it_now']:'#';
        $price_text_btn_full='<a href="' . esc_url( $price_text_btn_url ) . '" class="btn">'.apply_filters('widget_title', $price_text_btn).'</a>';

        $output = '<div class="pricing_table_item '.($expand?' price_popular':'').($new_item?' price_new':'').'">';
            $output .= '<div class="pricing_table_heading">';
				$output .= apply_filters('widget_title', $atts['item_title']);
			$output .= '</div>';
			$output .= '<div class="pricing_table_price_wrap">';
				$output .= '<span class="pricing_table_price">';
					$output .= apply_filters('widget_title', $atts['item_price']);
				$output .= '</span>';
				$output .= '<span class="pricing_table_period">';
					$output .= apply_filters('widget_title', $atts['item_period']);
				$output .= '</span>';
            $output .= '</div>';
            $output .= '<div class="pricing_table_body">';
				$output .= '<div class="price_item_text">';
					$output .= apply_filters('widget_title', $atts['item_information_field1']);
				$output .= '</div>';
				$output .= '<div class="price_item_text">';
					$output .= apply_filters('widget_title', $atts['item_information_field2']);
				$output .= '</div>';
				$output .= '<div class="price_item_text">';
					$output .= apply_filters('widget_title', $atts['item_information_field3']);
				$output .= '</div>';
				$output .= '<div class="price_item_text">';
					$output .= apply_filters('widget_title', $atts['item_information_field4']);
				$output .= '</div>';
            $output .= '</div>';
			$output .= '<div class="price_item_btn">';
				$output .= !empty($price_text_btn) ? $price_text_btn_full : '';
			$output .= '</div>';
        $output .= '</div>';


        return $output;
    }
}
add_shortcode('eva_pricing_table_item', 'shortcode_eva_pricing_table_item');





/* ================================================================================== */
/*      Testimonials Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_testimonials')) {
    function shortcode_eva_testimonials($atts, $content) {
        add_action( 'wp_footer', 'testimonials_isotope');
		$style = '';
		$output = '';
		if($atts['style'] == 'carousel') {
			$output .= '<div class="eva-testimonials flexslider" style="padding-bottom:'.$atts['padding_bottom_module'].';"><ul class="slides clearfix">';
        } else {
			$output .= '<div class="eva-testimonials '.$atts['style'].'" style="padding-bottom:'.$atts['padding_bottom_module'].';"><ul class="clearfix">';
        }
        $query = Array(
            'post_type' => 'testimonial',
            'posts_per_page' => $atts['count'],
        );
        $cats = empty($atts['category_ids']) ? false : explode(",", $atts['category_ids']);
        if ($cats) {
            $query['tax_query'] = Array(Array(
                    'taxonomy' => 'testimonials',
                    'terms' => $cats,
                    'field' => 'id'
                )
            );
        }
        query_posts($query);
        while (have_posts()){ the_post();
            $output .= '<li class="testimonial-item">';
				if($atts['style'] == 'carousel') {
					$output .= '<div class="time-line"><span></span></div>';
				}
				$output .= '<div class="testimonials-avatar">';
					if($atts['style'] == 'carousel') {
						$output .= '<a href="' . esc_url( get_metabox('url') ) .'">' .post_image_show(130,130). '</a>';
					} else {
						$output .= '<a href="' . esc_url( get_metabox('url') ) .'">' .post_image_show(90,90). '</a>';
					}
				$output .= '</div>';
				$output .= '<div class="testimonial-content-wrap">';
					$output .= '<div class="testimonial-item-content">';
						$output .= get_the_content();
					$output .= '</div>';
					$output .= '<span class="testimonials-name">'.get_the_title().'</span> / ';
					$output .= '<span class="testimonials-position">'.apply_filters('widget_title', get_metabox('company')).'</span>';
				$output .= '</div>';
            $output .= '</li>';
        }
        wp_reset_query();
        $output .= '</ul>';
        $output .= '</div>';

        return $output;
    }
}

function testimonials_isotope() {
    wp_enqueue_script('isotope', THEME_DIR.'/assets/js/jquery.isotope.min.js', false, false, true); ?>
<?php }
add_shortcode('eva_testimonials', 'shortcode_eva_testimonials');





/* ================================================================================== */
/*      Team Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_team')) {
    function shortcode_eva_team($atts, $content) {
        $output = '<div class="eva-our-team member'.$atts['count'].' clearfix" style="padding-bottom:'.$atts['padding_bottom_module'].'">';
        $query = Array(
            'post_type' => 'team',
            'posts_per_page' => $atts['count'],
        );
        $cats = empty($atts['category_ids']) ? false : explode(",", $atts['category_ids']);
        if ($cats) {
            $query['tax_query'] = Array(Array(
                    'taxonomy' => 'position',
                    'terms' => $cats,
                    'field' => 'id'
                )
            );
        }

        query_posts($query);
        while (have_posts()){ the_post();
			if(get_metabox('description')!="") { $output .= '<div class="team-member-wrap '.apply_filters('widget_text', 'with-descr').'">'; } else { $output .= '<div class="team-member-wrap">';}
				$output .= '<div class="team-member clearfix">';
					$output .= '<div class="team-member-img-wrap">'.post_image_show().'</div>';
						$output .= '<div class="member-description-wrap">';
							$output .= '<h2>'.get_the_title().'</h2>';
							if(get_metabox('position')!="")
								$output .= '<p>'.apply_filters('widget_text', get_metabox('position')).'</p>';
							if(get_metabox('description')!="")
								$output .= '<span>'.apply_filters('widget_text', get_metabox('description')).'</span>';
							$output .= '<div class="member-social clearfix">';
								if(get_metabox('twitter')!="")
									$output .= '<a href="' . esc_url( (get_metabox('twitter')) ) .'" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>';
								if(get_metabox('facebook')!="")
									$output .= '<a href="' . esc_url( (get_metabox('facebook')) ) .'" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>';
								if(get_metabox('google')!="")
									$output .= '<a href="' . esc_url( (get_metabox('google')) ) .'" target="_blank" class="gplus"><i class="fa fa-google-plus"></i></a>';
								if(get_metabox('dribbble')!="")
									$output .= '<a href="' . esc_url( (get_metabox('dribbble')) ) .'" target="_blank" class="dribbble"><i class="fa fa-dribbble"></i></a>';
								if(get_metabox('website')!="")
									$output .= '<a href="' . esc_url( (get_metabox('website')) ) .'" target="_blank" class="website"><i class="fa fa-globe"></i></a>';
							$output .= '</div>';
						$output .= '</div>';
					$output .= '</div>';
				$output .= '</div>';

        }
        wp_reset_query();
        $output .= '</div>';

        return $output;
    }
}
add_shortcode('eva_team', 'shortcode_eva_team');



/* ================================================================================== */
/*      Portfolio Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_portfolio')) {
    function shortcode_eva_portfolio($atts, $content) {
        $atts = shortcode_atts(array(
			'layout_size' 			=> 'span12',
			'pagination' 			=> 'simple',
			'height' 				=> '',
			'column' 				=> '4',
			'count' 				=> 12,
			'layout' 				=> 'deafult',
			'wrapper' 				=> '',
			'filter' 				=> 'none',
			'category_ids' 			=> '',
			'order' 				=> 'date_desc',
			'padding_bottom_module' => '30px'
		), $atts);
        global $paged, $eva_options;
        if($atts['layout_size']==='span3'){
            $eva_options['column']='1';
        }elseif($atts['layout_size']==='span9'){
            $eva_options['column']='3';
        }elseif($atts['layout_size']==='span12'){
            switch ($atts['column']){
                case '2':{
                    $eva_options['column']='6';
                    break;
                }
                case '3':{
                    $eva_options['column']='4';
                    break;
                }
                case '4':{
                    $eva_options['column']='3';
                    break;
                }
				case '5':{
                    $eva_options['column']='2';
                    break;
                }
            }
        }

        if( get_query_var( 'paged' ) )
            $my_page = get_query_var( 'paged' );
        else {
            if( get_query_var( 'page' ) )
                $my_page = get_query_var( 'page' );
            else
                $my_page = 1;
            set_query_var( 'paged', $my_page );
        }
        add_action( 'wp_footer', 'portfolio_script');
		if ($atts['wrapper']=='carousel') {
			add_action( 'wp_footer', 'portfolio_owlCarousel_script');
		}
        $eva_options['pagination'] = $atts['pagination'];
        $eva_options['height'] = $atts['height'];
        $query = Array(
            'post_type' => 'portfolio',
            'posts_per_page' => $atts['count'],
        );
        if($eva_options['pagination']=="simple"||$eva_options['pagination']=="infinite"){
            $query['paged'] = $my_page;
        }
        $cats = empty($atts['category_ids']) ? false : explode(",", $atts['category_ids']);
        if ($cats) {
            $query['tax_query'] = Array(Array(
                    'taxonomy' => 'portfolios',
                    'terms' => $cats,
                    'field' => 'id'
                )
            );
        }

		if ($atts['order']!='date_desc') {
            switch ($atts['order']) {
                case "date_asc":
                    $query['orderby'] = 'date';
                    $query['order'] = 'ASC';
                    break;
                case "title_asc":
                    $query['orderby'] = 'title';
                    $query['order'] = 'ASC';
                    break;
                case "title_desc":
                    $query['orderby'] = 'title';
                    $query['order'] = 'DESC';
                    break;
                case "random":
                    $query['orderby'] = 'rand';
                    break;
            }
        }

        $output = '<div class="eva-portfolio '.$atts['layout'].' '.$atts['wrapper'].'" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $filter=(!empty($atts['filter'])&&$atts['filter']=='true')?true:false;
		if($filter){
			$output .= '<div class="eva-filter">';
			$output .= '<ul class="filters option-set post-category" data-option-key="filter">';
			$output .= '<li><a href="#filter" data-option-value="*" class="selected">'.__('All', 'evatheme').'</a></li>';
			if($cats) {
				$filters = $cats;
			} else {
				$filters = get_terms( 'portfolios' );
			}
			foreach ($filters as $category){
				if ($cats) {
					$category = get_term_by('id', $category, 'portfolios');
				}
				$output .= '<li class="hidden"><a href="#filter" data-option-value=".category-' . $category->slug . '" title="' . $category->name . '">' . $category->name . '</a></li>';
			}
			$output .= '</ul></div>';
		}
        query_posts($query);
        ob_start();
        get_template_part("loop","portfolio");
        $output .= ob_get_clean();
        wp_reset_query();
        $output .= '</div>';
        return $output;
    }
}
function portfolio_script() {
    wp_enqueue_script('isotope', THEME_DIR.'/assets/js/jquery.isotope.min.js', false, false, true); ?>
<?php }
function portfolio_owlCarousel_script() {
    wp_enqueue_script('owlCarousel', THEME_DIR.'/assets/js/owl.carousel.min.js', false, false, true); ?>
<?php }
add_shortcode('eva_portfolio', 'shortcode_eva_portfolio');





/* ================================================================================== */
/*      Dropcap Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_dropcap')) {
    function shortcode_eva_dropcap($atts, $content) {
        $style=$atts['style']=='circle'?' circle':'';
        return '<span class="eva-dropcap'.$style.'" style="background-color: '.$atts['color'].';">'.apply_filters('widget_title', $content).'</span>';
    }
}
add_shortcode('eva_dropcap', 'shortcode_eva_dropcap');





/* ================================================================================== */
/*      Button Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_button')) {
    function shortcode_eva_button($atts, $content) {
        $link=!empty($atts['link']) ? to_url($atts['link']) : '#';
        $size=!empty($atts['size']) ? (' btn-'.$atts['size']) : '';
		$thumb=do_shortcode('[eva_fontawesome fa_icon="'.$atts['fa_icon'].'"]');
        $target=!empty($atts['target']) ? ($atts['target']) : '_blank';
        $color=!empty($atts['bg_color']) ? ('style="background:'.$atts['bg_color'].'; color:'.$atts['text_color'].'"') : '';
        $style = '';

		if(!empty($content)){
            $class_notext = '';
		} else {
			$class_notext = ' btn_notext';
		}

		$output = '<a href="' . esc_url( $link ) . '" target="'.$target.'" class="btn'.$style.$size.$class_notext.'" '.$color.'>'.$thumb.apply_filters('widget_title', $content).'</a>';
		return $output;
    }
}
add_shortcode('eva_button', 'shortcode_eva_button');



/* ================================================================================== */
/*      Label Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_label')) {
    function shortcode_eva_label($atts, $content) {
        $color=!empty($atts['color']) ? (' style="background:'.$atts['color'].'"'):'';
        return '<span class="label"'.$color.'>'.apply_filters('widget_title', $content).'</span>';
    }
}
add_shortcode('eva_label', 'shortcode_eva_label');




/* ================================================================================== */
/*      ColumnShortcode Shortcode
/* ================================================================================== */

// ColumnShortcode container
if (!function_exists('shortcode_eva_sh_column')) {
    function shortcode_eva_sh_column($atts, $content) {
        $output = '<div class="eva-column-shortcode row-fluid" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $output .= do_shortcode($content);
        $output .= '</div>';
        return $output;
    }
}
add_shortcode('eva_sh_column', 'shortcode_eva_sh_column');
// ColumnShortcode Item
if (!function_exists('shortcode_eva_sh_column_item')) {
    function shortcode_eva_sh_column_item($atts, $content) {
        extract(shortcode_atts(array(
            'column_size'     => '1 / 3',
	), $atts));
        $output  = '<div class="'.pbTextToFoundation($column_size).'">';
            $output .= apply_filters('widget_text', $content);
        $output .= '</div>';

        return $output;
    }
}
add_shortcode('eva_sh_column_item', 'shortcode_eva_sh_column_item');



/* ================================================================================== */
/*      Partner Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_partner')) {
    function shortcode_eva_partner($atts, $content) {

		$partners_in_line = $atts['items_per_line'];
		if ($partners_in_line < 1) {
			$partners_in_line = 1;
		}
		if($atts['style']=="default"){
			$item_width = (100 / $partners_in_line);
		} else {
			$item_width = 100;
		}

		if ($atts['style']=='carousel') {
			add_action( 'wp_footer', 'partner_carousel_script');
		}

		$output = '<div class="eva-partners-wrap partner-items'.$atts['count'].' '.$atts['style'].' clearfix" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
        $query = Array(
            'post_type' => 'partner',
            'posts_per_page' => $atts['count'],
        );
        $cats = empty($atts['category_ids']) ? false : explode(",", $atts['category_ids']);
        if ($cats) {
            $query['tax_query'] = Array(Array(
                    'taxonomy' => 'partners',
                    'terms' => $cats,
                    'field' => 'id'
                )
            );
        }
        query_posts($query);
        while (have_posts()){ the_post();
			if(get_metabox('link')!=''){
				$output .= '<div class="partner-item" style="width:' . $item_width . '%">';
					$output .= '<a href="' . esc_url( to_url(get_metabox('link')) ) .'" target="_blank">';
						// $output .= post_image_show($imgwidth,$imgheight);
                        $output .= post_image_show( 'full' );
					$output .= '</a>';
				$output .= '</div>';
			} else {
				$output .= '<div class="partner-item" style="width:' . $item_width . '%">';
					// $output .= post_image_show($imgwidth,$imgheight);
                    $output .= post_image_show( 'full' );
				$output .= '</div>';
			}
        }
        wp_reset_query();
        $output .= '</div>';

        return $output;
    }
}
function partner_carousel_script() {
    wp_enqueue_script('owlCarousel', THEME_DIR.'/assets/js/owl.carousel.min.js', false, false, true); ?>
<?php }
add_shortcode('eva_partner', 'shortcode_eva_partner');



/* ================================================================================== */
/*      Heading Shortcode
/* ================================================================================== */

if (!function_exists('shortcode_eva_heading')) {
    function shortcode_eva_heading($atts, $content) {
    	$output = '';
		return $output;
    }
}
add_shortcode('eva_heading', 'shortcode_eva_heading');



/* ================================================================================== */
/*      Image Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_image')) {
    function shortcode_eva_image($atts, $content) {

		$image_thumb = $atts['image_thumb'];
		$image_link = $atts['image_link'];
        $output = '';
		if(!empty($image_link)){
			$output .= '<div class="eva-image-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<a href="' . esc_url( $image_link ) .'">';
					$output .= '<img src="' . esc_url( $image_thumb ) .'" alt="" />';
				$output .= '</a>';
			$output .= '</div>';
		} else {
			$output .= '<div class="eva-image-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<img src="' . esc_url( $image_thumb ) .'" alt="" />';
			$output .= '</div>';
		}
		return $output;
    }
}
add_shortcode('eva_image', 'shortcode_eva_image');



/* ================================================================================== */
/*      Google Map Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_google_map')) {
    function shortcode_eva_google_map($atts, $content) {
		add_action('wp_footer', 'map_script');
		$map_height = $atts['map_height'];
		$map_marker = $atts['map_marker'];
		$map_address = $atts['map_address'];
        $output = '';
		$output .= '<div class="google-map-wrap" style="padding-bottom:'.$atts['padding_bottom_module'].';">';
			$output .= '<div class="google-map"></div>';
			$output .= '<style>.google-map{width: 100%; height: '.$map_height.'px;} .google-map img {max-width:none !important;}</style>';
			$output .= '<script>jQuery(document).ready(function(){jQuery(".google-map").gmap3({marker:{address: "'.$map_address.'",options:{icon:"'.$map_marker.'"}},map:{options:{zoom: 14,}}});});</script>';
		$output .= '</div>';
		return $output;
    }
}
function map_script() {
    wp_enqueue_script('gmap3', THEME_DIR.'/assets/js/goMap.js', false, false, true);
	wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?sensor=false', false, false, true); ?>
<?php }
add_shortcode('eva_google_map', 'shortcode_eva_google_map');



/* ================================================================================== */
/*      Counter Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_counter')) {
    function shortcode_eva_counter($atts, $content) {
        $thumb=do_shortcode('[eva_fontawesome fa_icon="'.$atts['fa_icon'].'"]');
        $output = '';

		if($atts['style'] == 'style1') {
            $output .= '<div class="eva-counter-wrap style1" style="margin-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<div data-perc="'. $atts['counter_number'] .'" class="timer">';
					$output .= '<span class="count">'. $atts['counter_number'] .'</span>';
					$output .= '<p>'. $atts['counter_description'] .'</p>';
				$output .= '</div>';
			$output .= '</div>';
        } elseif ($atts['style'] == 'style2') {
            $output .= '<div class="eva-counter-wrap style2" style="margin-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<div data-perc="'. $atts['counter_number'] .'" class="timer">';
					$output .= '<div class="eva-counter-icon">'.$thumb.'</div>';
					$output .= '<h5 class="count">'. $atts['counter_number'] .'</h5>';
					$output .= '<h4>'. $atts['counter_description'] .'</h4>';
				$output .= '</div>';
			$output .= '</div>';
		} elseif ($atts['style'] == 'style3') {
            $output .= '<div class="eva-counter-wrap style3" style="margin-bottom:'.$atts['padding_bottom_module'].';">';
				$output .= '<div data-perc="'. $atts['counter_number'] .'" class="timer">';
					$output .= '<span class="count">'. $atts['counter_number'] .'</span>';
					$output .= '<h5>'. $atts['counter_description'] .'</h5>';
				$output .= '</div>';
			$output .= '</div>';
		}
        return $output;
    }
}
add_shortcode('eva_counter', 'shortcode_eva_counter');



/* ================================================================================== */
/*      Before After Shortcode
/* ================================================================================== */
if (!function_exists('evatheme_before_after')) {
	function evatheme_before_after($atts, $content) {
		$output = '<div class="'.$atts['evatheme-before-after-container'].'">';
			$output .= '<div class="evatheme-before-after">';
				$output .= '<img src="' . esc_url( $atts['before'] ) . '" title="'.__('Before','evatheme').'" />';
				$output .= '<img src="' . esc_url( $atts['after'] ) . '" title="'.__('After','evatheme') .'" />';
			$output .= '</div>';
		$output .= '</div>';

		return $output;
	}
}
add_shortcode('eva_before_after', 'evatheme_before_after');



/* ================================================================================== */
/*      Image Slider Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_gallery')) {
    function shortcode_eva_gallery($atts, $content) {
        $atts = shortcode_atts( array(
            'size'  				=> 'size-1-1',
            'class' 				=> '',
            'title' 				=> '',
            'gallery_list' 			=> '',
            'type' 					=> 'slide',
            'height' 				=> '',
            'padding' 				=> '0',
			'padding_bottom_module' => '30px',
        ), $atts );
        $output = '';
        if($atts['type'] == 'slide') {
                $output .= '<div class="gallery-block flexslider" style="margin-bottom:'.$atts['padding_bottom_module'].';">';
					$output .= '<ul class="slides clearfix" style="margin:0; list-style:none;">';
						$images = empty($atts['gallery_list']) ? false : explode(",", $atts['gallery_list']);
						if($images){
							foreach ($images as $id) {
								if(!empty($id)){
									$output .= '<li>';
										$output .= '<img src="' . esc_url( wp_get_attachment_url($id) ) . '" alt="' . get_the_title() . '" style="width:100%;">';
									$output .= '</li>';
								}
							}
						}
					$output .= '</ul>';
                $output .= '</div>';
            return $output;
        } elseif($atts['type'] == 'three_cols' || $atts['type'] == 'four_cols' || $atts['type'] == 'five_cols') {
            add_action('wp_footer', 'gallery_script');
            $margin = $padding = '';
			$margin = ' style="margin-left:-'.$atts['padding'].'; margin-right:-'.$atts['padding'].'; margin-top:-'.$atts['padding'].'; margin-bottom:'.$atts['padding_bottom_module'].';"';
			$padding = ' style="padding:'.$atts['padding'].'"';

                $output .= '<div class="gallery-columns clearfix '.$atts['type'].'"'.$margin.'>';
                    $images = empty($atts['gallery_list']) ? false : explode(",", $atts['gallery_list']);
                    if($images){
                        foreach ($images as $id) {
                            if(!empty($id)){
                                $output .= '<div class="gallery-item-wrap" '.$padding.'>';
									$output .= '<div class="gallery-item">';
										$output .= '<img src="' . esc_url( wp_get_attachment_url($id) ) . '" alt="" />';
										$output .= '<a class="gallery-zoom" rel="prettyPhoto['.$atts['gallery_list'].']" href="' . esc_url( wp_get_attachment_url($id) ) .'">';
											$output .= '<i class="fa fa-plus"></i>';
										$output .= '</a>';
									$output .= '</div>';
								$output .= '</div>';
                            }
                        }
                    }
                $output .= '</div>';
            return $output;
        }
    }
}
function gallery_script() {
    wp_enqueue_script('isotope', THEME_DIR.'/assets/js/jquery.isotope.min.js', false, false, true); ?>
<?php }
add_shortcode('eva_gallery', 'shortcode_eva_gallery');



/* ================================================================================== */
/*      Full Width Shortcode
/* ================================================================================== */
if (!function_exists('shortcode_eva_full_width')) {
    function shortcode_eva_full_width($atts, $content) {
        $bg_type="";
		$bgStyle = isset($atts['background_style'])?$atts['background_style']:'scroll';
		switch ($bgStyle) {
			case 'scroll':
				$bgClass = ' bg-scroll';
				break;
			case 'fixed':
				$bgClass = ' bg-fixed';
				break;
			case 'parallax':
				$bg_type = "parallax";
				$bgClass = ' bg-parallax';
				break;
			default:
				$bgClass = ' bg-pattern';
				break;
		}

		$full_widthCustomClass = !empty($atts['full_width_custom_class'])?(' '.$atts['full_width_custom_class']):'';
		$full_widthCustomId = !empty($atts['full_width_custom_id'])?(' id="'.$atts['full_width_custom_id'].'"'):'';
		$Contrast = isset($atts['contrast'])?(' '.$atts['contrast']):'';
		$class = $Contrast.$bgClass.$full_widthCustomClass;
		$padding_top = $padding_bottom = '';
		if(isset($atts['padding_top']) && $atts['padding_top'] != '') {
			$padding_top = $atts['padding_top'];
		}
		if(isset($atts['padding_bottom']) && $atts['padding_bottom'] != '') {
			$padding_bottom = $atts['padding_bottom'];
		}
		if(isset($atts['padding_bottom_module']) && $atts['padding_bottom_module'] != '') {
			$padding_bottom_module = $atts['padding_bottom_module'];
		}
		if(isset($atts['background_color']) && $atts['background_color'] != '') {
			$backgroundColor = $atts['background_color'];
		} else {
            $backgroundColor = '';
        }
		if(isset($atts['image_thumb']) && $atts['image_thumb'] != '') {
			$backgroundImg = $atts['image_thumb'];
		} else {
            $backgroundImg = '';
        }

        $output = '';
		$output .= '<div '.$full_widthCustomId.' class="eva-full-width" data-marginBottom="'.$padding_bottom_module.'" data-paddingTop="'.$padding_top.'" data-paddingBottom="'.$padding_bottom.'" data-class="'.$class.'" data-backgroundColor="'.$backgroundColor.'" data-backgroundImg="'.$backgroundImg.'"></div>';
        return $output;
    }
}
add_shortcode('eva_full_width', 'shortcode_eva_full_width');


/* Full Width end */
if (!function_exists('shortcode_eva_full_width_end')) {
    function shortcode_eva_full_width_end($atts, $content) {
		$output = '<div class="eva-full-width_end"></div>';
        return $output;
    }
}
add_shortcode('eva_full_width_end', 'shortcode_eva_full_width_end');
