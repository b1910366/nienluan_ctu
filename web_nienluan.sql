-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_nienluan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ad_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `password`, `ad_status`) VALUES
(2, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id_ctgiohang` int(11) NOT NULL,
  `ma_giohang` varchar(10) NOT NULL,
  `id_sp` int(11) UNSIGNED NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `id_giohang` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`id_ctgiohang`, `ma_giohang`, `id_sp`, `soluongmua`, `id_giohang`) VALUES
(16, '478065', 7, 2, 10),
(17, '478065', 6, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_dmsp` int(11) UNSIGNED NOT NULL,
  `tendmsp` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_dmsp`, `tendmsp`, `thutu`) VALUES
(11, 'Serum', 1),
(12, 'Sữa rửa mặt', 2),
(13, 'Kem chống nắng', 3),
(14, 'Tẩy Trang', 4),
(16, 'Kem Dưỡng Ẩm', 5),
(17, 'Khác', 6);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) UNSIGNED NOT NULL,
  `id_khachhang` int(11) UNSIGNED NOT NULL,
  `ma_giohang` varchar(10) NOT NULL,
  `tinhtrang_giohang` int(11) NOT NULL,
  `ngay_giohang` varchar(50) NOT NULL,
  `ngay_xuly` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_khachhang`, `ma_giohang`, `tinhtrang_giohang`, `ngay_giohang`, `ngay_xuly`) VALUES
