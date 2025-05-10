<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Book & Tae</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

	<style>
		.btn-white-envelope {
			background-color: #ffffff;
			border: 1px solid #ccc;
			border-radius: 8px;
			color: #333;
			padding: 10px 20px;
			font-weight: bold;
			transition: all 0.2s ease-in-out;
		}

		.btn-white-envelope:hover {
			background-color: #f7f7f7;
			border-color: #999;
			color: #000;
		}
	</style>

</head>

<body>
	<div class="fh5co-loader"></div>
	<div id="page">
		<div id="fh5co-couple-story" style="padding-top: 100px; padding-bottom: 0px;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" style="margin-bottom: 30px;">
						<span>Book &amp; Tae Wedding Day</span>
						<h2>ร่วมแสดงความยินดี</h2>
						<h4>
							ถึงเจ้าบ่าว-เจ้าสาว<br>
							ในโอกาสพิเศษของพวกเราสองคน<br>
						</h4>
					</div>
				</div>
			</div>
		</div>

		<?php
			$guestname = $_POST['guestname'] ?? "";
			$group = $_POST['group'] ?? "";
			$relation = $_POST['relation'] ?? "";
		?>

		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/gallery-5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline" action="exec/reg_notcome.php" method="POST" enctype="multipart/form-data">

							<!-- group dropdown -->
							<div class="col-md-6 col-sm-4" style="padding-left: 5px; padding-right: 5px;">
								<div class="form-group">
									<label for="guestname" style="color: #ffffff;">แขกเจ้าบ่าว/เจ้าสาว</label>
									<select name="group" id="group" class="form-control">
										<option value="Book" <?= $group == "Book" ? "selected" : "" ?>>แขกเจ้าสาว</option>
										<option value="Tae" <?= $group == "Tae" ? "selected" : "" ?>>แขกเจ้าบ่าว</option>
										<option value="Both" <?= $group == "Both" ? "selected" : "" ?>>แขกทั้ง 2 ฝ่าย</option>
									</select>
								</div>
							</div>

							<!-- relation dropdown -->
							<div class="col-md-6 col-sm-4" style="padding-left: 5px; padding-right: 5px;">
								<div class="form-group">
									<label for="guestname" style="color: #ffffff;">ความสัมพันธ์</label>
									<select name="relation" id="relation" class="form-control">
										<option value="family" <?= $relation == "family" ? "selected" : "" ?>>ครอบครัว</option>
										<option value="guest_family" <?= $relation == "guest_family" ? "selected" : "" ?>>แขกของครอบครัว</option>
										<option value="relative" <?= $relation == "relative" ? "selected" : "" ?>>ญาติพี่น้อง</option>
										<option value="workmate" <?= $relation == "workmate" ? "selected" : "" ?>>ที่ทำงาน</option>
										<option value="friend" <?= $relation == "friend" ? "selected" : "" ?>>เพื่อน/รุ่นพี่/รุ่นน้อง</option>
									</select>
								</div>
							</div>

							<!-- input guestname -->
							<div class="col-md-12 col-sm-12" style="padding-left: 5px; padding-right: 5px;">
								<div class="form-group">
									<label for="guestname" style="color: #ffffff;">ชื่อผู้อวยพร</label>
									<input type="text" class="form-control" name="guestname" placeholder="ชื่อผู้อวยพร" value="<?= htmlspecialchars($guestname) ?>">
								</div>
							</div>
							<div class="col-md-12 col-sm-12" style="padding-left: 5px; padding-right: 5px;">
								<div class="form-group">
									<label for="follower" style="color: #ffffff;">คำอวยพรถึงบ่าวสาว</label>
									<textarea class="form-control" name="message" rows="10" placeholder="พิมพ์ข้อความอวยพรที่นี่..."></textarea>
								</div>
							</div>
							<div class="col-md-12 col-sm-12" style="background-color: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
								<!-- ปุ่มใส่ซอง -->
								<div class="text-center">
									<button type="button" class="btn-white-envelope" data-toggle="collapse" data-target="#giftPanel" aria-expanded="false" aria-controls="giftPanel">
										<i class="fa fa-envelope" style="margin-right: 6px;"></i> ใส่ซอง Promptpay
									</button>
								</div>

								<!-- Panel อัปโหลดไฟล์ -->
								<div class="collapse" id="giftPanel">
									<div class="form-group">
										<br>
										<div style="text-align: center;">
											<img src="images/qrprompypay_taebook.jpg" alt="QR Prompay" style="width: 90%; max-width: 500px; height: auto; border-radius: 15px; display: block; margin: 0 auto;">
											<br>
											<label for="giftImage">อัปโหลดสลิปโอนใส่ซองได้ที่นี่:</label>
											<input type="file" class="form-control" name="giftImage" id="giftImage" accept="image/*">
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="col-md-12 col-sm-12">
								<button type="submit" class="btn btn-default btn-block"><b>ส่งคำอวยพร</b></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>