-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 05:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_activity`
--

CREATE TABLE `detail_activity` (
  `detail_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_activity`
--

INSERT INTO `detail_activity` (`detail_id`, `title`, `description`, `img`) VALUES
(1, 'การแข่งเพาะกาย รุ่น 20 ปี', 'ในวันที่ทุกคนรอคอย การแข่งขันเพาะกายครั้งยิ่งใหญ่ ณ ราชภัฏนครปฐม ได้เปิดฉากขึ้นอย่างดุดัน! นักกีฬาเพาะกายจากทั่วประเทศรวมตัวกันที่นี่ เพื่อต่อสู้ด้วยพลังและความมุ่งมั่น ในสนามที่เต็มไปด้วยความเข้มข้นและบรรยากาศที่ร้อนระอุ\r\n\r\nการแข่งขันครั้งนี้ไม่ใช่เพียงแ', 'https://img.pikbest.com/wp/202408/bodybuilder-3d-line-art-drawing-of-the-sport-and-activity-bodybuilding_9826327.jpg!w700wp'),
(2, 'john', '1111', 'https://c8.alamy.com/compfr/2bxcdax/le-capitaine-strong-appelle-a-la-guerre-sur-fond-blanc-cet-homme-officiel-dans-le-chemin-de-decoupe-est-tres-utile-pour-les-creations-de-conception-graphique-3d-illustrati-2bxcdax.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_activity`
--
ALTER TABLE `detail_activity`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_activity`
--
ALTER TABLE `detail_activity`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
