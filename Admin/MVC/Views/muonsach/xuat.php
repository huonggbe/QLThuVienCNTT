<head>
	<title>Xuất hóa đơn</title>

	<head>

		<style>
			.page {
				width: 80%;
				margin: 0 auto;
				font-family: 'Times New Roman', Times, serif, sans-serif;
				font-size: 16px;
				line-height: 1.5;
			}

			.header {
				padding: 20px 0;
				border-bottom: 1px solid #ccc;
			}

			.company h1 {
				font-size: 32px;
				font-weight: bold;
				margin-bottom: 10px;
			}

			.company p {
				font-size: 18px;
				margin-bottom: 5px;
			}

			.title h2 {
				font-size: 24px;
				font-weight: bold;
				margin-bottom: 10px;
			}

			.customer p {
				font-size: 18px;
				margin-bottom: 5px;
			}

			table {
				width: 100%;
				border-collapse: collapse;
				margin-top: 20px;
				font-size: 16px;
			}

			th,
			td {
				padding: 10px;
				border: 1px solid #ccc;
				text-align: left;
			}

			.footer-right {
				margin-top: 30px;
				font-size: 18px;
				font-style: italic;
				float: right;
				margin-right: 0;
			}

			.text-center {
				text-align: center;
			}
		</style>
	</head>



</head>

<body>
	<div id="page" class="page">
		<div class="header">
			<div class="company">
				<h1 class="text-center">PHIẾU MƯỢN TÀI LIỆU - TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</h1>

				<p class="text-center">Đường Z115, Quyết Thắng, Thành Phố Thái Nguyênm</p>
			</div>
		</div>

		<div class="title">
			<h2>Phiếu mượn tài liệu</h2>
		</div>

		<div class="customer">
			<p>Người nhận: <?= $data[0]['NguoiChoMuon'] ?></p>
			<p>Ngày mượn: <?= $data[0]['NgayMuon'] ?></p>
			<p>Ngày trả: <?= $data[0]['NgayTra'] ?></p>
			<p>Vi phạm: <?= $data[0]['ViPham'] ?></p>
			<p>Hình thức xử lý: <?= $data[0]['HinhThucXuLy'] ?></p>

		</div>
		<?php


		$id = $data[0]['MaHD'];



		?>
		<div class="title">
			<h2>Chi tiết tài liệu</h2>
		</div>

		<div class="container mt-5">
			<?php if (isset($data) and $data != null) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Tên tài liệu</th>

							<th scope="col">Số lượng</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $row) { ?>
							<tr>
								<td><?= $row['Ten'] ?></td>

								<td><?= $row['SoLuong'] ?></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php $time = time(); ?>
				<div class="footer-right text-right" style=" float: right; margin-right:0">
					<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
					<p style="text-align:right">THỦ THƯ</p>
				</div>


			<?php } ?>
		</div>
	</div>

	<?php

	$time = $id . "_" . time();

	header('Content-Type: application/doc');
	header("Content-Disposition: attachment; filename= phiếu mượn số HD_$time.doc");

	?>