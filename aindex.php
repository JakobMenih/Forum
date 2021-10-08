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
                <div class="koncert">
                <h3>Uporabniki</h3>
            </div>
                </div>
                <div class="content">
                    <br>
                <a class="koncerti" href="izpisu.php">Izpis uporabnikov</a><br>   
            <a class="koncerti" href="aregist.php">Vnos uporabnikov</a><br>
                    </div>
                </div>

        <div class="body">
                <div class="authors">
                <div class="koncert">
                <h3>Objave</h3>
            </div>
                </div>
                <div class="content">
                    <br>
                <a class="koncerti" href="izpisk.php">Izpis koncertov</a><br>   
            <a class="koncerti" href="vnos.php">Vnos koncertov</a><br>
                    </div>
                </div>
                <div class="body">
                <div class="authors">
                <div class="koncert">
                <h3>Koncerti</h3>
            </div>
                </div>
                <div class="content">
                    <br>
                <a class="koncerti" href="izpisk.php">Izpis koncertov</a><br>   
            <a class="koncerti" href="vnos.php">Vnos koncertov</a><br>
                    </div>
                </div>

        <div class="body">
                <div class="authors">
                <div class="koncert">
                <h3>Koncerti</h3>
            </div>
                </div>
                <div class="content">
                    <br>
                <a class="koncerti" href="izpisk.php">Izpis koncertov</a><br>   
            <a class="koncerti" href="vnos.php">Vnos koncertov</a><br>
                    </div>
                </div>
  
<?php
            require 'footer.php';
            ?>