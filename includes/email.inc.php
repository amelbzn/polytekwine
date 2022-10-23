<?php

include_once 'dbh.inc.php';

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userSub = $_POST['subject'];
$userMessage = $_POST['message'];


$to = "amelbzn.yb@gmail.com";
$body = "";
$body .= "From: " . $userName . "\r\n";
$body .= "Email: " . $userEmail . "\r\n";
$body .= "Message: " . $userMessage . "\r\n";



mail($to, $userSub, $body);
