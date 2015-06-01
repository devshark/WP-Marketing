<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if($_POST['command'] == ''){
	exit;
}
$command = $_POST['command'];
if(isset($_POST['title'])){
	$title = $_POST['title'];
}
if(isset($_POST['lastname'])){
	$lastname = $_POST['lastname'];
}

if(isset($_POST['orderId'])){
	$orderId = $_POST['orderId'];
}

if(isset($_POST['accessCode'])){
	$access = $_POST['accessCode'];
}

if(isset($_POST['price'])){
	$price = $_POST['price'];
}

if(isset($_POST['vouchercode'])){
	$vouchercode = $_POST['vouchercode'];
}

if(isset($_POST['vouchervalue'])){
	$vouchervalue = $_POST['vouchervalue'];
}

if(isset($_POST['ordervalue'])){
	$ordervalue = $_POST['ordervalue'];
}


if(isset($_POST['currency'])){
	$currency = $_POST['currency'];
}

if(isset($_POST['cardTitle'])){
	$cardTitle = $_POST['cardTitle'];
}

if(isset($_POST['oldPrice'])){
	$oldPrice = $_POST['oldPrice'];
}

if(isset($_POST['productShow'])){
	$show = $_POST['productShow'];
}
$printDate=date("Y-m-d");

if($command=='approval'){
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 Black</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="https://www.t24blackcard.com/sites/all/themes/t24black/images/t24email_top.gif" width="752" height="109"/></td>
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
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear  <?php print $title; ?> <?php print $lastname; ?>:</td>
        <td rowspan="15" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Thank you for ordering the <?php print $show; ?>.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your application number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  color:#000000;">Use your application number as a reference if you want to contact Customer Support.</td>
      </tr>
      <tr>
        <td valign="top" width="720" style="padding:20px 15px 0 15px; vertical-align:top;  color:#000000;">Your first time AccessCode is: <span style=" font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $access; ?> </span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:2px 15px 0 15px; vertical-align:top;  color:#000000;">Please keep track of your AccessCode. You will need it once you receive your T24 BLack Card in order to activate it.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; padding-top:20px; color:#000000;">T24 Contact Details:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; line-height:24px; color:#000000;">E-mail: <a href="mailto:support@t24blackcard.com" style="color:#000000; text-decoration:none;">support@t24blackcard.com</a><br />
          Tel: +44 20728 16090</span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:20px 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Delivery Information: </span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">Your details will be submitted for ID verification. This can take between 3 to 5 working days if there is no problem with the documentation. You will be notified when your application is processed. </td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">The card is normally delivered within 14 days of being notified that your ID verification has been approved and payment is received in full. Delivery is dependent on the destination country postal authority and in some cases, customs authority.</td>
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
              <td style="text-align:center; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; color:#000000;"><?php print $cardTitle; ?></td>
              <td style="text-align:center; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px; color:#000000;">1</td>
              <td style="text-align:right; font-weight:bold; font-size:14px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 15px 5px 5px; color:#000000;">Total Value of Order:<span style="text-decoration:line-through; "><?php print $oldPrice; ?></span> <?php print $price; ?> <?php print $currency; ?></td>
            </tr>
            <?php if($vouchercode){ ?>
            <tr>
              <td colspan="2" style="text-align:left; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 5px 5px 15px; color:#000000;">Voucher Code Is: <?php print $vouchercode; ?></td>
              <td style="text-align:right; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 15px 5px 5px; color:#000000;">Voucher code value: -<?php print $vouchervalue; ?> <?php print $currency; ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="2" style="text-align:left; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 5px 5px 15px; color:#000000;">Application Number Is: <?php print $orderId; ?></td>
              <td style="text-align:right; font-weight:bold; font-size:12px; border-bottom:1px solid #444444; border-right:1px solid #444444; padding:5px 15px 5px 5px; color:#000000;">Value of payment Received: <?php print $ordervalue; ?> <?php print $currency; ?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 Black Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited.
Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by
the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money. <br/>
&copy; 2014 Transact24 Trading Limited</td>
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 Black</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="https://www.t24blackcard.com/sites/all/themes/t24black/images/t24email_top.gif" width="752" height="109"/></td>
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
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear <?php print $title; ?> <?php print $lastname; ?>:</td>
        <td rowspan="13" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Thank you for ordering the <?php print $show; ?>. </td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your application number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td width="720" valign="top" style="padding:0 0 0 15px; vertical-align:top;  color:#000000;">Use your application number as a reference if you want to contact Customer Support.</td>
      </tr>


      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; padding-top:20px; color:#000000;">T24 Contact Details:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 0 15px; vertical-align:top;  font-size:14px; font-weight:bold; line-height:24px; color:#000000;">E-mail: <a href="mailto:support@t24blackcard.com" style="color:#000000; text-decoration:none;">support@t24blackcard.com</a><br />
          Tel: +44 20728 16090</span></td>
      </tr>
      <tr>
        <td valign="top" style="padding:15px 15px 0 15px; vertical-align:top;  color:#000000;">Your details will be submitted for ID verification. This can take between 3 to 5 working days if there is no problem with the documentation. You will be notified when your application is processed.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:20px 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Payment: </td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">After ID documentation is verified, we will contact you and provide the bank details for you to pay for your card and do your first deposit. </td>
      </tr>

      <tr>
        <td valign="top" style="padding:0 15px 5px 15px; vertical-align:top;  font-size:14px; font-weight:bold; color:#000000;">Card Delivery:</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;">The card is normally delivered within 14 days of being notified that your ID verification has been approved and payment is received in full. Delivery is dependent on the destination country postal authority and in some cases, customs authority.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 Black Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited.
Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by
the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money. <br/>
&copy; 2014 Transact24 Trading Limited</td>
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>T24 Black</title>
</head>

<body style="font-family:Verdana; font-size:12px; color:#000000; line-height:18px; padding:0; margin:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="https://www.t24blackcard.com/sites/all/themes/t24black/images/t24email_top.gif" width="752" height="109"/></td>
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
        <td valign="top" style="padding:15px 0 0 15px; vertical-align:top;  font-size:18px; font-weight:bold;">Dear <?php print $title; ?> <?php print $lastname; ?>:</td>
        <td rowspan="13" style=" width:4px; background-color:#2b2c2c;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">We apologise, the acquiring bank is unable to process the payment.</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 0 0 15px; vertical-align:top;  padding-top:20px; color:#000000;">Your Application reference number is: <span style="font-size:18px; font-weight:bold; padding-top:15px; color:#000000;"><?php print $orderId; ?></span></td>
      </tr>
      <tr>
        <td width="720" valign="top" style="padding:20px 0 0 15px; vertical-align:top;  color:#000000;">If you want to request alternative payment through Bank Transfer (TT).</td>
      </tr>
      <tr>
        <td valign="top" style="padding:0 15px 15px 15px; vertical-align:top;  color:#000000;"></td>
      </tr>
      <tr>
        <td valign="top" style="padding:30px 15px 20px 15px; vertical-align:top; font-size:18px; font-weight:bold; color:#000000;">The T24 Black Team</td>
      </tr>
      <tr>
            <td style=" border-top:1px solid #333333; border-bottom:1px solid #333333; background-color:#666666; padding:10px 0 10px 0; text-align:center; color:#333333; font-size:10px;">This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited.
Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by
the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money. <br/>
&copy; 2014 Transact24 Trading Limited</td>
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
