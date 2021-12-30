<?php
$jersey=new Jersey();
$type = new JerseyType();
$club = new Club();
$kh=new KhachHang();
//<đăng nhập admin
echo '<script>
        document.getElementById("tilte").innerHTML = "Home";
    </script>';
include './views/home.php';