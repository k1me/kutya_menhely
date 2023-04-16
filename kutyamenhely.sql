-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 16. 15:52
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
('Baltazár', 'Németjuhász', 1, 2, 0),
('Bendegúz', 'Keverék', 1, 1, 0),
('Cölöp', 'Labrador', 0, 2, 1),
('Doroti', 'Keverék', 0, 3, 0),
('Esztebán', 'Staffordshire Terrier', 1, 6, 0),
('Ferec', 'Keverék', 1, 5, 0),
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
('Tank', 'Cane Corso', 0, 6, 0),
('Tupák', 'Staffordshire Terrier', 1, 1, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `replies`
--

CREATE TABLE `replies` (
  `id` int(11) UNSIGNED NOT NULL,
  `creator` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `parent_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `creator` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
('agyalagyula', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('akciosaron01', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('bekrepal', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('benedekelek345', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('fazoltan28', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('hatizsak1997', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('iszakos89', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('kismiki71', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('nagyferi01', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('pofazoltan', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6'),
('szemese', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6');

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
('admin', 'Aladár', 'Adminisztrátor', 'admin@admin', '2001-12-12', NULL, 1),
('nagyferi01', 'Ferenc', 'Nagy', 'nagyferi@email', '1979-12-12', NULL, 0),
('szemese', 'Emese', 'Szolnoki', 'nemalljola@szemese', '2001-12-12', NULL, 0),
('pofazoltan', 'Zoltán', 'Pofá', 'pofazoltan@email', '1999-12-12', NULL, 0),
('bekrepal', 'Pál', 'Bekre', 'bekrepal@email', '1998-12-12', NULL, 0),
('agyalagyula', 'Gyula', 'Agyalá', 'agyalagyula@email', '1997-12-12', NULL, 0),
('fazoltan28', 'Zoltán', 'Fá', 'fazoltan@email', '2001-12-12', NULL, 0),
('hatizsak1997', 'Izsák', 'Hát', 'hatizsak@email', '1965-12-12', NULL, 0),
('akciosaron01', 'Áron', 'Akciós', 'akciosaron@email', '2002-12-12', NULL, 0),
('iszakos89', 'Ákos', 'Isz', 'iszakos@email', '1989-03-04', NULL, 0),
('kismiki71', 'Miklós', 'Kis', 'kismiki@email', '1978-06-05', NULL, 0),
('benedekelek345', 'Elek', 'Benedek', 'bendek@email', '2001-01-01', NULL, 0);

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
-- A tábla indexei `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_replies_to_topics` (`parent_id`);

--
-- A tábla indexei `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

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
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT a táblához `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `fk_uname2` FOREIGN KEY (`uname`) REFERENCES `users` (`uname`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Megkötések a táblához `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `fk_replies_to_topics` FOREIGN KEY (`parent_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Megkötések a táblához `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `fk_uname` FOREIGN KEY (`uname`) REFERENCES `users` (`uname`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
