<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}   
$action = Utilities::get('action', 'index');
$kh = new KhachHang();
if($action == 'index')
{
    $data = $kh->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách khách hàng";
    </script>';
    include './views/khachhang/index.php';
}