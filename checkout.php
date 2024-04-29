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
              <li><a href="structer.html">Home</a></li>
              <li><a href="Shop.html">Shop</a></li>
              <li><a href="Account.html">Account</a></li>
              <li><a href="Order.html">Orders</a></li>
              <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
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

        <h3 class="section-heading">Payment Details</h2>

        <div class="payment-form">

          <div class="payment-method">

            <button class="method selected">
              <ion-icon name="card"></ion-icon>

              <span>Credit Card</span>

              <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
            </button>

            <button class="method">
              <ion-icon name="logo-paypal"></ion-icon>

              <span>PayPal</span>

              <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
            </button>

          </div>

          <form action="order.php?user_id=<?php echo $user_id; ?>" method="POST">

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Cardholder name</label>
              <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
            </div>

            <div class="card-number">
              <label for="card-number" class="label-default">Card number</label>
              <input type="number" name="card-number" id="card-number" class="input-default">
            </div>

            <div class="input-flex">

              <div class="expire-date">
                <label for="expire-date" class="label-default">Expiration date</label>

                <div class="input-flex">

                  <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31"
                    class="input-default">
                  /
                  <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12"
                    class="input-default">

                </div>
              </div>

              <div class="cvv">
                <label for="cvv" class="label-default">CVV</label>
                <input type="number" name="cvv" id="cvv" class="input-default">
              </div>

            </div>
            <button class="btn btn-primary">
          <b>Pay</b> $ <span id="payAmount">2.15</span>
        </button>

          </form>

        </div>

      </section>


      <!--
        - cart section
      -->
      <section class="cart">

        <div class="cart-item-box">

          <h2 class="section-heading">Order Summery</h2>

          <div class="product-card">

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

          </div>

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
              <span>Subtotal</span> <span>AED <span id="subtotal">4788</span></span>
            </div>

            <div class="tax">
              <span>Tax</span> <span>AED <span id="tax">50</span></span>
            </div>

            <div class="shipping">
              <span>Shipping</span> <span>AED <span id="shipping">0.00</span></span>
            </div>

            <div class="total">
              <span>Total</span> <span>AED <span id="total">4838</span></span>
            </div>

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