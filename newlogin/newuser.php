<?php
// Start the session
session_start();
?>
<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../returninguserlogin/returninglogin.php">Returning</a>
    <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        }
    ?>
</div>
<link rel="stylesheet" href="newuserlogin.css" media="only screen and (min-width:770px)">
<body id="formbody">
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

<?php
    $connstring = "mysql:host=localhost;port=8889;dbname=ip_projects;";
    $user = "root";
    $pass = "root";

    $uname = $upass = $uemail;

    $userError = $passError = $emailError = "";

    try {
        // creating a php database object
        $pdo = new PDO($connstring, $user, $pass);
        // exception handling parameters
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        // navigating through all the rows one at a time
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!(empty($_POST["Username"]))) {
                if (!(empty($_POST["Pass"]))) {

                    if (!(empty($_POST["Email"]))) {
                        $uname = clean_input($_POST["Username"]);
                        $uemail = clean_input($_POST["Email"]);
                        $upass = clean_input($_POST["Pass"]);

                        echo("Cleaned");

                        $excheck = $pdo->prepare("SELECT username FROM logins WHERE username = ?");
                        $excheck->execute([$uname]);
                        $excheckem = $pdo->prepare("SELECT username FROM logins WHERE email = ?");
                        $excheckem->execute([$uemail]);
                        echo("Checked");
                        if($excheck->rowCount() ==1) {
                            $userError += "User already exists. Please either log in or choose a different username.";
                        }
                        else if($excheckem->rowCount() == 1) {
                            $emailError += "Email is already in use. Please select a new email.";
                        }
                        else {
                            $sql = "INSERT INTO logins (username, password, email) VALUES(?,?,?)"; 
                            $result = $pdo->prepare($sql); //prep query to insert vals
                            $result->execute([$uname, $upass, $uemail]);
                            $_SESSION["login"] = "true";
                            $_SESSION["uname"] = "$uname";
                            echo "Thank you for creating a new account $uname!";
                        }
                        
                    } else {
                        echo ("enail error");
                        $emailError += "Email is required.";
                    }

                } else {
                    echo ("pass error");
                    $passError += "Password is required.";
                }

            } else {
                echo ("user error");
                $userError += "Username is required.";
            }
        }
        // closing the connection object
        $pdo = null;
    } catch (PDOException $e) { // exception handling
        echo "Database connection unsuccessful";
        die($e->getMessage());
        }
    ?>
    <form  method="post" name = "validate" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Create New User </legend>
            <p>
                <label>Name:</label>
                <input type="text" id="username" name="Username" />
                <span class="error">* <?php echo $userError;?></span>
                <br><br>
            </p>
            <p>
                <label for="email">Enter your email:</label>
                <input id="email" name="Email">
                <span class="error">* <?php echo $passError;?></span>
                <br><br>
            </p>
            <p>
                <label for="text">Create a Password:</label>
                <input id="pass" name="Pass">
                <span class="error">* <?php echo $emailError;?></span>
                <br><br>
            </p>

            <input type="submit" name = "submit" value = "Submit"/>
        </fieldset>
    </form>
</body>