<?php
include_once './header.php';
?>

<h1>Registracija</h1>

<form action="registracija_baza.php" method="post">
    <input type="text" name="username" class="form-control mb-4" placeholder="Vnesi ime" required="required" />
    <input type="email" name="email" class="form-control mb-4" placeholder="Vnesi e-pošto" required="required" />
    <input type="password" name="pass" class="form-control mb-4" placeholder="Vnesi geslo" required="required" />
    <input type="submit" value="Shrani" />
</form>

<?php
include_once './footer.php';
?>