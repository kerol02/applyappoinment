-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 10:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(3, 'hospital', '$2y$10$pmH2Xpf02J74AscTcF3eb.2uC56iVbDwS4JMI72aJbmKMx99oRCoW'),
(4, 'admin', '$2y$10$Jhl5fvUmASG8sJN6B7TUje/mcXfaywwwbeco2cMBgitYui65wmuEW');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `chat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `email`, `chat`) VALUES
(4, 'khairulkhairuddin02@gmail.com', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` varchar(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `ic` varchar(16) NOT NULL,
  `sector` varchar(35) NOT NULL,
  `hospital` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_phone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `name`, `age`, `gender`, `ic`, `sector`, `hospital`, `email`, `no_phone`) VALUES
('DC584', 'MUHAMMAD KHAIRUL AKMAL BIN KHAIRUDDIN', 19, 'M', '2147483647', 'ORTOPEDIK', 'HOSPITAL TENGKU AMPUAN AFZAN', 'khairulkhairuddin@gmail.com', '179445169');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `no_ic` varchar(16) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `no_phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `dateappointment` date NOT NULL,
  `timeappointment` varchar(2) NOT NULL,
  `problem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `name`, `no_ic`, `age`, `gender`, `no_phone`, `email`, `address`, `hospital`, `dateappointment`, `timeappointment`, `problem`) VALUES
(12, 'MUHAMMAD KHAIRUL AKMAL BIN KHAIRUDDIN', '2147483647', 30, 'm', '0179445169', 'khai@gmail.com', 'NO 36 LORONG HIJRAH PERDANA 2KAMPUNG HIJRAH PERDANA, KUANTAN, PAHANG', 'HOSPITAL TENGKU AMPUAN AFZAN', '2021-08-27', 'AM', 'I AM SICK, SELESEMA DAN BATUK');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`ID`, `name`, `gender`, `email`, `username`, `password`) VALUES
(11, '123', 'M', '123@gmail.com', '123', '$2y$10$vDjfmEQp68S.3X9NCPLSQ.i.hwID1dI08csm9hpWeoT26Kb4LNIv.'),
(12, 'abu', 'M', 'abu@gmail.com', 'abu', '$2y$10$e9QoEatnc0zTCoZV41QS5.WBeOpVWuapcvcJas1F0IRxfUcE/dxhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
