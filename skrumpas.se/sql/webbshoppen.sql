-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 01 mars 2018 kl 11:38
-- Serverversion: 5.6.34-log
-- PHP-version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `webbshoppen`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bestallningar`
--

CREATE TABLE `bestallningar` (
  `ordernummer` int(8) NOT NULL,
  `kundNamn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `epost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobil` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `artikelnummer` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `bestallningar`
--

INSERT INTO `bestallningar` (`ordernummer`, `kundNamn`, `epost`, `mobil`, `adress`, `datum`, `artikelnummer`) VALUES
(1, 'Men', 'men@hund.se', '073-6093454', 'Hundvägen 3', '2018-03-01 12:32:51', 6),
(2, 'Madeleine', 'madde@hund.se', '073-6093454', 'Hundvägen 3', '2018-03-01 12:36:03', 8),
(3, 'Erik', 'erik@hund.se', '073-6093454', 'Hundvägen 5', '2018-03-01 12:36:03', 5),
(4, 'Niklas', 'niklas@hund.se', '073-6093454', 'Hundvägen 7', '2018-03-01 12:36:03', 10);

-- --------------------------------------------------------

--
-- Tabellstruktur `produkt`
--

CREATE TABLE `produkt` (
  `artikelnummer` int(4) NOT NULL,
  `hundRas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `beskrivning` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pris` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `produkt`
--

INSERT INTO `produkt` (`artikelnummer`, `hundRas`, `beskrivning`, `bild`, `pris`, `status`) VALUES
(4, 'Japansk spets', 'Japansk spets är en hundras av spetstyp från Japan. Den påminner mycket om en vit tysk spets eller en samojedhund i miniatyr.', 'hund0001.jpg', 12000, 0),
(5, 'Tibetansk Mastiff', 'Tibetansk mastiff (Wylie: Do-Khyi) är en hundras från Tibet och dess grannländer. Den är en boskapsvaktare (bergshund) och vakthund av molossertyp. Den moderna aveln är grundad i Storbritannien och USA. Det tibetanska namnet Do-Khyi betyder bandhund.', 'hund0002.jpg', 15000, 0),
(6, 'Mops', 'Mops är en hundras från Storbritannien men med ett historiskt ursprung i Kina. Den är en dvärghund av molossertyp och sällskapshund.', 'hund0003.jpg', 1000, 1),
(8, 'Old English Sheepdog', 'Old english sheepdog är en hundras från Storbritannien. Ursprungsområdet är Sydvästra England: Devon, Somerset och Cornwall. I grunden är de herdehundar och boskapsvaktare men de användes under 1800-talet som boskapshundar för att driva får och nötkreatur', 'hund0004.jpg', 10000, 0),
(9, 'Tysk schäferhund', 'Tysk schäferhund, i dagligt tal schäfer, är en hundras från Tyskland. Schäferhund är tyska för herdehund och rasen ingår i vallhundsgruppen men är vanligast som brukshund och sällskapshund.', 'hund0005.jpg', 8000, 0),
(10, 'Samojed', 'Samojedhund är en hundras som har fått sitt namn efter de samojediska folkgrupperna i norra Ryssland och Sibirien. Samojedhund, även Samoiedskaïa Sabaka, kallas ibland den leende hunden, på grund av sitt karakteristiska ansiktsuttryck.', 'hund0006.jpg', 15000, 0),
(11, 'Chow Chow', 'Chow chow är en hundras av spetstyp med ursprung i Kina men framavlad i Storbritannien. Namnet chow chow tros antingen vara pidginkinesiska för mat.', 'hund0007.jpg', 60000, 0),
(12, 'Riesenschnauzer', 'Riesenschnauzern är en hundras från Tyskland. Den är den största schnauzern och brukshund. Namnet kommer av tyskans ord för jätte - riese.', 'hund0008.jpg', 70000, 0),
(13, 'Akita', 'Akita (tidigare Akita inu) är en hundras från Japan. Rasen räknas till de asiatiska spetsarna.', 'hund0009.jpg', 65000, 0);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bestallningar`
--
ALTER TABLE `bestallningar`
  ADD PRIMARY KEY (`ordernummer`);

--
-- Index för tabell `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`artikelnummer`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bestallningar`
--
ALTER TABLE `bestallningar`
  MODIFY `ordernummer` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT för tabell `produkt`
--
ALTER TABLE `produkt`
  MODIFY `artikelnummer` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
