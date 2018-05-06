-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 09:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_khoaluan`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `IDTUAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNGBAOCAO` text COLLATE utf8_unicode_ci NOT NULL,
  `LINKNOPFILE` text COLLATE utf8_unicode_ci NOT NULL,
  `XACNHAN` double NOT NULL,
  `DANHGIA` text COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`IDTUAN`, `NOIDUNGBAOCAO`, `LINKNOPFILE`, `XACNHAN`, `DANHGIA`, `MADETAI`) VALUES
('T0001', 'Khảo sát thực tế', '', 0, '', 'DA0001');

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `MABM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENBM` text COLLATE utf8_unicode_ci NOT NULL,
  `TRUONGBM` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`MABM`, `TENBM`, `TRUONGBM`) VALUES
('BM0001', 'Công nghệ phần mềm', 'Vũ Văn Vinh');

-- --------------------------------------------------------

--
-- Table structure for table `detai`
--

CREATE TABLE `detai` (
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNGDT` text COLLATE utf8_unicode_ci NOT NULL,
  `YEUCAU` text COLLATE utf8_unicode_ci NOT NULL,
  `KIEMDUYET` tinyint(1) NOT NULL,
  `SLTHANHVIEN` int(11) NOT NULL,
  `TGCHAMHOIDONG` date NOT NULL,
  `DIADIEM` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`MADETAI`, `NOIDUNGDT`, `YEUCAU`, `KIEMDUYET`, `SLTHANHVIEN`, `TGCHAMHOIDONG`, `DIADIEM`) VALUES
