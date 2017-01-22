-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 11:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Amir Mustafa', 'amirengg15@gmail.com', '8170954991', 'Test Mail Test Mail Test MailTest MailTest Mail'),
(36, 'AMIR MUSTAFA', 'amirengg15@gmail.com', '8170954991', 'This is the test mail. Love to code.. Dream to bec'),
(41, 'Keane Rosa', 'sekyr@hotmail.com', '+682-52-75', 'Accusantium placeat, qui natus quis ducimus, est t'),
(42, 'Stella Campbell', 'topihocusi@yahoo.com', '+615-47-19', 'Labore consequatur perferendis unde similique nihi'),
(45, 'Lamar Dennis', 'vitijo@hotmail.com', '+541-63-61', 'Non architecto illo consequatur? Vel fugit, obcaec'),
(46, 'Jin Figueroa', 'wofa@hotmail.com', '+672-15-92', 'Proident, molestiae quibusdam eligendi adipisci ea'),
(47, 'Benjamin Willis', 'caxeb@gmail.com', '+715-64-65', 'Est est similique suscipit voluptatum molestiae de'),
(48, 'Lee Miranda', 'xymyg@hotmail.com', '+643-55-82', 'Architecto quia et est, vero cum sint repudiandae '),
(49, 'Lareina Richards', 'zaqela@hotmail.com', '+199-42-68', 'Dolorum voluptas qui exercitationem qui voluptatib'),
(50, 'Azalia Beasley', 'tyzufetyd@gmail.com', '+342-96-93', 'Consequatur? Et vitae voluptas anim consequatur, v'),
(51, 'Shaeleigh Mcleod', 'shaeleigh.mcleod@hotmail.com', '+965-61-18', 'Hi,\r\nPlease send me the information regarding Paypal Integration.\r\nSoftcrayons');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
