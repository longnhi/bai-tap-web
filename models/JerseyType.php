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
}