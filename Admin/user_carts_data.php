<?php

session_start();
include('includes/header.php');
include('middleware/adminmiddleware.php');
include('functions/myfunctions.php');
?>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">User Carts Data</h4>
                </div>
                <div class="card-body" id="#">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Product ID</th>
                                <th>Product Qty</th>
                                <th>Timeline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $user_cart  = getAll("carts");

                                if(mysqli_num_rows($user_cart) > 0)
                                {
                                    foreach ($user_cart as $item) 
                                    {
                                        ?>
                                        <tr>
                                         <td><?= $item['id'] ?></td>
                                         <td><?= $item['user_id'] ?></td>
                                         <td><?= $item['prod_id'] ?></td>
                                         <td><?= $item['prod_qty'] ?></td>
                                         <td><?= $item['created_at'] ?></td>
                                         <td>
                                           
                                                <!-- <button type="submit" class="btn btn-danger message_del" value="">Delete</button> -->
                                            
                                         </td>
                                        </tr>    
                                        <?php   
                                    }                                  
                                }
                                else
                                {
                                    echo "No Records Found!!";
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