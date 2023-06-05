-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waad`
--

-- --------------------------------------------------------

--
-- Table structure for table `waad-project`
--

CREATE TABLE `waad-project` (
  `id` int(11) NOT NULL,
  `name` varchar(231) NOT NULL,
  `email` varchar(454) NOT NULL,
  `pass` varchar(435) NOT NULL,
  `cpass` varchar(435) NOT NULL,
  `mob` varchar(345) NOT NULL,
  `gender` varchar(465) NOT NULL,
  `city` varchar(253) NOT NULL,
  `dob` varchar(434) NOT NULL,
  `latitude` varchar(232) NOT NULL,
  `longitude` varchar(264) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waad-project`
--

INSERT INTO `waad-project` (`id`, `name`, `email`, `pass`, `cpass`, `mob`, `gender`, `city`, `dob`, `latitude`, `longitude`, `image`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', ''),
(2, 'jay', 'jay875@gmail.com', 'lololo', 'lololo', '9875424223', 'male', 'surat', '25/9/2004', '21.1702', '72.8311', ''),
(3, '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', ''),
(5, 'monika', 'monika0119@gmail.com', '123123456', '123123456', '7896542351', 'female', 'mubai', '5/6/1996', '21.1702', '72.8311', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waad-project`
--
ALTER TABLE `waad-project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waad-project`
--
ALTER TABLE `waad-project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
