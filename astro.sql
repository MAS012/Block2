-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2021 at 02:55 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `astronaut`
--

CREATE TABLE IF NOT EXISTS `astronaut` (
  `astronaut_id` int(11) NOT NULL,
  `name` text,
  `no_missions` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astronaut`
--

INSERT INTO `astronaut` (`astronaut_id`, `name`, `no_missions`) VALUES
(7, 'Hank', 2),
(8, 'Matt', 2),
(24, 'asdsa', 123),
(25, '124', 123),
(26, 'sÅ‚Ã³w', 12),
(27, 'test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `atttends`
--

CREATE TABLE IF NOT EXISTS `atttends` (
  `mission_id` int(30) NOT NULL,
  `astronaut_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atttends`
--

INSERT INTO `atttends` (`mission_id`, `astronaut_id`) VALUES
(1, 7),
(5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `destination` text,
  `launch_date` date DEFAULT NULL,
  `type` text,
  `crew_size` int(11) DEFAULT NULL,
  `mission_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`destination`, `launch_date`, `type`, `crew_size`, `mission_id`, `target_id`) VALUES
('Moon', '2021-12-12', 'Rockets', 222, 1, 1),
('MArs', '2021-12-26', 'normal', 200, 2, 1),
('MArs', '2021-12-26', 'normal', 200, 3, 1),
('MArs', '2021-12-26', 'normal', 200, 4, 1),
('Moon', '2021-12-26', 'normal', 145, 5, 1),
('mars', '2021-12-10', 'space', 3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL,
  `name` text,
  `first_mission` text,
  `type` text,
  `no_missions` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `name`, `first_mission`, `type`, `no_missions`) VALUES
(1, 'Moon', '1997', 'Rockets', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astronaut`
--
ALTER TABLE `astronaut`
  ADD PRIMARY KEY (`astronaut_id`);

--
-- Indexes for table `atttends`
--
ALTER TABLE `atttends`
  ADD PRIMARY KEY (`mission_id`,`astronaut_id`),
  ADD KEY `astronaut_id` (`astronaut_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `fk_target_id` (`target_id`);

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astronaut`
--
ALTER TABLE `astronaut`
  MODIFY `astronaut_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `targets`
--
ALTER TABLE `targets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `atttends`
--
ALTER TABLE `atttends`
  ADD CONSTRAINT `astronaut_idfk` FOREIGN KEY (`astronaut_id`) REFERENCES `astronaut` (`astronaut_id`),
  ADD CONSTRAINT `mission_idfk` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`mission_id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `fk_target_id` FOREIGN KEY (`target_id`) REFERENCES `targets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
