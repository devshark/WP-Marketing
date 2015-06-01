<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<script type="text/rocketscript">
	function hiddenDiv(){
		$("#cover").hide();
		$("#tip").hide();
	}
</script>
<?php
require(get_template_directory() . '/inc/language_map.php');
require_once get_template_directory() . '/inc/contact_us.php';
?>

<div class="container marketing" style="padding-bottom:40px;">
    <div id="wrapper">
    <div id="container" class="clear-block">
		<div id="sidebar-left" class="sidebar">
			<div class="grey-line"></div>
			<div class="red-line"></div>
		 </div><!--sidebar-left-->
		
	<?php if ( strpos(get_permalink(),"/blog") !== false): ?>
	
	<div class="blog-info" style="float: left;">
	<section class="content blog">
	<div class="imgHover">
	 
	<?php endif; ?>  

	<div id="center">
		<div id="squeeze">
			<div class="right-corner">
				<div class="left-corner">
					<div class="clear-block">
						<?php 
						if ( have_posts() ) {
							while ( have_posts() ) : the_post();
								get_template_part( 'content', get_post_format());
							endwhile;			
							
							/* ------------------------------------------------------------------*/
							/* PAGINATION */
							/* ------------------------------------------------------------------*/
							 
							//paste this where the pagination must appear
							 
							global $wp_query;
							$total = $wp_query->max_num_pages;
							// only bother with the rest if we have more than 1 page!
							if ( $total > 1 )  {
								 // get the current page
								 if ( !$current_page = get_query_var('paged') )
									  $current_page = 1;
								 // structure of "format" depends on whether we're using pretty permalinks
								 if( get_option('permalink_structure') ) {
									 $format = '&paged=%#%';
								 } else {
									 $format = 'page/%#%/';
								 }
								 echo paginate_links(array(
									  'base'     => get_pagenum_link(1) . '%_%',
									  'format'   => $format,
									  'current'  => $current_page,
									  'total'    => $total,
									  'mid_size' => 4,
									  'type'     => 'list'
								 ));
							}
						}
						else{ get_template_part( 'content', 'none' ); }
						?>
						<div class="clearfix"></div>
						<div id="footer"></div>
					</div><!--clear-block-->
				</div><!--left-corner-->
			</div><!--right-corner-->
		</div><!--squeeze-->
	</div><!--center -->

		<?php if (strpos(get_permalink(),"/blog") !== false): ?>
					</div><!--imgHover-->
				</section><!--content blog-->
			</div><!--blog-info-->
		<?php endif; ?> 
			
	<?php get_sidebar('right'); ?>

    </div> <!-- /container -->
  </div>
<!-- /layout -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
