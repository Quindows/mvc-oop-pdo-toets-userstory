-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2023 at 11:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaar2-be-mvc-toets-p2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mankementen`
--

DROP TABLE IF EXISTS `mankementen`;
CREATE TABLE IF NOT EXISTS `mankementen` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `AutoId` int NOT NULL,
  `Datum` date NOT NULL,
  `Mankement` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_mankement_auto` (`AutoId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mankementen`
--

INSERT INTO `mankementen` (`Id`, `AutoId`, `Datum`, `Mankement`) VALUES
(1, 4, '2023-01-04', 'profiel rechterband minder dan 2mm'),
(2, 2, '2023-01-02', 'rechter achterlicht kapot'),
(3, 1, '2023-01-02', 'Spiegel links afgebroken'),
(4, 2, '2023-01-06', 'Bumper rechtsachter ingedeukt'),
(5, 2, '2023-01-08', 'Radio kapot'),
(7, 2, '0000-00-00', 'test'),
(8, 2, '0000-00-00', 'test2'),
(9, 2, '0000-00-00', 'test2'),
(10, 2, '0000-00-00', 'test3'),
(11, 2, '0000-00-00', 'test3'),
(12, 2, '0000-00-00', 'test3'),
(13, 2, '0000-00-00', 'test3'),
(14, 2, '0000-00-00', 'test3'),
(15, 2, '0000-00-00', 'sdsdf'),
(16, 2, '0000-00-00', 'sdsdf'),
(17, 2, '0000-00-00', 'dfd'),
(19, 2, '0000-00-00', 'test');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mankementen`
--
ALTER TABLE `mankementen`
  ADD CONSTRAINT `FK_mankement_auto` FOREIGN KEY (`AutoId`) REFERENCES `auto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
