<?php

$host="localhost";
$user="jakobmen_forum";
$pass="JakobM123";
$db="jakobmen_forum";
$charset = 'utf8mb4';


$link = mysqli_connect($host, $user, $password) or 
     die("Povezava na streznik ni uspela.");
	 
	 
	 mysqli_select_db($link, $database) or 
	 die("Povezava na bazo ni uspela.");
	 
	 
	 mysqli_set_charset($link, "utf8");
	 
$salt = 'lerkjth654dgk%$#$#FG';

?>