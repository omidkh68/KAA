-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2016 at 11:43 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavoshabzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `About_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`About_id`, `text`) VALUES
(1, 'Kavosh Abzar Arya , with high experience in the field of Oil-Gas , Power Plants &amp; Marine , is\n                leading supplier to various industries in Iran.The company main focus is to provide highly reliable\n                engineering products and quality services to meet and drive to exceed individual customer`s\n                specifications and requirements.\n\n                <br>\n                <br>\n\n                We value customers view &amp; commit to enthusiastically &amp; sincerely serve our customer. Our member\n                shall act in securing health, safety &amp; good environment in accordance with social value and\n                concerns.');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `lang` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `theme` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `lang`, `theme`) VALUES
(1, 'fa', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_id` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `email` text COLLATE utf8_persian_ci NOT NULL,
  `subject` text COLLATE utf8_persian_ci NOT NULL,
  `message` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `omg`
--

CREATE TABLE `omg` (
  `Omg_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `brief_desc` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `omg`
--

INSERT INTO `omg` (`Omg_id`, `text`, `brief_desc`) VALUES
(1, '<br> \r\n                        Officine Meccaniche Gallaratesi S.p.A. was established in 1907 by a group of Milanese \r\n                        entrepreneurs. \r\n                        <br><br> \r\n                        The company’s main activity during its early years was centred around\r\n                        an engineering workshop  and its annexed cast iron foundry and aimed at satisfying the\r\n                        increasing demands of the rapidly  expanding Lombardy industry at the start of the\r\n                        century.During the following years, the company  added the construction of machines to its\r\n                        production. \r\n                        <br><br> \r\n                        The first patent for an hollow disc rotary pump was registrered in 1918.\r\n                        The principle patented  at the time is being used in a series of pumps still in production. \r\n                        <br><br> \r\n                        The 1950''s saw the design and production of the first plunger dosing pump. The range\r\n                        of dosing  pumps has since been expanded with the introduction of a number of diaphragm dosing\r\n                        pumps during  the 70''s. \r\n                        <br><br> \r\n                        In the same 1970’s, OMG expanded its activities to include\r\n                        the design and construction of  package dosing systems, manufactured according to customer’s\r\n                        specifications and the main  governing standards for Oil & Gas, chemical and petrochemical\r\n                        markets. \r\n                        <br><br> \r\n                        During the 1980''s, OMG initiated the introduction of a formalised quality\r\n                        system, with the first  complete quality system being adopted in 1992. In the spring of 1996,\r\n                        OMG quality system was  certified as conforming to ISO 9001.\r\n                        <br><br> \r\n                        Unlike other pump\r\n                        manufacturers, OMG has chosen to retain all design and construction activities  in its property\r\n                        maintaining a higher level of quality control and greater manufacturing  flexibility. This\r\n                        enables OMG to develop customized tailormade applications meeting all specific  dosing\r\n                        requirements.  ', 'Officine Meccaniche Gallaratesi S.p.A. was established in 1907 by a group of Milanese \r\n                        entrepreneurs.');

-- --------------------------------------------------------

--
-- Table structure for table `optimarin`
--

CREATE TABLE `optimarin` (
  `Optimarin_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `brief_desc` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `optimarin`
--

INSERT INTO `optimarin` (`Optimarin_id`, `text`, `brief_desc`) VALUES
(1, '<br>\r\n                        Optimarin AS was founded in 1994 in Stavanger, a town along the west coast of Norway and we\r\n                        were one of the first companies in the world to develop a system for environmentally friendly\r\n                        purification of ballast water.\r\n                        <br><br>\r\n                        Although we recognized that there were various methods for purifying ballast water, both\r\n                        chemical and environmentally friendly methods, we chose to pursue a solution that does not use\r\n                        any chemicals and leaves no residual products that are harmful to the ocean or the environment.\r\n                        In the year of 2000  we were honored by installing the world’s first ballast water treatment\r\n                        system on board the cruise ship Regal Princess.\r\n                        <br><br>\r\n                        After several years of testing, developing and patenting new technology, we finally obtained\r\n                        type approval for the Optimarin Ballast System in 2009, in accordance with Guideline 8 and the\r\n                        ‘International Convention for the Control and Management of Ships’ Ballast Water\r\n                        and Sediments, 2004’. The Optimarin Ballast System (OBS) uses approved technology that\r\n                        significantly exceeds the stringent requirements set out in the IMO Convention. But for\r\n                        Optimarin, it is not enough to simply be approved. We operate in accordance with ISO 9001 / 2008\r\n                        and our vision is to have the most environmentally friendly ballast water purification system in\r\n                        the world.\r\n                        <br><br>\r\n                        At our main office in Sandnes we have a fully operational Optimarin Ballast System test facility\r\n                        which may be used for training of customer’s technical personnel, or for internal R&D purposes.\r\n                        <br><br>\r\n                        Our Logistics department has established a main warehouse facility strategically placed in\r\n                        Europe, in Luxemburg – with excellent connections to airports, shipping ports and land based\r\n                        transportation of our products on their way to our customers all over the world.', 'Optimarin AS was founded in 1994 in Stavanger, a town along the west coast of Norway and we\n                        were one of the first companies in the world to develop a system for environmentally friendly\n                        purification of ballast water.');

-- --------------------------------------------------------

--
-- Table structure for table `pressRelease`
--

CREATE TABLE `pressRelease` (
  `PressRelease_id` int(11) NOT NULL,
  `subject` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `image_name` text COLLATE utf8_persian_ci NOT NULL,
  `image_desc` text COLLATE utf8_persian_ci NOT NULL,
  `image_type` varchar(4) COLLATE utf8_persian_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pressRelease`
--

INSERT INTO `pressRelease` (`PressRelease_id`, `subject`, `description`, `image_name`, `image_desc`, `image_type`, `create_date`) VALUES
(1, 'خبر ۱', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut dolor, doloribus eaque in\r\n                    laudantium libero maiores molestias neque odit, perferendis perspiciatis porro, quibusdam quidem\r\n                    rerum sapiente sunt vero voluptatum', 'omg-banner', 'خبر ۱', 'jpg', '2016-10-28 19:47:30'),
(2, 'News 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut dolor, doloribus eaque in\r\n                    laudantium libero maiores molestias neque odit, perferendis perspiciatis porro, quibusdam quidem\r\n                    rerum sapiente sunt vero voluptatum', 'optimarin-banner', 'news 2', 'jpg', '2016-10-28 19:48:10'),
(3, 'News 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut dolor, doloribus eaque in\r\n                    laudantium libero maiores molestias neque odit', 'optimarin-banner', 'news 3', 'jpg', '2016-10-28 19:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Slider_id` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(4) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Slider_id`, `name`, `description`, `type`) VALUES
(1, 'kavoshabzar-background-1', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(2, 'kavoshabzar-background-2', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(3, 'kavoshabzar-background-3', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(4, 'kavoshabzar-background-4', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(5, 'kavoshabzar-background-5', 'Image Credit: Kavosh Abzar Aria', 'jpg'),
(6, 'kavoshabzar-background-6', 'Image Credit: Kavosh Abzar Aria', 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`About_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `omg`
--
ALTER TABLE `omg`
  ADD PRIMARY KEY (`Omg_id`);

--
-- Indexes for table `optimarin`
--
ALTER TABLE `optimarin`
  ADD PRIMARY KEY (`Optimarin_id`);

--
-- Indexes for table `pressRelease`
--
ALTER TABLE `pressRelease`
  ADD PRIMARY KEY (`PressRelease_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `About_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `omg`
--
ALTER TABLE `omg`
  MODIFY `Omg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `optimarin`
--
ALTER TABLE `optimarin`
  MODIFY `Optimarin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pressRelease`
--
ALTER TABLE `pressRelease`
  MODIFY `PressRelease_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
