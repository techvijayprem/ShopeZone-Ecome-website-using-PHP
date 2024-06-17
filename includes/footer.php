<head>
  <style>
    .social:hover{
      transform: scale(1.1);
      color: blue;
    }
    .social{
      transition: transform .5s;
    }
  </style>
</head>

<hr class="border-danger">
<div>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-dark ">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-3">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-danger">ShopZone</i>
          </h6>
          <p>
            Shopzone gives you best experience of shopping, And full secure payment.
          </p>
        </div>
        <!-- Grid column -->

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      
            <h6 class="text-uppercase fw-bold mb-4 text-danger">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
       

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger">Contact</h6>
          <p><i class="fas fa-home me-3 text-primary"></i> Ahmedabad, Gujarat, India</p>
          <p>
            <i class="fas fa-envelope me-3 text-primary"></i>
            shopzone657@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-primary"></i> +91 8160496693 </p>
          <p><i class="fas fa-print me-3 text-primary"></i> +91 8160496693 </p>
        </div>
        <!-- Grid column -->


  </section>


  <!-- Section: Links  -->
  <hr class="border-danger">
  <!-- Copyright -->
  <div class="text-center p-3 bg-white text-danger" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="#">ShopZone</a>
  </div>

  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-center border-bottom bg-white">
    <!-- Right -->
    <div class="social">
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->




  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Alertify -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  alertify.set('notifier','position', 'top-right');
  <?php 
  if(isset($_SESSION['message'])) 
  { 
    ?>
    alertify.success('<?= $_SESSION['message'] ?>');
    <?php 

    unset($_SESSION['message']);
  } 
  ?>
</script>
</body>
</html>