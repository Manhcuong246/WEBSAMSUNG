-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2024 at 01:09 AM
-- Server version: 8.4.0
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int NOT NULL,
  `ten_danhmuc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Di động'),
(2, 'Ưu đãi'),
(3, 'AI'),
(4, 'TV & AV'),
(5, 'Gia dụng'),
(6, 'Máy tính'),
(7, 'Màn hình'),
(8, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `mausacsanpham`
--

CREATE TABLE `mausacsanpham` (
  `id_mausacsanpham` int NOT NULL,
  `id_sanpham` int NOT NULL,
  `anh_sanpham` text NOT NULL,
  `mausac_sanphamhex` text NOT NULL,
  `mausac_sanphamtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mausacsanpham`
--

INSERT INTO `mausacsanpham` (`id_mausacsanpham`, `id_sanpham`, `anh_sanpham`, `mausac_sanphamhex`, `mausac_sanphamtext`) VALUES
(1, 1, 'vn-galaxy-a55-5g-sm-a556-sm-a556ezkaxxv-thumb-540189659.png', '#000000', 'Đen '),
(2, 1, 'vn-galaxy-a55-5g-sm-a556-sm-a556elbaxxv-thumb-540189536.png', '#B2CFCF', 'Xanh Iceblue'),
(3, 1, 'vn-galaxy-a55-5g-sm-a556-sm-a556elvaxxv-thumb-540189594.png', '#C8A2C8', 'Tím Lilac'),
(4, 2, 'vn-qled-qe1d-qa65qe1dakxxv-thumb-540239081.png', '#000000', 'Đen'),
(5, 3, 'vn-galaxy-buds3-pro-r630-sm-r630nzaaxxv-thumb-542137349.png', '#C0C0C0', 'Bạc '),
(6, 3, 'vn-galaxy-buds3-pro-r630-sm-r630nzwaxxv-thumb-542137376.png', '#FFFFFF', 'Trắng'),
(7, 4, 'vn-wall-mount-f-ar13cyfaa-front-white-thumb-535469847.png', '#FFFFFF', 'Trắng'),
(8, 5, 'vn-galaxy-tab-a9-sm-x110-sm-x110nzaaxev-thumb-538721437.png', '#383838', 'Đen graphite'),
(9, 5, 'vn-galaxy-tab-a9-sm-x110-sm-x110ndbaxev-thumb-538721361.png', '#000080', 'Xanh navy'),
(10, 5, 'vn-galaxy-tab-a9-sm-x110-sm-x110nzsaxev-thumb-538721514.png', '#C0C0C0', 'Bạc ánh kim'),
(11, 6, 'vn-galaxy-fit3-r390-sm-r390nzaaxxv-thumb-539781173.png', '#1A1A1A', 'Đen ánh kim'),
(12, 6, 'vn-galaxy-fit3-r390-sm-r390nzsaxxv-thumb-539781186.png', '#C0C0C0', 'Bạc ánh sao'),
(13, 6, 'vn-galaxy-fit3-r390-sm-r390nidaxxv-thumb-539781158.png', '#D9838F', 'Hồng ánh đồng'),
(14, 7, 'vn-galaxy-s24-s928-490234-sm-s928blbcxxv-thumb-539385752.png', '#0F4C81', 'Xanh dương titan'),
(15, 7, 'vn-galaxy-s24-s928-490234-sm-s928blgcxxv-thumb-539386013.png', '#2A623D', 'Xanh lục titian'),
(16, 7, 'vn-galaxy-s24-s928-490234-sm-s928bzocxxv-thumb-539386172.png', '#D97324', 'Cam titan\r\n'),
(17, 8, 'vn-twin-cooling-plus-rf48a4000b4-sv-thumb-514890317.png', '#000000', 'Đen'),
(18, 9, 'vn-odyssey-g5-g55c-484309-ls32cg552eexxv-thumb-538902655.png', '#000000', 'Đen'),
(19, 10, 'vn-front-loading-washer-ww80ta046aeef-382666-ww95ta046ax-sv-thumb-536830218.png', '#000000', 'Đen'),
(20, 11, 'vn-980-nvme-m2-ssd-mz-v8v250bw-thumb-539160221.png', '#000000', 'Đen');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int NOT NULL,
  `id_danhmuc` int NOT NULL,
  `ten_sanpham` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gia_sanpham` int NOT NULL,
  `giagoc_sanpham` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_danhmuc`, `ten_sanpham`, `gia_sanpham`, `giagoc_sanpham`) VALUES
(1, 1, 'Galaxy A55 5G', 9000000, 12000000),
(2, 4, '65 Inch QLED QE1D 4K Tizen OS Smart TV (2024)', 21000000, 25000000),
(3, 8, 'Galaxy Buds3 Pro', 5000000, NULL),
(4, 5, 'Điều hòa treo tường Inverter AR13CYFAAWKNSV WindFree™ Wi-Fi 12,000 BTU/h', 11900000, 15900000),
(5, 1, 'Galaxy Tab A9 (Wi-Fi)', 3489700, 3989700),
(6, 8, 'Galaxy Fit3', 1390000, NULL),
(7, 1, 'Galaxy S24 Ultra (Online Exclusive)', 33990000, NULL),
(8, 5, 'Tủ Lạnh 4 Cửa RF48A4000B4 với Twin Cooling Plus™ 488 L, màu Đen', 20100000, 25000000),
(9, 7, '32 inch Odyssey G5 G55C QHD 165Hz Màn hình Gaming', 6130000, 8100000),
(10, 5, '9.5 kg Máy Giặt Thông Minh AI Ecobubble™ Với Giặt Hơi Nước Diệt Khuẩn', 9696000, 11500000),
(11, 6, 'Ổ cứng SSD gắn trong 980 NVMe M.2 SSD 250GB', 1370000, 1770000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `mausacsanpham`
--
ALTER TABLE `mausacsanpham`
  ADD PRIMARY KEY (`id_mausacsanpham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mausacsanpham`
--
ALTER TABLE `mausacsanpham`
  MODIFY `id_mausacsanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
