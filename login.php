<?php
include_once './header.php';
require_once('settings.php');
?>

<link rel="stylesheet" href="./login.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<div class="login">

                    <h1>Prijava</h1>
                <br>
                <form action="login_check.php" method="post">
                    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" />
                    <input type="password" name="pass" placeholder="Vnesi geslo" required="required" />
                    <br>
                    <br>
                    <input type="submit" value="Shrani" />
                </form>
				<?php

require_once('settings.php');

?>
<html>
<head>
<style type="text/css">

#login-button {
	display: block;
	text-align: center;
	margin: 50px 0;
}

</style>
</head>

<body>

<a id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with Google</a>
<a id="login-button" href="<?= 'https://www.forum.menih.top/gauth.php' . 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login</a>

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
