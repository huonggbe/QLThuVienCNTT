<?php
session_start();

if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {


        case 'muonsach':
            require_once('MVC/controllers/MuonSachController.php');
            $controller_obj = new MuonSachController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'chitiet':
                    $controller_obj->chitiet();
                    break;
                case 'chitietcapnhat':
                    $controller_obj->chitietcapnhat();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'cancel':
                    $controller_obj->cancel();
                    break;
                case 'xetduyet':
                    $controller_obj->xetduyet();
                    break;
                case 'capnhat':
                    $controller_obj->capnhat();
                    break;
                case 'capnhat1':
                    $controller_obj->capnhat1();
                    break;
                case 'xuat':
                    $controller_obj->xuat();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'danhmuc':
            require_once('MVC/controllers/DanhmucController.php');
            $controller_obj = new DanhmucController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'banner':
            require_once('MVC/controllers/BannerController.php');
            $controller_obj = new BannerController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'nguoidung':
            require_once('MVC/controllers/NguoiDungController.php');
            $controller_obj = new NguoiDungController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'tailieu':
            require_once('MVC/controllers/SanphamController.php');
            $controller_obj = new SanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'loaitailieu':
            require_once('MVC/controllers/LoaisanphamController.php');
            $controller_obj = new LoaisanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;



        case 'login':
            require_once('MVC/controllers/LoginController.php');
            $controller_obj = new LoginController();
            switch ($act) {
                case 'admin':
                    $controller_obj->admin();
                    break;
                case 'xuat':
                    $controller_obj->xuat();
                    break;
                default:
                    $controller_obj->admin();
                    break;
            }
            break;
        default:
            header('location: ?mod=login');
            // require_once('MVC/controllers/LoginController.php');
            // $controller_obj = new LoginController();
            // $controller_obj->admin();
            // break;
    }
} else if (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) {
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'muonsach':
            require_once('MVC/controllers/MuonSachController.php');
            $controller_obj = new MuonSachController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'chitiet':
                    $controller_obj->chitiet();
                    break;
                case 'chitietcapnhat':
                    $controller_obj->chitietcapnhat();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'cancel':
                    $controller_obj->cancel();
                    break;
                case 'xetduyet':
                    $controller_obj->xetduyet();
                    break;
                case 'capnhat':
                    $controller_obj->capnhat();
                    break;
                case 'capnhat1':
                    $controller_obj->capnhat1();
                    break;
                case 'xuat':
                    $controller_obj->xuat();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'danhmuc':
            require_once('MVC/controllers/DanhmucController.php');
            $controller_obj = new DanhmucController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'banner':
            require_once('MVC/controllers/BannerController.php');
            $controller_obj = new BannerController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'nguoidung':
            require_once('MVC/controllers/NguoiDungController.php');
            $controller_obj = new NguoiDungController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                case 'updateMK':
                    $controller_obj->updateMK();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'tailieu':
            require_once('MVC/controllers/SanphamController.php');
            $controller_obj = new SanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'loaitailieu':
            require_once('MVC/controllers/LoaisanphamController.php');
            $controller_obj = new LoaisanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'login':
            require_once('MVC/controllers/LoginController.php');
            $controller_obj = new LoginController();
            switch ($act) {
                case 'admin':
                    $controller_obj->admin();
                    break;
                case 'xuat':
                    $controller_obj->xuat();
                    break;
                default:
                    $controller_obj->admin();
                    break;
            }
            break;

        default:
            header('location: ?mod=login');
            // require_once('MVC/controllers/LoginController.php');
            // $controller_obj = new LoginController();
            // $controller_obj->admin();
            // break;
    }
} else {
    if (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) {
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
        switch ($mod) {
            case 'muonsach':
                require_once('MVC/controllers/MuonSachController.php');
                $controller_obj = new MuonSachController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'chitiet':
                        $controller_obj->chitiet();
                        break;
                    case 'chitietcapnhat':
                        $controller_obj->chitietcapnhat();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'cancel':
                        $controller_obj->cancel();
                        break;
                    case 'xetduyet':
                        $controller_obj->xetduyet();
                        break;
                    case 'capnhat':
                        $controller_obj->capnhat();
                        break;
                    case 'capnhat1':
                        $controller_obj->capnhat1();
                        break;
                    case 'xuat':
                        $controller_obj->xuat();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'loaitailieu':
                require_once('MVC/controllers/LoaisanphamController.php');
                $controller_obj = new LoaisanphamController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'danhmuc':
                require_once('MVC/controllers/DanhmucController.php');
                $controller_obj = new DanhmucController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'tailieu':
                require_once('MVC/controllers/SanphamController.php');
                $controller_obj = new SanphamController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;


            case 'login':
                require_once('MVC/controllers/LoginController.php');
                $controller_obj = new LoginController();
                switch ($act) {
                    case 'admin':
                        $controller_obj->admin();
                        break;
                    case 'xuat':
                        $controller_obj->xuat();
                        break;
                    default:
                        $controller_obj->admin();
                        break;
                }
                break;

            default:
                header('location: ?mod=login');
                // require_once('MVC/controllers/LoginController.php');
                // $controller_obj = new LoginController();
                // $controller_obj->admin();
                // break;
        }
    } else {
        // $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        // $act = isset($_GET['act']) ? $_GET['act'] : "login";
        // require_once('MVC/controllers/LoginController.php');
        // $controller_obj = new LoginController();
        // switch ($mod) {
        //     case 'login':
        //         switch ($act) {
        //             case 'login':
        //                 $controller_obj->login();
        //                 break;
        //             case 'login_action':
        //                 $controller_obj->login_action();
        //                 break;
        //             default:
        //                 $controller_obj->login();
        //                 break;
        //         }
        //     default:
        //         $controller_obj->login();
        //         break;
        // }
        header('location: ../?act=taikhoan');
    }
}
