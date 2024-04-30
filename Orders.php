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

$sql_orders = "SELECT * FROM orders where user_id = $user_id";
$all_orders = $conn->query($sql_orders);


$num_items = 0;


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles here */
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">View Orders</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                <?php
            while($row = mysqli_fetch_assoc($all_orders)){
                $sql_order_items = "SELECT * FROM orderItems INNER JOIN products ON orderItems.product_id = products.product_id WHERE orderItems.order_id = " . $row["order_id"];
                $order_items = $conn->query($sql_order_items);
                
        ?>
                    <div class="card-body">
                        <h5 class="card-title">Order Details</h5>
                        <div class="table-responsive">
                        <?php
            while($row2 = mysqli_fetch_assoc($order_items)){
              $num_items += 1*$row2['quantity']; 
              

                
        ?>
        <div class="ibox-content">
          <div class="table-responsive">
              <table class="table shoping-cart-table">
                  <tbody>
                  <tr>
                      <td width="90">
                            <img class="cart-product-imitation" src="<?php echo $row2["image"]; ?>" alt="">
                      </td>
                      <td class="desc">
                        <h3>
                            <a href="#" class="text-navy"><?php echo $row2["product_name"]; ?></a>
                        </h3>

                        <div class="m-t-sm"><?php echo $row2["price"]; ?> AED</div>
                        <div class="m-t-sm">
                          <form method="post" action="removeItem.php?user_id=<?php echo $user_id; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">

                          </form>
                      </div>
                    </td>
                      <td width="80">
                        <p>quantity: <?php echo $row2["quantity"]; ?></p>
                        <input type="text" class="form-control" placeholder="1">
                    </td>
                  </tr>
                  </tbody>
              </table>
          </div>

      </div>
      <?php
            }
                
        ?>
                            

                            
                        </div>
                    </div>
                    <?php
            }
                
        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
