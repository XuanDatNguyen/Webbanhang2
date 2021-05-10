-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 03:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop4`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `image`, `category_id`, `summary`, `description`, `type`, `position`, `status`, `url`, `is_active`, `user_id`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(9, 'ĐAM MÊ – ÁP LỰC HAY ĐỘNG LỰC?', 'dam-me-ap-luc-hay-dong-luc', 'upload/article/blog-three.jpg', 0, '<p>Hai chữ &ldquo;Đam m&ecirc;&rdquo; ch&uacute;ng ta lu&ocirc;n được nghe mỗi ng&agrave;y rằng đ&oacute; như một ch&igrave;a kho&aacute; vạn năng, mở ra cho họ tất cả c&aacute;nh cửa th&agrave;nh c&ocirc;ng. Những người th&agrave;nh c&ocirc;ng, gi&agrave;u c&oacute; n&oacute;i điều đ&oacute; mỗi ng&agrave;y, rằng đam m&ecirc; l&agrave; thứ gi&uacute;p họ đạt được đỉnh cao như hiện tại.</p>', '<p>V&agrave; điều kh&ocirc;ng biết c&oacute; gi&uacute;p &iacute;ch hay kh&ocirc;ng nhưng t&ocirc;i chắc chắn rằng, hai chữ &ldquo;Đam m&ecirc;&rdquo; ngắn ngủi như vậy nhưng lại v&ocirc; t&igrave;nh đ&egrave; l&ecirc;n vai những người trẻ &ndash; một g&aacute;nh nặng &aacute;p lực v&ocirc; h&igrave;nh. Đam m&ecirc; đ&atilde; &aacute;p đặt l&ecirc;n suy nghĩ của hầu hết những người trẻ ch&uacute;ng ta rằng &ldquo;nếu như kh&ocirc;ng t&igrave;m kiếm v&agrave; định nghĩa đam m&ecirc; của ri&ecirc;ng m&igrave;nh, bạn l&agrave; một kẻ thất bại&rdquo;.&nbsp;</p>\r\n\r\n<p>Vậy, liệu hai chữ đam m&ecirc; c&oacute; c&ograve;n thật sự đẹp đẽ như mọi người vẫn n&oacute;i, việc t&igrave;m kiếm đam m&ecirc; c&oacute; thật sự cần thiết? Khi m&agrave; &ldquo;đam m&ecirc;&rdquo; bằng nhiều c&aacute;ch kh&aacute;c nhau đ&atilde; khiến cho rất nhiều người trong ch&uacute;ng ta cảm thấy căng thẳng, mỏi mệt v&agrave; mất niềm tin. Đam m&ecirc; &ndash; &aacute;p lực hay động lực? Ngay b&acirc;y giờ h&atilde;y c&ugrave;ng SSStutter kh&aacute;m ph&aacute;.</p>', NULL, 7, NULL, NULL, 1, NULL, NULL, NULL, '2021-04-14 04:09:31', '2021-04-18 09:10:09'),
(11, 'Bật mí 3 cách mặc áo sơ mi họa tiết cực ngầu mà không bị “sến”', 'bat-mi-3-cach-mac-ao-so-mi-hoa-tiet-cuc-ngau-ma-khong-bi-sen', 'upload/article/bài viết new 1.jpg', 0, '<p>Nếu bạn đ&atilde; từng kh&ocirc;ng th&iacute;ch&nbsp;<a href=\"https://vi.wikipedia.org/wiki/S%C6%A1_mi\">&aacute;o sơ mi</a>&nbsp;họa tiết v&igrave; nghĩ n&oacute; qu&aacute; di&ecirc;m d&uacute;a Hay c&oacute; khi bạn đ&atilde; từng thử 1 chiếc&nbsp;<a href=\"https://360boutique.vn/chon-ao-so-mi-hoa-tiet-di-bien/\">&aacute;o sơ mi họa tiết</a>&nbsp;v&agrave; bị bạn b&egrave; l&agrave; tr&ocirc;ng &ldquo;sến&rdquo;? v&agrave; bạn đ&atilde; quyết t&acirc;m l&agrave; sẽ cất chiếc &aacute;o đ&oacute; v&agrave;o tủ v&agrave; kh&ocirc;ng bao giờ đụng tới. Vậy h&ocirc;m nay, Shop&nbsp;<a href=\"https://360boutique.vn/\">thời trang nam</a>&nbsp;360 Boutique sẽ bật m&iacute; cho bạn 3 c&aacute;ch để tự tin diện&nbsp;<a href=\"https://360boutique.vn/danh-muc/san-pham/thoi-trang-nam/ao/ao-so-mi/so-mi-ngan-tay/\">&aacute;o sơ mi nam họa tiết</a>&nbsp;hay c&ograve;n được gọi l&agrave;&nbsp;<a href=\"https://360boutique.vn/so-mi-di-bien-dep-cho-nhung-anh-chang-thich-phong-cach-hawaii/\">&aacute;o sơ mi đi biển</a>&nbsp;&ldquo;chuẩn kh&ocirc;ng cần chỉnh&rdquo;.</p>', '<ul>\r\n	<li>\r\n	<h2>PHỐI ĐỒ C&Ugrave;NG SƠ MI HỌA TIẾT.</h2>\r\n	</li>\r\n</ul>\r\n\r\n<p>&Aacute;o sơ mi đi biển lu&ocirc;n được gắn m&aacute;c &ldquo;k&eacute;n người mặc&rdquo;, tuy nhi&ecirc;n, khi được kết hợp với những Item ph&ugrave; hợp, th&igrave; chắc chắn phong th&aacute;i của c&aacute;c ch&agrave;ng trai sẽ tăng l&ecirc;n gấp 10 lần. Một ch&uacute;t tinh tế trong việc lựa chọn trang phục sẽ gi&uacute;p bạn ghi điểm trong mắt mọi người. H&atilde;y thử Mix những &aacute;o sơ mi h&igrave;nh đi biển với 1 chiếc quần Jeans m&agrave;u trắng, hoặc m&agrave;u đen đơn giản, hay năng động hơn với quần short. Bật m&iacute; cho bạn l&agrave; c&oacute; thể lấy một m&agrave;u họa tiết tr&ecirc;n &aacute;o để l&agrave;m m&agrave;u quần. Một điều cần lưu &yacute; l&agrave;: &ldquo;H&atilde;y n&oacute;i kh&ocirc;ng với quần l&ograve;e loẹt&rdquo; bởi tr&ocirc;ng tổng thể sẽ rất rối mắt.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2>MIX C&Ugrave;NG MỘT CHIẾC&nbsp;<a href=\"https://360boutique.vn/danh-muc/san-pham/thoi-trang-nam/ao/ao-phong/\">&Aacute;O THUN</a>&nbsp;HOẶC TANKTOP</h2>\r\n	</li>\r\n</ul>\r\n\r\n<p>&Aacute;o sơ mi đi biển lu&ocirc;n được gắn m&aacute;c &ldquo;k&eacute;n người mặc&rdquo;, tuy nhi&ecirc;n, khi được kết hợp với những Item ph&ugrave; hợp, th&igrave; chắc chắn phong th&aacute;i của c&aacute;c ch&agrave;ng trai sẽ tăng l&ecirc;n gấp 10 lần. Một ch&uacute;t tinh tế trong việc lựa chọn trang phục sẽ gi&uacute;p bạn ghi điểm trong mắt mọi người. H&atilde;y thử Mix những &aacute;o sơ mi h&igrave;nh đi biển với 1 chiếc quần Jeans m&agrave;u trắng, hoặc m&agrave;u đen đơn giản, hay năng động hơn với quần short. Bật m&iacute; cho bạn l&agrave; c&oacute; thể lấy một m&agrave;u họa tiết tr&ecirc;n &aacute;o để l&agrave;m m&agrave;u quần. Một điều cần lưu &yacute; l&agrave;: &ldquo;H&atilde;y n&oacute;i kh&ocirc;ng với quần l&ograve;e loẹt&rdquo; bởi tr&ocirc;ng tổng thể sẽ rất rối mắt.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2>Đ&Uacute;NG ĐỒ Đ&Uacute;NG NGƯỜI Đ&Uacute;NG THỜI ĐIỂM</h2>\r\n	</li>\r\n</ul>\r\n\r\n<p>Một chiếc &aacute;o sơ mi h&igrave;nh họa tiết được coi như biểu tượng của m&ugrave;a h&egrave;, đ&acirc;y chắc chắn l&agrave; &ldquo;người bạn&rdquo; đồng h&agrave;nh c&ugrave;ng bạn trong những chuyến đi du lịch, đi chơi. Với những bạn c&oacute; d&aacute;ng người gầy, những chiếc &aacute;o c&oacute; họa tiết to v&agrave; m&agrave;u sắc sẽ gi&uacute;p bạn ho&agrave;n to&agrave;n nổi bật. C&ograve;n những bạn c&oacute; th&acirc;n h&igrave;nh tr&ograve;n trịa, c&oacute; thể chọn họa tiết nhỏ với t&ocirc;ng m&agrave;u trầm sẽ gi&uacute;p bạn che đi những khuyết điểm cơ thể.</p>', NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, '2021-05-09 11:45:46', '2021-05-10 00:13:48'),
(12, '3 YẾU TỐ “VÀNG” LÀM NÊN 1 CHIẾC QUẦN JEANS DÀNH CHO BẠN', '3-yeu-to-vang-lam-nen-1-chiec-quan-jeans-danh-cho-ban', 'upload/article/bài viết new 2.jpg', 0, '<p>L&agrave;m thế n&agrave;o để chọn được một chiếc quần trọn vẹn &ldquo;điểm 10&rdquo; về sự thoải m&aacute;i, ph&ugrave; hợp v&agrave; gi&uacute;p bạn che được c&aacute;c khuyết điểm cơ thể của m&igrave;nh?</p>', '<h2>1. CHẤT LIỆU L&Agrave;M N&Ecirc;N PHOM D&Aacute;NG</h2>\r\n\r\n<p>Ngo&agrave;i đặc điểm về chất liệu jeans, th&ocirc;ng thường ch&uacute;ng ta cần ch&uacute; &yacute; v&agrave; quan t&acirc;m tới đặc điểm về độ d&agrave;y của vải. Nếu như chất liệu mỏng nhẹ sẽ ph&ugrave; hợp với những h&egrave; hoặc nắng ấm, đem đến cảm gi&aacute;c thoải m&aacute;i tối đa cho người mặc. Th&igrave; chất liệu d&agrave;y hơn sẽ ph&ugrave; hợp với m&ugrave;a đ&ocirc;ng, những ng&agrave;y gi&oacute; lạnh đồng thời c&oacute; khả năng giữ phom d&aacute;ng tốt hơn so với những chất liệu kh&aacute;c. Ngo&agrave;i ra bạn n&ecirc;n chọn một chiếc quần c&oacute; khả năng co gi&atilde;n tốt để thoải m&aacute;i hoạt động cả ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng cần lo lắng.</p>\r\n\r\n<h2>2. SỰ VỪA VẶN</h2>\r\n\r\n<p>Sau chất liệu th&igrave; sự vừa vặn của một chiếc quần jeans cũng l&agrave; một trong những yếu tố h&agrave;ng đầu cần được quan t&acirc;m. Một chiếc quần rộng th&ugrave;ng th&igrave;nh, qu&aacute; cỡ sẽ khiến tổng thể bộ trang phục của bạn trở n&ecirc;n thiếu gọn g&agrave;ng, mất c&acirc;n đối. Nhưng một chiếc quần qu&aacute; nhỏ lại khiến bạn kh&ocirc;ng thoải m&aacute;i hoạt động v&agrave; đ&ocirc;i khi c&ograve;n khiến bạn lộ những khuyết điểm cơ thể,</p>\r\n\r\n<p>Khi chọn jeans nhớ ch&uacute; &yacute; đến độ rộng cạp quần phải vừa vặn với v&ograve;ng hai của bạn, chiều d&agrave;i quần vừa đ&uacute;ng đến mắt c&aacute; l&agrave; ho&agrave;n hảo v&agrave; đẹp nhất</p>\r\n\r\n<h2>3. M&Agrave;U SẮC</h2>\r\n\r\n<p>Lựa chọn m&agrave;u sắc của quần jeans thường c&oacute; hai sắc th&aacute;i cơ bản l&agrave; xanh đậm v&agrave; xanh nhạt. Nếu bạn muốn sự ch&uacute; &yacute; của mọi người dồn l&ecirc;n phần th&acirc;n tr&ecirc;n th&igrave; một chiếc quần jeans m&agrave;u xanh đậm l&agrave; gợi &yacute; ph&ugrave; hợp. M&agrave;u xanh đậm gi&uacute;p bạn dễ d&agrave;ng che bớt đi khuyết điểm cơ thể, tr&ocirc;ng thon gọn v&agrave; cao hơn nhiều lần. C&ograve;n m&agrave;u xanh nhạt th&igrave; ngược lại, thường sẽ đem đến sự đầy đặn v&agrave; c&acirc;n đối hơn cho những ch&agrave;ng trai c&oacute; v&oacute;c d&aacute;ng gầy, mảnh khảnh.&nbsp;</p>\r\n\r\n<p>Hi vọng bằng 3 gợi &yacute; yếu tố cần ch&uacute; &yacute; khi lựa chọn quần jeans n&agrave;y sẽ phần n&agrave;o gi&uacute;p bạn t&igrave;m được một chiếc &ldquo;đo ni đ&oacute;ng gi&agrave;y&rdquo; v&agrave; ho&agrave;n hảo nhất cho bạn nh&eacute;!</p>', NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, '2021-05-09 11:53:56', '2021-05-10 00:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `image`, `url`, `target`, `description`, `type`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(28, 'Banner new 1', 'banner-new-1', 'upload/banner/banner 1.jpg', NULL, '_blank', NULL, 1, 1, 1, '2021-05-09 09:15:54', '2021-05-09 09:15:54'),
(29, 'Banner new 2', 'banner-new-2', 'upload/banner/banner 2.jpg', NULL, '_blank', NULL, 1, 2, 1, '2021-05-09 09:16:19', '2021-05-09 09:16:19'),
(30, 'Banner new 3', 'banner-new-3', 'upload/banner/banner 3.jpg', NULL, '_blank', NULL, 1, 3, 1, '2021-05-09 09:16:46', '2021-05-09 09:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `website`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Louis vuitton', 'louis-vuitton', 'upload/brand/louis-vuitton-logo.jpg', 'https://www.louisvuitton.com/', 5, 1, '2020-03-04 06:47:49', '2021-05-08 20:24:56'),
(6, 'Hermes', 'hermes', 'upload/brand/Hermes-logo.png', 'https://www.hermes.com/us/en/', 4, 1, '2020-03-05 05:00:48', '2021-05-08 20:20:54'),
(7, 'Gucci', 'gucci', 'upload/brand/gucci-logo.jpg', 'https://www.gucci.com/', 3, 1, '2020-03-22 20:57:00', '2021-05-08 20:19:27'),
(34, 'Dior', 'dior', 'upload/brand/dior-logo.jpg', 'https://www.dior.com/en_int', 2, 1, '2021-05-08 09:21:15', '2021-05-08 20:17:59'),
(36, 'Zara', 'zara', 'upload/brand/zara-logo-BB357DEF46-seeklogo.com.png', 'https://www.zara.com/vn/', 1, 1, '2021-05-08 20:16:28', '2021-05-08 20:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `type` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `position`, `is_active`, `type`, `created_at`, `updated_at`) VALUES
(83, 'Áo thun', 'ao-thun', '', 89, 2, 1, 2, '2021-04-24 00:30:44', '2021-05-09 09:24:42'),
(84, 'Quần', 'quan', '', 0, 2, 1, 2, '2021-04-24 00:31:26', '2021-05-09 09:23:47'),
(85, 'Giày dép', 'giay-dep', '', 0, 3, 1, 2, '2021-04-24 00:32:44', '2021-05-09 09:23:40'),
(88, 'Áo sơ mi', 'ao-so-mi', '', 89, 1, 1, 2, '2021-05-09 08:44:02', '2021-05-09 09:24:32'),
(89, 'Áo', 'ao', '', 0, 1, 1, 2, '2021-05-09 08:45:27', '2021-05-09 09:23:57'),
(90, 'Quần âu', 'quan-au', '', 84, 1, 1, 1, '2021-05-09 08:46:22', '2021-05-09 08:46:22'),
(91, 'Quần jeans', 'quan-jeans', '', 84, 2, 1, 1, '2021-05-09 08:47:11', '2021-05-09 08:47:11'),
(92, 'Giày da', 'giay-da', '', 85, 1, 1, 1, '2021-05-09 08:47:46', '2021-05-09 08:47:46'),
(93, 'Giày thể thao', 'giay-the-thao', '', 85, 2, 1, 1, '2021-05-09 08:48:06', '2021-05-09 08:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(23, 'Nguyễn Xuân  Đạt', '0372545906', 'nguyenxuandat.bqp@gmail.com', 'test', '2021-04-17 02:23:30', '2021-04-17 02:23:30'),
(24, 'Đạt 2', '0342388318', 'nguyenxuandat@gmail.com', 'test 2', '2021-04-17 02:55:18', '2021-04-17 02:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'SHOP-KM1', 1, 50000, 30, '2020-05-19 16:50:32', '2020-05-19 16:50:32'),
(2, 'SHOP-K2', 2, NULL, 50, '2020-05-19 16:52:27', '2020-05-19 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_01_07_122649_create_categories_table', 1),
(10, '2020_01_09_113851_create_products_table', 1),
(11, '2020_02_06_031728_create_banners_table', 2),
(12, '2020_02_06_032831_create_banners_table', 3),
(13, '2020_02_06_125433_create_vendors_table', 4),
(14, '2020_02_06_125734_create_brands_table', 5),
(15, '2020_03_04_083632_create_products_table', 6),
(17, '2020_03_05_122445_create_contacts_table', 7),
(20, '2020_07_13_130015_create_member_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `total` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `order_status_id` int(11) DEFAULT 0,
  `payment_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `fullname`, `email`, `address`, `address2`, `phone`, `discount`, `note`, `coupon`, `total`, `user_id`, `order_status_id`, `payment_id`, `created_at`, `updated_at`) VALUES
