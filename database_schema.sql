-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2022 at 09:31 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akritiko_cityuserstories`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) NOT NULL,
  `asauser` varchar(100) NOT NULL,
  `iwant` text NOT NULL,
  `sothat` text NOT NULL,
  `timestamp` datetime NOT NULL,
  `moderation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `asauser`, `iwant`, `sothat`, `timestamp`, `moderation`) VALUES
(1, 'πεζός', 'περισσότερα αστικά λεωφορεία', 'να μετακινούμαι ταχύτερα', '2022-06-11 21:33:36', 'no'),
(2, 'οδηγός', 'καλύτερη φροντίδα των δρόμων', 'να μην ταλαιπωρείται το αυτοκίνητό μου', '2022-06-11 22:25:45', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
