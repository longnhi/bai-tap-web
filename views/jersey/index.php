<div class="container">
    <?php
    if (count($data) == 0) {
        echo '<div style="margin: auto;margin-top:20px;text-align: center;">No products found</div>';
    }
    if ($action != 'index' && $action != 'detail' && count($data) != 0) {
        echo '<div style="margin: auto;margin-top:20px;text-align: center;">Found ' . count($data) . ' products</div>';
    }
    ?>
    <div class="row">
        <?php
        foreach ($data as $r) {
        ?>
            <div class="col-lg-4 mb-3 mt-3">
                <div class="card h-100 shadow">
                    <div class="card-header text-center">
                        <a href="./index.php?controller=jersey&action=detail&id=<?php echo $r['maaodau'] ?>">
                            <img src="<?php echo IMG_JERSEY . $r['hinhanh']; ?>" alt="" class="img-thumbnail" style="width: 150px;height: 150px;">
                        </a>
                    </div>
                    <div class="card-body" style="height: 100px;">
                        <h6 class="card-title font-bold">
                            <a class="text-dark" href="./index.php?controller=jersey&action=detail&id=<?php echo $r['maaodau'] ?>">
                                <?php echo $r['tenaodau']; ?>
                            </a>
                        </h6>
                        <p class="cart-text"> Price: <?php echo $r['gia']; ?> €</p>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a class="page-link" href="./index.php?controller=jersey&action=detail&id=<?php echo $r['maaodau'] ?>">Buy The Jersey</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>