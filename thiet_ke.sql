-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2023 lúc 11:48 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thiet_ke`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(550) NOT NULL,
  `date` varchar(20) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noidung`, `date`, `id_users`, `id_product`) VALUES
(192, 'ssss', '14/04/2023', 7, 3),
(193, '222', '14/04/2023', 7, 3),
(194, 'ádasdasd', '14/04/2023', 7, 3),
(195, 'hhhh', '14/04/2023', 7, 10),
(196, 'dẹ quá ạ', '14/04/2023', 7, 10),
(197, 'ukm dẹp', '14/04/2023', 9, 10),
(198, 'ssss', '14/04/2023', 9, 21),
(207, 'cssdfdsfdsf', '14/04/2023', 9, 10),
(208, 'sdsfsdfsdf', '14/04/2023', 7, 10),
(209, 'sssss', '14/04/2023', 7, 10),
(210, 'wwwwwwwwwwww', '14/04/2023', 7, 10),
(211, 'qqq', '14/04/2023', 7, 10),
(212, 'ss', '14/04/2023', 9, 10),
(213, 's', '14/04/2023', 9, 10),
(214, 'sâsasa', '14/04/2023', 9, 10),
(215, '', '14/04/2023', 9, 10),
(216, 'dsds', '14/04/2023', 9, 10),
(217, 'ádsad', '14/04/2023', 9, 10),
(218, 'qq', '14/04/2023', 9, 10),
(219, 'qq', '14/04/2023', 9, 10),
(220, 'â', '14/04/2023', 9, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_name` varchar(255) NOT NULL,
  `cart_img` varchar(255) NOT NULL,
  `cart_priceB` int(50) NOT NULL,
  `cart_moTa` varchar(50) NOT NULL,
  `cart_idUser` int(11) NOT NULL,
  `cart_idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_name`, `cart_img`, `cart_priceB`, `cart_moTa`, `cart_idUser`, `cart_idProduct`) VALUES
(66, 'Quần Short', 'qd2.jpg', 120, '', 7, 0),
(67, 'Quần Short', 'qd2.jpg', 120, '', 7, 0),
(68, 'Set nỉ bông', 'hd_qd2.jpg', 450, 'dấd', 7, 0),
(69, 'Set nỉ bông', 'hd_qd2.jpg', 450, 'dấd', 7, 0),
(71, 'Áo Sweater ', 'sw.jpg', 0, '', 7, 0),
(72, 'Áo tay lỡ Gấu bear', 'ac3.jpg', 200, 'dsfsdf', 7, 11),
(73, 'Túi Đeo Chéo Cực Chất', 'tui2.jpg', 220, 'qqqq', 7, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(20) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_loai`) VALUES
(1, 'Áo tay lỡ'),
(2, 'Áo Polo'),
(3, 'Áo Sweater'),
(4, 'Quần Short'),
(5, 'Áo Hoodie\r\n'),
(6, 'sp_tieude'),
(7, 'sale'),
(8, 'phu_kien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `name_kh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rols` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `name_kh`, `email`, `password`, `rols`) VALUES
(7, 'tuấn', '11', '1', 0),
(9, 'admin', 'admin@fpt.edu', '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price_n` int(20) NOT NULL,
  `price_b` int(20) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `luot_xem` int(20) DEFAULT 0,
  `address_b` varchar(255) NOT NULL,
  `address_n` varchar(255) NOT NULL,
  `iddm` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `price_n`, `price_b`, `img`, `mo_ta`, `luot_xem`, `address_b`, `address_n`, `iddm`) VALUES
(2, 'Áo tay lỡ màu nâu', 0, 0, 'ac1.jpg', '', 0, '', '', 6),
(3, 'Áo Sweater ', 0, 0, 'sw.jpg', '', 0, '', '', 6),
(4, 'Quần Short', 0, 120, 'qd2.jpg', '', 0, '', '', 6),
(5, 'Áo Hoodie chữ R', 250, 350, 'hd1.jpg', 'Đẹp', 0, 'Úc lý', 'Úc lý', 5),
(6, 'Áo tay lỡ TEELAB', 150, 230, 'ac2.jpg', 'Mát', 0, 'bn', 'ul', 1),
(7, 'Áo Polo', 250, 350, 'ac_qc1.jpg', 'ssss', 0, 'ul', 'bn', 2),
(8, 'Áo tay lỡ màu đen', 150, 200, 'ac4.jpg', 'www', 0, 'bn', 'uc', 1),
(9, 'Quần Short Nike', 120, 180, 'qd1.jpg', 'đkksks', 0, 'bn', 'uc', 4),
(10, 'Set nỉ bông', 350, 450, 'hd_qd2.jpg', 'dấd', 0, 'bn', 'uc', 5),
(11, 'Áo tay lỡ Gấu bear', 199, 200, 'ac3.jpg', 'dsfsdf', 0, 'qn', 'uc', 7),
(13, 'Giày Nike Trắng', 250, 350, 'giay_nike2.jpg', 'ssss', 0, 'bn', 'ul', 8),
(14, 'Túi Đeo Chéo Kẻ Caro', 150, 280, 'tui1.jpg', 'wwww', 0, 'Úc lý', 'fc', 8),
(15, 'Tất Nike Trắng', 10, 20, 'tat1.jpg', 'gg', 0, 'lv', 'fc', 8),
(16, 'Giày Jordan ', 200, 300, 'giay_jd1.jpg', 'qqq', 0, 'lv', 'fc', 8),
(17, 'Túi Đeo Chéo Cực Chất', 120, 220, 'tui2.jpg', 'qqqq', 0, 'lv', 'uc', 8),
(18, 'Giày Jordan ForOne', 230, 350, 'giay_jd.jpg', 'qqqq', 0, 'lv', 'ul', 8),
(19, 'KÍnh màu cực chất', 12, 28, 'kinh.jfif', 'kkkk', 0, 'lv', 'lv', 8),
(20, 'Giày trắng Nike đen', 200, 320, 'giay_nike1.webp', 'tttt', 0, 'qn', 'fc', 8),
(21, 'Áo Hoodie Mikenbia', 150, 250, 'hd3.jpg', 'ggg', 0, 'qn', 'fc', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bl_sp` (`id_product`),
  ADD KEY `lk_bl_kh` (`id_users`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_bl_kh` FOREIGN KEY (`id_users`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `lk_bl_sp` FOREIGN KEY (`id_product`) REFERENCES `san_pham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
