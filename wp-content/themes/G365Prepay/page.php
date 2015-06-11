<?php get_header(); ?>


<?php if(is_front_page() ) { ?>

<div id="page">
    <div class="row"><?php
    the_post();
    if(eva_option('pagebuilder')&&pbGetContentBuilder()){
        echo do_shortcode(pbGetContentBuilder());
    }
    else {
        if(get_metabox('layout') == "left" || get_metabox('layout') == "right") {
            get_sidebar();
            echo "<div class='span9'>";
                the_content();
            echo "</div>";
        } else {
            echo "<div class='span12'>";
                the_content();
            echo "</div>";
        }
    } ?>
    </div>

<div class="row-fluid">
  <div class="span12">
    <div class="eva-column-wrap" style="padding-bottom:0;">
      <p style="font-size: 30px; line-height: 38px; color: #333; text-align: center;"><?php $value = get_field("main_call_to_action", 24); echo $value; ?></p>
      <p>&nbsp;</p>
      <p style="text-align: center;"></p>
      <div class="eva-image-wrap" style="padding-bottom:0px;">
         <img src="wp-content/uploads/2015/03/cardholder-site-screens-final.png" alt="">
      </div>
      <p></p>
    </div>
  </div>
</div>

<!-- Main CTA -->

<div class="full-width-content full-width-element light bg-parallax" style="margin-bottom: 50px; padding-top: 50px; padding-bottom: 50px; background-image: url(wp-content/uploads/2015/01/cta_bg.jpg);">
  <div class="container">
    <div class="row-fluid">
      <div class="span9">
        <div class="eva-column-wrap" style="padding-bottom:0px;">
          <h1><?php $value = get_field("call_to_action_text", 24); echo $value; ?></h1>
        </div>
      </div>
      <div class="span3">
         <div class="eva-column-wrap" style="padding-bottom:0px;">
            <p style="text-align: center;"><a href="contact-us" target="_blank" class="btn btn-large" style="background:#1c1c1c; color: #fff; min-width: 240px !important;"><i class="fa fa-chevron-right"></i>Contact Us</a></p>
         </div>
      </div>
    </div>
  </div>
</div>

<!-- Using Your Card Copy -->

<section id="using-your-card" style="padding: 50px 0;">

<?php $page_id = 63;
$page_object = get_page( $page_id );
echo '<div class="eva-title-container"><h2 class="eva-title center" style="margin-bottom: 60px !important;">'.$page_object->post_title.'</h2></div>';
echo $page_object->post_content; ?>

</section>

<div class="row-fluid">
   <div class="span12">
      <div class="eva-divider type-light" style="margin-bottom:50px;"></div>
   </div>
</div>

<!-- Account Management Copy -->

<section id="account-management" style="padding: 50px 0;">

<?php $page_id = 74;
$page_object = get_page( $page_id );
echo '<div class="eva-title-container"><h2 class="eva-title center" style="margin-bottom: 60px !important;">'.$page_object->post_title.'</h2></div>';
echo $page_object->post_content; ?>

</section>

<div class="row-fluid">
   <div class="span12">
      <div class="eva-divider type-light" style="margin-bottom:50px;"></div>
   </div>
</div>

<!-- SMS Functionality Copy -->

<section id="sms-functionality" style="padding: 50px 0;">

<?php $page_id = 265;
$page_object = get_page( $page_id );
echo '<div class="eva-title-container"><h2 class="eva-title center" style="margin-bottom: 60px !important;">'.$page_object->post_title.'</h2></div>';
echo $page_object->post_content; ?>

</section>


<!-- Funds Security Divider -->

<div class="full-width-content full-width-element light bg-parallax" style="padding-top: 100px; padding-bottom: 100px; background-image: url(wp-content/uploads/2015/01/funds_security_bg.jpg);">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="eva-column-wrap eva-title-container" style="padding-bottom:0px;">
          <h2 class="eva-title center">Funds Security</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Money Loaded Copy -->

<section id="money-loaded" style="padding: 50px 0;">

<?php $page_id = 89;
$page_object = get_page( $page_id );
echo '<div class="eva-title-container"><h2 class="eva-title center" style="margin-bottom: 60px !important;">'.$page_object->post_title.'</h2></div>';
echo $page_object->post_content; ?>

</section>

<div class="row-fluid">
   <div class="span12">
      <div class="eva-divider type-light" style="margin-bottom:50px;"></div>
   </div>
</div>

<!-- Card Security Copy -->

<section id="card-security" style="padding: 50px 0;">

<?php $page_id = 93;
$page_object = get_page( $page_id );
echo '<div class="eva-title-container"><h2 class="eva-title center" style="margin-bottom: 60px !important;">'.$page_object->post_title.'</h2></div>';
echo $page_object->post_content; ?>

</section>

<!-- Fees Divider -->

<div class="full-width-content full-width-element light bg-parallax" style="padding-top: 100px; padding-bottom: 100px; background-image: url(wp-content/uploads/2015/01/fees_bg.jpg);">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="eva-column-wrap eva-title-container" style="padding-bottom:0px;">
          <h2 class="eva-title center">Fees</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fees Copy -->

<section id="fees" style="padding: 50px 0;">

<?php $page_id = 95;
$page_object = get_page( $page_id );
echo $page_object->post_content; ?>

</section>

<!-- FAQ Divider -->

<div class="full-width-content full-width-element light bg-parallax" style="padding-top: 100px; padding-bottom: 100px; background-image: url(wp-content/uploads/2015/01/faq_bg.jpg);">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="eva-column-wrap eva-title-container" style="padding-bottom:0px;">
          <h2 class="eva-title center">FAQs</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FAQs Copy -->

<section id="faqs" style="padding: 50px 0;">

<?php $page_id = 97;
$page_object = get_page( $page_id );
echo $page_object->post_content; ?>

</section>

<!-- Contact Form -->

<section id="contact-us">
<div id="contact-holder" class="full-width-content full-width-element" style="overflow: hidden !important;">
<div id="map-canvas"></div>
  <div class="container" style="padding: 50px 30px; margin: 100px auto; background: rgba(255, 255, 255,0.9) !important;">
    
<div class="row-fluid">
   <div class="span4">
      <div class="eva-service">
         <div class="eva-service-box style1" style="padding-bottom:50px;">
            <div class="eva-service-icon"><i class="fa fa fa-map-marker"></i></div>
            <div class="eva-service-content">
               <h4>Office 32, 19-21 Crawford Street, London W1H 1PJ</h4>
            </div>
        </div>
   </div>
</div>
<div class="span4">
     <div class="eva-service">
        <div class="eva-service-box style1" style="padding-bottom:50px;">
           <div class="eva-service-icon"><i class="fa fa fa-phone"></i></div>
           <div class="eva-service-content">
             <h4>+44 (0)20 3318 4445</h4>
           </div>
        </div>
     </div>
  </div>
<div class="span4">
     <div class="eva-service">
        <div class="eva-service-box style1" style="padding-bottom:50px;">
           <div class="eva-service-icon"><i class="fa fa fa-envelope"></i></div>
           <div class="eva-service-content">
             <h4>support@g365prepay.com</h4>
           </div>
        </div>
     </div>
</div>
</div>
    
<div class="row-fluid">
   <div class="span12">
      <div class="eva-divider type-light" style="margin-bottom:50px;"></div>
   </div>
</div>

<div class="row-fluid">
      <div class="span12">
        <?php echo do_shortcode( '[contact-form-7 id="192" title="maincontact"]' ); ?>
      </div>
    </div>
  
  </div>
</div>
<div style="clear: both;"></div>
</section>

<!-- Footer CTA -->

<div class="full-width-content full-width-element light bg-parallax" style="padding-top: 50px; padding-bottom: 50px; background-image: url(wp-content/uploads/2015/01/cta_bg.jpg);">
  <div class="container">
    <div class="row-fluid">
      <div class="span9">
        <div class="eva-column-wrap" style="padding-bottom:0px;">
          <h1><?php $value = get_field("call_to_action_text", 24); echo $value; ?></h1>
        </div>
      </div>
      <div class="span3">
         <div class="eva-column-wrap" style="padding-bottom:0px;">
            <p style="text-align: center;"><a href="contact-us" target="_blank" class="btn btn-large" style="background:#1c1c1c; color: #fff; min-width: 240px !important;"><i class="fa fa-chevron-right"></i>Contact Us</a></p>
         </div>
      </div>
    </div>
  </div>
</div>

</div>

<?php } else { ?>

<div id="page">
    <div class="row"><?php
    the_post();
    if(eva_option('pagebuilder')&&pbGetContentBuilder()){
        echo do_shortcode(pbGetContentBuilder());
    }
    else {
        if(get_metabox('layout') == "left" || get_metabox('layout') == "right") {
            get_sidebar();
            echo "<div class='span9'>";
                the_content();
            echo "</div>";
        } else {
            echo "<div class='span12'>";
                the_content();
            echo "</div>";
        }
    } ?>
    </div>
</div>

<?php } ?>

<?php get_footer(); ?>