<?php

$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];

$sql_cart = "SELECT cart_id FROM shoppingCart WHERE user_id = '$user_id'";
$result_cart = $conn->query($sql_cart);
if ($result_cart->num_rows > 0) {
    $row_cart = $result_cart->fetch_assoc();
    $cart_id = $row_cart['cart_id'];
} else {
    echo "Error" . $conn->error;
}
//$total = $_GET['toatl'];


$sql_order = "INSERT INTO orders (user_id, order_status, order_total) VALUES ('$user_id','processing',1)";
$conn->query($sql_order);
$order_id = $conn->insert_id;



$sql_items = "SELECT * FROM cartItems INNER JOIN products ON cartItems.product_id = products.product_id WHERE cartItems.cart_id = '$cart_id'";
$cart_products = $conn->query($sql_items);

while($row = mysqli_fetch_assoc($cart_products)){
    $sql_insert_items = "INSERT INTO orderItems (order_id, product_id, quantity) VALUES ('$order_id', row[product_id], row[quantity])";
    $conn->query($sql_insert_items);
    $sql_delete_items = "DELETE FROM cartItems WHERE cart_id='row[cart_id]'";
    $conn->query($sql_delete_items);




}

echo "Order successful!";
sleep(2);
header("Location: structer.php");
?>