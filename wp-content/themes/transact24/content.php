<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div id="node-<?php the_ID(); ?>" class="node<?php if (is_sticky()) { print ' sticky'; } ?><?php if ( get_post_status() != 'publish' ) { print ' node-unpublished'; } ?>">

	<?php 
	if ( is_single() ): 
		the_title( '<h2>', '</h2>' );
	else:
		the_title( sprintf( '<h2><a href="%s" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a></h2>' );
	endif; ?>

  <?php if (get_post_status() == 'publish'): ?>
    <!--<span class="submitted"><?php //print $submitted; ?></span>-->
    <!--<span class="submitted"><?php //print get_the_date()// date("D, m/d/Y",get_the_date()); ?></span>-->
  <?php endif; ?>

  <div class="content clear-block">
	<?php //if(has_post_thumbnail()) the_post_thumbnail();?>
    <?php if ( is_category() || is_archive() ): echo get_the_excerpt(); else: the_content(); endif;?>
  </div>

</div><!--node-->
