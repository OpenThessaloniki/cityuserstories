-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 31 Μαρ 2022 στις 10:08:03
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `cityuserstories`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) NOT NULL,
  `asauser` varchar(100) NOT NULL,
  `iwant` text NOT NULL,
  `sothat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `stories`
--

INSERT INTO `stories` (`id`, `asauser`, `iwant`, `sothat`) VALUES
(14, 'πεζός', 'μεγαλύτερα πεζοδρόμια', 'να μπορώ να περπατώ πιο άνετα στην πόλη'),
(15, 'οδηγός', 'πιο προσεγμένους δρόμους', 'το αυτοκίνητό μου να έχει μικρότερη φθορά');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
