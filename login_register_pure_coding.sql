-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register_pure_coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `bony`
--

CREATE TABLE `bony` (
  `ID` int(11) NOT NULL,
  `DATE_` date DEFAULT NULL,
  `SLEEP_TIME` time DEFAULT NULL,
  `WAKEUP_TIME` time DEFAULT NULL,
  `SLEEP_DURATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bony`
--

INSERT INTO `bony` (`ID`, `DATE_`, `SLEEP_TIME`, `WAKEUP_TIME`, `SLEEP_DURATION`) VALUES
(1, '2021-06-11', '20:30:00', '08:30:00', '10 hours'),
(2, '2021-06-12', '20:54:00', '06:54:00', '10 hours'),
(3, '2021-06-18', '21:57:00', '09:57:00', '14 hours'),
(4, '2021-06-24', '19:01:00', '19:04:00', '4 hours 5 mins');

-- --------------------------------------------------------

--
-- Table structure for table `kiran`
--

CREATE TABLE `kiran` (
  `ID` int(11) NOT NULL,
  `DATE_` date DEFAULT NULL,
  `SLEEP_TIME` time DEFAULT NULL,
  `WAKEUP_TIME` time DEFAULT NULL,
  `SLEEP_DURATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiran`
--

INSERT INTO `kiran` (`ID`, `DATE_`, `SLEEP_TIME`, `WAKEUP_TIME`, `SLEEP_DURATION`) VALUES
(1, '0000-00-00', '00:00:00', '00:00:00', ''),
(2, '2021-06-05', '14:16:00', '14:20:00', '4 hours 5 mins'),
(3, '2021-06-05', '14:16:00', '14:20:00', '4 hours 5 mins'),
(4, '2021-06-05', '14:16:00', '14:20:00', '4 hours 5 mins'),
(5, '2021-06-05', '14:16:00', '14:20:00', '4 hours 5 mins'),
(6, '2021-06-02', '14:22:00', '14:28:00', '4 hours 5 mins'),
(7, '2021-06-12', '23:43:00', '07:43:00', '8 hours');

-- --------------------------------------------------------

--
-- Table structure for table `prokash`
--

CREATE TABLE `prokash` (
  `ID` int(11) NOT NULL,
  `DATE_` date DEFAULT NULL,
  `SLEEP_TIME` time DEFAULT NULL,
  `WAKEUP_TIME` time DEFAULT NULL,
  `SLEEP_DURATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prokash`
--

INSERT INTO `prokash` (`ID`, `DATE_`, `SLEEP_TIME`, `WAKEUP_TIME`, `SLEEP_DURATION`) VALUES
(1, '2021-06-14', '22:00:00', '03:00:00', '15hours'),
(2, '2021-06-14', '22:00:00', '03:00:00', '10 hours'),
(3, '2021-06-10', '21:09:00', '00:07:00', '8 hours');

-- --------------------------------------------------------

--
-- Table structure for table `suman`
--

CREATE TABLE `suman` (
  `ID` int(11) NOT NULL,
  `DATE_` date DEFAULT NULL,
  `SLEEP_TIME` time DEFAULT NULL,
  `WAKEUP_TIME` time DEFAULT NULL,
  `SLEEP_DURATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suman`
--

INSERT INTO `suman` (`ID`, `DATE_`, `SLEEP_TIME`, `WAKEUP_TIME`, `SLEEP_DURATION`) VALUES
(1, '2021-06-12', '18:12:00', '18:16:00', '4 hours 5 mins'),
(2, '2021-06-12', '18:12:00', '18:16:00', '4 hours 5 mins'),
(3, '2021-06-20', '18:12:00', '00:10:00', '8 hours 5 mins');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'suman', 'sumanshadangi@gmail.com', '32273fb4ef0c6749d9f571a6f077547d'),
(2, 'kiran', 'sks43325@gmail.com', 'b1a5b64256e27fa5ae76d62b95209ab3'),
(3, 'chunchun', 'chunchun@gmail.com', 'b5573e24c00d331dff86f796714ba17b'),
(12, 'ram', 'ram@gmail.com', '4641999a7679fcaef2df0e26d11e3c72'),
(13, 'SHAM', 'SHAM@gmail.com', 'c086562f4653a6d99eb3273d94138c97'),
(14, 'kiran', 'kiran@gmail.com', 'b1a5b64256e27fa5ae76d62b95209ab3'),
(15, 'suman', 'suman2001@gmail.com', '1533c67e5e70ae7439a9aa993d6a3393'),
(16, 'varun', 'varun@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Astha prabha shadangi', 'astha@gmail.com', '91bbc32e8590ecc8765d88330bea92b6'),
(18, 'Astha', 'astha1@gmail.com', '853d16eb4c5cfd2b7a3dbe990c1392ec'),
(19, 'bony', 'bony@gmail.com', '853d16eb4c5cfd2b7a3dbe990c1392ec'),
(20, 'payal', 'payal@gmail.com', '64d8a47c30f84958c2cc2181e9382f35'),
(21, 'prokash', 'prokash@gmail.com', '8529c20e67d39e0bf4ab987acbafc8f2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bony`
--
ALTER TABLE `bony`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kiran`
--
ALTER TABLE `kiran`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prokash`
--
ALTER TABLE `prokash`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suman`
--
ALTER TABLE `suman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bony`
--
ALTER TABLE `bony`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kiran`
--
ALTER TABLE `kiran`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prokash`
--
ALTER TABLE `prokash`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suman`
--
ALTER TABLE `suman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
