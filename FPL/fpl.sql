-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 07:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fpl`
--
CREATE DATABASE IF NOT EXISTS `fpl` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fpl`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `team_id` int(3) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `username`, `password`, `team_name`, `team_id`, `pic`, `budget`) VALUES
('asd', 'awd', 'qwd', 'Elegant XI', 1, '', 25),
('wer', 'rfre', 'qwerty', 'Red Devils', 2, '', 500),
('qwewf', 'hsfg', 'qwerty', 'Catalans', 3, '', 500),
('bwefhkbw', 'bfgbgh', 'qwerty', 'Boca Juniors', 4, '', 500),
('', 'sad', 'qwd', 'sdda', 5, 'uploads/1436616438814.jpg', 500),
('wd', 'wer', 'qwd', 'reeew', 6, 'uploads/IMG050.jpg', 500);

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

DROP TABLE IF EXISTS `leaderboard`;
CREATE TABLE IF NOT EXISTS `leaderboard` (
  `username` varchar(20) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `team_id` int(3) NOT NULL,
  `points` int(4) NOT NULL,
  `substitutions` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`username`, `team_name`, `team_id`, `points`, `substitutions`) VALUES
('awd', 'Elegant XI', 1, 1946, 5),
('rfre', 'Red Devils', 2, 1291, 5),
('hsfg', 'Catalans', 3, 1282, 5),
('bfgbgh', 'Boca Juniors', 4, 1221, 5),
('sad', '', 5, 1235, 5);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `no_of_matches` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`no_of_matches`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `player_name` varchar(20) NOT NULL,
  `player_id` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `player_cost` int(4) NOT NULL,
  `rating` double(5,3) NOT NULL,
  `total_rat` int(10) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_name`, `player_id`, `type`, `player_cost`, `rating`, `total_rat`, `picture`) VALUES
('De Gea', 1, '1', 20, 6.000, 114, 'degea1.jpg'),
('Iker Casillas', 2, '1', 15, 9.000, 101, 'casilas.jpg'),
('G. Buffon', 3, '1', 10, 10.000, 116, 'buffon.jpg'),
('Peter Cech', 4, '1', 15, 4.000, 108, 'cech.jpg'),
('C. Bravo', 5, '1', 10, 5.000, 105, 'bravo.jpg'),
('Wayne Rooney', 6, '4', 70, 10.000, 108, 'rooney1.jpg'),
('Cristiano Ronaldo', 7, '4', 130, 10.000, 122, 'ronaldo1.jpg'),
('Zlatan Ibrahimovic', 8, '4', 55, 7.000, 95, 'ibra.jpg'),
('Luis Suarez', 9, '4', 75, 9.000, 112, 'suarez.jpg'),
('Lionel Messi', 10, '4', 130, 9.000, 122, 'messi1.jpg'),
('R. Lewandowski', 11, '4', 50, 9.000, 104, 'lewa.jpg'),
('S.Aguero', 12, '4', 75, 5.000, 90, 'augero1.jpg'),
('Andres Iniesta', 13, '3', 45, 10.000, 97, 'iniesta1.jpg'),
('Toni Kroos', 14, '3', 40, 6.000, 89, 'kroos.jpg'),
('Xabi Alonso', 15, '3', 35, 8.000, 100, 'alonso.jpg'),
('L.Modric', 16, '3', 35, 9.000, 117, 'modric.jpg'),
('Mesut Ozil', 17, '3', 40, 9.000, 102, 'ozil.jpg'),
('Gareth Bale', 18, '3', 75, 5.000, 96, 'bale.jpg'),
('Angel DMaria', 19, '3', 65, 5.000, 90, 'dimaria.jpg'),
('Marco Reus', 20, '3', 60, 7.000, 83, 'reus.jpg'),
('Alexis Sanchez', 21, '3', 60, 8.000, 100, 'sanchez.jpg'),
('A. Robben', 22, '3', 65, 9.000, 124, 'robben.jpg'),
('Sergio Ramos', 23, '2', 35, 7.000, 96, 'ramos.jpg'),
('Gerrad Pique', 24, '2', 30, 9.000, 91, 'pique.jpg'),
('David Alaba', 25, '2', 25, 5.000, 100, 'alaba.jpg'),
('Dani Alves', 26, '2', 25, 7.000, 92, 'alves.jpg'),
('Mat Hummels', 27, '2', 30, 10.000, 111, 'hummels.jpg'),
('Thiago Silva', 28, '2', 25, 6.000, 90, 'tsilva.jpg'),
('Marcelo', 29, '2', 25, 4.000, 88, 'marcelo.jpg'),
('B. Ivanovic', 30, '2', 20, 6.000, 93, 'ivanovic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `player_type`
--

DROP TABLE IF EXISTS `player_type`;
CREATE TABLE IF NOT EXISTS `player_type` (
  `position` varchar(20) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_type`
--

INSERT INTO `player_type` (`position`, `type`) VALUES
('Goalkeeper', 1),
('Defender', 2),
('Mid-Fielder', 3),
('Forward', 4);

-- --------------------------------------------------------

--
-- Table structure for table `playing_team`
--

DROP TABLE IF EXISTS `playing_team`;
CREATE TABLE IF NOT EXISTS `playing_team` (
  `name` varchar(20) NOT NULL,
  `team_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(3) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `player1` int(2) NOT NULL,
  `player2` int(2) NOT NULL,
  `player3` int(2) NOT NULL,
  `player4` int(2) NOT NULL,
  `player5` int(2) NOT NULL,
  `player6` int(2) NOT NULL,
  `player7` int(2) NOT NULL,
  `player8` int(2) NOT NULL,
  `player9` int(2) NOT NULL,
  `player10` int(2) NOT NULL,
  `player11` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`) VALUES
(1, 'Elegant XI', 1, 25, 27, 23, 28, 13, 16, 17, 12, 9, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
