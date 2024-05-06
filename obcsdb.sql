-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2022 at 07:29 AM
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
-- Database: `obcsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `atalpension`
--

DROP TABLE IF EXISTS `atalpension`;
CREATE TABLE IF NOT EXISTS `atalpension` (
  `id` varchar(225) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `mno` varchar(10) NOT NULL,
  `adno` varchar(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcode` varchar(6) NOT NULL,
  `married` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `bbank` varchar(50) NOT NULL,
  `ano` varchar(14) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atalpension`
--

INSERT INTO `atalpension` (`id`, `uid`, `name`, `bdate`, `mno`, `adno`, `city`, `pcode`, `married`, `gender`, `income`, `address`, `bank`, `bbank`, `ano`, `Remark`, `Status`, `created_at`) VALUES
('AANO1', 18, 'samir mukeshbhai khoja', '2022-04-01', '1234567894', '123456678995', 'nasvsri', '', 'no', 'male', '100000', 'chapra', 'sbi', 'chapra', '44445555666666', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

DROP TABLE IF EXISTS `birth`;
CREATE TABLE IF NOT EXISTS `birth` (
  `id` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(25) NOT NULL,
  `Dateofapply` timestamp NOT NULL DEFAULT current_timestamp(),
  `religion` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`id`, `uid`, `name`, `fname`, `mname`, `date`, `place`, `Dateofapply`, `religion`, `gender`, `Remark`, `Status`) VALUES
('BCNO1', 18, 'samir mukeshbhai khoja', 'mukesh bhai khoja', 'sunitaben khoja', '2022-04-07', 'navsari', '2022-04-20 12:03:25', 'hindu', 'Male', '', ''),
('BCNO2', 18, 'yash parmar', 'mukesh bhai', 'rekha ben', '2022-04-30', 'navsari', '2022-04-20 12:18:29', 'hindu', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

DROP TABLE IF EXISTS `caste`;
CREATE TABLE IF NOT EXISTS `caste` (
  `id` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(25) NOT NULL,
  `caste` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `uid`, `name`, `fname`, `mname`, `date`, `place`, `caste`, `gender`, `Remark`, `Status`, `created_at`) VALUES
('CCNO1', 18, 'samir mukeshbhai khoja', 'mukesh bhai khoja', 'sunitaben khoja', '2022-04-07', 'navsari', 'obc', 'Male', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

DROP TABLE IF EXISTS `death`;
CREATE TABLE IF NOT EXISTS `death` (
  `id` varchar(225) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `bdate` date NOT NULL,
  `ddate` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `uid`, `name`, `age`, `religion`, `place`, `bdate`, `ddate`, `gender`, `Remark`, `Status`, `created_at`) VALUES
('DCNO1', 18, 'samir mukeshbhai khoja', '21', 'hindu', 'navsari', '2022-04-14', '2022-04-30', 'Male', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `jeevanbima`
--

DROP TABLE IF EXISTS `jeevanbima`;
CREATE TABLE IF NOT EXISTS `jeevanbima` (
  `id` varchar(225) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `oop` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcode` varchar(6) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `adno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `ano` varchar(14) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeevanbima`
--

