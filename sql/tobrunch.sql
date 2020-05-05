-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mrz 2020 um 13:31
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
-- Tabellenstruktur für Tabelle `tobrunch`
--

CREATE TABLE `tobrunch` (
  `id` int(11) NOT NULL,
  `famname` varchar(50) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `plz` int(8) NOT NULL,
  `ort` varchar(50) NOT NULL,
  `mailadr` varchar(50) DEFAULT NULL,
  `gebdat` DATE NOT NULL,
  `numbadult` int(8) NOT NULL DEFAULT '0',
  `agechild1` int(8) DEFAULT '0',
  `agechild2` int(8) DEFAULT '0',
  `agechild3` int(8) DEFAULT '0',
  `agechild4` int(8) DEFAULT '0',
  `agechild5` int(8) DEFAULT '0',
  `sector` varchar(10) NOT NULL DEFAULT '0',
  `newsletter` boolean NOT NULL DEFAULT FALSE,
  `entrydatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tobrunch`
--


INSERT INTO `tobrunch` (`id`, `famname`, `vorname`, `adresse`, `plz`, `ort`, `mailadr`, `gebdat`, `numbadult`, `agechild1`, `agechild2`, `agechild3`, `agechild4`, `agechild5`, `sector`, `newsletter`, `entrydatetime`) VALUES
(28, 'Griti', 'Bänz', 'in der Au', '8804', 'Au', 'griti@baenz.ch', '1212-12-12.', '7', '9', '8', '7', '6', '5', 'mitte', 'on', '2020-03-28 19:19:15'),
(29, 'Schacher', 'Sepp', 'Hof', '8767', 'Elm', 'sepp@schacher.ch', '1900-10-10', '9', '14', '13', '12', '11', '10', 'vorne', '', '2020-03-28 19:21:47'),
(35, 'Pareto', 'Nevio Enrico', 'Auweg 88', '8865', 'Elm', 'nepareto@bluelose.ch', '1991-04-15', '8', '5', '3', '', '', '', 'mitte', '', '2020-03-30 12:24:14');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tobrunch`
--
ALTER TABLE `tobrunch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tobrunch`
--
ALTER TABLE `tobrunch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
