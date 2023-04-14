-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 14. 14:08
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kutyamenhely`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adoption`
--

CREATE TABLE `adoption` (
  `uname` varchar(50) NOT NULL,
  `dname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutyak`
--

CREATE TABLE `kutyak` (
  `dname` varchar(30) NOT NULL,
  `faj` varchar(30) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `kor` tinyint(30) NOT NULL,
  `is_adopted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `kutyak`
--

INSERT INTO `kutyak` (`dname`, `faj`, `nem`, `kor`, `is_adopted`) VALUES
('Archibald', 'Keverék', 1, 4, 1),
('Baltazár', 'Németjuhász', 1, 2, 1),
('Bendegúz', 'Keverék', 1, 1, 1),
('Cölöp', 'Labrador', 0, 2, 0),
('Doroti', 'Keverék', 0, 3, 1),
('Esztebán', 'Staffordshire Terrier', 1, 6, 1),
('Ferec', 'Keverék', 1, 5, 1),
('Gertrúdisz', 'Keverék', 0, 2, 0),
('Gyömbér', 'Keverék', 0, 7, 0),
('Imre', 'Keverék', 1, 4, 0),
('Kalaúz', 'Ausztrál juhászkutya', 1, 8, 0),
('Kapor', 'Tacskó', 0, 5, 0),
('Karamel', 'Németjuhász', 0, 2, 0),
('Kondér', 'Bulldog', 0, 1, 0),
('Kréker', 'Keverék', 1, 6, 0),
('Majré', 'Chihuahua', 1, 4, 0),
('Manfréd', 'Keverék', 1, 5, 0),
('Panír', 'Agár', 0, 1, 0),
('Penne', 'Beagle', 1, 4, 0),
('Plébános', 'Keverék', 1, 4, 0),
('Pöttöm', 'Foxterrier', 0, 1, 0),
('Ropi', 'Keverék', 1, 7, 0),
('Tupák', 'Staffordshire Terrier', 1, 1, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `uname` varchar(50) NOT NULL,
  `passwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`uname`, `passwd`) VALUES
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user_info`
--

CREATE TABLE `user_info` (
  `uname` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `pfp` varchar(50) DEFAULT NULL,
  `privileged` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `user_info`
--

INSERT INTO `user_info` (`uname`, `first_name`, `last_name`, `email`, `date_of_birth`, `pfp`, `privileged`) VALUES
('admin', 'Aladár', 'Adminisztrátor', 'admin@admin', '2001-12-12', NULL, 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adoption`
--
ALTER TABLE `adoption`
  ADD KEY `fk_uname2` (`uname`);

--
-- A tábla indexei `kutyak`
--
ALTER TABLE `kutyak`
  ADD PRIMARY KEY (`dname`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- A tábla indexei `user_info`
--
ALTER TABLE `user_info`
  ADD KEY `fk_uname` (`uname`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `fk_uname2` FOREIGN KEY (`uname`) REFERENCES `users` (`uname`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Megkötések a táblához `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `fk_uname` FOREIGN KEY (`uname`) REFERENCES `users` (`uname`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
