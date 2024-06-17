<?php
include('functions/userfunction.php'); 
include('includes/header.php');

if(isset($_GET['category']))
{
    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories",$category_slug);
    $category = mysqli_fetch_array($category_data);

    if($category)
    {
       $cid = $category['id'];
       ?>
       <div class="py-3"  style="background-color:purple;">
        <div class="container">
            <h6 class="text-white">Home /
                <a href="categories.php" class="text-white"> 
                    Collections /
                </a> 
                <?= $category['name']; ?></h6>
            </div>
        </div>

        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-primary"><?= $category['name']; ?> <i class="fa-regular fa-rectangle-list"></i></h2><hr>
                        <div class="row">
                            <?php
                            $products = getProdByCategory($cid);

                            if (mysqli_num_rows($products) > 0) 
                            {
                                foreach($products as $item)
                                {
                                    ?>
                                    <div class="col-md-3 mb-2">
                                        <a href="product-view.php?product=<?= $item['slug']; ?> ">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="../Admin/uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100 mb-2" height="250px">
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

        <?php
    }
    else
    {
        echo "Something Went Wrong!!";
    }

}
else
{
    echo "Something Went Wrong!!";
}
?>

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