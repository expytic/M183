-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mrz 2020 um 13:34
-- Server-Version: 10.4.10-MariaDB
-- PHP-Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `doppelklang`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tosupport`
--

CREATE TABLE `tosupport` (
  `id` int(11) NOT NULL,
  `famname` varchar(50) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `gebdat` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entrydatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tosupport`
--

INSERT INTO `tosupport` (`id`, `famname`, `vorname`, `gebdat`, `username`, `password`, `entrydatetime`) VALUES
(1, 'Gmür', 'Heinrich', '16. Juli 1980', 'g.gmuer27@gmail.com', 'sackundbaendel', '2020-03-30 12:19:32');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tosupport`
--
ALTER TABLE `tosupport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tosupport`
--
ALTER TABLE `tosupport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
