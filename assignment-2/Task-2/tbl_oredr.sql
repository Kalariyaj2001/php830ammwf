-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 07:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oredr`
--

CREATE TABLE `tbl_oredr` (
  `onm` int(11) NOT NULL,
  `amt` float DEFAULT NULL,
  `ode` varchar(155) DEFAULT NULL,
  `cnm` int(11) DEFAULT NULL,
  `sno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_oredr`
--

INSERT INTO `tbl_oredr` (`onm`, `amt`, `ode`, `cnm`, `sno`) VALUES
(3001, 18.7, '03/10/1994', 201, 1001),
(3002, 2000, '04/10/1994', 202, 1002),
(3003, 3000, '10/10/1994', 203, 1003),
(3004, 4000, '10/07/2005', 205, 1007);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_oredr`
--
ALTER TABLE `tbl_oredr`
  ADD PRIMARY KEY (`onm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
