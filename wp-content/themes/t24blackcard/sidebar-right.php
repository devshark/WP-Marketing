<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => 'blocks',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false 

);
$categories = get_categories($args);
?>
<aside id="sidebar-right" class="sidebar">
	<div class="block block-theme"></div>
	<div id="block-menu-menu-blog-menu" class="clear-block block block-menu">
		<?php if (count($categories) > 0):?>
		<h2>Categories</h2>
		<div class="content">
			<ul class="menu">
				<?php foreach($categories as $category):?>
				<li class="leaf"><a href="<?php echo get_category_link($category->term_id);?>" title=""><?php echo $category->name;?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
		<?php endif;?>
	</div>
	<!--
	<div id="block-views-blog_archive-block" class="clear-block block block-views">
		<h2>Archive</h2>
		<div class="content">
			<div class="view view-blog-archive view-id-blog_archive view-display-id-block view-dom-id-2">
				<div class="view-content">
					<div class="item-list">
						<ul class="views-summary">
							<li><a href="/blog/archive/201502">February 2015</a></li>
						</ul>
					</div>
				</div>
				<div class="view-footer">
					<div class="full-archive-link">
						<a href="/blog/archive">full archive &gt;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	<hr/>
	<div id="block-quicktabs-blog_tabs" class="clear-block block block-quicktabs">
	<div class="content">
		<div id="quicktabs-blog_tabs" class="quicktabs_wrapper quicktabs-style-nostyle quicktabs-processed">
			<ul class="quicktabs_tabs quicktabs-style-nostyle">
				<li class="qtab-0 active first">
					<a href="/blog?quicktabs_blog_tabs=0#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-0" class="qt_tab active">Most recent</a>
				</li>
				<li class="qtab-1">
					<a href="/blog?quicktabs_blog_tabs=1#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-1" class="qt_tab active">Most read</a>
				</li>
				<li class="qtab-2 last">
					<a href="/blog?quicktabs_blog_tabs=2#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-2" class="qt_tab active">Most commented</a>
				</li>
			</ul>
			<?php
			$posts_query_args = array(
				'posts_per_page'   => 10,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish'
			);
			$posts_query = get_posts( $posts_query_args );
			?>
			<?php
			if ( count($posts_query) > 0 ) : ?>
			<div id="quicktabs_container_blog_tabs" class="quicktabs_main quicktabs-style-nostyle">
				<div id="quicktabs_tabpage_blog_tabs_0" class="quicktabs_tabpage">
					<div id="block-views-blog-block_1" class="clear-block block block-views">
						<div class="content">
							<div class="view view-blog view-id-blog view-display-id-block_1 view-dom-id-3">
								<div class="view-content">
									<div class="item-list">
										<ul>
										<?php
										// Start the Loop.
										foreach($posts_query as $post):
										//while($posts_query->have_posts()): ?>
											<li class="views-row views-row-1 views-row-odd views-row-first">  
												<div class="views-field-title">
													<span class="field-content">
														<a href="<?php echo get_permalink($post->ID);?>">
															<h3><?php echo $post->post_title;?></h2>
														</a>
													</span>
												</div>
												<div class="views-field-created">
													<span class="field-content"><?php $time = strtotime($post->post_date); echo date('l, j F, Y',$time);?></span>
												</div>
											</li>
										<?php
										// End the loop.
										endforeach;
										//endwhile;?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif;wp_reset_postdata();?>
		</div>
	</div>
	<hr/>
	<div id="block-t24_blocks-1" class="clear-block block block-t24_blocks">
		<?php $block1 = get_post(54); 
		$block_image1 = get_field('main_image', $block1->ID);
		 ?>
		<div class="content">
			<a href="/">
				<img src="<?php echo $block_image1['url'];?>" title="<?php echo $block_image1['title'];?>" alt="<?php echo $block_image1['alt'];?>" width="<?php echo $block_image1['width'];?>" height="<?php echo $block_image1['height'];?>" class="field-main-image" />
			</a><br/>
			<h2 class="title"><?php echo $block1->post_title;?></h2>
			<?php echo $block1->post_content;?>
		</div>
	</div>
	<hr/>
	<div id="block-quicktabs-blog_tabs" class="clear-block block block-quicktabs">
	<div class="content">
		<div id="quicktabs-blog_tabs" class="quicktabs_wrapper quicktabs-style-nostyle quicktabs-processed">
			<ul class="quicktabs_tabs quicktabs-style-nostyle">
				<li class="qtab-0 active first">
					<a href="/blog?quicktabs_blog_tabs=0#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-0" class="qt_tab active">Most recent</a>
				</li>
				<li class="qtab-1">
					<a href="/blog?quicktabs_blog_tabs=1#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-1" class="qt_tab active">Most read</a>
				</li>
				<li class="qtab-2 last">
					<a href="/blog?quicktabs_blog_tabs=2#quicktabs-blog_tabs" id="quicktabs-tab-blog_tabs-2" class="qt_tab active">Most commented</a>
				</li>
			</ul>
		</div>
	</div>
	<hr/>
	<div id="block-t24_blocks-0" class="clear-block block block-t24_blocks">
		<h2>Subscribe</h2>
		<div class="content">
			<div class="t24-rss">
				<div class="title">
					<a href="/feed">T24 Black Blog</a>
				</div>
				<div class="description">Subscribe to the content of this blog, in the rss feed reader of your choice. </div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<br/><br/>
</aside><!--sidebar-right-->
