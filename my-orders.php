<?php 
include('functions/userfunction.php'); 
include('includes/header.php'); 
// include('functions/authenticate.php'); 
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="categories.php" class="text-white"> 
                Home 
            </a>
            /
            <a href="my-orders.php" class="text-white"> 
                My Orders
            </a> 
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover">
                            <h4><i class="fa-solid fa-bag-shopping"></i> My Orders</h4>  
                            <hr>  
                            <thead>
                                <tr class="table-dark">
                                    <th>ID</th>
                                    <th>Tracking No</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $orders = getOrders();

                                if(mysqli_num_rows($orders) > 0)
                                {
                                    foreach($orders as $item) 
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['tracking_no']; ?></td>
                                            <td><?= $item['total_price']; ?></td>
                                            <td><?= $item['created_at']; ?></td>
                                            <td>
                                                <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-outline-dark">View details</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="5">No orders yet!!</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
