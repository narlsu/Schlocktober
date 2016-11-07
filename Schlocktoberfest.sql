-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 12:17 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Schlocktoberfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `price`, `description`) VALUES
(1, 'Collectable DVD', '30.00', 'A collectable DVD. Zone 4'),
(2, 'Dinner for five', '159.00', 'Rob Zombie, Bruce Campbell, Roger Corman, Faizon Love');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `description`) VALUES
(1, 'Troll 2', 1990, 'When young Joshua (Michael Stephenson) learns that he will be going on vacation with his family to a small town called Nilbog, he protests adamantly. He is warned by the spirit of his deceased grandfather that goblins populate the town. His parents, Michael (George Hardy) and Diana (Margo Prey), dismiss his apprehensions, but soon learn to appreciate their son''s warnings. Guided by his grandfather''s ghost, will Joshua and his family stand a chance in fighting off these evil beings?'),
(2, 'Independence Day: Resurgence', 2016, 'As the Fourth of July nears, satellite engineer David Levinson (Jeff Goldblum) investigates a 3,000-mile-wide mother ship that''s approaching Earth. Fortunately, 20 years earlier, nations across the world started to use recovered extraterrestrial technology to develop an immense defense program. When the alien invaders attack with unprecedented force, the U.S. president, teams of scientists and brave fighter pilots spring into action to save the planet from a seemingly invincible enemy.'),
(3, 'You Don''t Mess with the Zohan', 2008, 'Tired of all the fighting in his country, legendary Israeli commando Zohan -Adam Sandler fakes his own death and goes to New York, where he can fulfill his fondest dream: to become a hairstylist. Zohan''s sexy way with a cut and curl makes him a hit with Manhattan''s women, but when enemy Arabs spot him, Zohan has to call on his military skills if he is ever to wield scissors again.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
