<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-color: gray;
        }
        #header {
            background-color: #d7f2ff;
            color: white;
            position: sticky;
            z-index: 999;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
        }
        #header img {
            width: 300px;
        }
        .btn-container {
            text-align: center;
            margin-top: 50px;
        }
        .btn-lg {
            font-size: 1.5rem;
            padding: 10px 20px;
        }
        .btn-primary, .btn-success, .btn-danger {
            background-color: #c8a28a;
            border-color: #c8a28a;
        }
        .btn-primary:hover, .btn-success:hover, .btn-danger:hover {
            background-color: #c8a28a;
            border-color: #c8a28a;
        }
        .welcome-text {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo.png"></a>
    </section>

    <div class="container">
        <div class="row welcome-text">
            <div class="col-md-12 text-center">
                <h1>Welcome to Admin Panel</h1>
            </div>
        </div>
        <div class="row btn-container">
            <div class="col-md-12 text-center">
                <a href="addProduct.html" class="btn btn-primary btn-lg mr-3">Add Product</a>
                <a href="view_orders.html" class="btn btn-success btn-lg mr-3">View Orders</a>
                <a href="adminPanel.php?insert_category" class="btn btn-success btn-lg mr-3">Add category</a>
                <a href="index.html" class="btn btn-danger btn-lg">Log Out</a>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        if(isset($_GET['insert_category'])) {
            include('insert_categories.php');
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

