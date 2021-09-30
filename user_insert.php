<?php
include_once 'database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//preverim podatke, da so obvezi vnešeni
if (!empty($username) && !empty($email) && !empty($pass))

    
    //$pass = sha1($pass1.$salt);
    $pas = password_hash($pass, PASSWORD_DEFAULT);
    echo $pass;

    $query = "INSERT INTO uporabniki (username,email,pass) "
            . "VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username,$email,$pas]);
    
    header("Location: login.php");
}
else {
    header("Location: login.php");
}
?>