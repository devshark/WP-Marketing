<?php
/*
* Template Name: Simplified Chinese Front Page
*/
get_header();
?>

			<!--
			=================================
			HERO SECTION
			=================================
			-->
			<section id="home" class="hero-section hero-layout-1 section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<div class="hero-content" data-stellar-offset-parent="true">

						<!-- HERO TEXT -->
						<div class="hero-text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
							
							<!-- LOGO -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_white.png" alt="#" class="hero-logo" />
                            
                            <!-- HERO IMAGES -->
						<div class="wow fadeIn mobile"  data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="card-holder">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/card_front.png" class="hero-image" alt="T24 China UnionPay Prepaid Card" />
                            </div>
						</div>

							<!-- TAGLINE -->
							<h1 class="hero-title" style="font-size: 34px !important; line-height: 40px !important; color: #cccccc;">有了Transact24银联预付卡, 你可以方便快捷地在多达142个国家，超过 720万个有中国银联受理商标的商户/柜员机中提取现金和购物取現</h1>

							<!-- HERO DESCRIPTION -->
							<!--<p class="hero-description">有了Transact24銀聯預付卡, 你可以方便快捷地在多達142個國家，超過 720萬個有中國銀聯受理商標的商戶/櫃員機中經網上和親臨商店提取現金和購物</p>-->

							<!-- DOWNLOAD BUTTONS -->
							<p class="download-buttons">
								<!-- APP STORE DOWNLOAD -->
								<a href="#features" class="btn btn-app-download btn-ios">
									<strong>了解更多</strong></a>
								<!-- PLAY STORE DOWNLOAD -->
								<a href="#contact" class="btn btn-app-download btn-primary">
									<strong>联系我们</strong></a>
                                    
                                    <div class="clear">
							</p>

						</div>

						<!-- HERO IMAGES -->
						<div class="hero-images wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="card-holder">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/card_front.png" class="hero-image" alt="#" />
                            </div>
						</div>
						
					</div>

				</div>
			</section>
