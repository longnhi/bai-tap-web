<?php 
    $club = new Club();
    $data =$club->all();
    foreach($data as $r)
    {
        ?>
<a class="dropdown-item" href="./index.php?controller=jersey&action=club&id=<?php echo $r['maclub'] ?>"><?php echo $r['tenclub'] ?></a>
<?php
    }
    ?>