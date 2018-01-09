-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 09, 2018 lúc 11:02 AM
-- Phiên bản máy phục vụ: 5.7.19-log
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo_olpa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acceleration`
--

CREATE TABLE `acceleration` (
  `imgInd` int(2) NOT NULL,
  `questionNum` int(1) DEFAULT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `imageLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `acceleration`
--

INSERT INTO `acceleration` (`imgInd`, `questionNum`, `question`, `answer`, `imageLink`) VALUES
(1, 1, 'Đây là gì?', 'Đáp án 1', 'http://drive.kenh9.tv/http/1200x1200/tinhhoa.net-fVL88E-20150611-se-ra-sao-neu-cac-thien-ha-trong-vu-tru-xuat-hien-ngay-truoc-mat-ban.jpg'),
(2, 1, 'Đây là gì?', 'Đáp án 1', 'http://i292.photobucket.com/albums/mm22/vuhoan_goshi/SpaceArtWallpaper1920x1080_043.jpg'),
(3, 1, 'Đây là gì?', 'Đáp án 1', 'http://img2.news.zing.vn/2012/06/01/5-10.jpg'),
(4, 1, 'Đây là gì?', 'Đáp án 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ68jGXW_C2r0QA1UJei6tGjhyyaJY0GMhrT6o9Zz-P0ojNSCoL'),
(5, 1, 'Đây là gì?', 'Đáp án 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwvTHFiWUmRgn5LeFBNEdchBtOWdeJd94MBpoHg7W4ENiK4bMZpA'),
(6, 1, 'Đây là gì?', 'Đáp án 1', 'https://1.bp.blogspot.com/-9IC6dJFxZVw/WQHa7kQBu-I/AAAAAAAAAwU/ywKihjVsDb8HSK1WpuWVNENQcQWUJTrswCLcB/s1600/lo-den-3.jpg'),
(7, 1, 'Đây là gì?', 'Đáp án 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTua1cJDaHsAmMoKwgkzwhDKa21lBD92oymYiCJYHaDu3r4tZa9A'),
(8, 1, 'Đây là gì?', 'Đáp án 1', 'http://sohanews.sohacdn.com/thumb_w/660/2016/vutru-1457185117834-35-0-249-420-crop-1457185140646.jpg'),
(9, 2, 'Câu IQ', 'Đáp án 2', 'http://i292.photobucket.com/albums/mm22/vuhoan_goshi/SpaceArtWallpaper1920x1080_043.jpg'),
(10, 3, 'Câu hỏi dữ kiện', 'Đáp án 3', 'http://drive.kenh9.tv/http/1200x1200/tinhhoa.net-fVL88E-20150611-se-ra-sao-neu-cac-thien-ha-trong-vu-tru-xuat-hien-ngay-truoc-mat-ban.jpg'),
(11, 3, 'Câu hỏi dữ kiện', 'Đáp án 3', 'http://i292.photobucket.com/albums/mm22/vuhoan_goshi/SpaceArtWallpaper1920x1080_043.jpg'),
(12, 3, 'Câu hỏi dữ kiện', 'Đáp án 3', 'http://img2.news.zing.vn/2012/06/01/5-10.jpg'),
(13, 4, 'Câu hỏi sắp xếp', 'Đáp án 4', 'https://kenh14cdn.com/zoom/700_438/2016/260515kpdwarfgalaxy3-1464346498109-0-0-818-1588-crop-1464347244839.jpg'),
(14, 5, 'Obstacle Image', '', 'http://i292.photobucket.com/albums/mm22/vuhoan_goshi/SpaceArtWallpaper1920x1080_043.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `extraques`
--

CREATE TABLE `extraques` (
  `candInd` int(1) NOT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL,
  `granted` int(1) DEFAULT NULL,
  `allowed` int(1) DEFAULT NULL,
  `registered` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `extraques`
--

INSERT INTO `extraques` (`candInd`, `ques`, `ans`, `granted`, `allowed`, `registered`) VALUES
(1, 'CHP 1', 'Đáp án CHP1', 0, 0, 0),
(2, 'CHP2', 'Đáp án CHP2', 0, 0, 0),
(3, 'CHP3', 'Đáp án CHP3', 0, 0, 0),
(4, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `finishing`
--

CREATE TABLE `finishing` (
  `quesInd` int(2) NOT NULL,
  `candidate` int(1) DEFAULT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `finishing`
--

INSERT INTO `finishing` (`quesInd`, `candidate`, `question`, `answer`) VALUES
(1, 1, 'Câu 1.1.40', 'Đáp án 1.1.40'),
(2, 1, 'Câu 1.2.40', 'Đáp án 1.2.40'),
(3, 1, 'Câu 1.3.40', 'Đáp án 1.3.40'),
(4, 1, 'Câu 1.1.60', 'Đáp án 1.1.60'),
(5, 1, 'Câu 1.2.60', 'Đáp án 1.2.60'),
(6, 1, 'Câu 1.3.60', 'Đáp án 1.3.60'),
(7, 1, 'Câu 1.1.80', 'Đáp án 1.1.80'),
(8, 1, 'Câu 1.2.80', 'Đáp án 1.2.80'),
(9, 1, 'Câu 1.3.80', 'Đáp án 1.3.80'),
(10, 2, 'Câu 2.1.40', 'Đáp án 1.2.40'),
(11, 2, 'Câu 2.2.40', 'Đáp án 2.2.40'),
(12, 2, 'Câu 2.3.40', 'Đáp án 2.3.40'),
(13, 2, 'Câu 2.1.60', 'Đáp án 2.1.60'),
(14, 2, 'Câu 2.2.60', 'Đáp án 2.2.60'),
(15, 2, 'Câu 2.3.60', 'Đáp án 2.3.60'),
(16, 2, 'Câu 2.1.80', 'Đáp án 2.1.80'),
(17, 2, 'Câu 2.2.80', 'Đáp án 2.2.80'),
(18, 2, 'Câu 2.3.80', 'Đáp án 2.3.80'),
(19, 3, 'Câu 3.1.40', 'Đáp án 3.1.40'),
(20, 3, 'Câu 3.2.40', 'Đáp án 3.2.40'),
(21, 3, 'Câu 3.3.40', 'Đáp án 3.3.40'),
(22, 3, 'Câu 3.1.60', 'Đáp án 3.1.60'),
(23, 3, 'Câu 3.2.60', 'Đáp án 3.2.60'),
(24, 3, 'Câu 3.3.60', 'Đáp án 3.3.60'),
(25, 3, 'Câu 3.1.80', 'Đáp án 3.1.80'),
(26, 3, 'Câu 3.2.80', 'Đáp án 3.2.80'),
(27, 3, 'Câu 3.3.80', 'Đáp án 3.3.80'),
(28, 4, 'Câu 4.1.40', 'Đáp án 4.1.40'),
(29, 4, 'Câu 4.2.40', 'Đáp án 4.2.40'),
(30, 4, 'Câu 4.3.80', 'Đáp án 4.3.80'),
(31, 4, 'Câu 4.1.60', 'Đáp án 4.1.60'),
(32, 4, 'Câu 4.2.60', 'Đáp án 4.2.60'),
(33, 4, 'Câu 4.3.60', 'Đáp án 4.3.60'),
(34, 4, 'Câu 4.1.80', 'Đáp án 4.1.80'),
(35, 4, 'Câu 4.2.80', 'Đáp án 4.2.80'),
(36, 4, 'Câu 4.3.80', 'Đáp án 4.3.80');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `obstacle`
--

CREATE TABLE `obstacle` (
  `row` int(1) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(30) DEFAULT NULL,
  `rowStart` int(2) DEFAULT NULL,
  `rowEnd` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `obstacle`
--

INSERT INTO `obstacle` (`row`, `question`, `answer`, `rowStart`, `rowEnd`) VALUES
(1, 'VCNV 1', 'ĐÁP ÁN HÀNG NGANG 1', 5, 19),
(2, 'VCNV 2', 'ĐÁP ÁN HÀNG NGANG 2', 5, 19),
(3, 'VCNV 3', 'ĐÁP ÁN HÀNG NGANG 3', 5, 19),
(4, 'VCNV 4', 'ĐÁP ÁN HÀNG NGANG 4', 5, 19),
(5, 'Ô trung tâm', 'Đáp án OTT', 0, 0),
(6, 'CNV', 'ABCCCCCCCCC', 0, 12),
(7, 'Ô mạo hiểm', 'Đáp án OMH', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warmingup`
--

CREATE TABLE `warmingup` (
  `quesInd` int(2) NOT NULL,
  `candidate` int(1) DEFAULT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `warmingup`
--

INSERT INTO `warmingup` (`quesInd`, `candidate`, `question`, `answer`) VALUES
(1, 1, 'Câu 1.1', 'Đáp án 1.1'),
(2, 1, 'Câu 1.2', 'Đáp án 1.2'),
(3, 1, 'Câu 1.3', 'Đáp án 1.3'),
(4, 1, 'Câu 1.4', 'Đáp án 1.4'),
(5, 1, 'Câu 1.5', 'Đáp án 1.5'),
(6, 1, 'Câu 1.6', 'Đáp án 1.6'),
(7, 1, 'Câu 1.7', 'Đáp án 1.7'),
(8, 1, 'Câu 1.8', 'Đáp án 1.8'),
(9, 1, 'Câu 1.9', 'Đáp án 1.9'),
(10, 1, 'Câu 1.10', 'Đáp án 1.10'),
(11, 1, 'Câu 1.11', 'Đáp án 1.11'),
(12, 1, 'Câu 1.12', 'Đáp án 1.12'),
(13, 2, 'Câu 2.1', 'Đáp án 2.1'),
(14, 2, 'Câu 2.2', 'Đáp án 2.2'),
(15, 2, 'Câu 2.3', 'Đáp án 2.3'),
(16, 2, 'Câu 2.4', 'Đáp án 2.4'),
(17, 2, 'Câu 2.5', 'Đáp án 2,5'),
(18, 2, 'Câu 2.6', 'Đáp án 2.6'),
(19, 2, 'Câu 2.7', 'Đáp án 2.7'),
(20, 2, 'Câu 2.8', 'Đáp án 2.8'),
(21, 2, 'Câu 2.9', 'Đáp án 2.9'),
(22, 2, 'Câu 2.10', 'Đáp án 2.10'),
(23, 2, 'Câu 2.11', 'Đáp án 2.11'),
(24, 2, 'Câu 2.12', 'Đáp án 2.12'),
(25, 3, 'Câu 3.1', 'Đáp án 3.1'),
(26, 3, 'Câu 3.2', 'Đáp án 3.2'),
(27, 3, 'Câu 3.3', 'Đáp án 3.3'),
(28, 3, 'Câu 3.4', 'Đáp án 3.4'),
(29, 3, 'Câu 3.5', 'Đáp án 3.5'),
(30, 3, 'Câu 3.6', 'Đáp án 3.6'),
(31, 3, 'Câu 3.7', 'Đáp án 3.7'),
(32, 3, 'Câu 3.8', 'Đáp án 3.8'),
(33, 3, 'Câu 3.9', 'Đáp án 3.9'),
(34, 3, 'Câu 3.10', 'Đáp án 3.10'),
(35, 3, 'Câu 3.11', 'Đáp án 3.11'),
(36, 3, 'Câu 3.12', 'Đáp án 3.12'),
(37, 4, 'Câu 4.1', 'Đáp án 4.1'),
(38, 4, 'Câu 4.2', 'Đáp án 4.2'),
(39, 4, 'Câu 4.3', 'Đáp án 4.3'),
(40, 4, 'Câu 4.4', 'Đáp án 4.4'),
(41, 4, 'Câu 4.5', 'Đáp án 4.5'),
(42, 4, 'Câu 4.6', 'Đáp án 4.6'),
(43, 4, 'Câu 4.7', 'Đáp án 4.7'),
(44, 4, 'Câu 4.8', 'Đáp án 4.8'),
(45, 4, 'Câu 4.9', 'Đáp án 4.9'),
(46, 4, 'Câu 4.10', 'Đáp án 4.10'),
(47, 4, 'Câu 4.11', 'Đáp án 4.11'),
(48, 4, 'Câu 4.12', 'Đáp án 4.12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acceleration`
--
ALTER TABLE `acceleration`
  ADD PRIMARY KEY (`imgInd`);

--
-- Chỉ mục cho bảng `extraques`
--
ALTER TABLE `extraques`
  ADD PRIMARY KEY (`candInd`);

--
-- Chỉ mục cho bảng `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`quesInd`);

--
-- Chỉ mục cho bảng `obstacle`
--
ALTER TABLE `obstacle`
  ADD PRIMARY KEY (`row`);

--
-- Chỉ mục cho bảng `warmingup`
--
ALTER TABLE `warmingup`
  ADD PRIMARY KEY (`quesInd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
