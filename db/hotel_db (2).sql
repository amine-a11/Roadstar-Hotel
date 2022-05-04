-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2022 at 09:20 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reservation_id` int NOT NULL,
  PRIMARY KEY (`bill_id`),
  KEY `pk2` (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `price`, `date`, `reservation_id`) VALUES
(13, 2100, '2022-05-04 16:59:09', 28),
(14, 1800, '2022-05-04 17:00:52', 29),
(15, 500, '2022-05-04 17:03:01', 30),
(16, 2000, '2022-05-04 17:16:14', 31),
(17, 5500, '2022-05-04 17:17:23', 32),
(18, 1000, '2022-05-04 17:18:40', 33),
(19, 2700, '2022-05-04 17:19:38', 34),
(20, 6900, '2022-05-04 17:20:36', 35),
(21, 4200, '2022-05-04 17:22:42', 36),
(22, 2400, '2022-05-04 17:24:10', 37),
(23, 12000, '2022-05-04 17:27:10', 38),
(24, 2000, '2022-05-04 17:28:53', 39),
(25, 400, '2022-05-04 17:30:51', 40),
(26, 3500, '2022-05-04 17:32:05', 41);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id_complaint` int NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `id_user` int NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_complaint`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `nb_of_adult` int NOT NULL,
  `nb_of_children` int NOT NULL,
  `nb_of_rooms` int NOT NULL,
  `user_id` int NOT NULL,
  `room_nb` int NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `pk1` (`user_id`),
  KEY `room_nb` (`room_nb`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `checkin_date`, `checkout_date`, `nb_of_adult`, `nb_of_children`, `nb_of_rooms`, `user_id`, `room_nb`) VALUES
(28, '2021-11-01', '2021-11-08', 2, 1, 0, 69, 11),
(29, '2021-11-03', '2021-11-12', 2, 0, 0, 70, 2),
(30, '2021-11-14', '2021-11-19', 1, 0, 0, 77, 1),
(31, '2021-12-05', '2021-12-15', 2, 0, 0, 71, 2),
(32, '2021-12-22', '2022-01-02', 4, 0, 0, 72, 12),
(33, '2021-12-14', '2021-12-24', 1, 0, 0, 73, 1),
(34, '2021-12-28', '2022-01-06', 2, 0, 0, 74, 3),
(35, '2021-12-12', '2022-01-04', 4, 0, 0, 75, 13),
(36, '2021-12-22', '2022-01-05', 2, 0, 0, 76, 14),
(37, '2021-12-14', '2021-12-22', 2, 2, 0, 78, 16),
(38, '2022-01-08', '2022-02-01', 4, 0, 0, 69, 12),
(39, '2022-01-19', '2022-01-29', 1, 0, 0, 79, 15),
(40, '2022-02-08', '2022-02-12', 1, 0, 0, 73, 1),
(41, '2022-02-14', '2022-02-21', 4, 1, 0, 74, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_nb` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cost_per_night` int NOT NULL,
  `view` varchar(100) NOT NULL,
  `occupancy` int NOT NULL,
  PRIMARY KEY (`room_nb`),
  KEY `room_type` (`room_type`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_nb`, `room_type`, `status`, `cost_per_night`, `view`, `occupancy`) VALUES
