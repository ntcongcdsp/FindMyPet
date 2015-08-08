-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 12:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `findmypet`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE IF NOT EXISTS `baiviet` (
  `ID` int(11) NOT NULL,
  `TieuDe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `IDDanhMuc` int(11) NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  `NgayDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_thucung`
--

CREATE TABLE IF NOT EXISTS `baiviet_thucung` (
  `IDBaiViet` int(11) NOT NULL,
  `IDThuCung` int(11) NOT NULL,
  `Ten` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Mau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` int(4) NOT NULL,
  `DacDiemNhanDang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `ID` int(11) NOT NULL,
  `IDBinhLuan` int(11) NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Ho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  `NgayBinhLuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`, `MoTa`) VALUES
(1, 'BaiViet', 'Bài viết về những kiến thức cơ bản của thú cưng'),
(2, 'TinMat', 'Tin mất thú cưng'),
(3, 'TinTim', 'Tin tìm chủ của thú cưng');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE IF NOT EXISTS `phanquyen` (
  `MaPhanQuyen` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaPhanQuyen`, `MoTa`) VALUES
(1, 'Admin'),
(2, 'Thành viên'),
(3, 'Khách');

-- --------------------------------------------------------

--
-- Table structure for table `thucung`
--

CREATE TABLE IF NOT EXISTS `thucung` (
  `ID` int(11) NOT NULL,
  `Loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Giong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DacDiem` text COLLATE utf8_unicode_ci NOT NULL,
  `TinhCach` text COLLATE utf8_unicode_ci NOT NULL,
  `KhaNang` text COLLATE utf8_unicode_ci NOT NULL,
  `NguonGoc` text COLLATE utf8_unicode_ci NOT NULL,
  `TieuChuan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhanQuyen` int(11) NOT NULL,
  `Ho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`TenDN`, `MatKhau`, `MaPhanQuyen`, `Ho`, `Ten`, `Email`, `DiaChi`, `SoDienThoai`) VALUES
('Admin', '', 1, '', '', '', '', ''),
('dmtri', '123456', 1, 'Đăng Minh', 'Trí', 'milomoli2134@gmail.com', '', '01662220123'),
('mtdung', '123456', 1, 'Mai Tiến', 'Dũng', 'maidungqb92@gmail.com', '', '0962658391'),
('ntcong', '123456', 1, 'Nguyễn Thành', 'Công', 'ntcong.cdsp@gmail.com', '181 Trần Phú, Huế', '0984775586'),
('ptnha', '123456', 1, 'Phan Thị Ngọc', 'Hà', 'haptngocha@gmail.com', '', '0977316891'),
('thanhvien', '1', 2, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `TenDN` (`TenDN`), ADD KEY `IDDanhMuc` (`IDDanhMuc`);

--
-- Indexes for table `baiviet_thucung`
--
ALTER TABLE `baiviet_thucung`
  ADD PRIMARY KEY (`IDBaiViet`,`IDThuCung`), ADD KEY `IDThuCung` (`IDThuCung`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ID`), ADD KEY `IDBinhLuan` (`IDBinhLuan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaPhanQuyen`), ADD UNIQUE KEY `MaPhanQuyen` (`MaPhanQuyen`);

--
-- Indexes for table `thucung`
--
ALTER TABLE `thucung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`TenDN`), ADD KEY `MaPhanQuyen` (`MaPhanQuyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaPhanQuyen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thucung`
--
ALTER TABLE `thucung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`IDDanhMuc`) REFERENCES `danhmuc` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`TenDN`) REFERENCES `user` (`TenDN`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `baiviet_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `binhluan` (`IDBinhLuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baiviet_thucung`
--
ALTER TABLE `baiviet_thucung`
ADD CONSTRAINT `baiviet_thucung_ibfk_1` FOREIGN KEY (`IDBaiViet`) REFERENCES `baiviet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `baiviet_thucung_ibfk_2` FOREIGN KEY (`IDThuCung`) REFERENCES `thucung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`MaPhanQuyen`) REFERENCES `phanquyen` (`MaPhanQuyen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
