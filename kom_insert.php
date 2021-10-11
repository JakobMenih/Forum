<?php

require_once 'database.php';
 
$textko = $_POST['textko'];
$datumko = $_POST['datumko'];
$objava_idko = $_POST['objava_idko'];
$uporabnik_idko = $_POST['uporabnik_idko'];

 $sql = "INSERT INTO komentarji VALUES(NULL,'$textko','$datumko','$objava_idko','$uporabnik_idko')";

   $result = mysqli_query($link, $sql);

   header("Location: uindex.php");
?>
