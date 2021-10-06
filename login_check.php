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
        

?>