-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 06:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `PERSONID` varchar(10) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PERSONID`, `NAME`, `PASSWORD`) VALUES
('', NULL, NULL),
('1', 'Prashanth', '$2y$10$63wlSNvodXJH875l08sCmegRmRMHgxOe/PBYl.MSEze85IGfAryNm'),
('2', 'Sagar', '$2y$10$MSmpaECoYRFJA93Jiiep0OX0/5PCbvPhgFdYBRD5/2PfUgUI1TnPi'),
('3', 'Sainithin', '$2y$10$DLfjQHUAsOL5q.Ifq6QLReW/ubWZ1Fv/UYGVAah3SUUlrn4KA5j3a'),
('4', 'Syed', '$2y$10$/A37kdq0naLBpe/afgbbWuX0eiDXz6jSXB1u5..QyZ4dgYD5n9eJ.');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COMPANYID` int(11) NOT NULL,
  `CNAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHONE` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANYID`, `CNAME`, `EMAIL`, `PHONE`) VALUES
(1, 'Seagen', 'seagen01@gmail.in', 9832746489),
(2, 'AllenComm', 'allencomm02gmail.in', 9781324798),
(3, 'CornerStone', 'cornerstne03@gmail.in', 8970685902),
(4, 'Ulliance', 'ulliance@gmail.in', 8047629706),
(5, 'Paycheck', 'paycheck05@gmail.in', 9104379990),
(6, 'NIIT', 'niit06@gmail.in', 8797876605),
(7, 'SkillSoft', 'skillsoft07@gmail.in', 7890123456),
(8, 'XON Labs', 'xonlabs08@gmail.in', 8901234567),
(9, 'Oracle', 'oracle09@gmail.in', 9812079871),
(10, 'Wipro', 'wipro10@gmail.in', 9112903881);

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `USN` varchar(10) NOT NULL,
  `COMPANYID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`USN`, `COMPANYID`) VALUES
