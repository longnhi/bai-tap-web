<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}   
$action = Utilities::get('action', 'index');
$type = new JerseyType();
if ($action == 'index') {
    $data = $type->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách loại áo";
    </script>';
    include './views/jerseytype/index.php';
}

if ($action == 'add') {
    echo '<script>
        document.getElementById("tilte").innerHTML = "Thêm loại áo";
    </script>';
    include './views/jerseytype/them.php';
}

if ($action == 'xulythem') {
    $tenloai = Utilities::post('tenloai');
    $type->them($tenloai);
    $data = $type->all();
    echo
    '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Thêm thành công!
        </div></div>';
        echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách loại áo";
    </script>';
    echo '<script> location.replace("index.php?controller=jerseytype&action=index"); </script>';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $item = $type->detail($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Sửa loại áo";
    </script>';
    include './views/jerseytype/sua.php';
}

if ($action == 'xulysua') {
    $maloai = Utilities::post('maloai');
    $tenloai = Utilities::post('tenloai');
    $type->sua($maloai, $tenloai);
    $data = $type->all();
    echo
    '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Sửa thành công!
        </div></div>';
        echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách loại áo";
    </script>';
    echo '<script> location.replace("index.php?controller=jerseytype&action=index"); </script>';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $del = $type->xoa($id);
    $data = $type->all();
    echo
    '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Xoá thành công!
        </div></div>';
        echo '<script> location.replace("index.php?controller=jerseytype&action=index"); </script>';
}