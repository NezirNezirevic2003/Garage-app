-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 dec 2020 om 21:01
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

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
-- Tabelstructuur voor tabel `klantgegevens`
--

CREATE TABLE `klantgegevens` (
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `stad` varchar(20) NOT NULL,
  `zip` int(6) NOT NULL,
  `adres` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klantgegevens`
--

INSERT INTO `klantgegevens` (`voornaam`, `achternaam`, `stad`, `zip`, `adres`) VALUES
('John', 'Doe', 'Rotterdam', 6675, 'Johannes Calvijn 34'),
('John', 'Doe', 'Rotterdam', 6675, 'Johannes Calvijn 34'),
('hello', 'Nezirevic', 'Rotterdam', 2334, 'Jannesdrietenveld'),
('Nezir', 'Nezirevic', 'Rotterdam', 7888, 'Henrik Irenvelt'),
('ali', 'pervez', 'Rotterdam', 7777, 'hallo'),
('Test', 'Testo', 'Testdtad', 0, 'testadres'),
('Ali', 'Pervez', 'Rotterdam, zuid', 6675, 'zuidplein');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
