<?php

require_once 'databaza.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$hashp= password_hash($pass, PASSWORD_DEFAULT);
 
 $sql="INSERT INTO uporabniki VALUES(NULL,'$username','$email','$hashp')";

   $result = mysqli_query($link, $sql);

   header("Location: index.html");