<?php
include 'db_connection.php';

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
            $isRecordCreated = true;
            $user_id = $stmt_insert->insert_id;

            $sql_insert_cart = "INSERT INTO shoppingCart (user_id) VALUES (?)";
            $stmt_insert_cart = $conn->prepare($sql_insert_cart);
            $stmt_insert_cart->bind_param("i", $user_id);
            $stmt_insert_cart->execute();

            echo "New record created successfully";
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
$stmt_insert_cart->close();
$conn->close();
?>
