-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 12:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pwd` varchar(100) NOT NULL,
  `name` varchar(255) DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pwd`, `name`) VALUES
(2, 'admin@admin.com', 'Edt0u87g/n0E6', 'Admin'),
(4, 'demo@demo.com', 'EdCjpEFrzlwyo', 'Demo'),
(38, 'aa@aa.com', 'Edhl7HflhcBlU', 'aa'),
(39, 'hello@hello.com', 'EdQ6FyMQQe9e.', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `phone`, `email`, `message`) VALUES
('Manoranjan Dash', '8460214100', 'email2dash@gmail.com', 'Hello World'),
('Manoranjan Dash', '8460214100', 'email2dash@gmail.com', 'Hello World');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_status`) VALUES
(1, 'css', 1),
(2, 'javascript', 1),
(3, 'java', 1),
(41, 'php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`) VALUES
(14, 'Xyz', 'xyz@gmail.com', 'Edn6HLyYJCKjU', NULL),
(16, 'Manoranjan Dash', 'email2dash@gmail.com', 'Edc2VGmE3b1fo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `video_title` text NOT NULL,
  `video_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `sub_id`, `video_title`, `video_link`) VALUES
(4, 2, '', 'https://www.youtube.com/embed/dlfrWbYk1v0'),
(5, 2, 'Getting all tools for Javascript', 'https://www.youtube.com/embed/rqI12Mh22rQ'),
(6, 2, 'Setting up VS Code', 'https://www.youtube.com/embed/D3CDmRjPdcE'),
(7, 2, 'A talk about numbers', 'https://www.youtube.com/embed/0irDIUp3NeI'),
(8, 2, 'Undefined and Boolean in javascript', 'https://www.youtube.com/embed/gOnjDkAoU7U'),
(9, 1, 'Introduction to CSS', 'https://www.youtube.com/embed/qKoajPPWpmo'),
(10, 1, 'Changing Font, color and size', 'https://www.youtube.com/embed/UO0ZPL8yMpU'),
(11, 1, 'Multiple Selectors and writing Rules', 'https://www.youtube.com/embed/JT0gyzbpD2U'),
(12, 1, 'Border Property in CSS', 'https://www.youtube.com/embed/hCoMjvtsyPA'),
(13, 1, 'Classes in CSS', 'https://www.youtube.com/embed/u4dLB9NP3IA'),
(14, 3, 'Introduction to JAVA Hindi', 'https://www.youtube.com/embed/IsLyduxZ9sc'),
(15, 3, 'Installation of JAVA Hindi', 'https://www.youtube.com/embed/U_vuESBFEpE'),
(16, 3, 'First Program in Java Hindi', 'https://www.youtube.com/embed/7i8vbPA37y0'),
(17, 3, ' Data Types and Keywords in Java Hindi', 'https://www.youtube.com/embed/FB47F-QIk3k'),
(18, 3, 'Type Conversion in JavaHindi', 'https://www.youtube.com/embed/8qyVcHJ1Et4'),
(19, 41, 'Login System in PHP & MySQL', 'https://www.youtube.com/embed/B897ycNPRo4'),
(20, 41, 'Login and Signup using PHP in Hindi PART - 1', 'https://www.youtube.com/embed/qLr7vy5dN8s'),
(21, 41, 'Login and Signup using PHP in Hindi PART 2', 'https://www.youtube.com/embed/BWvQU0TyjRo'),
(22, 41, 'Login and Signup using PHP in Hindi PART 3', 'https://www.youtube.com/embed/w-uu7bXw2gI'),
(23, 41, 'Login and Signup using PHP in Hindi PART 4', 'https://www.youtube.com/embed/JKaX_4lN3BY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
