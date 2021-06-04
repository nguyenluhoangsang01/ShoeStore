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
		href="../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32"
		href="../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16"
		href="../assets/favicon/favicon-16x16.png" />
	<link rel="manifest" href="../assets/favicon/site.webmanifest" />
	<link rel="stylesheet"
		href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
		crossorigin="anonymous" />
	<link rel="stylesheet"
		href="../node_modules/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="../assets/css/reset.css" />
	<link rel="stylesheet" href="../assets/css/grid.css" />
	<link rel="stylesheet" href="../assets/css/base.css" />
	<link rel="stylesheet" href="../assets/css/carousel.css" />
	<link rel="stylesheet" href="../assets/css/main/main.css" />
	<link rel="stylesheet" href="../assets/css/news/news.css" />
	<link rel="stylesheet" href="../assets/css/women's-shoes/women's-shoes.css" />
	<link rel="stylesheet"
		href="../assets/css/detail-product/detail-product.css" />
	<script
		src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
	</script>
	<link rel="stylesheet" href="../assets/css/edit-product/edit-product.css" />
</head>

<body>
	<!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

	<?php
include "../assets/php/component/product2-admin-header.php"
?>
	<div class="main-container">
		<section class="title-page" style="margin-top: -2rem;	">
			<p>
				<a href="../index.php">Trang chủ</a> /
				<a href="../assets/php/women's-shoes.php"><?php
include "../assets/php/category-product/category-product2.php"
?></a> / &nbsp
				<?php
include "../assets/php/update-product-title/update-product-title19.php"
?>
				<a href="../assets/php/product19.php">
					<?php
include "../assets/php/product-title/product-title19.php"
?>
				</a>&nbsp
				<a href="../admin/edit-product19.php">/ admin</a>
			</p>
		</section>

		<div class="grid wide">
			<div class="row">
				<form method="POST" class="admin">
					<div class="admin-heading">Thông tin chung</div>
					<!-- TITLE -->

					<div class="admin-group" id="admin-group-title">
						<label for="title-product">Tiêu đề: </label>
						<input type="text" id="title-product" name="title-product"
							class="title-product" placeholder="Nhập tiêu đề..." value="<?php
include "../assets/php/product-title/product-title19.php"
?>">
						<i class="fas fa-plus" onclick="addTitleInput();"></i>
						<i class="far fa-trash-alt" onclick="removeTitleInput();"
							id="titleRemoveBtn"></i>
					</div>

					<!-- COST -->
					<div class="admin-group sale-cost">
						<label for="sale-product">Giá khuyến mãi: </label>
						<?php
include "../assets/php/update-product-sale/update-product-sale19.php"
?>
						<input type="text" id="sale-product" name="sale-product"
							placeholder="Nhập giá khuyến mãi..." value="<?php
include "../assets/php/product-sale/product-sale19.php"
?>">


						<label for="cost-product" id="cost-label">Giá gốc: </label>
						<?php
include "../assets/php/update-product-cost/update-product-cost19.php"
?>
						<input type="text" id="cost-product" name="cost-product"
							placeholder="Nhập giá gốc..." value="<?php
include "../assets/php/product-cost/product-cost19.php"
?>">
					</div>

					<!-- INTRODUCE -->
					<div class="admin-group" id="admin-group-introduce">
						<label for="introduce-product">Giới thiệu: </label>
						<?php
include "../assets/php/update-introduce-product/update-introduce-product19.php"
?>
						<textarea id="introduce-product" name="introduce-product"
							placeholder="Nhập nội dung giới thiệu..."
							class="introduce-product">
						<?php
include "../assets/php/introduce-product/introduce-product19.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#introduce-product"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
						<i class="fas fa-plus" onclick="addTextarea();"></i>
						<i class="far fa-trash-alt" onclick="removeTextarea();"
							id="introduceRemoveBtn"></i>
					</div>

					<!-- SIZE -->
					<div class="admin-group" id="admin-group-size">
						<label for="size-product">Kích thước: </label>
						<input type="text" id="size-product" class="size-product"
							name="size-product" placeholder="Nhập kích thước..."></input>
						<i class="fas fa-plus" onclick="addSizeInput();"></i>
						<i class="far fa-trash-alt" id="sizeRemoveBtn"
							onclick="removeSizeInput();"></i>
					</div>

					<!-- COLOR -->
					<div class="admin-group" id="admin-group-color">
						<label for="color-product">Màu: </label>
						<input type="text" id="color-product" class="color-product"
							name="color-product1" placeholder="Nhập màu...">
						<i class="fas fa-plus" onclick="addColorInput();"></i>
						<i class="far fa-trash-alt" id="colorRemoveBtn"
							onclick="removeColorInput();"></i>
					</div>

					<!-- CODE -->
					<div class="admin-group" id="admin-group-code">
						<label for="code-product">Mã sản phẩm: </label>
						<?php
