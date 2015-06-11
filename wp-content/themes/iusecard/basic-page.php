<style type="text/css"><?php echo html_entity_decode ( get_field('custom_style'), ENT_QUOTES );?></style>
<?php
the_content();
?>
<script type="text/javascript">
	<?php echo 
	str_replace( '//$/','/\/$/', 
		str_replace( '/^//','/^\//', 
			html_entity_decode( get_field('custom_script'), ENT_QUOTES)
		)
	);
			/*str_replace( '&lt;','<', 
				str_replace( '&gt;','>', 
					str_replace('&#039;', '\'', 
						str_replace('&quot;','"', get_field('custom_script') ) 
					)
				)
			)*/
	?>
</script>
