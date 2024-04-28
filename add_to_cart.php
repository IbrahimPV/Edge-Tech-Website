<?php

$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_id = $_POST['cart_id'];
    $product_id = $_POST['product_id'];

    // Check if the product is already in the cartItems table
    $sql_check = "SELECT * FROM cartItems WHERE cart_id = '$cart_id' AND product_id = '$product_id'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
        // Increment quantity if product already exists in cart
        $sql_increment = "UPDATE cartItems SET quantity = quantity + 1 WHERE cart_id = '$cart_id' AND product_id = '$product_id'";
        if ($conn->query($sql_increment) === TRUE) {
            echo "Product quantity updated successfully.";
        } else {
            echo "Error updating product quantity: " . $conn->error;
        }
    } else {
        // Insert new product into cartItems table
        $sql_insert = "INSERT INTO cartItems (cart_id, product_id, quantity) VALUES ('$cart_id', '$product_id', 1)";
        if ($conn->query($sql_insert) === TRUE) {
            echo "Product added to cart successfully.";
        } else {
            echo "Error adding product to cart: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}
?>
