<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
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
		href="assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32"
		href="assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16"
		href="assets/favicon/favicon-16x16.png" />
	<link rel="manifest" href="assets/favicon/site.webmanifest" />
	<link rel="stylesheet"
		href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
		crossorigin="anonymous" />
	<link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="assets/css/reset.css" />
	<link rel="stylesheet" href="assets/css/grid.css" />
	<link rel="stylesheet" href="assets/css/base.css" />
	<link rel="stylesheet" href="assets/css/carousel.css" />
	<link rel="stylesheet" href="assets/css/main/main.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
	<!--[if lt IE 7]>
			<p class="browsehappy">
				You are using an <strong>outdated</strong> browser. Please
				<a href="#">upgrade your browser</a> to improve your experience.
			</p>
		<![endif]-->

	<header class="header-wrapper">
		<div class="header-top">
			<div class="header-top__left">
				Chào mừng đến với Thu Thủy Shoe Store !
			</div>
			<div class="header-top__right">
				<ul class="header_nav">
					<a href="assets/php/introduce.php" class="nav-link">
						<li class="nav-bar-item">About</li>
					</a>
					<a href="assets/php/contact.php" class="nav-link">
						<li class="nav-bar-item">Contact</li>
					</a>
					<a href="signup.php" class="nav-link">
						<li class="nav-bar-item">sign up</li>
					</a>
					<a href="login.php" class="nav-link">
						<li class="nav-bar-item">Log in</li>
					</a>
				</ul>
			</div>
		</div>
		<div id="header-main&header-bottom">
			<div class="header-main">
				<div class="header-main__info">
					<div class="info__time">
						<i class="far fa-clock mr1r"></i>08:00 - 22:00
					</div>
					<div class="info__phone">
						<a href="tel:0776689228">
							<i class="fas fa-phone mr1r"></i>0776689228
						</a>
					</div>
				</div>
				<a href="index.php">
					<img src="assets/img/logo.png" alt="Logo" class="logo" />
				</a>
				<div class="header-main__right">
					<input type="text" placeholder="Tìm kiếm sản phẩm..."
						class="input-search" />

					<div class="modal-page"></div>

					<div class="wrapper-search">
						<i class="fas fa-search wrapper-search__fa-search"></i>
						Tìm kiếm
					</div>

					<i class="fas fa-shopping-cart"></i>

					<input type="checkbox" id="modal-checkbox" hidden>
					<label for="modal-checkbox" class="bars"><i></i></label>

					<div class="modal-wrapper" id="modal-wrapper">
						<div class="modal-body">
							<div class="profile">
								<?php
include "assets/php/avatar/update.php"
?>
								<form action="" method="POST" enctype="multipart/form-data">
									<label class="avatar" for="avatar">
										<img src="assets/img/<?php
include "assets/php/avatar/avatar.php"
?>" alt="avatar">
										<input type="file" name="avatar" id="avatar" hidden>
									</label>
									<div class="status">
										<i class="fas fa-circle"></i>
										<div class="status-account">Đang hoạt động</div>
									</div>
									<div class="username"><?php echo $_SESSION['username'] ?>
									</div>
									<button type="submit" name="saveAvatar" class="btn"><i
											class="fas fa-check"></i></button>
								</form>
							</div>

							<ul class="modal-body__list">
								<a href="index.php">
									<li class="modal-body__list-item">
										<i class="fas fa-home"></i> Trang chủ
									</li>
								</a>

								<a href="assets/php/introduce.php">
									<li class="modal-body__list-item">
										<i class="fas fa-users"></i> Giới thiệu
									</li>
								</a>

								<a href="assets/php/contact.php">
									<li class="modal-body__list-item">
										<i class="fas fa-id-card"></i> Liên hệ
									</li>
								</a>

								<a href="assets/php/category-news.php">
									<li class="modal-body__list-item">
										<i class="fas fa-newspaper"></i> Tin tức
									</li>
								</a>

								<a href="assets/php/men's-shoes.php">
									<li class="modal-body__list-item">
										<i class="fas fa-shoe-prints"></i> Giày nam
									</li>
								</a>

								<a href="assets/php/women's-shoes.php">
									<li class="modal-body__list-item">
										<i class="fas fa-shoe-prints"></i> Giày nữ
									</li>
								</a>

								<a href="signup.php">
									<li class="modal-body__list-item">
										<i class="fas fa-user-plus"></i> Đăng ký
									</li>
								</a>

								<a href="login.php">
									<li class="modal-body__list-item">
										<i class="fas fa-sign-in-alt"></i> Đăng nhập
									</li>
								</a>
								<a href="logout.php">
									<li class="modal-body__list-item">
										<i class="fas fa-sign-out-alt"></i> Đăng xuất
									</li>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>



			<div class="header-bottom">
				<ul class="header-bottom__nav-left">
					<a href="index.php" class="bgc">
						<li class="header-bottom_item-left">TRANG CHỦ</li>
					</a>
					<a href="assets/php/introduce.php">
						<li class="header-bottom_item-left">GIỚI THIỆU</li>
					</a>
					<a href="assets/php/men's-shoes.php">
						<li class="header-bottom_item-left"><?php
