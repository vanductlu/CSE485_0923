-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 10:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btth01_cse485`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DSBaiViet` (IN `ten_theloai` VARCHAR(50))   BEGIN
    DECLARE ma_theloai INT UNSIGNED;
    
    -- Tìm mã thể loại của bài viết mới được thêm vào
    SELECT ma_tloai INTO ma_theloai FROM theloai WHERE ten_tloai = ten_theloai;
    
    IF ma_theloai IS NULL THEN
        SELECT 'Thể loại không tồn tại' AS ErrorMsg;
    ELSE
        SELECT baiviet.*
        FROM baiviet
        WHERE baiviet.ma_tloai = ma_theloai;
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Bài viết 1', 'Bài hát 1', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, '2023-09-22 20:56:49', 'hinh1.jpg'),
(2, 'Bài viết 2', 'Bài hát 2', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, '2023-09-22 20:56:49', 'hinh2.jpg'),
(3, 'Bài viết 3', 'Bài hát 3', 3, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 1, '2023-09-22 20:56:49', 'hinh3.jpg'),
(4, 'Bài viết 4', 'Bài hát 4', 1, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 2, '2023-09-22 20:56:49', 'hinh4.jpg'),
(5, 'Bài viết 5', 'Bài hát 5', 2, 'Tóm tắt bài viết 5', 'Nội dung bài viết 5', 3, '2023-09-22 20:56:49', 'hinh5.jpg');

--
-- Triggers `baiviet`
--
DELIMITER $$
CREATE TRIGGER `tg_CapNhatTheLoai` AFTER INSERT ON `baiviet` FOR EACH ROW BEGIN
    UPDATE theloai SET SLBaiViet = SLBaiViet + 1 WHERE ma_tloai = NEW.ma_tloai;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Nhacvietplus', 'nhacvietplus.jpg'),
(2, 'Tác giả 1', 'tacgia1.jpg'),
(3, 'Tác giả 2', 'tacgia2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(255) DEFAULT NULL,
  `SLBaiViet` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`, `SLBaiViet`) VALUES
(1, 'Nhạc bảnh', 0),
(2, 'Nhạc của đức', 0),
(3, 'Nhạc Trữ tình', 0),
(2693, 'nhac hiphop', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_music`
-- (See below for the actual view)
--
CREATE TABLE `vw_music` (
`ma_bviet` int(10) unsigned
,`tieude` varchar(200)
,`ten_bhat` varchar(100)
,`ten_tgia` varchar(100)
,`ten_tloai` varchar(255)
,`ngayviet` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `vw_music`
--
DROP TABLE IF EXISTS `vw_music`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_music`  AS SELECT `baiviet`.`ma_bviet` AS `ma_bviet`, `baiviet`.`tieude` AS `tieude`, `baiviet`.`ten_bhat` AS `ten_bhat`, `tacgia`.`ten_tgia` AS `ten_tgia`, `theloai`.`ten_tloai` AS `ten_tloai`, `baiviet`.`ngayviet` AS `ngayviet` FROM ((`baiviet` join `tacgia` on(`baiviet`.`ma_tgia` = `tacgia`.`ma_tgia`)) join `theloai` on(`baiviet`.`ma_tloai` = `theloai`.`ma_tloai`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `fk_baiviet_ma_tloai` (`ma_tloai`),
  ADD KEY `fk_baiviet_ma_tgia` (`ma_tgia`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `ma_tgia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_tloai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2694;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `fk_baiviet_ma_tgia` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`),
  ADD CONSTRAINT `fk_baiviet_ma_tloai` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
