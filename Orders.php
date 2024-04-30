<<<<<<< HEAD
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

$total_price = $_GET['total_price'];

$sql_order = "INSERT INTO orders (user_id, order_status, order_total) VALUES ('$user_id','Processing',$total_price)";
$conn->query($sql_order);
$order_id = $conn->insert_id;

$sql_items = "SELECT * FROM cartItems INNER JOIN products ON cartItems.product_id = products.product_id WHERE cartItems.cart_id = '$cart_id'";
$cart_products = $conn->query($sql_items);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Confirmation</title>
<style>
    .order-container {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
    }
    .product-container {
        border: 1px solid #ccc;
        margin-top: 10px;
        padding: 10px;
    }
    .product-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px 0;
    }
</style>
</head>
<body>

<div class="order-container">
    <h2>Order Summary</h2>
    <div>Total Price: $<?php echo $total_price; ?></div>
</div>

<div class="order-container">
    <h2>Products</h2>
    <?php
    while($row = mysqli_fetch_assoc($cart_products)){
        ?>
        <div class="product-container">
            <div class="product-row">
                <div><?php echo $row['product_name']; ?></div>
                <div>Quantity: <?php echo $row['quantity']; ?></div>
                <div>Price: $<?php echo $row['price']; ?></div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

</body>
</html>

<?php
// Clear the cart after order is processed
$sql_clear_cart = "DELETE FROM cartItems WHERE cart_id='$cart_id'";
$conn->query($sql_clear_cart);

echo "Order was successful";
sleep(2);
header("Location: home.php");
?>
