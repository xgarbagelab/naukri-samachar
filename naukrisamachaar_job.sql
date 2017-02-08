-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 08:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsm4`
--

-- --------------------------------------------------------

--
-- Table structure for table `naukrisamachaar_job`
--

CREATE TABLE `naukrisamachaar_job` (
  `id` bigint(20) NOT NULL,
  `job_label` varchar(30) NOT NULL,
  `department` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `age_limit` varchar(500) NOT NULL,
  `state` varchar(255) NOT NULL,
  `educational_qualification` varchar(1000) NOT NULL,
  `selection_process` varchar(1000) DEFAULT NULL,
  `online_link` varchar(1000) NOT NULL,
  `date_of_publish` date NOT NULL,
  `last_date_of_online_submission` date NOT NULL,
  `fees` varchar(255) NOT NULL DEFAULT 'Free',
  `last_date_of_fee_submission` date NOT NULL,
  `other_comments` varchar(1000) DEFAULT NULL,
  `salary` varchar(1000) NOT NULL,
  `vacancies` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naukrisamachaar_job`
--
ALTER TABLE `naukrisamachaar_job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naukrisamachaar_job`
--
ALTER TABLE `naukrisamachaar_job`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
