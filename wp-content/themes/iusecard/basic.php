<?php
/*Template Name: Basic Page*/
get_header(); 
?>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'basic', 'page' );
endwhile;
?>

<?php get_footer();?>
