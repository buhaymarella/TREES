-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2023 at 07:14 PM
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
  `permit_type` varchar(1500) NOT NULL,
  `chain_ID` int(11) NOT NULL,
  `chainsaw_id_fk` int(11) NOT NULL,
  `fName` varchar(1000) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `suff` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `mncpl` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pId` int(255) NOT NULL,
  `cVerification` varchar(255) DEFAULT NULL,
  `cStore` varchar(250) NOT NULL,
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
  `permit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chainsaw_registration`
--

INSERT INTO `chainsaw_registration` (`permit_type`, `chain_ID`, `chainsaw_id_fk`, `fName`, `lName`, `mName`, `suff`, `brgy`, `mncpl`, `city`, `pId`, `cVerification`, `cStore`, `cBrand`, `cModel`, `sNum`, `dAcq`, `eDisplace`, `lBlade`, `cOrig`, `cPrice`, `chainsawReceipt`, `mayorsPermit`, `permit_date`) VALUES
('Chainsaw Registration', 10, 9, 'Marella', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', 4902, NULL, 'chainsaw store', 'chainBrand', 'MS 070', 'S188128299', '2023-06-07', '1.0 Hp', '45 inches', 'Philippines', 90909, '', '', '2023-06-12 23:26:14'),
('Chainsaw Registration', 13, 9, 'Albie', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', 4902, NULL, 'dnfjds', 'chainBrand', 'chain-md043', '32324', '2023-06-08', '45/kph', '45mm', 'Philippines', 78787, '', '', '2023-06-13 02:53:14'),
('Chainsaw Registration', 14, 27, 'Marella', 'Buhay', '', '', 'Hupi', 'Sta Cruz', 'Marinduque', 4902, NULL, 'dnfjds', 'chainBrand', 'chain-md043', '09w384', '2023-06-08', '45/kph', '45m', 'Philippines', 123345, '', '', '2023-06-13 02:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `chainsaw_reg_draft`
--

CREATE TABLE `chainsaw_reg_draft` (
  `permit_type` varchar(1500) NOT NULL,
  `chain-ID` int(11) NOT NULL,
  `chain_id_fk` int(11) NOT NULL,
  `fName` varchar(500) NOT NULL,
  `lName` varchar(500) NOT NULL,
  `mName` varchar(500) NOT NULL,
  `suff` varchar(500) NOT NULL,
  `brgy` varchar(500) NOT NULL,
  `mncpl` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `pId` int(11) NOT NULL,
  `cVerification` mediumblob,
  `cStore` varchar(500) NOT NULL,
  `cBrand` varchar(500) NOT NULL,
  `cModel` varchar(500) NOT NULL,
  `sNum` varchar(500) NOT NULL,
  `dAcq` date NOT NULL,
  `eDisplace` varchar(500) NOT NULL,
  `lBlade` varchar(500) NOT NULL,
  `cOrig` varchar(500) NOT NULL,
  `cPrice` int(11) NOT NULL,
  `chainsawReceipt` mediumblob NOT NULL,
  `mayorsPermit` mediumblob NOT NULL,
  `permit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_draft` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chainsaw_reg_draft`
--

INSERT INTO `chainsaw_reg_draft` (`permit_type`, `chain-ID`, `chain_id_fk`, `fName`, `lName`, `mName`, `suff`, `brgy`, `mncpl`, `city`, `pId`, `cVerification`, `cStore`, `cBrand`, `cModel`, `sNum`, `dAcq`, `eDisplace`, `lBlade`, `cOrig`, `cPrice`, `chainsawReceipt`, `mayorsPermit`, `permit_date`, `is_draft`) VALUES
('', 1, 9, 'Albie', 'Buhay', '', '', 'Tanza', 'Boac', 'Marinduque', 4901, NULL, 'chainsaw store', 'dsd', 'asd', '32324', '2023-06-29', 'asd', '45m', 'Japan', 124223, '', '', '2023-06-12 22:37:59', 1);

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
  `bussPermit` longblob NOT NULL,
  `storeMPermit` longblob NOT NULL,
  `store-regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chainsaw_store`
--

