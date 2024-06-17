<?php 
// include('middleware/adminmiddleware.php');
include('functions/myfunctions.php');
include('includes/header.php'); 
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white"><i class="fa-solid fa-bag-shopping"></i> My Orders
                    <a href="orders.php" class="btn btn-dark float-end"><i class="fa fa-reply"></i>
                            Back</a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">  
                             
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Tracking No</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $orders = getOrdersHistory();

                                if(mysqli_num_rows($orders) > 0)
                                {
                                    foreach($orders as $item) 
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td><?= $item['tracking_no']; ?></td>
                                            <td><?= $item['total_price']; ?></td>
                                            <td><?= $item['created_at']; ?></td>
                                            <td>
                                                <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View details</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="5">No orders completed!!</td>
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
