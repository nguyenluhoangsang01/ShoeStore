<input type="checkbox" id="modal-checkbox" hidden>
<label for="modal-checkbox" class="bars">
	<i></i>
</label>
<div class="modal-wrapper" id="modal-wrapper">
	<div class="modal-body">
		<div class="profile">
			<?php
include "avatar/update-component.php"
?>
			<form action="" method="POST" enctype="multipart/form-data">
				<label class="avatar" for="avatar">
					<img src="../img/<?php
include "avatar/avatar.php"
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
			<a href="../../index.php">
				<li class="modal-body__list-item">
					<i class="fas fa-home"></i> Trang chủ
				</li>
			</a>

			<a href="introduce.php">
				<li class="modal-body__list-item">
					<i class="fas fa-users"></i> Giới thiệu
				</li>
			</a>

			<a href="contact.php">
				<li class="modal-body__list-item">
					<i class="fas fa-id-card"></i> Liên hệ
				</li>
			</a>

			<a href="category-news.php">
				<li class="modal-body__list-item">
					<i class="fas fa-newspaper"></i> Tin tức
				</li>
			</a>

			<a href="men's-shoes.php">
				<li class="modal-body__list-item">
					<i class="fas fa-shoe-prints"></i> Giày nam
				</li>
			</a>

			<a href="women's-shoes.php">
				<li class="modal-body__list-item">
					<i class="fas fa-shoe-prints"></i> Giày nữ
				</li>
			</a>

			<a href="../../signup.php">
				<li class="modal-body__list-item">
					<i class="fas fa-user-plus"></i> Đăng ký
				</li>
			</a>

			<a href="../../login.php">
				<li class="modal-body__list-item">
					<i class="fas fa-sign-in-alt"></i> Đăng nhập
				</li>
			</a>
			<a href="../../logout.php">
				<li class="modal-body__list-item">
					<i class="fas fa-sign-out-alt"></i> Đăng xuất
				</li>
			</a>
		</ul>
	</div>
</div>