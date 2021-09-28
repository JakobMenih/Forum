<?php
session_start();

if(!isset($_SESSION['uporabik_id'])
        && $_SERVER['REQUEST_URI']!='/Forum/login.php'
        && $_SERVER['REQUEST_URI']!='/Forum/registration.php'
        && $_SERVER['REQUEST_URI']!='/Forum/login_check.php') {
    header("Location: login.php");
    die();
}

function isAdmin() {
    $result = false;
    if (isset($_SESSION['admin']) && ($_SESSION['admin']==1)) {
        $result = true;
    }
    return $result;
}

function adminOnly() {
    //če ni admin, ga preusmeri na index
    if (!isAdmin()) {
        header("Location: index.php");
        die();
    }
}



?>