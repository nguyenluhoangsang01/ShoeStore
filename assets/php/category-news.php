<?php
session_start();

include "component/adminAccount.php";
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
	<link rel="stylesheet" href="../../assets/css/main/main.css" />
	<link rel="stylesheet"
		href="../../assets/css/category-news/category-news.css" />
	<link rel="stylesheet"
		href="../../assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="../../assets/css/news/news.css" />

	<style>
	.row>a {
		position: absolute;
		right: 0;
		font-size: 2.5rem;
		top: 1rem;
		transition: all 0.3s;
	}

	.row>a:hover {
		color: var(--primary-color);
		transform: scale(1.1);
	}

	.row>a:active {
		transform: scale(0.9);
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
include "component/news-header.php"
?>

	<div class="main-container">
		<div class="grid wide">
			<div class="row" style="display: flex; justify-content: center">
				<div class="category-archives cursor-text">
					<span>CATEGORY ARCHIVES: STYLE</span>
				</div>
			</div>
		</div>

		<section class="content-page" style="padding-top: 4rem">
			<div class="grid wide">
				<div class="row">
					<div class="col l-9" style="
								border-right: 1px solid var(--primary-color);
								padding-right: 3rem;
							">
						<div class="news news1">
							<div class="grid wide">
								<div class="row">
									<p class="title-page__name">
										<?php
include "../php/news-title/news-title1.php"
?>
									</p>
								</div>
							</div>

							<div class="grid wide">
								<div class="row" style="position: relative;">
									<p class="status">
										POSTED ON <span class="time" id="time-news1">
											<?php
include "../../assets/php/news-time/news-time1.php"
?>
										</span> BY
										<span class="author">
											<?php
include "./news-author/news-author1.php"
?>
										</span>
									</p>

									<a href="../../admin/category-news1.php"
										style="top: 0 !important; ">
										<i class="fas fa-edit"
											<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>>
										</i>
									</a>
								</div>
							</div>

							<p>
								<?php
include "../php/news-content/news-content1.php"
?>
							</p>
							<a href="news1.php">
								<button class="btn">
									Tiếp tục xem
									<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>

						<div class="news news2">
							<div class="row">
								<p class="title-page__name">
									<?php
include "../php/news-title/news-title2.php"
?>
								</p>
							</div>

							<div class="row" style="position: relative;">
								<p class="status">
									POSTED ON <span class="time" id="time-news2">
										<?php
include "../../assets/php/news-time/news-time2.php"
?>
									</span> BY
									<span class="author">
										<?php
include "./news-author/news-author2.php"
?>
									</span>
								</p>
								<a href="../../admin/category-news2.php"
									style="top: 0 !important; ">
									<i class="fas fa-edit"
										<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>>
									</i>
								</a>
							</div>

							<p>
								<?php
include "../php/news-content/news-content2.php"
?>
							</p>
							<a href="news2.php">
								<button class="btn">
									Tiếp tục xem
									<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>

						<div class="news news3">
							<div class="row">
								<p class="title-page__name">
									<?php
include "../php/news-title/news-title3.php"
?>
								</p>
							</div>

							<div class="row" style="position: relative;">
								<p class="status">
									POSTED ON <span class="time" id="time-news3">
										<?php
include "../../assets/php/news-time/news-time3.php"
?>
									</span> BY
									<span class="author">
										<?php
include "./news-author/news-author3.php"
?>
									</span>
								</p>
								<a href="../../admin/category-news3.php"
									style="top: 0 !important; ">
									<i class="fas fa-edit"
										<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>>

									</i>
								</a>
							</div>

							<p>
								<?php
include "../php/news-content/news-content3.php"
?>
							</p>
							<a href="news3.php">
								<button class="btn">
									Tiếp tục xem
									<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>

						<div class="news news4">
							<div class="row">
								<p class="title-page__name">
									<?php
include "../php/news-title/news-title4.php"
?>
								</p>
							</div>

							<div class="row" style="position: relative;">
								<p class="status">
									POSTED ON <span class="time" id="time-news4">
										<?php
include "../../assets/php/news-time/news-time4.php"
?>
									</span> BY
									<span class="author">
										<?php
include "./news-author/news-author4.php"
?>
									</span>
								</p>
								<a href="../../admin/category-news4.php"
									style="top: 0 !important; ">
									<i class="fas fa-edit"
										<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>>

									</i>
								</a>
							</div>

							<p>
								<?php
include "../php/news-content/news-content4.php"
?>
							</p>
							<a href="news4.php">
								<button class="btn">
									Tiếp tục xem
									<i class="fas fa-long-arrow-alt-right"></i></button></a>
						</div>
					</div>

					<div class="col l-3">
						<?php
include "component/message-product-right.php"
?>
					</div>
				</div>
			</div>
		</section>

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

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
	<script src="../../assets/js/slick.js" async defer></script>
	<script src="../../assets/js/scroll.js" async defer></script>
	<script src="../js/modal-wrapper.js" async defer></script>
	<script src="../../node_modules/slick-carousel/slick/slick.js"></script>
</body>

</html>