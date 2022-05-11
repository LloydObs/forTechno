-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 07:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasaheroesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengerinfo`
--

CREATE TABLE `passengerinfo` (
  `passengerName` text NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengerinfo`
--

INSERT INTO `passengerinfo` (`passengerName`, `phoneNumber`, `email`, `password`) VALUES
('lloydieieieie', '5756757', '4545454@gmail.com', '14214'),
('Brian Albao', '12313', 'brianAL@gmail.com', 'albaotest'),
('Cherise Pineda', '564123324', 'cheriseP@gmail.com', 'cherisetest'),
('Eric Piid', '929454', 'EricP@gmail.com', 'erictest'),
('Gian Angelo Dasigan', '1', 'gianmonyo1@gmail.com', 'giantest'),
('Hiroyuki Suzuki', '255879532', 'hiro@gmail.com', 'hirotest'),
('Nathaniel Bomaras', '2147483647', 'nathBomaras@gmail.com', 'nathtest'),
('Lloyd Objero', '0', 'xdbruhaaaah@gmail.com', 'lloydtest'),
('Yuan Sta.Rosa', '1231232', 'yuanStaR123@gmail.com', 'yuantest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengerinfo`
--
ALTER TABLE `passengerinfo`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