(9, NULL, 'Hoàng Công Dũng', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346007', 0, NULL, '0', 25970000, 0, 4, 0, '2020-05-19 12:18:21', '2020-05-19 12:18:21'),
(10, NULL, 'Hoàng Công Dũng', 'hcdung2109@gmail.com', 'HN', NULL, '0986346006', 11395000, 'AB', 'SHOP-K2', 22790000, 0, 1, 0, '2020-05-20 09:55:45', '2020-05-20 09:55:45'),
(11, 'DH-11-20052020', 'Trần Thuỷ', 'thuthuy@gmail.com', 'Long Biên , Hà nội', NULL, '0986346008', 3995000, 'ko', 'SHOP-K2', 7990000, 0, 1, 0, '2020-05-20 11:01:38', '2020-05-20 11:01:38'),
(12, 'DH-12-21052020', 'Trần Thuỷ', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346008', 0, NULL, NULL, 15980000, 0, 1, 0, '2020-05-21 07:41:24', '2020-05-21 07:41:24'),
(13, 'DH-13-21052020', 'Trần Thuỷ', 'dungthuy2109@gmail.com', 'HN', NULL, '0986346008', 0, NULL, NULL, 15980000, 0, 2, 0, '2020-05-21 07:42:09', '2020-05-21 07:42:09'),
(14, 'DH-14-23052020', 'Trần Thuỷ', 'hcdung2109@gmail.com', 'Bắc Ninh', 'fdfd', '0986346008', 0, 'kfdsfsdf', NULL, 23390000, 0, 3, 0, '2020-05-23 00:30:46', '2020-05-25 23:46:41'),
(15, 'DH-15-26052020', 'HCDUNG', 'hcdung2109@gmail.com', 'Tầng 6, Tòa CT Building , Đống Đa , HN', NULL, '0986346008', 0, 'Giao hàng ngoài 17h', NULL, 7990000, 0, 2, 0, '2020-05-25 23:59:42', '2020-05-26 00:05:38'),
(16, 'DH--21082020-1598017675', 'dung', 'hcdung2109@gmail.com', 'HN', NULL, '098793332', 50000, 'N', 'SHOP-KM1', -67400000, 0, 1, 0, '2020-08-21 06:47:55', '2020-08-21 06:47:55'),
(17, 'DH-21082020-1598018495', 'dung', 'admin@gmail.com', 'HN', NULL, '0986468888', 0, 'dag giao hang', NULL, 15980000, 0, 3, 0, '2020-08-21 07:01:35', '2020-08-21 07:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `image`, `sku`, `user_id`, `order_id`, `product_id`, `price`, `qty`) VALUES
(2, NULL, NULL, '', NULL, 9, 43, 17980000, 2),
(3, NULL, NULL, '', NULL, 9, 30, 7990000, 1),
(4, NULL, NULL, '', NULL, 10, 30, 7990000, 1),
(5, NULL, NULL, '', NULL, 10, 44, 14800000, 2),
(6, NULL, NULL, '', NULL, 11, 30, 7990000, 1),
(7, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 13, 30, 15980000, 2),
(8, 'Apple Watch S5 LTE 40mm viền nhôm dây cao su', 'uploads/product/1586667604_apple-watch-s5-lte-40mm-vien-nhom-day-cao-su-ava-400x400.jpg', NULL, 0, 14, 50, 2900000, 1),
(9, 'ASUS ROG Phone 2 512GB', 'uploads/product/1584948535__600x600__crop_600_asus_rog_phone2_min_1.jpg', NULL, 0, 14, 28, 20490000, 1),
(10, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 15, 30, 7990000, 1),
(11, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 16, 30, 47940000, 6),
(12, 'ASUS ROG Phone 2 512GB', 'uploads/product/1584948535__600x600__crop_600_asus_rog_phone2_min_1.jpg', NULL, 0, 16, 28, 20490000, 1),
(13, 'Oppo Reno 2F', 'uploads/product/1584946658_oppo-reno2-f-400x460.png', NULL, 0, 17, 12, 15980000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Mới'),
(2, 'Đang Xử Lý'),
(3, 'Hoàn Thành'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(255) NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `target` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `is_hot` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT 0,
  `vendor_id` int(11) DEFAULT 0,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `stock`, `price`, `sale`, `position`, `is_active`, `is_hot`, `views`, `category_id`, `url`, `sku`, `color`, `memory`, `brand_id`, `vendor_id`, `summary`, `description`, `meta_title`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(100, 'Giày da bóng', 'giay-da-bong', 'upload/product/giày tây 2.jpg', 10, 2139000, 10000, 6, 1, 0, 0, 92, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-14 04:38:51', '2021-05-09 09:04:39'),
(101, 'Sơ mi kẻ sọc', 'so-mi-ke-soc', 'upload/product/sơ mi 5.jpg', 10, 300000, 10000, 2, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-14 04:39:48', '2021-05-09 09:12:16'),
(102, 'Quần âu đen', 'quan-au-den', 'upload/product/quần âu 2.jpg', 5, 799000, 400, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-14 04:40:43', '2021-05-09 09:11:57'),
(103, 'Giày da lười', 'giay-da-luoi', 'upload/product/giày tây 1.jpg', 31, 1499000, 22, 3, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-14 04:41:32', '2021-05-09 09:04:03'),
(104, 'Áo thun cam', 'ao-thun-cam', 'upload/product/áo thun 1.jpg', 10, 390000, 1500, 2, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-14 04:42:22', '2021-05-09 09:00:13'),
(105, 'Áo sơ mi họa tiết', 'ao-so-mi-hoa-tiet', 'upload/product/sơ mi 1.jpg', 10, 599000, 100000, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-17 18:33:23', '2021-05-09 08:59:54'),
(106, 'Quần âu xám', 'quan-au-xam', 'upload/product/quần âu 1.jpg', 5, 789000, 1000, 7, 1, 0, 0, 90, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:36:20', '2021-05-09 08:55:23'),
(107, 'Quần âu slimfit', 'quan-au-slimfit', 'upload/product/quần âu 4.jpg', 10, 599000, 999, 8, 1, 1, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:37:31', '2021-05-10 00:04:54'),
(108, 'Quần âu dáng đứng', 'quan-au-dang-dung', 'upload/product/quần âu 5.jpg', 10, 698000, 9999, 9, 1, 0, 0, 90, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:38:39', '2021-05-09 08:56:45'),
(109, 'Áo sơ mi đi biển', 'ao-so-mi-di-bien', 'upload/product/sơ mi 2.jpg', 5, 298000, 899, 10, 1, 0, 0, 88, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:39:35', '2021-05-09 08:57:28'),
(110, 'Áo sơ mi trắng', 'ao-so-mi-trang', 'upload/product/sơ mi 3.jpg', 60, 399000, 1499, 11, 1, 0, 0, 88, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:40:23', '2021-05-09 08:58:11'),
(111, 'Sơ mi ngắn tay', 'so-mi-ngan-tay', 'upload/product/sơ mi 4.jpg', 45, 597000, 4980, 12, 1, 0, 0, 88, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-04-18 08:41:06', '2021-05-09 08:58:49'),
(112, 'Áo thun blown', 'ao-thun-blown', 'upload/product/áo thun 2.jpg', 50, 129000, 100, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:00:53', '2021-05-09 09:01:19'),
(113, 'Áo thun đen', 'ao-thun-den', 'upload/product/áo thun 3.jpg', 20, 239000, 500, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:01:52', '2021-05-09 09:01:52'),
(114, 'Áo thun soul', 'ao-thun-soul', 'upload/product/áo thun 4.jpg', 50, 329000, 200, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:02:46', '2021-05-09 09:02:46'),
(115, 'Áo thun vàng', 'ao-thun-vang', 'upload/product/áo thun 5.jpg', 50, 119000, 500, 1, 1, 0, 0, 83, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:03:27', '2021-05-09 09:03:27'),
(116, 'Giày thể thao trắng', 'giay-the-thao-trang', 'upload/product/giày thể thao 1.jpg', 2, 899000, 1000, 1, 1, 0, 0, 93, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:05:35', '2021-05-09 09:05:35'),
(117, 'Giày thể thao đen', 'giay-the-thao-den', 'upload/product/giày thể thao 2.jpg', 50, 599900, 500, 1, 1, 0, 0, 93, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:06:30', '2021-05-09 09:06:30'),
(118, 'Giày thể thao kẻ sọc', 'giay-the-thao-ke-soc', 'upload/product/giày thể thao 3.jpg', 50, 697000, 500, 1, 1, 0, 0, 93, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:07:51', '2021-05-09 09:07:51'),
(119, 'Giày thể thao da lộn', 'giay-the-thao-da-lon', 'upload/product/giày thể thao 4.jpg', 50, 987000, 100, 1, 1, 0, 0, 93, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:08:51', '2021-05-09 09:08:51'),
(120, 'Quần jeans đen trơn', 'quan-jeans-den-tron', 'upload/product/quần jeans 1.jpg', 50, 459000, 50, 1, 1, 0, 0, 91, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:10:04', '2021-05-09 09:10:04'),
(121, 'Quần jeans bạc trơn', 'quan-jeans-bac-tron', 'upload/product/quần jeans 2.jpg', 50, 539000, 5000, 1, 1, 0, 0, 91, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:10:49', '2021-05-09 09:10:49'),
(122, 'Quần jeans ghi', 'quan-jeans-ghi', 'upload/product/quần jeans 5.jpg', 50, 469000, 50, 1, 1, 0, 0, 91, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, '2021-05-09 09:11:17', '2021-05-09 09:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'MANAGER'),
(2, 'ADMIN'),
(3, 'GUEST'),
(5, 'ORTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company`, `address`, `address2`, `image`, `phone`, `hotline`, `tax`, `facebook`, `email`, `introduce`, `created_at`, `updated_at`, `website`) VALUES
(1, 'Xuân Đạt Group', 'Q.Đống Đa , Hà Nội', 'Q.Long Biên, Hà Nội', 'uploads/setting/1618423715_gallery2.jpg', '0886686728', '18001166', '000010', 'https://www.facebook.com/didongthongminh.vn/', 'admin@gmail.com', '<p>ko</p>', NULL, '2021-04-15 10:48:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `first_name`, `last_name`, `email`, `mobile`) VALUES
(2, 'Hoang 2', '', 'vanhoang10@gmail.com', '+84651648612');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `avatar`, `is_active`) VALUES
(1, 'Hoàng Dũng', 'hcdung209@gmail.com', '$2y$10$TNWZo9WER49I.Z5ad4hIMO/cQRYAn8nMXOSgajlfo/pO.LEaXLKxq', NULL, '2020-04-10 21:24:51', '2021-05-09 05:05:25', 2, 'upload/user/gallery2.jpg', 0),
(18, 'Nguyễn Xuân Đạt', 'nguyenxuandat.bqp@gmail.com', '$2y$10$m9Aw7TOYcCCxWb2MOiB80eBV0ZtejRTWwITUqWeshTXsOFpwJYqX6', 'dXhOxLZaehPVpxCTYcuLZeoFWkuBH2EHPSAj2HIOajY30I9SStCq9s4gmU6r', '2021-03-19 04:19:41', '2021-03-19 04:19:41', 1, 'upload/user/Tệp_000 (1).jpeg', 1),
(33, 'test', 'admintest@gmail.com', '$2y$10$ebOXdTK2JLetmdJGGsP9Penjdr7rMAkcUVsjBR2iBj3cWPHOZWaEq', NULL, '2021-04-09 06:27:10', '2021-04-09 06:27:10', 1, '', 1),
(34, 'admin1', 'admin1@gmail.com', '$2y$10$1ezKTh2TUgSRn6VDoFmvje496bLs3CEeoIWi/HCpPEXdKOL1.Wesq', NULL, '2021-04-09 06:31:45', '2021-04-20 09:57:14', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `email`, `phone`, `image`, `website`, `address`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'Lazada', 'lazada', 'cskh@lazada.com.vn', '1800.2097', 'upload/vendor/logo-lazada-2.png', 'https://www.lazada.vn/', 'Việt Nam', 4, 1, '2020-03-22 20:47:20', '2021-05-08 20:35:42'),
(5, 'Tony4men', 'tony4men', 'lienhe@tony4men.vn', '1800 6018', 'upload/vendor/tony4men-logo.jpg', 'https://tony4men.com/', 'Việt Nam', 3, 1, '2020-03-22 20:49:37', '2021-05-08 20:34:11'),
(6, 'Ssstutter', 'ssstutter', 'cskh@ssstutter.com', '1800 1060', 'upload/vendor/sss-logo.jpg', 'https://www.ssstutter.vn/', 'Việt Nam', 2, 1, '2020-03-22 20:52:03', '2021-05-08 20:31:29'),
(20, 'Shopee', 'shopee', 'shopee.cskh@gamil.com', '19962699', 'upload/vendor/shopee-logo.png', 'https://shopee.vn/', NULL, 1, 1, '2021-05-08 10:44:36', '2021-05-08 20:28:22'),
(21, 'Sendo', 'sendo', 'cskh@sendo.com', '19001068', 'upload/vendor/sendo-logo.png', 'https://www.sendo.vn/', NULL, 5, 1, '2021-05-08 20:41:31', '2021-05-08 20:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `banners_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_slug_index` (`slug`) USING BTREE,
  ADD KEY `name` (`name`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
