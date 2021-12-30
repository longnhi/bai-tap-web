<script>
        document.getElementById("tilte").innerHTML = "Đăng ký";
</script>
<div class="container mt-3 mb-3">
<form class="form-horizontal col-sm-6" action="./index.php?controller=khachhang&action=register" method="POST"
    style="margin: auto;">
    <div class="row form-group">
        <div class="col col-sm-3"><label for="email">Email:</label></div>
        <div class="col-sm-9">
            <input type="email" class="form-control" placeholder="email@gmail.com" id="email" name="email" required>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-sm-3"><label for="password">Password:</label></div>
        <div class="col-sm-9">
            <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-sm-3"><label for="name">Full Name:</label></div>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Full name" id="name" name="name" required>
        </div>
    </div>
    <div class="row form-group" style="text-align:center;">
        <div class="col col-sm-12">
            <button type="submit" class="btn btn-success" name="btn_action" value="">SIGN UP</button>
        </div>
    </div>
</form>
<div class="mr-auto text-center">You already have an account, go to <a href="./index.php?controller=khachhang&action=dangnhap">Sign In</a></div>
</div>