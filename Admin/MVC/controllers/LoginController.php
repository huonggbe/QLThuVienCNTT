<?php
require_once("MVC/Models/login.php");
class LoginController
{
    var $login_model;
    public function __construct()
    {
        $this->login_model = new login();
    }
    // public function login()
    // {
    //     require_once("MVC/Views/login/login.php");
    // }
    // public function login_action()
    // {
    //     $this->login_model->login_action();
    // }
    public function admin()
    {
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'docgia') {
            $listnguoimuon = $this->login_model->Listdocgia();
        }
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'sachmuon') {
            $listsachmuon = $this->login_model->Listmuonsach();
        }
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'vipham') {
            $listnguoivipham = $this->login_model->ListVipham();
        }



        require_once("MVC/Views/Admin/index.php");
    }


    public function xuat()
    {
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'docgia') {
            $listnguoimuon = $this->login_model->Listdocgia();
        }
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'sachmuon') {
            $listsachmuon = $this->login_model->Listmuonsach();
        }
        if (isset($_GET['thongke']) and $_GET['thongke'] == 'vipham') {
            $listnguoivipham = $this->login_model->ListVipham();
        }
        require_once('MVC/Views/login/xuat.php');
    }
}
