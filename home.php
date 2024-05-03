<?php


$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id']


?>
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
                    <li><a class="active" href="home.php?user_id=<?php echo $user_id; ?>">Home</a></li>
                    <li><a href="Shop.php?user_id=<?php echo $user_id; ?>">Shop</a></li>
                    <li><a href="Account.php?user_id=<?php echo $user_id; ?>">Account</a></li>
                    <li><a href="Orders.php?user_id=<?php echo $user_id; ?>">Orders</a></li>
                    <li><a href="cart.php?user_id=<?php echo $user_id; ?>"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="hero">
            <h2>Where Tomorrow's Tech</h2>
            <h2>Meets Today's Needs</h2>
            <p>Unlock Exclusive Discounts and Offers!</p>
            <button>Shop Now</button>
        </section>

        <section id="feature" class="section-p1" style="padding-bottom: 100px;"></section>

        <section id="product1" class="section-p1">
            <h2>Recommended Products</h2>

            <div class="container">

                <div class="pro">
                    <img src="img/products/Razer DeathAdder Essential Gaming Mouse.jpg" alt="">
                    <div class="des">
                        <span>Razer</span>
                        <h5>Razer DeathAdder Essential Gamin mouse</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>77AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="o1.jpg">
                    <div class="des">
                        <span>Logitech</span>
                        <h5>Logitech G pro x</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>530</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/Logitech G Pro Wireless Gaming Mouse with Esports Grade Performance.jpg" alt="">
                    <div class="des">
                        <span>Logitech</span>
                        <h5>Logitech G PRO mouse</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>365AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/HyperX Cloud III Wireless Gaming Headset-Black.jpg" alt="">
                    <div class="des">
                        <span>Hyper x</span>
                        <h5>Hyper X headphones</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>626AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>


                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>
            </div>
            
        </section>

        



        <script src="script.js"></script>
    </body>


</html>