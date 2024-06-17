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
                    <h4 class="text-white">Users</h4>
                </div>
                <div class="card-body" id="user_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Timeline</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $users  = getAll("register");

                                if(mysqli_num_rows($users) > 0)
                                {
                                    foreach ($users as $item) 
                                    {
                                        ?>
                                        <tr>
                                         <td><?= $item['id'] ?></td>
                                         <td><?= $item['name'] ?></td>
                                         <td><?= $item['email'] ?></td>
                                         <td><?= $item['password'] ?></td>
                                         <td><?= $item['role_as'] ?></td>
                                         <td><?= $item['created_at'] ?></td>
                                         <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                         </td>
                                         <td>
                                                <button type="submit" class="btn btn-danger user_del" value="<?= $item['id']; ?>">Delete</button>
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