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
    function detail($id)
    {
        $data = $this->selectQuery('select * from club where maclub like ?', [$id]);
        return $data;
    }

    function them($ma,$ten)
    {
        $sql_them = "INSERT INTO `club`(`maclub`,`tenclub`) 
                    VALUES (?,?)";
        return $this->updateQuery($sql_them, [$ma,$ten]);
    }
 
    function xoa($id)
    {
        return $this->updateQuery("DELETE FROM `club` WHERE maclub like ?", [$id]);
    }

    function sua($ma, $ten)
    {
        $sql_sua = "UPDATE `club` 
                    SET tenclub=? WHERE maclub like ?";
        return $this->updateQuery($sql_sua, [$ten,$ma]);
    }
}