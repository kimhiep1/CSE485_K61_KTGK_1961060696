-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 01:39 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060696_employees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `hovaten` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` int(11) NOT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(14, 'Nguyễn Thị Châu', 'bảo vệ', 'phòng bảo vệ', 6500000, '2000-03-04'),
(15, 'Trần Thị Vân Anh', 'quản lí', 'phòng quản lí', 8500000, '2000-01-05'),
(23, 'Đỗ Hữu Hải', 'nhân viên', 'Phòng quảng cáo', 7500000, '2000-07-01'),
(24, 'Nguyễn Văn Nam', 'nhân viên', 'phòng quản lí', 7000000, '2000-01-03'),
(28, 'Nguyễn Văn Tân', 'nhân viên', 'phòng Marketing', 6700000, '2000-02-04'),
(32, 'Quách Thuỳ Linh', 'nhân viên', 'phòng Marketing', 7400000, '2000-03-06'),
(63, 'Nguyễn Văn Dũng', 'nhân viên', 'phòng nhân sự', 7600000, '2000-01-04'),
(96, 'Lưu Minh Thu', 'nhân viên', 'phòng hành chính', 9290000, '2000-06-02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
