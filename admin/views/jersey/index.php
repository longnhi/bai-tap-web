<div class="container mt-3">
    <div class="text-center d-flex justify-content-end"><a class="page-link" href="./index.php?controller=jersey&action=add&">Add Jersey</a></div>
    <div class="container mt-3">
        <?php
    foreach ($data as $r) {
    ?>
        <div class="row shadow mb-3 card-body align-items-center justify-content-center">
            <div class="col-1"><?php echo $r['maaodau'] ?></div>
            <div class="col-2"><img src="<?php echo IMG_JERSEY . $r['hinhanh']; ?>" alt="" class="img-thumbnail"
                    style="width: 150px;height: 150px;"></div>
            <div class="col-3"><?php echo $r['tenaodau']; ?></div>
            <div class="col-2"><?php echo $r['gia']; ?> €</div>
            <div class="col-2 text-center"><a class="page-link"
                    href="./index.php?controller=jersey&action=detail&id=<?php echo $r['maaodau'] ?>">Chi tiết</a></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=jersey&action=sua&id=<?php echo $r['maaodau'] ?>">Sửa</a></div>
            <div class="col-1 text-center"><a class="page-link"
                    href="./index.php?controller=jersey&action=xoa&id=<?php echo $r['maaodau'] ?>">Xoá</a></div>
        </div>
        <?php
    }
    ?>
    </div>
</div>