-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 07:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `desg` varchar(20) NOT NULL,
  `pno` varchar(20) NOT NULL,
  `adds` varchar(20) NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `name`, `uname`, `dept`, `desg`, `pno`, `adds`, `psw`) VALUES
(2, 'hhub', 'jhkl', 'cse', 'yy', '999', 'mia', '899'),
(3, 'muk', 'dhet', 'cse', 'cardiologist', '67564876', 'rpc layout', '845678'),
(4, 'suchitra', 'kiara', 'cardiologist', 'md', '546754678', 'vv puram', 'pop'),
(8, 'jayram', 'jay', 'cse', 'md', '3243454', 'bang', 'jayram');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `durt` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`pid`, `pname`, `mname`, `qty`, `durt`, `price`) VALUES
(4, 'kiara', 'abcd', '10', '1 month', '780'),
(5, 'ila', 'kol', '3', '4 months', '980'),
(6, 'oli', 'jalra', '3', '5 weeks', '450');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `dis` varchar(30) NOT NULL,
  `pno` varchar(30) NOT NULL,
  `adds` varchar(30) NOT NULL,
  `regdate` date NOT NULL,
  `showp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `name`, `dname`, `dept`, `age`, `sex`, `dis`, `pno`, `adds`, `regdate`, `showp`) VALUES
(1, 'Meghshree', 'muk', 'cse', '21', 'Female', 'hjkg', '132324', 'dbit', '2019-11-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rec_info`
--

CREATE TABLE `rec_info` (
  `p_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pno` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `rec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec_info`
--

INSERT INTO `rec_info` (`p_id`, `name`, `uname`, `email`, `pno`, `psw`, `rec`) VALUES
(2, 'megha', 'meggh', 'red@gmail.com', '8765548775', '225', '1'),
(7, 'kusu', 'komala', 'xyz@gmail.com', '9741220640', '239182', '1'),
(8, 'hani', 'pooja', 'sam@gmail.com', '9090909090', '17cs076', '1'),
(15, 'megha', 'mukharabeen', 'mukh@gmail.com', '9876543210', 'mukharabeen', '1'),
(16, 'kiara', 'lali', 'lali@gmail.com', '98065', 'lali', '1'),
(17, 'ram', 'shantesh', 'shantesh@gmail.com', '9480033390', 'shantesh', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `rec_info`
--
ALTER TABLE `rec_info`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rec_info`
--
ALTER TABLE `rec_info`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
