<?php
include('functions/userfunction.php'); 
include('includes/header.php');
?>

<head>
  <title>
    Categories
  </title>

</head>


<div class="py-3"  style="background-color:purple;">
    <div class="container">
        <h6 class="text-white">Home / Collections</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-primary" style="color:darkslateblue">Our Categories <i class="fa-regular fa-rectangle-list"></i></h2><hr>
                <div class="row">
                    <?php
                    $categories = getAllActive("categories");

                    if (mysqli_num_rows($categories) > 0) 
                    {
                        foreach($categories as $item)
                        {
                            ?>
                                <div class="col-md-3 mb-2">
                                    <a href="products-list.php?category=<?= $item['slug']; ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="../Admin/uploads/<?= $item['image']; ?>" alt="category Image" class="w-100 mb-2" height="330px">
                                            <h5 class="text-center text-danger"><?= $item['name']; ?></h5>
                                        </div>
                                    </div>
                                    </a>
                                </div> 
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Category Available!!";
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php include('includes/footer.php'); ?>

  <head>
    <style>
        .card .card-body:hover{
          transform: scale(1.1);
      }
      .card .card-body{
          transition: transform .5s;
      }
  </style>
</head>