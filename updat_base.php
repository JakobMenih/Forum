<?php

require_once 'database.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$admin = $_POST['admin'];
$u=$_POST['u'];

$pas = password_hash($pass, PASSWORD_DEFAULT);
 
$sql="UPDATE uporabniki SET username='$username', email='$email', pass='$pas', admin='$admin' WHERE idu='$u'";

   $result = mysqli_query($link, $sql);

   header("Location: uindex.php");
?>
