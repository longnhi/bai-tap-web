<div class="container mt-3 mb-3">
<div class="row">
            <div class="col-lg-6 mb-3 mt-3">
                <div class="card h-100 shadow">
                    <div class="card-header text-center">
                        <p>Có <?php echo count($jersey->all()); ?> áo đấu</p>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a class="page-link" href="index.php?controller=jersey&action=index">Quản lý áo đấu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mt-3">
                <div class="card h-100 shadow">
                    <div class="card-header text-center">
                        <p>Có <?php echo count($type->all()); ?> loại áo đấu</p>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a class="page-link" href="index.php?controller=jerseytype&action=index">Quản lý loại áo đấu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mt-3">
                <div class="card h-100 shadow">
                    <div class="card-header text-center">
                        <p>Có <?php echo count($club->all()); ?> câu lạc bộ</p>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a class="page-link" href="index.php?controller=club&action=index">Quản lý câu lạc bộ</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mt-3">
                <div class="card h-100 shadow">
                    <div class="card-header text-center">
                        <p>Có <?php echo count($kh->all()); ?> tài khoản khách hàng</p>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a class="page-link" href="index.php?controller=khachhang&action=index">Quản lý tài khoản</a>
                    </div>
                </div>
            </div>
    </div>
</div>