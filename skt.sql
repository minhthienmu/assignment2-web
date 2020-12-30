-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2020 lúc 10:08 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `skt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `address`, `message`) VALUES
(0, 'name', 'phone', 'email', 'address', 'message'),
(1, 'Thiện', '0914895799', 'thien@gmail.com', 'thien', 'Tôi muốn liên hệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homenews`
--

CREATE TABLE `homenews` (
  `id` int(100) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `homenews`
--

INSERT INTO `homenews` (`id`, `title`, `body`, `img`) VALUES
(1, 'Tiết kiệm tối đa chi phí', 'Có rất nhiều doanh nghiệp Việt Nam hoạt động trong lĩnh vực sản xuất đang gặp phải một số vấn đề đau đầu như: hiệu suất thấp, chi phí vận hành cao, tình trạng lãng phí trong công tác quản lý xảy ra nhiều...\r\nNhờ vào công nghệ và ứng dụng doanh nghiệp có thể giảm bớt các chi phí phát sinh trong quá trình vận hành\r\n', 'blog_post_2.jpg'),
(2, 'Nâng cao hiệu suất làm việc', 'Với phần mềm công nghệ trong tầm tay, nhà sản xuất có thể giải quyết các vấn đề ngay khi chúng được phát hiện. Phần mềm có các tính năng đa dạng, giúp Quản lý giao tiếp với đội ngũ nhân viên, xác định các vấn đề & giải quyết nhanh chóng các vấn đề đó. \r\nGiúp bộ phận vận hành quản lý các thông tin dựa trên một cơ sở dữ liệu, cung cấp kết quả nhanh chóng.', 'blog_post_1.png'),
(3, 'Phần mềm Quản lý tối ưu', 'Được thiết kế với giao diện giúp người dùng dễ dàng sử dụng và nắm bắt thông tin nhanh chóng.', 'blog_post_3.jpg'),
(5, 'Quản lý TEst', 'TEst', 'news1.png'),
(6, 'Test mới', 'ABC', 'wallpaper.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone`, `email`, `address`, `role`) VALUES
(1, 'dun', '123', '0914895799', 'ntdu198@gmail.com', 'ad', NULL),
(3, 'thien', 'thien9999', '09147959911', 'thien@gmail.com', '11122', 1),
(4, 'thientran', 'thien', '0914895799', 'minhthienmu@gmail.com', 'thien', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `homenews`
--
ALTER TABLE `homenews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `homenews`
--
ALTER TABLE `homenews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
