<?php
include_once './header.php';
include 'database.php';
$u=$_SESSION['idu'];
 
?>


<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1>Uredi profil</h1>
                <br>
            <?php
            $sql="SELECT * FROM uporabniki ['ajdi']=u";
            $result=mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
            ?>
                <form action="updat_base.php" method="post">
                    <input type="text" name="username" placeholder="Vnesi uporabniško ime" required="required" />
                    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" />
                    <input type="password" name="pass" placeholder="Vnesi geslo" required="required" />
                    <input type="hidden" name="u" value="<?= $u ?>">
                    <br>
                    <br>
                    <input type="submit" value="Shrani" />
                </form>
                </div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</div>		




<?php
include_once './footer.php';
?>