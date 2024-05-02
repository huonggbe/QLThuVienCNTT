<!-- pages-title-start -->
<?php if ($data != null) { ?>
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2><?= $data['TenTL'] ?></h2>
                        <ul class="text-left">
                            <li><a href="?act=home">Trang chủ</a></li>
                            <li><span> / </span><a href="?act=shop">Tài liệu</a></li>
                            <li><span> / </span><?= $data['TenTL'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                        <?php if ($data['HinhAnh2'] !=  null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh2'] ?>" href="#"><img src="public/<?= $data['HinhAnh2'] ?>" onerror="this.src='public/img/maga1.png'" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['HinhAnh1'] != null) { ?>
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh1'] ?>" href="#"><img src="public/<?= $data['HinhAnh1'] ?>" onerror="this.src='public/img/maga1.png'" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['HinhAnh3'] != null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh3'] ?>" href="#"><img src="public/<?= $data['HinhAnh3'] ?>" onerror="this.src='public/img/maga1.png'" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-thumb">
                                <ul class="product-slider">
                                    <?php if ($data['HinhAnh2'] != null) { ?>
                                        <li class="active"><a data-toggle="tab" href="#sin-1"> <img src="public/<?= $data['HinhAnh2'] ?>" alt="quick view" onerror="this.src='public/img/maga1.png'" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['HinhAnh1'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-2"> <img src="public/<?= $data['HinhAnh1'] ?>" onerror="this.src='public/img/maga1.png'" alt="small image" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['HinhAnh3'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-3"> <img src="public/<?= $data['HinhAnh3'] ?>" onerror="this.src='public/img/maga1.png'" alt="small image" /> </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3 style="font-weight: bold;"><?= $data['TenTL'] ?></h3>

                                <!-- <div class="ratting " style = "display:inline-block; margin-top:10px">
                                   
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-half"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                </div> -->
                                <?php
                                if (trim($data['TacGia'])) {
                                ?>
                                    <h5 style="
                                    color: blueviolet;
                                    width: fit-content !important;
                                    font-weight: 500;
                                    text-transform: capitalize;
                                    font-size: 24px;
                                    margin:12px 0 0">Tác giả: <?= $data['TacGia'] ?></h5>
                                <?php
                                }
                                ?>



                                <p style="margin-bottom: 10px; font-weight:bold">Mô tả:</p>
                                <?= $data['MoTa'] ?>

                                <div class="list-btn" style="    display: -webkit-inline-box;">
                                    <a href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>">Thêm vào giỏ tài liệu</a>

                                    <a href="#info">Chi tiết</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix" id="info">

                            <li class="active"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>

                            <li><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content">

                            <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                                <div class="tb">
                                    <h5>Mô tả chi tiết tài liệu</h5>
                                    <ul>
                                        <li>
                                            <span>Nhà xuất bản</span>
                                            <div><?= $data['NhaXuatBan'] ?></div>
                                        </li>
                                        <li>
                                            <span>Số trang</span>
                                            <div><?= $data['SoTrang'] ?></div>
                                        </li>
                                        <li>
                                            <span>Ngôn ngữ</span>
                                            <div><?= $data['NgonNgu'] ?></div>
                                        </li>






                                    </ul>
                                </div>
                            </div>

                            <div class="info-reviews moreinfo tab-pane fade in active';
                                        " id="reviews">
                                <div class="about-author">
                                    <!-- comments -->
                                    <div class="post-comments">
                                        <!-- comment -->

                                        <div class="fb-comments" data-href="http://hocmai.com?act=detail&id=<?= $data['MaSP'] ?>" data-width="" data-numposts="5"></div><!-- /comment -->
                                    </div>
                                    <!-- /comments -->
                                </div>
                                <hr />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
    <section class="single-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Tài liệu tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($data_lq as $row) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-product">
                            <div class="product-f">
                                <a href="?act=detail&id=<?= $row['MaSP'] ?>"><img src="public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-products" onerror="this.src='public/img/maga1.png'" /></a>
                                <div class="actions-btn">
                                    <a title="Thêm vào giỏ hàng" href="?act=cart&xuli=add&id=<?= $row['MaSP'] ?>"><i class="mdi mdi-cart"></i></a>
                                    <a title="Xem chi tiết" href="?act=detail&id=<?= $row['MaSP'] ?>" data-toggle="modal"><i class="mdi mdi-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-dsc">
                                <p><a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenTL'] ?></a></p>
                                <span>Giá: <?= number_format($row['DonGia']) ?> VNĐ</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- single product end -->
            </div>
        </div>
    </section>
<?php } else {
    require_once("Views/error-404.php");
} ?>
<!-- related-products section end -->
<!-- quick view start -->

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '2652621865018691',
            xfbml: true,
            version: 'v7.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- quick view end -->