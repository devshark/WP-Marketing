<?php
/*
 * sidebar-right.php
 * author: anthony.lim
 */
require(get_template_directory() . '/inc/language_map.php');
?>
<div id="sidebar-right" class="sidebar">
	<div class="grey-line"></div>
	<div class="red-line"></div>
	<div id="block-block-1" class="clear-block block block-block">
		<div class="content">
			<h2><?php echo $block_about_t24->getPost($_LANG)->post_title;?></h2>
			<?php echo $block_about_t24->getPost($_LANG)->post_content;?>
		</div>
	</div><!--block-block-1-->
	<div class="grey-line"></div>
	<div class="red-line"></div>
	<div id="block-blog-0" class="clear-block block block-blog">
		<h2><?php echo $i18n_arr['blocks']['title_recent_posts'];?></h2>
		<div class="content">
			<div class="item-list">
				<?php
				$category_query_args = array(
					'posts_per_page'   => 10,
					'offset'           => 0,
					//'category'		   => '',
					'category_name'    => $_CODE,
					'orderby'          => 'date',
					'order'            => 'DESC',
					//'include'          => '',
					//'exclude'          => '',
					//'meta_key'         => '',
					//'meta_value'       => '',
					'post_type'        => 'post',
					//'post_mime_type'   => '',
					//'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
				$category_query = get_posts( $category_query_args );
				?>
				<?php //if($category_query->have_posts()):?>
				<ul>
					<?php foreach($category_query as $post):?>
					<li>
						<a href="<?php the_permalink();?>"><?php the_title();?>hey</a>
					</li>
					<?php endforeach;?>
				</ul>
				<?php //endif;?>
			</div><!--item-list-->
			<div class="more-link"><a href="/blog/<?php echo $_CODE;?>" title="<?php echo $i18n_arr['blocks']['title_read_more_posts'];?>"><?php echo $i18n_arr['blocks']['text_read_more_posts'];?></a></div>
		</div><!--content-->
	</div><!--block-blog-0-->
	<div class="grey-line"></div>
	<div class="red-line"></div>
	<div id="block-block-2" class="clear-block block block-block">
		<div class="content">
			<h2 style="text-align: left;"></h2>
		 
			<div id="testimonialCarousel" class="carousel slide">
				<div class="carousel-inner"></div>
			</div><!--testimonialCarousel-->
		</div><!--content-->
	</div><!--block-block-2-->
</div><!--sidebar-->
