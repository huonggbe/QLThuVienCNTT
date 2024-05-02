<?php
require_once("model.php");
class Checkout extends Model
{
    function save($data)
    {


        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO muonsach($f) VALUES ($v);";



        $status = $this->conn->query($query);

        $query_mahd = "select MaHD from muonsach ORDER BY NgayLap DESC LIMIT 1";
        $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
        echo $query_mahd;
        foreach ($_SESSION['sanpham'] as $value) {
            $MaSP = $value['MaSP'];
            $SoLuong = $value['SoLuong'];

            $MaHD = $data_mahd['MaHD'];
            $query_ct = "INSERT INTO chitietmuonsach(MaHD,MaSP,SoLuong) VALUES ($MaHD,$MaSP,$SoLuong)";

            $status_ct = $this->conn->query($query_ct);

            // Giảm số lượng sản phẩm trong bảng sanpham
            $query_sp = "UPDATE tailieu SET SoLuong = SoLuong - $SoLuong WHERE MaSP = $MaSP";
            $status_sp = $this->conn->query($query_sp);
        }


        if ($status == true and $status_ct = true) {
            setcookie('msg', 'Đăng ký thành công', time() + 2);
            //   unset($_SESSION['sanpham']);





            if (isset($_SESSION['ThanhToan'])) {
                header('location: ?act=order_complete');
            } else {
                header('location: ?act=checkout&xuli=order_complete');
            }
        } else {
            setcookie('msg', 'Đăng ký không thành công', time() + 2);
            header('location: ?act=checkout');
        }
    }

    function giamgia($id)
    {
        $query =  "SELECT MaGiamGia,GiaTriGiamGia, MoTa from giamgia1 where MaGiamGia = '$id' and TrangThai=1 ";

        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
}
