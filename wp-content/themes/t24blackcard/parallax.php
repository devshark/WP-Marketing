<?php /* Template Name: Parallax page */
get_header();
?>

</div><!--CONTENT-->	
<?php
while ( have_posts() ) : the_post();
	//if( is_single() ){
		get_template_part( 'parallax', 'page' );
	//}
// End the loop.
endwhile;
?>
</div><!--home-->

<?php get_footer();?>
