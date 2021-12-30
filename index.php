<?php
include 'config.php';
function loadClass($className)
{
    if (is_file("models/$className.php"))
        include "./models/$className.php";
    else {
        echo 'Err';
        exit;
    }
}

spl_autoload_register('loadClass');

$x = new Db();
$controller = Utilities::get('controller', 'jersey');

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="tilte">Website bán áo đấu cầu thủ</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style type='text/css'>
        a:link {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include './pages/header.php';
        ?>
        <div>
            <?php
            if ($controller == 'jersey') {
                include './controllers/jersey.php';
            }
            if ($controller == 'giohang') {
                include './controllers/giohang.php';
            }

            if ($controller == 'khachhang') {
                include './controllers/khachhang.php';
            }
            
            if ($controller == 'jerseytype') {
                include './controllers/jerseytype.php';
            }
            
            if ($controller == 'club') {
                include './controllers/club.php';
            }
            
            if ($controller == 'bill') {
                include './controllers/bill.php';
            }
            ?>
        </div>
        <?php
        include './pages/footer.php';
        ?>
    </div>
</body>

</html>