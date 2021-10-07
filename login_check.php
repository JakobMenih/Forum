<?php
    include_once 'session.php';
include_once './database.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

    $sql2 = "SELECT * FROM uporabniki WHERE mail = '$mail'; ";

    $result2 = mysqli_query($link, $sql2);
    
    $row = mysqli_fetch_array($result2);
        if(password_verify($pass, $row['pass'])) 
        {        
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];    
        $_SESSION['admin']=$row['admin'];
        }
<<<<<<< HEAD
        if($_SESSION['admin'] == 0){
            header("Location: uindex.php");
            }
            else{
            header("Refresh:3 url=login.php");
            }
            
        if($_SESSION['admin'] == 1){
            header("Location: aindex.php");
            }
            else{
            header("Refresh:3 url=login.php");
            }
=======
    }
}
header("Location: login.html");
?>

<?php
    include_once 'seja.php';
    require_once 'databaza.php';
 
 $mail=$_POST['mail'];
 $pass=$_POST['pass'];

$sql2="SELECT * FROM uporabniki WHERE mail ='$mail'; ";


   $result2 = mysqli_query($link, $sql2);
 
        $row = mysqli_fetch_array($result2);
        if(password_verify($pass, $row['pass'])) 
        {        
        $_SESSION['idu']=$row['idu'];
        $_SESSION['imeu']=$row['imeu'];
        $_SESSION['priimeku']=$row['priimeku'];
        $_SESSION['telefonskau']=$row['telefonskau'];        
        $_SESSION['rangu']=$row['rangu'];
        }
        if($_SESSION['rangu'] == 2){
        header("Location: uindex.php");
        }
    
        else{
        header("Refresh:3 url=prijava.php");
        }
        
        if($_SESSION['rangu'] == 1){
        header("Location: aindex.php");
        }
    
        else{
        header("Refresh:3 url=prijava.php");
        }
        

>>>>>>> b45bb3289c17e9a7fb22cb81c6899eb9114b16dc
?>