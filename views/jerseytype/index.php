<?php 
    $type = new JerseyType();
    $data =$type->all();
    foreach($data as $r) { 
        ?>
        <a class="dropdown-item" href="./index.php?controller=jersey&action=jerseytype&id=<?php echo $r['maloai'] ?>"><?php echo $r['tenloai'] ?></a>
<?php 
    } ?>