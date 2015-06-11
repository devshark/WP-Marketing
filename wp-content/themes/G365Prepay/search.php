<?php get_header(); ?>

<div class="row">
    <div class="span9">
		<?php
			if (have_posts ()) {
				get_template_part('loop');
			} else { ?>
					<div id="error404-container">
						<h3 class="error404"><?php _e("Sorry, but nothing matched your search criteria. Please try again with some different keywords.", "evatheme");?></h3>
					</div>
		  <?php  }
		?>
    </div>
    <?php get_template_part("sidebar"); ?>
</div>

<?php get_footer(); ?>