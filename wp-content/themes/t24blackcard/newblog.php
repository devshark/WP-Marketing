<?php
/*
Template Name: New Blog
 */
get_header();
?>
</div><!--CONTENT-->
<section id="body" class="slide" data-color="black">
	<div class="overlay white"></div>
	<section id="content">
		<section id="middle">
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style/blog.css';?>" />
		<?php
		$posts_query_args = array(
			'posts_per_page'   => 10,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish'
		);
		$posts_query = new WP_Query( $posts_query_args );
		?>
		<?php
		if ( $posts_query->have_posts() ) : ?>
			<?php
			// Start the Loop.
			while($posts_query->have_posts()): $posts_query->the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'blog' );

			// End the loop.
			endwhile;
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
			wp_reset_postdata();
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
		</section>
		<?php get_sidebar('right');?>
		<div class="clear clearfix"></div>
	</section>
</section>
</div><!--home-->
<?php get_footer(); ?>