('DA0001', 'Phân tích hệ thống đăng ký khóa luận cho sinh viên khoa CNTT', 'Phân tích đầy đủ các quy trình', 1, 2, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `dotdangky`
--

CREATE TABLE `dotdangky` (
  `MADOT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNGDT` text COLLATE utf8_unicode_ci NOT NULL,
  `TGRADE` datetime NOT NULL,
  `TGDANGKYNHOM` datetime NOT NULL,
  `TGBATDAU` datetime NOT NULL,
  `TGBAOVE` datetime NOT NULL,
  `TGPHUCKHAO` datetime NOT NULL,
  `SLTVNHOM` int(11) NOT NULL,
  `SLDETAI` int(11) NOT NULL,
  `CHAMHOIDONG` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dotdangky`
--

INSERT INTO `dotdangky` (`MADOT`, `NOIDUNGDT`, `TGRADE`, `TGDANGKYNHOM`, `TGBATDAU`, `TGBAOVE`, `TGPHUCKHAO`, `SLTVNHOM`, `SLDETAI`, `CHAMHOIDONG`) VALUES
('DK2018', 'Đồ án phân tích thiết kế', '2018-04-10 00:00:00', '2018-04-10 00:00:00', '2018-04-20 00:00:00', '2018-05-20 00:00:00', '2018-05-25 00:00:00', 2, 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENGV` text COLLATE utf8_unicode_ci NOT NULL,
  `NGSINH` datetime NOT NULL,
  `GIOITINH` tinyint(1) NOT NULL,
  `DIACHI` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` text COLLATE utf8_unicode_ci NOT NULL,
  `MABM` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `TENGV`, `NGSINH`, `GIOITINH`, `DIACHI`, `SDT`, `EMAIL`, `MABM`) VALUES
('GV0001', 'NGUYỄN THỊ THÙY NGÂN', '1890-04-02 00:00:00', 0, 'TP.HCM', '01264895231', 'ngan@gmail.com', 'BM001');

-- --------------------------------------------------------

--
-- Table structure for table `gvpb_detai`
--

CREATE TABLE `gvpb_detai` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYPB` datetime NOT NULL,
  `DIADIEM` text COLLATE utf8_unicode_ci NOT NULL,
  `PHUCKHAO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gvpb_detai`
--

INSERT INTO `gvpb_detai` (`MAGV`, `MADETAI`, `NGAYPB`, `DIADIEM`, `PHUCKHAO`) VALUES
('GV0001', 'DA0001', '2018-04-13 00:00:00', 'B103', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gv_detai`
--

CREATE TABLE `gv_detai` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IDLOAICV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gv_detai`
--

INSERT INTO `gv_detai` (`MAGV`, `MADETAI`, `IDLOAICV`, `GHICHU`) VALUES
('GV0001', 'DT0001', 'CV001', ''),
('GV0001', 'DA001', 'CV001', ''),
('GV0001', 'DA0001', 'CV003', '');

-- --------------------------------------------------------

--
-- Table structure for table `hd_giangvien`
--

CREATE TABLE `hd_giangvien` (
  `MAHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CHUCVU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoidong`
--

CREATE TABLE `hoidong` (
  `MAHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLTHANHVIEN` int(11) NOT NULL,
  `MADOT` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaicongviec`
--

CREATE TABLE `loaicongviec` (
  `IDLOAICV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaicongviec`
--

INSERT INTO `loaicongviec` (`IDLOAICV`, `TenLoai`, `NoiDung`) VALUES
('CV001', 'Hướng dẫn', 'Hướng dẫn sinh sinh trong quá trình thực hiện đề tài'),
('CV002', 'Ra đề', 'Cung cấp xây dựng đề tài khóa luận'),
('CV003', 'Ra đề, hướng dẫn', 'Ra đề và chịu trách nhiệm hướng dẫn sinh viên theo đề tài ra');

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

CREATE TABLE `messenger` (
  `MASV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNGTIN` text COLLATE utf8_unicode_ci NOT NULL,
  `NGUOIGUI` text COLLATE utf8_unicode_ci NOT NULL,
  `TGGUITIN` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MASV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` datetime NOT NULL,
  `GIOITINH` tinyint(1) NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MASV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `SDT`, `EMAIL`) VALUES
('SV0001', 'Ngô Tấn Tài', '1996-06-01 00:00:00', 1, '096750181', 'taipap123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sv_detai`
--

CREATE TABLE `sv_detai` (
  `MASV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYDANGKY` datetime NOT NULL,
  `DIEMHUONGDAN` double DEFAULT NULL,
  `DIEMPHANBIEN` float DEFAULT NULL,
  `DIEMHOIDONG` float DEFAULT NULL,
  `DIEMPHUCKHAO` float DEFAULT NULL,
  `TONGDIEM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sv_detai`
--

INSERT INTO `sv_detai` (`MASV`, `MADETAI`, `NGAYDANGKY`, `DIEMHUONGDAN`, `DIEMPHANBIEN`, `DIEMHOIDONG`, `DIEMPHUCKHAO`, `TONGDIEM`) VALUES
('SV0001', 'DA0001', '2018-04-20 07:20:00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theloaitin`
--

CREATE TABLE `theloaitin` (
  `IDLOAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOAI` text COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongbao_tintuc`
--

CREATE TABLE `thongbao_tintuc` (
  `MATIN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNGTIN` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYDANG` datetime NOT NULL,
  `NGUOIDANG` text COLLATE utf8_unicode_ci NOT NULL,
  `IDLOAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADOT` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yeucautaode`
--

CREATE TABLE `yeucautaode` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MABOMON` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADEBATDAU` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADEKETTHUC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYNOP` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yeucautaode`
--

INSERT INTO `yeucautaode` (`MAGV`, `MABOMON`, `MADEBATDAU`, `MADEKETTHUC`, `NGAYNOP`) VALUES
('GV0001', 'BM0001', 'DA0001', 'DA0010', '2018-04-19 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`IDTUAN`);

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MABM`);

--
-- Indexes for table `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MADETAI`);

--
-- Indexes for table `dotdangky`
--
ALTER TABLE `dotdangky`
  ADD PRIMARY KEY (`MADOT`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGV`);

--
-- Indexes for table `gvpb_detai`
--
ALTER TABLE `gvpb_detai`
  ADD PRIMARY KEY (`MAGV`,`MADETAI`);

--
-- Indexes for table `hd_giangvien`
--
ALTER TABLE `hd_giangvien`
  ADD PRIMARY KEY (`MAHD`,`MAGV`);

--
-- Indexes for table `hoidong`
--
ALTER TABLE `hoidong`
  ADD PRIMARY KEY (`MAHD`);

--
-- Indexes for table `loaicongviec`
--
ALTER TABLE `loaicongviec`
  ADD PRIMARY KEY (`IDLOAICV`);

--
-- Indexes for table `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`MASV`,`MADETAI`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MASV`);

--
-- Indexes for table `sv_detai`
--
ALTER TABLE `sv_detai`
  ADD PRIMARY KEY (`MASV`,`MADETAI`);

--
-- Indexes for table `theloaitin`
--
ALTER TABLE `theloaitin`
  ADD PRIMARY KEY (`IDLOAI`);

--
-- Indexes for table `thongbao_tintuc`
--
ALTER TABLE `thongbao_tintuc`
  ADD PRIMARY KEY (`MATIN`);

--
-- Indexes for table `yeucautaode`
--
ALTER TABLE `yeucautaode`
  ADD PRIMARY KEY (`MAGV`,`MABOMON`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
