<?php

$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_query = $_POST['search'];


$sql = "SELECT * FROM products WHERE product_name LIKE '%$search_query%'";
$search_result = $conn->query($sql);

?>

