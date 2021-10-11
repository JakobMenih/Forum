<?php

require_once 'database.php';
 
$imeo = $_POST['imeo'];
$texto = $_POST['texto'];
$datumo = $_POST['datumo'];
$kategorija_ido = $_POST['kategorija_ido'];
$uporabnik_ido = $_POST['uporabnik_ido'];
$o=$_POST['ou'];

$sql="UPDATE objave SET imeo='$imeo', texto='$texto', kategorija_ido='$kategorija_ido' WHERE ido='$o'";

   $result = mysqli_query($link, $sql);

   header("Location: oizpis.php");
?>
