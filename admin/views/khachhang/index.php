<div class="container mb-3 mt-3">
<div class="row shadow mt-3 card-body align-items-center justify-content-center">
        <div class="col-2">Email</div>
        <div class="col-4">Password</div>
        <div class="col-2">Full Name Customer</div>
    </div>
    <?php
    foreach($data as $r) { 
        ?>
        <div class="row shadow mt-3 card-body align-items-center justify-content-center">
            <div class="col-2"><?php echo $r['email'] ?></div>
            <div class="col-4"><?php echo $r['password']; ?></div>
            <div class="col-2"><?php echo $r['hoten']; ?></div>
        </div>
<?php 
    } 
?>
</div>