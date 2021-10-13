
<?php
require 'database.php';

$od = $_GET['ajdi'];

$sql="DELETE FROM objave WHERE ido = $od";

$result = mysqli_query($link,$sql);

header("Location: oizpis.php");
?>