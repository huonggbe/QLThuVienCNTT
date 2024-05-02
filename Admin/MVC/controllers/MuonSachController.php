<?php
require_once("MVC/models/muonsach.php");

class MuonSachController
{
    var $hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 4) {
                $id = 0;
            }
            $data = $this->hoadon_model->trangthai($id);
        } else {
            $data = $this->hoadon_model->All();
        }
        require_once("MVC/Views/Admin/index.php");
    }
    function xetduyet()
    {
        require_once("MVC/Views/Admin/index.php");
    }

    function vipham()
    {
        require_once("MVC/Views/Admin/index.php");
    }
    function store()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $nguoimuon = $_POST['NguoiNhan'];

        $id = $_POST['id'];


        $data = array(
            'MaHD' => $id,
            'TrangThai' => 1,
            'NgayMuon' => $ThoiGian,
            'NguoiChoMuon' => $nguoimuon


        );
        $this->hoadon_model->update($data);

        $chitiet = $this->hoadon_model->chitietmuonsach($id);
    }

    function capnhat()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 2,
            'NgayTra' => $ThoiGian,
            'ViPham' => 'Không',
            'HinhThucXuLy' => 'Không'
        );
        $this->hoadon_model->update($data);
    }
    function capnhat1()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $data = array(
            'MaHD' => $_POST['id'],
            'TrangThai' => 3,
            'NgayTra' => $ThoiGian,
            'ViPham' => $_POST['ViPham'],
            'HinhThucXuLy' =>  $_POST['HinhThucXuLy']

        );

        $this->hoadon_model->update($data);
    }
    function cancel()
    {
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 4,
            'lyDoHuy' => $_GET['lydohuy'],
        );
        $this->hoadon_model->update($data);
    }
    function delete()
    {

        if (isset($_GET['id'])) {

            // $this->hoadon_model->xoamuonsach($_GET['id']);
            $this->hoadon_model->delete($_GET['id']);
        }
    }
    function xuat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->xuatphieumuon($id);

        require_once("MVC/Views/muonsach/xuat.php");
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitietmuonsach($id);
        require_once("MVC/Views/Admin/index.php");
    }
    function chitietcapnhat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitietmuonsach($id);

        require_once("MVC/Views/Admin/index.php");
    }
}
