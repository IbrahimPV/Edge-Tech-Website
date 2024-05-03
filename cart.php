

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






$sql_cart = "SELECT cart_id FROM shoppingCart WHERE user_id = '$user_id'";
$result_cart = $conn->query($sql_cart);
if ($result_cart->num_rows > 0) {
    $row_cart = $result_cart->fetch_assoc();
    $cart_id = $row_cart['cart_id'];
} else {
    echo "Error creating cart: " . $conn->error;
}



$sql = "SELECT * FROM cartItems INNER JOIN products ON cartItems.product_id = products.product_id WHERE cartItems.cart_id = '$cart_id'";
$user_products = $conn->query($sql);


$total_price = 10;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!--
    - google font link
  -->
  <link
    href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
</head>

<body>


  <!--
    - main container
  -->

  <main class="container">

    <section id="header">
      <a href="#"><img src="img/logo.png" style="width: 500px;"></a>

      <div>
          <ul id="navbar">
            <li><a class="active" href="home.php?user_id=<?php echo $user_id; ?>">Home</a></li>
            <li><a href="Shop.php?user_id=<?php echo $user_id; ?>">Shop</a></li>
            <li><a href="Account.php?user_id=<?php echo $user_id; ?>">Account</a></li>
            <li><a href="Orders.php?user_id=<?php echo $user_id; ?>">Orders</a></li>
            <li><a href="cart.php?user_id=<?php echo $user_id; ?>"><i class="fa-solid fa-cart-shopping"></i></a></li>
          </ul>
      </div>
    </section>
    
    <h2 class="heading">
      <ion-icon name="cart-outline"></ion-icon> Shopping Cart
    </h2>

    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">
      <?php
            while($row = mysqli_fetch_assoc($user_products)){
              $subtotal = $row["price"] * $row["quantity"]; 
              $total_price += $subtotal; 
                
        ?>
        <div class="ibox-content">
          <div class="table-responsive">
              <table class="table shoping-cart-table">
                  <tbody>
                  <tr>
                      <td width="90">
                            <img class="cart-product-imitation" src="<?php echo $row["image"]; ?>" alt="">
                      </td>
                      <td class="desc">
                        <h3>
                            <a href="#" class="text-navy"><?php echo $row["product_name"]; ?></a>
                        </h3>

                        <div class="m-t-sm"><?php echo $row["price"]; ?> AED</div>
                        <div class="m-t-sm">
                          <form method="post" action="removeItem.php?user_id=<?php echo $user_id; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <button type="submit" name="remove_item">Remove item</button>
                          </form>
                      </div>
                    </td>
                      <td width="80">
                        <p>quantity: <?php echo $row["quantity"]; ?></p>

                    </td>
                  </tr>
                  </tbody>
              </table>
          </div>

      </div>
      <?php
            }
                
        ?>
      </section>


      <!--
        - cart section
      -->
      <section class="cart">

        <div class="cart-item-box">

          <h2 class="section-heading">Order Summary</h2>

          <!-- <div class="product-card">

            <div class="card">

              <div class="img-box">
                <img src="img/products/p2.png" alt="Monitor" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name">Monitor 60HZ</h4>

                <div class="wrapper">

                  <div class="product-qty">
                    <button id="decrement">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity">1</span>

                    <button id="increment">
                      <ion-icon name="add-outline"></ion-icon>
                    </button>
                  </div>

                  <div class="price">
                    AED <span id="price">180</span>
                  </div>

                </div>

              </div>

              <button class="product-close-btn">
                <ion-icon name="close-outline"></ion-icon>
              </button>

            </div>

          </div>

          <div class="product-card">

            <div class="card">

              <div class="img-box">
                <img src="img/products/p3.png" alt="lAPTOP" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name">HP laptop</h4>

                <div class="wrapper">

                  <div class="product-qty">
                    <button id="decrement">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity">1</span>

                    <button id="increment">
                      <ion-icon name="add-outline"></ion-icon>
                    </button>
                  </div>

                  <div class="price">
                    AED <span id="price">4380</span>
                  </div>

                </div>

              </div>

              <button class="product-close-btn">
                <ion-icon name="close-outline"></ion-icon>
              </button>

            </div>

          </div> -->

        </div>

        <div class="wrapper">

          <div class="discount-token">

            <label for="discount-token" class="label-default">Discount code</label>

            <div class="wrapper-flex">

              <input type="text" name="discount-token" id="discount-token" class="input-default">

              <button class="btn btn-outline">Apply</button>

            </div>

          </div>
          

          <div class="amount">

            <div class="subtotal">
              <span>Subtotal</span> <span>AED <span id="subtotal"><?php echo ($total_price-10); ?> </span></span>
            </div>

            <div class="tax">
              <span>Tax</span> <span>AED <span id="tax">0</span></span>
            </div>

            <div class="shipping">
              <span>Shipping</span> <span>AED <span id="shipping">10</span></span>
            </div>

            <div class="total">
            <span>Total</span> <span>AED <span id="total"><?php echo $total_price; ?></span></span>
            </div>
            
            <button onclick="window.location.href='checkout.php?user_id=<?php echo $user_id; ?>&total_price=<?php echo $total_price; ?>'">Checkout</button>

          </div>

        </div>

      </section>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>