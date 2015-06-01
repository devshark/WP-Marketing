<?php
	function get_language(){
		$languages = array(
			'header' => array(
				'sales_call' => 'For a Sales Advisor Call',
				'menu_home' => 'Home',
				'menu_about' => 'About',
				'menu_contact' => 'Contact',
				'menu_solutions' => 'Solutions',
				'menu_blog' => 'Blog'
			),
			'contact' => array(
				'contact_h2' => 'Setting up your payments solution starts with contacting our product teams. Let\'s get talking',
				'contact_name' => 'Name',
				'contact_email' => 'Email',
				'contact_phone' => 'Phone',
				'contact_website' => 'Website',
				'contact_company' => 'Company',
				'contact_department' => 'Department',
				'contact_message' => 'Message',
				'contact_code' => 'Please type the validation code shown.',
				'contact_optional' => 'optional',
				'contact_btn_send' => 'Send',
				'message_close' => 'Close',
				'message_title_code' => 'WARNING:',
				'message_info_code' => 'The security code entered was incorrect. Please try again.',
			    'message_title_send' => 'INFORMATIONS:',
				'message_info_send' => 'Thank you for contacting us. We\'ll be in touch shortly'
			),
			'body' => array(
				'latest_news' => 'Latest news',
				'partner' => 'Our Partners',
			    'back' => 'Back'
			),
			'footer' => array(
				'readmore' => 'Read More'
			),
			'blocks' => array(
				'title_recent_posts' => 'Recent blog posts',
				'title_read_more_posts' => 'Read the latest blog entries.',
				'text_read_more_posts' => 'more'
			)
		);
		return $languages;
	}
?>
