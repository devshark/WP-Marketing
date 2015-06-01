<script type="text/javascript" >
	function hiddenDiv(){
		$("#cover").hide();
		$("#tip").hide();
	}
</script>
<?php 
  require_once get_template_directory() . '/inc/contact.constants.php';
  /*
  if(isset($_GET['m']) and $_GET['m'] == 's'){
		//unset($_SESSION['redirect_contact_page']);
		echo show_result($i18n_arr['contact']['message_title_send'], $i18n_arr['contact']['message_info_send'], $i18n_arr['contact']['message_close']);
		//echo "<script>window.setTimeout( function(){window.location.href='/';}, 5000);</script>";
		//exit();
  }
  elseif(isset($_GET['m']) and $_GET['m'] == 'f'){
	  echo show_captcha_error($i18n_arr['contact']['message_title_code'], $i18n_arr['contact']['message_info_code'], $i18n_arr['contact']['message_close']);
	  //unset($_SESSION['captcha_error']);
  }
  
  function show_result($message_title_send, $message_info_send, $message_close){
	  //'.$message_title_send.'
      return '
        <div id="cover" style="background-color: #000; opacity: 0.7; position:absolute; left: 0; top: 0; z-index: 9999999999; width: 100%; height: 2640px;"></div>
        <div id="tip" class="modal-content" style="position:fixed; z-index: 99999999999; left: 50%; top: 50%; width: 400px; height: 220px; margin: -110px 0 0 -200px;background-color:#fff;border-radius:15px;padding:20px 30px;opacity:0.9;border:2px solid #46a694;">
            <!--<div class="modal-header">
              <h4 class="modal-title" style="color:dodgerblue;"></h4>
            </div>-->
            <div class="modal-body" style="padding:20px 0;font-weight:bold;">
              <p>'.$message_info_send.'</p>
            </div>
            <div class="modal-footer" style="margin-top:0;text-align:center;">
              <button type="button" class="btn btn-default" onclick="hiddenDiv();removeMessageFlag(\'s\');" >'.$message_close.'</button>
            </div>
        </div>
    ';
  }
  
  function show_captcha_error($message_title_code, $message_info_code, $message_close){
	  //'.$message_title_code.'
      return '
        <div id="cover" style="background-color: #000; opacity: 0.7; position:absolute; left: 0; top: 0; z-index: 9999999999; width: 100%; height: 2640px;"></div>
        <div id="tip" class="modal-content" style="position:fixed; z-index: 99999999999; left: 50%; top: 50%; width: 400px; height: 220px; margin: -110px 0 0 -200px; background-color:#fff;border-radius:15px;padding:20px 30px;opacity:0.9;border:2px solid darkred;">
            <!--<div class="modal-header">
              <h4 class="modal-title" style="color:red;"></h4>
            </div>-->
            <div class="modal-body" style="padding:20px 0;font-weight:bold;">
              <p>'.$message_info_code.'</p>
            </div>
            <div class="modal-footer" style="margin-top:0;text-align:center;">
              <button type="button" class="btn btn-default" onclick="hiddenDiv();removeMessageFlag(\'f\');" >'.$message_close.'</button>
            </div>
        </div>
    ';
  }
*/

?>

<div id="cta">
    <div class="container">
    <div class="row" style="padding-bottom: 13px;">
    <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;"><h2><?php echo $i18n_arr['contact']['contact_h2']; ?></h2></div>
    <div class="col-lg-2" style="padding-left: 0px;"><a class="btn btn-large btn-primary" id="cta-btn" style="margin-top: 30px; width: 100%;"><span class="glyphicon glyphicon-envelope">&nbsp;</span><?php echo $i18n_arr['header']['menu_contact']; ?></a></div>
    </div>
    </div>
    <div id="cta-expand">
    <div class="container">
    <div class="row" style="padding-top: 13px;">
    </div>
    </div>
