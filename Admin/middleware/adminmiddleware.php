<?PHP

if(isset($_SESSION['auth']))
{
    if($_SESSION['role_as'] != 1)
    {
        $_SESSION['message'] = "You are not Authorized User to access this page!!";
        header('Location: ../../ShopZone/index.php');
    }
}
else
{ 
    $_SESSION['message'] = "Login to Continue!!";
    header('Location: ../login.php');
}

?>