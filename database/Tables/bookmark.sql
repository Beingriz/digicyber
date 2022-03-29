-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 04:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalcyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `Sl_No` int(11) NOT NULL,
  `BM_Id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Hyperlink` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`Sl_No`, `BM_Id`, `Name`, `Relation`, `Hyperlink`) VALUES
(1, 'BM2021161', 'Digital India Portal', '', 'https://digitalindiaportal.co.in/users/index.php'),
(2, 'BM2021195', 'PayNearBy Login', '', 'https://retailer.paynearby.in/login.aspx'),
(3, 'BM2021585', 'Seva Sindhu Login', '', 'https://serviceonline.gov.in/karnataka/login.do'),
(4, 'BM2021701', 'Rapi Pay Login', '', 'https://agent.rapipay.com/#/dashboard/login'),
(5, 'BM2021822', 'CSC Login', '', 'https://digitalseva.csc.gov.in/web/login'),
(6, 'BM2021963', 'IRCTC Login', '', 'https://www.irctc.co.in/nget/train-search'),
(7, 'BM2021217', 'UTI PSA Login', 'Pan Card', 'https://www.psaonline.utiitsl.com/psaonline/showLogin'),
(9, 'BM2021994', 'Download Aadhar ', '', 'https://eaadhaar.uidai.gov.in/#/'),
(10, 'BM2021695', 'Update Aadhar', '', 'https://ssup.uidai.gov.in/ssup/'),
(11, 'BM2021232', 'Check Aadhar Status', '', 'https://resident.uidai.gov.in/check-aadhaar'),
(12, 'BM2021373', 'Check Aadhar Update Status', '', 'https://ssup.uidai.gov.in/checkSSUPStatus/checkupdatestatus'),
(13, 'BM2021392', 'Rural Seva Service', '', 'https://ruraleservices.com/agent/login'),
(14, 'BM2021127', 'InfinityFree Login', '', 'https://app.infinityfree.net/users/2801515'),
(15, 'BM2021540', 'RTE 2021', '', 'https://sdcedn.karnataka.gov.in/RTE2018/(S(4gmxi4l3qbyidz5pgdxmayum))/RTE2017/RTE2018_admit.aspx'),
(16, 'BM2021237', 'Aadhar Pan Link', '', 'https://eportal.incometax.gov.in/iec/foservices/#/pre-login/bl-link-aadhaar'),
(17, 'BM2021151', 'Pan Link Status', '', 'https://www1.incometaxindiaefiling.gov.in/e-FilingGS/Services/AadhaarPreloginStatus.html'),
(18, 'BM2021979', 'National Voter Portal', '', 'https://www.nvsp.in'),
(19, 'BM2021790', 'EPFO Passbook Login', '', 'https://passbook.epfindia.gov.in/MemberPassBook/Login'),
(20, 'BM2021308', 'Rural Seva Service', '', 'https://ruraleservices.com/agent/login'),
(21, 'BM2021799', 'Bus Pass Application', '', 'http://student.mybmtc.com:8280/bmtc/login/secure#'),
(22, 'BM2021527', 'National Voter Portal', '', 'https://www.nvsp.in'),
(23, 'BM2021720', 'Covid-19 Report', '', 'https://www.covidwar.karnataka.gov.in/service1'),
(24, 'BM2021988', 'Nada Kacheri', '', 'https://nadakacheri.karnataka.gov.in/Online_service_Public/loginpage.aspx'),
(25, 'BM2021717', 'Covid Releif Status', '', 'https://sevasindhu.karnataka.gov.in/CommonDBTReports/TrackDBTApplicationStatus.aspx'),
(26, 'BM2021738', 'Cowin Certificate', '', 'https://selfregistration.cowin.gov.in'),
(27, 'BM2021480', 'Seva Sindhu', '', 'https://sevasindhu.karnataka.gov.in/Sevasindhu/English'),
(28, 'BM2021257', 'Sniper Media Access', '', 'https://snipermedia.in/defcon2bellaciao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`Sl_No`),
  ADD UNIQUE KEY `bm_id` (`BM_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `Sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
