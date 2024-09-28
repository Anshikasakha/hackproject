-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 03:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnpsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcompany`
--

CREATE TABLE `addcompany` (
  `cname` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `sProcess` varchar(500) NOT NULL,
  `tenth` varchar(10) NOT NULL,
  `twelth` varchar(10) NOT NULL,
  `graduation` varchar(10) NOT NULL,
  `pg` varchar(10) NOT NULL,
  `backlog` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcompany`
--

INSERT INTO `addcompany` (`cname`, `url`, `sProcess`, `tenth`, `twelth`, `graduation`, `pg`, `backlog`) VALUES
('Capgemini', 'https://www.capgemini.com/in-en/', '1. reasoning aptitude and Coding  2. Technical interview 3. HR interview', '0', '0', '0', '0', '2'),
('Infosys', 'https://www.infosys.com/', '1. reasoning aptitude and Coding  2. Technical interview 3. HR interview', '60', '60', '65', '65', 'No backlog allowed'),
('tcs', 'https://www.tcs.com/', '1. reasoning aptitude and Coding  2. Technical interview 3. HR interview', '60', '60', '65', '65', '2'),
('Wipro', 'https://www.wipro.com/', '1 reasoning, aptitude\r\n2. coding\r\n3. Technical Interview\r\n4. HR Interview', '55', '55', '55', '55', '2');

-- --------------------------------------------------------

--
-- Table structure for table `addnotification`
--

CREATE TABLE `addnotification` (
  `cname` varchar(50) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `details` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addnotification`
--

INSERT INTO `addnotification` (`cname`, `place`, `date`, `details`, `type`) VALUES
('tcs', 'College auditorium', '116-06-202', 'reasoning test | technical interview', 'pool');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `password`) VALUES
(111, 'aaa'),
(123, 'aaa'),
(222, 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` int(11) NOT NULL,
  `ans` varchar(500) NOT NULL,
  `rightans` varchar(500) NOT NULL,
  `rno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ans`, `rightans`, `rno`) VALUES
(1, 'getting value', 'getting value', 101),
(2, 'programming', 'programming', 101),
(3, 'human intelligence', 'machine intelligence', 101),
(4, 'reversing', 'getting input', 101),
(1, 'getting value', 'getting value', 102),
(2, 'programming', 'programming', 102),
(3, 'programmer', 'machine intelligence', 102),
(4, 'getting input', 'getting input', 102),
(1, 'rtyu', 'getting value', 102),
(2, 'machine', 'programming', 102),
(3, 'machine inlteliigence', 'machine intelligence', 102),
(4, 'dfghjkl', 'getting input', 102);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `qid` int(11) NOT NULL,
  `que` varchar(1000) NOT NULL,
  `op1` varchar(500) NOT NULL,
  `op2` varchar(500) NOT NULL,
  `op3` varchar(500) NOT NULL,
  `op4` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`qid`, `que`, `op1`, `op2`, `op3`, `op4`, `ans`, `type`, `cname`) VALUES
(1, '$_GET iuse for', 'getting value', 'showing value', 'for output purpose', 'rtyu', 'getting value', 'Aptitude', 'TCS'),
(2, 'c is the language', 'programming', 'funny', 'indian', 'machine', 'programming', 'Technical', 'TCS'),
(3, 'Artificial intelligence is the', 'machine inlteliigence', 'human intelligence', 'programmer\'s intelligence', 'software\'s intelligence', 'machine intelligence', 'Technical', 'TCS'),
(4, 'cout is use for', 'print output', 'function', 'usssd', 'ydyudy', 'print output', 'Aptitude', 'Capgemini'),
(5, 'cin is use for`', 'getting input', 'function', 'reversing', 'dfghjkl', 'getting input', 'Aptitude', 'TCS');

-- --------------------------------------------------------

--
-- Table structure for table `selectedstu`
--

CREATE TABLE `selectedstu` (
  `package` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `rno` int(11) NOT NULL,
  `cmpname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selectedstu`
--

INSERT INTO `selectedstu` (`package`, `year`, `rno`, `cmpname`) VALUES
('12 LPA', '2023', 101, 'TCS');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE `sreg` (
  `rno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tenthp` varchar(6) NOT NULL,
  `tenthb` varchar(20) NOT NULL,
  `tenthpy` varchar(11) NOT NULL,
  `twelthp` varchar(10) NOT NULL,
  `twelthb` varchar(20) NOT NULL,
  `twelthpy` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL,
  `gb` varchar(20) NOT NULL,
  `gpy` varchar(10) NOT NULL,
  `hobbies` varchar(1000) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`rno`, `name`, `branch`, `sem`, `email`, `gender`, `mob`, `address`, `tenthp`, `tenthb`, `tenthpy`, `twelthp`, `twelthb`, `twelthpy`, `gp`, `gb`, `gpy`, `hobbies`, `resume`, `password`) VALUES
(101, 'Vijay Kushwaha', 'CSE', '3', 'vijay77495@gmail.com', 'male', '1234567890', 'Bhilai, Durg', '82', 'CBSE', '2016', '65', 'CBSE', '2018', '67', 'UGC', '2021', 'Swimming and Horse Riding', 'NIMCET Mar 2023.pdf', 'aaa'),
(102, 'Vikas', 'MCA', '4', 'vikas2708@gmail.com', 'male', '810393232', 'DD junwani bhilai', '67', 'cbse', '2014', '78', 'cbse', '2016', '89', 'ugc', '2020', 'hockey and ludo', 'Vikas Resume.pdf', 'bbb'),
(103, 'Gupteshwar Nath Prajapati', 'Mech', '7', 'gnp232326@gmail.com', 'male', '6263112937', 'Green Valley, Chouhan Town', '98', 'up board', '2014', '87', 'up board', '2016', '76', 'ugc', '76', 'playing cricket', 'Gmail - Gupteshwar nath prajapati, Fullstack Web D', 'qqqq'),
(104, 'Aditi sahu', 'MCA', '4', 'aditi1802@gmail.com', 'female', '6265099450', 'smart Plaza, Cannaught Place', '78', 'cgbse', '2016', '87', 'cgbse', '2018', '65', 'ugc', '2021', 'Gaming ', 'Aditi Resume.pdf', 'ddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcompany`
--
ALTER TABLE `addcompany`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `sreg`
--
ALTER TABLE `sreg`
  ADD PRIMARY KEY (`rno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
