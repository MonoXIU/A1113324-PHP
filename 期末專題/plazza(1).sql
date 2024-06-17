-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-12 17:49:56
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `plazza`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `ID` int(225) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_mail` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL,
  `date_admin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`ID`, `admin_name`, `admin_mail`, `admin_password`, `date_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123456', '2021-03-10 16:58:18');

-- --------------------------------------------------------

--
-- 資料表結構 `blog`
--

CREATE TABLE `blog` (
  `ID` int(225) NOT NULL,
  `bloger` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_blog` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `booking`
--

CREATE TABLE `booking` (
  `ID` int(225) NOT NULL,
  `entre` varchar(225) NOT NULL,
  `sortie` varchar(225) NOT NULL,
  `numChambre` int(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `confirmation` varchar(225) NOT NULL,
  `pu` int(225) NOT NULL,
  `prix` int(225) NOT NULL,
  `date_booking` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `chambres`
--

CREATE TABLE `chambres` (
  `ID` int(225) NOT NULL,
  `disponibilite` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `numero` int(225) NOT NULL,
  `standard` varchar(225) NOT NULL,
  `stars` int(225) NOT NULL,
  `description` text NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `tv` varchar(10) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_chambres` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `chambre_img`
--

CREATE TABLE `chambre_img` (
  `ID` int(225) NOT NULL,
  `chambre_num` int(225) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `img_type` varchar(225) NOT NULL,
  `img_size` int(225) NOT NULL,
  `date_chambre_img` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `galerie`
--

CREATE TABLE `galerie` (
  `ID` int(225) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `img_type` varchar(225) NOT NULL,
  `img_size` int(225) NOT NULL,
  `date_galerie` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `galerie`
--

INSERT INTO `galerie` (`ID`, `img_name`, `img_type`, `img_size`, `date_galerie`) VALUES
(1, 'Plazza-IMG-Galerie-6048e1f6b29fb2.33829568.jpg', 'jpg', 1600489, '2021-03-10 17:12:54'),
(2, 'Plazza-IMG-Galerie-6048e1f6e1fb24.36774772.jpg', 'jpg', 1491189, '2021-03-10 17:12:54'),
(3, 'Plazza-IMG-Galerie-6048e1f702fc71.84626072.jpg', 'jpg', 1141520, '2021-03-10 17:12:55'),
(4, 'Plazza-IMG-Galerie-6048e1f74f8454.75739351.jpg', 'jpg', 1044912, '2021-03-10 17:12:55'),
(5, 'Plazza-IMG-Galerie-6048e1f7805806.51641014.jpg', 'jpg', 1267631, '2021-03-10 17:12:55');

-- --------------------------------------------------------

--
-- 資料表結構 `news_letter`
--

CREATE TABLE `news_letter` (
  `ID` int(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `date_news_letter` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `temoignage`
--

CREATE TABLE `temoignage` (
  `ID` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `article` text NOT NULL,
  `stars` int(225) NOT NULL,
  `date_temoignage` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `temoignage`
--

INSERT INTO `temoignage` (`ID`, `name`, `article`, `stars`, `date_temoignage`) VALUES
(1, 'Vianney R', 'Si vous regardez des pièces vides sur le Web, vous pouvez être très confus au\r\ndifférence de prix. ici Vous pouvez en voir pour le prix standard chacun.', 4, '2021-03-11 10:19:57');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `chambre_img`
--
ALTER TABLE `chambre_img`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `chambres`
--
ALTER TABLE `chambres`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `chambre_img`
--
ALTER TABLE `chambre_img`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
