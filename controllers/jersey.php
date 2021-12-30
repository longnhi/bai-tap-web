<?php         
$action = Utilities::get('action', 'index');
$jersey = new Jersey();
$type = new JerseyType();
$club = new Club();

if ($action == 'index') {
    $data = $jersey->random(9);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Home";
    </script>';
    include './views/banner.php';
    include './views/jersey/index.php';
}

if ($action == 'tatca') {
    $data = $jersey->all();
    echo '<script>
        document.getElementById("tilte").innerHTML = "Tất cả sản phẩm";
    </script>';
    include './views/jersey/index.php';
}

if ($action == 'search') {
    
}

if ($action == 'jerseytype') {
    $id = Utilities::get('id');
    $data = $jersey->jerseyByLoai($id);
    $tenloai = $type->getTen($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Sản phẩm thuộc loại '.$tenloai['tenloai'].'";
    </script>';
    include './views/jersey/index.php';
}

if ($action == 'club') {
    $id = Utilities::get('id');
    $data = $jersey->jerseyByClub($id);
    $tenclub = $club->getTen($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "Sản phẩm thuộc club '.$tenclub['tenclub'].'";
    </script>';
    include './views/jersey/index.php';
}

if ($action == 'detail') {
    $id = Utilities::get('id');
    $item = $jersey->detail($id);
    echo '<script>
        document.getElementById("tilte").innerHTML = "'.$item['tenaodau'].'";
    </script>';
    include './views/jersey/detail.php';
    
    $data = $jersey->random(3);
    include './views/jersey/index.php';
}