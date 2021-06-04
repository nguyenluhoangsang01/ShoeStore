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
		href="../../assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="../../assets/css/news/news.css" />
	<link rel="stylesheet" href="../../assets/css/edit-icon.css" />
	<link rel="stylesheet" href="../../assets/css/validate.css" />

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
			<div class="row">
				<a href="category-news.php"></a>
			</div>

			<div class="row">
				<p class="title-page__name">
					<?php
include "../php/news-title/news-title1.php"
?>
				</p>
				<a href="../../admin/category-news1.php">
					<i class="fas fa-edit"
						<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>></i>
				</a>
			</div>
		</div>

		<div class="grid wide">
			<div class="row">
				<p class="status">
					POSTED ON <span class="time">
						<?php
include "./news-time/news-time1.php"
?>
					</span> BY
					<span class="author">
						<?php
include "../php/news-author/news-author1.php"
?>
					</span>
				</p>
			</div>
		</div>

		<section class="content-page" style="padding-top: 2rem">
			<div class="grid wide">
				<div class="row">
					<div class="col l-9" style="
								border-right: 1px solid var(--primary-color);
								padding-right: 3rem;
							">
						<div class="grid wide">
							<div class="row">
								<!-- Description -->
								<section class="description">
									<p class="description-introduce">
										<?php
include "../php/news-content/news-content1.php"
?>
									</p>
									<img src="../img/<?php
include "../php/news-image/news-image1.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/news-image/news-image2.php"
?>" alt="" />
									<center>
										<?php
include "component/social-media.php"
?>
									</center>
								</section>
								<!--/ Description -->

								<div class="change-page">
									<div class="left"></div>

									<a href="news2.php" class="">
										<div class="right">
											<?php
include "./news-title/news-title2.php"
?>
											<i class="fas fa-arrow-right"></i>
										</div>
									</a>
								</div>

								<!--Evaluate -->
								<section class="evaluate">
									<div class="evaluate-heading"></div>
									<p class="evaluate-sub-heading"></p>

									<form class="review-form" method="POST" id="review-form"
										style="width: 840px; margin-bottom: 10rem;">
										<div class="review-form-heading"
											style="text-transform: uppercase">
											bình luận
										</div>
										<div class="review-form-sub-heading">
											Email của bạn sẽ không được hiển thị công khai
										</div>
										<div class="form-group" id="star-form">
											<?php
include "component/star.php"
?>

											<?php
include "component/comment-news.php"
?>
									</form>
								</section>
								<!--/ Evaluate -->
							</div>
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

	<script src="../../assets/js/validate.js"></script>
	<script src="../../assets/js/validate-news.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
	<script src="../../assets/js/slick.js" async defer></script>
	<script src="../../assets/js/scroll.js" async defer></script>
	<script src="../../assets/js/star.js" async defer></script>
	<script src="../js/modal-wrapper.js" async defer></script>
	<script src="../../node_modules/slick-carousel/slick/slick.js"></script>
</body>

</html>