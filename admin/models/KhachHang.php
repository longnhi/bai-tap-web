<?php 
if (!defined('HOST')){
    exit;
}
class KhachHang extends Db 
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from customer');
    }
    function getUserLogin($email,$password)
    {
        $data= $this->selectQuery('select * from customer where email like ? and password like ?',[$email,$password]);
        return $data;
    }
}