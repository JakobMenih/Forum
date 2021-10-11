
<?php
require 'database.php';

$s = $_GET['ajdi'];

$sql="DELETE FROM slike WHERE ids = $s";

$result = mysqli_query($link,$sql);

header("Location: sizpis.php");
?>