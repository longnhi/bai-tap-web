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
    function checkEmail($email)
    {
        $data= $this->selectQuery('select * from customer where email like ? ',[$email]);
        return $data;
    }
    function getUserLogin($email,$password)
    {
        $data= $this->selectQuery('select * from customer where email like ? and password like ?',[$email,$password]);
        return $data;
    }
    function them($email, $password, $hoten)
    {
        $sql_them = "INSERT INTO `customer`(`email`, `password`, `hoten`) 
                    VALUES (?,?,?)";
        return $this->updateQuery($sql_them, [$email, $password, $hoten]);
    }
}