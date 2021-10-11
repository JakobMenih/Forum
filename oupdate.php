<?php
include_once './header.php';
include 'database.php';
 
?>


<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1></h1>
                <br>
            <?php
                            $sql="SELECT * FROM objave o
                            INNER JOIN kategorije k ON k.id=o.kategorija_id
                            INNER JOIN uporabniki u ON u.id=o.uporabnik_id";
            $sql="SELECT * FROM objave ['ajdi']=o";
            $result=mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
            ?>
                <h2>Posodobitev objave</h2>
                <form action="oupdate_base.php" method="post">
                <input type="text" name="imeo" placeholder="Ime objave"><br />
                <input type="text" name="texto" placeholder="Text objave"><br />
                <select name="kategorija_ido" id="kategorija">
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
                <input type="hidden" name="ou" value="<?php echo $_GET['ajdi'];?>" />
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