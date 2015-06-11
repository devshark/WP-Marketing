
<?php get_header();?>

<div id="page">
    <div class="row">
		
		<div class="span8">
			<section class="content">
				
				<?php get_template_part("loop"); ?>
				
			</section>
		</div>

		<?php get_template_part("sidebar"); ?>
	
	</div>
</div>
	
<?php get_footer(); ?>