include "assets/php/category-product/category-product1.php"
?></li>
					</a>
				</ul>

				<ul class="header-bottom__nav-right">
					<a href="assets/php/women's-shoes.php">
						<li class="header-bottom_item-right"><?php
include "assets/php/category-product/category-product2.php"
?></li>
					</a>
					<a href="assets/php/category-news.php">
						<li class="header-bottom_item-right">TIN TỨC</li>
					</a>
					<a href="assets/php/contact.php">
						<li class="header-bottom_item-right">LIÊN HỆ</li>
					</a>
				</ul>
			</div>
		</div>
	</header>

	<section class="slide-show-container">
		<div class="my-slides fade">
			<img src="assets/img/banner1.png" class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/banner-nike-adidas.jpg" class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/banner-website-shopbongda-Nike-CR7-3.png"
				class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/banner<?php
include "assets/php/image-product/image-product13.php"
?>" class="slide-show-banner" alt="1" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/banner4.png" class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/banner5.png" class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/poster-quang-cao-giay.jpg"
				class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/cach-phat-trien-thuong-hieu.jpeg"
				class="slide-show-banner" />
		</div>

		<div class="my-slides fade">
			<img src="assets/img/mau-thiet-ke-poster-quang-cao-giay-31.jpg"
				class="slide-show-banner" />
		</div>
	</section>

	<section class="section-title">
		<div class="title">
			<img src="assets/img/icon-service-transport.png" alt="img-title"
				class="section-title__img" />
			<div class="section-title__heading">GIAO HÀNG MIỄN PHÍ</div>
			<p class="section-title__content">
				Tất cả sản phẩm đều được vận chuyển miễn phí
			</p>
		</div>

		<div class="title">
			<img src="assets/img/icon-service-change.png" alt="img-title"
				class="section-title__img" />
			<div class="section-title__heading">ĐỔI TRẢ HÀNG</div>
			<p class="section-title__content">
				Sản phẩm được phép đổi trả trong vòng 2 ngày
			</p>
		</div>

		<div class="title">
			<img src="assets/img/icon-service-recieve-money.png" alt="img-title"
				class="section-title__img" />
			<div class="section-title__heading">GIAO HÀNG NHẬN TIỀN</div>
			<p class="section-title__content">
				Thanh toán đơn hàng bằng hình thức trực tiếp
			</p>
		</div>

		<div class="title">
			<img src="assets/img/icon-service-phone.png" alt="img-title"
				class="section-title__img" />
			<div class="section-title__heading">ĐẶT HÀNG ONLINE</div>
			<p class="section-title__content"><a href="tel:0776689228">0776689228</a>
			</p>
		</div>
	</section>

	<div class="wrapper-main-wap">
		<section class="main-content" id="hot-cost" data-aos="fade-up">
			<div class="theme-content">
				<span class="theme-content_title">Hot Sale</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row" data-aos="fade-left"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product1.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product1.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title1.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "assets/php/product-cost/product-cost1.php"?>

										</s>
										<p>
											<?php include "assets/php/product-sale/product-sale1.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product2.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product2.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title2.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost2.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale2.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product3.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product3.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title3.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost3.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale3.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product4.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product4.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title4.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost4.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale4.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product11.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product11.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title11.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost11.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale11.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product12.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product12.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title12.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost12.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale12.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product13.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product13.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title13.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost13.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale13.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product16.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product16.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title16.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost16.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale16.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="btn">Xem tất cả</div>
				</div>
			</div>
		</section>

		<section class="main-content" style="margin-top: -19rem"
			id="danh-muc-yeu-thich">
			<div class="theme-content">
				<span class="theme-content_title">Danh mục yêu thích</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row">
						<div class="col l-4" data-aos="fade-down-right"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img src="assets/img/poster-giay-den.jpg" alt="product"
									class="product__img product__img-banner" />
							</div>
						</div>

						<div class="col l-4" data-aos="fade-up"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img src="assets/img/nike_shoe_banner.jpg" alt="product"
									class="product__img product__img-banner" />
							</div>
						</div>

						<div class="col l-4" data-aos="fade-down-left"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img src="assets/img/download.jpg" alt="product"
									class="product__img product__img-banner" />
							</div>
						</div>

						<div class="col l-4" data-aos="fade-up-right"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img src="assets/img/mau-thiet-ke-poster-quang-cao-giay-36.jpg"
									alt="product" class="product__img product__img-banner" />
							</div>
						</div>

						<div class="col l-4" data-aos="fade-up"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img
									src="assets/img/lambanner-thiet-ke-banner-nhu-nike-1130x570.jpg"
									alt="product" class="product__img product__img-banner" />
							</div>
						</div>

						<div class="col l-4" data-aos="fade-up-left"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="product">
								<img src="assets/img/Untitled-2-1.jpg" alt="product"
									class="product__img product__img-banner" />
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>

		<section class="main-content" style="margin-top: -19rem" id="san-pham-hot">
			<div class="theme-content">
				<span class="theme-content_title">Sản phẩm hot</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row" data-aos="fade-right"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product13.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product13.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title13.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost13.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale13.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product9.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product9.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title9.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost9.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale9.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product10.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product10.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title10.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost10.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale10.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product1.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product1.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title1.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost1.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale1.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product4.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product4.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title4.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost4.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale4.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product6.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product6.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title6.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost6.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale6.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product2.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product2.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title2.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost2.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale2.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product11.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product11.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title11.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost11.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale11.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="btn">Xem tất cả</div>
				</div>
			</div>
		</section>

		<section class="main-content" style="margin-top: -19rem"
			id="san-pham-ban-chay">
			<div class="theme-content">
				<span class="theme-content_title">Sản phẩm bán chạy</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row" data-aos="fade-left"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product9.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product9.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title9.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost9.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale9.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product10.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product10.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title10.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost10.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale10.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product4.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product4.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title4.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost4.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale4.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product11.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product11.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title11.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost11.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale11.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product13.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product13.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title13.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost13.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale13.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product6.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product6.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title6.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost6.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale6.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product16.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product16.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title16.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost16.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale16.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product2.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product2.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title2.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost2.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale2.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="btn">Xem tất cả</div>
				</div>
			</div>
		</section>

		<section class="main-content" style="margin-top: -19rem" id="san-pham-moi">
			<div class="theme-content">
				<span class="theme-content_title">Sản phẩm mới</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row" data-aos="fade-right"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product16.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product16.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title16.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost16.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale16.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product13.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product13.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title13.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost13.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale13.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product11.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product11.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title11.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost11.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale11.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product12.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product12.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title12.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost12.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale12.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product9.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product9.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title9.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost9.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale9.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product10.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product10.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title10.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost10.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale10.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product6.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product6.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title6.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost6.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale6.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<span class="sale">sale</span>

								<a href="assets/php/product2.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/image-product/image-product2.php"
