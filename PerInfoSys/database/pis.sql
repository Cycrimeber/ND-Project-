-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 05:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnel_details1`
--

CREATE TABLE `personnel_details1` (
  `Serial` int(11) DEFAULT NULL,
  `army_no` varchar(15) NOT NULL,
  `rank` varchar(10) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `other_names` varchar(15) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `sex` varchar(8) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `trade_class` varchar(15) NOT NULL,
  `civil_qual` varchar(30) NOT NULL,
  `Blood_gp` varchar(4) NOT NULL,
  `genotype` varchar(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dolp` varchar(10) NOT NULL,
  `doe` varchar(10) NOT NULL,
  `NOD_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnel_details1`
--

INSERT INTO `personnel_details1` (`Serial`, `army_no`, `rank`, `surname`, `firstname`, `other_names`, `dob`, `sex`, `marital_status`, `phone`, `address`, `trade_class`, `civil_qual`, `Blood_gp`, `genotype`, `email`, `dolp`, `doe`, `NOD_details`) VALUES
(NULL, '11NA/66/10373', 'LCPL', 'OHIRI', 'MAXWELL', 'UGOCHUKWU', '12/12/1990', 'MALE', 'Married', '08038935404', 'Bauchi', 'Crewman A3', 'SSCE', 'O+', 'AA', 'maxwellohiriO@gmail.com', '01/09/2016', '08/09/2011', 'Maxwell Chinonso\r\nBauchi\r\nSon'),
(NULL, '12NA/67/4001', 'LCPL', 'EJEBA', 'EMMANUEL', NULL, NULL, 'MALE', 'SINGLE', '08011111111', '', '', '', '', '', '', '', '', ''),
(2, '12NA/67/4133', 'LCpl', 'Ejeba', 'Emmanuel', NULL, '1984-09-18', 'Male', 'Single', '07088888888', 'Yola', 'Arm Stmn', 'SSCE', '', '', '', '', '', ''),
(1, '12NA/67/4174', 'LCpl', 'Emaikwu', 'Isaiah', 'Adah', '1992-01-29', 'Male', 'Married', '08127933637', 'Block 21 Room 7 Gibson Jalo', 'Crewman A1', 'ND C-Sci', 'O-', 'AA', 'cycrimeber@gmail.com', '01/09/2015', '02/04/2012', 'Emily & King\r\nBlock 21, Room 7\r\n08066967573\r\nDaughter & Son'),
(4, '13NA/70/1232', 'Cpl', 'Mike', 'James', NULL, '1982-09-22', 'Male', 'Married', '08155447788', 'Makurdi', 'Drill B2', 'HND', '', '', '', '', '', ''),
(8, '13NA/70/8337', 'LCpl', 'Yohanna', 'Patience', 'Audi', '1980-12-12', 'Female', 'Married', '07066558899', 'Benin', 'Cat B1', 'ND', '', '', '', '', '', ''),
(7, '14NA/72/0912', 'Sigm', 'Okechukwu', 'Miracle', 'C', '1989-05-14', 'Male', 'Single', '08022554411', 'Abia', 'ROP B3', 'ND', '', '', '', '', '', ''),
(3, '14NA/72/1112', 'Tpr', 'Okeke', 'Wisdom', 'Chinaza', '1990-09-14', 'Female', 'Single', '07011111111', 'Lagos', 'Cat B3', 'SSCE', '', '', '', '', '', ''),
(5, '15NA/73/0097', 'Tpr', 'Rachael', 'Obi', 'Nchong', '1994-09-08', 'Female', 'Single', '015236945', 'Abuja', 'Cat B3', 'SSCE', '', '', '', '', '', ''),
(9, '15NA/73/1172', 'LCpl', 'Hussaini', 'Peter', 'Garba', '1997-12-12', 'Male', 'Single', '08125478965', 'Calabar', 'Crewman A1', 'SSCE', '', '', '', '', '', ''),
(6, '16NA/75/1122', 'Sigm', 'Agada', 'Maria', NULL, '1996-12-12', 'Female', 'Single', '09044321234', 'Kaduna', 'ROP B3', 'ND C-Sci', '', '', '', '', '', ''),
(10, '90NA/31/1122', 'SSgt', 'Hussain', 'Michael', NULL, '1964-10-13', 'Male', 'Married', '07044558877', 'Onitsha', 'Crewman A1', 'PGDE', 'O+', 'AS', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `update_requests`
--

CREATE TABLE `update_requests` (
  `army_number` varchar(25) NOT NULL,
  `updates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_requests`
--

INSERT INTO `update_requests` (`army_number`, `updates`) VALUES
('12NA/67/4174', 'DOLP - 01 Sep 2015'),
('12NA/67/4133', 'surname - Ochepo'),
('12NA/67/4174', 'DOB - 29/01/1992'),
('12NA/67/4174', 'Other Name - Adah'),
('12NA/67/4174', 'Trade Class - Crewman A1'),
('12NA/67/4174', 'Phone - 07062335430'),
('12NA/67/4174', 'Genotype - AS'),
('11NA/66/10373', 'Trade - Crewman A3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnel_details1`
--
ALTER TABLE `personnel_details1`
  ADD UNIQUE KEY `army_no` (`army_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
