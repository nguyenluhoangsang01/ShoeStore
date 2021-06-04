<?php
if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
}
?>
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
				<img src="../img/logo.png" alt="Logo" class="logo" />
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
include "slide-bar.php"
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
				<a href="men's-shoes.php" class="bgc">
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
				<a href="contact.php">
					<li class="header-bottom_item-right">LIÊN HỆ</li>
				</a>
			</ul>
		</div>
	</div>
</header>