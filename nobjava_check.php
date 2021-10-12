<?php

require_once 'database.php';
 
$imeo = $_POST['imeo'];
$texto = $_POST['texto'];
$datumo = $_POST['datumo'];
$kategorija_ido = $_POST['kategorija_ido'];
$uporabnik_ido = $_POST['uporabnik_ido'];

 $sql = "INSERT INTO objave VALUES(NULL,'$imeo','$texto','$datumo','$kategorija_ido','$uporabnik_ido')";

   $result = mysqli_query($link, $sql);


   $file_name = $_FILES['file']['name'];
   $file_temp = $_FILES['file']['tmp_name'];
   $file_size = $_FILES['file']['size'];
   $location="upload/".$file_name;

   if(move_uploaded_file($file_temp, $location)){
    {
        $sql3 = "INSERT INTO slike (ids, url, objava_ids)  VALUES (NULL,'$location','objava_ids')";
        $result3= mysqli_query($link, $sql3);


header("Location: index.php");
}


}
else {
header("Location: nobjava.php");
}
?>