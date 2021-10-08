
<?php
require 'database.php';

$o = $_GET['ajdi'];

$sql="DELETE FROM objave WHERE ido = $o";

$result = mysqli_query($link,$sql);

header("Location: oizpis.php");
?>