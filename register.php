<?php
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];

// Connect to MySQL database
$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$password = "3DNFCBLhrdREVn4VIx4V";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email already exists
    echo "Email already exists";
} else {
    // Insert into database
    $sql_insert = "INSERT INTO users (email, password,phonenumber) VALUES ('$email', '$password', '$phonenumber')";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("sss", $email, $password, $phonenumber);

    if ($stmt_insert->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

}


$stmt->close();
$conn->close()
?>