INSERT INTO `chainsaw_store` (`store-id`, `storeName`, `storeOwner`, `storeAddress`, `storeNum`, `storeEmail`, `bussPermit`, `storeMPermit`, `store-regdate`) VALUES
(5, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 990866554, 'chainsawstore@mail.com', '', '', '2023-06-06 20:10:59'),
(7, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 1234, 'chainstore@mail.com', '', '', '2023-06-06 20:14:56'),
(9, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 1234, 'chains@mail.com', '', '', '2023-06-06 20:16:33'),
(10, 'chainsaw store', 'taylor swift', 'hupi sta cruz', 967545525678, 'tswiftstore@mail.com', 0x4469766572736974792d696d6167652d66726f6d2d7265706f72742d31303234783537362e6a7067, 0x4469766572736974792d696d6167652d66726f6d2d7265706f72742d31303234783537362e6a7067, '2023-06-06 22:22:55'),
(13, 'dnfjds', 'fndj', 'dnfj', 98434, 'chdh@mailc.ocm', 0x363438353834626230393533302e6a7067, 0x363438353834626230626666652e6a7067, '2023-06-11 08:24:27'),
(14, 'Chainsaw Store', 'Marella Buhay', 'Hupi, Sta Cruz, Marinduque', 9687191210, 'chainsaw@mail.com', 0x363438353938613164303964652e6a7067, 0x363438353938613164323830612e6a7067, '2023-06-11 09:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `ptpr_draft`
--

CREATE TABLE `ptpr_draft` (
  `permit_type` varchar(1500) NOT NULL,
  `id` int(11) NOT NULL,
  `ptpr_id_fk` int(11) NOT NULL,
  `fName` varchar(500) NOT NULL,
  `lName` varchar(500) NOT NULL,
  `mName` varchar(500) NOT NULL,
  `mncpl` varchar(500) NOT NULL,
  `brgy` varchar(500) NOT NULL,
  `conNum` bigint(20) NOT NULL,
  `prov` varchar(500) NOT NULL,
  `brgy_loc` varchar(500) NOT NULL,
  `mncpl_loc` varchar(500) NOT NULL,
  `prov_loc` varchar(500) NOT NULL,
  `taxDecNum` varchar(500) NOT NULL,
  `totArea` varchar(500) NOT NULL,
  `totAreaPlant` varchar(500) NOT NULL,
  `species` varchar(500) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `volProd` bigint(20) NOT NULL,
  `taxDec` varchar(500) NOT NULL,
  `pow_Atty` varchar(500) NOT NULL,
  `regDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptpr_draft`
--

INSERT INTO `ptpr_draft` (`permit_type`, `id`, `ptpr_id_fk`, `fName`, `lName`, `mName`, `mncpl`, `brgy`, `conNum`, `prov`, `brgy_loc`, `mncpl_loc`, `prov_loc`, `taxDecNum`, `totArea`, `totAreaPlant`, `species`, `quantity`, `volProd`, `taxDec`, `pow_Atty`, `regDate`) VALUES
('', 1, 9, 'Albie', 'Buhay', '', 'Sta Cruz', 'Hupi', 1212323, 'Marinduque', 'tanza', 'boac', 'marinduque', '1212', '43sqm', '40sqm', 'n/A', 12, 12, '', '', '2023-06-12 22:59:16'),
('Private Tree Plantation Registration', 2, 27, 'Marella', 'Buhay', '', 'Sta Cruz', 'Hupi', 232323, 'Marinduque', 'Tanza', 'Boac', 'Marinduque', '121', '90sqm', '50sqm', 'qwqwe', 12, 12, '', '', '2023-06-13 03:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `ptpr_registration`
--

CREATE TABLE `ptpr_registration` (
  `permit_type` varchar(1500) NOT NULL,
  `id` int(11) NOT NULL,
  `ptpr_id` int(11) NOT NULL,
  `fName` varchar(500) NOT NULL,
  `lName` varchar(500) NOT NULL,
  `mName` varchar(500) NOT NULL,
  `mncpl` varchar(500) NOT NULL,
  `brgy` varchar(500) NOT NULL,
  `conNum` varchar(500) NOT NULL,
  `prov` varchar(500) NOT NULL,
  `brgy_loc` varchar(500) NOT NULL,
  `mncpl_loc` varchar(500) NOT NULL,
  `prov_loc` varchar(500) NOT NULL,
  `taxDecNum` varchar(500) NOT NULL,
  `totArea` varchar(500) NOT NULL,
  `totAreaPlant` varchar(500) NOT NULL,
  `species` varchar(500) NOT NULL,
  `quantity` int(255) NOT NULL,
  `volProd` int(255) NOT NULL,
  `taxDec` varchar(500) NOT NULL,
  `pow_Atty` varchar(500) NOT NULL,
  `regDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptpr_registration`
--

INSERT INTO `ptpr_registration` (`permit_type`, `id`, `ptpr_id`, `fName`, `lName`, `mName`, `mncpl`, `brgy`, `conNum`, `prov`, `brgy_loc`, `mncpl_loc`, `prov_loc`, `taxDecNum`, `totArea`, `totAreaPlant`, `species`, `quantity`, `volProd`, `taxDec`, `pow_Atty`, `regDate`) VALUES
('Private Tree Plantation Registration', 7, 9, 'Albie', 'Buhay', '', 'Sta Cruz', 'Hupi', '09122345345', 'Marinduque', 'Tanza', 'Boac', 'Marinduque', '89438943', '43sqm', '50sqm', 'n/A', 12, 12, '', '', '2023-06-12 23:37:02');

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
(22, 'Glenn', 'Swift', '', '', 'Tanza', 'Boac', 'Marinduque', '4901', '1998-06-03', 21, 'cook', 12121212, 'glenn_069@mail.com', 'quagmire_042', 'd1ab9ea0c2a5ab8bd8da1d35169d1d62', 'admin', '2023-06-09 16:18:10', 'approved'),
(24, 'Jared Simon', 'Danao', 'Roncesvalles', 'None', 'Matalaba', 'Santa Cruz', 'Marinduque', '4902', '2001-11-24', 21, 'None', 9107897518, 'jaredsimondanao@gmail.com', 'Simonkiee', '298306121a3b3b5178fba35085a28cfe', 'user', '2023-06-11 08:36:03', 'Not Yet Registered'),
(25, 'Marella', 'Buhay', '', '', 'Tanza', 'Boac', 'Marinduque', '4902', '2001-09-17', 21, 'Programmer', 9663761306, 'marella.gutierrez@yahoo.com', 'mrll_017', '37582fb247b16ba5a32fe09bc0279c1c', 'user', '2023-06-12 18:57:00', 'Not Yet Registered'),
(27, 'Marella', 'Buhay', '', '', 'Tanza', 'Boac', 'Marinduque', '4902', '2001-09-17', 21, 'Programmer', 9663761306, 'marella.gutierrez017@yahoo.com', 'mrll_017', '37582fb247b16ba5a32fe09bc0279c1c', 'user', '2023-06-12 18:58:20', 'Not Yet Registered');

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
  ADD PRIMARY KEY (`chain_ID`),
  ADD KEY `chainsaw_id_fk` (`chainsaw_id_fk`);

--
-- Indexes for table `chainsaw_reg_draft`
--
ALTER TABLE `chainsaw_reg_draft`
  ADD PRIMARY KEY (`chain-ID`),
  ADD KEY `chain_id_fk` (`chain_id_fk`);

--
-- Indexes for table `chainsaw_store`
--
ALTER TABLE `chainsaw_store`
  ADD PRIMARY KEY (`store-id`),
  ADD UNIQUE KEY `storeEmail` (`storeEmail`);

--
-- Indexes for table `ptpr_draft`
--
ALTER TABLE `ptpr_draft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ptpr_id_fk` (`ptpr_id_fk`);

--
-- Indexes for table `ptpr_registration`
--
ALTER TABLE `ptpr_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ptpr_id` (`ptpr_id`);

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
  MODIFY `chain_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `chainsaw_reg_draft`
--
ALTER TABLE `chainsaw_reg_draft`
  MODIFY `chain-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chainsaw_store`
--
ALTER TABLE `chainsaw_store`
  MODIFY `store-id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ptpr_draft`
--
ALTER TABLE `ptpr_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ptpr_registration`
--
ALTER TABLE `ptpr_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
  ADD CONSTRAINT `chainsaw_id_fk` FOREIGN KEY (`chainsaw_id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `chainsaw_reg_draft`
--
ALTER TABLE `chainsaw_reg_draft`
  ADD CONSTRAINT `chain_id_fk` FOREIGN KEY (`chain_id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `ptpr_draft`
--
ALTER TABLE `ptpr_draft`
  ADD CONSTRAINT `ptpr_id_fk_draft` FOREIGN KEY (`ptpr_id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `ptpr_registration`
--
ALTER TABLE `ptpr_registration`
  ADD CONSTRAINT `ptpr_id_fk` FOREIGN KEY (`ptpr_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