?>" alt="product" class="product__img" />

									<span class="quick-view">Xem nhanh</span>

									<p class="product__name"><?php
include "assets/php/product-title/product-title2.php"
?></p>
									<div class="product__cost">
										<s>
											<?php include "./assets/php/product-cost/product-cost2.php"?>

										</s>
										<p>
											<?php include "./assets/php/product-sale/product-sale2.php"?>

										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="btn">Xem tất cả</div>
				</div>
			</div>
		</section>

		<section class="main-content" style="margin-top: -19rem" id="tin-tuc">
			<div class="theme-content">
				<span class="theme-content_title">Tin tức</span>
			</div>

			<div class="product-container">
				<div class="grid wide">
					<div class="row" data-aos="flip-up"
						data-aos-anchor-placement="center-bottom" data-aos-duration="500">
						<div class="col l-3">
							<div class="product">
								<a href="assets/php/news1.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/news-image/news-image1.php"
?>" alt="product" class="product__img" />

									<p class="news-title">
										<?php
include "assets/php/news-title/news-title1.php"
?>
									</p>
									<p class="news-content">
										<?php
include "assets/php/news-content/news-content1.php"
?>
									</p>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<a href="assets/php/news2.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/news-image/news-image2.php"
?>" alt="product" class="product__img" />

									<p class="news-title">
										<?php
include "assets/php/news-title/news-title2.php"
?>

									</p>
									<p class="news-content">
										<?php
include "assets/php/news-content/news-content2.php"
?>

									</p>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<a href="assets/php/news3.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/news-image/news-image3.php"
?>" alt="product" class="product__img" />

									<p class="news-title">
										<?php
include "assets/php/news-title/news-title3.php"
?>
									</p>
									<p class="news-content">
										<?php
