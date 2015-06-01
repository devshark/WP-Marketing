<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
</div><!--CONTENT-->
</div><!--HOME-->

<div id="card-fees" class="slide" data-color="black">
	<div class="overlay white"></div>
	<div class="section_title">
          <h2><?php the_title();?></h2>
          <div class="title_border"></div>
    </div>
    <div class="section_intro">
		<p>
			<?php echo get_field('section_intro'); ?>
		</p>
	</div>
    <div id="features-wrapper">
		<div class="wow fadeIn">
			<?php the_content(); ?>
			<div class="clear"></div>
		</div>
	</div>
</div>
