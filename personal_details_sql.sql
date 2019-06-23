-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 07:51 PM
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
-- Database: `stockmaintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `member` varchar(10) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `purchaseditems` varchar(200) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `name`, `username`, `password`, `dob`, `gender`, `email`, `phone`, `address`, `member`, `feedback`, `purchaseditems`, `price`) VALUES
(1, 'tanaka', 'tanakasan', 'abcd', '2018-09-12', 'female', 'tanaka@mail.com', '1234567890', 'tnagar st,tokyo', 'yes', 'awesome!', '', 0),
(2, 'wan', 'wansan', 'efgh', '2000-09-18', 'male', 'wan@gmail.com', '9876543210', '12,abk st,cdk nagar', 'yes', '', '', 0),
(3, 'yamada', 'yamadasan', 'ijkl', '1995-04-21', 'female', 'yamada@gmail.com', '1234598765', '12,ram st,tnagar', 'no', '', '', 0),
(4, 'tanaka', 'tanakachan', 'mnop', '1999-11-18', 'female', 'tanakachan@gmail.com', '9648231045', '45,hls st,hsv nagar', 'no', '', '', 0),
(5, 'matsumoto', 'matsumosan', 'qrst', '1993-12-19', 'male', 'matsu@gmail.com', '6432147890', '3,rgb st,cmy nagar', 'yes', 'great service!', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
