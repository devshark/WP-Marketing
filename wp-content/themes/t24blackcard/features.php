<?php /* Template Name: Card features page */
get_header();
?>

</div><!--CONTENT-->	
</div><!--home-->
<
<?php
while ( have_posts() ) : the_post();
	//if( is_single() ){
		get_template_part( 'parallax', 'page' );
	//}
// End the loop.
endwhile;
?>

<?php get_footer();?>
