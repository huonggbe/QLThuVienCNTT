<?php
require_once("model.php");
class Cart extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from tailieu where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    

    function SoluongSP($id)
    {
        $query =  "SELECT SoLuong, TenTL from tailieu where MaSP = '$id' and TrangThai=1 ";

        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
}
