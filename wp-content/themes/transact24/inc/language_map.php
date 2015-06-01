<?php
require_once(get_template_directory() . '/classes/post.language.php');
require_once(get_template_directory() . '/i18n/handle_i18n.php');
$base_path = home_url('/');
$l = get_current_language(true);
$_LANG = $l['LANG'];
$_CODE = $l['CODE'];
unset($l);
try{

	$front_page = new PostLanguagePair( new PostLanguageMapper(LANG_EN , LANG_EN) );
	$front_page->addPair( new PostLanguageMapper(LANG_CN, LANG_CN));
	$front_page->addPair( new PostLanguageMapper(LANG_HK, LANG_HK));

	$page_about_index = new PostLanguagePair( new PostLanguageMapper(104 , LANG_EN) );
	$page_about_index->addPair( new PostLanguageMapper(108, LANG_CN));
	$page_about_index->addPair( new PostLanguageMapper(106, LANG_HK));

	$page_ach_processing = new PostLanguagePair( new PostLanguageMapper(33 , LANG_EN) );
	$page_ach_processing->addPair( new PostLanguageMapper(88, LANG_CN));
	$page_ach_processing->addPair( new PostLanguageMapper(86, LANG_HK));

	$page_copyright = new PostLanguagePair( new PostLanguageMapper(43 , LANG_EN) );
	$page_copyright->addPair( new PostLanguageMapper(47, LANG_CN));
	$page_copyright->addPair( new PostLanguageMapper(45, LANG_HK));

	$page_about = new PostLanguagePair( new PostLanguageMapper(21 , LANG_EN) );
	$page_about->addPair( new PostLanguageMapper(100, LANG_CN));
	$page_about->addPair( new PostLanguageMapper(76, LANG_HK));

	$page_alipay_solution = new PostLanguagePair( new PostLanguageMapper(31 , LANG_EN) );
	$page_alipay_solution->addPair( new PostLanguageMapper(84, LANG_CN));
	$page_alipay_solution->addPair( new PostLanguageMapper(82, LANG_HK));
	
	$page_card_processing = new PostLanguagePair( new PostLanguageMapper(151 , LANG_EN) );
	$page_card_processing->addPair( new PostLanguageMapper(78, LANG_CN));
	$page_card_processing->addPair( new PostLanguageMapper(80, LANG_HK));

	$page_china_unionPay = new PostLanguagePair( new PostLanguageMapper(29 , LANG_EN) );
	$page_china_unionPay->addPair( new PostLanguageMapper(57, LANG_CN));
	$page_china_unionPay->addPair( new PostLanguageMapper(90, LANG_HK));
	
	$page_prepaid_cards = new PostLanguagePair( new PostLanguageMapper(18 , LANG_EN) );
	$page_prepaid_cards->addPair( new PostLanguageMapper(110, LANG_CN));
	$page_prepaid_cards->addPair( new PostLanguageMapper(117, LANG_HK));

	$page_travel_insurance = new PostLanguagePair( new PostLanguageMapper(23 , LANG_EN) );
	$page_travel_insurance->addPair( new PostLanguageMapper(69, LANG_CN));
	$page_travel_insurance->addPair( new PostLanguageMapper(71, LANG_HK));

	$page_white_label_gateway = new PostLanguagePair( new PostLanguageMapper(27 , LANG_EN) );
	$page_white_label_gateway->addPair( new PostLanguageMapper(114, LANG_CN));
	$page_white_label_gateway->addPair( new PostLanguageMapper(112, LANG_HK));

	$page_virtual_prepaid_cards = new PostLanguagePair( new PostLanguageMapper(122 , LANG_EN) );
	$page_virtual_prepaid_cards->addPair( new PostLanguageMapper(136, LANG_CN));
	$page_virtual_prepaid_cards->addPair( new PostLanguageMapper(149, LANG_HK));

	$page_careers = new PostLanguagePair( new PostLanguageMapper(130 , LANG_EN) );
	$page_careers->addExplicit(132, LANG_CN);
	$page_careers->addExplicit(126, LANG_HK);

	$page_didyouknow = new PostLanguagePair( new PostLanguageMapper(41 , LANG_EN) );
	$page_didyouknow->addExplicit(55, LANG_CN);
	$page_didyouknow->addExplicit(102, LANG_HK);

	$page_our_partners = new PostLanguagePair( new PostLanguageMapper(25 , LANG_EN) );
	$page_our_partners->addExplicit(25, LANG_CN);
	$page_our_partners->addExplicit(25, LANG_HK);

	$page_our_links = new PostLanguagePair( new PostLanguageMapper(138 , LANG_EN) );
	$page_our_links->addExplicit(141, LANG_CN);
	$page_our_links->addExplicit(143, LANG_HK);

	$page_contact_us = new PostLanguagePair( new PostLanguageMapper(35 , LANG_EN) );
	$page_contact_us->addExplicit(37, LANG_CN);
	$page_contact_us->addExplicit(39, LANG_HK);

	$page_adv_1 = new PostLanguagePair( new PostLanguageMapper(49 , LANG_EN) );
	$page_adv_1->addExplicit(51, LANG_CN);
	$page_adv_1->addExplicit(53, LANG_HK);

	$page_adv_2 = new PostLanguagePair( new PostLanguageMapper(63 , LANG_EN) );
	$page_adv_2->addExplicit(61, LANG_CN);
	$page_adv_2->addExplicit(59, LANG_HK);
	
	$page_adv_3 = new PostLanguagePair( new PostLanguageMapper(74 , LANG_EN) );
	$page_adv_3->addExplicit(65, LANG_CN);
	$page_adv_3->addExplicit(67, LANG_HK);
	
	$block_about_t24 = new PostLanguagePair( new PostLanguageMapper(205 , LANG_EN) );
	$block_about_t24->addExplicit(209, LANG_CN);
	$block_about_t24->addExplicit(207, LANG_HK);
	
	$page_copyright = new PostLanguagePair( new PostLanguageMapper(43 , LANG_EN) );
	$page_copyright->addExplicit(47, LANG_CN);
	$page_copyright->addExplicit(45, LANG_HK);

	$i18n_arr = load_i18n_result($_CODE);
	$wp_active_languages = get_active_languages();
	
	//echo '<pre>';
	//var_dump($page_careers->getPost(LANG_CN));
	//echo '</pre>';

}catch(PostLanguageException $plex)
{
	if(WP_DEBUG){
		echo '<h1>'.$plex->getMessage().'</h1>';
	}
}catch(LanguageNotDetectedException $ldex)
{
	if(WP_DEBUG){
		echo '<h1>'.$ldex->getMessage().'</h1>';
	}
}
