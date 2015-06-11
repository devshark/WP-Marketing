<?php
if(!is_singular('post') || eva_option('blog_title')!="") {
    if(is_singular('post') || is_home()) {
        if(eva_option('blog_title')!="") {
            $title = apply_filters('widget_title', eva_option('blog_title'));
            $subtitle = eva_option('blog_subtitle')!="" ? (apply_filters('widget_title', eva_option("blog_subtitle"))) : '';
        }
    } else {
        $subtitle = "";
        if(is_page() || is_singular('portfolio')) {
            $title = get_featuredtext();
            if (get_metabox("subtitle") != "") {
                $subtitle = apply_filters('widget_text', get_metabox("subtitle"));
            }
            if(get_metabox("bg_image") != "") {
                $bgimage = get_metabox("bg_image");
            }
        } else {
            $title = get_featuredtext();
        }
    }
}


$breadcrumb = false;
if(get_metabox("breadcrumps")=="true") {
    $breadcrumb = true;
} else if(get_metabox("breadcrumps")!="false") {
    if(eva_option("breadcrumps")) {
        $breadcrumb = true;
    }
}


$background = isset($bgimage) ? $bgimage : eva_option('title_bg_image');

if(isset($title)) { ?>
    <!-- Start Feature -->
    <section id="page-title"<?php echo !empty($background) ? (' style="background-image: url(' . esc_url($background) . ')"') : '';?>>
        <!-- Start Container -->
        <div class="container">
        	<?php echo '<h2>' . esc_html( strip_tags( $title ) ) . '</h2><h3>' . esc_html( $subtitle ) . '</h3>'; ?>
			<?php if($breadcrumb){ breadcrumbs(); } ?>
        </div>
        <!-- End Container -->
    </section>
    <!-- End Feature -->
<?php } ?>
