<?php

$host="localhost";
$user="root";
$password="";
$database="forum";

$link = mysqli_connect($host, $user, $password) or 
     die("Povezava na streznik ni uspela.");
	 
	 
	 mysqli_select_db($link, $database) or 
	 die("Povezava na bazo ni uspela.");
	 
	 
	 mysqli_set_charset($link, "utf8");

?>