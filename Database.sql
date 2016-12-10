-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2016 at 07:40 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LeagueData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Arena`
--

CREATE TABLE `Arena` (
  `ArenaNo` int(11) NOT NULL,
  `ArenaName` varchar(30) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Arena`
--

INSERT INTO `Arena` (`ArenaNo`, `ArenaName`, `Address`, `City`) VALUES
(1, 'CF Toronto Eaton Centre', '220 Yonge Street', 'Toronto'),
(2, 'General Motors Centre', '99 Athol Street East', 'Oshawa'),
(3, 'Hershey Centre', '5500 Rose Cherry Place', 'Mississauga'),
(4, 'Scarborough Town Centre', '300 Borough Drive', 'Toronto'),
(5, 'SaskTel Centre', '3315 Thatcher Avenue', 'Saskatoon'),
(6, 'Rogers Arena', '800 Griffiths Way', 'Vancouver'),
(7, 'Metro Centre', '1800 Argyle St.', 'Halifax'),
(8, 'Bell Centre', '1909 avenue des Canadiens-de-Montréal', 'Montréal'),
(9, 'Copps Coliseum', '101 York Boulevard', 'Hamilton'),
(10, 'Ice Centre', '2200 Simcoe St. N', 'Oshawa');

-- --------------------------------------------------------

