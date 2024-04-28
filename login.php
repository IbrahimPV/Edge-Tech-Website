<?php

$email = $_POST['email'];
$password = $_POST['password'];


$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($email =="admin" and $password="password"){
    header("Location: adminPanel.html");

}
$sql_select = "SELECT * FROM users WHERE email=? AND password=?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("ss", $email, $password);
$stmt_select->execute();
$result = $stmt_select->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $user_id = $row['user_id'];

    header("Location: structer.php?user_id=$user_id");
    exit();
} else {
 
    header("Location: index.html");
    exit();
}

$stmt_select->close();
$conn->close();
?>