INSERT INTO `jeevanbima` (`id`, `uid`, `name`, `oop`, `email`, `bdate`, `city`, `pcode`, `caste`, `gender`, `pno`, `adno`, `address`, `bank`, `ano`, `Remark`, `Status`, `created_at`) VALUES
('JANO1', 18, 'samir mukeshbhai khoja', 'manager', 'khojas29@gmail.com', '2022-04-15', 'nasvsri', '396445', 'obc', 'male', '9874563215', '123456678995', 'chapra', 'sbi', '11111111111111', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `marraige`
--

DROP TABLE IF EXISTS `marraige`;
CREATE TABLE IF NOT EXISTS `marraige` (
  `id` varchar(225) NOT NULL,
  `uid` int(11) NOT NULL,
  `hname` varchar(25) NOT NULL,
  `wname` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `hage` varchar(25) NOT NULL,
  `wage` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marraige`
--

INSERT INTO `marraige` (`id`, `uid`, `hname`, `wname`, `place`, `hage`, `wage`, `date`, `Remark`, `Status`, `created_at`) VALUES
('MCNO2', 18, 'keyur kalsariya ', 'prachi patel', 'navsari', '22', '20', '2022-04-21', '', '', '2022-04-21'),
('MCNO3', 19, 'daksh patel', 'mitali patel', 'navsari', '22', '20', '2022-04-12', 'verified', 'Verified', '2022-04-21'),
('MCNO1', 18, 'samir mukesshbhai khoja', 'nisha patel', 'navsari', '22', '20', '2022-04-14', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `uid`, `name`, `email`, `pno`, `message`, `reply`) VALUES
(1, 7, 'patel daksh', 'pateldaksh382@gmail.com', '9106952456', '753', 'good'),
(8, 18, 'samir mukeshbhai khoja', 'samir29@gmail.com', '9874563215', 'hii', ''),
(3, 7, 'patel daksh', 'pateldaksh382@gmail.com', '9106952456', 'hiii', ''),
(4, 7, 'keyur', 'keyur@gmail.com', '1234567891', 'hiiii', ''),
(5, 7, 'karan', 'karan382@gmail.com', '8547963214', 'hollw', '');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE IF NOT EXISTS `scholarship` (
  `id` varchar(225) NOT NULL,
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `ano` varchar(14) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `uid`, `fname`, `sname`, `class`, `bdate`, `city`, `pcode`, `caste`, `gender`, `pno`, `email`, `address`, `bank`, `ano`, `Remark`, `Status`, `created_at`) VALUES
('SCNO1', 18, 'samir mukeshbhai khoja', 'sansakar bharti', '10', '2022-04-28', 'nasvsri', '396445', 'obc', 'male', '9874563215', 'khojas29@gmail.com', 'chapra', 'sbi', '44445555666666', '', '', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'admin', 8979555556, 'adminuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-02-13 12:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblapplication`
--

DROP TABLE IF EXISTS `tblapplication`;
CREATE TABLE IF NOT EXISTS `tblapplication` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` int(5) NOT NULL,
  `ApplicationID` varchar(200) DEFAULT NULL,
  `DateofBirth` varchar(200) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `PlaceofBirth` varchar(200) DEFAULT NULL,
  `NameofFather` varchar(200) DEFAULT NULL,
  `PermanentAdd` mediumtext DEFAULT NULL,
  `PostalAdd` mediumtext DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Dateofapply` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblapplication`
--

INSERT INTO `tblapplication` (`ID`, `UserID`, `ApplicationID`, `DateofBirth`, `Gender`, `FullName`, `PlaceofBirth`, `NameofFather`, `PermanentAdd`, `PostalAdd`, `MobileNumber`, `Email`, `Dateofapply`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 1, '905226110', '2019-05-09', 'Female', 'Shravani', 'New Delhi', 'Mr. Tushar Singh', 'I-989, 9 floor Gaur Apartment Noida', 'I-989, 9 floor Gaur Apartment Noida', 7878878787, 'tushar@gmail.com', '2020-02-12 11:45:12', 'Your Application Has been Verified', 'Verified', '2020-02-13 14:35:50'),
(2, 2, '294108345', '2018-05-01', 'Male', 'Parth', 'Luckmow', 'Mr. Tushar Singh', 'I-989, 9 floor Gaur Apartment Noida', 'I-989, 9 floor Gaur Apartment Noida', 7878878787, 'tushar@gmail.com', '2020-02-13 06:06:45', 'Rejected due to incomplete information', 'Rejected', '2020-02-13 14:37:15'),
(3, 2, '555131983', '2020-02-07', 'Male', 'Tarun', 'Merrut', 'R.K Sukla', 'hgtyfrytrftfry', 'tyfyhgyhjgukygkg', 5465644545, 'p@gmail.com', '2020-02-14 12:31:37', 'verifed\r\n', 'Verified', '2022-03-29 11:09:02'),
(4, 4, '868843519', '2019-11-09', 'Female', 'Abc', 'Max hospital New Delhi', 'XYZ', 'Mayur Vihar New Delhi', 'Mayur Vihar New Delhi', 9632123698, 'test@gmail.com', '2020-02-20 17:24:53', 'Record verified', 'Verified', '2020-02-20 17:26:10'),
(5, 4, '499126490', '2022-04-20', 'Female', 'patel daksh', 'navsari', ' pankajbhai', 'gfufy', 'sdfghjkl;zxcvbndfghj', 9106952456, 'pateldaksh382@gmail.com', '2022-04-13 09:09:22', 'vesdfvbnm', 'Verified', '2022-04-14 04:39:44'),
(6, 4, '419579752', '2022-04-21', 'Male', 'ram patel', 'navsari', 'surajbhai', 'sdghjkl;sdfghjkl', 'fghjkl;dfghjk', 1234567894, 'ram @gmail.com', '2022-04-13 10:25:08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Address`, `Password`, `RegDate`) VALUES
(1, 'Himanshu', 'MIshra', 7987897897, 'J&K Block Laxmi Nagar New Delhi', '202cb962ac59075b964b07152d234b70', '2020-02-11 11:26:29'),
(2, 'Meera', 'Jain', 8797977797, 'U-890 VVIP Ghazibad', '202cb962ac59075b964b07152d234b70', '2020-02-11 11:27:35'),
(3, 'Kunal', 'Kumar', 9754774987, 'K-123, Nangloi New Delhi', '202cb962ac59075b964b07152d234b70', '2020-02-19 16:49:03'),
(4, 'Anuj', 'Kumar', 9632123698, 'New Delhi India 110001', '5c428d8875d2948607f3e3fe134d71b4', '2020-02-20 17:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `created_at`) VALUES
(2, 'Prince', '7894561230', 'Prince', '123', NULL),
(4, 'Atish Patel', '7410852200', 'A30', '123', NULL),
(13, 'Pravin', '7894561230', 'Pravin', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

DROP TABLE IF EXISTS `userss`;
CREATE TABLE IF NOT EXISTS `userss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(4, 'atish', 'a30', '123', '2022-03-15'),
(5, 'prince', 'prince', '123', '2022-03-15'),
(7, 'keyur k', 'kk', '12', '2022-03-24'),
(8, 'daksh', 'dk', '123', '2022-03-24'),
(11, 'rajesh', 'rj', '123', '2022-03-25'),
(12, 'abhi', 'ab', '123', '2022-03-25'),
(13, 'avi', 'av', '123', '2022-03-25'),
(14, 'ansh', 'an', '123', '2022-03-26'),
(15, 'ashu', 'ashu', '123', '2022-03-29'),
(16, 'yash', 'yash', '123', '2022-03-31'),
(17, 'deep', 'ds', '12', '2022-04-19'),
(18, 'samir', 'sk', '12', '2022-04-21'),
(19, 'daksh', 'dp', '12', '2022-04-21');
COMMIT;

ALTER TABLE `userss` MODIFY COLUMN `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `jeevanbima` MODIFY COLUMN `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `scholarship` MODIFY COLUMN `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `caste` MODIFY COLUMN `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
