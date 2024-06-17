<?php

session_start();
include('includes/header.php');
include('middleware/adminmiddleware.php');
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
                    <h4 class="text-white">Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="functions/code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                           <label for="">Name</label>
                           <input type="text" name="name" placeholder="Enter Category Name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label for="">Slug</label>
                           <input type="text" name="slug" placeholder="Enter Slug" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea rows="3" name="description" placeholder="Enter Description" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-12">
                           <label for="">Upload Image</label>
                           <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                           <label for="">Status</label>
                           <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-6">
                           <label for="">Popular</label>
                           <input type="checkbox" name="popular">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>