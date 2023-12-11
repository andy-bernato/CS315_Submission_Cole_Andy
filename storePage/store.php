<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="store.css" media="only screen and (min-width:770px)">
    <link rel="stylesheet" href="storesmall.css" media="only screen and (max-width:769px)">
    <div id="storenav">
        <a class="active" href="store.php">Store</a>
        <a href="../InitialForm/PageOne.php">Home</a>
        <a class="cart" href="../cart/cart.php">Cart</a>
        <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        } else {
            echo'<a href="../returninguserlogin/returninglogin.php">Login</a>';
        }
        ?>
    </div>
</head>
<p style="color:black">
    
</p>
<?php
    try {
        $connStrink = "mysql:host=localhost:8889; dbname=ip_projects";
        $user = "root";
        $pass = "root";

        $pdo= new PDO($connStrink, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo("Database connection unsuccessful");
    }

?>

<?php
      
    if(isset($_POST['plateButton'])) {
        $cookie_value;
        $cookie_name = "PlateCookie";
        if (isset($_COOKIE[$cookie_name])) {
            $cookie_value = $_COOKIE[$cookie_name] + 1;
        } else {
            $cookie_value = 1;
        }
        setcookie($cookie_name, $cookie_value, time() + 8000, "/");
    } 
    if(isset($_POST['flashButton'])) {
        $cookie_value;
        $cookie_name = "FlashCookie";
        if (isset($_COOKIE[$cookie_name])) {
            $cookie_value = $_COOKIE[$cookie_name] + 1;
        } else {
            $cookie_value = 1;
        }
        setcookie($cookie_name, $cookie_value, time() + 8000, "/");
    } 

    if(isset($_POST['videoButton'])) {
        $cookie_value;
        $cookie_name = "VideoCookie";
        if (isset($_COOKIE[$cookie_name])) {
            $cookie_value = $_COOKIE[$cookie_name] + 1;
        } else {
            $cookie_value = 1;
        }
        setcookie($cookie_name, $cookie_value, time() + 8000, "/");
    }
    if(isset($_POST['rapButton'])) {
        $cookie_value;
        $cookie_name = "RapCookie";
        if (isset($_COOKIE[$cookie_name])) {
            $cookie_value = $_COOKIE[$cookie_name] + 1;
        } else {
            $cookie_value = 1;
        }
        setcookie($cookie_name, $cookie_value, time() + 8000, "/");
    } // These should probably just become one function
?>
<br><br>
<body id="storeBody">
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
    <br><br><br>
    <h1 id="storeheader">Welcome to our store!</h1>
    <p id="storeheader">
        We have several delightful wares we're sure you'd be interested in. Prices are as listed, though
        negotiations for specific non-physical items are possible. Please do not hesitate to contact us with 
        any questions!
    </p>
    <div class = "grid-container">
        <div class="grid-item">
            <p>
                <h>Table alignment commemorative plate</h>
                <br><br>
                <img src="storeimages/alignmentplate.png" width="20%">
                <p id="storep">
                    <?php
                    if ($_SESSION["login"] == "true")
                    {
                        echo '<b>Price: <s>$20</s> $18</b>';
                    } else {
                        echo '<b>Price: $20</b>';
                    }
                    ?>
                    <br>
                    What better way is there to celebrate Christmas than with a unique commemorative plate?
                    Perfect for all of your eating and table-ranking needs!
                </p>
                <form method="post">
                    <input type="submit" name="plateButton"
                    class="button" value="Buy" onclick=addedPlate()/>
                </form>
                <p>
                <?php 
                if (isset($_POST['plateButton'])) {
                    echo ("Added to cart!");
                }
                ?> 
            </p>
            </p>
        </div>
        <div class="grid-item"> 
            <p>
                <h>An actual, honest to god flashbang</h>
                <div id="disclaimer">
                    For legal reasons we must clarify that we are not actually selling weaponry.
                    We acknowledge such actions are highly illegal and are simply attempting to make a joke
                    for our school project. Thanks!
                </div>
            </p>
            <img src="storeimages/an_actual_flashbang.jpg" width="20%">
            <p id="storep">
                <?php
                    if ($_SESSION["login"] == "true")
                    {
                        echo '<b>Price: <s>$200</s> $180</b>';
                    } else {
                        echo '<b>Price: $200</b>';
                    }
                ?>
                <br>
                Looking for a way to liven up any party? Just try one of our honest to god flashbangs!
                Guaranteed to make any party that much more exciting, or your money back.
            </p>
            <form method="post">
                <input type="submit" name="flashButton"
                class="button" value="Buy" onclick=addedFlash()/>
            </form>

            <p>
                <?php 
                if (isset($_POST['flashButton'])) {
                    echo ("Added to cart!");
                }
                ?> 
            </p>
        </div>
        <div class="grid-item">
            <h>Inside Insight Videos From Us</h>
            <br><br>
            <img src="storeimages/cole_andy.JPG" width="40%">
            <p id="storep">
                <?php
                    if ($_SESSION["login"] == "true")
                    {
                        echo '<b>Price: <s>$18</s> $15</b>';
                    } else {
                        echo '<b>Price: $18</b>';
                    }
                ?>
                <br>
                Ever wonder why we made our assignments in the "Previous Assignments" page the way we did? Wonder no more!
                These videos will make sure you know exactly why we did the things we did! Perfect Christmas gift for any child.
                Sold in NFT form to protect against redistribution.
            </p>

            <form method="post">
                <input type="submit" name="videoButton"
                class="button" value="Buy"/>
            </form>

            <p>
                <?php 
                if (isset($_POST['videoButton'])) {
                    echo ("Added to cart!");
                }
                ?> 
            </p>

        </div>  
        <div class="grid-item">
            <h>Foreword from DJ Esoteric Rappuh</h>
            <br><br>
            <img src="storeimages/toddshadows.jpg" width="30%">
            <p id="storep">
                <?php
                    if ($_SESSION["login"] == "true")
                    {
                        echo '<b>Price: <s>$10</s> $8</b>';
                    } else {
                        echo '<b>Price: $10</b>';
                    }
                ?>
                <br>
                An mp4 of the inspired, passionate esoteric rap from the namesake page, complete with a foreword
                from the man who rapped it. A must-have for any rap enthusiast. Also sold as an NFT.
            </p>

            <form method="post">
                <input type="submit" name="rapButton"
                class="button" value="Buy" onclick=addedRap()/>
            </form>

            <p>
                <?php 
                if (isset($_POST['rapButton'])) {
                    echo ("Added to cart!");
                }
                ?> 
            </p>
        </div>
    </div>
</body>