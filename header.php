<?php
include_once './session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
</head>

<?php
    if(isset($_SESSION['username'])){
        $username=$_SESSION['username'];
    echo '<a color= white;>Prijavljeni ste kot: '.$username. ' </a>';
    echo '<a ="active" href="logout.php">ODJAVA</a>';
    }

    else{
    echo '<a class="prij" href="login.php"> PRIJAVA</a>';
    echo '       ';
    echo '<a class="regi" href="registration.php">REGISTRACIJA </a>';
    }
?>
