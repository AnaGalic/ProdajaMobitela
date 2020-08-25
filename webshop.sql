-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 09:52 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kosara`
--

CREATE TABLE `kosara` (
  `ID` int(11) NOT NULL,
  `ID_User` int(100) NOT NULL,
  `Datum` varchar(100) NOT NULL,
  `KupnjaZavrsena` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosara`
--

INSERT INTO `kosara` (`ID`, `ID_User`, `Datum`, `KupnjaZavrsena`) VALUES
(0, 3, '2020-01-31 18:55:53', 0),
(1, 3, '1.1.2018', 0),
(14906, 3, '2020-01-31 21:54:01', 0),
(802325, 3, '2020-01-31 21:51:36', 0),
(929355, 3, '2020-02-02 13:15:05', 1),
(2440330, 3, '2020-02-02 13:49:32', 0),
(2577897, 3, '2020-02-01 12:00:07', 0),
(2962216, 3, '2020-01-31 19:51:36', 1),
(3155445, 3, '2020-02-02 13:15:51', 0),
(6279708, 3, '2020-02-01 11:54:35', 1),
(7134893, 3, '2020-02-01 09:11:03', 1),
(7261178, 3, '2020-02-02 19:28:17', 1),
(8165821, 3, '2020-02-01 09:10:39', 0),
(8691273, 3, '2020-01-31 21:58:18', 0),
(306686780, 3, '2020-01-31 18:59:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kosaraproizvod`
--

CREATE TABLE `kosaraproizvod` (
  `Proizvod_ID` int(11) NOT NULL,
  `Kosara_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosaraproizvod`
--

INSERT INTO `kosaraproizvod` (`Proizvod_ID`, `Kosara_ID`) VALUES
(0, 0),
(7, 306686780),
(7, 306686780),
(7, 306686780),
(4, 306686780),
(8, 306686780),
(11, 306686780),
(4, 2962216),
(7, 2962216),
(7, 802325),
(8, 802325),
(5, 802325),
(4, 802325),
(9, 802325),
(7, 14906),
(8, 14906),
(8, 8691273),
(11, 8691273),
(4, 8691273),
(7, 8165821),
(4, 8165821),
(5, 8165821),
(7, 7134893),
(4, 7134893),
(11, 6279708),
(5, 6279708),
(9, 6279708),
(16, 2577897),
(6, 2577897),
(7, 929355),
(9, 929355),
(7, 2440330),
(4, 2440330),
(4, 7261178),
(7, 7261178);

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Slika` varchar(100) NOT NULL,
  `Cijena` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`ID`, `Ime`, `Slika`, `Cijena`) VALUES
(4, 'mobilni', 'slika', '1100'),
(5, 'asdassdas', 'adsasdsa', '1231'),
(6, 'test', '', '12333'),
(7, 'testq', '', '12333'),
(8, 'test', '', '12333'),
(9, 'test', '', '12333'),
(10, 'test', '', '12333'),
(11, 'test', 'aspnetcore-developer-roadmap.png', '12333'),
(12, 'test', 'aspnetcore-developer-roadmap.png', '12333'),
(13, 'test', 'aspnetcore-developer-roadmap.png', '12333'),
(14, 'test', 'aspnetcore-developer-roadmap.png', '12333'),
(15, 'test', 'aspnetcore-developer-roadmap.png', '121'),
(16, 'testq', 'Screenshot_1549016369.png', '12333');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(100) NOT NULL,
  `Opis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`ID`, `Naziv`, `Opis`) VALUES
(1, 'Admin', 'Admin'),
(2, 'User', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Prezime` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Broj_mob` varchar(100) NOT NULL,
  `Uloga_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Ime`, `Prezime`, `Email`, `Pass`, `Broj_mob`, `Uloga_ID`) VALUES
(1, 'Kresimir', 'Sutalo', 'dsadas', '1234', '12312321', 1),
(2, 'Mario', 'Matic', 'dsadsadsa', 'dsaasdasd', 's321123231', 2),
(3, 'mobilni', 'asd', 'StjepanRadic', '12345', '12333312321', 1),
(4, 'test', 'asd', 'StjepanRadic1', '12345', '12333312321', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kosara`
--
ALTER TABLE `kosara`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
