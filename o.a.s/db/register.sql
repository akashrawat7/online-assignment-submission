-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 07:10 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(100) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('shivam', 'shivam');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `text`, `message`) VALUES
(44, 'dsdklfsnklfd', 'sldfnskfkj', 'kdjfbsolfk.jaowurjkfdl\r\n'),
(45, 'dsdklfsnklfd', 'sldfnskfkj', 'kdjfbsolfk.jaowurjkfdl\r\n'),
(46, 'shiva', 'shivam', 'ajsjbksjda'),
(47, ',zjds fv', 'jdfbsddovk', 'adkjfdbvk'),
(48, 'as,j,adl', 'dkdadfbkadmcjk', 'addmncdnjn'),
(49, 'd,cmsdldv', 'sdldfjsdlff', 'adflksdvlks'),
(50, 'shivam', 'shivambisht2015@gmail.com', 'this is my first message\r\n'),
(51, 'shivam', 'shivambisht2015@gmail.com', 'this is next msg.'),
(52, 'cds', ',kefbqe,', 'd,dmfne,');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(1, 'shivam', 'shivambisht2015@gmail.com', '3ae9d8799d1bb5e201e5704293bb54ef'),
(2, 'pravesh', 'abcdfe123@gmail.com', 'e3844e186e6eb8736e9f53c0c5889527'),
(3, 'monika', 'nnnnn@gmail.com', '6f3fc039bfe1efdb272111f276a0e84a'),
(4, 'shivam bisht', 'shivambisht43243@gmail.com', '4ea1b5dbefd00e46e93db12f14d2373c'),
(5, 'ssss', 'ngjfkgjy23@gmail.com', 'ef370cbfe13b2555caf163f0ec76f255'),
(6, 'sayrabh', 'shivamn22@gmail.com', '9e45f887edb62bea1626f617062b9e37'),
(7, 'anurag', 'anurag12@gmail.com', '3ae9d8799d1bb5e201e5704293bb54ef');

-- --------------------------------------------------------

--
-- Table structure for table `uplode`
--

CREATE TABLE `uplode` (
  `id` int(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `course` varchar(150) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uplode`
--

INSERT INTO `uplode` (`id`, `file`, `text`, `course`, `sem`, `email`, `userid`) VALUES
(1, 'phphf.php', 'shivam', 'BBA', '4th Semester', 'clkahdljjfbea', 1),
(2, 'new.html', 'wrerew', 'BBA', '1th Semester', 'aaka@gmail.com', 1),
(3, 'e849036547bc7fc458b0dd101fde8ec8.jpg', 'shivam', 'BBA', '2th Semester', ',jajdnflad', 1),
(4, '76256.jpg', 'shivam', 'BCA', '4th Semester', 'dfkjkbesdlfjsdlk', 2),
(6, 'new.html', 'meenu', 'BBA', '4th Semester', 'meetthakur.thakur@gmail.com', 1),
(7, 'phphf (1).php', 'sjwdhc', 'BBA', '1th Semester', 'sumitjoshi236@gmail.com', 1),
(8, 'Bravo Application Details 3_7_2018 6-48-32 PM.pdf', 'shivam', 'BCA', '3th Semester', 'hdjyeelii7thgh', 1),
(9, 'login.php.html', 'shivam', 'BSC.IT', '2th Semester', 'hgdtj,j', 1),
(10, 'phphf.php', 'lkdfnsld', 'BSC.IT', '2th Semester', 'kjsdvs;v', 1),
(11, 'phphf.php', 'shivam', 'BBA', '5th Semester', ',jmdf clsfv', 1),
(12, 'index.php', 'shivam', 'BCA', '2th Semester', 'shivambisht2015@gmail.com', 1),
(13, 'phphf.php', 'shivam', 'BBA', '5th Semester', ',mdbbkjda', 1),
(16, 'aksh.docx', 'shivam', 'BCA', '3th Semester', 'shivambisht2015@gmail.com', 1),
(17, 'shivam.docx', 'shivam', 'BCA', '5th Semester', 'shivambisht22@gmai.com', 1),
(18, 'shivam.docx', 'kjdsfsrl', 'BHM', '2th Semester', 'kukdhnfad23@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uplode`
--
ALTER TABLE `uplode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uplode`
--
ALTER TABLE `uplode`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
