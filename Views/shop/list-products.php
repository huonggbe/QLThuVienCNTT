<div class="tab-content grid-content">
	<div class="tab-pane fade in active text-center" id="grid">
		<?php
		if (isset($data) and $data != NULL) {
			foreach ($data as  $value) {
		?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="single-product">
						<div class="product-f">
							<a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public/<?= $value['HinhAnh1'] ?>" onerror="this.src='public/img/maga1.png'" alt="Product Title" class="img-products" /></a>
							<div class="actions-btn">
								<a title="Thêm vào giỏ tài liệu" href="?act=cart&xuli=add&id=<?= $value['MaSP'] ?>"><i class="mdi mdi-book"></i></a>
								<a title="Xem chi tiết" href="?act=detail&id=<?= $value['MaSP'] ?>" data-toggle="modal"><i class="mdi mdi-eye"></i></a>
							</div>
						</div>
						<div class="product-dsc">
							<p>
								<a style="font-weight: bold;
						-webkit-line-clamp: 1;
						display: -webkit-inline-box;
						-webkit-box-orient: vertical;
						text-overflow: ellipsis;
						overflow: hidden;
						padding: 0 6px;" href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenTL'] ?>
								</a>
							</p>
							<!-- <div class="ratting">
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star-half"></i>
						<i class="mdi mdi-star-outline"></i>
					</div> -->

						</div>
					</div>
				</div>
		<?php }
		} else {
			echo '<p> KHÔNG CÓ DỮ LIỆU </p>';
		} ?>
		<!-- single product end -->
	</div>
</div>