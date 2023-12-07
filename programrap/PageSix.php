<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="rap.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="rapsmall.css" media="only screen and (max-width:769px)">
</head>

<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../login/login.php">Login</a>
</div>

<button type="button" id="starter" onclick="playRap();">
    Click Me! (please) (volume on) (seriously) (we put a lot of effort into this) (I mean it)
</button>
<script>
    function playRap() {
        var andyRap = new Audio('New Recording 7.mp3');
        var target = document.getElementById('rapText');
        const element = document.getElementById("starter");
        element.remove();
        target.style.opacity = 1;
        andyRap.play();
    }
</script>
<body>
    <div id="rapText">
        <p>Yo, gather 'round, let me school you 'bout these esoteric codes,
        Languages so wild, they'll make your mind explode.
        From Brainfuck to Whitespace, they're obscure and rare,
        But when you decipher 'em, you'll be walkin' on air.</p>

        <p>Brainfuck, it's the king of 'em all,
        Only eight commands, but it'll make you feel small.
        Plus and minus, left and right, loops that repeat,
        When you code in Brainfuck, it's a crazy feat.</p>

        <p>Malbolge, the code from the darkest abyss,
        Unreadable and twisted, like a venomous hiss.
        It'll mess with your mind, drive you insane,
        But when you crack it, you'll feel no pain.</p>

        <p>Whitespace, it's like a ghost in the machine,
        Just spaces, tabs, and line breaks, it might seem obscene.
        But hidden in the whitespace, there's a secret tale,
        For those who dare to look, the code will prevail.</p>

        <p>INTERCAL, a language so absurd and bizarre,
        With DO COME FROMs and PLEASE GIVE UP BARs.
        It's designed to confuse, it's a devilish troll,
        But mastering INTERCAL is the ultimate goal.</p>

        <p>ArnoldC, that's the language of the Terminator,
        With lines like "I'll be back," you can imitate a creator.
        It's all about Ahnuld, and his famous lines,
        Coding with ArnoldC, it's like the sun that shines.</p>

        <p>Befunge, it's a two-dimensional maze,
        Where the code goes in any direction, in crazy ways.
        With stack operations and mirrors, it's a puzzling chore,
        But when you debug Befunge, you'll want more and more.</p>

        <p>Chef, it's the tastiest code you've ever seen,
        With recipes and ingredients, it's like a dream cuisine.
        Cooking up programs, in a culinary style,
        Chef is unique, it'll make you smile.</p>

        <p>So there you have it, my favorite esoteric crew,
        Languages so strange, but they're worth a view.
        They'll challenge your skills, make your brain flex,
        In the world of esoterics, we're the true specs.</p>
    </div>
</body>
