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
-- Database: `id16838387_dbcategoryproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `category`) VALUES
('category1', 'Giày nam'),
('category2', 'Giày Nữ');

-- --------------------------------------------------------

--
-- Table structure for table `tblcode`
--

CREATE TABLE `tblcode` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcode`
--

INSERT INTO `tblcode` (`id`, `code`) VALUES
('code1', ' OJrB5LocK'),
('code10', 'JPlgANcIjg'),
('code11', 'jIgwVdpAFB'),
('code12', 'PISbjgDb'),
('code13', 'ePsuwxMxGC'),
('code14', 'SZXK1SPdHk'),
('code15', '5Wx6KzNme1'),
('code16', 'iqSROQiMih'),
('code17', 'Y8DaPwHs8J'),
('code18', 'vWL72Kf4qM'),
('code19', 'XyDucmhP'),
('code2', 'qbnjA10ooy'),
('code20', '8dXgNMla'),
('code3', 'f3EfPgSQ2K'),
('code4', 'fudBgaUkA4'),
('code5', 'dppHDVRKH1'),
('code6', '5OgqeFrwGz'),
('code7', 'DwpYGNYsyD'),
('code8', 'c9azsMB86W'),
('code9', 'vcPrdG3hgK');

-- --------------------------------------------------------

--
-- Table structure for table `tblcolor`
--

CREATE TABLE `tblcolor` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcolor`
--

INSERT INTO `tblcolor` (`id`, `color`) VALUES
('color1', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color10', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color11', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color12', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color13', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color14', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color15', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color16', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color17', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color18', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color19', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color2', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color20', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color3', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color4', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color5', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color6', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color7', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color8', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen'),
('color9', 'Đen, Nhung nâu, Nấm, Xám nhạt, Xám đen');

-- --------------------------------------------------------

--
-- Table structure for table `tblcommitment`
--

CREATE TABLE `tblcommitment` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commitment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcommitment`
--

