<?php 
$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$cat = $_POST['cat_title'];

$sql_insert = "INSERT INTO categories (category_title)  VALUES ('$cat')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Product added to cart successfully.";
} else {
    echo "Error adding product to cart: " . $conn->error;
}
?>


<form action="insert_categories.php" method="post" class="mb-2">
<div class="input-group w-90 mb-2">

  <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Insert Category" aria-label="Categories" aria-describedby="addon-wrapping" style="margin-top: 100px;">
</div>

<div class="input-group w-10 mb-2">

<button class="btn btn-primary" type="submit">Submit</button>

</div>


</form>

