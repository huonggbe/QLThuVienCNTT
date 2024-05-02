<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin liên hệ</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- contact content section start -->
<div class="pages contact-page section-padding">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<div class="googleMap-info">
					<div id="googleMap"></div>
					<div class="map-info">
						<p><strong>THƯ VIỆN</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-text-center">
				<div class="contact-details">
					<div class="row">
						<div class="col-sm-4">
							<a class="single-contact" style="text-transform: none;text-decoration: underline;" href="https://www.google.com/maps/place/Thi+C%C3%B4ng+N%E1%BB%99i+Th%E1%BA%A5t/@21.0234398,105.8038334,14z/data=!4m10!1m2!2m1!1zYsOhbiBu4buZaSB0aOG6pXQgaMOgIG7hu5lp!3m6!1s0x3135ad364961d101:0x8e816a847fe40709!8m2!3d21.0354151!4d105.8091274!15sChtiw6FuIG7hu5lpIHRo4bqldCBow6AgbuG7mWmSARFpbnRlcmlvcl9kZXNpZ25lcuABAA!16s%2Fg%2F11gxxh0nzb?hl=vi-VN&entry=ttu" target="_blank">
								<i class="mdi mdi-map-marker"></i>
								<p>Đường Z115, Quyết Thắng, Thành Phố Thái Nguyênm</p>
								<p>TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</p>
							</a>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-phone"></i>
								<p>(+84) 123456789</p>
								<p>(+84) 987654321</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-email"></i>

								<p>epu@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact content section end -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8"></script>
<script>
	function initialize() {

		var mapOptions = {
			zoom: 17,
			hue: '#E9E5DC',
			gestureHandling: 'none',
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.TERRAIN,
			center: new google.maps.LatLng(20.864138007802193, 106.69612872696685)
		};

		var map = new google.maps.Map(document.getElementById('googleMap'),
			mapOptions);


		var marker = new google.maps.Marker({
			position: map.getCenter(),
			icon: 'public/img/map-marker.png',
			map: map,
		});

	}

	google.maps.event.addDomListener(window, 'load', initialize);
	google.maps.event.addListener(marker, 'click', function() {
		window.location.href = marker.url;
	});
</script>