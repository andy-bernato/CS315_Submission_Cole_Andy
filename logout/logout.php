<?php
session_start();
$_SESSION["login"] = "false";
$_SESSION["uname"] = "";
header('Location: ../returninguserlogin/returninglogin.php');
?>