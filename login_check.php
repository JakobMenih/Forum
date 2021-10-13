<?php
    include_once 'session.php';
include_once './database.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

    $sql2 = "SELECT * FROM uporabniki WHERE email ='$email'; ";

    $result2 = mysqli_query($link, $sql2);
    
    $row = mysqli_fetch_array($result2);
        if(password_verify($pass, $row['pass'])) 
        {        
        $_SESSION['idu']=$row['idu'];
        $_SESSION['username']=$row['username'];    
        $_SESSION['admin']=$row['admin'];

        if($_SESSION['admin'] == 1){
            define('jaki', TRUE);
            header("Location: aindex.php");
        }
        else{
            header("Location: uindex.php");
        }
        }   
        else {
        header("Location: login.php");
        }
?>