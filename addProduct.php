<?php



$servername = "database-1.cn0meig60jdd.me-central-1.rds.amazonaws.com";
$username = "Etech321";
$db_password = "3DNFCBLhrdREVn4VIx4V"; 
$dbname = "myDB";

$conn = new mysqli($servername, $username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])){
    $productname = $_POST['productname'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $tags = $_POST['tags'];
  
    //For uploads photos
    $upload_dir = "img/products/"; //this is where the uploaded photo stored
    $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
    $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
    $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
    $upload_ok = 0;
  
    if(file_exists($upload_file)){
        echo "<script>alert('The file already exist')</script>";
        $upload_ok = 0;
    }else{
        $upload_ok = 1;
        if($check !== false){
          $upload_ok = 1;
          if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
              $upload_ok = 1;
          }else{
              echo '<script>alert("please change the image format")</script>';
          }
        }else{
            echo '<script>alert("The photo size is 0 please change the photo ")</script>';
            $upload_ok = 0;
        }
    }
  
    if($upload_ok == 0){
       echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
    }else{
        move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);
  
        $sql = "INSERT INTO products (product_name,description,category,price,tags,image) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $productname, $description, $category, $price, $tags, $product_image);


        if ($stmt->execute()) {
            echo "New record created successfully"; 
            echo "Error: " . $stmt->error;
        }
        if($conn->query($sql) === TRUE){
            echo "<script>alert('your product uploaded successfully')</script>";
        }
        
    }
  
  
    
  }

