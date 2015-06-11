<?php
try{
	if($_POST['c_subject']!='' && 
		$_POST['c_name']!='' &&
		$_POST['c_email']!='' &&
		$_POST['c_msg']!='' &&
		$_POST['c_t']!='' &&
		$_POST['c_t']=='fqwweoyhm$ndvyce56228w65q7441121'){
		include_once "smtp.php";
		
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
		$smtp =   new smtp($smtpserver,$prot,true,$smtpuser,$smtppwd,$sender);
		
		/* Mail Note */
		$body="Name:".$_POST['c_name']."<br/>E-mail:".$_POST['c_email']."<br/>Main message:".$_POST['c_msg'];


		$form_name="T24 Blackcard";
		$namefrom="T24 Blackcard";
		$to = "support"."@"."t24blackcard.com";
		$to = "anthony.lim"."@"."transact24.com";
		$cc = "anthony.lim"."@"."transact24.com;chris.telfer"."@"."transact24.com;ben.chan"."@"."transact24.com";
		//$nameto="goffee.ko";
		$subject="[Contact us] ".$_POST['c_subject'];
		//$message="test";
		//$issend=authMail($from, $namefrom, $to, $nameto, $subject, $message);';
		$send=$smtp->sendmail($to,$sender,$form_name,$subject,$cc,$body,$mailtype);
		if($send==1){
			die('{"status":200, "cc":"'.$cc.'", "to":"'.$to.'"}');
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
