<?php

include('./db_connection.php');

function getproducts(){
global $con;

if(!isset($_GET['category'])){

    $select_query="Select * 'from products' order by rand() LIMIT 0,9";
    $result_query=mysqli_query($con,$select_query);


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


function get_unique_categories(){
    global $con;
    
    
    
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];

        $select_query="Select * 'from products' where category_id=$category_id";
        $result_query=mysqli_query($con,$select_query);
    
    
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