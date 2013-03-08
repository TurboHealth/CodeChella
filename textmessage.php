<?php
// Download/Install the PHP helper library from twilio.com/docs/libraries.
// This line loads the library
require('twilio-twilio-php-788b98f/Services/Twilio.php');
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC0c8b044eefbea06dedfd9c2b3bad2d75"; 
$token = "ee893b886f3ebdd28a07cc3e845f90f1"; 
$client = new Services_Twilio($sid, $token);


$to="+1".$_POST['phonenum'];
 
$message = $client->account->sms_messages->create("+14404994965", "$to", "Hi! Thank you for using TurboHealth. Click the following link to download TurboHealth App for iPhone.", array());
//echo $message->sid;
header("Location: HealthOptions.html");

?>
