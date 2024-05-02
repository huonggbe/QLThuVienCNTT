<?php
require_once("Models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {

        $data_danhmuc = $this->shop_model->danhmuc();

        $data_loaisp = $this->shop_model->loaisp(0, 8);

        $data_chitietDM = array();
        $max = $this->shop_model->maxgia();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->shop_model->chitietdanhmuc($i);
        }


        // if (isset($_GET['trang'])) {
        //     $id = $_GET['trang'];
        //     $limit = 9;
        //     $start = ($id - 1) * $limit;
        //     $data = $this->shop_model->limit($start, $limit);
        //     $data_noibat = $this->shop_model->sanpham_noibat();
        //     $data_tong = 9;
        // } else {
        if (isset($_GET['sp']) and isset($_GET['loai'])) {

            $data_loai = $this->shop_model->chitiet_loai($_GET['loai'], $_GET['sp']);
            if ($data_loai != null) {
                $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                $limit = 9;
                $start = ($id - 1) * $limit;

                $data = $this->shop_model->chitietLoaiSP($start, $limit, $data_loai[0]['MaTaiLieu'], $_GET['sp']);

                $data_count = $this->shop_model->count_sp_ctdm($_GET['sp'], $data_loai[0]['MaTaiLieu']);
                $data_tong = $data_count['tong'];
                $test = 0;
            }
        } else {
            if (isset($_REQUEST['sp'])) {
                $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                $limit = 9;
                $start = ($id - 1) * $limit;

                $idsp = isset($_REQUEST['sp']);
                $data = $this->shop_model->sanpham_danhmuc($start, $limit, $_GET['sp']);

                $data_count = $this->shop_model->count_sp_dm($_GET['sp']);
                $data_tong = $data_count['tong'];
                $test = 0;
            } else {
                if (isset($_GET['tk'])) {
                    $chuoi = $_GET['tk'];
                    if ($chuoi == 'all') {
                        $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $limit = 9;
                        $start = ($id - 1) * $limit;
                        $data1 = $this->shop_model->allsanpham();
                        $data = $this->shop_model->allsanpham1($start, $limit);
                        $max = $this->shop_model->maxgia();
                        $data_tong = count($data1);
                        $test = 0;
                    } else {
                        $arr = explode("-", $chuoi);
                        $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $limit = 9;
                        $start = ($id - 1) * $limit;
                        $data1 = $this->shop_model->dongia($arr['0'], $arr['1']);
                        $data = $this->shop_model->dongia1($arr['0'], $arr['1'], $start, $limit);
                        $data_tong = count($data1);
                        $test = 0;
                    }
                } else {
                    if (isset($_GET['keyword'])) {
                        $data1 = $this->shop_model->keywork($_GET['keyword']);
                        $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $limit = 9;
                        $start = ($id - 1) * $limit;
                        $data = $this->shop_model->keywork1($_GET['keyword'], $start, $limit);

                        $test = 0;
                        $data_tong = count($data1);
                    } else {
                        $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $limit = 9;
                        $start = ($id - 1) * $limit;
                        $data = $this->shop_model->limit($start, $limit);

                        //$data_tong = 9;
                        // $data = $this->shop_model->limit(0, 9);
                        // $data_noibat = $this->shop_model->sanpham_noibat();
                        $data_count = $this->shop_model->count_sp();
                        $data_tong = $data_count['tong'];
                        $test = 0;
                    }
                }
            }
        }

        require_once('Views/index.php');
    }
}
