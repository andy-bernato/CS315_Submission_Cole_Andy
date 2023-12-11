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
    <link rel="stylesheet" href="tenbeststyles.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="tenbeststylessmall.css" media="only screen and (max-width:769px)">
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

    <p id="introtext">
        Hi, my name is Andy, and this is my ten favorite things in order from tenth favorite to most favorite.

        I like a lot of things, and these are the ten I like the most. In one particular order:
        from the tenth most favorite to the most favoritest.
    </p>
    <p id="methodology">
        Methodology:

    </p>
    <img src="imagez/colehelp.png" style="width:40%">
</head>
<main >
    <body id="mainbody">
        <p id="bodyHeaderText">
            #10: Bayonetta from Super Smash Brothers Ultimate
        </p>
        <img src="imagez/OIP.jpg" style="width:20%">
        <p id="mainbodyText">
            She's the most fun character in Super Smash Brothers Ultimate. Cole just doesn't get it. He's not cultured.
            He's a cringe Isabelle main. Like, who likes Isabelle? Anyways, her combos are cool, her edgeguards are fun,
            she's super creative, and she makes me happy. Also, people get mad when they lose to her, so that's neat.
        </p>
        <p id="bodyHeaderText">
            #9: The VelociPastor
        </p>
        <img src="imagez/velocipastor.jpg" style="width:20%">
        <p id="mainbodyText">
            The velocipastor is a classic of modern cinema. With a riveting plot, a unique, insightful idea, and some of
            the worst acting ever seen in a film, it's one of those bad movies that's just SO fun to watch. And you get
            to see a dinosaur pastor beat up bad guys in a hulk-esque fury. What more could you ask for?
        </p>
        <p id="bodyHeaderText">
            #8: LOLCODE
        </p>
        <img src="imagez/lolcode.png" style="width:20%">
        <p id="mainbodyText">
            It's a coding language that lets you code like a cat meme. CAN HAS STDIO? I HAS A VAR. IM IN YR LOOP. 
            What more could you ask for? .... 

            Maybe a bit of functionality, but that's for losers, and it's turing complete, so it can do what those silly
            "industry languages" can but cooler.
        </p>
        <p id="bodyHeaderText">
            #7: Atomic Chess
        </p>
        <img src="imagez/atomic.png" style="width:20%">
        <p id="mainbodyText">
            Chess but the pieces explode. Kings can touch, games routinely end before move 15, and material doesn't matter. 
            And did I mention the pieces explode? It's so cool. And I'm the best at it at Truman. So that makes it even betterer.
        </p>
        <p id="bodyHeaderText">#6: Truman Squirrels</p>
        <img src="imagez/squirrelz.png" style="width:20%">
        <p id="mainbodyText">
            You know them. You love them. Truman's squirrels are a beloved fixture of the local community. From dropping
            acorns on you to scurrying out in front of you on your way to class, or even just being weird lil guys to look at,
            campus truly would not be the same without them.
        </p>
        <p id="bodyHeaderText">#5: Monster Energy</p>
        <img src="imagez/monstie.jpeg" style="width:20%">
        <p id="mainbodyText">
            The average college kid's pipeline to caffeine addiction. You see people hold them on the way to class, drink
            them inappropriately late in the library, or talk about slamming 4 straight in the epic homework bender of Junior year,
            and their presence reminds you that yea, we're all in this together, and it's not always fun. At least they taste good.
        </p>
        <p id="bodyHeaderText">#4: Sleep</p>
        <img src="imagez/sleep.png" style="width:20%">
        <p id="mainbodyText">
            Sleep is good. I do not get enough of it sometimes. Which is bad (getting sleep is commonly seen to be good). I 
            wish I got more sleep (who doesn't?) but it's okay. I like to take melatonin sometimes to help me sleep. Melatonin
            is good. And it gives me funny dreams, which are silly and goofy haha
        </p>
        <p id="bodyHeaderText">#3: Funny Cats</p>
        <img src="imagez/catz.png" style="width:20%">
        <p id="mainbodyText">
            Cats being silly little guys. Cat in various funny scenarios. Cats that make you feel things. Cats you wish you could
            feel. What more is there to want than silly little guys being eeby or sleeby or heccin chonkers or weird lil dudes. 
            I love cats. I have 5 of them. They are all very nice. I wish I could pet them right now. Cats are good. Cats :)
        </p>
        <p id="bodyHeaderText">#2: Making Fun Of Short People</p>
        <img src="imagez/short.png" style="width:20%;">
        <p id="mainbodyText">
            I have a lot of short friends. My sister is short. My ex-girlfriend is short. My buddy Wes is short (he is 6'4). 
            One of my favorite things to do when I see my short friends is remind them they're short. That they can't reach the
            top shelf. That they can't ride all the rides at Six Flags. That brings me joy. Their genetic misfortune makes me happy.
        </p>
        <p id="bodyHeaderText">#1: Internet Programming Class</p>
        <img src="imagez/kafi.jpg" style="width:20%">
        <p id="mainbodyText">
            Please give me extra credit. Please give me extra credit. Please give me extra credit. Please give me extra credit.
            Please give me extra credit. Please give me extra credit. Please give me extra credit. Please give me extra credit.
            Please give me extra credit. Please give me extra credit. Please give me extra credit. Please give me extra credit.
        </p>
        <p id="bodyHeaderText">
            #0: Cole Bracken
        </p>
        <img src="imagez/cole.png">
        <p id="mainbodyText">
            Cole Bracken is my partner. Dottie asked to be his partner, but we agreed ahead of time that he would be my partner. 
            This is because Cole and I are besties. Cole is really cool. He's super fun, humble, and goofy. He also refuses to
            believe he's a main character. So here's to Cole being a main character. He's awesome and we love him.
        </p>
    </body>

</main>