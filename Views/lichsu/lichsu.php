<style>
    .pages.login-page {
        padding: 60px 0;
    }

    .pages.login-page .main-input {
        padding: 60px;
    }

    .pages.login-page .log-title h3 {
        font-size: 24px;
        font-weight: bold;
    }

    .pages.login-page .login-text {
        margin-top: 30px;
    }

    .pages.login-page .custom-input {
        position: relative;
    }

    .pages.login-page .custom-input .alert {
        margin-bottom: 15px;
    }

    .pages.login-page table {
        width: 100%;
    }

    .pages.login-page table th,
    .pages.login-page table td {
        padding: 5px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #ddd;
    }

    .pages.login-page table th {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    /* .pages.login-page table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    } */

    .pages.login-page .table-responsive {
        overflow-x: auto;
    }
</style>


<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Lịch sử giao dịch trên cửa hàng</h2>
                    <ul class="text-left">

                        <?php


                        if (($_GET['act']) == 'history') {
                            $style1 = 'btn-secondary';
                            $style = 'btn-danger';
                        } else {
                            $style = 'btn-secondary';
                            $style1 = 'btn-danger';
                        }



                        ?>
                        <a class="btn <?= $style ?>" href="?act=history">Lịch sử đơn mua hàng</a>
                        </li>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->





<section class="pages login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="main-input1 padding60" id="dangnhap">
                    <div class="log-title">
                        <h3><strong>Thông tin lịch sử đơn mua hàng</strong></h3>
                    </div>
                    <div class="login-text">
                        <div class="custom-input">
                            <?php if (isset($_COOKIE['msg1'])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Thông báo: </strong> <?= $_COOKIE['msg1'] ?>
                                </div>
                            <?php } else if (isset($_COOKIE['msg'])) { ?>
                                <div class="alert alert-success">
                                    <strong>Thông báo: </strong> <?= $_COOKIE['msg'] ?>
                                </div>
                            <?php } ?>

                            <?php if ($data == null) {
                                echo '<h3 class="text-center"><strong>Bạn chưa có đơn mua hàng nào cả!</strong></h3>';
                            } else {
                            ?>
                                <div class="table-responsive">
                                    <table class="table" style=" border: #ddd solid 1px">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mã hóa đơn</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Giá thành (VNĐ)</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Ngày đặt hàng</th>
                                                <th scope="col">Ngày giao hàng</th>
                                                <th scope="col">Địa chỉ giao hàng</th>
                                                <th scope="col">Tổng tiền (VNĐ)</th>
                                                <th scope="col">Thanh toán</th>
                                                <th scope="col">Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Thêm các dòng dữ liệu vào đây -->


                                            <?php
                                            $temp = array(); // mảng tạm để lưu thông tin sản phẩm trước đó
                                            $MaHD_temp = ''; // biến tạm để lưu mã HD của sản phẩm trước đó
                                            $SoSanPham_temp = 0; // biến tạm để lưu số sản phẩm của mã HD trước đó
                                            foreach ($data as $row) {
                                                $MaHD = $row['MaHD'];
                                                if ($MaHD == $MaHD_temp) {
                                                    // nếu mã HD hiện tại giống với mã HD trước đó, tăng giá trị biến đếm số sản phẩm và lưu trữ thông tin của sản phẩm hiện tại vào mảng tạm
                                                    $SoSanPham_temp++;
                                                    $temp['SanPham'][] = $row;
                                                } else {
                                                    // nếu mã HD hiện tại khác với mã HD trước đó, in ra thông tin của mã HD trước đó và in ra thông tin của các sản phẩm con hiện tại
                                                    if (!empty($temp)) {
                                            ?>
                                                        <tr>
                                                            <?php if ($SoSanPham_temp > 1) { ?>
                                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['MaHD'] ?></td>
                                                                <td><?= $temp['SanPham'][0]['TenSP'] ?></td>
                                                                <td><img src="public/<?= $temp['SanPham'][0]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                                <td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
                                                                <td><?= $temp['SanPham'][0]['SoLuong'] ?></td>


                                                                <!-- Ngày đặt -->
                                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?>
                                                                </td>
                                                                <!-- Ngày giao -->
                                                                <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                                    <td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt


                                                                    </td>
                                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                                    <td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
                                                                <?php } else { ?>
                                                                    <td rowspan="<?= $SoSanPham_temp ?>">
                                                                        <?= $temp['SanPham'][0]['NgayGiao'] ?></td>
                                                                <?php } ?>
                                                                <!-- Địa chỉ -->
                                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?>
                                                                </td>
                                                                <!-- Tông tiền -->
                                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= number_format($temp['SanPham'][0]['TongTien']) ?>
                                                                </td>
                                                                <!-- Thanh toán -->
                                                                <td rowspan="<?= $SoSanPham_temp ?>">
                                                                    <?php if ($temp['SanPham'][0]['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                                                                        echo 'Đã thanh toán MoMo';
                                                                    } else if ($temp['SanPham'][0]['TrangThai'] == 2 and $temp['SanPham'][0]['PhuongThucTT'] != 'Chuyển khoản MoMo') {
                                                                        echo 'Đã thanh toán tiền mặt';
                                                                    } else {
                                                                        echo 'Chưa thanh toán';
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <!-- Trạng thái -->
                                                                <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                                    <td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">

                                                                        Đợi duyệt
                                                                        <button style="font-size: 12px;padding: 6px 8px;margin-top: 6px;" class="btn btn-danger" class="btn btn-secondary" onclick="cancelDon(<?= $temp['MaHD'] ?>)"> Huỷ đơn</button>
                                                                    </td>
                                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                                    <td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
                                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
                                                                    <td rowspan="<?= $SoSanPham_temp ?>" style="color:red">Giao thất bại</td>
                                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 2) { ?>
                                                                    <td rowspan="<?= $SoSanPham_temp ?>" style="color:#19ad32">Đã giao</td>
                                                                <?php } else { ?>
                                                                    <td style="color: red;" rowspan="<?= $SoSanPham_temp ?>">Đơn hàng bị huỷ do: <?= $temp['SanPham'][0]['lyDoHuy'] ?></td>
                                                                <?php } ?>

                                                            <?php } else { ?>
                                                                <td><?= $temp['MaHD'] ?></td>
                                                                <td><?= $temp['SanPham'][0]['TenSP'] ?></td>
                                                                <td><img src="public/<?= $temp['SanPham'][0]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                                <td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
                                                                <td><?= $temp['SanPham'][0]['SoLuong'] ?></td>


                                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?>

                                                                    <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                                <td style="color: #2287ef;">Đợi duyệt

                                                                </td>
                                                            <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                                <td style="color: #ff9900;">Đang giao</td>
                                                            <?php } else { ?>
                                                                <td><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
                                                            <?php } ?>

                                                            <!-- Địa chỉ -->
                                                            <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?>
                                                            </td>
                                                            <!-- Tông tiền -->
                                                            <td><?= number_format($temp['SanPham'][0]['TongTien']) ?>
                                                            </td>
                                                            <!-- Thanh toán -->
                                                            <td rowspan="<?= $SoSanPham_temp ?>">
                                                                <?php if ($temp['SanPham'][0]['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                                                                    echo 'Đã thanh toán MoMo';
                                                                } else if ($temp['SanPham'][0]['TrangThai'] == 2 and $temp['SanPham'][0]['PhuongThucTT'] != 'Chuyển khoản MoMo') {
                                                                    echo 'Đã thanh toán tiền mặt';
                                                                } else {
                                                                    echo 'Chưa thanh toán';
                                                                }
                                                                ?>
                                                            </td>
                                                            <!-- Trạng thái -->

                                                            <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                                <td style="color: #2287ef;">Đợi duyệt

                                                                    <button style="font-size: 12px;padding: 6px 8px;margin-top: 6px;" class="btn btn-danger" class="btn btn-secondary" onclick="cancelDon(<?= $temp['MaHD'] ?>)"> Huỷ đơn</button>

                                                                </td>
                                                            <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                                <td style="color: #ff9900;">Đang giao</td>
                                                            <?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
                                                                <td style="color:red">Giao thất bại</td>
                                                            <?php } else if ($temp['SanPham'][0]['TrangThai'] == 2) { ?>
                                                                <td style="color:#19ad32">Đã giao</td>
                                                            <?php } else { ?>
                                                                <td style="color: red;" rowspan="<?= $SoSanPham_temp ?>">Đơn hàng bị huỷ do: <?= $temp['SanPham'][0]['lyDoHuy'] ?></td>
                                                            <?php } ?>

                                                        <?php } ?>
                                                        </tr>
                                                        <?php
                                                        for ($i = 1; $i < $SoSanPham_temp; $i++) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $temp['SanPham'][$i]['TenSP'] ?></td>
                                                                <td scope="col"><img src="public/<?= $temp['SanPham'][$i]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                                <td><?= number_format($temp['SanPham'][$i]['DonGia']) ?></td>
                                                                <td><?= $temp['SanPham'][$i]['SoLuong'] ?></td>
                                                            </tr>
                                            <?php
                                                        }
                                                    }
                                                    $temp['MaHD'] = $MaHD;

                                                    $temp['SanPham'] = array();
                                                    $temp['SanPham'][] = $row;
                                                    $SoSanPham_temp = 1;
                                                }
                                                $MaHD_temp = $MaHD;
                                            }
                                            // in ra thông tin của mã HD cuối cùng
                                            ?>
                                            <tr>
                                                <?php if ($SoSanPham_temp > 1) { ?>
                                                    <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['MaHD'] ?></td>
                                                    <td><?= $temp['SanPham'][0]['TenSP'] ?></td>
                                                    <td><img src="public/<?= $temp['SanPham'][0]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                    <td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
                                                    <td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
                                                    <!-- Ngày đặt -->
                                                    <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['NgayLap'] ?>
                                                    </td>
                                                    <!-- Ngày giao -->
                                                    <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                        <td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt

                                                        </td>
                                                    <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                        <td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
                                                    <?php } else { ?>
                                                        <td rowspan="<?= $SoSanPham_temp ?>">
                                                            <?= $temp['SanPham'][0]['NgayGiao'] ?></td>
                                                    <?php } ?>



                                                    <!-- Địa chỉ -->
                                                    <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?>
                                                    </td>
                                                    <!-- Tổng tiên -->
                                                    <td rowspan="<?= $SoSanPham_temp ?>"><?= number_format($temp['SanPham'][0]['TongTien']) ?>
                                                    </td>
                                                    <!-- Thanh toán -->
                                                    <td rowspan="<?= $SoSanPham_temp ?>">
                                                        <?php if ($temp['SanPham'][0]['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                                                            echo 'Đã thanh toán MoMo';
                                                        } else if ($temp['SanPham'][0]['TrangThai'] == 2 and $temp['SanPham'][0]['PhuongThucTT'] != 'Chuyển khoản MoMo') {
                                                            echo 'Đã thanh toán tiền mặt';
                                                        } else {
                                                            echo 'Chưa thanh toán';
                                                        }
                                                        ?>
                                                    </td>

                                                    <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                        <td style="color: #2287ef;" rowspan="<?= $SoSanPham_temp ?>">Đợi duyệt
                                                            <button style="font-size: 12px;padding: 6px 8px;margin-top: 6px;" class="btn btn-danger" class="btn btn-secondary" onclick="cancelDon(<?= $temp['MaHD'] ?>)"> Huỷ đơn</button>


                                                        </td>
                                                    <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                        <td style="color: #ff9900;" rowspan="<?= $SoSanPham_temp ?>">Đang giao</td>
                                                    <?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
                                                        <td rowspan="<?= $SoSanPham_temp ?>" style="color:red">Giao thất bại</td>
                                                    <?php } else if ($temp['SanPham'][0]['TrangThai'] == 2) { ?>
                                                        <td rowspan="<?= $SoSanPham_temp ?>" style="color:#19ad32">Đã giao</td>
                                                    <?php } else { ?>
                                                        <td style="color: red;" rowspan="<?= $SoSanPham_temp ?>">Đơn hàng bị huỷ do: <?= $temp['SanPham'][0]['lyDoHuy'] ?></td>
                                                    <?php } ?>

                                                <?php } else { ?>
                                                    <td><?= $temp['MaHD'] ?></td>
                                                    <td><?= $temp['SanPham'][0]['TenSP'] ?></td>
                                                    <td scope="col"><img src="public/<?= $temp['SanPham'][0]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                    <td><?= number_format($temp['SanPham'][0]['DonGia']) ?></td>
                                                    <td><?= $temp['SanPham'][0]['SoLuong'] ?></td>
                                                    <td><?= $temp['SanPham'][0]['NgayLap'] ?>
                                                        <!-- Ngày giao -->
                                                        <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                    <td style="color: #2287ef;">Đợi duyệt</td>
                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                    <td style="color: #ff9900;">Đang giao</td>
                                                <?php } else { ?>
                                                    <td><?= $temp['SanPham'][0]['NgayGiao'] ?></td>
                                                <?php } ?>
                                                <!-- Địa chỉ -->
                                                <td rowspan="<?= $SoSanPham_temp ?>"><?= $temp['SanPham'][0]['DiaChi'] ?>
                                                </td>

                                                <!-- Tổng tiền -->
                                                <td><?= number_format($temp['SanPham'][0]['TongTien']) ?>
                                                </td>
                                                <!-- Thanh toán -->
                                                <td rowspan="<?= $SoSanPham_temp ?>">
                                                    <?php if ($temp['SanPham'][0]['PhuongThucTT'] == 'Chuyển khoản MoMo') {
                                                        echo 'Đã thanh toán MoMo';
                                                    } else if ($temp['SanPham'][0]['TrangThai'] == 2 and $temp['SanPham'][0]['PhuongThucTT'] != 'Chuyển khoản MoMo') {
                                                        echo 'Đã thanh toán tiền mặt';
                                                    } else {
                                                        echo 'Chưa thanh toán';
                                                    }
                                                    ?>
                                                </td>

                                                <?php if ($temp['SanPham'][0]['TrangThai'] == 0) { ?>

                                                    <td style="color: #2287ef;">Đợi duyệt
                                                        <button style="font-size: 12px;padding: 6px 8px;margin-top: 6px;" class="btn btn-danger" class="btn btn-secondary" onclick="cancelDon(<?= $temp['MaHD'] ?>)"> Huỷ đơn</button>

                                                    </td>
                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 1) { ?>
                                                    <td style="color: #ff9900;">Đang giao</td>
                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 3) { ?>
                                                    <td style="color:red">Giao thất bại</td>
                                                <?php } else if ($temp['SanPham'][0]['TrangThai'] == 2) { ?>
                                                    <td style="color: #19ad32;">Đã giao</td>
                                                <?php } else { ?>
                                                    <td style="color: red;" rowspan="<?= $SoSanPham_temp ?>">Đơn hàng bị huỷ do: <?= $temp['SanPham'][0]['lyDoHuy'] ?></td>
                                                <?php } ?>


                                            <?php } ?>
                                            </tr>
                                            <?php
                                            for ($i = 1; $i < $SoSanPham_temp; $i++) {
                                            ?>
                                                <tr>
                                                    <td><?= $temp['SanPham'][$i]['TenSP'] ?></td>
                                                    <td><img src="public/<?= $temp['SanPham'][$i]['HinhAnh1'] ?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></td>
                                                    <td><?= number_format($temp['SanPham'][$i]['DonGia']) ?></td>
                                                    <td><?= $temp['SanPham'][$i]['SoLuong'] ?></td>
                                                </tr>
                                            <?php
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- pages-title-end -->
<!-- login content section start -->













<!-- login content section end -->
<style type="text/css">
    #dataTable {
        table-layout: fixed;
    }

    #dataTable th,
    #dataTable td {
        text-align: center;
        vertical-align: middle;

    }
</style>

<script>
    const cancelDon = (maHD = "") => {
        let reason = "";
        while (reason === "") {
            reason = prompt("Lý do huỷ đơn");
        }
        if (maHD) {
            window.location.href = `?act=history&xuli=cancel&id=${maHD}&lydohuy=${reason}`;

        }
    }
</script>