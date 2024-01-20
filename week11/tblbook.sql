-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 01:25 PM
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
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `accno` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `authors` varchar(30) NOT NULL,
  `edition` int(11) NOT NULL,
  `publisher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`accno`, `title`, `authors`, `edition`, `publisher`) VALUES
(111, 'Fundamentals of Web Developmen', ' Randy Connolly, Ricardo Hoar', 1, 'Pearson'),
(121, 'Professional JavaScript for We', 'Nicholas C Zakas', 3, 'Wrox/Wiley India,  2012'),
(131, 'PHP and MySQL Web Development', 'Luke Welling, Laura Thomson', 5, 'Pearson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`accno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
