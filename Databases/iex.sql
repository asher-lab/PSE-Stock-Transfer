/* asher-lab*/

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 01:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iex`
--

-- --------------------------------------------------------

--
-- Table structure for table `moneytrans`
--

CREATE TABLE `moneytrans` (
  `nullq` int(11) NOT NULL,
  `userId` varchar(50) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `transDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moneytrans`
--

INSERT INTO `moneytrans` (`nullq`, `userId`, `transType`, `amount`, `transDate`) VALUES
(0, '11', 'D', 5000, ''),
(0, '12', 'D', 5000, ''),
(0, '12', 'P', 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `userId` varchar(50) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `transDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`userId`, `symbol`, `qty`, `transDate`) VALUES
('12', 'AB', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `stocktrans`
--

CREATE TABLE `stocktrans` (
  `userId` varchar(50) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `totalCost` int(11) NOT NULL,
  `indivCost` int(11) NOT NULL,
  `transDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocktrans`
--

INSERT INTO `stocktrans` (`userId`, `symbol`, `qty`, `transType`, `totalCost`, `indivCost`, `transDate`) VALUES
('12', 'AB', 1, 'B', 45, 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `userbalance`
--

CREATE TABLE `userbalance` (
  `userId` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL,
  `transType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbalance`
--

INSERT INTO `userbalance` (`userId`, `balance`, `transType`) VALUES
('', 5000, ''),
('10', 5000, ''),
('11', 5000, ''),
('12', 4955, ''),
('5', 5000, ''),
('6', 5000, ''),
('7', 5000, ''),
('8', 5000, ''),
('9', 5000, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `pwd` char(60) NOT NULL,
  `moneytrans` varchar(50) NOT NULL,
  `primeId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `firstName`, `lastName`, `pwd`, `moneytrans`, `primeId`) VALUES
('', 'asher01000001@gmail.com', 'asher', 'manangan', '$2y$10$KanC3p2K5IRKsrJR7qPaSuQBlmEJHcbCs4KbtfZUdY2w4llU/7K/.', '', 1),
('', 'a@a.com', 'a', 'a', '$2y$10$7EYRNGjrYbWTZ1u/YwwO0.kc3L.hz7nZquuG0UB4PdKnXZFySwmtS', '', 2),
('', 'd@a.com', 'd', 'd', '$2y$10$srlE4nU4uTVmmmtlYaS4GeNX2S/iv4YrgSZVZSXpmMz7rtAYeULe.', '', 3),
('', 'x@x.com', 'x', 'x', '$2y$10$QD68npbsmOOxa7tGb8adz.wF5oIYEhfUfkXI6jYVloN4qTeXHmvxG', '', 4),
('', 'rx@x.com', 'r', 'r', '$2y$10$ls9cTazoQSzuwdeq5pyr/eMw3Uum5.As97z8ie87b.KQiT11D8g2G', '', 5),
('', 'z@z.com', 'z', 'z', '$2y$10$imiT2tD87oSMjnJ808mPtOx5HHVnIhoqV4dTVgvHBjIlfCb4tQf5a', '', 6),
('', 'za@za.com', 'za', 'za', '$2y$10$PXvcQSJd95jZ2/VrEGf2g.7VLWu92SfG9COot7BDCDrMNTk5f2dDC', '', 7),
('', 'xs@xs.com', 'xs', 'xs', '$2y$10$i.uZTd90tgG4UBjr/Z61OuQTYEKB0voB2DOYDjdXn.Eo5uhTPRUEq', '', 8),
('', 'v@v.com', 'v', 'v', '$2y$10$NauztSuAnkJjzJvLAm4y5uxNYD4BVMD0jR1BvK/W2aWNbvvbIJslu', '', 9),
('', 'f@f.com', 'f', 'f', '$2y$10$JoNU.rWRfCpEPHViIMDDoOHPXtL1junb5XaCQqyVoLVt9OuKJrtzK', '', 10),
('', 'vf@f.com', 'fvc', 'fcvc', '$2y$10$EYEs5wxLxfskePU.H.rVJ.uXsJx23H3ArDG5RCcvsKRQTq93/tx7e', '', 11),
('', 'we@we.com', 'we', 'we', '$2y$10$EALywwMEHxe83Y.Oq67ID.b5Dmt5tDka7flV1R8TLXRg8zuFM2gKC', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userbalance`
--
ALTER TABLE `userbalance`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`primeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `primeId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
