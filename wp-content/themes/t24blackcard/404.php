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
			<article>
				<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style/blog.css';?>" />
				<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h2>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

				<?php get_search_form(); ?>
			</article>
		</section>
		<?php get_sidebar('right');?>
		<div class="clear clearfix"></div>
	</section>
</section>
</div><!--home-->
<?php get_footer(); ?>
