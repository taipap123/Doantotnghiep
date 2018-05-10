-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2018 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_khoaluan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocao`
--

CREATE TABLE `baocao` (
  `ID` int(10) NOT NULL,
  `NOIDUNGBAOCAO` text COLLATE utf8_unicode_ci NOT NULL,
  `LINKNOPFILE` text COLLATE utf8_unicode_ci NOT NULL,
  `XACNHAN` double NOT NULL,
  `DANHGIA` text COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TUAN` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baocao`
--

INSERT INTO `baocao` (`ID`, `NOIDUNGBAOCAO`, `LINKNOPFILE`, `XACNHAN`, `DANHGIA`, `MADETAI`, `TUAN`) VALUES
(1, 'Khảo sát thực tế', 'https://www.tncnonline.com.vn/Pages/TracuuMST.aspx', 0, 'chưa đạt', 'DA0001', 1),
(2, 'Phân tích nghiệp cụ + Mô hình  phân tích', 'https://www.tncnonline.com.vn', 1, 'Đạt', 'DA0001', 2),
(3, 'Khảo sát nghiệp vụ', 'https://www.google.com.vn/', 1, 'Hoàn thành', 'DA0002', 1),
(4, 'Phân tích nghiệp vụ + mô hình erd', 'https://www.google.com.vn/', 0, 'chưa hoàn thành', 'DA0002', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `MABM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENBM` text COLLATE utf8_unicode_ci NOT NULL,
  `TRUONGBM` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`MABM`, `TENBM`, `TRUONGBM`) VALUES
('CNPM', 'Công nghệ phần mềm', 'Lê Thanh Hưng'),
('HTTT', 'Hệ thống thông tin', 'Nguyễn Thị Thùy Trang'),
('MTT', 'Mạng máy tính', 'Tô Văn Nhật Phi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_DT` text COLLATE utf8_unicode_ci NOT NULL,
  `YEUCAU` text COLLATE utf8_unicode_ci NOT NULL,
  `KIEMDUYET` tinyint(1) NOT NULL,
  `SLTHANHVIEN` int(11) NOT NULL,
  `TGCHAMHOIDONG` date NOT NULL,
  `DIADIEM` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detai`
--

INSERT INTO `detai` (`MADETAI`, `TEN_DT`, `YEUCAU`, `KIEMDUYET`, `SLTHANHVIEN`, `TGCHAMHOIDONG`, `DIADIEM`) VALUES
('DA0001', 'Phân tích hệ thống đăng ký khóa luận cho sinh viên khoa CNTT', 'Phân tích đầy đủ các quy trình', 1, 2, '2018-07-10', 'Văn Phòng Khoa'),
('DA0002', 'Nghiên cứu các thuật toán máy học và xây dựng công cụ rút trích thông tin người dùng từ mạng xã hội.', '- Tìm hiểu mạng xã hội\r\n- Nghiên cứu các thuật toán, phương pháp trích xuất thông tin người sử dụng trên mạng xã hội\r\n- Xây dựng công cụ rút trích thông tin người dùng từ mạng xã hội', 1, 2, '2018-07-11', 'Hội trường C'),
('DA0003', 'Nghiên cứu Advertising Network (Ad Network) và xây dựng hệ thống minh họa.', '- Tìm hiểu Advertising Network (Ad Network)\r\n- Tìm hiểu các giải pháp, công cụ về Ad Network\r\n- Xây dựng hệ thống minh họa về Ad Network', 0, 2, '2018-07-12', 'Hội Trường C'),
('DA0004', 'Xây dựng phần mềm quản lý nhà hàng', '- Quản lý nhân viên\r\n- Quản lý đặt tiệc.\r\n- Quản lý khách hàng\r\n- Quản lý khuyến mãi\r\n- Quản lý mua thực phẩm\r\n- Quản lý thanh toán.\r\n- Báo cáo thống kê.', 0, 2, '2018-12-07', 'Hội Trường E'),
('DA0005', 'Tìm hiểu và triển khai phân tích FileLog trên Windows Server', '- Tìm hiểu về File Log\r\n- Tìm hiểu phần mềm mã nguồn mở Lucene\r\n- Tìm hiểu về bộ công cụ ELK\r\n- Xây dựng và triển khai phân tích file log trên Windows Server ', 1, 2, '2018-07-18', 'Hội Trường C'),
('DA0006', 'Tìm hiểu giao thức IPv6 và triển khai ứng dụng', '- Tìm hiểu TCP/IP v4, IPv6\r\n- Đặc điểm cấu trúc của IPv6 (header, format, đóng gói …)\r\n- Các giải pháp triển khai hệ thống với IPv4 và IPv6\r\n- Khảo sát, phân tích và đề xuất giải pháp thực tế triển khai IPv6\r\n- Triển khai thực nghiệm trong hệ thống mạng tại doanh nghiệp', 1, 2, '2018-10-07', 'Văn phòng khoa'),
('DA0007', 'Nghiên cứu và phát triển thử nghiệm SIEM trên mã nguồn mở', '\'- Tìm hiểu IDS/IPS\r\n- Tìm hiểu SIEM\r\n- Triển khai thử nghiệm SIEM trên AlienVault OSSIM', 0, 2, '2018-07-11', 'Hội Trường C'),
('DA0008', 'Quản lý siêu thị Điện Máy Xanh', '- Quản lý nhận hàng theo danh mục đã đặt hàng trước đó.\r\n- Quản lý bán hàng, thanh toán \r\n- Quản lý đổi trả hàng\r\n- Quản lý bảo hành sản phẩm\r\n- Quản lý nhân viên (thu ngân)\r\n- Quản lý khuyến mãi (khuyến mãi %giảm giá, tặng kèm sản phẩm)', 1, 2, '2018-07-10', 'Hội trường C'),
('DA0009', 'Xây dựng website bán đồ  dùng trẻ em', '– Quản lý thông tin của nhân viên.\r\n– Quản lý thông tin khách hàng.\r\n– Quản lý hàng hóa.\r\n– Quản lý mua bán hàng hóa\r\n– Quản lý thông tin liên hệ nhà cung cấp.\r\n– Tạo các thống kê, báo cáo.\r\n– Hoàn thiện website', 1, 2, '2018-07-12', 'Hội trường E'),
('DA0010', 'Tìm hiểu ReactJS.NET viết ứng dụng minh họa.', '- Tìm hiểu Reactjs.net, \r\n- Tìm hiểu quy trình nghiệp vụ website sàn giao dịch\r\n- Xây dựng chức năng: Trang chủ, đăng ký, đăng nhập, quản lý tài khoản người dùng;  \r\n- Xây dựng module đăng và quản lý tin tức;\r\n- Xây dựng chức năng tạo ví giao dịch và thanh toán trực tuyến;\r\n- Thiết kế, quản lý các quảng cáo và quản trị chung cho trang web.\r\n- Trình bày nội dung và báo cáo theo quy định', 1, 2, '2018-07-11', 'Hội trường E'),
('DA0011', 'Phần mềm tiện ích bán hàng online trên mạng xã hội Facebook', '– Quét khách hàng mục tiêu\r\n– Kết bạn tự động\r\n– Quản lý profile\r\n– Tin nhắn tự động fanpage\r\n– Tạo tương tác với bạn bè\r\n– Tính năng nâng cao khác\r\n– Sinh viên phải có kiến thức lập trình Web, Windows Form, java.', 1, 2, '2018-07-11', 'Văn Phòng khoa'),
('DA0012', 'Xây dựng phần mềm quản lý khẩu phần ăn trường mầm non', '- Danh mục các món ăn, nguyên vật liệu chế biến món ăn.\r\n- Bảng tính định lượng khẩu phần ăn.\r\n- Thực đơn.\r\n- Quản lý sổ nhập, xuất thực phẩm.\r\n- Điểm danh báo ăn.\r\n- Sổ tính khẩu phần ăn theo ngày.\r\n- Sổ giao nhận thực phẩm.\r\n- Quyết toán tiền ăn trong tháng.\r\n- kiểm kê cuối tháng.\r\n- Tồn kho NVL', 0, 2, '2018-07-12', 'Hội Trường E'),
('DA0013', 'Tìm hiểu các giao thức định tuyến và triển khai ứng dụng tại doanh nghiệp', '- Tìm hiểu Routing protocol\r\n- Cơ chế hoạt động của các thuật toán định tuyến IGP, BGP\r\n- Khảo sát, phân tích và đề xuất giải pháp thực tế\r\n- Triển khai thực nghiệm trong hệ thống mạng tại doanh nghiệp', 1, 2, '2018-07-10', 'Hội trường C'),
('DA0014', 'Quản lý nhà sách', '- Quản lý được sản phẩm theo chủ đề (sách, truyện tranh, văn phòng phẩm)\r\n- Quản lý đặt sách từ nhà xuất bản (lập phiếu đặt, phiếu đặt đã giao, chưa giao, phiếu giao trong ngày,..)\r\n- Quản lý nhận hàng theo danh mục đã đặt hàng trước đó.\r\n- Quản lý bán hàng, thanh toán \r\n- Quản lý đổi trả hàng\r\n- Quản lý khuyến mãi (khuyến mãi %giảm giá, theo %hóa đơn)\r\n- Quản lý nhân viên (thu ngân)\r\n- Tạo được các báo cáo thông kê cần thiết: báo cáo doanh thu, báo cáo tồn kho, báo cáo đổi/ trả hàng.', 1, 2, '2018-07-12', 'Văn phòng khoa'),
('DA0015', 'Tìm hiểu điện toán đám mây và triển khai hệ thống OpenStack trên nền Ubuntu', '- Tìm hiểu về phần mềm mã nguôn mở và các công nghệ ảo hóa.\r\n- Tìm hiểu về công nghệ ảo hóa máy chủ\r\n- Tìm hiểu về Openstack.\r\n- Nghiên cứu và tiến hành đề xuất thiết kế mô hình OpenStack thích hợp.\r\n- Xây dựng và triển khai hệ thống OpenStack trên nền Ubuntu. ', 0, 2, '2018-07-12', 'Văn Phòng khoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dotdangky`
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
-- Đang đổ dữ liệu cho bảng `dotdangky`
--

