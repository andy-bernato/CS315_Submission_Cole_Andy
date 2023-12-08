<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="flashbang.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="flashbangsmall.css" media="only screen and (max-width:769px)">
</head>

<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../login/login.php">Login</a>
</div>

<body id="blinding">
    <?php
    if (!isset($_SESSION["login"]))
    {
        $_SESSION["login"] = "false";
    };
    ?>
    <div id="buttonHolder">
        <button type="button" id="bang" onclick="triggerWarning();">
            Click Me!
        </button>
        <script>
            function triggerWarning() {
                var surprise = new Audio('FlashbangSound.mp3');
                const element = document.getElementById("bang");
                element.remove();
                surprise.play();

                setTimeout(function() {
                    var screen = document.getElementById("blinding");
                    screen.style.backgroundColor = "#FFFFFF";

                    function doAnim() {
                        var target = document.getElementById("blinding");
                        target.classList.add('fadingTime');
                        target.classList.remove('fadingTime');
                        void target.offsetWidth;
                        target.classList.add('fadingTime');
                    }
                    doAnim();
                }, 1900);   
            }
        </script>
    </div>
    <button type="button" id="return" onclick="window.location.href='../InitialForm/PageOne.php';">
           Return to Home
    </button>        
</body>


