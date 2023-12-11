<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="contentssmall.css" media="only screen and (max-width:769px)">
<link rel="stylesheet" href="contents.css" media="only screen and (min-width:770px)">

<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        } else {
            echo '<a href="../returninguserlogin/returninglogin.php">Login</a>';
        }
    ?>
</div>
<br><br><br>

<div style="background-color: beige;">
    <body style="background-color: beige;">
    <?php
    if (!isset($_SESSION["login"])|| $_SESSION["login"] == "false")
    {
        $_SESSION["login"] = "false";
        $_SESSION["uname"] = "";
    }
    else
    {
        echo $_SESSION["uname"] . " is currently logged in.";
    };
    if ($_SESSION["login"] == "true")
    {
        echo '<menu class="vertical-menu">';
        echo 'Table of Contents';
        echo '<a href="../InitialForm/PageOne.php" class="active">Initial Form</a>';
        echo '<a href="../TableAlignment/PageTwo.php">Table Alignment</a>';
        echo '<a href="../FLASHBANG!!/PageThree.php">FLASHBANG!</a>';
        echo '<a href="../daKing/PageFour.php">Ode to DeDeDe</a>';
        echo '<a href="../humanpersonfanpage/theProf.php">Professor Who fanpage</a>';
        echo '<a href="../programrap/PageSix.php">Esoteric Language Rap</a>';
        echo '<a href="../otherassignment/PageSeven.php">Assignment Table</a>';
        echo '<a href="../formcursion/PageEight.php">Formcursion</a>';
        echo '<a href="../andytop10thing/tenbestthing.php">Andys Top 10 things</a>';
        echo '<a href="../colebottom10thing/PageTen.php">Coles Bottom 10 things</a>';
        echo '</menu>';
    }
    else
    {
        echo "Want to view the table of contents? Simply log in!";
    }    
    ?>
    </body>
</div>