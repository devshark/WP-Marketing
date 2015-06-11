<?php
get_header(); ?>

	<div id="error404-container">
		<h2 class="error404"><?php echo esc_html( eva_option('page404_title') ); ?></h2>

		<div class="eva-404-error"><?php echo esc_html( eva_option('page404_subtitle') ); ?></div>
		<?php get_search_form(); ?>
		<a class="btn btn-medium" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html( eva_option('page404_btn_text') ); ?></a>
	</div>

<?php get_footer();
