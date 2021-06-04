-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 10:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16838387_dbcategorynews`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginsignup`
--

CREATE TABLE `loginsignup` (
  `id` int(50) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loginsignup`
--

INSERT INTO `loginsignup` (`id`, `fullname`, `username`, `phone`, `email`, `password`) VALUES
(1, '', 'admin1', 0, '', 'c4ca4238a0b923820dcc509a6f75849b'),
(45, 'Hoang Sang', 'hoangsang', 776689228, 'hoangsang.nguyen2001a@gmail.com', '60665c53a179853677f221ccfe7bd949');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `author`) VALUES
('authornews1', 'Admin1'),
('authornews2', 'Admin1'),
('authornews3', 'Admin1'),
('authornews4', 'Admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontent`
--

CREATE TABLE `tblcontent` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcontent`
--

INSERT INTO `tblcontent` (`id`, `content`) VALUES
('categoryNews1', '<p>Tháng trước, Nike đã chia sẻ các phiên bản “hiện đại hóa” của Air Max 97 Ultra được người hâm mộ yêu thích, dự kiến ​​sẽ phát hành vào mùa thu. Có vẻ như Nike đã phải ra mắt sớm hơn, với “Triple Black” trong số những phiên bản đầu tiên được lên kệ ngày hôm nay. Với một cấu hình đơn sắc hoàn toàn, và đã loại bỏ các vật liệu dư thừa được nhìn thấy trong “người tiền nhiệm” của nó, màu “đen nguyên con” tự hào có một cái nhìn nhẹ nhàng, tinh gọn hơn. Giá retail 160 USD</p>'),
('categoryNews2', '<p>Adidas đã mang lại hình ảnh ClimaCOOL cổ điển của họ từ đầu những năm 2000 vào mùa hè năm ngoái, nhưng không có nhiều ảnh hưởng như “ba sọc” mong đợi. Có lẽ đó là do sự nổi lên của NMD và Ultra Boost, nhưng bạn vẫn có thể mua ClimaCool 1 rẻ hơn giá bán lẻ tại một số cửa hàng. Tất cả những thay đổi này sẽ sớm thay đổi nhờ vào việc giới thiệu Adidas ClimaCOOL 02/17 đã sẵn sàng cho đường phố. Upper slip-on đơn giản . Giao diện này tương tự như những gì mà Adidas Originals đã thực hiện với đường EQT nhờ một bộ đế giăng bị rách và một hồ sơ đơn giản nhưng sạch sẽ với số lượng chính xác của nguồn cảm hứng OG.</p>'),
('categoryNews3', '<p>Từ khi ra mắt với phần upper chỉ trên nền đen và trắng, adidas AlphaBounce giờ đây đã sẵn sàng kết hợp với những họa tiết sặc sỡ và chuyển đổi màu sắc XENO độc đáo. AlphaBounce trở nên sáng sủa hơn bao giờ hết trong một gói Reflective hoàn toàn mới. Đưa ra những phiên bản bắt mắt cho cả nam và nữ có tính năng phản chiếu ở phần upper, viền cổ và trên lưỡi gàAlphaBounce sẽ sang lên như chưa bao giờ. Ra mắt ba màu black, silver và tan cho nam và hai màu black và tan cho nữ</p>'),
('categoryNews4', '<p>Quên adidas NMD ‘Raw Pink’ đắt đỏ đi, đôi sneaker màu ‘hường’ này cũng yêu không kém mà giá rất phải chăng. Chắc hẳn chúng ta vẫn còn nhớ, mẫu sneaker NMD R1 màu ‘hường’ của adidas đã ‘làm mưa làm gió’ khắp nơi và đôi lúc đã trở thành chuẩn mực cho những cô nàng chịu chơi (hoặc có bạn trai/chồng siêu tinh tế đem mua tặng vào ngày lễ).</p><p>Không thể phủ nhận rằng NMD có thiết kế rất đẹp, lại thanh thoát và dễ mix/match cùng gần như toàn bộ tủ áo quần, phụ kiện của chị em.</p><p>Tuy nhiên, số lượng phát hành nhỏ giọt cùng sức hút quá lớn nên adidas NMD R1 ‘Raw Pink’ bị đẩy giá lên rất cao,cùng với độ hiếm là hàng giả hàng nhái tràn lan khắp nơi.</p><p>Mùa hè oi bức đã đến, nhưng độ ‘hot’ của thời trang và phụ kiện mang phối màu pastel vẫn chưa hề dịu xuống. Mới đây, adidas đã đa dạng hóa sự lựa chọn của hội “chị em bạn dì” bằng cách cho ra mắt phối màu hồng pastel, dành riêng cho nữ của mẫu giày AlphaBounce EM.</p><p>Mẫu giày AlphaBounce được adidas cho ra mắt lần đầu tiên vào 6/2016, với mức giá rất dễ chịu: 110 USD (khoảng 2,5 triệu đồng), rẻ hơn adidas NMD R1 “Raw Pink” rất nhiều.</p><p>Adidas AlphaBounce vốn là mẫu giày chạy, được kỳ vọng sẽ đem đến cho người dùng những trải nghiệm tốt và mới lạ với hai chất liệu rất độc đáo: thân giày bằng lưới thoáng mát, bộ đế Bounce “nảy” và cực kỳ êm ái. (Bạn có thể tìm hiểu thêm về adidas AlphaBounce tại đây).</p><p>Chắc hẳn chúng ta vẫn còn nhớ, mẫu sneaker NMD R1 màu “hường” của adidas đã “làm mưa làm gió” khắp nơi và đôi lúc đã trở thành chuẩn mực cho những cô nàng chịu chơi (hoặc có bạn trai/chồng siêu tinh tế đem mua tặng vào ngày lễ).</p><p>Không thể phủ nhận rằng NMD có thiết kế rất đẹp, lại thanh thoát và dễ mix/match cùng gần như toàn bộ tủ áo quần, phụ kiện của chị em.</p><p>Tuy nhiên, số lượng phát hành nhỏ giọt cùng sức hút quá lớn nên adidas NMD R1 “Raw Pink” bị đẩy giá lên rất cao, cùng với độ hiếm là hàng giả hàng nhái tràn lan khắp nơi.</p><p>Mùa hè oi bức đã đến, nhưng độ ‘hot’ của thời trang và phụ kiện mang phối màu pastel vẫn chưa hề dịu xuống. Mới đây, adidas đã đa dạng hóa sự lựa chọn của hội “chị em bạn dì” bằng cách cho ra mắt phối màu hồng pastel, dành riêng cho nữ của mẫu giày AlphaBounce EM.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE `tblimage` (
  `id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`id`, `image`) VALUES
