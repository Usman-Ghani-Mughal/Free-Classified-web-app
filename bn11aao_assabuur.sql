-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2018 at 01:54 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bn11aao_assabuur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `street` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `first_name`, `last_name`, `phone`, `gender`, `birthday`, `username`, `email`, `password`, `street`, `city`, `state`, `zip`, `role`, `status`) VALUES
(3, '92ab0407c12c73d50b1f75fff41355ad.png', 'Babar', 'Nawab', '123456', 'Male', '', 'ameer', 'ameer@gmail.com', '3b712de48137572f3849aabd5666a4e3', '', '', '', '', 'Superadmin', 'Unblocked');

-- --------------------------------------------------------

--
-- Table structure for table `brand_others`
--

CREATE TABLE IF NOT EXISTS `brand_others` (
  `id` int(255) NOT NULL,
  `sub_cat_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_others`
--

INSERT INTO `brand_others` (`id`, `sub_cat_id`, `name`) VALUES
(3, '1', 'QMobile'),
(4, '1', ' Samsung '),
(5, '1', ' Apple '),
(6, '1', ' Nokia '),
(7, '1', 'LG'),
(8, '1', ' Huawei '),
(9, '1', ' Sony '),
(10, '1', ' Sony Ericsson '),
(11, '1', ' HTC '),
(12, '1', ' Motorola '),
(13, '1', ' OPPO '),
(14, '1', ' Lenovo '),
(15, '1', ' Haier '),
(16, '1', ' RIVO '),
(17, '1', ' BlackBerry '),
(18, '1', ' Mobilink JazzX '),
(19, '1', ' VOICE '),
(20, '1', ' Alcatel '),
(21, '1', ' Xiaomi '),
(22, '1', ' Infinix '),
(23, '1', ' Calme '),
(24, '1', ' Gright '),
(25, '1', ' Club '),
(26, '1', ' iNew '),
(27, '1', ' Other Mobiles '),
(28, '2', 'Samsung '),
(29, '2', ' Apple '),
(30, '2', ' Q Tabs '),
(31, '2', ' Danny Tabs '),
(32, '2', ' Other Tablets'),
(33, '3', 'Mobile '),
(34, '3', ' Tablets'),
(35, '4', 'Cameras '),
(36, '4', ' Lenses '),
(37, '4', ' Other Accessories'),
(38, '5', 'Computers '),
(39, '5', ' Hard Disk '),
(40, '5', ' Internet '),
(41, '5', ' Laptops '),
(42, '5', ' Monitors '),
(43, '5', ' Printers '),
(44, '5', ' Other Accessories '),
(45, '7', 'Generators '),
(46, '7', ' UPS '),
(47, '7', ' Solar '),
(48, '7', ' Batteries  '),
(49, '7', '  Other '),
(50, '8', 'Microwave '),
(51, '8', ' Cooking Range '),
(52, '8', ' Juicers '),
(53, '8', ' Ovens '),
(54, '8', ' Food Factory '),
(55, '8', ' Other '),
(56, '9', 'TV  '),
(57, '9', 'Video - Audio'),
(58, '13', 'Fans '),
(59, '13', ' Vacuum Cleaners '),
(60, '13', ' Water Dispensers '),
(61, '13', ' Iron '),
(62, '13', ' Sewing Machines '),
(63, '13', ' Other '),
(64, '14', 'Audi '),
(65, '14', ' BMW '),
(66, '14', ' Changan '),
(67, '14', ' Chevrolet '),
(68, '14', ' Classic & Antiques '),
(69, '14', ' Daewoo '),
(70, '14', ' Daihatsu '),
(71, '14', ' FAW '),
(72, '14', ' Honda '),
(73, '14', ' Hyundai '),
(74, '14', ' KIA '),
(75, '14', ' Lexus '),
(76, '14', ' Mazda '),
(77, '14', ' Mercedes '),
(78, '14', ' Mitsubishi '),
(79, '14', ' Nissan '),
(80, '14', ' Porsche '),
(81, '14', ' Range Rover '),
(82, '14', ' Suzuki '),
(83, '14', ' Toyota '),
(84, '14', ' Other Brands '),
(85, '18', 'Car Parts '),
(86, '18', ' Other Parts '),
(87, '22', 'Eagle '),
(88, '22', ' Ghani '),
(89, '22', ' Habib '),
(90, '22', ' Harley Davidson '),
(91, '22', ' Heavy Bikes '),
(92, '22', ' Honda '),
(93, '22', ' Metro '),
(94, '22', ' Ravi '),
(95, '22', ' Sohrab '),
(96, '22', ' Super Power '),
(97, '22', ' Super Star  '),
(98, '22', ' Suzuki '),
(99, '22', ' Unique '),
(100, '22', ' United '),
(101, '22', ' Yamaha '),
(102, '22', ' VESPA '),
(103, '22', ' Other Brands'),
(104, '29', 'Agricultural Land '),
(105, '29', ' Commercial Plots '),
(106, '29', ' Files '),
(107, '29', ' Industrial Land '),
(108, '29', ' Residential Plots '),
(109, '45', 'Baby Sitter '),
(110, '45', ' Cook '),
(111, '45', ' Driver '),
(112, '45', ' Gardener '),
(113, '45', ' Maid '),
(114, '45', ' Patient Attendant '),
(115, '45', ' Security Guard '),
(116, '45', ' Other '),
(117, '48', 'Computer '),
(118, '48', ' Language Classes '),
(119, '48', ' Music & Dance '),
(120, '48', ' Tutoring '),
(121, '48', ' Other '),
(122, '49', 'Computer '),
(123, '49', ' Home Appliances '),
(124, '49', ' Mobile '),
(125, '49', ' Other Electronics '),
(126, '58', 'Catering '),
(127, '58', ' Cooked Food '),
(128, '58', ' Other '),
(129, '59', 'Eggs '),
(130, '59', ' Milk '),
(131, '59', ' Fruits & Vegetables '),
(132, '59', ' Other '),
(133, '61', 'Farm Machinery & Equipment '),
(134, '61', ' Seeds, Crops, Pesticides & Fertilizers '),
(135, '62', 'Bulldozers '),
(136, '62', ' Construction Material '),
(137, '62', ' Cranes '),
(138, '62', ' Dumpers '),
(139, '62', ' Excavators'),
(140, '62', '  Loaders '),
(141, '62', ' Roller '),
(142, '62', ' Other Heavy Equipment '),
(143, '63', 'Medical Equipment '),
(144, '63', ' Medical Supplies '),
(145, '64', 'Cooking Equipment '),
(146, '64', ' Coolers & Freezers '),
(147, '64', ' Crockery & Cutlery '),
(148, '64', ' Ovens & Ranges '),
(149, '64', ' Tables & Platforms '),
(150, '64', ' Other Restaurant Equipment '),
(151, '65', 'Electrical & Electronic Equipment '),
(152, '65', ' Industrial Equipment '),
(153, '65', ' Mechanical Equipment '),
(154, '82', 'Beagle'),
(155, '82', ' Boxer '),
(156, '82', ' Bulldog '),
(157, '82', ' Cocker Spaniel '),
(158, '82', ' Dalmatian '),
(159, '82', ' Doberman '),
(160, '82', ' German Shepherd '),
(161, '82', ' Golden Retriever '),
(162, '82', ' Labrador '),
(163, '82', ' Other Breeds '),
(164, '82', ' Pomeranian '),
(165, '82', ' Pug '),
(166, '82', ' Rottweiler '),
(167, '82', ' Russian Dogs '),
(168, '83', 'Buffaloes '),
(169, '83', ' Bulls '),
(170, '83', ' Cows '),
(171, '83', ' Goats '),
(172, '83', ' Other Livestock '),
(173, '83', ' Sheep '),
(174, '87', 'Education & Training '),
(175, '87', ' Literature & Fiction '),
(176, '87', ' Professional '),
(177, '87', ' Other Books '),
(178, '92', 'Accessories for Men '),
(179, '92', ' Accessories for Women '),
(180, '93', 'Clothes for Men '),
(181, '93', ' Clothes for Women '),
(182, '94', 'Footwear for Men '),
(183, '94', 'Footwear for Women'),
(184, '98', 'Watches for Men '),
(185, '98', ' Watches for Women '),
(186, '110', 'Pakistan Army'),
(187, '110', 'Pakistan Navy'),
(188, '110', 'Pakistan Air Force'),
(189, '110', 'Retired army personnel'),
(190, '110', 'Jobs'),
(191, '111', 'Law firms/legal'),
(192, '111', 'Lawyer'),
(210, '116', 'Musicians Available'),
(211, '116', 'Musicians Wanted'),
(203, '112', 'Private Practice'),
(204, '112', 'Consultants'),
(205, '112', 'Doctors And Nurses'),
(206, '112', 'Pharmacists'),
(207, '112', 'Dentists'),
(208, '112', 'Medical Specialists'),
(209, '112', 'Other Medical');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `popular` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province`, `city_name`, `popular`) VALUES
(8, '3', 'Hattian', 1),
(10, '7', 'Islamabad', 1),
(11, '4', 'Quetta', 0),
(12, '4', 'Kech (Turbat)', 0),
(13, '4', 'Khuzdar', 0),
(14, '4', 'Killa Abdullah', 0),
(15, '4', 'Pishin', 0),
(16, '4', 'Lasbela', 0),
(17, '4', 'Jafarabad', 0),
(18, '4', 'Nasirabad', 0),
(19, '4', 'Kalat', 0),
(20, '4', 'Loralai', 0),
(21, '4', 'Killa Saifullah', 0),
(22, '4', 'Panjgur', 0),
(23, '4', 'Dera Bugti', 0),
(24, '4', 'Zhob', 0),
(25, '4', 'Mastung', 0),
(26, '4', 'Gwadar', 0),
(27, '4', 'Kachhi (Bolan)', 0),
(28, '4', 'Chagai', 0),
(29, '4', 'Kohlu', 0),
(30, '4', 'Sohbatpur', 0),
(31, '4', 'Nushki', 0),
(32, '4', 'Washuk', 0),
(33, '4', 'Barkhan', 0),
(34, '4', 'Musakhel', 0),
(35, '4', 'Ziarat', 0),
(36, '4', 'Kharan', 0),
(37, '4', 'Sherani', 0),
(38, '4', 'Jhal Magsi', 0),
(39, '4', 'Sibi', 0),
(40, '4', 'Awaran', 0),
(41, '4', 'Lehri', 0),
(42, '4', 'Harnai', 0),
(43, '11', 'Peshawar', 0),
(44, '11', 'Mardan', 0),
(45, '11', 'Swat', 0),
(46, '11', 'Dera Ismail Khan', 0),
(47, '11', 'Swabi', 0),
(48, '11', 'Charsadda', 0),
(49, '11', 'Mansehra', 0),
(50, '11', 'Nowshera', 0),
(51, '11', 'Lower Dir', 0),
(52, '11', 'Abbottabad', 0),
(53, '11', 'Bannu', 0),
(54, '11', 'Haripur', 0),
(55, '11', 'Kohat', 0),
(56, '11', 'Upper Dir', 0),
(57, '11', 'Buner', 0),
(58, '11', 'Lakki Marwat', 0),
(59, '11', 'Upper Kohistan', 0),
(60, '11', 'Lower Kohistan', 0),
(61, '11', 'Shangla', 0),
(62, '11', 'Malakand', 0),
(63, '11', 'Karak', 0),
(64, '11', 'Hangu', 0),
(65, '11', 'Battagram', 0),
(66, '11', 'Chitral', 0),
(67, '11', 'Tank', 0),
(68, '11', 'Torghar', 0),
(69, '12', 'Lahore', 0),
(70, '12', 'Faisalabad', 0),
(71, '12', 'Rawalpindi', 0),
(72, '12', 'Gujranwala', 0),
(73, '12', 'Rahim Yar Khan', 0),
(74, '12', 'Multan', 0),
(75, '12', 'Muzaffargarh', 0),
(76, '12', 'Sialkot', 0),
(77, '12', 'Sargodha', 0),
(78, '12', 'Bahawalpur', 0),
(79, '12', 'Sheikhupura', 0),
(80, '12', 'Kasur', 0),
(81, '12', 'Okara', 0),
(82, '12', 'Bahawalnagar', 0),
(83, '12', 'Khanewal', 0),
(84, '12', 'Vehari', 0),
(85, '12', 'Dera Ghazi Khan', 0),
(86, '12', 'Gujrat', 0),
(87, '12', 'Jhang', 0),
(88, '12', 'Sahiwal', 0),
(89, '12', 'Toba Tek Singh', 0),
(90, '12', 'Rajanpur', 0),
(91, '12', 'Attock', 0),
(92, '12', 'Layyah', 0),
(93, '12', 'Pakpattan', 0),
(94, '12', 'Narowal', 0),
(95, '12', 'Lodhran', 0),
(96, '12', 'Bhakkar', 0),
(97, '12', 'Mandi Bahauddin', 0),
(98, '12', 'Mianwali', 0),
(99, '12', 'Chakwal', 0),
(100, '12', 'Chiniot', 0),
(101, '12', 'Nankana Sahib', 0),
(102, '12', 'Khushab', 0),
(103, '12', 'Jhelum', 0),
(104, '12', 'Hafizabad', 0),
(105, '10', 'Karachi West', 0),
(106, '10', 'Karachi Central', 0),
(107, '10', 'Karachi East', 0),
(108, '10', 'Korangi', 0),
(109, '10', 'Khairpur', 0),
(110, '10', 'Hyderabad', 0),
(111, '10', 'Sanghar', 0),
(112, '10', 'Malir', 0),
(113, '10', 'Badin', 0),
(114, '10', 'Karachi South', 0),
(115, '10', 'Tharparkar', 0),
(116, '10', 'Ghotki', 0),
(117, '10', 'Shaheed Benazir Abad', 0),
(118, '10', 'Naushahro Firoze', 0),
(119, '10', 'Dadu', 0),
(120, '10', 'Larkana', 0),
(121, '10', 'Mirpur Khas', 0),
(122, '10', 'Sukkur', 0),
(123, '10', 'Qambar Shahdadkot', 0),
(124, '10', 'Shikarpur', 0),
(125, '10', 'Kashmore', 0),
(126, '10', 'Umerkot', 0),
(127, '10', 'Jacobabad', 0),
(128, '10', 'Jamshoro', 0),
(129, '10', 'Thatta', 0),
(130, '10', 'Tando Allahyar', 0),
(131, '10', 'Sujawal', 0),
(132, '10', 'Matiari', 0),
(133, '10', 'Tando Muhammad Khan', 0),
(134, '3', 'Muzaffarabad', 0),
(135, '3', 'Jhelum valley', 0),
(136, '3', 'Neelum', 0),
(137, '3', 'Mirpur', 0),
(138, '3', 'Bhimber	', 0),
(139, '3', 'Kotli', 0),
(140, '3', 'Poonch', 0),
(141, '3', 'Bagh', 0),
(142, '3', 'Haveli', 0),
(143, '3', 'Sudhnati', 0),
(144, '6', 'Gilgit', 0),
(145, '6', 'Skardu', 0),
(146, '6', 'Diamer', 0),
(147, '6', 'Ghizer', 0),
(148, '6', 'Shigar', 0),
(149, '6', 'Nagar', 0),
(150, '6', 'Ghanche', 0),
(151, '6', 'Hunza', 0),
(152, '6', 'Astore', 0),
(153, '6', 'Kharmang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE IF NOT EXISTS `main_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `img`) VALUES
(1, ' Mobiles', '1520076911mobiles.png'),
(2, 'Electronics & Home Appliances', '1520077093home appliances.png'),
(3, 'Vehicles', '1520077169vehicles.png'),
(4, ' Bikes', '1520077205bikes.png'),
(5, ' Property for Sale', '1517529743house.png'),
(6, 'Jobs', '1520077319jobs.png'),
(7, 'Services', '1520077368services.png'),
(8, ' Business, Industrial & Agriculture', '1520077417business industrial & agriculture.png'),
(9, 'Furniture & Home Decor', '1520077458furniture & home decor.png'),
(10, ' Animals', '1520077508animals.png'),
(11, 'Books, Sports & Hobbies', '1520077574books, sports & hobbies.png'),
(12, ' Fashion & Beauty', '1520077612fashion & beauty.png'),
(13, 'Kids', '1520077659kids.png'),
(14, 'Community', '1520264647community.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(9) unsigned zerofill NOT NULL,
  `username` varchar(255) NOT NULL,
  `to_user` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `recover` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `to_user`, `sender`, `recover`, `message`, `date`, `time`, `status`) VALUES
