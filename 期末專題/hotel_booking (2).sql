-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-12 17:38:21
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
-- 資料庫： `hotel_booking`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `services` text DEFAULT NULL,
  `roomtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `checkin_date`, `checkout_date`, `payment_method`, `services`, `roomtype`) VALUES
(40, '黃家柔', '921211amolly@gmail.com', '0103023123', '2024-06-04', '2024-06-28', 'Online Payment', '早餐預訂', 'room4'),
(41, '黃家柔', '921211amolly@gmail.com', '0103023123', '2024-06-20', '2024-07-05', 'Online Payment', '客房清潔', 'room4'),
(42, '黃家柔', '921211amolly@gmail.com', '0103023123', '2024-06-12', '2024-06-21', 'Online Payment', '早餐預訂', 'room3'),
(43, '黃家柔', '921211amolly@gmail.com', '0103023123', '2024-06-12', '2024-06-26', 'Online Payment', '客房清潔', 'room2'),
(44, '陳姿吟', 'a1113371@mail.nuk.edu.tw', '0979709773', '2024-06-13', '2024-06-30', 'Online Payment', '客房清潔', 'room1');

--
-- 觸發器 `bookings`
--
DELIMITER $$
CREATE TRIGGER `after_booking_insert` AFTER INSERT ON `bookings` FOR EACH ROW BEGIN
    DECLARE roomTypeID INT;

    IF NEW.roomtype = '標準舒適房' THEN
        SET roomTypeID = 1;
    ELSEIF NEW.roomtype = '家庭豪華房' THEN
        SET roomTypeID = 2;
    ELSEIF NEW.roomtype = '寵物友善房' THEN
        SET roomTypeID = 3;
    ELSEIF NEW.roomtype = '尊榮套房' THEN
        SET roomTypeID = 4;
    END IF;

    UPDATE rooms
    SET status = 'booked'
    WHERE id = NEW.roomtype AND type = roomTypeID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `manager`
--

INSERT INTO `manager` (`id`, `name`, `password`) VALUES
(1, 'jiarou', 'a1113369'),
(2, '30bzzzz', 'a1113371');

-- --------------------------------------------------------

--
-- 資料表結構 `room1`
--

CREATE TABLE `room1` (
  `id` varchar(10) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `room1`
--

INSERT INTO `room1` (`id`, `roomtype`, `price`) VALUES
('A1', '舒適標準房', 1000),
('A2', '舒適標準房', 1000),
('A3', '舒適標準房', 1000),
('A4', '舒適標準房', 1000),
('B1', '家庭豪華房', 3000),
('B2', '家庭豪華房', 3000),
('B3', '家庭豪華房', 3000),
('B4', '家庭豪華房', 3000),
('C1', '寵物友善房', 5000),
('C2', '寵物友善房', 5000),
('C3', '寵物友善房', 5000),
('C4', '寵物友善房', 5000),
('D1', '尊榮套房', 10000),
('D2', '尊榮套房', 10000),
('D3', '尊榮套房', 10000),
('D4', '尊榮套房', 10000);

-- --------------------------------------------------------

--
-- 資料表結構 `room2`
--

CREATE TABLE `room2` (
  `id` varchar(10) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `rooms`
--

INSERT INTO `rooms` (`id`, `type`, `price`, `status`, `description`) VALUES
(101, '舒適標準房', 1000.00, '可預訂', NULL),
(102, '舒適標準房', 1000.00, '可預訂', NULL),
(103, '舒適標準房', 1000.00, '可預訂', NULL),
(104, '舒適標準房', 1000.00, '可預訂', NULL),
(105, '舒適標準房', 1000.00, '可預訂', NULL),
(106, '家庭豪華房', 3000.00, '可預訂', NULL),
(107, '家庭豪華房', 3000.00, '可預訂', NULL),
(108, '家庭豪華房', 3000.00, '可預訂', NULL),
(109, '家庭豪華房', 3000.00, '可預訂', NULL),
(110, '家庭豪華房', 3000.00, '可預訂', NULL),
(111, '寵物友善房', 5000.00, '可預訂', NULL),
(112, '寵物友善房', 5000.00, '可預訂', NULL),
(113, '寵物友善房', 5000.00, '可預訂', NULL),
(114, '寵物友善房', 5000.00, '可預訂', NULL),
(115, '寵物友善房', 5000.00, '可預訂', NULL),
(116, '尊榮套房', 10000.00, '可預訂', NULL),
(117, '尊榮套房', 10000.00, '可預訂', NULL),
(118, '尊榮套房', 10000.00, '可預訂', NULL),
(119, '尊榮套房', 10000.00, '可預訂', NULL),
(120, '尊榮套房', 10000.00, '可預訂', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
