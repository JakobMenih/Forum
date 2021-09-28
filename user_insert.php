<?php
include_once './database.php';

$username = $_POST['username'];
$pass = $_POST['geslo'];
$email = $_POST['email'];

//preverim podatke, da so obvezi vnešeni
if (!empty($username) && !empty($email) && !empty($pass))

    
    //$pass = sha1($pass1.$salt);
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO uporabniki (username,geslo,email) "
            . "VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username,$pass,$email]);
    
    header("Location: login.php");
}
else {
    header("Location: registration.php");
}
?>