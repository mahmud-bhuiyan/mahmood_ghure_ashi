-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 06:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghure_ashi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

CREATE TABLE `bookpackage` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `bookingDate` date NOT NULL,
  `delegate` int(11) NOT NULL,
  `payment_methood` int(11) NOT NULL,
  `payment_state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`id`, `user_name`, `user_id`, `package_id`, `package_name`, `price`, `time`, `img`, `state`, `bookingDate`, `delegate`, `payment_methood`, `payment_state`) VALUES
(16, 'u1', 2, 2, 'Sixty Dome Mosque', 1500, '2021-03-16 11:46:29', 'sixty-dome-mosque-600-gtm1.jpg', 2, '2021-03-11', 3, 1, 0),
(17, 'u1', 2, 1, 'Mangrove Forest', 1500, '2021-03-20 14:49:40', 'sundorbon2.jpg', 2, '2021-03-17', 4, 1, 0),
(18, 'u3', 6, 3, 'Sri Mongol', 2000, '2021-03-20 16:16:07', 'srimongol1.jpg', 2, '2021-03-19', 2, 1, 0),
(19, 'b', 13, 1, 'Mangrove Forest', 1500, '2021-03-20 16:16:06', 'sundarban1.jpg', 1, '2021-03-31', 3, 1, 0),
(20, 'j', 14, 3, 'Sreemangal', 2000, '2021-03-20 16:25:56', 'srimongol1.jpg', 2, '2021-03-30', 2, 1, 0),
(21, 'asdf', 15, 1, 'Mangrove Forest', 1500, '2021-03-20 16:21:32', 'sundarban1.jpg', 0, '2021-03-23', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tal_admin`
--

CREATE TABLE `tal_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tal_admin`
--

