<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<script type="text/rocketscript">
	function hiddenDiv(){
		$("#cover").hide();
		$("#tip").hide();
	}
</script>
<?php
require(get_template_directory() . '/inc/language_map.php');
require_once get_template_directory() . '/inc/contact_us.php';
?>

<div class="container marketing">
    <div id="wrapper">
    <div id="container" class="clear-block">
		<div id="sidebar-left" class="sidebar">
			<div class="grey-line"></div>
			<div class="red-line"></div>
		 </div>
		
	<?php if ( strpos(get_permalink(),"/blog") !== false): ?>
	
	<div class="blog-info" style="float: left;">
	<section class="content blog">
	<div class="imgHover">
	 
	<?php endif; ?>  

	<?php if ( have_posts() ) : ?>

	<div id="center">
		<div id="squeeze">
			<div class="right-corner">
				<div class="left-corner">
					<div class="clear-block">
						<?php 
						while ( have_posts() ) : the_post();
							get_template_part( 'content', get_post_format());
						endwhile;			
						
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous', 'twentyfifteen' ),
							'next_text'          => __( 'Next', 'twentyfifteen' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
						) );
						?>
						<div id="footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->


	<?php if (strpos(get_permalink(),"/blog") !== false): ?>
	</div>
	</section>
	</div>
	<?php endif; ?> 
	<?php else: get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

	<?php get_sidebar('right'); ?>

    </div> <!-- /container -->
  </div>
<!-- /layout -->
</div>
<?php get_footer(); ?>
