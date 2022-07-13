<?php

include 'connect.php';

$sql = 'SELECT * FROM products';
$query = mysqli_query($conn, $sql);
$row_count = mysqli_num_rows($query);
if (!$query) {
    die('error');
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
                        <a href="add.php" class="btn btn-success">Add New Product</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Begin Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card border-secondary">
                        <h6 class="card-header bg-secondary text-light border-secondary"><i class="fa-solid fa-list"></i> Our Products</h6>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped sortable" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="sorttable_nosort">Quantity</th>
                                            <th scope="col" class="sorttable_nosort">Description</th>
                                            <th scope="col" class="sorttable_nosort">Category</th>
                                            <th scope="col" class="sorttable_nosort">Date Added</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            ?>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row['quantity']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td><?php echo $row['added_date']; ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>

<?php mysqli_close($conn); ?>