<?php

require_once 'database.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$admin = $_POST['admin'];
$ua=$_POST['ua'];

$pas = password_hash($pass, PASSWORD_DEFAULT);
 
$sql="UPDATE uporabniki SET username='$username', email='$email', pass='$pas', admin='$admin' WHERE idu='$ua'";

   $result = mysqli_query($link, $sql);

   header("Location: uizpis.php");
?>
