<?php

$host="localhost";
<<<<<<< HEAD
$user="root";
$password="";
$database="forum";
=======
$user="menihtop_forum";
$password="JakobM123";
$database="menihtop_forum";
>>>>>>> b45bb3289c17e9a7fb22cb81c6899eb9114b16dc

$link = mysqli_connect($host, $user, $password) or 
     die("Povezava na streznik ni uspela.");
	 
	 
	 mysqli_select_db($link, $database) or 
	 die("Povezava na bazo ni uspela.");
	 
	 
	 mysqli_set_charset($link, "utf8");

?>