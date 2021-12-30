<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}   
$action = Utilities::get('action', 'index');
$club = new Club();

if ($action == 'index') {
    $data = $club->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách club";
    </script>';
    include './views/club/index.php';
}
if ($action == 'add') {
    echo '<script>
        document.getElementById("tilte").innerHTML = "Thêm club";
    </script>';
    include './views/club/them.php';
}

if ($action == 'xulythem') {
    $maclub = Utilities::post('maclub');
    $tenclub = Utilities::post('tenclub');
    $item = $club->detail($maclub);
    if ($item != null) {
        echo
        '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Đã tồn tại mã này!
        </div></div>';
    } else {
        $club->them($maclub, $tenclub);
        echo
        '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Thêm thành công!
        </div></div>';
    }

    $data = $club->all();

    echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách club";
    </script>';
    echo '<script> location.replace("index.php?controller=club&action=index"); </script>';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $item = $club->detail($id)[0];
    echo '<script>
        document.getElementById("tilte").innerHTML = "Sửa club";
    </script>';
    include './views/club/sua.php';
}

if ($action == 'xulysua') {
    $maclub = Utilities::post('maclub');
    $tenclub = Utilities::post('tenclub');
    $club->sua($maclub, $tenclub);
    $data = $club->all();
    echo
    '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Sửa thành công!
        </div></div>';
        echo '<script>
        document.getElementById("tilte").innerHTML = "Danh sách club";
    </script>';
    echo '<script> location.replace("index.php?controller=club&action=index"); </script>';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $del = $club->xoa($id);
    $data = $club->all();
    echo
    '<div class = "container">
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Xoá thành công!
        </div></div>';
        echo '<script> location.replace("index.php?controller=club&action=index"); </script>';
}
