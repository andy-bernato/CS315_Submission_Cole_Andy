<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="form.css" media="only screen and (min-width:770px)">
<link rel="stylesheet" href="formsmall.css" media="only screen and (max-width:769px)">

<div id="topnav">
    <a class="active" href="PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../TableOfContents/TableOfContents.php">Table of Contents</a>
    <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        } else {
            echo '<a href="../returninguserlogin/returninglogin.php">Login</a>';
        }
        ?>
</div>
<br><br>
<body id="formbody">
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
    <script src="former.js"></script>
    <form method="post" id="jsonInput" name = "validate" onsubmit = "checkFields()">
        <fieldset>
            <legend> Totally Secure user data input </legend>
            <p>
                <label>Name:</label>
                <input type="text" id="nameID" name="Name" />
            </p>
            <p>
                <label for="email">What's your favorite plane of existence?:</label>
                <input id="firstemail" name="Email">
            </p>
            <p>
                <label>How joitled are you right now:</label>
                non-joitled (Sad)
                <input type="range" id="joitledness" min="0" max="10000" step="10" name="Is you joitled?"/>
                Joitled! (happy)
            </p>
            <p>
                <label>Wat grade are you going to give us:</label>
                <select name="Grade" id ="gradeID">
                    <option>Select a Grade</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                    <option>A</option>
                </select>
            </p>
            <input type="submit"/>
        </fieldset>
        Your data will appear here
    </form>
    <button type="button" id="randomPage" onclick=randomPage()>
        Go to a WACKY random website
    </button>
    <script src="former.js"></script>
</body>