<!--
			=================================
			FEATURES SECTION
			=================================
			-->
			<section id="features" class="features-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">预付卡特点</h2>
					<p class="wow fadeIn text-center animated animated" data-wow-duration="1s">使用Transact24中国银联预付卡既简单又方便</p>

					<div class="featuers-list-wrapper row">

						<!-- FEATURES LEFT -->
						<div class="col-md-3 col-sm-6">
							<ul class="features-list features-list-left wow fadeInLeft" data-wow-duration="1s">
								<li class="features-list-item">
                                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/card_icon.png">
									<h5>自动柜员机和商店</h5>
									<p>在中国银联受理的自动柜员机和商店使用</p>
								</li>
								<li class="features-list-item">
                                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/load_icon.png">
									<h5>儲值高達50,000港元</h5>
									<p>使用银行转账轻松管理单张卡和批量卡上截</p>
								</li>
							</ul>
						</div>

						<!-- FEATURES RIGHT -->
						<div class="col-md-3 col-md-push-6 col-sm-6">
							<ul class="features-list features-list-right wow fadeInRight" data-wow-duration="1s">
								<li class="features-list-item">
                                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/world_icon.png">
									<h5>全球使用</h5>
									<p>在全球超过142个中国银联受理的国家使用</p>
								</li>
								<li class="features-list-item">
                               		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/offers_icon.png">
									<h5>购物优惠</h5>
									<p>在加入中国银联的商户中购物以享受优惠</p>
								</li>
							</ul>
						</div>

						<!-- CLOSE UP PHONE IMAGE -->
						<div class="col-md-6 col-md-pull-3 text-center">
                        	<div id="card_front_holder">
                            <div class="card_front_img_holder">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/card_front.png" class="features-image wow fadeInUp" alt="" data-wow-duration="1s"/>
                            </div>
                            </div>
						</div>

					</div>

				</div>
			</section>
            
            
            
            <!--
			=================================
			DESCRIPTION SECTION
			=================================
			-->
			<section id="intro" class="description-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn text-center" data-wow-duration="1s">介绍</h2>
							<p class="wow fadeIn text-center" data-wow-duration="1s"></p>
                                
						</div>

						
					</div>
                    
                    <div class="row">
						<p class="wow fadeIn text-center animated" data-wow-duration="1s">T24预付卡为个人在国内和港澳携带及存取资金提供了一个更便捷的方式。港币币种的中国银联预付卡允许持卡人预先将资金转入到卡上。该预付卡也可以重新转入额外的资金并且任何未用完的资金都可以存储在卡内备用。连接到国内唯一银行专用网络——中国银联，预付卡可以在全球所有有银联标识的自动柜员机进行取款。而且该卡还可以在超过130万个有中国银联受理商标的商户享受购物</p>
					</div>
                    
                    <div class="row">
						<div class="col-md-3">
                        <div class="wow fadeIn text-center animated" data-wow-duration="1s">
                        <h3>商务旅客</h3>
                        	<ul>
                            	<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;预付“消费卡”</li>
				<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;可充值</li>
				<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;磁条</li>
                            </ul>
                        </div>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="wow fadeIn text-center animated intro-holder" data-wow-duration="1s">
                        <h3>工资</h3>
				<ul>
                            		<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;预付“消费卡”</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;可充值</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;磁条</li>
                           </ul>      
                        
                        </div>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="wow fadeIn text-center animated intro-holder" data-wow-duration="1s">
                        <h3>学生</h3>
				<ul>
                            		<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;预付“生活费卡”</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;可充值</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;磁条</li>
                            </ul>
                        </div>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="wow fadeIn text-center animated intro-holder" data-wow-duration="1s">
                        <h3>旅游/退休人员</h3>
                        	<ul>
                        		<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;预付“生活费卡”</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;>可充值</li>
					<li><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;磁条</li>
				</ul>                        
                        </div>
                        </div>
                        
                   </div>
                   
                   <div class="row">
						<div class="col-md-12">
                   
                   		<p class="wow fadeIn text-center animated intro-holder" data-wow-duration="1s">T24获准发行没刻名字的T24中国银联预付卡，每人最多可以申请两张卡</p>
                   
                   		</div>
                   </div>
                    
                    
                    
                    

				</div>
			</section>
            
            
            <!--
			=================================
			DESCRIPTION SECTION
			=================================
			-->
			<section id="why" class="description-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn text-center" data-wow-duration="1s">为什么选择中国银联</h2>
							<p class="wow fadeIn text-center" data-wow-duration="1s"></p>
                                
						</div>

						
					</div>
                    
                    <div class="row">
						<p class="wow fadeIn text-center animated" data-wow-duration="1s" style="visibility: visible; -webkit-animation: fadeIn 1s; text-align: left !important;">T24预付卡为个人在国内和港澳携带及存取资金提供了一个更便捷的方式。港币币种的中国银联预付卡允许持卡人预先充值资金到卡上。该预付卡也可以重新充值额外的资金并且任何未用完的资金都可以存储在卡内备用。连接到国内唯一银行专用网络——中国银联，T24预付卡可以在全球所有有银联标识的自动柜员机进行取款。而且该卡还可以在超过130万个有中国银联受理商标的商户享受购物</p>
					</div>
                    
                    <div class="row">
						<div class="col-md-4" style="padding-left: 0px;">
                        
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        <h3>消费购物的便利性</h3>
                            	<div><i class="fa fa-check-circle"></i>&nbsp;&nbsp;银联受理网络全球性，包括全球自动柜员机网络及快捷的POS机支付。</div>
								
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        <h3>申请简易费用低</h3>
                            	<div><i class="fa fa-check-circle"></i>&nbsp;&nbsp;申请是只需要提供身份证及地址证明即可</div>
								     
                        </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        <h3>安全、舒心的购物体验</h3>
                            	<div><i class="fa fa-check-circle"></i>&nbsp;&nbsp;基于密码验证使交易及账户更加安全，无论身处何方，你都可以随时安心购物。</div>
                        </div>
                        </div>
                        
                   </div>
                   
                   
                   
                   <div class="row">
						<div class="col-md-4">
                        
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        <h3>遍及全球</h3><div><i class="fa fa-check-circle"></i>&nbsp;&nbsp;全球超过140个国家接受银联卡（见附件A），无论您在世界那一个角落，我们都可以把卡片送到您手上。</div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        <h3>银行账户</h3>
                            	<div><i class="fa fa-check-circle"></i>&nbsp;&nbsp;不需要银行账户</div>
                        </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="wow fadeIn text-center animated why-holder" data-wow-duration="1s">
                        
                        </div>
                        </div>
                        
                   </div>
                    
                    
                    
                    

				</div>
			</section>
            
            
            
            
            <!--
			=================================
			DESCRIPTION SECTION
			=================================
			-->
			<section id="fees" class="description-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn text-center" data-wow-duration="1s">费用</h2>
							<p class="section-sub-heading wow fadeIn text-center" data-wow-duration="1s"></p>
                                
						</div>

						
					</div>
                    
                    <div class="row">
						<p class="section-sub-heading wow fadeIn text-center animated" data-wow-duration="1s">该摘要显示你的主要费用及Transact24中国银联卡的限制</br>如需完整的详细信息，请阅读条款和条件</p>
					</div>
                    
                    <div class="row">
						<div class="col-md-12">
                        
                        
                        <table>
				<tbody>
					<tr>
						<th>说明</th>
						<th>货币（港元）</th>
					</tr>
                    <tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>申请费</strong></td>
						<td>
							100</td>
					</tr>
                    <tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>开通费</strong></td>
						<td>
							免费</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>年费</strong></td>
						<td>
							无</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>报失补卡处理</strong></td>
						<td>
							50/张 </td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>外币交易汇率费用</strong></td>
						<td>
							1.50%</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>自动柜员机提款手续费</strong></td>
						<td>
							45</td>
					</tr>
				
					<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>账户管理费費</strong></td>
						<td>
							5/月（从第13个月开始收取）</td>
					</tr>
					<!--<tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>查詢可用餘額</strong></td>
						<td></td>
					</tr>
					<tr>
						<td>
							&nbsp;&nbsp;&nbsp;<strong>a. 经网上户口查询</strong></td>
						<td>
							免费</td>
					</tr>
                    <tr>
						<td>
							&nbsp;&nbsp;&nbsp;<strong>b. 经电话热线查询</strong></td>
						<td>
							免费</td>
					</tr>
                    
                     <tr>
						<td>
							&nbsp;&nbsp;&nbsp;<strong>c. 经有银联标识的自动柜员机查询</strong></td>
						<td>
							每一次5元</td>
					</tr>
                    
                    <tr>
						<td>
							<i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;&nbsp;<strong>再充值处理费</strong></td>
						<td>
							总金额的1％,充值额最少10元</td>
					</tr>-->
				
				</tbody>
			</table>
                        
                        
                        
                        </div>
                        
                   </div>
                    
                    
                    
                    

				</div>
			</section>
            
            
            
            
            <!--
			=================================
			VIDEO SECTION
			=================================
			-->
			<section id="video" class="video-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-10 col-md-offset-1" >

							<div class="wow fadeIn" data-wow-duration="1s">

								
                                <h2 class="section-heading wow fadeIn text-center" data-wow-duration="1s">购物优惠</h2>
								<!-- VIDEO EMBED FROM YOUTUBE: please change the URL -->
								<!-- <iframe width="560" height="315" src="//www.youtube.com/embed/7UAy8E3e9f8?rel=0" frameborder="0" allowfullscreen></iframe> -->

							</div>
						</div>
					</div>

				</div>
			</section>
            
            

			<!--
			=================================
			FEATURES WITH ICONS SECTION
			=================================
			-->
			<section id="offers" class="features-icons-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<!-- SECTION HEADING -->
							<!--<h2 class="section-heading wow fadeIn text-center" data-wow-duration="1s">Merchant Offers</h2>-->
							<p class="wow fadeIn text-center" data-wow-duration="1s">银联卡持有人有机会获得遍及香港，澳门，来自180多个不同商户和超过2500间购物商店的独家优惠</p>
                    
                    
                    <div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#tab-1" data-toggle="tab">珠宝首饰及钟表</a></li>
        <li><a href="#tab-2" data-toggle="tab">时尚与服饰</a></li>
        <li><a href="#tab-3" data-toggle="tab">食品及饮品</a></li>
        <li><a href="#tab-4" data-toggle="tab">美容</a></li>
        <li><a href="#tab-5" data-toggle="tab">保健</a></li>
        <li><a href="#tab-6" data-toggle="tab">童装</a></li>
        <li><a href="#tab-7" data-toggle="tab">生活休闲</a></li>
        <li><a href="#tab-8" data-toggle="tab">澳门</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="tab-1">
        
        	<div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chow_sang_sang_logo.png"></div>
            <div class="offer-merchant-name"><h3>Chow Sang Sang</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购宝石珠宝首饰</p>
            <p><i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于纯金商品，未镶嵌的宝石，公司礼品，手表和指定货品</p>
            <p><i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于以旧换新商品和不可与其他优惠同时使用</p>
            <p><i class="fa fa-minus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于香港迪斯尼乐园内的小镇珠宝店</p>
            </div>
            <div class="clear"></div>
            </div>
            
           <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chow_tai_fook_logo.png"></div>
            <div class="offer-merchant-name"><h3>Chow Tai Fook</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以原价99折选购镶嵌宝石的首饰，18K金，PT 950和固定价的珠宝和金制礼品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与其他优惠同时使用（包括Chow Tai Fook会员计划折扣和黄金会/珠宝会兑换，免息分期计划，联合推销，Chow Tai Fook或联合第三方推出的礼券和大型销售活动 ）</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于特价货品，礼券，纯金金块，未镶嵌的宝石，官方零售商的手表，公司礼品订单，退还金额和订金</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chow_tai_fook_young_zone_logo.png"></div>
            <div class="offer-merchant-name"><h3>Chow Tai Fook Young Zone</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以98折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dreams_london_logo.png"></div>
            <div class="offer-merchant-name"><h3>Dreams London</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/emphasis_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>Emphasis Jewellery </h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以7折选购正价镶嵌珠宝的首饰物品（纯金货品和未镶嵌的宝石除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/just_925_logo.png"></div>
            <div style="float: left;"><h3>Just 925</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外85折选购特价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500元可免费获得白银护理液及白银抛光布</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/just_gold_logo.png"></div>
            <div class="offer-merchant-name"><h3>Just Gold</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满3000港币购买固定价格商品可享100元折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于无装饰的项链，皮带，非24K金佛像，金元宝，金币，配件，Just礼品卡，指定商品，特价货品和维修服务</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与其他优惠，现金券及会员生日优惠（Just礼品卡及新鸿基地产现金券除外）同时使用</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <!--<div class="offer">
            
            <div class="offer-logo-holder"><img src="#"></div>
            <div class="offer-merchant-name"><h3>Justwatch</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;A complimentary 8GB USB upon any purchase</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;500 pieces are available</p>
            </div>
            <div class="clear"></div>
            </div>-->
            
            
            
             
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/larry_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>Larry Jewellery</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以5折选购正价货品（特价货品和金链除外）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;出示银联卡可获免费珠宝设计（需提前预订），校对，清洁服务</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
              <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lukfook_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>Lukfook Jewellery</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以92折选购钻石，天然翡翠（硬玉），珍珠，宝石和K金货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价格，特价，己授权和收藏家系列货品和手表</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mall_river_logo.png"></div>
            <div class="offer-merchant-name"><h3>Mall River</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/morellato_logo.png"></div>
            <div class="offer-merchant-name"><h3>Morellato</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
              <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oriental_watch_company_logo.png"></div>
            <div class="offer-merchant-name"><h3>Oriental Watch Company</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得精美礼品1份</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pink_box_logo.png"></div>
            <div class="offer-merchant-name"><h3>Pinkbox</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价18k珠宝货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;999.9黄金货品的设计费9折</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于认证产品，座架，指定和特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/toy_watch_logo.png"></div>
            <div class="offer-merchant-name"><h3>ToyWatch</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于维修服务和特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tsl_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>TSL Jewellery </h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价珠宝货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于埃斯特雷亚钻石，未镶嵌的钻石，纯金，K金，铂金，特价和促销货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
            
        </div>
        <div class="tab-pane" id="tab-2">
            
            
            
           <!-- <div class="offer">
            
            <div class="offer-logo-holder"><img src="#"></div>
            <div class="offer-merchant-name"><h3>+-x÷/th</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;15% off on regular-priced items</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;Not applicable to fixed-priced and consignment items</p>
            </div>
            <div class="clear"></div>
            </div>-->
            
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/two_percent_logo.png"></div>
            <div class="offer-merchant-name"><h3>2%</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/alviero_martini_logo.png"></div>
            <div class="offer-merchant-name"><h3>Alviero Martini 1a Class</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购当季正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/belle_logo.png"></div>
            <div class="offer-merchant-name"><h3>BeLLE</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/birkenstock_logo.png"></div>
            <div class="offer-merchant-name"><h3>BIRKENTSTOCK</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，特定货品，维修和保养货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/catalog_logo.png"></div>
            <div class="offer-merchant-name"><h3>Catalog</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cobo_blu_logo.png"></div>
            <div class="offer-merchant-name"><h3>COBO blu</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满1500元购买正价货品可免费获赠精美礼品1份（价值600元至800元）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2500元购买正价货品可免费获赠精美礼品1份（价值1000元至1300元）</p>
            </div>
            <div class="clear"></div>
            </div>
            
             <!--<div class="offer">
            
           <div class="offer-logo-holder"><img src="#"></div>
            <div class="offer-merchant-name"><h3>COBO International</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;A complimentary gift (worth HK$ 1000) upon spending of HK$ 2,500 on regular-priced items</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;A complimentary gift (worth HK$ 1,300) upon spending of HK$ 3,500 on regular-priced items</p>
            </div>
            <div class="clear"></div>
            </div>-->
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cour_carre_logo.png"></div>
            <div class="offer-merchant-name"><h3>COUR CARRÉ</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外95折选购特价货品（5折或以下的货品除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cpu_logo.png"></div>
            <div class="offer-merchant-name"><h3>C.P.U.</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，特定货品及寄卖专柜</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eikowada_logo.png"></div>
            <div class="offer-merchant-name"><h3>EIKOWADA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于特价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于轩尼诗道，弥敦道，元朗和新光工业大厦分店</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/episode_jessica_logo.png"></div>
            <div class="offer-merchant-name"><h3>Episode/Jessica</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/evisu_logo.png"></div>
            <div class="offer-merchant-name"><h3>EVISU</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价经典复古及女士系列</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eyes_mate_optical_logo.png"></div>
            <div class="offer-merchant-name"><h3>Eye’s Mate Optical</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购眼镜框</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以75折选购太阳眼镜</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fables_az_logo.png"></div>
            <div class="offer-merchant-name"><h3>FABLES AZ</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于配件和鞋款</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/futobol_trend_logo.png"></div>
            <div class="offer-merchant-name"><h3>Futbol Trend</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于印字服务和固定价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fx_creations_logo.png"></div>
            <div class="offer-merchant-name"><h3>FX Creations</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外9折选购8折或以上货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用HosannArt系列</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gigasports_logo.png"></div>
            <div class="offer-merchant-name"><h3>GigaSports</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售物品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gitti_logo.png"></div>
            <div class="offer-merchant-name"><h3>Gitti</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/glasstique_logo.png"></div>
            <div class="offer-merchant-name"><h3>Glasstique</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购眼镜框连镜片或太阳眼镜可免费获赠精美礼品1份</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，配件及隐形眼镜产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hong_kong_optical_logo.png"></div>
            <div class="offer-merchant-name"><h3>Hong Kong Optical</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以8折选购眼镜框，太阳眼镜和镜片</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于固定价和特价货品，用完即弃隐形眼镜及个人护理液</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/house_of_avenues_logo.png"></div>
            <div class="offer-merchant-name"><h3>House of Avenues</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价鞋款及手袋</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jessica_red_weekend_workshop_logo.png"></div>
            <div class="offer-merchant-name"><h3>JESSICA RED / WEEKEND WORKSHOP</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kate_logo.png"></div>
            <div class="offer-merchant-name"><h3>Kate</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kipling_logo.png"></div>
            <div class="offer-merchant-name"><h3>Kipling</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购2件正价货品可享95折</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购3件正价货品可享9折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leo_logo.png"></div>
            <div class="offer-merchant-name"><h3>LEO</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/le_saunda_logo.png"></div>
            <div class="offer-merchant-name"><h3>Le Saunda</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以88折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/manila_grace_koolaburra_hotel_particulier_magin_logo.png"></div>
            <div class="offer-merchant-name"><h3>Manila Grace / KOOLABURRA / Hotel Particulier / MAGin</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/marathon_sports_logo.png"></div>
            <div class="offer-merchant-name"><h3>Marathon Sports</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/miffy_x_2percent_logo.png"></div>
            <div class="offer-merchant-name"><h3>Miffy x 2%</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价及寄售货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mi-tu_logo.png"></div>
            <div class="offer-merchant-name"><h3>mi-tu / mi-tu moda</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/moiselle_germain_mademoiselle_coccinelle_sequoia_logo.png"></div>
            <div class="offer-merchant-name"><h3>MOISELLE / GERMAIN / mademoiselle / COCCINELLE / SEQUOIA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于晚礼服，皮草，特价和固定价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
               <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mousse_logo.png"></div>
            <div class="offer-merchant-name"><h3>Mousse</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/muse_logo.png"></div>
            <div class="offer-merchant-name"><h3>musé</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以8折选购muse金标水晶配饰系列</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nautica_logo.png"></div>
            <div class="offer-merchant-name"><h3>Nautica</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500元购买正价服饰可享9折</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于东荟城店</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/niki_jodi_logo.png"></div>
            <div class="offer-merchant-name"><h3>NIKI JODI</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满1500元购买正价货品可免费获赠精美礼品1份（价值400元至600元）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2500元购买正价货品可免费获赠精美礼品1份（价值700元至1200元）</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ooshop_culterandgross_lindafarrow_vault_logo.png"></div>
            <div class="offer-merchant-name"><h3>O-O Shop / Cutler and Gross / Linda Farrow Gallery / VAULT</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购眼镜框连镜片或太阳眼镜可免费获赠精美礼品1份</p>
            <p><i class="fa fa-minus-circle" st yle="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，配件及隐形眼镜产品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/onitsuka_tiger_logo.png"></div>
            <div class="offer-merchant-name"><h3>Onitsuka Tiger</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品及特定货品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/optical_88_logo.png"></div>
            <div class="offer-merchant-name"><h3>OPTICAL 88</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于用完即弃隐形眼镜，隐形眼镜护理液，特价（包括套装）固定价货品及杂物</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
             <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pro_cam_fis_logo.png"></div>
            <div class="offer-merchant-name"><h3>PRO CAM-FIS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/puyi_optical_logo.png"></div>
            <div class="offer-merchant-name"><h3>Puyi Optical</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购眼镜框连镜片或太阳眼镜可免费获赠精美礼品一份 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，配件及隐形眼镜产品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
             <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rabu_rabu_logo.png"></div>
            <div class="offer-merchant-name"><h3>Rabu Rabu</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，特定货品和寄卖专柜</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/satami_logo.png"></div>
            <div class="offer-merchant-name"><h3>Satami</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满800元购买正价货品可享9折</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shu_talk_logo.png"></div>
            <div class="offer-merchant-name"><h3>ShuTalk</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外95折选购特价货品</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sinequanone_logo.png"></div>
            <div class="offer-merchant-name"><h3>Sinequanone</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外95折选购特价货品（指定特价货品除外）</p>
            
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sports_corner_logo.png"></div>
            <div class="offer-merchant-name"><h3>Sports Corner</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品（固定价货品除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sports_house_logo.png"></div>
            <div class="offer-merchant-name"><h3>Sportshouse</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购指定正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购球拍/桨货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，特别指定货品和寄卖专柜</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/spur_logo.png"></div>
            <div class="offer-merchant-name"><h3>SPUR</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外97折选购特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tommy_hilfiger_logo.png"></div>
            <div class="offer-merchant-name"><h3>Tommy Hilfiger / Tommy Hilfiger Childrenswear / Tommy Hilfiger Denim</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，手表及香水产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tonino_laborghini_logo.png"></div>
            <div class="offer-merchant-name"><h3>Tonino Lamborghini</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外95折选购特价货品（5折或以下货品除外）</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于手表，珠宝和指定配饰</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/trippen_logo.png"></div>
            <div class="offer-merchant-name"><h3>Trippen</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价鞋款</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于定制鞋款，配饰和手袋</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twist_logo.png"></div>
            <div class="offer-merchant-name"><h3>TWIST</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以83折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于指定及特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <!--<div class="offer">
            <div class="offer-logo-holder"><img src="#"></div>
            <div class="offer-merchant-name"><h3>Undercover</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;HK$ 20 off upon spending of HK$ 200</p>
            </div>
            <div class="clear"></div>
            </div>-->
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/veeko_logo.png"></div>
            <div class="offer-merchant-name"><h3>Veeko</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;优惠期间以额外95折选购7折或以上货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wanko_logo.png"></div>
            <div class="offer-merchant-name"><h3>Wanko</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;优惠期间以额外95折选购7折或以上货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
        </div>
        <div class="tab-pane" id="tab-3">
            
            
            
            <div class="offer">
            
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ajisen_raman_logo.png"></div>
            <div class="offer-merchant-name"><h3>Ajisen Raman</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满60元（10％的服务费除外）可免费获得日式炸鸡1客 </p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bee_cheng_hiang_logo.png"></div>
            <div class="offer-merchant-name"><h3>Bee Cheng Hiang</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满300元购买正价肉类食品可享9折 </p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bridal_tea_house_logo.png"></div>
            <div class="offer-merchant-name"><h3>Bridal Tea House</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满100元可免费获得小食1客 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于堂食</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于外卖，到会和贵宾室</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fook_ming_tong_logo.png"></div>
            <div class="offer-merchant-name"><h3>Fook Ming Tong Tea Shop</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品 </p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ginza_bairin_logo.png"></div>
            <div class="offer-merchant-name"><h3>GINZA BAIRIN</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购主菜单中套餐可免费获得巨峰葡萄可尔必思1客 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于中环店及沙田店 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于公众假期及其前夕</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于堂食，不适用于午餐套餐</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每个套餐只可享用优惠一次 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与其他优惠，促销活动，餐券和宴会一同使用</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hung_fook_tong_logo.png"></div>
            <div class="offer-merchant-name"><h3>Hung Fook Tong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购正价药制龟苓膏可免费获得龟苓膏1客（价值HK $ 28）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/isabelle_logo.png"></div>
            <div class="offer-merchant-name"><h3>Isabelle</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品（婚礼系列除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lucques_tavern_logo.png"></div>
            <div class="offer-merchant-name"><h3>LUCQUES Tavern</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;堂食可以9折享用菜单上的食品及饮品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于元旦，情人节，母亲节，父亲节，感恩节和圣诞节假期（2014年12月21日至31日） </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每台只可以享用优惠一次</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/okashi_land_logo.png"></div>
            <div class="offer-merchant-name"><h3>Okashi Land</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满100元可享9折</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于现金券，组合货品（如“买1送1”，“10元3件”等）和兑换物品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于香港国际机场店及特价卖场</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ritz_carlton_logo.png"></div>
            <div class="offer-merchant-name"><h3>The Ritz-Carlton, Hong Kong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在餐厅和酒吧可享9折 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;适用于香港，澳门及海外地区发行的银联卡</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;并不适用于2014年1月1日，1月31日，2月1日至3日，2月14日（晚餐），4月5日，4月18日至21日，5月1日，5月6日，5月11日，6月2日，7月1日，9月8日（晚餐），9月9日，10月1日至2日，12月22日（晚餐），12月24日至26日和12月31日，和指定促销日</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与其他优惠及餐饮优惠券一同使用 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于最多10人 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于堂食和指定餐馆</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于上房服务 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于10％的服务费（以原价计算），宴会，多功能厅，私人房间租用和特殊节日/促销活动和派对菜单</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/watsons_wine_logo.png"></div>
            <div class="offer-merchant-name"><h3>Watson’s Wine</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满3888元购买红酒可免费获得精美礼品一份（价值400元）</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于香槟，汽酒，烈酒和酒花 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与Watson’s Wine礼券，Watson’s Wine Club Cellar优惠券和其他优惠一同使用</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wing_wah_cake_logo.png"></div>
            <div class="offer-merchant-name"><h3>Wing Wah Cake Shop</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于香港国际机场店及短期销售</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
        </div>
        <div class="tab-pane" id="tab-4">
            
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/acca_kappa_logo.png"></div>
            <div class="offer-merchant-name"><h3>Acca Kappa</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于套装及特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/angel_cosmetics_logo.png"></div>
            <div class="offer-merchant-name"><h3>Angel</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以75折选购指定正价货品及以95折选购其他货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满1200元购买正价货品可免费获得韩国Arumee护肤品套装1套</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apivita_logo.png"></div>
            <div class="offer-merchant-name"><h3>APIVITA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满1200元购买正价货品可享9折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bioderma_logo.png"></div>
            <div class="offer-merchant-name"><h3>BIODERMA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500元购买正价货品可免费获得50元优惠卷1张</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于新客户</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bondonail_logo.png"></div>
            <div class="offer-merchant-name"><h3>bonboNAIL in NAIL NAIL</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折试用修甲服务</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价指甲油和指甲印花产品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;适用于星期日至星期四，不适用于公众假期及其前夕和2014年1月15日至31日和12月10日至31日（只限Nail Nail）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clarins_logo.png"></div>
            <div class="offer-merchant-name"><h3>CLARINS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得护肤咨询和享用服务后可免费获得最适合你的护肤试用品3份</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人可只享受优惠一次</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/colourmix_logo.png"></div>
            <div class="offer-merchant-name"><h3>Colourmix</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购指定货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/crabtree_and_evelyn_logo.png"></div>
            <div class="offer-merchant-name"><h3>Crabtree & Evelyn</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fresh_line_logo.png"></div>
            <div class="offer-merchant-name"><h3>Fresh Line</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购2件正价货品可享95折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hk_medspa_logo.png"></div>
            <div class="offer-merchant-name"><h3>HK MEDSPA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折试用脱毛疗程</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ingrid_millet_logo.png"></div>
            <div class="offer-merchant-name"><h3>Ingrid Millet Paris</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipsa_logo.png"></div>
            <div class="offer-merchant-name"><h3>IPSA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以200元享用修眉服务，可兑换同等价格的IPSA产品和享用服务后获得免费试用品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人可只享受优惠一次 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kielhs_since_1851_logo.png"></div>
            <div class="offer-merchant-name"><h3>Kiehl’s Since 1851</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;展示银联卡可免费获得护肤咨询和享用服务后可免费获得最适合你的试用品3份</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/loccitane_logo.png"></div>
            <div class="offer-merchant-name"><h3>L’OCCITANE</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得试用品3份</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不適用於免税店 - THIS NEEDS TRANSLATING!!!!</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/meka_logo.png"></div>
            <div class="offer-merchant-name"><h3>Meka</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得头发分析和试用品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人只可享受优惠一次</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menard_logo.png"></div>
            <div class="offer-merchant-name"><h3>MENARD</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;首次消费满1000元可享9折及免费获得迎新礼品（包括BEAUNESS温泉精华液30ml和去角质保湿中药面膜20G，价值240元）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mioggi_logo.png"></div>
            <div class="offer-merchant-name"><h3>MIOGGI</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购首件正价保健货品可享6折及成为VIP会员</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nail_nail_logo.png"></div>
            <div class="offer-merchant-name"><h3>NAIL NAIL</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以8折试用GELeration美甲或修趾甲（使用LED凝胶指甲油）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价指甲油和指甲印花产品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;适用于星期日至星期四</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于公众假期及其前夕和2014年1月15日至31日和12月10日至31日 </p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nest_beauty_logo.png"></div>
            <div class="offer-merchant-name"><h3>Nest Beauty</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购2件正价货品可享95折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/orbis_logo.png"></div>
            <div class="offer-merchant-name"><h3>ORBIS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/organic_beauty_logo.png"></div>
            <div class="offer-merchant-name"><h3>ORGANIC BEAUTY</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sasa_logo.png"></div>
            <div class="offer-merchant-name"><h3>SaSa</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500元购买指定品牌（包括BRTC, CAUDALIE, COLLISTAR, DR.G, Dr.Jart+, Elizabeth Arden, Institut Esthederm, SUISSE PROGRAMME, La Colline, Methode SWISS, Neogence, SWISS BALANCE, TRANSVITAL and NUXE）可享95折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tefutefu_logo.png"></div>
            <div class="offer-merchant-name"><h3>TefuTefu Skin Card</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tony_moly_logo.png"></div>
            <div class="offer-merchant-name"><h3>TONY MOLY</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满200元可免费获得面膜一片</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
        </div>
        <div class="tab-pane" id="tab-5">
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/catalo_logo.png"></div>
            <div class="offer-merchant-name"><h3>CATALO</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于北角店和寄售专柜 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与CATALO钻石/白金VIP卡一同使用</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/crcare_logo.png"></div>
            <div class="offer-merchant-name"><h3>CRCare</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满1000元购买指定货品可免费获得CRCare 阿胶膏75g（价值98元）</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每张发票只可享用优惠一次</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于人参，冬虫夏草，燕窝，草本产品，海味干货，罐头鲍鱼，奶粉，婴儿用品，寄售专柜，兑换和固定价货品，指定特价货品和CRCare礼券 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于VIP日</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eu_yan_sang_logo.png"></div>
            <div class="offer-merchant-name"><h3>Eu Yan Sang</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/healthplus_logo.png"></div>
            <div class="offer-merchant-name"><h3>HealthPlus</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满100元购买正价货品 (固定价货品除外) 可享9折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home_of_swallows_logo.png"></div>
            <div class="offer-merchant-name"><h3>Home of Swallows</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于冬虫夏草，陈列品及批发产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/imperial_birds_nest_logo.png"></div>
            <div class="offer-merchant-name"><h3>Imperial Bird’s Nest</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价燕窝产品 (1两或以上)</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以78折选购正价冬虫夏草产品 (1两或以上)</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不可与其他优惠，特价货品，批发和大量购买折扣商品，会员折扣，联合促销，现金优惠券一同使用</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于特许专柜</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nam_pei_hong_logo.png"></div>
            <div class="offer-merchant-name"><h3>Nam Pei Hong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;额外95折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nest_1964_logo.png"></div>
            <div class="offer-merchant-name"><h3>Nest 1964</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购新到燕窝产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pak_shing_tong_logo.png"></div>
            <div class="offer-merchant-name"><h3>Pak Shing Tong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满300元购买PST高级中药保健品系列可享88折 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于零售价格的纯珍珠粉，纯牛黄粉，纯猴枣散，纯野生花旗参粉，纯韩文红长白山野人参粉，纯石斛兰花，纯鹿茸，纯花旗参，纯川贝粉，纯石斛兰花粉，纯花旗参粉，田七粉（熟）和田七粉</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于现金券</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/quality_healthcare_centre_logo.png"></div>
            <div class="offer-merchant-name"><h3>Quality HealthCare Medical Centre</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价体检套餐</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wai_yuen_tong_logo.png"></div>
            <div class="offer-merchant-name"><h3>Wai Yuen Tong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价中药，保健产品和汤系列 (御酒 (5L)除外) </p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价中药材，海味及燕窝 (包括冬虫夏草) </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;消费满800元可免费获得花旗参1两 (价值150元) </p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            
        </div>
        <div class="tab-pane" id="tab-6">
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/benetton_logo.png"></div>
            <div class="offer-merchant-name"><h3>BENETTON</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满200元购买正价货品可获9折 (固定价货品除外)</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chicco_logo.png"></div>
            <div class="offer-merchant-name"><h3>CHICCO</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ella_logo.png"></div>
            <div class="offer-merchant-name"><h3>ELLA /ella bits</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满300元可获20元折扣和1年免费ELLA VIP会籍</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/elle_logo.png"></div>
            <div class="offer-merchant-name"><h3>ELLE Kids</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满200元购买正价货品可获9折 (固定价货品除外)</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eugene_baby_logo.png"></div>
            <div class="offer-merchant-name"><h3>Eugene Baby</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满300元购买正价货品可获95折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/stride_rite_logo.png"></div>
            <div class="offer-merchant-name"><h3>Stride Rite</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价童装鞋</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价，特价货品和校鞋</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/toonsland_logo.png"></div>
            <div class="offer-merchant-name"><h3>ToonsLand</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满200元购买正价货品可享9折 (固定价货品除外)</p>
            </div>
            <div class="clear"></div>
            </div>
            
           
            
            
            
        </div>
        <div class="tab-pane" id="tab-7">
        
        
        <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ask_digital_shop_logo.png"></div>
            <div class="offer-merchant-name"><h3>ASK DIGITAL SHOP</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以额外95折选购特价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000元购买ASK智能电话或平板计算机可获得100 元折扣</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chung_yuen_electrical_logo.png"></div>
            <div class="offer-merchant-name"><h3>Chung Yuen Electrical</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000元可获得100 元折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于耳机，Apple产品，计算机，固定价及特价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/citylink_electronics_logo.png"></div>
            <div class="offer-merchant-name"><h3>Citylink Electronics</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000元可免费获得储值电话卡1张(价值 48元)</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每月会送出100张卡</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dg_lifestyle_logo.png"></div>
            <div class="offer-merchant-name"><h3>DG Lifestyle</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购手提电脑可免费获得指定LS-NY手提电脑套1个</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人只可享用优惠一次</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dream_team_logo.png"></div>
            <div class="offer-merchant-name"><h3>Dream Team</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满3000元购买正价货品可享95折</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于Apple产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fortress_logo.png"></div>
            <div class="offer-merchant-name"><h3>FORTRESS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000元购买单一正价货品可获得100 元折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于指定货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于香港国际机场店</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/harbour_city_logo.png"></div>
            <div class="offer-merchant-name"><h3>Harbour City</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在Harbour City内任何分店每消费100元可免费获得10元美食卷2张</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每次最多可兑换20张优惠券 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;必须亲自到Harbour City港威商场二楼客户服务柜台兑换优惠券</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;兑换优惠券需出示符合条件的银联卡，商户的机印发票和相应的银联卡签账单据</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每张单据只可兑换优惠券一次</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于八达通卡储值，礼品卡储值，购买礼券，账单支付和手写收据</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于Harbour City租户的销售人员和员工</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;请参考10元美食券上所示的相应条款和条件</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/k11_art_mall_logo.png"></div>
            <div class="offer-merchant-name"><h3>K11 Art Mall</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500元可免费获得指定单程过境巴士车票2张</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满300元可免费获得指定单程过境巴士车票1张</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;有效期至2014年4月30日。有关2014年5月1日至12月31日的优惠详情，请参考K11 Art Mall内的宣传单张。</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;兑换时需出示有效的收据 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每张收据只可参加一次商场优惠 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人每天最多可以兑换2张门票</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lalique_logo.png"></div>
            <div class="offer-merchant-name"><h3>LALIQUE</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满5000元可享9折（限量版货品除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/madame_tussauds_logo.png"></div>
            <div class="offer-merchant-name"><h3>Madame Tussauds Hong Kong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;选购正价成人日间入场票可享20元折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人每次最多可以购买2张门票</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ocean_park_logo.png"></div>
            <div class="offer-merchant-name"><h3>Ocean Park</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购日间门票（每次最多购买4张）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在餐厅（Middle Kingdom, McDonald餐厅和小食亭除外）用餐可享9折</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_one_logo.png"></div>
            <div class="offer-merchant-name"><h3>Page One</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于书券，杂志，玩具，配饰，折扣和固定价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ninki_denki_logo.png"></div>
            <div class="offer-merchant-name"><h3>Panasonic Showroom / Ninki Denki</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以最低8折选购指定家电，保健及美容护理产品，耳机</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sincere_logo.png"></div>
            <div class="offer-merchant-name"><h3>Sincere Department Store</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价男装/女装，男装/女装鞋，童装鞋，手袋及体育部货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价电器产品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于指定货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sky_100_logo.png"></div>
            <div class="offer-merchant-name"><h3>Sky100 Hong Kong Observation Deck</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价单次门票</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;门票必需在一楼售票中心选购</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于2014年1月26日，2月1日，2月14日，7月1日，10月1日，12月24日至26日和12月31日 </p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;Sky100的开放时间可能会临时改变，请到www.sky100.com.hk留意规则和更新</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/skywards_travel_logo.png"></div>
            <div class="offer-merchant-name"><h3>Skywards Travel</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可获得免费手提袋一个</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/suning_logo.png"></div>
            <div class="offer-merchant-name"><h3>Suning</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000元购买单一货品可获得100 元折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于Apple产品，Sony手提电脑及固定价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/excelsior_hotel_logo.png"></div>
            <div class="offer-merchant-name"><h3>The Excelsior, Hong Kong</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以最优惠房价连续2晚或以上入住行政楼层的客房或套房，并享有以下专属特权 </p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;每次入住可免费享用60分钟的全身按摩（需提前预订）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在行政酒廊免费享用行政早餐，下午茶，小食和鸡尾酒</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;免费享用客房内上网服务</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在指定餐厅和酒吧享有8折</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在怡东酒店健身中心以8折享用面部及身体护理</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;免费升级到下一个房间级别</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;收取10％服务费</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需透过电话或发电邮至exhkg-reservations@mohg.com提前预约，而且必须通过银联信用卡担保</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;此优惠及免费升级需视情况而提供</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tom_lee_music_logo.png"></div>
            <div class="offer-merchant-name"><h3>Tom Lee Music</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满200元可以9折购买音乐刊物，CD或DVD（特价和指定货品除外）</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;一次性付款参加12节流行数码钢琴速成班（16岁或以上）可享有港币100元的折扣和港币30元报名费的减免</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wilson_communications_logo.png"></div>
            <div class="offer-merchant-name"><h3>Wilson Communications</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以90折购买正价配件（指定货品除外）</p>
            </div>
            <div class="clear"></div>
            </div>
            
        
        
        </div>
        <div class="tab-pane" id="tab-8">
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/angel_cosmetics_logo.png"></div>
            <div class="offer-merchant-name"><h3>Angel</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以75折选购指定正价货品及以95折选购其他货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满800澳币可免费获得韩国Arumee护肤品套装一套</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/belle_logo.png"></div>
            <div class="offer-merchant-name"><h3>BeLLE</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/city_of_dreams_logo.png"></div>
            <div class="offer-merchant-name"><h3>City of Dreams Macau</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购水舞间A，B，C标准成人门票</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;只适用于售票处购买</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人每场最多可以购买4张</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clarins_logo.png"></div>
            <div class="offer-merchant-name"><h3>CLARINS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得一次皮肤美容咨询服务，享用服务后可免费获得护肤试用品3支</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人只可享用优惠一次</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/colourmix_logo.png"></div>
            <div class="offer-merchant-name"><h3>Colourmix</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购指定货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eu_yan_sang_logo.png"></div>
            <div class="offer-merchant-name"><h3>Eu Yan Sang</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fortress_logo.png"></div>
            <div class="offer-merchant-name"><h3>FORTRESS</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满2000澳币购买单一货品可获得100 澳币折扣</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于指定货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grand_view_hotel_logo.png"></div>
            <div class="offer-merchant-name"><h3>Grandview Hotel Macau</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折享用晚餐</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于星期日及公众假期</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于宴会，特殊活动和促销活动</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ipsa_logo.png"></div>
            <div class="offer-merchant-name"><h3>IPSA</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以200澳币享用修眉服务，可兑换同等价格的IPSA产品，享用服务后可免费获得试用品一份</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;每位持卡人只可享用优惠一次</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;需提前预订</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leo_logo.png"></div>
            <div class="offer-merchant-name"><h3>LEO</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/le_saunda_logo.png"></div>
            <div class="offer-merchant-name"><h3>Le Saunda</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以88折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lukfook_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>Lukfook Jewellery</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以92折选购钻石，天然翡翠（硬玉），珍珠，宝石和K金货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价，特价，授权和收藏系列货品和手表</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fishermans_wharf_logo.png"></div>
            <div class="offer-merchant-name"><h3>Macau Fisherman’s Wharf</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折享用晚餐</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于香港及澳门的公众假期</p>
            </div>
            <div class="clear"></div>
            </div>
            
             <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/morellato_logo.png"></div>
            <div class="offer-merchant-name"><h3>Morellato</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/optical_88_logo.png"></div>
            <div class="offer-merchant-name"><h3>OPTICAL 88</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于用完即弃隐形眼镜，隐形眼镜护理液，特价（包括套装）货品及杂项</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/oriental_watch_company_logo.png"></div>
            <div class="offer-merchant-name"><h3>Oriental Watch Company</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;任何消费可免费获得精美礼品一份</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sasa_logo.png"></div>
            <div class="offer-merchant-name"><h3>SaSa</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;消费满500澳币可以95折选购指定品牌（包括BRTC，CAUDALIE，COLLISTAR，Dr.G，Dr.Jart+，Elizabeth Arden, Institut, Esthederm, SUISSE PROGRAMME, La Colline, Methode SWISS, Neogence, SWISS BALANCE, TRANSVITAL and NUXE）</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tiffany_fleur_logo.png"></div>
            <div class="offer-merchant-name"><h3>Tiffany Fleur</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折订购本地花卉</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以95折订购海外花卉</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <!--<div class="offer">
            <div class="offer-logo-holder"><img src="#"></div>
            <div class="offer-merchant-name"><h3>Tiffany Spa & Beauty</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;10% off on massage service</p>
            </div>
            <div class="clear"></div>
            </div>-->
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tommy_hilfiger_logo.png"></div>
            <div class="offer-merchant-name"><h3>Tommy Hilfiger / Tommy Hilfiger Childrenswear</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以9折选购正价货品</p>
            <p><i class="fa fa-minus-circle" style="color: #f0191e;"></i>&nbsp;&nbsp;&nbsp;不适用于固定价货品，手表及香水产品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tsl_jewellery_logo.png"></div>
            <div class="offer-merchant-name"><h3>TSL Jewellery</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;不适用于埃斯特雷亚钻石，未镶嵌的钻石，纯金，K金，铂金，特价和促销货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/veeko_logo.png"></div>
            <div class="offer-merchant-name"><h3>Veeko</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在特价时段以额外95折选购7折或以上货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            <div class="offer">
            <div class="offer-logo-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wanko_logo.png"></div>
            <div class="offer-merchant-name"><h3>Wanko</h3>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;以85折选购正价货品</p>
            <p><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;在特价时段以额外85折购买7折或以上货品</p>
            </div>
            <div class="clear"></div>
            </div>
            
            
        </div>
    </div>
