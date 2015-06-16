<?php require get_template_directory() . '/language_post_reference.php'; ?>

<?php if ( (is_front_page() && is_home()) || in_array($post->ID, $language_post_en) ): //list of postID to show this section?>
			<!--
			=================================
			FOOTER SECTION
			=================================
			-->
			<footer id="contact" class="footer-section section">
				<div class="container">                
                    <h2 class="section-heading wow fadeIn text-center animated" data-wow-duration="1s">Contact Us</h2>                    
                    <p class="wow fadeIn text-center animated" data-wow-duration="1s">To find out more about the card, how to get one or for corporate enquiries, please use the form below to contact us</p>                    
                    <form id="contact-form">                        
                        <div class="container clearfix">                        
							<div class="row">                        
								<div class="col-md-12"><div id="result"></div></div>                        
							</div><!--row-->                    
							<div class="row">                        
								<div class="col-md-6 form-left">
									<p>	
										<input type="text" name="first_name" id="first_name" placeholder="First Name">
									</p>
									<p>
										<input type="text" name="last_name" id="last_name" placeholder="Last Name">
									</p>                            
								</div>                            
								<div class="col-md-6 form-right">                             
									<p>
										<input type="text" name="email" id="email" placeholder="E-mail">
									</p>
									<p>
										<input type="tel" name="phone" id="phone" placeholder="Phone">
									</p>
								</div>
							</div><!--row-->
                            
							<div class="row">

								<p>
									<textarea name="message" id="message" cols="45" rows="10" placeholder="Message"></textarea>
								</p>

								<p>
									<a onclick="formSubmit()" class="form-submit-btn btn btn-app-download btn-primary">
										<strong>Send message</strong></a>
								</p>
								
								<div class="clear"></div>
							</div><!--row-->
						</div><!--container clearfix-->
					</form>
                        
					<!-- COPYRIGHT -->
					<div class="copyright"><div class="copyright-left">Copyright &copy; Transact24 Limited, All rights reserved</div> <div class="copyright-right"><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>" target="_blank">Terms & Conditions</a> | <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" target="_blank">Privacy Policy</a></div></div>
				</div><!--container-->
			</footer>

<?php elseif ( in_array($post->ID, $language_post_zh_cn) ) : //list of postID to show this section ?>

			<!--
			=================================
			FOOTER SECTION
			=================================
			-->
			<footer id="contact" class="footer-section section">
				<div class="container">                    
                    <h2 class="section-heading wow fadeIn text-center animated" data-wow-duration="1s">联系我们</h2>                    
                    <p class="wow fadeIn text-center animated" data-wow-duration="1s" style="visibility: visible; -webkit-animation: fadeIn 1s;">要了解更多有关预付卡的信息，企业申请程序的查询，请使用以下表格与我们联系</p>                    
                    <form id="contact-form">                        
                        <div class="container clearfix">                        
							<div class="row">                        
								<div class="col-md-12"><div id="result"></div></div>                        
							</div><!--row-->                      
							<div class="row">                        
								<div class="col-md-6 form-left">
									<p>	
									<input type="text" name="first_name" id="first_name" placeholder="名">
									</p>
									<p>
										<input type="text" name="last_name" id="last_name" placeholder="姓">
									</p>                            
								</div>                            
								<div class="col-md-6  form-right">                             
									<p>
										<input type="text" name="email" id="email" placeholder="电邮">
									</p>
									<p>
										<input type="tel" name="phone" id="phone" placeholder="电话">
									</p>
								</div>                            
							</div><!--row-->                           
							<div class="row">
								<p>
									<textarea name="message" id="message" cols="45" rows="10" placeholder="短信息"></textarea>
								</p>
								<p>
									<a onclick="formSubmit()" class="form-submit-btn btn btn-app-download btn-primary">
										<strong>发送短消息</strong></a>
								</p>                            
								<div class="clear"></div>
							</div><!--row-->
						</div><!--container clearfix-->
					</form>

					<!-- COPYRIGHT -->
					<div class="copyright"><div class="copyright-left">版权所有©Transact24有限公司，保留所有权利。</div> <div class="copyright-right"><a href="<?php echo esc_url( home_url( '/zh_cn/terms' ) ); ?>" target="_blank">条款和条件</a> | <a href="<?php echo esc_url( home_url( '/zh_cn/terms' ) ); ?>" target="_blank">隐私政策</a></div></div>
				</div>
			</footer>

<?php elseif ( in_array($post->ID, $language_post_zh_hk) ) : //list of postID to show this section ?>

			<!--
			=================================
			FOOTER SECTION
			=================================
			-->
			<footer id="contact" class="footer-section section">
				<div class="container">                    
                    <h2 class="section-heading wow fadeIn text-center animated" data-wow-duration="1s">聯繫我們</h2>                    
                    <p class="wow fadeIn text-center animated" data-wow-duration="1s">要了解更多有關預付卡的資訊，企業申請程序的查詢，請使用以下表格與我們聯繫 </p>                    
                    <form id="contact-form">                        
                        <div class="container clearfix">                        
							<div class="row">                        
								<div class="col-md-12"><div id="result"></div></div>                       
							</div><!--row-->                     
							<div class="row">                        
								<div class="col-md-6 form-left">
									<p>	
										<input type="text" name="first_name" id="first_name" placeholder="名字">
									</p>
									<p>
										<input type="text" name="last_name" id="last_name" placeholder="姓">
									</p>                            
								</div>                            
								<div class="col-md-6 form-right">                             
									<p>
										<input type="text" name="email" id="email" placeholder="電子郵件">
									</p>
									<p>
										<input type="tel" name="phone" id="phone" placeholder="電話">
									</p>
								</div>                            
							</div><!--row-->                         
							<div class="row">
								<p>
									<textarea name="message" id="message" cols="45" rows="10" placeholder="信息"></textarea>
								</p>
								<p>
								<a onclick="formSubmit()" class="form-submit-btn btn btn-app-download btn-primary">
									<strong>發送消息</strong></a>
								</p>                            
								<div class="clear"></div>
							</div><!--row-->                        
						</div><!--container clearfix-->
					</form>

					<!-- COPYRIGHT -->
					<div class="copyright"><div class="copyright-left">版權所有&copy;Transact24有限公司，保留所有權利。</div> <div class="copyright-right"><a href="<?php echo esc_url( home_url( '/zh_hk/terms' ) ); ?>" target="_blank">條款和條件</a> | <a href="<?php echo esc_url( home_url( '/zh_hk/terms' ) ); ?>" target="_blank">隱私政策</a></div></div>
				</div>
			</footer>

<?php endif; ?>
		<!--
		=================================
		JAVASCRIPTS
		=================================
		-->
		<!-- JQUERY -->
		<script>window.template_directory = '<?php echo esc_url( get_template_directory_uri() ); ?>';</script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/retina.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smoothscroll.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.nav.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.stellar.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56981971-1', 'auto');
  ga('send', 'pageview');

  setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)
</script>

	</body>
<?php wp_footer(); ?>
</html>

