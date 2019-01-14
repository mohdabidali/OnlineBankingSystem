-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 06:47 PM
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
-- Database: `bankabid`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Dname` varchar(255) NOT NULL,
  `DBasicSalary` int(20) NOT NULL,
  `DHRA` int(20) NOT NULL,
  `DTA` int(20) NOT NULL,
  `DDA` int(20) NOT NULL,
  `DMedicalAllowance` int(20) NOT NULL,
  `DIncentive` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Dname`, `DBasicSalary`, `DHRA`, `DTA`, `DDA`, `DMedicalAllowance`, `DIncentive`) VALUES
('Programmer', 500000, 50000, 10000, 15000, 5000, 100000),
('Database Engineer', 700000, 70000, 20000, 15000, 10000, 120000),
('System Engineer', 600000, 55000, 18000, 16000, 7000, 80000),
('CEO', 5000000, 200000, 150000, 100000, 50000, 3000000),
('Manager', 500000, 10000, 25000, 20000, 10000, 25000),
('Cheif', 20000, 10000, 5000, 15000, 1500, 25000),
('Waiter', 180000, 15000, 20000, 1000, 1000, 20000),
('Cashier', 200000, 10000, 15000, 2000, 1000, 5000),
('Cashier', 25000, 1000, 1500, 1200, 500, 2000),
('PM', 100000, 12000, 10000, 15000, 5000, 2500),
('Peon', 6000, 700, 600, 500, 200, 100);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` int(3) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `Edob` date NOT NULL,
  `Edesignation` varchar(255) NOT NULL,
  `Eemail` varchar(50) NOT NULL,
  `Emobil` int(11) NOT NULL,
  `Edoj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `Ename`, `Edob`, `Edesignation`, `Eemail`, `Emobil`, `Edoj`) VALUES
(12, 'ritesh', '2018-11-30', 'saving', 'abidali1887@gmail.con', 3213432, '2018-11-30'),
(12, 'rahul', '2018-12-20', 'saving', 'nishantchaddha@gmail.com', 73256145, '2018-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `pnumber` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `pnumber`, `email`, `password`, `gender`) VALUES
(1, 'Abid', 'Ali', 123456789, 'abidali123@gmail.com', 12345, 'male'),
(9, 'kaushal', 'agarwal', 123456, 'jlbhjjh@kjjgj.com', 12345, ''),
(11, 'sahil', 'hasmi', 5464566, 'fgghh@gmail.com', 12345, 'male'),
(12, 'kaushalcvsdfvs', 'vvsdfsd', 91123456, 'fgghh@gmail.com', 12345, 'male'),
(13, 'kaushalcvsdfvs', 'vvsdfsd', 91123456, 'fgghh@gmail.com', 12345, ''),
(14, 'kaushalcvsdfvs', 'vvsdfsd', 91123456, 'fgghh@gmail.com', 12345, ''),
(15, 'kfkfk', 'fdsfs', 9212345, 'fgghh@gmail.com', 213, 'female'),
(16, 'Ritesh', 'Panday', 91, 'admin@admin.com', 123456, 'male'),
(17, 'hello', 'brother', 94123456, 'jakfjdjf@gmail.com', 123456, 'female'),
(18, 'gupta', 'brother', 93123456, 'jakfjdjf@gmail.com', 123456, 'female'),
(19, 'gupta', 'brother', 91123456, 'jakfjdjf@gmail.com', 123456, 'female'),
(20, 'jay', 'brother', 91123456, 'jakfjdjf@gmail.com', 123456, 'male'),
(21, 'cha', 'cha', 2147483647, 'cha@gmail.com', 654321, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
