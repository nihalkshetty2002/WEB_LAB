-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 01:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblemp`
--

CREATE TABLE `tblemp` (
  `empno` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemp`
--

INSERT INTO `tblemp` (`empno`, `ename`, `designation`, `salary`) VALUES
(101, 'Sujay', 'Cleark', 45000),
(102, 'Dhinesh', 'Cleark', 50000),
(103, 'Chirag', 'Manager', 75000),
(104, 'Bharath', 'Cleark', 47000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemp`
--
ALTER TABLE `tblemp`
  ADD PRIMARY KEY (`empno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
