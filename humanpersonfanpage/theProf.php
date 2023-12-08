<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../login/login.php">Login</a>
</div>

<head>
    <?php
    if (!isset($_SESSION["login"]))
    {
        $_SESSION["login"] = "false";
    };
    ?>
    <link rel="stylesheet" href="professor.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="professorsmall.css" media="onlyscreen and (max-width:769px)">
    This entire template is stolen from my last project. Stuff will be basically the same but with different text. This is because
    the fanpage was perfect the first time, so why change the format?
    <nav>
        <a href="../InitialForm/PageOne.html">These all go to the same place now</a> |
        <a href="../InitialForm/PageOne.html">That place is back to the inital form page (so you can see more epic sites)</a> |
        <a href="../InitialForm/PageOne.html">It's like a 'choose your own adventure', but you have no choice in the matter</a> |
        <a href="../InitialForm/PageOne.html"><img src="professorimages/andrewnavigation.jpg" width="220" height="220"></a> |
        <a href="../InitialForm/PageOne.html">Andrew's face is still here though. It's too good a bit to not include.</a>
    </nav>
    <title>Professor Who Fan Page</title>
</head>
<main>
    <body style="background-color: black;">
        <h1 style="align-content: center;">Professor Who Fan Page</h1>
        <img src="professorimages/professorwho.png" style="width:40%">
        <section id="professorWhoMainBody">This is Professor Who. Apparently he's magic and stuff. The legends say he can 
            time travel. They also tell me he has a lot of fans. According to those fans, they broadcast his face on the 'BBC'.
            That sounds super cool and I like that. They also call him "Dr. Who", but I think professor sounds more professional. 
            I would like to take a class with professor who. That sounds fun and exciting. He looks like he'd be a dorky math professor.
            But like, a good one. I would take calc 3 with Professor Who. But not advanced calc, I hear that class is too hard. 
            My friend Caleb is in it right now. Caleb is cool. He plays Luigi. Luigi makes me sad. You know who doesn't make me sad?
            My boy professor Who. Professor Who makes me happy. Like cats and the things on my top 10 list. My top 10 list is good. 
            You should go find it after you're done reading this. I've been writing for a while and I'm tired. So i'll stop now.
        </section>
        <p>The next link does not give you more fun facts about Professor Who.</p>
        <a href="/InitialForm/PageOne.html">This also takes you back to the home page</a>
        <section id="professorWhoMainBody">
            Professor who says ur a meaniehead if you don't give us an A on this project. You wouldn't want professor who
            to think you're a meaniehead, would you?
            <a href="/programrap/PageSix.html">These do not take you to the main page</a>
            <a href="/andytop10thing/tenbestthing.html">Click at your own risk</a>
        </section>
    </body>
</main>

<button type="button" id="return" onclick="window.location.href='../InitialForm/PageOne.php';">
    Return to Home
</button>