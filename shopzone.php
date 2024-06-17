<?php 
include('functions/userfunction.php');
include('includes/header.php'); 
include('includes/slider.php');
?>

<head>
  <style>
    .card:hover{
      transform: scale(1.1);
    }
    .card{
      transition: transform .5s;
    }
    .text-color {
      color: #fff
    }

    .carousel-item img {
      height: 400px
    }
  </style>

  


</head>

<?php
if(isset($_SESSION['visitCount'])) 
{
  $_SESSION['visitCount']++;
}
else
{
  $_SESSION['visitCount']=1;
}
?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="h4 pb-2 mb-4 text-dark border-bottom border-danger text-center pt-2" style="text-transform: uppercase;">
        Trending Products</div>
        <div class="owl-carousel mb-3">
          <?php
          $trendingProducts = getAllTrending();
          if(mysqli_num_rows($trendingProducts) > 0) 
          {
            foreach ($trendingProducts as $item) 
            {
              ?>
              <div class="item">
                <a href="product-view.php?product=<?= $item['slug']; ?> ">
                  <div class="card">
                    <div class="card-body">
                      <img src="../Admin/uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100" height="250px">
                      <h6 class="text-center" style="color:purple;"><?= $item['name']; ?></h4>
                      </div>
                    </div>
                  </a>
                </div> 
                <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="h4 pb-2 mb-4 text-dark border-bottom border-danger text-center pt-2" style="text-transform: uppercase;">
        Popular Categories</div>
        <div class="owl-carousel mb-3">
          <?php
          $popularCategory = getAllPopular();
          if(mysqli_num_rows($popularCategory) > 0) 
          {
            foreach ($popularCategory as $item) 
            {
              ?>
              <div class="item">
                <a href="product-view.php?product=<?= $item['slug']; ?> ">
                  <div class="card">
                    <div class="card-body">
                      <img src="../Admin/uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100" height="320px">
                      <h6 class="text-center" style="color:purple;"><?= $item['name']; ?></h4>
                      </div>
                    </div>
                  </a>
                </div> 
                <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="py-5">
    <div class="container">
      <div class="h4 pb-2 mb-4 text-dark border-bottom border-danger text-center pt-2">
      Exclusive Products</div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100 shadow border-info">
            <img src="assets/images/exclusive-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Noise ColorFit Pulse Grand Smart Watch</h5>
              <p class="card-text text-muted">Noise ColorFit Pulse Grand Smart Watch with 1.69" HD Display, 60 Sports Modes, 150 Watch Faces, Spo2 Monitoring, Call Notification, Quick Replies to Text & Calls (Rose Pink)</p>
            </div>
            <div class="card-footer border-info">
              <small class="text-muted">Not Available!!</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow border-info">
            <img src="assets/images/exclusive-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Samsung Galaxy S22 5G</h5>
              <p class="card-text text-muted">Samsung Galaxy S22 5G (Green, 8GB, 128GB Storage)</p>
            </div>
            <div class="card-footer border-info">
              <small class="text-muted">Not Available!!</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow border-info">
            <img src="assets/images/exclusive-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">OnePlus 10T 5G</h5>
              <p class="card-text">OnePlus 10T 5G (Moonstone Black, 16GB RAM, 256GB Storage)</p>
            </div>
            <div class="card-footer border-info">
              <small class="text-muted">Not Available!!</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow border-info">
            <img src="assets/images/exclusive-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">truke Buds F1 Bluetooth</h5>
              <p class="card-text text-muted">truke Buds F1 Bluetooth Truly Wireless in Ear Earbuds with mic, 48H Playtime, Instant Paring, Exceptional Sound with AAC Codec, Digital Display, 55ms Low Latency Gaming Mode, Bluetooth 5.3(Blue)</p>
            </div>
            <div class="card-footer border-info">
              <small class="text-muted">Not Available!!</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


      <div class="py-5" style="background-color:#E0E0E0;" id="venue">
        <div class="container">
          <div class="h4 pb-2 mb-4 text-dark border-bottom border-danger text-center pt-2">
          Gallery</div>
          <div class="row bg-primary animate-in-down">
            <div class="p-4 col-md-6 align-self-center text-color">
              <p class="m-0">Feel comfortable, and purchase items</p>
              <h2>Discover the products</h2>
              <p class="my-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here</p> <a href="#" class="btn mb-3 p-2 btn-light">View the gallery</a>
            </div>
            <div class="p-0 col-md-6">
              <div class="carousel slide" data-ride="carousel" id="carousel1">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://i.imgur.com/K7A78We.jpg" alt="first slide">
                    <div class="carousel-caption">
                      <h3>Simura Hotels</h3>
                      <p>Good architecture, services</p>
                    </div>
                  </div>
                  <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://i.imgur.com/c8952Iz.jpg" data-holder-rendered="true">
                    <div class="carousel-caption">
                      <h3>Hauzkhas Village Bar</h3>
                      <p>Enjoy our long drink</p>
                    </div>
                  </div>
                  <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://i.imgur.com/K7A78We.jpg" data-holder-rendered="true">
                    <div class="carousel-caption">
                      <h3>Cooking Hemorto</h3>
                      <p>Tastes it better</p>
                    </div>
                  </div>
                </div> <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <?php include('includes/footer.php'); ?>

      <script>
        $(document).ready(function () {
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:3
              },
              1000:{
                items:4
              }
            }
          })
        });
      </script>


