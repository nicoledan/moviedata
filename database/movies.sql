-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2017 at 12:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `director` text NOT NULL,
  `genre` text NOT NULL,
  `tomatometer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `director`, `genre`, `tomatometer`) VALUES
(1, 'Hidden Figures', 'Ted Melfi', 'drama', 93),
(4, 'Rogue One: A Star Wars Story', 'Gareth Edwards (V)', 'drama', 85),
(5, 'Suicide Squad', 'David Ayer', 'drama', 26),
(6, 'Big Hero 6', 'Chris Williams (IX), Don Hall', 'animation', 89),
(7, 'Moana', 'Jared Bush', 'animation', 95),
(8, 'Lion', 'Garth Davis', 'drama', 86),
(9, '13th', 'Ava Duvernay', 'documentary', 97),
(10, 'Get Out', 'Jordan Peele', 'horror', 100),
(11, 'Queen of Katwe', 'Mira Nair', 'drama', 92),
(12, 'Tangerine', 'Sean Baker (II)', 'comedy', 97);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
