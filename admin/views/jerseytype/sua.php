<div class="container mt-3 mb-3">
<form class="form-horizontal col-sm-6" enctype="multipart/form-data" action="index.php?controller=jerseytype&action=xulysua" method="POST" style="margin: auto;">
<div class="row form-group">
        <div class="col col-sm-3"><label for="maloai">Kits ID:</label></div>
        <div class="col-sm-9"> 
            <input type="number" class="form-control" placeholder="maloai" id="maloai" name="maloai" value="<?php echo $item['maloai'];?>" readonly required>
        </div>
    </div>    
<div class="row form-group">
        <div class="col col-sm-3"><label for="maloai">Kits Name:</label></div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="tenloai" id="tenloai" name="tenloai" value="<?php echo $item['tenloai']; ?>" required>
        </div>
    </div>
    <div class="row form-group" style="text-align:center;">
        <div class="col col-sm-12">
            <button type="submit" class="btn btn-success" name="btn_action" value="">Sửa</button>
        </div>
    </div>
</form>
</div>