<hr>
<div class="container">
<div class="row mb-3 mt-3">
    <div class="col-lg-4">
        <img src="<?php echo IMG_JERSEY.$data['hinhanh'];?>" alt="" class="img-thumbnail">
        <div style="margin-top: 20px;text-align: center;">
        <a class="page-link" style="width:150px;margin:auto;" href="index.php?controller=jersey&action=tatca">Quay lại</a>
        </div>
    </div>
    <div class="col-lg-8">
        <div><h3><?php echo $data['tenaodau'];?></h3></div>
        <hr>
        <div>
            <h5>Profile footballer</h5>
            <p style="text-align: justify;"><?php echo $data['mota'];?></p></div>
        <br>
        <div>Price: <?php echo $data['gia'];?> €</div>
        <br>
        <div>Club: <?php $dclub = $club->getTen($data['maclub']); echo $dclub['tenclub'];?></a></div>
        <br>
        <div>Kit Jersey: <?php $dloai = $type->getTen($data['maloai']); echo $dloai['tenloai'];?></a></div>
    </div>
</div>