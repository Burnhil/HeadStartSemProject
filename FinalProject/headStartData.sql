-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for headstart
CREATE DATABASE IF NOT EXISTS `headstart` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `headstart`;

-- Dumping structure for table headstart.agechart
CREATE TABLE IF NOT EXISTS `agechart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Birthdate Age 4` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `AgeAsSep01` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `Birthdate Age 3` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `AgeAsSep011` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table headstart.agechart: ~14 rows (approximately)
/*!40000 ALTER TABLE `agechart` DISABLE KEYS */;
INSERT INTO `agechart` (`ID`, `Birthdate Age 4`, `AgeAsSep01`, `Birthdate Age 3`, `AgeAsSep011`) VALUES
	(1, 'Birthdate Age 4', 'Age as of 09/01/2018', 'Birthdate Age 3', 'Age as of 09/01/2018'),
	(2, '09/01/2014', '4 YR 0 MO', '09/0/2015', '3 YR 0 MO'),
	(3, '08/01/2014 - 08/31/2014', '4 YR 1 MO', '08/01/2015 - 08/31/2015', '3 YR 1 MO'),
	(4, '07/01/2014 - 07/31/2014', '4 YR 2 MO', '07/01/2015 - 07/31/2015', '3 YR 2 MO'),
	(5, '06/01/2014 - 06/30/2014', '4 YR 3 MO', '06/01/2015 - 06/30/2015', '3 YR 3 MO'),
	(6, '05/01/2014 - 05/31/2014', '4 YR 4 MO', '05/01/2015 - 05/31/2015', '3 YR 4 MO'),
	(7, '04/01/2014 - 04/30/2014', '4 YR 5 MO', '04/01/2015 - 04/30/2015', '3 YR 5 MO'),
	(8, '03/01/2014 - 03/31/2014', '4 YR 6 MO', '03/01/2015 - 03/31/2015', '3 YR 6 MO'),
	(9, '02/01/2014 - 02/28/2014', '4 YR 7 MO', '02/01/2015 - 02/28/2015', '3 YR 7 MO'),
	(10, '01/01/2014 - 01/31/2014', '4 YR 8 MO', '01/01/2015 - 01/31/2015', '3 YR 8 MO'),
	(11, '12/01/2013 - 12/31/2013', '4 YR 9 MO', '12/01/2014 - 12/31/2014', '3 YR 9 MO'),
	(12, '11/01/2013 - 11/30/2013', '4 YR 10 MO', '11/01/2014 - 11/30/2014', '3 YR 10 MO'),
	(13, '10/01/2013 - 10/31/2013', '4 YR 11 MO', '10/01/2013 - 10/31/2014', '3 YR 11 MO'),
	(14, '9/01/2013 - 9/30/2013', '4 YR 12 MO', '9/01/2014 - 9/30/2014', '3 YR 12 MO');
/*!40000 ALTER TABLE `agechart` ENABLE KEYS */;

-- Dumping structure for table headstart.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `LastName` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `KidsName` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `Income` int(11) NOT NULL DEFAULT '0',
  `PhoneNumber` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table headstart.contact: ~6 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`ID`, `FirstName`, `LastName`, `KidsName`, `Income`, `PhoneNumber`) VALUES
	(5, 'Bob', 'Sanders', 'Litte Jill', 32000, '405-256-5412'),
	(6, 'Bob', 'Sanders', 'Litte Larry', 50000, '405-256-7412'),
	(7, 'Terry', 'Smalls', 'Small Terry', 24000, '806-451-7458'),
	(8, 'John', 'Doe', 'Nameless One', 26000, '806-451-2541'),
	(9, 'Scott', 'Lang', 'Cassie', 300000, '678-136-7092'),
	(10, 'Ahsoka', 'Tano', 'Snips', 27000, '806-214-6524');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table headstart.guidelines
CREATE TABLE IF NOT EXISTS `guidelines` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `familySize` int(11) NOT NULL DEFAULT '0',
  `minimumIncome` int(11) NOT NULL DEFAULT '0',
  `maxIncome` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table headstart.guidelines: ~12 rows (approximately)
/*!40000 ALTER TABLE `guidelines` DISABLE KEYS */;
INSERT INTO `guidelines` (`ID`, `familySize`, `minimumIncome`, `maxIncome`) VALUES
	(1, 1, 12140, 15781),
	(2, 2, 16460, 21397),
	(3, 3, 20780, 27013),
	(4, 4, 25100, 32629),
	(5, 5, 29420, 38245),
	(6, 6, 33740, 43861),
	(7, 7, 38060, 49477),
	(8, 8, 42380, 55093),
	(9, 9, 46700, 60709),
	(10, 10, 51020, 66325),
	(11, 11, 55340, 71941),
	(12, 12, 59660, 77557);
/*!40000 ALTER TABLE `guidelines` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
