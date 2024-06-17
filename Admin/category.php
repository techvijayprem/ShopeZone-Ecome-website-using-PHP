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
                    <h4 class="text-white">Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $category  = getAll("categories");

                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach ($category as $item) 
                                    {
                                        ?>
                                        <tr>
                                         <td><?= $item['id']; ?></td>
                                         <td><?= $item['name']; ?></td>
                                         <td>
                                             <img src="uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']?>">
                                         </td>
                                         <td><?= $item['status'] == '0'? "Visible":"Hidden" ?></td>
                                         <td>
                                            <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                                         </td>
                                         <td>
                                             <!-- <form action="functions/code.php" method="POST">
                                                <input type="hidden" name="category_id" value="">
                                                <button type="submit" class="btn btn-danger" name="del_cat_btn">Delete</button>
                                            </form> -->

                                            <button type="button" class="btn btn-sm btn-danger del_cat_btn" value="<?= $item['id']; ?>">Delete</button>
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