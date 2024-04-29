<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wdith= device-width, initial-scale=1.0">
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

    <section id="orders">
        <h2>Your Orders</h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add rows dynamically here using PHP or JavaScript -->
                <tr>
                    <td>1</td>
                    <td>Shipped</td>
                    <td>2024-04-29</td>
                    <td>$120.00</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </section>
</body>
</html>

