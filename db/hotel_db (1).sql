-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2022 at 05:32 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `price`, `date`, `reservation_id`) VALUES
(3, 200, '2022-05-01 17:27:09', 18);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id_complaint`, `content`, `id_user`, `Date`) VALUES
(6, 'hi,the web site is so cool... by', 33, '2022-05-01 17:31:59');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `checkin_date`, `checkout_date`, `nb_of_adult`, `nb_of_children`, `nb_of_rooms`, `user_id`, `room_nb`) VALUES
(18, '2022-05-10', '2022-05-17', 2, 0, 0, 35, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_nb` int NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cost_per_night` int NOT NULL,
  `view` varchar(100) NOT NULL,
  `occupancy` int NOT NULL,
  PRIMARY KEY (`room_nb`),
  KEY `room_type` (`room_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_nb`, `room_type`, `status`, `cost_per_night`, `view`, `occupancy`) VALUES
(1, 'single', 'available', 100, 'Montaines', 1),
(2, 'double', 'not_available', 200, 'Waterfront', 2),
(3, 'double', 'available', 300, 'Mountain', 2),
(4, 'double-double', 'available', 500, 'Mountain', 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `country`, `city`, `email`, `address`, `zipcode`, `phone_number`, `age`, `password`, `sexe`, `role`) VALUES
(33, 'amine', 'hajji', 'tunisia', 'ariana', 'amine@gmail.com', '1 rue jama', 4070, 12345678, 21, '$2y$10$kh7HhScTTSnOmH7.3v61f.f8cQ1ZbdQLVKHRHNhTLdG5skwyF0kom', 'M', 'client'),
(34, 'admin', 'admin', 'tunisia', 'admin city', 'admin@gmail.com', 'admin address', 1234, 12345678, 100, '$2y$10$SqM63rJf0whXhoi20Aue4O8yoFVaxPhYSodiQTo9YtEgHE0.c.mNW', 'M', 'admin'),
(35, 'user', 'user', 'tunisia', 'user city', 'user@user.com', 'user add', 1234, 123456789, 19, NULL, 'M', 'client');

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
