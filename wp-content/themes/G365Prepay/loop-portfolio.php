<?php
global $eva_options;
if (have_posts ()) {
    echo '<div class="row">';
		echo '<div class="isotope-container">';
            while (have_posts ()) { the_post();
                $args = array('orderby' => 'none');
                $class = isset($eva_options['column'])?"span".$eva_options['column']:'span3';
                $height = !empty($eva_options['height']) ? $eva_options['height'] : eva_option('port_height');
                $width = 270;
                if($class=='span6'){
                    $width = 570;
                }elseif($class=='span4'){
                    $width = 370;  
                }                
                $cats = wp_get_post_terms($post->ID, 'portfolios', $args);
                foreach ($cats as $catalog) {
                    $class .= " category-" . $catalog->slug;
                } ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>><?php
                    $ids = get_metabox('gallery_image_ids');
                    $video_embed = get_metabox('format_video_embed');            
                    $video_thumb = get_metabox('format_video_thumb');            
                    $video_m4v = get_metabox('format_video_m4v');
                    if (has_post_thumbnail($post->ID)) {
                        portfolio_image($height,$width,true);
                    } elseif($ids!="false" && $ids!="") {
                        format_gallery(true,$height,$width,true);
                    } elseif(!empty($video_embed)||!empty($video_m4v)) {
                        format_video(true,$video_embed,$video_thumb,$video_m4v,$height);
                    } ?>
                </article><?php
            }
        echo '</div>';
    echo '</div>';
    if($eva_options['pagination']=="simple"){
        pagination();
    }elseif($eva_options['pagination']=="infinite"){
        infinite();
    }
    wp_reset_query();
}