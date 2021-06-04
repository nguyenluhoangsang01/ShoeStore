<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Shop giày Thu Thủy</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="180x180"
		href="../../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32"
		href="../../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16"
		href="../../assets/favicon/favicon-16x16.png" />
	<link rel="manifest" href="../../assets/favicon/site.webmanifest" />
	<link rel="stylesheet"
		href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
		crossorigin="anonymous" />
	<link rel="stylesheet"
		href="../../node_modules/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="../../assets/css/reset.css" />
	<link rel="stylesheet" href="../../assets/css/grid.css" />
	<link rel="stylesheet" href="../../assets/css/base.css" />
	<link rel="stylesheet" href="../../assets/css/carousel.css" />
	<link rel="stylesheet" href="../../assets/css/product/product.css" />
	<link rel="stylesheet" href="../../assets/css/main/main.css" />
	<link rel="stylesheet"
		href="../../assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="../css/edit-icon.css">
	<link rel="stylesheet" href="../css/validate.css">
	<link rel="stylesheet" href="../css/order-pay/order-pay.css">
	<style>
	.sale {
		left: 0rem !important;
	}
	</style>
</head>

<body>
	<!--[if lt IE 7]>
			<p class="browsehappy">
				You are using an <strong>outdated</strong> browser. Please
				<a href="#">upgrade your browser</a> to improve your experience.
			</p>
		<![endif]-->

	<?php
include "component/category-product1-header.php"
?>

	<!-- <div id="modal">
		<img src="../img/Nike.jpg" alt="1">
		<i class="fas fa-times"></i>
	</div> -->

	<div class="main-container">
		<section class="title-page row">
			<p>
				<a href="../../index.php">Trang chủ</a> /
				<a href="men's-shoes.php"><?php
include "category-product/category-product1.php"
?></a> /
				<a href="product2.php">
					<?php
include "product-title/product-title2.php"
?>
				</a>/
				<a href="order-pay2.php">Thanh toán</a>
			</p>

			<!-- <a href="../../admin/edit-product2.php">
				<i class="fas fa-edit"></i>
			</a> -->
		</section>

		<section class="order-page">
			<div class="grid wide">
				<div class="row">
					<di class="col l-12">
						<div class="cart-wrapper information-customer-form">
							<div class="information-customer-form__heading">Giỏ hàng của bạn
							</div>

							<table
								style="margin-bottom: 10rem; border-color: var(--primary-color);"
								border='1' cellspacing="0" cellpadding="0">
								<tr
									style="background-color: var(--primary-color); color: var(--white-color); height: 62px; ">
									<th style="width: 228px; ">Hình</th>
									<th style="width: 342px; ">Tên sản phẩm</th>
									<th style="width: 114px; ">Giá tiền</th>
									<th style="width: 114px; ">Số lượng</th>
									<th style="width: 114px; ">Mã sản phẩm</th>
									<th style="width: 114px; ">Tổng tiền</th>
									<th style="width: 114px; ">Xóa</th>
								</tr>

								<tr>
									<td style="width: 228px; ">
										<img src="../img/<?php
include "../php/image-product/image-product2.php"
?>"
											alt="">
									</td>

									<td style="width: 342px; line-height: 1.4; " class="tac csrt">
										<?php
include "../php/product-title/product-title2.php"
?>
									</td>

									<td style="width: 114px; line-height: 1.4;  "
										class="tac csrt">
										<?php
include "../php/product-sale/product-sale2.php"
?>
									</td>

									<td style="width: 114px; " class="tac csrt">1</td>

									<td style="width: 114px; " class="tac csrt">
										<?php
include "../php/code-product/code-product2.php"
?>
									</td>

									<td style="width: 114px;  line-height: 1.4; "
										class="tac csrt"><?php
include "../php/product-sale/product-sale2.php"
?> </td>

									<td style="width: 114px; ">
										<i class="fas fa-times del"></i>
									</td>
								</tr>
							</table>
						</div>
						</d>
				</div>

				<div class="row">
					<div class="col l-3">
						<img src="../img/79d2aa9753b607b75d048187887e12f5.png" alt="1"
							class="img-banner">
						<img src="../img/Nike-Poster-Template-Free.png" alt="1"
							class="img-banner">
						<img src="../img/da46d981d53073410332addd860f7813.jpg" alt="1"
							class="img-banner">
					</div>
					<div class="col l-6">
						<?php
include "component/order-form.php"
?>
						</form>
					</div>
					<div class="col l-3">
						<img src="../img/poster-giay-nike.jpg" alt="" class="img-banner">
						<img src="../img/mau-thiet-ke-poster-giay-3-566x800.jpg" alt=""
							class="img-banner">
						<img src="../img/mau-thiet-ke-poster-giay-1-566x800.jpg" alt=""
							class="img-banner">
					</div>
				</div>

				<?php
include "component/offer.php"
?>

				<section class="main-content" id="tin-tuc">
					<div class="theme-content">
						<span class="theme-content_title">Tin tức</span>
					</div>

					<div class="product-container">
						<div class="grid wide">
							<div class="row" data-aos="flip-up"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<?php
include "component/news.php"
?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>

		<?php
include "component/footer.php"
?>
	</div>

	<button id="scroll-btn">
		<img src="../img/scrollToTop.png" />
	</button>

	<?php
include "component/care.php"
?>

	<script src="../../assets/js/validate.js"></script>
	<script src="../js/order-validate.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	window.addEventListener('load', AOS.refresh)
	$(function() {
		AOS.init();
	});
	</script>
	<script src="../../assets/js/slick.js" async defer></script>
	<script src="../../assets/js/scroll.js" async defer></script>
	<script src="../../assets/js/quantity.js" async defer></script>
	<script src="../../assets/js/script.js" async defer></script>
	<script src="../../assets/js/address.js" async defer></script>
	<script src="../../assets/js/cart-shopping.js" async defer></script>
	<script src="../../node_modules/slick-carousel/slick/slick.js"></script>
	<script src="../js/modal-wrapper.js" async defer></script>
	<script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'>
	</script>

</body>

</html>