<?php
include_once './header.php';
$u=$_SESSION['idu'];
?>

<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1>Nova objava</h1>
                <br>
                <form action="nobjava_check.php" method="post">
                <input type="text" name="imeo" placeholder="Ime objave"><br />
                <input type="text" name="texto" placeholder="Text objave"><br />
                <select name="kategorija_ido" id="kategorija_ido">
                <option value="1">Tehnologija</option>
                <option value="2">Narava</option>
                <option value="3">Novice</option>
                <option value="4">Politika</option>
                <option value="5">Hrana</option>
                <option value="6">Igre</option>
                <option value="7">Popularno</option>
                <option value="8">Živali</option>
                <option value="9">Ljudje</option>
                <option value="10">Industrija</option>
                <option value="10">Drugo</option>
                </select></br>
                <input type="file" name="slike" placeholder="Vnesi sliko"><br>
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