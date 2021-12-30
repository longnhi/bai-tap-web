<?php
$action = Utilities::get('action');

$kh = new KhachHang();

if ($action == 'index') {
    include './views/khachhang/login.php';
}

if ($action == 'dangnhap') {
    echo '<script>
    document.getElementById("tilte").innerHTML = "Đăng nhập";
    </script>';
    include './views/khachhang/login.php';
}

if ($action == 'dangky') {
    echo '<script>
    document.getElementById("tilte").innerHTML = "Đăng ký";
    </script>';
    include './views/khachhang/register.php';
}

if ($action == 'register') {
    $email = Utilities::post('email');
    $pw = Utilities::post('password');
    $password = Utilities::encyptMD5($pw);
    $hoten = Utilities::post('name');
    $check = $kh->checkEmail($email);
    if ($check != null) {
        echo 'email da duoc su dung';
        include './views/khachhang/register.php';
    } else {
        $kh->them($email, $password, $hoten);
        echo '<div class="mr-auto text-center">You already have an account, sign in now <a href="./index.php?controller=khachhang&action=dangnhap">Sign In</a></div>';
    }
}
if ($action == 'dangxuat') {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    echo '<script> location.replace("index.php"); </script>';
}