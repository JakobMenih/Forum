<?php
session_start();
include_once './database.php';
$username = $_POST['username'];
$pass = $_POST['pass'];
//preverim, če sem prejel podatke
if (!empty($email) && !empty($pass)) {
    //$pass = sha1($pass.$salt);
    
    $query = "SELECT * FROM uporabniki WHERE username=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        if (password_verify($pass, $user['pass'])) {
            $_SESSION['uporabnik_id'] = $uporabnik['id'];        
            $_SESSION['admin'] = $user['admin'];        
            header("Location: index.php");
            die();
        }
    }
}
header("Location: login.html");
?>