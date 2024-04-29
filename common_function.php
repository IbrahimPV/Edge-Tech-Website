<?php

include('./db_connection.php');

function getproducts(){
global $con;

$select_query="Select * 'from products' order by rand() LIMIT 0,9";
$result_query=mysqli_query($con,$select_query);

if(!isset($_GET['category'])){


while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_name=$row['product_name'];
    $description=$row['description'];
    $category=$row['category'];
    $price=$row['price'];
    $tags=$row['tags'];
    $image=$row['image'];


}
}


}
?>