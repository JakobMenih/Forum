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
            $sql="SELECT * FROM uporabniki ['ajdi']=i";
            $result=mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
            ?>
                <h2>Posodobitev igralca</h2>
                <form action="oupdate_base.php" method="post">
                <input type="text" name="imei" placeholder="Ime"><br />
                <input type="text" name="priimeki" placeholder="Priimek"><br />
                <input type="text" name="opisi" placeholder="Opis"/><br />
                <select name="skupina_idi" id="skupina">
                <option value="1">Lutkarji</option>
                <option value="2">Pevci</option>
                <option value="3">Majhen orkester</option>
                <option value="4">Velik orkester</option>
                <option value="5">Bobni</option>
                <option value="6">Pihala</option>
                </select></br>
                <input type="hidden" name="ja" value="<?php echo $_GET['ajdi'];?>" />
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