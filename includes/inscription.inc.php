<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.0 405 Method Not Allowed');
    exit;
} else {

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $Bday = date("m-d-Y", (strtotime($_POST["Bday"])));
        $level = $_POST["level"];
        $formation = $_POST["formation"];
        $msg = $_POST["message"];


        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        creatStudent($conn, $name, $email, $phone, $Bday, $level, $formation, $msg);
    } else {
        header("location: ../registration.php?error=somethingwentwrong");
        exit();
    }
}
