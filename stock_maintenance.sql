-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 10:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_maintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `member` varchar(3) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `productid` varchar(5) NOT NULL,
  `productname` varchar(15) NOT NULL,
  `quantity` int(2) NOT NULL,
  `price` float NOT NULL,
  `manufacturer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`productid`, `productname`, `quantity`, `price`, `manufacturer`) VALUES
('g100', 'guitar', 15, 1500, 'jixing'),
('k101', 'keyboard', 10, 2500, 'yamaha'),
('v102', 'violin', 7, 2000, 'dominique'),
('d103', 'drums', 5, 3500, 'mirage'),
('f104', 'flute', 20, 1000, 'sankyo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
