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
-- Cơ sở dữ liệu: `candidate`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accecandidateanswer`
--

CREATE TABLE `accecandidateanswer` (
  `candInd` int(2) NOT NULL,
  `nameCan` varchar(20) DEFAULT NULL,
  `candAns` varchar(50) DEFAULT NULL,
  `ansTime` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `accecandidateanswer`
--

INSERT INTO `accecandidateanswer` (`candInd`, `nameCan`, `candAns`, `ansTime`) VALUES
(1, 'HOÀNG MINH', '', 0),
(2, 'ANH HUY', '', 0),
(3, 'HOÀNG ANH', '', 0),
(4, 'QUANG HƯNG', 'CHUỘT', 19.81);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `candidate`
--

CREATE TABLE `candidate` (
  `candInd` int(1) NOT NULL,
  `nameCan` varchar(20) DEFAULT NULL,
  `point` int(3) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `candidate`
--

INSERT INTO `candidate` (`candInd`, `nameCan`, `point`, `code`) VALUES
(1, 'HOÀNG MINH', 140, 'olympia_1'),
(2, 'ANH HUY', 0, 'olympia_1'),
(3, 'HOÀNG ANH', 0, 'olympia_1'),
(4, 'QUANG HƯNG', 0, 'olympia_1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `extraquescandidategranted`
--

CREATE TABLE `extraquescandidategranted` (
  `candInd` int(2) NOT NULL,
  `nameCan` varchar(20) DEFAULT NULL,
  `granted` int(1) NOT NULL,
  `allowed` int(1) NOT NULL,
  `registered` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `extraquescandidategranted`
--

INSERT INTO `extraquescandidategranted` (`candInd`, `nameCan`, `granted`, `allowed`, `registered`) VALUES
(1, 'HOÀNG MINH', 1, 0, 0),
(2, 'ANH HUY', 0, 0, 0),
(3, 'HOÀNG ANH', 0, 0, 0),
(4, 'QUANG HƯNG', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `finishingcandidategranted`
--

CREATE TABLE `finishingcandidategranted` (
  `candInd` int(2) NOT NULL,
  `nameCan` varchar(20) DEFAULT NULL,
  `finishingGranted` int(1) NOT NULL,
  `allowGranted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `finishingcandidategranted`
--

INSERT INTO `finishingcandidategranted` (`candInd`, `nameCan`, `finishingGranted`, `allowGranted`) VALUES
(1, 'HOÀNG MINH', 0, 0),
(2, 'ANH HUY', 0, 0),
(3, 'HOÀNG ANH', 0, 0),
(4, 'QUANG HƯNG', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `obstaclecandidateanswer`
--

CREATE TABLE `obstaclecandidateanswer` (
  `candInd` int(2) NOT NULL,
  `nameCan` varchar(20) DEFAULT NULL,
  `candAns` varchar(50) DEFAULT NULL,
  `obstacleGranted` int(1) NOT NULL,
  `adven` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `obstaclecandidateanswer`
--

INSERT INTO `obstaclecandidateanswer` (`candInd`, `nameCan`, `candAns`, `obstacleGranted`, `adven`) VALUES
(1, 'HOÀNG MINH', '', 1, 0),
(2, 'ANH HUY', '', 0, 0),
(3, 'HOÀNG ANH', '', 0, 0),
(4, 'QUANG HƯNG', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tempacceleration`
--

CREATE TABLE `tempacceleration` (
  `candInd` int(2) DEFAULT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tempacceleration`
--

INSERT INTO `tempacceleration` (`candInd`, `ques`, `ans`) VALUES
(0, 'Đây là con gì?', 'Vịt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tempextraques`
--

CREATE TABLE `tempextraques` (
  `candInd` int(2) DEFAULT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tempextraques`
--

INSERT INTO `tempextraques` (`candInd`, `ques`, `ans`) VALUES
(0, 'Câu hỏi phụ 1', 'Đáp án 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tempfinishing`
--

CREATE TABLE `tempfinishing` (
  `candInd` int(2) DEFAULT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(500) DEFAULT NULL,
  `timeQues` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tempfinishing`
--

INSERT INTO `tempfinishing` (`candInd`, `ques`, `ans`, `timeQues`) VALUES
(0, 'Mời bạn trả lời một câu hỏi dữ kiện.', 'ABC', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tempobstacle`
--

CREATE TABLE `tempobstacle` (
  `candInd` int(2) DEFAULT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tempobstacle`
--

INSERT INTO `tempobstacle` (`candInd`, `ques`, `ans`) VALUES
(0, 'Bức tranh “Bác Hồ với 3 em thiếu nhi Bắc – Trung – Nam” của họa sĩ Diệp Minh Châu được vẽ bằng chất liệu gì?', 'MÁU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tempwarmingup`
--

CREATE TABLE `tempwarmingup` (
  `candInd` int(2) DEFAULT NULL,
  `ques` varchar(500) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tempwarmingup`
--

INSERT INTO `tempwarmingup` (`candInd`, `ques`, `ans`) VALUES
(4, 'Vùng đồng bằng nào có diện tích lớn thứ ba nước ta sau Đồng bằng sông Hồng và đồng bằng sông Cửu Long?', 'Sông Mã');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accecandidateanswer`
--
ALTER TABLE `accecandidateanswer`
  ADD PRIMARY KEY (`candInd`);

--
-- Chỉ mục cho bảng `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candInd`);

--
-- Chỉ mục cho bảng `extraquescandidategranted`
--
ALTER TABLE `extraquescandidategranted`
  ADD PRIMARY KEY (`candInd`);

--
-- Chỉ mục cho bảng `finishingcandidategranted`
--
ALTER TABLE `finishingcandidategranted`
  ADD PRIMARY KEY (`candInd`);

--
-- Chỉ mục cho bảng `obstaclecandidateanswer`
--
ALTER TABLE `obstaclecandidateanswer`
  ADD PRIMARY KEY (`candInd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
