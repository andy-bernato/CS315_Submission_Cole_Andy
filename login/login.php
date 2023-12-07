
<div id="topnav">
    <a href="../InitialForm/PageOne.php">Home</a>
    <a href="../storePage/store.php">Store</a>
    <a href="../login/login.php">Login</a>
</div>
<link rel="stylesheet" href="login.css" media="only screen and (min-width:770px)">
<body id="formbody">
    <form  method="post" id="jsonInput" name = "validate" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Create New User </legend>
            <p>
                <label>Name:</label>
                <input type="text" id="username" name="Username" />
            </p>
            <p>
                <label for="email">Enter your email:</label>
                <input id="email" name="Email">
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
            isset($_POST["Pass"]) && 
            isset($_POST["Email"])) {
                $uname = $_POST["Username"];
                $uemail = $_POST["Email"];
                $upass = $_POST["Pass"];
                $excheck = $pdo->prepare("SELECT username FROM logins WHERE username = ?");
                $excheck->execute([$uname]);
                $excheckem = $pdo->prepare("SELECT username FROM logins WHERE email = ?");
                $excheckem->execute([$uemail]);
                if($excheck->rowCount() ==1) {
                    echo "User already exists. Please either log in or choose a different username.";
                }
                else if($excheckem->rowCount() == 1) {
                    echo "Email is already in use. Please select a new email.";
                }
                else {
                    $sql = "INSERT INTO logins (username, password, email) VALUES(?,?,?)"; 
                    $result = $pdo->prepare($sql); //prep query to insert vals
                    $result->execute([$uname, $upass, $uemail]);
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