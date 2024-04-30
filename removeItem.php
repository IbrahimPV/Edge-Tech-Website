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
    echo "Error";
}

if (isset($_POST['remove_item'])) {
    $product_id = $_POST['product_id'];

    $sql_delete = "DELETE FROM cartItems WHERE product_id = '$product_id' AND cart_id = '$cart_id'";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Item removed successfully";
    } else {
        echo "Error removing item: " . $conn->error;
    }
}

header("Location: cart.php?user_id=$user_id");
exit;
?>