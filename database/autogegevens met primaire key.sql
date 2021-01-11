-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 jan 2021 om 13:41
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `autogegevens`
--

CREATE TABLE `autogegevens` (
  `autokenteken` varchar(15) NOT NULL,
  `automerk` varchar(20) NOT NULL,
  `autotype` varchar(255) NOT NULL,
  `autokmstand` int(100) NOT NULL,
  `klantid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `autogegevens`
--

INSERT INTO `autogegevens` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('04-JDK-9', 'Volkswagen', 'Polo', 4087, 3),
('14-PR-TX', 'LAMBO', 'gti', 800, 6),
('37-TVR-1', 'Opel', 'Corsa', 80544, 2),
('67-YB-44', 'Tatra', '603', 309872, 1),
('95-RP-LR', 'Fiat', 'Doblo', 143989, 1),
('99-TT-TX', 'LAMBO', 'GTI', 232, 9),
('99-XX-TT', 'Volkswagen', 'GTI', 2420000, 10),
('HV-GB-23', 'Jaguar', 'XJ6', 2043439, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `autogegevens`
--
ALTER TABLE `autogegevens`
  ADD PRIMARY KEY (`autokenteken`),
  ADD KEY `fk_klantgegevens_autogegevens` (`klantid`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
