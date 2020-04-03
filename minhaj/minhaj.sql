-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 03:46 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minhaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstract`
--

CREATE TABLE `abstract` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `firstAuthor` varchar(50) NOT NULL,
  `secondAuthor` varchar(50) NOT NULL,
  `instituite` varchar(50) NOT NULL,
  `authoremail` varchar(50) NOT NULL,
  `alteremail` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `paperTitle` varchar(50) NOT NULL,
  `abstract` varchar(100) NOT NULL,
  `subTheme` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abstract`
--

INSERT INTO `abstract` (`id`, `stdid`, `firstAuthor`, `secondAuthor`, `instituite`, `authoremail`, `alteremail`, `address`, `paperTitle`, `abstract`, `subTheme`, `Status`) VALUES
(3, 7, 'Saad', 'Awais', 'DI', 'saad@gmail.com', '', 'Band Road', 'Test', '7.docx', '3', 'Reject'),
(5, 8, 'Hashim', 'Ali', 'DIOP', 'hashim@gmail.com', '', '990 Bahria', 'dum dum', '8.pdf', '3', 'paperUploaded'),
(7, 12, 'zinneera', 'Waheed', 'CU', 'zinneera@gmail.com', 'ali@hotmail.com', '990 umar block bahria town lahore', 'Paper for test', '12.pdf', '1', 'paperUploaded');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `fullpaper`
--

CREATE TABLE `fullpaper` (
  `id` int(100) NOT NULL,
  `stdid` int(100) NOT NULL,
  `sub_theme` int(11) NOT NULL,
  `paper` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullpaper`
--

INSERT INTO `fullpaper` (`id`, `stdid`, `sub_theme`, `paper`, `status`) VALUES
(3, 1, 3, '1.docx', 'paperAccept'),
(4, 8, 3, '8.docx', 'paperReject'),
(5, 2, 1, '2.docx', 'paperAccept'),
(6, 12, 1, '12.docx', 'paperAccept');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `linked` varchar(500) NOT NULL,
  `fb` varchar(500) NOT NULL,
  `google` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`id`, `name`, `designation`, `linked`, `fb`, `google`, `description`, `type`, `image`) VALUES
(20, 'khubaib', 'CEO', 'linkedin.com', 'facebook.com', 'google.com', 'Boss OF DI.Boss OF DI.Boss OF DI.Boss OF DI.Boss OF DI.Boss OF DI.Boss OF DI.', 'VIP', 'khubaib.jpg'),
(22, 'Saad', 'CO Founder', 'Text', 'lksnacalkc', 'Text', 'kdnclkncdlndkl', 'General Speaker', 'Saad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `bronze` int(11) NOT NULL,
  `silver` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `platinum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `bronze`, `silver`, `gold`, `platinum`) VALUES
(2, 150, 70, 80, 90);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `email`, `password`, `contactno`, `company`, `country`) VALUES
(3, 'muneeb', 'Tayyab', 'muneeb@gmail.com', 'abcd', '023252525', 'kjask', 'lkjndsaklch'),
(4, 'Khubaib', 'Waheed', 'saad@gmail.com', '12345', '03220252252', 'abcfgth', 'jnlkahnlkhn'),
(6, 'a', 'b', 'a@gmail.com', 'abcd', '03220252252', 'Qwartz', 'india'),
(7, 'haider', 'kamran', 'haider@gmail.com', '12345', '0302255445', 'VELA', 'pakistan'),
(8, 'hashim', 'kamran', 'hashim@gmail.com', '12345', '03220252252', 'DI', 'pakistan'),
(10, 'umair', 'yameen', 'umair@gmail.com', '12345', '03220252252', 'DI', 'india'),
(11, 'hamza', 'manzoor', 'hamza@gmail.com', '12345', '0302255445', 'DI', 'pakistan'),
(12, 'zinneera', 'Waheed', 'zinneera@gmail.com', '12345', '03220252252', 'CU', 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `name`, `email`, `password`, `dept`) VALUES
(15, 'haider', 'haider@gmail.com', 'abcd', '4'),
(18, 'khubaib', 'khuba@gmail.com', '', '5'),
(19, 'haider', 'haider@gmail.com', 'abcd', '6'),
(20, 'amar', 'amar@gmail.com', 'abcd', '3');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `day` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(15) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`day`, `date`, `time`, `venue`, `image`) VALUES
('1', '2020-01-01', '13:00', 'abc', 'new.jpeg.jpeg'),
('2', '2021-01-03', '13:20', 'XYZ', 'FB_IMG_1491573221224.jpg.jpg'),
('3', '2028-04-12', '16:12', 'Extra', 'IMG-20170716-WA0021.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `linked` varchar(500) NOT NULL,
  `fb` varchar(500) NOT NULL,
  `google` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `name`, `designation`, `linked`, `fb`, `google`, `description`, `type`, `image`) VALUES
(27, 'khubaib', 'Boss', 'abckjmsjn', 'lksnacalkc', 'lkncsaaslknas', ',.nmk,nlknlkloi', 'VIP', 'khubaib.png'),
(30, 'saad', 'CO Founder', 'Text', 'MHN,NVXZCC.KJ,JHDSHJG', 'knskanknscb', 'cdsvcds cds cd', 'General Speaker', 'saad.jpg'),
(31, 'student', 'vela', 'abckjmsjn', 'lkhnlkhli', 'kjsdakkj', 'dfsvadcsd', 'General Speaker', 'student.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstract`
--
ALTER TABLE `abstract`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stdid` (`stdid`);

--
-- Indexes for table `fullpaper`
--
ALTER TABLE `fullpaper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stdid` (`stdid`),
  ADD KEY `sub_theme` (`sub_theme`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstract`
--
ALTER TABLE `abstract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fullpaper`
--
ALTER TABLE `fullpaper`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abstract`
--
ALTER TABLE `abstract`
  ADD CONSTRAINT `abstract_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
