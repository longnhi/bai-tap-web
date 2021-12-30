<?php 
if (!defined('HOST')){
    exit;
}
class Club extends Db 
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from club');
    }
    function getTen($id)
    {
        $data= $this->selectQuery('select * from club where maclub like ?',[$id]);
        return $data[0];
    }
}