(1, 'single', 'available', 100, 'Montaines', 1),
(2, 'double', 'available', 200, 'Waterfront', 2),
(3, 'double', 'available', 300, 'Mountain', 2),
(4, 'double-double', 'available', 500, 'Mountain', 4),
(11, 'triple', 'available', 300, 'waterfont', 3),
(12, 'double-double', 'available', 500, 'montains', 4),
(13, 'quad', 'available', 300, 'montains', 4),
(14, 'double', 'available', 300, 'montains', 2),
(15, 'single', 'available', 200, 'montains', 1),
(16, 'twin', 'available', 300, 'waterfont', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

DROP TABLE IF EXISTS `room_type`;
CREATE TABLE IF NOT EXISTS `room_type` (
  `type` varchar(100) NOT NULL,
  `occupancy` int NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`type`, `occupancy`) VALUES
('double', 2),
('double-double', 4),
('quad', 4),
('single', 1),
('triple', 3),
('twin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` int NOT NULL,
  `phone_number` bigint NOT NULL,
  `age` int NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sexe` char(1) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `country`, `city`, `email`, `address`, `zipcode`, `phone_number`, `age`, `password`, `sexe`, `role`) VALUES
(34, 'admin', 'admin', 'tunisia', 'admin city', 'admin@gmail.com', 'admin address', 1234, 12345678, 100, '$2y$10$SqM63rJf0whXhoi20Aue4O8yoFVaxPhYSodiQTo9YtEgHE0.c.mNW', 'M', 'admin'),
(69, 'Elon', 'Musk', 'United States of America', 'washington', 'elon@musk.com', '1 rue tesla', 1234, 123456789, 50, '$2y$10$ntvXGvsmErbOf6BAdeFlGu2tORZL00BMDtGzTmzVFveS68pVodlZG', 'M', 'client'),
(70, 'jeff', 'bezos', 'United States of America', 'washington', 'jeff@bezos.com', '1 rue amazon', 12345, 12783123, 58, '$2y$10$aHcreCIq9.8nyG8pfFgp2eGo8TRToyd/9X0s7cdhsY1tqwtIv.Y8u', 'M', 'client'),
(71, 'Mark', 'Zuckerberg', 'United States of America', 'washington', 'mark@zuckerberg.com', '1 rue facebook', 1234, 18723, 37, '$2y$10$f1tn6sNPuAMvHMv4hGefJedjYl7WrZRvHM3I9hlAL4suVfgqYQW1a', 'M', 'client'),
(72, 'Bill', 'Gates', 'United Kingdom', 'washington', 'bill@gates.com', '1 rue microsoft', 3281, 23782083, 66, '$2y$10$LZyANAZmLazc6x9lmvFtM.WfS0u7V4/KrrHtv6yNgc/7PoNqQANwS', 'M', 'client'),
(73, 'Gennady', 'Korotkevich', 'Russia', 'russia', 'gennady@korotkevich.com', '1 rue codeforces', 1212, 91823791287, 27, '$2y$10$1zf0zGxwc/s7q.iDoJRPgu5s5X/cakd0LP/70VEf72TdTKr463cMK', 'M', 'client'),
(74, 'nour', 'houda', 'Egypt', 'egypt', 'nour@houda.com', '1 rue something', 2131, 12983712, 20, '$2y$10$MEbqM0OKnL1OxipmsRvMY.5fTrAlmoMmdh9RUbTQhxy.0KPoKpuCS', 'F', 'client'),
(75, 'yosr', 'yosr', 'Tunisia', 'ariana', 'yosr@yosr.com', '1 rue ariana', 2131, 124241, 21, '$2y$10$/qVQbCp8LFlgPqAZaa80AusMlG3uglQyXUcmvra/seYvzP07qGt.6', 'F', 'client'),
(76, 'mariem', 'mariem', 'Australia', 'sydney', 'mariem@mariem.com', '1 rue sydney', 12312, 182937, 21, '$2y$10$tIzDLCMFhXJDOj2qIfg71egWWw29We5T24qxYQoJpyY22fFKshbma', 'F', 'client'),
(77, 'houssem', 'sbai', 'Angola', 'alogna', 'houssem@sbai.com', '1 rue rue', 1111, 1234565432, 21, NULL, 'M', 'client'),
(78, 'monji', 'monjiii', 'Afganistan', 'ariana', 'monji@monji.com', '1 rue isi', 2112, 12312313, 34, NULL, 'M', 'client'),
(79, 'sami', 'sami', 'Ireland', 'ireland', 'sami@sami.com', '1 rue ireland', 1111, 1231212, 32, NULL, 'M', 'client');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `pk2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `pk1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`room_nb`) REFERENCES `room` (`room_nb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_type`) REFERENCES `room_type` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