INSERT INTO `tblcommitment` (`id`, `commitment`) VALUES
('commitment1', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.&nbsp;</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.&nbsp;</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment10', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment11', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment12', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment13', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment14', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment15', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment16', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment17', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment18', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment19', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment2', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment20', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment3', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment4', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment5', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment6', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment7', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment8', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>'),
('commitment9', '<p>Ship COD toàn quốc, FREE vận chuyển cho tất cả Quý khách mua online.</p><p>Giao hàng và thu tiền tận nơi. Quý khách được check hàng trước khi thanh toán.</p><p>Đổi hàng trong 7 ngày. (Áp dụng với sản phẩm chưa sử dụng, còn mạc, nguyên vẹn như khi nhận hàng)</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactinfo`
--

CREATE TABLE `tblcontactinfo` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contactinfo` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcontactinfo`
--

INSERT INTO `tblcontactinfo` (`id`, `contactinfo`) VALUES
('contactinfo1', '<p>Địa chỉ: <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a>&nbsp;</p><p>Điện&nbsp;thoại: <a href=\"tel:0776689228\">0776689228</a>&nbsp;</p><p>Email: <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com&nbsp;</a></p><p>Website: <a href=\"http://shoeestoree.tk\">http://shoeestoree.tk</a></p>'),
('contactinfo10', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo11', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo12', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo13', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo14', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo15', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo16', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo17', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo18', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo19', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo2', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk\">http://shoeestoree.tk</a></p>'),
('contactinfo20', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo3', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo4', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo5', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo6', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo7', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo8', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>'),
('contactinfo9', '<p><strong>Địa chỉ:</strong> <a href=\"https://www.google.com/maps?ll=10.82719,106.703332&amp;z=17&amp;t=m&amp;hl=en&amp;gl=US&amp;mapclient=embed&amp;q=69+68+%C4%90.+%C4%90%E1%BA%B7ng+Thu%E1%BB%B3+Tr%C3%A2m+Ph%C6%B0%E1%BB%9Dng+13+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+70000\">69/68 Đặng Thùy Trâm, P.13, Quận Bình Thạnh, TP. Hồ Chí Minh</a></p><p><strong>Điện&nbsp;thoại:</strong> <a href=\"tel:0776689228\">0776689228</a></p><p><strong>Email:</strong> <a href=\"mailto:hoangsang.nguyen2001a@gmail.com\">hoangsang.nguyen2001a@gmail.com</a></p><p><strong>Website:</strong> <a href=\"http://shoeestoree.tk/\">http://shoeestoree.tk</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblcost`
--

CREATE TABLE `tblcost` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sale` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcost`
--

INSERT INTO `tblcost` (`id`, `sale`, `cost`) VALUES
('productcost1', ' 2.300.000 VND', '3.600.000 VND'),
('productcost10', '5.900.000 VND', '8.900.000 VND'),
('productcost11', '2.300.000 VND', '3.600.000 VND'),
('productcost12', '765.000 VND', '900.000 VND'),
('productcost13', '807.000 VND', '950.000 VND'),
('productcost14', '4.300.000 VND', '5.999.000 VND'),
('productcost15', '1.200.000 VND', '2.400.000 VND'),
('productcost16', '1.100.000 VND', '1.600.000 VND'),
('productcost17', '2.900.000 VND', '4.300.000 VND'),
('productcost18', '3.300.000 VND', '6.600.000 VND'),
('productcost19', '1.000.000 VND', '2.000.000 VND'),
('productcost2', '1.100.000 VND', '2.000.000 VND'),
('productcost20', '2.300.000 VND', '5.900.000 VND'),
('productcost3', '2.300.000 VND', '4.800.000 VND'),
('productcost4', '5.050.000 VND', '6.000.000 VND'),
('productcost5', '2.000.000 VND', '2.300.000 VND'),
('productcost6', '1.300.000 VND', '1.600.000 VND'),
('productcost7', '1.400.000 VND', '2.800.000 VND'),
('productcost8', '1.300.000 VND', '2.800.000 VND'),
('productcost9', '1.800.000 VND', '3.600.000 VND');

-- --------------------------------------------------------

--
-- Table structure for table `tblhowtobuy`
--

CREATE TABLE `tblhowtobuy` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `howtobuy` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblhowtobuy`
--

INSERT INTO `tblhowtobuy` (`id`, `howtobuy`) VALUES
('howtobuy1', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy10', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy11', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy12', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy13', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy14', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy15', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy16', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy17', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy18', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy19', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy2', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy20', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy3', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy4', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy5', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy6', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy7', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy8', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>'),
('howtobuy9', '<p>Khách hàng MUA HÀNG tại SHOP, WEBSITE, GỌI ĐIỆN tới HOTLINE: <a href=\"tel:0776689228\">0776689228</a> hoặc INBOX FANPAGE của shop để được tư vấn.&nbsp;</p><p>Sau khi đặt hàng, trong vòng 30 phút sẽ có người liên hệ bạn để xác nhận và thỏa thuận thời gian giao hàng với bạn.&nbsp;</p><p>Shop miễn phí vận chuyển toàn quốc. Quý khách được phép kiểm tra hàng mới thanh toán nữa nhé.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE `tblimage` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`id`, `image`) VALUES
('avatar', 'avatar.jpg'),
('imageProduct1', 'NIKE-AIR-ZOOM-PEGASUS-34-600x600.jpg'),
('imageProduct10', 'Nike-Air-Presto-Mid-Utility-6.jpeg'),
('imageProduct11', '8.jpg'),
('imageProduct12', '2.jpg'),
('imageProduct13', '3.jpg'),
('imageProduct14', '4.jpg'),
('imageProduct15', '5.jpg'),
('imageProduct16', '6.jpg'),
('imageProduct17', '7.jpg'),
('imageProduct18', '8.jpg'),
('imageProduct19', '9.jpg'),
('imageProduct2', 'NIKE-FREE-TR-6-SPECTRUM-black-600x600.jpg'),
('imageProduct20', '10.jpg'),
('imageProduct3', 'NIKE-LUNARGLIDE-7-300x300.jpg'),
('imageProduct4', 'Air-Jordan-1-Low-Galaxy-3.jpg'),
('imageProduct5', 'NIKE-FREE-RN-FLYKNIT_2-600x600.jpg'),
('imageProduct6', 'NIKE-FREE-TR-5-PRINT-300x300.jpg'),
('imageProduct7', 'NIKE-FREE-TR-6-PRINT-300x300.jpg'),
('imageProduct8', 'NIKE-LUNARTEMPO-2-xanh-300x300.jpg'),
('imageProduct9', 'NIKE-AIR-MAX-2017-300x300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblintroduce`
--

CREATE TABLE `tblintroduce` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblintroduce`
--

INSERT INTO `tblintroduce` (`id`, `introduce`) VALUES
('introduce1', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce10', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce11', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce12', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce13', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce14', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce15', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ1</p>'),
('introduce16', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce17', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce18', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce19', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce2', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce20', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce3', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce4', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce5', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce6', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce7', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce8', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>'),
('introduce9', '<p>Công nghệ quai dệt Liteknit hiện đại mang đến sự thông thoáng tối đa cho đôi chân</p><p>Đế phylon cao cấp siêu nhẹ, đàn hồi tốt đem lại cảm giác êm ái khi di chuyển</p><p>Đế tiếp đất từ chất liệu cao su cao cấp cùng thiết kế rãnh ngang tăng độ</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblintroducetrademaker`
--

CREATE TABLE `tblintroducetrademaker` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introducetrademaker` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblintroducetrademaker`
--

INSERT INTO `tblintroducetrademaker` (`id`, `introducetrademaker`) VALUES
('introducetramaker1', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker10', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker11', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker12', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker13', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker14', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker15', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker16', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker17', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker18', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker19', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker2', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker20', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker3', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker4', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker5', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker6', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker7', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker8', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>'),
('introducetramaker9', '<p>Nike là một thương hiệu thể thao nổi tiếng về mặt chất lượng cũng như kiểu dáng thời trang. Vì yêu cầu của một người vận động viên phải thường xuyên luyện tập ở cường độ cao. Những sản phẩm do Nike sản xuất đều dựa trên những nhu cầu của người vận động viên nói riêng và người mặc nói chung.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsize`
--

CREATE TABLE `tblsize` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblsize`
--

INSERT INTO `tblsize` (`id`, `size`) VALUES
('size1', '38, 39, 40, 41, 42, 43, 44, 45'),
('size10', '38, 39, 40, 41, 42, 43, 44, 45'),
('size11', '38, 39, 40, 41, 42, 43, 44, 45'),
('size12', '38, 39, 40, 41, 42, 43, 44, 45'),
('size13', '38, 39, 40, 41, 42, 43, 44, 45'),
('size14', '38, 39, 40, 41, 42, 43, 44, 45'),
('size15', '38, 39, 40, 41, 42, 43, 44, 45'),
('size16', '38, 39, 40, 41, 42, 43, 44, 45'),
('size17', '38, 39, 40, 41, 42, 43, 44, 45'),
('size18', '38, 39, 40, 41, 42, 43, 44, 45'),
('size19', '38, 39, 40, 41, 42, 43, 44, 45'),
('size2', '38, 39, 40, 41, 42, 43, 44, 45'),
('size20', '38, 39, 40, 41, 42, 43, 44, 45'),
('size3', '38, 39, 40, 41, 42, 43, 44, 45'),
('size4', '38, 39, 40, 41, 42, 43, 44, 45'),
('size5', '38, 39, 40, 41, 42, 43, 44, 45'),
('size6', '38, 39, 40, 41, 42, 43, 44, 45'),
('size7', '38, 39, 40, 41, 42, 43, 44, 45'),
('size8', '38, 39, 40, 41, 42, 43, 44, 45'),
('size9', '38, 39, 40, 41, 42, 43, 44, 45');

-- --------------------------------------------------------

--
-- Table structure for table `tbltag`
--

CREATE TABLE `tbltag` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltag`
--

INSERT INTO `tbltag` (`id`, `tag`) VALUES
('tag1', 'NIKE'),
('tag10', 'nike'),
('tag11', 'NIKE'),
('tag12', 'nike'),
('tag13', 'nike'),
('tag14', 'nike'),
('tag15', 'nike1'),
('tag16', 'nike'),
('tag17', 'nike'),
('tag18', 'nike'),
('tag19', 'nike'),
('tag2', 'nike'),
('tag20', 'nike'),
('tag3', 'NIKE'),
('tag4', 'nike'),
('tag5', 'nike'),
('tag6', 'nike'),
('tag7', 'nike'),
('tag8', 'nike'),
('tag9', 'nike');

-- --------------------------------------------------------

--
-- Table structure for table `tbltitle`
--

CREATE TABLE `tbltitle` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltitle`
--

INSERT INTO `tbltitle` (`id`, `title`) VALUES
('productitle1', 'NIKE AIR ZOOM PEGASUS 34'),
('productitle10', 'NIKE AIR PRESTO MID UTILITY'),
('productitle11', 'NIKE SB DUNK LOW X DIOR GREY SAIL'),
('productitle12', 'Nike SB Dunk Low Neptune Green x Kasina'),
('productitle13', 'NIKE SB DUNK LOW BLACK WHITE'),
('productitle14', 'NIKE SB DUNK LOW CHICAGO'),
('productitle15', 'NIKE SB DUNK LOW PINK PIGEON'),
('productitle16', 'NIKE SB DUNK LOW PRO DARK RUSSET CEDAR'),
('productitle17', 'NIKE SB DUNK LOW SUMMIT WHITE WOLF GREY'),
('productitle18', 'NIKE SB DUNK LOW LASER ORANGE'),
('productitle19', 'NIKE SB DUNK LOW WHEAT'),
('productitle2', 'NIKE FREE TR 6 SPECTRUM'),
('productitle20', 'NIKE SB DUNK LOW TRAVIS SCOTT'),
('productitle3', 'NIKE LUNARGLIDE 7'),
('productitle4', 'NIKE FREE TRAIN VERSATILITY'),
('productitle5', 'NIKE FREE RN FLYKNIT'),
('productitle6', 'NIKE FREE TR 5 PRINT'),
('productitle7', 'NIKE FREE TR 6 PRINT'),
('productitle8', 'NIKE LUNARTEMPO 2'),
('productitle9', 'NIKE AIR MAX 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tblweight`
--

CREATE TABLE `tblweight` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblweight`
--

INSERT INTO `tblweight` (`id`, `weight`) VALUES
('weight1', '28,35 gram'),
('weight10', '28,35 gram'),
('weight11', '28,35 gram'),
('weight12', '28,35 gram'),
('weight13', '28,35 gram'),
('weight14', '28,35 gram'),
('weight15', '28,35 gram'),
('weight16', '28,35 gram'),
('weight17', '28,35 gram'),
('weight18', '28,35 gram'),
('weight19', '28,35 gram'),
('weight2', '28,35 gram'),
('weight20', '28,35 gram'),
('weight3', '28,35 gram'),
('weight4', '28,35 gram'),
('weight5', '28,35 gram'),
('weight6', '28,35 gram'),
('weight7', '28,35 gram'),
('weight8', '28,35 gram'),
('weight9', '28,35 gram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcode`
--
ALTER TABLE `tblcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcolor`
--
ALTER TABLE `tblcolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcommitment`
--
ALTER TABLE `tblcommitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactinfo`
--
ALTER TABLE `tblcontactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcost`
--
ALTER TABLE `tblcost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhowtobuy`
--
ALTER TABLE `tblhowtobuy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblimage`
--
ALTER TABLE `tblimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblintroduce`
--
ALTER TABLE `tblintroduce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblintroducetrademaker`
--
ALTER TABLE `tblintroducetrademaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsize`
--
ALTER TABLE `tblsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltag`
--
ALTER TABLE `tbltag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltitle`
--
ALTER TABLE `tbltitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblweight`
--
ALTER TABLE `tblweight`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