--
-- Stand-in structure for view `AwayWinners`
--
CREATE TABLE `AwayWinners` (
`MatchNo` int(11)
,`TeamName` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `HomeWinners`
--
CREATE TABLE `HomeWinners` (
`MatchNo` int(11)
,`TeamName` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `NeutralGames`
--
CREATE TABLE `NeutralGames` (
`MatchNo` int(11)
,`ArenaName` varchar(30)
,`Team 1` varchar(20)
,`Team 2` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `NonLocalPlayers`
--
CREATE TABLE `NonLocalPlayers` (
`Fname` varchar(15)
,`Lname` varchar(15)
,`College` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE `Player` (
  `PlayerID` int(11) NOT NULL,
  `TeamNo` int(11) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Position` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` (`PlayerID`, `TeamNo`, `Fname`, `Lname`, `College`, `Position`) VALUES
(1, 1, 'James', 'Ennis', 'Long Beach State', 'Forward'),
(2, 1, 'Dwight', 'Waller', 'Tennessee State', 'Forward'),
(3, 1, 'Robert', 'Hite', 'Miami (FL)', ''),
(4, 1, 'Bill', 'Martin', 'Georgetown', 'Forward'),
(5, 1, 'Dragan', 'Bender', '', 'Forward'),
(6, 2, 'Bill', 'Curley', 'Boston College', ''),
(7, 2, 'Jerry', 'West', 'West Virginia', 'Guard'),
(8, 2, 'Dean', 'Garrett', 'Indiana', 'Center'),
(9, 2, 'Reggie', 'Jordan', 'New Mexico State', ''),
(10, 2, 'Trevor', 'Winter', 'Minnesota', ''),
(11, 3, 'Jerry', 'Sloan', 'Evansville', 'Guard'),
(12, 3, 'Darrell', 'Griffith', 'Louisville', 'Guard'),
(13, 3, 'Art', 'Spector', 'Villanova', 'Forward'),
(14, 3, 'Charlie', 'Scott', 'North Carolina', 'Guard'),
(15, 3, 'Eddie', 'Johnson', 'Illinois', ''),
(16, 4, 'Lance', 'Thomas', 'Duke', 'Forward'),
(17, 4, 'Marcus', 'Webb', 'Alabama', 'Forward'),
(18, 4, 'Carl', 'Nicks', 'Indiana State', 'Guard'),
(19, 4, 'Edward', 'Davis', 'Duquesne', 'Forward'),
(20, 4, 'Lou', 'Tsioropoulos', 'Kentucky', 'Forward'),
(21, 5, 'Goebel', 'Ritter', 'Eastern Kentucky', 'Guard'),
(22, 5, 'Jeff', 'Halliburton', 'Drake', 'Guard'),
(23, 5, 'Joel', 'Bolomboy', 'Weber State', 'Forward'),
(24, 5, 'Derek', 'Harper', 'Illinois', 'Guard'),
(25, 5, 'Darrell', 'Griffith', 'Louisville', 'Guard'),
(26, 6, 'Dikembe', 'Mutombo', 'Georgetown', 'Center'),
(27, 6, 'Phil', 'Pressey', 'Missouri', ''),
(28, 6, 'Fred', 'Brown', 'Iowa', 'Guard'),
(29, 6, 'Bill', 'Zopf', 'Duquesne', 'Guard'),
(30, 6, 'Dwight', 'Anderson', 'Southern California', 'Guard'),
(31, 7, 'Bob', 'McNeill', 'Saint Joseph\'s', 'Guard'),
(32, 7, 'Jojo', 'English', 'South Carolina', 'Guard'),
(33, 7, 'Walt', 'Wesley', 'Kansas', 'Center'),
(34, 7, 'Antoine', 'Wright', 'Texas A&M', ''),
(35, 7, 'Kyle', 'Singler', 'Duke', 'Forward'),
(36, 8, 'Quincy', 'Acy', 'Baylor', ''),
(37, 8, 'Chris', 'Corchiani', 'North Carolina State', 'Guard'),
(38, 8, 'Bill', 'Robinzine', 'DePaul', 'Forward'),
(39, 8, 'Rudy', 'Gay', 'Connecticut', 'Forward'),
(40, 8, 'Calvin', 'Natt', 'Louisiana-Monroe', 'Forward'),
(41, 9, 'Ryan', 'Reid', 'Florida State', ''),
(42, 9, 'Scott', 'Burrell', 'Connecticut', 'Guard'),
(43, 9, 'Ruben', 'Wolkowyski', 'Argentina', 'Forward'),
(44, 9, 'Jack', 'McCloskey', 'Pennsylvania', 'Guard'),
(45, 9, 'Stojko', 'Vrankovic', 'Croatia', ''),
(297, 10, 'Justin', 'Mendes', 'UOIT', 'Power Forward'),
(298, 10, 'Varun', 'Gopikrishna', 'UOIT', 'Point Guard'),
(299, 10, 'Slim', 'Shady', 'Waterloo', 'Small Forward'),
(300, 10, 'Rogers', 'McDoodle', 'U NOT T', 'Point Guard'),
(301, 10, 'Travis', 'Madill', 'UOIT', 'Shooting Guard'),
(302, 10, 'Alexei', 'Dela Pena', 'UOIT', 'Centre'),
(303, 10, 'Random', 'Rand', 'UOIT', 'Point Guard'),
(304, 10, 'asfd', 'asfdads', 'asdfads', 'Point Guard'),
(305, 10, 'Lucia', 'Bell', 'UCLA', 'Small Forward'),
(306, 10, 'Samuel', 'Jon', 'MIT', 'Centre');

-- --------------------------------------------------------

--
-- Stand-in structure for view `PlayersPlaying`
--
CREATE TABLE `PlayersPlaying` (
`Fname` varchar(15)
,`Lname` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `PlayerStats`
--

CREATE TABLE `PlayerStats` (
  `PlayerID` int(11) NOT NULL,
  `TotalPoints` int(11) DEFAULT NULL,
  `TotalAssists` int(11) DEFAULT NULL,
  `GamesPlayed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PlayerStats`
--

INSERT INTO `PlayerStats` (`PlayerID`, `TotalPoints`, `TotalAssists`, `GamesPlayed`) VALUES
(1, 9, 1, 2),
(2, 1, 0, 0),
(3, 4, 1, 1),
(4, 5, 1, 2),
(5, 3, 0, 0),
(6, 3, 0, 4),
(7, 27, 7, 13),
(8, 5, 1, 5),
(9, 3, 1, 5),
(10, 0, 0, 0),
(11, 14, 3, 10),
(12, 16, 2, 9),
(13, 5, 1, 3),
(14, 18, 5, 8),
(15, 16, 2, 16),
(16, 4, 0, 5),
(17, 4, 0, 0),
(18, 7, 2, 2),
(19, 5, 1, 4),
(20, 6, 1, 2),
(21, 5, 1, 2),
(22, 6, 1, 1),
(23, 1, 0, 0),
(24, 13, 6, 15),
(25, 16, 2, 9),
(26, 10, 1, 18),
(27, 3, 3, 3),
(28, 15, 3, 12),
(29, 2, 1, 0),
(30, 4, 1, 0),
(31, 5, 3, 1),
(32, 4, 1, 2),
(33, 9, 1, 9),
(34, 5, 1, 5),
(35, 2, 0, 4),
(36, 2, 0, 4),
(37, 4, 2, 2),
(38, 11, 1, 6),
(39, 20, 3, 10),
(40, 17, 2, 10),
(41, 2, 0, 0),
(42, 7, 1, 7),
(43, 2, 0, 1),
(44, 6, 1, 0),
(45, 3, 0, 4),
(297, 30, 9, 69),
(298, 1, 97, 45),
(299, 69, 99, 62),
(300, 15, 9, 99),
(301, 59, 27, 1),
(302, 46, 71, 87),
(303, 34, 13, 28),
(304, 79, 25, 72),
(305, 32, 60, 1),
(306, 86, 33, 84);

-- --------------------------------------------------------

--
-- Table structure for table `Schedule`
--

CREATE TABLE `Schedule` (
  `MatchNo` int(11) NOT NULL,
  `GameTime` date NOT NULL,
  `VisitorTeamNo` int(11) NOT NULL,
  `HomeTeamNo` int(11) NOT NULL,
  `Arena` int(11) DEFAULT NULL,
  `WinningTeamNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Schedule`
--

INSERT INTO `Schedule` (`MatchNo`, `GameTime`, `VisitorTeamNo`, `HomeTeamNo`, `Arena`, `WinningTeamNo`) VALUES
(1, '2016-07-01', 1, 2, 2, 1),
(2, '2016-07-01', 3, 4, 4, 4),
(3, '2016-07-08', 4, 1, 1, 4),
(4, '2016-07-08', 2, 3, 3, 3),
(5, '2016-07-15', 1, 3, 3, 3),
(6, '2016-07-15', 4, 2, 2, 4),
(7, '2016-11-17', 10, 5, 10, 10),
(8, '2016-11-18', 10, 8, 10, 10),
(9, '2016-11-02', 1, 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Standings`
--

CREATE TABLE `Standings` (
  `TeamRank` int(11) NOT NULL,
  `TeamNo` int(11) NOT NULL,
  `Wins` int(11) NOT NULL,
  `Losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Standings`
--

INSERT INTO `Standings` (`TeamRank`, `TeamNo`, `Wins`, `Losses`) VALUES
(3, 1, 1, 2),
(4, 2, 0, 3),
(2, 3, 2, 1),
(1, 4, 3, 0),
(10, 5, 8, 4),
(9, 6, 8, 4),
(8, 7, 6, 4),
(7, 8, 1, 4),
(6, 9, 4, 4),
(5, 10, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE `Team` (
  `TeamNo` int(11) NOT NULL,
  `TeamName` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `HomeArena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Team`
--

INSERT INTO `Team` (`TeamNo`, `TeamName`, `City`, `HomeArena`) VALUES
(1, '6ix Gods', 'Toronto', 1),
(2, 'Ridgebacks', 'Oshawa', 2),
(3, '905', 'Mississauga', 3),
(4, 'Bluffs', 'Scarborough', 4),
(5, 'Sirens', 'Saskatoon', 5),
(6, 'Requins', 'Vancouver', 6),
(7, 'Sailors', 'Halifax', 7),
(8, 'Habitants', 'Montreal', 8),
(9, 'Raiders', 'Hamilton', 9),
(10, 'Ice Baskets', 'Oshawa', 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Team1Stats`
--
CREATE TABLE `Team1Stats` (
`Fname` varchar(15)
,`Lname` varchar(15)
,`Position` varchar(20)
,`TotalPoints` int(11)
,`TotalAssists` int(11)
,`GamesPlayed` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `TeamPointsTable`
--
CREATE TABLE `TeamPointsTable` (
`TeamName` varchar(20)
,`Wins` int(11)
,`Losses` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `TeamRanking`
--
CREATE TABLE `TeamRanking` (
`TeamRank` int(11)
,`TeamNo` int(11)
,`TeamName` varchar(20)
,`Wins` int(11)
,`Losses` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `TeamSeason`
--
CREATE TABLE `TeamSeason` (
`Game Time` date
,`Home Team` varchar(20)
,`Visiting Team` varchar(20)
,`Arena` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `TopPlayers`
--
CREATE TABLE `TopPlayers` (
`Fname` varchar(15)
,`Lname` varchar(15)
,`TotalPoints` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `AwayWinners`
--
DROP TABLE IF EXISTS `AwayWinners`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `AwayWinners`  AS  select `Schedule`.`MatchNo` AS `MatchNo`,`T`.`TeamName` AS `TeamName` from (`Schedule` join `Team` `T`) where ((`Schedule`.`VisitorTeamNo` = `Schedule`.`WinningTeamNo`) and (`Schedule`.`VisitorTeamNo` = `T`.`TeamNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `HomeWinners`
--
DROP TABLE IF EXISTS `HomeWinners`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `HomeWinners`  AS  select `Schedule`.`MatchNo` AS `MatchNo`,`Team`.`TeamName` AS `TeamName` from (`Schedule` join `Team`) where ((`Schedule`.`HomeTeamNo` = `Schedule`.`WinningTeamNo`) and (`Schedule`.`HomeTeamNo` = `Team`.`TeamNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `NeutralGames`
--
DROP TABLE IF EXISTS `NeutralGames`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `NeutralGames`  AS  select `S`.`MatchNo` AS `MatchNo`,`A`.`ArenaName` AS `ArenaName`,`HT`.`TeamName` AS `Team 1`,`VT`.`TeamName` AS `Team 2` from (((`Schedule` `S` join `Arena` `A`) join `Team` `HT`) join `Team` `VT`) where ((`S`.`Arena` <> `S`.`HomeTeamNo`) and (`S`.`Arena` <> `S`.`VisitorTeamNo`) and (`S`.`Arena` = `A`.`ArenaNo`) and (`HT`.`TeamNo` = `S`.`HomeTeamNo`) and (`VT`.`TeamNo` = `S`.`VisitorTeamNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `NonLocalPlayers`
--
DROP TABLE IF EXISTS `NonLocalPlayers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `NonLocalPlayers`  AS  select `P`.`Fname` AS `Fname`,`P`.`Lname` AS `Lname`,`P`.`College` AS `College` from `Player` `P` where (not(`P`.`College` in (select `T`.`City` from `Team` `T`))) ;

-- --------------------------------------------------------

--
-- Structure for view `PlayersPlaying`
--
DROP TABLE IF EXISTS `PlayersPlaying`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `PlayersPlaying`  AS  select `P`.`Fname` AS `Fname`,`P`.`Lname` AS `Lname` from (`Player` `P` left join `Team` `T` on((`P`.`TeamNo` = `T`.`TeamNo`))) ;

-- --------------------------------------------------------

--
-- Structure for view `Team1Stats`
--
DROP TABLE IF EXISTS `Team1Stats`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Team1Stats`  AS  select `P`.`Fname` AS `Fname`,`P`.`Lname` AS `Lname`,`P`.`Position` AS `Position`,`S`.`TotalPoints` AS `TotalPoints`,`S`.`TotalAssists` AS `TotalAssists`,`S`.`GamesPlayed` AS `GamesPlayed` from (`Player` `P` join `PlayerStats` `S`) where (`P`.`TeamNo` in (select `Team`.`TeamNo` from `Team` where (`Team`.`TeamNo` = 1)) and (`S`.`PlayerID` = `P`.`PlayerID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `TeamPointsTable`
--
DROP TABLE IF EXISTS `TeamPointsTable`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `TeamPointsTable`  AS  select `T`.`TeamName` AS `TeamName`,`Standings`.`Wins` AS `Wins`,`Standings`.`Losses` AS `Losses` from (`Team` `T` join `Standings` on((`Standings`.`TeamNo` = `T`.`TeamNo`))) order by `Standings`.`Wins` desc ;

-- --------------------------------------------------------

--
-- Structure for view `TeamRanking`
--
DROP TABLE IF EXISTS `TeamRanking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `TeamRanking`  AS  select `S`.`TeamRank` AS `TeamRank`,`S`.`TeamNo` AS `TeamNo`,`T`.`TeamName` AS `TeamName`,`S`.`Wins` AS `Wins`,`S`.`Losses` AS `Losses` from (`Team` `T` join `Standings` `S`) where (`S`.`TeamNo` = `T`.`TeamNo`) order by `S`.`TeamRank` ;

-- --------------------------------------------------------

--
-- Structure for view `TeamSeason`
--
DROP TABLE IF EXISTS `TeamSeason`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `TeamSeason`  AS  select `S`.`GameTime` AS `Game Time`,`HT`.`TeamName` AS `Home Team`,`VT`.`TeamName` AS `Visiting Team`,`A`.`ArenaName` AS `Arena` from (((`Schedule` `S` join `Arena` `A`) join `Team` `HT`) join `Team` `VT`) where ((`S`.`Arena` = `A`.`ArenaNo`) and (`HT`.`TeamNo` = `S`.`HomeTeamNo`) and (`VT`.`TeamNo` = `S`.`VisitorTeamNo`)) order by `S`.`GameTime` ;

-- --------------------------------------------------------

--
-- Structure for view `TopPlayers`
--
DROP TABLE IF EXISTS `TopPlayers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `TopPlayers`  AS  select `P`.`Fname` AS `Fname`,`P`.`Lname` AS `Lname`,`PS`.`TotalPoints` AS `TotalPoints` from ((`Player` `P` join `Team` `T` on((`P`.`TeamNo` = `T`.`TeamNo`))) join `PlayerStats` `PS`) where (`PS`.`PlayerID` = `P`.`PlayerID`) order by `PS`.`TotalPoints` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Arena`
--
ALTER TABLE `Arena`
  ADD PRIMARY KEY (`ArenaNo`);

--
-- Indexes for table `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`PlayerID`),
  ADD KEY `TeamNo` (`TeamNo`);

--
-- Indexes for table `PlayerStats`
--
ALTER TABLE `PlayerStats`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `Schedule`
--
ALTER TABLE `Schedule`
  ADD PRIMARY KEY (`MatchNo`),
  ADD KEY `VisitorTeamNo` (`VisitorTeamNo`),
  ADD KEY `HomeTeamNo` (`HomeTeamNo`),
  ADD KEY `Arena` (`Arena`),
  ADD KEY `WinningTeamNo` (`WinningTeamNo`);

--
-- Indexes for table `Standings`
--
ALTER TABLE `Standings`
  ADD PRIMARY KEY (`TeamNo`);

--
-- Indexes for table `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`TeamNo`),
  ADD KEY `HomeArena` (`HomeArena`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Player`
--
ALTER TABLE `Player`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Player`
--
ALTER TABLE `Player`
  ADD CONSTRAINT `Player_ibfk_1` FOREIGN KEY (`TeamNo`) REFERENCES `Team` (`TeamNo`);

--
-- Constraints for table `PlayerStats`
--
ALTER TABLE `PlayerStats`
  ADD CONSTRAINT `PlayerStats_ibfk_1` FOREIGN KEY (`PlayerID`) REFERENCES `Player` (`PlayerID`);

--
-- Constraints for table `Schedule`
--
ALTER TABLE `Schedule`
  ADD CONSTRAINT `Schedule_ibfk_1` FOREIGN KEY (`VisitorTeamNo`) REFERENCES `Team` (`TeamNo`),
  ADD CONSTRAINT `Schedule_ibfk_2` FOREIGN KEY (`HomeTeamNo`) REFERENCES `Team` (`TeamNo`),
  ADD CONSTRAINT `Schedule_ibfk_3` FOREIGN KEY (`Arena`) REFERENCES `Arena` (`ArenaNo`),
  ADD CONSTRAINT `Schedule_ibfk_4` FOREIGN KEY (`WinningTeamNo`) REFERENCES `Team` (`TeamNo`);

--
-- Constraints for table `Standings`
--
ALTER TABLE `Standings`
  ADD CONSTRAINT `Standings_ibfk_1` FOREIGN KEY (`TeamNo`) REFERENCES `Team` (`TeamNo`);

--
-- Constraints for table `Team`
--
ALTER TABLE `Team`
  ADD CONSTRAINT `Team_ibfk_1` FOREIGN KEY (`HomeArena`) REFERENCES `Arena` (`ArenaNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
