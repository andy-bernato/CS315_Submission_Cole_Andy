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
<body id="body"></body>
<?php
    $connstring = "mysql:host=localhost;port=8889;dbname=ip_projects;";
    $user = "root";
    $pass = "root";

    $newuname;
    $newupass;
    $newuemail;

    $userError = $passError = $emailError = "";
    $isError = false;

    try {
        // creating a php database object
        $pdo = new PDO($connstring, $user, $pass);
        // exception handling parameters
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        function clean_new_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ((empty($_POST["User"]))) {
                $isError = true;
                $userError = "Username is required";
            }
            if ((empty($_POST["Pass"]))) {
                $isError = true;
                $passError = "Password is required";
            }
            if ((empty($_POST["Email"]))) {
                $isError = true;
                $emailError = "Email is required";
            } else if (!filter_var(($_POST["Email"]), FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
            if (!($isError)) {
                $newuname = clean_new_input($_POST["Username"]);
                $newuemail = clean_new_input($_POST["Email"]);
                $newupass = clean_new_input($_POST["Pass"]);

                $excheck = $pdo->prepare("SELECT username FROM logins WHERE username = ?");
                $excheck->execute([$newuname]);
                $excheckem = $pdo->prepare("SELECT username FROM logins WHERE email = ?");
                $excheckem->execute([$newuemail]);
                echo("Checked");
                if($excheck->rowCount() ==1) {
                    $userError += "Username unavailable. Please either log in or choose a different username.";
                }
                else if($excheckem->rowCount() == 1) {
                    if ((strlen($emailError)) < 3) {
                        $emailError = "Email is already in use. Please select a new email.";
                    }
                }
                else {
                    $sql = "INSERT INTO logins (username, password, email) VALUES(?,?,?)"; 
                    $result = $pdo->prepare($sql); //prep query to insert vals
                    $result->execute([$newuname, $newupass, $newuemail]);
                    $_SESSION["login"] = "true";
                    $_SESSION["uname"] = "$uname";
                    echo "Thank you for creating a new account $uname!";
                }

            }
                        

            if (strlen($userError) > 1) {
                // Css mod
            }

            if (strlen($passError) > 1) {
                // css mod
            }

            if (strlen($emailError) > 1) {
                // CSS MOD
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
                <input type="text" id="username" name="Username" <?php 
                if (strlen($userError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $userError;?></span>
                <br><br>
            </p>
            <p>
                <label for="email">Enter your email:</label>
                <input id="email" name="Email" <?php 
                if (strlen($emailError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $emailError;?></span>
                <br><br>
            </p>
            <p>
                <label for="text">Create a Password:</label>
                <input id="pass" name="Pass" <?php 
                if (strlen($passError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $passError;?></span>
                <br><br>
            </p>

            <input type="submit" name = "submit" value = "Submit"/>
        </fieldset>
    </form>
</body>