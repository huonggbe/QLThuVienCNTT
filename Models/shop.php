<?php
require_once("model.php");
class Shop extends Model
{

    function loaisp($a, $b)
    {
        $query = "SELECT * FROM loaitailieu WHERE   MaDM = 1 LIMIT $a, $b";

        require("result.php");

        return $data;
    }
    function keywork($a)
    {
        $a = "'%" . $a . "%'";
        $query = "SELECT * FROM tailieu WHERE  TenTL LIKE $a and TrangThai=1 ORDER BY DonGia ASC";

        require("result.php");

        return $data;
    }
    function keywork1($a, $c, $d)
    {
        $a = "'%" . $a . "%'";
        $query = "SELECT * FROM tailieu WHERE  TenTL LIKE $a and TrangThai=1 ORDER BY DonGia ASC LIMIT $c,$d";

        require("result.php");

        return $data;
    }
    function dongia($a, $b)
    {
        if ($a == 0) {
            $a = "30000";
        } else {
            $a = $a . "000000";
        }
        $b = $b . "000000";
        $query = "SELECT * FROM tailieu WHERE  DonGia > $a AND DonGia < $b and TrangThai=1 ORDER BY DonGia ASC";

        require("result.php");

        return $data;
    }
    function allsanpham()
    {

        $query = "SELECT * FROM tailieu WHERE  TrangThai=1 ";

        require("result.php");

        return $data;
    }
    function allsanpham1($a, $b)
    {

        $query = "SELECT * FROM tailieu WHERE  TrangThai=1  ORDER BY DonGia ASC LIMIT $a, $b";

        require("result.php");

        return $data;
    }
    function maxgia()
    {

        $query = "SELECT max(DonGia) FROM tailieu WHERE  TrangThai=1 ";

        require("result.php");

        return $data;
    }

    function dongia1($a, $b, $c, $d)
    {
        if ($a == 0) {
            $a = "30000";
        } else {
            $a = $a . "000000";
        }
        $b = $b . "000000";
        $query = "SELECT * FROM tailieu WHERE  DonGia > $a AND DonGia < $b and TrangThai=1 ORDER BY DonGia LIMIT $c, $d";

        require("result.php");

        return $data;
    }
    function chitiet_loai($loai, $sp)
    {
        $query = "SELECT * FROM loaitailieu WHERE  TenLoaiTaiLieu = '$loai' and MaDM = $sp";

        require("result.php");

        return $data;
    }
    function chitiet($id, $sp)
    {
        $query = "SELECT * FROM tailieu WHERE  MaLSP = '$id' and MaDM = $sp and TrangThai=1";

        require("result.php");

        return $data;
    }
    function chitietLoaiSP($a, $b, $id, $sp)
    {
        $query = "SELECT * FROM tailieu WHERE  MaLSP = '$id' and MaDM = $sp and TrangThai=1 ORDER BY ThoiGian DESC LIMIT $a, $b ";

        require("result.php");

        return $data;
    }

    function count_sp()
    {
        $query = "SELECT COUNT(MaSP) as tong FROM tailieu WHERE TrangThai=1 ";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM tailieu WHERE MaDM = $dm and TrangThai=1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm, $ctdm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM tailieu WHERE MaDM = $dm And MaLSP = $ctdm and TrangThai=1";


        return $this->conn->query($query)->fetch_assoc();
    }
}