INSERT INTO `tal_admin` (`admin_id`, `admin_email`, `admin_name`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin', '123'),
(2, 'bh.mahmud@gmail.com', 'mahmud', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `msg_id` int(11) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_email` text NOT NULL,
  `msg_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`msg_id`, `sender_name`, `sender_email`, `msg_body`) VALUES
(3, 'Test', 'w@gmail.com', 'test test'),
(4, 'Abir', 'Abir@gmail.com', 'Hello'),
(5, 'A', 'A@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guide`
--

CREATE TABLE `tbl_guide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobailenumber` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guide`
--

INSERT INTO `tbl_guide` (`id`, `name`, `nationality`, `address`, `mobailenumber`, `area`, `user_name`, `pic`, `password`, `status`) VALUES
(8, 'Mustafizur Rahman', 'Bangladeshi', 'Barisal', 1748613496, 'Barisal', 'Barisal', 'g-21.jpg', '123456', 1),
(9, 'Anamul Haque', 'Bangladeshi', 'Khulna', 1744613494, 'Khulna', 'Anamul', 'g-1.jpg', '123456', 1),
(10, 'Rahi Chowdhury', 'Bangladeshi', 'Sylhet', 1748613491, 'Sylhet', 'Rahi', 'g-2.jpg', '123456', 1),
(12, 'Mominul', 'Bangladeshi', 'Chittagong', 1741613488, 'Bandarban', 'Mominul', 'g-5.jpg', '123456', 1),
(13, 'Saif Uddin', 'Bangladeshi', 'Sylhet', 1748613445, 'Sylhet', 'Saif', 'g-6.jpg', '123456', 1),
(14, 'Mashrafee', 'Bd', 'Moulvibazar', 1722345670, 'Moulvibazar', 'Mash', 'team_3.jpg', '123456', 1),
(15, 'Mushfiq', 'Bd', 'Rangamati', 1756432213, 'Rangamati', 'Mushi', 'g-7.jpg', '123456', 1),
(18, 'Asif', 'Bangladeshi', 'Chittagong', 1722867896, 'Chittagong', 'Chittagong', 'g-11.jpg', '123456', 1),
(22, 'Rasel', 'Bangladeshi', 'Sylhet', 1765432109, 'Sylhet', 'Sylhet', 'g-61.jpg', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guidebook`
--

CREATE TABLE `tbl_guidebook` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guidebook`
--

INSERT INTO `tbl_guidebook` (`id`, `user_name`, `user_id`, `guide_id`, `state`) VALUES
(18, 'u1', 2, 8, 2),
(19, 'u3', 6, 15, 2),
(20, 'u5', 8, 9, 1),
(21, 'u3', 6, 8, 0),
(22, 'b', 13, 9, 0),
(23, 'j', 14, 10, 0),
(24, 'asdf', 15, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guide_rating`
--

CREATE TABLE `tbl_guide_rating` (
  `guide_id` int(11) NOT NULL,
  `up` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guide_rating`
--

INSERT INTO `tbl_guide_rating` (`guide_id`, `up`, `down`, `user_id`) VALUES
(5, 0, 1, 4),
(8, 0, 1, 4),
(9, 0, 1, 4),
(12, 0, 1, 4),
(5, 1, 0, 4),
(4, 0, 1, 5),
(5, 0, 1, 3),
(8, 1, 0, 4),
(8, 1, 0, 4),
(8, 1, 0, 4),
(9, 1, 0, 4),
(9, 1, 0, 4),
(11, 1, 0, 4),
(10, 1, 0, 4),
(13, 1, 0, 4),
(5, 1, 0, 6),
(8, 1, 0, 6),
(9, 1, 0, 6),
(12, 1, 0, 6),
(11, 1, 0, 6),
(10, 1, 0, 6),
(13, 1, 0, 6),
(5, 1, 0, 2),
(8, 1, 0, 2),
(16, 1, 0, 2),
(15, 1, 0, 2),
(10, 1, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `city_name`) VALUES
(1, 'Bandarban'),
(2, 'Chittagong'),
(4, 'Khulna'),
(5, 'Sylhet'),
(8, 'Moulvibazar'),
(9, 'Rangamati'),
(14, 'Coxs Bazar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `package_name`, `img`, `body`, `price`) VALUES
(1, 'Mangrove Forest', 'sundarban1.jpg', 'Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Sundarbans is located in between two neighboring countries – Bangladesh and India. Majority of the forest is located in Bangladesh. It is home of the last remaining tiger', 1500),
(2, 'Sixty Dome Mosque', 'sixty-dome.jpg', 'The Sixty Dome Mosque Shat Gombuj Moshjid more commonly known as Shait Gambuj Mosque or Saith Gunbad Masjid, is a mosque in Bangladesh. It is a part of the Mosque City of Bagerhat, a UNESCO World Heritage Site. It is the largest mosque in Bangladesh.', 1500),
(3, 'Sreemangal', 'srimongol1.jpg', 'It is said the name Sreemangal (or Srimangal) is named after Sri Das and Mangal Das; two brothers who settled on the banks of the Hail Haor.[2] A copper plate of Raja Marundanath from the 11th century was found in Kalapur.', 2000),
(4, 'Shrine of Hazrat Shah Jalal (R:)', 'Capture.PNG', 'This fascinating and atmospheric shrine of the revered 14th-century Sufi saint Shah Jalal is one of Bangladesh\'s biggest pilgrimage sites. Housing a mosque (masjid) and the main tomb (mazar), the complex is accessed via an open staircase from the East Dar', 2000),
(5, 'Shrine of Hazrat Shah-Paran (R:)', 'Capture1.PNG', 'Hazrat Shah Paran (R) is one of 360 awliya allah (companions) who came to Bangladesh with hazrat shah jalal (RA) to spread islam in the region. Hazrat Shah Paran (RA) arrived in India in 1303 AD accompanied his uncle, Hazrat Shah Jalal(R).', 3000),
(6, 'Lalbagh Fort', 'lalbag.jpg', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh.The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah.', 500),
(9, 'A', 'bogalek1.jpg', 'lkjhgfds', 2000),
(10, 'Mahmud', 'Capture21.PNG', 'sdfghbnjmj', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `category` int(11) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`id`, `place_name`, `place_description`, `img`, `status`, `category`, `area`) VALUES
(1, 'Sundarbans', 'Sundarbans is the largest mangrove forest on earth and a UNESCO world heritage site. Sundarbans is located in between two neighboring countries – Bangladesh and India. Majority of the forest is located in Bangladesh. It is home of the last remaining Bengal tigers in the world and much other\r\n<br> wildlife. The environment of Sundarbans is tranquilizing and visiting this forest could be a once in a lifetime experience. That is why Sundarbans comes as number one on our list of the best places to visit in Bangladesh.', 'sundarban.jpg', 0, 2, 'Khulna'),
(3, 'Srimangal', 'Srimangal is the tea capital of Bangladesh, located in the north-eastern part of the country. You’ll find lush green tea gardens anywhere you go here. This is one of the few places in the country where if you look around, you may not find any other people anywhere except you. A really nice and calm place. Cycling through the trails inside the tea plantations here could be one of the best things you can do in Bangladesh.<br> Also worth visiting is the Lawachhara National Park, and trek to Hamham waterfalls. You can easily spend a few days here with nature. Srimangal comes as number three on our list of the best places to visit in Bangladesh.', 'srimongol.jpg', 0, 2, 'Moulvibazar'),
(5, 'Lalakhal', 'Lalakhal,which is another top tourist attraction in Jaintapur Upazilla, is covered with hills, natural forests, tea gardens, and rivers under the Jainta Hill which comprises part of the Meghalaya Ranges of India. Flowing from the Indian part, the river Myntdu enters Lalakhal as the Saree and meets the river Guaiyan after passing Sarighat. Over a stretch of nearly 12 km of the river from Lalakhal to Sarighat, the colour of the water stays transparent green in winter (as well as in other seasons when it does not rain) due to the minerals flowing with water and the sandy river bed.', 'lalakhal.jpg', 0, 2, 'Sylhet'),
(8, 'Bagakain Lake', 'Bogakain Lake, also called Baga Lake or Boga Lake, is a lake located in Ruma Upazila in the hill district Bandarban, Bangladesh.[1] It is a natural sweet and deep water lake. Its height from sea level is nearly 1,246 feet (380 m). Geologists believe that it was created by collection of rain water in summer. The lake is irregular in shape.[1] A team of geologists surveyed this lake in 1973. They found the lake\'s water to be too acidic for any form of life. By the year 1995, the lake\'s water became abundant with plants and fish. The local residents culture and gather Tilapia fish in this lake.', 'bogalek.jpg', 0, 2, 'Bandarban'),
(10, 'Sajek Valley', 'Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District. The valley is 1,476 feet (450 m) above sea level. Sajek valley is known as the Queen of Hills & Roof of Rangamati.The name of Sajek Valley came from the Sajek River that originates from Karnafuli river. The Sajek river works as a border between Bangladesh and India.', 'sajek.jpg', 0, 13, 'Rangamati'),
(11, 'Patenga Sea Beach', 'Patenga  is a sea beach of the Bay of Bengal, located 14 kilometres (8.7 mi) south from the port city of Chattogram, Bangladesh. It is near to the mouth of the Karnaphuli River. Patenga is a popular and renowned tourist spot. The beach is very close to the Bangladesh Naval Academy of the Bangladesh Navy and Shah Amanat International Airport.The Patenga sea beach offers a nice walkway for the local and to the tourist alike.', 'stmartinIsland.jpg', 0, 4, 'Chittagong'),
(12, 'Cox\'s Bazar Beach', 'Cox\'s Bazar Beach, located at Cox\'s Bazar, Bangladesh, is the longest natural sea beach in the world running 150 kilometres (93 mi) and 3rd longest beach after Ninety Mile Beach of Australia and Praia do Cassino of Brazil. It is the top tourist destination of Bangladesh.The name Cox\'s Bazar originated from the name of a British East India Company officer, Captain Hiram Cox, who was appointed as the Superintendent of Palonki (today\'s Cox\'s Bazar) outpost. He succeeded Warren Hastings, who became the Governor of Bengal following the British East India Company Act in 1773.', 'cox.jpg', 0, 14, 'CoxsBazar'),
(13, 'Kaptai Lake', 'Kaptai Lake is the largest lake in Bangladesh. It is located in the Kaptai Upazila under Rangamati District of Chittagong Division. The lake was created as a result of building the Kaptai Dam on the Karnaphuli River, as part of the Karnaphuli Hydro-electric project. The Kaptai Lake\'s average depth is 100 feet (30 m) and maximum depth is 490 feet (150 m', 'kaptai.jpg', 0, 13, 'Rangamati'),
(14, 'Nil Giri', 'Nil Giri is the highest hill resort of Bangladesh with amazing natural beauty. This Resort is located 47 km South East of Bandarban town on Chimbuk Range at a height of 2400 feet from sea level. It has a high-class residential accommodation that makes a difference. You will be amazed when you will see that the cloudy sky often kisses the peaks of the hills. Gentle breeze blows down the hillside and thin clouds float so close that you can touch the clouds from the spot!', 'bandarban-2.PNG', 0, 2, 'Bandarban'),
(15, 'Foy\'s Lake', 'Foy\'s Lake is a man-made lake in Chittagong, Bangladesh. It was created in 1924 by constructing a dam across the stream that came down from the hills in the northern part of Chittagong. The purpose of creating an artificial lake was to provide water to the residents of the railway colony. It was named after Mr. Foy, a Railway engineer, believed to materialize said project. Pahartali was essentially a railway town containing a workshop, yard, and shed. Presently, a carriage workshop, diesel workshop, loco shed, laboratory, stores, electric workshop, school (established in 1924) are located here.', 'foyj_lake.jpg', 0, 4, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placetype`
--

CREATE TABLE `tbl_placetype` (
  `id` int(11) NOT NULL,
  `ptype_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_placetype`
--

INSERT INTO `tbl_placetype` (`id`, `ptype_name`) VALUES
(2, 'Bandarban'),
(4, 'Chittagong'),
(6, 'Khulna'),
(10, 'Sylhet'),
(12, 'Moulvibazar'),
(13, 'Rangamati'),
(14, 'CoxsBazar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mobaile_number` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `user_name`, `mobaile_number`, `pic`, `password`, `status`, `type`) VALUES
(2, 'u1', 'u1', '01748613498', 'g-3.jpg', '123456', 1, 0),
(4, 'u2', 'u2', '01749613498', 'g-3.jpg', '123', 1, 0),
(6, 'u3', 'u3', '01740613498', 'g-3.jpg', '123', 1, 0),
(7, 'u4', 'u4', '01749613789', 'g-3.jpg', '123', 1, 0),
(8, 'u5', 'u5', '01749613890', 'g-3.jpg', '123', 1, 0),
(11, 'A1', 'a1', '34567890', 'g-3.jpg', '123456', 1, 0),
(13, 'b', 'b', '0171297498686', 'g-8.jpg', '123456', 0, 0),
(14, 'j', 'j', '9870836975', 'g-21.jpg', '123456', 0, 0),
(15, 'asdf', 'asdf', '4569876543', 'g-6.jpg', '123456', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tal_admin`
--
ALTER TABLE `tal_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guidebook`
--
ALTER TABLE `tbl_guidebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_placetype`
--
ALTER TABLE `tbl_placetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpackage`
--
ALTER TABLE `bookpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tal_admin`
--
ALTER TABLE `tal_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_guidebook`
--
ALTER TABLE `tbl_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_placetype`
--
ALTER TABLE `tbl_placetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
