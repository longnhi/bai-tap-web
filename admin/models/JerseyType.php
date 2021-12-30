<?php 
if (!defined('HOST')){
    exit;
}
class JerseyType extends Db 
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from jerseytype');
    }
    function getTen($id)
    {
        $data= $this->selectQuery('select * from jerseytype where maloai = ?',[$id]);
        return $data[0];
    }
    function detail($id)
    {
        $data = $this->selectQuery('select * from jerseytype where maloai=?', [$id]);
        return $data[0];
    }
    function them($ten)
    {
        $sql_them = "INSERT INTO `jerseytype`(`tenloai`) 
                    VALUES (?)";
        return $this->updateQuery($sql_them, [$ten]);
    }
 
    function xoa($id)
    {
        return $this->updateQuery("DELETE FROM `jerseytype` WHERE maloai=?", [$id]);
    }

    function sua($ma, $ten)
    {
        $sql_sua = "UPDATE `jerseytype` 
                    SET tenloai=? WHERE maloai=?";
        return $this->updateQuery($sql_sua, [$ten,$ma]);
    } 
}