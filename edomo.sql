-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 10:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
drop database if exists Edomo;
create database Edomo;
use Edomo;
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventType` varchar(50) DEFAULT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTime` time DEFAULT NULL,
  `eventImage` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipeNo` int(11) NOT NULL,
  `recipeName` varchar(50) DEFAULT NULL,
  `recipeDescription` varchar(225) DEFAULT NULL,
  `recipeImage` blob DEFAULT NULL,
  `video` blob DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `cookingInstructions` varchar(225) DEFAULT NULL,
  `contributorName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userIndex` int(11) NOT NULL,
  `userEmail` varchar(225) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `userPassword` varchar(100) DEFAULT NULL,
  `typeIndex` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userIndex`, `userEmail`, `fname`, `lname`, `userPassword`, `typeIndex`) VALUES
(5, 'charlie@gmail.com', 'Charlie', '', '123', 3),
(6, 'Nadnad@yahoo.com', 'Nadin', '', '123', 3),
(7, 'annVaneu@yahoo.com', 'Annie', '', '$2y$10$8XRjZWnAYWkUrGjfei3w1uDFa6w2He8.awIILyqnVCSAK2AHDev5.', 3),
(8, 'delasi@gmail.com', 'Delasi', '', '$2y$10$Jypqiw.wS4XBPxBAe/wRQO6nvIWzYOKSQdqC/cxcAS4yIv3bghLNm', 1),
(9, 'nadia@gmail.com', 'Nadia', '', '$2y$10$d883gHUCEMavcfsIGCfJzua03j71Efq//Rgplg3Ac9kdCtoLc8Ru.', 1),
(10, 'ann@gmail.com', 'Ann-Vannessa', '', '$2y$10$lU5VpNORawVbBMoIhH/N3.GdGc0VsF/tsEiSYBmXrIT3vqRq.nSTq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `typeIndex` int(11) NOT NULL,
  `typeName` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`typeIndex`, `typeName`) VALUES
(1, 'Admin'),
(2, 'Content_Creator'),
(3, 'Customer'),
(4, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipeNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userIndex`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD KEY `typeIndex` (`typeIndex`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`typeIndex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipeNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userIndex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`typeIndex`) REFERENCES `usertype` (`typeIndex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
