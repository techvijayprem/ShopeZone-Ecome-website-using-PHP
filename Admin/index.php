<?php

session_start();
include('middleware/adminmiddleware.php');
include('includes/header.php');
?>

<?php
if (isset($_SESSION['message'])) { ?>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['message']);
}
?>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    .card:hover{
      transform: scale(1.1);
      color:black;
    }
    .card{
      transition: transform .5s;
    }
</style>
</head>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-solid fa-rectangle-list opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Categories</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM categories ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><i class="fa-regular fa-rectangle-list"></i> </span>Total Categories</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Users</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM register ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-info text-sm font-weight-bolder"><i class="fa-regular fa-user"></i> </span>Total Registered Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-brands fa-product-hunt opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total Products</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM products ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><i class="fa-solid fa-bag-shopping"></i></span> Total ShopZone Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-solid fa-money-check-dollar opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Orders</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM orders ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-warning text-sm font-weight-bolder"><i class="fa-solid fa-hand-holding-dollar"></i> </span>Total Products Orders </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-solid fa-cart-plus opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Carts</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM carts ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-primary text-sm font-weight-bolder"><i class="fa-solid fa-cart-shopping"></i> </span>Total Products in Cart </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="background-color:lime;">
                                <i class="fa-solid fa-envelope opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Messages</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT id FROM contact_us ORDER BY id ";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_num_rows($query_run);
                                        echo ''.$row.'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-sm font-weight-bolder"><i class="fa-solid fa-envelope" style="color:lime;"></i> </span>Total Query Messages </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="background-color:purple;">
                               <i class="fa-solid fa-sack-dollar opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Sales</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT SUM(total_price) as `sumprice` FROM orders";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_fetch_array($query_run);
                                        echo ''.$row['sumprice'].'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-sm font-weight-bolder"><i class="fa-solid fa-dollar-sign" style="color:purple;"></i> </span>Total ShopZone Sales </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="background-color:darkturquoise;">
                               <i class="fa-solid fa-gauge opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Average Sales</p>
                                <h3 class="mb-0">
                                    <?php 
                                        require 'config/dbcon.php';

                                        $query = "SELECT round(AVG(total_price),2) as `avgprice` FROM orders";
                                        $query_run = mysqli_query($con, $query);

                                        $row = mysqli_fetch_array($query_run);
                                        echo ''.$row['avgprice'].'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-sm font-weight-bolder"><i class="fa-solid fa-gauge" style="color:darkturquoise;"></i> </span>Total Average Sales </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="background-color:darkslateblue;">
                               <i class="fa-solid fa-eye opacity-10"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Visitors</p>
                                <h3 class="mb-0">
                                    <?php 
                                        echo ''.$_SESSION['visitCount'].'';
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-sm font-weight-bolder"><i class="fa-regular fa-eye" style="color:darkslateblue;"></i> </span>Total ShopZone Visitors </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>