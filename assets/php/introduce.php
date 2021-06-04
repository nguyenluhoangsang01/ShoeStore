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
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<style>
	.wrapper-main-wap .product-container .product-a__img .news-content+p {
		top: 1rem;
	}

	.feedback {
		width: 100%;
		height: 265px;
		padding: 3rem;
		box-shadow: 0 0 20px 0 rgb(29 31 89 / 10%);
		position: relative;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}

	.feedback__avatar {
		width: 8rem !important;
		height: 8rem !important;
		border-radius: 50%;
		position: absolute;

	}

	.feedback__username {
		font-size: 2.4rem;
		line-height: 1.3;
		color: var(--primary-color);
		font-weight: 700;
	}

	.feedback__avatar {
		top: 0;
		transform: translateY(-50%);
	}

	.feedback__role {
		font-size: 1.8rem;
		margin-bottom: 3rem;
		font-weight: 500;
		margin-top: 1rem;
		font-style: italic;
	}

	.feedback__content {
		text-align: center;
		line-height: 1.3;
		quotes: "<"">";
		padding: 0 3rem;
	}

	.feedback+.feedback {
		margin-top: 8rem;
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
					<a href="introduce.php" class="bgc">
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
					<a href="contact.php">
						<li class="header-bottom_item-right">LIÊN HỆ</li>
					</a>
				</ul>
			</div>
		</div>
	</header>

	<div class="main-container">
		<div class="grid wide">
			<div class="row" style="display: flex; justify-content: center">
				<div class="category-archives">
					<span class="cursor-text"><a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a> -
						GIÀY
						THỂ THAO THỜI TRANG GIÁ TỐT</span>
				</div>
			</div>
		</div>

		<div class="row description">
			<div class="content-introduce grid wide introduce">
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Một danh nhân đã từng nói: <i> “Một đôi giày có thể thay đổi cuộc đời
						bạn”</i>. Quả thật, đôi giày tốt sẽ làm bạn
					thoải mái, một đôi giày đẹp sẽ khiến bạn tự tin.
				</p>

				<blockquote style="display: block; ">
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Nếu đặt một đôi giày thể thao bện cạnh một đôi cao gót, các bạn nữ
						sẽ chọn đôi giầy cao gót để tôn dáng.
					</p>
					<p class="introduce-content cursor-text"
						style="text-indent: 0; margin-bottom: 0; text-indent: 5rem; ">
						Nếu đặt một đôi giày thể thao bên cạnh một đôi giày da, giầy tây,
						các bạn nam công sở ắt hẳn sẽ không chọn
						giày
						thể thao.
					</p>
				</blockquote>

				<p class="introduce-content">
					Tuy nhiên, đẹp thì đẹp thật, nhưng lại không hữu dụng khi cần thiết,
					bạn sẽ không thể bảo vệ bạn chân khô ráo,
					vững vàng khi chạy vội trong mưa, bạn cũng sẽ không thể thuận tiện
					chơi thể thao cùng sếp, cùng đồng nghiệp
					khi
					phải mang những đôi giày công sở đắt tiền mà lại còn sợ hỏng, cũng như
					khiến đôi chân bạn đau nhức không
					ngừng.
				</p>

				<p class="introduce-content">
					Chọn giày cũng như chọn hành trình ta bước, một đôi giày thể thao tốt
					sẽ cho bạn thỏa sức khám phá và mạo
					hiểm,
					chạy nhảy và hoạt động cho cả ngày dài năng động mà không biết mệt
					mỏi. Một đôi giày thể thao tốt sẽ luôn đồng
					hành cùng bạn trên mọi nẻo đường, cho dù có nắng nóng, mưa giông, nó
					cũng sẽ đi cùng bạn, chăm sóc cho đôi
					chân
					bạn luôn khô ráo và thoáng mát.
				</p>

				<p class="introduce-content">
					Một đôi giày thể thao đẹp sẽ giúp bạn tự tin dạo bước với bạn bè khi
					đi chơi, đi du lịch, giúp cuộc sống hằng
					ngày của bạn thêm vui vẻ và thành công đúng hem ạ.
				</p>

				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Nhưng làm sao để hữu một đôi giày thể thao giá rẻ vừa đẹp, vừa thời
						trang và chất lượng ? Hãy cùng bước vào
						thế giới tổng quan của <a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a> để
						trải nghiệm thử nhé
						^_^
					</p>
				</blockquote>
			</div>
		</div>

		<div class="grid wide"
			style="pading-top: 7rem; border-top: 1px solid rgba(0, 0, 0, 0.2); margin-top: 5rem;">
			<div class="row" style="display: flex; justify-content: center">
				<div class="category-archives cursor-text">
					<span>Bộ sưu tập giày thể thao đa dạng tại <a
							href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a></span>
				</div>
			</div>
		</div>

		<div class="row grid wide description">
			<div class="introduce ">
				<p class="heading">Về thương hiệu giày</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Hiện tại Shop đang kinh doanh mẫu giày hot nhất của thương hiệu nổi
					tiếng Nike với chất lượng cải thiện liên
					tục để hoàn hảo nhất cho Quý khách hàng của mình.
				</p>
				<p class="introduce-content">
					Ngoài ra, <a href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a> vẫn
					luôn cập nhật thêm các mẫu mới nhất thị trường của nhiều thương hiệu
					nhằm mục
					đích đáp
					ứng nhu cầu sở hữu các đôi giày vip nhất của các bạn đam mê dòng giày
					sneaker nữa nhé.
				</p>
			</div>

			<div class="introduce">
				<p class="heading">Về kiểu dáng</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Sản phẩm tại <a href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
					có rất nhiều kiểu dáng & mẫu mã khác nhau, đa dạng về chiều cao, màu
					sắc
					& nhu
					cầu sử dụng. Có nhiều bạn sẽ thích kiểu giày cổ cao, giày cổ thấp, hay
					chất liệu da trơn, da nhăn hoặc da lộn.
					Một số bạn thì lại thích vải mềm, họa tiết bông hoa hay vải lưới cho
					thoáng mát khi sử dụng trong vài giờ liên
					tục.
				</p>
				<p class="introduce-content">
					Hiểu được mục đích của các bạn trẻ hiện đại, <a
						href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a> luôn
					cập nhật đủ loại giày với đủ kiểu
					dáng,
					phong cách cá tính khác nhau để khi bạn tìm đến bạn sẽ tìm được cho
					mình những đôi giày tuyệt vời nhất trong
					tủ đồ của bạn.
				</p>
			</div>

			<div class="introduce">
				<p class="heading">Về tính năng</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Nếu bạn là người thích các hoạt động thể thao, tập thể dục, chạy bộ
					mỗi ngày thì các mẫu Alphabounce, Ultra
					boost sẽ là sự lựa chọn tuyệt vời nhất - <i> "Theo phản hồi của những
						khách đã mua hàng tại
						<a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>"</i>.
				</p>
				<p class="introduce-content">
					Còn đối với những bạn chỉ cần đôi giày để đi chơi, đi dạo với bạn bè
					(thời gian sử dụng ngắn) thì <i> Prophere </i>,
					<i>Balenciaga </i>, <i>Gucci </i>, <i>Vans</i> hoặc<i> Converse </i>
					mang phong cách tối giản nhưng
					không kém phần sang trọng có thể làm hài
					lòng bạn.
				</p>
				<p class="introduce-content">
					Riêng các bạn học sinh thường chọn cho mình những mẫu giày trắng (hình
					như do quy định của nhà trường thì phải
					^_^) thì sẽ rất thích các mẫu giày <i> Stan Smith </i>,<i> McQueen
					</i> với form giày
					rất chuẩn, bền đẹp dù sử dụng lâu dài.
				</p>
				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Ngoài các tính năng mà <a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
						liệt kê ở trên thì vẫn sẽ có nhiều bạn có
						những nhu cầu sử
						dụng khác nữa.
						Nếu bạn vẫn đang loay hoay chưa lựa chọn được mẫu giày nào phù hợp
						với mình thì bạn có thể liên hệ với số
						Hotline <a href="tel:0776689228"
							style="color: var(--logo-color); font-size: 1.8rem; "><b>0776689228</b></a>
						hoặc inbox
						<a href="https://www.facebook.com/nlhsang/"
							style="color: #0980ec; font-size: 1.8rem; "><b>https://www.facebook.com/nlhsang/</b></a>.
						Đội ngũ
						nhân viên sẽ
						tận tình giải đáp
						và tư vấn mẫu giày tốt nhất cho Quý khách ạ.
					</p>
				</blockquote>
			</div>

			<div class=" introduce">
				<p class="heading">Về giới tính</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					<b>Giày thể thao nữ</b> thường sẽ chọn các màu nhẹ nhàng như
					<i>hồng</i>, <i>xanh dương</i>, <i>xanh mint</i>, <i>trắng</i>,
					<i>màu vàng</i> hoặc
					<i>màu kem</i>. Các bạn cá tính hơn sẽ chọn cho mình màu đỏ, đen
					trắng, xám,
					...
				</p>
				<p class="introduce-content cursor-text">
					<b>Giày thể thao nam</b> luôn mang phong cách mạnh mẽ, năng động.
					Chính vì thế mà <i>màu đen toàn bộ </i>,<i> đen
						trắng</i>,<i> xám bạc</i>,
					<i>rêu olive</i> luôn được các bạn nam lựa chọn.
				</p>
				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						=> Tất cả tạo nên một bộ sưu tập giày vô cùng đa dạng, phong phú,
						đầy
						đủ size và màu sắc, giúp cho các bạn
						trẻ có nhiều sự lựa chọn hơn tùy theo phong cách của mỗi người.
					</p>
				</blockquote>
			</div>

			<div class="img-introduce">
				<img src="../img/i1.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i2.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i3.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i4.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i5.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i6.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i7.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i8.jpg" alt="introduce">
			</div>
			<div class="img-introduce">
				<img src="../img/i9.jpg" alt="introduce">
			</div>

			<div class="introduce">
				<p class="heading">Giá cả cực ưu đãi & cạnh tranh nhất thị trường</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Bên cạnh đó, <a href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
					luôn đặt mình vào tâm lý và quyền lợi của khách hàng để cập nhật những
					mẫu giày thể thao
					chất lượng tốt nhất mà vẫn đáp ứng tính thời trang, mẫu mã đẹp & mới
					nhất theo xu hướng. Điều đặc biệt là
					không thua kém gì hàng chính hãng nhưng giá cả vẫn cực kì hấp dẫn, bao
					sập sàn so với các shop khác.
				</p>
				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Tại <a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>,
						các
						đôi giày sneaker giá chỉ dao động tầm từ 900.000 - 6.000.000 , rẻ
						hơn rất nhiều so với giá retail của các
						dòng chính hãng hay giá resell được bán ra tại các shop ở Việt Nam.
					</p>
				</blockquote>
			</div>

			<div class="introduce">
				<p class="heading">Xây dựng thương hiệu bền vững & lắng nghe góp ý khách
					hàng</p>
				<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
					Tuy rằng thương hiệu giày thể thao giá rẻ <a
						href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
					không được nổi trội
					như những shop giày nổi tiếng khác
					nhưng không vì thế mà tính chuyên nghiệp lại thua kém. Nhằm tạo sự
					tiện lợi tối đa mua sắm cho khách hàng, <a
						href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a> luôn
					tiếp nhận
					nhu cầu của người dùng để phát triển hệ thống bán hàng online dễ sử
					dụng nhất, giao hàng nhanh đến tận tay
					người tiêu dùng trên toàn quốc, 24/7 bất kể nắng mưa.
				</p>
				<p class="introduce-content">
					Ngoài ra, <a href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
					cũng cam kết chất lượng sản phẩm khi giao hàng, khách hàng hài lòng
					mới thanh toán, và có kèm các chương trình
					ưu đãi dành riêng cho khách hàng nội thành và ngoại thành.
				</p>
				<p class="introduce-content">
					Đến với <a href="http://shoeestoree.tk/"
						style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>, đội
					ngũ nhân viên của chúng tôi luôn tận tâm tư vấn giúp các bạn tìm được
					những đôi giày thể thao yêu thích, phù
					hợp với nhu cầu và phong cách của mình.
				</p>
				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Phương châm hoạt động: <a href="http://shoeestoree.tk/"
							style="color: var(--primary-color)"><b>THUTHUYSHOESTORE</b></a>
						luôn muốn đem những sản phẩm chất lượng
						tuyệt vời nhất với giá thành tốt nhất cho quý khách hàng của mình.
					</p>
				</blockquote>
			</div>

			<div class="introduce">
				<p class="heading">Phản hồi</p>
				<div class="grid wide" style="margin-top: 6rem;">
					<div class="row">
						<div class="col l-6" data-aos="fade-right"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="feedback">
								<img src="../img/avatar.jpg" alt="" class="feedback__avatar">
								<div class="feedback__username">Iris Apfel</div>
								<div class="feedback__role">Admin</div>
								<p class="feedback__content"> Nếu tóc của bạn được làm đúng kiểu
									và bạn đang mang một đôi giày tốt, đảm bảo bạn sẽ thành công
									trong bất cứ lĩnh vực nào </p>
							</div>
						</div>

						<div class="col l-6" data-aos="fade-left"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="feedback">
								<img src="../img/avatar.jpg" alt="" class="feedback__avatar">
								<div class="feedback__username">Miuccia Prada</div>
								<div class="feedback__role">Admin</div>
								<p class="feedback__content">Mang những đôi giày với ý tưởng
									điên rồ thật tuyệt! Bạn sẽ cảm thấy mình tự do, phóng khoáng
									mà không trở nên quá ngu ngốc. Nhưng cũng với những thứ điên
									rồ ấy, nếu nó ở quá gần khuôn mặt bạn thì lại khác, thật kỳ
									quặc!</p>
							</div>
						</div>

						<div class="col l-6" style="margin-top: 5rem; "
							data-aos="fade-right" data-aos-anchor-placement="center-bottom"
							data-aos-duration="500">
							<div class="feedback">
								<img src="../img/avatar.jpg" alt="" class="feedback__avatar">
								<div class="feedback__username">Keira Knightley</div>
								<div class="feedback__role">Admin</div>
								<p class="feedback__content">Nếu tôi thích một đôi giày, tôi sẽ
									mua chúng bất kể chúng có size của tôi hay không</p>
							</div>
						</div>

						<div class="col l-6" style="margin-top: 5rem; " data-aos="fade-left"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<div class="feedback">
								<img src="../img/avatar.jpg" alt="" class="feedback__avatar">
								<div class="feedback__username">Beyoncé</div>
								<div class="feedback__role">Admin</div>
								<p class="feedback__content">Năm 13 tuổi, khi còn trong nhóm
									Destiny’s Child, chúng tôi được yêu cầu phải mang giày cao
									gót. Ban đầu, tôi thậm chí còn chẳng thể giữ cho đầu gối mình
									thẳng, nhưng cũng từ đó, tôi phải học cách nhảy trên những đôi
									giày cực cao</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="introduce">
				<blockquote>
					<p class="introduce-content cursor-text" style="text-indent: 5rem; ">
						Các bạn có thể liên hệ hoặc phản hồi góp ý với shop theo hotline <a
							href="tel:0776689228"
							style="color: var(--logo-color); font-size: 1.8rem; "><b>0776689228</b></a>,
						inbox qua facebook
						<a href="https://www.facebook.com/nlhsang/"
							style="color: #0980ec; font-size: 1.8rem; "><b>https://www.facebook.com/nlhsang/</b></a>
						hoặc đơn giản là
						đến trực tiếp tại cửa hàng theo địa chỉ: <a
							href="https://www.google.com/maps?ll=10.82719,106.703332&z=17&t=m&hl=en&gl=US&mapclient=embed&q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000">
							<b><a
									href="https://www.google.com/maps?ll=10.82719,106.703332&z=17&t=m&hl=en&gl=US&mapclient=embed&q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000">
									69/68 Đặng Thùy Trâm, P.13, Quận Bình
									Thạnh, TP. Hồ Chí Minh</a></b> </a>. Xin chân thành cảm ơn Quý
						khách!
					</p>
				</blockquote>
			</div>
		</div>

		<iframe class="map-introduce"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7923770186185!2d106.70114311521664!3d10.827194961214207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175288b870d57d1%3A0x4c6e58e94874db89!2zNjksIDY4IMSQLiDEkOG6t25nIFRodeG7syBUcsOibSwgUGjGsOG7nW5nIDEzLCBCw6xuaCBUaOG6oW5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmggNzAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1621569602841!5m2!1sen!2s"
			allowfullscreen="" loading="lazy"></iframe>

		<div class="wrapper-main-wap">
			<div class="main-container main-content">
				<div class="row"
					style="display: flex; justify-content: center; margin-top: -12.5rem;	">
					<div class="category-archives"><span>Tin tức</span></div>
				</div>

				<div class="product-container">
					<div class="grid wide">
						<div class="row" style="margin-top: -27rem;" data-aos="flip-up"
							data-aos-anchor-placement="center-bottom" data-aos-duration="500">
							<?php
include "component/news.php"
?>
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