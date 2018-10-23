-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 01:46 PM
-- Server version: 5.7.19-log
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
-- Database: `appointmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `username`, `email`, `mobile`, `password`) VALUES
('Shrey Maheshwari', 'shrey7', 'mshrey@gmail.com', '7756235846', 'shrey7'),
('Ravi Jain', 'rag_som', 'rav@gmail.com', '8956254533', '1236'),
('Arya', 'ary_s', 'ary@gmail.com', '7774526589', '78512'),
('Mahi Singh', '@mahi', 'mahi_s@gmail.com', '9826456235', 'mah@12'),
('Shrim Goyal', 'shri', 'shr@gmail.com', '8855698956', 'shrim777');

-- --------------------------------------------------------

--
-- Table structure for table `servicemaster`
--

CREATE TABLE `servicemaster` (
  `id` int(20) NOT NULL,
  `servicename` varchar(30) NOT NULL,
  `serviceimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicemaster`
--

INSERT INTO `servicemaster` (`id`, `servicename`, `serviceimage`) VALUES
(11, 'service one', ''),
(12, 'service two', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicemasterdesc`
--

CREATE TABLE `servicemasterdesc` (
  `id` int(11) NOT NULL,
  `servicename` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicemasterdesc`
--

INSERT INTO `servicemasterdesc` (`id`, `servicename`, `duration`, `amount`, `description`, `image`) VALUES
(8, 'Check', '1 month', 20000, 'Regular check up will be done ', 'ap2.png'),
(19, 'Cardio', '3 months', 6000, 'Cardio related treatment will be given. ', 'ap1.png'),
(20, 'GYNECOLOGY', '1 year', 99999, 'Regular treatment will be given for it.', 'ap3.png'),
(21, 'HEART', '5 years', 205000, 'Heart related problems will be solved.', 'ap8.png'),
(22, 'SPINE', '3 Months', 25600, 'Spine related problems will be solved.', 'ap4.png');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`name`, `username`, `password`) VALUES
('Shrey Somani', 'shrey100mani', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `contact` int(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `date`, `time`, `contact`, `id`) VALUES
('shivam', '2018-06-29', '19:22', 12364878, 1),
('Nishi', '2018-07-28', '16:00', 42172272, 2),
('Abhi', '2018-06-30', '20:00', 32235727, 3),
('John', '2018-06-30', '09:00', 54257252, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servicemaster`
--
ALTER TABLE `servicemaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicemasterdesc`
--
ALTER TABLE `servicemasterdesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servicemaster`
--
ALTER TABLE `servicemaster`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `servicemasterdesc`
--
ALTER TABLE `servicemasterdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
