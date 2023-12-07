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
    $constring = "mysql:host=localhost;port=8889;dbname=ip_projects;";
    $user = "root";
    $pass = "root";
    try {
        // creating a php database object
        $pdo = new PDO($connString, $user, $pass);
        // exception handling parameters
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // creating the query to get rows of data from the table
        $sql = "SELECT * FROM student_info";
        $result = $pdo->query($sql); // committing the query
        // navigating through all the rows one at a time
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["username"]) &&
            isset($_GET["pass"]) && 
            isset($_GET["email"])) {

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