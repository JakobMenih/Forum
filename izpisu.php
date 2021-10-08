<?php
            include 'database.php';
            include 'header.php';
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forums.html">Forums</a></li>
                    <li class="nav-item"><a href="posts.html">Posts</a></li>
                    <li class="nav-item"><a href="detail.html">Detail</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">My Forum</div>
        </div>
<body>

        <!--SearchBox Section-->

    <div class="container">
        <!--Navigation-->
        <div class="navigate">
        </div>

        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <br>
            <div class="head">
                <div class="authors">Vsebina</div>
            </div>

            <div class="body">
                <div class="authors">
                <div class="tabela2">
                <?php
                $sql="SELECT * FROM uporabniki";
                $result=mysqli_query($link,$sql);
                echo '<table border="1">';
                echo '<tr><th>Username</th><th>Email</th><th>Password</th><th>Admin</th><th>Briši</th><th>Posodobi</th></tr>';
                while ($row = mysqli_fetch_array($result)) {
                echo '<tr>'.'<td>'
                .$row['username'].'</td><td>'
                .$row['email'].'</td><td>'
                .$row['pass'].'</td><td>'
                .$row['admin'].'</td><td>'
                .'<a href="udel.php?ajdi='.$row['id'].'">briši</a>'.'</td><td>'
                .'<a href="uupdat.php?ajdi='.$row['id'].'">posodobi</a>'.'</td></tr>';
                            }
                echo '</table>';
                ?>
                    </div>
                </div>
  
<?php
require 'footer.php';
?>