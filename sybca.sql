-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 11:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tybca`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `pw`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eno` int(11) NOT NULL,
  `ename` text NOT NULL,
  `eplace` text NOT NULL,
  `edate` date NOT NULL,
  `eyear` int(11) NOT NULL,
  `emon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eno`, `ename`, `eplace`, `edate`, `eyear`, `emon`) VALUES
(1, 'Diamond Modeling', 'Pimpri', '2019-03-07', 2017, 'May'),
(2, 'Diamond Modeling', 'Pimpri', '2019-03-13', 2018, 'June'),
(3, 'Dream Event', 'pune', '2019-03-15', 2019, 'June'),
(4, 'Diamond Modeling', 'pune', '2019-03-15', 2019, 'January'),
(5, 'Bollywood dj night', 'pune', '2019-03-13', 2019, 'January'),
(6, 'Glamourous house', 'pimpri', '2019-03-06', 2019, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `jno` int(11) NOT NULL,
  `jname` text NOT NULL,
  `mno` text NOT NULL,
  `addr` text NOT NULL,
  `eid` text NOT NULL,
  `date` date NOT NULL,
  `jyear` int(16) NOT NULL,
  `jmon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`jno`, `jname`, `mno`, `addr`, `eid`, `date`, `jyear`, `jmon`) VALUES
(1, 'Aryan Saroj', '8547851245', 'Pune', 'aryansaroj05@gmail.com', '2018-03-08', 2018, 'March'),
(2, 'Payal Panchal', '9585254147', 'Pimpri', 'payal123@gmail.com', '2019-03-09', 2018, 'Febrary'),
(3, 'Priya Thakur', '9547857485', 'pimpri', 'priyathakur@gmail.com', '2019-03-15', 2018, 'Febrary'),
(4, 'Swati Magar', '9547857485', 'pimpri', 'swatimagarl@gmail.com', '2019-03-15', 2018, 'Febrary'),
(5, 'Nikhil Uchlani', '9547857485', 'pimpri', 'nikhil@gmail.com', '2019-03-15', 2018, 'Febrary'),
(6, 'Ramesh Gautam', '9547857485', 'pimpri', 'rameshgautam@gmail.com', '2019-03-14', 2019, 'March'),
(7, 'Abhijeet Khalokar', '9547857485', 'chickli', 'akhalokar@gmail.com', '2019-03-15', 2019, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mno` int(11) NOT NULL,
  `mname` text NOT NULL,
  `meid` text NOT NULL,
  `mmno` text NOT NULL,
  `maddr` text NOT NULL,
  `height` text NOT NULL,
  `age` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `mdate` date NOT NULL,
  `myear` int(11) NOT NULL,
  `mmon` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`mno`, `mname`, `meid`, `mmno`, `maddr`, `height`, `age`, `exp`, `mdate`, `myear`, `mmon`, `gender`) VALUES
(1, 'Aryan Saroj', 'aryan@gmail.com', '9823079050', 'Pune', '5foot 5inches', 17, 0, '2019-03-08', 2016, 'June', 'Male'),
(2, 'Aman Prasad', 'aman@gmail.com', '9511785337', 'pune', '5feet 4inches', 17, 0, '2019-03-22', 2018, 'May', 'Male'),
(3, 'Mohit', 'mohit123@gmail.com', '9867564534', 'Pune', '5feet 5inches', 16, 0, '2019-03-21', 2018, 'May', 'Male'),
(4, 'Sohel', 'rupesh123@gmail.com', '9650024478', 'Pune', '5feet 2inches', 16, 0, '2019-03-21', 2019, 'May', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rno` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `reid` text NOT NULL,
  `rmno` text NOT NULL,
  `psw` text NOT NULL,
  `repsw` text NOT NULL,
  `date` date NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rno`, `fname`, `lname`, `reid`, `rmno`, `psw`, `repsw`, `date`, `gender`) VALUES
(1, 'Arti', 'Singh', 'artisingh042@gmail.com', '9147483647', 'Arti@123', 'Arti@123', '2019-03-09', 'Female'),
(2, 'Ramniwas', 'Parcha', 'ramnivas@gmail.com', '8947483647', 'Ramnivas123@', 'Ramnivas123@', '2019-03-01', 'Male'),
(3, 'Preeti', 'Singh', 'preeti01@gmail.com', '9147483647', 'Preeti@78', 'Preeti@78', '2019-02-14', 'Female'),
(4, 'Anjali', 'Rathod', 'anjali123@gmail.com', '8147483647', 'Anjali@123', 'Anjali@123', '2019-03-16', 'Female'),
(5, 'Raj', 'Malhotra', 'raj@gmail.com', '8147483647', '1234567890@a', '1234567890@a', '2019-03-23', 'Male'),
(6, 'Amit', 'Singh', 'amitsingh@gmail.com', '9147483647', 'Amit567890@a', ' Amit567890@a', '2019-03-23', 'Male'),
(7, 'Manisha', 'Saroj', 'manisha@gmail.com', '2147483647', 'Aryan123@', 'Aryan123@', '2019-03-23', 'Female'),
(8, 'Kajal', 'Natani', 'kajalnatani@gmail.com', '8957483647', 'kajal@123', 'kajal@123', '2019-03-15', 'Male'),
(9, 'Pankaj', 'Kumar', 'pankuja@gmail.com', '9847483647', 'Panku@123', 'Panku@123', '2019-03-31', 'Male'),
(10, 'Manisha', 'Saroj', 'xmbfbnmcbv@gmail.com', '1234567890', 'Mani123@', 'Mani123@', '2020-02-21', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`jno`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`mno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `jno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