</div>
                    
                    

				</div>
			</section>
            
            
            <!--
			=================================
			FEATURES SECTION
			=================================
			-->
			<section id="faqs" class="features-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">常见问题解答</h2>
					<div class="row">
                    <p class="wow fadeIn text-center animated" data-wow-duration="1s">这是我们收到T24中国银联卡持卡人最常问的问题汇总</br>如果没有找到您所要的答案，<a href="#contact">请与我们联系</a></p>
					</div>

					<div class="featuers-list-wrapper row">

					<div class="col-md-12">

						<div id="faq">

								<!--<div class="question">

								<div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>How does the Transact24 China UnionPay card work?</strong></div></div></div>
                                
                                <div class="text">
<p>Praesent cursus ex non diam tincidunt, lacinia scelerisque augue luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque mattis dui nec lorem gravida commodo. Nam non velit suscipit, dapibus dui in, vehicula turpis. Cras ullamcorper lacus condimentum mattis gravida. Ut pretium euismod odio, ac lobortis nunc bibendum vel.</p>
								</div>
                                
                                </div>
                                
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>资金如何转入卡内</strong></div></div></div>
                                
                                <div class="text">
<p>Transact24中国银联卡可充值5万元港币。可通过柜台或银行转帐进行充值。下午3点前的充值可于第二个工作日的11点前到账并使用。</p>
								</div>
                                
                                </div>
                                <!--commented as not yet supported
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>怎样查看详细的交易明细及历史？</strong></div></div></div>
                                
                                <div class="text">
