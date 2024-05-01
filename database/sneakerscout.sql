-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneakerscout`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `password`) VALUES
(2, 'Yasir', 'yasir626@gmail.com', '25d55ad283aa400a'),
(3, 'yasir2', 'yasir626@gmail.com', '25d55ad283aa400a'),
(4, 'yasir3', 'yasir626@gmail.com', '25d55ad283aa400a'),
(5, 'yasir3', 'yasir626@gmail.com', '25d55ad283aa400a'),
(6, 'yasir4', 'yasir@gmail.com', '25d55ad283aa400a'),
(7, 'Muhamad Yasir Buana Dyva', 'yasir99@gmail.com', '$2y$10$vE6RVm4o/'),
(8, 'hakuna matata', 'hakuna@gmail.com', '$2y$10$hjy3zSMM9DR3xzi9wHLzgOaEOFdPX7ivUOhBASJfmrOBvqvzB5gp2'),
(9, 'adit', 'adit@mail.com', '$2y$10$bjdmc7Jw9HVPTSbG.AmGhOgV8B.zkw309TaZ5r7jBIIFdkQFFPJ1q'),
(10, 'irfan', 'irfan@mail.com', '$2y$10$I/oENpJt/87nmsSyC3CJYu4wjd41rO1NScv4eIVSJH49Ow7slY46u');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
