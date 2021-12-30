<?php   
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}            
$action = Utilities::get('action', 'index');
$jersey = new Jersey();
$type = new JerseyType();
$club = new Club();
$dataType = $type->all();
$dataClub = $club->all();
if ($action == 'index') {
    $data = $jersey->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách áo đấu";
    </script>';
    include './views/jersey/index.php';
}

if ($action == 'tatca') {
    $data = $jersey->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách áo đấu";
    </script>';
    include './views/jersey/index.php';
}

if ($action == 'detail') {
    $id = Utilities::get('id');
    $data = $jersey->detail($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Chi tiết sản phẩm";
    </script>';
    include './views/jersey/detail.php';
}

if($action == 'sua')
{
    $id = Utilities::get('id');
    $data = $jersey->detail($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Sửa sản phẩm";
    </script>';
    include './views/jersey/sua.php';
}
if($action == 'xulysua')
{
    $ma = Utilities::post('maaodau');
    $ten = Utilities::post('tenaodau');
    $mota = Utilities::post('mota');
    $gia = Utilities::post('gia');
    $maclub = Utilities::post('maclub');
    $maloai = Utilities::post('maloai');
    $hinh = Utilities::post('hinhanhcu');
    
    if(basename($_FILES['hinhanh']['name'])=='')
    {
        $hinhfile = $hinh;
    }else{
        $hinhfile = basename($_FILES['hinhanh']['name']);
        $link_img = "../assets/img/jersey/";
        $link_file = $link_img . $hinhfile;
        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $link_file);
    }

    $data_sua = $jersey->sua($ma, $ten, $hinhfile, $gia, $mota,  $maclub, $maloai);
    echo '<script> location.replace("index.php?controller=jersey&action=tatca"); </script>';
}

if($action == 'add' )
{
    echo '<script>
        document.getElementById("tilte").innerHTML = "Thêm sản phẩm";
    </script>';
    include './views/jersey/them.php';
}

if($action == 'xulythem')
{
    $ten = Utilities::post('tenaodau');
    $mota = Utilities::post('mota');
    $gia = Utilities::post('gia');
    $maclub = Utilities::post('maclub');
    $maloai = Utilities::post('maloai');

    $hinhfile = basename($_FILES['hinhanh']['name']);
    $link_img = "../assets/img/jersey/";
    $link_file = $link_img . $hinhfile;
    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $link_file);
    $data_them = $jersey->them($ten,$hinhfile, $gia, $mota,  $maclub, $maloai);
    
    echo '<script> location.replace("index.php?controller=jersey&action=tatca"); </script>';
}
if($action=='xoa')
{
    $id = isset($_GET['id'])?$_GET['id']:'';
    $del = $jersey->xoa($id);
    $data =$jersey->all();
    echo '<script> location.replace("index.php?controller=jersey&action=tatca"); </script>';
}