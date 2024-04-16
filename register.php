<?php
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];

// Connect to MySQL database
$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com:3306";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4W"; // Changed variable name to avoid conflict
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection faileeeed: " . $conn->connect_error);
}

// Check if email already exists using prepared statement
$sql_select = "SELECT * FROM users WHERE email=?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("s", $email);
$stmt_select->execute();
$result = $stmt_select->get_result();

if ($result->num_rows > 0) {
    // Email already exists
    echo "Email already exists";
} else {
    // Insert into database using prepared statement
    $sql_insert = "INSERT INTO users (email, password, phonenumber) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sss", $email, $password, $phonenumber);

    if ($stmt_insert->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt_insert->error;
    }
}

$stmt_select->close();
$stmt_insert->close();
$conn->close();
?>
