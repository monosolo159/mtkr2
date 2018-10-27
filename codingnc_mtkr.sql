-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 12:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codingnc_mtkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `lecturer_name` varchar(200) NOT NULL,
  `recentwork_id` int(11) NOT NULL,
  `lecturer_order` int(11) NOT NULL,
  `lecturer_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_name`, `recentwork_id`, `lecturer_order`, `lecturer_pic`) VALUES
(1, 'ดร.อวยพร  ออละมาลี', 7, 1, 'lecturer_0001.jpg'),
(2, 'ศน.โชติกา  กุณสิทธิ์', 7, 2, ''),
(3, 'ดร.แสง  โชตบุญ', 7, 3, ''),
(4, 'ดร.พณารัตน์  บุตชารี', 7, 4, ''),
(5, 'อ.ศุภางค์ศรี  ชัยมาโย', 7, 5, ''),
(6, 'ดร.อวยพร  ออละมาลี', 3, 1, ''),
(7, 'ศน.โชติกา  กุณสิทธิ์', 3, 2, ''),
(8, 'ดร.แสง  โชตบุญ', 3, 3, ''),
(9, 'ศน.เกสี  ชัยมาโย', 3, 4, ''),
(10, 'อ.ศุภางค์ศรี  ชัยมาโย', 3, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `pic_id` int(11) NOT NULL,
  `recentwork_id` int(11) NOT NULL,
  `pic_group_id` int(11) NOT NULL,
  `pic_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`pic_id`, `recentwork_id`, `pic_group_id`, `pic_name`) VALUES
(1, 7, 1, 'recentwork_d_0002.jpg'),
(2, 7, 1, 'recentwork_d_0003.jpg'),
(3, 7, 1, 'recentwork_d_0004.jpg'),
(4, 7, 1, 'recentwork_d_0005.jpg'),
(5, 7, 2, 'recentwork_d_0006.jpg'),
(6, 7, 2, 'recentwork_d_0007.jpg'),
(7, 7, 2, 'recentwork_d_0008.jpg'),
(8, 7, 3, 'recentwork_d_0009.jpg'),
(9, 7, 3, 'recentwork_d_0010.jpg'),
(10, 7, 3, 'recentwork_d_0011.jpg'),
(11, 7, 3, 'recentwork_d_0012.jpg'),
(12, 7, 3, 'recentwork_d_0013.jpg'),
(13, 7, 3, 'recentwork_d_0014.jpg'),
(14, 7, 3, 'recentwork_d_0015.jpg'),
(15, 7, 3, 'recentwork_d_0016.jpg'),
(16, 7, 3, 'recentwork_d_0017.jpg'),
(17, 7, 3, 'recentwork_d_0018.jpg'),
(18, 7, 3, 'recentwork_d_0019.jpg'),
(19, 7, 3, 'recentwork_d_0020.jpg'),
(20, 7, 3, 'recentwork_d_0021.jpg'),
(21, 7, 3, 'recentwork_d_0022.jpg'),
(22, 7, 3, 'recentwork_d_0023.jpg'),
(23, 7, 3, 'recentwork_d_0024.jpg'),
(24, 7, 3, 'recentwork_d_0025.jpg'),
(25, 7, 3, 'recentwork_d_0026.jpg'),
(26, 7, 3, 'recentwork_d_0027.jpg'),
(27, 7, 3, 'recentwork_d_0028.jpg'),
(28, 7, 3, 'recentwork_d_0029.jpg'),
(29, 7, 3, 'recentwork_d_0030.jpg'),
(30, 7, 3, 'recentwork_d_0031.jpg'),
(31, 7, 3, 'recentwork_d_0032.jpg'),
(32, 0, 0, ''),
(33, 0, 0, ''),
(34, 0, 0, ''),
(35, 0, 0, ''),
(36, 0, 0, ''),
(37, 0, 0, ''),
(38, 7, 4, 'recentwork_d_0033.jpg'),
(39, 7, 4, 'recentwork_d_0034.jpg'),
(40, 7, 4, 'recentwork_d_0035.jpg'),
(41, 7, 4, 'recentwork_d_0036.jpg'),
(42, 7, 4, 'recentwork_d_0037.jpg'),
(43, 7, 4, 'recentwork_d_0038.jpg'),
(44, 7, 4, 'recentwork_d_0039.jpg'),
(45, 7, 4, 'recentwork_d_0040.jpg'),
(46, 7, 5, 'recentwork_d_0041.jpg'),
(47, 7, 5, 'recentwork_d_0042.jpg'),
(48, 7, 5, 'recentwork_d_0043.jpg'),
(49, 7, 5, 'recentwork_d_0044.jpg'),
(50, 0, 0, ''),
(51, 7, 6, 'recentwork_d_0045.jpg'),
(52, 7, 6, 'recentwork_d_0046.jpg'),
(53, 7, 6, 'recentwork_d_0047.jpg'),
(54, 7, 6, 'recentwork_d_0048.jpg'),
(55, 7, 6, 'recentwork_d_0049.jpg'),
(56, 7, 6, 'recentwork_d_0050.jpg'),
(57, 7, 6, 'recentwork_d_0051.jpg'),
(58, 3, 8, '611161124_2_0002.jpg'),
(59, 3, 8, '611161124_2_0003.jpg'),
(60, 3, 8, '611161124_2_0004.jpg'),
(61, 3, 8, '611161124_2_0005.jpg'),
(62, 3, 8, '611161124_2_0006.jpg'),
(63, 3, 8, '611161124_2_0007.jpg'),
(64, 3, 8, '611161124_2_0008.jpg'),
(65, 3, 8, '611161124_2_0009.jpg'),
(66, 3, 8, '611161124_2_0010.jpg'),
(67, 3, 8, '611161124_2_0011.jpg'),
(68, 3, 8, '611161124_2_0012.jpg'),
(69, 3, 8, '611161124_2_0013.jpg'),
(70, 3, 8, '611161124_2_0014.jpg'),
(71, 3, 8, '611161124_2_0015.jpg'),
(72, 3, 8, '611161124_2_0016.jpg'),
(73, 3, 8, '611161124_2_0017.jpg'),
(74, 3, 8, '611161124_2_0018.jpg'),
(75, 3, 8, '611161124_2_0019.jpg'),
(76, 3, 9, '611161124_2_0020.jpg'),
(77, 3, 9, '611161124_2_0021.jpg'),
(78, 3, 9, '611161124_2_0022.jpg'),
(79, 3, 9, '611161124_2_0023.jpg'),
(80, 3, 9, '611161124_2_0024.jpg'),
(81, 3, 9, '611161124_2_0025.jpg'),
(82, 3, 9, '611161124_2_0026.jpg'),
(83, 3, 9, '611161124_2_0027.jpg'),
(84, 3, 9, '611161124_2_0028.jpg'),
(85, 3, 9, '611161124_2_0029.jpg'),
(86, 3, 9, '611161124_2_0030.jpg'),
(87, 3, 9, '611161124_2_0031.jpg'),
(88, 3, 9, '611161124_2_0032.jpg'),
(89, 3, 9, '611161124_2_0033.jpg'),
(90, 0, 0, ''),
(91, 3, 10, '611161124_2_0034.jpg'),
(92, 3, 10, '611161124_2_0035.jpg'),
(93, 3, 10, '611161124_2_0036.jpg'),
(94, 3, 10, '611161124_2_0037.jpg'),
(95, 3, 10, '611161124_2_0038.jpg'),
(96, 3, 10, '611161124_2_0039.jpg'),
(97, 3, 10, '611161124_2_0010.jpg'),
(98, 0, 0, ''),
(99, 3, 11, '611161124_2_0041.jpg'),
(100, 3, 11, '611161124_2_0042.jpg'),
(101, 3, 11, '611161124_2_0043.jpg'),
(102, 3, 11, '611161124_2_0044.jpg'),
(103, 3, 11, '611161124_2_0045.jpg'),
(104, 3, 11, '611161124_2_0046.jpg'),
(105, 3, 11, '611161124_2_0047.jpg'),
(106, 3, 11, '611161124_2_0048.jpg'),
(107, 3, 11, '611161124_2_0049.jpg'),
(108, 3, 11, '611161124_2_0050.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pic_group`
--

CREATE TABLE `pic_group` (
  `pic_group_id` int(11) NOT NULL,
  `pic_group_name` varchar(200) NOT NULL,
  `recentwork_id` int(11) NOT NULL,
  `pic_group_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic_group`
--

INSERT INTO `pic_group` (`pic_group_id`, `pic_group_name`, `recentwork_id`, `pic_group_order`) VALUES
(1, 'ผู้เข้าอบรมลงทะเบียนกับทีม STAFF', 7, 1),
(2, 'ทดสอบก่อนเรียน (Pre-test)', 7, 2),
(3, 'ภาพกิจกรรมกลุ่ม', 7, 3),
(4, 'กิจกรรมผลิตชิ้นงาน', 7, 4),
(5, 'วิทยากรให้คำแนะนำและดูแลอย่างใกล้ชิด  พร้อมทั้งมอบของรางวัลสำหรับผู้ที่ได้คะแนนสูงสุดในการทดสอบ', 7, 5),
(6, 'รางวัลที่ดีที่สุดของเราคือรอยยิ้มจากผู้เข้าอบรม', 7, 6),
(8, 'ภาพกิจกรรม', 3, 1),
(9, 'ร่วมกันสร้างสรรค์ชิ้นงาน', 3, 2),
(10, 'วิทยากรเป็นกันเอง  คอยดูแลและให้คำแนะนำอย่างใกล้ชิด', 3, 3),
(11, 'รางวัลที่ดีที่สุดของเราคือรอยยิ้มจากผู้เข้าอบรม', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `recentwork`
--

CREATE TABLE `recentwork` (
  `recentwork_id` int(11) NOT NULL,
  `recentwork_title` varchar(200) NOT NULL,
  `recentwork_home_pic` varchar(200) NOT NULL,
  `recentwork_detail_pic` varchar(200) NOT NULL,
  `recentwork_detail` varchar(5000) NOT NULL,
  `recentwork_date` varchar(200) NOT NULL,
  `recentwork_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recentwork`
--

INSERT INTO `recentwork` (`recentwork_id`, `recentwork_title`, `recentwork_home_pic`, `recentwork_detail_pic`, `recentwork_detail`, `recentwork_date`, `recentwork_order`) VALUES
(1, '612181202-003', 'recentwork_0007.jpg', '', 'หลักสูตรฝึกอบรม การเสริมสร้างสมรรถนะครูกลุ่มสาระการเรียนรู้คณิตศาสตร์และวิทยาศาสตร์ด้านออกแบบหน่วยการเรียนรู้และการจัดกิจกรรมการเรียนรู้แบบ Active Learning ระดับประถมศึกษา  รุ่นที่ 3  รหัสหลักสูตร  612181202-003  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  8-9 กันยายน  2561', 1),
(2, '613181100-004', 'recentwork_0006.jpg', '', 'หลักสูตรฝึกอบรม การเสริมสร้างสมรรถนะครูกลุ่มสาระการเรียนรู้วิทยาศาสตร์และคณิตศาสตร์ด้านการวิจัยทางการศึกษาเพื่อพัฒนาทักษะการคิดเลขเป็น การคิดอย่างมีวิจารณญาณ  และการคิดแก้ปัญหาของผู้เรียนระดับมัธยมศึกษาตอนต้น  รุ่นที่ 4 รหัสหลักสูตร 613181100-004  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  25-26  สิงหาคม  2561', 2),
(3, '611161124-002', 'recentwork_0005.jpg', '611161124_2_0000.jpg', 'หลักสูตรพัฒนาครูปฐมวัย “การจัดประสบการณ์การเรียนรู้บูรณาการเพื่อพัฒนาสมอง  EF  สำหรับเด็กปฐมวัย”  รุ่นที่ 2   รหัสหลักสูตร  611161124-002  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  18-19  สิงหาคม  2561', 3),
(4, '611161124-004', 'recentwork_0004.jpg', '', 'หลักสูตรพัฒนาครูปฐมวัย “การจัดประสบการณ์การเรียนรู้บูรณาการเพื่อพัฒนาสมอง  EF  สำหรับเด็กปฐมวัย”  รุ่นที่ 4   รหัสหลักสูตร  611161124-004  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  4-5  สิงหาคม  2561', 4),
(5, '612181202-001  ', 'recentwork_0003.jpg', '', 'หลักสูตรฝึกอบรม การเสริมสร้างสมรรถนะครูกลุ่มสาระการเรียนรู้คณิตศาสตร์และวิทยาศาสตร์ด้านออกแบบหน่วยการเรียนรู้และการจัดกิจกรรมการเรียนรู้แบบ Active Learning ระดับประถมศึกษา  รุ่นที่ 1  รหัสหลักสูตร  612181202-001  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  21-22  กรกฎาคม  2561', 5),
(6, '613181100-001', 'recentwork_0002.jpg', '', 'หลักสูตรฝึกอบรม การเสริมสร้างสมรรถนะครูกลุ่มสาระการเรียนรู้วิทยาศาสตร์และคณิตศาสตร์ด้านการวิจัยทางการศึกษาเพื่อพัฒนาทักษะการคิดเลขเป็น การคิดอย่างมีวิจารณญาณ  และการคิดแก้ปัญหาของผู้เรียนระดับมัธยมศึกษาตอนต้น  รุ่นที่ 1 รหัสหลักสูตร 613181100-001  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  14-15  กรกฎาคม  2561', 6),
(7, '611161124-001', 'recentwork_0001.jpg', 'recentwork_0000.jpg', 'หลักสูตรพัฒนาครูปฐมวัย “การจัดประสบการณ์การเรียนรู้บูรณาการเพื่อพัฒนาสมอง  EF  สำหรับเด็กปฐมวัย”  รุ่นที่ 1   รหัสหลักสูตร  611161124-001  ตามโครงการฝึกอบรมครูรูปแบบครบวงจรของ สพฐ.  ประจำปี 2561', 'อบรมวันที่  30  มิถุนายน - 1  กรกฎาคม  2561', 7);

-- --------------------------------------------------------

--
-- Table structure for table `recentwork_detail`
--

CREATE TABLE `recentwork_detail` (
  `recentwork_detail_id` int(11) NOT NULL,
  `recentwork_id` int(11) NOT NULL,
  `recentwork_detail_title` varchar(200) NOT NULL,
  `recentwork_detail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `pic_group`
--
ALTER TABLE `pic_group`
  ADD PRIMARY KEY (`pic_group_id`);

--
-- Indexes for table `recentwork`
--
ALTER TABLE `recentwork`
  ADD PRIMARY KEY (`recentwork_id`);

--
-- Indexes for table `recentwork_detail`
--
ALTER TABLE `recentwork_detail`
  ADD PRIMARY KEY (`recentwork_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `pic_group`
--
ALTER TABLE `pic_group`
  MODIFY `pic_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recentwork`
--
ALTER TABLE `recentwork`
  MODIFY `recentwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `recentwork_detail`
--
ALTER TABLE `recentwork_detail`
  MODIFY `recentwork_detail_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
