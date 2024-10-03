-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videomovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` int(3) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `age` int(3) NOT NULL,
  `acount` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `gender`, `age`, `acount`) VALUES
(200, 'prin ', 'suparat', 'm', 34, 2),
(201, 'pimchanok', 'luevisadpaibul', 'f', 32, 2),
(202, 'nadech', 'kugimiya', 'm', 33, 2),
(203, 'urassaya', 'sperbund', 'f', 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `bid` int(3) NOT NULL,
  `mid` int(3) NOT NULL,
  `vid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`bid`, `mid`, `vid`) VALUES
(400, 100, 300),
(401, 100, 301),
(402, 101, 302),
(403, 102, 303),
(404, 103, 304),
(405, 104, 305),
(406, 105, 306);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
(100, 'joseph ', 'somerhalder', 'american', '0983563569'),
(101, 'konstantinova', 'dobreda', 'canada', '898987343'),
(102, 'phetcharat', 'phrathanee', 'pathumthani', '983563956'),
(103, 'kanokwan', 'paima', 'bangkook', '927855429'),
(104, 'pimonwan', 'pukchat', 'nakhon ratchasima', '624343707'),
(105, 'nitaya', 'indy', 'ang thong', '875623148');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `vid` int(10) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vyear` date NOT NULL,
  `vgenre` varchar(30) NOT NULL,
  `vactor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`vid`, `vname`, `vyear`, `vgenre`, `vactor`) VALUES
(300, 'nakee ', '0000-00-00', 'fantasy', 'urassaya'),
(301, 'death whisperer', '0000-00-00', 'horror', 'nadech'),
(302, 'Necromancer', '0000-00-00', 'action', 'prin'),
(303, 'friend Zone', '0000-00-00', 'romance', 'pimchanok'),
(304, 'the con-heartist', '0000-00-00', 'romanctic comedy', 'nadech'),
(305, 'al love you', '0000-00-00', ' sci-fi', 'pimchanok'),
(306, 'Haunted Tales', '0000-00-00', 'horror', 'prin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD KEY `memberid` (`mid`),
  ADD KEY `movieid` (`vid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`vid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
