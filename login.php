<?php
include_once './header.php';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Forum</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./stylelog.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>Prijava in Registracja</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Registracija</h1>
			<div class="social-container">
				<a href="facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span></span>
			<form action="user_insert.php" method="post">
				<input type="text" name="username" class="form-control mb-4" placeholder="Vnesi uporabniško ime" required="required" />
				<input type="email" name="email" class="form-control mb-4" placeholder="Vnesi e-pošto" required="required" />
				<input type="password" name="pass" class="form-control mb-4" placeholder="Vnesi geslo" required="required" />
				<input type="submit" value="Shrani" />
			</form>
			<button>Registriraj</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Prijava</h1>
			<div class="social-container">
				<a href="facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span></span>
			<form action="login_check.php" method="post">
				<input type="email" name="email" class="form-control mb-4" placeholder="Vnesi mail" required="required" />
				<input type="password" name="pass" class="form-control mb-4" placeholder="Vnesi geslo" required="required" />
				<input type="submit" class="btn btn-primary" value="Prijava" />
			</form>
			<a href="#">Pozabljeno geslo?</a>
			<button>Prijavi</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Pozdravljeni!</h1>
				<p>Če še nimate računa se lahko registrirate.</p>
				<button class="ghost" id="signIn">Prijava</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Pozdravljeni!</h1>
				<p>Prijavite se.</p>
				<button class="ghost" id="signUp">Registracija</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

<?php
include_once './footer.php';
?>