(000000013, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'message notification wala kam kr dia hai ', '22 February, 2018', '03:50 AM', 1),
(000000014, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'abi main sone laga hon 3:50 am ho gay ', '22 February, 2018', '03:51 AM', 1),
(000000015, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'Subah chat kr k cheching krte hai ', '22 February, 2018', '03:52 AM', 1),
(000000016, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'hi', '22 February, 2018', '04:03 AM', 1),
(000000017, '43638@ameer', '43538@noman', '43638@ameer9', '43538@noman1', 'hai ', '22 February, 2018', '04:05 AM', 1),
(000000018, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'kia hai?', '22 February, 2018', '04:06 AM', 1),
(000000019, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'g', '22 February, 2018', '04:06 AM', 1),
(000000020, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'ffgh', '22 February, 2018', '04:06 AM', 1),
(000000021, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'fg', '22 February, 2018', '04:06 AM', 1),
(000000022, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'hfg', '22 February, 2018', '04:06 AM', 1),
(000000023, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'h', '22 February, 2018', '04:06 AM', 1),
(000000024, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'fgh', '22 February, 2018', '04:06 AM', 1),
(000000025, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'd', '22 February, 2018', '04:06 AM', 1),
(000000026, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'd', '22 February, 2018', '04:06 AM', 1),
(000000027, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'd', '22 February, 2018', '04:06 AM', 1),
(000000028, '43538@noman', '43638@ameer', '43538@noman1', '43638@ameer9', 'd', '22 February, 2018', '04:06 AM', 1),
(000000029, '33374@baber', '43638@ameer', '33374@baber1', '43638@ameer4', 'Salaam Ameer,', '22 February, 2018', '12:55 PM', 1),
(000000030, '43638@ameer', '33374@baber', '43638@ameer4', '33374@baber1', 'Walikum Aslsam', '22 February, 2018', '01:56 PM', 1),
(000000031, '95579@ali', '43638@ameer', '95579@ali1', '43638@ameer7', 'ok', '22 February, 2018', '06:26 PM', 1),
(000000032, '95579@ali', '43638@ameer', '95579@ali1', '43638@ameer7', 'thanks', '22 February, 2018', '06:26 PM', 1),
(000000033, '95579@ali', '33374@baber', '95579@ali4', '33374@baber7', 'hi', '23 February, 2018', '09:20 PM', 1),
(000000034, '95579@ali', '43638@ameer', '95579@ali1', '43638@ameer7', 'hello', '23 February, 2018', '09:21 PM', 1),
(000000035, '95579@ali', '90399@zaheer', '95579@ali5', '90399@zaheer7', 'hi', '23 February, 2018', '10:13 PM', 1),
(000000036, '95579@ali', '90399@zaheer', '95579@ali5', '90399@zaheer7', 'hi', '23 February, 2018', '10:13 PM', 1),
(000000037, '95579@ali', '33374@baber', '95579@ali4', '33374@baber7', 'ji', '23 February, 2018', '10:14 PM', 1),
(000000038, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'Deactive Ad, Active Ad & Delete Ad ho gya ap check kr len ', '25 February, 2018', '01:44 PM', 1),
(000000039, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'aur edit ad wala 50% ho gya hai  ', '25 February, 2018', '01:44 PM', 1),
(000000040, '43638@ameer', '95579@ali', '43638@ameer7', '95579@ali1', 'main aj sham tk edit ad & bottom banner k sath upload kr dun ga ', '25 February, 2018', '01:45 PM', 1),
(000000041, '90399@zaheer', '95579@ali', '90399@zaheer7', '95579@ali5', 'hey how are you usman ', '26 February, 2018', '10:15 PM', 1),
(000000042, '95579@ali', '90399@zaheer', '95579@ali5', '90399@zaheer7', 'fine bro', '01 March, 2018', '12:15 AM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_favorites`
--

CREATE TABLE IF NOT EXISTS `my_favorites` (
  `id` int(255) NOT NULL,
  `ad_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_favorites`
--

INSERT INTO `my_favorites` (`id`, `ad_id`, `email`) VALUES
(19, 11, 'babernawabi_10@hotmail.co.uk'),
(20, 5, 'bestwebstech@gmail.com'),
(21, 11, 'ameer7an@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`) VALUES
(1, 'Terms of Use', '<p><span style="font-size: 14px; font-family: Tahoma;">As a condition of\r\nyour use of Assabuur.com including its related services, applications and tools,\r\nyou agree not to post, upload, update, modify, email, publish, or share any\r\ninformation on the Site:</span></p><ul><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">That violate\r\nany laws or regulation;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">That violate\r\nthe Posting Rules;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Post\r\nany harmful, abusive, blasphemous, threatening, obscene, defamatory or indecent\r\nmaterial;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Post\r\nany content that intimidates, harasses, degrades, or is hateful towards any\r\nindividual or group of individuals on the basis of religion, gender, race,\r\nethnicity, sexual orientation, age, or disability;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">That\r\nconstitutes or contains spam, junk mail, chain letters, or promote pyramid\r\nschemes;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Post or\r\notherwise communicate any false or misleading material or message of any kind;</span></li><li><span style="font-family: Tahoma;"><span style="text-indent: -0.25in; font-size: 14px;">T</span><span style="text-indent: -0.25in; font-size: 14px;">hat infringes\r\nany third-party right;</span></span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">That\r\ncontains software viruses or any other technologies that may harm Assabuur.com\r\nor the interests or property of Assabuur.com users;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Copy,\r\nmodify, or distribute any other person''s content without their consent</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Use automated\r\nmeans, including robot spider, crawlers, scraper to access Assabuur.com, except\r\nfor internet search engines (e.g. Google) and collect content for any purpose\r\nwithout our express written permission;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Harvest\r\nor collect personal information about other users or entities, including email\r\naddresses, without their explicit consent;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Copy,\r\nmodify or distribute rights or content from the Assabuur.com site, applications\r\nor tools or Assabuur.com copyrights and trademarks;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Use any\r\nautomated device or software that enables the submission of automatic postings,\r\nincluding without limitation, that impose an unreasonable load on our\r\ninfrastructure or interfere with the proper working of Assabuur.com;</span></li><li><span style="text-indent: -0.25in; font-size: 14px; font-family: Tahoma;">Sell\r\nany counterfeit items or constitutes ‘bait and switch’ offer;</span></li><li><span style="font-family: Tahoma;"><span style="text-indent: -0.25in; font-size: 14px;">That is\r\ncopyrighted, protected by trademark or other rights of third parties.</span><br></span></li></ul><p class="MsoListParagraphCxSpLast" style="text-indent:-.25in;mso-list:l0 level1 lfo1"><span style="font-family: Tahoma;"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom: 13.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Tahoma;"><span style="font-size: 14px;">You are solely responsible for all content that\r\nyou submit on Assabuur.com or any communication and any consequences that may\r\nresult from your post. We&nbsp;are\r\nnot responsible for any messages, emails or communication between users or any\r\ncomments, pictures, videos or other content that is posted&nbsp;on Assabuur.com\r\nby users.</span><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom: 13.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Tahoma;"><span style="font-size: 14px;">Furthermore, if you are found to be in\r\nnon-compliance with the laws and regulations, or breaching these terms of use\r\nin any way and/or behaving suspiciously on the Assabuur.com we may reserve the\r\nright at our discretion to terminate your account/block your access to the site.</span><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom: 13.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14px; font-family: Tahoma;">We reserve the right at our discretion to\r\nrefuse or remove any non-compliant content that we believe is inappropriate or\r\nbreaching the above term.</span></p><p class="MsoNormal" style="margin-bottom: 13.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 14px; font-family: Tahoma;">This\r\nservice is free of charge. Assabuur.com is not involved in any sale or\r\ntransaction and only acts as a platform for users to publish ads of their\r\nproducts or services.</span></p>'),
(2, 'Privacy Policy', '<p style="text-align: center; "><span style="font-weight: bold;">Coming Soon....</span><br></p>'),
(3, 'About us', '<p style="text-align: center; "><span style="font-size: 12pt; font-family: Perpetua, serif; color: rgb(59, 56, 56);">Assabuur.com is a\r\nfree local classified ads site where you can trade anything from mobiles, cars,\r\nhouses, furniture, clothing and animals. </span><span style="font-size: 12pt; font-family: Perpetua, serif; color: rgb(59, 56, 56);">You can see all the latest job offerings\r\non the market and the current houses, flats and apartments available for rent\r\nor sale. Assabuur.com also have a community area where you can interact with other like-minded\r\nprofessionals in law, medicine, or members of the Pakistan armed forces.</span></p><p style="text-align: center; "><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `post_ad`
--

CREATE TABLE IF NOT EXISTS `post_ad` (
  `id` int(9) unsigned zerofill NOT NULL,
  `title` varchar(255) NOT NULL,
  `main_cat_id` int(255) NOT NULL,
  `sub_cat_id` int(255) NOT NULL,
  `brand_cat` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `registered` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `km` varchar(255) NOT NULL,
  `veh_condition` varchar(255) NOT NULL,
  `furnished` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `area_unit` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `website` varchar(255) NOT NULL,
  `4th_cats` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `img9` varchar(255) NOT NULL,
  `img10` varchar(255) NOT NULL,
  `img11` varchar(255) NOT NULL,
  `img12` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `show_email` int(11) NOT NULL,
  `province` int(255) NOT NULL,
  `city` int(255) NOT NULL,
  `city_area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `published_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_ad`
--

INSERT INTO `post_ad` (`id`, `title`, `main_cat_id`, `sub_cat_id`, `brand_cat`, `price`, `year`, `registered`, `fuel`, `km`, `veh_condition`, `furnished`, `bedrooms`, `bathrooms`, `floor_level`, `area_unit`, `area`, `job_type`, `event_date`, `website`, `4th_cats`, `descriptions`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `full_name`, `phone`, `email`, `show_email`, `province`, `city`, `city_area`, `address`, `published_date`, `expiry_date`, `status`, `reason`) VALUES
(000000021, 'Web design & development', 7, 56, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>we are providing Web design & development services \r\nat very reasonable price for more info please contact us</pre>', '796b193f7be268d8bb880519b90227f5.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Muhammad usman', '03345513026', 'musmanu231@gmail.com', 1, 12, 71, 'Muree Road', 'Muree Road Rawalpindi', '2018-03-08', '2018-04-07', 'Unblocked', ''),
(000000022, 'Big breeder for sale king bloodline', 10, 84, 0, '3110486070', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>bakra sale</pre>', '99bff0300efc17e4d02ced308cf5f2df.', '9cabdf692f9d7f0b1598b35d791037aa.jpg', 'db4a6447977fc11e52795a2e0f5654ce.', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03213388997', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-09', '2018-04-08', 'Unblocked', ''),
(000000023, 'Contact what sup ND call 03002956034 ak phase wali Bakri', 10, 84, 0, '65000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Phasay wali bakri nd Gulabi bachay .\r\nLocation Gulshane iqbal block no 1\r\nAk male bacha nd ak female kids</pre>', 'aae7969e61d0c51e641b8e62b9a456d2.jpg', '000ba16a2a149d7e413545288e7e0a89.', 'b05dd50171ba5a96132a8ee8b0fd0f69.', '99d8fc86b1e1d9671bcccf8183cc75de.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03213388997', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-09', '2018-04-08', 'Unblocked', ''),
(000000024, 'Betal goat female', 10, 84, 0, '11111111', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Mashallah????????????????????????????????subhanallah ya ALLAH tera sukar ha alhamdulliah pure betal female is for sale now with 3 kids1 female 2 males mashallah chk quality of kids it speak it self for more details only only only only only call or whatsapp plz and chaska party say guzarish ha k na apna time waste karen na mera 03216427100 03134320675</pre>', 'bd251f867f8562e41a366afe51d97d84.jpg', '6c89a929201d2ea02408f6dd06cac4cd.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 72, 'gujrawala', '', '2018-03-09', '2018-04-08', 'Unblocked', ''),
(000000025, 'wanted Cat Baggali Cat ????', 10, 84, 0, '42000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>cat are sale\r\n</pre>', 'bfbac9721893381b45d30d34f465b21f.jpg', '3f8e66cece8b362340c81b62045c1e5f.jpg', '9a7b31fc9be9ae529bac96a66d05fb54.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-09', '2018-04-08', 'Unblocked', ''),
(000000026, 'For sale 03004768472', 10, 84, 0, '35000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MA SHA ALLAH????\r\n1TEETH BEETal BKRA GOOD HIGHT ND LENTH FULLL HEALTHY FOR SALE \r\nCAAL. 03004768472</pre>', 'ebc1bd57ad2b147c7bb6e31f443efe80.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 69, 'punjab', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000027, 'Birds', 10, 79, 0, '22000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw full tame and full talking male for sale\r\nPrice 22000\r\nLocation lahore\r\nCantact 03054614017\r\nOnly call</pre>', 'c96483839ff54babec5ed3f3a41837f2.jpg', 'eb7c462a2f0c30891a23e2d106104652.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000028, 'Embroidered', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>J. Embroidered suits\r\nFull front embroidered \r\nBoroshia net duppta</pre>', '96b6340db1f1122176201e0cd01dc295.jpg', '70c4ca3387a626dbec6bbecabd699601.jpg', 'ebe96fe7e08153b7d65977cea1f67f06.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000029, 'Gold Har sat 22 kart details inbox whats app IMO & call 0335 5838201', 12, 95, 0, '45000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best jeweler place</pre>', '46c08f9cfa2ecbefb5f20ecbad05a58c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 71, 'rawalpindi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000030, '3 Marla house bismillah housing scheem bata pur lahore', 5, 28, 0, '470000', '', '', '', '', '', 'No', '3', '2', '', 'Marla', 'Bata Pur Lahore Cant', '', '0000-00-00', '', '', '<pre>50 lack ka house ab 47 lack main</pre>', '65aae246d63b75fecc679cd98461eb3d.jpg', '07736533622732113e6ca23b00227a85.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000031, 'Pure persion female kitten', 10, 81, 0, '11000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>03239000272</pre>', 'ba401e4ddbcc3f6e3e8cf789cd4fbb76.jpg', '69bc48d15e22529720d3e76cac644fec.jpg', 'd6b686e9b534564aee9869ae843f8232.jpg', 'f13e00be1b6a3ed8fd083fdfd38edc58.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000032, 'Corolla 2008 model shape 2010', 3, 17, 0, '200000', '', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>1 lac 48 thousands orignal chali hoi\r\nEngine condition 100% \r\n2008 model shape 2010\r\nFuel average 15km\r\n\r\nNo accident \r\nOringnal paint \r\nEverytning is in good condition \r\nAC working \r\nTire condition perfect\r\n\r\nOnly serious buyers inbox me</pre>', '724a29e02b8fd0bc6917c1830e7e989d.jpg', '1c1e30bcabd5aa359c66ff1402639138.jpg', '10c13e41af69321517484b99f243c871.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000033, '3 White Ring neck breeder female for sale', 10, 79, 0, '786', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Ring neck white breeder female for sale\r\nActive and healthy\r\nPrize on phone \r\n03214809396\r\n</pre>', '33e3553997956d5f64253af972ed84ec.jpg', 'ec1f6484a7ae4fad544b91c78c29d93c.jpg', '94eed6cd4e07907d8a599bf340e4fc6e.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000034, 'Raw handtame pair for sale', 10, 79, 0, '786', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw handtame and talking pair for sale \r\nActive and healthy\r\nFully lengthy and loving\r\n03214809396</pre>', 'f69ad3035f5053a5ad3d8b6c54bbcbaa.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000036, 'Sindh k ablak bakra', 10, 83, 171, '70000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sindh k ablak bakra \r\nWt 80 kg \r\nCall 03032677832</pre>', '7d1a66a4eb68606947ef74e2f48d0e7c.jpg', '81501679ecc1158c3d94deb003f0862b.jpg', '42ca5bf0d92ccc3c177aa5b6cba8762e.jpg', '22a327d102345b26c496663367d7a7c6.jpg', '7e66b904b6c02a2acb4eb1c38b9b096f.jpg', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 107, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000037, 'FoR SALE bakra', 10, 83, 171, '50000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>FoR SALE\r\nKamori beautiful female\r\nCall oR watsapp\r\n03036115893</pre>', '54f436d6121306bdee7efe149ce84d42.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 107, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000038, 'FREE Pure Nachi Full Chall  bakra', 10, 83, 171, '20000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Pure Nachi Full Chall \r\nAge 9 months Location Karachi Cargo availabil \r\nfor price only Call or WhatsApp \r\n03333633995</pre>', '4e206c9d8532dac0eefc2e5be02ec927.jpg', '06b193570782f4f889abab83f30f2398.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000039, 'kajla for sale', 10, 83, 171, '789', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>age 4 dant \r\nhealty and active \r\nplease only call on given number \r\n0300 4440052 Kamran bhai</pre>', '259f7aa489b13a1b05a5d5c9ad8b80ae.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000040, 'Meh-ran vxr 2007 Jennie condition', 3, 14, 84, '36000', '2007', 'Karachi West', 'Petrol', '12', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Cplc clear tax paid hy all documents available and clear compnay fited ac cng petrol seald engine new seat covers and alloyrm everything is working just bay and drive \r\nContact 03462488296</pre>', 'bf556587fa2005f68c4266a07a8d3ac9.jpg', 'bea9ae081e5fc351ed0bc7e90ff095f5.jpg', 'b381240be9b13f3d9895e1f80896b3d8.jpg', '98297187c3d9bd7f0897b771934ba0e9.jpg', '9be60155148008f7ef306dfd5e7e14ea.jpg', '57e46f6e6813a885532b4fd809810ca1.jpg', '36c58a780a3405b5c47bf78f1adea821.jpg', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000041, 'Axio hybird', 3, 14, 72, '200000', '2017', 'Gujranwala', 'Diesel', '56', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Axio hybird 2014 model 2017 import front tyar ha sara 2 air bags open han baki gari total geniune ha aerius buyer contct me loaction gujranwala plz chaska party mazrat Contct 03237441115 Demand 1825000</pre>', '75de19dc7fa2a04bc9a97d8abff85571.jpg', '0728528e04596f0b1789409e265bd476.jpg', '300cd793045922414509de7f8a714bb0.jpg', '939e2ee0a28a0ec8d3991d1851061c32.jpg', '094ca01ff1d58dfc89543a5d6d2d3e8a.jpg', '507e0ed426b57440f913d489ad473c0e.jpg', 'b953067eb7d860ccff2b4a5191fcc0ae.jpg', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 72, 'gujrawala', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000042, '2 fellow breeder pairs.', 10, 79, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2 breeder pair fellow healthy active pairs.03137537617</pre>', '4199dc989a08cd9a705d06ee84875c40.jpg', 'cabd0031fef87cfccdd016f128afa47c.jpg', '6304a71deb85980541401a0cbd02695d.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 70, 'faislabad', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000043, 'Car', 3, 14, 79, '250000', '2006', 'Lahore', 'Petrol', 'N/A', 'New', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Adam car ???? 2006 modal \r\nLAHORE number \r\nLife time token \r\nContact #03335876477</pre>', '38f9b80da500dbeefb5d977367891e78.jpg', '7ba2510a2fb85c88888f64f0a02873de.jpg', 'cd5ca303017d03c5f4c6f0f7c78dfc6e.jpg', 'b2434173ee1df27593caae6220e4bcb2.jpg', '', '', '', '', '', '', '', '', 'Junaid Zulkifal', '03350892747', 'asian357@hotmail.co.uk', 0, 12, 103, 'Jhelum', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000044, 'Suzuki khybar', 3, 14, 82, '250000', '2004', 'Multan', 'Diesel', 'N/A', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>AC AND CNG ALY RIM PASPORT BOOK LIFE TIME TOKEN 03086268500</pre>', '34f3f9dcfea3ffff5a3da429b9ded604.jpg', '393ecc35d3c174cb9388348a7272d879.jpg', 'a1c35ab07040685f93dd758b213314fb.jpg', '', '', '', '', '', '', '', '', '', 'Junaid Zulkifal', '03350892747', 'asian357@hotmail.co.uk', 0, 12, 74, 'Lalamusa', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000045, 'Honda civic orial modle 2001', 3, 14, 72, '800000', '2001', 'Charsadda', 'Petrol', 'N/A', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Urgent sale . More detail contact me\r\n03379870471</pre>', '312d4c36450d49170a2b06b9c9738e25.jpg', '0c2e2b7b6ffa18aa0366f9483609738f.jpg', 'e76f052642273969a35f0c5c9974a090.jpg', '', '', '', '', '', '', '', '', '', 'Junaid Zulkifal', '03350892747', 'asian357@hotmail.co.uk', 0, 11, 48, 'Charsadda', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000046, 'Honda Civic Dolphin 1995', 3, 14, 72, '4600000', '1995', 'Karachi Central', 'Petrol', 'N/A', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>I am selling Honda Civic 1995. The car has following features:\r\n2. AC+CNG+Petrol\r\n3. New Tube less Tyre\r\n4. Branded rims\r\n5. Soundless engine\r\n6. Suspension in excellent condition\r\n7.Water Dropping Engine\r\n8.Leather seats\r\n9. Central Locking\r\n10.Complete documents with tax paid.\r\nFor contact Call me.\r\nNumber Contact : ,03052616075</pre>', '6b41aa6e38eddd9ddac1fef389a14242.jpg', '145dead31c15f6cf29a7a1666d65ee53.jpg', 'f6cef96fe1ee1d9ae3aebeabc4a74a84.jpg', 'aedd92fa572b23bb3e7f42a93dee1884.jpg', 'ae4bfb393529ab4005b5e7ee4a7031ce.jpg', '32917f0a05a3ec4cec2318ae48856071.jpg', '', '', '', '', '', '', 'Junaid Zulkifal', '03350892747', 'asian357@hotmail.co.uk', 0, 10, 106, 'Karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000047, '3 feet aquarium for sale imported trolly and top filter', 10, 78, 0, '10000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Items includes\r\n3 feet aquarium \r\nTop filter \r\nAutomatic heater \r\nImported trolly \r\n14 malawa mix cichlids size 2 to 4 inches mix \r\nFish feed , 3 type \r\nLED light \r\nDrift wood \r\nDouble nozzel pump \r\nWater proof pink aqua light\r\nBlood worms \r\nBiological sponge filter new \r\nFilter for power head \r\nUnder gravel filter \r\nAutomatic thermometer digital \r\nTop filter extra pipe \r\nCoral large piece decor \r\nCrush coral media \r\nBiological media \r\nAll of this for 10000 reason to sell, location change .\r\nPM me for contact</pre>', 'f6d558ad83c0a1cddab8470b4e524686.jpg', '47e6e2ec8a7d2ba2bd5edfb01a9c0275.jpg', '04e799a903338ed1a2b493c034bf7c7a.jpg', '5ccbdb56825e4c68bc8d30d7e2434e79.jpg', '74961eaf16dc4dc9732fe716524d0d52.jpg', '9087ca8c8a9ff4c79b76954b5878ebe6.jpg', 'dd9ef203c6df9a1f9fe646be9c70db82.jpg', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 7, 10, 'ISLAMABAD', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000048, 'aquarium without fishes', 10, 78, 0, '26000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Height 2.5 ft, width 4 ft,depth 1.5 ft</pre>', '1f9a97a7b48db8d616fb7a1478d313c5.jpg', '41bd2c09163256f084cf1cd822f3d04a.jpg', '21758ed3ebe9e806631ae7ee4f404dd0.jpg', '701b87ca1cf5da35c17b97b3584fad4c.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000049, 'Cocktail pair urgent sale', 10, 79, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Loc saki hasan karachi \r\n03312471902</pre>', 'a7b557fad3ff20ec9b4d270b494f4264.jpg', 'f863c5b5a7c65eecae086990d8f40e31.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 106, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000050, 'Jewl chiclid', 10, 78, 0, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Jewl chiclid available for sale in quantity minimum quantity order 12.</pre>', '8d8a8586a7d3af063e891997b2861087.jpg', '7636c74cc4b366ac72bc8d33aaba0e6f.jpg', '66d324827eae2dc01dda09b6db036178.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 106, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000051, 'Flowerhorn fish', 10, 78, 0, '2500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Red dragon flower horn approx 4-5 inches for sale.</pre>', '47b44bedfc11ee31ea245cb44e7894c9.jpg', '66477a8272018632e82a9e8310e1efad.jpg', '2f95996a149d576bf66fc78bc74214f6.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000052, 'Samsung galaxy s8', 1, 1, 4, '48500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Samsung galaxy S8 condition 9/10. Only Set and charger. Model 950F. Single sim</pre>', '27113f1e810f059f2b68fdb23b949794.jpg', '9b3855eeac73ccbb9637bf8cfdc170af.jpg', '70a5a7492a934abf12543dad38b80988.jpg', 'c494cb15aee2c2ba739a33383506bdcf.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 71, 'Rawalpindi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000053, 'Tripod motorcycle for sale', 4, 22, 103, '25000', '2011', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Fully automatic\r\n200 cc\r\nRawalpindi registered\r\nNew tires\r\nVery comfortable drive\r\nModel 2011\r\nContact: 0300 5267798\r\nFor details</pre>', 'fea29891078dc9a3b0706af4ee8d9e13.jpg', 'c94d90bd5a03eca0e7e9071e8d7678bd.jpg', '483b2646a1414ed7fa14906881570fad.jpg', '26a5bf496b421b4a75c9205520a358de.jpg', 'b72bfeabadfc8f3a9b8c3c130ca97536.jpg', 'ed14efb13f7a40a5a534dddbcaef7e45.jpg', 'b946e0c012bacf945c2f7ca4d0eea079.jpg', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 71, 'Rawalpindi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000054, 'Suzuki Alto G1', 3, 17, 0, '78000', '', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Suzuki Alto G1\r\n2007 model\r\n2012 import & \r\nIslamabad registered \r\n100000 mileage \r\nimmaculate condition, Family used car\r\n760000 Final Price \r\n03125796945</pre>', 'a089c1df430d9a28f96345485d8dd84d.jpg', '4512b91a398a37b674c198bfa01c53e1.jpg', '9b1a1c8703823262323d4a5360fa351f.jpg', 'f22a5fc9e2a2d434620bb891e991739a.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 71, 'Rawalpindi', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000055, 'Suzuki Mehraan 1990 Lahore number', 3, 14, 82, '230000', '1990', 'Karachi Central', 'CNG', '120', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>suzuki Mehraan 1990\r\nLahore number\r\nGenuine book\r\nnon main axedent \r\ncomplte restored look like up model\r\nBumbers ... lights ... deshboat... seats ... rxyzine...Gear all over New work done\r\nGood Engine\r\nhalf sulf start\r\nOnly for mehraan lovers\r\nSound System\r\nwoffer \r\namplifier\r\nspeakers\r\nExaust\r\nNew tyres nd allow Rims\r\nnew batrry in warrenty\r\nExchng possible wid Cultus Honda 1995.96 nd.others \r\ndiffernec will be.discuss\r\nFinal prixe\r\n\r\nLoction G.7 near Khada mrkt...\r\n\r\nContact 03365021574 Hammad khan.</pre>', 'c73de75b830c5acd89982a242bc27ae8.jpg', '49b1194e7751e1fa458ac0551a40784f.jpg', '630e9b5e4da33d9d0441074548b7be7d.jpg', '12567e8a97602d8dbc954d292a429cb3.jpg', '520d8811298f1149581d4cf4066e69fc.jpg', 'eff7ee7264faf6505712b863b28b1508.jpg', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 7, 10, 'ISLAMABAD', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000056, 'We required stuff', 6, 38, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Offering Job', '0000-00-00', '', '', '<pre>We required stuff urgent basis</pre>', '78013b2fc0145b9941bcd802aa75eb0a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 7, 10, 'ISLAMABAD', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000057, 'Fellow breeder pair', 10, 79, 0, '2500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Fellow breeder pair for sale helthy & active\r\n03265869086</pre>', '3b9b9860937c273ae4aefb9372aed12b.jpg', '44e576ca410cecb68918e9d8d2b49c7f.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000058, 'talking rinng nack male', 10, 79, 0, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>talking ring neakmale for slia mea mutth bolta ha or visling be kartA HA DANSING BE KARTA HA JIS NA LAYNA HO US NO PA CONTACT KAR LAY 03211733885 LOCATION FED CARGO AVAILABLE</pre>', 'c53a3aefe6b9350a95a722fa518eea49.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000059, 'Exi red eyes and crust red eyes for sale', 10, 79, 0, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>White red eyes exhibition female yellow red eyes exhibition male with round crust female one pair white round crust male with back frill double round crust female for sale contact Sheikh Khuram Sk Birds Faisalabad no 03338977493/03000387860</pre>', '4c2043ec910eacb770bedc0759e831c4.jpg', 'd1e3622e11aa42f5ffee3eeb9b1500e7.jpg', '8cd98346a26df1de1eb843de1faceb9d.jpg', '966a9e82428b59e332e9578e65cee64f.jpg', 'bf91c0b0bf188f41eabc73bbc5be5151.jpg', 'ed8c7e512ca88ddeca4966a68823b599.jpg', '', '', '', '', '', '', 'Baber Ali', '03000387860', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-10', '2018-04-09', 'Unblocked', ''),
(000000060, 'Fallow chicks for sale', 10, 79, 0, '449', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Healthy and active</pre>', '1090d7dcd5e522dbadfffebb7d0e1154.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03236677172', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000061, 'age 5mnth+ loc faislabad 1000 pr pic jis ki samaj me aye wo e rabta kry', 10, 79, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>03084687770 cargo available</pre>', '0485dc74775ae379e42ade31f4e87d32.jpg', '52c9060fd5ca36e6443167701a59caa1.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03084687770', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000062, 'Red eyes for sale', 10, 79, 0, '800', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Red eye available for sale in reason able price in Faisalabad.\r\nCell#:03239644650</pre>', 'ce0906a565f486f7536146ac9740f5fd.jpg', '171eaf7489903f256dc2f6bb483f5954.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03239644650', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000063, 'Urgent sale latino yellow baredr pair 100% female ful lodid ha egg deny wali ha long lenth neet and', 10, 79, 0, '786', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sal sal sal urgent sal jis bhai ko smajh ay wo hi rabta kry.pllllzzzz\r\n03176766601</pre>', '91c71102f512bf6af1c0793dc79d13d9.jpg', 'b65decbfe14bb5a0bc2e85d18cf698f5.jpg', '61bcaa5e8cee019f69a81bdfccb720d4.jpg', '4c2034e7d50248e81bc4be5f77e08180.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03176766601', 'baberali_09@outlook.com', 0, 7, 10, 'ISLAMABAD', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000064, 'Fellow crust', 10, 79, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Fellow round crust pair for sale \r\n03219651496</pre>', '5fa1cbce7acae28ca8c8dbb8610b533b.jpg', '8afa2c409f874f5761ae0606e445e3ee.jpg', '3de8dc6ad3d33fb17d589e0787f88116.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03219651496', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000065, 'Australian piece 2+ month age', 10, 79, 0, '250', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>11 piece Australian pieces 2+ month age.. All pieces are healthy and active.. Per piece price 250 rupee.. All sell togather.. For more detail and video whatsapp no 03068450520...\r\n</pre>', 'bbfab0ee67cbbaab904a9a287556c6e5.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03068450520', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000066, 'Car', 3, 14, 64, '725000', '2009', 'Lahore', 'CNG', '66000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>66000 km \r\nOriginal CNG Kit \r\nAlloy Rim\r\nOriginal Paint\r\nManual \r\nGenuine Engine\r\nAC\r\nLife Time Token "paid"\r\nModel 2009\r\nRegistered 2010\r\nContact\r\n"03244000684"</pre>', 'cf11cd163289897b92b62a4f827a4a8c.jpg', '5a2ca076e4c82333ad85f2378a67e3cc.jpg', '2a85b5f4660abb1e05c4190118ace674.jpg', '3646ae793a6a376d38aaf9b7c0fa0431.jpg', 'dda03021335387cd8a62646585779c9e.jpg', 'c83b2fadcca68ebeec9e38be8512fd29.jpg', '386fda4ccfdfb8908539093def2ff0b8.jpg', 'c390a91fc1a910c7e702851dc3258298.jpg', '', '', '', '', 'Baber Ali', '03244000684', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000067, 'Suzuki Meh-ran 2006 CNG Book Duplicate File Original', 3, 14, 82, '310000', '2006', 'Lahore', 'CNG', '66000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>(03044209720) Call Me And Whatsapp\r\nCNG\r\nNo Accident\r\nHonda 100% Original\r\nAly Rim\r\nNew Tyre\r\nEngine 100%\r\nShalimar Link Road</pre>', '7cf98d7c05f35c94ed163d0244f23e34.jpg', '93f9084341d6430609b2b579fcf27fe8.jpg', '670796801dcbf9254377e1d5add55a21.jpg', '508a1109483d3d4feb1c2a758ddc0582.jpg', '7dff83f845c88cd81253c90b59370dab.jpg', 'a73e0eb4327fbd55cb6bb7b097747467.jpg', '62da47691dba7d9e96c4518a620e7fc0.jpg', '', '', '', '', '', 'Baber Ali', '03044209720', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000068, 'Sony Xperia Z2 Now available', 1, 1, 9, '190000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Assalam u Alaikum\r\n\r\nSony Xperia Z2 limited stock available\r\nCarrier: Docomo\r\nModel No. Z2\r\nOrignal Kit\r\nDeliver all over Pakistan pay cash on delivery\r\nColors: Black, White, Purple ( 16GB )\r\nColors: Black, White ( 32GB ) \r\n7 Days Replacement warranty\r\nAll sets R original\r\n\r\nSpecification\r\n16GB/32GB built-in, 3GB RAM ( microSD, up to 256 GB )\r\nQuad-core 2.3 GHz Krait 400\r\nAndroid 4.4.2 (KitKat), upgradable to 6.0 (Marshmallow)\r\nCamera : Primary 20.7 MP (f/2.0, 25mm, 1/2.3", 1.12 µm), autofocus, LED flash, Secondary 2.2 MP, f/2.8\r\nIP68 certified - dust/water proof over 1.5 meter and 30 minutes\r\n"Screen: 5.2 inches, 74.5 cm2 (~69.3% screen-to-body ratio)\r\nBatery : Non-removable Li-Ion 3200 mAh battery\r\n4g supported\r\nSingle Sim\r\nTouch\r\n\r\nFor Details & Order\r\nCall Now at : 0.3.33-2820668 or You can Inbox as well!\r\n   \r\nCash On Delivery all over Pakistan. \r\nDelivery Charges Rs 200 for Karachi will be applied.Delivery and packing charges outside Karachi Rs. 500 will be applied\r\n\r\nKindly Inbox or Contact at my given number. \r\nPlease do not ask anything in comment section\r\nThanks for cooperation</pre>', '07e9d816459b0f9824bb165bee42bb5c.jpg', '343e400683aa66c56997703c3ee6a2fd.jpg', '58e3896431ec26084008b1f90be3159b.jpg', '954fb4db9943baf57bc088492d1df9a6.jpg', 'cac87e1be5cfd7912fd685524a2f082d.jpg', '', '', '', '', '', '', '', 'Baber Ali', '03332820668', 'baberali_09@outlook.com', 0, 10, 105, 'karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000069, 'Hyundai santro for sale 2007 model', 3, 14, 73, '36000', '2007', 'Lahore', 'CNG', '66000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2007 model Hyundai santro gv company fitted cng, ac working just buy and drive.. only serious buyer contact me\r\n03234019940</pre>', '5ce9993b1f9fe9c5e84eee299bbe7d45.jpg', 'b30292dd14bf8ec67ecc12a699b5e43f.jpg', 'baeed42ff3fda630f7acf0f19a9314eb.jpg', '', '', '', '', '', '', '', '', '', 'waleed mughal', '03234019940', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000070, 'Car', 3, 14, 83, '35690', '2007', 'Lahore', 'CNG', '66000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Toyota belta 1.0 cc model 2007/2012</pre>', '19fdafd2d06090fd700733c6589362a8.jpg', '87e631d9c672d6eba7f0d5d2a13e4200.jpg', 'a794eaaf6a0369b53a6702a73288e52d.jpg', 'd99f0dbeba4906b7bc748e6b3283d927.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000071, 'Honda 125cc. Good condition', 4, 22, 92, '65000', '2014', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Final 65000.\r\nKarachi no.\r\nModel 2014 October.\r\nMob. 03117068040 .\r\nArgent sell out karni he .\r\nPlz contct</pre>', '6761d500fe7a542e0aa9d385fae715c9.jpg', '8771d108b1382fc018858e8d30ab2e6e.jpg', '77741072bc77241a8644e3614c7bf08d.jpg', 'f52b3c699584374387d4298fdcb2621d.jpg', 'd6f5fbff0835819672db652172473e03.jpg', 'eb43743ee5a5aecb95ad1b5cd1512024.jpg', '', '', '', '', '', '', 'Baber Ali', '03117068040', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000072, 'Suzuki GS 150 model 2009', 4, 22, 98, '60000', '2009', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>First owner\r\nCondition 9/10\r\n\r\nSelling it need of money.\r\nEngine absolutely ok\r\nLess body work required worth only 2000rs\r\nExcellent performance\r\nWill be preferred to those who can use it with care.</pre>', 'd90a025c56ed9950287a308c88369afe.jpg', '97bf809f40754429cfd880b28e2ddb5b.jpg', '7dc6561e555b6d193e7c1e07160d77cb.jpg', '95f4c6cfd9a58377ff104d9680c1cfec.jpg', '71babcde866907a125ca8b8ad3c138db.jpg', '5d3c69d394fb0dc917fb984457c3d38e.jpg', '', '', '', '', '', '', 'Sohaib Ahmed', '03335603634', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000073, 'Toyota passo', 3, 14, 83, '76000', '2006', 'Karachi West', 'CNG', '66000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Model 2006/10\r\nMileage 59000km\r\n1st owner \r\nPower window \r\nPower steering \r\nRetractable mirrors \r\n1piece touch up \r\nEngine suspension everything okk\r\nNeat n clean family used car\r\n\r\nLocation : johor morr lasania restaurant \r\nContact # 03142191244</pre>', '275149e44ac5d6f950efe063c7e67cbe.jpg', '13b2fb66931ab2ceb27dea1266eac2c1.jpg', 'b2335a693315426c12fcf6e05a7d04ad.jpg', 'b5423f0a427044456c61187be7b0cd25.jpg', '370ae4447281527cc8f1800b3da800a4.jpg', '5072ed52014fd5d48c9a0d9f23390581.jpg', '', '', '', '', '', '', 'Muhammad Areeb', '03142191244', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000074, 'Toyota corolla', 3, 14, 83, '220000', '2017', 'Karachi South', 'CNG', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Model : 2017\r\nGli auto \r\nFull geniune\r\nMileage: 8000km\r\nPrice : 22 lac little negotiable.</pre>', '3f899a71b7f2c1889f5e829658367113.jpg', '452334587a79094d21920de3dc881c44.jpg', 'eabcf0e3e0f97e03eb0b6f83d7fe37be.jpg', 'b923abd4b60c4f582fdb61f0bb4e2ab2.jpg', '', '', '', '', '', '', '', '', 'Hassan Ul Arfeen', '03335603634', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000075, 'Typing jobs all over Pakistan', 6, 32, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Offering Job', '0000-00-00', '', '', '<pre>Are you want to Earn online ? Join us now and earn online Easily .\r\nIf you still looking for online home based jobs ? Than join us now and start to earn online .</pre>', '69f18a2128500f806e034a0484a1a91b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'fazi baig', ' 03330703624', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000076, 'Breeder pair for sale', 10, 79, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Price on call contact # 0306-4812811</pre>', 'b2665dfb80005baeb338f63a6aac47bd.jpg', '', '', '', '', '', '', '', '', '', '', '', ' Sunny Sid', ' 0306-4812811', 'baberali_09@outlook.com', 0, 12, 70, 'samanabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000077, '????Df Hogo White ???? supeream Quality Cranchi flower Ready to breed pair avaliabale for sale', 10, 79, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Cargo available Tahir Birds Farm 03008434025</pre>', 'd842bb985b78b1e5a813deac2407b414.jpg', 'fc6cdfef0b98dac69cfc01c022a49d8b.jpg', '4d2a83b329ed071df9976268dc5ef63c.jpg', '', '', '', '', '', '', '', '', '', 'Tahir Birds Farm', ' 03008434025', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000078, '2 raw pair for sale only call plz', 10, 79, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>plz cl 03466927906</pre>', '97e7ca7ad95390409ac7a8c00d1a09d1.jpg', '1182b5241691117b9de45ccb41778808.jpg', '6565fec012aadd0e6da83c53a34633e4.jpg', '', '', '', '', '', '', '', '', '', 'Hafiz Azam Ali', '03466927906', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000079, 'Hand tame ( Bolti b hai jab mood ho )', 10, 79, 0, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Cargo Available\r\nContact..03094607175</pre>', '3bce09c05abe5f6744df54986704de86.jpg', 'b4365e77c78d8f2be01b79f03a383140.jpg', '5b0f0d38e85b296325e4b728c915993d.jpg', '', '', '', '', '', '', '', '', '', ' Wasi Butt', '03094607175', 'baberali_09@outlook.com', 0, 10, 107, 'Allama Iqbal Town', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000080, 'ZONG internet devices', 1, 3, 33, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Brand new device AVAILABLE\r\nDiscount price 1899\r\nPlz contact\r\n0313-4022249</pre>', 'e50bd38ecaf3afabe9fc2decaec5840f.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Kashmir Butt', '0313-4022249', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000081, 'TOYOTA PASSO 2014 XL Package', 3, 14, 83, '20000', '2014', 'Rajanpur', 'CNG', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>New shape, Full Option X L package, Push start, Idle stop, Eco Mode, Sofa Seats and Just like a Zero Meter car. Fully maintained through authorized dealership. All service history log maintained. Just imported. Will be sold to nearest offer. Original Book is available. Original return file is available. Non accidental. Fitted with new tires. All token taxes are paid to date. Need to sell the car urgently. Totally driven on petrol.\r\n\r\nContact : 03005504361</pre>', '8710de43dc26b3073dee99c63e22431d.jpg', 'fa8ebd173460d6bba7ff8306ccfa3165.jpg', 'e8c855682300408a361030474f77e134.jpg', '1226dde9a2a1413b29c9053bdeab9a48.jpg', '', '', '', '', '', '', '', '', 'Zain Akhtar', '03005504361', 'baberali_09@outlook.com', 0, 12, 72, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000082, 'Mehran2002 exchange with sentro club ,vxr, coure,cultus', 3, 14, 84, '200000', '2014', 'Rawalpindi', 'CNG', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Mehran exchnge krna chahta hu sentro vxr ya coure k sath gari bilkul gud condation ma hai munsib paisy jo banty huvy sath ma pay kr du ga kisi bhai ny exchnge krni ha to es nbr py whtsapp kryin apni gari ki pic.\r\nPh .03015216070</pre>', 'c9694f1bb96868b672cf8e2deda75816.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Lõvêly Prîñçë', '03015216070', 'baberali_09@outlook.com', 0, 12, 71, 'ISLAMABAD', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000083, 'Lg g4 A Grade American stock', 1, 1, 7, '23000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Lg g4 limited time offer wholesale rate \r\n3gb 32gb sprint american fresh import a grade set \r\nOne week check warranty \r\n\r\n03350555180</pre>', '9c099480f23f1d0b23d1c56b9682ea7a.jpg', '5ec20a3ecc526f5f4a0f3060383aa83e.jpg', '75f759798597f7437f7faf0a0b6bb172.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000084, 'Samsung S7 edge new minor dot', 1, 1, 4, '23000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Aoa calls or inbox only 03119436328\r\nCASH ON DELIVERY AVAILABLE.\r\nSamsung S7 Edge 10/10 condition brand new gurranteed sim not inserted. Blue and silver color available . Only set no packing etc. minor dot in screen see in picrures given. 4gb 32gb memory card supported. Single sim. Location tehsil bazar Charsadda. thanks</pre>', '4e8c91ee1975cfff0c66a763e2438a73.jpg', '986f42966a41bdc564bde1af7a5c6f21.jpg', 'dc618c8262f8c6124781883ef86945dc.jpg', '', '', '', '', '', '', '', '', '', 'ali khan', '03119436328', 'baberali_09@outlook.com', 0, 12, 71, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000085, 'Suzuki Meh-ran 2006 CNG Book Duplicate File Original', 3, 14, 82, '31000', '2006', 'Lahore', 'Diesel', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>(03044209720) Call Me And Whatsapp\r\nCNG\r\nNo Accident\r\nHoda 100% Original\r\nAly Rim\r\nNew Tyre\r\nEngine 100%\r\nShalimar Link Road</pre>', '4ad1a1d766461e6c9922c8d50574b2a3.jpg', '516b8f6c3292e45404abfc2f274b5c7a.jpg', '549cdf72fbeeb976bff7f8004a9d087c.jpg', '39c2fb895bd7f8669e91079522d3da6f.jpg', '', '', '', '', '', '', '', '', 'Efi Motor', '03044209720', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000086, ' Telebrand Lahore', 12, 92, 179, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Massager Slipper – Foot Reflexology Sandals\r\ncall now.0300.4270983:whatsapp.0313.7869141</pre>', '102f5aa7c61bedf565538bc623cc897f.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Telebrand Lahore', '0313.7869141', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000087, 'Telebrand Lahore', 12, 97, 0, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Flawless Facial Hair Remover\r\nCall Now.0300.4270983:whatsapp.0313.7869141</pre>', 'ce8cc822658bc8f54428f27d4b115474.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Telebrand Lahore', '0313.7869141', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000088, 'Designer online shop', 12, 93, 181, '1900', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Laser cut 2 piece suit shirt 2999 rs 2 piece suit</pre>', 'cd5844ef653e6c3269d7d09ce472ff36.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Telebrand Lahore', '0313.7869141', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000089, 'DESIGNERS EMBROIDERED CHIFFON & NET COLLECTION 2018 ', 12, 93, 181, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>DESIGNERS EMBROIDERED CHIFFON & NET COLLECTION 2018 \r\n(MASTER REPLICA PICS R THEIR IN COMMENT SECTION OF EVERY PICTURE) \r\n[FREE CASH ON DELIVERY ALL OVER PAKISTAN.] \r\nTO ORDER SEND US YOUR \r\nNAME, COMPLETE ADDRESS, PHONE NUMBER, CODE / PIC OF DRESS \r\nAND SEND IT TO 03012414804\r\nOR MESSAGE US VIA MESSAGE OPTION ON OUR PAGE</pre>', 'c46e9377cb80df16abe2c86cebecb278.jpg', '4124ae4dcb02b76ce662ecd0f26f8b66.jpg', 'cd12d003c7646d3c93f10c75f51b1523.jpg', '08d78cab08a76c16afed52c132fd7aa0.jpg', '', '', '', '', '', '', '', '', 'Designer online shop', '03012414804', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000090, 'Online Fashion Shopping', 12, 93, 180, '999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Safwa Serene Collection. Volume #1\r\nDigital Print Kurti\r\nFabric Lawn\r\nPremium Super Quality \r\nComplete 3 Meter Shirt\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT! 0321 2774370 \r\nWHATSAPP-INBOX-CALL..</pre>', 'a0838c5809e935404ff7045d9005ad58.jpg', 'cf9d0a13904b4702d6272a6dba02cd95.jpg', 'add6a3661cf6ca3b689e9403e151c198.jpg', '5533a4e0f3c244bb58cb4fdd19d8f0f3.jpg', '', '', '', '', '', '', '', '', 'online fashion shoping', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000091, 'Raw pair for sale', 10, 79, 0, '800', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw pair for sale, contact# 03455897622</pre>', '515e0bce88511972dc892322bb254db4.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Hammad Khan', '03455897622', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000092, 'GREY CHICKS', 10, 79, 0, '28000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>TWO CHIX OF AFRICAN GREY AGE 15 DAYS AVLBL FR SALE IN RWP. 28000 EACH FNF.03419456418</pre>', 'dd13d51dbbdb72fa351fd49b5fb68c5b.jpg', '', '', '', '', '', '', '', '', '', '', '', ' Hamid Mughal', '03419456418', 'baberali_09@outlook.com', 0, 12, 71, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000093, 'Raw chik for sale', 10, 79, 0, '2300', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw chik for sale \r\nFully healthy and active \r\nFully tamed and play full \r\nAge almost 5 to 6 mbth\r\nLahore shahdra\r\n0323.4312343\r\n\r\n</pre>', '8b0cb880d6c6b39cf17433eb69660d6d.jpg', 'b0da4f2d8a2bb50874381e112efa5d44.jpg', '', '', '', '', '', '', '', '', '', '', 'imran sultan', '0323.4312343', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000094, 'MashaAllah red eyes white & yellow', 10, 79, 0, '300', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MashaAllah red eyes white & yellow healthy & active 25 piece for sale contact no 03009727327,\r\nloc ISB RWP\r\n</pre>', '5d97c37b5f39e8014df965a1ae15b10c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Rashid Mehmood', '03009727327', 'baberali_09@outlook.com', 0, 12, 71, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000095, 'Big size under Exi Female & Exi split king male with 5 chicks', 10, 79, 0, '600', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for whatapp 03005596269</pre>', '9b7e9fa6e061399edbf12e6d600a088f.jpg', 'a3713cfc450c736ca6c1f681a0cd99f9.jpg', '', '', '', '', '', '', '', '', '', '', 'Haroon Rasheed', '03005596269', 'baberali_09@outlook.com', 0, 12, 71, 'Lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000096, 'Blue And Gold', 10, 79, 0, '600', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Hand Tamed Blue And Gold Is Available \r\nAge Around 6 Months \r\nLocation Karachi \r\nFor Further Details \r\nCall/WhatsApp\r\n@ 03242885763\r\n\r\n</pre>', '08353050590302875d626ea44651fb3c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Hassaan Aftab', '03335603634', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000097, 'Hagoromo dfs male.', 10, 79, 0, '7000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>1) 1 dfs Albion black eyes self male ( double round crust,frills and double side flower, (5-6,6-8) possible split of red eyes hagoromo) (7000)\r\n\r\nOriginal pics attached and will be whatsapp also .. \r\nLocation is Islamabad (G-13) \r\nContact no 03125108322\r\nCargo available</pre>', '44178c7874f748fd0358e6923412068e.jpg', 'c38a65382506b01960b8b6a31d6c590d.jpg', 'a305db0e6f6fb4c5267ec46f5ff556ae.jpg', '', '', '', '', '', '', '', '', '', 'javeed khan', '03125108322', 'baberali_09@outlook.com', 0, 12, 70, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000098, 'ficher good blood line. pair', 10, 79, 0, '700', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>1 ficher. breader pair \r\nficher. good line line. age 1.5 year . \r\nrawaloindi tench batta. \r\nwhats up 0305.5050702\r\n</pre>', '6ba116b718f96e2ed3d87cbc7afb1073.jpg', 'be94c066e67546d8c4fa40a9f726b0a2.jpg', '0089ddc10a36e05c88e442a88cf33bd6.jpg', '', '', '', '', '', '', '', '', '', 'sahil', ' 0305.5050702', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000099, 'Angle cage good condition ', 10, 79, 0, '850', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Bugries breeder setup for sale with cage.\r\nAngle cage good condition \r\nPrice\r\n850 per pair with doli, matki\r\nCage price 8000 size 6 feet hight and 3 feet front. Price is final.\r\nLocation. Range road rawalpindi.</pre>', '8607b4242cbbacf7fa6443794a47f788.jpg', 'fec6145343c5aa9c0edd61c1df5af34c.jpg', '', '', '', '', '', '', '', '', '', '', 'malik ahmaer', '03215823696', 'baberali_09@outlook.com', 0, 12, 71, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000100, '12 Portion Cage with Birds All Sale Togeather', 10, 79, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Urgently sale All sale Togeather: \r\n0340-8444354\r\n\r\n12 Portion Cage: 6500\r\n1 Red Eye Yellow Pair With Chicks and Eegs: 1700\r\n1 Red Eye White Pair with Eegs: 1300\r\n1 Red Eye Male White Female Yellow with Eegs 1300\r\n1 White Black Eye Pair with Eegs and 1 self Chick 1500\r\n1 White Black Eye with Eegs 1000\r\n1 Budgree Healty and Big size with Eegs 1000\r\n2 Pair Budgrie Breeder 1700</pre>', 'a0d96089dab275d5536e99971e2ad51d.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Muhammad Touqir', '03044209720', 'baberali_09@outlook.com', 0, 12, 71, 'lahore', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000101, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Maria b lawn new collection now available in 2 colors\r\n*Front back and sleeves full embroidered* \r\nTrouser bunch embroidered \r\nTrouser printed\r\nNeck embroidered \r\nDupatta plain on chiffon\r\nPearls given\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '95d8876c1f967cceb876b736700a78b4.jpg', '', '', '', '', '', '', '', '', '', '', '', ' Maham Siddiqui.', ' 0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000102, 'Maham Siddiqui.', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Maria b lawn new collection now available in 2 colors\r\n*Front back and sleeves full embroidered* \r\nTrouser bunch embroidered \r\nTrouser printed\r\nNeck embroidered \r\nDupatta plain on chiffon\r\nPearls given\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', 'a5570cf8a9456970ee8ec9e0c39d0f52.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '0321 2774370 ', 'baberali_09@outlook.com', 0, 4, 11, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000103, 'Online Fashion Shopping', 12, 93, 181, '22000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Maria b lawn new collection now available in 2 colors\r\n*Front back and sleeves full embroidered* \r\nTrouser bunch embroidered \r\nTrouser printed\r\nNeck embroidered \r\nDupatta plain on chiffon\r\nPearls given\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '3cdee7a34f8ccafcbaa0e18a2c791ab9.jpg', '', '', '', '', '', '', '', '', '', '', '', 'fazila baig', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000104, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Maria b lawn new collection now available in 2 colors\r\n*Front back and sleeves full embroidered* \r\nTrouser bunch embroidered \r\nTrouser printed\r\nNeck embroidered \r\nDupatta plain on chiffon\r\nPearls given\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '165eaddcaff8f90c7ad173dd2aed9a81.jpg', '', '', '', '', '', '', '', '', '', '', '', 'fazi baig', '03044209720', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', '');
INSERT INTO `post_ad` (`id`, `title`, `main_cat_id`, `sub_cat_id`, `brand_cat`, `price`, `year`, `registered`, `fuel`, `km`, `veh_condition`, `furnished`, `bedrooms`, `bathrooms`, `floor_level`, `area_unit`, `area`, `job_type`, `event_date`, `website`, `4th_cats`, `descriptions`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `full_name`, `phone`, `email`, `show_email`, `province`, `city`, `city_area`, `address`, `published_date`, `expiry_date`, `status`, `reason`) VALUES
(000000105, 'Online Fashion Shopping', 12, 93, 181, '1141', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Maria B Casual Wear\r\nLawn With Chiffon Dupatta\r\n\r\nFull Embroidered Lawn Front\r\nEmbroidered Neckline\r\nPrinted Lawn Back & Sleeves\r\nFront Heavy Embroidered Daman\r\nHanging Tussels For Sleeves & Front Daman\r\nSleeves Embroidered Patch\r\nPlain Chiffon Dupatta (2 Sided Lace Included)\r\nCotton Trouser\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '45ed90b40e337ee8b24729d6f6edf903.jpg', '', '', '', '', '', '', '', '', '', '', '', 'waleed mughal', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000106, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>******** Agha noor net *******\r\n\r\nAgha noor net embroidery suit net embroidery duppatta now available master replica\r\n\r\nFront full dori embroidery \r\nSlvees embroidery \r\nBack embroidery Daman \r\nDaman embroidery \r\nWith iner \r\nPlan trousers \r\nNet embroidery duppatta \r\nNow available master replica\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '831960d7e8a5ff6140b16c3cb5efb65a.jpg', 'bfe25bb5fad0dd0bf299a0b25393b447.jpg', '', '', '', '', '', '', '', '', '', '', 'Muhammad Areeb', '0321 2774370 ', 'baberali_09@outlook.com', 0, 11, 58, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000107, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Printed-Lawn | 3-Pieces |\r\n\r\nNote: *All suits are with original packing*\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', 'fc10a803ae74a58e8e6ee19385d26a86.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 11, 46, 'dera isMAIL KHAN', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000108, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Printed-Lawn | 3-Pieces |\r\n\r\nNote: *All suits are with original packing*\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '6e3a73f45f288980e5643b269e6608d8.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 86, 'GUJRAT', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000109, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Printed-Lawn | 3-Pieces |\r\n\r\nNote: *All suits are with original packing*\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', 'd5a2c3130f64940d46d60b265ff52a03.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000110, '*Myntra Embroidered Chiffon Saree-', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#BLACK\r\n#RED\r\n#NAVY_BLUE\r\n#DARK_GREEN\r\n\r\n*Fabric* \r\nChiffon (Saree and Sleeves)\r\n*Embroidery Details* \r\n• Embroidered Fully Sequined Heavy Saree \r\n• Embroidered Sequined Saree Pallu\r\n• Embroidered Sequence Saree Pallu Border\r\n• Embroidered Sequence Blouse\r\n\r\n*PRICE_3450/-fixed*\r\n*Deleivery from Thursday*\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '55faaafc510d95e74ac533c689bd0944.jpg', 'c3a565ffae7d2a3e7450266d4034cf49.jpg', 'c7795e3b5dc4b161fc34a9f4927d92c9.jpg', '6b4b033dd3c5537a4d1b8953cd995b27.jpg', '', '', '', '', '', '', '', '', 'fazi baig', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000111, 'Online Fashion Shopping', 12, 93, 181, '2200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>DELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..</pre>', '8ff176fc93163bab2d2d54aa29e646d0.jpg', 'e9260cf09e1f19d5ff726ecf34ef7d85.jpg', '', '', '', '', '', '', '', '', '', '', 'waleed mughal', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000112, 'Online Fashion Shopping', 12, 93, 181, '2599', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>*PRICE_2599*\r\n\r\nBrand Maria.B Available in Lawn fabrics 3pc !!!\r\nFront fully heavy emb \r\nDaman heavy patch emb \r\nSleeves patch emb \r\nDupatta Bamber chiffon emb\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', 'b1b43fd085d4726fe8bb5db50e2b777c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Muhammad Areeb', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 71, 'Faisalabad', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000113, 'Online Fashion Shopping', 12, 93, 181, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_3099\r\n\r\n#KHAANI WEAR \r\nPink Dress with Jamawar trouser and chunri dupatta, to enhance the beauty of the dress.For a smart and elegant look *FABRIC OVERVIEW:*\r\n*Full Chiffon Suit. *Banarsi Trouser. *Chunri Soft Silk Dupata with 4 side Piping Appliqué. *EMBROIDERY DETAILS:*\r\nEmbroidered Neck Lace.\r\nFront Full Embroidered. \r\nBack Embroidered. \r\nSleeves Embroidered with Embroidered Lace.\r\nFront Embroidered Daman. \r\nBack Embroidered Daman.\r\n\r\nDELIVERY CHARGES 100/- ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '96873d21d6996f4eeb1c42b8fbbd0a0a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000114, 'Pack Of 3 Cotton Stuff T-Shirts', 12, 93, 180, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1099\r\n\r\nPack Of 3 Cotton Stuff T-Shirts\r\n\r\nMedium Large XLarge\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', 'a31ab1fe5025b993e5425a9ebc3724f2.jpg', 'b2362d1f41e033677e444081b728085c.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'HYDRABAD', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000115, 'ONLINE SHOPING', 12, 93, 181, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#FizaAli Wearing #Kashees Master Replica Now Available..????\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 ...\r\nSee more</pre>', 'd0dc408fe7df3babf6436c3b06dd60c2.jpg', '', 'ca0bf2f4520365cd45dd72c797698050.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000116, 'Mariab lawn casual collection.*', 12, 93, 181, '2300', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>*PRICE_2400*\r\n\r\n*Mariab lawn casual collection.*\r\n\r\n*Fabric detail.*\r\nShirt pure 80/80 lawn.\r\nTrouser cotton. \r\nDoptta chiffon.\r\n\r\n*Embroidery detail.*\r\nEmbroiderd front.\r\nEmbroiderd neck line.\r\nEmbroiderd daman lace.\r\nEmb sleeves.\r\nEmbroiderd sleeves lace.\r\nEmbroiderd matha patti chiffon dupatta\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', '52b23555ba2a06e3e787b4a0a5d71d1b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000117, 'Brand Maria.B ', 12, 93, 181, '2400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Lawn fabrics \r\nFront fully heavy emb work \r\nSleeves fully heavy emb \r\nSkeeeves patch emb \r\nDaman patch emb \r\nTrouser fully heavy emb \r\nDupatta Bamber chiffon emb\r\n\r\nDELIVERY CHARGES 100/- ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', '31c69e805b2d4c02f3818a5d30daa268.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'HYDRABAD', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000118, 'Online Fashion Shopping', 12, 93, 181, '2400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_2699\r\n\r\n“MONIKA” Brought to you most demanded design of Maria B Voyage. Out class work for the consumers who prefer to wear Orignal.\r\n*SEALED BOX PACKING*\r\n\r\n- Gala Lace given.\r\n\r\n- Front lawn Printed.\r\n\r\n-Daman Embrioded With laser boring new technology.\r\n\r\n- Back Printed lawn.\r\n\r\n- Asteen Lawn Printed .\r\n\r\n- Asteen and Daman Marble Perls given.\r\n\r\n- Dubata Net Embrioded Aprox 3 yards.\r\n\r\n- same Cotton Trouser with Embrioded Bunch.\r\n\r\n- Marble Perls given for takai Work.\r\n\r\nThis item is made from Orignal with difference from Orignal.\r\n\r\nDELIVERY CHARGES 100/-\r\n\r\nALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '8a3bd66c70aa8816fe6da8afa969a290.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000119, 'ONLINE SHOPING', 12, 93, 181, '2400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_2700 LIMIT QTY\r\n\r\n*RANGREZA LUXURY LAWN 2018*\r\n••••••••••••••••••••••••••••••••••••••\r\n\r\n*FANCY LUXURY HEAVY LAWN EMBROIDERED COLLECTION 2018)*\r\n•••••••••••••••••••••••••••••••\r\n\r\nWith*\r\n\r\n*(NET EMBROIDERED DUPATTA COLLECTION)*(80/80 Lawn)\r\n=======================\r\n\r\n*Neck embroidered in Tissue *\r\n*Full Front Heavy embroidered in lawn *\r\n*Net Sleeves embroidered *\r\n*Back bootian Embroidered In lawn*\r\n* Trouser Lace Embroidered In tissue*\r\n*Net embroidered Dupatta with 4 sided Indian Light copper lace appliqued*\r\n*Dyed Matching Trouser*\r\n\r\n*(Same as picture)*</pre>', 'd6310ba0c4ea1d0bd1e6d21bf1af4c05.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'Karachi', '', '2018-03-11', '2018-04-10', 'Unblocked', ''),
(000000120, 'Suzuki cultus 2010', 3, 14, 82, '30000', '2010', 'Karachi South', 'Petrol', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Suzuki cultus 2010 outside tochup inside orignal mint condition slightly negotiable.\r\nCont:0322 8800888\r\n</pre>', '083eb3714d38266e73c042d5b6a99261.jpg', 'a7ec67546daff6c4db8ea5575b1fdf81.jpg', '091fe67b33c2d371beed8362bf8c024d.jpg', '0772c027b6332d4a7cabe46704a4fdaf.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '0322 8800888', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000121, 'Imported shoes', 12, 94, 183, '500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Jelly shoes on pre-order \r\nFor order inbox or WhatsApp\r\n03320643500</pre>', '82b95f44c5d351f137c89c4110a34397.jpg', '43441069de67911bf4d915b738e370a8.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03320643500', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000122, 'Imported shoes', 12, 94, 183, '500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>jelly shoes on pre-order \r\nFor order inbox or Whats App\r\n03320643500\r\n</pre>', '55d9a53248bc2966b3f3d8a9a7219115.jpg', 'f1e2b940c0d9f58970093855964687a5.jpg', '3d9dd268c51fe50c7574335270bc9cae.jpg', 'df7931e4f2bca822427bb6cce443fcba.jpg', 'c54eaa55daf3466f69b7fa37cac1dbc8.jpg', '1fa9ea24d6269a2fdeadc224b0c2ecf2.jpg', 'f8bcad811bfd3b8b69c38045eb46253b.jpg', '', '', '', '', '', 'Baber Ali', '03320643500', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000123, 'Alto imported 1000cc manual gear model 2011 registered 2014 in excellent condition', 3, 14, 64, '300000', '2009', 'Karachi South', 'Petrol', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Alto 1000cc England version model 2011 registered 2014\r\nmanual gear \r\nAbs , power steering , power window, keyless entry, Anti theft mobilizer system , new tyres installed,\r\nand All features which a new generation car have.\r\nchilled Ac. CD player\r\nlow milage 19140\r\nfeul average excellent upto 15 to 20 km per litre\r\nfor more information call on 03423192162</pre>', 'a62e9e841ecb4f5a687ae8307abdc9ac.jpg', '43a4bc21a86817453dd71093188cfeb5.jpg', '141eb0a6ae4d410a23c0f2a9f06f1a85.jpg', 'e7bace4ad7f6898dffb2ba723dd20b35.jpg', '', '', '', '', '', '', '', '', 'Ghulam Sarwar Lakho', ' 03423192162', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000124, '3D Bed Sheets', 12, 92, 179, '600', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>FABRIC: COTTON SATIN (Made in China)\r\n3 PIECES SET\r\n(1 BEDSHEET SIZE 230x260 CM & 2 PILLOW SIZE 50x70 CM)\r\nCash on Delivery - Delivery charges Rs. 149/ only - Delivery all over Pakistan\r\nFor order call/sms/whatsapp at 03102381514</pre>', 'ce4febe5f096f7f0b14bd1d860457d56.jpg', 'e994a2e15f7c0411cda99d772ba23f8a.jpg', '8cc46232d6779717e3ccbec79e3a175a.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03102381514', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000125, 'Diamond and pearl Jewellery', 12, 95, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Diamond and Pearl American Jewellery\r\nCash on delivery all over Pakistan\r\nFor order and details call or whatsapp\r\n03463226392 (whatsapp)\r\n03311392115 ( call or text)\r\nDelivery charges 250/- all over Pakistan.</pre>', 'c13e3344a5a395778618955c109fc1a3.jpg', 'fef3cec2f4ce7140412d99976208d182.jpg', 'ecdc1c72b35849804f405a81b43941da.jpg', 'f2546bee8f8f286373184c9eb07bfd97.jpg', '11ab84e98b27e753dc82fb1af8d9b348.jpg', 'ec0eee9cd6a3082d2f21cd8a2629625c.jpg', 'c8edc8ee4a10614f116846b17c5c947c.jpg', '', '', '', '', '', 'Baber Ali', '03311392115 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000126, 'AL RAZA JEWELRIES', 12, 95, 0, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>ALL. JEWELLERY VIRAITY COLLACTION\r\nAD. Amrican diamond. ZARCOON\r\nKUNDAN. ITLY. VIRAITY\r\nINTRUSTED MEMBER INBOX MSG\r\nALL. PK. CASH & DELIVERY\r\nINBOX MSG SMS CALL. \r\nWHATSAPP. 00923408677866</pre>', '248dc8909b49585f435bb521f404c279.jpg', 'ae4d6a46cb904953a8d7366ab6921a29.jpg', '928ef3aec14349b745f8f084260b7cd1.jpg', '5879c10d75572d267f6e2f9572ce97e9.jpg', '', '', '', '', '', '', '', '', 'M Waseem Raza', '03408677866', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000127, 'AL RAZA JEWELLERY', 12, 95, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>ALL ITEAM JEWELLERY AVAIL\r\nINBOX CONTACT & SELACT ITEAM PIC SEND\r\nINBOX CONTACT MSG SMS\r\nWHATSAPP. 00923408677866</pre>', '42577b022439a67710495023778534c9.jpg', '7834f78db0c2198f583915a80fe990b5.jpg', 'ad1866975d8f0f57390833ffdde2fe13.jpg', '9bf6c29a5ad328666452b4a439a0f95b.jpg', '', '', '', '', '', '', '', '', 'waleed mughal', '03408677866', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000128, 'AL RAZA JEWELLERY', 12, 95, 0, '1100', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>ALL ITEAM JEWELLERY AVAIL\r\nINBOX CONTACT & SELACT ITEAM PIC SEND\r\nINBOX CONTACT MSG SMS\r\nWHATSAPP. 00923408677866</pre>', 'b2c5849b31e09ea5ec07c9ac56fb3c18.jpg', 'b2433df26a4c164e2b75cd468a157730.jpg', '', '', '', '', '', '', '', '', '', '', 'M Waseem Raza', '03408677866', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000129, 'online job', 6, 32, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Offering Job', '0000-00-00', '', '', '<pre>part time me typing kr k pese kamao </pre>', '7c5fb8904f5973ad3961ee4aec7dead8.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03335603634', 'baberali_09@outlook.com', 0, 11, 58, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000130, 'special offer on suzuki bikes only for this month . easy installment registration free only for thi', 4, 22, 98, '12000', '2009', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>special offer on suzuki bikes only for this month .\r\neasy installment \r\nregistration free only for this month \r\nrequirement\r\nsalary minimum 26000\r\naj hi apni gari book krwaen or chalaen apni gari for mor detail. contact 03472540254\r\n03040922115\r\n\r\noffer just for this month\r\n\r\n</pre>', '5de88ab2f07e4be22bee86bdef86250d.jpg', 'f8689486c90217414e25de882ac5e5d5.jpg', '', '', '', '', '', '', '', '', '', '', 'Abdul Rehman Ali', '03472540254', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000131, 'Mansi Cotton House', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Catalogue -Always Vol-27\r\nRate -275/-Per Pc\r\nTop :Crepe\r\nBottom :Crepe\r\nDupatta :Silver Chiffon\r\nNo.of Pieces -240\r\nTotal Rate -6600/-\r\nType : Materials\r\n\r\nOnly wholesale\r\n\r\nFOR ORDER & INQUIRY:\r\nCall / Whatsapp : +91 7485958567\r\n\r\nwww.wasap.my/917485958567 to buy</pre>', '546c363f205361aa8ee560d35bb87b68.jpg', '6162db13f2818d1194750b3d7e82ef79.jpg', '42157dcf172fa926e91a99625f2cb14c.jpg', '', '', '', '', '', '', '', '', '', 'Fatima Quraishi', '91 7485958567', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000132, 'Toyota Pixis Model 2013/Registration 2017', 3, 14, 83, '99000', '2013', 'Mandi Bahauddin', 'LPG', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Toyota Pixis\r\nModel 2013\r\nRegistration 2017\r\nIce blue color\r\nChilled AC\r\nOriginal mileage 60000\r\n3 Piece touch up. Not a major Accident\r\nDemand almost Final 990000\r\n\r\nNo work required, just tyres needs to be changed\r\n\r\nContact 0321-2888047</pre>', 'b8cd7e40906e8e3b758adf37f2d17734.jpg', 'decc2bfe95b99a0149cbe1135b1d0d22.jpg', '25a9bade752a9b793cace9b845e6e395.jpg', '4ec16deb4a034df66f6d73e602400bfb.jpg', 'a19278ad07143f8d48f251e09c460881.jpg', 'cc70c4091b74b56379a6666540905e39.jpg', '', '', '', '', '', '', 'Zubair Saleem', '0321-2888047', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000133, 'Original Condition Red Charade', 3, 14, 67, '60000', '2010', 'Karachi South', 'CNG', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Daihatsu Charade Original Condition Like New Car\r\nInside full original outside tuchups\r\nCng fitted\r\nNew Tyres\r\nComplete documents return file tax paid\r\nCplc clear original number plates and tickly everything is available\r\nGood engine suspension and excels\r\nFor more details and price please call on 03332151278\r\n\r\n</pre>', '4d142c1c79ff5e19cbe05671604b4061.jpg', '9c814683f976d0bfc345dcbd38100c60.jpg', '65098ab25d8122851dbcf9b98281a2f5.jpg', '', '', '', '', '', '', '', '', '', 'Abu Emad', '03332151278', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000134, 'No fult on the my bike', 4, 22, 99, '25000', '2017', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>intrsted people cl me this no\r\n\r\n03161053539</pre>', '8db81fb9394086eac5e18f278b8070f0.jpg', 'de4ea1234d5fe478b366a54a6ab870c4.jpg', '200b58e4bea4ec0157f2177fe9baf4ec.jpg', '87feba06800d3daa24fec129c17ec951.jpg', '', '', '', '', '', '', '', '', 'faisal khan', ' 03161053539', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000135, 'Hi roof 86', 3, 15, 0, '260000', '2016', '', '', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Urgent sale karni hai all documents clear hain jo serious buyer hun wo hi inbox karen \r\nContact 03421443243</pre>', '4d2265bff1fe3887008ba207a7cc86d5.jpg', 'bec548e22b45878d22ca009b5f32cc3f.jpg', 'a72cced88ddaf7926b524e1274fc7660.jpg', '8cb1f6d4590741011ef318a23fc4b26e.jpg', '', '', '', '', '', '', '', '', 'Shoaib Sheikh', ' 03421443243', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000136, 'Cultus 2006 vxr', 3, 14, 65, '50000', '2006', 'Karachi South', 'CNG', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Car is in mint condtion\r\n2nd owner\r\nac/cng/petrol/allowrim/central locking\r\nwill be sale on urgnt basis coz need money\r\nfarigh log stay away from this post \r\nlocation gulshan e iqbal \r\nAbul Hasan Isphani Road\r\ncntct 03422620137</pre>', 'e7a73f43d675f67b5428019319e6994e.jpg', 'f5e60bd8bb60c883093669da95b8caa6.jpg', '4d804f0971b8554ecc69f8a21e44cfd5.jpg', '', '', '', '', '', '', '', '', '', 'Rabi Khan', '03422620137', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000137, 'suzuki khyber swift 89', 3, 14, 82, '30000', '2006', 'Battagram', 'LPG', '5000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>new tyre\r\nallyrom \r\nnew engine\r\naam bofer aosam sound system\r\nprise 210000\r\ncplc clear tex paid\r\nnote sirf ec liye sell kr r hu k time nhi hota chalane k pora month hojata h\r\nfalto ofer s perhaiz kre\r\ncontact 03423480774\r\nsystem</pre>', '625506790fb84fa5b10dda0ac3fd22dd.jpg', 'c6b3c161ad109981e469d482133dcb01.jpg', 'b4d3651038e5e7700afc5e512d0e105c.jpg', '', '', '', '', '', '', '', '', '', 'pasha bhai', '03423480774', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000138, 'A.Rehman Rent A Car', 3, 14, 80, '900', '2017', 'Kachhi (Bolan)', 'LPG', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Vigo prado corolla civic All latest models available on rent \r\n03110286433</pre>', 'bb16a1015f23874929ce4c8bf4891aa8.jpg', '71c70c95fbefbf7d39b0617c6a78ee36.jpg', '', '', '', '', '', '', '', '', '', '', 'aqeel rehmaan', '03110286433', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-12', '2018-04-11', 'Unblocked', ''),
(000000139, 'chevolet 2004 cng petrol power stering new alloyrims new tyre ok engine cd plyr ac ok gass dalegi $320,000', 3, 14, 82, '44754', '2017', 'Chakwal', 'LPG', '89999', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>plz for more detail 03100024922\r\n03158946386\r\n03232553649</pre>', '35182155717150b8323647c072bd2591.jpg', 'c8ee58219fdfc1da9e6bd6c20b19bdc5.jpg', '2e7e50bfe9a823eaf8f12ee99cdddc75.jpg', '', '', '', '', '', '', '', '', '', 'kashif baig', '03232553649', 'baberali_09@outlook.com', 0, 10, 114, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000140, 'Toyota Gli 2017', 3, 14, 83, '24532', '2017', 'Faisalabad', 'CNG', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>We deal all kinds of vehicles and all kind of property Finance in easy installment on 20% down payment \r\ncontact me on Phone Call\r\n\r\nMonday to Saturday \r\n9:30 AM to 5:30 PM \r\nPak memon impax (pvt)ltd\r\nC.R.O:Asra\r\nContact Number =03040447130</pre>', '5bc19b3271ff63dc69aaeccaeeb1b9ba.jpg', '', '', '', '', '', '', '', '', '', '', '', 'asha pami', '03040447130', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000141, 'camera', 2, 4, 35, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>New camera with 2 leans \r\nFor shoot \r\nContact us 03167006662\r\n03024887779\r\n\r\n</pre>', '6dd8ff4fbd325410c6cad9bf003125ef.jpg', '', '', '', '', '', '', '', '', '', '', '', 'talha javed', '03024887779', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000142, 'Available lawn embroidery', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Available lawn embroideryInbox or wtsapp\r\n+923074022210</pre>', '20bacda472e9031e00fd3593fc9235b3.jpg', 'fdaaf7fb012060cb26ea0fb447687cc9.jpg', '32b7c269d6d8ca76e8c64b8df218b07c.jpg', '360c3c214d3743004fb1bc38a1424486.jpg', '', '', '', '', '', '', '', '', 'Komal Kamran', '03074022210', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000143, 'shoes Collections House', 12, 94, 183, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Tory Burch, Aldo & VJ slippers\r\nSize: 36-41\r\nSize: 36-42 Tory Burch \r\nRs 1800/- Free Delivery \r\nCash on delivery All over Pakistan \r\nTo place order Inbox or WHATSAPP 03232396123</pre>', 'ab5d7392ec6eb9be192f9f1850c46325.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Saad Munir Advani', ' 03232396123', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000144, 'brst juwerlry shop online ', 12, 95, 0, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Like & Follow: www.facebook.com/voguishGM\r\nPrices mentioned on pictures\r\nAvailable on Order\r\nFor more Information join our page or whatsapp: +923315302019\r\n????????? MOON CUT MALA SET ?????????\r\n(GOLD PLATED) ????\r\nColors can be customized \r\nPrice:6600 PKR\r\nTo book your order inbox us wwwor whatsapp +923315302019\r\nDelivery is free with in Pakistan ?????????????</pre>', '1b36f94037eec74e28945035b3cd130c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Voguish GM ', ' 03315302019', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000145, 'Lawn 3 piece', 12, 93, 181, '12000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>\r\n03084156228 WhatsApp Number \r\nOrder here now \r\n2500Rs\r\n\r\n</pre>', 'f664d0127cea9be38e4b8bf2ebecb69f.jpg', '8ddc6b6b4674648cb84a7e3d09df2c19.jpg', '4360348245b0b81c1572cb4a0256ad7e.jpg', '', '', '', '', '', '', '', '', '', 'fazi baig', '03084156228 ', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000146, 'Azadi Offer Samsung Note 5', 1, 1, 4, '23999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Samsung Note 5\r\nAzzadi Offer\r\nValid till 23rd March\r\n\r\nFixed Price\r\nCash on Delivery all over Pakistan\r\n500Rs Delivery charges\r\nFor Delivery send detail to\r\n\r\n03068833270\r\n\r\nName \r\nCity\r\nAdress\r\nPhone no.\r\nModel no.\r\n\r\nFacebook Page: fb.com/Cellarena.pk\r\n\r\n</pre>', 'b31eaab9b2bbda093b4215dcd0a09b9d.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03068833270', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000147, 'I am selling my samsung galaxy s5', 1, 1, 4, '21000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>I want to sale my samsung galaxy s5 original without logo , 2gb ,16gb ,best camera ,battery tym is awesome and just ,not a single scretch ,charger + handsfree ,\r\nUrgent sale krna ha , serious buyers contact : 0310-2523658 only whatsapp ...\r\nJungayish ho jaye gii</pre>', '12804a7769dc8f85f2a8e00c6cc8d193.jpg', '14eb2bf91aa40f2bfd86ce01e5414759.jpg', 'eed9c9dad2b37991872ba4e5908e2963.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0310-2523658', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000148, 'Islamic Car Finance (PMI)', 3, 14, 83, '210000', '2017', 'Faisalabad', 'CNG', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Get Your Car On Easy Installments.\r\nPak Memon Impex (LTD)\r\n2005 To 2018 Model Ki koi b Car Finance Krwayen.\r\nContact For Details.\r\n0303-7974388</pre>', '5be48320daf8ae93cca90637de11ed9a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0303-7974388', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000149, 'Wagonr vxl', 3, 15, 0, '3465', '2017', '', '', '7800', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>New wagonr vxl zero meter \r\nSilver color.\r\nUnregistered.\r\nShowroom delivery.\r\nAvailable in islamabd and rawalpindi.\r\nFor demand inbox.\r\nOr call on given number\r\n03217334799.</pre>', '758dfcf162e58fc77399d03bfd0e2f7e.jpg', '397169eb11e1ac52b3f7335ead21267c.jpg', '6ff6f68ffc8bd13c2df146d8114fbc2f.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03217334799.', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000150, 'Brands Replica', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>High Quality Replica by #Dawood_Textile\r\nShopkeeprs and Onlune Sellers inbox or whats app pr rabta krain Thanks\r\nWhats app 0300-0737068</pre>', 'b68025cb655ca9378217eb9553a540eb.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 0300-0737068', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000151, 'Deess', 12, 93, 181, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Inbox 4 order or Whatsapp\r\n03360214097\r\nFree delivery all over Pakistan</pre>', 'f75b8d3f9256f4259774d6f2da30ed66.jpg', 'eba06757cc39bab6e8e0ae3e739f32b1.jpg', '7374e22e9bccc3e914d99676f486945f.jpg', '843b07f8c65fbafe0e97980b61617379.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03360214097', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000152, 'deress', 12, 93, 181, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>*NOW HIT DESIGN NOW IN SILK*\r\n\r\n*Brand....Crimson Digital Print*\r\n*Fabric...Shamose Silk (3 Pcs Unstitch)*\r\n\r\n*MASTER REPLICA*\r\n\r\nThis Design includes:\r\n\r\n*Digital Print Front Along With Embroidered Bunches*\r\n\r\n*Digital Printed Back & Sleeves*\r\n\r\n*Digital Print Silk Dupatta*\r\n\r\n*Brand Stamp*\r\n\r\n*Satin Silk Trouser*\r\n\r\nPrice for inbox call or WhatsApp \r\n0092-321-8261554</pre>', 'b4202288593f1e9ae2b22b3b7739c16f.jpg', '383e8b8067d5b71222f6fa55c3048a62.jpg', '14c8cb1c72e1f1a03ee2dccbc58faca5.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03218261554', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000153, 'Discounted offer Women anklet kohlapuri chapal', 12, 94, 183, '1600', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Discounted offer Salee!!! Women anklet kohlapuri chapal - just 1600/- size: 7, 8, 9, 10, 11, 12..</pre>', '5d18289f673ec85d9439901fb73e314e.jpg', '9ba40a66ed3c815d3fa381d0e5e3d62e.jpg', 'beec32a863de914925e5e01c979b4403.jpg', 'debf766cc894c71f3e8029d01162432f.jpg', '', '', '', '', '', '', '', '', 'sadia khan', ' 03089070668', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000154, 'women dress ', 12, 93, 181, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>https://www.facebook.com/authentic.naurang.collection/posts/971225729709097</pre>', '737e48ae0c85efb6a7f059ac7b63f438.jpg', 'd856aea01e621aa03e28648c3201db32.jpg', '5a12103e207dad382de5c304b8e3e8b6.jpg', '', '', '', '', '', '', '', '', '', 'sadia khan', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000155, 'women dresses', 12, 93, 181, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for cal more detail available 3 piece chaffijnsuites\r\nWhatsApp 03168924500</pre>', '7204a99bacc24f7d3e6a24474e36d778.jpg', '9f1e06d66099cf43a5f00a29f862a2e4.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03168924500', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000156, 'women deress', 12, 93, 181, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Ladies dress\r\nFree home delivery \r\nWhatsapp 03439515034\r\nRs:1650\r\nInbox for details</pre>', '553b4b7c687749a8f1bed3cae038db83.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03439515034', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000157, 'Sony Xperia Z4', 1, 1, 9, '15000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sony Xperia Z4 \r\nModel : SOV31\r\nSpec:\r\nDisplay : 5.20" Inch\r\nBattery: Li-Ion 2930 mAh\r\nInternal memory 32 GB MicroSD, microSDHC, microSDXC (up to 128 GB)\r\nRAM memory 3 GB\r\nProcessor : Octa Core\r\nCamera: Front 5.1 Mpx , Back20.7 Mpx\r\nRs: 15500/=\r\nTo place order contact on 03234159555</pre>', '655494d88d5b6909c5ee005f795c92b8.jpg', '0acfbadb880fe7956b9c77261201630a.jpg', 'c1398c4672810237760b0d9107024058.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03234159555', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000158, 'Civic reborne 2010 auto', 3, 14, 68, '200000', '2009', 'Karachi West', 'CNG', '8800', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Fully maitained car driven throught petrol\r\nUrjent sale\r\n03332392315..</pre>', '1450bc6ec81e35cafb706b1ba1f76f44.jpg', 'ca6c9831f5b76a4ba272f23aa7f0d806.jpg', 'd0c293be1bbaa51291a8e594702ed98d.jpg', '', '', '', '', '', '', '', '', '', 'Muhammad Adeel Awan', '03332392315', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-13', '2018-04-12', 'Unblocked', ''),
(000000159, 'honda civic 2005 manual', 3, 14, 67, '700000', '2006', 'Karachi East', 'Petrol', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>URGENT SELL!!\r\nIm selling my honda civic car \r\nIts in good condition \r\nJust buy and drive \r\nChilled AC\r\nNew tyres new battery \r\nAll papers clear\r\nThroughout petrol \r\nHalf self start\r\n\r\nTo contact: 03361871288</pre>', '132b5a8c35f8350bed80ec78a27fe5db.jpg', '9613fe65b9b16f7eeda2e6e871427e1a.jpg', 'e6305dd0acab1c1b70c4202d6b9b87b6.jpg', '75de16f9e2243c8e66c143d39f9cce62.jpg', 'cd65d4397f153dd2b9c99be8594802cb.jpg', 'c6d830c649f3449ec45f1d8bdb07c55f.jpg', '9f7ab63b683feb1a62c4cb885a797c01.jpg', '', '', '', '', '', 'Muhammad Shahzaib Khan', '03361871288', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000160, 'Suzuki Cultus On Esay Islamic Financing', 3, 14, 82, '20000', '2100', 'Lahore', 'CNG', '7000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>{DB Consultant Group }\r\nBuy it only in Rs. 21400 / month. For further details \r\nContact : Aijaz Ahmed\r\nCell #03002152313 , Whatsapp # 03312320082\r\nEligibility :\r\nSalaried, Land Lords, & Business individuals.\r\nRequirements:\r\nAge : 21 - 60\r\nBank Statement : 6 Months\r\n1. Bank Maintaining Certificate\r\n1. Utility Bill Copy\r\n1. CNIC Copy\r\n2. Past port Size Photos</pre>', '717e26cbfec08480e84751f06779dfc7.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Aijaz Aijaz', '03312320082', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000161, 'Toyota Corolla Altis 1.8 S.r Model 2010', 3, 14, 83, '110000', '2010', 'Karachi East', 'CNG', '88000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Toyota Corolla Altis 1.8\r\nSr Sunroof\r\nModel 2010 \r\nOriginal Paint \r\nThroughout Petrol\r\n80,000 km driven\r\nChilled CAr \r\nLocation Dha Ph 7\r\n03432543443</pre>', '06de6b6b81f760bb41591f3fe67d507a.jpg', 'a99a2d6b41552aa93d9b33ad30d62f61.jpg', 'f046440479a51b46273f667345033c42.jpg', '', '', '', '', '', '', '', '', '', 'Ayaz Punjwani', '03432543443', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000162, 'Toyota vitz 2015', 3, 14, 83, '41000', '2015', 'Karachi South', 'CNG', '8800', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>????TOYOTA VITZ???? \r\nModel 2015\r\nMilage 41000\r\nGrade R\r\nPakage F\r\nColor sky blue\r\n\r\nHamza ahmed\r\nContect no 03201261421\r\nFrom sakhi wahab motors\r\nswmotors.net</pre>', 'cca40837803c3830f9bb72b0f7f210a9.jpg', '', '', '', '', '', '', '', '', '', '', '', ' Hamza Ahmed', '03201261421', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000163, 'Nissan Clipper 2012 on easy instalments', 3, 15, 0, '194000', '2012', '', '', '5677', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Hermano motors Stock\r\n\r\nNISSAN CLIPPER Van\r\n\r\nWe are dealing on cash and instalments.\r\n\r\nOnly for Karachi and Hyderabad\r\n\r\nOnly on 194000 (20%) advance\r\nAnd 16000 per monthly instalments\r\n\r\nDelivery time is 1 week\r\n\r\nModel 2012\r\nUn registered\r\nKilometer Driven 40000 (Original Mileage)\r\nAutomatic Transmission\r\nWhite Colour\r\nBack Wiper\r\nOriginal Seats.\r\nNew Tyre (Japanese)\r\nAir Condition\r\n\r\nClean Interior Condition\r\nEvery Part Is Original 100%\r\n\r\nFast process all services provide u on ur door steps..\r\n\r\nNote:Auction Report Is Available Can Be Verified all Mentioned Specifications.\r\n\r\nWe Deal all type of commercial vans and all type of cars. remember we import directly from japan. \r\nAlways Best Quality Cars\r\nContact:\r\nHermano Motors (Japanese cars importer)\r\nKarachi.\r\n\r\n\r\n03361315749 (Rehman)\r\n\r\n</pre>', '290925aadf2162c89b7cf104f5c181e0.jpg', '1afdefe36efe1d0bb6b3827b3c4ee89e.jpg', '821ea371dec9cd60601491fa92217637.jpg', '17382e900dca5ce32b380a5417c99885.jpg', '', '', '', '', '', '', '', '', 'Abdul Rehman Mani', '03361315749', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000164, '144 Square Yards 3Bed Drawing Dining details in Description for more info????03122117411 03333753053', 5, 30, 0, '1235678', '', '', '', '', '', 'No', '4', '4', '4', 'Square Feet', '144', '', '0000-00-00', '', '', '<pre>???????? Portions For Sell????????\r\n\r\nPrice : 85 lacs\r\nArea = 144 Yards\r\nSquare feet - 1300\r\nFurnished - Yes\r\nFloor - 2nd\r\nComplete Read Please\r\nReady to leave Brand New West Open 2nd & 1st floor Vvip 144 yard 3 Bed Drawing Dining American Kitchen portions Behtareen Elevation for sell in Nazimabad peaceful area 24 hours water no electricity problems near to market hospital school college Main road & more facilities\r\nVisit & Info Please Call\r\n????Note : Flats & Paint Houses Are Available in ur Range low prices\r\nCommercial places Are Available\r\nProperty Dealer\r\nTalha Ghouri\r\n0333 3753053\r\n0312 2117411</pre>', '86b97de7ea4cda07090b401ea3c6b484.jpg', '673bb1ce03992be18a6438452f081610.jpg', 'fb39d81b260a446e49f0206f7c1de922.jpg', '0896ee0dfd2640a4c0fb38c97c5a8777.jpg', 'ffc1b54d5b973182cc2dfe0cf7d3059f.jpg', '', '', '', '', '', '', '', 'Talha Ghouri', '03333753053', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000165, 'Any one have interested to buy these shirts', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>03127486484</pre>', '14d589eefaa56dffc0534b1833f83271.jpg', '4fef9b402a046cf1cb5d78498bbf9047.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0310573531', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000166, 'Grey Colour Net Frock,', 12, 93, 181, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Grey Colour Net Frock,\r\nDabka , Cora , Resham , Pearl & Stone Work.\r\nNew Nicer Design By SZH.\r\n#Partywear \r\n( Included inner Suit & Dupatta )\r\n(Cash On Delivery via TCS )\r\n\r\nPrice: Rs.6999 ( Included Delivery Charges )\r\n\r\nFor more Details or Order Contact On WhatsApp/Call 0334-7514585\r\n\r\nShop Location:\r\nShafi Zari House , Shop # 69 inside Gowl Chowk Sargodha .</pre>', '8ac0167c0d4ac4afe8e9a22d84d4bce4.jpg', '4b8c148a5f26d69f65bccf651d14e21b.jpg', '8d9e1bec9d960b7d463344132870cb6b.jpg', '', '', '', '', '', '', '', '', '', 'shafi', '0334-7514585', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000167, 'Lakhi long hight murgi for sel', 10, 79, 0, '4500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Abi kurk se uthi he he only call 03200421634</pre>', 'fc2610b2ab30d7f0df7cecd631f9b000.jpg', '59e7b5de4b68a7f3b8a8c266c157973c.jpg', '46feeef31e2b2bb43cde539650fb2119.jpg', '', '', '', '', '', '', '', '', '', 'main muneeb', '03200421634', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000168, 'All iphone in 10/10 lush condition 7 days replacement warranty', 1, 1, 5, '16000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#alert\r\nOnly serious buyers :)\r\n#03112983399\r\nMessage me on inbox not in comments\r\n10/10 lush conditions\r\nWith 7 days #replacement warranty\r\nAll stock all models\r\nBrand new and used\r\nAll verieties In Iphone availalbe :) \r\nIPhone 6 16gb\r\nIPhone 6 64gb\r\nIphone 6 plus 16gb\r\nIphone 6 plus 64gb\r\nIphone 6 plus 128gb\r\nIphone 6s 16gb\r\nIphone 6s 64gb\r\nIphone 6s 128gb\r\nIphone 7 32gb\r\nIphone 7 128gb\r\nIphone 8 64gb (Box packed non active)\r\nIphone 8 plus 64 gb (box packed non active) \r\nIphone x 64gb (box packed non active)\r\nIphone x256gb (Box packed non active)\r\nAll colours :) \r\n#note \r\nJust price poochny waaly or lahore se bhr K log contact Mt Mrey :) \r\nWe deals only in #lahore \r\nSerious buyers can contact\r\nJust contact 03112983399 \r\nOr drop a message on my inbox\r\nOnly serious buyers please\r\n\r\n</pre>', '62d523b3ffadb431c201d029e9cfbd28.jpg', '59fbf99b41eac22665b49243ead973c8.jpg', '', '', '', '', '', '', '', '', '', '', 'Ahmad Sheikh', '03112983399 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000169, 'Ring neck Blue Patha', 10, 79, 0, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Only call...\r\ncargo available...\r\nlahore iqbal town...\r\n03054713336</pre>', 'a094f86da8dd5394b04471a4e3ad8d71.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Ifraz Rajput', '03054713336', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000170, 'peacock', 10, 79, 0, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Peacock pathey available for sale more info call us 030116909405 cargo available for all Pakistan.????????</pre>', '09fa29a268eb7a3ebad38fef31d5d7cd.jpg', '', '', '', '', '', '', '', '', '', '', '', 'mehran', '030116909405', 'baberali_09@outlook.com', 0, 12, 88, 'sahiwal', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000171, 'Samsung LCD 32" Brand New Sealed pack unwanted Gift cl 03204727594', 2, 9, 56, '30000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>only serious buyer cl me</pre>', 'bce391a65405ee58348c50dc9c6cb7db.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Salman Ahmad', '03204727594', 'baberali_09@outlook.com', 0, 12, 88, 'sahiwal', '', '2018-03-14', '2018-04-13', 'Unblocked', ''),
(000000175, 'Jewellery Organizer boxes', 12, 92, 179, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Jewellery Organizer boxes \r\nMaterial : Leather \r\nTo place your order please inbox us on Facebook or watsapp us at 0310-4490991 for further details.</pre>', 'a65856f1d9c3a49888d6a52738237eb3.jpg', '8f0fba25dd6c49abe446078c1a249c5b.jpg', '1da4ee38a1a44efa3f45d2265a6f1adb.jpg', '', '', '', '', '', '', '', '', '', 'Sadia Noor', ' 0310-4490991', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-15', '2018-04-14', 'Unblocked', ''),
(000000176, 'Chicken Collection  With Colorful Dupattas', 12, 93, 181, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Chicken Collection \r\nWith Colorful Dupattas\r\n& Emb Cutwork Pantz\r\nFor Orderz Inbox or Watsapp us on 03328275651</pre>', '224253f5c6d76e276d3a06e5f0d8e46a.jpg', 'a6fb302ebea81bb84c042a4fef54c01d.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03328275651', 'baberali_09@outlook.com', 0, 10, 109, 'khairpur', '', '2018-03-15', '2018-04-14', 'Unblocked', ''),
(000000177, 'Kids collection', 12, 93, 181, '800', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Imported kids Dresses \r\nDelivery within 15 Day \r\nDelivery App \r\nInbox for Order \r\nWhatsapp 03343999227</pre>', 'a581581ddc0756400c42a3b4ac18dc0a.jpg', 'a233317839a4b72b2a581cad032bfcc5.jpg', '', '', '', '', '', '', '', '', '', '', 'Ahmed Asif', '03343999227', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-15', '2018-04-14', 'Unblocked', ''),
(000000178, 'Chikankari long sherwani style kurti @550', 12, 93, 181, '550', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Chikankari long sherwani style kurti @550\r\nLength 44" size 38*40*42*44*46\r\nFor booking whatsapp on \r\n9369999462</pre>', '25be8e2f464573a97dbe8c0cfdb7a6dc.jpg', '0b8be3884934cab4c50579b17ab6f659.jpg', 'e886d4943e7e90c057028995f50b1b6c.jpg', '', '', '', '', '', '', '', '', '', 'waleed mughal', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000179, 'Honda City 2011 Model For Sale', 3, 14, 72, '13000', '2011', 'Lahore', 'CNG', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Bumper to Bumper Genuine \r\nPerfect Engine and Suspension 100% Ok \r\nCall or Whatsapp \r\n0343-7272723</pre>', '321f64e5020d4aa1c136fd730de4d068.jpg', '5bfd595be61c7cadc75f99f0b871b6fb.jpg', 'a7e7c796b0dea86d5c2a7fa09a42c43c.jpg', '110db72a832bc6b0ec8230cace47e40d.jpg', '373070748d292c4e1c62ab4952d5cd91.jpg', '', '', '', '', '', '', '', 'tariq ghani', '0343-7272723', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000180, 'Brand New 2 Bed Apartment ,Ground Floor For Sale In Awami Villa 3 Phase 8 bahria Town', 5, 28, 0, '2700000', '', '', '', '', '', 'Yes', '2', '2', '', 'Square Meter', 'behriya town phase8', '', '0000-00-00', '', '', '<pre>Property Overview\r\n2 Bed. T.v Lounge. Kitchen. Lobby. Parking\r\nProfitable Investment.\r\nPrime location.\r\nGas meter Not install\r\nOnly Family Apartment\r\nReasonable Price\r\nFor More Information Please\r\nSymble properties\r\n0336-5261405\r\n\r\n</pre>', '2d0e307e1ddb30f5f38b4b0701e40fdd.jpg', 'faff7c71e98743ff0a2477ed34bfa273.jpg', 'f7b5e3bc497b2da9761d5d2dc9776c20.jpg', 'e1c0d4e900a308aa48b1e5eb66de6a31.jpg', '', '', '', '', '', '', '', '', 'Safeer Mughal', '0336-5261405', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', '');
INSERT INTO `post_ad` (`id`, `title`, `main_cat_id`, `sub_cat_id`, `brand_cat`, `price`, `year`, `registered`, `fuel`, `km`, `veh_condition`, `furnished`, `bedrooms`, `bathrooms`, `floor_level`, `area_unit`, `area`, `job_type`, `event_date`, `website`, `4th_cats`, `descriptions`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `full_name`, `phone`, `email`, `show_email`, `province`, `city`, `city_area`, `address`, `published_date`, `expiry_date`, `status`, `reason`) VALUES
(000000181, 'sony Xperia z2, z3 compact, z4 in wholesale price', 1, 1, 9, '14000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sony Xperia Z4, Z2 , Z3 Compact " 100% Orignal Guaranteed"\r\n"All Models 4G Supported & Water,Dust Proof"\r\n"Cash On Delivery All Over In Pakistan"\r\nSony Xperia Z4 \r\nModel : SOV31\r\nSpec:\r\nDisplay : 5.20" Inch\r\nBattery: Li-Ion 2930 mAh\r\nInternal memory 32 GB MicroSD, microSDHC, microSDXC (up to 128 GB)\r\nRAM memory 3 GB\r\nProcessor : Octa Core\r\nCamera: Front 5.1 Mpx , Back20.7 Mpx\r\nRs: 14000/=\r\n\r\nSony Xperia Z2\r\nSpec:\r\nDisplay: 5.2" \r\n3GB RAM, \r\nQuad-core 2.3 GHz Krait 400\r\n16/32 GB Built-in\r\nCard slot microSD, up to 256 GB\r\n21 Mega Pixel Camera\r\nNon-removable Li-Ion 3200 mAh battery\r\nAndroid 4.4.2 (KitKat), upgradable to 6.0 (Marshmallow)\r\n4G LTE Supported\r\nColors: purpul\r\n32GB: Rs: 12000/=\r\n\r\nSony Xperia Z3 Compact\r\nSpec: \r\nDisplay : 4.6" Display\r\n2Gb RAM, \r\nQuad-core 2.5 GHz Krait 400\r\n16 GB Built-in ,\r\nCard slot microSD, up to 256 GB \r\n21 Mega Pixel Camera\r\nNon-removable Li-Ion 2600 mAh battery\r\n4G LTE Supported\r\nColor : White\r\nRs: 8950/=\r\n3 Days Replacement Warranty\r\nNot Refurbish Not Clone\r\n10/10 CONDITIONS\r\nTO place order contact on 03234159555\r\nfree delivery all over pakistan</pre>', 'fa7236df3fd7fc18187b2bdc3c8a28fe.jpg', '56604e30d5769a7aad8b47e9e5765c6f.jpg', '6d3c9d73de6a41b3018e8175fd53b539.jpg', '49fb66e3edba192c19bc90c5b561750f.jpg', '8a39da1141706fd6a38affb5d652c636.jpg', '', '', '', '', '', '', '', 'Sam Esh', '03234159555', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000182, 'Bed and sofa fitted covers available', 9, 68, 0, '1300', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Best fabric \r\nOrder plz inbox\r\n\r\nWhatsApp \r\n03322409174\r\n</pre>', 'e610ce27225427ab5ea322e1cc8e9b5f.jpg', '3fdc442c41b3969620582ceccbf70440.jpg', '5f1e897cf11e0f3cb7671b4c2fb8dd95.jpg', 'cd4fde420e2719ea9af6b3494f5f45b9.jpg', '', '', '', '', '', '', '', '', 'Baber Ali', '03322409174', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000183, '50% OFF dISCOUNT on zong dives', 7, 49, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>ZONG 4G \r\nLIMITED TIME DISCOUNT OFFER \r\nMONTHLY CHARGES\r\n\r\n1500/- 24GB\r\n2500/- 65GB\r\n\r\nTHIS OFFER ONLY IN KARACHI\r\n\r\nDelivery & Activation at your door step\r\nFOR MORE DETAIL CALL & WHATSAPP\r\n0322-2350010\r\n\r\n</pre>', 'e206329fc1f877335776b7f29dbcea78.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0322-2350010', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000184, 'Foldable bed table / bed tray', 9, 71, 0, '1600', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>To place your order please inbox us on Facebook or watsapp us at 0310-4490991 for further details.</pre>', '020dfbfa1642af38b6ec247e2c7a1f28.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 0310-4490991', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000185, 'PLANING OF BUYING FURNITURE?', 9, 68, 0, '4000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Trendy Design that will surely fit ur preference\r\nQuality combines beauty and comfort\r\nfair market prices\r\navailable on installment\r\n\r\ninbox us \r\n0331-976-2995\r\nmanzoor colony furniture market</pre>', 'd49f17a52e37480f9a63237faecca3f5.jpg', 'fa39ed401f61d2907e55d225f4d1247a.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0331-976-2995', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000186, 'Toyota vitz f 1.0 facelift 2014 model ', 3, 14, 83, '70000', '2011', 'Battagram', 'CNG', '9000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>more dilatl cl now</pre>', '18548e308f7a585dcb42e0ceb8d674d6.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03054713336', 'baberali_09@outlook.com', 0, 11, 53, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000187, 'Outclass RYK Makhi Chena Nukara Male', 10, 83, 171, '29999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>????MashAllah Beauty???\r\nOutclass RYK Makhi Chena Nukara Male \r\nFull Face Beauty Makora Parrot Face\r\nWhite Eyes \r\nAge: 4 ma kid\r\nBest for Breeder /\r\nActive and Charo\r\nAvailable at Lahore\r\nCargo @ Buyers responsibility and charges\r\nfor interested more videos and pics available\r\nOnly call whtsap 03238893793\r\n\r\n</pre>', 'c6c140b4d0cb75b1cf0b7071914a2c88.jpg', '15378d12658cec39ccae5a7d724a154c.jpg', '', '', '', '', '', '', '', '', '', '', 'sanam jang', '03238893793', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000188, 'Gulabi Jori', 10, 83, 171, '4999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Gulabi Jori Male and female \r\nAge 4 month Location Karachi \r\nCargo available for more info Only Call\r\nOnly call or WhatsApp \r\n03333633995</pre>', 'e98f8ec9a8f2d7046fcd97e08ccf5fda.jpg', 'd8b0644653331dcf0c32601e2453219d.jpg', 'e1e482d42f9d7943d5f764fc952d80e3.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03333633995', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000189, 'MashaAllah Alhamadulillah healthy and active goat for sale.', 10, 83, 171, '4769', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MashaAllah Alhamadulillah healthy and active goat for sale.\r\n0323 8850113\r\nOnly call me.\r\nLahore.</pre>', '907f5bb46e44a1f28e499d27689064cc.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 0323 8850113', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000190, 'ek mada k sath ek bacha free', 10, 83, 171, '5000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now 03428880844</pre>', 'be4cba16a4d894604897ab6f44a407a1.jpg', 'ad6ef3ef5783605b8fb3f7bfe5e3cf66.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 03428880844', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000191, 'bakra', 10, 83, 171, '50000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MashaAllah rajanpuri kid for sale\r\nAge 3 month\r\nLocation bhakkar\r\nOnly call or whtsapp 03343501263</pre>', 'e866107e01616cb1797b920e933d2f3a.jpg', '5118aa61135c3172c9af94c7e87e4695.jpg', '8be93e42f1a28f5ed57aea51b0c86ae8.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03343501263', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000192, 'sale my active bakra', 10, 83, 171, '5997', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>more detail cal now 03458769259</pre>', 'ae69832dcf07f8cfe66d45c52609027f.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 03458769259', 'baberali_09@outlook.com', 0, 3, 136, 'neelum', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000193, 'Gaban bakri 4 month', 10, 83, 171, '4874', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Gaban bakri 4 month ..whatusp nd call\r\n03002956034...\r\n</pre>', 'f422101d5dd918809f7d5d1a33e77286.jpg', '94b840c84d474cb8e62861f668461357.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03002956034', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000194, 'ek mada k sath ek safaid bacha free', 10, 83, 171, '3689', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n\r\n03428880844</pre>', '760939bfb278aafcea8db050183ce7f2.jpg', '933b52b041c8e0f60218265c3baa1bf2.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03428880844', 'baberali_09@outlook.com', 0, 12, 77, 'sadiqabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000195, 'MashaAllah Alhamadulillah healthy and active goat for sale.', 10, 83, 171, '37643', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MashaAllah Alhamadulillah healthy and active goat for sale.\r\n0323 8850113\r\nOnly call me.\r\nLahore.\r\nFREE</pre>', '22da6d50add141c3dd78d750928080ef.jpg', '71f0738023fb119f4991654f9a42d9a8.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0323 8850113', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000196, 'bakra sale ', 10, 83, 171, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Gulabi cross bakri for sale @ Salman Cattle farm.\r\nWhite eyes\r\nHealthy\r\nActive\r\nVaccinated\r\nAge 5 months.\r\nOnly serious buyers may visit our farm\r\nFor price please contact 03333013484</pre>', '0d40dbd4fb7fe28be6a57635e83bd57e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 03333013484', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000197, 'Alhamdulillah sold', 10, 83, 171, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>bakra sale now for more detail cl now</pre>', '49722b901efcf8519157dd113fcbdd8e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03004768472', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000198, 'for bakri sale ', 10, 83, 171, '4000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MA SHA ALLAH????\r\nLAAIL PURI Beetal fresh 2 teeth\r\nGOOD hight GOOD lenth????????????\r\nHeavy boddy sutructer...white eyes\r\nBeautifulll face.. khassi.. MALE\r\nFor sale cal or whaats up only\r\n????????????????03004768472????????????</pre>', '2b1a886b2efb48672b35ae2aa24ee68a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03004768472', 'baberali_09@outlook.com', 0, 12, 78, 'khairpur', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000199, 'MashAllah Beauty of jutt Goat Farm Gubn 4 month frst timer location Lahore whtsp 03338270161', 10, 83, 171, '7000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MashAllah Beauty of jutt Goat Farm Gubn 4 month frst timer location Lahore whtsp 03338270161\r\nRs1</pre>', '91a0325f7b139eb039b402a5c8250a34.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03338270161', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000200, 'Bakra', 10, 83, 171, '6997', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Rajanpur male age 2.5 months cargo available contact on Call r wtsap#0336-5697249</pre>', '2b1cf26b3c19b1c1f544aa637a48ee7a.jpg', 'c586d5e4f5489fe2a0bf2055c21b84b2.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '0336-5697249', 'baberali_09@outlook.com', 0, 12, 71, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000201, 'Turkey dunmba for sale', 10, 83, 171, '7889', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Turkey dunmba for sale\r\nAge 5 mnth\r\nLocation bhakkar Cargo available \r\nWhtsapp 03136841313</pre>', '8205c69f82891c5ee178fc8c4fd3cae9.jpg', 'ee50ddd88ab264ee1891d7c88b08cf83.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', ' 03136841313', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000202, 'Kamora bireed bakra for sale', 10, 83, 171, '12000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Beautiful kamora female and male for sale age 3.4 manth long ears and location shikarpur contact 03323948657</pre>', '662bfba754a045c4e8d829570cda0e27.jpg', 'd67410a09bbb77ce190042dedef7ecf9.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03323948657', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000203, 'Nukra male', 10, 83, 170, '56800', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Beautifull nukra male for sale.\r\nAge about 8 months \r\nLocation shikarpur sindh \r\nContact @ \r\n03332661888</pre>', '4c43e44f275a53fb5274553a41f294ba.jpg', 'b0d2b5d15f47d81a890f38bbfd0b3eae.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03332661888', 'baberali_09@outlook.com', 0, 12, 79, 'shikarpura', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000204, 'trade male bakra for sale', 10, 83, 171, '6000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>MASHALLAH\r\nTEDA MALE # 1\r\nFOR SALE \r\nAGE 9 SY 10 MONTH \r\nSERIOUS PERSONS CONTECT \r\n03465394640\r\n\r\n</pre>', 'fa7128ec25e24c7ceedc61709670659a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03465394640', 'baberali_09@outlook.com', 0, 12, 71, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000205, 'Honda civic Rabon 1.8i 2010', 3, 14, 72, '123456', '2011', 'Karachi West', 'CNG', '8000', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Honda civic Rabon 1.8i 2010\r\nRs1,130,000\r\nGujrat City\r\n03454420105 for further info</pre>', '6724d54a69450876875a73ee31e583f2.jpg', 'e09453914d2d176025388a703eb1d02e.jpg', '5b51f4423363b7fc96d9240cfefed3ff.jpg', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03454420105', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000206, 'Sony Xperia Z4 Now available', 1, 1, 9, '12000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Assalam u Alaikum\r\n\r\nSony Xperia Z4 limited stock available\r\nModel No. Z4 \r\nOrignal Kit\r\nDeliver all over Pakistan pay cash on delivery\r\nColor : Choco, White, Black and Sea Green\r\n7 Days Replacement warranty\r\nAll sets R original\r\n\r\nSpecification\r\n32GB built-in, 3GB RAM ( microSD, up to 256 GB )\r\nOcta-core (4x1.5 GHz Cortex-A53 & 4x2.0 GHz Cortex-A57)\r\nAndroid 5.0 (Lollipop)\r\nCamera : Primary 20.7 MP, autofocus, LED flash, Secondary 5.1 MP\r\nIP68 certified - dust/water proof over 1.5 meter and 30 minutes\r\nScreen: 5.20-inch\r\nBatery : Non-removable Li-Ion 2930mAh battery\r\n4g supported\r\nSingle Sim\r\nTouch\r\n\r\nFor Details & Order\r\nCall Now at : 0.3.33-2820668 or You can Inbox as well!\r\n   \r\nCash On Delivery all over Pakistan. \r\nDelivery Charges Rs 200 for Karachi will be applied.Delivery and packing charges outside Karachi Rs. 500 will be applied\r\n\r\nKindly Inbox or Contact at my given number. \r\nPlease do not ask anything in comment section\r\nThanks for cooperation</pre>', 'cae02c6bb773120a8d47b152c692d8f3.jpg', 'abad2d89998dbd5d0e2ad699359546a2.jpg', 'e06bbf35822ebbc7eea3d7a325f24f43.jpg', '', '', '', '', '', '', '', '', '', 'Hamza Arif', '03332820668', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000207, 'Required both male and female staff for our call centre.', 6, 46, 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Offering Job', '0000-00-00', '', '', '<pre>Requirements. minimum matric with good communication skills. \r\n? send us your resume at vmcc925@gmail.com or call us at 03094225928</pre>', '297256425dd16170511006e51b213a10.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03094225928', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000208, 'sumsoung mobile for sale now', 1, 1, 4, '15000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>03045102520\r\nFREE\r\nBAHAWALPUR PEACEFULL CITY\r\nSamsung C5 for sale just touch tota h inbox Mn replay kren</pre>', 'e6190b17c06154251e86fe0428796454.jpg', '9d9195e11649c7468d89563083cc77cd.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03045102520', 'baberali_09@outlook.com', 0, 12, 82, 'bahawlnager', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000209, 'Yamaha Janoon 2007 A1', 4, 22, 101, '235789', '2011', '', '', '', 'Used', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>I am selling my Yamaha Janoon 2007 10 by 10\r\nOriginal file and book\r\nBohat hi care se rakha h\r\nSerious huzrat rabta kren\r\nSamanabad 03156967118</pre>', '455e547855d4638fbba4c276930f041f.jpg', 'a8336c527c7e2559cd7df7a7de0ad8ae.jpg', '9b8f14becfe013fa0f0e01ff472e78fc.jpg', '', '', '', '', '', '', '', '', '', 'Abdul Rahman', '03156967118', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000210, 'Baby sunconor', 10, 79, 0, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Baby conor,13000rs self eating \r\n1_feet bend side by birth flying\r\nIs goog with large head \r\n03336565249_Faisalabad watch\r\nFeet close in picture looks like female\r\n</pre>', '0bcd5b6be67968d589f62a0117179ee9.jpg', '863efa8864b342f8a462433cab90743a.jpg', 'b454d663bbc4bd1222431facbc817967.jpg', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '03336565249', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000211, 'Ficher love birds fr sale...', 10, 79, 0, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Aoa..\r\n\r\nFicher love birds fr sale...\r\nTotal 30 piece...pathay...\r\n\r\n03009579513\r\n03467642325</pre>', '1b115001ca334b8c9064f3a842851302.jpg', '', '', '', '', '', '', '', '', '', '', '', 'faisal ,mehmod', '03467642325', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000212, 'for sale cat', 10, 81, 0, '3544', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for sale \r\n03334800034\r\nRs5\r\nMamu Kanjan, Punjab, Pakistan\r\nfor sale \r\n03334800034</pre>', 'b2f56eb86c0849ca66df1876ade6a613.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Hamza Tariq', '03334800034', 'baberali_09@outlook.com', 0, 12, 88, 'Mamu Kanjan', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000213, 'Violet love birds', 10, 79, 0, '4688', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>20piece of dark violet5000rs\r\nDark jaman colour\r\n03336565249_faisalabad</pre>', '9c1cd676f75a7f79662987fbc14ec560.jpg', 'e6752e126031ee30867dfd4e45596ac4.jpg', '', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '03336565249', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000214, 'Violet love birds', 10, 79, 0, '4688', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>20piece of dark violet5000rs\r\nDark jaman colour\r\n03336565249_faisalabad</pre>', '594ff601050aee9db955a9a28f60e196.jpg', 'c8f8a44ff698362715ff247eca848bdb.jpg', '', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '03336565249', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000215, 'hogo male 4 sale loc faislabad cargo avelebl', 10, 79, 0, '5342', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>hogo male 4 sale loc faislabad cargo avelebl\r\n$5,500\r\nFaisalabad\r\n03084687770</pre>', '9089dc53bd1b857195ee7fa620c0f04d.jpg', 'c073f5743e7333ff089f4cd8e6b789f3.jpg', '', '', '', '', '', '', '', '', '', '', 'Hafiz Mugera Saeed', '03084687770', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000216, '24pic fallow 475 pr pic fnl loc faislabad jis ki samaj my aye wo e rabta kry', 10, 79, 0, '6900', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>24pic fallow 475 pr pic fnl loc faislabad jis ki samaj my aye wo e rabta kry\r\n$475\r\nFaisalabad\r\n03084687770</pre>', '46e203797b63a30e974874dfa75d4a12.jpg', '', '', '', '', '', '', '', '', '', '', '', 'hafez saeed', '03084687770', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000217, 'Hogoromo..fellow..lutino red eyes', 10, 79, 0, '6999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>1pair Albino red eyes hogoromo@80000\r\n1male albino red eyes hogoromo@43000\r\n1male albino red eyes hogoromo single sided flower@32000\r\n1 pair TCB ready to breed@5000\r\n2 pairs fellow budgies breeder pairs@1800 per pair\r\n2 king size lutino double crest males@2700 per piece\r\n2 fellow half crest budgies males@2200 per piece\r\n1 fllow tuft budgie@1800\r\n4 lutino king size males@1300 per piece\r\n1 male black mask yellow chest@3000\r\nLocation: Faisalabad \r\n03336583753</pre>', '6d23bde09503c06adfb714c5ef2ce8d6.jpg', 'dc10608b867a60f921e001c120ac2037.jpg', 'de44809cfd90dc1134acc7f5daed1292.jpg', '', '', '', '', '', '', '', '', '', 'Rashid Mehmood', '03336583753', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000218, 'Hogoromo..fellow..lutino red eyes', 10, 79, 0, '6999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>1pair Albino red eyes hogoromo@80000\r\n1male albino red eyes hogoromo@43000\r\n1male albino red eyes hogoromo single sided flower@32000\r\n1 pair TCB ready to breed@5000\r\n2 pairs fellow budgies breeder pairs@1800 per pair\r\n2 king size lutino double crest males@2700 per piece\r\n2 fellow half crest budgies males@2200 per piece\r\n1 fllow tuft budgie@1800\r\n4 lutino king size males@1300 per piece\r\n1 male black mask yellow chest@3000\r\nLocation: Faisalabad \r\n03336583753</pre>', '2e5bd3b83bf2b1b5c0607e9c3c0134fc.jpg', 'c190dcfea092d46acfb055bf64167a2b.jpg', 'd3535e3e19c3e083e0e575bd7a638987.jpg', '', '', '', '', '', '', '', '', '', 'Rashid Mehmood', '03336583753', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000219, 'Sun conor', 10, 79, 0, '5806', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sun conor\r\n$35,000\r\nFaisalabad\r\nDNA certified male large size long healthy \r\nWith sharp colours rs35000 only phone call\r\n03336565249</pre>', '31c5d0af39cb5d618614e2d4be63550a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '03336565249', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000220, 'Albino Red Eyes', 10, 79, 0, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Albino red eyes Female For Sale Location Fsd price is Final 1st Cluch ki ha age almost 4 month up ha . Jise laini ho rabta kare inboc or call just . 03136907684</pre>', '10c48104f9d2b6f30a303789a80736ad.jpg', 'b8d2e57b697df7bd8e291a10a5ffb7f5.jpg', '', '', '', '', '', '', '', '', '', '', 'Bàíg Bî???', '03136907684', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000221, 'Albino Red Eyes', 10, 79, 0, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Albino red eyes Female For Sale Location Fsd price is Final 1st Cluch ki ha age almost 4 month up ha . Jise laini ho rabta kare inboc or call just . 03136907684</pre>', '3561a91324609467c659a86961c1c9c2.jpg', '8cf114685a7588b7e554c0204f806143.jpg', '', '', '', '', '', '', '', '', '', '', 'Bàíg Bî???', '03136907684', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000222, 'eggs laying set for sale', 10, 80, 0, '6798', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>eggs laying set for sale\r\nRs8,500\r\nHafizabad City\r\n03359345500 contact on num</pre>', '6e98a200d065b042fe6560af536239eb.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Well Wisher', '03359345500', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000223, 'Fellow pahty for sel fellow gd quality and dark marking', 10, 79, 0, '9000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Fellow pahty for sel fellow gd quality and dark marking\r\n$550\r\nLahore, Pakistan\r\nPR piece 550 fellow tuf price 1000 Jo b Lena chye WO cal me 03367185772</pre>', 'b22b472616d4852a9c0ebebe1697df9e.jpg', '51c548c09be4ebd4c16f1440d1115fb3.jpg', '', '', '', '', '', '', '', '', '', '', 'Bismillah Parrots', '03367185772', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000224, 'Raw parrot baby', 10, 79, 0, '6063', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw parrot baby\r\nFREE\r\nDarya Khan Bhakhar\r\nRaw parrot cover baby available for sale cargo available location darya khan district bhakkar\r\nprice only call \r\n03037956591</pre>', '1ad45960fc00be6584365d494391a731.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Abdul Sami', '03037956591', 'baberali_09@outlook.com', 0, 12, 78, 'bahawalpur', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000225, 'Raw parrot baby', 10, 79, 0, '6063', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Raw parrot baby\r\nFREE\r\nDarya Khan Bhakhar\r\nRaw parrot cover baby available for sale cargo available location darya khan district bhakkar\r\nprice only call \r\n03037956591</pre>', '0c6a64c866764b2c50964f8e93b996b7.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Abdul Sami', '03037956591', 'baberali_09@outlook.com', 0, 12, 78, 'bahawalpur', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000226, '2 fellow breader pairs.', 10, 79, 0, '6864', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2 breader pair fellow healthy active pairs.03137537617\r\n</pre>', 'f8065e74ecb959dad5786a2edd39c86a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Muhammad Salah', '03137537617', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000227, '2 fellow breader pairs.', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2 breader pair fellow healthy active pairs.03137537617\r\n</pre>', '6da0e4281574a378b17732adc4567af7.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Muhammad Salah', '03137537617', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000228, 'Fallow brider paier', 10, 79, 0, '7800', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n\r\n03036306131</pre>', '4504d27f9ffb92cab0586241919b07e1.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Zaheer Baber', '03036306131', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000229, 'Fallow brider paier', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n\r\n03036306131</pre>', 'ef9e5825fc27c5899864b65184b7bdc2.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Zaheer Baber', '03036306131', 'baberali_09@outlook.com', 0, 12, 0, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000230, 'birds sale', 10, 79, 0, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Hogo Ready to Breed Spangle +Budgri 2Pairs with Normal Flower Available in Faisalabad \r\n03065432787\r\nPrice 5500 for Pair\r\n</pre>', '92af34f898860b9d0f61ebd84e0de0ac.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Rashid Birds', '03065432787', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000231, 'birds are sale', 10, 79, 0, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n03444821385</pre>', '3da123e00feffd09b149bbfbb871d250.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Rana Asif Ali?', '03444821385', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000232, '7 months adult eno healthy and active', 10, 79, 0, '5743', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2500 per pcs healthy and active eno 5 pcs 1 pcs 3 months old 2000 for video please whatsapp 0335 79 55 471</pre>', '5baf723a7b4a27b7d1181599431ad5ab.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Moazam Shah', '0335 7955471', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000233, 'Red I brider paier whit chiks', 10, 79, 0, '7963', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Red I brider paier whit chiks\r\nRs1,600\r\nFaisalabad\r\n03036306131\r\n</pre>', 'aefad112d4c90a82456c30a5b4df6a24.jpg', '66c13b8617c4228d48b827d1596c370e.jpg', '', '', '', '', '', '', '', '', '', '', 'Zaheer Baber', '03036306131', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000234, 'DF Hagoromo budgies FOR sale.', 10, 79, 0, '7896', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>DF Hagoromo budgies FOR sale.\r\nMASHALLAH Healthy & Beautiful.\r\nCargo facility available.\r\nLocation:- Faisalabad\r\nContact:- 0345-7735410\r\n0321-4689585</pre>', 'e2abd0afea032e71756a540408c8accd.jpg', 'fd070a0c846edf144158d025a36ced0a.jpg', '', '', '', '', '', '', '', '', '', '', 'Muhammad Farhan', ' 0345-7735410', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000235, 'one set english game eggs laying for sale', 10, 79, 0, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>one set english game eggs laying for sale\r\nRs5,500\r\nHafizabad City\r\n03359345500\r\n</pre>', '5e12160920694f8011a27922100a8824.jpg', '81d0bc4a247cb2c5864c21e8024cc826.jpg', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03359345500', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000236, 'eno red eye hand feed chik for sale..pr piec 1800..........03226319391', 10, 79, 0, '3580', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n\r\n.03226319391</pre>', 'e33530ad731033c0e7447c403d3fbc7d.jpg', '', '', '', '', '', '', '', '', '', '', '', 'danish ansari', '', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000237, 'eno red eye hand feed chik for sale..pr piec 1800..........03226319391', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>for more detail cl now\r\n\r\n.03226319391</pre>', '5d9f48f0c173010dbd5b0d7b03e21cd2.jpg', '', '', '', '', '', '', '', '', '', '', '', 'danish ansari', '03226319391', 'baberali_09@outlook.com', 0, 12, 0, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000238, 'Urgent sale latino yellow baredr pair 100% female ful lodid ha egg deny wali ha long lenth neet and', 10, 79, 0, '2345', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Urgent sale latino yellow baredr pair 100% female ful lodid ha egg deny wali ha long lenth neet and\r\nRs786\r\nMultan\r\nSal sal sal urgent sal jis bhai ko smajh ay wo hi rabta kry.pllllzzzz\r\n03176766601</pre>', '549033ba956c57aeaa42f4500fd4373d.jpg', '19f14180fa9b636a14db7e07107a72c2.jpg', 'd9c84a78967483bfc2ae64efbd1ed06e.jpg', '', '', '', '', '', '', '', '', '', 'Momin Sheikh', '03176766601', 'baberali_09@outlook.com', 0, 12, 43, 'mardan', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000239, 'Raw parrot (pahari,kashmiri)', 10, 79, 0, '5000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>raw parrot baby available for sale cargo available location darya khan district bhakkar price only call 03037956591</pre>', 'c29b627beebd01348861b3bf62080134.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03037956591', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000240, 'Raw Chicks', 10, 79, 0, '500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Allhamdullilah 1 peice Raw sold going to new owner Allah pak barkat atta farmaen nazre bad se bachain Ameen for details call 03201434747\r\nRaw Coverd Chicks\r\nYellow ring neck chicks\r\nWhite ring neck chicks Also Available.\r\nOnly Call no comments no messages.</pre>', '83984b12adf92a8926f42c6f98c3f76e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '03201434747', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000241, 'Hogoromo,fellow,Australian', 10, 79, 0, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>I want to sale do hogoromo adult male.one breader male common white cocktail,3 fellow tuft female created split,and 7 piece Australian pathy.if u need thek contact with me.03457917702</pre>', 'c12c2086c4b7141580545b786d6ba95c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '03457917702', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-16', '2018-04-15', 'Unblocked', ''),
(000000242, 'For sale birds', 10, 79, 0, '400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Blacki 1 pair breedr albino ka blacki 1 pair wth1 egg albino or box 3 pathay albino rdi split 3 pathay Fisher 5breedr pair fisher for sale loc fsd 03457744502 sirf call karay</pre>', 'f7ef1d1a37518688b1fcbd293505a621.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03457744502 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-17', '2018-04-16', 'Unblocked', ''),
(000000243, 'For sale birds', 10, 79, 0, '400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Blacki 1 pair breedr albino ka blacki 1 pair wth1 egg albino or box 3 pathay albino rdi split 3 pathay Fisher 5breedr pair fisher for sale loc fsd 03457744502 sirf call karay</pre>', '347d7fda08cf342bb5f45771bc771b8b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03457744502 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-17', '2018-04-16', 'Unblocked', ''),
(000000244, 'For sale birds', 10, 79, 0, '400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Blacki 1 pair breedr albino ka blacki 1 pair wth1 egg albino or box 3 pathay albino rdi split 3 pathay Fisher 5breedr pair fisher for sale loc fsd 03457744502 sirf call karay</pre>', '1812a7feed640436742a84a667c85655.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Baber Ali', '03457744502 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-17', '2018-04-16', 'Unblocked', ''),
(000000245, 'Pure KAMOORI', 10, 83, 171, '6900', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Pure KAMOORI Male Age 4 month \r\nLocation Karachi Cargo available \r\n4 price only Call or WhatsApp \r\n03333633995\r\n</pre>', 'e00d8b06f42cda1ddc5ed063767f948e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Shahid Anwar', '03333633995', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-17', '2018-04-16', 'Unblocked', ''),
(000000246, 'Pure KAMOORI', 10, 83, 171, '6900', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Pure KAMOORI Male Age 4 month \r\nLocation Karachi Cargo available \r\n4 price only Call or WhatsApp \r\n03333633995\r\n</pre>', 'fc172c1977e863b319bd33b401873c02.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Shahid Anwar', '03333633995', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-17', '2018-04-16', 'Unblocked', ''),
(000000247, 'Testing1 ', 12, 93, 180, '850', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Testing1 </pre>', '914c69ca087105481e07a8436defceb7.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Ameer Muslim', '03325153604', 'ameer7an@gmail.com', 0, 12, 71, 'Murree road', '212', '2018-03-19', '2018-04-18', 'Unblocked', ''),
(000000248, 'SOFA COVERS AND FITTED BED SHEETS', 9, 68, 0, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>IF YOU ARE LOOKING FOR QUALITY PRODUCT .\r\nExport quality .Bed Fitted sheet , sofa cover ,water proof bed fitted sheet and Printed Bed Fitted sheets in all sizes\r\nSINGLE. DOUBLE. XL. XXL. AND JUMBO. \r\ncontact no. 0336-0022709</pre>', '3f1c41f2b298210cc58e3a19f442f431.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Zartasha Zayyan', ' 0336-0022709', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000249, 'SOFA COVERS AND FITTED BED SHEETS', 9, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>IF YOU ARE LOOKING FOR QUALITY PRODUCT .\r\nExport quality .Bed Fitted sheet , sofa cover ,water proof bed fitted sheet and Printed Bed Fitted sheets in all sizes\r\nSINGLE. DOUBLE. XL. XXL. AND JUMBO. \r\ncontact no. 0336-0022709</pre>', 'cafc7659c9126c3eff1433c331963b88.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Zartasha Zayyan', ' 0336-0022709', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000250, 'MY BROTHERs AND SISTERs sale mobile', 1, 1, 5, '27908', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Brand New Original Apple iPhone X 256GB iPhone 8 Plus And Samsung Galaxy S9 Plus available for sale\r\n\r\nInbox or Add me for the price\r\nWhatsapp...+17208203207</pre>', '8fad3401d4676d9ce5f53d2c096473c4.jpg', 'eea509a0ea69970fd596f67f53e76f7c.jpg', '', '', '', '', '', '', '', '', '', '', 'Eliza Davis', '03054713336', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000251, 'Green ringneck baby for sale', 10, 79, 0, '789', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Mashallaha green ringneck baby for sale price on call no sms 03129992787\r\n</pre>', 'fd07ac1526ec0c6bcf50798fcb561818.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Imran Jutt', '03129992787', 'baberali_09@outlook.com', 0, 12, 74, 'multan', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000252, 'Queen size padding bed with 2 side tables', 9, 68, 0, '7999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Queen size padding bed with two side tables .\r\nMore colours available .\r\nAll types of furniture available here \r\nContact us : 03201686864\r\n</pre>', '07937adb4906c80b55e81fb2f7fef82b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Saim Raaj', '03201686864', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000253, 'Samsung Note 5 Now available', 1, 1, 4, '30000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Assalam u Alaikum\r\n\r\nModel No. Samsung Note 5\r\nCarrier: Verizon\r\nOrignal Kit\r\nDeliver all over Pakistan pay cash on delivery\r\nColor : White Blue & Golden\r\n7 Days Replacement warranty\r\nAll sets R original\r\n\r\nSpecification\r\n32GB built-in, 3GB RAM ( microSD, up to 256 GB )\r\nAndroid 5.1.1 (Lollipop), upgradable to 7.0 (Nougat)\r\nOcta-core (4x2.1 GHz Cortex-A57 & 4x1.5 GHz Cortex-A53)\r\nCamera : Primary 16 MP (f/1.9, 28mm, 1/2.6", 1.12 µm), OIS, autofocus, LED flash , Secondary 5 MP (f/1.9, 22mm), 1440p 30fps, dual video call, Auto HDR\r\nScreen:5.7 inches, 89.6 cm2 (~76.8% screen-to-body ratio)\r\nBatery : Non-removable Li-Ion 3000 mAh battery\r\n4g supported\r\nSingle Sim\r\nTouch\r\n\r\nFor Details & Order\r\nCall Now at : 0.3.33-2820668 or You can Inbox as well!\r\n\r\nCash On Delivery all over Pakistan. \r\nDelivery Charges Rs 200 for Karachi will be applied.Delivery and packing charges outside Karachi Rs. 500 will be applied\r\n\r\nNote: Price is Final.\r\nFor Price & Other Details Kindly Inbox or Contact at my given number. \r\nPlease do not ask anything in comment section\r\nThanks for cooperation</pre>', '2d70b208cc57ac2d263c66aa2f651647.jpg', '3fbe35bdfdba046ca15fa6e77bdabea8.jpg', '', '', '', '', '', '', '', '', '', '', 'maham', ' 03332820668', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000254, 'Red I brider paier whit chiks', 10, 79, 0, '3000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Red I brider paier whit chiks\r\nRs1,600\r\nFaisalabad\r\n03036306131</pre>', '3044929d90fe8ba8d8853a8a87b72000.jpg', '891b4fdfd96d5c50804ef9af976bd35c.jpg', '', '', '', '', '', '', '', '', '', '', 'Zaheer Baber', '03036306131', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000255, 'Common Piet breedar pair', 10, 79, 0, '5000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Common Piet 110%brerdar pair with one egg aj phla dia egg serious person contact #0317-9633426\r\n</pre>', '62edd1b954e996fe53f27dc5dc6cf7e4.jpg', 'f87728d082f066d9baabeae2761d35f1.jpg', '99a9fd1f37a5cbe3f943c232a897db5e.jpg', '', '', '', '', '', '', '', '', '', 'Hamza Gujjar', '03179633426', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000256, 'Rew Chick For sale', 10, 79, 0, '6000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>4 months Is self Active With Cage 03007299593</pre>', '660f826ceb06bb7bbf40ea801ca26b9f.jpg', '6f295587b2a0d0eb8e8c8b0da1c39f8c.jpg', '', '', '', '', '', '', '', '', '', '', 'Farri Gujjar', '03007299593', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000257, 'Love Birds For Sale 0320_2214914', 10, 79, 0, '7000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Pestal Breeder Pair\r\nWith 3 Chicks \r\nFinal 8000/= \r\n0320_2214914\r\n</pre>', '7928dc16a6f0650c539d43cbefce60bb.jpg', '73012ae580d1ab0834b8f522d2611775.jpg', '', '', '', '', '', '', '', '', '', '', 'Bilal Razzaq', '03467642325', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000258, 'Fellow dark marking pahty for sel strong blood line one piece fuf', 10, 79, 0, '7000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>PR pieces 600 gd size tuf piece price 1000video on demand location shahdra 03367185772\r\n</pre>', 'ec2f5d25b17acccfe89d63a1d66afb7c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Bismillah Parrots', '03367185772', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000259, 'Fellow dark marking pahty for sel strong blood line one piece fuf', 10, 79, 0, '7000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>PR pieces 600 gd size tuf piece price 1000video on demand location shahdra 03367185772\r\n</pre>', '6320ffd79b827d65a1afeaf0c5d7ca59.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Bismillah Parrots', '03367185772', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000260, 'Yellow ring neck', 10, 79, 0, '4000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Neat healthy and clean piece hand tamed \r\nAnd fully self mshallah beauty \r\nFor video 03231490427\r\nNo calls no sms only whatsapp</pre>', '9d8e20c26c463b67e59733591422b3fc.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '03231490427', 'baberali_09@outlook.com', 0, 10, 106, 'iqbal town', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000261, 'Yellow ring neck', 10, 79, 0, '4000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Neat healthy and clean piece hand tamed \r\nAnd fully self mshallah beauty \r\nFor video 03231490427\r\nNo calls no sms only whatsapp</pre>', 'c0e5d5f0afcb317ef840bf01e994af3c.jpg', '', '', '', '', '', '', '', '', '', '', '', 'maham', '03231490427', 'baberali_09@outlook.com', 0, 10, 106, 'iqbal town', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000262, 'Love Birds For Sale 0320_2214914', 10, 79, 0, '5000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Blue Mask Breeder Pair \r\nWith 3 Chicks\r\nFinal 8000/=\r\n0320_2214914</pre>', '74d50144aaa7f4c014659027677272f5.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Bilal Razzaq', ' 0320_2214914', 'baberali_09@outlook.com', 0, 10, 107, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000263, 'Fellow breeder pair n fellow pathay for sale', 10, 79, 0, '8000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>03114260707\r\n\r\nmore details cl now</pre>', '2729a32454bbd6f920a1b14d8d045b6a.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Shakir Ghouri', '03114260707', 'baberali_09@outlook.com', 0, 10, 106, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000264, 'bed and sofa covers avaliable', 10, 79, 0, '6999', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '58e652c152551bfcbba0b5f3e16daa07.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 108, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000265, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', 'c1d614d5feb685aa0efcca6c348fae25.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000266, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '1e91e31673d9ced5d5d1408d2bebb73e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000267, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', 'd15ad56eec571ac0fc9e5d10676744cd.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000268, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '4278f16b9ca542cc6f62b6e0dc9d566b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000269, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', 'c11148aa8e505fdfb893a7f9c884df24.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000270, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '2fec079e34d326f81fe65c49326b393d.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000271, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', 'd694c58f2079ec64b5a54811fe8e37b7.jpg', '372dec073712edae2e12cebe0fb6f512.jpg', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000272, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '521a0e5f3e10ef967757e0b0455bf887.jpg', 'fc03ccda86bb3a6584006fd706c7439f.jpg', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', '');
INSERT INTO `post_ad` (`id`, `title`, `main_cat_id`, `sub_cat_id`, `brand_cat`, `price`, `year`, `registered`, `fuel`, `km`, `veh_condition`, `furnished`, `bedrooms`, `bathrooms`, `floor_level`, `area_unit`, `area`, `job_type`, `event_date`, `website`, `4th_cats`, `descriptions`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `full_name`, `phone`, `email`, `show_email`, `province`, `city`, `city_area`, `address`, `published_date`, `expiry_date`, `status`, `reason`) VALUES
(000000273, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', 'd6ad929e46d348eba9079f2a948eefd5.jpg', '1c1dde275777fa2b9d71b6c55fff1024.jpg', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000274, 'bed and sofa covers avaliable', 10, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>best quality\r\norder plz inbox\r\n\r\nwhatsapp\r\n03322409174\r\n</pre>', '69f42bd82f0c6e7ea9d4b5759ec22690.jpg', '61fbf26de751a792a267a3955b78e0ea.jpg', '', '', '', '', '', '', '', '', '', '', 'Fozia Ammad', '03322409174', 'baberali_09@outlook.com', 0, 10, 0, 'Karachi', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000275, 'Baroque new collection now available ', 12, 93, 181, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Baroque new collection now available \r\nFull suit on lawn *WITH BOTH EMBROIDERED AND PRINTED DUPATTA AVAILABLE *\r\nFront fully embroidered\r\nPearls given\r\nRates \r\nEmbroidered Dupatta #PRICE_2099\r\nPrinted dupatta #PRICE_1699\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', 'ed36c4c035c05cf85a10eb7dbd17f61e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'khizer khan', '03212774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'HYDRABAD', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000276, 'Baroque new collection now available ', 12, 93, 181, '2000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Baroque new collection now available \r\nFull suit on lawn *WITH BOTH EMBROIDERED AND PRINTED DUPATTA AVAILABLE *\r\nFront fully embroidered\r\nPearls given\r\nRates \r\nEmbroidered Dupatta #PRICE_2099\r\nPrinted dupatta #PRICE_1699\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', '5956d0938d1eecca763906aeb025fdc2.jpg', '', '', '', '', '', '', '', '', '', '', '', 'khizer khan', '03212774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'HYDRABAD', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000277, 'Khaadi lawn now available ', 12, 93, 181, '1599', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1599\r\n\r\nKhaadi lawn now available \r\nFull suit on lawn with *Jacquard net dupatta* \r\nNeck embroidered\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', '130a7dcb6cd2d4dd59f49f21ccd66193.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Fatima Quraishi', '03212774370 ', 'baberali_09@outlook.com', 0, 4, 11, 'quetta', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000278, 'Khaadi lawn now available ', 12, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1599\r\n\r\nKhaadi lawn now available \r\nFull suit on lawn with *Jacquard net dupatta* \r\nNeck embroidered\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', 'a9f011dd227a3db306cee47800eed9d4.jpg', '44b8c7d2006c70fc5917fa3a68d6e012.jpg', '', '', '', '', '', '', '', '', '', '', 'Fatima Quraishi', '03212774370 ', 'baberali_09@outlook.com', 0, 4, 0, 'quetta', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000279, 'Khaadi lawn now available ', 12, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1599\r\n\r\nKhaadi lawn now available \r\nFull suit on lawn with *Jacquard net dupatta* \r\nNeck embroidered\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', '523881e66bf6aaeb6b6a90255cc26266.jpg', '8b1bb0656c8f00aa1ee5c8698b72a116.jpg', '', '', '', '', '', '', '', '', '', '', 'Fatima Quraishi', '03212774370 ', 'baberali_09@outlook.com', 0, 4, 0, 'quetta', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000280, 'Khaadi lawn now available ', 12, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1599\r\n\r\nKhaadi lawn now available \r\nFull suit on lawn with *Jacquard net dupatta* \r\nNeck embroidered\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS #CONTACT_0321_2774370 \r\nWHATSAPP-INBOX-CALL..!\r\n\r\n</pre>', 'dee4549ae9ccab787b4457981f114cc1.jpg', 'c5ff11b19d6f2ad4c431b67df6d2c2e0.jpg', '', '', '', '', '', '', '', '', '', '', 'Fatima Quraishi', '03212774370 ', 'baberali_09@outlook.com', 0, 4, 0, 'quetta', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000281, '#PRICE_750 (Stitch)kurti', 12, 93, 181, '5000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Artical name \r\nLoose Butterfly freel Sleves shirt\r\n\r\nMeasurement \r\nChest 19 \r\nLength 35\r\n\r\nFabric \r\nSelf Boski\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '510f03407b4a4e04a8308b44f43c8c1f.jpg', 'ec01606562f9ed185f02f4d254cf4d2a.jpg', '', '', '', '', '', '', '', '', '', '', 'online shoping', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 120, 'larkana', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000282, 'Pack Of 4 Shrugs No Polyster????', 12, 93, 181, '1200', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>#PRICE_1200\r\n\r\nPack Of 4 Shrugs No Polyster????\r\nIn Ur Choice Colours..\r\n\r\nDELIVERY IN ALL OVER PAKISTAN FOR PLACE ORDER & DETAILS CONTACT 0321 2774370 \r\nWHATSAPP-INBOX-CALL..!</pre>', '3132ec479a9d31aa89df51ea8d42576d.jpg', '', '', '', '', '', '', '', '', '', '', '', 'fazi baig', '0321 2774370 ', 'baberali_09@outlook.com', 0, 10, 110, 'hyrabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000283, 'Birds and set up', 10, 79, 0, '400', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Sweet birds!\r\n\r\nComplete Setup Spot Welded Cage Love Bird For SALE\r\n\r\nComplete Birds set up For SALE preferably all together\r\nIf Any One Interested to Purchase only Birds with Boxes that can be considered but I will not sell only Cage Until & Unless my All Birds Sold out.\r\n\r\nColony Cage Size 6’ X 6’ Spot welded almost 1 Year used Having 2 portion 6’ Front X 3’ High each Portion & 30" Depth\r\n\r\nLove Birds:-\r\n\r\n1 Confirmed Pair Violet DF \r\n1 Confirmed Pair Albino Black Eye \r\n1 Confirmed Pair Latino persnata\r\n3 Confirmed Pairs Orange Chest Black Head \r\n1 Confirmed Pair Blue mask\r\n1 Chicks Split of Voilt DF & Black head 3 months \r\n1 Chick Black head 3 months\r\n\r\nWith Boxes & Feeding trays & water trays\r\nAll setup sold together preferably, \r\nAll Birds are very healthy Active\r\n02 Lights are also fitted in cage \r\nOnly interested contact through Call or Inbox No Text please \r\nAll pictures are original\r\nCan be checked at Canal View near Thokhar Lahore\r\n0321 4471500</pre>', '04d1610d893b319f95c825b9cdfb803e.jpg', '', '', '', '', '', '', '', '', '', '', '', 'nida javed', '0321 4471500', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000284, 'Yellow Ringneck pair for sale', 10, 79, 0, '2900', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Yellow Ringneck pair for sale\r\nNeat & Clean Long tail\r\nFemale age 3 year Male age 4 year\r\nLocation Lahore Mozang\r\nContact num 03226983189</pre>', 'c01cd3e16ae36c9de7d6118e2e1afa0f.jpg', '', '', '', '', '', '', '', '', '', '', '', 'waleed mughal', '03226983189', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000285, 'Pure persion kittens????????', 10, 81, 0, '4000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Top Qulty ????????????\r\nWashroom traind ?\r\nHlty ND active ????????\r\nMore details....use inbox plz...\r\nWhatsApp nmbr 03239000272\r\nChska party plz dor dor rhy????????????????</pre>', '9ccf6a422325fdd21e42abc7e78538b7.jpg', '3deaa9d1db7ce248f6450e3b48fdbb61.jpg', '', '', '', '', '', '', '', '', '', '', 'maan cha', ' 03239000272', 'baberali_09@outlook.com', 0, 12, 70, 'Faisalabad', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000286, 'Silver LED lighting complete bed set', 9, 69, 0, '40000', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Silver LED on sides .\r\nBed , side tables & dressing with mirror\r\nMore designs available .\r\nVisit our showroom .\r\nContact us : 03201686864\r\n</pre>', '416120c45de86e487131cbe9c4f60c31.jpg', 'f29bcee21cf8835fee244063292898e5.jpg', '', '', '', '', '', '', '', '', '', '', 'Saim Raaj', ' 03201686864', 'baberali_09@outlook.com', 0, 12, 69, 'lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000287, '2500 pkr master copy', 12, 93, 181, '1500', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>2500 pkr unstitched\r\n,3400 stitch</pre>', 'bed4eff9ac519c34b69abaaeeaece7c4.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Zarshis Collection', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', ''),
(000000288, 'Creations Boutique', 12, 93, 181, '2570', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '<pre>Tarzz Blood Diamond WH17-29 Arabian Spice Silk Satin 3 Piece Un-Stitched - Warmly Yours Winter Collection 2017</pre>', '7c7093670af9d2b9471607aac76448df.jpg', '', '', '', '', '', '', '', '', '', '', '', 'Sohail Anwar', '0321 2774370 ', 'baberali_09@outlook.com', 0, 12, 69, 'Lahore', '', '2018-03-20', '2018-04-19', 'Unblocked', '');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id` int(255) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_name`) VALUES
(3, 'Azad Kashmir'),
(4, 'Balochistan'),
(5, 'Federally Administered Tribal Areas'),
(6, 'Gilgit Baltistan'),
(7, 'Islamabad Capital Territory'),
(10, 'Sindh'),
(11, 'Khyber Pakhtunkhwa'),
(12, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `youtube` text NOT NULL,
  `contact_email` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `twitter`, `google`, `youtube`, `contact_email`) VALUES
(1, 'https://www.facebook.com/Assabuurcom', 'https://twitter.com/', '', '<script src="https://apis.google.com/js/platform.js"></script>\r\n<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>', 'email@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL,
  `main_cat_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `main_cat_id`, `name`, `img`) VALUES
(1, '1', 'Mobile Phones', '1520071656mobiles resize.png'),
(2, '1', 'Tablets', '1517529047tablet.png'),
(3, '1', ' Accessories', '1518557536hand-gesture.png'),
(4, '2', 'Cameras & Accessories', '1518558060photo-camera.png'),
(5, '2', ' Computers & Accessories', '1517530091workspace.png'),
(6, '2', 'Games & Entertainment', '1518558212game-controller.png'),
(7, '2', 'Generators, UPS & Power Solutions', '1518558338electric-generator.png'),
(8, '2', 'Kitchen Appliances', '1518558450stove.png'),
(9, '2', 'TV - Video - Audio', '1518558523television.png'),
(10, '2', 'AC & Coolers', '1518558680air-conditioner.png'),
(11, '2', 'Fridges & Freezers', '1518558747fridge.png'),
(12, '2', 'Washing Machines & Dryers', '1518558790washing-machine.png'),
(13, '2', 'Other Home Appliances', '1518559087iron.png'),
(14, '3', 'Cars', '1518559140automobile.png'),
(15, '3', 'Buses, Vans & Trucks', '1518559235delivery-truck.png'),
(16, '3', 'Rickshaw & Chingchi', '1518559337rickshaw.png'),
(17, '3', 'Cars Accessories ', '1518559565wheel.png'),
(18, '3', 'Spare Parts', '1518559589car-parts.png'),
(19, '3', 'Boats', '1518559658boat.png'),
(20, '3', 'Tractors & Trailers', '1518559749tractor.png'),
(21, '3', 'Other Vehicles', '1518559881delivery-truck (1).png'),
(22, '4', 'Motorcycles', '1518559995motorcycle.png'),
(23, '4', 'Spare Parts ', '1518590482spark.png'),
(24, '4', 'Bicycles', '1518560261bicycle.png'),
(25, '4', 'Scooters', '1518560364vespa.png'),
(26, '4', 'ATV & Quads', '1518560432quad.png'),
(27, '5', 'Apartments & Flats', '1518560536apartments.png'),
(28, '5', 'Houses ', '1518560604house.png'),
(29, '5', 'Land & Plots', '1518560808forest.png'),
(30, '5', 'Portions & Floors', '1518560972flats.png'),
(31, '5', 'Shops - Offices - Commercial Space', '1518561066store.png'),
(32, '6', 'Online  ', '1518561262earn.png'),
(33, '6', 'Marketing  ', '1518561395megaphone.png'),
(34, '6', 'Advertising & PR  ', '1518587077billboard.png'),
(35, '6', 'Education  ', '1518587228bookshelf.png'),
(36, '6', 'Customer Service  ', '1518587308customer-service.png'),
(37, '6', ' Sales ', '1518587445hand-shake.png'),
(38, '6', ' IT & Networking', '1518587594meeting.png'),
(39, '6', '  Hotels & Tourism  ', '1518587659hotel (1).png'),
(40, '6', 'Clerical & Administration  ', '1518587721administrator.png'),
(41, '6', 'Human Resources  ', '1518587834meeting (1).png'),
(42, '6', 'Accounting & Finance ', '1518587957presentation.png'),
(43, '6', ' Manufacturing  ', '1518588099industrial-robot.png'),
(44, '6', 'Medical ', '1518588204stethoscope.png'),
(45, '6', 'Domestic Staff', '1518588662chef.png'),
(46, '6', 'Part - Time', '1518589931hourglass.png'),
(47, '7', 'Drivers & Taxi ', '1518590291taxi.png'),
(48, '7', ' Education & Classes  ', '1518590338presentation (1).png'),
(49, '7', ' Electronics & Computer Repair ', '1518590619laptop.png'),
(50, '7', 'Event Services  ', '1518590810calendar.png'),
(51, '7', 'Health & Beauty ', '1518590979toothbrush.png'),
(52, '7', 'Maids & Domestic Help ', '1518591052maid.png'),
(53, '7', ' Movers & Packers  ', '1518593337delivery-truck (2).png'),
(54, '7', 'Other Services  ', '1518593503tools.png'),
(55, '7', 'Travel & Visa  ', '1518593587visa.png'),
(56, '7', 'Web Development ', '1518593678computer.png'),
(57, '7', ' Home & Office Repair   ', '1518593906jigsaw.png'),
(58, '7', 'Catering & Restaurant   ', '1518593980catering.png'),
(59, '7', 'Farm & Fresh Food   ', '1518594199harvest.png'),
(60, '7', 'Car Rental', '1518595145car-key.png'),
(61, '8', 'Agriculture ', '1518595562corn.png'),
(62, '8', 'Construction & Heavy Machinery ', '1518595649demolishing.png'),
(63, '8', 'Medical & Pharma ', '1518595880microscope.png'),
(64, '8', '  Food & Restaurants   ', '1518595968diet.png'),
(65, '8', 'Trade & Industrial ', '1518596142settings.png'),
(66, '8', 'Business for Sale ', '1518596279sale-report.png'),
(67, '8', 'Other Business & Industry', '1518596345warehouse.png'),
(68, '9', 'Sofa & Chairs ', '1518596725chair.png'),
(69, '9', ' Beds & Wardrobes ', '1518596930bed.png'),
(70, '9', ' Home Decor ', '1518597132lamp.png'),
(71, '9', ' Tables & Dining ', '1518597206dinner.png'),
(72, '9', ' Garden & Outdoor ', '1518597337tree.png'),
(73, '9', ' Painting & Mirrors ', '1518597439dressing.png'),
(74, '9', ' Rugs & Carpets ', '1518597514rug.png'),
(75, '9', ' Curtains & Blinds ', '1518597576window.png'),
(76, '9', ' Office Furniture ', '1518597656desk.png'),
(77, '9', ' Other Household Items ', '1518597865french-press.png'),
(78, '10', 'Fish & Aquariums ', '1518597963fish.png'),
(79, '10', ' Birds ', '1518598060bird.png'),
(80, '10', ' Hens & Aseel  ', '1518598143hen.png'),
(81, '10', 'Cats ', '1518598233cat.png'),
(82, '10', ' Dogs ', '1518598347dog.png'),
(83, '10', '  Livestock ', '1518598737goat.png'),
(84, '10', '  Horses ', '1518598901horse.png'),
(85, '10', ' Pet Food & Accessories ', '1518599025pet-food.png'),
(86, '10', ' Other Animals ', '1518599210rabbit.png'),
(87, '11', 'Books & Magazines  ', '1518599459magazine.png'),
(88, '11', ' Musical Instruments ', '1518599577violin.png'),
(89, '11', ' Sports Equipment ', '1518599667american-football.png'),
(90, '11', ' Gym & Fitness ', '1518599747stationary-bike.png'),
(91, '11', ' Other Hobbies ', '1518599858palette.png'),
(92, '12', 'Accessories ', '1518600324glasses.png'),
(93, '12', '  Clothes ', '1518600422polo-shirt.png'),
(94, '12', '  Footwear ', '1518600565flip-flops.png'),
(95, '12', '  Jewellery ', '1518600679necklace.png'),
(96, '12', ' Make Up  ', '1518600739make-up.png'),
(97, '12', ' Skin & Hair ', '1518600825barbershop.png'),
(98, '12', ' Watches  ', '1518600873watches.png'),
(99, '12', ' Wedding ', '1518601192dress.png'),
(100, '12', ' Lawn & Pret ', '1518601242dress (1).png'),
(101, '12', ' Couture ', '1518601330dress (2).png'),
(102, '12', ' Other Fashion', '1518601398bag.png'),
(103, '13', 'Kids Furniture  ', '1518601496crib.png'),
(104, '13', '  Toys ', '1517529443train.png'),
(105, '13', ' Prams & Walkers ', '1518601621pushchair.png'),
(106, '13', ' Swings & Slides ', '1518601720swing.png'),
(107, '13', ' Kids Bikes ', '1518601795bicycle (1).png'),
(108, '13', ' Kids Accessories ', '1518601890backpack.png'),
(109, '6', 'Other Jobs', '1518589827valet.png'),
(110, '14', 'Pakistan Armed Forces', '1520265038soldier.png'),
(111, '14', 'Lawyers', '1520265265lawyer.png'),
(112, '14', 'Medical', '1520265327doctor.png'),
(113, '14', 'Artists And Theatres', '1520265580theater.png'),
(114, '14', 'Events', '1520265703catering.png'),
(115, '14', 'Groups And Associations', '1520266074team.png'),
(116, '14', 'Music, Bands, And Musicians', '1520266423stage.png'),
(117, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `street` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `first_name`, `last_name`, `phone`, `gender`, `birthday`, `username`, `email`, `password`, `street`, `city`, `state`, `zip`, `status`, `reason`) VALUES
(16, '', 'Muhammad', 'usman', '03345513026', 'Male', '', '12701@muhammad', 'musmanu231@gmail.com', '3b712de48137572f3849aabd5666a4e3', '', '', '', '', 'Activated', ''),
(17, '', 'baber', 'nawabi', '07790600400', 'Male', '', '91009@baber', 'babernawabi_10@hotmail.co.uk', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 'Activated', ''),
(18, '', 'Baber', 'Ali', '0310', 'Male', '', '10690@baber', 'baberali_09@outlook.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 'Activated', ''),
(19, '', 'Junaid', 'Zulkifal', '03350892747', 'Male', '', '7027@junaid', 'asian357@hotmail.co.uk', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 'Activated', ''),
(20, '', 'Ameer', 'Muslim', '03325153604', 'Male', '', '86568@ameer', 'ameer7an@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 'Activated', ''),
(21, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19598815_1419853588101012_7348816841764546502_n.jpg?oh=fed847f5c21175e726f73a7b35b34886&oe=5B4B0998', 'Ameer Muslá¸­m Chishti', '', '', 'male', '', '1673167559436279@facebook.com', '1673167559436279@facebook.com', '', '', '', '', '', 'Activated', ''),
(22, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/23231331_1104571689646133_7864147477820102635_n.jpg?oh=a1bc5715049850aa2ad5d9a7f0d8c09c&oe=5B33FEC7', 'Muhammad Usman', '', '', 'male', '', '1204098609693440@facebook.com', '1204098609693440@facebook.com', '', '', '', '', '', 'Activated', ''),
(23, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/24068371_1118537578283471_4949262708338539944_n.jpg?oh=a50475971837fbb1e8dcc560676950be&oe=5B428FD0', 'Muhammad Raza Saeed', '', '', 'male', '', '1186600611477167@facebook.com', '1186600611477167@facebook.com', '', '', '', '', '', 'Activated', ''),
(24, 'https://scontent.xx.fbcdn.net/v/t1.0-1/c15.0.50.50/p50x50/10354686_10150004552801856_220367501106153455_n.jpg?oh=3f6c91428fc256182541f697d6bb84d3&oe=5B3B0A2F', 'Abbas Hussain', '', '', 'male', '', '10156266617874661@facebook.com', '10156266617874661@facebook.com', '', '', '', '', '', 'Activated', ''),
(25, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/14330109_10202416978303519_9123209774306842616_n.jpg?oh=820c2f1ce13bfbad9fee123696275903&oe=5B312E28', 'Zaheer Abbass', '', '', 'male', '', '10204737723720704@facebook.com', '10204737723720704@facebook.com', '', '', '', '', '', 'Activated', ''),
(26, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/23131818_1932892973640105_5831565457134367071_n.jpg?oh=304c9febf1e8a138501fe22848d6f2b4&oe=5B2ACA37', 'Imran Ali', '', '', 'male', '', '1995048450757890@facebook.com', '1995048450757890@facebook.com', '', '', '', '', '', 'Activated', ''),
(27, 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/25158007_122398245214766_5663350014140032079_n.jpg?_nc_cat=0&oh=93b0085f47ff21cfc37fe1c166bc71dc&oe=5B467022', 'Shahbaz Ali', '', '', 'male', '', '182314325889824@facebook.com', '182314325889824@facebook.com', '', '', '', '', '', 'Activated', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_others`
--
ALTER TABLE `brand_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_favorites`
--
ALTER TABLE `my_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_ad`
--
ALTER TABLE `post_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brand_others`
--
ALTER TABLE `brand_others`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(9) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `my_favorites`
--
ALTER TABLE `my_favorites`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post_ad`
--
ALTER TABLE `post_ad`
  MODIFY `id` int(9) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=289;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
