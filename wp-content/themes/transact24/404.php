<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

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
		
	<div id="center">
		<div id="squeeze">
			<div class="right-corner">
				<div class="left-corner">
					<div class="clear-block">
						<div id="node">
							<section class="error-404 not-found">
								<header class="page-header">
									<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
								</header><!-- .page-header -->

								<div class="page-content">
									<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

									<?php get_search_form(); ?>
								</div><!-- .page-content -->
							</section><!-- .error-404 -->

						</div><!--node-->
					</div><!--clear-block-->
					<div id="footer"></div>
				</div><!--left-corner-->
			</div><!--right-corner-->
		</div><!--squeeze-->
	</div><!--center -->

    </div> <!-- /container -->
  </div>
<!-- /layout -->
</div>
<?php get_footer(); ?>
