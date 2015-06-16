<?php
/**
 * Empty
 */
add_filter('wp_title','iusecard_wp_title',10,2);

function iusecard_wp_title($title){
    if(empty($title)){
        $title = get_bloginfo('name');
    }
    return $title . ' | ' . get_bloginfo('description');
}
