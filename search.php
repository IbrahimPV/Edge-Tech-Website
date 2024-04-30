<?php

$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_query = $_POST['search'];

$sql = "SELECT * FROM products WHERE product_name LIKE '%$search_query%'";
$search_result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section id="header">
    <a href="#"><img src="img/logo.png" style="width: 500px;"></a>
    <form action="search.php" method="post">
        <input type="text" id="searchbar" name="search" placeholder="Search..." value="search..." maxlength="25" autocomplete="on" onmousedown="active();" onblur="inactive();">
        <input type="submit" id="searchBtn" value="Go">
    </form>
    <div>
        <ul id="navbar">
            <li><a href="structer.php">Home</a></li>
            <li><a class="active" href="Shop.php">Shop</a></li>
            <li><a href="Account.html">Account</a></li>
            <li><a href="Order.html">Orders</a></li>
            <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</section>

<section id="page-header">
    <h2>Search Results for "<?php echo $_POST['search']; ?>"</h2>
</section>

<section id="product1" class="section-p1">
    <div class="container">
        <?php
            if ($search_result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($search_result)){
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
                <h4><b>$<?php echo $row["price"]; ?></b></h4>
            </div>
            <button class="add" onClick="addToCart(<?php echo $row["product_id"]; ?>, <?php echo $cart_id; ?>)">Add to cart</button>
        </div>
        <?php
                }
            } else {
                echo "No results found for \"" . $_POST['search'] . "\"";
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

</body>
</html>
