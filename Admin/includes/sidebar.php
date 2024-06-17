<?php 
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <i class="fa-solid fa-shop-slash text-white"></i>
        <span class="ms-1 font-weight-bold text-white">ShopZone</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "index.php"?'active bg-gradient-primary':''; ?>" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-category.php"?'active bg-gradient-primary':''; ?> " href="add-category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-circle-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-products.php"?'active bg-gradient-primary':''; ?>" href="add-products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-circle-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Add Products</span>
          </a>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "category.php"?'active bg-gradient-primary':''; ?>" href="category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-rectangle-list"></i>
            </div>
            <span class="nav-link-text ms-1">All Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "products.php"?'active bg-gradient-primary':''; ?>" href="products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-rectangle-list"></i>
            </div>
            <span class="nav-link-text ms-1">All Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "orders.php"?'active bg-gradient-primary':''; ?>" href="orders.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-rectangle-list"></i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "user_carts_data.php"?'active bg-gradient-primary':''; ?>" href="user_carts_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-rectangle-list"></i>
            </div>
            <span class="nav-link-text ms-1">Carts Data</span>
          </a>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "users_data.php"?'active bg-gradient-primary':''; ?>" href="users_data.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-user-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
          <li class="nav-item">
          <a class="nav-link text-white <?= $page == "messages.php"?'active bg-gradient-primary':''; ?>" href="messages.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <span class="nav-link-text ms-1">Messages</span>
          </a>
        </li>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="../ShopZone/shopzone.php" type="button">ShopZone Website</a>
      </div>
    </div>
  </aside>