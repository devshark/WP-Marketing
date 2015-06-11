<?php get_header(); ?>
<?php
the_post();
global $post;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-portfolio');?>>
    <div class="row">
        <div class="<?php if (get_metabox("portfolio_settings_columns") == "port_column") { echo 'span8'; } else { echo 'span12 margbot50'; } ?>">
            <?php
            $ids = get_metabox('gallery_image_ids');
            $video_embed = get_metabox('format_video_embed');
            $video_thumb = get_metabox('format_video_thumb');
            $video_m4v = get_metabox('format_video_m4v');
            if($ids!="false" && $ids!="") {format_gallery(true);}
            elseif(!empty($video_embed)||!empty($video_m4v)) {format_video(true,$video_embed,$video_thumb,$video_m4v);}
            else {format_standard(true);}
            ?>
        </div>
		<div class="<?php if (get_metabox("portfolio_settings_columns") == "port_column") { echo 'span4'; } else { echo 'span12'; } ?> clearfix">
			<div class="<?php if (get_metabox("portfolio_settings_columns") == "port_full_width") { echo 'row'; } ?> clearfix">
				<div class="<?php if (get_metabox("portfolio_settings_columns") == "port_full_width") { echo 'span8 margbot50'; } else { echo 'portfolio_content'; } ?>">
					<?php the_content(); ?>
				</div>

				<div class="<?php if (get_metabox("portfolio_settings_columns") == "port_full_width") { echo 'span4'; } else { echo 'portfolio_info_wrap'; } ?>">
					<div class="project_info margbot20">
						<h6>Project Info</h6>
						<ul>
							<li><b>Client:</b> <?php echo get_metabox("portfolio_client"); ?></li>
							<li><b>Date:</b> <?php the_time('M j, Y'); ?></li>
							<li><b>Project URL:</b>
							<?php
								if (get_metabox("preview_url") != "") {
									$url = get_metabox("preview_url");
									if (!preg_match_all('!https?://[\S]+!', $url, $matches))
									$url = "http://" . get_metabox("preview_url");
							?>
								<a href="<?php echo esc_url($url); ?>" target="_blank"><?php echo esc_url($url); ?></a>
							<?php } ?>
							</li>
						</ul>
					</div>
					<div class="blogpost_share margbot20">
						<h6>Share with friends</h6>
						<a class="share_facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-facebook"></i></a>
						<a class="share_tweet" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&amp;url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-twitter"></i></a>
						<a class="share_gplus" target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-google-plus"></i></a>
						<a class="share_linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>
        </div>
    </div>
</article>

<?php if (!eva_option('port_related')) { ?>
<div class="row">
    <div class="span12 related_portfolios">
		<div class="eva-title-container"><h3 class="eva-title left"><span>Other Works</span></h3></div>
		<?php related_portfolios(); ?>
    </div>
</div>
<?php } ?>

<?php get_footer(); ?>
