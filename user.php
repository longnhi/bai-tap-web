<?php
include 'config.php';
function loadClass($className)
{
    if (is_file("models/$className.php"))
        include "./models/$className.php";
    else {
        echo 'Err';
        exit;
    }
}

spl_autoload_register('loadClass');

$x = new Db();
$kh = new KhachHang();
$action = Utilities::get('action');
if($action == 'login'){
    session_start();
    $email = Utilities::post('email');
    $pw=Utilities::post('password');
    $password = Utilities::encyptMD5($pw);
    $data = $kh->getUserLogin($email,$password);
    if($data!=null)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: ./index.php");
    }else{
        echo '<div class="container text-center">Incorrect email or password</div>';
        header('Location: index.php?controller=khachhang&action=dangnhap');
        include './views/khachhang/login.php';
    }
}