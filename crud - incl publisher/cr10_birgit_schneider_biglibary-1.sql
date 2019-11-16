-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Nov 2019 um 15:28
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_birgit_schneider_biglibary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `published` date NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publisherID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `img`, `author`, `description`, `published`, `publisher`, `publisherID`, `type`, `active`) VALUES
(1, '12345678', 'Das Institut', 'http://www.buecher-wie-sterne.de/wp-content/uploads/2019/02/Institute_cover-260x400.jpg', 'Stephen King', 'In einer ruhigen Vorortsiedlung von Minneapolis ermorden zwielichtige Eindringlinge lautlos die Eltern von Luke Ellis und verfrachten den betÃ¤ubten ZwÃ¶lfjÃ¤hrigen in einen schwarzen SUV. Die ganze Operation dauert keine zwei Minuten.', '2019-09-10', 'Heyene', 1, 'Book', 0),
(6, '98375629', 'Das NEINhorn', 'https://images-na.ssl-images-amazon.com/images/I/51uy0D7nodL._SX407_BO1,204,203,200_.jpg', 'Marc Uwe Kling', 'Im Herzwald kommt ein kleines, schnickeldischnuckeliges Einhorn zur Welt. Aber obwohl alle ganz lilalieb zu ihm sind und es stÃ¤ndig mit gezuckertem GlÃ¼cksklee fÃ¼ttern, benimmt sich das Tierchen ganz und gar nicht einhornmÃ¤ÃŸig. ', '2018-01-31', 'Luebbe', 2, 'Book', 0),
(7, '96785346', 'Kleine GroÃŸe Liebe', 'https://images-na.ssl-images-amazon.com/images/I/71BaSqcyQWL._SL1200_.jpg', 'Anett Louisan', 'Sie ist wieder da! Das neue Album von Anett Louisan Ã¼bertrifft alle Erwartungen.', '2019-07-19', 'Sony Music', 3, 'CD', 0),
(8, '97834536027', 'Zombieland: Doppelt hÃ¤lt besser', 'https://images-na.ssl-images-amazon.com/images/I/91ISs%2B0gViL._SL1500_.jpg', 'Ruben Fleischer', 'Welcome back to Zombieland! Wichita (Emma Stone), Little Rock (Abigail Breslin), Columbus (Jesse Eisenberg) und Tallahassee (Woody Harrelson) sind zurÃ¼ck und schlagen sich weiter durch eine Welt, die nach einer Zombieapokalypse brachliegt. ', '2020-03-20', 'Warner Bros', 4, 'DVD', 0),
(9, '47846220', 'Adams Ã„pfel', 'https://images-na.ssl-images-amazon.com/images/I/81EhhIG3qKL._SL1500_.jpg', 'Anders Thomas Jensen', '\"Adams Ã„pfel\" - so nennt Ivan, Landpfarrer irgendwo im dÃ¤nischen Nirgendwo, die Ã„pfel am kirchlichen Apfelbaum, seit Adam sich die Aufgabe gestellt hat, aus ihnen einen Apfelkuchen zu backen. Adam ist der Neuzugang in Ivans Oase der NÃ¤chstenliebe.', '2006-10-10', 'DCM', 5, 'DVD', 0),
(19, '4539872689', 'Das Fundament der Ewigkeit: Historischer Roman', 'https://images-na.ssl-images-amazon.com/images/I/5117epjhyxL._SX333_BO1,204,203,200_.jpg', 'Ken Follet', 'Ein Geschichtsbuch, das man nach mehr als 1150 Seiten mit dem Bedauern weglegt, dass es zu Ende ist. Das gibt es nicht oft.\" Chris Melzer, Augsburger Allgemeine, 15.September 2017', '2017-09-12', 'Luebbe', 2, 'Book', 0),
(20, '897364862', 'How to Get Away with Murder ', 'https://images-na.ssl-images-amazon.com/images/I/71Es5yFM8BL._SY679_.jpg', 'Viola Davis', 'WÃ¤hrend sich Bonnie, Frank und die fÃ¼nf besten Jurastudenten (â€žKeating Fiveâ€œ) einer gewaltigen Welle mysteriÃ¶ser FÃ¤lle stellen mÃ¼ssen, enthÃ¼llt sich die schockierende Wahrheit Ã¼ber den MÃ¶rder von Rebecca.', '2018-09-11', 'Touchstone', 6, 'DVD', 0),
(21, '4583729472', 'JÃ– SCHAU... SEINE GRÃ–SSTEN ERFOLGE', 'https://m.media-amazon.com/images/I/719FE0tPQiL._SS500_PIPJStripe-Robin-Large-V2,TopLeft,0,0_.jpg', 'Georg Danzer', 'Jetzt - nach seinem Tod - werden vielleicht (und hoffentlich!) einige sich mehr mit ', '1975-12-31', 'Sony Music', 3, 'CD', 0),
(22, '3404166604', 'Sturz der Titanen', 'https://images-eu.ssl-images-amazon.com/images/I/517nDp2nfgL.jpg', 'Ken Follet', 'DREI LÃ„NDER. DREI FAMILIEN. EIN JAHRHUNDERT. Die groÃŸe Familiensaga von Ken Follett, Autor der Bestseller DIE SÃ„ULEN DER ERDE und DIE TORE DER WELT.', '2010-09-28', 'Luebbe', 2, 'Book', 0),
(23, '9000002386', 'The Blind Leading the Naked', 'https://images-na.ssl-images-amazon.com/images/I/51XHqAjI0%2BL.jpg', 'Violent Femmes', 'Mit frechen Witz und vitaler MusikalitÃ¤t hat das Trio aus Milwaukee/Wisconsin sich seinen Platz vor allem in der Welt der 80iger gesichert.', '1987-07-07', 'Sony Music', 3, 'CD', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisherID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisherID`, `name`, `size`) VALUES
(1, 'Heyene', 'Big'),
(2, 'Luebbe', 'medium'),
(3, 'Sony Music', 'big'),
(4, 'Warner Bros', 'Big'),
(5, 'DCM', 'small'),
(6, 'Touchstone', 'big');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
