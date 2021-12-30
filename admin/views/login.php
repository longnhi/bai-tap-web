<!--//<đăng nhập admin-->
<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-9" action="./user.php?action=dangnhap" method="POST" style="margin: auto;">
        <div class="row form-group">
            <div class="col col-sm-3"><label for="username">User Name:</label></div>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="User Name" id="username" name="username" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="password">Password:</label></div>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
            </div>
        </div>
        <div class="row form-group text-center">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">SIGN IN</button>
            </div>
        </div>
    </form>
</div>
<!--//đăng nhập admin-->