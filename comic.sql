-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comic`
--

--
-- Dumping data for table `c_name`
--

INSERT INTO `c_name` (`Sl_No`, `Comic Name`, `Desci`) VALUES
(1, 'My Wife is a Demon Queen', 'Authors: Dw / Rong rong\r\nGenres: Comedy , Romance , Adventure , Fantasy , Isekai\r\nOfficial status: Ongoing\r\nSummary:\r\nListen up folks! I’m living my life with the demon queen!'),
(2, 'Release That Witch', 'A male engineer transmigrated into another world, and became a prince. This place strikingly resembles the Middle Ages of Europe, but at the same time, it seems kind of different? Witches truly exist, and they even possess magic powers! Magic powers are productive forces! Save the witches, liberate the productive forces! Open map, fight demons, break conspiracies, climb up the science and technology tree, and open the path of hardcore ‘farming’!\r\n');

--
-- Dumping data for table `my wife is a demon queen`
--

INSERT INTO `my wife is a demon queen` (`Chap_No`, `Page`) VALUES
(1, 21),
(2, 6);

--
-- Dumping data for table `release that witch`
--

INSERT INTO `release that witch` (`Chap_No`, `Page`) VALUES
(1, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
