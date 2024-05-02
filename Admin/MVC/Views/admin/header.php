<style>
    #notifDropdown {
        position: relative;
    }

    #notifDropdown::after {
        content: var(--TongSL);
        position: absolute;
        bottom: 60%;
        left: 70%;
        font-size: 10px;
        background: red;
        color: white;
        padding: 6px;
        border-radius: 6px;
    }


    /* @keyframes notifRing {
    0 {
        transform: rotate(0)
    }

    25% {
        transform: rotate(-20deg)
    }

    75% {
        transform: rotate(20deg)
    }

    100% {
        transform: rotate(0)
    }
} */
</style>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->


    <!-- Topbar Navbar -->
    <?php
    if (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) {
    ?>
        <form method="post" action="backup.php" style="display: flex;
            align-items: center;">
            <input class="btn btn-danger" type="submit" name="backup" value="Sao lưu dữ liệu">
        </form>
    <?php
    }
    ?>
    <ul class="navbar-nav ml-auto">
        <!-- Notification -->
        <li style="    display: flex;
            align-items: center;
            position:relative">
            <i data-toggle="dropdown" id="notifDropdown" class="fa-regular fa-bell" style=" 
            --TongSL: <?php echo $TongSL > 0 ? "'" . $TongSL . "'" : ''; ?>;
               font-size: 24px;
            margin-right: 12px;
            cursor: pointer;"></i>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" ia-labelledby="notifDropdown" style="    padding: 16px;
    min-width: 400px;
    max-height: 400px;
    overflow: auto;">
                <h4 style="    text-align: center;
    padding-bottom: 12px;
    font-size: 20px;
    text-transform: uppercase;"> Phiếu mượn chờ xét duyệt</h4>



            </div>
        </li>

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>


        <!-- Nav Item - Messages -->


        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['login']['TaiKhoan'] ?></span>
                <img class="img-profile rounded-circle" src="../public/img/author.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../index.php?act=taikhoan&xuli=account" target="_blank">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../?act=home">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Thư viện
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../?act=taikhoan&xuli=dangxuat">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Đăng xuất
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->