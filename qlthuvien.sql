-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2024 lúc 09:52 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(3, 'img/banners/truong.jpg'),
(4, 'img/banners/ictu-banner04-scaled.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietmuonsach`
--

CREATE TABLE `chitietmuonsach` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitietmuonsach`
--

INSERT INTO `chitietmuonsach` (`MaHD`, `MaSP`, `SoLuong`) VALUES
(119, 175, 1),
(119, 176, 1),
(120, 175, 1),
(120, 176, 1),
(121, 175, 1),
(122, 182, 1),
(123, 175, 1),
(124, 183, 1),
(125, 182, 1),
(126, 176, 1),
(126, 184, 1),
(127, 176, 1),
(127, 182, 1),
(128, 176, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Giáo trình'),
(2, 'Báo - Tạp Chí'),
(3, 'Luận văn, Luận án'),
(4, 'Đĩa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitailieu`
--

CREATE TABLE `loaitailieu` (
  `MaTaiLieu` int(11) NOT NULL,
  `TenLoaiTaiLieu` varchar(70) NOT NULL,
  `HinhAnh` varchar(200) NOT NULL,
  `Mota` varchar(200) NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaitailieu`
--

INSERT INTO `loaitailieu` (`MaTaiLieu`, `TenLoaiTaiLieu`, `HinhAnh`, `Mota`, `MaDM`) VALUES
(1, 'Khoa học tự nhiên và Toán học', 'thmln.jpg', 'Khoa học tự nhiên và Toán học', 1),
(6, 'Khoa học xã hội', 'thmln.jpg', 'Khoa học xã hội', 1),
(7, 'Ngôn ngữ và Văn hóa', 'thmln.jpg', 'Ngôn ngữ và Văn hóa', 1),
(10, 'Tạp chí khoa học và học thuật', 'baotienphong.webp', 'Tạp chí khoa học và học thuật', 2),
(14, 'Tạp chí chuyên ngành', 'baothanhnien.webp', 'Tạp chí chuyên ngành', 2),
(30, 'Luận văn cử nhân', 'hi.png', 'Luận văn cử nhân', 3),
(32, 'Luận văn thạc sĩ ', 'hi.png', 'Luận văn thạc sĩ ', 3),
(33, 'Luận án tiến sĩ', 'hi.png', 'Luận án tiến sĩ', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muonsach`
--

CREATE TABLE `muonsach` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiChoMuon` varchar(50) NOT NULL,
  `NgayMuon` varchar(20) NOT NULL,
  `NgayTra` varchar(100) NOT NULL,
  `ViPham` varchar(20) NOT NULL,
  `HinhThucXuLy` varchar(50) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `muonsach`
--

INSERT INTO `muonsach` (`MaHD`, `MaND`, `NgayLap`, `NguoiChoMuon`, `NgayMuon`, `NgayTra`, `ViPham`, `HinhThucXuLy`, `TrangThai`) VALUES
(119, 83, '2024-03-15 00:22:12', 'Nguyễn Thu Hường', '2024-03-15 04:52:27', '2024-03-15 10:54:05', 'Không', 'Không', 2),
(120, 83, '2024-03-15 00:22:52', 'Thu Hương', '2024-03-15 04:52:47', '2024-03-15 10:54:08', 'Không', 'Không', 2),
(121, 83, '2024-03-15 00:38:03', 'Nguyễn Hoài Thu', '2024-03-15 04:53:36', '2024-03-15 10:54:00', 'Không', 'Không', 2),
(122, 83, '2024-03-15 07:37:52', 'Nguyễn Thu Hường', '2024-03-15 04:53:01', '2024-03-15 10:53:48', 'Không', 'Không', 2),
(125, 83, '2024-03-15 11:18:06', 'Nguyễn Thu Hường', '2024-03-15 11:18:16', '2024-03-15 11:19:29', 'Quá hạn 3 ngày ', 'Phạt 500k', 3),
(126, 83, '2024-03-15 15:09:57', 'Sơnbg', '2024-03-15 15:10:14', '2024-03-15 15:10:29', 'Quá hạn 3 ngày ', 'Phạt 1000k', 3),
(127, 83, '2024-03-15 15:42:21', 'Nguyễn Thu Hường', '2024-03-15 15:43:00', '2024-03-15 15:43:54', 'Không', 'Không', 2),
(128, 83, '2024-03-15 15:44:04', 'Sơnbg', '2024-03-15 15:44:15', '2024-03-15 15:44:28', 'Quá hạn 3 ngày ', 'Phạt 500k', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) NOT NULL,
  `Ten` varchar(20) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `SDT` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `TaiKhoan` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(13, 'Nguyễn', 'Trí', 'Nam', '02354129852', 'tringuyendb@gmail.com', '', 'trimen', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(14, 'admin', 'admin', 'nam', '23423', 'admin@gmail.com', 'nui thanh', 'admin', '50e69bd4cdc804fa38a94b967f2c8048d9eac3a5', 4, 1),
(15, 'a', 'c', '', '1234567890', 'a@gmail.com', '', '123456', '040d9b33af7249502cd6ec06c422755a', 2, 1),
(20, 'Dương', 'Sơn', 'Nam', '0348521001', 'sonbgt36@gmail.com', '', 'DuongSon', '304e273cb12e16712c5153320d7bb1f8', 3, 1),
(21, 'Dương', 'Sơn', 'Nam', '0348521001', 'sonbgt3611@gmail.com', '', 'DuongSon12', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(22, 'Dương', 'Sơn', '', '0348521001', 'sonbgt3621@gmail.com', '', 'DuongSon11', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(23, 'Dương', 'Sơn', '', '0348521001', 'sonbgt3611111@gmail.com', '', 'DuongSon1111', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(24, 'Dương', 'Sơn', '', '0354411440', 'sonbt36@gmail.com11', '', 'Duong', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(28, 'Lê', 'Thanh', 'Nam', '0266666666', 'anmy86689@gmail.com', 'An Dương, Hải Phòng', 'lethanh', '337d72e9ee2a7f23cdf4dc681097017c', 1, 1),
(29, 'Thanh', 'le', 'Nam', '0288888888', 'thanh84833@st.vimaru.edu.vn', '', 'lethan8809', '4905678b04a1d40ddb39161d9503c0ab', 2, 1),
(30, 'Mai', 'Nga', 'Nữ', '0765107166', 'nga84141@st.vimaru.edu.vn', '', 'nga84141', '3541b408686e22b4f77da3e3e6c0ae57', 3, 1),
(31, 'Đoàn ', 'Hương', 'Nữ', '0793341504', 'huong83331@st.vimaru.edu.vn', 'Tiên Minh - Tiên Lãng - Hải Phòng.', 'huong83331', 'da57d4798ddf0d71d140bacf2fde21d1', 3, 1),
(32, 'An', 'My', 'Nam', '0689898989', 'anmynguyen9@gmail.com', '', 'anmy92', 'e1b554536f90f7fcf3cb47eb51e53251', 3, 1),
(33, 'Trần ', 'Hùng', 'Nam', '0666666666', 'tranhung2k1@gmail.com', '', 'tranhung2k1', '63aba31966cd0ab7f3194f1be8525092', 3, 1),
(34, 'Nguyễn', 'Nam', 'Nam', '0252692695', 'nguyenhoangNam@gmail.com', '', 'nguyenhoangNam@gmail.com', '657cd112465c096881fe9c9df298da9e1a06941a', 3, 1),
(35, 'Phạm', 'Lan Nhi', '', '0698999999', 'lanNhi96@gmail.com', '', 'lanNhi96@gmail.com', 'ce1353aca368a8ab95c66fc0971d088f', 1, 1),
(36, 'Nguyễn ', 'Tùng', '', '0521848484', 'nguyenTung@gmail.com', '', 'nguyenTung@gmail.com', '418511c2bbfa4846652613f61e44d44d', 1, 1),
(37, 'Mai', 'Trang', '', '0689898989', 'trang@gmail.com', '', 'trang@gmail.com', '1b712c6dad92c8f758d98543d4aeaf63', 1, 1),
(38, 'Đoàn ', 'Phương', '', '0118181481', 'phuongNguyen@gmail.com', '', 'phuongNguyen@gmail.com', '6d92d3c778be0c5bb2074ac95abe2131', 1, 1),
(39, 'Lê', 'Minh', '', '0584848484', 'minh3546@gmail.com', '', 'minh3546@gmail.com', 'ae6d879b99f3b9169b5c44912f101c6a', 1, 1),
(78, 'admin', 'admin', 'Nam', '0868888888', 'admin@gmail.com', 'Hải Phòng', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 4, 1),
(81, 'Dương', 'Sơn', '', '0348521001', 'admin1@gmail.com', '', 'DuongSon', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 1),
(83, 'Admin', 'AD', '', '0348521001', 'admin@gmail.com', '', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) NOT NULL,
  `ChiTietQuyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Sinh viên có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Thủ thư'),
(4, 'Manager', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TenTL` varchar(255) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `DonGia` varchar(50) NOT NULL,
  `HinhAnh1` varchar(200) NOT NULL,
  `HinhAnh2` varchar(255) DEFAULT NULL,
  `HinhAnh3` varchar(255) DEFAULT NULL,
  `TacGia` varchar(50) DEFAULT NULL,
  `NhaXuatBan` varchar(50) DEFAULT NULL,
  `SoTrang` varchar(50) DEFAULT NULL,
  `NgonNgu` varchar(50) DEFAULT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text NOT NULL,
  `ThoiGian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`MaSP`, `MaLSP`, `MaDM`, `TenTL`, `SoLuong`, `DonGia`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `TacGia`, `NhaXuatBan`, `SoTrang`, `NgonNgu`, `TrangThai`, `MoTa`, `ThoiGian`) VALUES
(175, 1, 1, 'Giáo trình triết học Mac - LeNin', 296, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', ' Kim đồng', '300', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(176, 1, 1, 'Giáo trình triết học Mac - LeNin', 295, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', 'Kim đồng', '300', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(177, 1, 1, 'Giáo trình triết học Mac - LeNin', 300, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', 'Kim đồng', '350', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(178, 1, 1, 'Giáo trình triết học Mac - LeNin', 300, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', 'Kim đồng', '3000', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(179, 1, 1, 'Giáo trình triết học Mac - LeNin', 300, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', 'Kim đồng', '250', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(180, 1, 1, 'Giáo trình triết học Mac - LeNin', 300, '500000', 'img/products/thmln.jpg', '/img/products/thmln.jpg', '/img/products/thmln.jpg', '', 'Kim đồng', '400', 'Tiếng Việt', 1, '<p><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Title:&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Author(s): Bộ GD-ĐT Abstract: Bản thảo&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Giáo trình</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Triết học&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Mác</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;-&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Lê Nin</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;dùng cho giảng dạy các môn lý luận chính trị cho khối trường đào tạo chuyên và không chuyên&nbsp;...</span><br></p>', '2024-03-14'),
(182, 10, 2, 'Tạp chí quân sự số 102', 297, '500000', 'img/products/page_1.webp', '/img/products/page_1.webp', '/img/products/page_1.webp', 'Không rõ', 'Khoa học và công nghệ', '300', 'Tiếng Anh', 1, '<p><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;hàng đầu về thời trang, mỹ phẩm, nghệ thuật và giải trí&nbsp;</span><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Đẹp - Tin tức về làm đẹp, thời trang, mỹ phẩm, giải trí.</span><br></p>', '2024-03-15'),
(183, 14, 2, 'Tạp chí quân sự số 102444', 299, '500000', 'img/products/page_1.webp', '/img/products/page_1.webp', '/img/products/page_1.webp', 'Không rõ', 'Khoa học và công nghệ', '300', 'Tiếng Anh', 1, '<p><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;hàng đầu về thời trang, mỹ phẩm, nghệ thuật và giải trí&nbsp;</span><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Đẹp - Tin tức về làm đẹp, thời trang, mỹ phẩm, giải trí.</span><br></p>', '2024-03-15'),
(184, 10, 2, 'Tạp chí sơn tùng mm44444', 299, '14500000', 'img/products/1666855851751-bảng giá quảng cáo trên tạp chí.jpg', '/img/products/1666855851751-bảng giá quảng cáo trên tạp chí.jpg', '/img/products/1666855851751-bảng giá quảng cáo trên tạp chí.jpg', 'Không rõ', 'Khoa học và công nghệ', '300', 'Tiếng Anh', 1, '<p><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;hàng đầu về thời trang, mỹ phẩm, nghệ thuật và giải trí&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;Đẹp - Tin tức về làm đẹp, thời trang, mỹ phẩm, giải trí</span><br></p>', '2024-03-15'),
(185, 14, 2, 'Tạp chí Khoa học và Công nghệ số 38 A, B (02/2017)', 300, '1000000', 'img/products/t70956.jpg', '/img/products/t70956.jpg', '/img/products/t70956.jpg', 'Hội đồng khoa học Việt Nam', 'Khoa học và công nghệ', '300', 'Tiếng Việt', 1, '<p><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\"> hàng đầu về thời trang, mỹ phẩm, nghệ thuật và giải trí </span><span style=\"margin: 0px; padding: 0px; color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\">Tạp chí</span><span style=\"color: rgb(68, 69, 69); font-family: arial, sans-serif; font-size: 14px;\"> Đẹp - Tin tức về làm đẹp, thời trang, mỹ phẩm, giải trí</span><br></p>', '2024-03-15'),
(187, 6, 1, 'Giáo trình thứ nhất khoa công nghệ', 300, '500000', 'img/products/de-cuong-luan-van-thac-si-luat-hoc.jpg', '/img/products/de-cuong-luan-van-thac-si-luat-hoc.jpg', '/img/products/de-cuong-luan-van-thac-si-luat-hoc.jpg', 'Không rõ', 'Khoa học và công nghệ', '300', 'Tiếng Việt', 1, '<p>dgsdgdgsdgsgsgsgsgsgsgsgsgsggsgs</p>', '2024-03-15');

--
-- Bẫy `tailieu`
--
DELIMITER $$
CREATE TRIGGER `trigger_update_soluong` BEFORE UPDATE ON `tailieu` FOR EACH ROW BEGIN
    IF NEW.SoLuong = 0 THEN
        SET NEW.TrangThai = 0;
    END IF;
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietmuonsach`
--
ALTER TABLE `chitietmuonsach`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `loaitailieu`
--
ALTER TABLE `loaitailieu`
  ADD PRIMARY KEY (`MaTaiLieu`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaTaiLieu`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaTaiLieu`) USING BTREE;

--
-- Chỉ mục cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaitailieu`
--
ALTER TABLE `loaitailieu`
  MODIFY `MaTaiLieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietmuonsach`
--
ALTER TABLE `chitietmuonsach`
  ADD CONSTRAINT `chitietmuonsach_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `tailieu` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loaitailieu`
--
ALTER TABLE `loaitailieu`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `muonsach`
--
ALTER TABLE `muonsach`
  ADD CONSTRAINT `muonsach_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
