<?php
    $align = "right";
    if(is_singular() && get_metabox("layout")=="left")
        $align = "left";
?>
<div class="span3 <?php echo esc_attr( $align ); ?>-sidebar">
    <section id="sidebar">
		<?php
		if(!dynamic_sidebar(get_metabox("custom_sidebar")!="" ? get_metabox("custom_sidebar") : 'blog-sidebar')) {
			print 'There is no widget. You should add your widgets into <strong>';
			print 'Blog';
			print '</strong> sidebar area on <strong>Appearance => Widgets</strong> of your dashboard. <br/><br/>';
		?>

		<?php } ?>
    </section>
</div>
