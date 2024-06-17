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
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            $_SESSION['message'] = "Welcome to Dashboard!!";
            header('Location: ../../Admin/index.php');
        }
        else
        {        
            $_SESSION['message'] = "Logged In Successfully!!";
            header('Location: ../shopzone.php');
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid Credentials!!";
        header('Location: ../login.php');
    }
}

?>