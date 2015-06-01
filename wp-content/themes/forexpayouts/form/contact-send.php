<?php 
 $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
 $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
 $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
 $textbox = htmlspecialchars($_POST['message'], ENT_QUOTES);
 $telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
 //$to ='sales@forexpayouts.co.uk';
 $to ='anthony.lim@transact24.com';

 if ((filter_var($email, FILTER_VALIDATE_EMAIL)) && (!empty($name)) && (!empty($textbox))) {
  
 $message = "";
 $message .= "Name: " . $name . "<br>\n";
 $message .= "Email: " . $email . "<br>\n";
 $message .= "Telephone: " . $telephone . "<br>\n";
 $message .= "Subject: " . $subject . "<br>\n";
 $message .= "Message: " . $textbox;
 $lowmsg = strtolower($message);
  
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: \"" . $name . "\" <" . $email . ">\r\n";
 $headers .= "Reply-To: " .  $email . "\r\n";
 $message = utf8_decode($message);  mail($to, "Contact - forexpayouts.co.uk", $message, $headers);
 
 if ($message){
 		echo 'sent';
 }else{
 	  echo 'failed';
 }
  
}

?>
