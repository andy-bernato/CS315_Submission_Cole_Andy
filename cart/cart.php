<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="cart.css" media="only screen and (min-width:770px)">
<head>
    <div id="cartnav">
        <a href="../storePage/store.php">Store</a>
        <a href="../InitialForm/PageOne.php">Home</a>
        <a class="active" href="cart.php">Cart</a>
        <?php
        if ($_SESSION["login"] == "true")
        {
            echo '<a href="../logout/logout.php">Logout</a>';
        } else {
            echo '<a href="../returninguserlogin/returninglogin.php">Login</a>';
        }
        ?>
    </div>
</head>
<br>
<br>
<?php
if(isset($_POST['removePlate'])) {
    $cookie_value;
    $cookie_name = "PlateCookie";
    setcookie($cookie_name, 0, time() - 8000, "/");
} 
if(isset($_POST['removeFlash'])) {
    $cookie_value;
    $cookie_name = "FlashCookie";
    setcookie($cookie_name, 0, time() - 8000, "/");
} 
if(isset($_POST['removeVideo'])) {
    $cookie_value;
    $cookie_name = "VideoCookie";
    setcookie($cookie_name, 0, time() - 8000, "/");
} 
if(isset($_POST['removeRap'])) {
    $cookie_value;
    $cookie_name = "RapCookie";
    setcookie($cookie_name, 0, time() - 8000, "/");
} ?>
<head>
    <p id="cartp">
    Welcome to the cart! Here, you can see what you've ordered and proceed to checkout!
    <br>
    If you would like to remove an item, click the remove button twice. This is to prevent 
    accidental cart removals, and save you time!
    </p>
</head>
<body style="background-color: black;"></body>
<table id="tablefun">
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Remove?</th>
    </tr>
    <?php
        $isItem = false; 
        if (isset($_COOKIE["PlateCookie"])) {
            $isItem = true;
            $item = "Commemorative Plate";
            $pquantity = $_COOKIE["PlateCookie"];
            $price;
            if ($_SESSION["login"] == "true")
            {
                $price = 18;
            } else {
                $price = 20;
            }
            $ptotalprice = $price * $pquantity;
            echo ("<tr>
                    <td>$item</td>
                    <td>$pquantity</td>
                    <td>$ptotalprice</td>
                    <td><form method=\"post\">
                    <input type=\"submit\" name=\"removePlate\"
                    class=\"button\" value=\"Remove\"/>
                </form>
                </tr>");
        }
        if (isset($_COOKIE["FlashCookie"])) {
            $isItem = true;
            $item = "Literal, Actual Flashbang";
            $fquantity = $_COOKIE["FlashCookie"];
            $price;
            if ($_SESSION["login"] == "true")
            {
                $price = 180;
            } else {
                $price = 200;
            }
            $ftotalprice = $price * $fquantity;
            echo ("<tr>
                    <td>$item</td>
                    <td>$fquantity</td>
                    <td>$ftotalprice</td>
                    <td><form method=\"post\">
                    <input type=\"submit\" name=\"removeFlash\"
                    class=\"button\" value=\"Remove\"/>
                </form>
                </td>
                </tr>");
        } 
        if (isset($_COOKIE["VideoCookie"])) {
            $isItem = true;
            $item = "Insightful, Empowering Explanation Videos";
            $vquantity = $_COOKIE["VideoCookie"];
            $price;
            if ($_SESSION["login"] == "true")
            {
                $price = 15;
            } else {
                $price = 18;
            }
            $vtotalprice = $price * $vquantity;
            echo ("<tr>
                    <td>$item</td>
                    <td>$vquantity</td>
                    <td>$vtotalprice</td>
                    <td><form method=\"post\">
                    <input type=\"submit\" name=\"removeVideo\"
                    class=\"button\" value=\"Remove\"/>
                </form>
                </td>
                </tr>");
        } 
        if (isset($_COOKIE["RapCookie"])) {
            $isItem = true;
            $item = "Esoteric Rap";
            $rquantity = $_COOKIE["RapCookie"];
            $price;
            if ($_SESSION["login"] == "true")
            {
                $price = 8;
            } else {
                $price = 10;
            }
            $rtotalprice = $price * $rquantity;
            echo ("<tr>
                    <td>$item</td>
                    <td>$rquantity</td>
                    <td>$rtotalprice</td>
                    <td><form method=\"post\">
                    <input type=\"submit\" name=\"removeRap\"
                    class=\"button\" value=\"Remove\"/>
                </form>
                </td>
                </tr>");
        }
        if ($isItem) {

            $subtotal = $ptotalprice + $vtotalprice + $rtotalprice + $ftotalprice;
            $tax = $subtotal *.1;
            $total = $subtotal + $tax;
            
            echo ("<tr>
                    <td>Subtotal</td>
                    <td></td>
                    <td>$subtotal</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td></td>
                    <td>$tax</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td></td>
                    <td>$total</td>
                    <td></td>
                  </tr>");
                    
        }
    ?>

</table>
<?php
if ($isItem) {
    echo ("<p id=\"cartp\">
    Satisfied? <a href=\"../checkout/checkout.php\">Proceed to Checkout</a>
    </p>");
}
?>