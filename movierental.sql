-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 11:54 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movierental`
--

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `discountid` int(10) unsigned NOT NULL,
  `movieid` int(10) unsigned NOT NULL,
  `percentage` int(10) unsigned NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movieid` int(10) unsigned NOT NULL,
  `title` char(30) NOT NULL,
  `director` char(20) NOT NULL,
  `genre` char(20) NOT NULL,
  `length` int(11) NOT NULL,
  `releasedate` datetime NOT NULL,
  `imageid` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `title`, `director`, `genre`, `length`, `releasedate`, `imageid`) VALUES
(1, 'IT', 'Andy Muschietti', 'Horror', 135, '2017-09-08 00:00:00', 'it'),
(2, 'Jigsaw', 'Michael Spierig', 'Horror', 92, '2017-10-27 00:00:00', 'jigsaw'),
(3, 'Happy Death Day', 'Christopher Landon', 'Horror', 96, '2017-10-17 00:00:00', 'happy'),
(4, 'The Dark Tower', 'Nikolaj Arcel', 'Action', 95, '2017-08-04 00:00:00', 'dark'),
(5, 'Lycan', 'Bev Land', 'Horror', 87, '2017-08-04 00:00:00', 'lycan'),
(6, 'Justice League', 'Zack Snyder', 'Action', 120, '2017-11-17 00:00:00', 'justice'),
(7, 'Dunkirk', 'Christopher Nolan', 'Drama', 106, '2017-07-21 00:00:00', 'dunkirk'),
(8, 'The Hitman''s Bodyguard', 'Patrick Hughes', 'Comedy', 118, '2017-08-18 00:00:00', 'hitman'),
(9, 'American Assassin', 'Michael Cuesta', 'Action', 112, '2017-09-15 00:00:00', 'assassin'),
(10, 'Kingsman: The Golden Circle', 'Matthew Vaughn', 'Action', 141, '2017-09-22 00:00:00', 'kingsman'),
(11, 'Daddy''s Home', 'Sean Anders', 'Comedy', 100, '2017-11-10 00:00:00', 'daddy'),
(12, 'A Bad Moms Christmas', 'Jon Lucas', 'Comedy', 104, '2017-11-01 00:00:00', 'moms'),
(13, 'The Mountain Between Us', 'Hany Abu-Assad', 'Drama', 112, '2017-10-06 00:00:00', 'mountain'),
(14, 'Guardians of the Galaxy Vol. 2', 'James Gunn', 'Action', 136, '2017-05-05 00:00:00', 'guardians'),
(15, 'Thor: Ragnarok', 'Taika Waititi', 'Action', 130, '2017-11-03 00:00:00', 'thor'),
(16, 'Fallen', 'Scott Hicks', 'Romance', 91, '2017-09-08 00:00:00', 'fallen'),
(17, 'Everything, Everything', 'Stella Meghie', 'Romance', 96, '2017-05-19 00:00:00', 'everything'),
(18, 'Despicable Me 3', 'Kyle Balda', 'Family', 90, '2017-06-30 00:00:00', 'despicable'),
(19, 'Almost Friends', 'Jake Goldberger', 'Comedy', 101, '2017-11-17 00:00:00', 'friends'),
(20, 'Moana', 'Ron Clements', 'Family', 107, '2016-11-23 00:00:00', 'moana');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`) VALUES
(1, 'alpha', 'Alex', 'Jones', '41a3d23e04b4c8c17cf049d60', 'st@st.com'),
(2, 'alexd', 'Test', 'Test', '8f036369a5cd26454949e594f', 'loL@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discountid`),
  ADD KEY `movieid` (`movieid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discountid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`movieid`) REFERENCES `movies` (`movieid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
