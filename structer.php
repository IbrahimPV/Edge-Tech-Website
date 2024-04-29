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
            <a href="#"><img src="img/logo.png" style="width: 500px; "></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="structer.html">Home</a></li>
                    <li><a href="Shop.php?user_id=<?php echo $user_id; ?>">Shop</a></li>
                    <li><a href="Account.html">Account</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="hero">
            <h2>Where Tomorrow's Tech</h2>
            <h2>Meets Today's Needs</h2>
            <p>Unlock Exclusive Discounts and Offers!</p>
            <button><a href="Shop.php?user_id=<?php echo $user_id; ?>">Shop</a></button>
        </section>

        <section id="feature" class="section-p1" style="padding-bottom: 100px;"></section>

        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>

            <div class="container">

                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>

                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/p1.png">
                    <div class="des">
                        <span>IBUYPOWER</span>
                        <h5>Pro Gaming PC Computer Desktop Element MR 208i Intel i7 11700F 2.5GHz,NVIDIA GeForce RTX 2060 6GB</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9,498AED</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                </div>
            </div>
            
        </section>

        



        <script src="script.js"></script>
    </body>


</html>


