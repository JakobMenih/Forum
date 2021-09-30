<?php
include_once './database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//preverim podatke, da so obvezi vnešeni
if (!empty($username) && !empty($email) && !empty($pass))

    
    //$pass = sha1($pass1.$salt);
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO uporabniki (username,email,pass) "
            . "VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username,$email,$pass]);
    
    header("Location: login.html");
}
else {
    header("Location: login.php");
}
?>