('imageNews1', 'nike_shoe_banner.jpg'),
('imageNews2', '1606729803-poster-giay-3.jpg'),
('imageNews3', 'download.jpg'),
('imageNews4', 'poster-giay-just-do-it.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbltime`
--

CREATE TABLE `tbltime` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltime`
--

INSERT INTO `tbltime` (`id`, `time`) VALUES
('newsdatetime1', '2021-06-03'),
('newsdatetime2', '2021-05-25'),
('newsdatetime3', '2021-05-25'),
('newsdatetime4', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbltitle`
--

CREATE TABLE `tbltitle` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltitle`
--

INSERT INTO `tbltitle` (`id`, `title`) VALUES
('newsTitle1', 'Nike ra mắt Air Max 97 Ultra Triple Black'),
('newsTitle2', 'Adidas ClimaCool 02/21'),
('newsTitle3', 'Adidas AlphaBounce trở nên “hào nhoáng” hơn bao giờ hết'),
('newsTitle4', 'Sneaker màu hồng cực Hot giá rất phải chăng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginsignup`
--
ALTER TABLE `loginsignup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontent`
--
ALTER TABLE `tblcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblimage`
--
ALTER TABLE `tblimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltime`
--
ALTER TABLE `tbltime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltitle`
--
ALTER TABLE `tbltitle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginsignup`
--
ALTER TABLE `loginsignup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
