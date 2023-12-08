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
        <a href="../returninguserlogin/returninglogin.php">Login</a>
        <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
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
    <h1 style = "text-align: center;">Welcome to our store!</h1>
    <p>
        We have several delightful wares we're sure you'd be interested in. Prices are as listed, though
        negotiations for specific non-physical items are possible. Please do not hesitate to contact us with 
        any questions!
    </p>
    <div class = "grid-container">
        <div class="grid-item">
            <p>
                <h>Table alignment commemorative plate</h>
                <div>


                </div>
                <img src="storeimages/alignmentplate.png" width="20%">
                <p>Price: $20</p>
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
            <p>
                Price: $100
            </p>
        </div>
        <div class="grid-item">
            <img src="storeimages/an_actual_flashbang.jpg" width="20%">
        </div>  
        <div class="grid-item">4</div>
    </div>
</body>