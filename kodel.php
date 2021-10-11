
<?php
require 'database.php';

$ok = $_GET['ajdi'];

$sql="DELETE FROM komentarji WHERE idko = $ok";


$result = mysqli_query($link,$sql);

header("Location: koizpis.php");
?>