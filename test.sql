-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 11:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `telefono`, `fecha`) VALUES
(8, 'sdfsdf', 'sdf', 'sdf', '2017-12-04'),
(9, 'asd', 'asd', 'asd', '2017-12-04'),
(10, 'asd', 'asd', 'asd', '2017-12-04'),
(11, 'asd', 'asd', 'asd', '2017-12-04'),
(12, 'sdfsdfdf', 'gfd', 'dfgdfg', '2017-12-18'),
(14, 'hjg', 'g', 'sdf', '2017-12-18'),
(15, 'asdasf', 'dfg', 'dfg', '2017-12-20'),
(16, 'fdsfs', 'dfasdasd', 'sdfsdf', '2017-12-11'),
(17, 'asdaf', 'dsfsdf', 'sdgsdf', '2017-12-05'),
(18, 'dfg', 'dfg', 'dfg', '2017-12-11'),
(19, 'sdfsdfg', 'sdasd', 'dfgdfg', '2017-12-18'),
(20, 'asdasd', 'fdesf', 'sdfsdf', '2017-12-18'),
(21, 'asdasdxx', 'fdesf', 'sdfsdf', '2017-12-18'),
(22, 'sdf', 'sdfsdf', 'sdfsdf', '2017-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
