<?php

require_once 'database.php';
 
$imeo = $_POST['imeo'];
$texto = $_POST['texto'];
$datumo = $_POST['datumo'];
$kategorija_ido = $_POST['kategorija_ido'];
$uporabnik_ido = $_POST['uporabnik_ido'];

 $sql = "INSERT INTO objave VALUES(NULL,'$imeo','$texto','$datumo','$kategorija_ido','$uporabnik_ido')";

   $result = mysqli_query($link, $sql);

   header("Location: uindex.php");
?>
