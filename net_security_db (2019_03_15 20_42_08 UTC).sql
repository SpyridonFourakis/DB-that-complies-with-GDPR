-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Ιουν 2018 στις 21:57:21
-- Έκδοση διακομιστή: 10.1.28-MariaDB
-- Έκδοση PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `net_security_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `message`
--

INSERT INTO `message` (`id`, `from_id`, `to_id`, `subject`, `body`) VALUES
(11, 1, 11, 'Profile Update', 'We would like to inform you that your profile has been updated<br/><b>Purpose of the update:</b> just because i am cool<br/><b>Your profile data has been forwarded to the following recipients or organizations: </b>wario!!!!<br/><br/><b>New profile data:</b><br/><br/><b>id: </b>11<br/><b>username: </b>liabouras<br/><b>password: </b>$2y$13$CkVLS1gFJwrcpUeXtInSbOI83g9YC0PktcSRmPdqGnFJMtJdAKcqm<br/><b>name: </b>Ilias4<br/><b>surname: </b>Tsouchlos<br/><b>mobile: </b>6978490307<br/><b>bank_account: </b>alphabank_ilias');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `surname`, `mobile`, `bank_account`) VALUES
(1, 'admin', '$2y$13$tHpO65xzAPkdDuNvS4ygGufEsO4nYZDuCVF4ff9vwfXKo0DisvLhC', 'Spyros', 'Fourakis', '6988908153', 'eurobank_fourakis'),
(11, 'liabouras', '$2y$13$CkVLS1gFJwrcpUeXtInSbOI83g9YC0PktcSRmPdqGnFJMtJdAKcqm', 'Ilias4', 'Tsouchlos', '6978490307', 'alphabank_ilias');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
