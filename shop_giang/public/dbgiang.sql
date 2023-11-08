-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `email_admin`, `password`) VALUES
(1, 'Nguyễn Quang linh', 'admin@gmail.com', '12345'),
(2, 'admin_1', '', ''),
(3, 'vantien', 'tien@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(10) UNSIGNED NOT NULL,
  `name_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `description`, `status`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'Thương hiệu nổi tiếng thế giới về ngành thời trang thể thao', 0, 1, NULL, NULL),
(4, 'Nike', '<p><i><strong>Nike là một trong những thương hiệu giày thể thao rất nổi tiếng và được ưa chuộng trên khắp Thế giới trong đó có cả Việt Nam. Nổi bật và gây ấn tượng với người hâm mộ với logo Swoosh và slogan trứ danh “ Just Do It” ok</strong></i></p>', 0, 2, NULL, NULL),
(6, 'Under Armour', 'Under Armour là thương hiệu sở hữu mọi trang phục liên quan đến hoạt động thể chất. Ban đầu nhãn hiệu này rất nổi tiếng với các sản phẩm đồ lót thể thao, sau đã tiến công vào sản xuất trang phục thể thao cao cấp hơn và rất thành công! Gần đây, Under Armour đã giới thiệu các dòng như “Hot & Cold Gear”, và bắt đầu bán quần áo thể thao phù hợp cho từng mùa. Nói về ấn tượng khi sử dụng sản phẩm đến từ Under Armour có thể gói gọn trong hai từ bền và thoải mái.', 0, 3, NULL, NULL),
(7, 'Uniqlo', 'Uniqlo là thương hiệu thời trang bình dân nổi tiếng của đất nước Nhật Bản. Quần áo thể thao của Uniqlo được làm từ các chất liệu vải cao cấp như polyester, thun cotton, chất liệu Uni Sport … với nhiều ưu điểm như thấm hút mồ hôi cực tốt, thoáng khí, khử mùi cơ thể, kháng khuẩn tạo cảm giác thoải mái và khô ráo trong suốt quá trình vận động. Thiết kế của quần áo thể thao Uniqlo đơn giản nhưng không kém phần tinh tế, hợp xu hướng và đảm bảo tính thời trang.', 0, 4, NULL, NULL),
(8, 'Fabletic', 'Fabletics chứng minh rằng quần áo thể thao chẳng bao giờ là nhàm chán. Hãng cung cấp các thiết kế áo ngực thể thao hấp dẫn, sôi nổi và thoải mái nhất có thể cho người mặc. Fabletics tập trung thể hiện sự năng động, thời trang và thấm hút mồ hôi tốt. Đây cũng được đánh giá là một trong những thương hiệu bán quần áo thể thao mà bạn nên thử ít nhất 1 lần trong đời.', 1, 5, NULL, NULL),
(9, 'Puma', 'Nếu bạn là một fan bóng đá bóng đá chân chính chắc chắn bạn không thể không biết đến thương hiệu quần áo thể thao lớn thứ ba trên thế giới – Puma. Đây là nhà tài trợ chính của các câu lạc bộ bóng đá lớn nhất thế giới. Quần short, giày và áo khoác thể thao của nhãn hiệu này luôn luôn cháy hàng và luôn nằm trong top sản phẩm bán chạy nhất trên toàn thế giới.', 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description`, `img`, `status`, `place`, `created_at`, `updated_at`) VALUES
(15, 'Giày', '<p>Giày thể thao</p>', 'uploads/categorys/1695997869_shoes.png', '1', '2', NULL, '2023-09-29 07:31:09'),
(16, 'Quần & Áo', '<p>Trang phục thể thao</p>', 'uploads/categorys/1695998369_ao.png', '1', '1', NULL, '2023-09-30 08:24:49'),
(17, 'Tất thể thao', '<p>Tất thể thao</p>', 'uploads/categorys/1695998384_sock.png', '1', '3', NULL, '2023-09-29 07:39:44'),
(19, 'Phụ kiện', '<p>Phụ kiện</p>', 'uploads/categorys/1695999574_ball.png', '1', '5', NULL, '2023-09-29 07:59:34'),
(20, 'Găng tay', '<p>Găng tay</p>', 'uploads/categorys/1695998690_gloves.png', '1', '4', NULL, '2023-09-29 07:44:50'),
(21, 'Bộ môn khác', '<p>Bộ môn khác</p>', 'uploads/categorys/1695999852_sport.png', '1', '7', NULL, '2023-09-29 08:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id_color` int(10) UNSIGNED NOT NULL,
  `name_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id_color`, `name_color`, `color`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trắng đen', 'Trắng đen', 'Trắng đen', 0, NULL, '2023-10-09 00:08:03'),
(4, 'Xanh - Đen', 'Xanh - Đen', 'Xanh - Đen', 1, NULL, NULL),
(5, 'Vàng - Đỏ', 'Vàng - Đỏ', 'Vàng - Đỏ', 1, NULL, NULL),
(6, 'Hồng - Trắng', 'Hồng - Trắng', 'Hồng - Trắng', 1, NULL, NULL),
(7, 'Đỏ', 'Đỏ', 'Đỏ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE `common` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `common_product`
--

CREATE TABLE `common_product` (
  `id_common` int(10) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_product`
--

INSERT INTO `common_product` (`id_common`, `id_product`, `id_size`, `id_color`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, 1, NULL, NULL),
(2, 7, 2, 1, NULL, NULL, NULL),
(3, 6, 1, 1, 1, NULL, NULL),
(4, 6, 1, 2, 1, NULL, NULL),
(5, 6, 3, 3, 1, NULL, NULL),
(6, 6, 4, 4, 1, NULL, NULL),
(7, 6, 7, 7, 1, NULL, NULL),
(8, 7, 3, 3, 1, NULL, NULL),
(9, 7, 4, 4, 1, NULL, NULL),
(10, 7, 5, 5, 1, NULL, NULL),
(11, 8, 1, 1, 1, NULL, NULL),
(12, 8, 1, 2, 1, NULL, NULL),
(13, 8, 1, 3, 1, NULL, NULL),
(14, 8, 3, 4, 1, NULL, NULL),
(15, 8, 4, 4, 1, NULL, NULL),
(16, 8, 5, 4, 1, NULL, NULL),
(17, 8, 6, 6, 1, NULL, NULL),
(18, 9, 1, 1, 1, NULL, NULL),
(19, 9, 2, 2, 1, NULL, NULL),
(20, 9, 3, 3, 1, NULL, NULL),
(21, 9, 4, 4, 1, NULL, NULL),
(22, 9, 5, 5, 1, NULL, NULL),
(23, 9, 6, 6, 1, NULL, NULL),
(24, 10, 1, 1, 1, NULL, NULL),
(25, 10, 2, 2, 1, NULL, NULL),
(26, 10, 3, 3, 1, NULL, NULL),
(27, 10, 4, 4, 1, NULL, NULL),
(28, 10, 5, 5, 1, NULL, NULL),
(29, 10, 6, 6, 1, NULL, NULL),
(30, 18, 1, NULL, NULL, '2023-10-25 20:09:35', '2023-10-25 20:09:35'),
(31, 19, 1, NULL, NULL, '2023-10-25 20:10:21', '2023-10-25 20:10:21'),
(32, 20, 1, NULL, NULL, '2023-10-25 21:40:15', '2023-10-25 21:40:15'),
(33, 21, 1, NULL, NULL, '2023-10-25 21:41:39', '2023-10-25 21:41:39'),
(34, 22, 6, NULL, NULL, '2023-10-25 21:42:29', '2023-10-25 21:42:29'),
(35, 23, 6, NULL, NULL, '2023-10-25 21:45:22', '2023-10-25 21:45:22'),
(36, 24, 6, NULL, NULL, '2023-10-25 21:46:24', '2023-10-25 21:46:24'),
(37, 25, 1, NULL, NULL, '2023-10-26 07:51:31', '2023-10-26 07:51:31'),
(38, 26, 1, NULL, NULL, '2023-10-30 04:54:31', '2023-10-30 04:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_customer`
--

CREATE TABLE `info_customer` (
  `id_shipping` int(10) UNSIGNED NOT NULL,
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_customer`
--

INSERT INTO `info_customer` (`id_shipping`, `id_customer`, `customer_name`, `customer_phone`, `customer_address`, `customer_note`, `created_at`, `updated_at`) VALUES
(1, '5', 'Nguyễn Trường Giang', 'aaaaaaaaaa', 'aaaaaaaaa', 'aaaaa', '2023-10-29 20:08:19', '2023-10-29 20:08:19'),
(14, '4', 'Nguyễn Văn Tùng', '097837823864', 'Thạch thát Hà Nội', 'Gia nhanh', '2023-11-03 23:46:33', '2023-11-03 23:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_09_16_064439_category', 1),
(10, '2023_09_17_145413_product', 2),
(11, '2023_09_18_033819_brand', 3),
(12, '2023_10_01_151102_user', 4),
(13, '2023_10_02_123012_color', 5),
(14, '2023_10_02_123048_size', 5),
(15, '2023_10_02_123121_common', 5),
(16, '2023_10_11_150719_common_product', 6),
(17, '2023_10_30_022003_info_customer', 7),
(18, '2023_11_01_154718_news', 8),
(19, '2023_11_03_104935_nv_contact', 9),
(23, '2023_11_03_153504_tbl_payment', 10),
(24, '2023_11_03_153526_tbl_order', 10),
(25, '2023_11_03_153554_tbl_order_details', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(10) UNSIGNED NOT NULL,
  `new_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_title`, `new_des`, `new_content`, `new_img`, `new_status`, `created_at`, `updated_at`) VALUES
(1, '[NOVAEDU x AJC] 🔥 Tọa đàm \"Tư duy khởi nghiệp\" năm 20231111', 'aaaaaaaaa111111', 'aaaaaa11111', 'uploads/news/1699004309_397235875_715522490610488_6637642226780851493_n.jpg', 0, '2023-11-01 09:05:36', '2023-11-03 03:36:41'),
(3, 'URBAS CORLURAY PACK - SẮC THU KHÓ CƯỠNG -', 'Là bộ sản phẩm thuộc dòng Urbas, Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể hiện cá tính riêng biệt khó trùng lặp.', '<p><br><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_1.jpg\"></p><p>Urbas Corluray Pack đem đến cho bạn một cảm giác khác \"lạ\".</p><p><br>&nbsp;</p><h3>&nbsp;</h3><h3>CORLURAY = \'COR\'(DUROY) + (CO)\'LOUR\' + \'RAY\'</h3><h3>&nbsp;</h3><p><br>&nbsp;</p><p><br>Chất liệu <i>Corduroy</i> lần đầu tiên được ứng dụng trên dáng giày Low/High Top quen thuộc, kết hợp với cảm hứng bất chợt từ những tia nắng (ray) cuối cùng của kì nghỉ xuân “dài hạn\", vượt qua mùa hạ để chạm thẳng sang thu. Hai yếu tố trên phối trộn cùng với những gam màu tươi tắn để tạo nên một cái tên <strong>Corluray</strong> đầy ý nghĩa.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_2.jpg\"></p><p><br>&nbsp;</p><p>Chất liệu Corduroy (vải nhung) lần đầu tiên được Ananas ứng dụng trên giày</p><p><br>Hẳn mọi người đã không mấy xa lạ với chất liệu Corduroy - Nhung gân với các sợi nổi trên bề mặt cùng tính chất bền bỉ, đa dụng và ấm áp. Đặc biệt, tên gọi khác của loại vải Corduroy sợi to (3-8 sợi/inch) - <strong>Elephant Cord</strong> được chúng tôi cố tình cho xuất hiện cầu kỳ trên tất cả các phối màu của bộ sản phẩm nhằm nhấn mạnh và tạo ấn tượng với việc lần đầu tiên ứng dụng loại vải khác trên phần Upper.<br>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><figure class=\"image\"><img src=\"https://ananas.vn/wp-content/uploads/pro_A61089_7.jpg\"></figure></td><td><figure class=\"image\"><img src=\"https://ananas.vn/wp-content/uploads/pro_A61092_7.jpg\"></figure></td></tr></tbody></table></figure><p><br>&nbsp;</p><p>&nbsp;</p><p>Vải Corduroy gân to (3-8 sợi/inch) còn được gọi bằng tên thân thuộc <strong>Elephant Cord</strong></p><p><br>Cảm xúc từ những tia nắng cuối cùng cho phép ý tưởng lộ nét nổi bật ở những gam màu rực rỡ nhưng vẫn trầm ấm và dịu dàng, đủ truyền tải sự chuyển giao giữa 2 mùa. Với các colorways: Grasses (cỏ úa), Mouse (xám tro), Mudbrick (đỏ đất), Faded Pink (hồng phai) và Deep Green (lá giao mùa) là tên gọi ứng với 5 màu sắc chủ đạo dễ bắt gặp ở các bức tranh phong cảnh tổng thể của mùa thu.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_5.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_6.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_7.jpg\"></p><p><br>&nbsp;</p><p>Cảm hứng màu sắc và xử lí thiết kế bằng cách xoay hướng các đường vân song song của chất liệu corduroy</p><p><br>Sau quá trình tìm hiểu những phương án mới, các chi tiết thiết kế (không thể bỏ qua) chưa từng xuất hiện trong các sản phẩm trước đây đã được dùng để thể hiện trên bộ sản phẩm lần này. Urbas Corluray kết hợp nhiều tiểu tiết “nâng khăn sửa túi” với nút oze bạc đóng dẹp tạo thành lỗ xỏ dây giày. Chạy quanh các nút này là dây bản tròn được thay thế có ý đồ. Dây màu trắng ngà với đầu tips tiệp màu Upper chính là yếu tố “ghi bàn” góp phần đánh bật các đường gân trên nền chất liệu chính. Ngoài ra, sự chuyển giao được “hoạ” thực tế bằng chi tiết line dọc trải dài phần Foxing ở hai phiên bản Low/High Top. Tất cả tạo thành một tổng thể màu sắc nhưng nhẹ nhàng vừa đủ, phù hợp với những người trẻ muốn ghi dấu ấn cá nhân riêng biệt.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_8.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_9.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_10.jpg\"></p><p><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_11.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/blog_corluray_12.jpg\"></p><p>Ứng dụng biến hoá khi kết hợp với các item khác để tạo nên các phong cách thời trang khác nhau.</p><p><br>&nbsp;</p><h3>&nbsp;</h3><h3>URBAS CORLURAY PACK - HIỆN ĐÃ LÊN KỆ TẠI TẤT CẢ CÁC CỬA HÀNG TRONG HỆ THỐNG</h3><h3>&nbsp;</h3><p><br>Với size run từ 35 - 46 cho tất cả các màu, Urbas Corluray Pack chắc chắn là một lựa chọn hợp lí cho những ai yêu thích thời trang phi giới tính. Hiện bộ sản phẩm đã sẵn sàng trên kệ tại tất cả các <a href=\"https://ananas.vn/stores/\">cửa hàng </a>trong hệ thống hoặc ngay trên website này, chờ bạn đến COP.</p>', 'uploads/news/1699004550_Corluray_bannerweb_desktop1920x1050.jpg', 1, '2023-11-03 02:42:30', '2023-11-03 03:38:27'),
(4, 'VINTAS SAIGON 1980s Cảm hứng Sài Gòn xưa giữa thời hiện đại', 'Là một bộ sưu tập thuộc dòng sản phẩm Vintas, Saigon 1980s Pack đem đến một sự lựa chọn “cũ kỹ thú vị”, phù hợp cho những người trẻ sống giữa thời hiện đại nhưng lại yêu cái nét bình dị của Sài Gòn ngày xưa.', '<p><br><img src=\"https://ananas.vn/wp-content/uploads/Blog-1980s_1.jpg\"></p><p>Vintas “Saigon 1980s” - must-have item của những con người yêu phong cách vintage / retro</p><p><br>&nbsp;</p><h3>&nbsp;</h3><h3>SAIGON 1980s PACK THUỘC VINTAS - MỘT DÒNG SẢN PHẨM CỦA ANANAS</h3><h3>&nbsp;</h3><p><br>&nbsp;</p><p><br>Với cảm hứng từ hình ảnh mang \"màu film\" của đường phố Sài Gòn, nét riêng của Vintas Saigon 1980s Pack nổi bật qua đặc điểm: không “nét căng”, không rực rỡ mà lại thiên về sắc xanh, đỏ nhiều cảm xúc. Cụ thể, những màu sắc như Dark Denim, Vin Black, Sedona Sage và Vin Cordovan được ứng dụng trong thiết kế đều là những màu bạn dễ dàng bắt gặp khi tìm đọc các tài liệu về Sài Gòn trong quá khứ. Trên dáng giày Low Top / High Top cơ bản, cảm giác hoài niệm mà Vintas Saigon 1980s mang lại gợi người ta nhớ về hình bóng của Sài Gòn vào những năm “1900 hồi đó”. Gam màu trầm của Upper khi sử dụng chất liệu Canvas dày dặn phối cùng Suede, cộng thêm sự chắc chắn của chiếc đế cao su (vulcanized) màu gum tự nhiên, 5 lựa chọn thuộc Vintas Saigon 1980s Pack tạo nên một bức tranh hoài cổ, thể hiện sự điềm đạm trong tính cách người mang.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/Blog-1980s_2.jpg\"></p><p>Bộ sản phẩm mang hơi thở của đô thành Sài Gòn</p><p><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/Blog-1980s_3.jpg\"></p><p>Giữa thành phố Sài Gòn “rất mới” vẫn còn đó những con người Sài Gòn “rất cũ”</p><p><br>Những quán cà phê “cóc” kê cái bàn, cái ghế đơn giản với đủ mọi đối tượng khách hàng từ anh xe ôm đến bác hàng xóm ra ngồi đọc báo, chơi cờ; những tiệm may đo áo dài, veston nơi người thợ may tự tay cầm thước dây đo khách từng chút một; những chiếc bạt dựng tạm nơi vỉa hè cùng dòng chữ “hớt tóc” viết vội bằng tay. Nghĩ về Sài Gòn xưa, có lẽ rất khó để không nhớ đến những hình ảnh đặc trưng này.<br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/Blog-1980s_4.jpg\"></p><p><br>Trong quá trình tìm kiếm chất liệu để thể hiện concept, chúng tôi may mắn gặp được một nhóm bạn trẻ mang sẵn \"nét xưa Vintas\" trong tính cách. Họ vốn đã yêu Sài Gòn, yêu những điều xưa cũ và gần gũi nơi đây. Do đó, câu chuyện về một ngày bình thường trong bối cảnh \"hơi khác thường\" của cậu thanh niên Thích Thanh Thế được xây dựng với cảm xúc rất tự nhiên, chân thật.<br><br>&nbsp;</p><p>&nbsp;</p><p><br>Vintas Saigon 1980s Pack đã lên kệ tại tất cả các cửa hàng chính thức của Ananas và sẵn sàng chờ bạn đến COP. Dù là một người lớn lên tại Sài Gòn, hay chỉ đơn thuần yêu nét đẹp bình dị của Sài Gòn ngày xưa, Saigon 1980s đều có thể là đôi giày dành cho bạn.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/Blog-1980s_5.jpg\"></p><p>Sài Gòn đã thay đổi nhưng người Sài Gòn thì vẫn luôn bình dị như vậy thôi</p>', 'uploads/news/1699004597_Blog-1980s_0.jpg', 1, '2023-11-03 02:43:17', '2023-11-03 02:43:17'),
(5, 'SNEAKER FEST VIETNAM VÀ SỰ KẾT HỢP - ANANAS PEEPING PATTAS -', 'Có mặt tại Sneaker Fest Vietnam 2019, Ananas hân hạnh giới thiệu đến bạn một phát hành mang tên Ananas Peeping Pattas - bản collab giới hạn đặc biệt đánh dấu cho lần đầu hợp tác giữa hai bên. Dáng giày Vulcanized High Top của Ananas được lựa chọn trong thiết kế và cảm hứng bắt nguồn từ linh vật Peeping - đại diện cho tinh thần xuyên suốt 6 năm qua của Sneaker Fest Vietnam, chúng tôi tự tin đây sẽ là sản phẩm đáng mong chờ cho mọi “đầu giày” vào mùa hè 2019 này.', '<p><br><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas00.jpg\"></p><p>Ananas Peeping Pattas - sự kết hợp đánh dấu lần đầu hợp tác <strong>Ananas x Sneaker Fest Vietnam</strong></p><p><br>Với số lượng phát hành giới hạn chỉ 50 đôi, cộng với việc các chi tiết sản phẩm, packaging của <i><strong>Ananas Peeping Pattas</strong></i> đều được \"chăm chút\" với các ý tưởng mới, khác biệt so với những phiên bản trước đây từ Ananas càng làm cho bản collab trở nên đặc biệt.<br><br>Về tổng thể, bộ đế cao su All white tối giản làm phần nền vững chắc và tạo điểm nhấn cho phần Upper bên trên có phần phức tạp. Chất liệu vải canvas 10oz cao cấp màu Black được sử dụng bao quanh bức tranh đầy màu sắc, trải dài và phủ toàn bộ phần má và cổ giày. Gương mặt Peeping (linh vật quen thuộc của các kì Sneaker Fest VietNam) trở nên nổi bật hơn bao giờ hết khi được sử dụng 2 màu black&amp;white ngay tại trung tâm artwork. Bản collab đem lại cho người nhìn cảm giác về một thế hệ trẻ cá tính, có phần nổi loạn nhưng cũng rất tích cực trong hành trình tìm kiếm và khẳng định bản thân.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas02.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas03.jpg\"></p><p>Thiết kế mang \"linh hồn của Sneaker Fest Vietnam với linh vật đại diện Peeping làm trung tâm</p><p><br>&nbsp;</p><h3>&nbsp;</h3><h3>ANANAS PEEPING PATTAS - LIMITED COLLABORATION CHỈ PHÁT HÀNH VỚI SỐ LƯỢNG 50 ĐÔI</h3><h3>&nbsp;</h3><p><br>&nbsp;</p><p>Một điểm đặc biệt của Ananas Peeping Pattas cần phải kể đến là dòng chữ “cộp mác riêng” của bản collab Ananas x Sneaker Fest Vietnam được in 3D trên lưỡi gà mà bạn không thể tìm được ở bất cứ đâu khác. Nội dung in với kích thước vừa vặn cùng điểm nhấn màu vàng bắt mắt đủ tô điểm cho đôi giày thêm ấn tượng và làm tự hào bất cứ ai sở hữu chúng.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas06.jpg\"></p><p>\"Một sản phẩm của Ananas - chỉ có thể COP tại Sneaker Fest Vietnam 2019”</p><p><br>Để nhấn mạnh sự đặc biệt của mỗi sản phẩm, phần Heel Strap của từng đôi được thêu rõ nét số thứ tự từ 1 đến 50 với màu chỉ Butter trùng với màu dây chính. Phiên bản cũng có thêm 1 bộ dây màu Black đơn giản đi kèm để khách hàng có thể thay đổi theo hoàn cảnh. Với những chi tiết thiết kế này, chúng tôi muốn gửi gắm yếu tố \"duy nhất\" lên mỗi đôi giày để người sở hữu sẽ cảm thấy mình thật đặc biệt.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas08.jpg\"></p><p>Heel Strap với số thự tự được thêu chính xác từng đường kim, mũi chỉ</p><p><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas05.jpg\"></p><p>Sản phẩm sẽ có 2 bộ dây giày màu Butter có sẵn trên giày và màu Black đi kèm</p><p><br>&nbsp;</p><h3>&nbsp;</h3><h3>BẠN LÀ NGƯỜI DUY NHẤT ĐƯỢC UNBOX NẾU SỞ HỮU SẢN PHẨM</h3><h3>&nbsp;</h3><p><br>Ý tưởng packaging của Ananas Peeping Pattas lần này tạo nên những chiếc hộp mang một dáng hình khác biệt so với những chiếc hộp Ananas thường thấy. Sự tương phản lại một lần nữa được sử dụng, khi thiết kế tối giản bởi các pattern được in màu white trên nền giấy kraft có nhiệm vụ tạo spotlight cho chiếc Seal niêm phong và tem đánh số thứ tự trên mỗi hộp giày. Sở hữu chúng đồng nghĩa với việc bạn lại một lần nữa trở nên duy nhất trong lúc “bóc tem”, đập hộp. Ngoài ra, tem chống ẩm Micro-Pak từ nguyên liệu tái chế (recyclable) thân thiện môi trường lần đầu tiên được chúng tôi sử dụng cho phiên bản này.<br><br>&nbsp;</p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas09.jpg\"></p><p><img src=\"https://ananas.vn/wp-content/uploads/peeping_pattas11.jpg\"></p><p>Hộp giày được dán Seal kỹ lưỡng và tem chống ẩm Micro-Pak® lần đầu tiên được sử dụng</p><p><br>Ananas Peeping Pattas sẽ mở bán 01 ngày duy nhất tại sự kiện Sneaker Fest Vietnam 2019, Nhà Thi Đấu Nguyễn Du, 116 Nguyễn Du, Quận 1, TP.HCM:<br>- Số lượng giới hạn chỉ 50 đôi<br>- Size run: 37 - 43<br>- Giá retail: 1.000.000 đ<br>- Hình thức mua hàng: First come first serve<br>- Thời điểm phát hành: 9h30 ngày 21/07/2019<br>Còn bạn, bạn sẽ làm gì để trở thành 1 trong 50 người sở hữu đôi giày đặc biệt này? Chúng tôi đợi bạn tại gian hàng Ananas, khu vực S2 - Sneaker Fest Vietnam 2019.</p>', 'uploads/news/1699004643_peeping_pattas_banner.jpg', 1, '2023-11-03 02:44:03', '2023-11-03 02:44:03'),
(6, 'THanh niên thạch thất bị ngáo đá', 'Có mặt tại Sneaker Fest Vietnam 2019, Ananas hân hạnh giới thiệu đến bạn một phát hành mang tên Ananas Peeping Pattas - bản collab giới hạn đặc biệt đánh dấu cho lần đầu hợp tác giữa hai bên. Dáng giày Vulcanized High Top của Ananas được lựa chọn trong thiết kế và cảm hứng bắt nguồn từ linh vật Peeping - đại diện cho tinh thần xuyên suốt 6 năm qua của Sneaker Fest Vietnam, chúng tôi tự tin đây sẽ là sản phẩm đáng mong chờ cho mọi “đầu giày” vào mùa hè 2019 này.', '<p>mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>', 'uploads/news/1699081059_397235875_715522490610488_6637642226780851493_n.jpg', 0, '2023-11-03 23:57:39', '2023-11-03 23:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `nv_contact`
--

CREATE TABLE `nv_contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nv_contact`
--

INSERT INTO `nv_contact` (`contact_id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Trường Giang', NULL, '0961783196', 'aaaaaaaaa', '2023-11-03 08:11:59', '2023-11-03 08:11:59'),
(2, 'Nguyễn Trường Giang', NULL, '0961783196', 'sssssssssssss', '2023-11-04 07:29:29', '2023-11-04 07:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `rating` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `id_brand`, `name_product`, `price`, `description`, `product_img1`, `product_img2`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(6, 15, 1, 'Giày bóng đá Mitre 201106 TF', '720000', 'giày thể thao chính hãng', 'uploads/products/1696041834_giay1a.png', 'uploads/products/1696041834_giay1b.png', 1, NULL, '2023-09-29 19:43:54', '2023-09-29 20:54:32'),
(7, 16, 4, 'Áo bóng đá Liverpool', '530000', 'Áo bóng đá Liverpool sân nhà mùa giải 23/24 hàng Thái Lan\r\nCác mẫu áo bóng đá Thái Lan sẽ được sản xuất giống 99% áo chính hãng, phiên bản cầu thủ thi đấu trên sân. Các nhà sản xuất đến từ xứ sở “Chùa Vàng” sẽ mô phỏng 99% dựa trên mẫu Authentic (Adidas) / Jersey Match (Nike), thường được gọi là bản Player, bản Super Fake (S.F).\r\n\r\nƯu điểm:\r\n\r\nChất vải – Chi tiết/Hoạ tiết – Bề mặt vải giống chính hãng.\r\nThiết kế Bodyfit Form, co giãn và ôm vào cơ thể. Được form được sản xuất theo size Châu Âu.\r\nSợi vải thấm hút và thoát mồ hôi tốt, giúp trang phục không bị giữ nước, nhẹ hơn và không gây mùi hôi khi tiếp xúc vi khuẩn từ không khí bên ngoài khi chơi thể thao.\r\nKhó phân biệt được giữa hàng Thái Lan S.F và chính hãng', 'uploads/products/1696042434_ao2a.png', 'uploads/products/1696042434_ao2b.png', 1, NULL, '2023-09-29 19:53:54', '2023-09-29 19:53:54'),
(8, 16, 1, 'Áo bóng đá Liverpool', '560000', 'Áo bóng đá Liverpool sân nhà mùa giải 23/24 hàng Thái Lan\r\nCác mẫu áo bóng đá Thái Lan sẽ được sản xuất giống 99% áo chính hãng, phiên bản cầu thủ thi đấu trên sân. Các nhà sản xuất đến từ xứ sở “Chùa Vàng” sẽ mô phỏng 99% dựa trên mẫu Authentic (Adidas) / Jersey Match (Nike), thường được gọi là bản Player, bản Super Fake (S.F).\r\n\r\nƯu điểm:\r\n\r\nChất vải – Chi tiết/Hoạ tiết – Bề mặt vải giống chính hãng.\r\nThiết kế Bodyfit Form, co giãn và ôm vào cơ thể. Được form được sản xuất theo size Châu Âu.\r\nSợi vải thấm hút và thoát mồ hôi tốt, giúp trang phục không bị giữ nước, nhẹ hơn và không gây mùi hôi khi tiếp xúc vi khuẩn từ không khí bên ngoài khi chơi thể thao.\r\nKhó phân biệt được giữa hàng Thái Lan S.F và chính hãng', 'uploads/products/1696042519_ao1a.png', 'uploads/products/1696042519_ao1b.png', 1, NULL, '2023-09-29 19:55:19', '2023-09-29 19:55:19'),
(9, 17, 1, 'TẤT RUNNING X ADIZERO HEAT.RDY', '450000', 'ĐÔI TẤT CHẠY BỘ DÀNH CHO TẬP LUYỆN VÀ THI ĐẤU, CÓ SỬ DỤNG CHẤT LIỆU TÁI CHẾ.\r\nVới tất chạy bộ, mọi chi tiết nhỏ nhất đều đóng vai trò quan trọng. Nhằm giảm thiểu phân tâm và hỗ trợ mục tiêu tốc độ, đôi tất chạy bộ adidas này giúp đôi chân bạn luôn mát mẻ nhờ công nghệ HEAT.RDY và nâng đỡ cấu trúc bàn chân nhờ công nghệ FORMOTION. Đường may phẳng ở mũi chân giảm thiểu chà xát, cùng chất liệu vải lưới thoáng khí giúp không khí lưu thông. Bất kể bạn chạy cự ly 10k hay marathon, đôi chân bạn sẽ luôn dễ chịu.\r\n\r\nLàm từ một loạt chất liệu tái chế và có chứa tối thiểu 70% thành phần tái chế, sản phẩm này đại diện cho một trong số rất nhiều các giải pháp của chúng tôi hướng tới chấm dứt rác thải nhựa.', 'uploads/products/1696042972_tat1a.jpg', NULL, 1, NULL, '2023-09-29 20:02:52', '2023-09-29 20:02:52'),
(10, 20, 4, 'Găng tay thủ môn Eepro Vigo EG10M7', '500000', 'aa', 'uploads/products/1696043345_gang1a.jpg', NULL, 1, NULL, '2023-09-29 20:09:05', '2023-09-29 20:09:05'),
(25, 15, 1, 'abchdhjaa', '3333', 'ssssssss', 'uploads/products/1698331891_1200px-hcmute.svg.png', 'uploads/products/1698331891_bo-giao-duc-va-dao-tao-tiep-tuc-xay-dung-va-hoan-thien-co-so-du-lieu-nganh-giao-duc.jpg', 1, NULL, '2023-10-26 07:51:31', '2023-10-26 07:51:31'),
(26, 15, 1, 'aaaaaaa', '1111', 'aaaaaaaa', 'uploads/products/1698666871_dean1665.png', 'uploads/products/1698666871_dean1665.png', 1, NULL, '2023-10-30 04:54:31', '2023-10-30 04:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int(10) UNSIGNED NOT NULL,
  `name_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `name_size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S', 'Từ 30 - 40 kg', 0, NULL, NULL),
(2, 'M', 'Từ 45 - 55kg', 0, '2023-10-09 00:37:19', '2023-10-09 00:38:05'),
(4, 'L', 'tỪ 50-60KG', 1, NULL, NULL),
(5, 'XL', 'từ 60-70 kg', 1, NULL, NULL),
(6, 'XXL', 'Từ 70-100kg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, '616,000.00', 'Đang chờ xử lý', NULL, NULL),
(2, 5, 1, 2, '616,000.00', 'Đang chờ xử lý', NULL, NULL),
(3, 5, 1, 3, '617,222.10', 'Đang chờ xử lý', NULL, NULL),
(4, 5, 1, 4, '617,222.10', 'Đang chờ xử lý', NULL, NULL),
(5, 5, 1, 5, '617,222.10', 'Đang chờ xử lý', NULL, NULL),
(6, 5, 1, 6, '583,000.00', 'Đang chờ xử lý', NULL, NULL),
(7, 5, 1, 7, '616,000.00', 'Đang chờ xử lý', NULL, NULL),
(8, 5, 1, 8, '0.00', 'Đang chờ xử lý', NULL, NULL),
(9, 5, 1, 9, '0.00', 'Đang chờ xử lý', NULL, NULL),
(10, 5, 1, 10, '0.00', 'Đang chờ xử lý', NULL, NULL),
(11, 5, 1, 11, '0.00', 'Đang chờ xử lý', NULL, NULL),
(12, 5, 1, 12, '0.00', 'Đang chờ xử lý', NULL, NULL),
(13, 5, 1, 13, '0.00', 'Đang chờ xử lý', NULL, NULL),
(14, 5, 1, 14, '0.00', 'Đang chờ xử lý', NULL, NULL),
(15, 5, 1, 15, '0.00', 'Đang chờ xử lý', NULL, NULL),
(16, 5, 1, 16, '583,000.00', 'Đang chờ xử lý', NULL, NULL),
(17, 4, 12, 17, '616,000.00', 'Đang chờ xử lý', NULL, NULL),
(18, 4, 13, 18, '792,000.00', 'Đang chờ xử lý', NULL, NULL),
(19, 4, 12, 19, '495,000.00', 'Đang chờ xử lý', NULL, NULL),
(20, 4, 12, 20, '792,000.00', 'Đang chờ xử lý', NULL, NULL),
(21, 4, 14, 21, '583,000.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(2, 3, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(3, 3, 26, 'aaaaaaa', '1111', '1', NULL, NULL),
(4, 4, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(5, 4, 26, 'aaaaaaa', '1111', '1', NULL, NULL),
(6, 5, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(7, 5, 26, 'aaaaaaa', '1111', '1', NULL, NULL),
(8, 6, 7, 'Áo bóng đá Liverpool', '530000', '1', NULL, NULL),
(9, 7, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(10, 16, 7, 'Áo bóng đá Liverpool', '530000', '1', NULL, NULL),
(11, 17, 8, 'Áo bóng đá Liverpool', '560000', '1', NULL, NULL),
(12, 18, 6, 'Giày bóng đá Mitre 201106 TF', '720000', '1', NULL, NULL),
(13, 19, 9, 'TẤT RUNNING X ADIZERO HEAT.RDY', '450000', '1', NULL, NULL),
(14, 20, 6, 'Giày bóng đá Mitre 201106 TF', '720000', '1', NULL, NULL),
(15, 21, 7, 'Áo bóng đá Liverpool', '530000', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '1', 'Đang chờ xử lý', NULL, NULL),
(3, '2', 'Đang chờ xử lý', NULL, NULL),
(4, '1', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL),
(6, '1', 'Đang chờ xử lý', NULL, NULL),
(7, '1', 'Đang chờ xử lý', NULL, NULL),
(8, '1', 'Đang chờ xử lý', NULL, NULL),
(9, '1', 'Đang chờ xử lý', NULL, NULL),
(10, '1', 'Đang chờ xử lý', NULL, NULL),
(11, '1', 'Đang chờ xử lý', NULL, NULL),
(12, '1', 'Đang chờ xử lý', NULL, NULL),
(13, '1', 'Đang chờ xử lý', NULL, NULL),
(14, '1', 'Đang chờ xử lý', NULL, NULL),
(15, '1', 'Đang chờ xử lý', NULL, NULL),
(16, '1', 'Đang chờ xử lý', NULL, NULL),
(17, '1', 'Đang chờ xử lý', NULL, NULL),
(18, '1', 'Đang chờ xử lý', NULL, NULL),
(19, '1', 'Đang chờ xử lý', NULL, NULL),
(20, '1', 'Đang chờ xử lý', NULL, NULL),
(21, '1', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn  Văn A', 'vana@example.com', '123456789', '2023-10-01 20:07:38', '2023-10-01 20:07:38'),
(2, 'Nguyễn  Văn A', 'vana@example.com', '123456789', '2023-10-01 20:07:42', '2023-10-01 20:07:42'),
(3, 'Nguyễn  Văn A', 'vana@example.com', '123456789', '2023-10-02 05:10:59', '2023-10-02 05:10:59'),
(4, 'Đặng Hữu Phước', 'thuuyen@gmail.com', '123456', '2023-10-02 05:52:29', '2023-10-02 05:52:29'),
(5, 'Nguyễn Quang Linh', 'linh@gmail.com', '123456', '2023-10-23 06:14:45', '2023-10-23 06:14:45'),
(6, 'Nguyễn Quang Linh1', 'adc1@gmail.com', '123456', '2023-10-23 06:15:34', '2023-10-23 06:15:34'),
(8, 'Nguyễn Quang Linh', 'nqlinh5501@gmail.com', 'dasdsadsadasdas', '2023-10-30 06:59:22', '2023-10-30 06:59:22'),
(9, 'Nguyễn Quang Linh', 'nqlinh5501@gmail.com', 'dasdsadsada', '2023-10-30 07:00:31', '2023-10-30 07:00:31'),
(10, 'Hoàng Văn Thắng', 'thang@gmail.com', '123456', '2023-11-01 07:29:39', '2023-11-01 07:29:39'),
(11, 'Hoàng Văn Thắng', 'ujknw22397@intobx.com', '111111111', '2023-11-03 08:08:09', '2023-11-03 08:08:09'),
(12, 'Hoàng Văn Thắng', 'ujknw22397@intobx.com', '111111111', '2023-11-03 08:08:35', '2023-11-03 08:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_product`
--
ALTER TABLE `common_product`
  ADD PRIMARY KEY (`id_common`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `info_customer`
--
ALTER TABLE `info_customer`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `nv_contact`
--
ALTER TABLE `nv_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `common`
--
ALTER TABLE `common`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `common_product`
--
ALTER TABLE `common_product`
  MODIFY `id_common` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_customer`
--
ALTER TABLE `info_customer`
  MODIFY `id_shipping` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nv_contact`
--
ALTER TABLE `nv_contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
