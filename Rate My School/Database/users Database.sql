-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 11:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(50) NOT NULL,
  `instructor_name` varchar(100) NOT NULL,
  `instructor_email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `courses_taught` varchar(100) NOT NULL,
  `instructor_school_id` int(50) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `instructor_email`, `department`, `courses_taught`, `instructor_school_id`, `school_name`) VALUES
(4, 'Ibrahim Edashola', 'ibrahim.edashola@final.edu.tr', 'Software Engineering', 'soft101', 1, 'Final International University'),
(5, 'Bilal Mah', 'Bilal.Mah@final.edu.tr', 'Computer Engineering', 'comp101', 1, 'Final International University'),
(6, 'Dnize Mahlu', 'Dnize.Mahlu@final.edu.tr', 'Civil Engineering', 'eng101', 1, 'Final International University'),
(7, 'karolina Vach', 'karolina.vach@final.edu.tr', 'physics', 'phys121', 1, 'Final International University'),
(8, 'karolina Vach', 'karolina.vach@final.edu.tr', 'physics', 'phys121', 2, 'Girne Amircan University');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_ratings`
--

CREATE TABLE `instructor_ratings` (
  `id` int(50) NOT NULL,
  `instructor_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `knowledge` int(50) NOT NULL,
  `communication` int(50) NOT NULL,
  `engagement` int(50) NOT NULL,
  `overall` int(50) NOT NULL,
  `reviewText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_ratings`
--

INSERT INTO `instructor_ratings` (`id`, `instructor_id`, `user_id`, `course`, `knowledge`, `communication`, `engagement`, `overall`, `reviewText`) VALUES
(2, 4, 10, '', 5, 5, 5, 0, ''),
(3, 4, 10, 'comp101', 8, 4, 7, 6, 'good'),
(6, 4, 10, '', 5, 5, 5, 5, ''),
(7, 5, 10, 'soft212', 7, 7, 5, 5, 'good'),
(8, 4, 10, '', 4, 7, 6, 5, ''),
(9, 4, 10, '', 5, 5, 5, 5, ''),
(10, 4, 10, '', 5, 5, 5, 5, ''),
(11, 4, 10, '', 5, 5, 5, 5, ''),
(12, 4, 10, '', 5, 5, 5, 5, ''),
(13, 4, 10, '', 5, 5, 5, 5, 'g'),
(14, 4, 10, '', 5, 5, 5, 5, ''),
(15, 4, 10, '', 5, 5, 5, 5, ''),
(16, 4, 10, '', 5, 5, 5, 5, ''),
(17, 4, 10, '', 5, 5, 5, 5, ''),
(18, 4, 10, '', 5, 5, 5, 5, 'fin'),
(19, 5, 10, 'dd', 5, 5, 5, 5, 'not fine'),
(20, 5, 10, '', 5, 5, 5, 5, ''),
(21, 4, 10, '', 5, 5, 5, 5, ''),
(22, 4, 10, '', 5, 5, 5, 5, ''),
(23, 4, 10, '', 5, 5, 5, 5, ''),
(24, 4, 10, '', 5, 5, 5, 5, ''),
(25, 4, 10, '', 5, 5, 5, 5, ''),
(26, 4, 10, '', 5, 5, 5, 5, ''),
(27, 4, 10, 'soft101', 5, 5, 5, 5, 'he is the best'),
(28, 4, 10, '', 9, 6, 4, 8, 'Great Teacher!'),
(29, 4, 10, '', 3, 8, 4, 5, ''),
(30, 5, 10, '', 5, 5, 5, 5, ''),
(31, 6, 10, '', 5, 5, 5, 5, ''),
(32, 6, 10, '', 5, 5, 5, 5, ''),
(33, 6, 10, '', 5, 5, 5, 5, ''),
(34, 6, 10, '', 5, 5, 5, 5, ''),
(35, 5, 10, '', 5, 5, 5, 5, ''),
(36, 5, 10, '', 5, 5, 5, 5, 'gg'),
(37, 5, 10, '', 5, 5, 5, 5, 'gg'),
(38, 4, 10, '', 0, 5, 5, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(2, 'admin', 'bil@fire.com', '1234', 'admin'),
(10, 'harry', 'harry@gmail.com', '1234', 'user'),
(11, 'ibrahim', 'ibrahim@gmail.com', '1234', 'user'),
(13, 'salih', 'salih@gmail', '910910', 'user'),
(14, 'mar', 'mar@gmail', '1235', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_id` int(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_location`) VALUES
(1, 'Final International University', 'Cyprus,Giren'),
(2, 'Girna Amirecan University', 'Girna ');

-- --------------------------------------------------------

--
-- Table structure for table `school_ratings`
--

CREATE TABLE `school_ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `reputation` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `opportunities` int(11) NOT NULL,
  `facilities` int(11) NOT NULL,
  `food` int(11) NOT NULL,
  `internet` int(11) NOT NULL,
  `safety` int(11) NOT NULL,
  `clubs` int(11) NOT NULL,
  `instructors` int(11) NOT NULL,
  `review_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_ratings`
--

INSERT INTO `school_ratings` (`id`, `user_id`, `school_id`, `reputation`, `location`, `opportunities`, `facilities`, `food`, `internet`, `safety`, `clubs`, `instructors`, `review_text`) VALUES
(10, 13, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'g'),
(11, 13, 1, 8, 3, 5, 2, 8, 7, 7, 2, 9, 'good'),
(12, 10, 1, 7, 8, 5, 5, 5, 5, 5, 5, 5, 'not bad'),
(13, 10, 1, 7, 1, 10, 9, 2, 10, 9, 7, 3, 'has the best IT staff :)'),
(14, 10, 1, 10, 3, 8, 2, 7, 9, 3, 7, 9, ''),
(17, 10, 1, 5, 5, 8, 4, 5, 5, 5, 5, 5, 'Worth every penny and so easy to use\r\nWOW! WOW! WOW! This is amazing, we saved $655.51! Between 4 people, We purchased the 7 attraction explorer pass, used it for OWO, The Edge, TOTR, Empire State, Hop on Hop off bus tour, Best of NYC cruise and Madame Tussuads. The only thing we had to pre book was Empire State, we just walked into the next available slot with everything else without having to queue, just go straight to the front, I would HIGHLY recommend these passes, they save so much money on the cost of visiting individually, so easy to use, no issues at all, if you\'re considering visiting places covered by the passes then these are no brainers!!!!!'),
(18, 10, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'check'),
(19, 10, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'check'),
(20, 10, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'check'),
(21, 10, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, ''),
(22, 10, 1, 7, 3, 8, 8, 8, 7, 5, 5, 5, 'very good university i like it !'),
(23, 10, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `instructor_school_id` (`instructor_school_id`);

--
-- Indexes for table `instructor_ratings`
--
ALTER TABLE `instructor_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `school_ratings`
--
ALTER TABLE `school_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `university_id` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instructor_ratings`
--
ALTER TABLE `instructor_ratings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_ratings`
--
ALTER TABLE `school_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_ibfk_1` FOREIGN KEY (`instructor_school_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `instructor_ratings`
--
ALTER TABLE `instructor_ratings`
  ADD CONSTRAINT `instructor_ratings_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`),
  ADD CONSTRAINT `instructor_ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`);

--
-- Constraints for table `school_ratings`
--
ALTER TABLE `school_ratings`
  ADD CONSTRAINT `school_ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `school_ratings_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
