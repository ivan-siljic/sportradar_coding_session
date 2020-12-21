-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 21. Dez 2020 um 15:31
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sportradar`
--
CREATE DATABASE IF NOT EXISTS `sportradar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sportradar`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `league`
--

CREATE TABLE `league` (
  `league_id` int(11) NOT NULL,
  `league_name` varchar(55) NOT NULL,
  `_fk_sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `league`
--

INSERT INTO `league` (`league_id`, `league_name`, `_fk_sport_id`) VALUES
(1, 'Fußball-Bundesliga', 1),
(2, '2.Liga', 1),
(3, 'European Womens Hockey League', 2),
(4, 'Basketball Bundesliga', 3),
(5, 'Austrian Volley League', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `site_name` varchar(55) DEFAULT NULL,
  `country` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `zip` int(6) DEFAULT NULL,
  `street` varchar(70) DEFAULT NULL,
  `street_number` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `location`
--

INSERT INTO `location` (`location_id`, `site_name`, `country`, `city`, `zip`, `street`, `street_number`) VALUES
(1, 'Raiffeisen Arena', 'Austria', 'Pasching', 4061, 'Poststraße', 38),
(2, 'Keine Sorgen Arena', 'Austria', 'Ried im Innkreis', 4910, 'Volksfestplatz', 2),
(3, 'Erste Bank Arena', 'Austria', 'Vienna', 1220, 'Attemsgasse', 1),
(4, 'Eisarena Salzburg', 'Austria', 'Salzburg', 5020, 'Hermann-Bahr-Promenade', 2),
(5, 'Sporthalle Walfersam Kapfenberg', 'Austria', 'Kapfenberg', 8605, 'Karl-Heinrich-Waggerl-Weg', 6),
(6, 'Sporthalle Oberwart', 'Austria', 'Oberwart', 7400, 'Informstraße', 2),
(7, 'Johann-Pölz-Halle', 'Austria', 'Amstetten', 3300, 'Stadionstraße', 12),
(8, 'Sportpark Graz', 'Austria', 'Graz', 8010, 'Schönaugasse', 137),
(9, NULL, 'Austria', 'Ried im Innkreis', NULL, NULL, NULL),
(10, NULL, 'Austria', 'Innsbruck', NULL, NULL, NULL),
(11, NULL, 'Hungary', 'Sopron', NULL, NULL, NULL),
(12, NULL, 'Austria', 'Stockerau', NULL, NULL, NULL),
(13, NULL, 'Austria', 'Salzburg', NULL, NULL, NULL),
(14, NULL, 'Germany', 'Hamburg', NULL, NULL, NULL),
(15, NULL, 'Austria', 'Wien', NULL, NULL, NULL),
(16, NULL, 'Denmark', 'Skanderborg', NULL, NULL, NULL),
(17, NULL, 'France', 'Paris', NULL, NULL, NULL),
(18, NULL, 'Austria', 'Wiener Neustadt', NULL, NULL, NULL),
(19, NULL, 'Germany', 'Stuttgart', NULL, NULL, NULL),
(20, NULL, 'Austria', 'Korneuburg', NULL, NULL, NULL),
(21, NULL, 'Austria', 'Zwettl', NULL, NULL, NULL),
(22, NULL, 'Austria', 'Schwaz', NULL, NULL, NULL),
(23, NULL, 'Austria', 'Kapfenberg', NULL, NULL, NULL),
(24, NULL, 'Austria', 'St.Pölten', NULL, NULL, NULL),
(25, NULL, 'Austria', 'Bruck a.d. Mur', NULL, NULL, NULL),
(26, NULL, 'Austria', 'Mooskirchen', NULL, NULL, NULL),
(27, NULL, 'USA', 'Ignacio', NULL, NULL, NULL),
(28, NULL, 'Australia', 'Celtenham', NULL, NULL, NULL),
(29, NULL, 'Lituania', 'Riga', NULL, NULL, NULL),
(30, NULL, 'USA', 'Knoxville', NULL, NULL, NULL),
(31, NULL, 'Austria', 'Oberwart', NULL, NULL, NULL),
(32, NULL, 'Netherlands', 'Haarlem', NULL, NULL, NULL),
(33, NULL, 'Austria', 'Amstetten', NULL, NULL, NULL),
(34, NULL, 'Peru', 'Lima', NULL, NULL, NULL),
(35, NULL, 'Poland', 'Krakow', NULL, NULL, NULL),
(36, NULL, 'Venezuela', 'Barcelona', NULL, NULL, NULL),
(37, NULL, 'Austria', 'Graz', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_birth` date NOT NULL,
  `_fk_team_id` int(11) NOT NULL,
  `_fk_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `player`
--

INSERT INTO `player` (`player_id`, `first_name`, `last_name`, `gender`, `date_birth`, `_fk_team_id`, `_fk_location_id`) VALUES
(1, 'Samuel', 'Sahin-Radlinger', 'male', '1992-07-11', 2, 9),
(2, 'Michael', 'Lercher', 'male', '1996-01-04', 2, 10),
(3, 'Murat', 'Satin', 'male', '1998-08-30', 2, 10),
(4, 'Filip', 'Borsos', 'male', '2000-06-22', 2, 11),
(5, 'Bernd', 'Gschweidl', 'male', '1995-09-08', 2, 12),
(6, 'Alexander', 'Schlager', 'male', '1996-02-01', 1, 13),
(7, 'Petar', 'Filipovic', 'male', '1990-09-14', 1, 14),
(8, 'Peter', 'Michorl', 'male', '1995-05-09', 1, 15),
(9, 'Mads Emil', 'Madsen', 'male', '1998-01-14', 1, 16),
(10, 'Mamoudou', 'Karamoko', 'male', '1999-06-08', 1, 17),
(11, 'Jessica', 'Ekrt', 'female', '1999-09-23', 3, 18),
(12, 'Eliska', 'Vozdecka', 'female', '1999-04-19', 3, 19),
(13, 'Alina', 'Hinum', 'female', '2001-01-04', 3, 20),
(14, 'Lisa', 'Schröfl', 'female', '1998-05-16', 3, 21),
(15, 'Katharina', 'Killius', 'female', '2001-06-14', 3, 13),
(16, 'Theresa', 'Hornich', 'female', '1991-01-07', 4, 15),
(17, 'Pia', 'Rattensperger', 'female', '1999-07-09', 4, 14),
(18, 'Lisa ', 'Zöhrer', 'female', '1998-11-23', 4, 22),
(20, 'Sophia', 'Volgger', 'female', '1999-05-12', 4, 10),
(21, 'Isabella', 'Burghart', 'female', '2001-09-26', 4, 18),
(22, 'Miro', 'Zapf', 'male', '2002-09-17', 5, 23),
(23, 'Thomas ', 'Schreiner', 'male', '1987-02-03', 5, 24),
(24, 'Tobias', 'Schrittwieser', 'male', '1996-10-14', 5, 25),
(25, 'David', 'Vötsch', 'male', '2001-10-01', 5, 26),
(26, 'Alex ', 'Herrera', 'male', '1992-08-15', 5, 27),
(27, 'Lawrence', 'Alexander', 'male', '2002-05-06', 6, 28),
(28, 'Ignas', 'Fiodorovas', 'male', '1996-04-09', 6, 29),
(29, 'Nigel', 'Pruitt', 'male', '1994-10-03', 6, 30),
(30, 'Jonathan', 'Knessl', 'male', '2002-04-14', 6, 31),
(31, 'Terrence', 'Bieshaar', 'male', '1997-07-28', 6, 32),
(32, 'Fabian', 'Kriener', 'male', '1995-12-31', 7, 33),
(33, 'Eduardo', 'Romay', 'male', '1995-08-22', 7, 34),
(34, 'Alan', 'Wasilewski', 'male', '1991-07-23', 7, 35),
(35, 'Lukas', 'Kreuziger', 'male', '1996-01-06', 7, 33),
(36, 'Daniel', 'Morgunov', 'male', '2002-09-17', 7, 33),
(37, 'José', 'Jardim', 'male', '1994-05-06', 8, 36),
(38, 'Lukas', 'Scheucher', 'male', '1996-12-16', 8, 25),
(39, 'Kemal', 'Imsirovic', 'male', '1995-09-16', 8, 37),
(40, 'Niklas', 'Steiner', 'male', '1996-05-12', 8, 37),
(41, 'Lorenz', 'Koraimann', 'male', '1993-05-07', 8, 37);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sport`
--

CREATE TABLE `sport` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `sport`
--

INSERT INTO `sport` (`sport_id`, `sport_name`) VALUES
(1, 'Football'),
(2, 'Ice Hockey'),
(3, 'Basketball'),
(4, 'Volleyball');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sport_event`
--

CREATE TABLE `sport_event` (
  `sport_event_id` int(11) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime DEFAULT NULL,
  `sport_event_comment` text DEFAULT NULL,
  `_fk_team_home` int(11) NOT NULL,
  `_fk_team_guest` int(11) NOT NULL,
  `_fk_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `sport_event`
--

INSERT INTO `sport_event` (`sport_event_id`, `start_date_time`, `end_date_time`, `sport_event_comment`, `_fk_team_home`, `_fk_team_guest`, `_fk_location_id`) VALUES
(1, '2020-12-06 17:00:00', '2020-12-06 19:00:00', '3:0', 1, 2, 1),
(2, '2021-03-13 17:00:00', '2021-03-13 19:00:00', NULL, 2, 1, 2),
(3, '2021-01-24 15:15:00', '2021-01-24 18:15:00', NULL, 3, 4, 3),
(4, '2021-03-21 15:15:00', '2021-03-21 18:15:00', NULL, 4, 3, 4),
(5, '2021-02-20 17:30:00', '2021-02-20 19:30:00', NULL, 5, 6, 5),
(6, '2021-03-12 17:30:00', '2021-03-12 19:30:00', NULL, 6, 5, 6),
(7, '2021-03-17 19:00:00', '2021-03-17 21:00:00', NULL, 7, 8, 7),
(8, '2021-05-12 17:30:00', '2021-05-12 19:30:00', NULL, 8, 7, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `stats`
--

CREATE TABLE `stats` (
  `stats_id` int(11) NOT NULL,
  `season_start` year(4) NOT NULL,
  `season_end` year(2) NOT NULL,
  `matches_played` int(11) NOT NULL,
  `matches_won` int(11) NOT NULL,
  `matches_lost` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `_fk_team_id` int(11) NOT NULL,
  `_fk_league_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `stats`
--

INSERT INTO `stats` (`stats_id`, `season_start`, `season_end`, `matches_played`, `matches_won`, `matches_lost`, `rank`, `_fk_team_id`, `_fk_league_id`) VALUES
(1, 2019, 20, 32, 20, 8, 4, 1, 1),
(2, 2019, 20, 30, 20, 6, 1, 2, 5),
(3, 2019, 20, 18, 9, 8, 5, 3, 2),
(4, 2019, 20, 18, 5, 11, 7, 4, 2),
(5, 2019, 20, 17, 12, 5, 4, 5, 3),
(6, 2019, 20, 17, 12, 5, 3, 6, 3),
(7, 2019, 20, 14, 5, 9, 6, 7, 4),
(8, 2019, 20, 14, 9, 5, 3, 8, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `_fk_league_id` int(11) DEFAULT NULL,
  `_fk_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `_fk_league_id`, `_fk_location_id`) VALUES
(1, 'LASK', 1, 1),
(2, 'SV Ried', 1, 2),
(3, 'EHV Sabres Wien', 3, 3),
(4, 'DEC Salzburg Eagles', 3, 4),
(5, 'Kapfenberg Bulls', 4, 5),
(6, 'Oberwart Gunners', 4, 6),
(7, 'VCA Amstetten NÖ', 5, 7),
(8, 'UVC Holding Graz', 5, 8);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`league_id`),
  ADD KEY `_fk_sport_id` (`_fk_sport_id`);

--
-- Indizes für die Tabelle `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indizes für die Tabelle `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `_fk_team_id` (`_fk_team_id`),
  ADD KEY `_fk_location_id` (`_fk_location_id`);

--
-- Indizes für die Tabelle `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indizes für die Tabelle `sport_event`
--
ALTER TABLE `sport_event`
  ADD PRIMARY KEY (`sport_event_id`),
  ADD KEY `_fk_team_home` (`_fk_team_home`),
  ADD KEY `_fk_team_guest` (`_fk_team_guest`),
  ADD KEY `_fk_location_id` (`_fk_location_id`);

--
-- Indizes für die Tabelle `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`stats_id`),
  ADD KEY `_fk_team_id` (`_fk_team_id`),
  ADD KEY `_fk_league_id` (`_fk_league_id`);

--
-- Indizes für die Tabelle `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `_fk_location_id` (`_fk_location_id`),
  ADD KEY `_fk_league_id` (`_fk_league_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `league`
--
ALTER TABLE `league`
  MODIFY `league_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT für Tabelle `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT für Tabelle `sport`
--
ALTER TABLE `sport`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `sport_event`
--
ALTER TABLE `sport_event`
  MODIFY `sport_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `stats`
--
ALTER TABLE `stats`
  MODIFY `stats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `league`
--
ALTER TABLE `league`
  ADD CONSTRAINT `league_ibfk_1` FOREIGN KEY (`_fk_sport_id`) REFERENCES `sport` (`sport_id`);

--
-- Constraints der Tabelle `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`_fk_team_id`) REFERENCES `team` (`team_id`),
  ADD CONSTRAINT `player_ibfk_2` FOREIGN KEY (`_fk_location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints der Tabelle `sport_event`
--
ALTER TABLE `sport_event`
  ADD CONSTRAINT `sport_event_ibfk_1` FOREIGN KEY (`_fk_team_home`) REFERENCES `team` (`team_id`),
  ADD CONSTRAINT `sport_event_ibfk_2` FOREIGN KEY (`_fk_team_guest`) REFERENCES `team` (`team_id`),
  ADD CONSTRAINT `sport_event_ibfk_3` FOREIGN KEY (`_fk_location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints der Tabelle `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`_fk_team_id`) REFERENCES `team` (`team_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `stats_ibfk_2` FOREIGN KEY (`_fk_league_id`) REFERENCES `league` (`league_id`);

--
-- Constraints der Tabelle `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`_fk_location_id`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `team_ibfk_3` FOREIGN KEY (`_fk_league_id`) REFERENCES `league` (`league_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
