-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2023 at 12:05 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trees-sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificateofverfication`
--

CREATE TABLE `certificateofverfication` (
  `covID` int(11) NOT NULL,
  `fr_cov_id` int(11) NOT NULL,
  `fName` varchar(1500) NOT NULL,
  `lName` varchar(1500) NOT NULL,
  `mName` varchar(1500) NOT NULL,
  `suffix` varchar(1500) NOT NULL,
  `brgy` varchar(1500) NOT NULL,
  `mncpl` varchar(1500) NOT NULL,
  `city` varchar(1500) NOT NULL,
  `postalID` varchar(1500) NOT NULL,
  `frBrgy` varchar(1500) NOT NULL,
  `frMncpl` varchar(1500) NOT NULL,
  `frCity` varchar(1500) NOT NULL,
  `toBrgy` varchar(1500) NOT NULL,
  `toMncpl` varchar(1500) NOT NULL,
  `toCity` varchar(1500) NOT NULL,
  `totArea` varchar(1500) NOT NULL,
  `kind` varchar(1500) NOT NULL,
  `species` varchar(1500) NOT NULL,
  `quantity` varchar(1500) NOT NULL,
  `volProd` varchar(1500) NOT NULL,
  `pltpDoc` mediumblob NOT NULL,
  `dName` varchar(1500) NOT NULL,
  `dLicense` mediumblob NOT NULL,
  `regDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chainsaw_registration`
--

CREATE TABLE `chainsaw_registration` (
  `chain-ID` int(11) NOT NULL,
  `fName` varchar(1000) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `suff` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `mncpl` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pId` int(255) NOT NULL,
  `cVerification` varchar(255) NOT NULL,
  `cBrand` varchar(255) NOT NULL,
  `cModel` varchar(255) NOT NULL,
  `sNum` varchar(255) NOT NULL,
  `dAcq` date NOT NULL,
  `eDisplace` varchar(255) NOT NULL,
  `lBlade` varchar(255) NOT NULL,
  `cOrig` varchar(255) NOT NULL,
  `cPrice` int(255) NOT NULL,
  `chainsawReceipt` mediumblob NOT NULL,
  `mayorsPermit` mediumblob NOT NULL,
  `id_chainsaw` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chainsaw_store`
--

CREATE TABLE `chainsaw_store` (
  `store-id` int(250) NOT NULL,
  `storeName` varchar(250) NOT NULL,
  `storeOwner` varchar(250) NOT NULL,
  `storeAddress` varchar(250) NOT NULL,
  `storeNum` bigint(20) NOT NULL,
  `storeEmail` varchar(250) NOT NULL,
  `bussPermit` mediumblob NOT NULL,
  `storeMPermit` mediumblob NOT NULL,
  `store-regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chainsaw_store`
--

INSERT INTO `chainsaw_store` (`store-id`, `storeName`, `storeOwner`, `storeAddress`, `storeNum`, `storeEmail`, `bussPermit`, `storeMPermit`, `store-regdate`) VALUES
(5, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 990866554, 'chainsawstore@mail.com', '', '', '2023-06-06 20:10:59'),
(7, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 1234, 'chainstore@mail.com', '', '', '2023-06-06 20:14:56'),
(9, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 1234, 'chains@mail.com', '', '', '2023-06-06 20:16:33'),
(10, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 967545525678, 'tswiftstore@mail.com', 0x4469766572736974792d696d6167652d66726f6d2d7265706f72742d31303234783537362e6a7067, 0x4469766572736974792d696d6167652d66726f6d2d7265706f72742d31303234783537362e6a7067, '2023-06-06 22:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `suffix` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `municipality` varchar(250) NOT NULL,
  `cprov` varchar(250) NOT NULL,
  `pID` varchar(250) NOT NULL,
  `birth` date NOT NULL,
  `age` int(250) NOT NULL,
  `occup` varchar(250) NOT NULL,
  `telNum` bigint(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `uName` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `type_User` varchar(250) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mname`, `suffix`, `brgy`, `municipality`, `cprov`, `pID`, `birth`, `age`, `occup`, `telNum`, `email`, `uName`, `pass`, `type_User`, `regDate`, `status`) VALUES
(2, 'Marella', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', '', '2022-05-04', 21, '', 9090909, 'marella@mail.com', 'admin_01', 'd5133c970ad3a99c2248fed76970d06c', 'admin', '2023-06-03 07:57:02', 'approved'),
(9, 'Albie', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', '4902', '1970-01-01', 3, '', 9108789767, 'albiebuhay_01@gmail.com', 'albie_daCat01', '8e70240f3dcc6f5b67d081d5e7794047', 'user', '2023-06-04 08:33:10', 'approved'),
(10, 'Sanji', 'Vinsmoke', '', '', 'Tanza', 'Boac', 'Marinduque', '4901', '1995-01-01', 25, 'cook', 9992837621, 'vinsmokesanji@mail.com', 'sanji_san', '6580bd4d5355196eecb2c0294feff805', 'user', '2023-06-04 09:24:09', ''),
(18, 'Pitchi', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', '4902', '2023-06-17', 1, 'none', 92873878, 'its_pitchi09@mail.com', 'its_pitchy069', '271f2925f367b54d7b467e56a2b95f86', 'user', '2023-06-09 14:09:57', ''),
(19, 'Avril', 'Lavigne', '', '', 'New York', 'New York', 'USA', '123', '1985-04-09', 35, 'singer', 973263762, 'avrillavigne@mail.com', 'avril_021', '74609e38f22150036c36a5c8b6178f7e', 'user', '2023-06-09 15:56:49', '?'),
(22, 'Glenn', 'Swift', '', '', 'Tanza', 'Boac', 'Marinduque', '4901', '1998-06-03', 21, 'cook', 12121212, 'glenn_069@mail.com', 'quagmire_042', 'd1ab9ea0c2a5ab8bd8da1d35169d1d62', 'admin', '2023-06-09 16:18:10', 'approved'),
(23, 'Sana', 'Minatozaki', '', '', 'tokyo', 'tokyo', 'Japan', '1234', '1996-12-29', 27, 'Singer', 90997878, 'minatozakisana@mail.com', 'sana_accla', 'ce0614301edffd294738b7b2aac63029', 'user', '2023-06-09 16:59:31', 'Not Yet Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificateofverfication`
--
ALTER TABLE `certificateofverfication`
  ADD PRIMARY KEY (`covID`),
  ADD KEY `fk_cov` (`fr_cov_id`);

--
-- Indexes for table `chainsaw_registration`
--
ALTER TABLE `chainsaw_registration`
  ADD PRIMARY KEY (`chain-ID`),
  ADD KEY `id_chainsaw` (`id_chainsaw`);

--
-- Indexes for table `chainsaw_store`
--
ALTER TABLE `chainsaw_store`
  ADD PRIMARY KEY (`store-id`),
  ADD UNIQUE KEY `storeEmail` (`storeEmail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificateofverfication`
--
ALTER TABLE `certificateofverfication`
  MODIFY `covID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chainsaw_registration`
--
ALTER TABLE `chainsaw_registration`
  MODIFY `chain-ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chainsaw_store`
--
ALTER TABLE `chainsaw_store`
  MODIFY `store-id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificateofverfication`
--
ALTER TABLE `certificateofverfication`
  ADD CONSTRAINT `fk_cov` FOREIGN KEY (`fr_cov_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `chainsaw_registration`
--
ALTER TABLE `chainsaw_registration`
  ADD CONSTRAINT `chainsaw_registration_ibfk_1` FOREIGN KEY (`id_chainsaw`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
