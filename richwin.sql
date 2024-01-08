-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `richwin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`name`, `email`, `subject`) VALUES
('', 'duminduekanayake6@gmail.com', 'maths'),
('dumindu', 'duminduekanayake6@gmail.com', 'Abount rooms');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `Name` varchar(30) NOT NULL,
  `Room_type` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Check_in` int(10) NOT NULL,
  `Check_out` int(10) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`Name`, `Room_type`, `Email`, `NIC`, `Check_in`, `Check_out`, `Phone`) VALUES
('dumindu', 'Room category', '', '', 0, 0, 0),
('dumindu', 'Single', 'duminduekanayake6@gm', '200229303468', 2024, 2024, 719071750),
('oshada', 'Single', 'oshada32@gmail.com', '200232345465', 2023, 2024, 713227543),
('manusha', 'Single', 'manushalakshan85@gma', '200233203448', 2023, 2023, 715110503),
('Manusha ', 'Single', 'manusha@gmail.com', '200233203487', 2023, 2023, 703021001),
('vihaga', 'Single', 'vihaga32@gmail.com', '200233455669', 2024, 2024, 77889625),
('Savintha', 'Single', 'fffsavintha@gmail.co', '200511303710', 2023, 2023, 703021001),
('suddeka', 'Single', 'sudeeka@', '232545434636', 2023, 2023, 2147483647),
('savintha', 'Single', 'savintha43@', '374647585865', 2024, 2024, 0),
('Manusha ', 'Single', 'manusha@gmail.com', '54135646325', 2023, 2023, 775536038);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`NIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
