<?php
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}
?>
<header class="header-wrapper">
	<div class="header-top">
		<div class="header-top__left">
			Chào mừng đến với Thu Thủy Shoe Store !
		</div>
		<div class="header-top__right">
			<ul class="header_nav">
				<a href="../assets/php/introduce.php" class="nav-link">
					<li class="nav-bar-item">About</li>
				</a>
				<a href="../assets/php/contact.php" class="nav-link">
					<li class="nav-bar-item">Contact</li>
				</a>
				<a href="../signup.php" class="nav-link">
					<li class="nav-bar-item">sign up</li>
				</a>
				<a href="../login.php" class="nav-link">
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
			<a href="../index.php">
				<img src="../assets/img/logo.png" alt="Logo" class="logo" />
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
				<label for="modal-checkbox" class="bars">
					<i></i>
				</label>
				<div class="modal-wrapper" id="modal-wrapper">
					<div class="modal-body">
						<div class="profile">
							<?php
include "../assets/php/avatar/update-admin.php"
?>
							<form action="" method="POST" enctype="multipart/form-data">
								<label class="avatar" for="avatar">
									<img src="../assets/img/<?php
include "../assets/php/avatar/avatar.php"
?>" alt="avatar">
									<input type="file" name="avatar" id="avatar" hidden>
								</label>
								<div class="status">
									<i class="fas fa-circle"></i>
									<div class="status-account">Đang hoạt động</div>
								</div>
								<div class="username"><?php echo $_SESSION['username'] ?></div>
								<button type="submit" name="saveAvatar" class="btn"><i
										class="fas fa-check"></i></button>
							</form>
						</div>

						<ul class="modal-body__list">
							<a href="../index.php">
								<li class="modal-body__list-item">
									<i class="fas fa-home"></i> Trang chủ
								</li>
							</a>

							<a href="../assets/php/introduce.php">
								<li class="modal-body__list-item">
									<i class="fas fa-users"></i> Giới thiệu
								</li>
							</a>

							<a href="../assets/php/contact.php">
								<li class="modal-body__list-item">
									<i class="fas fa-id-card"></i> Liên hệ
								</li>
							</a>

							<a href="../assets/php/category.php">
								<li class="modal-body__list-item">
									<i class="fas fa-newspaper"></i> Tin tức
								</li>
							</a>

							<a href="../assets/php/men's-shoes.php">
								<li class="modal-body__list-item">
									<i class="fas fa-shoe-prints"></i> Giày nam
								</li>
							</a>

							<a href="../assets/php/women's-shoes.php">
								<li class="modal-body__list-item">
									<i class="fas fa-shoe-prints"></i> Giày nữ
								</li>
							</a>

							<a href="../signup.php">
								<li class="modal-body__list-item">
									<i class="fas fa-user-plus"></i> Đăng ký
								</li>
							</a>

							<a href="../login.php">
								<li class="modal-body__list-item">
									<i class="fas fa-sign-in-alt"></i> Đăng nhập
								</li>
							</a>
							<a href="../logout.php">
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
				<a href="../index.php">
					<li class="header-bottom_item-left">TRANG CHỦ</li>
				</a>
				<a href="../assets/php/introduce.php">
					<li class="header-bottom_item-left">GIỚI THIỆU</li>
				</a>

				<a href="../assets/php/men's-shoes.php">
					<li class="header-bottom_item-left"><?php
include "../assets/php/category-product/category-product1.php"
?></li>
				</a>
			</ul>

			<ul class="header-bottom__nav-right">
				<a href="../assets/php/women's-shoes.php" class="bgc">
					<li class="header-bottom_item-right"><?php
include "../assets/php/category-product/category-product2.php"
?></li>
				</a>
				<a href="../assets/php/category-news.php">
					<li class="header-bottom_item-right">TIN TỨC</li>
				</a>
				<a href="../assets/php/contact.php">
					<li class="header-bottom_item-right">LIÊN HỆ</li>
				</a>
			</ul>
		</div>
	</div>
</header>