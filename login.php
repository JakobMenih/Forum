<?php
include_once './header.php';
?>

<h1>Prijava</h1>

<form action="login_check.php" method="post">
    <input type="text" name="username" class="form-control mb-4" placeholder="Vnesi uporabniško ime" required="required" />
    <input type="password" name="pass" class="form-control mb-4" placeholder="Vnesi geslo" required="required" />
    <input type="submit" class="btn btn-primary" value="Prijava" />
</form>

<?php
include_once './footer.php';
?>