-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2017 at 08:11 AM
-- Server version: 10.2.8-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `describe` text NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `author`, `title`, `slug`, `year`, `describe`, `genre`) VALUES
(5, 'Jennifer Egan ', 'MANHATTAN BEACH ', 'book-1', 2017, 'In the opening pages of “Manhattan Beach” — Jennifer Egan’s first novel since she won the 2011 Pulitzer Prize in fiction for “A Visit From the Goon Squad” — an 11-year-old girl named Anna Kerrigan visits the titular stretch of Brooklyn shoreline on a winter day in the company of her father, Eddie, and an underworld figure named Dexter Styles. Though this encounter in 1934 is brief, and circumstances quickly send the three characters in disparate directions, readers will understand that their fates have just become inextricably intertwined. They may also understand, rightly, that this will turn out to be a more traditional novel than the raucous and inventive “Goon Squad,” although the two books offer many of the same pleasures, including fine turns of phrase, a richly imagined environs and a restless investigation into human nature.\r\n\r\n', 'Drama'),
(6, 'Holly Grant', 'WEE SISTER STRANGE \r\n', 'book-2', 2007, 'Autumn: when the falling leaves drift by the window, and the days dwindle down to a precious few, and songwriters wax especially melancholic. It makes sense that we celebrate our spookiest holidays, Halloween and the Day of the Dead, when the newly crisp air carries with it premonitions of loss and mortality. But autumn is also a time of renewal and harvest — and of reckoning, as in Judaism’s Days of Awe. It is our subtlest season, our bittersweet season, one that can prompt feelings of deep yearning. C. S. Lewis wrote about this in “Surprised by Joy,” when he recalled reading Beatrix Potter’s “The Tale of Squirrel Nutkin” as a boy: “It troubled me with what I can only describe as the idea of Autumn. It sounds fantastic to say that one can be enamored of a season, but that is something like what happened … the experience was one of intense desire.” For me, fall evokes a kind of present-tense nostalgia — a wallow in fleetingness, perhaps.', 'Mystery'),
(16, 'Carol Rumens', 'Carol Rumens\'s poem of the week\r\n', 'Book-4', 2009, '‘Break a vase,’ says Derek Walcott, ‘and the love \r\nthat reassembles the pieces will be stronger than \r\nthe love that took its symmetry for granted.’\r\nWhen I read this I can only think who broke it?\r\n\r\nIn the British Museum, two black ‘figures’ \r\n(they don’t say slaves) beat olives from a tree;\r\na ‘naked youth’ stoops to gather the fallen \r\nfruit. The freeborn men are elsewhere, safe', 'Poetry'),
(18, 'Neil Spencer', 'The Opserver', 'The-Opserver', 2002, '<p>The vitriolic bust-up between Rolling Stone founder Jann Wenner and his appointed biographer, Joe Hagan, has already generated headlines, with Wenner denouncing Sticky Fingers as &ldquo;tawdry&rdquo; and Hagan, an investigative reporter, replying that a man used to getting his way won&rsquo;t like a portrait that includes both darkness and light.</p>\r\n', 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `navId` int(11) NOT NULL,
  `navName` varchar(255) NOT NULL,
  `navLinkUrl` varchar(255) NOT NULL,
  `navPlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`navId`, `navName`, `navLinkUrl`, `navPlace`) VALUES
(1, 'Home', '/home', '0'),
(2, 'Library', '/books', '0'),
(3, 'Add Book', '/books/create', '1'),
(4, 'About', '/about', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`navId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `navId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
