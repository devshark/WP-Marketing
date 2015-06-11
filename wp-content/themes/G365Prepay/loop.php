<?php
global $eva_options, $eva_isArchive;
$block = isset($eva_options['block'])          ?intval($eva_options['block'])          :1;
$show_pagination = isset($eva_options['show_pagination'])?$eva_options['show_pagination']:false;

if(is_tag() || is_category() || is_archive()){
    $block = 1;
    $eva_options['excerpt_count'] = 50;
}

if(is_search()){
    $nofeatured = true;
    $block = 1;
    $eva_options['excerpt_count'] = 50;
}


if (have_posts ()) {
    echo (4 == $block) ? "<div class='row'>" : "";
        while (have_posts ()) : the_post();
            $format = get_post_format() == "" ? "standard" : get_post_format();
            $featured = true;
            if (!has_post_thumbnail($post->ID) || in_array($format, array('aside', 'chat'))) {
                if(in_array($format, array('aside', 'chat', 'standard')))
                    $featured = false;
            }?>


				<article id="post-<?php the_ID(); ?>" <?php post_class('loop');?>>
					<div class="type-post-wrap">
						<?php
							if($format == 'link') { ?>
								<div class="loop-block">
									<div class="loop-media">
										<?php call_user_func('format_'.$format); ?>
									</div>
								</div><?php
							} else {
								?>
								<?php if(!isset($nofeatured) && $featured) { ?>
									<div class="loop-media">
										<?php call_user_func('format_'.$format); ?>
									</div>
								<?php } ?>
								<div class="loop-block">
									<h2 class="loop-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<div class="meta-container">
										<ul class="loop-meta">
											<?php /* ?><li class="date"><?php the_time('j M Y'); ?></li><?php */ ?>
											<li class="date"><?php the_time( get_option( 'date_format', 'j M Y' ) ); ?></li>
											<li class="author"><?php the_author_posts_link() ?></li>
											<?php echo comment_count(); ?>
											<!-- Add like btn -->
											<!--<li class="like_btn"><?php echo like_btn_get(); ?></li>-->
										</ul>
									</div>
									<div class="loop-content">
										<?php loop_content(); ?>
									</div>
								</div>
								<div class="clear"></div>
						<?php } ?>
					</div>
				</article>



        <?php

        endwhile;
        echo (4 == $block) ? "</div>" : "";
        if($show_pagination){pagination();}
        wp_reset_query();
}
