<?php
if (is_page()) {
    if (get_metabox("header_type") == "slider") {
        ?>
        <section id="slider">
            <?php echo do_shortcode(get_metabox("slider_id")); ?>
        </section>
        <?php
    } elseif (get_metabox("header_type") == "none") {
		?>
		<section id="no-pagetitle"></section>
		<?php
	} elseif (get_metabox("header_type") != "none") {
        get_template_part('page', 'title');
    }
} else {
    get_template_part('page', 'title');
}?>