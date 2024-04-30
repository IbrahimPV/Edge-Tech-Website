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

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
echo "Error updating user details: " . $conn->error;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $update_sql = "UPDATE users SET name='$name', email='$email', phonenumber='$phone', password='$password' WHERE user_id=$user_id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "User details updated successfully.";
    } else {
        echo "Error updating user details: " . $conn->error;
    }
}



?>