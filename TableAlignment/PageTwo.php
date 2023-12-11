<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="table.css" media="only screen and (min-width:770px)">
<link rel="stylesheet" href="tablesmall.css" media="only screen and (max-width:769px)">

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
<head id="tablediv">
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
</head>
<br>
<body id="tablediv">
    <img src="images/Screenshot 2023-11-06 201541.png" style="width:40%">
</body>