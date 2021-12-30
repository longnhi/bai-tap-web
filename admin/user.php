<?php
//<đăng nhập admin-->
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
$kh = new Admin();
$action = Utilities::get('action');

if($action == 'dangnhap'){
    session_start();
    $username = Utilities::post('username');
    $pw = Utilities::post('password');
    $password = Utilities::encyptMD5($pw);
    $data = $kh->getUserLogin($username,$password);
    if($data!=null)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['hoten']=$data[0]['hoten'];
        echo '<script> location.replace("index.php"); </script>';
    }else{
        echo '<script> location.replace("index.php"); </script>';
    }
}

if($action=='logout')
{
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['hoten']);
    session_destroy();
    echo '<script> location.replace("index.php"); </script>';
}
//<đăng nhập admin>