<?php

require_once 'database.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$admin = $_POST['admin'];
$b=$_POST['jb'];

$pas = password_hash($pass, PASSWORD_DEFAULT);
 
$sql="UPDATE uporabniki SET username='$username', email='$email', pass='$hashp', admin='$admin' WHERE idu='$b'";

   $result = mysqli_query($link, $sql);

   header("Location: uizpis.php");
?>
