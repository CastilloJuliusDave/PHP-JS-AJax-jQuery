-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2019 at 01:15 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `language`, `description`) VALUES
(1, 'New Updated Chapters', 'Chinese Novels', 'List of Currently Updated Chinese Novels'),
(2, 'New Updated Chapters', 'Korean Novels', 'List of Currently Updated Korean Novels'),
(3, 'New Updated Chapters', 'Japanese Novels', 'List of Currently Updated Japanese Novels'),
(4, 'Completed Novels', 'Chinese Novels', 'List of  Completed Chinese Novels'),
(5, 'Completed Novels', 'Korean Novels', 'List of  Completed Korean Novels'),
(6, 'Completed Novels', 'Japanese Novels', 'List of  Completed Japanese Novels'),
(7, 'Recently Added Novels', 'Chinese Novels', 'List of  Recently Added Chinese Novels within the current month. (Novels novels which only consist of less than 25 chapters goes HERE. novels with more than 25 goes under New Updated Chapters Category)'),
(8, 'Recently Added Novels', 'Korean Novels', 'List of  Recently Added Korean Novels within the current month. (Novels novels which only consist of less than 25 chapters goes HERE. novels with more than 25 goes under New Updated Chapters Category)'),
(9, 'Recently Added Novels', 'Japanese Novels', 'List of  Recently Added Japanese Novels within the current month. (Novels novels which only consist of less than 25 chapters goes HERE. novels with more than 25 goes under New Updated Chapters Category)');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thread_id` int(11) NOT NULL,
  `user_account_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Disabled'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_account_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `subject`, `content`, `created`, `user_account_id`, `status`, `category_id`) VALUES
(1, 'Againts The Gods!', 'New Update!', '2019-01-28 06:55:29', 1, 1, 1),
(2, 'Overgeared', 'New update!', '2019-01-28 06:57:14', 20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_day` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `user_name`, `user_password`, `first_name`, `last_name`, `email`, `birth_day`, `gender`, `created`, `last_activity`, `status`) VALUES
(1, 'pongadmin', 'd13fa86f125e6b0cc321125098bd7b42', 'admin', 'admin', 'pong@gmail.com', '2019-01-09', 'Male', '0000-00-00 00:00:00', '2019-01-26 06:16:24', 'Active'),
(20, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'pongskie', 'pongers', 'pong1@gmail.com', '2014-10-08', 'Male', '2019-01-28 04:06:43', '2019-01-28 04:06:43', 'Active'),
(22, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'Julayus', 'Pongqweqweqw', 'pong3@gmail.com', '2019-01-07', 'Male', '2019-01-28 04:08:53', '2019-01-28 04:08:53', 'Active'),
(23, 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', 'asdas', 'asdasd', 'pong4@gmail.com', '2019-01-08', 'Male', '2019-01-28 05:26:35', '2019-01-28 05:26:35', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `status` (`status`),
  ADD KEY `user_account_id` (`user_account_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `user_acount_id` (`user_account_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `post_ibfk_4` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `thread_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `thread_ibfk_3` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `thread_ibfk_4` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
