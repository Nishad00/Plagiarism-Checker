-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2020 at 10:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL,
  `department` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `description`, `department`, `block`, `duedate`, `status`, `user`) VALUES
(120, 'ass', 'mv,cxmvxvcx', 'IT', 'B6', '2019-11-15', 'assigned', 't1'),
(121, 'ass2', 'ndnvnvncmnvmcnmn', 'IT', 'B6', '2019-11-16', 'assigned', 't1'),
(122, 'ass3', 'n,n..n./lllllllllllllllllllllllllllllllllllllll', 'B6', 'IT', '2019-11-14', 'assigned', 't1'),
(123, 'ass2', 'upload', 'IT', 'B6', '2019-11-25', 'assigned', 't1');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `password`, `name`, `email`, `role`, `department`, `block`, `gender`, `age`, `address`, `mobile`) VALUES
(22, 't1', 't1', 'Pratap', 't@123', 'Teacher', 'CM', 'B6', 'Enter Gender', '19', 'Alandi , Pune', 'Enter Mobile No'),
(23, 's1', 's1', 'SSSSS', 'cxbbxnbvxcbn', 'Student', 'IT', 'B6', 'Enter Gender', '20', 'Alandi , Pune', 'Enter Mobile No'),
(24, 'nishad', 'patil', 'Nishad Vijay Patil', 'nishadvp@mitaoe.ac.in', 'Student', 'IT', 'B6', 'Enter Gender', '20', 'Alandi , Pune', 'Enter Mobile No'),
(25, 's2', 's2', 'nnnn', 'nnn', 'Student', 'IT', 'B6', 'Enter Gender', '20', 'Alandi , Pune', 'Enter Mobile No'),
(26, 's3', 's3', 'fgtvg', 'koli@mitaoe.ac.in', 'Student', 'IT', 'B6', 'Enter Gender', '20', 'Alandi , Pune', 'Enter Mobile No');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `a_id` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`, `size`, `a_id`, `user`, `url`) VALUES
(19, 'assipc.cpp', 'text/x-c++src', '1273', ' 121', 's1', 'https://www.google.com'),
(22, 'Screenshot from 2019-10-22 17-16-57.png', 'image/png', '232336', ' 120', 's2', 'https://navandlayout.000webhostapp.com/layout.html'),
(23, 'assipc.cpp', 'text/x-c++src', '1273', ' 123', 's1', 'https://navandlayout.000webhostapp.com/layout.html'),
(24, 'package-lock.json', 'application/json', '89695', ' 121', 's3', 'https://www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
