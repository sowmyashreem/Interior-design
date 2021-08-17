-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 08:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'sowmya', '123'),
(3, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(250) NOT NULL,
  `client_name` varchar(250) NOT NULL,
  `client_pic` mediumtext NOT NULL,
  `client_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_pic`, `client_details`) VALUES
(0, 'sowmya', '1612002989_1609224017_1609223855_1609223773_female_images.jpg', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `messege` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstName`, `email`, `number`, `messege`) VALUES
(1, 'SOWMYASHREE M', 'swmshree123@gmail.com', '2147483647', ''),
(2, 'SOWMYASHREE M', 'swmshree123@gmail.com', '2147483647', ''),
(3, 'netra', 'netra@gmail.com', '10', 'hii'),
(4, 'netra', 'netra@gmail.com', '9110221295', 'hii'),
(5, 'pushpa', 'pushpa@gmail.com', '8904443836', ''),
(6, 'SOWMYASHREE M', 'swmshree123@gmail.com', '8904443836', ''),
(7, 'hi', 'swmshree123@gmail.com', '8904443836', ''),
(8, 'hi', 'swmshree123@gmail.com', '8904443836', ''),
(9, 'hi', 'swmshree123@gmail.com', '8904443836', ''),
(10, '1', '2@gmail.com', '3', ''),
(11, '1', '2@gmail.com', '3', ''),
(12, '1', '2@gmail.com', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(250) NOT NULL,
  `gallery_pic` mediumtext NOT NULL,
  `gallery_name` varchar(25) NOT NULL,
  `gallery_details` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_pic`, `gallery_name`, `gallery_details`) VALUES
(1, '1610689917_bedroom1.jpg', 'bedroom', 'bedrrom');

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `slider_pic_id` int(250) NOT NULL,
  `slider_pic` mediumtext NOT NULL,
  `slider_pic_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`slider_pic_id`, `slider_pic`, `slider_pic_title`) VALUES
(1, '1611987151_pro_12.jpg', ''),
(2, '1609226571_gallery-img7.jpg', ''),
(3, '1609225045_gallery-img5.jpg', ''),
(4, '1609224899_gallery-img1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(250) NOT NULL,
  `project_pic` varchar(2500) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `project_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_pic`, `project_name`, `project_details`) VALUES
(2, '1611987048_pro_1.jpg', 'bathroom', 'bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `slider_pic_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