('1CE16CV020', 9),
('1CE16EE027', 3),
('1CE17CS087', 6),
('1CE17CS101', 1),
('1CE17CS105', 2),
('1CE17CS133', 8),
('1CE18ME122', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PASSWORD` varchar(260) NOT NULL,
  `PHONE` bigint(10) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `GRAD` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `NAME`, `EMAIL`, `PASSWORD`, `PHONE`, `DEPARTMENT`, `GRAD`) VALUES
('1CE16CV020', 'Abhishek', 'abhi25@gmail.com', '$2y$10$puBjeYze3MttAmMkHiMh0es/Wwa9w8sdS9m2KEzQywdw0yRiSyJfG', 8097896789, 'CIVIL', 2020),
('1CE16EE027', 'Akshay', 'akshay34@gmail.com', '$2y$10$k56hPgbmc5jYEKqF30vYFewERyL4WO0ebb/DC6Q1JrC6JYGx7RH7y', 9710836283, 'EIE', 2020),
('1CE17CS087', 'Prashanth', 'prashanthhk56@gmail.com', '$2y$10$PsWAzyRrG8q0kkuJEcSNwufqcvoKrLs4afvUYeIaK2IJTOc9fpbNu', 9731742994, 'CSE', 2021),
('1CE17CS101', 'Sagar ', 'sagar123@gmail.com', '$2y$10$9WOdiuekSku1LKTme.PeXOODJlp8hPDTMc3m3Tijqzqhq3M3wn1wq', 9786524310, 'CSE', 2021),
('1CE17CS105', 'Sai Nithin', 'sainithin12@gmail.com', '$2y$10$q7zPyj7axhKS86bUyc/ATO6oOcvdwZovm93Rr8noWHO6KhNaUcb.m', 8973654610, 'CSE', 2021),
('1CE17CS133', 'Syed', 'syed123@gmail.com', '$2y$10$N/b9s6XQFfOjlzjjSjHqSe2rDf2GkNcOk3hiE58jr7ntXa/FGU25O', 9834207519, 'CSE', 2021),
('1CE18ME122', 'Sanjeev', 'sanjeev92@gmail.com', '$2y$10$6.DPsLMaYFWVbg0Im2SLDuPHbXkyex.9GCospu2/MT/7FIvriu9ca', 8123456790, 'MECH', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `WORKSHOP_ID` varchar(10) NOT NULL,
  `COMPANYID` int(11) DEFAULT NULL,
  `DESCRIPTION` varchar(400) DEFAULT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `SKILLS` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`WORKSHOP_ID`, `COMPANYID`, `DESCRIPTION`, `NAME`, `SKILLS`) VALUES
('WS1  ', 1, 'Our courses teach you how to build IoT products and services in a simple and user friendly method. We cover the topics from scratch and there are no prerequisites for this course.', 'IOT', 'JavaScript\r\nC\r\nC++\r\nJava'),
('WS2  ', 2, 'The PHP Workshop focuses on building up your practical skills so that you can develop cutting-edge, high-performance web applications. It’s ideal if you’re looking to work with an existing application, or even develop your own side project with a PHP framework like Laravel.', 'PHP', 'C\r\nC++'),
('WS3  ', 3, 'Full Stack Web Development is nothing but complete designing of both websites and applications where the developers need to work from frontend to backend development. With our Full Stack Web Development Course, you will become an expert in all the aspects of web development such as Java, .NET, MEAN Stack and Python.', 'Full Stack Development', 'HTML\r\nCSS\r\nSQL'),
('WS4  ', 4, 'Enterprise organizations are choosing Microsoft Azure as their preferred Platform-as-a-Service (PaaS) for building modern cloud applications or migrating their existing applications to the cloud. However, monitoring complex, fast-growing applications at scale in the cloud can be challenging. AppDynamics for Microsoft Azure can deliver visibility and insight into your applications using .NET or .NE', 'MS Azure Fundamentals 900', 'C++\r\nPython'),
('WS5  ', 5, 'Join the Introduction in AWS Cloud Computing Workshop and understand the core concepts of “Cloud Computing” plus the different attributes such as reliability, fault tolerance, elasticity, scalability and pay-as-you-go pricing. Whether you are an Enterprise looking for IT innovation, agility and resiliency while reducing costs or small and medium business who wants to accelerate growth without a bi', 'AWS Services', 'C++\r\nPython\r\nBasic cloud concepts'),
('WS6 ', 6, 'Blockchain Technology is an emerging technology suitable for decentralised and transactional sharing of data across a large network of untrusted participants. It is an innovative distributed ledger technology where verification data for the transactional records is cryptographically secured against tampering and stored in blocks. ', 'Block Chain', 'Solidity language\r\nPython'),
('WS7  ', 7, 'Android App Development Workshop mainly focuses on how to use Android OS for building your own Android Application. Only the basic knowledge of programming is required for Android App Development, you do not have to be a geek for it! The workshop will start from the basics like designing layouts and building complex layouts.', 'Android App Development', 'Java Core\r\nJ2EE\r\nPython'),
('WS8  ', 8, 'This Post Graduate Program in Cyber Security is designed to equip you with the skills required to become an expert in the rapidly growing field of Cyber Security. This cyber security course aims to help you stay abreast all the latest trends in cyber security as well.', 'Cyber Security', 'Networking\r\nJava\r\nPython'),
('WS9  ', 9, 'When looking at networking basics, understanding the way a network operates is the first step to understanding routing and switching. The network operates by connecting computers and peripherals using two pieces of equipment; switches and routers. Switches and routers, essential networking basics, enable the devices that are connected to your network to communicate with each other, as well as with', 'Networking', 'Analytic Skills\r\nProblem Solving\r\nResearch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`PERSONID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`USN`,`COMPANYID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`WORKSHOP_ID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `placements`
--
ALTER TABLE `placements`
  ADD CONSTRAINT `fkcid` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`),
  ADD CONSTRAINT `fkusn` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `placements_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`),
  ADD CONSTRAINT `placements_ibfk_2` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`);

--
-- Constraints for table `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
