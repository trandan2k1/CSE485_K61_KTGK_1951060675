-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:38 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060675_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namsinh` date DEFAULT NULL,
  `nghenghiep` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Ringo Cattow', 'Male', '0000-00-00', 'Quality Control Specialist', '0000-00-00', '0000-00-00', '454 Scott Pass'),
(2, 'Andrea Rummer', 'Male', '0000-00-00', 'Structural Engineer', '0000-00-00', '0000-00-00', '0043 Dunning Parkway'),
(3, 'Obadiah Laurentino', 'Female', '0000-00-00', 'Budget/Accounting Analyst IV', '0000-00-00', '0000-00-00', '242 Roxbury Circle'),
(4, 'Abie O\'Heneghan', 'Male', '0000-00-00', 'GIS Technical Architect', '0000-00-00', '0000-00-00', '23019 Debs Point'),
(5, 'Calvin Hucklesby', 'Female', '0000-00-00', 'Health Coach III', '0000-00-00', '0000-00-00', '7590 Vidon Parkway'),
(7, 'Wakefield Wilkennson', 'Male', '0000-00-00', 'Research Assistant II', '0000-00-00', '0000-00-00', '47148 Linden Terrace'),
(8, 'Lark Munnis', 'Male', '0000-00-00', 'Senior Cost Accountant', '0000-00-00', '0000-00-00', '5317 Southridge Lane'),
(10, 'Rickie Riggulsford', 'Female', '0000-00-00', 'Assistant Media Planner', '0000-00-00', '0000-00-00', '1364 Dakota Court'),
(13, 'Hải', 'Nam', '2001-12-12', 'Sinh viên', '2021-11-23', '2021-11-23', 'Hà Nội'),
(14, 'Rickie Kcii', 'Nam', '2003-12-01', 'Sinh viên', '2021-01-12', '2021-01-12', 'Hà Nội'),
(15, 'Wakefield 312', 'Nam', '1999-03-12', 'Sinh viên', '2021-03-12', '2021-03-12', 'Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
