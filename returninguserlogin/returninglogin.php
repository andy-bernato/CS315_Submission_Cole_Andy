<?php
// Start the session
session_start();
?>
<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a class="active" href="../newlogin/newuser.php">New User</a>
    <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        }
    ?>
</div>

<?php
    $connstring = "mysql:host=localhost;port=8889;dbname=ip_projects;";
    $user = "root";
    $pass = "root";
    $uname;
    $upass;
    $userError = $passError = "";
    try {
        // creating a php database object
        $pdo = new PDO($connstring, $user, $pass);
        // exception handling parameters
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo ("here"); // Why does this appear on page load?

        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        // navigating through all the rows one at a time
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!(empty($_POST["User"]))) {
                if (!(empty($_POST["Pass"]))) {
                    $uname = clean_input($_POST["User"]);
                    $upass = clean_input($_POST["Pass"]);
                    if (!preg_match("/^[\.a-zA-Z0-9,!? ]*$/",$name)) {
                        $userError = "Only letters, numbers, basic punctuation, and white space allowed";
                    }

                    $excheck = $pdo->prepare("SELECT username FROM logins WHERE username = ?");
                    $excheck->execute([$uname]);
                    $passcheck = $pdo->prepare("SELECT password FROM logins WHERE password = ?");
                    $passcheck->execute([$upass]);
                    if($excheck->rowCount() !=1) {
                        $userError = "Username not found in database. Please double check spelling and try again";
                    }
                    elseif($passcheck->rowCount() !=1) {
                        $passError = "Password is incorrect. Please double check spelling and try again";
                    }
                    else {
                        $_SESSION["login"] = "true";
                        $_SESSION["uname"] = $uname;
                        echo "Welcome back, $uname!";
                    }
    
                    

                } else {
                    $passError = "Password is required";
                }
            } else {
                $userError = "Username is required.";
            }
        }
        // closing the connection object
        $pdo = null;
        } catch (PDOException $e) { // exception handling
        echo "Database connection unsuccessful";
        die($e->getMessage());
        }
    ?>
<link rel="stylesheet" href="newuserlogin.css" media="only screen and (min-width:770px)">
<body id="formbody">
    <?php
    if (!isset($_SESSION["login"]) || $_SESSION["login"] == "false")
    {
        $_SESSION["login"] = "false";
        $_SESSION["uname"] = "";
    }
    else
    {
        echo $_SESSION["uname"] . " is currently logged in.";
    };
    ?>
    <form  method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Login</legend>
                Username: <input type="text" id="username" name="User" />
                <span class="error">* <?php echo $userError;?></span>
                <br><br>
            
                Password: <input type = "text" id="pass" name="Pass">
                <span class="error">* <?php echo $passError;?></span>
                <br><br>

            <input type="submit" name = "submit" value = "Submit"/>
        </fieldset>
    </form>
</body>