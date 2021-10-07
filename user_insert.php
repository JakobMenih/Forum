<?php

require_once 'database.php';
 
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
<<<<<<< HEAD
$admin = $_POST['admin'];
=======
$rang = $_POST['rang'];

if ($rang == NULL){
    $rang = '2';
}
>>>>>>> b45bb3289c17e9a7fb22cb81c6899eb9114b16dc

$pas = password_hash($pass, PASSWORD_DEFAULT);
 
 $sql = "INSERT INTO uporabniki VALUES(NULL,'$username','$email','$pas','$admin')";

<<<<<<< HEAD
   $result = mysqli_query($link, $sql);

   header("Location: login.php");
=======
    
    //$pass = sha1($pass1.$salt);
    $pas = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO uporabniki (username, email, pass) "
            . "VALUES (?, ?, ?)";
    //$stmt = $pdo->prepare($query);
    //$stmt->execute([$username,$email,$pas]);

    $query->execute([$username,$email,$pas]);

    header("Location: login.php");
}
else{
    echo $pass;
}
>>>>>>> b45bb3289c17e9a7fb22cb81c6899eb9114b16dc
?>
