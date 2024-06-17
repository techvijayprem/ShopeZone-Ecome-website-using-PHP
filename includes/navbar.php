<head>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik&display=swap" rel="stylesheet">


  <style>
    .navbar-brand{
      font-size: 2rem;
      color: black;
      font-family: 'Lobster', cursive;
    }

    .navbar-brand:hover{
      color: red;
    }

    .nav-link{
      margin-right:10px ;
      margin-left:10px ;
      color: black;
      font-family: 'Rubik', sans-serif;
      text-transform: uppercase;
    }

    .nav-link:hover{
      color: red;
    }

    .search{
      height: 40px;
      width: 80%;
      border-radius: 60px;
      outline: none;
      margin-right: -35px;
      border: 2px solid rgb(248, 26, 92);
    }

    .btn0{
      height: 40px;
      width: 40%;
      outline: none;
      border: none;
      background: rgb(248, 26, 92);
      color: white;
      border-radius: 60px;
      font-weight: 700;
    }
  </style>

</head>  



<nav class="navbar navbar-expand-lg bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="shopzone.php"><i class="fa-solid fa-shop-slash text-danger"></i>ShopZone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav m-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="categories.php">Categories</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Connect Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about_us.php">About US</a></li>
              <li><a class="dropdown-item" href="contact_us.php">Contact US</a></li>
            </ul>
          </li>
        <?php 
        if(isset($_SESSION['auth']))
        {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-plus"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['auth_user']['name']; ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="my-orders.php">Orders</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
          <?php
        }
        else
        {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Registration</a>
          </li>
          <?php
        }
        ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>