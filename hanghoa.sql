-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 04:16 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hanghoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ma_hang` varchar(255) NOT NULL,
  `ten_hang` varchar(255) NOT NULL,
  `loai_hang` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `so_luong` varchar(255) NOT NULL,
  `ngay_tao` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `ma_hang`, `ten_hang`, `loai_hang`, `gia`, `so_luong`, `ngay_tao`, `mo_ta`) VALUES
(2, '01', 'IphoneX', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi'),
(3, '02', 'Samsung Galaxy S7', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi'),
(4, '03', 'Vinsmart Pro', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi'),
(5, '04', 'Daikin Inverter', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi'),
(6, '05', 'Panasonic Innverter', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi'),
(7, '06', 'Samsung Galaxy J3', 'Điện Thoại', '100', '100', '08/11', 'Dùng để nghe gọi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
