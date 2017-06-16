-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2017 at 05:40 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `interlude`
--

CREATE TABLE `interlude` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interlude`
--

INSERT INTO `interlude` (`id`, `image`) VALUES
(1, '<img src=\"img/interlude6.jpg\" alt=\"interlude 1\">'),
(2, '<img src=\"img/interlude7.jpg\" alt=\"interlude 2\">'),
(3, '<img src=\"img/interlude3.jpg\" alt=\"interlude 3\">'),
(4, '<img src=\"img/interlude4.jpg\" alt=\"interlude 4\">'),
(5, '<img src=\"img/interlude5.jpg\" alt=\"interlude 5\">');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(7) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `images`) VALUES
(1, 'datPiff Redesign', 'A site redesign for datPiff. datPiff is a mixtpe sharing site. Many well known artists release their music on datPiff. The site focuses on allowing users to discover and share new music. The goal of my redesign was to centralize that focus even more. I created a more streamlined experience for users.', '<div class=\"images\">\r\n      <img src=\"img/dat1.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat2.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat3.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat4.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat5.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat6.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat7.jpg\" alt=\"datpiff redesign screenshot\">\r\n      <img src=\"img/dat8.jpg\" alt=\"datpiff redesign screenshot\">\r\n</div>'),
(2, 'theFADER Redesign', 'A site redesign for theFADER. FADER is a pop culture magazine focusing on music and fashion. They have become a well known publication in the hip-hop, indie, and streetwear worlds. Their covers are quite prolific featuring stunning portraits of well known artists. I chose to redesign their site at three breakpoints focusing on this amazing imagery.', '<div class=\"images\">\r\n      <img src=\"img/faderd1.jpg\" alt=\"desktop fader redesign screenshot\">\r\n      <img src=\"img/faderd2.jpg\" alt=\"desktop fader redesign screenshot\">\r\n      <img src=\"img/faderd3.jpg\" alt=\"desktop fader redesign screenshot\">\r\n      <img src=\"img/faderm1.jpg\" alt=\"mobile fader redesign screenshot\">\r\n      <img src=\"img/faderm2.jpg\" alt=\"mobile fader redesign screenshot\">\r\n      <img src=\"img/faderm3.jpg\" alt=\"mobile fader redesign screenshot\">\r\n</div>'),
(3, 'Kanye the Zodiac Killer', 'In order to gain more experience in Javascript I worked on a zodiac calculator. This calculator asks for a birth date and runs that information through several scripts that assign you to a specific Kanye West song. The site calculates your song and then presents your result with audio and video. Click <a href=\"http://brendanr.us/kanye/\">here</a> for more info!', '<div class=\"images\">\r\n      <img src=\"img/kanye1.jpg\" alt=\"kanye zodiac generator screenshot\">\r\n      <img src=\"img/kanye2.jpg\" alt=\"kanye zodiac generator screenshot\">\r\n      <img src=\"img/kanye3.jpg\" alt=\"kanye zodiac generator screenshot\">\r\n      <img src=\"img/kanye4.jpg\" alt=\"kanye zodiac generator screenshot\">\r\n      <img src=\"img/kanye5.jpg\" alt=\"kanye zodiac generator screenshot\">\r\n    </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interlude`
--
ALTER TABLE `interlude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interlude`
--
ALTER TABLE `interlude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
