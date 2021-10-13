<?php

require_once 'database.php';
include_once './session.php';
 
$textko = $_POST['textko'];
$datumko = $_POST['datumko'];
$u=$_POST['u'];
$o=$_POST['o'];

 $sql = "INSERT INTO komentarji VALUES(NULL,'$textko','$datumko','$o','$u')";
 
   $result = mysqli_query($link, $sql);

header("Location: uindex.php");
?>
