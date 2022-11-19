-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cou_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cou_info` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `cou_info_en` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `cou_image` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cou_video` varchar(300) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cou_id`, `cou_name`, `cou_name_en`, `cou_info`, `cou_info_en`, `cou_image`, `cou_video`) VALUES
(4, 'عمان', 'Oman', 'معلومات عن الدولة الاولي', 'information ', '1665867622_about.jpg', 'https://www.youtube.com/watch?v=Xuc9gutClZw'),
(5, 'السعودية', 'Saudi', 'معلومات عن الدولة الثانية', 'information ', '1665867662_college.jpg', 'https://www.youtube.com/watch?v=KgVXH3pkOLU'),
(6, 'الامارات', 'Emirate', 'معلومات عن الدولة الثالثة', 'information ', '1667314471_target.gif', 'https://www.youtube.com/watch?v=KgVXH3pkOLU'),
(7, 'قطر', 'قطر', 'معلومات عن الدولة الاولي', 'information نتاه', '1666476784_event1.jpg', 'https://www.youtube.com/watch?v=Xuc9gutClZw');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `course_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `course_degree` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `course_intake` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `spe_id` int(11) NOT NULL,
  `uni_id` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_name_en`, `course_degree`, `course_intake`, `spe_id`, `uni_id`) VALUES
(21, 'ادوبي اليستريتور', 'javascript', '2', '2022-10-23', 33, '8'),
(22, 'أدوبي فلاش', 'javascript', '3', '2022-10-23', 35, '14');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cus_last` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cus_mobile` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cus_email` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cou_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `deg_id` int(11) NOT NULL,
  `cus_state` int(11) NOT NULL,
  `cus_regdate` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cus_note` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `cus_confirm` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `deg_id` int(11) NOT NULL,
  `deg_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `deg_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`deg_id`, `deg_name`, `deg_name_en`) VALUES
(2, 'الدرحة الاولي ', 'First Degree'),
(3, 'الدرجة الثانية ', 'second degree');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mes_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(11) NOT NULL,
  `new_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `new_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `new_info` longtext COLLATE utf8mb4_bin NOT NULL,
  `new_info_en` longtext COLLATE utf8mb4_bin NOT NULL,
  `new_image` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `new_regdate` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_name`, `new_name_en`, `new_info`, `new_info_en`, `new_image`, `new_regdate`) VALUES
(1, 'الخبر الاول ', 'first News ', 'محتوي الخبر الاول ', 'first news content', '1665837221_airport.png', '2022-10-15 14:28:09'),
(3, 'الخبر الثاني', 'second Newa ', 'محتوي الخبر الثاني ', 'Content About News Two', '1665864274_about.jpg', '2022-10-15 22:04:34'),
(4, 'الخبر الثاني', 'second Newa ', 'محتوي الخبر الثاني ', 'Content About News Two', '1665864274_about.jpg', '2022-10-15 22:04:34'),
(5, 'الخبر الثاني', 'second Newa ', 'محتوي الخبر الثاني ', 'Content About News Two', '1665864274_about.jpg', '2022-10-15 22:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `specialt`
--

CREATE TABLE `specialt` (
  `spe_id` int(11) NOT NULL,
  `spe_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `spe_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `cou_id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `specialt`
--

INSERT INTO `specialt` (`spe_id`, `spe_name`, `spe_name_en`, `cou_id`, `uni_id`) VALUES
(33, 'هندسة', 'enginnering', 0, 8),
(34, 'طب', 'طب', 0, 8),
(35, 'هندسة', 'enginnering', 0, 14),
(36, 'طب', 'طب', 0, 14),
(37, 'التخصص الاول', 'first Specialist', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `uni_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `uni_info` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `uni_info_en` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `uni_image` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `uni_price` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uni_living` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uni_living2` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uni_spe` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `uni_video` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `uni_name`, `uni_name_en`, `uni_info`, `uni_info_en`, `uni_image`, `uni_price`, `uni_living`, `uni_living2`, `uni_spe`, `uni_video`) VALUES
(8, 'جامعه مسقط3', 'Muscat 3', 'معلومات', 'Information ', '1665867850_college.jpg', '2000', '4', '0', '', 'https://www.youtube.com/watch?v=OZznzppMvls'),
(10, 'جامعه حنين في االسعودية', 'Riyed Uni', 'معلومات', 'Information', '1666868850_young-people-engaged-web-design-website-page-development-flat-d-character-landing-concepts-159426528.jpg', '400', '5', '0', '', 'https://www.youtube.com/watch?v=2EzzlapIzIc'),
(11, 'جامعه الامارات العربية المتحددة ', 'Second University', 'معلومات', 'معلومات', '1665867980_header2.jpg', '10000', '6', '0', '', 'https://www.youtube.com/watch?v=OZznzppMvls'),
(14, 'جامعه  مسقط', 'Muscat University', 'قف', '4ق5', '1666301092_airport.png', '200', '4', '0', '17', 'https://www.youtube.com/watch?v=2EzzlapIzIc'),
(15, 'الجامعه الاولي', 'first university', 'ewq', 'qe', '1666477347_art_state.jpg', '20022', '5', '400', '600', 'https://www.youtube.com/watch?v=OZznzppMvls'),
(16, 'جامعه شبين الكوم', 'Second University', 'صث4ق', 'صقث', '1666564455_target.gif', '200', '4', '300', '400', ''),
(17, 'الجامعه الاولي', '', 'rfwre', 'wer', '1666621095_ai.png', '200', '5', '300', '400', 'https://video.search.yahoo.com/search/video?fr=mcafee&ei=UTF-8&p=elzero&type=E210US91213G91677#id=11&vid=916d0c156a1eb5243f5fe9d5322bac56&action=click'),
(18, 'جامعه  مسقط1', 'first', '454', 'wr', '1666627495_ai.png', '200', '4', '300', '500', '1666627495_1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `use_id` int(11) NOT NULL,
  `use_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `use_mobile` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `use_pwd` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `use_lastdate` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `use_regdate` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `wha_id` int(11) NOT NULL,
  `wha_name` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `wha_name_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `wha_image` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `wha_order` int(11) NOT NULL,
  `wha_info` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `wha_info_en` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `wha_number` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `whatsapp`
--

INSERT INTO `whatsapp` (`wha_id`, `wha_name`, `wha_name_en`, `wha_image`, `wha_order`, `wha_info`, `wha_info_en`, `wha_number`) VALUES
(32, 'علي', 'ali', '1665781849_support.png', 1, 'ثثققثقثقثقث', 'support', '00000000'),
(33, 'احمد ', 'ahmad', '1665781867_يوريوني-للخدمات-التعليمية-207x300.png', 2, 'fff', 'fff', '00000000'),
(34, 'مستشار جديد', 'New Consult', '1666474481_art1.jpg', 4, 'يببيييب', 'support', '01011642731');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`deg_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mes_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `specialt`
--
ALTER TABLE `specialt`
  ADD PRIMARY KEY (`spe_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`wha_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `deg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specialt`
--
ALTER TABLE `specialt`
  MODIFY `spe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `wha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
