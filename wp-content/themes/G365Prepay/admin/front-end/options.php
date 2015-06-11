<div class="wrap" id="of_container">

	<div id="of-popup-save" class="of-save-popup">
		<div class="of-save-save"><?php _e('Options Updated', 'evatheme'); ?></div>
	</div>
	
	<div id="of-popup-reset" class="of-save-popup">
		<div class="of-save-reset"><?php _e('Options Reset', 'evatheme'); ?></div>
	</div>
	
	<div id="of-popup-fail" class="of-save-popup">
		<div class="of-save-fail"><?php _e('Error!', 'evatheme'); ?></div>
	</div>

	<span style="display: none;" id="hooks"><?php echo esc_html( json_encode(of_get_header_classes_array()) ); ?></span>
	<input type="hidden" id="reset" value="<?php if(isset($_REQUEST['reset'])) echo esc_attr( $_REQUEST['reset'] ); ?>" />
	<input type="hidden" id="security" name="security" value="<?php echo esc_attr( wp_create_nonce('of_ajax_nonce') ); ?>" />

	<form id="of_form" method="post" action="<?php echo esc_attr( $_SERVER['REQUEST_URI'] ) ?>" enctype="multipart/form-data" >

		<div id="header">

			<div class="logo">
				<h2><?php echo esc_html( THEMENAME ); ?></h2>
				<span><?php echo esc_html( 'v' . THEMEVERSION ); ?></span>
			</div>
			
			<div class="docs">
				<a href="http://perfecti.evatheme.com/Documentation/" target="_blank"><?php _e('Online Documentation', 'evatheme'); ?></a><span class="link_sep">|</span><a href="http://www.evatheme.com/forums/" target="_blank"><?php _e('Support Forum', 'evatheme'); ?></a>
			</div>
			
			<div id="js-warning"><?php _e('Warning- This options panel will not work properly without javascript!', 'evatheme'); ?></div>
			<div class="icon-option"></div>
			<div class="clear"></div>

    	</div>

		<div id="info_bar">

			<a>
				<div id="expand_options" class="expand">Expand</div>
			</a>

			<img style="display:none" src="<?php echo esc_attr( ADMIN_DIR ); ?>assets/images/loading-bottom.gif" class="ajax-loading-img ajax-loading-img-bottom" alt="Working..." />

			<button id="of_save" type="button" class="button-primary">
				<?php _ex('Save All Changes','evatheme');?>
			</button>

		</div><!--.info_bar-->

		<div id="main">

			<div id="of-nav">
				<ul>
				  <?php echo htmlspecialchars_decode( esc_html( $options_machine->Menu ) ); ?>
				</ul>
			</div>

			<div id="content">
		  		<?php echo htmlspecialchars_decode( esc_html( $options_machine->Inputs ) ); /* Settings */ ?>
		  	</div>

			<div class="clear"></div>

		</div>

		<div class="save_bar">

			<img style="display:none" src="<?php echo esc_attr( ADMIN_DIR ); ?>assets/images/loading-bottom.gif" class="ajax-loading-img ajax-loading-img-bottom" alt="Working..." />
			<button id ="of_save" type="button" class="button-primary"><?php _ex('Save All Changes','evatheme');?></button>
			<button id ="of_reset" type="button" class="button submit-button reset-button" ><?php _ex('Options Reset','evatheme');?></button>
			<img style="display:none" src="<?php echo esc_attr( ADMIN_DIR ); ?>assets/images/loading-bottom.gif" class="ajax-reset-loading-img ajax-loading-img-bottom" alt="Working..." />

		</div><!--.save_bar-->

	</form>

	<div style="clear:both;"></div>

</div><!--wrap-->
