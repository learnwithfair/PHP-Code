-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 11:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info_table`
--

CREATE TABLE `student_info_table` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `Subject` text NOT NULL,
  `Skill` text NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Comment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info_table`
--

INSERT INTO `student_info_table` (`ID`, `Name`, `Age`, `Mobile`, `Password`, `Gmail`, `Gender`, `Subject`, `Skill`, `Image`, `Comment`) VALUES
(13, 'MD RAHATUL RABBI', 22, 1790224950, '323', 'rahatul.ice.09.pust@gmail.com', 'Male', 'EEE', 'None.', 'uploads/blog-thumb-06.jpg', 'sdfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info_table`
--
ALTER TABLE `student_info_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info_table`
--
ALTER TABLE `student_info_table`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
