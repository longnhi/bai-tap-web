<div class="container mb-3 mt-3">
<div class="text-center d-flex justify-content-end"><a class="page-link" href="./index.php?controller=jerseytype&action=add&">Add Kit</a></div>
<div class="row shadow mt-3 card-body align-items-center justify-content-center">
        <div class="col-1">Kits ID</div>
        <div class="col-3">Kits Name</div>
        <div class="col-2 text-center">Action</div>
    </div>
    <?php
    foreach($data as $r) { 
        ?>
        <div class="row shadow mt-3 card-body align-items-center justify-content-center">
            <div class="col-1"><?php echo $r['maloai'] ?></div>
            <div class="col-3"><?php echo $r['tenloai']; ?></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=jerseytype&action=sua&id=<?php echo $r['maloai'] ?>">Sửa</a></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=jerseytype&action=xoa&id=<?php echo $r['maloai'] ?>">Xoá</a></div>
        </div>
<?php 
    } 
?>
</div>