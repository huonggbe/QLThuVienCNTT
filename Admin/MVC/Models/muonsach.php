<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "muonsach";
    var $contens = "MaHD";


    function trangthai($id)
    {
        $query = "select * from muonsach where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitietmuonsach($id)
    {
        $query = "select ct.*,s.TenTL as Ten,s.HinhAnh1 from chitietmuonsach as ct, tailieu as s where ct.MaSP = s.MaSP and ct.MaHD = $id ";

        require("result.php");

        return $data;
    }
    function chitietmuonsach1($id)
    {
        $query = "select * from muonsach where MaHD = $id ";

        require("result.php");

        return $data;
    }
    function xuatphieumuon($id)
    {
        $query = "select ct.*, s.TenTL as Ten,muonsach.* from chitietmuonsach as ct, tailieu as s,muonsach where ct.MaSP = s.MaSP and ct.MaHD = $id and ct.MaHD= muonsach.MaHD";

        require("result.php");

        return $data;
    }



    function huymuonsach($id)
    {
        $query1 = "SELECT MaSP,SoLuong FROM `chitietmuonsach` WHERE MaHD=$id";
        $kq = $this->conn->query($query1);
        foreach ($kq as $row) {
            $sl = $row['SoLuong'];
            $sp = $row['MaSP'];
            $update = "UPDATE `tailieu` SET SoLuong = SoLuong+$sl WHERE MaSP=$sp";
            $this->conn->query($update);
        }
    }

    function xoamuonsach($id)
    {
        $hoadon1 = "SELECT TrangThai FROM `muonsach` WHERE MaHD=$id";
        $kq1 = $this->conn->query($hoadon1);
        if ($kq1[0]['TrangThai'] == 0 || $kq1[0]['TrangThai'] == 1) {
            $query1 = "SELECT MaSP,SoLuong FROM `chitietmuonsach` WHERE MaHD=$id";
            $kq = $this->conn->query($query1);
            foreach ($kq as $row) {
                $sl = $row['SoLuong'];
                $sp = $row['MaSP'];
                $update = "UPDATE `tailieu` SET SoLuong = SoLuong+$sl WHERE MaSP=$sp";
                $this->conn->query($update);
            }
        }
    }
}
