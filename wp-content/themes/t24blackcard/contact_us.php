<?php
try{
	if($_POST['c_subject']!='' && 
		$_POST['c_name']!='' &&
		$_POST['c_email']!='' &&
		$_POST['c_msg']!='' &&
		$_POST['c_t']!='' &&
		$_POST['c_t']=='fqwweoyhm$ndvyce56228w65q7441121'){
		/*include_once "smtp.php";
		
		$smtpserver = "winters.swishmail.com";
		$prot=2525;
		$smtpuser = "goffee.ko"+"@"+"transact24.com";
		$smtppwd = "goffee0312gao";
		$mailtype = "HTML";
		$sender="noreply"+"@"+"t24blackcard.com";
		/* SMPT 
		$smtpserver = "127.0.0.1"; 
		$prot=25; 
		$smtpuser = "";
		$smtppwd = "";
		$mailtype = "HTML";
		*/
		
		//$smtp =   new smtp($smtpserver,$prot,true,$smtpuser,$smtppwd,$sender);
		
		/* Mail Note */
		$body="Name:".$_POST['c_name']."<br/>E-mail:".$_POST['c_email']."<br/>Main message:".$_POST['c_msg'];

		$email = $_POST['c_email'];

		$auto_to = "support"."@"."t24blackcard.com";
		$auto_to = "anthony.lim"."@"."transact24.com";
		//$nameto="goffee.ko";
		$subject="[Contact us] ".$_POST['c_subject'];
		
		$auto_headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
		$auto_headers .= "From: \"T24 Blackcard\" <boarding@t24blackcard.com>\r\n";
		$auto_headers .= "Reply-To: " .  $email . "\r\n";
		$auto_message = utf8_decode($body);  
		$send = mail($auto_to, $subject, $auto_message, $auto_headers);
		
		//$message="test";
		//$issend=authMail($from, $namefrom, $to, $nameto, $subject, $message);';
		//$send=$smtp->sendmail($to,$sender,$form_name,$subject,$cc,$body,$mailtype);
		if($send==1){
			die('{"status":200}');
		}else{
			die('{"status":500, "cc":"'.$cc.'", "to":"'.$to.'"}');
			//echo "response锛?.$this->smtp->logs;
		}

	}else{
		die('{"status":404}');
	}
}
catch(Exception $ex){
	echo $ex->getMessage();
}
