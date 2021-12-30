<?php 
if (!defined('HOST')){
    exit;
}
class Jersey extends Db 
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from jersey');
    }

    function paging($cur_page)
    {
        return $this->selectQuery("select * from jersey limit 6 offset ".(($cur_page-1)*6 ));
    }

    function random($n)
    {
        return $this->selectQuery("select * from jersey order by rand() limit 0, $n");
    }

    function detail($id)
    {
        $data = $this->selectQuery('select * from jersey where maaodau=?', [$id]);
        return $data[0];
    }
    
    function Search($kw)
    {
        $s ='select * from jersey where tenaodau like ?';
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    }

    function SearchPaging($kw,$cur_page)
    {
        $s ='select * from jersey where tenaodau like ? limit 6 offset '.(($cur_page-1)*6 );
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    }
    function jerseyByLoai($ml)
    {
        return $this->selectQuery('select * from jersey where maloai = ?',[$ml]);
    }

    function jerseyByClub($maclub)
    {
        return $this->selectQuery('select * from jersey where maclub like ?',[$maclub]);
    } 

    function them($ten,$hinh, $gia, $mota,  $maclub, $maloai)
    {
        $sql_them = "INSERT INTO `jersey`(`tenaodau`, `hinhanh`, `gia`, `mota`, `maclub`, `maloai`) 
                    VALUES (?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [$ten, $hinh, $gia, $mota, $maclub, $maloai]);
    }
 
    function xoa($id)
    {
        return $this->updateQuery("DELETE FROM `jersey` WHERE maaodau=?", [$id]);
    }

    function sua($ma, $ten, $hinh, $gia, $mota,  $maclub, $maloai)
    {
        $sql_sua = "UPDATE `jersey` 
                    SET tenaodau=?, mota=?, gia=?, hinhanh=?, maclub=?, maloai=?  WHERE maaodau=?";
        return $this->updateQuery($sql_sua, [$ten, $mota, $gia, $hinh, $maclub, $maloai, $ma]);
    }                              
}