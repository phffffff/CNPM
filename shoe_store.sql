-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2021 lúc 03:48 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `idbanner` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`idbanner`, `anh`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(3, 'logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `idcolor` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`idcolor`, `color`) VALUES
(1, 'đỏ'),
(2, 'vàng'),
(3, 'đen'),
(4, 'xám'),
(5, 'xanh'),
(6, 'nâu'),
(7, 'cam'),
(8, 'trắng'),
(9, 'hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `idgopy` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--

INSERT INTO `gopy` (`idgopy`, `idSP`, `email`, `noidung`) VALUES
(1, 1, 'abc@gmail.com', 'GIÀY TÂY NAM CÔNG SỞ DA'),
(2, 1, 'abc@gmial.com', 'giày đẹp thiệt'),
(3, 9, 'ngophitin2001@gmal.com', 'GIày này cũng ổn'),
(4, 9, 'abc@gmail.com', 'Giày công sở 2 này đẹp và bền'),
(5, 2, 'abc@gmail.com', 'Giày này cho học sinh có phù hợp không?'),
(6, 5, 'ngophitin2001@gmal.com', 'Giày học ính nam này đẹp, bền '),
(7, 6, 'ngophitin2001@gmal.com', 'Giày bền, đẹp và rất đáng tiền'),
(8, 4, 'abc@gmial.com', 'Giày da bò này là da thiệt nè'),
(9, 3, 'gopy@gmail.com', 'Giày này hợp thời trang này'),
(10, 7, 'ngophitin2001@gmal.com', 'GIÀY THỜI TRANG này đẹp và bền á ad'),
(11, 8, 'ngophitin2001@gmal.com', 'Loại giày này hợp với mình nè');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `ngaymua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhoadon`, `idUser`, `idSP`, `tongtien`, `trangthai`, `soluongmua`, `ngaymua`) VALUES
(2, 1, 2, 600, 1, 3, '2020-12-31'),
(4, 1, 7, 700, 1, 2, '2020-12-31'),
(6, 1, 4, 790, 1, 1, '2020-11-25'),
(7, 1, 2, 400, 1, 2, '2021-01-01'),
(8, 1, 4, 790, 1, 1, '2021-01-06'),
(9, 1, 8, 950, 1, 1, '2021-01-09'),
(18, 6, 3, 150, 1, 1, '2021-01-11'),
(19, 1, 3, 150, 1, 1, '2021-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(11) NOT NULL,
  `loaiKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatriKM` float NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`idKM`, `loaiKM`, `giatriKM`, `ngaybatdau`, `ngayketthuc`) VALUES
(1, 'Không', 0, '0000-00-00', '0000-00-00'),
(2, 'Sản phẩm mới', 30, '0000-00-00', '0000-00-00'),
(3, 'Khuyến mãi đầu năm', 30, '0000-00-00', '0000-00-00'),
(4, 'Khuyến mãi cuối năm', 30, '0000-00-00', '0000-00-00'),
(5, 'Khuyến mãi theo dịch vu', 30, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `layout`
--

CREATE TABLE `layout` (
  `id` int(11) NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donvi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_1` double NOT NULL,
  `phone_2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `layout`
--

INSERT INTO `layout` (`id`, `time`, `mail_1`, `mail_2`, `diachi`, `donvi`, `phone_1`, `phone_2`) VALUES
(1, '24/7', '19it4@gmail.com', 'vku@vku.udn.vn', 'Làng Đại học, Đà Nẵng', 'Khoa Công Nghệ Thông Tin & Truyền Thông - Đại Học Đà Nẵng VKU', 787700624, 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLoaiSP` int(11) NOT NULL,
  `tenLSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoaiSP`, `tenLSP`, `hinhanh`) VALUES
(1, 'Giày công sở', 'giaycongso.jpg'),
(2, 'Giày học sinh', 'giayhs2.jpg'),
(3, 'Giày da bò', 'giaydabo.jpg'),
(4, 'Giày thời trang nam', 'giaythoitrang2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idQuyen` int(11) NOT NULL,
  `tenquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitietquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`idQuyen`, `tenquyen`, `chitietquyen`) VALUES
(1, 'admin', 'quản lý trang web'),
(0, 'customer', 'khách hàng quen'),
(2, 'banhang', 'Nhân viên bán hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idKM` int(11) NOT NULL,
  `idLoaiSP` int(11) NOT NULL,
  `idcolor` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dongia` int(11) NOT NULL,
  `anh1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idKM`, `idLoaiSP`, `idcolor`, `idsize`, `tenSP`, `Dongia`, `anh1`, `anh2`, `anh3`, `ngaynhap`, `mota`, `soluong`) VALUES
(1, 2, 1, 1, 5, 'Giày Tây Nam Công Sở Da', 130, 'Giày Tây Nam Công Sở Da1.jpg', 'Giày Tây Nam Công Sở Da2.jpg', 'Giày Tây Nam Công Sở Da3.jpg', '2020-12-15', '<p>Form gi&agrave;y &ocirc;m ch&acirc;n, thiết kế ph&ugrave; hợp với mọi độ tuổi<br />Chất liệu: Da tổng hợp cao cấp, đẹp v&agrave; bền.<br />Phần đế thiết kế thời trang hiện đại, r&atilde;nh chống trơn đặc biệt<br />Đường chỉ may tỉ mỉ, tinh tế<br />Phối', 9),
(2, 1, 2, 2, 6, 'giày học sinh1', 200, 'Giày học sinh1.jpg', 'Giày học sinh11.jpg', 'Giày học sinh12.jpg', '2020-12-16', '<p>Với thiết kế vải cavans rất &ocirc;m ch&acirc;n v&agrave; phần đế boost mềm mại &hearts; Ph&ugrave; hợp cho đi học, tập gym, đi chơi,.v. v. V. &hearts; c&aacute;c bạn bấm mua ngay để xem c&oacute; size của m&igrave;nh kh&ocirc;ng nh&aacute; &hearts; ng', 46),
(3, 1, 4, 3, 7, 'GIÀY NAM PHONG CÁCH F11', 150, 'giaythoitrang1.jpeg', 'giaythoitrang2.jpeg', 'giaythoitrang3.jpeg', '2020-12-15', '<ul><li>Thể thao v&agrave; thời trang</li><li>Gi&agrave;y vải đế cao su mềm đi &ecirc;m ch&acirc;n</li><li>Size 39 đến 44</li></ul>', 48),
(4, 1, 3, 4, 8, 'Giày Lười Da Bò QS49', 790, 'giaydabo.jpg', 'giaydabo.jpg', 'giaydabo.jpg', '2020-12-15', '<p>Gi&agrave;y Lười Da B&ograve; QS49</p>', 45),
(5, 1, 2, 5, 9, 'giày học sinh', 900, 'giayhs2.jpg', 'giayhs2.jpg', 'giayhs2.jpg', '2020-12-09', '<p><strong><em>gi&agrave;y học sinh nam đẹp</em></strong></p>', 9),
(6, 2, 2, 2, 2, 'giày học sinh nam đẹp', 650, 'giayhs3.jpg', 'giayhs3.jpg', 'giayhs3.jpg', '2020-12-23', '<p>gi&agrave;y học sinh đẹp, bền.</p>', 50),
(7, 2, 4, 6, 10, 'Giày thời trang', 350, 'giaythoitrang2.jpeg', 'giaythoitrang2.jpeg', 'giaythoitrang2.jpeg', '2020-12-15', '<p>GI&agrave;y thời trang nam đẹp</p>', 5),
(8, 2, 4, 2, 2, 'Giày thời trang', 950, 'giaythoitrang2.jpg', 'giaythoitrang2.jpg', 'giaythoitrang2.jpg', '2020-12-15', '<p><em><strong>Gi&agrave;y thời trang đẹp v&agrave; bền</strong></em></p>', 49),
(9, 2, 1, 8, 9, 'Giày công sở 2', 300, 'congso.jpg', 'congso.jpg', 'congso.jpg', '2020-12-15', '<p><strong>Gi&agrave;y c&ocirc;ng sở nam đẹp nhất</strong></p>', 50),
(21, 1, 3, 3, 11, 'Giày da bò nam đẹp', 500, 'loaisanphamgiaydabo.jpg', 'loaisanphamgiaydabo.jpg', 'loaisanphamgiaydabo.jpg', '2021-01-09', '<p><strong><em>Gi&agrave;y da b&ograve; nam đẹp, ph&ugrave; hợp với nam giới, gi&uacute;p bạn lịch l&atilde;m hơn</em></strong></p>', 498);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(8, 32),
(9, 33),
(10, 34),
(11, 35),
(12, 36),
(13, 37),
(14, 38),
(15, 39),
(16, 40),
(17, 41),
(18, 42),
(19, 43),
(20, 44),
(21, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `ho`, `ten`, `email`, `diachi`, `gioitinh`, `sodienthoai`, `tendangnhap`, `matkhau`, `idQuyen`) VALUES
(1, 'Quản', 'Trị viên', 'admin@gmail.com', 'đà nẵng', 'Nam', '0787700624', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'abc', 'abc', 'abc@gmail.com', 'đà nẵng', 'nam', '091208934734', 'abc', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(3, 'bán', 'hàng', 'banhang@gmail.com', 'đà nẵng', 'nam', '091208934734', 'banhang', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(4, 'Mai', 'Nhựt', 'mvnhut@gmail.com', 'quảng nam', 'nam', '0987765442', 'mainhut', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(5, 'đào', 'nguyên', 'dvnguyen@gmail.com', 'daklak', 'nam', '0987765442', 'daonguyen', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(6, 'tin', 'ngô', 'ngotin@gmail.com', 'Đồng Nai', 'nam', '111111111111', 'ngotin', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`idgopy`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`),
  ADD KEY `sanpham` (`idSP`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Chỉ mục cho bảng `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLoaiSP`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idLoaiSP` (`idLoaiSP`),
  ADD KEY `idKM` (`idKM`),
  ADD KEY `idcolor` (`idcolor`),
  ADD KEY `idsize` (`idsize`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `idcolor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `idgopy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idsize`) REFERENCES `size` (`idsize`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
