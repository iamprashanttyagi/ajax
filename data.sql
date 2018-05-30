-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 06:26 PM
-- Server version: 5.7.11-0ubuntu6
-- PHP Version: 7.0.4-7ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `uid` varchar(50) NOT NULL COMMENT 'Unique Id',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`uid`, `name`, `email`, `msg`, `dat`) VALUES
('uid1108823836', 'a2', 'a2@a2', 'klewc cwklncc ', '2018-05-26 08:13:29'),
('uid117651614', 'a4', 'a4@a4', 'lkf dclmcm e,c/l elwq', '2018-05-26 08:13:57'),
('uid1258199821', 'zx', 'xz@xz', 'zx zxxzxx zxxa', '2018-05-29 07:01:32'),
('uid1393377046', 'a', 'a@b', 'n;r sdvnlodvvadlknvklwenwe mv', '2018-05-26 08:05:11'),
('uid1415401146', 'test', 'test@test', 'welko dvndv a', '2018-05-26 06:52:38'),
('uid1602781142', 'a6', 'a6@a6', 'lfqe eklewc , c/,', '2018-05-26 08:14:53'),
('uid1676833896', 'test', 'test@test', 'njkf wekn s ', '2018-05-29 07:42:06'),
('uid1681282235', 'iuhdw ', 'nwklnlQkdnwn@lmkkwmklm', 'ckmwmklc cwk ', '2018-05-26 08:14:31'),
('uid178308869', 'hdvc', 'qgwducbsdc@guwbcuwdbc', 'bduvbiwdhc  duwwd cdcdwc  c', '2018-05-26 08:05:33'),
('uid1980000460', 'a3', 'a3@a3', 'clkn dcadnkcdm dm ck,', '2018-05-26 08:13:39'),
('uid2083160526', 'a5', 'a5@a5', 'jweo weknc wckjn', '2018-05-26 08:14:20'),
('uid407001810', '1', '1@1', '1 11 111 1111 11111 111111 1111111 11111111 11111111 111111111', '2018-05-29 07:44:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
