<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light ">
    <a class="navbar-brand" href="#">
        <img src="./assets/img/logo.png" alt="Logo" style="width:40px;">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=jersey&action=tatca">All Jersey<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kits</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php include './views/jerseytype/index.php'; ?>
                </div>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Club</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php include './views/club/index.php'; ?>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-2" action='index.php' method='get'>
            <input type="hidden" name='controller' value='jersey'>
            <input type="hidden" name='action' value='search'>
            <input class="form-control mr-sm-2" style="width: 250px;" type="text" placeholder="Search" name='kw'>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        <?php
        if(!isset($_SESSION['email'])){?>
            <ul class="navbar-nav navbar-right mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Sign In<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php
        }else{?>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo ($_SESSION['email']);?><span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link text-light" href="#">Log out<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php
        }?>
    </div>
</nav>