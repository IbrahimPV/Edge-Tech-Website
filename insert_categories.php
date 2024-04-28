<?php 
$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);

?>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">

  <input type="text" class="form-control" placeholder="Insert Category" aria-label="Username" aria-describedby="addon-wrapping" style="margin-top: 100px;">
</div>

<div class="input-group w-10 mb-2">

<input type="submit" class="form-control" name="insert_cat" value="Add categories" aria-label="Username" aria-describedby="basic-addon1" class="big-info" style="background-color: #c8a28a;">

</div>


</form>

