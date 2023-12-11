<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="otherassign.css" media="only screen and (min-width:770px)">
<link rel="stylesheet" href="otherassignsmall.css" media="only screen and (max-width:769px)">

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

<body id="tablebody">
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
    <table>
        <tr>
            <th>Link</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><a href="AndyPrior/index.html">Platonic Friendship?</a></td>
            <td>A fiery tour-de-passion of one man's love for several other men. An unbridled romance waiting to be explored?</td>
        </tr>
        <tr>
            <td><a href="https://www.poetryfoundation.org/poems/49303/howl">Howl</a></td>
            <td>Considered by some to be the greatest poem to come out of the Beat Movement, Howl is a generational pieces
                detailing life as a hippie during the American spiritual revolution of the 60s.</td>
        </tr>
        <tr>
            <td><a href="https://www.coolmathgames.com/">Cool Math Games</a></td>
            <td>The most nostalgic flash game website for everyone who's ever gone through an American middle school.</td>
        </tr>
        <tr>
            <td><a href="ColePriorProject/IntroSite.html">The Greatest Show</a></td>
            <td>An absolutely glorious overview of, well, everything really. (Opinions and results may vary)</td>
        </tr>
        <tr>
            <td><a href="https://www.poetryfoundation.org/poems/42679/the-bear">The Bear</a></td>
            <td>An interesting Pastoral type poem by the late Gallway Kinnell. This poem is worth a read by anybody
                simply looking to be confused, or by anyone who actively enjoys the weirdness that this poem is.</td>
        </tr>
        <tr>
            <td><a href="../InitialForm/PageOne.php">Another Home Button</a></td>
            <td>Another way to return to our home page, completely separate from the actual one. Do note that
                the other links on this page do not actually have a return to home button, so be warned.</td>
        </tr>

    </table>
</body>