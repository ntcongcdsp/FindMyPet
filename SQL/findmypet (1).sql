-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 05:25 AM
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
  `IDBinhLuan` int(11) NOT NULL,
  `KiemDuyet` tinyint(1) NOT NULL,
  `NgayDang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ddbaiviet`
--

CREATE TABLE IF NOT EXISTS `ddbaiviet` (
  `IDBaiViet` int(11) NOT NULL,
  `IDThuCung` int(11) NOT NULL,
  `Ten` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Mau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE IF NOT EXISTS `phanquyen` (
  `MaPhanQuyen` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinuser`
--

CREATE TABLE IF NOT EXISTS `thongtinuser` (
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `PhanQuyen` int(11) NOT NULL,
  `Email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thucung`
--

CREATE TABLE IF NOT EXISTS `thucung` (
  `ID` int(11) NOT NULL,
  `Loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Giong` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `TenDN` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhanQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `TenDN` (`TenDN`), ADD KEY `IDDanhMuc` (`IDDanhMuc`), ADD KEY `IDBinhLuan` (`IDBinhLuan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ddbaiviet`
--
ALTER TABLE `ddbaiviet`
  ADD PRIMARY KEY (`IDBaiViet`,`IDThuCung`), ADD KEY `IDThuCung` (`IDThuCung`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaPhanQuyen`), ADD UNIQUE KEY `MaPhanQuyen` (`MaPhanQuyen`);

--
-- Indexes for table `thongtinuser`
--
ALTER TABLE `thongtinuser`
  ADD PRIMARY KEY (`TenDN`);

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
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
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
ADD CONSTRAINT `baiviet_ibfk_3` FOREIGN KEY (`IDBinhLuan`) REFERENCES `baiviet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ddbaiviet`
--
ALTER TABLE `ddbaiviet`
ADD CONSTRAINT `ddbaiviet_ibfk_1` FOREIGN KEY (`IDBaiViet`) REFERENCES `baiviet` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ddbaiviet_ibfk_2` FOREIGN KEY (`IDThuCung`) REFERENCES `thucung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongtinuser`
--
ALTER TABLE `thongtinuser`
ADD CONSTRAINT `thongtinuser_ibfk_1` FOREIGN KEY (`TenDN`) REFERENCES `user` (`TenDN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`MaPhanQuyen`) REFERENCES `phanquyen` (`MaPhanQuyen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
