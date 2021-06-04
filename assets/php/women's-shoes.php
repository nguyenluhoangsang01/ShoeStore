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
	<link rel="stylesheet" href="../../assets/css/main/main.css" />
	<link rel="stylesheet"
		href="../../assets/css/women's-shoes/women's-shoes.css" />
	<link rel="stylesheet"
		href="../../assets/css/detail-product/detail-product.css" />
</head>

<body>
	<!--[if lt IE 7]>
			<p class="browsehappy">
				You are using an <strong>outdated</strong> browser. Please
				<a href="#">upgrade your browser</a> to improve your experience.
			</p>
		<![endif]-->

	<?php
include "component/category-product2-header.php"
?>

	<div class="main-container">
		<div class="grid wide">
			<div class="row" style="display: flex; justify-content: center">
				<div class="category-archives cursor-text">
					<span><?php
include "category-product/category-product2.php"
?></span>
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
						<section class="main-content" style="margin-top: -27rem"
							id="san-pham-moi">
							<div class="product-container">
								<div class="grid wide">
									<div class="row">
										<div class="col l-4">
											<div class="product">
												<?php
include "component/product11.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product12.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product13.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product14.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product15.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product16.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product17.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product18.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product19.php"
?>
											</div>
										</div>

										<div class="col l-4">
											<div class="product">
												<?php
include "component/product20.php"
?>
											</div>
										</div>
									</div>
									<a href="women's-shoes.php" class="btn">Xem tất cả</a>
								</div>
							</div>
						</section>
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
		<img src="../img/scrollToTop.png" />
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