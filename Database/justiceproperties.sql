-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2021 at 01:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justiceproperties`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`EmailAddress`),
  UNIQUE KEY `EmailAddress` (`EmailAddress`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Firstname`, `Lastname`, `Age`, `Gender`, `EmailAddress`, `Password`, `City`, `Country`, `PostalCode`, `Contact`, `Status`) VALUES
('Noel', 'Phiri', 24, 'Male', 'phirinoel289@gmail.com', 'EthicalHunned12', 'Blantyre', 'Malawi', 'P.O Box 2323', '0885739805', 'Active'),
('Admin', 'Admin', 30, 'male', 'buyjusticeproperties@gmail.com', 'Admin@2021', 'Blantyre', 'Malawi', 'BT588', '0996873075', 'Active'),
('Noel', 'Phiri', 14, 'Male', 'phirinoe@gmail.com', 'asdfghj1', 'Blantyre', 'Malawi', 'P.O BOX 2323', '0885739805', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `Firstname`, `Lastname`, `Email`, `Subject`, `Message`) VALUES
(1, 'Noel', 'Phiri', 'phirinoel289@gmail.com', 'Account Password Recovery Request', 'Unblock the Account and Send a Temporary Password via the Email'),
(2, 'Noel', 'James', 'NoelJames@gmail.com', 'Property Listing Request', 'I wanted to List on of my properties on your website, what are your requirements and how do the arrangements go?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmailAddress` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `EmailAddress`, `Message`, `Date`) VALUES
(1, 'phirinoel289@gmail.com', 'I didn\'t find the desired property I was looking for..', '2021-07-04 22:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE IF NOT EXISTS `inquiries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyID` varchar(10) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  KEY `EmailAddress` (`EmailAddress`),
  KEY `PropertyID` (`PropertyID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`ID`, `PropertyID`, `EmailAddress`, `Firstname`, `Lastname`, `Message`, `seen`) VALUES
(1, 'JP04', 'phirinoel99@gmail.com', 'Noel', 'Phiri', 'Hello i wanted to know more about the property in terms of whole size of the property and if you are willing to cut the price abit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `PropertyID` varchar(30) DEFAULT NULL,
  `Amount` float NOT NULL,
  `PaymentReference` varchar(300) DEFAULT NULL,
  `PayerID` varchar(300) DEFAULT NULL,
  `Token` varchar(400) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `seen` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`PaymentID`),
  KEY `UserID` (`EmailAddress`),
  KEY `PropertyID` (`PropertyID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `EmailAddress`, `PropertyID`, `Amount`, `PaymentReference`, `PayerID`, `Token`, `Date`, `seen`) VALUES
(1, 'phirinoel289@gmail.com', 'JP02', 10000, 'PAYID-MDTOUPA6HU09775748669307', 'EUJYSHW4NKL5C', 'EC-8XB5805879062374E', '2021-07-08 12:06:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `PropertyID` varchar(20) NOT NULL,
  `PropertyType` varchar(30) DEFAULT NULL,
  `PropertyStatus` varchar(20) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Currency` varchar(10) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Banner` varchar(20) NOT NULL,
  PRIMARY KEY (`PropertyID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`PropertyID`, `PropertyType`, `PropertyStatus`, `Location`, `City`, `Price`, `Currency`, `Description`, `Banner`) VALUES
('JP01', 'Morden Flat', 'Available', 'Sunnyside', 'Blantyre', 10000, 'USD', 'Five Bedroom (3 Ensuite) house well suited for a Big Family. The House has spacious Lounge, Dinning room, Kitchen with a large pantry, Front and Rear Velander with a Guest wing with a Bedroom, Lounge and Kitchen', 'sunny1.jpg'),
('JP02', 'Morden Flat', 'Sold', 'Area 46 Dubai', 'Lilongwe', 10000, 'USD', 'Four Bedroom (2 Ensuite) house well suited for a medium sized Family. The House has spacious Lounge, Dinning room, Kitchen. Two roomed staff Quarters', 'dubai1.jpg'),
('JP03', 'Morden Flat', 'Available', 'Nyambadwe', 'Blantyre', 10000, 'USD', 'This newly Constructed Houses comprises of a spacious open plan lounge and dinning area, Mordern Kitchen with Pantry. 3 Bedrooms with main Ensuite. Secured in Brick fense with a garden allowing wholesome summer outdoor activities and further development like Swimming pool ', 'nyambadwe1.jpg'),
('JP04', 'Morden Flat', 'Available', 'Area 49 New Shire', 'Lilongwe', 10000, 'USD', 'This newly Constructed Houses comprises of a spacious open plan lounge and dinning area, Mordern Kitchen with Pantry and 4 Bedroom (2 Ensuite) fully tiled indoors. Near the Road with Uncompleted Brick Fence.', 'Area49.jpg'),
('JP05', 'Morden Flat', 'Available', 'Area 25 C', 'Lilongwe', 9000, 'USD', 'This newly Constructed Houses comprises of 4 Bedrooms master Ensuite with separate Dinning and living rooms. It is Sorrounded with a Brick fense. Near to the Market and Schools. ', 'Area25c.jpg'),
('JP06', 'Morden Flat', 'Available', 'New Naperi', 'Blantyre', 8500, 'USD', 'This newly Constructed Houses comprises of 4 Bedrooms master Ensuite. It is in a Secure compound and close to chikhwawa road. The Outdoors compound has cement brick Floors and splenty space for new reinovations and Parking space. The property has a Guest wing and a boys Quarter and a Guard Room', 'Newnaperi1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propertyimages`
--

DROP TABLE IF EXISTS `propertyimages`;
CREATE TABLE IF NOT EXISTS `propertyimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyID` varchar(20) DEFAULT NULL,
  `Image` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PropertyID` (`PropertyID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertyimages`
--

INSERT INTO `propertyimages` (`id`, `PropertyID`, `Image`) VALUES
(1, 'JP01', 'sunny1.jpg'),
(2, 'JP01', '4381.jpg'),
(3, 'JP01', '4108.jpg'),
(4, 'JP02', 'dubai1.jpg'),
(5, 'JP02', '4352.jpg'),
(6, 'JP02', '4354.jpg'),
(7, 'JP03', 'nyambadwe1.jpg'),
(8, 'JP03', '4212.jpg'),
(9, 'JP03', '4214.jpg'),
(10, 'JP04', 'Area49.jpg'),
(11, 'JP04', '3760.jpg'),
(12, 'JP04', '3759.jpg'),
(13, 'JP05', 'Area25c.jpg'),
(14, 'JP05', '3471.jpg'),
(15, 'JP05', '3472.jpg'),
(16, 'JP06', 'Newnaperi1.jpg'),
(17, 'JP06', '4105.jpg'),
(18, 'JP06', '4380.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propertyowner`
--

DROP TABLE IF EXISTS `propertyowner`;
CREATE TABLE IF NOT EXISTS `propertyowner` (
  `OwnerID` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyID` varchar(20) DEFAULT NULL,
  `Firstname` varchar(40) DEFAULT NULL,
  `Lastname` varchar(20) NOT NULL,
  `EmailAddress` varchar(30) DEFAULT NULL,
  `Contact` varchar(20) NOT NULL,
  PRIMARY KEY (`OwnerID`),
  KEY `PropertyID` (`PropertyID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertyowner`
--

INSERT INTO `propertyowner` (`OwnerID`, `PropertyID`, `Firstname`, `Lastname`, `EmailAddress`, `Contact`) VALUES
(1, 'JP01', 'James', 'Joe', 'phirinoel289@gmail.com', '0996873073');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `Email` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`Email`, `Date`) VALUES
('phirinoel289@gmail.com', '2021-07-04 20:11:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
