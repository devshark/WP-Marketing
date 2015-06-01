<?php

//global $base_path;
//$image_path = $base_path.drupal_get_path('theme', 't24black').'/images/'; 
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
if($_POST['command']==''){
	exit;
}

$command=$_POST['command'];
$title=$_POST['title'];
$lastname=$_POST['lastname'];
$orderId=$_POST['orderId'];
$accessCode=$_POST['accessCode'];
$printDate=date('Y-m-d');
if($command=='approval'){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 BlackShield</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="/t24blackshield/sites/all/themes/t24black/images/blackshield_email_top.gif" width="752" height="109"/></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td style="padding:20px 0 20px 0;">
	<table align="center" cellpadding="0" cellspacing="0" style="width:755px; height:300px; font-family:Verdana; font-size:12px; color:#000000; line-height:18px;">
      <tr>
        <td colspan="3" style="background-color:#2b2c2c; color:#FFFFFF; font-size:20px; font-weight:bold; padding:15px 0 15px 20px;">Confirmation</td>
      </tr>
      <tr>
        <td rowspan="15" style=" width:5px; background-color:#2b2c2c;"></td>
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear <?php print $title; ?>  <?php print $lastname; ?>:</td>
        <td rowspan="15" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Thank you for ordering a T24 BlackShield Membership.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your Membership number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  color:#000000;">Use your Membership number as a reference if you want to contact Customer Support.</td>
      </tr>
      <tr>
        <td valign="top" width="720" style="padding:20px 15px 0 15px; vertical-align:top;  color:#000000;">Your first time AccessCode is: <span style=" font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $accessCode; ?></span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:2px 15px 0 15px; vertical-align:top;  color:#000000;">Please keep track of your AccessCode. You will need it once you receive your T24 BlackShield Card in order to activate it.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; padding-top:20px; color:#000000;">T24 Contact Details:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; line-height:24px; color:#000000;">E-mail: <a href="mailto:support@t24blackshield.com" style="color:#000000; text-decoration:none;">support@t24blackshield.com</a><br />
          Tel: +44 20728 13033</span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:20px 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Delivery Information: </span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">Your details will be submitted for ID verification. This can take between 3 to 5 working days if there is no problem with the documentation. You will be notified when your application is processed. </td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">The T24 BlackShield Card and Tag'n'Traq is normally delivered within 14 days of being notified that your ID verification has been approved and payment is received in full. Delivery is dependent on the destination country postal authority and in some cases, customs authority.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 10px 15px; vertical-align:top;  color:#000000; font-weight:bold; font-size:14px;">Receipt of your order:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top; "><table align="center" cellpadding="0" cellspacing="0" style="border:1px solid #000000; width:700px; font-size:12px; color:#000000; ">
            <tr>
              <td colspan="3" style=" border-bottom:1px solid #444444; height:25px; width:725px; background-color:#999999; padding-top:5px;" ><span style="display:block; width:150px; float:left; font-weight:bold; margin-left:15px; font-size:12px; color:#000000;">Receipt</span> <span style=" display:block; width:100px; float:right; font-weight:bold; font-size:12px; color:#000000;"><?php print $printDate; ?></span> </td>
            </tr>
            <tr>
              <td style="text-align:center; font-weight:bold; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; font-size:12px; color:#000000;">Your Order</td>
              <td style="text-align:center; font-weight:bold; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; font-size:12px; color:#000000;">Quantity</td>
              <td style="text-align:center; font-weight:bold; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; font-size:12px; color:#000000;">Price</td>
            </tr>
            <tr>
              <td style="text-align:center; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; color:#000000;">T24 BlackShield Membership</td>
              <td style="text-align:center; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; color:#000000;"><img align="absmiddle" src="/t24blackshield/sites/all/themes/t24black/images/s_blackshield_card.gif" /> X 1 </td>
              <td style="text-align:right; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 15px 5px 5px; color:#000000;">Total Value of Order: 410 USD</td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:left; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 5px 5px 15px; color:#000000;">Membership Number is: <?php print $orderId; ?></td>
              <td style="text-align:right; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 15px 5px 5px; color:#000000;">Value of payment Received: 410 USD</td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 BlackShield Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows<sup>&reg;</sup>. CashFlows<sup>&reg;</sup>  is a trading name of the Voice Commerce Limited.<br/> Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by <br/>the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services and holds a consumer credit licence (number 624404/1). <br/>
&copy; 2012 Transact24 Trading Limited</td>
      </tr>
      <tr>
        <td colspan="3" valign="top" style="background-color:#2b2c2c; height:5px;"></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>




<?php }elseif($command=='approval_transfer'){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 BlackShield</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="/t24blackshield/sites/all/themes/t24black/images/t24email_top.gif" width="752" height="109"/></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td style="padding:20px 0 20px 0;">
	<table align="center" cellpadding="0" cellspacing="0" style="width:755px; height:300px; font-family:Verdana; font-size:12px; color:#000000; line-height:18px;">
      <tr>
        <td colspan="3" style="background-color:#2b2c2c; color:#FFFFFF; font-size:20px; font-weight:bold; padding:15px 0 15px 20px;">Confirmation</td>
      </tr>
      <tr>
        <td rowspan="13" style=" width:5px; background-color:#2b2c2c;"></td>
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear <?php print $title; ?>  <?php print $lastname; ?>:</td>
        <td rowspan="13" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Thank you for ordering a T24 BlackShield Membership. You should receive an e-mail shortly with a confirmation of your order.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your Membership number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td width="720" valign="top" style="padding:0 0 20px 15px; vertical-align:top;  color:#000000;">Use your Membership number as a reference if you want to contact Customer Support.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; line-height:24px; color:#000000;">E-mail: <a href="mailto:support@t24blackshield.com" style="color:#000000; text-decoration:none;">support@t24blackshield.com</a><br />
          Tel: +44 20728 13033</span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:15px 15px 0 15px; vertical-align:top;  color:#000000;">Your details will be submitted for ID verification. This can take between 3 to 5 working days if there is no problem with the documentation. You will be notified when your membership application is processed.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:20px 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Payment: </td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">After ID documentation is verified, we will contact you and provide the bank details for you to pay for your membership and do your first deposit.</td>
      </tr>
      
      <tr>
        <td valign="top" style="padding:0 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Card and Tag'n'Traq Delivery:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">The T24 BlackShield Card and Tag'n'Traq luggage tags is normally delivered within 14 days of being notified that your ID verification has been approved and payment is received in full. Delivery is dependent on the destination country postal authority and in some cases, customs authority.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 BlackShield Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows<sup>&reg;</sup>. CashFlows<sup>&reg;</sup>  is a trading name of the Voice Commerce Limited.<br/> Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by <br/>the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services and holds a consumer credit licence (number 624404/1). <br/>
&copy; 2012 Transact24 Trading Limited</td>
      </tr>
      <tr>
        <td colspan="3" valign="top" style="background-color:#2b2c2c; height:5px;"></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<?php }elseif($command=='declined'){?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 BlackShield</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="/t24blackshield/sites/all/themes/t24black/images/t24email_top.gif" width="752" height="109"/></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td style="padding:20px 0 20px 0;">
	<table align="center" cellpadding="0" cellspacing="0" style="width:755px; height:300px; font-family:Verdana; font-size:12px; color:#000000; line-height:18px;">
      <tr>
        <td colspan="3" style="background-color:#2b2c2c; color:#FFFFFF; font-size:20px; font-weight:bold; padding:15px 0 15px 20px;">Confirmation</td>
      </tr>
      <tr>
        <td rowspan="13" style=" width:5px; background-color:#2b2c2c;"></td>
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear <?php print $title; ?>  <?php print $lastname; ?>:</td>
        <td rowspan="13" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">We apologize, the acquiring bank is unable to process the payment.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your Membership Reference number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td width="720" valign="top" style="padding:20px 0 0 15px; vertical-align:top;  color:#000000;">If you want to request alternative payment through Bank Transfer (TT).</td>
      </tr>
     <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 BlackShield Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows<sup>&reg;</sup>. CashFlows<sup>&reg;</sup>  is a trading name of the Voice Commerce Limited.<br/> Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by <br/>the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services and holds a consumer credit licence (number 624404/1). <br/>
&copy; 2012 Transact24 Trading Limited</td>
      </tr>
      <tr>
        <td colspan="3" valign="top" style="background-color:#2b2c2c; height:5px;"></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php }?>
