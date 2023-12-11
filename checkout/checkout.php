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

<form  method="post" id= "pay" name = "validate" onsubmit=returnToHome() action = "<?php echo htmlspecialchars("orderSuccess.php");?>">
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