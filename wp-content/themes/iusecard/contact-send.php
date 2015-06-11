<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $comment = $_POST['message'];
 $company = $_POST['company'];
 $incorporation = $_POST['incorporation'];
 $needed = $_POST['needed'];
 $phone = $_POST['phone'];
 $to ='support@i-usecard.com';
 $to ='anthony.lim@transact24.com';
 
 $message = "";
 $message .= "Name: " . htmlspecialchars($name, ENT_QUOTES) . "<br>\n";
 $message .= "Email: " . htmlspecialchars($email, ENT_QUOTES) . "<br>\n";
 $message .= "Phone: " . htmlspecialchars($phone, ENT_QUOTES) . "<br>\n";
 $message .= "Incorporated in: " . htmlspecialchars($incorporation, ENT_QUOTES) . "<br>\n";
 $message .= "Cards needed: " . htmlspecialchars($needed, ENT_QUOTES) . "<br>\n";
 $message .= "Subject: " . htmlspecialchars($subject, ENT_QUOTES) . "<br>\n";
 $message .= "Message: " . htmlspecialchars($comment, ENT_QUOTES) . "<br>\n";
 $lowmsg = strtolower($message);
  
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: \"" . $name . "\" <" . $email . ">\r\n";
 $headers .= "Reply-To: " .  $email . "\r\n";
 $message = utf8_decode($message);  
 $sent = @mail($to, "Contact - i-usecard.com", $message, $headers);
 
 if ($sent){
 		echo 'sent';
 }else{
 	  echo 'failed';
 }
?>
