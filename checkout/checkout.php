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
<link rel="stylesheet" href="checkout.css" media="only screen and (min-width:770px)">
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
            if ((empty($_POST["Cardnum"]))|| strlen($_POST["Cardnum"]) > 16 || strlen($_POST["Cardnum"]) < 16) {
                $isError = true;
                $cardError = "Card Info Required";
            } else if (!is_numeric($_POST["Cardnum"])) {
                $cardError = "Invalid Card Number";
            }
            if ((empty($_POST["Security"])) || strlen($_POST["Security"]) > 3|| strlen($_POST["Security"]) < 3) {
                $isError = true;
                $secError = "Valid Security Code Required";
            } else if (!is_numeric($_POST["Security"])) {
                $secError = "Invalid Security Number";
            }
            if ((empty($_POST["Add"]))) {
                $isError = true;
                $addError = "Address is not Valid";
            }
            if ($_POST['State'] == '') {
                $isError = true;
                $stError = "Please select a valid State.";
            }
            if ((empty($_POST["Zip"])) || strlen($_POST["Zip"]) > 5|| strlen($_POST["Zip"]) < 5) {
                $isError = true;
                $zipError = "Valid Zipcode Required";
            } else if (!is_numeric($_POST["Zip"])) {
                $zipError = "Invalid Zipcode";
            }
            if (!($isError)) {
                $card = clean_new_input($_POST["Cardnum"]);
                $sec = clean_new_input($_POST["Security"]);
                $add = clean_new_input($_POST["Add"]);
                $st = clean_new_input($_POST["State"]);
                $zip = clean_new_input($_POST["Zip"]);
                if (!isset($_SESSION["login"]) || $_SESSION["login"] == "false") {
                    $storeUser = "guest";
                }
                else {
                    $storeUser = $_SESSION["login"];
                }
                

                $items = "";
                if (isset($_COOKIE["PlateCookie"]))
                {
                    $items .= "Plates: " . $_COOKIE["PlateCookie"];
                }
                if (isset($_COOKIE["FlashCookie"]))
                {
                    $items .= " Flashbangs: " . $_COOKIE["FlashCookie"];
                }
                if (isset($_COOKIE["VideoCookie"]))
                {
                    $items .= " Videos: " . $_COOKIE["VideoCookie"];
                }
                if (isset($_COOKIE["RapCookie"]))
                {
                    $items .= " Raps: " . $_COOKIE["RapCookie"];
                }

                $sql = "INSERT INTO orders (user, card, security_num, items, address, state, zip) VALUES(?,?,?,?,?,?,?)"; 
                $result = $pdo->prepare($sql); //prep query to insert vals
                $result->execute([$storeUser, $card, $sec, $items, $add, $st, $zip]);   
                echo '<div id="message">';
                echo "Thank you for your purchase $storeuser!";
                echo '</div>';
                    
                if (isset($_COOKIE["PlateCookie"]))
                {
                    $cookie_name = "PlateCookie";
                    setcookie($cookie_name, 0, time() - 8000, "/");
                }
                if (isset($_COOKIE["FlashCookie"]))
                {
                    $cookie_name = "FlashCookie";
                    setcookie($cookie_name, 0, time() - 8000, "/");
                }
                if (isset($_COOKIE["VideoCookie"]))
                {
                    $cookie_name = "VideoCookie";
                    setcookie($cookie_name, 0, time() - 8000, "/");
                }
                if (isset($_COOKIE["RapCookie"]))
                {
                    $cookie_name = "RapCookie";
                    setcookie($cookie_name, 0, time() - 8000, "/");
                }
                header('Location: ../checkout/orderSuccess.php');
                }

                
            }  
        }
        catch (PDOException $e) { // exception handling
        echo "Database connection unsuccessful";
        die($e->getMessage());
        }
?>

<form  method="post" id= "pay" name = "validate" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend> Please input your payment information </legend>
            <p>
                <label>Credit Card: </label>
                <input type="text" id="cardnum" name="Cardnum" <?php 
                if (strlen($cardError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $cardError;?></span>
                <br><br>
            </p>
            <p>
                <label type="text">Security Code: </label>
                <input id="security" name="Security" <?php 
                if (strlen($secError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $secError;?></span>
                <br><br>
            </p>
            <p>
                <label type="text">Address Line 1: </label>
                <input id="add" name="Add" <?php 
                if (strlen($addError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $addError;?></span>
                <br><br>
            </p>
            <p>
                <label>State: </label>
                <select name="State" id ="state" <?php if (strlen($stError > 3)) {echo ('style="background-color:red;"');}
                ?>>
                    <option></option>
                    <option>AL</option>
                    <option>AK</option>
                    <option>AZ</option>
                    <option>AR</option>
                    <option>CA</option>
                    <option>CO</option>
                    <option>CT</option>
                    <option>DE</option>
                    <option>DC</option>
                    <option>FL</option>
                    <option>GA</option>
                    <option>HI</option>
                    <option>ID</option>
                    <option>IL</option>
                    <option>IN</option>
                    <option>IA</option>
                    <option>KS</option>
                    <option>KY</option>
                    <option>LA</option>
                    <option>ME</option>
                    <option>MD</option>
                    <option>MA</option>
                    <option>MI</option>
                    <option>MN</option>
                    <option>MS</option>
                    <option>MO</option>
                    <option>MT</option>
                    <option>NE</option>
                    <option>NV</option>
                    <option>NH</option>
                    <option>NJ</option>
                    <option>NM</option>
                    <option>NY</option>
                    <option>NC</option>
                    <option>ND</option>
                    <option>OH</option>
                    <option>OK</option>
                    <option>OR</option>
                    <option>PA</option>
                    <option>RI</option>
                    <option>SC</option>
                    <option>SD</option>
                    <option>TN</option>
                    <option>TX</option>
                    <option>UT</option>
                    <option>VT</option>
                    <option>VA</option>
                    <option>WA</option>
                    <option>WV</option>
                    <option>WI</option>
                    <option>WY</option>
                </select>
                <span class="error">* <?php echo $stError?></span>
            </p>
            <p>
                <label type="text">Zip: </label>
                <input id="zip" name="Zip" <?php 
                if (strlen($zipError > 3)) {echo ('style="background-color:red;"');}
                ?>/>
                <span class="error">* <?php echo $zipError;?></span>
                <br><br>
            </p>

            <input type="submit" name = "submit" value = "Submit"/>
        </fieldset>
    </form>  
    
