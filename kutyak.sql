-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 05. 02:07
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
-- Tábla szerkezet ehhez a táblához `kutyak`
--

CREATE TABLE `kutyak` (
  `nev` varchar(30) NOT NULL,
  `faj` varchar(30) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `kor` tinyint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `kutyak`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
