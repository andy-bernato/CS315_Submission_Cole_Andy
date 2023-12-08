<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="contentssmall.css" media="only screen and (max-width:769px)">
<link rel="stylesheet" href="contents.css" media="only screen and (min-width:770px)">

<div style="background-color: beige;">
    <body style="background-color: beige;">
    <?php
    if (!isset($_SESSION["login"]))
    {
        $_SESSION["login"] = "false";
        $_SESSION["uname"] = "";
    }
    else
    {
        echo $_SESSION["uname"] . " is currently logged in.";
    };
    ?>
        <menu class="vertical-menu">
            Table of Contents
            <a href="../InitialForm/PageOne.php" class="active">Initial Form</a>
            <a href="../TableAlignment/PageTwo.php">Table Alignment</a>
            <a href="../FLASHBANG!!/PageThree.php">FLASHBANG!</a>
            <a href="../daKing/PageFour.php">Ode to DeDeDe</a>
            <a href="../humanpersonfanpage/theProf.php">Professor Who fanpage</a>
            <a href="../programrap/PageSix.php">Esoteric Language Rap</a>
            <a href="../otherassignment/PageSeven.php">Assignment Table</a>
            <a href="../formcursion/PageEight.php">Formcursion</a>
            <a href="../andytop10thing/tenbestthing.php">Andy's Top 10 things</a>
            <a href="../colebottom10thing/PageTen.php">Cole's Bottom 10 things</a>
        </menu>
    </body>
</div>