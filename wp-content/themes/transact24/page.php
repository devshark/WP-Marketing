<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

//echo __FILE__;
get_header(); 
require(get_template_directory() . '/inc/language_map.php');
?>
<?php if(get_the_ID() == LANG_CN || get_the_ID() == LANG_HK): 
// if the current post is the front page of a specific language
require_once('front-page.php'); // insert the front-page template
else: //if not, do the usual post contents ?>

<div class="container marketing" style="padding-bottom:40px;">
    <div id="wrapper">
    <div id="container" class="clear-block">
		<div id="sidebar-left" class="sidebar">
			<div class="grey-line"></div>
			<div class="red-line"></div>
		 </div><!--sidebar-left-->
		
	<?php if ( have_posts() ) : ?>

	<div id="center">
		<div id="squeeze">
			<div class="right-corner">
				<div class="left-corner">
					<div class="clear-block">
						<?php 
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page');
						endwhile;
						?>
						</div><!--clear-block-->
					<div id="footer"></div>
				</div><!--left-corner-->
			</div><!--right-corner-->
		</div><!--squeeze-->
	</div><!--center -->

	<?php else: get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
	
    </div> <!-- /container -->
  </div>
<!-- /layout -->
</div>
<?php endif;?>
<?php get_footer(); ?>
