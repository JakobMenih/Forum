
<?php
require 'database.php';

$u = $_GET['ajdi'];

$sql="DELETE FROM uporabniki WHERE idu = $u";

$result = mysqli_query($link,$sql);

header("Location: uizpis.php");
?>