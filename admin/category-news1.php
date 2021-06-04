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
	<link rel="stylesheet" href="../assets/css/category-news/category-news.css" />
	<link rel="stylesheet" href="../assets/css/women's-shoes/women's-shoes.css" />
	<link rel="stylesheet"
		href="../assets/css/detail-product/detail-product.css" />
	<script
		src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
	</script>
</head>

<body>
	<!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

	<?php
include "../assets/php/component/news-admin-header.php"
?>

	<div class="main-container">
		<section class="title-page" style="margin-top: -2rem;	">
			<p>
				<?php
include "../assets/php/update-news-title/update-news-title1.php"
?>
				<a href="../index.php">Trang chủ</a> /
				<a href="../assets/php/category-news.php">Tin tức</a> / &nbsp
				<a href="../assets/php/news1.php">
					<?php
include "../assets/php/news-title/news-title1.php"
?>
				</a>&nbsp
				<a href="../admin/category-news1.php">/ admin</a>
			</p>
		</section>

		<div class="grid wide">
			<div class="row">
				<form method="POST" class="admin-news" enctype="multipart/form-data">

					<div class="admin-heading">Cập nhật tin tức</div>
					<!-- TITLE -->
					<div class="input-wrap" id="admin-news-title">
						<label for="title-news" style="margin-bottom: -2.5rem; ">Tiêu đề:
						</label>
						<?php
include "../assets/php/update-news-title/update-news-title1.php"
?>
						<input type="text" id="title-news" name="title-news"
							class="title-news input-text" placeholder="Nhập tiêu đề..." value="<?php
include "../assets/php/news-title/news-title1.php"
?>">
					</div>

					<!-- TIME -->
					<div class="input-wrap" id="admin-news-time">
						<label for="time-news">Thời gian: </label>
						<?php
include "../assets/php/update-news-time/update-news-time1.php"
?>
						<input type="date" id="time-news" name="time-news"
							class="time-news input-text"
							placeholder="Nhập thời gian cập nhật..." value="<?php
include "../assets/php/news-time/news-time1.php"
?>">
					</div>

					<!-- AUTHOR -->
					<div class="input-wrap" id="admin-news-author">
						<label for="author-news">Tác giả: </label>
						<?php
include "../assets/php/update-news-author/update-news-author1.php"
?>
						<input type="text" id="author-news" name="author-news"
							class="author-news input-text"
							placeholder="Nhập tên tác giả cập nhật..." value="<?php
include "../assets/php/news-author/news-author1.php"
?>">
					</div>

					<!-- CONTENT -->
					<div class="input-wrap" id="admin-news-content"
						style="  width: 762px;">
						<label for="content-news">Nội dung: </label>
						<?php
include "../assets/php/update-news-content/update-news-content1.php"
?>
						<textarea id="content-news" name="content-news"
							class="content-news input-text"
							placeholder="Nhập nội dung cập nhật..." row="10"> <?php
include "../assets/php/news-content/news-content1.php"
?>
						</textarea>
						<script>
						ClassicEditor
							.create(document.querySelector("#content-news"))
							.catch(
								(error) => {
									console.log(error);
								}
							);
						</script>
					</div>

					<!-- IMAGES -->
					<div class="input-wrap" id="admin-news-img">
						<label for="img-news" style="margin-bottom: -0.5rem; ">Hình ảnh:
						</label>
						<div class="row">
							<div class="col l-7">
								<?php
include "../assets/php/update-news-image/update-news1-image.php"
?>
								<label for="img-news1" class="edit-img1">
									<img src="../assets/img/<?php
include "../assets/php/news-image/news-image1.php"
?>" alt="" id="img1">

								</label>
							</div>
							<div class="col l-5">
								<input type="file" id="img-news1" name="img-news"
									class="img-news input-text">
							</div>
						</div>

					</div>

					<input type="submit" value="Lưu" class="btn" name="btnSaveNews">

				</form>
			</div>
		</div>

		<div class="change-page" style="width: 1140px; margin: 0 auto;">
			<div class="left"></div>

			<a href="category-news2.php" class="">
				<div class="right">
					<?php
include "../assets/php/news-title/news-title2.php"
?>
					<i class="fas fa-arrow-right"></i>
				</div>
			</a>
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
	<script
		src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js">
	</script>
</body>

</html>