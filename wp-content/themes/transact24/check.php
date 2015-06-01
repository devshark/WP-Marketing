<?php

if( !isset($_GET['template_uri']) or !isset($_GET['send']) or $_GET['send'] !== 'send_mail' )
{ die('{"status":"404"}'); }

$template_uri = $_GET['template_uri'];

require_once $template_uri . '/modules/securimage/securimage.php';
require_once $template_uri . '/inc/contact.constants.php';

  function get_department(){
  		return $_GET['department'] ?: '';
  }
  
  function get_subject(){
    return "Transact24 enquiry";
  }

  function get_from(){
    return $_GET['email'] ?: '';
  }

	function get_message(){
    return "Name: ".$_GET['contactname'].
           "\nCompany Name: ".$_GET['company'].
           "\nE-mail: ".$_GET['email'].
           "\nPhone: ".$_GET['phone'].
           "\nWebsite: ".$_GET['website'].
           "\nDepartment: ".$_GET['department'].
           "\nMessage: ".$_GET['message']." " ;
  }

function get_lang(){
	return $_GET['lang'] && in_array($_GET['lang'], array('zh_cn', 'zh_hk')) ? $_GET['lang'] : "";
}

if($_GET['send']){

	$securimage = new Securimage();
	if($securimage->check($_GET['captcha_code']) == false){
		unset($_SESSION['redirect_contact_page']);
		//$_SESSION['captcha_error'] = TRUE;
		//$_SESSION['captcha_code'] = $_GET['captcha_code'];
		//header('location:/'.get_lang().'?m=f&'.$_SERVER['QUERY_STRING']);
		//exit();
		//echo show_captcha_error();
		die('{"status":406}');
	}
	else{
		$department = get_department();

		$email_list = $option_and_email_map[$department];
		$to = implode(",", $email_list);


		$subject = get_subject();
		$from = get_from();
		$message = get_message();
					 
		$mail = @mail($to, $subject, $message, $from );

		if($mail){
			//echo show_result();
			//unset($_SESSION['captcha_error']);
			//$_SESSION['redirect_contact_page'] = TRUE;
			//$_SESSION['captcha_code'] = $_GET['captcha_code'];
			
			
			if ($department == "Card Processing"){
			
			
			$auto_message = "Dear ".$_GET['contactname'].","."<br>\n<br>\n";
$auto_message .= "Thank you for considering Transact24 for the provision of card processing services."."<br>\n<br>\n";
$auto_message .= "We have received your query and will review the information provided."."<br>\n<br>\n";
$auto_message .= "Please note that the process to set up a merchant account can take some time as we work with banks globally who all have their own procedures, which lead to varied response times."."<br>\n<br>\n";
$auto_message .= "Also note that we would require further information to prepare your application for a merchant account."."<br>\n<br>\n";
$auto_message .= "A typical application goes through the following processes/stages:"."<br>\n<br>\n";
$auto_message .= "<strong>"."Stage 1"."</strong>"." - where we are now ("."&lt;"."24 hours)"."<br>\n<br>\n";
$auto_message .= "Compliance Checks: Merchant website and logins are checked to confirm compliance with card scheme rules.  Logins are required;"."<br>\n<br>\n";
$auto_message .= "<strong>"."Stage 2"."</strong>"." - Application Process ("."&lt;"."24 hours on receipt of duly completed forms and all attachments required)"."<br>\n<br>\n";
$auto_message .= "Pre-Application: Our Application form is despatched to you for completion requesting a list of documents to be attached.  We check to ensure that all documents have been received and will suffice;"."<br>\n<br>\n";
$auto_message .= "Security Checks: Security checks are done to ensure that the Directors and Owners pass the prerequisites of the card scheme rules;"."<br>\n<br>\n";
$auto_message .= "Motivation: If the application passes the scrutiny of the internal processes, a supporting motivation is attached to the application to recommend that the bank grant a merchant account;"."<br>\n<br>\n";
$auto_message .= "Pre-Application Despatched to Bank: The Pre-Application is despatched to our partner banks for consideration.  The banks have their own internal procedures and response times which vary from bank to bank.  Often pre-applications are sent to more than one bank to offer you as merchant choices and the option of distributed processing."."<br>\n<br>\n";
$auto_message .= "<strong>"."Stage 3"."</strong>"." - Bank/Acquirer Approval (up to 1 week)"."<br>\n<br>\n";
$auto_message .= "Approval and Contracts: Should one or more banks approve your application; we send you a proposal for your acceptance and our contract for signature.  Thereafter we send full bank application forms (very similar to the pre-application) for completion, the bank(s) may request additional or original documentation and may require incorporation of a suitable legal entity in a specific jurisdiction, and finally, the bank contract(s) for your signature"."<br>\n<br>\n";
$auto_message .= "Opening of Merchant Account: The bank(s) open your merchant account and set up an appropriate MID (merchant identification) profile;"."<br>\n<br>\n";
$auto_message .= "<strong>"."Stage 4"."</strong>"." - Integration (±3 days)"."<br>\n<br>\n";
$auto_message .= "Integration and Testing: Once the contracts are signed, we send our API (application protocol interface) for integration and testing. On successful testing, you can go live!"."<br>\n<br>\n";
$auto_message .= "We will endeavour to procure completion of the processes outline above as in short a period as possible and keep you posted every step of the way. Please note that timely receipt of complete and accurate information will significantly expedite the aforesaid processes."."<br>\n<br>\n";
$auto_message .= "Should you have any questions, please do not hesitate to contact us for clarity or assistance."."<br>\n<br>\n";
$auto_message .= "Yours sincerely,"."<br>\n<br>\n";
$auto_message .= "Transact24 Boarding Team"."<br>\n<br>\n<br>\n";
$auto_message .= "Merchant Services"."<br>\n<br>\n<br>\n";
$auto_message .= "e. boarding@transact24.com"."<br>\n<br>\n";
$auto_message .= "t. +852 2851 0145"."<br>\n<br>\n";
$auto_message .= "<img src=\"http://www.transact24.com/sites/all/themes/transact24/images/logo.png\">"."<br>\n<br>\n";
$auto_message .= "CONFIDENTIALITY CAUTION. If you have received this communication in error please note that it is intended for the addressee only, is privileged and confidential and dissemination or copying is prohibited.  Please notify us immediately by telephone and return the original message to the above address at our cost.";

 $auto_to = $_GET['email']; //$email;
 $auto_headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $auto_headers .= "From: \"Transact24\" <boarding@transact24.com>\r\n";
 $auto_headers .= "Reply-To: " .  $email . "\r\n";
 $auto_message = utf8_decode($auto_message);  
 mail($auto_to, "RE: Transact24 Merchant Services", $auto_message, $auto_headers);
			
				
			}
			
			//header('location:/'.get_lang().'?m=s');
			echo '{"status":200}';
			//echo "<script>window.location.href='/';</script>";
			//exit();
		}
	}
}

//session_destroy();
