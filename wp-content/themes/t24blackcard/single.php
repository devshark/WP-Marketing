<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

</div><!--CONTENT-->
<section id="body" class="slide" data-color="black">
	<div class="overlay white"></div>
	<section id="content">
		<section id="middle">
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style/blog.css';?>" />
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'blog' );


				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

			// End the loop.
			endwhile;
		?>
		</section>
		<?php get_sidebar('right');?>
		<div class="clear clearfix"></div>
	</section>
</section>
</div><!--home-->
<?php get_footer(); ?>
