<nav class="navbar navbar-default navbar-fixed-top">
	<header class="container" id="header-v3">

		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="?act=home"><img src="VD/img/logo.png" alt="holiwood"></a></div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
				<div class=" collapse navbar-collapse" id="myNavbar">

					<form class="hidden-lg hidden-md form-group form-search-mobile">
						<input type="text" name="search" placeholder="Search here..." class="form-control">
						<button type="submit"><img src="VD/img/Search.png" alt="search" class="img-responsive"></button>
					</form>
					<ul class="nav navbar-nav menu-main">


						<li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold">Thư viện</a>
							<figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
							<div class="dropdown-menu">
								<div class="container container-menu">
									<ul class="row">
										<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<ul style=" font-family:Arial, Helvetica, sans-serif">
												<?php $i = 1;
												foreach ($data_chitietDM as $row) { ?>

													<li class="col-lg-2 col-md-2 col-sm-12 col-xs-12 menu-home-lv2">
														<ul>
															<li style=" font-family:Arial, Helvetica, sans-serif"><a href="?act=shop&sp=<?= $i ?>"><?= $data_danhmuc[$i - 1]['TenDM'] ?></a> </li>
															<?php foreach ($row as $value) { ?>
																<li class="li-home" style=" font-family:Arial, Helvetica, sans-serif"><i class="fas hidden-sm hidden-md hidden-xs"></i><a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a></li>
															<?php } ?>
														</ul>
													</li>
												<?php $i++;
												} ?>

											</ul>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="wedding-menu"><a href="about.html" style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold">Quy trình</a>
							<figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						</li>
						<li class="blog-menu dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold">Nội quy</a>
							<figure id="blog-1" class=" hidden-sm hidden-md hidden-xs" style=" font-family:Arial, Helvetica, sans-serif, monospace; font-weight: bold"></figure>

						</li>
						<li class="contact-menu"><a href="contact.html" style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold">Liên hệ</a>
							<figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure>
						</li>
						<li class="hidden-lg hidden-md"><a href="#" style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold"><i class="far fa-user"></i> Tài khoản</a></li>
						<li>
							<figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
				<ul class="nav navbar-nav navbar-right icon-menu">


					<li id="input-search" class="hidden-sm hidden-xs">
						<a href="#"><img id="search-img" src="VD/img/Search.png" alt="search"></a>

					</li>




					<li class="dropdown menu-home" style="width: max-content;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i></a>
						<ul class="menu-home-lv2 dropdown-menu">

							<?php if (isset($_SESSION['login'])) { ?>
								<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a><b>Chào <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></b></a></li>
								<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
								<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
								<?php
								if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
									<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a href="Admin/?mod=login">Trang quản lý</a></li>
								<?php }
							} else { ?>
								<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a><b>Khách hàng</b></a></li>
								<li class="li-home"><i class="fas  hidden-sm hidden-md hidden-xs"></i><a href="?act=taikhoan">Đăng nhập</a></li>
							<?php } ?>


						</ul>
					</li>

					<li class="dropdown cart-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="VD/img/cart.png" id="img-cart" alt="cart"></a>
						<?php
						$soluong = 0;
						$thanhtien = 0;
						if (isset($_SESSION['sanpham'])) {
							foreach ($_SESSION['sanpham'] as $value) {
								$soluong += 1;
								$thanhtien += $value['ThanhTien'];
							}
						}
						?>
						<?php if (isset($_SESSION['sanpham'])) {
							foreach ($_SESSION['sanpham'] as $value) { ?>
								<div class="dropdown-menu">


									<div class="cart-1">
										<div class="img-cart"> <img src="public/<?= $value['HinhAnh1'] ?>" alt="" class="img-responsive" alt="holiwood" /> </div>
										<div class="info-cart">
											<h1><?= $value['TenSP'] ?></h1>
											<span class="number">x<?= $value['SoLuong'] ?></span>
											<span class="prince-cart"><?= number_format($value['ThanhTien']) ?> VNĐ</span>
										</div>
									</div>



									<div class="total">
										<span>Tổng </span>
										<span><strong>= <?= number_format($thanhtien) ?> VNĐ</span>
									</div>
									<div id="div-cart-menu">
										<a style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold" href="index.php?act=cart">Đến giỏ hàng</a>
										<a style=" font-family:Arial, Helvetica, sans-serif; font-weight: bold" href="index.php?act=checkout" class="check">Thanh toán</a>
									</div>

								</div>
						<?php }
						} ?>
					</li>
				</ul>
			</div>
			<div class="navbar-header mobile-menu">
				<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</div>

	</header>
</nav>