-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 09:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `caseTitle` varchar(300) NOT NULL,
  `caseDescription` varchar(3000) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `caseTitle`, `caseDescription`, `user_id`) VALUES
(1, 'Spam Filtering API', 'Create an API that let any user use to to remove suspecious emails from any email account .', 1),
(2, 'VK Bot', 'Create a Bot that interact with users and help new users who joined your VK group .', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `telNumber` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `selectedSubject` varchar(200) NOT NULL,
  `teamName` varchar(200) NOT NULL,
  `captinName` varchar(200) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `teamMembers` varchar(200) NOT NULL,
  `registerDate` datetime DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `caseNumber` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullName`, `telNumber`, `email`, `selectedSubject`, `teamName`, `captinName`, `organization`, `teamMembers`, `registerDate`, `password`, `caseNumber`) VALUES
(1, 'ivan yasakov', '2332251002', 'admin@gmail.com', 'Информационная Безопасность', 'bilbo', 'sadaka', '', 'ostap , sasha', '2021-04-03 21:08:04', 'a46fe670b3282a6e2bf39fa2c75bb13317dac62f', 1),
(2, 'Belaev Ostap', '2332251002', 'pibor33382@28woman.com', 'Разработка программного обеспечения', 'bars', 'skidrow', '', '', '2021-04-03 21:09:18', '', 1),
(3, 'Ivan Artemov', '22022020', 'rohap52000@boldhut.com', 'Разработка программного обеспечения', 'skidrow', 'skidrow', 'REU', '', '2021-04-03 21:09:59', '', 1),
(4, 'Polivada Sergey', '22022020', 'rohap52000@boldhut.com', 'Разработка программного обеспечения', 'bars', 'sadaka', 'Basket', '', '2021-04-03 21:23:00', '', 1),
(6, 'Yuliya Vladimirovna', '1545645645', 'yidifij886@990ys.com', 'Информационная Безопасность', 'rabbit', 'super', 'google', 'Yana , Vlada, Masha', '2021-04-04 12:41:04', '', 1),
(7, 'Vlada Akimova', '664', 'cabaj20301@j24blog.com', 'Информационная Безопасность', 'rabbit', 'super', '', '', '2021-05-16 18:27:28', '', 2),
(8, 'Karl Max', '2332251002', 'jkdh10@gmail.com', 'Информационная Безопасность', 'bilbo', 'sadaka', '', '', '2021-06-15 23:59:24', '5422aa3054ae5515db33d9d8b8d478ff1bfc3bfe', 1),
(11, 'blooomfilter', '31321231', 'admin@gmail.com', 'Информационная Безопасность', 'bilbo', 'sadaka', '', '', '2021-06-17 19:59:24', 'e4c37844887137ec67b5a8284dd22ffb4f34f1f9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'rsue', 'rsue', '2d89d6f623094c8952a3ce54b87ee0ea', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `user` (`caseNumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user` FOREIGN KEY (`caseNumber`) REFERENCES `cases` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