<p>持卡人可通过7X24小时全天候在线的账户管理设备查看账户明细及交易资料。点击 <a href="#">账户管理</a>进入管理页面。</a></p>
								</div>
                                
                                </div>
                                -->
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>如何保证用卡安全？万一预付卡丢失了或被盗了怎么办？</strong></div></div></div>
                                
                                <div class="text">
<p>每张预付卡都有一个唯一的PIN码。所有支付都经由安全通道进行。如丢卡或被盗时立即冻结卡内资金并替换该卡。损失只限于卡内剩余的金额</p>
								</div>
                                
                                </div>
                                
                               
                                
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>我何时能收到我的预付卡？</strong></div></div></div>
                                
                                <div class="text">
<p>港澳申请人士需2-3个工作日内收到。中国大陆申请人士需7-10个工作日即可收到。如果你不想在此时间段内签收您的预付卡，请致电我们的客服热线：+852 2851 0145</p>
								</div>
                                
                                </div>
                                
                                <!--div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>How can I apply for a card?</strong></div></div></div>
                                
                                <div class="text">
<p>You can apply online by clicking <a href="#">Apply Now</a>. You will need a clear scanned colour copy of your Passport or ID card to complete your application.</p>
								</div>
                                
                                </div>-->
                                
                                
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>我可以申请多张预付卡吗？</strong></div></div></div>
                                
                                <div class="text">
