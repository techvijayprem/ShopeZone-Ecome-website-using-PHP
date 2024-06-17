<?php

session_start();

include('../config/dbcon.php');

if(isset($_POST['reg_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $rpassword = mysqli_real_escape_string($con,$_POST['rpassword']);

    $check_email_query = "SELECT email FROM register WHERE email='$email'";
    $check_email_query_run = mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email already registered!!";
        header('Location: ../register.php');
    } 
    else {
        if ($password == $rpassword) {
            $insert_query = "INSERT INTO register (name,email,password) VALUES ('$name','$email','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php');
            } else {
                $_SESSION['message'] = "Something went wrong!!";
                header('Location: ../register.php');
            }
        } else {
            $_SESSION['message'] = "Password do not match";
            header('Location: ../register.php');
        }
    }
}
else if(isset($_POST['log_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $useremail,
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            $_SESSION['message'] = "Welcome to Dashboard!!";
            header('Location: ../index.php');
        }
        else
        {        
            $_SESSION['message'] = "Logged In Successfully!!";
            header('Location: ../../ShopZone/shopzone.php');
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid Credentials!!";
        header('Location: ../login.php');
    }
}
else if(isset($_POST['add_product_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1':'0';
    $trending = isset($_POST['trending']) ? '1':'0';

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    if($name != "" && $slug != "" && $description != "")
    {

    $product_query = "INSERT INTO products (category_id,name,slug,small_description,description,original_price,selling_price,qty,meta_title,meta_description,meta_keywords,status,trending,image) VALUES ('$category_id','$name','$slug','$small_description','$description','$original_price','$selling_price','$qty','$meta_title','$meta_description','$meta_keywords','$status','$trending','$filename')";

    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        $_SESSION['message'] = "Product Added Successfully!!";
        header('Location: ../add-products.php');
    }
     else
    {
        $_SESSION['message'] = "Something Went Wrong!!";
        header('Location: ../add-products.php');
    }
  }
  else
    {
        $_SESSION['message'] = "All Fields are Mandatory!!";
        header('Location: ../add-products.php');
    }
}

?>