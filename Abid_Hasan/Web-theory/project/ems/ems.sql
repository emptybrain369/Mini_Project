-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Contact` int(50) NOT NULL,
  `Nid` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Salary` int(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Name`, `Email`, `Gender`, `Contact`, `Nid`, `Address`, `Salary`, `Password`, `Photo`) VALUES
('3', 'Rafi', 'ae@gmail.com', 'Male', 1521329100, '55555555', 'dhaka  ', 555555, '1234', 'My project (13333).jpg'),
('4', 'raju', 'ae@gmail.com', 'Male', 1521329100, '11111', 'dhaka           ', 222222, '12345', 'wp5485320-4k-laptop-wallpapers.jpg'),
('1', 'Abid Hasan', 'abide@gmail.com', 'Male', 1521329100, '555', 'dhaka ', 5555, '1234', 'My project (13333).jpg'),
('2', 'Abid', 'abid@gmail.com', 'Male', 1521329100, '999', 'dhaka    ', 999, '1234', 'My project (13333).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `duedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `projectname`, `duedate`) VALUES
(2, 'project one', '2022-10-10'),
(2, 'project one', '2022-10-10'),
(1, 'project one', '2022-10-10'),
(1, 'project one', '2022-10-10'),
(3, 'project one', '2022-10-09'),
(3, 'project one', '2022-10-09'),
(4, 'project 4', '2022-10-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
