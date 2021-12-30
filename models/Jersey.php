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

    function random($n)
    {
        return $this->selectQuery("select * from jersey order by rand() limit 0, $n");
    }

    function detail($id)
    {
        $data = $this->selectQuery('select * from jersey where maaodau=?', [$id]);
        return $data[0];
    }

    function jerseyByLoai($ml)
    {
        return $this->selectQuery('select * from jersey where maloai = ?',[$ml]);
    }

    function jerseyByClub($maclub)
    {
        return $this->selectQuery('select * from jersey where maclub like ?',[$maclub]);
    }
    
    function Search($kw)
    {
        $s ='select * from jersey where tenaodau like ?';
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    }                                   
}