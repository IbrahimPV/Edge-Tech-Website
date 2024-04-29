<?php 
$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">

  <input type="text" class="form-control" name="cat_title" placeholder="Insert Category" aria-label="Categories" aria-describedby="addon-wrapping" style="margin-top: 100px;">
</div>

<div class="input-group w-10 mb-2">

<button class="btn btn-primary" type="submit">Submit</button>

</div>


</form>

