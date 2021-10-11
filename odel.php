
<?php
require 'database.php';

$od = $_GET['ajdi'];

$sql="DELETE FROM objave WHERE ido = $od";
$sql="DELETE FROM slike WHERE objava_ids = $od";

$result = mysqli_query($link,$sql);

header("Location: oizpis.php");
?>