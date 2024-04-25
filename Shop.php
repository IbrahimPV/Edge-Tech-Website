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

<?php
    $servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
    $username = "Etech321";
    $db_password = "3DNFCBLhrdREVn4VIx4V"; 
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products";
    $all_product = $conn->query($sql);
?>

<section id="header">
    <a href="#"><img src="img/logo.png" style="width: 500px;"></a>
    <input class="bar" placeholder="Search?">
    <div>
        <ul id="navbar">
            <li><a href="structer.html">Home</a></li>
            <li><a class="active" href="Shop.html">Shop</a></li>
            <li><a href="Account.html">Account</a></li>
            <li><a href="Order.html">Orders</a></li>
            <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</section>

<section id="page-header">
    <div class="categ">
        <button style="cursor: pointer;">Computers & Laptops</button>
        <button style="cursor: pointer;">Mobile Phones & Tablets</button>
        <button style="cursor: pointer;">Electronics & Gadgets</button>
        <button style="cursor: pointer;">Networking & Internet</button>
        <button style="cursor: pointer;">Components & Accessories</button>
    </div>
</section>

<section id="product1" class="section-p1">
    <div class="container">

        <div class="pro">
        <?php
            while($row = mysqli_fetch_assoc($all_product)){
        ?>
            <img src="<?php echo $row["image"]; ?>" alt="">
            <div class="des">
                <h5><?php echo $row["product_name"]; ?></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4><b>$<?php echo $row["price"]; ?></b></h4>
            </div>
            <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <?php
            }
        ?>
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fas fa-arrow-right"></i></a>
</section>

<script src="script.js"></script>
</body>
</html>
