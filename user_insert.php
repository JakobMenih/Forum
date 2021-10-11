<?php

require_once 'database.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$admin = $_POST['admin'];

$pas = password_hash($pass, PASSWORD_DEFAULT);
 
 $sql = "INSERT INTO uporabniki VALUES(NULL,'$username','$email','$pas','$admin')";

   $result = mysqli_query($link, $sql);

   header("Location: login.php");
?>