INSERT INTO `dotdangky` (`MADOT`, `NOIDUNGDT`, `TGRADE`, `TGDANGKYNHOM`, `TGBATDAU`, `TGBAOVE`, `TGPHUCKHAO`, `SLTVNHOM`, `SLDETAI`, `CHAMHOIDONG`) VALUES
('DAMH0001', 'Đồ án phân tích thiết kế', '2018-04-10 00:00:00', '2018-04-10 00:00:00', '2018-04-20 00:00:00', '2018-05-20 00:00:00', '2018-05-25 00:00:00', 2, 200, 0),
('DATNK05', 'Đồ án tốt nghiệp khóa 05', '2017-12-20 00:00:00', '2018-01-20 00:00:00', '2018-02-01 00:00:00', '2018-06-01 00:00:00', '2018-06-10 00:00:00', 2, 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
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
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `TENGV`, `NGSINH`, `GIOITINH`, `DIACHI`, `SDT`, `EMAIL`, `MABM`) VALUES
('GV10012341', 'Nguyễn Thị Thùy Ngân', '1890-04-02 00:00:00', 0, 'TP.HCM', '01264895231', 'nganntt@cntp.edu.vn', 'CNPM'),
('GV10012342', 'Nguyễn Thị Thùy Trang', '1989-10-11 00:00:00', 0, 'TPHCM', '0356784563', 'trangntt@cntp.edu.vn', 'HTTT'),
('GV10012343', 'Nguyễn Văn Nam', '1890-05-07 00:00:00', 1, 'Tây Ninh', '01267976542', 'Namnv@cntp.edu.vn', 'MMT'),
('GV10012344', 'Lê Văn Duy', '1988-02-05 00:00:00', 1, 'TPHCM', '09746235532', 'duylv@cntp.edu.vn', 'HTTT'),
('GV10012345', 'Tô Văn Nhật Phi', '1980-12-07 00:00:00', 1, 'Nha Trang', '0974578932', 'phitvn@cntp.edu.vn', 'MMT'),
('GV10012346', 'Lê Duy Thanh', '1980-03-04 00:00:00', 1, 'TPHCM', '0817436367', 'thanhld@cntp.edu.vn', ''),
('GV10012347', 'Lê Thanh Hưng', '1980-03-04 00:00:00', 1, 'TPHCM', '0123456789', 'hunglt@cntp.edu.vn', 'CNPM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gvpb_detai`
--

CREATE TABLE `gvpb_detai` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYPB` datetime NOT NULL,
  `DIADIEM` text COLLATE utf8_unicode_ci NOT NULL,
  `PHUCKHAO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gvpb_detai`
--

INSERT INTO `gvpb_detai` (`MAGV`, `MADETAI`, `NGAYPB`, `DIADIEM`, `PHUCKHAO`) VALUES
('GV0001', 'DA0001', '2018-04-13 00:00:00', 'B103', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gv_detai`
--

CREATE TABLE `gv_detai` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MADETAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IDLOAICV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gv_detai`
--

INSERT INTO `gv_detai` (`MAGV`, `MADETAI`, `IDLOAICV`, `GHICHU`) VALUES
('GV0001', 'DT0001', 'CV001', ''),
('GV0001', 'DA001', 'CV001', ''),
('GV0001', 'DA0001', 'CV003', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hd_giangvien`
--

CREATE TABLE `hd_giangvien` (
  `MAHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CHUCVU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hd_giangvien`
--

INSERT INTO `hd_giangvien` (`MAHD`, `MAGV`, `CHUCVU`) VALUES
('HDPBK51', 'GV0001', 'Chủ tịch hội đồng'),
('HDPBK51', 'GV0003', 'Thành viên'),
('HDPBK51', 'GV0004', 'Thành viên'),
('HDPBK51', 'GV0006', 'Thành viên'),
('HDPBK52', 'GV0002', 'Thành viên'),
('HDPBK52', 'GV0005', 'Thành viên'),
('HDPBK52', 'GV007', 'Chủ tịch hội đồng'),
('HDPBK53', 'GV0002', 'Thành viên'),
('HDPBK53', 'GV0004', 'Chủ tịch hội đồng'),
('HDPBK53', 'GV0005', 'Thành viên'),
('HDPBK53', 'GV0006', 'Thành viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidong`
--

CREATE TABLE `hoidong` (
  `MAHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLTHANHVIEN` int(11) NOT NULL,
  `MADOT` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoidong`
--

INSERT INTO `hoidong` (`MAHD`, `SLTHANHVIEN`, `MADOT`) VALUES
('HDPBK51', 4, 'DKDAK05'),
('HDPBK52', 3, 'DATNK05'),
('HDPBK53', 4, 'DATNK05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaicongviec`
--

CREATE TABLE `loaicongviec` (
  `IDLOAICV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaicongviec`
--

INSERT INTO `loaicongviec` (`IDLOAICV`, `TenLoai`, `NoiDung`) VALUES
('CV001', 'Hướng dẫn', 'Hướng dẫn sinh sinh trong quá trình thực hiện đề tài'),
('CV002', 'Ra đề', 'Cung cấp xây dựng đề tài khóa luận'),
('CV003', 'Ra đề, hướng dẫn', 'Ra đề và chịu trách nhiệm hướng dẫn sinh viên theo đề tài ra');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messenger`
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
-- Cấu trúc bảng cho bảng `quyensudung`
--

CREATE TABLE `quyensudung` (
  `IDQuyenSuDung` int(11) NOT NULL,
  `Nội dung` text COLLATE utf8_unicode_ci NOT NULL,
  `Ghi chú` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyensudung`
--

INSERT INTO `quyensudung` (`IDQuyenSuDung`, `Nội dung`, `Ghi chú`) VALUES
(1, 'admin', 'Cho phép quản lý các user khác'),
(2, 'Trưởng Khoa', 'Thực hiện các chức năng của trưởng khoa'),
(3, 'Trưởng bộ môn', ''),
(4, 'Giảng viên', ''),
(5, 'Sinh viên', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
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
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MASV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `SDT`, `EMAIL`) VALUES
('2001140081', 'Nguyễn Thị Diễm Hồng', '1996-03-14 00:00:00', 0, '01234567892', 'hong@gmail.com'),
('2001140082', 'Nguyễn Thị Hoa', '1996-04-16 00:00:00', 0, '0975468533', 'hoa@gmail.com'),
('2001140083', 'Phan Thành Nhân', '1995-10-10 00:00:00', 0, '0824725427', 'nhan@gmail.com'),
('2001140094', 'Nguyễn Cao Thị Ngọc Quyên', '1996-04-05 00:00:00', 0, '01222237455', 'quyen@gmail.com'),
('2001140095', 'Hồ Minh Thông', '1995-11-11 00:00:00', 1, '0828465354', 'thong@gmail.com'),
('2001140096', 'Phạm Nguyễn Như Huỳnh', '1996-07-22 00:00:00', 0, '0976467832', 'huynh@gmail.com'),
('2001140098', 'Nguyễn Vũ Linh', '1996-07-07 00:00:00', 1, '01884635452', 'linh@gmail.com'),
('2001140127', 'Vũ Hoàng Long', '1996-10-10 00:00:00', 1, '0363467882', 'long@gmail.com'),
('2001140213', 'Nguyễn Quang Sang', '1996-05-16 00:00:00', 1, '0123567890', 'sang@gmail.com'),
('2001140219', 'Ngô Tấn Tài', '1996-06-01 00:00:00', 1, '096750181', 'taipap123@gmail.com'),
('2001150021', 'Phạm Lê Văn Bảo', '1999-10-20 00:00:00', 1, '0967896789', 'bao@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sv_detai`
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
-- Đang đổ dữ liệu cho bảng `sv_detai`
--

INSERT INTO `sv_detai` (`MASV`, `MADETAI`, `NGAYDANGKY`, `DIEMHUONGDAN`, `DIEMPHANBIEN`, `DIEMHOIDONG`, `DIEMPHUCKHAO`, `TONGDIEM`) VALUES
('2001140096', 'DA0001', '2018-04-20 07:20:00', NULL, NULL, NULL, NULL, NULL),
('2001140123', 'DA0002', '2018-04-20 00:00:00', NULL, NULL, NULL, NULL, NULL),
('2001140127', 'DA0002', '2018-04-20 00:00:00', NULL, NULL, NULL, NULL, NULL),
('2001140219', 'DA0001', '2018-04-20 00:00:00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaitin`
--

CREATE TABLE `theloaitin` (
  `IDLOAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOAI` text COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao_tintuc`
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
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `IDUser` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `IDQuyenSuDung` int(11) NOT NULL,
  `NgayDangKy` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`IDUser`, `MatKhau`, `IDQuyenSuDung`, `NgayDangKy`) VALUES
('2001140096', '123456', 5, '2018-05-01 00:00:00'),
('2001140219', '123456', 5, '2018-05-02 00:00:00'),
('admin', '123456', 1, '2018-01-01 00:00:00'),
('GV10012341', '123456', 2, '2018-02-02 00:00:00'),
('GV10012342', '123456', 3, '0000-00-00 00:00:00'),
('GV10012343', '123456', 4, '2018-03-03 00:00:00'),
('GV10012344', '123456', 4, '2018-03-03 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucautaode`
--

CREATE TABLE `yeucautaode` (
  `MAGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MABOMON` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SL_DETAI` int(10) NOT NULL,
  `NGAYNOP` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeucautaode`
--

INSERT INTO `yeucautaode` (`MAGV`, `MABOMON`, `SL_DETAI`, `NGAYNOP`) VALUES
('GV0001', 'CNPM', 2, '2018-04-19 00:00:00'),
('GV0002', 'CNPM', 3, '2018-04-19 00:00:00'),
('GV0003', 'HTTT', 2, '2018-04-19 00:00:00'),
('GV0004', 'MMT', 3, '2018-04-19 00:00:00'),
('GV0005', 'HTTT', 3, '2018-04-19 00:00:00'),
('GV0006', 'MMT', 2, '2018-04-19 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MABM`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MADETAI`);

--
-- Chỉ mục cho bảng `dotdangky`
--
ALTER TABLE `dotdangky`
  ADD PRIMARY KEY (`MADOT`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGV`);

--
-- Chỉ mục cho bảng `gvpb_detai`
--
ALTER TABLE `gvpb_detai`
  ADD PRIMARY KEY (`MAGV`,`MADETAI`);

--
-- Chỉ mục cho bảng `hd_giangvien`
--
ALTER TABLE `hd_giangvien`
  ADD PRIMARY KEY (`MAHD`,`MAGV`);

--
-- Chỉ mục cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  ADD PRIMARY KEY (`MAHD`);

--
-- Chỉ mục cho bảng `loaicongviec`
--
ALTER TABLE `loaicongviec`
  ADD PRIMARY KEY (`IDLOAICV`);

--
-- Chỉ mục cho bảng `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`MASV`,`MADETAI`);

--
-- Chỉ mục cho bảng `quyensudung`
--
ALTER TABLE `quyensudung`
  ADD PRIMARY KEY (`IDQuyenSuDung`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MASV`);

--
-- Chỉ mục cho bảng `sv_detai`
--
ALTER TABLE `sv_detai`
  ADD PRIMARY KEY (`MASV`,`MADETAI`);

--
-- Chỉ mục cho bảng `theloaitin`
--
ALTER TABLE `theloaitin`
  ADD PRIMARY KEY (`IDLOAI`);

--
-- Chỉ mục cho bảng `thongbao_tintuc`
--
ALTER TABLE `thongbao_tintuc`
  ADD PRIMARY KEY (`MATIN`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- Chỉ mục cho bảng `yeucautaode`
--
ALTER TABLE `yeucautaode`
  ADD PRIMARY KEY (`MAGV`,`MABOMON`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baocao`
--
ALTER TABLE `baocao`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quyensudung`
--
ALTER TABLE `quyensudung`
  MODIFY `IDQuyenSuDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
