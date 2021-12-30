<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light ">
    <a class="navbar-brand" href="#">
        <img src="../assets/img/logo.png" alt="Logo" style="width:40px;">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    if (!isset($_SESSION['username'])) {
    } 
    else 
    { ?>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=jersey&action=index">Jersey Manager<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#index.php?controller=jerseytype&action=index">Kits Manager<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#index.php?controller=club&action=index">Club Manager<span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=khachhang&action=index">Customer Manager<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo ($_SESSION['hoten']); ?><span
                        class="sr-only">(current)</span></a>
            </li>
            <li>
                <a class="nav-link text-light" href="./user.php?action=logout">Log out<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
    <?php
    } ?>
</nav>