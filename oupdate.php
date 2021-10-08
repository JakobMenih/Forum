<?php
include_once './header.php';
include 'database.php';
 
?>


<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1>Registracija</h1>
                <br>
            <?php
                            $sql="SELECT * FROM objave o
                            INNER JOIN kategorije k ON k.id=o.kategorija_id
                            INNER JOIN uporabniki u ON u.id=o.uporabnik_id";
            $sql="SELECT * FROM uporabniki ['ajdi']=i";
            $result=mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
            ?>
                <form action="uupdat_base.php" method="post">
                    <input type="text" name="username" placeholder="Vnesi uporabniško ime" required="required" />
                    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" />
                    <input type="password" name="pass" placeholder="Vnesi geslo" required="required" />
                    <input type="rang" name="admin" placeholder="Admin" /><br />
		            <input type="hidden" name="jb" value="<?php echo $_GET['ajdi'];?>" />
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