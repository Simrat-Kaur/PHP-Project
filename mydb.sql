-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('Shivam Pandey', 'shivamguys@gmail.com', 'aa', 'aa'),
('SImrat', 'simrat@gmail.com', 'hello', 'Hi,my name is simrat');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`name`, `address`, `email`, `state`, `city`, `zip`) VALUES
('Simrat Kaur', 'Lovely Professional University', 'simrat.kaur.takhar@gmail.com', 'Punjab', 'Phagwara', 144411),
('Harman', 'Preet Nagar', 'harman@gmail.com', 'Punjab', 'Jalandhar', 144032),
('Rohit', 'New Model Town', 'Rohit@gmail.com', 'Punjab', 'Jalandhar', 144442),
('Apoorv', 'New Street', 'apoorv@gmail.com', 'Punjab', 'Jalandhar', 144444),
('Simrat', 'Sundar Nagar', 'simrat@gmail.com', 'Punjab', 'Nakodar', 144432),
('Raman', 'New Era street', 'Raman@gmail.com', 'Nakodar', 'Jalandhar', 144043);

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(13) NOT NULL,
  `price` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `name`, `quantity`, `price`) VALUES
(7, 'Patty Burger', 2, 145),
(11, 'Greek Pizza', 1, 195),
(12, 'Chile-Stuffed Cheeseburger', 2, 135);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(17, 'Simrat Kaur', 'simrat.kaur.takhar@gmail.com', 'c897747c25ef370b300046b91f1c1590'),
(18, 'Apoorv Bhatnagar', 'Apoorvbhatnagar@gmail.com', 'c897747c25ef370b300046b91f1c1590'),
(19, 'Harman', 'Harman@gmail.com', 'c897747c25ef370b300046b91f1c1590');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