<p>每用户只可申请2张Transact24中国银联卡</p>
								</div>
                                
                                </div>
                                
                                
                                <div class="question">
                                
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>预付卡有利息收入吗？</strong></div></div></div>
                                
                                <div class="text">
<p>预付卡上的资金是没有利息收入的。</p>
								</div>
                                
                                </div>
                                
                                <div class="question">
                                
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>预付卡有到期日吗？</strong></div></div></div>
                                
                                <div class="text">
<p>有，Transact24中国银联卡有效期为3年。如果持卡人用卡频率较高，我们会提供换卡服务。有效日期印在卡片的正面。</p>
								</div>
                                
                                </div>
                                
                                <div class="question">
                                
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>预付卡要保持一个最低余额吗？</strong></div></div></div>
                                
                                <div class="text">
<p>不需要</p>
								</div>
                                
                                </div>
                                
                                
                                
                                
                                
                                <div class="question">
                                
                                <div class="title"><div class="title-holder"><div class="title-holder-center"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<strong>我的预付卡可以在境外/国外使用吗？</strong></div></div></div>
                                
                                <div class="text">
<p>您可以在全球任何有中国银联商标的商户或柜员机上使用您的Transact24中国银联预付卡。请注意，中国银正处于迅速扩展，有某些柜员机或小店铺可能暂时未能接受银联支付。我们建议，例如在前往某餐馆前，提前咨询一下该商户是否接受银联支付或准备多一种支付方式以防万一。</p>
								</div>
                                
                                </div>
                                                                
							</div><!--faq-->
                                
						</div><!--col-md-12-->
                    
                    </div><!--row-->

				</div><!--container-->
			</section><!--faq-->

			

			

			<!--
			=================================
			TESTIMONIALS SECTION
			=================================
			-->
			<!--<section id="testimonials" class="testimonials-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">-->

				<!-- BACKGROUND OVERLAY -->
				<!--<div class="accent-background-overlay"></div>

				<div class="container">
                
                <h2 class="section-heading testimonials-heading text-center wow fadeIn" data-wow-duration="1s">What Our Cardholder Say</h2>
                
                <style>
                
				.section-heading.testimonials-heading:after {
					background-color: #ffffff;
				}
                
                </style>-->

					<!-- TESTIMONIALS -->
					<!--<div class="testimonials-carousel">
						<ul class="testimonial-items owl-carousel wow fadeIn" data-wow-duration="1s">
							<li>
								<div class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in blandit sapien. Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis.</div>
								<div class="testimonial-name">John Doe, CEO of Company Inc.</div>
							</li>
							<li>
								<div class="testimonial-text">Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis, eu vehicula nibh condimentum. Phasellus suscipit dui fermentum eleifend suscipit.</div>
								<div class="testimonial-name">Jane Doe, Wedding Photographer</div>
							</li>
							<li>
								<div class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in blandit sapien. Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis.</div>
								<div class="testimonial-name">John Doe, CEO of Company Inc.</div>
							</li>
							<li>
								<div class="testimonial-text">Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis, eu vehicula nibh condimentum. Phasellus suscipit dui fermentum eleifend suscipit.</div>
								<div class="testimonial-name">Jane Doe, Wedding Photographer</div>
							</li>
						</ul>
					</div>

				</div>
			</section>-->

<?php get_footer();?>
