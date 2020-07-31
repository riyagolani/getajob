-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientdetails`
--

CREATE TABLE `clientdetails` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `Work` int(5) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientdetails`
--

INSERT INTO `clientdetails` (`id`, `Email`, `Name`, `Password`, `Address`, `Mobile`, `Age`, `Work`, `Role`) VALUES
(3, 'abc@abc.com', 'Riya Golani', '1234', 'Amikrupa Girls Hostel, University Circle, Mota Baz', 1234567890, 12, 2, 'Manager'),
(4, 'abc@gmail.co', 'Riya Golani', '123', 'Amikrupa Girls Hostel, University Circle, Mota Baz', 1234567891, 3, 4, 'Marketing Lead'),
(6, 'abc@a.com', 'Riya Golani', '125', 'Amikrupa Girls Hostel, University Circle, Mota Baz', 1234567891, 1, 2, ''),
(7, 'abc@gmail.com', 'Mehta Kiran', '123456', 'abc', 1234567890, 40, 6, ''),
(8, 'meet@gmail.com', 'Meet', 'abc', 'ddd', 2147483647, 15, 0, ''),
(9, 'komal@gmail.com', 'Komal', '123', 'asd', 2147483647, 40, 2, 'Marketing Lead');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientdetails`
--
ALTER TABLE `clientdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientdetails`
--
ALTER TABLE `clientdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
