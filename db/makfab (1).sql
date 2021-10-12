-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makfab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmins`
--

CREATE TABLE `tbladmins` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserCrtd` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmins`
--

INSERT INTO `tbladmins` (`Username`, `Password`, `UserCrtd`) VALUES
('admin', '7198570c8aba3cd9bfd6143615085858', '2020-06-08 23:56:46'),
('kule', '12345678', '2020-06-12 11:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `name`, `Quantity`) VALUES
(1, 'Ceylon', 14124),
(2, 'tea', 14124),
(3, 'hello', 14124),
(4, 'agriculture', 14124);

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `Name`, `price`, `category`) VALUES
(1, 'ada', '1222', 'local');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserlog`
--

CREATE TABLE `tbluserlog` (
  `LogID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `LoginTime` timestamp NULL DEFAULT current_timestamp(),
  `Logout` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserlog`
--

INSERT INTO `tbluserlog` (`LogID`, `Username`, `LoginTime`, `Logout`, `Status`) VALUES
(4, 'admin', '0000-00-00 00:00:00', NULL, 1),
(5, 'f', '0000-00-00 00:00:00', NULL, 1),
(6, 'f', '0000-00-00 00:00:00', NULL, 1),
(7, 'f', '0000-00-00 00:00:00', NULL, 1),
(8, 'f', '0000-00-00 00:00:00', NULL, 1),
(9, 'f', '0000-00-00 00:00:00', NULL, 1),
(10, 'f', '0000-00-00 00:00:00', NULL, 1),
(11, 'f', '0000-00-00 00:00:00', NULL, 1),
(12, 'f', '0000-00-00 00:00:00', NULL, 1),
(13, 'f', '0000-00-00 00:00:00', NULL, 1),
(14, 'f', '0000-00-00 00:00:00', NULL, 1),
(15, 'f', '0000-00-00 00:00:00', NULL, 1),
(16, 'f', '0000-00-00 00:00:00', NULL, 1),
(17, 'f', '0000-00-00 00:00:00', NULL, 1),
(18, 'f', '0000-00-00 00:00:00', NULL, 1),
(19, 'f', '0000-00-00 00:00:00', NULL, 1),
(20, 'f', '0000-00-00 00:00:00', NULL, 1),
(21, 'f', '0000-00-00 00:00:00', NULL, 1),
(22, 'f', '0000-00-00 00:00:00', NULL, 1),
(23, 'f', '0000-00-00 00:00:00', NULL, 1),
(24, 'f', '0000-00-00 00:00:00', NULL, 1),
(25, 'f', '0000-00-00 00:00:00', NULL, 1),
(26, 'f', '0000-00-00 00:00:00', NULL, 1),
(27, 'f', '0000-00-00 00:00:00', NULL, 1),
(28, 'f', '0000-00-00 00:00:00', NULL, 1),
(29, 'f', '0000-00-00 00:00:00', NULL, 1),
(30, 'f', '0000-00-00 00:00:00', NULL, 1),
(31, 'f', '0000-00-00 00:00:00', NULL, 1),
(32, 'f', '0000-00-00 00:00:00', NULL, 1),
(33, 'f', '0000-00-00 00:00:00', NULL, 1),
(34, 'f', '0000-00-00 00:00:00', NULL, 1),
(35, 'f', '0000-00-00 00:00:00', NULL, 1),
(36, 'f', '0000-00-00 00:00:00', NULL, 1),
(37, 'f', '0000-00-00 00:00:00', NULL, 1),
(38, 'f', '0000-00-00 00:00:00', NULL, 1),
(39, 'f', '0000-00-00 00:00:00', NULL, 1),
(40, 'f', '0000-00-00 00:00:00', NULL, 1),
(41, 'f', '0000-00-00 00:00:00', NULL, 1),
(42, 'f', '0000-00-00 00:00:00', NULL, 1),
(43, 'f', '0000-00-00 00:00:00', NULL, 1),
(44, 'f', '0000-00-00 00:00:00', NULL, 1),
(45, 'f', '0000-00-00 00:00:00', NULL, 1),
(46, 'f', '0000-00-00 00:00:00', NULL, 1),
(47, 'f', '0000-00-00 00:00:00', NULL, 1),
(48, 'f', '0000-00-00 00:00:00', NULL, 1),
(49, 'f', '0000-00-00 00:00:00', NULL, 1),
(50, 'f', '0000-00-00 00:00:00', NULL, 1),
(51, 'f', '0000-00-00 00:00:00', NULL, 1),
(52, 'f', '0000-00-00 00:00:00', NULL, 1),
(53, 'f', '0000-00-00 00:00:00', NULL, 1),
(54, 'F', '0000-00-00 00:00:00', NULL, 1),
(55, 'f', '0000-00-00 00:00:00', NULL, 1),
(56, 'f', '0000-00-00 00:00:00', NULL, 1),
(57, 'f', '0000-00-00 00:00:00', NULL, 1),
(58, 'f', '0000-00-00 00:00:00', NULL, 1),
(59, 'f', '0000-00-00 00:00:00', NULL, 1),
(60, 'f', '0000-00-00 00:00:00', NULL, 1),
(61, 'f', '0000-00-00 00:00:00', NULL, 1),
(62, 'f', '0000-00-00 00:00:00', NULL, 1),
(63, 'f', '0000-00-00 00:00:00', NULL, 1),
(64, 'f', '0000-00-00 00:00:00', NULL, 1),
(65, 'f', '0000-00-00 00:00:00', NULL, 1),
(66, 'f', '0000-00-00 00:00:00', NULL, 1),
(67, 'f', '0000-00-00 00:00:00', NULL, 1),
(68, 'f', '0000-00-00 00:00:00', NULL, 1),
(69, 'f', '0000-00-00 00:00:00', NULL, 1),
(70, 'F', '0000-00-00 00:00:00', NULL, 1),
(71, 'f', '0000-00-00 00:00:00', NULL, 1),
(72, 'f', '0000-00-00 00:00:00', NULL, 1),
(73, 'f', '0000-00-00 00:00:00', NULL, 1),
(74, 'f', '0000-00-00 00:00:00', NULL, 1),
(75, 'f', '0000-00-00 00:00:00', NULL, 1),
(76, 'f', '0000-00-00 00:00:00', NULL, 1),
(77, 'f', '0000-00-00 00:00:00', NULL, 1),
(78, 'f', '0000-00-00 00:00:00', NULL, 1),
(79, 'f', '0000-00-00 00:00:00', NULL, 1),
(80, 'f', '0000-00-00 00:00:00', NULL, 1),
(81, 'f', '0000-00-00 00:00:00', NULL, 1),
(82, 'f', '0000-00-00 00:00:00', NULL, 1),
(83, 'f', '0000-00-00 00:00:00', NULL, 1),
(84, 'F', '0000-00-00 00:00:00', NULL, 1),
(85, 'f', '0000-00-00 00:00:00', NULL, 1),
(86, 'f', '0000-00-00 00:00:00', NULL, 1),
(87, 'F', '0000-00-00 00:00:00', NULL, 1),
(88, 'f', '0000-00-00 00:00:00', NULL, 1),
(89, 'f', '0000-00-00 00:00:00', NULL, 1),
(90, 'f', '0000-00-00 00:00:00', NULL, 1),
(91, 'f', '0000-00-00 00:00:00', NULL, 1),
(92, 'f', '0000-00-00 00:00:00', NULL, 1),
(93, 'f', '0000-00-00 00:00:00', NULL, 1),
(94, 'w', '0000-00-00 00:00:00', NULL, 1),
(95, '2', '0000-00-00 00:00:00', NULL, 1),
(96, '8', '0000-00-00 00:00:00', NULL, 1),
(97, '7', '0000-00-00 00:00:00', NULL, 1),
(98, '7', '0000-00-00 00:00:00', NULL, 1),
(99, '8', '0000-00-00 00:00:00', NULL, 1),
(100, '9', '0000-00-00 00:00:00', NULL, 1),
(101, '9', '0000-00-00 00:00:00', NULL, 1),
(102, 'f', '0000-00-00 00:00:00', NULL, 1),
(103, 'f', '0000-00-00 00:00:00', NULL, 1),
(104, 'k', '0000-00-00 00:00:00', NULL, 1),
(105, 'Bayu', '0000-00-00 00:00:00', NULL, 1),
(106, 'bayu', '0000-00-00 00:00:00', NULL, 1),
(107, 'admin', '0000-00-00 00:00:00', NULL, 1),
(108, 'admin', '0000-00-00 00:00:00', NULL, 1),
(109, 'admin', '0000-00-00 00:00:00', NULL, 1),
(110, 'admin', '0000-00-00 00:00:00', NULL, 1),
(111, 'admin', '0000-00-00 00:00:00', NULL, 1),
(112, 'admin', '0000-00-00 00:00:00', NULL, 1),
(113, 'admin', '0000-00-00 00:00:00', NULL, 1),
(114, 'admin', '0000-00-00 00:00:00', NULL, 1),
(115, 'admin', '0000-00-00 00:00:00', NULL, 1),
(116, 'admin', '0000-00-00 00:00:00', NULL, 1),
(117, 't', '0000-00-00 00:00:00', NULL, 1),
(118, 't', '0000-00-00 00:00:00', NULL, 1),
(119, 't', '0000-00-00 00:00:00', NULL, 1),
(120, 'admin', '0000-00-00 00:00:00', NULL, 1),
(121, 'admin', '0000-00-00 00:00:00', NULL, 1),
(122, 'admin', '0000-00-00 00:00:00', NULL, 1),
(123, 'admin', '0000-00-00 00:00:00', NULL, 1),
(124, 'admin', '0000-00-00 00:00:00', NULL, 1),
(125, 'admin', '0000-00-00 00:00:00', NULL, 1),
(126, 'admin', '0000-00-00 00:00:00', NULL, 1),
(127, 'admin', '0000-00-00 00:00:00', NULL, 1),
(128, 'admin', '0000-00-00 00:00:00', NULL, 1),
(129, 'ilma', '0000-00-00 00:00:00', NULL, 1),
(130, 'admin', '0000-00-00 00:00:00', NULL, 1),
(131, 'admin', '0000-00-00 00:00:00', NULL, 1),
(132, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(133, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(134, 'admin', '0000-00-00 00:00:00', NULL, 1),
(135, 'admin', '0000-00-00 00:00:00', NULL, 1),
(136, 'admin', '0000-00-00 00:00:00', NULL, 1),
(137, 'admin', '0000-00-00 00:00:00', NULL, 1),
(138, 'admin', '0000-00-00 00:00:00', NULL, 1),
(139, 'admin', '0000-00-00 00:00:00', NULL, 1),
(140, 'admin', '0000-00-00 00:00:00', NULL, 1),
(141, 'admin', '0000-00-00 00:00:00', NULL, 1),
(142, 'admin', '0000-00-00 00:00:00', NULL, 1),
(143, 'admin', '0000-00-00 00:00:00', NULL, 1),
(144, 'admin', '0000-00-00 00:00:00', NULL, 1),
(145, 'admin', '0000-00-00 00:00:00', NULL, 1),
(146, 'admin', '0000-00-00 00:00:00', NULL, 1),
(147, 'admin', '0000-00-00 00:00:00', NULL, 1),
(148, 'admin', '0000-00-00 00:00:00', NULL, 1),
(149, 'admin', '0000-00-00 00:00:00', NULL, 1),
(150, 'admin', '0000-00-00 00:00:00', NULL, 1),
(151, 'admin', '0000-00-00 00:00:00', NULL, 1),
(152, 'admin', '0000-00-00 00:00:00', NULL, 1),
(153, 'admin', '0000-00-00 00:00:00', NULL, 1),
(154, 'admin', '0000-00-00 00:00:00', NULL, 1),
(155, 'admin', '0000-00-00 00:00:00', NULL, 1),
(156, 'admin', '0000-00-00 00:00:00', NULL, 1),
(157, 'admin', '0000-00-00 00:00:00', NULL, 1),
(158, 'admin', '0000-00-00 00:00:00', NULL, 1),
(159, 'admin', '0000-00-00 00:00:00', NULL, 1),
(160, 'admin', '0000-00-00 00:00:00', NULL, 1),
(161, 'malith1231', '0000-00-00 00:00:00', NULL, 1),
(162, 'malith1231', '0000-00-00 00:00:00', NULL, 1),
(163, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(164, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(165, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(166, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(167, 'ilma123', '0000-00-00 00:00:00', NULL, 1),
(168, 'admin', '0000-00-00 00:00:00', NULL, 1),
(169, 'admin', '0000-00-00 00:00:00', NULL, 1),
(170, 'admin', '0000-00-00 00:00:00', NULL, 1),
(171, 'admin', '0000-00-00 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `Username` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `PhoneNumber` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `SecurityQuestion` varchar(250) DEFAULT NULL,
  `SecurityAnswer` varchar(250) DEFAULT NULL,
  `UserCrtd` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`Username`, `FirstName`, `LastName`, `EmailAddress`, `PhoneNumber`, `Password`, `SecurityQuestion`, `SecurityAnswer`, `UserCrtd`) VALUES
('admin', 'manilka', 'mhomad', 'malith@ponnaya.lk', '0101210', '25d55ad283aa400af464c76d713c07ad', '1', '12345678', '2020-07-21 01:50:44'),
('ilma', 'Vihaga', 'Dasun', 'kkk@outlook.lk', '0101210', '25d55ad283aa400af464c76d713c07ad', '1', 'vihaga', '2020-07-20 21:50:12'),
('ilma123', 'ilma', 'mhomad', 'baduva@outlook.com', '0101210', '5e8667a439c68f5145dd2fcbecf02209', '11', 'lanka hospital ', '2020-07-21 02:25:35'),
('ilmar3rrr', 'Vihaga', 'Dasun', 'ddd@hotmail.com', '0101210', '25d55ad283aa400af464c76d713c07ad', '1', 'lanka hospital hteyed', '2020-07-20 21:46:29'),
('malith1231', 'Vihaga', 'Dasun', '123@gmail.com', '123456789', '25d55ad283aa400af464c76d713c07ad', '1', 'paiya', '2020-07-21 01:59:37'),
('t', 't', 't', 't@gmail.com', '0761507471', '2c0c6a64f986cb1cc0bd02d08e5073a8', '7', 't', '2020-07-18 20:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(0, 'Vihaga', 'Dasun', 'vihagadasu02@gmail.com', 'qddwdqdqwd'),
(0, 'Vihaga', 'Dasun', 'vihagadasu02@gmail.com', 'pojohgiuycgfv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmins`
--
ALTER TABLE `tbladmins`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluserlog`
--
ALTER TABLE `tbluserlog`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluserlog`
--
ALTER TABLE `tbluserlog`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
