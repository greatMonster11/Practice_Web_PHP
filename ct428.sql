-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2019 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct428`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `chitietsp` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `hinhanhsp` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `idtv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `chitietsp`, `giasp`, `hinhanhsp`, `idtv`) VALUES
(34, 'iphone xxx', 'No in he real went find mr. Wandered or strictly raillery ion so', 89, './sanphams/35389348_206182286863536_6993964743836827648_n.png', 3),
(35, 'latop hp', 'No in he real went find mr. Wandered or strictly gence diminution so', 900909, './sanphams/56487439_801515596883403_7163897817847562240_n.jpg', 3),
(36, 'Mackbook pro', ' nothing nothing nothing nothing nothing nothing nothing ', 1000, './sanphams/58372901_657697131324210_7373000688655138816_n.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `matkhau` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinhanh` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nghenghiep` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sothich` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `tendangnhap`, `matkhau`, `hinhanh`, `gioitinh`, `nghenghiep`, `sothich`) VALUES
(1, 'sang', '83a046ffa06d5c37860bca369940cd73', './images/35389348_206182286863536_6993964743836827648_n.png', 'nam', 'hocSinh', 'code,sleep'),
(2, 'sang2', '83a046ffa06d5c37860bca369940cd73', './images/56487439_801515596883403_7163897817847562240_n.jpg', 'nam', 'hocSinh', 'code,sleep'),
(3, 'sangle', '83a046ffa06d5c37860bca369940cd73', './images/56487439_801515596883403_7163897817847562240_n.jpg', 'nam', 'sinhVien', 'sleep');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idthanhvien` (`idtv`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `idthanhvien` FOREIGN KEY (`idtv`) REFERENCES `thanhvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
