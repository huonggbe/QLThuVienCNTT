<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thư viện</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>Tài liệu</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- products-view content section start -->
<section class="pages products-page section-padding-bottom">
	<div class="container">
		<div class="row">
			<!-- Category-left -->
			<div class="col-xs-12 col-sm-4 col-md-3">
				<?php require_once("category.php") ?>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="right-products">
					<div class="row">
						<div class="col-xs-12">
							<div class="section-title clearfix">
								<ul>
									<?php if (isset($_GET['keyword'])) { ?>
										<li class=" sort-by" style="color: red; font-size: 15px;">
											Tìm kiếm các tài liệu: '<?= $_GET['keyword'] ?>'
										</li>
									<?php }	?>

									<?php if (isset($_GET['loai'])) { ?>
										<li class=" sort-by" style="color: red; font-size: 15px;">
											Loại tài liệu: <?= $_GET['loai'] ?>
										</li>
									<?php }	?>
									<?php if (isset($_GET['tk'])) {
										$chuoi = $_GET['tk'];
										$arr = explode("-", $chuoi);


									?>
										<li class=" sort-by" style="color: red; font-size: 15px;">
											<?php if ($arr[0] == 10) { ?>
												Sản phẩm giá lớn hơn: <?= $arr[0] ?> triệu

											<?php } else
											if ($_GET['tk'] == 'all') {
											?>
												Tất cả sản phẩm từ 0 đến <?php

																			$max_don_gia = $max[0]['max(DonGia)'];

																			// Cắt 6 ký tự từ bên phải của giá trị 'max(DonGia)'
																			$max_don_gia_cut = substr($max_don_gia, 0, -6);

																			// In ra giá trị sau khi cắt
																			echo $max_don_gia_cut;
																			?> triệu

											<?php	} else {
											?>
												Sản phẩm có giá từ: <?= $arr[0] ?> đến <?= $arr[1] ?> triệu
										</li>
								<?php }
										}	?>
								<?php if (isset($_GET['ten'])) {
								?>
									<li class=" sort-by" style="color: red; font-size: 15px;">
										Danh mục sản phẩm: <?= $_GET['ten'] ?>
									</li>
								<?php }	?>




								<li class="sort-by floatright">
									Số tài liệu: <?php if (isset($data_tong)) {
														echo $data_tong;
													} ?>
								</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<?php require_once("list-products.php") ?>
					</div>
					<?php if (isset($data_tong) and $data_tong > 9 and isset($test)) {
					?>
						<div class="row">
							<div class="col-sm-12">
								<div class="pagnation-ul">
									<ul class="clearfix">
										<?php if ($data_tong > 9 and isset($test)) {
											for ($i = 1; $i <= ceil($data_tong / 9); $i++) {
												if (isset($_GET['loai'])) { ?>
													<li><a href="?act=shop&trang=<?= $i ?>&sp=<?= $_GET['sp'] ?>&loai=<?= $_GET['loai'] ?>"><?= $i ?></a></li>
												<?php } else if (isset($_GET['tk'])) { ?>
													<li><a href="?act=shop&trang=<?= $i ?>&tk=<?= $_GET['tk'] ?>"><?= $i ?></a></li>
												<?php } else if (isset($_GET['sp'])) { ?>
													<li><a href="?act=shop&trang=<?= $i ?>&sp=<?= $_GET['sp'] ?>"><?= $i ?></a></li>
												<?php } else if (isset($_GET['keyword'])) { ?>
													<li><a href="?act=shop&trang=<?= $i ?>&keyword=<?= $_GET['keyword'] ?>"><?= $i ?></a></li>
												<?php } else {

												?>

													<li><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
										<?php	}
											}
										}

										?>




									</ul>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- products-view content section end -->
<!-- quick view start -->