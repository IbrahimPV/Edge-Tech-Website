<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet">
    <title>EdgyTech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo.png" style="width: 500px;"></a>
        <div>
            <ul id="navbar">
                <li><a href="structer.php">Home</a></li>
                <li><a href="Shop.php?user_id=<?php echo $user_id; ?>">Shop</a></li>
                <li><a href="Account.html">Account</a></li>
                <li><a class="active" href="orders.php">Orders</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="checkout">
        
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table shoping-cart-table">
                    <tbody>
                        <tr>
                            <td width="90">
                                <!-- Image Here -->
                                <img src="product_image.jpg" alt="Product Image" style="width: 80px;">
                            </td>
                            <td class="desc">
                                <!-- Product Name and Price -->
                                <h3><a href="#" class="text-navy">Desktop publishing software</a></h3>
                                <div class="m-t-sm">300 AED</div>
                                <!-- Remove item link -->
                                <div class="m-t-sm">
                                    <h3>Order Date</h3>
                                    <h3>Order Status</h3>
                                </div>
                            </td>
                            <td width="80">
                                <!-- Quantity input -->
                                <p>Quantity:</p>
                                <input type="text" class="form-control" placeholder="1">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</body>
</html>