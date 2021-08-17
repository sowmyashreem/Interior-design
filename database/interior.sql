-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 05:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interior`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(0, 'abc', 0),
(1, 'admin@admin.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(250) NOT NULL,
  `client_name` varchar(250) NOT NULL,
  `client_pic` varchar(250) NOT NULL,
  `client_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_pic`, `client_details`) VALUES
(1, 'Abbas Ahmad', '1545573419_download.png', 'Message form your client goes here.'),
(2, 'Fazal Kareem', '1545577105_download.png', 'Comments form your client'),
(3, 'Client no 1', '1545577124_download.png', 'Details goes here'),
(4, 'Client no 2', '1545577137_download.png', 'Details goes here'),
(5, 'name of the c', '1545581877_1.PNG', 'message form the cust');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(250) NOT NULL,
  `gallery_pic` varchar(250) NOT NULL,
  `gallery_name` varchar(250) NOT NULL,
  `gallery_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `slider_pic_id` int(250) NOT NULL,
  `slider_pic` varchar(250) NOT NULL,
  `slider_pic_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`slider_pic_id`, `slider_pic`, `slider_pic_title`) VALUES
(1, '1545581812_1.PNG', 'Bedrooms'),
(2, '2.jpg', 'this is title'),
(3, '3.jpg', 'this is title'),
(4, '4.jpg', 'this is title'),
(5, '5.jpg', 'this is title'),
(6, '6.jpg', 'this is title'),
(7, '7.jpg', 'this is title');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(250) NOT NULL,
  `project_pic` varchar(250) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `project_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_pic`, `project_name`, `project_details`) VALUES
(1, '1545576318_bedroom1 - Copy.jpg', 'House no 1', 'details goes here'),
(2, '1545576337_bedroom1.jpg', 'House no 2', 'Details goes here'),
(3, '1545581895_5.PNG', 'Proj 1', 'details');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`slider_pic_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `slider_pic_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
