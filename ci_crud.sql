-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 01:38 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(100) DEFAULT NULL,
  `usr_phone` int(10) DEFAULT NULL,
  `usr_email` varchar(255) DEFAULT NULL,
  `usr_pass` varchar(100) DEFAULT NULL,
  `usr_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usr_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`usr_id`, `usr_name`, `usr_phone`, `usr_email`, `usr_pass`, `usr_created`, `usr_updated`) VALUES
(1, 'Shashikant Murya', 720358754, 'shashi@gmail.com', '12345', '2018-06-18 18:05:10', '0000-00-00 00:00:00'),
(2, 'Amit Chaurasia', 548754214, 'amic588@gmnail.com', NULL, '2018-06-19 11:26:33', '0000-00-00 00:00:00'),
(3, 'Amit Chaurasia', 548754214, 'amic588@gmnail.com', '123654', '2018-06-19 11:28:25', '0000-00-00 00:00:00'),
(4, 'Amit Chaurasia', 548754214, 'amic588@gmnail.com', '123654', '2018-06-19 11:30:04', '0000-00-00 00:00:00'),
(5, NULL, NULL, NULL, NULL, '2018-06-19 11:34:33', '2018-06-19 11:34:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