include "../assets/php/update-code-product/update-code-product19.php"
?>
						<input type="text" id="code-product" name="code-product"
							class="code-product" placeholder="Nhập mã sản phẩm..." value="<?php
include "../assets/php/code-product/code-product19.php"
?>">
						<i class="fas fa-plus" onclick="addCodeInput();"></i>
						<i class="far fa-trash-alt" id="codeRemoveBtn"
							onclick="removeCodeInput();"></i>
					</div>

					<!-- TAG -->
					<div class="admin-group" id="admin-group-tag">
						<label for="tag-product">Thẻ sản phẩm: </label>
						<?php
include "../assets/php/update-tag-product/update-tag-product19.php"
?>
						<input type="text" id="tag-product" name="tag-product"
							class="tag-product" placeholder="Nhập thẻ sản phẩm..." value="<?php
include "../assets/php/tag-product/tag-product19.php"
?>">
						<i class="fas fa-plus" onclick="addTagInput();"></i>
						<i class="far fa-trash-alt" id="tagRemoveBtn"
							onclick="removeTagInput();"></i>
					</div>

					<!-- CATEGORY -->
					<div class="admin-group" id="admin-group-category">
						<label for="category-product">Danh mục: </label>
						<?php
include "../assets/php/update-category-product/update-category-product2.php"
?>
						<input type="text" id="category-product" class="category-product"
							name="category-product" placeholder="Nhập danh mục sẩn phẩm"
							value="<?php include "../assets/php/category-product/category-product2.php"?>">
						<i class="fas fa-plus" onclick="addCategoryInput();"></i>
						<i class="far fa-trash-alt" onclick="removeCategoryInput();"
							id="categoryRemoveBtn"></i>
					</div>

					<input type="submit" value="Lưu" class="btn" name="btnSave">
				</form>
			</div>
		</div>

		<div class="grid wide">
			<div class="row">
				<form method="POST" class="admin"
					style="margin-top: 7rem; margin-bottom: 10rem;" enctype="multipart/form-data">
					<div class="admin-heading">Mô tả</div>
					<!-- DESCRIPTION -->
					<div class="admin-description-group"
						id="admin-description-group-introduce-1">
						<label for="introduce-trademark-product">Giới thiệu: </label>

						<?php
include "../assets/php/update-introduce-trademaker-product/update-introduce-trademaker-product19.php"
?>
						<textarea id="introduce-trademark-product"
							name="introduce-trademark-product"
							placeholder="Nhập nội dung giới thiệu thương hiệu..."
							class="introduce-trademark-product">
<?php
include "../assets/php/introduce-trademaker-product/introduce-trademaker-product19.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#introduce-trademark-product"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
					</div>

					<!-- IMAGE -->
					<div class="admin-description-group" id="admin-group-img">
						<label for="img-description-product">Hình ảnh: </label>

						<div class="row">
						<?php
include "../assets/php/update-image-product/update-image-product19.php"
?>
							<div class="col l-7">
								<label for="img-description-product1" class="edit-img1">
									<img src="../assets/img/<?php
include "../assets/php/image-product/image-product19.php"
?>" alt="" id="img1">
								</label>
							</div>
							<div class="col l-5">
								<input type="file" id="img-description-product1"
									name="img-description-product"
									class="img-description-product img-product">
							</div>
						</div>

					</div>

					<!-- COMMITMENT -->
					<div class="admin-description-group"
						id="admin-description-group-introduce">
						<label for="introduce-commitment-product">Cam kết: </label>

						<?php
include "../assets/php/update-commitment-product/update-commitment-product19.php"
?>
						<textarea id="introduce-commitment-product"
							name="introduce-commitment-product"
							placeholder="Nhập nội dung cam kết..."
							class="introduce-commitment-product">
