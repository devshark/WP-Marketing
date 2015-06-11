<?php get_header(); ?>


<?php

the_post();
$col = "span9";
if(get_metabox("layout") == "full") {
    $col = "span12";
}
?>

<div class="row">

    <div class="<?php echo esc_attr( $col ); echo " content-" . esc_attr( get_metabox("layout") ); ?>">

        <?php
        $feature = false; $class = "single";
        if(get_metabox("feature_show")=="true") {
            $feature = true;
        } else if(get_metabox("feature_show")!="false") {
            if(eva_option("feature_show")) {
                $feature = true;
            }
        }

        $format_options = get_post_meta($post->ID, 'evatheme_post_format', true);
        $format = get_post_format() == "" ? "standard" : get_post_format();

        ?>
        <article <?php post_class($class);?>>
            <h2 class="single-title"><?php the_title();?></h2>
			<div class="meta-container">
				<ul class="loop-meta">
					<?php /* ?><li class="date"><?php the_time('j M Y'); ?></li><?php */ ?>
                    <li class="date"><?php the_time( get_option( 'date_format', 'j M Y' ) ); ?></li>
					<li class="author"><?php the_author_posts_link() ?></li>
					<?php echo comment_count(); ?>
				</ul>
			</div>
			<?php
                if($feature) {
                    echo '<div class="loop-media">';
                            call_user_func('format_'.$format, $format_options);
                    echo '</div>';
            } ?>
            <div class="content-block">
                <?php
					the_content();
					wp_link_pages(array('before' => '<div class="page-link margbot50"><span>' . __('Pages', 'theme_localization') . ': </span>', 'after' => '</div>'));
				?>
                <div class="clear"></div>
                <?php if(get_the_tag_list()) { ?>
				<div class="meta-tag-list margbot40 clearfix">
					<?php echo get_the_tag_list(); ?>
				</div>
                <?php } ?>
            </div>
			<div class="blogpost_share margbot40">
				Share with friends&nbsp;&nbsp;&nbsp;
				<a class="share_facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-facebook"></i></a>
				<a class="share_tweet" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&amp;url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-twitter"></i></a>
				<a class="share_gplus" target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-google-plus"></i></a>
				<a class="share_linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-linkedin"></i></a>
			</div>
            <?php about_author(); ?>
            <?php comments_template('', true); ?>
			<div class="single-post-pagination clearfix">
				<div class="alignleft"><?php previous_post_link('%link', '&#8592;', FALSE); ?></div>
				<div class="alignright"><?php next_post_link('%link', '&#8594;', FALSE); ?></div>
            </div>
        </article>
    </div>
    <?php
    if (get_metabox("layout") != "full") {
        get_sidebar();
    }
    ?>
</div>

<?php get_footer(); ?>
