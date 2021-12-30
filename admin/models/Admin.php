<?php 
if (!defined('HOST')){
    exit;
}
class Admin extends Db 
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from admin');
    }
    function getUserLogin($username,$password)
    {
        $data= $this->selectQuery('select * from admin where username like ? and password like ?',[$username,$password]);
        return $data;
    }
}