-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 04:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `price` double NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `accessories_types`
--

CREATE TABLE `accessories_types` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories_types`
--

INSERT INTO `accessories_types` (`id`, `title`) VALUES
(1, 'Mouse'),
(2, 'Keyboard'),
(3, 'Headset'),
(4, 'Speakers'),
(5, 'USB device'),
(6, 'Others'),
(7, 'Web cameras');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Tharindu', 'Ariyawansha', 'tdariyawanshs@gmail.com', '1710238');

-- --------------------------------------------------------

--
-- Table structure for table `builds`
--

CREATE TABLE `builds` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `purpose` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` double NOT NULL,
  `processor` varchar(150) NOT NULL,
  `motherboard` varchar(50) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `graphics_card` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `psu` varchar(50) NOT NULL,
  `casing` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `builds`
--

INSERT INTO `builds` (`id`, `seller_id`, `purpose`, `image`, `price`, `processor`, `motherboard`, `ram`, `graphics_card`, `storage`, `psu`, `casing`, `description`) VALUES
(1, 0, 1, '418.jpg', 335000, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 8GB DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', 'CPU cooler - MSI MAG CORELIQUID 240R ARGB LIQUID COOLER , 03 Years Warranty'),
(2, 0, 1, '651.jpg', 325500, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 8GB DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', '* We have used THERMALTAKE TH240 ARGB SYNC AIO LIQUID as the CPU cooler. * 3 Years Warranty'),
(3, 0, 2, '673.jpg', 341500, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 16GB (8x2) DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', 'CPU cooler - THERMALTAKE TH240 ARGB SYNC AIO LIQUID , 03 Years Warranty'),
(4, 0, 3, '254.jpeg', 230000, 'INTEL CORE i5 10400F 3.2Ghz 12 threds 6M cache', 'Gigabyte H 460 ', 'Corsair 2666Mhz DDR 4 16 GB (8 x 2)', 'Gigabyte Auros GTX 1060 Ti 6 GB oc edition', 'Western Digital 500 GB hdd', 'Armaggeddon voltron 550W Broonze', 'Armaggeddon Vulcan v2x', '3 Year warrenty'),
(5, 5, 5, '893.png', 139000, 'CORE i5 9th GN', 'LENOVO IDEACENTRE 3 DESKTOP', '4 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(LENOVO IDEACENTRE 3 DESKTOP)', '(LENOVO IDEACENTRE 3 DESKTOP)', ''),
(6, 5, 5, '196.jpg', 118000, ' CORE i3 9GN', 'LENOVO V330 AIO', '4 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(LENOVO V330 AIO)', '(LENOVO V330 AIO)', ''),
(7, 5, 5, '258.png', 169000, 'I710GN', 'LENOVO IDEACENTRE 3 DESKTOP', '8 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1TB 5400RPM HDD', '(LENOVO IDEACENTRE)', '(LENOVO IDEACENTRE)', '19â€³ Lenovo Monitor'),
(9, 5, 5, '656.png', 85000, 'Intel Pentium G6400 Processor (4M Cache, 4.00 GHz', 'ACER VES2740G G6400', '4GB DDR4 RAM', 'Integrated Graphic', '1TB HDD', '(ACER VES2740G G6400)', '(ACER VES2740G)', '18.5â€³ Monitor'),
(10, 5, 1, '980.png', 160000, 'i7 10GN', 'HP PRODESK 400 G7', '8GB', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(HP PRODESK 400 G7)', '(HP PRODESK)', ''),
(11, 5, 5, '262.png', 130000, 'i5 10GN', 'HP PRODESK 400 G7', '8 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(HP PRODESK)', '(HP PRODESK)', ''),
(12, 5, 5, '190.jpg', 158000, '10th Gen Intel Core i5 10400', 'DELL i5 VOSTRO 3888 DESKTOP', '8GB DDR4 ', 'Integrated IntelÂ® UHD Graphics 630', '1TB HDD', '(DELL VOSTRO 3888 DESKTOP)', '(DELL VOSTRO 3888 DESKTOP)', ''),
(13, 5, 5, '140.jpg', 62000, 'Intel Celeron G5920 Processor', 'Gigabyte H410M ', 'DDR4 2666MHz 4GB', 'Integrated IntelÂ® UHD Graphics 630', 'Seagate 1TB 5400RPM', 'ATX Powersupply', 'ATX Casing', 'DVD Writer'),
(14, 5, 5, '489.png', 70000, 'NTEL G5420 3.8GHz', 'ASUS PRIME H310M-D R2.0', 'DDR4 MEMORY KINGSTON 8GB 2666MHZ DESKTOP', 'Integrated IntelÂ® UHD Graphics 630', 'SEAGATE 1TB 5400RPM INTERNAL HARD DISK', 'ATX POWER SUPPLY', 'ATX CASING', 'LEXAR NM100 128GB M.2 2280 SATAIII'),
(15, 5, 1, '233.png', 721000, 'AMD Ryzen 7 3800X Processor 8 Cores 16 Threads', 'ASUS B550M', '32GB 3200MHz RAM (16GB x 2)', 'PNY Geforce RTX 3080Ti 12GB Gaming VGA', '1TB 5400RPM Desktop Hard Disk', 'RGB-1050W Power Supply', 'Gamemax Revolt Casing', 'Lexar 250GB NVME SSD M.2'),
(16, 5, 1, '689.png', 300000, 'Intel i5 â€“ 10400 2.9GHz processor | 6 Cores 12 Threads 12MB Cash', 'ASUS ROG Strix Z490-G WiFi Motherboard', 'Team 16GB Vulcan Z 3200MHz DDR4 RAM', 'Nvidia TUF-GTX1650 4GB DDR6 VGA Card', '2TB 5400RPM Desktop Hard Disk', 'Gamemax RGB â€“ 850W Power Supply', 'MSI Mag Forge Gaming Casing', ''),
(17, 5, 5, '103.png', 122500, 'Intel Core i5 â€“ 10400 Processor', 'Asus Prime H410M-E MotherBoard', 'Team 8GB Gaming Elite Plus 2666MHZ RAM', 'Integrated IntelÂ® UHD Graphics 630', 'Lexar NS100 256GB SSD SATA 2.5', '600W Power Supply', 'Thermaltake Casing', ''),
(18, 5, 5, '336.jpg', 0, 'Intel Core i3 9th Gen', 'LENOVO V330 AIO', '4GB', 'Integrated IntelÂ® UHD Graphics 630', '1TB HDD', '(LENOVO V330 AIO)', '(LENOVO V330 AIO)', ''),
(19, 5, 1, '324.png', 85000, 'Intel Pentium G6400 Processor (4M Cache, 4.00 GHz)', 'Acer Veriton VES2740G', '4GB DDR4 RAM', 'Integrated Graphic', '1TB HDD', '(Acer Veriton VES2740G)', '(Acer Veriton VES2740G)', ''),
(20, 5, 1, '651.jpg', 325500, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 8GB DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', '* We have used THERMALTAKE TH240 ARGB SYNC AIO LIQUID as the CPU cooler. * 3 Years Warranty'),
(21, 5, 1, '418.jpg', 335000, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 8GB DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', 'CPU cooler - MSI MAG CORELIQUID 240R ARGB LIQUID COOLER , 03 Years Warranty'),
(22, 5, 2, '673.jpg', 341500, 'INTEL I5 12600K 10 CORE/16 THREADS', 'ASUS PRIME Z690M-PLUS D4 12TH GEN MOTHERBOARD', 'THERMALTAKE TOUGHRAM 16GB (8x2) DDR4 3200MHz RGB', 'ASUS TUF GAMING GTX 1650 4GB OC', 'LEXAR NM620 M.2 2280 PCIe GEN 3X4 3300 MB/s 256GB ', 'ASUS ROG STRIX 550W GOLD FULLY MODULAR', 'COMMANDER G33 TG ARGB MID-TOWER CHASSIS', 'CPU cooler - THERMALTAKE TH240 ARGB SYNC AIO LIQUID , 03 Years Warranty'),
(23, 5, 3, '254.jpeg', 230000, 'INTEL CORE i5 10400F 3.2Ghz 12 threds 6M cache', 'Gigabyte H 460 ', 'Corsair 2666Mhz DDR 4 16 GB (8 x 2)', 'Gigabyte Auros GTX 1060 Ti 6 GB oc edition', 'Western Digital 500 GB hdd', 'Armaggeddon voltron 550W Broonze', 'Armaggeddon Vulcan v2x', '3 Year warrenty'),
(24, 5, 5, '893.png', 13900000, 'CORE i5 9th GN', 'LENOVO IDEACENTRE 3 DESKTOP', '4 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(LENOVO IDEACENTRE 3 DESKTOP)', '(LENOVO IDEACENTRE 3 DESKTOP)', ''),
(25, 0, 5, '196.jpg', 118000, ' CORE i3 9GN', 'LENOVO V330 AIO', '4 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(LENOVO V330 AIO)', '(LENOVO V330 AIO)', ''),
(26, 5, 5, '258.png', 169000, 'I710GN', 'LENOVO IDEACENTRE 3 DESKTOP', '8 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1TB 5400RPM HDD', '(LENOVO IDEACENTRE)', '(LENOVO IDEACENTRE)', '19â€³ Lenovo Monitor'),
(27, 0, 5, '656.png', 85000, 'Intel Pentium G6400 Processor (4M Cache, 4.00 GHz', 'ACER VES2740G G6400', '4GB DDR4 RAM', 'Integrated Graphic', '1TB HDD', '(ACER VES2740G G6400)', '(ACER VES2740G)', '18.5â€³ Monitor'),
(28, 5, 1, '980.png', 160000, 'i7 10GN', 'HP PRODESK 400 G7', '8GB', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(HP PRODESK 400 G7)', '(HP PRODESK)', ''),
(29, 5, 5, '262.png', 130000, 'i5 10GN', 'HP PRODESK 400 G7', '8 GB DDR4 2666MHz', 'Integrated IntelÂ® UHD Graphics 630', '1 TB 7200 RPM HDD', '(HP PRODESK)', '(HP PRODESK)', ''),
(30, 5, 5, '190.jpg', 158000, '10th Gen Intel Core i5 10400', 'DELL i5 VOSTRO 3888 DESKTOP', '8GB DDR4 ', 'Integrated IntelÂ® UHD Graphics 630', '1TB HDD', '(DELL VOSTRO 3888 DESKTOP)', '(DELL VOSTRO 3888 DESKTOP)', ''),
(31, 5, 5, '', 62000, 'Intel Celeron G5920 Processor', 'Gigabyte H410M ', 'DDR4 2666MHz 4GB', 'Integrated IntelÂ® UHD Graphics 630', 'Seagate 1TB 5400RPM', 'ATX Powersupply', 'ATX Casing', 'DVD Writer'),
(32, 5, 5, '489.png', 70000, 'NTEL G5420 3.8GHz', 'ASUS PRIME H310M-D R2.0', 'DDR4 MEMORY KINGSTON 8GB 2666MHZ DESKTOP', 'Integrated IntelÂ® UHD Graphics 630', 'SEAGATE 1TB 5400RPM INTERNAL HARD DISK', 'ATX POWER SUPPLY', 'ATX CASING', 'LEXAR NM100 128GB M.2 2280 SATAIII'),
(33, 5, 1, '233.png', 721000, 'AMD Ryzen 7 3800X Processor 8 Cores 16 Threads', 'ASUS B550M', '32GB 3200MHz RAM (16GB x 2)', 'PNY Geforce RTX 3080Ti 12GB Gaming VGA', '1TB 5400RPM Desktop Hard Disk', 'RGB-1050W Power Supply', 'Gamemax Revolt Casing', 'Lexar 250GB NVME SSD M.2'),
(34, 5, 1, '689.png', 300000, 'Intel i5 â€“ 10400 2.9GHz processor | 6 Cores 12 Threads 12MB Cash', 'ASUS ROG Strix Z490-G WiFi Motherboard', 'Team 16GB Vulcan Z 3200MHz DDR4 RAM', 'Nvidia TUF-GTX1650 4GB DDR6 VGA Card', '2TB 5400RPM Desktop Hard Disk', 'Gamemax RGB â€“ 850W Power Supply', 'MSI Mag Forge Gaming Casing', ''),
(35, 5, 5, '103.png', 122500, 'Intel Core i5 â€“ 10400 Processor', 'Asus Prime H410M-E MotherBoard', 'Team 8GB Gaming Elite Plus 2666MHZ RAM', 'Integrated IntelÂ® UHD Graphics 630', 'Lexar NS100 256GB SSD SATA 2.5', '600W Power Supply', 'Thermaltake Casing', ''),
(36, 5, 5, '336.jpg', 118000, 'Intel Core i3 9th Gen', 'LENOVO V330 AIO', '4GB', 'Integrated IntelÂ® UHD Graphics 630', '1TB HDD', '(LENOVO V330 AIO)', '(LENOVO V330 AIO)', ''),
(37, 5, 1, '324.png', 85000, 'Intel Pentium G6400 Processor (4M Cache, 4.00 GHz)', 'Acer Veriton VES2740G', '4GB DDR4 RAM', 'Integrated Graphic', '1TB HDD', '(Acer Veriton VES2740G)', '(Acer Veriton VES2740G)', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswrd` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `pswrd`, `district`, `mobile`, `picture`, `status`) VALUES
(1, 'Tharindu', 'Ariyawansha', 'tdariyawanshs@gmail.com', '1710238', 'Kurunegala', 783199592, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `title`) VALUES
(1, 'Colombo'),
(2, 'Gampaha'),
(3, 'Kaluthara'),
(4, 'Matale'),
(5, 'Kandy'),
(6, 'Nuwara Eliya'),
(7, 'Kurunegala'),
(8, 'Puttalam'),
(9, 'Anuradhapura'),
(10, 'Polonnaruwa'),
(11, 'Galle'),
(12, 'Matara'),
(13, 'Hambantota'),
(14, 'Ratnapura'),
(15, 'Kegalle'),
(16, 'Badulla'),
(17, 'Monaragala'),
(18, 'Ampara'),
(19, 'Batticaloa'),
(20, 'Trincomalee'),
(21, 'Jaffna'),
(22, 'Kilinochchi'),
(23, 'Vavuniya'),
(24, 'Mannar'),
(25, 'Mulathiu');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `gpu` varchar(100) NOT NULL,
  `storage` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `seller_id`, `image`, `title`, `processor`, `ram`, `gpu`, `storage`, `description`, `price`) VALUES
(1, 0, '481.jpg', 'Asus VIVOBOOK 15 OLED K513EA i3', 'Intel®️ Core™️ i3-1115G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz)', '4GB DDR4 3200MHZ', 'Intel®️ UHD Graphics', '512GB NVME SSD', ' 02 YEARS WARRANTY + 15.6\" 1920x1080 OLED DCI-P3: 100%-Color gamut PANTONE Validated + 1.8kg, 42WHrs + FREE ASUS BACKPACK + Asus Mouse + Geniune Windows 10 Home ', 157000),
(2, 0, '481.jpg', 'Asus VIVOBOOK 15 OLED K513EA i3', 'Intel®️ Core™️ i3-1115G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz)', '4GB DDR4 3200MHZ', 'Intel®️ UHD Graphics', '512GB NVME SSD', ' 02 YEARS WARRANTY + 15.6\" 1920x1080 OLED DCI-P3: 100%-Color gamut PANTONE Validated + 1.8kg, 42WHrs + FREE ASUS BACKPACK + Asus Mouse + Geniune Windows 10 Home ', 157000),
(3, 5, '481.jpg', 'Asus VIVOBOOK 15 OLED K513EA i3', 'Intel®️ Core™️ i3-1115G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz)', '4GB DDR4 3200MHZ', 'Intel®️ UHD Graphics', '512GB NVME SSD', ' 02 YEARS WARRANTY + 15.6\" 1920x1080 OLED DCI-P3: 100%-Color gamut PANTONE Validated + 1.8kg, 42WHrs + FREE ASUS BACKPACK + Asus Mouse + Geniune Windows 10 Home ', 157000),
(4, 5, '707.jpg', 'MSI Creator', 'Core I7 RTX 3060', '8GB DDR4 ', 'Integrated IntelÂ® UHD Graphics 630', '1TB HDD', '', 550000);

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'Tharindu', 'tdariyawanshs@gmail.com', 'Request', 'Hi..');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `part_type`
--

CREATE TABLE `part_type` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part_type`
--

INSERT INTO `part_type` (`id`, `title`) VALUES
(1, 'Memory'),
(2, 'Processors'),
(3, 'Motherboards'),
(4, 'Graphics cards'),
(5, 'Storage'),
(6, 'Power supply'),
(7, 'Casing'),
(8, 'Coolers'),
(9, 'Cables'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `purposes`
--

CREATE TABLE `purposes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purposes`
--

INSERT INTO `purposes` (`id`, `title`) VALUES
(1, 'Graphics designing and Videography'),
(2, 'Gaming'),
(3, 'Developing'),
(4, 'Workstations'),
(5, 'Normal use');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `seller_id`, `item_id`, `cus_id`, `type`, `status`) VALUES
(6, 0, 10, 1, 'computers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psswrd` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `logo` text NOT NULL,
  `shopname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `fname`, `lname`, `email`, `psswrd`, `district`, `mobile`, `logo`, `shopname`, `address`) VALUES
(1, 'Tharindu', 'Ariyawansha', 'tdariyawanshs@gmail.com', '1710238', 'Kurunegala', 783199592, 'sellers.png', 'Trick5t3r pvt. ltd.', 'MC,\r\nKurunegala');

-- --------------------------------------------------------

--
-- Table structure for table `sitereviews`
--

CREATE TABLE `sitereviews` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitereviews`
--

INSERT INTO `sitereviews` (`id`, `customer`, `comment`, `status`) VALUES
(17, 1, 'Hello world', 1),
(18, 1, 'Hello world', 1),
(19, 1, 'Hello World', 1),
(20, 1, 'Good Morning', 1),
(23, 1, 'Kurunegala', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessories_types`
--
ALTER TABLE `accessories_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `builds`
--
ALTER TABLE `builds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_type`
--
ALTER TABLE `part_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purposes`
--
ALTER TABLE `purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitereviews`
--
ALTER TABLE `sitereviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accessories_types`
--
ALTER TABLE `accessories_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `builds`
--
ALTER TABLE `builds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `part_type`
--
ALTER TABLE `part_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purposes`
--
ALTER TABLE `purposes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitereviews`
--
ALTER TABLE `sitereviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
