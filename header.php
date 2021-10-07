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

<<<<<<< HEAD
<?php
    if(isset($_SESSION['username'])){
        $imeu=$_SESSION['username'];
    echo '<a color= white;>Prijavljeni ste kot: '.$username.' </a>';
    echo '<a ="active" href="logout.php">ODJAVA</a>';
    }

    else{
    echo '<a class="prij" href="login.php"> PRIJAVA</a>';
    echo '       ';
    echo '<a class="regi" href="registration.php">REGISTRACIJA </a>';
    }
?>
=======
<a class="nav-link js-scroll-trigger" href="registration.php">Registracija</a>
<a class="nav-link js-scroll-trigger" href="login.php">Prijava</a>
>>>>>>> b45bb3289c17e9a7fb22cb81c6899eb9114b16dc
