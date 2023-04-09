-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2023 at 03:49 PM
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
-- Database: `kutyamenhely`
--

-- --------------------------------------------------------

--
-- Table structure for table `kutyak`
--

CREATE TABLE `kutyak` (
  `nev` varchar(30) NOT NULL,
  `faj` varchar(30) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `kor` tinyint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kutyak`
--

INSERT INTO `kutyak` (`nev`, `faj`, `nem`, `kor`) VALUES
('Archibald', 'Keverék', 1, 4),
('Manfréd', 'Keverék', 1, 5),
('Doroti', 'Keverék', 0, 3),
('Ferec', 'Keverék', 1, 5),
('Gertrúdisz', 'Keverék', 0, 2),
('Penne', 'Beagle', 1, 4),
('Majré', 'Chihuahua', 1, 4),
('Plébános', 'Keverék', 1, 4),
('Baltazár', 'Németjuhász', 1, 2),
('Bendegúz', 'Keverék', 1, 1),
('Cölöp', 'Labrador', 0, 2),
('Esztebán', 'Staffordshire Terrier', 1, 6),
('Gyömbér', 'Keverék', 0, 7),
('Imre', 'Keverék', 1, 4),
('Kalaúz', 'Ausztrál juhászkutya', 1, 8),
('Karamel', 'Németjuhász', 0, 2),
('Kapor', 'Tacskó', 0, 5),
('Kondér', 'Bulldog', 0, 1),
('Kréker', 'Keverék', 1, 6),
('Panír', 'Agár', 0, 1),
('Pöttöm', 'Foxterrier', 0, 1),
('Ropi', 'Keverék', 1, 7),
('Tupák', 'Staffordshire Terrier', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(50) NOT NULL,
  `passwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `passwd`) VALUES
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
('nagyarpi01', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uname` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uname`, `first_name`, `last_name`, `email`, `date_of_birth`) VALUES
('admin', 'Pál', 'Bekre', 'admin@admin', '2012-12-12'),
('nagyarpi01', 'Árpád', 'Nagy', 'nagyarpi@email.hu', '1987-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD KEY `uname` (`uname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `users` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
