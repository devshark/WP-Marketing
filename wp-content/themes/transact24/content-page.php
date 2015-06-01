<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 //echo __FILE__;
?>

<div id="node-<?php the_ID(); ?>" class="node<?php if (is_sticky()) { print ' sticky'; } ?><?php if ( get_post_status() != 'publish' ) { print ' node-unpublished'; } ?>">

	<?php /*
	if ( is_single() ): 
		the_title( '<h2>', '</h2>' );
	else:
		the_title( sprintf( '<h2><a href="%s" title="%s">', esc_url( get_permalink() ), get_the_title() ), '</a></h2>' );
	endif; */?>

  <div class="content clear-block">
	<?php the_content();?>
  </div>
	<div class="clear-block">
		<div class="meta">
		</div>

	</div>

</div><!--node-->
