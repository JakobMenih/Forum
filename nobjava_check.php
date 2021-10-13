<?php

require_once 'database.php';
include 'session.php';
 
$imeo = $_POST['imeo'];
$texto = $_POST['texto'];
$datumo = $_POST['datumo'];
$kategorija_ido = $_POST['kategorija_ido'];
$slike = $_POST['slike'];
$u=$_POST['u'];


 $sql = "INSERT INTO objave VALUES(NULL,'$imeo','$texto','$datumo','$kategorija_ido','$u')";

   $result = mysqli_query($link, $sql);

   $sql2 = "SELECT * FROM objave WHERE imeo=$imeo AND texto=$texto AND datumo=$datumo AND kategorija_ido=$kategorija_ido AND u=$u";

   $result2 = mysqli_query($link, $sql2);
   $row = mysqli_fetch_array($result2);


   $_SESSION['ido']=$row['ido'];
   $o = $_SESSION['ido'];


   if(!empty($_FILES["slike"]["name"]))
   {
   $file_name = $_FILES['slike']['name'];
   $file_temp = $_FILES['slike']['tmp_name'];
   $file_size = $_FILES['slike']['size'];
   $location="upload/".$file_name;
    }
   if(move_uploaded_file($file_temp, $location)){
    {
        $sql3 = "INSERT INTO slike (ids, url, objava_ids)  VALUES (NULL,'$location','$o')";
        $result3= mysqli_query($link, $sql3);

header("Location: uindex.php");
}


}
else {
  echo $o;  echo $u;
header("Location: nobjava.php");
}
?>