<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
require(get_template_directory() . '/inc/language_map.php');
?>

<footer style="margin-bottom: -25px;">
      
      
      <div style="width: 100%; min-height: 310px; background: #000; margin-bottom: 30px; color: #999;">
      <div class="container">
      <div class="row" style="margin-top: 35px;">

	  <!-- footer about start -->   
		<div class="col-lg-3 didyouknow" style="padding-left: 0px !important;">
			<h4 style="margin-bottom: 30px;">
   		<?php echo $page_didyouknow->getPost($_LANG)->post_title; ?>
			</h4>
			<?php echo $page_didyouknow->getPost($_LANG)->post_content; ?>
		</div>        
     <!-- footer about end-->

     <!-- footer blog start-->
        <div class="col-lg-3 blog-latest">
			<h4 style="margin-bottom: 30px;"><?php echo $i18n_arr['body']['latest_news']; ?></h4>
			<div class="news-date"><span class="glyphicon glyphicon-calendar"></span>&nbsp;<div style="display:inline;"></div></div>
			<div class="news-title" style="margin-top: 6px;"><a href="#" target="_blank" title=""></a></div>
			<div class="news-desc" style="margin-top: 6px;"></div>
			<div class="news-more" style="margin-top: 6px;"><a href="#" target="_blank"><?php echo $i18n_arr['footer']['readmore']; ?></a></div>
        </div>
     <!-- footer blog end -->

     <!-- footer links start -->
        <div class="col-lg-3">
        <h4 style="margin-bottom: 30px;">
		   	<?php echo $page_our_links->getPost($_LANG)->post_title; ?>
        </h4>
        <div class="row">
		   	<?php echo $page_our_links->getPost($_LANG)->post_content;	?>
        </div>
        </div>
     <!-- footer links end -->

     <!-- footer contact us start -->
        <div class="col-lg-3" style="padding-right: 0px !important;">
        <h4 style="margin-bottom: 30px;"><?php echo $page_contact_us->getPost($_LANG)->post_title; ?></h4>
        <?php echo $page_contact_us->getPost($_LANG)->post_content; ?>
        </div>
     <!-- footer contact us end -->
      </div>
      </div>
      </div>
     <!-- footer copyright start -->
     <?php echo $page_copyright->getPost($_LANG)->post_content;?>

     <!-- footer copyright end -->      
</footer>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
		window.template_uri = '<?php print esc_url( get_template_directory_uri() ); ?>';
		window.home_url = '<?php echo esc_url( home_url('/'));?>';
		window.current_language = '<?php echo $_CODE;?>';
    </script>
	<script src="<?php print esc_url( get_template_directory_uri() ); ?>/js/i18n.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/dist/js/bootstrap.min.js"></script>
    <!--<script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/holder.js"></script>-->
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.jcarousel.min.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.sticky.js"></script>
	<script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.validate.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.visible.js"></script> 
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/hashchange.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/assets/js/re_weburl.js"></script>
    <script src="<?php print esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>

	<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
	Date();a=s.createElement(o),

	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-50032878-1', 'transact24.com');
	ga('send', 'pageview');

	setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)

	</script>
<?php wp_footer(); ?>
</body>
</html>
