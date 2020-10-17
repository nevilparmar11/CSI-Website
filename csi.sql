-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 10:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `id` int(6) NOT NULL,
  `name` varchar(70) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(700) NOT NULL,
  `photo_link` varchar(500) DEFAULT NULL,
  `blog_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`id`, `name`, `type`, `date`, `description`, `photo_link`, `blog_link`) VALUES
(5, 'Cloud Computing with Amazon Web Services', 'Short Term Training ', '2019-02-23', 'On 23rd & 24th February, 2019, a short term training program on “Cloud Computing with Amazon Web Services” was conducted by the Computer Society of India, DDU Student’s Branch. It was an two day short term training program and was held in the Seminar Hall.And our Alumni Er.Sanket Bhimani was the speaker who is expert in cloud computing with AWS(amazon web services).Thereafter, he gave insight on the topics like cloud formation, snowball and migration', 'assets/images/1.jpg', NULL),
(6, 'Expert Talk On linux', 'Expert Talk', '2017-11-19', 'Computer Society of India DDU Student Branch organized an expert talk on 19th November,2017, Sunday in Seminar hall at 9.30am. The topics discussed were linux operating system, networking, chatrooms and servers. It was basically for 1st year students. Expert Mr. Harsh Thakkar started with CentOS installing explaining wach options in depth. Then he explained networking and building chatroom without internet. Talk ended with a motivational tech video on computex and thank you note.', 'images/linux.jpg', NULL),
(7, 'Quiozophile', 'Quiz competition', '2018-10-04', 'CSI DDU Organized an quiz competition on 4th October,2018. It was for 1st and 2nd year students. First round was online test held on CSI DDU\'s own quiz portal. The top 20 students were selected for second round which was a rapid fire. Next part of event held on 5th October, in which one participant eliminated. Team of 2 were formed among 10 participants. Last round was bidding and buzzer round. Priyavardhan\'s team won the quizophile', 'images/quizophile.jpg', NULL),
(8, 'Code Set Go!', 'coding competition', '2019-01-26', 'Computer Society of India DDU Student Branch organized an online coding competition called \"Code Set Go!\". There are 66 participants of 1st year. Event commence at 9.00pm on HackerRank platform. Contest consist of 5 intresting problems and students has to solve it in 2 hours. Vekariya Jenish won the contest. Harsh Joshi and Vaghani Harsh got 2nd and 3rd rank respectively.', 'images/codesetgo.jpg', NULL),
(9, 'Expert Talk On Machine Learning', 'Expert Talk', '2017-08-30', 'CSI DDU organized an expert talk on trending technology machine learning. Talk started at 5.45pm with a welcome note by Prakriti and then the expert Parth Dave took over. Mr. Parth Dave Explained the type of learning: Supervised, Unsupervised, and environmental. He engaged the audience by giving real life examples. He explained genetic algorithm also. He also explained roadmap to move further with machine learning.', 'images/ml.png\r\n', NULL),
(10, 'Expert Talk On Competitive Coding', 'Expert Talk', '2018-09-29', 'Mr. Deep Shah, alumni of DDU and a Directi employee come to conduct an expert talk on competitive coding. It started at 12.00pm with the strength of 90 students along with many faculy members in room no 3. He shared his journey and then started with competitive coding. He also enlighten students about various platforms to do competitive coding. He explained some problems and their solution iin detail. Talk ended with doubt clearning and Q&A session.\r\n', 'images/compcode.jpg\r\n', NULL),
(11, 'Web Designing-Short Term Training Program', 'Short Term Training', '2019-04-07', 'A short term training program on “Web Designing” was conducted by the Computer Society of India, DDU Student Branch.it was organized especially for 1st year students to give them the insight of the world of web designing.it had brief description of Introduction to WEB,css(cascading style sheet) and bootstrap.', 'images/webdes.jpg', NULL),
(12, 'Motivational Talk on “Competitive Programming”', 'Motivational Talk', '2018-12-12', 'CSI-DDU student branch had organised an introductory motivational talk for the students by the name “Intro to Competitive Programming” for the 2nd and 3rd year engineering students.The motivational talk was delivered by DDU-alumni and ex-faculty Mr. Ashish Mittal.The main objective was to inspire the students to take up programming-as-a-sport and designing better algorithms and implementing them in contests.The motivational talk was highly interactive and was a great opportunity for the students to draw many tips to succeed in the quest of competitive programming.', 'images/mottalk.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_res`
--

CREATE TABLE `tbl_contact_res` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_res`
--

INSERT INTO `tbl_contact_res` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'viek', 'viek!@djf.cosdn', 'nzdhfsu', 'chsuigf'),
(2, 'vivek', 'vievk@gmail.com', 'hello', 'Hellojbag'),
(3, 'vive', 'dj@fan.com', 'shgfhg', 'vnsjkdgfwh'),
(4, 'vive', 'dj@fan.com', 'shgfhg', 'vnsjkdgfwh'),
(5, 'vive', 'dj@fan.com', 'shgfhg', 'vnsjkdgfwh'),
(6, 'vie', 'dfha@sdh.com', 'vskdf', 'bskdgf'),
(7, 'vie', 'dfha@sdh.com', 'vskdf', 'bskdgf'),
(8, 'vie', 'dfha@sdh.com', 'vskdf', 'bskdgf'),
(9, 'vie', 'dfha@sdh.com', 'vskdf', 'bskdgf'),
(10, 'vivek', 'adjfha@gmail.com', 'sdhajkd', 'sdhfkad'),
(11, 'vivek', 'adjfha@gmail.com', 'sdhajkd', 'sdhfkad'),
(12, 'vivek', 'adjfha@gmail.com', 'sdhajkd', 'sdhfkad'),
(13, 'vivek', 'adjfha@gmail.com', 'sdhajkd', 'sdhfkad'),
(14, 'vivek', 'adjfha@gmail.com', 'sdhajkd', 'sdhfkad'),
(15, 'viw', 'viek!@djf.cosdn', 'ahdf', 'fajkgd'),
(16, 'viw', 'viek!@djf.cosdn', 'ahdf', 'fajkgd'),
(17, 'viw', 'viek!@djf.cosdn', 'ahdf', 'fajkgd'),
(18, 'viw', 'viek!@djf.cosdn', 'ahdf', 'fajkgd'),
(19, 'vivek', 'viek!@djf.cosdn', 'hello', 'hello '),
(20, '', '', '', ''),
(21, 'Vivek', 'sciencevivek2@yahoo.com', 'vivek', 'jfagghf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_stats`
--

CREATE TABLE `tbl_site_stats` (
  `id` int(2) NOT NULL DEFAULT '0',
  `visits` int(10) NOT NULL DEFAULT '7'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_stats`
--

INSERT INTO `tbl_site_stats` (`id`, `visits`) VALUES
(0, 208);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`username`, `password`, `role`) VALUES
('vivek', 'vivek123', 'admin'),
('smit', 'smit123', 'admin2'),
('admin', 'admin123', 'admin'),
('mrugnayani', 'mrugnayani123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_res`
--
ALTER TABLE `tbl_contact_res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_stats`
--
ALTER TABLE `tbl_site_stats`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_contact_res`
--
ALTER TABLE `tbl_contact_res`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