(2, 1, '678971', 1, '2023-11-12 14:45:32', ''),
(3, 1, '881701', 0, '2023-12-28 14:45:32', '2023-05-11'),
(4, 3, '713181', 0, '2023-03-08 14:45:32', '2023-05-11'),
(5, 1, '230968', 1, '2023-04-08 14:45:32', ''),
(6, 1, '895511', 0, '2023-05-08 14:45:32', '2023-05-11'),
(8, 1, '175125', 0, '2023-05-10 20:46:23', '2023-05-11'),
(9, 1, '307441', 0, '2023-05-10 20:49:11', '2023-05-11'),
(10, 4, '478065', 0, '2023-05-11', '2023-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) UNSIGNED NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `tenkhachhang`, `email`, `diachi`, `dienthoai`, `matkhau`) VALUES
(1, 'Nguyễn Anh Được', 'duocnguyen@gmail.com', 'Đại học Cần Thơ KHU II - Trường CNTT - TT --- Địa chỉ sau cập nhật', '0123456780', '25f9e794323b453885f5181f1b624d0b'),
(3, 'Ando Nguyễn', 'andonguyen@gmail.com', 'Ninh Kiều, Cần Thơ', '0123456789', '25f9e794323b453885f5181f1b624d0b'),
(4, 'Ando Quin', 'andoquin@gmail.com', '22, đường Trần Đại Nghĩa, Cái Khế, Ninh Kiều, TP Cần Thơ', '0947393365', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) UNSIGNED NOT NULL,
  `masp` char(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `noidung` longtext NOT NULL,
  `id_dmsp` int(11) UNSIGNED NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `masp`, `tensp`, `gia`, `soluong`, `hinhanh`, `noidung`, `id_dmsp`, `tinhtrang`) VALUES
(3, 'goodndocb5', 'Serum GoodnDoc Dưỡng Ẩm, Hỗ Trợ Phục Hồi Da 30ml Hydra B5 Serum', '348000', 50, '1683773124_goodndocb5.jpg', '<p><strong>Th&agrave;nh phần đầy đủ:</strong></p>\r\n\r\n<p>Water, Pentylene Glycol, 1,2-Hexanediol, Niacinamide, Butylene Glycol, Sodium Hyaluronate, Allantoin, Panthenol, Adeno sine, Polysorbate 60, Ammonium Acryloyldim ethyltaurate/VP Copolymer, Triticum Vulgare (Wheat)Sprout Extract, Brassica Oleracea &lsquo;La lica (Broccoli) Sprout Extract, Carthamus Tinc torius (Safflower) Sprout Extract, Brassica Ca ropes tris (Rapeseed) Sprout Extract, Glycine Max (Soybean)Sprout Extract, Eugenia Caryo phyllus (Clove) Bud Extract, Sophora Japonic a Flower Extract, Magnolia Liliflora Flower Ex tract, Camellia Sinensis Leaf Extract.</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Pro-Vitamin B5&nbsp;gi&uacute;p bổ sung độ ẩm, phục hồi hư tổn,&nbsp;gi&uacute;p tăng cường hấp thụ Vitamin C v&agrave; n&acirc;ng cao t&aacute;c dụng của Vitamin C.</p>\r\n	</li>\r\n	<li>\r\n	<p>&nbsp;<strong>Hyaluronic Acid, Adenosine = Niacinamide</strong>&nbsp;kh&ocirc;ng chỉ gi&uacute;p dưỡng ẩm da từ s&acirc;u b&ecirc;n trong m&agrave; c&ograve;n l&agrave;m mờ nếp nhăn, tăng cường độ đ&agrave;n hồi v&agrave; dưỡng s&aacute;ng da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Loại da ph&ugrave; hợp:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm ph&ugrave; hợp cho mọi loại da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Giải ph&aacute;p cho t&igrave;nh trạng da:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da l&atilde;o ho&aacute; - nếp nhăn, k&eacute;m săn chắc, thiếu độ đ&agrave;n hồi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da thiếu nước - thiếu ẩm.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da&nbsp;<a href=\"https://hasaki.vn/danh-muc/nhay-cam-kich-ung-c1885.html\" target=\"_blank\">nhạy cảm, k&iacute;ch ứng</a>, tổn thương cần phục hồi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Ưu thế nổi bật:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Chứa th&agrave;nh phần&nbsp;<strong>Pro-Vitamin B5</strong>&nbsp;gi&uacute;p bổ sung độ ẩm cho l&agrave;n da đang bị tổn thương v&agrave; sần s&ugrave;i trở n&ecirc;n mềm mại hơn, đồng thời hỗ trợ phục hồi c&aacute;c hư tổn.</p>\r\n	</li>\r\n	<li>\r\n	<p>Ngo&agrave;i ra,&nbsp;<strong>Pro-Vitamin B5&nbsp;</strong>c&ograve;n&nbsp;hoạt động như một chất tăng cường để gi&uacute;p hấp thụ Vitamin C, n&acirc;ng cao t&aacute;c dụng của Vitamin C.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sự kết hợp giữa&nbsp;<strong>Hyaluronic Acid, Adenosine v&agrave; Niacinamide</strong>&nbsp;kh&ocirc;ng chỉ gi&uacute;p dưỡng ẩm da từ s&acirc;u b&ecirc;n trong m&agrave; c&ograve;n l&agrave;m mờ nếp nhăn, tăng cường độ đ&agrave;n hồi v&agrave; dưỡng s&aacute;ng da.</p>\r\n	</li>\r\n</ul>\r\n', 11, 1),
(4, 'klairsvitc', 'Serum Klairs Vitamin C Cho Da Nhạy Cảm 35ml Freshly Juiced Vitamin Drop', '280000', 15, '1683773524_klairsvitc.jpg', '<p><strong>Th&agrave;nh phần chi tiết:</strong></p>\r\n\r\n<p>Water, Propylen Glycol, Ascorbic Acid(5%, Hydroxyethylcellulose, Centella Asiatica Extract, Citrus Junos Fruit Extract, Illicium Verum(Anise) Fruit Extract, Citrus Paradisi(Grapefruit) Fruit Extract, Nelumbium Speciosum Flower Extract, Paeonia Suffruticosa Root Extract, Scutellaria Baicalensis Root Extract, Polysorbate 60, Brassica Oleracea Italica (Broccoli) Extract, Chaenomeles Sinensis Fruit Extract, Orange Oil Brazil, Sodium Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Disodium EDTA, Lavandula Angustifolia (Lavender) Oil, Camellia Sinensis Callus Culture Extract, Larix Europaea Wood Extract, Chrysanthellum Indicum Extract, Rheum Palmatum Root Extract, Asarum Sieboldi Root Extract, Quercus Mongolia Leaf Extract, Persicaria Hydropiper Extract, Corydalis Turtschaninovii Root Extract, Coptis Chinensis Root Extract, Magnolia Obovata Bark Extract, Lysine HCL, Proline, Sodium Ascorbyl Phosphate, Acetyl Methionine, Theanine, Lecithin, Acetyl Glutamine,SH-Olgopeptide-1, SH-Olgopeptide-2, SH-Polypeptide-1, SH-Polypeptide-9, SH-Polypeptide-11, Bacillus/Soybean/Folic Acid Ferment Extract, Sodium Hyaluronate, Caprylyl Glycol, Butylene Glycol, 1,2-Hexanediol.</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong><strong>5% Vitamin C dạng Acid L-ascorbic</strong>:</strong>&nbsp;gi&uacute;p sản xuất collagen, phục hồi v&agrave; trẻ h&oacute;a l&agrave;n da m&agrave; kh&ocirc;ng hề lo k&iacute;ch ứng da, kể cả da nhạy cảm.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Centella Asiatica:</strong>&nbsp;gi&uacute;p tăng cường chất chống oxy h&oacute;a v&agrave; th&uacute;c đẩy sự ph&aacute;t triển v&agrave; t&aacute;i tạo l&agrave;n da mới, gi&uacute;p tổn thương mau l&agrave;nh v&agrave; l&ecirc;n da non, hỗ trợ giảm mụn hiệu quả.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Loại da ph&ugrave; hợp:</h2>\r\n\r\n<ul>\r\n	<li>Sản phẩm th&iacute;ch hợp với mọi loại da, kể cả l&agrave;n da nhạy cảm.</li>\r\n</ul>\r\n\r\n<h2>Giải ph&aacute;p cho t&igrave;nh trạng da:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da th&acirc;m&nbsp;<a href=\"https://hasaki.vn/danh-muc/mun-c1877.html\" target=\"_blank\">mụn</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Da&nbsp;<a href=\"https://hasaki.vn/danh-muc/tham-nam-tan-nhang-c17.html\" target=\"_blank\">th&acirc;m, n&aacute;m</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Da xỉn m&agrave;u, kh&ocirc;ng đều m&agrave;u</p>\r\n	</li>\r\n	<li>\r\n	<p>Da dễ k&iacute;ch ứng, nhạy cảm</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Ưu thế nổi bật:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Serum Klairs&nbsp;dưỡng s&aacute;ng v&agrave; l&agrave;m đều m&agrave;u da&nbsp;<strong>Freshly Juiced Vitamin Drop</strong>&nbsp;gi&uacute;p dưỡng s&aacute;ng v&agrave; l&agrave;m dịu l&agrave;n da tổn thương, giảm k&iacute;ch ứng v&agrave; tăng cường lớp m&agrave;ng h&agrave;ng r&agrave;o bảo vệ da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Chiết xuất từ&nbsp;<strong>vitamin C tinh khiết</strong>&nbsp;gi&uacute;p sản xuất collagen, phục hồi v&agrave; trẻ h&oacute;a l&agrave;n da m&agrave; kh&ocirc;ng hề lo k&iacute;ch ứng da, kể cả da nhạy cảm.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sản phẩm gi&uacute;p thu nhỏ lỗ ch&acirc;n l&ocirc;ng, giảm t&igrave;nh trạng sần s&ugrave;i thường gặp ở da dầu.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&aacute;c hợp chất c&oacute; trong l&aacute; c&acirc;y&nbsp;<strong>Centella Asiatica</strong>&nbsp;gi&uacute;p tăng cường chất chống oxy h&oacute;a v&agrave; th&uacute;c đẩy sự ph&aacute;t triển v&agrave; t&aacute;i tạo l&agrave;n da mới, gi&uacute;p tổn thương mau l&agrave;nh v&agrave; l&ecirc;n da non, hỗ trợ trị mụn hiệu quả.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sản phẩm c&oacute; kết cấu dạng lỏng, kh&ocirc;ng m&ugrave;i thẩm thấu nhanh ch&oacute;ng v&agrave;o da. Để lại lớp m&agrave;ng căng b&oacute;ng, khỏe mạnh m&agrave; kh&ocirc;ng g&acirc;y cảm gi&aacute;c kh&oacute; chịu, nhờn d&iacute;nh tr&ecirc;n da.</p>\r\n	</li>\r\n</ul>\r\n', 11, 1),
(5, 'lrphb5', 'Serum La Roche-Posay Giúp Tái Tạo & Phục Hồi Da 30ml Hyalu B5 Serum', '880000', 30, '1683777464_lrphb5.jpg', '<p><strong>Th&agrave;nh phần chi tiết:</strong></p>\r\n\r\n<p>Aqua / Water, Glycerin, Alcohol Denat, Propylene Glycol, Panthenol, Pentylene Glycol, Dimethicone, Peg-6 Caprylic/Capric Glycerides, Ppg-6-Decyltetradeceth-30, Glyceryl Isostearate, Madecassoside, Sodium Hyaluronate, Ammonium Polyacryloyldimethyl Taurate, Disodium Edta, Hydrolyzed Hyaluronic Acid, Caprylyl Glycol, Citric Acid, Xanthan Gum, Butylene Glycol, Tocopherol, Phenoxyethanol, Parfum /Fragrance.</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>HYALURONIC ACIDS DUO:</strong>&nbsp;Được sử dụng bởi c&aacute;c b&aacute;c sĩ da liễu trong quy tr&igrave;nh thẩm mỹ gi&uacute;p cải thiện nếp nhăn v&agrave; vẻ rạng rỡ của da, axit hyaluronic l&agrave; ph&acirc;n tử chống l&atilde;o h&oacute;a rất phổ biến. La Roche-Posay sử dụng 2 k&iacute;ch thước ph&acirc;n tử: to &ndash; dưỡng ẩm mờ r&atilde;nh nhăn tr&ecirc;n bề mặt, nhỏ &ndash; thấm s&acirc;u v&agrave; l&agrave;m căng mọng tầng dưới da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>VITAMIN B5:</strong>&nbsp;nổi tiếng với lợi &iacute;ch l&agrave;m dịu v&agrave; phục hồi da. N&oacute; k&iacute;ch th&iacute;ch sự t&aacute;i tạo v&agrave; sức đề kh&aacute;ng của da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>MADECASSOSIDE:</strong>&nbsp;gi&uacute;p l&agrave;m đầy c&aacute;c nếp nhăn bằng c&aacute;ch l&agrave;m săn chắc da từ b&ecirc;n trong. Th&agrave;nh phần n&agrave;y gi&uacute;p l&agrave;m dịu, k&iacute;ch th&iacute;ch hiệu quả của Vitamin B5 &amp; Hyaluronic Acid.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Loại da ph&ugrave; hợp:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp với với mọi loại da, kể cả da&nbsp;<a href=\"https://hasaki.vn/danh-muc/nhay-cam-kich-ung-c1885.html\" target=\"_blank\">nhạy cảm</a>.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Giải ph&aacute;p cho t&igrave;nh trạng da:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da kh&ocirc;,&nbsp;<a href=\"https://hasaki.vn/danh-muc/thieu-am-thieu-nuoc-c1883.html\" target=\"_blank\">thiếu độ ẩm</a>,&nbsp;mất đi sự đ&agrave;n hồi &amp; độ săn chắc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da nhạy cảm, k&iacute;ch ứng.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da cần phục hồi sau mụn.</p>\r\n	</li>\r\n	<li>\r\n	<p>Th&iacute;ch hợp sử dụng sau c&aacute;c liệu tr&igrave;nh chăm s&oacute;c thẩm mỹ.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Ưu thế nổi bật:</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>HYALURONIC ACIDS DUO</strong>&nbsp;nguy&ecirc;n chất với k&iacute;ch thước kh&aacute;c nhau gi&uacute;p cải thiện nếp nhăn v&agrave; vẻ rạng rỡ của da:</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>K&iacute;ch thước ph&acirc;n tử to &ndash; dưỡng ẩm mờ r&atilde;nh nhăn tr&ecirc;n bề mặt.</p>\r\n		</li>\r\n		<li>\r\n		<p>K&iacute;ch thước ph&acirc;n tử nhỏ &ndash; thấm s&acirc;u v&agrave; l&agrave;m căng mọng tầng dưới da.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p>L&agrave;m dịu v&agrave; hỗ trợ phục hồi da với&nbsp;<strong>Vitamin B5</strong>, đồng thời&nbsp;k&iacute;ch th&iacute;ch sự t&aacute;i tạo v&agrave; sức đề kh&aacute;ng của da, mang lại l&agrave;n da khỏe mạnh.</p>\r\n	</li>\r\n	<li>\r\n	<p>L&agrave;m đầy c&aacute;c nếp nhăn bằng c&aacute;ch l&agrave;m săn chắc da từ b&ecirc;n trong với&nbsp;<strong>Madecassoside</strong>. Đồng thời, th&agrave;nh phần&nbsp;n&agrave;y c&ograve;n gi&uacute;p l&agrave;m dịu, k&iacute;ch th&iacute;ch hiệu quả của Vitamin B5 &amp; Hyaluronic Acid.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>L&agrave;n da được phục hồi, mang lại cảm gi&aacute;c căng mịn v&agrave; tr&ocirc;ng rạng rỡ hơn. Nếp nhăn tr&ecirc;n da đồng thời được cải thiện.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kết cấu dạng kem-gel lỏng, nhẹ, thẩm thấu nhanh, kh&ocirc;ng g&acirc;y nhờn r&iacute;t.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Độ an to&agrave;n:</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kh&ocirc;ng g&acirc;y k&iacute;ch ứng da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Được kiểm nghiệm bởi b&aacute;c sĩ da liễu tr&ecirc;n l&agrave;n da nhạy cảm.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng g&acirc;y nh&acirc;n mụn trứng c&aacute;.</p>\r\n	</li>\r\n</ul>\r\n', 11, 1),
(6, 'lrpcbb5', 'Kem Dưỡng La Roche-Posay Làm Dịu, Hỗ Trợ Phục Hồi Da 100ml Cicaplast Baume B5 Soothing Repairing Balm', '430000', 24, '1683777688_lrpcbb5.jpg', '<p><strong>Th&agrave;nh phần đầy đủ:</strong></p>\r\n\r\n<p>Aqua/Water, Hydrogenated Polyisobutene, Dimethicone, Glycerin, Butyrospermum Parkii Butter/Shea Butter, Panthenol, Butylene Glycol, Aluminum Starch Octenylsuccinate, Propanediol, Cetyl Pef/PPG-10/1 Dimethicone, Tristearin, Zinc Gluconate, Madecassoside, Manganese Gluconate, Magnesium Sulfate, Disodium Edta, Copper Gluconate, Acetylated Glycol Stearate, Polyglyceryl-4 Isostearate, Sodium Benzonate, Phenoxyethanol, Chlorhexidine Digluconate, CI 77891 / Titanium Dioxide.</p>\r\n\r\n<p>Th&agrave;nh phần sản phẩm</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>5% Panthenol</strong>:<strong>&nbsp;</strong>dưỡng ẩm v&agrave; làm dịu các vùng da khô, kích ứng &amp; cảm giác bỏng rát, mang lại cảm giác d&ecirc;̃ chịu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Phức hợp&nbsp;<strong>[Madecassoside] + [Đồng - Kẽm &ndash; Manganese]</strong>:&nbsp;hỗ trợ phục hồi v&agrave; t&aacute;i tạo da khỏe mạnh.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kết cấu kem đặc ẩm + c&aacute;c hoạt chất kh&aacute;ng khuẩn</strong>: tạo m&ocirc;i trường l&yacute; tưởng cho l&agrave;n da nhanh phục hồi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng paraben, kh&ocirc;ng hương liệu, kh&ocirc;ng chứa mỡ cừu, kh&ocirc;ng để lại vệt trắng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Loại da ph&ugrave; hợp:</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm ph&ugrave; hợp cho mọi loại da.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>D&ugrave;ng cho mặt v&agrave; cơ thể.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; thể sử dụng cho cả người lớn, trẻ em v&agrave; trẻ sơ sinh.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Giải ph&aacute;p cho t&igrave;nh trạng da:</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Mẩn đỏ ở da,&nbsp;v&ugrave;ng da m&ocirc;ng ở trẻ sơ sinh v&agrave; trẻ em.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da kh&ocirc;, m&ocirc;i kh&ocirc;.</p>\r\n	</li>\r\n	<li>\r\n	<p>Da dễ bị dị ứng.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sau khi thực hiện thủ thuật laser, k&iacute;ch ứng sau rụng l&ocirc;ng, sau khi thực hiện c&aacute;c thủ thuật da liễu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Mẩn ngứa quanh miệng</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Kem Dưỡng Làm Dịu &amp; Phục Hồi Da La Roche-Posay Cicaplast Baume B5\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen1/kem-duong-la-roche-posay-lam-diu-ho-tro-phuc-hoi-da-5.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Ưu thế nổi bật:</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>5% Panthenol</strong>&nbsp;gi&uacute;p dưỡng ẩm v&agrave; làm dịu các vùng da khô, kích ứng &amp; cảm giác bỏng rát, mang lại cảm giác d&ecirc;̃ chịu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Phức hợp&nbsp;<strong>[Madecassoside] + [Đồng - Kẽm &ndash; Manganese]</strong>&nbsp;hỗ trợ phục hồi v&agrave; t&aacute;i tạo da khỏe mạnh.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kết cấu kem đặc ẩm + c&aacute;c hoạt chất kh&aacute;ng khuẩn</strong>&nbsp;gi&uacute;p tạo m&ocirc;i trường l&yacute; tưởng cho l&agrave;n da nhanh phục hồi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đặc biệt th&iacute;ch hợp để sử dụng sau khi vừa nặn mụn, gi&uacute;p ngăn ngừa h&igrave;nh th&agrave;nh vết th&acirc;m.</p>\r\n	</li>\r\n</ul>\r\n', 16, 1),
(7, 'klairsmbc', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm 30ml Midnight Blue Calming Cream', '295000', 30, '1683777883_klairsmbc.jpg', '<p><strong>Th&agrave;nh phần đầy đủ:</strong></p>\r\n\r\n<p>Water, Cetyl Ethylhexanoate, Butylene Glycol, Glycerin, Sodium Hyaluronate, Caprylic/Capric Triglyceride, Centella Asiatica Extract, Sorbitan Stearate, Cetyl Alcohol, Butyrospermum Parkii (Shea Butter), Argania Spinosa Kernel Oil, Simmondsia Chinensis (Jojoba) Seed Oil, Sorbitan Sesquioleate, Glyceryl Stearate, Stearic Acid, Portulaca Oleracea Extract, Anthemis Nobilis Flower Extract, Ceramide NP, Polysorbate 60, Bees Wax, Chlorphenesin, Tocopheryl Acetate, Xanthan Gum, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Morus Alba Root Extract, Tromethamine, Brassica Oleracea Italica (Broccoli) Extract, Guaiazulene, Acetyl Hexapeptide-8, Lecithin, Acetyl Glutamine, SH-Olgopeptide-1, SH-Olgopeptide-2, SH-Polypeptide-1, SH-Polypeptide-9, SH-Polypeptide-11, Bacillus/Soybean/Folic Acid Ferment Extract, Caprylyl Glycol, 1,2-Hexanediol</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Guaiazulene (chiết xuất từ dầu hoa c&uacute;c):</strong>&nbsp;l&agrave; th&agrave;nh phần tạo n&ecirc;n m&agrave;u xanh tự nhi&ecirc;n cho sản phẩm, c&oacute; đặc t&iacute;nh chữa l&agrave;nh tổn thương tr&ecirc;n da, gi&uacute;p l&agrave;m dịu da v&agrave; k&iacute;ch th&iacute;ch t&aacute;i tạo c&aacute;c tế b&agrave;o da. Ngo&agrave;i ra Guaiazulene c&ograve;n kh&aacute;ng khuẩn, kh&aacute;ng vi&ecirc;m, chống oxy h&oacute;a, hỗ trợ ngăn ngừa mụn v&agrave; ngăn ngừa c&aacute;c dấu hiệu l&atilde;o h&oacute;a da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chiết xuất rau m&aacute; (Centella Asiatica Extract):</strong>&nbsp;th&agrave;nh phần nổi tiếng với c&ocirc;ng dụng chữa l&agrave;nh c&aacute;c vết thương ngo&agrave;i da như bỏng, trầy xước, c&ocirc;n tr&ugrave;ng cắn&hellip;, l&agrave;m dịu da, giảm k&iacute;ch ứng, giảm mẩn đỏ, k&iacute;ch th&iacute;ch tổng hợp Collagen gi&uacute;p ngăn ngừa h&igrave;nh th&agrave;nh sẹo mụn.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Chiết xuất từ rễ c&acirc;y d&acirc;u tằm trắng (Morus Alba Root Extract):&nbsp;</strong>Th&agrave;nh phần c&oacute; khả năng l&agrave;m s&aacute;ng da v&agrave; gi&uacute;p da đều m&agrave;u hơn.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Niacinamide (Vitamin B3):</strong>&nbsp;gi&uacute;p củng cố h&agrave;ng r&agrave;o bảo vệ da khoẻ mạnh, kh&aacute;ng vi&ecirc;m, giảm mẩn đỏ da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ceramide 3:</strong>&nbsp;th&agrave;nh phần gi&uacute;p tăng sức đề kh&aacute;ng, gi&uacute;p da lu&ocirc;n khỏe mạnh, săn chắc.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dầu Argan:</strong>&nbsp;gi&agrave;u axit b&eacute;o dưỡng ẩm cho da, ngăn ngừa c&aacute;c dấu hiệu l&atilde;o h&oacute;a.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Butylene Glycol, Glycerin, Sodium Hyaluronate:&nbsp;</strong>cung cấp v&agrave; duy tr&igrave; độ ẩm cần thiết cho l&agrave;n da suốt ng&agrave;y d&agrave;i.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cetyl Ethylhexanoate, Stearic Acid:</strong>&nbsp;điều tiết lượng dầu, nhờn cho da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Kem Dưỡng Ẩm,&nbsp;L&agrave;m Dịu Da Ban Đ&ecirc;m Midnight Blue Calming Cream</strong>&nbsp;l&agrave;&nbsp;<a href=\"https://hasaki.vn/danh-muc/kem-duong-dau-duong-c9.html\" target=\"_blank\">kem dưỡng</a>&nbsp;d&agrave;nh cho da nhạy cảm đến từ thương hiệu&nbsp;<a href=\"https://hasaki.vn/thuong-hieu/klairs.html\" target=\"_blank\"><strong>Dear, Klairs&nbsp;</strong></a>trực thuộc By Wishtrend.&nbsp;Với th&agrave;nh phần&nbsp;Guaiazulene&nbsp;được chiết xuất từ dầu hoa c&uacute;c tạo m&agrave;u xanh dịu m&aacute;t tự nhi&ecirc;n, gi&uacute;p l&agrave;m dịu da k&iacute;ch ứng v&ocirc; c&ugrave;ng hiệu quả, kết hợp c&ugrave;ng chiết xuất&nbsp;rau m&aacute;&nbsp;cấp ẩm, l&agrave;m dịu da v&agrave; hỗ trợ phục hồi da mụn rất tốt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Kem Dưỡng Ẩm, Làm Dịu Da Ban Đêm Klairs Midnight Blue Calming Cream\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen2/kem-duong-am-klairs-lam-diu-phuc-hoi-da-ban-dem-1.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nếu bạn sở hữu l&agrave;n da dầu, mụn v&agrave; nhạy cảm, việc t&igrave;m kiếm một sản phẩm&nbsp;kem dưỡng&nbsp;ph&ugrave; hợp thật kh&ocirc;ng hề đơn giản. Để gi&uacute;p c&aacute;c bạn dễ d&agrave;ng hơn trong việc lựa chọn,&nbsp;<a href=\"https://hasaki.vn/\" target=\"_blank\">Hasaki</a>&nbsp;xin giới thiệu &ndash;&nbsp;<strong>Kem&nbsp;Dưỡng Ẩm, L&agrave;m Dịu Da Ban Đ&ecirc;m Klairs Midnight Blue Calming Cream</strong>&nbsp;đang &ldquo;l&agrave;m mưa l&agrave;m gi&oacute;&rdquo; trong thời gian gần đ&acirc;y v&agrave; chiếm được nhiều t&igrave;nh cảm của cộng đồng l&agrave;m đẹp H&agrave;n Quốc.</p>\r\n\r\n<p><strong>Klairs Midnight Blue Calming Cream</strong>&nbsp;sở hữu thiết kế bao b&igrave; đơn giản m&agrave; sang trọng, mang một m&agrave;u đen huyền b&iacute; đặc trưng của d&ograve;ng sản phẩm Midnight Blue, gi&uacute;p l&agrave;m nổi bật l&ecirc;n m&agrave;u xanh của chất kem b&ecirc;n trong. Hộp kem được l&agrave;m bằng thủy tinh chất lượng, b&ecirc;n trong c&oacute; k&egrave;m theo nắp bảo vệ v&agrave; muỗng nhựa để lấy kem, gi&uacute;p bảo quản kem được l&acirc;u hơn, tr&aacute;nh hiện tượng oxi h&oacute;a v&agrave; tr&aacute;nh việc lấy kem trực tiếp bằng tay khiến kem bị nhiễm khuẩn.</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen/kem-duong-am-lam-diu-da-ban-dem-klairs-30ml-2.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ri&ecirc;ng với dung t&iacute;ch lớn&nbsp;<strong>60ml</strong>&nbsp;được h&atilde;ng thiết kế ở dạng tu&yacute;p nhựa tiện dụng, th&iacute;ch hợp mang theo b&ecirc;n người để đi c&ocirc;ng t&aacute;c hoặc du lịch. Dạng tu&yacute;p cũng gi&uacute;p bảo quản kem b&ecirc;n trong được tốt hơn, hạn chế việc kem tiếp x&uacute;c với kh&ocirc;ng kh&iacute; nhanh bị oxy h&oacute;a.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Kem Dưỡng Ẩm Klairs Midnight Blue Calming Cream 60ml dạng tuýp dung tích lớn tiết kiệm hơn\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen/kem-duong-am-lam-diu-da-ban-dem-klairs-02.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kết cấu kem dạng&nbsp;<strong>gel-cream</strong>&nbsp;thẩm thấu nhanh ch&oacute;ng v&agrave;o da v&agrave; kh&ocirc;ng để lại cảm gi&aacute;c d&iacute;nh dấp hay l&agrave;m da đổ dầu, mang lại cảm gi&aacute;c m&aacute;t dịu tức th&igrave;. Tuy nhi&ecirc;n, theo h&atilde;ng giới thiệu th&igrave;&nbsp;<strong>Klairs Midnight Blue Calming Cream</strong>&nbsp;kh&ocirc;ng phải l&agrave; một loại kem dưỡng ẩm th&ocirc;ng thường m&agrave; thi&ecirc;n về l&agrave;m dịu da nhanh ch&oacute;ng, v&igrave; vậy h&atilde;ng khuyến kh&iacute;ch sử dụng kem cho những v&ugrave;ng da bị mẩn đỏ v&agrave; k&iacute;ch ứng, sử dụng tốt nhất v&agrave;o ban đ&ecirc;m để hỗ trợ phục hồi v&agrave; t&aacute;i tạo bề mặt da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Kem dưỡng ẩm Klairs Midnight Blue Calming Cream kết cấu dạng gel-cream mỏng nhẹ, thấm nhanh, không gây nhờn dính.\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen/kem-duong-am-lam-diu-da-ban-dem-klairs-30ml-4.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Klairs Midnight Blue Calming Cream&nbsp;</strong>l&agrave; sản phẩm kem dưỡng ẩm l&yacute; tưởng để sử dụng hằng ng&agrave;y, gi&uacute;p dưỡng ẩm dịu nhẹ cho da, đồng thời hỗ trợ phục hồi v&agrave; t&aacute;i tạo l&agrave;n da khỏe mạnh, mịn m&agrave;ng hơn. Bảo vệ l&agrave;n da nhạy cảm khỏi c&aacute;c tổn thương do t&aacute;c động từ m&ocirc;i trường b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p>Hiện sản phẩm&nbsp;<strong>Kem Dưỡng Ẩm Klairs Midnight Blue Calming Cream&nbsp;</strong>đ&atilde; c&oacute; mặt tại&nbsp;<strong>Hasaki</strong>&nbsp;với 2 dung t&iacute;ch cho bạn lựa chọn:</p>\r\n\r\n<ul>\r\n	<li><strong>30ml (dạng hũ)</strong></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>60ml (dạng tu&yacute;p)</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"Kem Dưỡng Ẩm Klairs Midnight Blue Calming Cream đã có mặt tại Hasaki với 2 dung tích 30ml và 60ml.\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen2/kem-duong-am-klairs-lam-diu-phuc-hoi-da-ban-dem-2.jpg\" style=\"height:800px; width:800px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Loại da ph&ugrave; hợp:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Ph&ugrave; hợp với mọi l&agrave;n da, đặc biệt l&agrave;&nbsp;<a href=\"https://hasaki.vn/danh-muc/nhay-cam-kich-ung-c1885.html\" target=\"_blank\">da nhạy cảm</a>.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Giải ph&aacute;p cho t&igrave;nh trạng da:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da bị&nbsp;k&iacute;ch ứng với yếu tố m&ocirc;i trường (tia UV, nguồn nước).</p>\r\n	</li>\r\n	<li>\r\n	<p>Da&nbsp;tổn thương (nặn mụn, laser, d&ugrave;ng sản phẩm treatment).</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"https://hasaki.vn/danh-muc/thieu-am-thieu-nuoc-c1883.html\" target=\"_blank\">Da thiếu ẩm, thiếu nước</a>.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Ưu thế nổi bật:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Guaiazulene</strong>&nbsp;(chiết xuất từ dầu hoa c&uacute;c):&nbsp;l&agrave; th&agrave;nh phần tạo n&ecirc;n m&agrave;u xanh tự nhi&ecirc;n cho sản phẩm, c&oacute; đặc t&iacute;nh chữa l&agrave;nh tổn thương tr&ecirc;n da, gi&uacute;p l&agrave;m dịu da v&agrave; k&iacute;ch th&iacute;ch t&aacute;i tạo c&aacute;c tế b&agrave;o da. Ngo&agrave;i ra&nbsp;Guaiazulene&nbsp;c&ograve;n kh&aacute;ng khuẩn, kh&aacute;ng vi&ecirc;m, chống oxy h&oacute;a, hỗ trợ ngăn ngừa mụn v&agrave; ngăn ngừa c&aacute;c dấu hiệu l&atilde;o h&oacute;a da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chiết xuất rau m&aacute;</strong>&nbsp;(Centella Asiatica Extract):&nbsp;th&agrave;nh phần nổi tiếng với c&ocirc;ng dụng chữa l&agrave;nh c&aacute;c vết thương ngo&agrave;i da như bỏng, trầy xước, c&ocirc;n tr&ugrave;ng cắn&hellip;, l&agrave;m dịu da, giảm k&iacute;ch ứng, giảm mẩn đỏ, k&iacute;ch th&iacute;ch tổng hợp Collagen gi&uacute;p ngăn ngừa h&igrave;nh th&agrave;nh&nbsp;<a href=\"https://hasaki.vn/danh-muc/seo-mun-c2061.html\" target=\"_blank\">sẹo mụn</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hyaluronic Acid</strong>:&nbsp;dưỡng ẩm cho da mềm mượt.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ceramide 3</strong>:&nbsp;hỗ trợ phục hồi h&agrave;ng r&agrave;o bảo vệ da khỏe mạnh hơn.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dầu Argan</strong>:&nbsp;gi&agrave;u axit b&eacute;o&nbsp;dưỡng ẩm cho da, ngăn ngừa c&aacute;c dấu hiệu l&atilde;o h&oacute;a.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kết cấu kem dạng&nbsp;<strong>gel-cream</strong>&nbsp;v&ocirc; c&ugrave;ng mượt m&agrave; tho&aacute;ng nhẹ c&ugrave;ng m&ugrave;i hương thoang thoảng dễ chịu, kh&ocirc;ng g&acirc;y gắt mũi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Độ an to&agrave;n:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kh&ocirc;ng chứa cồn, paraben, silicone.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng m&agrave;u nh&acirc;n tạo, hương liệu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng g&acirc;y k&iacute;ch ứng, an to&agrave;n cho l&agrave;n da nhạy cảm.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Bảo quản:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tr&aacute;nh &aacute;nh nắng trực tiếp, nơi c&oacute; nhiệt độ cao hoặc ẩm ướt.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đậy nắp k&iacute;n sau khi sử dụng.</p>\r\n	</li>\r\n</ul>\r\n', 16, 1),
(8, 'biodermadd', 'Nước Tẩy Trang Bioderma Dành Cho Da Dầu & Hỗn Hợp 500ml Sébium H2O', '390000', 35, '1683779635_biodermadd.jpg', '<p><strong>Th&agrave;nh phần đầy đủ:</strong></p>\r\n\r\n<p>Water (Aqua), Peg-6 Caprylic/Capric Glycerides, Sodium Citrate , Zinc Gluconate, Copper Sulfate, Ginkgo Biloba Extract &ndash; Chiết Xuất L&aacute; Bạch Quả, Mannitol, Xylitol, Rhamnose, Fructooligosaccharides, Propylene Glycol, Citric Acid, Disodium Edta, Cetrimonium Bromide, Fragrance (Parfum).</p>\r\n\r\n<p><strong>Th&agrave;nh phần ch&iacute;nh:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>C&ocirc;ng nghệ Micellar:&nbsp;</strong>C&aacute;c hạt micelle, c&oacute; th&agrave;nh phần được lấy cảm hứng từ lipid của da, l&agrave; những hạt l&agrave;m sạch v&ocirc; h&igrave;nh si&ecirc;u nhỏ. Ch&uacute;ng c&oacute; khả năng thu giữ c&aacute;c tạp chất trong khi vẫn duy tr&igrave; lớp m&agrave;ng bảo vệ tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>S&aacute;ng chế D.A.F.:</strong>&nbsp;C&aacute;c t&aacute;c động từ b&ecirc;n ngo&agrave;i c&oacute; thể l&agrave;m cho da trở n&ecirc;n k&iacute;ch ứng v&agrave; nhạy cảm. Hợp chất n&agrave;y gi&uacute;p l&agrave;m tăng khả năng dung nạp của l&agrave;n da - bất kể đối với loại da n&agrave;o - nhằm tăng cường sức đề kh&aacute;ng cho da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Nước Tẩy Trang Bioderma S&eacute;bium H2O</strong>&nbsp;l&agrave; sản phẩm&nbsp;<a href=\"https://hasaki.vn/danh-muc/tay-trang-c37.html\" target=\"_blank\">tẩy trang</a>&nbsp;d&agrave;nh cho da dầu, da hỗn hợp đến từ&nbsp;<a href=\"https://hasaki.vn/thuong-hieu/bioderma.html\" target=\"_blank\">thương hiệu dược mỹ phẩm Bioderma</a>, được ứng dụng c&ocirc;ng nghệ Micellar đ&igrave;nh đ&aacute;m gi&uacute;p loại bỏ lớp trang điểm c&ugrave;ng bụi bẩn v&agrave; dầu thừa tr&ecirc;n da hiệu quả m&agrave; kh&ocirc;ng g&acirc;y kh&ocirc; căng hay nhờn r&iacute;t, tạo cảm gi&aacute;c th&ocirc;ng tho&aacute;ng cho da sau một ng&agrave;y d&agrave;i mệt mỏi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen/nuoc-tay-trang-bioderma-danh-cho-da-dau-hon-hop-01.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Da hỗn hợp đến&nbsp;<a href=\"https://hasaki.vn/danh-muc/da-dau-c90.html\" target=\"_blank\">da dầu</a>&nbsp;c&oacute; lượng b&atilde; nhờn dư thừa tập trung ở v&ugrave;ng chữ T (da hỗn hợp) hoặc tr&ecirc;n to&agrave;n bộ khu&ocirc;n mặt (da dầu). C&aacute;c dấu hiệu l&acirc;m s&agrave;ng đi k&egrave;m với loại da n&agrave;y l&agrave; t&igrave;nh trạng b&oacute;ng dầu, da xỉn m&agrave;u v&agrave; lỗ ch&acirc;n l&ocirc;ng to. Đ&ocirc;i khi c&ograve;n c&oacute; thể xuất hiện mụn trứng c&aacute; hoặc mụn đầu đen. Nếu những dấu hiệu n&agrave;y cứ li&ecirc;n tục t&aacute;i ph&aacute;t, da được coi l&agrave; c&oacute; xu hướng dễ bị mụn.</p>\r\n\r\n<p><strong>Nước Tẩy Trang Bioderma S&eacute;bium H2O&nbsp;</strong>được b&agrave;o chế chuy&ecirc;n biệt d&agrave;nh cho l&agrave;n da dầu &amp; hỗn hợp, c&oacute; khả năng &quot;bắt chước&quot; c&aacute;c th&agrave;nh phần tự nhi&ecirc;n của l&agrave;n da để loại bỏ lớp trang điểm một c&aacute;ch tối ưu nhất, trong khi vẫn duy tr&igrave; được độ c&acirc;n bằng pH v&agrave; độ ẩm tự nhi&ecirc;n của da, bảo đảm an to&agrave;n cho kể cả những l&agrave;n da nhạy cảm nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.hasaki.vn/wysiwyg/HaNguyen/nuoc-tay-trang-bioderma-danh-cho-da-dau-hon-hop-02.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đặc biệt, c&ocirc;ng nghệ Micellar Water sử dụng c&aacute;c hạt ph&acirc;n tử mi-xen với 2 đầu ưa dầu - nước, gi&uacute;p&nbsp;h&uacute;t hết b&atilde; nhờn, bụi bẩn của da,&nbsp;<a href=\"https://hasaki.vn/\" target=\"_blank\">mỹ phẩm</a>&nbsp;trang điểm v&agrave; &ocirc; nhiễm kh&ocirc;ng kh&iacute; b&aacute;m lại tr&ecirc;n da sau một ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng hề để lại cảm gi&aacute;c b&oacute;ng nhờn, d&iacute;nh r&iacute;t như nhiều loại nước tẩy trang th&ocirc;ng thường kh&aacute;c.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, S&eacute;bium H2O c&ograve;n được l&agrave;m gi&agrave;u th&ecirc;m với c&aacute;c hoạt chất thanh lọc l&agrave;n da, kẽm gluconate v&agrave; đồng sunfat gi&uacute;p l&agrave;m sạch s&acirc;u v&agrave; loại bỏ b&atilde; nhờn, hạn chế lượng dầu thừa tiết ra, mang lại l&agrave;n da th&ocirc;ng tho&aacute;ng sạch mịn.</p>\r\n\r\n<p><strong>Hiện&nbsp;Nước Tẩy Trang D&agrave;nh Cho Da Dầu &amp; Hỗn Hợp Bioderma S&eacute;bium H2O</strong>&nbsp;đ&atilde; c&oacute; mặt tại<strong>&nbsp;Hasaki</strong>&nbsp;với c&aacute;c dung t&iacute;ch như sau cho bạn lựa chọn:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>100ml</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>250ml</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>500ml</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Loại da ph&ugrave; hợp:</h2>\r\n\r\n<ul>\r\n	<li>Sản phẩm ph&ugrave; hợp cho da hỗn hợp đến da dầu.</li>\r\n</ul>\r\n\r\n<h2>Giải ph&aacute;p cho t&igrave;nh trạng da:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p><a href=\"https://hasaki.vn/danh-muc/dau-thua-lo-chan-long-to-c1879.html\" target=\"_blank\">Dầu thừa - lỗ ch&acirc;n l&ocirc;ng to</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Da mụn hoặc dễ nổi mụn</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>C&ocirc;ng dụng:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nhẹ nh&agrave;ng l&agrave;m sạch m&agrave; kh&ocirc;ng l&agrave;m kh&ocirc; da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Thanh lọc da v&agrave; hạn chế b&atilde; nhờn với phức&nbsp;hợp điều chỉnh b&atilde; nhờn &ndash; Fluidactiv&reg;.</p>\r\n	</li>\r\n	<li>\r\n	<p>Mang lại cảm gi&aacute;c tươi m&aacute;t tức th&igrave;.</p>\r\n	</li>\r\n	<li>\r\n	<p>Loại bỏ lớp trang điểm hiệu quả.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dung nạp tốt - Kh&ocirc;ng g&acirc;y mụn - Kh&ocirc;ng cần rửa lại với nước.</p>\r\n	</li>\r\n</ul>\r\n', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `id_thongke` int(11) NOT NULL,
  `ngay_thongke` varchar(50) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (`id_thongke`, `ngay_thongke`, `donhang`, `doanhthu`, `soluongban`) VALUES
(47, '2023-05-08', 2, '1580000', 3),
(48, '2023-04-25', 1, '250000', 1),
(49, '2023-05-11', 1, '1020000', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id_ctgiohang`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_giohang` (`id_giohang`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_dmsp`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dmsp` (`id_dmsp`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id_thongke`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_ctgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_dmsp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id_thongke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD CONSTRAINT `chitiet_giohang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `chitiet_giohang_ibfk_2` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id_giohang`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id_khachhang`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dmsp`) REFERENCES `danhmucsp` (`id_dmsp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
