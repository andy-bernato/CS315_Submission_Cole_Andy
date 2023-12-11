<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="daKing.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="daKingsmall.css" media="only screen and (max-width:769px)">
</head>

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

<!-- <h>
    <body onload="soundTrigger()"></body>
    <script>
        function soundTrigger() {
            var audio = new Audio('DededeBattle.mp3');
            audio.play();
            
        }
    </script>
</h> -->

<body id="mainChunk">
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
    <div id="main-chunk">
        <p>Oh, King DeDeDe, in my tipsy, happy state,
        I've had a few too many stars, I'm feeling great.
        You might be my rival, we've fought a million times,
        But tonight, I'm seeing you in neon-colored rhymes.</p>

        <p>You've swiped my cake, my apples, my dreams, oh my,
        But, DeDeDe, tonight, let's give peace a try.
        Your mallet's mighty, but your heart's kinda swell,
        In this fuzzy world, I'm under your kingly spell.</p>

        <p>I'll slur and stumble, but I'm here to say,
        That in this boozy haze, I think you're A-OK.
        Your castle's shiny, your laughs are big and bold,
        In this drunken love, our story will be told.</p>

        <p>So, DeDeDe, from my wobbly heart so pink,
        In this dizzy moment, let's share a drink.
        In Dream Land's starry sky, where we both might roam,
        I'll toast to you, my royal friend, in my tipsy home.</p>

        <p>Though we brawl and tussle, again and again,
        Tonight, let's be pals, let's make a toast, my friend.
        In this swirling world, where everything's just right,
        King DeDeDe, you're a true star tonight!</p>


    </div>
</body>