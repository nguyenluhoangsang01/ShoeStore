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
	<link rel="stylesheet" href="../../assets/css/product/product.css" />
	<link rel="stylesheet" href="../../assets/css/main/main.css" />
	<link rel="stylesheet"
		href="../../assets/css/detail-product/detail-product.css" />
	<link rel="stylesheet" href="../css/edit-icon.css">
	<link rel="stylesheet" href="../css/validate.css">
	<link rel="stylesheet" href="../css/cart-shopping.css">
	<style>
	.row>a {
		right: 28.5rem;
		top: 14rem;
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

	<div id="modal">
		<div class="modal-body">
			<img src="../img/Nike.jpg" alt="1">
			<i class="fas fa-times"></i>
		</div>
	</div>

	<div class="cart-shopping">
		<form action="order-pay8.php" method="POST">
			<?php
include "component/cart-table.php"
?>
		</form>
		<i class="fas fa-times close"></i>
	</div>

	<div class="main-container">
		<section class="title-page row">
			<p>
				<a href="../../index.php">Trang chủ</a> /
				<a href="men's-shoes.php"><?php
include "category-product/category-product1.php"
?></a> /
				<a href="product8.php">
					<?php
include "product-title/product-title8.php"
?>
				</a>
			</p>

			<a href="../../admin/edit-product8.php">
			<i class="fas fa-edit"
						<?php echo ($_SESSION['username'] != "$adminAccount") ? "hidden" : ""; ?>></i>
				</a>
			</a>
		</section>

		<section class="content-page" style="padding-top: 4rem">
			<div class="grid wide">
				<div class="row">
					<div class="col l-9" style="
								border-right: 1px solid var(--primary-color);
								padding-right: 3rem;
							">
						<div class="grid wide">
							<div class="row">
								<div class="col l-5 slide-show-container cursor-grab"
									style="height: 100%">
									<img src="../img/<?php
include "../php/image-product/image-product8.php"
?>" alt="" class="my-slides fade" />
									<img src="../img/<?php
include "../php/image-product/image-product1.php"
?>" alt="" class="my-slides fade" />
									<img src="../img/<?php
include "../php/image-product/image-product11.php"
?>" alt="" class="my-slides fade" />
									<img src="../img/<?php
include "../php/image-product/image-product10.php"
?>" alt="" class="my-slides fade" />
								</div>

								<div class="col l-7">
									<div class="content-product__name" style="line-height: 1.3;"><?php
include "../php/product-title/product-title8.php"
?></div>
									<div class=" content-product__cost">
										<s class="mr2r"><?php include "product-cost/product-cost8.php"?>
										</s>
										<p><?php include "product-sale/product-sale8.php"?>
										</p>
									</div>
									<div class="content-product__list">
										<?php
include "introduce-product/introduce-product8.php"
?>
									</div>

									<div class="select-product select-size">
										<label for="size">Kích thước: </label>
										<select name="size" id="size">
											<option value="">---Chọn kích thước---</option>
											<option value="38">38</option>
											<option value="39">39</option>
											<option value="40">40</option>
											<option value="41">41</option>
											<option value="42">42</option>
											<option value="43">43</option>
										</select>
									</div>

									<div class="select-product select-color">
										<label for="color">Màu: </label>
										<select name="color" id="color">
											<option value="" selected="selected">
												---Chọn màu---
											</option>
											<option value="hồng">Hồng</option>
											<option value="xanh">Xanh</option>
										</select>
									</div>

									<div class="quantity">
										<button id="minus">-</button>
										<button id="number-place">1</button>
										<button id="plus">+</button>
									</div>

									<div class="btn add-product" id="add-product">
										Thêm vào giỏ
									</div>

									<a href="order-pay8.php" class="btn buy-product"
										id="buy-product">
										Mua ngay
									</a>

									<div class="product__meta">
										<p class="code meta"><span>Mã: </span><?php
include "code-product/code-product8.php"
?>
										</p>
										<p class="category meta">
											<span>Danh mục: </span><?php
include "category-product/category-product1.php"
?>
										</p>
										<p class="tag meta"><span>Tag: </span><?php
include "tag-product/tag-product8.php"
?></p>
									</div>

									<?php
include "component/social-media.php"
?>
								</div>
							</div>

							<div class="row">
								<section class="section-description">
									<ul class="description__list">
										<li class="description__item show-border-top"
											id="description">
											Mô tả
										</li>
										<li class="description__item" id="add-information">
											Thông tin bổ sung
										</li>
										<li class="description__item" id="evaluate">Đánh giá</li>
									</ul>
								</section>
								<!-- Description -->
								<section class="description">
									<p class="description-introduce">
										<?php
include "introduce-trademaker-product/introduce-trademaker-product8.php"
?>
									</p>
									<img src="../img/<?php
include "../php/image-product/image-product1.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product2.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product3.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product4.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product5.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product6.php"
?>" alt="" />
									<img src="../img/<?php
include "../php/image-product/image-product7.php"
?>" alt="" />

									<div class="introduce">
										<p class="heading">Cam kết với bạn: </p>
										<p class="introduce-content">
											<?php
include "commitment-product/commitment-product8.php"
?>
										</p>
									</div>

									<div class="introduce">
										<p class="heading">Cách thức mua hàng:</p>
										<p class="introduce-content">
											<?php
include "howtobuy-product/howtobuy-product8.php"
?>
										</p>
									</div>

									<div class="introduce">
										<p class="heading">Thông tin liên hệ:</p>
										<p class="introduce-content">
											<?php
include "contact-info/contact-info8.php"
?>
										</p>
									</div>
								</section>
								<!--/ Description -->

								<!--Add Information -->
								<section class="add-information" style="display: none">
									<div class="size">
										<p class="name">Kích thước:</p>
										<p class="text"><?php
include "size-product/size-product8.php"
?></p>
									</div>

									<div class="color">
										<p class="name">Màu:</p>
										<p class="text"><?php
include "color-product/color-product8.php"
?></p>
									</div>

									<div class="weight">
										<p class="name">Trọng lượng:</p>
										<p class="text"><?php
include "weight-product/weight-product8.php"
?></p>
									</div>

									<div class="brand">
										<p class="name">Thương hiệu:</p>
										<p class="text"><?php
include "tag-product/tag-product8.php"
?></p>
									</div>
								</section>
								<!--/ Add Information -->

								<!--Evaluate -->
								<section class="evaluate" style="display: none">
									<div class="evaluate-heading"></div>
									<p class="evaluate-sub-heading"></p>

									<form class="review-form" method="POST" id="review-form">
										<div class="review-form-heading">
											Hãy là người đầu tiên nhận xét “
											<?php
include "../php/product-title/product-title8.php"
?>
											”
										</div>
										<div class="review-form-sub-heading">
											Đánh giá của bạn:
										</div>
										<div class="form-group" id="star-form">
											<?php
include "component/star.php"
?>

											<?php
include "component/comment.php"
?>
									</form>
								</section>
								<!--/ Evaluate -->
							</div>

							<div class="row">
								<div class="similar-product">
									<div class="similar-product__heading">
										Sản phẩm tương tự
									</div>

									<div class="slide-show-bottom col">
										<div class="product my-slides fade col">
											<?php
include "component/product2.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product3.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product4.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product5.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product6.php"
?>
										</div>


										<div class="product my-slides fade col">
											<?php
include "component/product7.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product1.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product9.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product10.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product11.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product12.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product13.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product14.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product15.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product16.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product17.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product18.php"
?>
										</div>

										<div class="product my-slides fade col">
											<?php
include "component/product19.php"
?>
										</div>


										<div class="product my-slides fade col">
											<?php
include "component/product20.php"
?>
										</div>
									</div>
								</div>
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
		<img src="../img/scrollToTop.png" />
	</button>

	<?php
include "component/care.php"
?>

	<script src="../../assets/js/validate.js"></script>
	<script src="../../assets/js/validate-product.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
	<script src="../../assets/js/slick.js" async defer></script>
	<script src="../../assets/js/scroll.js" async defer></script>
	<script src="../../assets/js/quantity.js" async defer></script>
	<script src="../../assets/js/script.js" async defer></script>
	<script src="../../assets/js/cart-shopping.js" async defer></script>
	<script src="../js/modal-wrapper.js" async defer></script>
	<script src="../../node_modules/slick-carousel/slick/slick.js"></script>
</body>


</html>