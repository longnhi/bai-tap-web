<div class="container mb-3 mt-3">
<div class="text-center d-flex justify-content-end"><a class="page-link" href="./index.php?controller=club&action=add&">Add Club</a></div>
    <div class="row shadow mt-3 card-body align-items-center justify-content-center">
        <div class="col-1">Mã Club</div>
        <div class="col-3">Tên Club</div>
        <div class="col-2 text-center">Action</div>
    </div>
    <?php
    foreach($data as $r) { 
        ?>
        <div class="row shadow mt-3 card-body align-items-center justify-content-center">
            <div class="col-1"><?php echo $r['maclub'] ?></div>
            <div class="col-3"><?php echo $r['tenclub']; ?></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=club&action=sua&id=<?php echo $r['maclub'] ?>">Sửa</a></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=club&action=xoa&id=<?php echo $r['maclub'] ?>">Xoá</a></div>
        </div>
<?php 
    } 
?>
</div>