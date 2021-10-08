
<?php
require 'database.php';

$u = $_GET['ajdi'];

$sql="DELETE FROM uporabniki WHERE id = $u";

$result = mysqli_query($link,$sql);

header("Location: izpisu.php");
?>