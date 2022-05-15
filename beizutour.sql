-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Mai 2022 um 11:41
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `beizutour`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beiz`
--

CREATE TABLE `beiz` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `plz` int(4) NOT NULL,
  `ort` varchar(50) NOT NULL,
  `beschreibung` varchar(200) NOT NULL,
  `typ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `beiz`
--

INSERT INTO `beiz` (`id`, `name`, `adresse`, `plz`, `ort`, `beschreibung`, `typ`) VALUES
(1, 'Insider Pub', 'Ueberbielstrasse 5\r\n', 3930, 'Visp', 'Gemï¿½tliches Pub neben alten Stadtteil von Visp. Gemï¿½tliche Atmosphï¿½re mit freundlicher Bedienung und gutem Bier. Aussenterasse neben Park. Man kann dort Dart und Tischfussball spielen. Durchschn', 'Bar/Pub'),
(2, 'P2', 'Bahnhofplatz 6\r\n', 3930, 'Visp', 'Bar und Restaurant in einem. Herrliches Essen von Burger bis Pasta. Zentral gelegen. Belebte Umgebung mit Aussenterasse. Tolle Drinks und Cocktails. Nette und kompetente Bedienung. Rï¿½umlichkeiten in', 'Bar/Restaurant'),
(3, 'Pub 118', 'Kelchbachstrasse 16\r\n', 3904, 'Naters', 'Schnelle Bedieunung, Bar mit der Mï¿½glichkeit zu essen. Schlicht gestaltete Rï¿½umlichkleiten. Echtes Bar Feeling mit grossem Innenraum. Im Zentrum von Naters neben Supermarkt gelegen. Tolle Drinks u', 'Bar/Restaurant'),
(4, 'Perron 1', 'Bahnhof 1\r\n', 3900, 'Brig', 'Nachtclub mit echter Party Atmosphï¿½re. Party bis in den Mprgengrauen mï¿½glich. Viele Gï¿½ste und tolel Musik. Grosse Auswahl an Drinks. Saubere Rï¿½umlichkeiten, sehr zentral am Bahnhof gelegen.\r\n', 'Nachtclub'),
(5, 'Scala', 'Sennereigasse 6\r\n', 3900, 'Brig', 'Bar und Nachtclub fï¿½r alle draufgï¿½gner. Viele Gï¿½ste, richtiges Party Nightlife inmitten von Brig. Party auf 2 Stï¿½cken mit viel Platz und fairen Preisen und toller Musik.\r\n', 'Nachtclub'),
(6, 'Britannia Pub', 'Bahnhofstrasse 17\r\n', 3900, 'Brig', 'Ruhig gelgenes Pub fï¿½r das Feierabendbier, aber auch fï¿½r Party bis in die frï¿½hen Morgenstunden, Disco-Bunker in Untergeschoss. Tagsï¿½ber tolles Ambiente, spï¿½t Abend tolle, laute Musik perfekt', 'Bar');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `beiz`
--
ALTER TABLE `beiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `beiz`
--
ALTER TABLE `beiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
