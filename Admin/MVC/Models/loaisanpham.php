<?php
require_once("model.php");
class loaisanpham extends Model
{
    var $table = "loaitailieu";
    var $contens = "MaTaiLieu";
    function danhmuc()
    {
        $query = "select * from danhmuc ";
        require("result.php");
        return $data;
    }
}
