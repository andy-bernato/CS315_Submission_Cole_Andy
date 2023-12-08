<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        if (!isset($_SESSION["login"]))
        {
            $_SESSION["login"] = "false";
        };
        ?>
        <link rel="stylesheet" href="theWorst.css" media="only screen and (min-width:770px)">
        <link rel="stylesheet" href="theWorstsmall.css" media="only screen and (max-width:769px)">
        <div id="topnav">
            <a href="../InitialForm/PageOne.php">Home</a>
            <a href="../storePage/store.php">Store</a>
            <a href="../login/login.php">Login</a>
        </div>
        <p id="introtext">
            Hey, this is Cole. In my personal opinion, Andy got the fun list. Now I get to make a list of my
            bottom 10 things. Is this less than idea? Absolutely. However, I lost the coin flip.

            And I am nothing but a man of my word. So please enjoy. These are in a very particular order.
            (This will NOT be on the test though, so don't worry)
        </p>
    </head>
    <main >
        <body id="mainbody">
            <p id="bodyHeaderText">
                #10: Bayonetta (Smash Bros Ultimate)
            </p>
            <img src="extraStuff/bayoPic.jpg" style="width:20%">
            <p id="mainbodyText">
                As a wholesome Isabelle main, I simply can NOT condone Andy's enjoyment of the character. I just don't 
                understand what exactly the reasoning behind him playing this character is. Especially when he could be playing 
                an incredibly cool character like King Dedede. I just don't get it. What makes her fun? The stylish combos?
                The ability to clip you once and deal 60%? I mean, so many characters can do that, so what makes Bayo special?
            </p>
            <p id="bodyHeaderText">
                #9: Archimedes (The owl from The Sword in the Stone)
            </p>
            <img src="extraStuff/Archimedes.webp" style="width:20%">
            <p id="mainbodyText">
                This. Owl. Sucks. He's easily the most arrogant side character that Disney has ever produced.
                The Sword in the Stone is even a good movie, but every scene with him in it just grates on my nerves.
                I mean seriously, how do you make an owl this annoying?
            </p>
            <p id="bodyHeaderText">
                #8: This Guy (Gordo) (The best/worst projectile ever)
            </p>
            <img src="extraStuff/Gordo.webp" style="width:20%">
            <p id="mainbodyText">
                Sometimes I love this little guy. Most of the time I hate him. As a former main of the noble King Dedede,
                so much of the gameplan relied on this stupid guy. And on the surface, it seems so good. A combo tool of 
                a projectile that deals lots of damage AND ledgetraps? Woah. But no, the smallest of hits is enough to send 
                this stupid guy hurtling back in your direction. Curse you gordo.
            </p>
            <p id="bodyHeaderText">
                #7: Me, Myself, and I
            </p>
            <img src="extraStuff/myself.png" style="width:20%">
            <p id="mainbodyText">
                For legal reasons, this is a complete joke. I'm actually a pretty stand-up guy. Incredibly likeable,
                or so I've been told. I just couldn't help myself but to put something like this on here.
            </p>
            <p id="bodyHeaderText">#6: Snapchat</p>
            <img src="extraStuff/snappy.jpg" style="width:20%">
            <p id="mainbodyText">
                What's the point of this app? I've seen people use it. And when I say use it, I mean send a message. 
                A message that's basically just a text. I've also watched people take the same picture like 4 different 
                times and send them all to different people. I just . . . Why? Really, what is even the point?
            </p>
            <p id="bodyHeaderText">#5: Green Beans</p>
            <img src="extraStuff/theBean.webp" style="width:20%">
            <p id="mainbodyText">
                I used to love these things. I mean genuinely. I don't exactly know what changed between now and like 5th grade, 
                but I don't care for them anymore. The beans just aren't any good for me. But that's okay. I may hate them,
                but I acknowledge the healthy parts. And I suppose I can eat them if I have to. Which I don't.
            </p>
            <p id="bodyHeaderText">#4: Emotions (Specifically Mine)</p>
            <img src="extraStuff/emo.png" style="width:20%">
            <p id="mainbodyText">
                I do not like my emotions. If I could simply turn them off, things would be so much easier. However, 
                I'm stuck with them. Which means I'm stuck caring how things are going and how people are doing.
                That's not exactly the easiest thing, though I'm slowly finding that it's worth it. This started lower 
                on the list and has steadily moved its way up.
            </p>
            <p id="bodyHeaderText">#3: These Adorable Creatures</p>
            <img src="extraStuff/allergiesIncarnate.jpg" style="width:20%">
            <p id="mainbodyText">
                I really hate that I hate these guys so much. Because I genuinely love cats. These animals are absolutely 
                glorious. They're just so wonderful that I can't help but want to be around them. AND THAT'S THE PROBLEM!
                I am so terribly allergic to these little guys that simply being near them is a problem for my health. But 
                I just want to spend time with them. And I can't. And I hate it.
            </p>
            <p id="bodyHeaderText">#2: Whe even is this?</p>
            <img src="extraStuff/whoIsThis.jpg" style="width:20%;">
            <p id="mainbodyText">
                Ah Despicable Me 3, how I really don't know how I feel about you. On one hand, I really liked your central villain.
                On the other hand, something about Gru being dedicated good guy doesn't sit well with me. The usage of the minions, also
                not ideal. And then there's this guy. Completely incompetent, not worth the screentime, and so not memorable.
                I genuinely, and this isn't even a bit or a joke, do NOT remember this guy's name. Google is telling me that it's 
                Dru? Dru? Who the heck is Dru? A waste of space, and a terrible character.
            </p>
            <p id="bodyHeaderText">#1: Lists</p>
            <img src="extraStuff/goodJoke.webp" style="width:20%">
            <p id="mainbodyText">
                Most of all, above everything else on this list, I hate lists. I mean seriously? What's the point of putting things 
                into a list? You should just do what I usually do and leave them in a completely jumbled pile on your floor 
                until you realize that you need something buried in the bottom of the pile. It's a great way of doing things, and I 
                think that if people did that more than they made lists, the world would be a more peaceful place.
            </p>
            <p id="bodyHeaderText">
                Honorable Mention :
                
                <button type="button" id="forTheLoveOfGodNo" onclick="breakingPoint()">
                    This Terrible Sound Effect (You'll want to lower the volume on this one)
                </button> 
                <script>
                    function breakingPoint() {
                        var badNoise = new Audio('extraStuff/theWorstSound.mp3');
                        badNoise.play();
                    }
                </script>  
            </p>
           
            <button type="button" id="return" onclick="window.location.href='../InitialForm/PageOne.php';">
                Return to Home
            </button>
        </body>
    
    </main>