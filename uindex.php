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
        <a href="updat.php">Spremeni profil</a><br><br><br>
        <a href="nobjava.php">Nova objava</a><br>

<br>
<br>
        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Objave </td><td></div>
                <div class="content"></div>
            </div>
            <?php
             $sql="SELECT * FROM objave o
             INNER JOIN komentarji ko ON o.ido=ko.objava_idko
             INNER JOIN uporabniki u ON u.idu=o.uporabnik_ido
             INNER JOIN kategorije k ON k.idk=o.kategorija_ido";
             ?>
             <div class="body">
                 <div class="authors">
                 <?php
 
 $result=mysqli_query($link,$sql);
 echo '<table id ="b" border="1">'  ;
 while($row=mysqli_fetch_array($result))
 {
     echo '<tr>'.'<td>Ime: '.$row['imeo'].'<br><br>Uporabnik: '.$row['username'].'<br><br>Kategorija: '.$row['imek'].'</td>'.'<td>
 <table>
 <tr><td class="a">Objava: '.$row['texto'].'</td><td>'.$row['datumo'].'</td></tr>
 </tr><td>Komentar: '.$row['textko'].'</td><td>'.$row['datumko'].'</td><td>'.$row['username'].'</td>
 
 </table>
 
 <td class="a">'.'<img src="'.$row['url'].'" width="80%"  margin-left: auto;
 margin-right: auto; >'.'</td>'
 
 .'<td><a href="komvnos.php?ajdi='.$row['idk'].'">Dodaj komentar</a>'.'</td></tr>';
 
 }  
 echo '</table>';

?>
</div>
</div>
</div>
</body>
</html>
<?php
require 'footer.php';
?>