<?php /* Template Name: Front Home Page */
get_header(); 
require(get_template_directory() . '/inc/language_map.php');?>


    <!-- ADV Start
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" style="background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide01.jpg) center center no-repeat;">
          <div class="container">
            <div class="carousel-caption dotted-bg">
              <?php echo $page_adv_1->getPost($_LANG)->post_content;	?>
            </div>
          </div>
        </div>

        <div class="item" style="background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide02.jpg) center center no-repeat;">
          <div class="container">
            <div class="carousel-caption dotted-bg">
              <?php echo $page_adv_2->getPost($_LANG)->post_content;	?>
            </div>
            <div class="clear"></div>
          </div>
        </div>

        <div class="item" style="background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide03.jpg) center center no-repeat;">
          <div class="container">
            <div class="carousel-caption dotted-bg">
              <?php echo $page_adv_3->getPost($_LANG)->post_content;	?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <!--
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      -->
    </div>
    <!-- ADV End -->

    <?php require_once get_template_directory() . '/inc/contact_us.php'; ?>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!--  about start-->
      <div id="about-section">
        <?php echo $page_about_index->getPost($_LANG)->post_content;	?>
      </div>
      <!--  about end-->    

      <div class="row dividing-line">
        <div class="grey-line"></div>
        <div class="red-line"></div>
      </div>

      <div id="contentCarousel" class="carousel slide">

        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="item active">

          <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-3">
                  <h2>
                    <a title="Automated Clearing House Payment Processing" data-solution="ach-processing" data-target="#contentCarousel" data-slide-to="1" onclick="contentCarouselUp();ga('send','event','Content','Click','Automated Clearing House Payment Processing');">
                      <?php echo $page_ach_processing->getPost($_LANG)->post_title;	?>
                    </a>
                  </h2>
                  <a title="Automated Clearing House Payment Processing" data-solution="ach-processing" data-target="#contentCarousel" data-slide-to="1" onclick="contentCarouselUp();ga('send','event','Content','Click','Automated Clearing House Payment Processing');">
                    <div class="img-holder bg-001">
                      <div class="plus-holder">
                        <div class="plus-icon-holder">
                          <span class="glyphicon glyphicon-fullscreen"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                <p>
                  <?php echo $page_ach_processing->getPost($_LANG)->description;?>
                </p>
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','Alipay Payment Processing Solution');" title="Alipay Payment Processing Solution" data-solution="alipay" data-target="#contentCarousel" data-slide-to="2">
                    <?php echo $page_alipay_solution->getPost($_LANG)->post_title;?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','Alipay Payment Processing Solution');" title="Alipay Payment Processing Solution" data-solution="alipay" data-target="#contentCarousel" data-slide-to="2">
                  <div class="img-holder bg-002">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_alipay_solution->getPost($_LANG)->description;	?>
                </p>
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','Credit/Debit Card Processing');" title="Credit/Debit Card Processing" data-solution="card-payment-processing" data-target="#contentCarousel" data-slide-to="3">
                    <?php echo $page_card_processing->getPost($_LANG)->post_title; ?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','Credit/Debit Card Processing');" title="Credit/Debit Card Processing" data-solution="card-payment-processing" data-target="#contentCarousel" data-slide-to="3">
                  <div class="img-holder bg-003">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_card_processing->getPost($_LANG)->description;	?>
                </p>
              </div><!-- /.col-lg-4 -->

                <div class="col-lg-3">
                  <h2>
                    <a onclick="ga('send','event','Content','Click','China UnionPay Payment Processing');" title="China UnionPay Payment Processing" data-solution="china-union-pay" data-target="#contentCarousel" data-slide-to="4">
                      <?php echo $page_china_unionPay->getPost($_LANG)->post_title;	?>
                    </a>
                  </h2>
                  <a onclick="ga('send','event','Content','Click','China UnionPay Payment Processing');" title="China UnionPay Payment Processing" data-solution="china-union-pay" data-target="#contentCarousel" data-slide-to="4">
                    <div class="img-holder bg-004">
                      <div class="plus-holder">
                        <div class="plus-icon-holder">
                          <span class="glyphicon glyphicon-fullscreen"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                  <p>
                  <?php echo $page_china_unionPay->getPost($_LANG)->description;	?>
                  </p>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->

            <!-- Three columns of text below the carousel -->
            <div class="row solutions-second">
              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','Prepaid Card Management Solutions');" title="Prepaid Card Management Solutions" data-solution="prepaid-cards" data-target="#contentCarousel" data-slide-to="5">
                    <?php echo $page_prepaid_cards->getPost($_LANG)->post_title; ?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','Prepaid Card Management Solutions');" title="Prepaid Card Management Solutions" data-solution="prepaid-cards" data-target="#contentCarousel" data-slide-to="5">
                  <div class="img-holder bg-005">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_prepaid_cards->getPost($_LANG)->description; ?>
                </p>
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','Corporate Travel Insurance Solutions');" title="Corporate Travel Insurance Solutions" data-solution="travel-insurance" data-target="#contentCarousel" data-slide-to="6">
                    <?php echo $page_travel_insurance->getPost($_LANG)->post_title;	?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','Corporate Travel Insurance Solutions');" title="Corporate Travel Insurance Solutions" data-solution="travel-insurance" data-target="#contentCarousel" data-slide-to="6">
                  <div class="img-holder bg-006">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_travel_insurance->getPost($_LANG)->description;	?>
                </p>
              </div><!-- /.col-lg-4 -->

              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','White Label Payment Processing Solutions');" title="White Label Payment Processing Solutions" data-solution="white-label-gateway" data-target="#contentCarousel" data-slide-to="7">
                    <?php echo $page_white_label_gateway->getPost($_LANG)->post_title; ?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','White Label Payment Processing Solutions');" title="White Label Payment Processing Solutions" data-solution="white-label-gateway" data-target="#contentCarousel" data-slide-to="7">
                  <div class="img-holder bg-007">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_white_label_gateway->getPost($_LANG)->description;	?>
                </p>
              </div><!-- /.col-lg-4 -->
              
              <div class="col-lg-3">
                <h2>
                  <a onclick="ga('send','event','Content','Click','Virtual Prepaid Cards');" title="Virtual Prepaid Cards" data-solution="virtual-prepaid-cards" data-target="#contentCarousel" data-slide-to="8">
                    <?php echo $page_virtual_prepaid_cards->getPost($_LANG)->post_title; ?>
                  </a>
                </h2>
                <a onclick="ga('send','event','Content','Click','Virtual Prepaid Cards');" title="Virtual Prepaid Cards" data-solution="virtual-prepaid-cards" data-target="#contentCarousel" data-slide-to="8">
                  <div class="img-holder bg-008">
                    <div class="plus-holder">
                      <div class="plus-icon-holder">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                      </div>
                    </div>
                  </div>
                </a>
                <p>
                <?php echo $page_virtual_prepaid_cards->getPost($_LANG)->description;	?>
                </p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div>

          <!--  3*********************************************ACH Processingstart****************************************************** -->         
          <div class="item" id="ach-processing">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Automated Clearing House Payment Processing');" href="#" data-solution="ach-processing" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_ach_processing->getPost($_LANG)->post_content; ?>
          </div>  
          <!--  *********************************************ACH Processing end****************************************************** -->   

          <!--  6*********************************************Alipay Solution start****************************************************** -->         
          <div class="item" id="#alipay">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Alipay Payment Processing Solution');" href="#" data-solution="alipay" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_alipay_solution->getPost($_LANG)->post_content;	?>
          </div> 
          <!--  *********************************************Alipay Solution end****************************************************** -->    

          <!--  2*********************************************Card Processing start****************************************************** -->         
          <div class="item" id="#card-payment-processing">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Credit/Debit Card Processing');" href="#" data-solution="card-payment-processing" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_card_processing->getPost($_LANG)->post_content;	?>
          </div> 
          <!--  *********************************************Card Processing end****************************************************** -->       

          <!--  5*********************************************China UnionPay start****************************************************** -->         
          <div class="item" id="#china-union-pay">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from China UnionPay Payment Processing');" href="#" data-solution="china-union-pay" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_china_unionPay->getPost($_LANG)->post_content; ?>
          </div> 
          <!--  *********************************************China UnionPay end****************************************************** -->   

          <!--  1*********************************************Prepaid Start****************************************************** -->     
          <div class="item" id="#prepaid-cards">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Prepaid Card Management Solutions');" href="#" data-solution="prepaid-cards" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_prepaid_cards->getPost($_LANG)->post_content;	?>
          </div>           
          <!--  *********************************************Prepaid end****************************************************** -->      

          <!--  4*********************************************Travel Insurancestart****************************************************** -->         
          <div class="item" id="#travel-insurance">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Corporate Travel Insurance Solutions');" href="#" data-solution="travel-insurance" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_travel_insurance->getPost($_LANG)->post_content; ?>
          </div> 
          <!--  *********************************************Travel Insurance end****************************************************** -->  

          <!--  7*********************************************White Label Gateway start****************************************************** -->         
          <div class="item" id="#white-label-gateway">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from White Label Payment Processing Solutions');" href="#" data-solution="white-label-gateway" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_white_label_gateway->getPost($_LANG)->post_content;	?>
          </div> 
          <!--  *********************************************White Label Gateway end****************************************************** -->       

          <!--  8*********************************************Virtual Prepaid Cards****************************************************** -->   
          <div class="item" id="#virtual-prepaid-cards">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Virtual Prepaid Card Solutions');" href="#" data-solution="virtual-prepaid-cards" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_virtual_prepaid_cards->getPost($_LANG)->post_content;	?>
          </div> 
          <!--  *********************************************Virtual Prepaid Cards****************************************************** --> 
          
          <!--  9*********************************************Careers start****************************************************** -->   
          <div class="item" id="#careers">
            <div class="col-lg-12">
              <a onclick="ga('send','event','Content','Click','Back from Transact24 Careers');" href="#" data-solution="careers" data-target="#contentCarousel" data-slide-to="0">&laquo; <?php echo $i18n_arr['body']['back']; ?></a>
            </div>
            <?php echo $page_careers->getPost($_LANG)->post_content;	?>
          </div> 
          <!--  *********************************************Careers end****************************************************** -->         
        			
        </div>


      </div>

      <div class="row latest-news">
        <div class="col-lg-8">
          <div class="grey-line"></div>
          <div class="red-line"></div>

          <h2><?php echo $i18n_arr['body']['latest_news']; ?></h2>

          <div>
            <a class="left carousel-control" href="#newsCarousel" data-slide="prev">
              <span>‹</span>
            </a>

            <a class="right carousel-control" href="#newsCarousel" data-slide="next">
              <span>›</span>
            </a>
          </div>

          <div id="newsCarousel" class="carousel slide">

            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <!-- Latest news 1-3-->
                  <script type="text/javascript"> 
                    for(var i=0;i<=2;i++){
                    document.write("<div class='col-sm-4 load-blog-news' id='blog-news-"+i+"'><a class='blog-img-url' href='#' target='_blank'><div class='blog-img-holder blog-001'><div class='plus-holder'><div style='width: 36px; margin: 40px auto 0 auto;'><span class='glyphicon glyphicon-fullscreen' style='font-size: 36px;'></span></div></div></div></a><h3 class='get-blog-title'><a href='#' target='_blank'></a></h3><p style='color: #f0191e; font-size: 11px; margin-top: 10px;'><span class='glyphicon glyphicon-calendar'></span><span class='blog-news-date'></span></p><p class='blog-news-info'></p><a href='#' target='_blank' class='blog-news-more'><?php echo $i18n_arr['footer']['readmore']; ?></a></div>"); 
                    }
                  </script> 
                  <!-- Latest news 1-3 end-->
                </div>
                <!--/row-->
              </div>
              <!--/item-->

              <div class="item" style="height: auto !important; background: #fff; text-align: left;">
                <div class="row">
                  <!-- Latest news 4-6-->
                  <script type="text/javascript"> 
                    for(var i=3;i<=5;i++){
                    document.write("<div class='col-sm-4 load-blog-news' id='blog-news-"+i+"'><a class='blog-img-url' href='#' target='_blank'><div class='blog-img-holder blog-001'><div class='plus-holder'><div style='width: 36px; margin: 40px auto 0 auto;'><span class='glyphicon glyphicon-fullscreen' style='font-size: 36px;'></span></div></div></div></a><h3  class='get-blog-title'><a href='#' target='_blank'></a></h3><p style='color: #f0191e; font-size: 11px; margin-top: 10px;'><span class='glyphicon glyphicon-calendar'></span><span class='blog-news-date'></span></p><p class='blog-news-info'></p><a href='#' target='_blank' class='blog-news-more'><?php echo $i18n_arr['footer']['readmore']; ?></a></div>"); 
                    }
                  </script> 
                  <!-- Latest news 4-6 end-->
                </div>
                <!--/row-->
              </div>
              <!--/item-->
            </div>
          </div>
          <!--/myCarousel-->

        </div>

        <!--/myCarousel-->  
        <div class="col-lg-4">
          <div class="grey-line"></div>
          <div class="red-line"></div>
          <?php //include "testimonials.php"; ?>
        </div>
        <!--/myCarousel-->
      </div>

      <div class="row dividing-line">
        <div class="grey-line"></div>
        <div class="red-line"></div>
      </div>

      <div class="row partners">
        <div class="col-md-12 text-left">
          <h2><?php echo $i18n_arr['body']['partner']; ?></h2>
          <div>
            <a onclick="ga('send','event','Our Partners','Click','Previous button');" class="left carousel-control" href="#partnerCarousel" data-slide="prev">
              <span>‹</span>
            </a>

            <a onclick="ga('send','event','Our Partners','Click','Next button');" class="right carousel-control" href="#partnerCarousel" data-slide="next">
              <span>›</span>
            </a>
          </div>
          <div class="col-md-12">
            <div class="carousel slide" id="partnerCarousel">
              <div class="carousel-inner">
                <?php echo $page_our_partners->getPost($_LANG)->post_content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

<?php get_footer(); ?>
