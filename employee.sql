-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2019 at 04:47 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `hiring_date` date DEFAULT NULL,
  `salary` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `dob`, `gender`, `department`, `hiring_date`, `salary`) VALUES
(4, 'sunny', '', '', '', NULL, 0),
(5, 'jyoti', '', '', '', NULL, 0),
(6, 'Name', 'DOB', 'Gender', 'Department', NULL, 1),
(7, 's', 's', 's', '', NULL, 444),
(8, 'Sunny Jha', '120199', 'male', 'it', NULL, 0),
(9, 'rajat', '2323', 'male', 'it', NULL, 0),
(10, 'Sunny Jha', 's', 'male', 'it', NULL, 0),
(11, 'Niraj Kumar', '132132', 'male', 'It', NULL, 222),
(12, 'imran', '12122', 'male', 'it', NULL, 0),
(13, 'rajat', '12131', '13131', '313131', NULL, 131),
(14, 'ram', '1222', 'male', 'it', NULL, 0),
(15, 'chetan', '222', 'male', 'it', NULL, 131),
(16, 'eee', '22323', 'male', 'it', NULL, 222),
(17, 'kaal', 'ddd', 'ddd', 'ddd', '2102-02-20', 232323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