<?php
include "../assets/php/commitment-product/commitment-product19.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#introduce-commitment-product"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
						<!--
						<i class="fas fa-plus" onclick="addTextareaCommitment();"></i>
						<i class="far fa-trash-alt" onclick="removeTextareaCommitment();"
							id="introduceRemoveCommitmentBtn"></i> -->
					</div>

					<!-- HOWTOBUY -->
					<div class="admin-description-group"
						id="admin-description-group-introduce">
						<label for="introduce-howtobuy-product">Cách mua: </label>
						<?php
include "../assets/php/update-howtobuy-product/update-howtobuy-product19.php"
?>
						<textarea id="introduce-howtobuy-product"
							name="introduce-howtobuy-product"
							placeholder="Nhập cách thức mua hàng..."
							class="introduce-howtobuy-product">
<?php
include "../assets/php/howtobuy-product/howtobuy-product19.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#introduce-howtobuy-product"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
						<!--
						<i class="fas fa-plus" onclick="addTextareaHowtobuy();"></i>
						<i class="far fa-trash-alt" onclick="removeTextareaHowtobuy();"
							id="introduceRemoveHowtobuyBtn"></i> -->
					</div>

					<!-- CONTACT INFO -->
					<div class="admin-description-group"
						id="admin-description-group-introduce">
						<label for="introduce-contact-info-product">Liên lạc: </label>
						<?php
include "../assets/php/update-contact-info/update-contact-info19.php"
?>
						<textarea id="introduce-contact-info-product"
							name="introduce-contact-info-product"
							placeholder="Nhập cách thức liên lạc..."
							class="introduce-contact-info-product">
<?php
include "../assets/php/contact-info/contact-info19.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#introduce-contact-info-product"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
						<!--
						<i class="fas fa-plus" onclick="addTextareaContact();"></i>
						<i class="far fa-trash-alt" onclick="removeTextareaContact();"
							id="introduceRemoveContactBtn"></i> -->
					</div>

					<!-- SIZE -->
					<div class="admin-description-group" id="admin-size-group-introduce">
						<label for="introduce-size-product">Kích thước: </label>
						<?php
include "../assets/php/update-size-product/update-size-product19.php"
?>
						<input type="text" id="introduce-size-product"
							class="introduce-size-product" name="introduce-size-product"
							placeholder="Nhập kích thước sản phẩm..." value="<?php
include "../assets/php/size-product/size-product19.php"
?>">
						<i class="fas fa-plus" onclick="addSIInput();"></i>
						<i class="far fa-trash-alt" onclick="removeSIInput();"
							id="sizeSIRemoveBtn"></i>
					</div>

					<!-- COLOR -->
					<div class="admin-description-group" id="admin-color-group-introduce">
						<label for="introduce-color-product">Màu: </label>
						<?php
include "../assets/php/update-color-product/update-color-product19.php"
?>
						<input type="text" id="introduce-color-product"
							class="introduce-color-product" name="introduce-color-product"
							placeholder="Nhập màu sản phẩm..." value="<?php
include "../assets/php/color-product/color-product19.php"
?>">
						<i class="fas fa-plus" onclick="addCIInput();"></i>
						<i class="far fa-trash-alt" onclick="removeCIInput();"
							id="colorCIRemoveBtn"></i>
					</div>

					<!-- WEIGHT -->
					<div class="admin-description-group"
						id="admin-weight-group-introduce">
						<label for="introduce-weight-product">Trọng lượng: </label>
						<?php
include "../assets/php/update-weight-product/update-weight-product19.php"
?>
						<input type="text" id="introduce-weight-product"
							class="introduce-weight-product" name="introduce-weight-product"
							placeholder="Nhập trọng lượng sản phẩm..." value="<?php
include "../assets/php/weight-product/weight-product19.php"
?>">
						<i class="fas fa-plus" onclick="addWIInput();"></i>
						<i class="far fa-trash-alt" onclick="removeWIInput();"
							id="weightWIRemoveBtn"></i>
					</div>

					<input type="submit" value="Lưu" class="btn"
						name="btnSaveDescription">
				</form>
			</div>
		</div>

		<?php
include "../assets/php/component/footer-news.php"
?>
	</div>

	<button id="scroll-btn">
		<img src="../assets/img/scrollToTop.png" alt="scroll" />
	</button>

	<?php
include "../assets/php/component/care.php"
?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
	<script src="../assets/js/slick.js" async defer></script>
	<script src="../assets/js/scroll.js" async defer></script>
	<script src="../node_modules/slick-carousel/slick/slick.js"></script>
	<script src="../assets/js/modal-wrapper.js" async defer></script>
	<script src="../assets/js/add-remove.js"></script>
</body>

</html>