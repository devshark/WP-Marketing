<?php
/*
Template name: Blog content
*/
?>

<article class="blog" data-color="black">
	<div class="section_title">
		<?php if( is_single()):?>
        <h2><?php the_title();?></h2>
        <?php else: ?>
		<h2><a class="ui-link" target="_blank" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php endif;?>
		<div class="title_border"></div>
    </div>
    <div id="features-wrapper">
		<div class="wow fadeIn">
			<?php $image = get_field('main_image'); ?>
			<?php if($image!=""){ ?>
			<a class="ui-link" href="<?php the_permalink();?>">
				<img src="<?php echo $image['url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>" width="<?php echo $image['width'];?>" height="<?php echo $image['height'];?>" class="field-main-image" />
			</a>
			<?php } //if image is not empty ?>
			<div class="clear clearfix"></div>
			<br/><br/>
			<?php if(is_single()): the_content(); else: the_excerpt(); endif; ?>
			<p>&nbsp;</p>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( is_single() && 
					( comments_open() || get_comments_number() ) ) :
					comments_template();
				endif;?>
			<div class="clear"></div>
		</div>
	</div>
</article>
