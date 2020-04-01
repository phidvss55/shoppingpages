-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 04:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhanglaravel58`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thiện Nhân', 'runhitbtn2@gmail.com', NULL, NULL, 1, '$2y$10$LSeOVOEyKkXCx92xLDLI..S0NKPGAFeC5f2NvNBbWBGKZRr1jAMQK', NULL, '2020-01-07 21:57:38', '2020-01-07 21:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `a_author_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_title_Seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `a_name`, `a_slug`, `a_description`, `a_content`, `a_active`, `a_author_id`, `a_description_seo`, `a_title_Seo`, `a_avatar`, `a_view`, `created_at`, `updated_at`) VALUES
(4, 'Đôi khi bóng đá các lĩnh vực Bất kỳ lớn Integer mẫu Elitt', 'doi-khi-bong-da-cac-linh-vuc-bat-ky-lon-integer-mau-elitt', 'Đôi khi bóng đá các lĩnh vực Bất kỳ lớn Integer mẫu Elit', '<p><strong>cung sản xuất lu&ocirc;n chỉ l&agrave; một rất nhiều cầu thủ v&agrave; b&oacute;ng chuyền ph&aacute;t triển lớn nhất.&nbsp;Chứng Morbi interdum magna placerat lobortis eget velit quis ultricies pharetra magna.</strong>&nbsp;Kh&ocirc;ng quan t&acirc;m đến c&aacute; mập buồn, h&agrave;m kh&ocirc;ng cần nụ cười lớn nhất.&nbsp;Kh&ocirc;ng c&oacute; mỉm cười m&agrave; sản xuất, một trong những thức uống lớn nhất hiện nay. raesent nibh b&oacute;ng đ&aacute;.&nbsp;Mỗi&nbsp;ullamcorper&nbsp;, c&aacute;c th&agrave;nh vi&ecirc;n sinh th&aacute;i b&oacute;ng đ&aacute; tuy&ecirc;n truyền, sư tử sợ cuối tuần của tiếng cười, nhưng nhận được rất SED salad.&nbsp;Vị mạnh thường qu&acirc;n cho biết nh&agrave; ph&aacute;t triển tr&ecirc;n truyền h&igrave;nh,&nbsp;hoặc để chăm s&oacute;c cho ultricies&nbsp;.&nbsp;Nhưng tiếng cười của tr&aacute;i đất, tận c&ugrave;ng molestie sempre một, suscipit consequat cũ. Tuy nhi&ecirc;n, nh&agrave; ph&aacute;t triển cho biết.&nbsp;C&aacute;c mục ti&ecirc;u t&aacute;c động s&aacute;ng tạo.&nbsp;Vị mạnh thường qu&acirc;n ultricies th&ocirc;ng minh v&agrave; lu&ocirc;n lu&ocirc;n đầu tư.&nbsp;Nhưng tốt nghiệp c&ocirc;ng thức nấu ăn l&ograve; vi s&oacute;ng. John Mcarthy Nhưng trừ khi bạn sống trong cam xấu x&iacute; eu.&nbsp;Hơn bao giờ hết v&agrave; r&ograve; rỉ nhiệt lớn nhất.&nbsp;Ngo&agrave;i ra, th&ugrave;ng carton truyền h&igrave;nh chủ đạo, kh&iacute; m&aacute;y t&iacute;nh x&aacute;ch tay tại bi&ecirc;n giới salad.&nbsp;C&aacute;c nh&agrave; ph&aacute;t triển kh&ocirc;ng tr&ograve; chuyện b&acirc;y giờ. Đối với Elit Blandit diam Mỗi lu&ocirc;n l&agrave; một nhu cầu tối đa lớn miễn ph&iacute; bằng c&aacute;ch chăm s&oacute;c Cục b&acirc;y giờ.&nbsp;Để ng&agrave;y mai được đưa về, ở ph&iacute;a trước của kh&aacute;ch h&agrave;ng v&agrave; trang điểm, mi tortor dapibus metus, metus erat ch&uacute;ng t&ocirc;i ngồi Amet Orci trong thực thi ph&aacute;p luật.&nbsp;L&agrave;m thế n&agrave;o để c&aacute;c ca sĩ họng protein.&nbsp;Trong thực tế, eget blandit diam, Imperdiet faucibus Orci.&nbsp;Thật kh&ocirc;ng may, tiếng cười của nếu kh&ocirc;ng, chuối một thoải m&aacute;i v&agrave;, một yếu tố của cuộc đời của một con sư tử. cung sản xuất lu&ocirc;n chỉ l&agrave; một rất nhiều cầu thủ v&agrave; b&oacute;ng chuyền ph&aacute;t triển lớn nhất.&nbsp;Chứng Morbi interdum magna placerat lobortis eget velit quis ultricies pharetra magna. Kh&ocirc;ng c&oacute; sinh th&aacute;i,&nbsp;Sở chuối ở b&oacute;ng đ&aacute; v&agrave; b&oacute;ng đ&aacute; B&acirc;y giờ k&eacute;o, c&aacute;c y&ecirc;u cầu hoặc t&agrave;i sản thuận tiện, rượu miễn ph&iacute;. N&oacute; kh&ocirc;ng varius LECTUS.&nbsp;Ng&agrave;y mai hoặc c&aacute;c nh&agrave; ph&aacute;t triển rằng kiểu t&oacute;c ligula.&nbsp;Mauris quis laoreet velit.&nbsp;Suspendisse sed velit facilisis pharetra vẫn chưa hết. Phasellus ut elit, dignissim, t&ocirc;i kh&ocirc;ng, nhận được từ.&nbsp;Hiện nibh b&oacute;ng đ&aacute;.&nbsp;Starkweather, c&aacute;c th&agrave;nh vi&ecirc;n sinh th&aacute;i b&oacute;ng đ&aacute; tuy&ecirc;n truyền, sư tử sợ cuối tuần của tiếng cười,&nbsp;nhưng nhận được m&oacute;n salad rất Sed&nbsp;.&nbsp;Vị mạnh thường qu&acirc;n cho biết nh&agrave; ph&aacute;t triển tr&ecirc;n truyền h&igrave;nh, hoặc c&aacute;c lớp học chăm s&oacute;c.&nbsp;Nhưng tiếng cười của tr&aacute;i đất, tận c&ugrave;ng molestie sempre một, suscipit consequat cũ. Kh&aacute;c nhau muỗng tại Protein Vị mạnh thường qu&acirc;n b&oacute;ng rổ nơ để Amet.&nbsp;Hiện tại chỉ l&agrave; c&aacute;c nh&agrave; ph&aacute;t triển v&agrave; c&aacute;c nh&agrave; ph&aacute;t triển tại khởi động.&nbsp;N&oacute; kh&ocirc;ng varius LECTUS.&nbsp;Ng&agrave;y mai hoặc c&aacute;c nh&agrave; ph&aacute;t triển rằng kiểu t&oacute;c ligula.&nbsp;Mauris quis laoreet velit.&nbsp;Suspendisse sed velit facilisis pharetra vẫn chưa hết.&nbsp;Cras vehicula fermentum elit.&nbsp;Integer, v&agrave; bất động sản đầu tư. Hơn bao giờ hết v&agrave; r&ograve; rỉ nhiệt lớn nhất.&nbsp;B&ecirc;n cạnh đ&oacute;, truyền h&igrave;nh chủ đạo carton; Duis&nbsp;tận c&ugrave;ng ultricies t&agrave;i ch&iacute;nh&nbsp;.&nbsp;Hoặc cho đến khi ung thư v&uacute;.&nbsp;T&aacute;c giả của bộ Performance. Hiện tại chỉ l&agrave; c&aacute;c nh&agrave; ph&aacute;t triển v&agrave; c&aacute;c nh&agrave; ph&aacute;t triển tại khởi động.&nbsp;N&oacute; kh&ocirc;ng varius LECTUS.&nbsp;Ng&agrave;y mai hoặc c&aacute;c nh&agrave; ph&aacute;t triển rằng kiểu t&oacute;c ligula. C&aacute;c mục ti&ecirc;u tang s&aacute;ng tạo&nbsp;.&nbsp;Vị mạnh thường qu&acirc;n ultricies th&ocirc;ng minh v&agrave; lu&ocirc;n lu&ocirc;n đầu tư.&nbsp;Nhưng tốt nghiệp c&ocirc;ng thức nấu ăn l&ograve; vi s&oacute;ng.&nbsp;Mỗi protein đ&oacute; chỉ l&agrave; t&aacute;c giả. L&agrave;m thế n&agrave;o để c&aacute;c ca sĩ họng protein.&nbsp;Trong thực tế, eget blandit diam, Imperdiet faucibus Orci.&nbsp;Thật kh&ocirc;ng may, tiếng cười của nếu kh&ocirc;ng, chuối một thoải m&aacute;i v&agrave;, một yếu tố của cuộc đời của một con sư tử.</p>\r\n\r\n<div><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/icon/16.png\" /></div>', '1', '0', 'Đôi khi bóng đá các lĩnh vực Bất kỳ lớn Integer mẫu Elit', NULL, '2020-01-03__post-2.jpg', '0', '2020-01-03 09:23:14', '2020-01-06 07:52:32'),
(5, 'Ngành công nghiệp cơ khí Việt Nam trong cuộc Cách mạng Công nghiệp 4.0', 'nganh-cong-nghiep-co-khi-viet-nam-trong-cuoc-cach-mang-cong-nghiep-40', 'Ngành công nghiệp cơ khí Việt Nam trong cuộc Cách mạng Công nghiệp 4.0', 'Ng&agrave;nh c&ocirc;ng nghiệp cơ kh&iacute; Việt Nam trong cuộc C&aacute;ch mạng C&ocirc;ng nghiệp 4.0\r\n\r\nTS. Trần Thị Minh Hằng - Đại học T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường H&agrave; Nội\r\n\r\n&nbsp;15:00 31/12/2018&nbsp;\r\n\r\n&nbsp;\r\n\r\nNg&agrave;nh sản xuất cơ kh&iacute; Việt Nam đang ng&agrave;y c&agrave;ng tụt hậu so với c&aacute;c mốc v&agrave; nhu cầu ph&aacute;t triển của đất nước. Doanh nghiệp cơ kh&iacute; trong nước hiện nay đang phải đương đầu với nhiều th&aacute;ch thức, sức cạnh tranh yếu hơn so với doanh nghiệp cơ kh&iacute; c&aacute;c nước trong khu vực v&agrave; tr&ecirc;n thế giới.\r\n\r\nNhận diện những cơ hội v&agrave; th&aacute;ch thức của ng&agrave;nh cơ kh&iacute; Việt Nam, b&agrave;i viết đề xuất một v&agrave;i khuyến nghị nhằm gi&uacute;p cơ kh&iacute; Việt Nam vượt qua những th&aacute;ch thức, tận dụng được những cơ hội v&agrave; ph&aacute;t triển bền vững trong bối cảnh cuộc C&aacute;ch mạng c&ocirc;ng nghiệp 4.0.\r\n\r\nT&igrave;nh h&igrave;nh ph&aacute;t triển ng&agrave;nh Cơ kh&iacute; Việt Nam\r\n\r\nCơ kh&iacute; l&agrave; một trong những ng&agrave;nh c&ocirc;ng nghiệp c&oacute; lịch sử l&acirc;u đời ở nước ta. Ban đầu n&oacute; được biểu hiện dưới dạng c&aacute;c nghề thủ c&ocirc;ng tạo ra c&ocirc;ng cụ sản xuất, binh kh&iacute;&hellip; phục vụ c&ocirc;ng cuộc x&acirc;y dựng, ph&aacute;t triển v&agrave; g&igrave;n giữ đất nước.\r\n\r\nDưới thời Ph&aacute;p thuộc, tuy nghề n&agrave;y đ&atilde; được ph&aacute;t triển mạnh, nhưng chưa thể trở th&agrave;nh một ng&agrave;nh theo đ&uacute;ng nghĩa l&agrave; ng&agrave;nh Cơ kh&iacute;. Phải đến năm 1958, khi Nh&agrave; m&aacute;y Cơ kh&iacute; Trần Hưng Đạo được x&acirc;y dựng, th&igrave; nền m&oacute;ng ng&agrave;nh c&ocirc;ng nghiệp cơ kh&iacute; mới được nhen nh&oacute;m.\r\n\r\nTừ đ&oacute; đến nay, Ng&agrave;nh n&agrave;y đ&atilde; ph&aacute;t triển kh&aacute; to&agrave;n diện, đ&atilde; c&oacute; sự chuy&ecirc;n m&ocirc;n h&oacute;a ở một số lĩnh vực, tr&igrave;nh độ c&ocirc;ng nghệ cũng ở một mức độ nhất định v&agrave; đ&oacute;ng vai tr&ograve; l&agrave; ng&agrave;nh c&ocirc;ng nghiệp &ldquo;xương sống&rdquo; của nền sản xuất x&atilde; hội, cung cấp thiết bị, m&aacute;y c&ocirc;ng cụ, m&aacute;y động lực&hellip; cho tất cả c&aacute;c ng&agrave;nh kinh tế, đ&aacute;p ứng nhu cầu h&agrave;ng ng&agrave;y của người d&acirc;n, g&oacute;p phần quan trọng v&agrave;o sự ph&aacute;t triển của nền kinh tế đất nước.\r\n\r\nX&aacute;c định được vai tr&ograve; quan trọng v&agrave; nền tảng của ng&agrave;nh c&ocirc;ng nghiệp cơ kh&iacute; đối với ph&aacute;t triển kinh tế - x&atilde; hội. Ng&agrave;y 17/10/2003, Bộ Ch&iacute;nh trị ban h&agrave;nh Kết luận 25-KL/TW về chiến lược ph&aacute;t triển ng&agrave;nh c&ocirc;ng nghiệp cơ kh&iacute; Việt Nam với những quan điểm, đường lối cụ thể: &ldquo;Cơ kh&iacute; l&agrave; một ng&agrave;nh c&ocirc;ng nghiệp nền tảng, c&oacute; vai tr&ograve; đặc biệt quan trọng trong việc ph&aacute;t triển kinh tế - x&atilde; hội&rdquo; v&agrave; &ldquo;phải x&acirc;y dựng ng&agrave;nh Cơ kh&iacute; để đủ sức cạnh tranh vươn l&ecirc;n trong cơ chế thị trường v&agrave; hội nhập kinh tế quốc tế&rdquo;.\r\n\r\nThể chế h&oacute;a chủ trương, đường lối của Đảng, Ch&iacute;nh phủ đ&atilde; ban h&agrave;nh Chiến lược ph&aacute;t triển ng&agrave;nh Cơ kh&iacute; việt Nam đến năm 2010, tầm nh&igrave;n tới năm 2002, c&aacute;c cơ chế, ch&iacute;nh s&aacute;ch ưu ti&ecirc;n ph&aacute;t triển một số chuy&ecirc;n ng&agrave;nh v&agrave; sản phẩm cơ kh&iacute; trọng điểm.\r\n\r\nThủ tướng Ch&iacute;nh phủ ban h&agrave;nh Quyết định số 10/2009/QĐ-TTg ng&agrave;y 16/01/2009 về cơ chế hỗ trợ ph&aacute;t triển sản xuất sản phẩm cơ kh&iacute; trọng điểm v&agrave; Danh mục c&aacute;c sản phẩm cơ kh&iacute; trọng điểm, Danh mục dự &aacute;n đầu tư sản xuất sản phẩm cơ kh&iacute; trọng điểm, giai đoạn 2009-2015; Quyết định số 1791/QĐ-TTg ng&agrave;y 29/11/2012 của Thủ tướng Ch&iacute;nh phủ ph&ecirc; duyệt Cơ chế thực hiện th&iacute; điểm thiết kế, chế tạo trong nước thiết bị c&aacute;c nh&agrave; m&aacute;y nhiệt điện trong giai đoạn 2012-2025; Quyết định số 1556/QĐ-TTg ng&agrave;y 17/10/2012 của Thủ tướng Ch&iacute;nh phủ ph&ecirc; duyệt Đề &aacute;n &ldquo;Trợ gi&uacute;p ph&aacute;t triển doanh nghiệp (DN) nhỏ v&agrave; vừa trong lĩnh vực c&ocirc;ng nghiệp hỗ trợ&rdquo;; Chỉ thị số 494/CT-TTg ng&agrave;y 20/4/2010 của Thủ tướng Ch&iacute;nh phủ về việc sử dụng vật tư, h&agrave;ng h&oacute;a sản xuất trong nước trong c&ocirc;ng t&aacute;c đấu thầu c&aacute;c dự &aacute;n sử dụng vốn nh&agrave; nước.\r\n\r\nTranh thủ sự quan t&acirc;m, ủng hộ của Ch&iacute;nh phủ, c&ocirc;ng nghiệp cơ kh&iacute; Việt Nam thời gian qua đ&atilde; đạt được những kết quả nhất định.\r\n\r\nCụ thể, một số lĩnh vực ghi nhận c&oacute; sự chuyển biến, đột ph&aacute; như: Chế tạo thiết bị thủy c&ocirc;ng (cung cấp cho c&aacute;c c&ocirc;ng tr&igrave;nh nh&agrave; m&aacute;y thủy điện lớn, nhỏ trong cả nước), chế tạo gi&agrave;n khoan dầu kh&iacute; (cung cấp khoan thăm d&ograve;, khai th&aacute;c dầu kh&iacute; đến độ s&acirc;u 120m, gi&agrave;n khoan tự n&acirc;ng 90m nước, gi&agrave;n khoan khai th&aacute;c giếng dầu), thiết bị điện, chế tạo v&agrave; cung cấp thiết bị cho c&aacute;c nh&agrave; m&aacute;y xi măng, đ&oacute;ng t&agrave;u c&aacute;c loại (t&agrave;u chở dầu đến trọng tải 105 ngh&igrave;n DWT, t&agrave;u chở kh&iacute; h&oacute;a lỏng trọng tải đến 5.000 tấn, t&agrave;u chở h&agrave;ng rời&hellip;), c&aacute;c c&ocirc;ng tr&igrave;nh thiết bị to&agrave;n bộ (nh&agrave; m&aacute;y đường c&ocirc;ng suất 1.000 tấn m&iacute;a/ng&agrave;y, chế biến mủ cao su c&ocirc;ng suất 6.000 tấn/năm).\r\n\r\nCơ kh&iacute; chế tạo trong nước cũng đ&atilde; sản xuất, lắp r&aacute;p được hầu hết c&aacute;c chủng loại xe &ocirc; t&ocirc; con, xe tải, xe kh&aacute;ch; sản xuất xe m&aacute;y đ&atilde; c&oacute; tỷ lệ nội địa h&oacute;a 85-95%, đ&aacute;p ứng nhu cầu trong nước v&agrave; xuất khẩu.\r\n\r\nMột số cơ quan nghi&ecirc;n cứu, thiết kế v&agrave; DN sản xuất cơ kh&iacute; đ&atilde; từng bước đổi mới, n&acirc;ng cao năng lực tư vấn, thiết kế, chế tạo thiết bị v&agrave; c&ocirc;ng nghệ, tham gia thực hiện một số g&oacute;i thầu của c&aacute;c dự &aacute;n trọng điểm quốc gia.\r\n\r\nSố lượng DN cơ kh&iacute; tăng nhanh, từ khoảng 10.000 DN (năm 2010) l&ecirc;n hơn 21.000 DN năm 2016, chiếm 28% tổng số DN c&ocirc;ng nghiệp chế tạo, tạo việc l&agrave;m cho hơn 1 triệu lao động, chiếm 17% tổng số lao động trong ng&agrave;nh chế biến, chế tạo. Theo t&iacute;nh to&aacute;n của Viện Chiến lược v&agrave; Ch&iacute;nh s&aacute;ch c&ocirc;ng nghiệp (Bộ C&ocirc;ng Thương), gi&aacute; trị sản xuất c&ocirc;ng nghiệp ng&agrave;nh Cơ kh&iacute; năm 2015 chiếm 16,36% gi&aacute; trị sản xuất ng&agrave;nh c&ocirc;ng nghiệp chế biến, chế tạo.\r\n\r\nTheo thống k&ecirc;, năm 2016, kim ngạch xuất khẩu c&aacute;c sản phẩm cơ kh&iacute; cũng đ&atilde; đạt tr&ecirc;n 13 tỷ USD, chủ yếu l&agrave; c&aacute;c loại thiết bị gia dụng v&agrave; phụ t&ugrave;ng linh kiện xe &ocirc; t&ocirc;, xe m&aacute;y. Nếu t&iacute;nh cả sắt th&eacute;p c&aacute;c loại th&igrave; kim ngạch xuất khẩu c&aacute;c sản phẩm cơ kh&iacute; của Việt Nam cả năm 2016 đạt tr&ecirc;n 16 tỷ USD. Những kết quả tr&ecirc;n đ&atilde; phần n&agrave;o g&oacute;p phần t&iacute;ch cực v&agrave;o sự ph&aacute;t triển kinh tế - x&atilde; hội v&agrave; đẩy mạnh c&ocirc;ng nghiệp h&oacute;a, hiện đại h&oacute;a đất nước.\r\n\r\nMặc d&ugrave; đ&atilde; đạt được một số kết quả nhất định, song c&ocirc;ng nghiệp cơ kh&iacute; Việt Nam hiện nay vẫn c&ograve;n nhiều hạn chế, thể hiện qua c&aacute;c mặt cụ thể sau:\r\n\r\nThứ nhất,&nbsp;về thị trường: Ng&agrave;nh Cơ kh&iacute; đa dạng về sản phẩm nhưng cạnh tranh từ sản phẩm nhập khẩu tương đối gay gắt. Việc mở rộng thị trường vẫn c&ograve;n nhiều kh&oacute; khăn do thiếu th&ocirc;ng tin thị trường v&agrave; năng lực cạnh tranh của DN trong nước chưa đủ mạnh.\r\n\r\nNgay tại thị trường trong nước, c&aacute;c DN cơ kh&iacute; cũng kh&oacute; c&oacute; thể tham gia được v&agrave;o c&aacute;c dự &aacute;n đầu tư lắp đặt trang thiết bị trong c&aacute;c ng&agrave;nh th&eacute;p, h&oacute;a chất, năng lượng, chủ yếu do thiếu hệ thống kiểm định chất lượng sản phẩm theo ti&ecirc;u chuẩn quốc tế; C&aacute;c DN, sản phẩm cơ kh&iacute; trong nước cũng chưa x&acirc;y dựng được thương hiệu v&agrave; được nhiều kh&aacute;ch h&agrave;ng tiềm năng biết đến. Hơn nữa, c&aacute;c cam kết tự do thương mại cũng tạo &aacute;p lực đối với DN trong nước khi h&agrave;ng r&agrave;o thuế quan bảo hộ sản xuất trong nước bị gỡ bỏ.\r\n\r\nThứ hai,&nbsp;về tr&igrave;nh độ khoa học c&ocirc;ng nghệ: Thực tiễn cho thấy, ng&agrave;nh Cơ kh&iacute; Việt Nam c&oacute; rất &iacute;t c&aacute;c ph&aacute;t minh, s&aacute;ng chế được đăng k&yacute;, trang thiết bị v&agrave; tr&igrave;nh độ c&ocirc;ng nghệ to&agrave;n Ng&agrave;nh chậm đổi mới. C&aacute;c DN cơ kh&iacute; thiếu đầu ra cho sản phẩm n&ecirc;n cũng kh&ocirc;ng c&oacute; cơ hội t&iacute;ch lũy v&agrave; đầu tư đổi mới c&ocirc;ng nghệ. C&aacute;ch mạng c&ocirc;ng nghiệp 4.0 (CMCN4.0) diễn ra, c&aacute;c c&ocirc;ng nghệ mới đ&atilde; l&agrave;m thay đổi ho&agrave;n to&agrave;n c&aacute;ch thức, phương thức sản xuất hiện nay, đặt ra y&ecirc;u cầu cấp thiết trong việc đổi mới v&agrave; cập nhật xu thế c&ocirc;ng nghệ đối với c&aacute;c DN cơ kh&iacute;. &nbsp;\r\n\r\nThứ ba,&nbsp;về nguy&ecirc;n phụ liệu: Nguy&ecirc;n phụ liệu cho ng&agrave;nh Cơ kh&iacute; chủ yếu l&agrave; sắt th&eacute;p v&agrave; c&aacute;c loại hợp kim m&agrave;u, hầu hết c&aacute;c nguy&ecirc;n phụ liệu n&agrave;y trong nước chưa sản xuất được n&ecirc;n phải nhập khẩu.\r\n\r\nThứ tư,&nbsp;về nguồn nh&acirc;n lực: Nh&acirc;n lực ng&agrave;nh Cơ kh&iacute; Việt Nam c&ograve;n thiếu v&agrave; yếu cả về số lượng lẫn chất lượng. Số thợ cơ kh&iacute; c&oacute; tay nghề cao giảm s&uacute;t, lao động chuy&ecirc;n m&ocirc;n thiếu chứng chỉ nghề quốc tế v&agrave; kỹ năng ngoại ngữ. Lực lượng nghi&ecirc;n cứu triển khai, trước hết l&agrave; đội ngũ tư vấn thiết kế chưa đạt tr&igrave;nh độ, đ&aacute;p ứng y&ecirc;u cầu của c&aacute;c c&ocirc;ng tr&igrave;nh, dự &aacute;n về thiết bị cơ kh&iacute; đồng bộ.\r\n\r\nThứ năm,&nbsp;vai tr&ograve; của hiệp hội ng&agrave;nh nghề chưa ph&aacute;t huy hiệu quả: Hiệp hội ng&agrave;nh nghề chưa ph&aacute;t huy được t&iacute;nh đại diện trong tập hợp &yacute; kiến v&agrave; h&agrave;nh động chung; Chưa thu h&uacute;t được sự tham gia của c&aacute;c DN cơ kh&iacute; v&agrave; chưa li&ecirc;n kết chặt chẽ được c&aacute;c DN th&agrave;nh vi&ecirc;n với nhau. Hiện nay, Hiệp hội Cơ kh&iacute; Việt Nam chỉ mới thu h&uacute;t được sự tham gia của hơn 100 DN trong tổng số tr&ecirc;n 21.000 DN cơ kh&iacute;.\r\n\r\nNguy&ecirc;n nh&acirc;n dẫn đến những tồn tại, hạn chế tr&ecirc;n l&agrave; do c&aacute;c DN cơ kh&iacute; trong nước hầu hết đều c&oacute; quy m&ocirc; sản xuất nhỏ, tr&igrave;nh độ c&ocirc;ng nghệ trung b&igrave;nh, chưa khẳng định được năng lực thị trường. Một số h&atilde;ng nước ngo&agrave;i tuy c&oacute; thương hiệu mạnh nhưng tại Việt Nam chủ yếu chỉ rắp r&aacute;p để ti&ecirc;u thụ tại chỗ; Mức độ li&ecirc;n kết v&agrave; hợp t&aacute;c c&ograve;n thấp, kh&ocirc;ng ph&aacute;t huy được sức mạnh của ph&acirc;n c&ocirc;ng v&agrave; hợp t&aacute;c sản xuất; Vốn cố định cho sản xuất cơ kh&iacute; thường lớn, v&ograve;ng vay vốn lưu động lại thấp, do đ&oacute; DN cơ kh&iacute; kh&oacute; huy động được vốn, c&aacute;c dự &aacute;n về cơ kh&iacute; v&igrave; thế cũng k&eacute;m hấp dẫn đối với c&aacute;c ng&acirc;n h&agrave;ng thương mại hơn so với c&aacute;c dự &aacute;n thuộc lĩnh vực kh&aacute;c.\r\n\r\nSự chồng ch&eacute;o trong quản l&yacute; cũng l&agrave;m hạn chế sự ph&aacute;t triển của ng&agrave;nh Cơ kh&iacute;, t&igrave;nh trạng chiếm giữ độc quyền c&ocirc;ng nghệ v&agrave; thiết bị l&agrave;m hạn chế ph&acirc;n c&ocirc;ng chuy&ecirc;n m&ocirc;n h&oacute;a, chậm đổi mới kỹ thuật v&agrave; c&ocirc;ng nghệ trong sản xuất cơ kh&iacute;, chất lượng sản phẩm kh&ocirc;ng đồng đều, chi ph&iacute; sản xuất cao.\r\n\r\nViệc x&acirc;y dựng ti&ecirc;u chuẩn, kỹ thuật của ng&agrave;nh Cơ kh&iacute; cũng chưa được quan t&acirc;m đ&uacute;ng mức, thiếu đồng bộ với việc hỗ trợ hoạt động của c&aacute;c cơ quan kiểm định theo ti&ecirc;u chuẩn, quy chuẩn đ&atilde; đăng k&yacute;; Ti&ecirc;u ch&iacute; đấu thầu trong nhiều trường hợp c&ograve;n tạo lợi thế cho c&aacute;c DN nước ngo&agrave;i thắng thầu; Điều kiện đ&agrave;m ph&aacute;n mua sắm m&aacute;y m&oacute;c, thiết bị cũng thường g&acirc;y bất lợi cho DN trong nước&hellip;\r\n\r\nCơ hội v&agrave; th&aacute;ch thức đối với ng&agrave;nh Cơ kh&iacute;&nbsp;Việt Nam trong C&aacute;ch mạng c&ocirc;ng nghiệp 4.0\r\n\r\nTheo đ&aacute;nh gi&aacute; của giới chuy&ecirc;n gia, CMCN 4.0 c&oacute; t&aacute;c động quan trọng đối với sản xuất cơ kh&iacute; trong hiện tại v&agrave; tương lai, nhất l&agrave; đối với c&aacute;c vấn đề quản trị c&ocirc;ng nghệ, quản trị sản xuất..., cụ thể: CMCN 4.0 sẽ mang lại nhiều cơ hội để ng&agrave;nh Cơ kh&iacute; Việt Nam ph&aacute;t triển, đ&oacute; l&agrave;:\r\n\r\nMột l&agrave;,&nbsp;CMCN 4.0 cho ph&eacute;p DN cơ kh&iacute; tiếp cận th&ocirc;ng tin, tiếp cận tri thức, tiếp cận c&aacute;c c&ocirc;ng nghệ ti&ecirc;n tiến&hellip;\r\n\r\nHai l&agrave;,&nbsp;CMCN 4.0 với những đột ph&aacute; về c&ocirc;ng nghệ mới gi&uacute;p giảm mạnh chi ph&iacute; chế tạo v&agrave; vận h&agrave;nh r&ocirc; bốt, giảm mạnh chi ph&iacute; sản xuất của c&ocirc;ng nghệ sản xuất đắp dần (c&ocirc;ng nghệ in 3D), do đ&oacute; l&agrave;m tăng khả năng ứng dụng r&ocirc; bốt, c&ocirc;ng nghệ đắp dần thay thế c&ocirc;ng nghệ cắt gọt trong sản xuất cơ kh&iacute; đối với những nước c&oacute; tiềm lực kinh tế hạn chế như Việt Nam.\r\n\r\nBa l&agrave;,&nbsp;CMCN 4.0 l&agrave; cơ hội để Việt Nam &ldquo;đi tắt đ&oacute;n đầu&rdquo;. Ng&agrave;nh Cơ kh&iacute; nước ta chưa ph&aacute;t triển, quy m&ocirc; c&ograve;n nhỏ n&ecirc;n qu&aacute;n t&iacute;nh nhỏ, sự rủi ro xảy ra c&oacute; thể kh&ocirc;ng g&acirc;y tổn thất qu&aacute; lớn.\r\n\r\nBốn l&agrave;,&nbsp;lao động ng&agrave;nh Cơ kh&iacute; c&oacute; tố chất ham học hỏi v&agrave; nhanh nhạy, dễ th&iacute;ch ứng với c&aacute;i mới, cho n&ecirc;n rất dễ d&agrave;ng th&iacute;ch ứng với những cơ hội, c&ocirc;ng nghệ mới đến từ CMCN 4.0, từ đ&oacute;, n&acirc;ng cao tr&igrave;nh độ, s&aacute;ng tạo v&agrave; nắm bắt c&ocirc;ng nghệ ti&ecirc;n tiến để ứng dụng.\r\n\r\nNăm l&agrave;,&nbsp;với việc tiếp cận nhanh nhạy v&agrave; ứng dụng linh hoạt những th&agrave;nh tựu của CMCN 4.0, ng&agrave;nh Cơ kh&iacute; nước ta sẽ c&oacute; nhiều cơ hội trong việc n&acirc;ng cao tr&igrave;nh độ c&ocirc;ng nghệ, tăng năng suất, r&uacute;t ngắn thời gian đưa sản phẩm ra thị trường, sản xuất được những sản phẩm c&oacute; chất lượng, gi&aacute; cả cạnh tranh&hellip; qua đ&oacute;, l&agrave;m thay đổi phương thức quản l&yacute;, quản trị trong sản xuất cơ kh&iacute;.\r\n\r\nB&ecirc;n cạnh cơ hội, CMCN 4.0 cũng mang lại nhiều th&aacute;ch thức cho ng&agrave;nh Cơ kh&iacute; Việt Nam, đ&oacute; l&agrave;:\r\n\r\nThứ nhất,&nbsp;trong cuộc CMCN 4.0, lao động ng&agrave;nh Cơ kh&iacute; c&oacute; thể gặp kh&oacute; khăn trong t&igrave;m kiếm việc l&agrave;m, bởi những việc l&agrave;m thủ c&ocirc;ng sẽ được tự động h&oacute;a thay thế bằng r&ocirc; bốt, m&aacute;y m&oacute;c tự động. Việc h&igrave;nh th&agrave;nh, ph&aacute;t triển lực lượng lao động ng&agrave;nh Cơ kh&iacute; được trang bị kỹ năng, tr&igrave;nh độ để khai th&aacute;c, l&agrave;m chủ được c&ocirc;ng nghệ, phương thức vận h&agrave;nh mới cũng l&agrave; một th&aacute;ch thức lớn đối với c&ocirc;ng t&aacute;c đ&agrave;o tạo nguồn nh&acirc;n lực ng&agrave;nh Cơ kh&iacute; nước ta hiện nay.\r\n\r\nThứ hai,&nbsp;DN cơ kh&iacute; nước ta phần lớn l&agrave; DN nhỏ v&agrave; vừa, chưa đủ năng lực cạnh tranh, chưa sẵn s&agrave;ng tiếp cận c&ocirc;ng nghệ mới. Nhiều DN c&ograve;n bị động với c&aacute;c xu thế ph&aacute;t triển mới, chưa sẵn s&agrave;ng chuyển hướng m&ocirc; h&igrave;nh tổ chức kinh doanh, trong đ&oacute;, &aacute;p lực cạnh tranh ng&agrave;y c&agrave;ng gay gắt v&agrave; đứng trước &aacute;p lực về nguồn lực đầu tư để chuyển đổi, đổi mới s&aacute;ng tạo, đột ph&aacute;.\r\n\r\nThứ ba,&nbsp;CMCN 4.0 với những c&ocirc;ng nghệ mới, nhất l&agrave; c&ocirc;ng nghệ in 3D (c&ocirc;ng nghệ đắp dần) đ&atilde; l&agrave;m thay đổi ho&agrave;n to&agrave;n c&ocirc;ng nghệ cắt gọt truyền thống của ng&agrave;nh Cơ kh&iacute; Việt Nam. C&ocirc;ng nghệ n&agrave;y cho ph&eacute;p kh&aacute;ch h&agrave;ng đặt h&agrave;ng sản phẩm với kiểu d&aacute;ng t&ugrave;y chỉnh v&agrave; được sản xuất với tốc độ nhanh hơn v&agrave; tr&ecirc;n thế giới c&ocirc;ng nghệ n&agrave;y đang c&oacute; những chuyển biến ng&agrave;y c&agrave;ng mạnh mẽ, kh&ocirc;ng chỉ giới hạn trong việc sản xuất c&aacute;c sản phẩm từ vật liệu nhựa, giờ đ&acirc;y vật liệu kim loại cũng đang được ứng dụng c&ocirc;ng nghệ n&agrave;y.\r\n\r\nChưa kể, hệ thống sản xuất cơ kh&iacute; trong CMCN 4.0 phải l&agrave; những hệ thống c&oacute; khả năng kết nối s&acirc;u, nhận biết, thu thập v&agrave; trao đổi dữ liệu như Cyber Physical Systems hay Internet of Things được coi l&agrave; những c&ocirc;ng nghệ then chốt chưa được triển khai ứng dụng trong sản xuất cơ kh&iacute; nước ta.\r\n\r\nVấn đề đặt ra đối với ng&agrave;nh Cơ kh&iacute; Việt Nam\r\n\r\nTừ ph&acirc;n t&iacute;ch thực tiễn ph&aacute;t triển, những hạn chế, th&aacute;ch thức v&agrave; cơ hội của ng&agrave;nh Cơ kh&iacute; trong bối cảnh CMCN 4.0, để th&uacute;c đẩy ng&agrave;nh Cơ kh&iacute; Việt Nam ph&aacute;t triển bền vững, Chiến lược ph&aacute;t triển Cơ kh&iacute; Việt Nam cần x&aacute;c định v&agrave; lưu &yacute; triển khai những vấn đề sau:\r\n\r\n- Về thị trường:&nbsp;Tạo dựng thị trường l&agrave; yếu tố ti&ecirc;n quyết cho ph&aacute;t triển, xử l&yacute; t&igrave;nh trạng gian lận thương mại, nhập khẩu tr&agrave;n lan thiết bị đ&atilde; qua sử dụng.\r\n\r\n- Về vốn đầu tư:&nbsp;Tạo nguồn vốn vay d&agrave;i hạn, c&oacute; l&atilde;i suất ổn định theo đặc th&ugrave; đầu tư sản xuất cho DN ng&agrave;nh Cơ kh&iacute;.\r\n\r\n- Về hoạt động đấu thầu c&aacute;c c&ocirc;ng tr&igrave;nh, dự &aacute;n trong nước:&nbsp;Ban h&agrave;nh c&aacute;c quy định thầu sao cho g&oacute;p phần n&acirc;ng cao tỷ lệ sử dụng vật tư, h&agrave;ng h&oacute;a sản xuất trong nước v&agrave; quản l&yacute; c&aacute;c g&oacute;i tổng thầu dạng Hợp đồng thiết kế, cung cấp thiết bị c&ocirc;ng nghệ v&agrave; thi c&ocirc;ng x&acirc;y dựng c&ocirc;ng tr&igrave;nh (EPC) về m&aacute;y m&oacute;c thiết bị, để c&oacute; thể tạo thị trường cho DN cơ kh&iacute; trong nước.\r\n\r\n- Về c&ocirc;ng t&aacute;c khuyến c&ocirc;ng, x&uacute;c tiến đầu tư v&agrave; x&uacute;c tiến thương mại:&nbsp;X&acirc;y dựng cơ chế, ch&iacute;nh s&aacute;ch hỗ trợ sản xuất v&agrave; khuyến kh&iacute;ch ti&ecirc;u thụ sản phẩm cơ kh&iacute; trong nước ph&ugrave; hợp với c&aacute;c cam kết quốc tế của Việt Nam.\r\n\r\n- Về li&ecirc;n kết DN:&nbsp;Triển khai c&aacute;c chương tr&igrave;nh kết nối kinh doanh nhằm tăng cường li&ecirc;n kết, li&ecirc;n doanh giữa DN trong nước với nhau v&agrave; với c&aacute;c DN lớn tr&ecirc;n thế giới trong chuỗi gi&aacute; trị để tiếp cận c&ocirc;ng nghệ v&agrave; ti&ecirc;u chuẩn h&oacute;a sản phẩm.\r\n\r\nNhằm đạt được mục ti&ecirc;u đến 2035, ng&agrave;nh Cơ kh&iacute; Việt Nam được ph&aacute;t triển với đa số c&aacute;c chuy&ecirc;n ng&agrave;nh c&oacute; c&ocirc;ng nghệ ti&ecirc;n tiến, chất lượng sản phẩm đạt ti&ecirc;u chuẩn quốc tế, tham gia s&acirc;u hơn nữa v&agrave;o chuỗi gi&aacute; trị to&agrave;n cầu, cơ bản đ&aacute;p ứng nhu cầu sản phẩm cơ kh&iacute; của thị trường trong nước; Sản lượng xuất khẩu đạt 45% tổng sản lượng ng&agrave;nh Cơ kh&iacute;, thời gian tới Việt Nam cần đồng bộ triển khai c&aacute;c giải ph&aacute;p chiến lược sau:\r\n\r\nThứ nhất,&nbsp;ho&agrave;n thiện hệ thống cơ chế, ch&iacute;nh s&aacute;ch đồng bộ v&agrave; đủ mạnh để hỗ trợ ph&aacute;t triển ng&agrave;nh Cơ kh&iacute;. Trước mắt, Ch&iacute;nh phủ cần sớm x&acirc;y dựng v&agrave; ban h&agrave;nh Nghị định về ph&aacute;t triển ng&agrave;nh c&ocirc;ng nghiệp chế tạo.\r\n\r\nThứ hai,&nbsp;ph&aacute;t triển c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp hạ nguồn trong lĩnh vực cơ kh&iacute; cơ quy m&ocirc; chuỗi cung ứng lớn để tạo cơ hội cho c&aacute;c DN cơ kh&iacute; trong nước tham gia cung cấp phụ t&ugrave;ng, linh kiện cho c&aacute;c DN sản xuất, lắp r&aacute;p sản phẩm cuối c&ugrave;ng. Trong đ&oacute;, ch&uacute; trọng ph&aacute;t triển c&aacute;c ng&agrave;nh cơ kh&iacute; c&oacute; tiềm năng ph&aacute;t triển như &ocirc; t&ocirc;, thiết bị c&ocirc;ng nghiệp, cơ kh&iacute; gia dụng v&agrave; dụng cụ&hellip;\r\n\r\nThứ ba,&nbsp;n&acirc;ng cao chất lượng hoạt động x&uacute;c tiến thương mại, thu h&uacute;t đầu tư từ c&aacute;c DN cơ kh&iacute; c&oacute; thương hiệu tr&ecirc;n thế giới để dần h&igrave;nh th&agrave;nh chuỗi cung ứng trong nước v&agrave; t&igrave;m kiếm mở rộng thị trường xuất khẩu cho c&aacute;c DN cơ kh&iacute; trong nước.\r\n\r\nThứ tư,&nbsp;x&acirc;y dựng v&agrave; cập nhật cơ sở dữ liệu về DN cơ kh&iacute;; triển khai hiệu quả c&aacute;c chương tr&igrave;nh kết nối kinh doanh, li&ecirc;n kết DN trong nước với DN nước ngo&agrave;i. Đồng thời, n&acirc;ng cao chất lượng thống k&ecirc; l&agrave;m cơ sở cho c&aacute;c ph&acirc;n t&iacute;ch, dự b&aacute;o về ng&agrave;nh.\r\n\r\nThứ năm,&nbsp;đảm bảo nguồn vốn vay d&agrave;i hạn với mức l&atilde;i suất ổn định cho c&aacute;c DN cơ kh&iacute; th&ocirc;ng qua c&aacute;c chương tr&igrave;nh hỗ trợ, g&oacute;i ưu đ&atilde;i ph&ugrave; hợp với c&aacute;c quy định trong nước v&agrave; cam kết quốc tế.\r\n\r\nThứ s&aacute;u,&nbsp;nhanh ch&oacute;ng ho&agrave;n thiện đồng bộ c&aacute;c ti&ecirc;u chuẩn, quy chuẩn cho c&aacute;c sản phẩm cơ kh&iacute;, đồng thời, ph&aacute;t triển v&agrave; n&acirc;ng cao năng lực cho c&aacute;c cơ quan kiểm tra, kiểm định theo ti&ecirc;u chuẩn, quy chuẩn đ&atilde; đăng k&yacute;.\r\n\r\nThứ bảy,&nbsp;x&acirc;y dựng v&agrave; ph&aacute;t triển hệ thống quản l&yacute;, đ&aacute;nh gi&aacute;, cấp chứng chỉ kỹ thuật nghề quốc gia, đặc biệt đối với c&aacute;c kỹ năng nghề trong lĩnh vực cơ kh&iacute;; X&acirc;y dựng cơ chế ưu đ&atilde;i nhằm khuyến kh&iacute;ch li&ecirc;n kết giữa cơ sở đ&agrave;o tạo v&agrave; DN trong hoạt động đ&agrave;o tạo v&agrave; ph&aacute;t triển c&aacute;c chương tr&igrave;nh, gi&aacute;o tr&igrave;nh đ&agrave;o tạo ph&ugrave; hợp với thực tiễn.', '1', '0', 'Ngành công nghiệp cơ khí Việt Nam trong cuộc Cách mạng Công nghiệp 4.0', NULL, '2020-01-04__05-vigh.jpg', '0', '2020-01-03 20:52:57', '2020-01-03 22:14:56'),
(6, 'Ngành cơ khí Việt Nam hấp dẫn nhà đầu tư nước ngoài', 'nganh-co-khi-viet-nam-hap-dan-nha-dau-tu-nuoc-ngoai', 'Ngành cơ khí Việt Nam hấp dẫn nhà đầu tư nước ngoài', 'Ng&agrave;y 16/10, tại Trung t&acirc;m Hội chợ triển l&atilde;m (ICE &ndash; H&agrave; Nội), Triển l&atilde;m quốc tế MTA Hanoi 2018 đ&atilde; khai mạc với sự tham gia của 165 doanh nghiệp trong nước v&agrave; quốc tế hoạt động trong c&aacute;c lĩnh vực sản xuất, kinh doanh m&aacute;y c&ocirc;ng cụ, cơ kh&iacute; ch&iacute;nh x&aacute;c v&agrave; gia c&ocirc;ng kim loại.\r\n\r\nMTA Hanoi 2018 mang đến cho kh&aacute;ch tham quan những c&ocirc;ng nghệ v&agrave; thiết bị chuy&ecirc;n ng&agrave;nh t&acirc;n tiến nhất, đặc biệt l&agrave; 5 nh&oacute;m gian h&agrave;ng đến từ H&agrave;n Quốc, Singapore v&agrave; Đ&agrave;i Loan (Trung Quốc) - l&agrave; những quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ với thế mạnh sản xuất m&aacute;y c&ocirc;ng cụ.\r\n\r\nNhững sản phẩm trưng b&agrave;y điển h&igrave;nh như: Articulated Robot (Hiwin), Daiwa Rabin (Nhật Linh); Bộ chuyển nguồn tự động Osung (Cybertech), c&aacute;c loại m&aacute;y cắt kim loại của Bejing Jingdiao, Makino, Vạn Sự Lợi, Mitsubishi Electric, Sodick; m&aacute;y gia c&ocirc;ng kim loại của Trumpf; c&aacute;c thiết bị đo lường v&agrave; soi cắt lớp của Nikon, Mitutoyo, Renishaw; c&ugrave;ng h&agrave;ng d&agrave;i danh mục triển l&atilde;m đa dạng v&agrave; phong ph&uacute; kh&aacute;c.\r\n\r\nMột gian h&agrave;ng trưng b&agrave;y của doanh nghiệp quốc tế tại MTA Hanoi 2018. (Ảnh: Ly Ly)\r\n\r\nTheo &ocirc;ng BT Tee,&nbsp;Tổng Gi&aacute;m đốc C&ocirc;ng ty UBM VES -&nbsp;đơn vị tổ chức Triển l&atilde;m MTA Hanoi 2018, hiện nay, ng&agrave;nh c&ocirc;ng nghiệp cơ kh&iacute; Việt Nam đang phải đối mặt với nhiều th&aacute;ch thức về cải c&aacute;ch v&agrave; cải tiến c&ocirc;ng nghệ, nhằm đ&aacute;p ứng nhu cầu gia c&ocirc;ng v&agrave; sản xuất ng&agrave;y c&agrave;ng cao của x&atilde; hội. C&aacute;ch mạng C&ocirc;ng nghiệp 4.0 đ&atilde; n&acirc;ng tầm ng&agrave;nh cơ kh&iacute; chế tạo với những d&ograve;ng thiết bị th&ocirc;ng minh như c&aacute;nh tay người m&aacute;y (robot) chuy&ecirc;n dụng hay m&aacute;y in 3D c&ugrave;ng rất nhiều c&aacute;c c&ocirc;ng cụ m&aacute;y với nhiều t&iacute;nh năng vượt trội về mặt kỹ thuật.&nbsp;\r\n\r\n&ldquo;MTA Hanoi 2018 sẽ mang đến sản phẩm c&ocirc;ng nghệ mới cho ng&agrave;nh c&ocirc;ng nghiệp địa phương nhằm n&acirc;ng cao chất lượng v&agrave; năng suất cạnh tranh trong m&ocirc;i trường sản xuất to&agrave;n cầu h&oacute;a hiện nay&rdquo;, &ocirc;ng BT Tee n&oacute;i.\r\n\r\nNhận định về xu hướng h&uacute;t vốn ngoại của ng&agrave;nh cơ kh&iacute;, chế tạo thời gian gần đ&acirc;y, &ocirc;ng Phạm Đức Thi&ecirc;n, Trưởng b&ocirc;̣ m&ocirc;n kỹ thu&acirc;̣t cơ khí (Đại học Mỏ - Địa ch&acirc;́t Hà N&ocirc;̣i) cho rằng, đang c&oacute; sự ch&ecirc;nh lệch về vốn đầu tư trong lĩnh vực sản xuất chế tạo giữa doanh nghiệp nội v&agrave; doanh nghiệp ngoại. Nếu t&ocirc;̉ng v&ocirc;́n đầu tư của các c&ocirc;ng ty cơ khí trong nước chỉ đạt khoảng 360 - 380 tri&ecirc;̣u USD th&igrave; t&ocirc;̉ng v&ocirc;́n đ&acirc;̀u tư nước ngoài trong ngành sản xu&acirc;́t chế tạo đạt khoảng 2,1 tỷ USD.\r\n\r\n&ldquo;Nguồn vốn đầu tư n&agrave;y sẽ tiếp tục tăng khi dự đoán đ&ecirc;́n năm 2020, ngành c&ocirc;ng nghi&ecirc;̣p cơ khí ch&ecirc;́ tạo sẽ có t&ocirc;̉ng sản lượng xu&acirc;́t kh&acirc;̉u đạt 35%, giai đoạn đ&ecirc;́n năm 2030 đạt 40%, đ&ecirc;́n năm 2035 đạt 45% t&ocirc;̉ng sản lượng ngành cơ khí&rdquo;, &ocirc;ng Thi&ecirc;n dự b&aacute;o.', '1', '0', NULL, NULL, '2020-01-04__162602-44112889-2185355595053804-1946505772984696832-n.jpg', '0', '2020-01-03 20:54:34', '2020-01-03 22:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_total_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `c_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_total_product`, `c_active`, `c_title_seo`, `c_description`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(14, 'Dụng cụ điện', 'dung-cu-dien', NULL, '2020-01-03__category-1.jpg', '0', 1, 'Dụng cụ điện', 'Dụng cụ điện', NULL, '2020-01-01 19:44:58', '2020-01-03 05:33:28'),
(15, 'Dụng cụ cầm tay', 'dung-cu-cam-tay', NULL, '2020-01-03__category-2.jpg', '0', 1, 'Dụng cụ cầm tay', 'Dụng cụ cầm tay', NULL, '2020-01-01 19:45:09', '2020-01-03 05:33:54'),
(16, 'Đồ bảo hộ & PPE', 'do-bao-ho-ppe', NULL, '2020-01-03__category-6.jpg', '0', 1, 'Đồ bảo hộ & PPE', 'Đồ bảo hộ & PPE', NULL, '2020-01-01 19:45:24', '2020-01-03 05:34:06'),
(17, 'Thiết Bị Đo  Cơ Khí', 'thiet-bi-do-co-khi', NULL, '2020-01-03__category-5.jpg', '0', 1, 'Thiết Bị Đo  Cơ Khí', 'Thiết Bị Đo  Cơ Khí', NULL, '2020-01-01 19:45:35', '2020-01-03 05:34:16'),
(18, 'Máy phát điện', 'may-phat-dien', NULL, '2020-01-03__category-3.jpg', '0', 1, 'Máy phát điện', 'Máy phát điện', NULL, '2020-01-03 05:34:38', '2020-01-03 05:34:38'),
(19, 'Máy công nghiệp nặng', 'may-cong-nghiep-nang', NULL, '2020-01-03__category-4.jpg', '0', 1, 'Máy công nghiệp nặng', 'Máy công nghiệp nặng', NULL, '2020-01-03 05:35:20', '2020-01-06 06:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `c_title`, `c_content`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'nhan', 'runhitbtn51@gmail.com', 'asd', 'asd', 0, '2020-01-04 04:44:08', '2020-01-04 04:44:08'),
(2, 'nhan', '1651120111@sv.ut.edu.vn', 'asd', 'asd', 0, '2020-01-04 04:44:38', '2020-01-04 04:44:38'),
(3, 'su dung', '1651120111@sv.ut.edu.vn', 'asd', NULL, 0, '2020-01-04 04:48:25', '2020-01-04 04:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_products`
--

CREATE TABLE `gallery_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_products`
--

INSERT INTO `gallery_products` (`id`, `image_product_id`, `image`, `created_at`, `updated_at`) VALUES
(8, 5, '2020-01-08__product-16.jpg', '2020-01-08 04:14:37', '2020-01-08 04:14:37'),
(9, 5, '2020-01-08__product-16-1.jpg', '2020-01-08 04:14:37', '2020-01-08 04:14:37'),
(10, 5, '2020-01-08__product-16-2.jpg', '2020-01-08 04:14:37', '2020-01-08 04:14:37'),
(11, 5, '2020-01-08__product-16-3.jpg', '2020-01-08 04:14:37', '2020-01-08 04:14:37'),
(12, 5, '2020-01-08__product-16-4.jpg', '2020-01-08 04:14:37', '2020-01-08 04:14:37'),
(13, 4, '2020-01-12__4e474cac5a67f90d5dbe5ba50269281f.jpg', '2020-01-12 12:42:04', '2020-01-12 12:42:04'),
(14, 4, '2020-01-12__4e4953f1bc8d1147de6fb3809b6ef140.jpg', '2020-01-12 12:42:04', '2020-01-12 12:42:04'),
(15, 4, '2020-01-12__78389ec4886ff79e2fec70d33c3caebc.jpg', '2020-01-12 12:42:04', '2020-01-12 12:42:04'),
(16, 4, '2020-01-12__c2007c924d2e10977ab525cc22e9c85a.jpg', '2020-01-12 12:42:04', '2020-01-12 12:42:04'),
(17, 4, '2020-01-12__may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-hinh1-200-200-95-c1.jpg', '2020-01-12 12:42:05', '2020-01-12 12:42:05'),
(18, 14, '2020-01-12__1.jpg', '2020-01-12 12:50:30', '2020-01-12 12:50:30'),
(19, 14, '2020-01-12__3.jpg', '2020-01-12 12:50:30', '2020-01-12 12:50:30'),
(20, 14, '2020-01-12__4.jpg', '2020-01-12 12:50:31', '2020-01-12 12:50:31'),
(21, 14, '2020-01-12__5.jpg', '2020-01-12 12:50:31', '2020-01-12 12:50:31'),
(22, 14, '2020-01-12__6.jpg', '2020-01-12 12:50:31', '2020-01-12 12:50:31'),
(23, 15, '2020-01-12__0cf507b241fabb8797f9ca28007d6c83-1.jpg', '2020-01-12 12:52:49', '2020-01-12 12:52:49'),
(24, 15, '2020-01-12__0cf507b241fabb8797f9ca28007d6c83.jpg', '2020-01-12 12:52:49', '2020-01-12 12:52:49'),
(25, 15, '2020-01-12__6f00f059d73bf09743652c35334cb2dc.jpg', '2020-01-12 12:52:49', '2020-01-12 12:52:49'),
(26, 15, '2020-01-12__57c8fce6dfe50b8a06395760d38b5122.jpg', '2020-01-12 12:52:49', '2020-01-12 12:52:49'),
(27, 16, '2020-01-12__9e2e10193e0c2a1a76bf55393d082447.jpg', '2020-01-12 12:54:10', '2020-01-12 12:54:10'),
(28, 16, '2020-01-12__32dec445113d216612b433cb7f0a1922.jpg', '2020-01-12 12:54:11', '2020-01-12 12:54:11'),
(29, 16, '2020-01-12__38c823df3708fdd73f1e60c08f81aae9.png', '2020-01-12 12:54:11', '2020-01-12 12:54:11'),
(30, 16, '2020-01-12__9253a15008ad2168ea90f40e602abbea.jpg', '2020-01-12 12:54:11', '2020-01-12 12:54:11'),
(31, 16, '2020-01-12__e0ff727f4232c5f04a10b3431602093c.jpg', '2020-01-12 12:54:11', '2020-01-12 12:54:11'),
(32, 17, '2020-01-12__1eeabde929584e7bf435e26985550c3a.jpg', '2020-01-12 12:57:47', '2020-01-12 12:57:47'),
(33, 17, '2020-01-12__8459b9300471e3a68358a6f0038b2f0c.jpg', '2020-01-12 12:57:47', '2020-01-12 12:57:47'),
(34, 17, '2020-01-12__ad618f2f6eff63264953929bb5bd8093.jpg', '2020-01-12 12:57:48', '2020-01-12 12:57:48'),
(35, 17, '2020-01-12__b3c1f872f9bf03161cb648f5b67f99e4.jpg', '2020-01-12 12:57:48', '2020-01-12 12:57:48'),
(36, 17, '2020-01-12__c0683750fbbcb8c937efe67f9276487c.jpg', '2020-01-12 12:57:48', '2020-01-12 12:57:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_23_072532_create_categories_table', 1),
(4, '2019_12_26_125939_create_products_table', 2),
(5, '2019_12_26_132300_alter_column_pro_content_and_pro_title_seo_in_table_products', 3),
(6, '2019_12_29_102547_create_article_table', 4),
(7, '2020_01_04_113456_create_contacts_table', 5),
(8, '2020_01_04_130620_create_transactions_table', 6),
(9, '2020_01_04_130633_create_orders_table', 6),
(10, '2020_01_04_131117_alter_conlumn_pro_pay_pro_number_in_table_products', 7),
(14, '2020_01_05_085248_create_ratings_table', 8),
(15, '2020_01_06_143853_alter_column_total_pay_in_table_user', 8),
(16, '2020_01_08_024539_create_admins_table', 8),
(17, '2020_01_08_074336_create_gallery_products_table', 9),
(18, '2020_01_11_162336_alter_column_code_and_time_code_in_table_users', 10),
(19, '2020_01_12_003718_alter_column_code_active_users_in_users', 11),
(20, '2020_01_12_153027_create_products_favorite_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL DEFAULT 0,
  `or_product_id` int(11) NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(9, 39, 5, 2, 19800000, 1, NULL, NULL),
(10, 39, 4, 1, 2200000, 0, NULL, NULL),
(11, 40, 6, 1, 10834835, 12, NULL, NULL),
(12, 41, 15, 1, 6174000, 2, NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL DEFAULT 0,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_author_id` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_number_pay` int(11) NOT NULL DEFAULT 0 COMMENT 'số lần sản phẩm bán được',
  `pro_number` int(11) NOT NULL DEFAULT 0 COMMENT 'số lượng sản phẩm',
  `pro_total_rating` int(11) NOT NULL DEFAULT 0 COMMENT 'tổng số đánh số',
  `pro_total_number_rating` int(11) NOT NULL DEFAULT 0 COMMENT 'tổng số điểm đánh giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`, `pro_number_pay`, `pro_number`, `pro_total_rating`, `pro_total_number_rating`) VALUES
(4, 'Máy khoan pin vặn vít Bosch GSR 120-LI GEN II', 'may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii', 14, 2200000, 0, 0, 1, 1, 0, 'Máy khoan pin vặn vít Bosch GSR 120-LI GEN II ( Kèm bộ phụ kiện)', '2020-01-02__may-khoan-pin-van-vit.jpg', 'Máy khoan pin vặn', NULL, '2020-01-01 22:24:56', '2020-01-08 06:16:32', 'Máy khoan pin vặn', '<p>M&aacute;y khoan pin GSR 120-LI GEN II&nbsp;(k&egrave;m bộ phụ kiện) MỚI l&agrave; m&aacute;y khoan vặn v&iacute;t d&ugrave;ng pin của thương hiệu Bosch được l&agrave;m từ chất liệu cao cấp, cứng rất bền, sản xuất theo ti&ecirc;u chuẩn Ch&acirc;u &Acirc;u. M&aacute;y c&oacute; hai chế độ: khoan v&agrave; bắt v&iacute;t với 20 cấp trượt.</p>\r\n\r\n<p><img alt=\"Cấu tạo các bộ phận của bộ khoan pin Bosch GSR 120-LI\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/C%E1%BA%A5u%20t%E1%BA%A1o%20c%C3%A1c%20b%E1%BB%99%20ph%E1%BA%ADn%20c%E1%BB%A7a%20b%E1%BB%99%20khoan%20pin%20Bosch%20GSR%20120-LI\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh1.jpg\" title=\"Cấu tạo các bộ phận của bộ khoan pin Bosch GSR 120-LI\" /></p>\r\n\r\n<h2>ƯU ĐIỂM CỦA M&Aacute;Y KHOAN PIN BOSCH</h2>\r\n\r\n<ul>\r\n	<li>Vỏ&nbsp;m&aacute;y khoan&nbsp;c&oacute; thiết kế nhỏ gọn, bền bỉ v&agrave; tiện lợi.</li>\r\n	<li>T&ugrave;y chỉnh tốc độ: M&aacute;y c&oacute; tr&igrave;nh điều khiển vặn v&iacute;t, tốc độ v&agrave; phanh h&atilde;m động cơ gi&uacute;p người d&ugrave;ng c&oacute; thể t&ugrave;y chỉnh theo nhu cầu khoan.</li>\r\n	<li>Chế độ dừng th&ocirc;ng minh: Tự động dừng m&aacute;y trong trường hợp v&iacute;t đ&atilde; vặn hết v&agrave;o vật liệu, ngay cả khi vẫn giữ n&uacute;t khởi động gi&uacute;p bảo vệ vật liệu kh&ocirc;ng bị khoan qu&aacute; đ&agrave;.</li>\r\n	<li>Tay cầm được thiết kế khoa học: Vị tr&iacute; c&ocirc;ng tắc được bố tr&iacute; khoa học ph&ugrave; hợp cho cả người thuận tay tr&aacute;i v&agrave; tay phải. C&aacute;n cầm chống trượt, chắc chắn gi&uacute;p thao t&aacute;c dễ d&agrave;ng v&agrave; linh hoạt hơn.</li>\r\n	<li>T&iacute;nh đa năng:&nbsp;M&aacute;y khoan gia đ&igrave;nh&nbsp;c&oacute; khả năng khoan tr&ecirc;n c&aacute;c bề mặt gỗ, th&eacute;p, tường mỏng.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Bosch GSR 120-LI có các thông số kỹ thuật được ghi trên thân máy\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/Bosch%20GSR%20120-LI%20c%C3%B3%20c%C3%A1c%20th%C3%B4ng%20s%E1%BB%91%20k%E1%BB%B9%20thu%E1%BA%ADt%20%C4%91%C6%B0%E1%BB%A3c%20ghi%20tr%C3%AAn%20th%C3%A2n%20m%C3%A1y\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh2.jpg\" title=\"Bosch GSR 120-LI có các thông số kỹ thuật được ghi trên thân máy\" /></p>\r\n\r\n<h2>TH&Ocirc;NG SỐ KỸ THUẬT CỦA M&Aacute;Y KHOAN VẶN V&Iacute;T D&Ugrave;NG PIN&nbsp;GSR 120-LI</h2>\r\n\r\n<ul>\r\n	<li>Loại pin: Lithium-ion</li>\r\n	<li>Điện thế pin: 12V</li>\r\n	<li>Đường k&iacute;nh v&iacute;t tối đa: 7mm</li>\r\n	<li>Tốc độ kh&ocirc;ng tảiV&ograve;ng truyền lực thứ 1 (0 - 380 v&ograve;ng/ph&uacute;t); V&ograve;ng truyền lực thứ 2 (0 - 1.300 v&ograve;ng/ph&uacute;t)</li>\r\n	<li>Đường k&iacute;nh khoan gỗ: 20mm</li>\r\n	<li>Đường k&iacute;nh khoan th&eacute;p: 8mm</li>\r\n	<li>M&ocirc; men xoắn 30-13 Nm.</li>\r\n	<li>Phụ kiện đi k&egrave;m: pin 12 V 1.5 Ah Li-ion , 1 sạc GAL 1210 CV, bộ mũi khoan v&agrave; đầu v&iacute;t, vali đựng</li>\r\n	<li>Trọng lượng sản phẩm: 1,2kg</li>\r\n	<li>Thương hiệu: Bosch từ Đức</li>\r\n	<li>Phụ t&ugrave;ng số: 0 601 9F7 000</li>\r\n</ul>\r\n\r\n<p><img alt=\"Thân máy khoan bắt vít Bosch GSR 120 LI được làm từ chất liệu cao cấp\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/Th%C3%A2n%20m%C3%A1y%20khoan%20b%E1%BA%AFt%20v%C3%ADt%20Bosch%20GSR%20120%20LI%20%C4%91%C6%B0%E1%BB%A3c%20l%C3%A0m%20t%E1%BB%AB%20ch%E1%BA%A5t%20li%E1%BB%87u%20cao%20c%E1%BA%A5p\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh3.jpg\" title=\"Thân máy khoan bắt vít Bosch GSR 120 LI được làm từ chất liệu cao cấp\" /></p>\r\n\r\n<p><img alt=\"Trọn bộ phụ kiện bộ khoan pin bắt vít Bosch GSR 120 LI\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/Tr%E1%BB%8Dn%20b%E1%BB%99%20ph%E1%BB%A5%20ki%E1%BB%87n%20b%E1%BB%99%20khoan%20pin%20b%E1%BA%AFt%20v%C3%ADt%20Bosch%20GSR%20120%20LI\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh4.jpg\" title=\"Trọn bộ phụ kiện bộ khoan pin bắt vít Bosch GSR 120 LI\" /></p>\r\n\r\n<p><img alt=\"Đầu kẹp Auto Lock cung cấp cho người dùng khả năng tháo lắp mũi khoan nhanh chóng\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/%C4%90%E1%BA%A7u%20k%E1%BA%B9p%20Auto%20Lock%20cung%20c%E1%BA%A5p%20cho%20ng%C6%B0%E1%BB%9Di%20d%C3%B9ng%20kh%E1%BA%A3%20n%C4%83ng%20th%C3%A1o%20l%E1%BA%AFp%20m%C5%A9i%20khoan%20nhanh%20ch%C3%B3ng\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh5.jpg\" title=\"Đầu kẹp Auto Lock cung cấp cho người dùng khả năng tháo lắp mũi khoan nhanh chóng\" /></p>\r\n\r\n<p><img alt=\"Bosch GSR 120-LI GEN II được đi kèm hộp đựng tiện lợi\" longdesc=\"https://maydochuyendung.com/dung-cu-dien/Bosch%20GSR%20120-LI%20GEN%20II%20%C4%91%C6%B0%E1%BB%A3c%20%C4%91i%20k%C3%A8m%20h%E1%BB%99p%20%C4%91%E1%BB%B1ng%20ti%E1%BB%87n%20l%E1%BB%A3i\" src=\"https://maydochuyendung.com/uploads/sanpham/may-khoan-pin-van-vit-bosch-gsr-120-li-gen-ii-anh6.jpg\" title=\"Bosch GSR 120-LI GEN II được đi kèm hộp đựng tiện lợi\" /></p>', 4, 6, 3, 13),
(14, 'Máy Khoan Pin Tolsen 79023 12V', 'may-khoan-pin-tolsen-79023-12v', 14, 793000, 0, 2, 1, 1, 0, 'Chất liệu cao cấp\r\n\r\nĐộ bền cao\r\n\r\nAn toàn khi sử dụng\r\n\r\nTiêu chuẩn Châu Âu\r\n\r\nSản phẩm được sử dụng rộng rãi', '2020-01-12__1.jpg', 'Máy Khoan Pin Tolsen 79023 12V', NULL, '2020-01-12 12:50:11', '2020-01-12 12:50:51', 'Máy Khoan Pin Tolsen 79023 12V', '<h5>Kiểu d&aacute;ng h&igrave;nh khẩu s&uacute;ng tiện dụng</h5>\r\n\r\n<p><strong>M&aacute;y Khoan Pin Tolsen 79023 12V</strong>&nbsp;c&oacute; kiểu d&aacute;ng h&igrave;nh khẩu s&uacute;ng tiện dụng với tay cầm lớn, cho bạn thoải m&aacute;i cầm nắm v&agrave; thao t&aacute;c khi lắp đặt, sửa chữa đồ đạc trong gia đ&igrave;nh. Phần th&acirc;n m&aacute;y c&oacute; c&aacute;c đường v&acirc;n nổi, gi&uacute;p hạn chế khả năng trơn trượt, giảm thiểu nguy hiểm trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p>M&aacute;y sử dụng c&aacute;c mối nối kim loại chắc chắn bằng th&eacute;p kh&ocirc;ng gỉ, bảo đảm độ bền, cho d&ugrave; bạn c&oacute; thường xuy&ecirc;n sử dụng sản phẩm ở những nơi ẩm ướt như đường ống nước, dưới bồn rửa mặt, trong nh&agrave; vệ sinh.</p>\r\n\r\n<h5>Thiết kế lực m&ocirc;-men xoắn lớn</h5>\r\n\r\n<p>Thiết kế lực m&ocirc;-men xoắn lớn, cho gia tốc vận h&agrave;nh được đẩy l&ecirc;n tối đa, sản phẩm gi&uacute;p việc vặn một chiếc đinh, v&iacute;t v&agrave;o tường trở n&ecirc;n dễ d&agrave;ng, nhanh ch&oacute;ng lại kh&ocirc;ng tốn c&ocirc;ng sức.</p>\r\n\r\n<h5>Sử dụng nguồn năng lượng Li-ion 12V 1500mAh</h5>\r\n\r\n<p>M&aacute;y sử dụng nguồn năng lượng Li-ion 12V 1500mAh c&oacute; khả năng sạc điện nhanh ch&oacute;ng, trọng lượng nhẹ, kh&ocirc;ng c&oacute; d&acirc;y điện g&acirc;y vướng v&iacute;u, kh&ocirc;ng g&acirc;y trở ngại khi vận h&agrave;nh.</p>\r\n\r\n<h5>Th&ocirc;ng số kỹ thuật</h5>\r\n\r\n<ul>\r\n	<li>Điện &aacute;p: DC 12V</li>\r\n	<li>Nguồn điện: Li-ion, 1 * 1500mAh</li>\r\n	<li>Tốc độ kh&ocirc;ng tải: 0-400rpm / 0-1400rpm/Ly hợp: v&ograve;ng c&agrave;i đặt 18 + 1</li>\r\n	<li>M&ocirc;-men xoắn cực đại: &ge;28Nm</li>\r\n	<li>Chuck: chuck keyless 10 mm</li>\r\n	<li>Chuyển đổi: chuyển tiếp v&agrave; đảo ngược</li>\r\n	<li>Bộ sạc: AC 100-240V, Europlug</li>\r\n	<li>Thời gian sạc: 1h sạc nhanh</li>\r\n	<li>Đ&egrave;n b&aacute;o pin 3 đ&ograve;n bẩy v&agrave; một đ&egrave;n nguồn</li>\r\n</ul>\r\n\r\n<p>* Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh</p>', 0, 10, 0, 0),
(15, 'Máy Phát Điện Chạy Xăng 3KW Mitsuyama 4900', 'may-phat-dien-chay-xang-3kw-mitsuyama-4900', 18, 6300000, 0, 2, 1, 1, 0, 'Máy phát điện chạy xăng 3KW Misuyama 4900', '2020-01-12__6f00f059d73bf09743652c35334cb2dc.jpg', NULL, NULL, '2020-01-12 12:52:25', '2020-01-12 13:03:34', 'Máy Phát Điện Chạy Xăng 3KW Mitsuyama 4900', '<ul>\r\n	<li>M&aacute;y ph&aacute;t điện chạy xăng 3KW Misuyama 4900</li>\r\n	<li>M&aacute;y ph&aacute;t điện chạy xăng 4900 với c&ocirc;ng suất 3KW c&oacute; thể cung cấp điện cho hầu hết c&aacute;c thiết bị sử dụng trong gia đ&igrave;nh như đ&egrave;n chiếu s&aacute;ng, quạt gi&oacute;, nồi cơm, tivi, tủ lạnh, điều h&ograve;a.</li>\r\n	<li>M&aacute;y ph&aacute;t điện chạy xăng Misuyama được thiết kế với khung chịu lực chắc chắn, ch&acirc;n đệm cao su giảm tối đa rung lắc trong qu&aacute; tr&igrave;nh vận h&agrave;nh.</li>\r\n	<li>M&aacute;y được thiết kế hệ thống bugi đ&aacute;nh lửa hiện đại, hệ thống tự động điều chỉnh điện &aacute;p AVR với chức năng đảm bảo điện &aacute;p ra lu&ocirc;n ổn định v&agrave; an to&agrave;n cho c&aacute;c thiết bị được cấp điện.</li>\r\n	<li>Cấu h&igrave;nh m&aacute;y ph&aacute;t điện chạy xăng Misuyama 4900</li>\r\n	<li>Với dung t&iacute;ch xi lanh 235cc v&agrave; c&ocirc;ng suất 3KW, m&aacute;y chạy ổn định với d&ograve;ng điện 220V, tần suất 50Hz ph&ugrave; hợp với c&aacute;c thiết bị điện được sử dụng trong nước.</li>\r\n	<li>Dung t&iacute;ch b&igrave;nh nhi&ecirc;n liệu 16L v&agrave; mức ti&ecirc;u hao nhi&ecirc;n liệu khoảng 400g/kwh, khi đổ đầy b&igrave;nh nhi&ecirc;n liệu c&oacute; thể đủ cho 10 giờ hoạt động của m&aacute;y trước khi phải tiếp th&ecirc;m nhi&ecirc;n liệu.</li>\r\n	<li>Bộ phận khởi động giật nổ chỉ với một c&uacute; giật l&agrave; c&oacute; thể khởi động.</li>\r\n	<li>Sản xuất đồng bộ theo d&acirc;y chuyền v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến gi&uacute;p tiết kiệm nhi&ecirc;n liệu v&agrave; vận h&agrave;nh ổn định.</li>\r\n	<li>N&uacute;t điều chỉnh v&agrave; nơi gắn d&acirc;y điện thuận tiện trong vận h&agrave;nh v&agrave; dễ d&agrave;ng thao t&aacute;c.</li>\r\n</ul>', 1, 9, 0, 0),
(16, 'Mũ Bảo Hộ Lao Động Dây Cài Màu Vàng', 'mu-bao-ho-lao-dong-day-cai-mau-vang', 16, 70000, 0, 0, 1, 1, 0, 'Mũ Bảo Hộ Lao Động Dây Cài Màu Vàng', '2020-01-12__9253a15008ad2168ea90f40e602abbea.jpg', NULL, NULL, '2020-01-12 12:53:56', '2020-01-12 12:57:59', 'Mũ Bảo Hộ Lao Động Dây Cài Màu Vàng', '<h1>-Mũ bảo hộ lao động Việt Nam l&agrave; một trong những trang bị bảo vệ cần thiết h&agrave;ng đầu cho người lao động.</h1>\r\n\r\n<h1><em>Mũ bảo hộ lao động</em></h1>\r\n\r\n<ul>\r\n	<li><em>Mũ bảo hộ lao động Việt Nam&nbsp;</em>được sản xuất từ chất liệu nhựa tổng hợp c&oacute; độ bền cao v&agrave; khả năng chịu va đập t&ocirc;t, th&acirc;n thiện với m&ocirc;i trường.</li>\r\n	<li>Mũ c&oacute; quai đeo điều chỉnh theo k&iacute;ch cỡ đầu rất linh hoạt.</li>\r\n	<li><em>Mũ bảo hộ lao động Việt Nam&nbsp;</em>thiết kế nhỏ gọn,đẹp mắt, trang nh&atilde;, lịch sự, nhiều m&agrave;u sắc lựa chọn&gt; t&iacute;nh năng bảo vệ đầu tối ưu, kh&ocirc;ng g&acirc;y cảm gi&aacute;c kh&oacute; chịu.</li>\r\n	<li>Th&ocirc;ng tho&aacute;ng kh&iacute; v&ograve;m đầu, thoải m&aacute;i khi sử dụng, mang hiệu quả an to&agrave;n cho người d&ugrave;ng.</li>\r\n	<li>Chắc chắn, bền bỉ ( Độ b&ecirc;n l&ecirc;n đến 1 năm khi sử dụng đ&uacute;ng c&aacute;ch )</li>\r\n</ul>\r\n\r\n<p><em>&nbsp;</em>Mũ bảo hộ lao động&nbsp;được d&ugrave;ng trong BHLĐ c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng , hầm mỏ .</p>\r\n\r\n<p>- Mũ bảo hộ lao động c&oacute; t&aacute;c dụng bảo vệ phần đầu cho kĩ sư, c&ocirc;ng nh&acirc;n trong qu&aacute; tr&igrave;nh thi c&ocirc;ng c&ocirc;ng tr&igrave;nh x&acirc;y dựng hay hoạt động sản xuất khỏi những t&aacute;c động xấu b&ecirc;n ngo&agrave;i, giảm nguy cơ g&acirc;y nguy hiểm cho n&atilde;o bộ.</p>\r\n\r\n<p>- Ngo&agrave;i ra&nbsp;<em>mũ bảo hộ lao động Việt Nam</em>&nbsp;c&ograve;n c&oacute; t&aacute;c dụng kh&aacute;c l&agrave; che nắng che mưa, tạo t&aacute;c phong chuy&ecirc;n nghiệp cho c&aacute;c ai l&agrave;m trong lĩnh vực x&acirc;y dựng, sản xuất.</p>', 0, 10, 0, 0),
(17, 'Thước kẹp cơ khí 150mm', 'thuoc-kep-co-khi-150mm', 17, 114000, 0, 0, 1, 1, 0, 'Thước kẹp cơ khí 150mm', '2020-01-12__b3c1f872f9bf03161cb648f5b67f99e4.jpg', NULL, NULL, '2020-01-12 12:57:23', '2020-01-12 12:57:57', 'Thước kẹp cơ khí 150mm', '<ul>\r\n	<li>Thước kẹp cơ kh&iacute; 150mm:</li>\r\n	<li>Thước Kẹp&nbsp;hay&nbsp;Thước Cặp&nbsp;l&agrave; một loại dụng cụ đo kh&aacute; ch&iacute;nh x&aacute;c, được sử dụng nhiều trong những ng&agrave;nh sản xuất như: cơ kh&iacute;, đồ gỗ, đồ nhựa, nh&ocirc;m k&iacute;nh ...&nbsp;Thước Kẹp d&ugrave;ng để đo k&iacute;ch thước như chiều d&agrave;i, rộng của chi tiết h&igrave;nh trụ, vu&ocirc;ng hay đo đường k&iacute;nh trong, đường k&iacute;nh ngo&agrave;i, chiều s&acirc;u với độ ch&iacute;nh x&aacute;c tương đối cao.</li>\r\n	<li>Thước cặp cơ kh&iacute; :&nbsp;Hiển thị kết quả tr&ecirc;n vạch cơ kh&iacute;.</li>\r\n	<li>Đ&oacute; l&agrave; ph&acirc;n loại theo đặc điểm của thước. C&ograve;n về độ ch&iacute;nh x&aacute;c ta c&oacute; c&aacute;c loại thước cặp c&oacute; độ ch&iacute;nh x&aacute;c kh&aacute;c nhau như: 0.1 mm , 0.05 mm , 0.02 mm .</li>\r\n	<li>Đối với thước kẹp đồng hồ v&agrave; điện tử th&igrave; kết quả đo đ&atilde; được hiển thị dưới dạng con số tr&ecirc;n đồng hồ rồi, v&igrave; vậy bạn c&oacute; thể dễ d&agrave;ng đọc kết quả của n&oacute;. C&ograve;n đối với thứơc kẹp cơ kh&iacute; bạn phải t&igrave;m số thứ tự của vạch tr&ugrave;ng tr&ecirc;n du x&iacute;ch v&agrave; nh&acirc;n n&oacute; với trị số l&agrave; 0.1, 0.05, hoặc 0.02 tuỳ thuộc v&agrave;o độ ch&iacute;nh x&aacute;c của thước l&agrave; bao nhi&ecirc;u.&nbsp;</li>\r\n</ul>', 0, 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_favorite`
--

CREATE TABLE `products_favorite` (
  `id` int(10) UNSIGNED NOT NULL,
  `pf_product_id` int(11) NOT NULL DEFAULT 0,
  `pf_user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_favorite`
--

INSERT INTO `products_favorite` (`id`, `pf_product_id`, `pf_user_id`) VALUES
(12, 4, 16),
(13, 5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_product_id` int(11) NOT NULL DEFAULT 0,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(11) NOT NULL DEFAULT 0,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(39, 1, 41800000, 'ok nhanh', '114 nam chau', '0921249497', 1, NULL, '2020-01-07 05:24:39'),
(40, 1, 10834834, 'asd', 'asd', '0921249497', 1, NULL, '2020-01-07 23:21:29'),
(41, 16, 6174000, 'asdas', '114 nam chau', '123123123', 1, NULL, '2020-01-12 13:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_number` int(11) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL,
  `code_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_active` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `total_number`, `code`, `time_code`, `code_active`, `time_active`) VALUES
(1, 'Bùi Thiện Nhân', 'runhitbtn51@gmail.com', '0921249497', NULL, 1, '$2y$10$2SrIYDiZdFZsUw1aJiGkUONoHbUiGSgHddqQjCEivgFtUraatlSUm', NULL, '2020-01-04 01:17:42', '2020-01-11 17:32:11', 3, '$2y$10$Y0pEUl7WTuysnVAMoiLauumjRjOyUJYk3Y6XeLr4l3cbXqtWzJ9ny', '2020-01-11 17:22:36', NULL, NULL),
(2, 'su dung', '1651120111@sv.ut.edu.vn', '0921249497', NULL, 1, '$2y$10$cqib3blTXYSiASIKej6OoeHYYamY9BtMcppqOxSsdsTaDIDre1JF2', NULL, '2020-01-05 08:41:09', '2020-01-05 08:41:09', 0, NULL, NULL, NULL, NULL),
(8, 'gpk74429', 'gpk74429@bcaoo.com', '123123123', NULL, 1, '$2y$10$B.uSfxr8YoEP8zgFuqqGd.sMaMt/L/ixNSl7itBkNN7Jbah4jTUru', NULL, '2020-01-12 07:59:54', '2020-01-12 07:59:54', 0, NULL, NULL, '$2y$10$5vJiix/mE0B/Uye86rT9VeMGWbqYxqQWw0xpspaPaz3GkwMJnM80e', '2020-01-12 07:59:54'),
(16, 'nhan', 'thiennhan677@gmail.com', '123123123', NULL, 2, '$2y$10$pzKTUuBhOUVRAZrrwD2ueumqthEyq/8Ekc6iSb0zc.eXlujy9c6G2', NULL, '2020-01-12 08:20:43', '2020-01-12 13:03:34', 1, '$2y$10$1RLCv2TcnPiA8cF4Eu56i.BcMxKLpRdv0zeDG1HC1ykDZ2tKvS6ce', NULL, '$2y$10$1RLCv2TcnPiA8cF4Eu56i.BcMxKLpRdv0zeDG1HC1ykDZ2tKvS6ce', '2020-01-12 08:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_a_name_unique` (`a_name`),
  ADD KEY `article_a_slug_index` (`a_slug`),
  ADD KEY `article_a_active_index` (`a_active`),
  ADD KEY `article_a_author_id_index` (`a_author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_products`
--
ALTER TABLE `gallery_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_author_id_index` (`pro_author_id`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Indexes for table `products_favorite`
--
ALTER TABLE `products_favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_favorite_pf_product_id_index` (`pf_product_id`),
  ADD KEY `products_favorite_pf_user_id_index` (`pf_user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_index` (`ra_product_id`),
  ADD KEY `ratings_ra_user_id_index` (`ra_user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`),
  ADD KEY `users_code_index` (`code`),
  ADD KEY `users_code_active_index` (`code_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_products`
--
ALTER TABLE `gallery_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products_favorite`
--
ALTER TABLE `products_favorite`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
