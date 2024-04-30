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
$user_id = $_GET['user_id'];

$sql = "SELECT * FROM products";
$all_product = $conn->query($sql);





$sql_cart = "SELECT cart_id FROM shoppingCart WHERE user_id = '$user_id'";
$result_cart = $conn->query($sql_cart);
if ($result_cart->num_rows > 0) {
    $row_cart = $result_cart->fetch_assoc();
    $cart_id = $row_cart['cart_id'];
} else {
    echo "Error creating cart: " . $conn->error;
}
?>

<section id="header">
    <a href="#"><img src="img/logo.png" style="width: 500px;"></a>
    <input class="bar" placeholder="Search?">
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

<section id="page-header">
    <div class="categ">
        <button onclick="window.location.href='mouses.php?user_id=<?php echo $user_id; ?>'">Mouses</button>
        <button onclick="window.location.href='keyboards.php?user_id=<?php echo $user_id; ?>'">Keyboards</button>
        <button onclick="window.location.href='headphones.php?user_id=<?php echo $user_id; ?>'">Headphones</button>
        <button onclick="window.location.href='microphones.php?user_id=<?php echo $user_id; ?>'">Microphones</button>
        <button onclick="window.location.href='monitors.php?user_id=<?php echo $user_id; ?>'">Monitors</button>
    </div>
</section>

<section id="product1" class="section-p1">
    
    <div class="container">
        <?php
            while($row = mysqli_fetch_assoc($all_product)){
                
        ?>
        <div class="pro">
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
                <h4><b><?php echo $row["price"]; ?> AED</b></h4>
            </div>
            <button class="add" onClick="addToCart(<?php echo $row["product_id"]; ?>, <?php echo $cart_id; ?>)">Add to cart</button>
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


<script>
    // Function to handle adding product to cart
    function addToCart(product_id,cart_id) {
        alert("Item Has been added to cart");

        
        // AJAX request to add product to cart
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "add_to_cart.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle response
                console.log(xhr.responseText);
            }
        };
        xhr.send("cart_id=" + cart_id + "&product_id=" + product_id);
    }

</script>
<script>
function active(){
    var searchbar = document.getElementById('searchbar');

    if(searchbar.value == 'search...'){
        searchbar.value = ''
        searchbar.placeholder = ' '
    }
  }
  function inactive(){
    var searchbar = document.getElementById('searchbar');

    if(searchbar.value == ''){
        searchbar.value = 'search...'
        searchbar.placeholder = 'search...'
    }
  }
</script>

</body>

</html>

