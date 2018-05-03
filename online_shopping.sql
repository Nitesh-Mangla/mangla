-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 06:23 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `order_date` varchar(100) DEFAULT NULL,
  `delivey_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`name`, `email_id`, `product`, `price`, `order_date`, `delivey_date`, `status`, `quantity`, `id`) VALUES
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 28, 2018 11:21:39 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery4.jpg', 300, 'April 28, 2018 11:27:36 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl3.jpg', 900, 'April 28, 2018 11:28:03 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, 'April 28, 2018 11:31:24 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl2.jpg', 500, 'April 28, 2018 11:37:14 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'iframe1.png', 1000, 'April 29, 2018 07:35:40 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'iframe3.png', 100, 'April 29, 2018 09:09:28 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, 'April 29, 2018 09:27:31 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'iframe2.png', 700, 'April 29, 2018 09:45:24 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 29, 2018 09:46:40 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl3.jpg', 900, 'April 29, 2018 09:47:56 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl2.jpg', 500, 'April 29, 2018 09:48:22 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, 'April 29, 2018 10:01:16 AM', 'CURDATE()+1', 1, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl2.jpg', 500, 'April 29, 2018 10:03:09 AM', 'CURDATE()+1', 0, 1, 0),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery4.jpg', 300, 'May 03, 2018 05:54:04 PM', 'CURDATE()+1', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delete_cart`
--

CREATE TABLE `delete_cart` (
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `order_date` varchar(100) DEFAULT NULL,
  `delivey_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delete_cart`
--

INSERT INTO `delete_cart` (`name`, `email_id`, `product`, `price`, `order_date`, `delivey_date`, `status`, `quantity`) VALUES
('niteshmangla', 'nitesh123@gmail.com', 'girl2.jpg', 500, '2018-04-02 05:47:34pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'girl3.jpg', 900, '2018-04-02 05:51:57pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, '2018-04-02 05:54:05pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery4.jpg', 300, '2018-04-02 06:05:02pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'iframe2.png', 700, '2018-04-02 06:06:14pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'iframe3.png', 100, '2018-04-02 06:07:01pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'iframe2.png', 700, '2018-04-02 06:11:57pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'iframe2.png', 700, '2018-04-02 06:12:34pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'iframe2.png', 700, '2018-04-02 07:46:19pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-02 07:46:51pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-02 07:46:58pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-02 07:47:13pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery4.jpg', 300, '2018-04-03 05:45:42pm', '2018-04-07', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-03 05:45:55pm', '2018-04-07', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-03 05:46:00pm', '2018-04-07', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:11:46 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:11:46 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:11:46 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'girl1.jpg', 800, 'April 10, 2018 06:12:48 PM', '0', 1, 1),
('\'nitesh mangla\'', 'nitesh123@gmail.com', 'gallery4.jpg', 300, 'April 10, 2018 06:26:40 PM', '0', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, '2018-04-14 10:06:24am', '2018-04-18', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-14 10:06:30am', '2018-04-18', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery3.jpg', 400, '2018-04-14 10:06:54am', '2018-04-18', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-14 10:06:57am', '2018-04-18', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', '', 0, '2018-04-14 10:06:59am', '2018-04-18', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `price`) VALUES
(1, 'gallery1.jpg', 200),
(2, 'gallery2.jpg', 3000),
(3, 'gallery3.jpg', 400),
(5, 'gallery4.jpg', 300),
(6, 'girl1.jpg', 800),
(7, 'girl2.jpg', 500),
(8, 'girl3.jpg', 900),
(9, 'iframe1.png', 1000),
(10, 'iframe2.png', 700),
(11, 'iframe3.png', 100),
(12, 'iframe4.png', 350),
(13, 'iframe1.png', 800),
(14, 'product1.jpg', 900),
(15, 'product2.jpg', 600),
(16, 'product3.jpg', 1500),
(17, 'product4.jpg', 1583),
(18, 'product5.jpg', 4000),
(19, 'product6.jpg', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `User_Email`, `password`) VALUES
(1, 'nitesh123@gmail.com', '12345'),
(2, 'kapil@gmail.com', '21474'),
(3, 'kapilmangla@gmail.com', '21474'),
(4, 'niteshmangla1992@gmail.com', '21474'),
(12, 'jayprakash123@gmail.com', 'Nitesh@8860'),
(22, 'sunil123@gmail.com', 'Sunil@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `city` varchar(15) DEFAULT NULL,
  `adrress` varchar(50) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `f_name`, `l_name`, `Email`, `password`, `DOB`, `city`, `adrress`, `profile_pic`, `state`, `gender`, `country`) VALUES
(0, 'sunil', 'mangla', 'bnhbb@gmail.com', 'Sunil@123', '1992-05-06', 'bnbb', 'nb,mn,m', '11e62a9d1015f186183b26fe340d8ebe_683946b5a294199f2ab1a0aa7b6c3a4d_0030_dnaseq__seq_past_and_present.', 'nbmnm,n', 'Male', 'bjb'),
(5, 'sunil', 'mangla', 'davard3@bizjournals.com', '123456789', '2/19/2014', 'punjab', NULL, 'nvdnd4dfdsv5345', NULL, 'male', 'australia'),
(0, 'h', 'jbjnk', 'hvhv@gmail.com', 'Sunil@123', '1992-02-02', 'njn,knkmk.m', 'bjmn,m', '4366c4852ff6c1de455a846a8c5d86aa10636187_651968638249924_142968358934357933_n.jpg', 'nbnm', 'Male', 'bjknk'),
(4, 'kapil', 'gupta', 'iattkins2@youtube.com', '854798212', '9/4/2007', 'delhi', NULL, 'nvdnd4dfdsv5345', NULL, 'female', 'australia'),
(0, 'jay', 'prakash', 'jayprakash123@gmail.com', 'Nitesh@8860', '1992-01-20', 'new delhi', 'uttam nagar', '10636187_651968638249924_142968358934357933_n.jpg', 'delhi', 'Male', 'india'),
(7, 'nitesh', 'mangla', 'nitesh123@gmail.com', '854798212', '6/19/2013', 'punjab', NULL, 'nitesh.jpg', NULL, 'female', 'london'),
(0, 'sunil', 'mangla', 'sunil123@gmail.com', 'Sunil@123', '1991-02-05', 'new delhi', 'uttam nagar', 'e968a81ffba4140f03410c0fbc1a4bae1 001.jpg', 'delhi', 'Male', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `order_date` varchar(100) DEFAULT NULL,
  `delivey_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`name`, `email_id`, `product`, `price`, `order_date`, `delivey_date`, `status`, `quantity`) VALUES
('niteshmangla', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, '2018-03-30 07:27:21pm', '2018-04-03', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'girl1.jpg', 800, '2018-04-02 05:44:14pm', '2018-04-06', 0, 0),
('niteshmangla', 'nitesh123@gmail.com', 'girl2.jpg', 500, '2018-04-02 05:46:42pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'girl2.jpg', 500, '2018-04-02 05:51:47pm', '2018-04-06', 0, 1),
('niteshmangla', 'nitesh123@gmail.com', 'girl3.jpg', 900, '2018-04-02 05:51:54pm', '2018-04-06', 1, 1),
('niteshmangla', 'nitesh123@gmail.com', 'girl3.jpg', 900, '2018-04-02 05:53:49pm', '2018-04-06', 0, 1),
('niteshmangla', 'nitesh123@gmail.com', 'gallery2.jpg', 3000, '2018-04-02 05:54:03pm', '2018-04-06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `name` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `qauntity` int(11) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user_data` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
