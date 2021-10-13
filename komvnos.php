<?php
include_once './header.php';
include 'glava.php';
include 'baza.php';
include 'session.php';
$o=$_GET['ajdi'];
$u=$_SESSION['idu'];
?>

<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1>Vnos komentarja</h1>
                <br>
                <form action="kom_insert.php" method="post">
                    <input type="text" name="textko" placeholder="Vnesi komentar" required="required" />
					<input type="hidden" name="o" value="<?= $o ?>">
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

<?php
include_once './footer.php';
?>