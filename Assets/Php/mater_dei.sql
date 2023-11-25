-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 03:03 PM
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
-- Database: `mater_dei`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `names`, `password`, `role`) VALUES
(1, 'Yves', 'none', 'Data#44', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `card_id` varchar(255) NOT NULL DEFAULT 'Ntayo',
  `balance` int(10) NOT NULL DEFAULT 0,
  `class` varchar(10) NOT NULL,
  `names` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `card_id`, `balance`, `class`, `names`, `password`, `gender`) VALUES
(1, 'Ntayo', 0, 'S6MP', 'Yves', '$2y$10$jRi5EpDLkmrLoqmml60oI.4bRNdZYxTqNPXM7aESgFeVKpJ/Wqk8m', 'Male'),
(2, 'Ntayo', 2700, 'S6MPC', 'Patrick', '$2y$10$tDZT5NiiPBwCeN6KbG9eUOQjZnA0.tXYqoIP4Vfde2zWzGVx5MUXq', 'Female'),
(3, 'Ntayo', 100000, 'S6MPC', 'Dufitimana Souvenir', '$2y$10$KC9pkPIqw3uHEpILAdjLOeYmXQ75abUXDk6oteFbIw8PKRDsVRH6a', 'Male'),
(4, 'Ntayo', 990, 'S6MPC', 'Gasana', '$2y$10$HNJlOkwjWTPHc.TspWUOMu.cRfDWgkBrX6HSH.D6Q8AskUK0ZOAQi', 'Male'),
(5, 'Ntayo', 0, 'S5MP', 'Axxello', '$2y$10$6069RD6s8aroYmHo39hD5OK/bgqbX71fFLoLBy.nX.KxmQsc4Z0Ra', 'Male'),
(6, 'Ntayo', 0, 'S5MCE', 'Patrick', '$2y$10$I8PBzSnZWqx2H3iDFjiThePHVx8NJ.nXWvZbNvMFITWDWf.vV455i', 'Female'),
(7, 'Ntayo', 0, 'S6MPC', 'Yves', '$2y$10$jUyf1yu.lLRnWlROB6kMqeTOyjacSnit8F.vOEA0cDiARM0Q2tAqG', 'Male'),
(8, 'Ntayo', 0, '1234', 'Axelle', '$2y$10$lvV2em7HuZBFJQx9.WyJdOEoyc8f1miRbJyXtYkWA0tm3Ch3pi1zu', 'Male'),
(9, 'Ntayo', 0, 'ew', 'yvesfg', '$2y$10$08hwC6sf7UdrB4fo6bYgNufkUyPnqfbbr1feITSDwsLu/CWBqUjOO', 'Male'),
(10, 'Ntayo', 0, 'S4MCE', 'Patrick', '$2y$10$4F/gi455/0NZH.rX4xJFH.SemvqokoHCN3mpfZ/dGlVnONBk9ZRNi', 'Male'),
(11, 'Ntayo', 0, 'S6MCE', 'Patrick', '$2y$10$lhdKg5do6tronKkpNEqSS.y2B0kLtysBBxH.Z1x7ik/KVdo0ZX/X2', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(20) NOT NULL,
  `student` varchar(250) NOT NULL,
  `student_code` int(20) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `activity` varchar(250) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `class` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `student`, `student_code`, `agent`, `activity`, `amount`, `date`, `class`) VALUES
(1, 'Patrick', 2, 'Yves', 'kubikuza', 1000, '2023-11-25 13:08:03', 'S6MPC'),
(2, 'Patrick', 2, 'Yves', 'kubikuza', 100, '2023-11-25 13:14:39', 'S6MPC'),
(3, 'Patrick', 2, 'Yves', 'kubikuza', 50, '2023-11-25 13:15:24', 'S6MPC'),
(4, 'Patrick', 2, 'Yves', 'kubikuza', 50, '2023-11-25 13:28:30', 'S6MPC'),
(5, 'Patrick', 2, 'Yves', 'kubikuza', 20, '2023-11-25 13:55:30', 'S6MPC'),
(6, 'Patrick', 2, 'Yves', 'kubikuza', 80, '2023-11-25 13:56:10', 'S6MPC'),
(7, 'Gasana', 4, 'Yves', 'kubikuza', 1000, '2023-11-25 14:00:07', 'S6MPC'),
(8, 'Gasana', 4, 'Yves', 'kubikuza', 10, '2023-11-25 14:00:22', 'S6MPC'),
(9, 'Patrick', 2, 'Yves', 'kubitsa', 1000, '2023-11-25 04:39:39', 'S6MPC'),
(10, 'Patrick', 2, 'Yves', 'kubitsa', 1000, '2023-11-25 04:40:12', 'S6MPC'),
(11, 'Patrick', 2, 'Yves', 'kubikuza', 1000, '2023-11-25 04:40:26', 'S6MPC'),
(12, 'Patrick', 2, 'Yves', 'kubitsa', 1000, '2023-11-25 04:41:48', 'S6MPC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
