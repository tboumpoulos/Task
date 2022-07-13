<?php

include 'connect.php';


if(isset($_POST['add'])){

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$category = $_POST['category'];

$sql = "INSERT INTO products
(name, price, quantity, description, category, added_date)
 VALUES 
 ('$name','$price','$quantity','$description','$category',CURDATE())";

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Harry’s Crab Shack</title>
    <link rel="icon" type="image/x-icon" href="crab.png">

    <!-- CSS file -->
    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/crab.png" alt="" width="50" height="50" class="">
                    <span style="font-size:35px;"> Harry’s Crab Shack</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="btn btn-success">Our Products</a>
                        <a href="add.php" class="btn btn-success">Add Another Product</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Begin Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-10">
                    <div class="card border-secondary">
                        <h6 class="card-header bg-secondary text-light border-secondary"><i class="fa-solid fa-list"></i> Add New Product</h6>
                        <div class="card-body">
                            <?php
                            if (mysqli_query($conn, $sql)) {
                                echo "<h4 style='color:green;'>Product Added Successfully.</h4><br>";
                            } else {
                                echo "ERROR: Something went wrong!" . mysqli_error($conn);
                            }
                            ?>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Product Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Product Category</label>
                                    <select class="form-select" name="category" id="category">
                                        <option value="Spider Crabs">Spider Crabs</option>
                                        <option value="Lobsters">Lobsters</option>
                                        <option value="Shrimps">Shrimps</option>
                                        <option value="Crayfish">Crayfish</option>
                                        <option value="Misc">Misc</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="add" class="btn btn-success" value="Add Product">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>

<?php mysqli_close($conn); ?>