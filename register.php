<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];


$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$isRecordCreated = false;

while (!$isRecordCreated) {

    $sql_select = "SELECT * FROM users WHERE email=?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("s", $email);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists'); window.history.back();</script>";
        $stmt_select->close();
        break; 
    } else {

        $sql_insert = "INSERT INTO users (name, email, password, phonenumber) VALUES (?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssss", $name, $email, $password, $phonenumber);

        if ($stmt_insert->execute()) {
            echo "New record created successfully";
            $isRecordCreated = true; 
            echo "Error: " . $stmt_insert->error;
            break; 
        }
    }
}

if ($isRecordCreated) {

    header("Location: index.html");
    exit(); 
}


$stmt_select->close();
$stmt_insert->close();
$conn->close();
?>