<form name="contactform" id="contactform">
    <div class="container cta-form default-skin">
	<div class="row">
		<div class="col-lg-12" style="padding: 0 7px 0 0;">
			<p class="error" style="display:none;" id="success"><?php echo $i18n_arr['contact']['message_info_send'];?></p>
			<p class="error" style="display:none;" id="error"><?php echo $i18n_arr['contact']['message_info_code'];?></p>
			<input type="hidden" name="template_uri" value="<?php echo get_template_directory();?>" />
		</div>
	</div>
    <div class="row">
    <div class="col-lg-4" style="padding: 0 7px 0 0;">
      <div class="form-group row">      
          <div class="col-lg-12">
          <label for="name" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_name']; ?></label>
              <input type="text" class="form-control" id="name" name="contactname" value="<?php echo isset($_GET['contactname']) ? $_GET['contactname'] : '';?>" />
          </div>
      </div>

      <div class="form-group row">         
          <div class="col-lg-12">
          <label for="website" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_website']; ?> <span style="font-weight: normal; color: #b0b0b0;"><?php echo $i18n_arr['contact']['contact_optional']; ?></span></label>
              <input type="text" class="form-control" id="website" name="website" value="<?php echo isset($_GET['website']) ? $_GET['website'] : '';?>" />
          </div>
      </div>
    </div>

    <div class="col-lg-4" style="padding: 0 7px 0 0;">
		<div class="form-group row">
          <div class="col-lg-12">
              <label for="email" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_email']; ?></label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : '';?>" />
          </div>		
		</div>

        <div class="form-group row">          
              <div class="col-lg-12">
			      <label for="company" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_company']; ?> <span style="font-weight: normal; color: #b0b0b0;"><?php echo $i18n_arr['contact']['contact_optional']; ?></span></label>
				  <input type="text" class="form-control" id="company" name="company" value="<?php echo isset($_GET['company']) ? $_GET['company'] : '';?>" />
			  </div>
        </div>
   </div>	

   <div class="col-lg-4" style="padding: 0 0 0 7px;">
      <div class="form-group row">         
          <div class="col-lg-12">
              <label for="phone" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_phone']; ?></label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?php echo isset($_GET['phone']) ? $_GET['phone'] : '';?>" />
          </div>
      </div>

    <div class="form-group row">  
          <div class="col-lg-12">
          <label for="department" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;"><?php echo $i18n_arr['contact']['contact_department']; ?></label>
              <select name="department" id="department" class="form-control">
					<option value=''>--Please select a department--</option>
                <?php 
                    foreach ( $option_and_email_map as $option => $email) {
					  $default = (isset($_GET['department']) ? $_GET['department'] : '') == $option ? 'selected' : '';
                      echo "<option value='{$option}' {$default}>{$option}</option>";
                    }
                ?>
        		</select>			
          </div>
      </div>


</div>
</div>


<div class="container">
    <div class="row">
    <div class="col-lg-12" style="padding: 0 0 0 0; margin-bottom: 20px;">
    <div class="form-group row" style="max-width:100%;">
          
          <label for="message" class="col-lg-2 control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;">
		  <?php echo $i18n_arr['contact']['contact_message']; ?> <span style="font-weight: normal; color: #b0b0b0;">
		  <?php echo $i18n_arr['contact']['contact_optional']; ?> </span></label>
              <textarea cols="40" rows="5" id="message" name="message"  class="form-control" style="max-width:100%;"><?php echo isset($_GET['message']) ? $_GET['message'] : '';?></textarea>
     </div>
      </div>
</div>
</div>
<div class="row">
	<div class="col-lg-4" style="padding: 0 7px 0 0;">
		<img id="captcha_image" src="<?php echo get_template_directory_uri();?>/modules/securimage/securimage_show.php" alt="CAPTCHA Image" />&nbsp;
		<a id="a-refresh" href="#" onclick="document.getElementById('captcha_image').src = '<?php echo get_template_directory_uri();?>/modules/securimage/securimage_show.php?' + Math.random(); return false">
			<img src='<?php echo get_template_directory_uri();?>/modules/securimage/images/refresh1.png' alt='Reload image' />
		</a>
	</div>
	<div class="col-lg-4" style="padding: 0 7px 0 0;">
		<label for="captcha_code" class="control-label" style="line-height: 34px; padding: 0; margin-bottom: 0;">
		<?php echo $i18n_arr['contact']['contact_code']; ?> </label>
		<input type="text" name="captcha_code" size="10" class="form-control" id="captcha_code" maxlength="6" autocomplete="off" />
	</div>
	<div class="col-lg-4" style="padding: 0 0 0 7px;">
		<input type="submit" value="<?php echo $i18n_arr['contact']['contact_btn_send']; ?>" class="btn btn-large btn-primary" id="email-send" style="margin-top:30px; width:100px; float:right;">
		<input type="hidden" value="send_mail" id="send" name="send">
		<input type="hidden" value="<?php echo $_CODE ?>" id="lang" name="lang">
	</div>
</div>
<div class="row">
&nbsp;</div>

</form>

        </div>
      </div>
    </div>
  </div>
