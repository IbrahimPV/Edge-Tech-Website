
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


$sql = "SELECT * FROM users where user_id = $user_id";
$userDetails = $conn->query($sql);
$user = $userDetails->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>account setting </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style type="text/css">
    	body {
    margin: 0;
    padding-top: 0;
    color: #2e323c;
    background: white;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #c8a28a;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #c8a28a;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #c8a28a;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: white;
    color: #c8a28a;
}

.button{
    background-color: darkorange;
}


    </style>
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

<div class="container" style="padding-top: 400px;">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-body">
<div class="account-settings">
<div class="user-profile">
<div class="user-avatar">
<img src="img/profile.png" alt="Maxwell Admin">
</div>
<h5 class="user-name">Profile</h5>
<h6 class="user-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="69101c0200292408111e0c0505470a0604">[email&#160;protected]</a></h6>
</div>
<div class="about">
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-body">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-2 text-primary">Personal Details</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<form action="editAccount.php?user_id=<?php echo $user_id; ?>" method="post">
<label for="fullName">Full Name</label>
<input type="text" value="<?php echo $user["name"]; ?>" class="form-control" id="name" name="name" placeholder="Enter full name">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="email">Email</label>
<input type="text" value="<?php echo $user["email"]; ?>" class="form-control" id="email" name="email" placeholder="Enter email ID">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" value="<?php echo $user["phonenumber"]; ?>" class="form-control" id="phone" name="phone"placeholder="Enter phone number">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="website">Password</label>
<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

<input type="text" value="<?php echo $user["password"]; ?>" class="form-control" name="password" id="Password" placeholder="Enter Password">
</div>
</div>
</div>
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="text-right">
<button  id="submit" name="submit" class="btn btn-primary">Update</button>
</form>
<a href="home.php?user_id=<?php echo $user_id; ?>" class="btn btn-secondary">Cancel</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>