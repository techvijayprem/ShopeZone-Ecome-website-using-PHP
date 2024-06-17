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
            <?php 
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $product = getByID("products", $id);

                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);
                ?>
               <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Update Product
                        <a href="products.php" class="btn btn-info float-end shadow">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="functions/code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                           <label class="mb-0">Select Category</label>
                           <select name="category_id" class="form-select mb-2">
                               <option selected>Select Category</option>
                              <?php
                                    $categories = getAll("categories");

                                    if(mysqli_num_rows($categories) > 0) {
                                         foreach($categories as $item)
                                         {
                                            ?>
                                            <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
                                            <?php
                                         }
                                    }
                                    else
                                    {
                                        echo "Category Unavailable";
                                    }
                              ?>
                           </select>
                        </div>
                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                        <div class="col-md-6">
                           <label class="mb-0">Name</label>
                           <input type="text" name="name" value="<?= $data['name']; ?>" placeholder="Enter Category Name" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                           <label class="mb-0">Slug</label>
                           <input type="text" name="slug" value="<?= $data['slug']; ?>" placeholder="Enter Slug" class="form-control mb-2">
                        </div>
                        <div class="col-md-12">
                            <label class="mb-0">Small Description</label>
                            <textarea rows="3" name="small_description" placeholder="Enter Small Description" class="form-control mb-2"><?= $data['small_description']; ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="mb-0">Description</label>
                            <textarea rows="3" name="description" placeholder="Enter Description" class="form-control mb-2"><?= $data['description']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                           <label class="mb-0">Original Price</label>
                           <input type="text" name="original_price" value="<?= $data['original_price']; ?>" placeholder="Original Price" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                           <label class="mb-0">Selling Price</label>
                           <input type="text" name="selling_price" value="<?= $data['selling_price']; ?>" placeholder="Selling Price" class="form-control mb-2">
                        </div>
                        <div class="col-md-12">
                           <label class="mb-0">Upload Image</label>
                           <input type="file" name="image" class="form-control mb-2">
                           <label for="">Current Image</label>
                           <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                           <img src="uploads/<?= $data['image'] ?>" height="50px" width="50px">
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                           <label class="mb-0">Qty</label>
                           <input type="number" name="qty" value="<?= $data['qty']; ?>" placeholder="Enter Quantity" class="form-control mb-2">
                        </div>
                        <div class="col-md-3"><br>
                           <label class="mb-0">Status</label>
                           <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?>>
                        </div>
                        <div class="col-md-3"><br>
                           <label class="mb-0">Trending</label>
                           <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?>>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="update_product_btn">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
               </div>
                <?php
                   }
                 else
                    {
                       echo "Product not found!!";
                    }
                }
                else
                     {
                        echo "Id Missing from url!!";
                     }
            ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>