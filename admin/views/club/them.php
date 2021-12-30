<div class="container mt-3 mb-3">
<form class="form-horizontal col-sm-6" enctype="multipart/form-data" action="index.php?controller=club&action=xulythem" method="POST" style="margin: auto;">
    <div class="row form-group">
        <div class="col col-sm-3"><label for="maclub">ID Club:</label></div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="ID Club" id="maclub" name="maclub" maxlength="3" required>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-sm-3"><label for="tenclub">Name Club:</label></div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Name Club" id="tenclub" name="tenclub" required>
        </div>
    </div>
    <div class="row form-group text-center">
        <div class="col col-sm-12">
            <button type="submit" class="btn btn-success" name="btn_action" value="">Thêm</button>
        </div>
    </div>
</form>
</div>