<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }


    function Listmuonsach()
    {
        $query = "SELECT chitietmuonsach.MaSP, 
        tailieu.TenTL, 
        tailieu.TacGia, 
        SUM(chitietmuonsach.SoLuong) AS TongSoLuong 
 FROM chitietmuonsach 
 INNER JOIN tailieu ON chitietmuonsach.MaSP = tailieu.MaSP 
 GROUP BY chitietmuonsach.MaSP, tailieu.TenTL, tailieu.DonGia;
 ";

        require("result.php");

        return $data;
    }

    function ListViPham()
    {
        $query = "SELECT nguoidung.MaND, nguoidung.Ho, nguoidung.Ten, muonsach.MaHD, muonsach.ViPham, muonsach.HinhThucXuLy, chitietmuonsach.MaSP, tailieu.TenTL
        FROM nguoidung
        INNER JOIN muonsach ON nguoidung.MaND = muonsach.MaND
        INNER JOIN chitietmuonsach ON muonsach.MaHD = chitietmuonsach.MaHD
        INNER JOIN tailieu ON chitietmuonsach.MaSP = tailieu.MaSP
        WHERE muonsach.ViPham != 'Không'
        ";


        require("result.php");

        return $data;
    }

    function Listdocgia()
    {
        $query = "SELECT DISTINCT nguoidung.MaND, nguoidung.Ho, nguoidung.Ten, nguoidung.GioiTinh, nguoidung.SDT, nguoidung.Email, nguoidung.DiaChi, nguoidung.TaiKhoan, nguoidung.MatKhau, nguoidung.MaQuyen, nguoidung.TrangThai
        FROM nguoidung
        INNER JOIN muonsach ON nguoidung.MaND = muonsach.MaND";

        require("result.php");

        return $data;
    }
}
