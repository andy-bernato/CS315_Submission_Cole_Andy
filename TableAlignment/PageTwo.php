<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    ?>
    <link rel="stylesheet" href="table.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="tablesmall.css" media="only screen and (max-width:769px)">
</head>

<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../returninguserlogin/returninglogin.php">Login</a>
    <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        }
    ?>
</div>


<div>
    <img src="images/Screenshot 2023-11-06 201541.png" style="width:40%">
    <p></p>
    <button type="button" id="return" onclick="window.location.href='../InitialForm/PageOne.php';">
        Return to Home
    </button>
</div>