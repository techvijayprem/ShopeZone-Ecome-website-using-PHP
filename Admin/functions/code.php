<?php

session_start();
include('../config/dbcon.php');

if(isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $status = isset($_POST['status']) ? '1':'0';
    $popular = isset($_POST['popular']) ? '1':'0';

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO categories (name,slug,description,status,popular,image) 
    VALUES ('$name','$slug','$description','$status','$popular','$filename')";
    
    $cate_query_run = mysqli_query($con, $cate_query);

    if($cate_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        $_SESSION['message'] = "Category Added Successfully!!";
        header('Location: ../add-category.php');
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!!";
        header('Location: ../add-category.php');
    }
}    
else if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $status = isset($_POST['status']) ? '1':'0';
    $popular = isset($_POST['popular']) ? '1':'0';

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "") 
    {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }

    $path = "../uploads";

    $update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description', status='$status', popular='$popular',image='$update_filename' WHERE id='$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image)) 
            {
                unlink("../uploads/".$old_image);
            }
        }
        $_SESSION['message'] = "Category Updated Successfully!!";
        header("Location: ../edit-category.php?id=".$category_id);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!!";
        header("Location: ../edit-category.php?id=".$category_id);
    }
}
else if(isset($_POST['del_cat_btn']))
{
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $category_query = "SELECT * FROM categories WHERE id='$category_id' ";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);
    $image = $category_data['image'];

    $delete_query = "DELETE FROM categories WHERE id='$category_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        if(file_exists("../uploads/".$image)) 
        {
            unlink("../uploads/".$image);
        }

        // $_SESSION['message'] = "Category Deleted Successfully!!";
        // header("Location: ../category.php");
        echo 200;
    }
    else
    {
        // $_SESSION['message'] = "Something Went Wrong!!";
        // header("Location: ../category.php");
        echo 500;
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
    $status = isset($_POST['status']) ? '1':'0';
    $trending = isset($_POST['trending']) ? '1':'0';

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    if($name != "" && $slug != "" && $description != "")
    {
        $product_query = "INSERT INTO products (category_id,name,slug,small_description,description,original_price,selling_price,qty,status,trending,image) VALUES ('$category_id','$name','$slug','$small_description','$description','$original_price','$selling_price','$qty','$status','$trending','$filename')";

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
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];
    $status = isset($_POST['status']) ? '1':'0';
    $trending = isset($_POST['trending']) ? '1':'0';

    $path = "../uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "") 
    {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }

    $update_product_query = "UPDATE products SET name='$name',slug='$slug',small_description='$small_description',description='$description',original_price='$original_price',selling_price='$selling_price',qty='$qty',status='$status', trending='$trending', image='$update_filename' WHERE id='$product_id' ";

    $update_product_query_run = mysqli_query($con, $update_product_query);

    if($update_product_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image)) 
            {
                unlink("../uploads/".$old_image);
            }
        }
        $_SESSION['message'] = "Product Updated Successfully!!";
        header("Location: ../edit-products.php?id=".$product_id);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!!";
        header("Location: ../edit-products.php?id=".$product_id);
    }
}
else if(isset($_POST['del_product_btn']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $product_query = "SELECT * FROM products WHERE id='$product_id' ";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];

    $delete_query = "DELETE FROM products WHERE id='$product_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        if(file_exists("../uploads/".$image)) 
        {
            unlink("../uploads/".$image);
        }
        echo 200;
    }
    else
    {
        echo 500;
    }
}
else if(isset($_POST['update_order_btn'])) 
{
    $track_no = $_POST['tracking_no'];
    $order_status = $_POST['order_status'];

    $updateOrder_query = " UPDATE orders SET status='$order_status' WHERE tracking_no='$track_no' ";
    $updateOrder_query_run = mysqli_query($con, $updateOrder_query);

    $_SESSION['message'] = "Order status Updated!!";
    header("Location: ../view-order.php?t=".$track_no);
}
else if(isset($_POST['message_del']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $msg_query = "SELECT * FROM contact_us WHERE id='$id' ";
    $msg_query_run = mysqli_query($con, $msg_query);
    $msg_data = mysqli_fetch_array($msg_query_run);

    $delete_query = "DELETE FROM contact_us WHERE id='$id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        echo 200;
    }
    else
    {
        echo 500;
    }
}
else if(isset($_POST['user_del']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $user_query = "SELECT * FROM register WHERE id='$id' ";
    $user_query_run = mysqli_query($con, $user_query);
    $user_data = mysqli_fetch_array($user_query_run);

    $delete_query = "DELETE FROM register WHERE id='$id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        echo 200;
    }
    else
    {
        echo 500;
    }
}

?>