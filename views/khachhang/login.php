
<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-6" action="./user.php?action=login" method="POST" style="margin: auto;">
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
        <div class="row form-group" style="text-align:center;">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">SIGN IN</button>
            </div>
        </div>
    </form>
    <div class="mr-auto text-center">
        You don't have an account, access
        <a href="./index.php?controller=khachhang&action=dangky">Sign Up</a>
    </div>
</div>