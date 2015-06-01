<?php
$firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES);
$lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
$textbox = htmlspecialchars($_POST['message'], ENT_QUOTES);
 
 $to ='anthony.lim@transact24.com';
 

 if ((filter_var($email, FILTER_VALIDATE_EMAIL))) {
  
 $message = "";
 $message .= "Name: " . $firstname . " " .$lastname. "<br>\n";
 $message .= "Email: " . $email . "<br>\n";
 $message .= "Telephone: " . $telephone . "<br>\n";
 $message .= "Message: " . $textbox;
 //$lowmsg = strtolower($message);
  
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: \"" .$firstname . " " .$lastname. "\" <" . $email . ">\r\n";
 $headers .= "Reply-To: " .  $email . "\r\n";
 $message = utf8_decode($message);  
 $mail = @mail($to, "Prepaid Enquiry - T24 CUP", $message, $headers);
 
 if ($mail){
 		echo 'OK';
 }else{
 	  echo 'Sending error';
 }
  
}else{
	echo 'Invalid e-mail address format';
}

?>