include "assets/php/news-content/news-content3.php"
?>
									</p>
								</a>
							</div>
						</div>

						<div class="col l-3">
							<div class="product">
								<a href="assets/php/news4.php" class="product-a__img"
									target="_self">
									<img src="assets/img/<?php
include "assets/php/news-image/news-image4.php"
?>" alt="product" class="product__img" />

									<p class="news-title">
										<?php
include "assets/php/news-title/news-title4.php"
?>
									</p>
									<p class="news-content">
										<?php
include "assets/php/news-content/news-content4.php"
?>
									</p>
								</a>
							</div>
						</div>
						<a href="assets/php/category-news.php" style="margin: 0 auto">
							<div class="btn">Xem thêm</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="section-partners">
		<!-- <img src="assets/img/partners.jpg" alt="partners" class="" /> -->
		<div class="banner"></div>
		<div class="section-partners__heading">Thương hiệu</div>
		<p class="section-partners__sub-heading">
			Những đối tác thương hiệu của Thu Thủy Shoe Store
		</p>
		<section class="slide-show-partners-container">
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_1.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_2.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_3.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_4.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_5.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_6.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_7.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_8.png" class="slide-show-partners" />
			</div>
			<div class="my-slides fade my-slides-partners">
				<img src="assets/img/partner_9.png" class="slide-show-partners" />
			</div>
		</section>
	</section>

	<footer class="footer-wrapper">
		<section class="footer-top">
			<div class="grid wide">
				<div class="row">
					<div class="col l-3">
						<div class="footer-top__heading">Liên hệ</div>
						<div class="footer-top__content">
							<?php
include "assets/php/contact-info/contact-info1.php"
?>
						</div>
					</div>

					<div class="col l-3">
						<div class="footer-top__heading">Chính sách hỗ trợ</div>
						<div class="footer-top__content">
							<a href="#">
								<p class="footer-top__policy">Hướng dẫn thanh toán</p>
							</a>
							<br />
							<a href="#">
								<p class="footer-top__policy">Giao hàng tận nhà</p>
							</a>
							<br />
							<a href="#">
								<p class="footer-top__policy">Chính sách đổi trả</p>
							</a>
							<br />
							<a href="#">
								<p class="footer-top__policy">Chính sách bảo mật</p>
							</a>
						</div>
					</div>

					<div class="col l-3">
						<div class="footer-top__heading">Liên kết</div>
						<div class="footer-top__content">
							<p class="footer-top__connect">Hãy liên kết với chúng tôi</p>
							<?php
include "assets/php/component/social-media.php"
?>
						</div>
						<div class="footer-top__img">
							<img src="assets/img/dkbocongthuong.png" alt="bo cong thuong" />
						</div>
					</div>

					<div class="col l-3">
						<div class="footer-top__heading">Nổi bật</div>
						<div class="footer-top__content">
							<a href="#hot-cost">
								<p class="footer-top__highlight">Hot sale</p>
							</a>
							<br />
							<a href="#danh-muc-yeu-thich">
								<p class="footer-top__highlight">Danh mục yêu thích</p>
							</a>
							<br />
							<a href="#san-pham-hot">
								<p class="footer-top__highlight">Sản phẩm hot</p>
							</a>
							<br />
							<a href="#san-pham-ban-chay">
								<p class="footer-top__highlight">Sản phẩm bán chạy</p>
							</a>
							<br />
							<a href="#san-pham-moi">
								<p class="footer-top__highlight">Sản phẩm mới</p>
							</a>
							<br />
							<a href="assets/php/category-news.php">
								<p class="footer-top__highlight">Tin tức</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-bottom">
			<ul class="section-bottom-list">
				<a href="assets/php/introduce.php" class="">
					<li class="section-bottom-list__item">About</li>
				</a>
				<a href="#" class="">
					<li class="section-bottom-list__item">BLog</li>
				</a>
				<a href="assets/php/contact.php" class="">
					<li class="section-bottom-list__item">Contact</li>
				</a>
				<a href="#" class="">
					<li class="section-bottom-list__item">FAQ</li>
				</a>
			</ul>
			<p class="copy-right">Copyright 2021 &copy; Thu Thuy Shoe Store</p>
		</section>
	</footer>

	<button id="scroll-btn">
		<img src="assets/img/scrollToTop.png" />
	</button>

	<?php
include "assets/php/component/care.php"
?>

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
	<script src="assets/js/carousel.js" async defer></script>
	<script src="assets/js/slick.js" async defer></script>
	<script src="assets/js/scroll.js" async defer></script>
	<script src="assets/js/modal-wrapper.js" async defer></script>
	<script src="node_modules/slick-carousel/slick/slick.js"></script>
</body>

</html>