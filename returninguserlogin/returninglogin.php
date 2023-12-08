<?php
// Start the session
session_start();
?>
<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a class="active" href="./newuser.php">Login</a>
</div>
<link rel="stylesheet" href="newuserlogin.css" media="only screen and (min-width:770px)">
<body id="formbody">
    <?php
    if (!isset($_SESSION["login"]))
    {
        $_SESSION["login"] = "false";
        $_SESSION["uname"] = "";
    }
    else
    {
        echo $_SESSION["uname"] . " is currently logged in.";
    };
    ?>
    <form  method="post" id="jsonInput" name = "validate" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Login</legend>
            <p>
                <label>username:</label>
                <input type="text" id="username" name="Username" />
            </p>
            <p>
                <label for="text">Create a Password:</label>
                <input id="pass" name="Pass">
            </p>

            <input type="submit"/>
        </fieldset>
    </form>
    <?php
    $connstring = "mysql:host=localhost;port=8889;dbname=ip_projects;";
    $user = "root";
    $pass = "root";
    try {
        // creating a php database object
        $pdo = new PDO($connstring, $user, $pass);
        // exception handling parameters
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // navigating through all the rows one at a time
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["Username"]) &&
            isset($_POST["Pass"])) {
                $uname = $_POST["Username"];
                $upass = $_POST["Pass"];
                $excheck = $pdo->prepare("SELECT username FROM logins WHERE username = ?");
                $excheck->execute([$uname]);
                if($excheck->rowCount() !=1) {
                    echo "Username not found in database. Please double check spelling and try again";
                }
                else {
                    $sql = "INSERT INTO logins (username, password, email) VALUES(?,?,?)"; 
                    $result = $pdo->prepare($sql); //prep query to insert vals
                    $result->execute([$uname, $upass, $uemail]);
                    $_SESSION["login"] = "true";
                    $_SESSION["uname"] = $uname;
                }
                
            }
        }
        // closing the connection object
        $pdo = null;
        } catch (PDOException $e) { // exception handling
        echo "Database connection unsuccessful";
        die($e->getMessage());
        }
    ?>
</body>