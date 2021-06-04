<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
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
	<link rel="stylesheet"
		href="../../assets/css/category-news/category-news.css" />
	<link rel="stylesheet" href="../../assets/css/news/news.css" />
	<link rel="stylesheet" href="../../assets/css/main/main.css" />
	<link rel="stylesheet"
		href="../../assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="../css/product/product.css" />
	<link rel="stylesheet" href="../css/contact.css" />
	<link rel="stylesheet" href="../css/validate.css" />
	<style>
	.wrapper-main-wap .product-container .product-a__img .news-content+p {
		top: 1rem;
		font-weight: 400;
	}

	blockquote {
		margin-bottom: 1rem;
	}

	blockquote p {
		font-style: unset;
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
					<a href="introduce.php" class="nav-link">
						<li class="nav-bar-item">About</li>
					</a>
					<a href="contact.php" class="nav-link">
						<li class="nav-bar-item">Contact</li>
					</a>
					<a href="../../signup.php" class="nav-link">
						<li class="nav-bar-item">sign up</li>
					</a>
					<a href="../../login.php" class="nav-link">
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
							<i class="fas fa-phone mr1r"></i>
							0776689228
						</a>
					</div>
				</div>
				<a href="../../index.php">
					<img src="../../assets/img/logo.png" alt="Logo" class="logo" />
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

					<?php
include "component/slide-bar.php"
?>
				</div>
			</div>

			<div class="header-bottom">
				<ul class="header-bottom__nav-left">
					<a href="../../index.php">
						<li class="header-bottom_item-left">TRANG CHỦ</li>
					</a>
					<a href="introduce.php">
						<li class="header-bottom_item-left">GIỚI THIỆU</li>
					</a>
					<a href="men's-shoes.php">
						<li class="header-bottom_item-left"><?php
include "category-product/category-product1.php"
?></li>
					</a>
				</ul>

				<ul class="header-bottom__nav-right">
					<a href="women's-shoes.php">
						<li class="header-bottom_item-right"><?php
include "category-product/category-product2.php"
?></li>
					</a>
					<a href="category-news.php">
						<li class="header-bottom_item-right">TIN TỨC</li>
					</a>
					<a href="contact.php" class="bgc">
						<li class="header-bottom_item-right">LIÊN HỆ</li>
					</a>
				</ul>
			</div>
		</div>
	</header>

	<div class="main-container" style="padding-top: 5rem; ">
		<div class="grid wide">
			<div class="row">
				<div class="col l-5">
					<div class="introduce">
						<p class="heading"
							style=" text-align: center; font-size: 2rem; margin-bottom: 2rem; cursor: text">
							Gửi thông
							tin liên hệ
							với chúng tôi
						</p>

						<form action="" method="POST" class="contact-form"
							style="margin-top: 5rem" id="contact-form">
							<div class="contact-form__group form-group">
								<label for="full-name" style="color: var(--primary-color)">Họ và
									tên:</label> <br />
								<input type="text" id="full-name" name="full-name"
									placeholder="Nhập họ và tên...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="phone" style="color: var(--primary-color)">Số điện
									thoại:</label><br />
								<input type="text" id="phone" name="phone"
									placeholder="Nhập số điện thoại...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="address" style="color: var(--primary-color)">Địa
									chỉ:</label><br />
								<input type="text" id="address" name="address"
									placeholder="Nhập địa chỉ...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="free-time" style="color: var(--primary-color)">Thời
									gian rảnh:</label><br />
								<input type="text" id="free-time" name="free-time"
									placeholder="Nhập thời gian rảnh...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="facebook"
									style="color: var(--primary-color)">Facebook:</label><br />
								<input type="text" id="facebook" name="facebook"
									placeholder="Nhập link facebook...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="email"
									style="color: var(--primary-color)">Email:</label><br />
								<input type="email" id="email" name="email"
									placeholder="Nhập email...">
								<span class="message-error"></span>
							</div>
							<div class="contact-form__group form-group">
								<label for="content" style="color: var(--primary-color)">Nội
									dung:</label><br />
								<textarea id="content" name="content"
									placeholder="Nhập nội dung yêu cầu..."></textarea>
								<span class="message-error" style="margin-top: 11px;	"></span>
							</div>

							<div class="g-recaptcha"
								data-sitekey="6LfrFKQUAAAAAMzFobDZ7ZWy982lDxeps8cd1I2i"></div>

							<input type="submit" value="Gửi đi" class="btn comment-form"
								style="    margin-top: 1rem;" />
						</form>
					</div>
				</div>

				<div class="col l-7">
					<div class="introduce">
						<p class="heading"
							style=" text-align: center; font-size: 2rem; margin-bottom: 2rem; cursor: text">
							CỬA HÀNG
							GIÀY THỂ
							THAO THỜI TRANG
							<a href="http://shoeestoree.tk/"
								style="color: var(--primary-color);"><b>THUTHUYSHOESTORE</b>
							</a>
						</p>

						<blockquote>
							<p class="introduce-content">
								<b style="cursor: text">Địa chỉ:</b> <a
									href="https://www.google.com/maps?ll=10.82719,106.703332&z=17&t=m&hl=en&gl=US&mapclient=embed&q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000">
									69/68 Đặng Thùy Trâm, P.13, Quận Bình
									Thạnh, TP. Hồ Chí Minh</a>
							</p>
						</blockquote>

						<blockquote>
							<p class="introduce-content">
								<b style="cursor: text">Facebook:</b> <a
									href="https://www.facebook.com/nlhsang/">https://www.facebook.com/nlhsang/</a>
							</p>
						</blockquote>

						<blockquote>
							<p class="introduce-content">
								<b style="cursor: text">Điện thại:</b> <a
									href="tel:0776689228">0776689228</a>
							</p>
						</blockquote>

						<blockquote>
							<p class="introduce-content">
								<b style="cursor: text">Email:</b> <a
									href="mailto:hoangsang.nguyen2001a@gmail.com">hoangsang.nguyen2001a@gmail.com</a>
							</p>
						</blockquote>

						<blockquote>
							<p class="introduce-content">
								<b style="cursor: text">Website:</b> <a
									href="http://shoeestoree.tk/">THUTHUYSHOESTORE</a>
							</p>
						</blockquote>
					</div>

					<iframe class="map-introduce"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7923770186185!2d106.70114311521664!3d10.827194961214207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175288b870d57d1%3A0x4c6e58e94874db89!2zNjksIDY4IMSQLiDEkOG6t25nIFRodeG7syBUcsOibSwgUGjGsOG7nW5nIDEzLCBCw6xuaCBUaOG6oW5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmggNzAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1621569602841!5m2!1sen!2s"
						allowfullscreen="" loading="lazy"></iframe>


				</div>

				<div class="wrapper-main-wap">
					<div class="main-container main-content">
						<div class="row"
							style="display: flex; justify-content: center; margin-top: -12.5rem;	">
							<div class="category-archives"><span>Tin tức</span></div>
						</div>

						<div class="product-container">
							<div class="grid wide">
								<div class="row" style="margin-top: -27rem;" data-aos="flip-up"
									data-aos-anchor-placement="center-bottom"
									data-aos-duration="500">
									<?php
include "component/news.php"
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
include "component/footer.php"
?>
	</div>

	<button id="scroll-btn">
		<img src="../../assets/img/scrollToTop.png" />
	</button>

	<?php
include "component/care.php"
?>

	<script src="../js/validate.js"></script>
	<script>
	Validator({
		form: "#contact-form",
		formGroupSelector: ".form-group",
		messageError: ".message-error",
		rules: [
			Validator.isRequired("#full-name", "Họ và tên không được bỏ trống!"),
			Validator.isInvalidName("#full-name",
				"Họ và tên nhập vào không hợp lệ!"),

			Validator.isRequired("#address", "Địa chỉ không được bỏ trống!"),

			Validator.isRequired("#free-time",
				"Thời gian rảnh không được bỏ trống!"),

			Validator.isRequired("#facebook",
				"Link facebook không được bỏ trống!"),
			Validator.isUrlFacebook("#facebook",
				"Link facebook nhập vào không hệ lệ!"),

			Validator.isRequired("#phone", "Số điện thoại không được bỏ trống!"),
			Validator.isNumberPhone("#phone",
				"Số điện thoại nhập vào không hợp lệ!"),

			Validator.isRequired("#email", "Email không được bỏ trống!"),
			Validator.isEmail("#email", "Email nhập vào không hợp lệ!"),

			Validator.isRequired("#content",
				"Nội dung yêu cầu không được bỏ trống!"),

		],
		onSubmit: function(data) {
			var response = grecaptcha.getResponse();
			if (response.length == 0) {
				alert("Xác nhận 'Tôi không phải người máy'!`");
				evt.preventDefault();
				return false;
			} else {
				alert('Gửi thông tin liên hệ thành công!');
				location.reload();
			}
		},
	});
	</script>

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
	<script src="../js/modal-wrapper.js" async defer></script>
	<script src="../../node_modules/slick-carousel/slick/slick.js"></script>
</body>

</html>