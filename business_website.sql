-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2024 at 09:11 PM
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
-- Database: `business_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id` int(32) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `house_number` int(10) NOT NULL,
  `province` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subscription` tinyint(1) NOT NULL,
  `question` text NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`id`, `first_name`, `last_name`, `dob`, `phone_number`, `email_address`, `home_address`, `house_number`, `province`, `password`, `subscription`, `question`, `gender`) VALUES
(16, 'Sujan', 'Thapa', '2001-05-15', '4377771733', 'sujanthapamagar960@gmail.com', '111 Sandown AveToronto, ON M1N 3W6', 111, 'ontario', 'SujanThapa@123sujan', 1, 'What is your idol?', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `first_name`, `last_name`) VALUES
(1, 'Sujan', 'Thapa'),
(2, 'Sujan', 'Thapa');

-- --------------------------------------------------------

--
-- Table structure for table `registeredUser`
--

CREATE TABLE `registeredUser` (
  `Email` varchar(32) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeredUser`
--

INSERT INTO `registeredUser` (`Email`, `Password`) VALUES
('sujanthapamagar960@gmail.com', '$2y$10$WuKdnZEJs4sqs8ZkTI1MrOs022BeZPoxPronRRtrOHkZzbxBgCfgy'),
('sujanthapamagar960@gmail.com', '$2y$10$l75uI9ooly9I8dtZ9j379eXPrwwnPidCXkuMS7G.pyVhXYvDz1s2S'),
('sujanthapamr960@gmail.com', '$2y$10$2qcxG9.9O8rWRFYp86Wku.GcLVhGemXMPoIan/sNcaTWfmehWBr7e'),
('sujanthap60@gmail.com', '$2y$10$Xl8O6KQrRkAfOQg44vprFOHtGKNyFblAT4lNTae0oFJGRx0Sp7l7.'),
('sujan@gmail.com', '$2y$10$8snxomTmDkarA8eed2NmOO5pFNyOQcxjTsrqF47H/bEAIRSsuCo7C'),
('st@gmail.com', 'thapa'),
('sujthapa@gmail.com', '$2y$10$gCBBDsbdpaK4LOznJQTwoOyznDh.D4UjLElmWG2hwoS75I5goWZY2'),
('swastika@gmail.com', '$2y$10$zfJX45T3sTHp/rwTf2gJHuwsIgC73xdwzKBO9zx7t2jBAMGqXi4R2'),
('swasu@mail.com', '$2y$10$2yYJS59Tm/fOyhf0Tm/2AegNcHaVWL1UpXEuDQQBd9Cp3ZJSGJwpe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
