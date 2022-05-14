-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_rental`
--
CREATE DATABASE IF NOT EXISTS `vehicle_rental` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vehicle_rental`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phonenumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `Email`, `phonenumber`) VALUES
('minosh', 'minoshimantha99@gmail.com', '078655321'),
('minosh', 'minoshimantha00@gmail.com', '0715681353'),
('kaml', 'minod@gmamil.com', '0715681353'),
('kaml', 'minod@gmamil.com', '0715681353'),
('kaml', 'minod@gmamil.com', '0715681353'),
('imantha', 'minoshimantha9999@gmail.com', '0715681353'),
('kaml', 'minoshimantha9999@gmail.com', '0775634876'),
('kaml', 'minoshimantha9999@gmail.com', '0715681353'),
('kaml', 'minoshimantha99@gmail.com', '0715681353'),
('kaml', 'minoshimantha99@gmail.com', '0715681353');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_img_database`
--

CREATE TABLE `homepage_img_database` (
  `ID` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_img_database`
--

INSERT INTO `homepage_img_database` (`ID`, `link`) VALUES
(1, '../images/Axio.jpg'),
(2, '../images/Prado.jpg'),
(3, '../images/Benz.jpg'),
(4, '../images/WagonR.jpg'),
(5, '../images/Van.jpeg'),
(6, '../images/Lorry.jpg'),
(7, '../images/OfficePackage.jpg'),
(8, '../images/SafariPackage.jpg'),
(9, '../images/WedPackage.jpg'),
(10, '../images/JourneyPackage.jpg'),
(11, '../images/HomeMoverPackage.jpg'),
(12, '../images/CarRiderPackage.jpg'),
(13, '../images/CampingPackage.jpg'),
(14, '../images/AirPortPickupPackage.jpg'),
(15, '../images/TourismPackage.jpg'),
(16, '../images/AirRidePackage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(10) NOT NULL,
  `cardname` varchar(40) NOT NULL,
  `paymenttype` varchar(40) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cvv` varchar(11) NOT NULL,
  `cardnumber` varchar(40) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `cardname`, `paymenttype`, `customername`, `email`, `address`, `cvv`, `cardnumber`, `date`) VALUES
(1, 'sampath', 'visa', 'minosh', 'minoshimantha99@gmail.com', '123,awadduwa panadura', '789', '12346556656', '2020-11'),
(123, 'RDB', 'visa', 'MINOSH', 'minoshimantha99@gmail.com', '123,awadduwa panadura', '345', '1244 546 34543 ', '2020-11'),
(333, 'sampath', 'visa', 'minosh', 'hhhhhhhhhhhhhhhhhhh', 'aaaaaaaaaaaaaaaaa', '8889', '80988089080', '2020-11'),
(7979, 'sampath', 'visa', 'MINOSH', '899@gmail.com', '123,awadduwa panadura', '99', '123424v tey57 575', '2020-03'),
(12324, 'visam', 'master', 'jayathilaka', 'minoshimantha99@gmail.com', '123,a wadduwa road wadduwa ', '123', '657689968645', '2020-10');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `username1` varchar(100) NOT NULL,
  `Username2` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `username1`, `Username2`, `Email`, `Contact_number`, `review`, `date`) VALUES
(26, 'Demy', 'Demy', 'bmvm@gmail.com', 314789688, 'very good', '2020-10-26'),
(27, '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sr_cars`
--

CREATE TABLE `sr_cars` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `Category` varchar(5) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sr_cars`
--

INSERT INTO `sr_cars` (`id`, `name`, `price`, `Category`, `description`, `image`) VALUES
(1, 'Toyota Prius 2012', 4500, 'CAR', 'The 2012 Toyota Prius has excellent fuel economy,<br /> lots of cargo space and a long list of standard features, though reviewers agreed that it lacks agility.<br /><br />\r\n\r\nThe Prius has 21.6 cubic feet of cargo space, which is outstanding for a midsize hybrid car. The 2012 Prius comes standard with automatic climate control, proximity key, push-button start, an infotainment system with a 6.1-inch touch-screen display, Bluetooth phone and music streaming and a USB port. Available features include navigation, satellite radio, adaptive cruise control, forward collision warning, lane departure warning, leatherette upholstery, an eight-way power-adjustable drivers seat and a solar roof package that includes a moonroof and a solar-powered air conditioning system that cools the cabin when the car is turned off.\r\n', '..\\images\\cars\\car5.jpg'),
(2, 'Toyota Allion 2006', 9000, 'CAR', 'The Toyota Allion is a compact, dynamic and sporty sedan backed up by Toyotas world-renowned reliability. Depending on the model year, the Toyota Allion offers a wide range of features that make every drive safe, convenient, and comfortable.\r\n\r\nThe Allion is a dynamic and sporty sedan developed with the concepts of â€œhigh quality and high functionality in mind. This is a 5-number FF drive 4-door sedan that is a successor to Toyotas historic Corona / Carina. All engines are inline 4-cylinder DOHC VVT-i, 109 hp 1.5L, 132 hp or 125 hp 1.8L, 152 hp 2L D-4 (direct injection). The distinctive rear seat has a reclining mechanism and a cushion-triggered split folding mechanism with a removable package tray. All models are equipped with dual airbags, EBD (Electronic Braking Force Distribution Control) ABS, brake assist, and standard seatbelts with pretensioners and force limiters. The 1.5L & 1.8L vehicles are certified by the Ministry of Land, Infrastructure, Transportation and Tourism as super-low emission vehicles, and the 2L vehicles certified as good-low emission vehicles.', '..\\images\\cars\\car2.jpg'),
(3, 'Toyota Allion 2015', 6000, 'CAR', 'Driver electric Seat, Push Start, Rear Viper.\r\nMultifunction Steering Wheel.\r\nWelcome light.\r\nDVD + Reverse Camera,Factory Fitted Fog Lights, Scoop lights.\r\nOriginal Door Wiser,Maroon Colour (Wine Red), Interior Beige & Teak.\r\nTeak and leather steering wheel.\r\n', '..\\images\\cars\\car3.jpg'),
(4, '2010 Mercedes-Benz E-Class', 5000, 'CAR', 'The 2010 Mercedes-Benz E-Class strikes a brilliant balance between ride quality and handling ability. Within its segment, the E is by far the most adaptable, rewarding and confident car for the widest variety of surfaces and situations. Although it\'s not the most athletic car to drive, it nevertheless offers highly tactile steering, strong engines and a chassis that inspires confidence. Regardless of body style or engine, the 2010 E-Class is a remarkable luxury car to drive.<br /><br />Superb ride and handling balance, potent engines, extensive array of luxury- and safety-oriented features, first-class cabin appointments, spacious interior.', '../images/cars/luxurycar.jpg'),
(5, 'Mercedes-Benz Vito', 23000, 'MPV', 'Driver + 5+ 2 Passenger (Loses 2 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, Android, CD Mp3 Player, Auto <br /><br /> A Mercedes people carrier or MPV is ideal for transporting large groups and makes a stylish vehicle for a family vacation or road trip. You can drive a Mercedes 5-Seater when you hire a Mercedes Benz Vito in Sri Lanka. <br /><br />This is a luxurious yet practical MPV, which can also be turned into a 5-Seater people carrier. Also seating 5 passengers is the Mercedes Benz Vito.  We are providing transport such as Airport Transfers, Taxi Services, Taxi Packages & day packages for both short term and long-term Mercedes minivan hire.', '../images/multi purpose/van1.jpg'),
(6, 'Toyota Alphard', 22000, 'MPV', 'Driver + 6 Passenger (Loses 3 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, CD Mp3 Player, Auto<br /><br />\r\nThe Toyota Alphard is a minivan produced by the Japanese automaker Toyota since 2002. It is available as a seven- or eight-seater with petrol and hybrid engine options. Hybrid variants have been available since 2003 and it incorporates Toyota\'s Hybrid Synergy Drive technology.', '../images/multi purpose/van2.jpg'),
(7, 'TOYOTA ALPHARD EXECUTIVE LOUNGE', 15000, 'MPV', 'Driver + 6 Passenger (Loses 3 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, CD Mp3 Player, Auto<br /><br />\r\nThis new 2019 Toyota Alphard Hybrid Executive Lounge 4WD 2.5L 7 seater people mover with 90 km, JBL sound system, LED roof lighting and sunroof was inspected for a client in April 2019.Auction grade S A A (completely new).Luxury features included radar cruise control with collision prevention, full cameras, dual powerslide doors, power tailgate, flip down rear TV and top of the range JBL sound system.', '../images/multi purpose/bus1.jpg'),
(8, 'PERODUA (DAIHATSU) AXIA', 7000, 'MPV', 'The Perodua Axia is the company\'s most affordable model. Powering the Axia is a new 1.0-litre 1KR-VE three-cylinder petrol engine that outputs 68 PS and 91 Nm. The engine can be paired to a 5-speed manual or a 4-speed automatic. When paired with the 5-speed manual, Perodua claims that the Axia can deliver up to 22.5 km/L. <br/><br/>\r\nAll variants of the Perodua Axia come with dual SRS airbags. Apart from base Axia 1.0E MT, all Axia variants come with ABS with EBD, anti-snatch hook, driver seat belt reminder and headlight reminder. With all these features, the Axia scores 4 stars in the ASEAN NCAP safety rating. All new Perodua Axia models are backed by a 5-year/150,000 km (whichever comes first) new vehicle warranty.', '../images/multi purpose/car1.jpg'),
(9, 'Airbus helicopter', 20000, 'MISC', 'Make a grand entrance, surprise someone or add some glamour to a special occasion to make memories to last a lifetime:<br/><ul><li>Surprise birthday treat</li><li>Coming of age ceremonies</li><li>Proposals</li><li>Anniversaries & Valentine’s Day</li><li>Pre-wedding shoot & Wedding </li></ul>', '../images/misellanious/hlp.jpg'),
(10, 'Chrysler 300C', 25000, 'MISC', 'Leather Int. A/C, Power Steering, CD Player, With Driver Only<br/><br/>\r\nThe Chrysler 300 is a full-size sedan that\'s old enough to be retro-cool again like Zubaz pants. While the 300C\'s rip-roaring V-8 was carried over, the revised 300 gained a new look inside and out, plus Chrysler\'s excellent 3.6-liter Pentastar V-6, making 283 horsepower. They also got a much-upgraded interior—in both materials and refinement—and features like a standard USB port, an available navigation system with Sirius Travel Link services, and a Uconnect Web wi-fi hotspot option.', '../images/misellanious/lc1.jpg'),
(11, 'Mercedes-Benz S-Class', 30000, 'MISC', 'Long Wheel Base, Leather Int. A/C, Ambient/ Mood lighting, Power Steering, Blue Tooth, With Driver Only<br/><br/>\r\nThe Mercedes-Benz S-Class seats five people. This stately luxury car has what might be the most enviable seating of any car outside of quarter-million-dollar vehicles from Rolls Royce and Bentley. This Benz makes a strong case for being the most opulent car across all of our rankings. Premium leathers and real wood adorn most of the cabin, and nearly all other touchpoints are of the highest quality.<br><br>The S-Class sedan has a near class-leading 18.7 cubic feet of trunk space. The base S 450 features a 362-horsepower 3.0-liter twin-turbocharged V6Optional features include a 26-speaker Burmester premium stereo, a rear-seat entertainment system, rear-seat wireless device charging, quad-zone automatic climate control, and a cabin air purification and fragrance system. Also available is Magic Sky Control, which electronically adjusts the tint for the panoramic sunroof. ', '../images/misellanious/lc3.jpg'),
(12, 'Chrysler 300C Limo', 30000, 'MISC', '<ul><li>Air conditioning</li><li>Automatic Shift</li><li>4 Doors</li><li>8 Seats</li><li>2 Suitcase & 5 Bags</li><li>Air Baloons</li><li>Fuel type: Petrol</li></li></ul>', '../images/misellanious/WedPackage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sr_packages`
--

CREATE TABLE `sr_packages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pack_type` varchar(5) NOT NULL DEFAULT 'CAR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sr_packages`
--

INSERT INTO `sr_packages` (`id`, `name`, `price`, `image`, `description`, `pack_type`) VALUES
(1, 'Journey Package', 30000, '..\\images\\packages\\JourneyPackage.jpg', NULL, 'CAR'),
(2, 'HomeMover Package', 30000, '..\\images\\packages\\HomeMoverPackage.jpg', NULL, 'MPV'),
(3, 'Safari Package', 15000, '..\\images\\packages\\SafariPackage.jpg', NULL, 'CAR'),
(4, 'AirPortPickup Package ', 13000, '..\\images\\packages\\AirPortPickupPackage.jpg', NULL, 'MPV'),
(5, 'Air-Ride Package', 75000, '..\\images\\packages\\AirRidePackage.jpg', NULL, 'MISC'),
(6, 'Camping Package', 130000, '..\\images\\packages\\CampingPackage.jpg', NULL, 'MPV'),
(7, 'CarRider Package', 120000, '..\\images\\packages\\CarRiderPackage.jpg', NULL, 'CAR'),
(8, 'Office Package', 20000, '..\\images\\packages\\OfficePackage.jpg', NULL, 'CAR'),
(9, 'Tourism Package', 175000, '..\\images\\packages\\TourismPackage.jpg', NULL, 'MISC'),
(10, 'Wed Package', 50000, '..\\images\\packages\\WedPackage.jpg', NULL, 'CAR');

-- --------------------------------------------------------

--
-- Table structure for table `sr_transport`
--

CREATE TABLE `sr_transport` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `tran_percentage` int(11) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sr_transport`
--

INSERT INTO `sr_transport` (`id`, `name`, `price`, `tran_percentage`, `description`, `image`) VALUES
(1, 'Mitsuibishi Fuso Canter', 1000, 50, 'Vehicle Type: 15ft lorry<br/><br />\r\n\r\nDriver Class: Class 3 license and above<br/><br />\r\n\r\nEngine Capacity: 3000 cc<br/><br />\r\n\r\nTransmission: Manual<br/><br />\r\n\r\nFront Seating: 3 pax<br/><br />\r\n\r\nGross Vehicle Weight Rating: 5000kg<br/><br />\r\n\r\nDimensions (L x W x H): (6180 x 2040 x 2235) mm', '..\\images\\transport\\MS_Fuso_canter.png'),
(2, 'Mitsuibishi FB70', 2000, 35, 'Vehicle Type: 10ft lorry<br/><br/>\r\n\r\nEngine Capacity: 3000 cc<br/><br/>\r\n\r\nTransmission: Manual<br/><br/>\r\n\r\nFront Seating: 3 pax<br/><br/>\r\n\r\nGross Vehicle Weight Rating: 3350-3500kg<br/><br/>\r\n\r\nDimensions (L x W x H): (4.7x 1.7 x 2) m<br/><br/>\r\n', '..\\images\\transport\\MS_FB7.jpg'),
(3, 'Mitsuibishi FE84 Tailgate', 2500, 60, 'Vehicle Type: 14ft lorry<br/><br/>\r\n\r\nDriver license: Class 4 and above<br/><br/>\r\n\r\nEngine Capacity: 3000 cc<br/><br/>\r\n\r\nTransmission: Manual<br/><br/>\r\n\r\nFront Seating: 3 pax<br/><br/>\r\n\r\nGross Vehicle Weight Rating: 6000kg<br/><br/>\r\n\r\nDimensions (L x W x H): (6x 2.04 x 2.3) m', '..\\images\\transport\\Adjusted-fuso-fe84-size.png'),
(4, 'TOYOTA COASTER LUXURY 29 SEATER', 3000, 30, 'Driver + 22 + 7 Passenger - 22 full seats/ 7 Large folding seats.<br/> Loses 4 full seats for heavy luggage, Multi A/C, 3 Point Seat Belts, CD Player, Manual Transmission', '..\\images\\transport\\toyota-coaster-luxury.jpg'),
(5, 'Toyota Hiace Van', 2500, 28, 'Vehicle Type: Goods Vehicle<br/><br/>\r\nEngine Capacity: 3000 cc<br/><br/>\r\nTransmission: Manual<br/><br/>\r\nNumber of doors: 5 doors<br/><br/>\r\nFront Seating: 3 pax<br/><br/>\r\nGross Vehicle Weight Rating: 2800 kg<br/><br/>\r\nDimensions (L x W x H): (4695 x 1695 x 1980) mm<br/><br/>', '..\\images\\transport\\hiace-van.png'),
(6, 'Nissan Urvan', 2500, 28, 'Vehicle Type: Goods Vehicle/Panel Van<br/><br/>\r\nEngine Capacity: 3000 cc<br/><br/>\r\nTransmission: Manual<br/><br/>\r\nNumber of doors: 5 doors<br/><br/>\r\nFront Seating: 2 pax<br/><br/>\r\nMaximum laden weight: 2800-3000 kg<br/><br/>\r\nDimensions (L x W x H): (4735 x 1545 x 1350) mm', '..\\images\\transport\\urvan.png');

-- --------------------------------------------------------

--
-- Table structure for table `strike_table`
--

CREATE TABLE `strike_table` (
  `Strike_id` int(11) NOT NULL,
  `username1` varchar(100) NOT NULL,
  `Username2` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strike_table`
--

INSERT INTO `strike_table` (`Strike_id`, `username1`, `Username2`, `Email`, `Contact_number`, `Review`, `Date`) VALUES
(11, 'Ishanka', 'Ishanka', 'tharu@gmail.com', 314789688, 'very bad', '2020-10-23'),
(12, '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `admin`, `username`, `password`, `email`) VALUES
(40, 0, 'yasaslowe', '$2y$10$gRaUCRsyuFDTuQkhBm1jZ.nfELwuRRs2R/UT9YhHbgD8wm31Yi4Um', 'q@q.q'),
(41, 1, 'admin', '$2y$10$1jy1RSWCIm2wZfjfmg1fBu3iYWohx5emULq3ItQsSxSzN2YjEX5gy', 'admin@email.com'),
(42, 0, 'qwe123', '$2y$10$Essq.S2oLqn5YHaARi3vEeciBAqBDUtyr.4qJ2uft1tWiX2z8a1ba', 'behehet937@inmail92.com'),
(43, 0, 'yasaslowe', '$2y$10$lE7ldw/m9y6CnIEjlLFMOO/w1Qe8ORD7Ao2yYDoiRjdj.Yy.DnYV6', 'fh21www342@email.vccs.edu'),
(47, 0, 'bandiya', '$2y$10$B7yimjlfzs4QvkkHorlmSer/cK3LqxFY7L.TJxuxMg7bpIOgHACha', 'lol@qwe.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sr_cars`
--
ALTER TABLE `sr_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_packages`
--
ALTER TABLE `sr_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_transport`
--
ALTER TABLE `sr_transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strike_table`
--
ALTER TABLE `strike_table`
  ADD PRIMARY KEY (`Strike_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `strike_table`
--
ALTER TABLE `strike_table`
  MODIFY `Strike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
