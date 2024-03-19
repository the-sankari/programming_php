<?php
    // cart array initializing
    $cart = [];

    // Check if the cookie for shopping cart has been set
    if (isset($_COOKIE['shoppingcart'])) {
        // If it is set, overwrite $cart variable with it
        $cart = json_decode($_COOKIE['shoppingcart'], true);
    }
    
    // check if the add form has been sent
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if yes, add the new product to the $cart array and send the updated cookie
        if (isset($_POST['productname']) && isset($_POST['productamount'])) {
            $cart[$_POST['productname']] = $_POST['productamount'];
        } 
        // let's use JSON again, so e.g. $json = json_encode($cart);
        setcookie('shoppingcart', json_encode($cart));
    }
    

    // Check if the empty cart button has been pressed
    if (isset($_POST['emptycart'])) {
    // empty the $cart array
        $cart = [];
        echo "No items added";
    // set a new cookie that's set to expire in the past
        setcookie('shoppingcart', '', time() -1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <form action="shoppingcart.php" method="post">
        <p>Choose product (choosing the same product will overwrite old entry):</p>
        <p><label for="productname">Product name:</label><br>
            <select id="productname" name="productname">
                <option value="Book">Book</option>
                <option value="Computer">Computer</option>
                <option value="Phone">Phone</option>
            </select>
        </p>
        <p><label for="productamount">Amount:</label><br>
            <input type="text" id="productamount" name="productamount">
        </p>
        <p><input type="submit" name="addproduct" value="Add to cart"></p>
    </form>

    <h3>Current shopping cart</h3>
    <div id="cart">
    <?php
        // Print the contents of the cart here
        if (empty($cart)) {
            echo "No items.";
        } else {
            foreach ($cart as $product => $amount) {
                echo $amount . " x " . $product . "<br>";
            }
        }
    ?>
    </div>

    <form action="shoppingcart.php" method="post">
        <input type="submit" name="emptycart" value="Empty cart">
    </form>
</body>
</html>
