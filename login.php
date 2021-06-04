<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
include "assets/php/component/config-account.php";

error_reporting(0);

if (isset($_POST["login"])) {
    $usernameInp = trim($_POST["username"]);
    $password = trim(md5($_POST["password"]));

    include "assets/php/component/validate.php";

    if (!$error) {
        $sql = "SELECT *
								FROM loginsignup
								WHERE username = '$usernameInp' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        } else {
            header("Location: login.php?error=Đăng nhập thất bại: sai tên tài khoản hoặc mật khẩu. Vui lòng thử lại !");
        }
    }
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
	<link rel="stylesheet" href="assets/css/category-news/category-news.css" />
	<link rel="stylesheet" href="assets/css/news/news.css" />
	<link rel="stylesheet" href="assets/css/main/main.css" />
	<link rel="stylesheet" href="assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="assets/css/contact.css" />
	<link rel="stylesheet" href="assets/css/validate.css" />
	<link rel="stylesheet" href="assets/css/login-signup/login-signup.css" />

	<style>
	.wrapper-main-wap .product-container .product-a__img .news-content+p {
		top: 1rem;
		font-weight: 400;
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
							<ul class="modal-body__list" style="margin-top: 7rem;	">
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

	<div class="main-container login">
		<img src="assets/img/banner-website-shopbongda-Nike-CR7-3.png"
			alt="" class="background" style="height: 83rem;">
		<div class="grid wide">
			<div class="row">
				<div class="col l-6 form" style="height: 73rem;	">
					<div class="row"
						style="display: flex; justify-content: center; margin-top: -2rem;	">
						<div class="category-archives"><span>Xin chào</span></div>
					</div>
					<div class="sub-heading">Đăng nhập vào tài khoản của bạn</div>
					<div class="row">
						<form action="" class="form-wrapper" id="form-login" method="POST">
							<?php if ($_GET['error']) {?>
							<div class="alert-danger">
								<i class="fas fa-times"></i>
								<?=$_GET['error']?>
							</div>
							<?php }?>

							<div class="form-group">
								<label for="user-name">Tên tài khoản:</label> <br>
								<input type="text" id="user-name" class="form-wrapper__input"
									name="username" placeholder="Nhập tên tài khoản..."
									value="<?php echo $usernameInp; ?>">
								<span class="message-error"></span>
							</div>

							<div class="form-group form-group-password">
								<label for="password">Mật khẩu:</label><br>
								<input type="password" id="password" class="form-wrapper__input"
									name="password" placeholder="Nhập mật khẩu..."
									value="<?php echo $_POST['password']; ?>">
								<button class="btnPassword" type="button" id="btnHidePassword">
									<svg fill="none" viewBox="0 0 20 10"
										class="stardust-icon stardust-icon-eye-shut _2nnXgl">
										<path stroke="none" fill="#000" fill-opacity=".54"
											d="M19.834 1.15a.768.768 0 00-.142-1c-.322-.25-.75-.178-1 .143-.035.036-3.997 4.712-8.709 4.712-4.569 0-8.71-4.712-8.745-4.748a.724.724 0 00-1-.071.724.724 0 00-.07 1c.07.106.927 1.07 2.283 2.141L.631 5.219a.69.69 0 00.036 1c.071.142.25.213.428.213a.705.705 0 00.5-.214l1.963-2.034A13.91 13.91 0 006.806 5.86l-.75 2.535a.714.714 0 00.5.892h.214a.688.688 0 00.679-.535l.75-2.535a9.758 9.758 0 001.784.179c.607 0 1.213-.072 1.785-.179l.75 2.499c.07.321.392.535.677.535.072 0 .143 0 .179-.035a.714.714 0 00.5-.893l-.75-2.498a13.914 13.914 0 003.248-1.678L18.3 6.147a.705.705 0 00.5.214.705.705 0 00.499-.214.723.723 0 00.036-1l-1.82-1.891c1.463-1.071 2.32-2.106 2.32-2.106z">
										</path>
									</svg>
								</button>
								<button class="btnPassword" type="button" id="btnShowPassword">
									<svg fill="none" viewBox="0 0 20 12"
										class="stardust-icon stardust-icon-eye-open t5jqkM">
										<path stroke="none" fill="#000" fill-opacity=".54"
											fill-rule="evenodd"
											d="M19.975 5.823V5.81 5.8l-.002-.008v-.011a.078.078 0 01-.002-.011v-.002a.791.791 0 00-.208-.43 13.829 13.829 0 00-1.595-1.64c-1.013-.918-2.123-1.736-3.312-2.368-.89-.474-1.832-.867-2.811-1.093l-.057-.014a2.405 2.405 0 01-.086-.02L11.884.2l-.018-.003A9.049 9.049 0 0010.089 0H9.89a9.094 9.094 0 00-1.78.197L8.094.2l-.016.003-.021.005a1.844 1.844 0 01-.075.017l-.054.012c-.976.226-1.92.619-2.806 1.09-1.189.635-2.3 1.45-3.31 2.371a13.828 13.828 0 00-1.595 1.64.792.792 0 00-.208.43v.002c-.002.007-.002.015-.002.022l-.002.01V5.824l-.002.014a.109.109 0 000 .013L0 5.871a.206.206 0 00.001.055c0 .01 0 .018.002.027 0 .005 0 .009.003.013l.001.011v.007l.002.01.001.013v.002a.8.8 0 00.208.429c.054.067.11.132.165.197a13.9 13.9 0 001.31 1.331c1.043.966 2.194 1.822 3.428 2.48.974.52 2.013.942 3.09 1.154a.947.947 0 01.08.016h.003a8.864 8.864 0 001.596.16h.2a8.836 8.836 0 001.585-.158l.006-.001a.015.015 0 01.005-.001h.005l.076-.016c1.079-.212 2.118-.632 3.095-1.153 1.235-.66 2.386-1.515 3.43-2.48a14.133 14.133 0 001.474-1.531.792.792 0 00.208-.43v-.002c.003-.006.003-.015.003-.022v-.01l.002-.008c0-.004 0-.009.002-.013l.001-.012.001-.015.001-.019.002-.019a.07.07 0 01-.01-.036c0-.009 0-.018-.002-.027zm-6.362.888a3.823 3.823 0 01-1.436 2.12l-.01-.006a3.683 3.683 0 01-2.178.721 3.67 3.67 0 01-2.177-.721l-.009.006a3.823 3.823 0 01-1.437-2.12l.014-.01a3.881 3.881 0 01-.127-.974c0-2.105 1.673-3.814 3.738-3.816 2.065.002 3.739 1.711 3.739 3.816 0 .338-.047.662-.128.975l.011.009zM8.145 5.678a1.84 1.84 0 113.679 0 1.84 1.84 0 01-3.679 0z"
											clip-rule="evenodd"></path>
									</svg>
								</button>
								<span class="message-error"></span>
							</div>

							<div class="form-group"
								style="margin-bottom: 3rem; display: flex; ">
								<input type="checkbox" id="save" name="save" class="mr1r">
								<label for="save"
									style="display: inline-block; font-size: 1.5rem; color: var(--text-color);">Lưu
									thông
									tin</label>
								<a href="forgot-password.php" class="forget-password">
									<span style="font-size: 1.5rem;">Quên mật khẩu?</span>
								</a>
							</div>

							<div class="g-recaptcha"
								data-sitekey="6LfrFKQUAAAAAMzFobDZ7ZWy982lDxeps8cd1I2i"></div>

							<input type="submit" id="login" value="Đăng nhập" class="btn"
								name="login" style="margin-bottom: 3rem; ">

							<p style="text-align: center; ">
								Nếu bạn chưa có tài khoản, <a href="signup.php"
									class="text">đăng
									ký</a>.</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-container">
		<div class="grid wide">
			<div class="row">
				<div class="wrapper-main-wap">
					<div class="main-container main-content">
						<div class="row"
							style="display: flex; justify-content: center; margin-top: -19rem;	">
							<div class="category-archives"><span>Tin tức</span></div>
						</div>

						<div class="product-container">
							<div class="grid wide">
								<div class="row" style="margin-top: -27rem;" data-aos="flip-up"
									data-aos-anchor-placement="center-bottom"
									data-aos-duration="500">
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

						<div class="row">
							<div class="col l-12">
								<div class="similar-product">
									<div class="similar-product__heading">
										Có thể bạn thích
									</div>

									<div class="slide-show-bottomOP">
										<div class="product my-slides fade col">
											<a href="assets/php/product1.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product1.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product1.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title1.php"
?></p>
											</a>

											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost1.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale1.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product8.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product8.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product8.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title8.php"
?></p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost8.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale8.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product2.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product2.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product2.php" class="">
												<p class="product__name">
													<?php
include "assets/php/product-title/product-title2.php"
?>
												</p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost2.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale2.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product5.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product5.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product5.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title5.php"
?></p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost5.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale5.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product6.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product6.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product6.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title6.php"
?></p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost6.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale6.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product7.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product7.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product7.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title7.php"
?></p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost7.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale7.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product9.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product9.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product9.php" class="">
												<p class="product__name"><?php
include "assets/php/product-title/product-title9.php"
?></p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost9.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale9.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product10.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product10.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product10.php" class="">
												<p class="product__name">
													<?php
include "assets/php/product-title/product-title10.php"
?>
												</p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost10.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale10.php"?>
												</p>
											</div>
										</div>

										<div class="product my-slides fade col">
											<a href="assets/php/product3.php" class="product-a__img"
												target="_self">
												<img src="assets/img/<?php
include "assets/php/image-product/image-product3.php"
?>" alt="product" class="product__img" />

												<span class="sale">sale</span>
												<span class="quick-view">Xem nhanh</span>
											</a>

											<a href="assets/php/product3.php" class="">
												<p class="product__name">
													<?php
include "assets/php/product-title/product-title3.php"
?>
												</p>
											</a>
											<div class="product__cost">
												<s><?php include "assets/php/product-cost/product-cost3.php"?>
												</s>
												<p>
													<?php include "assets/php/product-sale/product-sale3.php"?>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

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
							<a href="index.php#hot-cost">
								<p class="footer-top__highlight">Hot sale</p>
							</a>
							<br />
							<a href="index.php#danh-muc-yeu-thich">
								<p class="footer-top__highlight">Danh mục yêu thích</p>
							</a>
							<br />
							<a href="index.php#san-pham-hot">
								<p class="footer-top__highlight">Sản phẩm hot</p>
							</a>
							<br />
							<a href="index.php#san-pham-ban-chay">
								<p class="footer-top__highlight">Sản phẩm bán chạy</p>
							</a>
							<br />
							<a href="index.php#san-pham-moi">
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
	</div>

	<button id="scroll-btn">
		<img src="assets/img/scrollToTop.png" />
	</button>

	<?php
include "assets/php/component/care.php"
?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>

	<script src="assets/js/validate-login-form.js"></script>
	<script>
	Validator({
		form: "#form-login",
		formGroupSelector: ".form-group",
		messageError: ".message-error",
		rules: [
			Validator.isRequired("#user-name",
				"Vui lòng nhập tên tài khoản !"),

			Validator.isRequired("#password", "Vui lòng nhập mật khẩu !"),
		],
		onSubmit: function(data) {
			var response = grecaptcha.getResponse();
			if (response.length == 0) {
				alert("Xác nhận 'Tôi không phải người máy'!");
			}
		},
	});

	// Shoe & Hide Password
	var btnShowPassword = document.getElementById("btnShowPassword");
	var btnHidePassword = document.getElementById("btnHidePassword");
	var password = document.getElementById("password");

	btnHidePassword.addEventListener("click", () => {
		btnShowPassword.style.opacity = "1";
		btnShowPassword.style.visibility = "visible";

		btnHidePassword.style.opacity = "0";
		btnHidePassword.style.visibility = "hidden";

		password.type = "text";

		password.focus();
	});

	btnShowPassword.addEventListener("click", () => {
		btnHidePassword.style.opacity = "1";
		btnHidePassword.style.visibility = "visible";

		btnShowPassword.style.opacity = "0";
		btnShowPassword.style.visibility = "hidden";

		password.type = "password";
		password.focus();
	});
	</script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="assets/js/slick.js" async defer></script>
	<script src="assets/js/modal-wrapper.js" async defer></script>
	<script src="node_modules/slick-carousel/slick/slick.js"></script>
</body>

</html>