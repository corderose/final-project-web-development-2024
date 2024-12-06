-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 06, 2024 at 05:10 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Parking_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `Driver`
--

CREATE TABLE `Driver` (
  `DRIVER_ID` int(11) NOT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `First` varchar(100) DEFAULT NULL,
  `Last` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Driver`
--

INSERT INTO `Driver` (`DRIVER_ID`, `Type`, `First`, `Last`, `Address`) VALUES
(1, 'faculty', 'John', 'Doe', '123 University Ave, Salt Lake City, UT 84112'),
(2, 'student', 'Jane', 'Smith', '456 Campus Blvd, Provo, UT 84604'),
(3, 'guest', 'Alice', 'Johnson', '789 College Rd, Ogden, UT 84401'),
(4, 'faculty', 'Bob', 'Brown', '101 Main St, Salt Lake City, UT 84112'),
(5, 'student', 'Mary', 'Davis', '202 Maple Dr, St. George, UT 84770'),
(6, 'guest', 'James', 'Miller', '303 Oak Ln, Park City, UT 84060'),
(7, 'faculty', 'Patricia', 'Wilson', '404 Pine St, Salt Lake City, UT 84112'),
(8, 'student', 'Michael', 'Moore', '505 Cedar Ave, Orem, UT 84057'),
(9, 'guest', 'Linda', 'Taylor', '606 Birch Blvd, Draper, UT 84020'),
(10, 'faculty', 'Charles', 'Anderson', '707 Elm St, Salt Lake City, UT 84112'),
(11, 'student', 'Sarah', 'Thomas', '808 Maple Rd, Provo, UT 84604'),
(12, 'guest', 'David', 'Jackson', '909 Oak St, Ogden, UT 84401'),
(13, 'faculty', 'Nancy', 'White', '1010 Pine Ln, Logan, UT 84321'),
(14, 'student', 'Daniel', 'Harris', '1111 Cedar St, St. George, UT 84770'),
(15, 'guest', 'Jessica', 'Martin', '1212 Birch Ln, Sandy, UT 84070'),
(16, 'faculty', 'Christopher', 'Lee', '1313 Elm Rd, Salt Lake City, UT 84112'),
(17, 'student', 'Karen', 'Perez', '1414 Oak Blvd, Orem, UT 84057'),
(18, 'guest', 'William', 'Clark', '1515 Pine Rd, Draper, UT 84020'),
(19, 'faculty', 'Elizabeth', 'Lewis', '1616 Maple Ave, Logan, UT 84321'),
(20, 'student', 'Matthew', 'Walker', '1717 Cedar Blvd, Park City, UT 84060');

-- --------------------------------------------------------

--
-- Table structure for table `Parking_Lot`
--

CREATE TABLE `Parking_Lot` (
  `LOT_ID` int(11) NOT NULL,
  `Permit_Type` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Parking_Lot`
--

INSERT INTO `Parking_Lot` (`LOT_ID`, `Permit_Type`, `Address`, `Capacity`) VALUES
(1, 'A', 'Lot A, 123 University Ave, Salt Lake City, UT 84112', 100),
(2, 'U', 'Lot B, 456 Campus Blvd, Provo, UT 84604', 50),
(3, 'E', 'Lot C, 789 College Rd, Ogden, UT 84401', 30),
(4, 'A', 'Lot D, 101 Main St, Salt Lake City, UT 84112', 200),
(5, 'U', 'Lot E, 202 Maple Dr, St. George, UT 84770', 75);

-- --------------------------------------------------------

--
-- Table structure for table `Parking_Space`
--

CREATE TABLE `Parking_Space` (
  `SPACE_ID` int(11) NOT NULL,
  `Field` varchar(100) DEFAULT NULL,
  `LOT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Parking_Space`
--

INSERT INTO `Parking_Space` (`SPACE_ID`, `Field`, `LOT_ID`) VALUES
(16, 'A1', 1),
(17, 'B2', 2),
(18, 'C3', 3),
(19, 'D4', 4),
(20, 'E5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PAYMENT_ID` int(11) NOT NULL,
  `Credit_card_No` varchar(50) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Check_No` varchar(100) DEFAULT NULL,
  `Cash` decimal(10,2) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`PAYMENT_ID`, `Credit_card_No`, `Amount`, `Check_No`, `Cash`, `Date`) VALUES
(1, '4111111111111111', '50.00', '12345', '0.00', '2023-10-10'),
(2, '4222222222222222', '75.00', '67890', '0.00', '2023-10-12'),
(3, '4333333333333333', '150.00', '11223', '0.00', '2023-10-14'),
(4, '4444444444444444', '25.00', '44556', '0.00', '2023-10-16'),
(5, '4555555555555555', '100.00', '78901', '0.00', '2023-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `Permit`
--

CREATE TABLE `Permit` (
  `PERMIT_ID` int(11) NOT NULL,
  `Permit_Type` varchar(100) DEFAULT NULL,
  `VEHICLE_ID` int(11) DEFAULT NULL,
  `Purchase_Date` date DEFAULT NULL,
  `Expiry_date` date DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL,
  `DRIVER_ID` int(11) DEFAULT NULL,
  `PAYMENT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Permit`
--

INSERT INTO `Permit` (`PERMIT_ID`, `Permit_Type`, `VEHICLE_ID`, `Purchase_Date`, `Expiry_date`, `Cost`, `DRIVER_ID`, `PAYMENT_ID`) VALUES
(1, 'A', 1, '2023-08-01', '2024-08-01', '100.00', 1, 1),
(2, 'U', 2, '2023-09-15', '2024-09-15', '50.00', 2, 2),
(3, 'E', 3, '2023-10-01', '2024-10-01', '75.00', 3, 3),
(4, 'A', 4, '2023-07-01', '2024-07-01', '100.00', 4, 4),
(5, 'U', 5, '2023-10-05', '2024-10-05', '50.00', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(2, 'pjones', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`forename`, `surname`, `username`, `password`) VALUES
('Bryan', 'Smith', 'bsmith', 'mysecret'),
('Paul', 'Jones', 'pjones', 'acrobat');

-- --------------------------------------------------------

--
-- Table structure for table `Vehicle`
--

CREATE TABLE `Vehicle` (
  `VEHICLE_ID` int(11) NOT NULL,
  `DRIVER_ID` int(11) DEFAULT NULL,
  `License_Plate` varchar(50) DEFAULT NULL,
  `Make` varchar(100) DEFAULT NULL,
  `Model` varchar(100) DEFAULT NULL,
  `Color` varchar(255) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vehicle`
--

INSERT INTO `Vehicle` (`VEHICLE_ID`, `DRIVER_ID`, `License_Plate`, `Make`, `Model`, `Color`, `Year`) VALUES
(1, 1, 'ABC123', 'Toyota', 'Corolla', 'Blue', 2020),
(2, 2, 'XYZ456', 'Honda', 'Civic', 'Red', 2021),
(3, 3, 'LMN789', 'Ford', 'Fusion', 'Green', 2019),
(4, 4, 'DEF321', 'Chevrolet', 'Malibu', 'Black', 2020),
(5, 5, 'GHI654', 'Nissan', 'Altima', 'White', 2022),
(6, 6, 'JKL987', 'Hyundai', 'Sonata', 'Silver', 2020),
(7, 7, 'MNO543', 'Mazda', 'CX-5', 'Gray', 2018),
(8, 8, 'PQR246', 'Subaru', 'Outback', 'Brown', 2021),
(9, 9, 'STU135', 'BMW', '3 Series', 'Blue', 2022),
(10, 10, 'VWX864', 'Audi', 'A4', 'Black', 2020),
(11, 11, 'YZA753', 'Toyota', 'Camry', 'Red', 2019),
(12, 12, 'BCD468', 'Kia', 'Optima', 'White', 2021),
(13, 13, 'EFG109', 'Ford', 'Escape', 'Blue', 2020),
(14, 14, 'HIJ876', 'Chevrolet', 'Equinox', 'Gray', 2022),
(15, 15, 'KLM543', 'Hyundai', 'Elantra', 'Green', 2021),
(16, 16, 'NOP258', 'Nissan', 'Maxima', 'Silver', 2020),
(17, 17, 'QRS147', 'Subaru', 'Forester', 'Yellow', 2022),
(18, 18, 'TUV963', 'Mazda', 'Mazda3', 'Orange', 2019),
(19, 19, 'WXY852', 'BMW', 'X5', 'Black', 2020),
(20, 20, 'ZAB852', 'Audi', 'Q5', 'Red', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `Violation`
--

CREATE TABLE `Violation` (
  `VIOLATION_ID` int(11) NOT NULL,
  `Violation_type` varchar(50) DEFAULT NULL,
  `Datetime` datetime DEFAULT NULL,
  `PAYMENT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Violation`
--

INSERT INTO `Violation` (`VIOLATION_ID`, `Violation_type`, `Datetime`, `PAYMENT_ID`) VALUES
(1, 'Expired Permit', '2023-10-10 10:30:00', 1),
(2, 'No Permit', '2023-10-12 14:00:00', 2),
(3, 'Parking in Disabled Spot', '2023-10-14 08:45:00', 3),
(4, 'Overtime Parking', '2023-10-16 16:30:00', 4),
(5, 'Unauthorized Area', '2023-10-18 11:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Violation_Type`
--

CREATE TABLE `Violation_Type` (
  `VIOLATION_TYPE_ID` int(11) NOT NULL,
  `Violation_Name` varchar(50) DEFAULT NULL,
  `Amount_Due` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Violation_Type`
--

INSERT INTO `Violation_Type` (`VIOLATION_TYPE_ID`, `Violation_Name`, `Amount_Due`) VALUES
(1, 'Expired Permit', '50.00'),
(2, 'No Permit', '75.00'),
(3, 'Parking in Disabled Spot', '150.00'),
(4, 'Overtime Parking', '25.00'),
(5, 'Unauthorized Area', '100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Driver`
--
ALTER TABLE `Driver`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `Parking_Lot`
--
ALTER TABLE `Parking_Lot`
  ADD PRIMARY KEY (`LOT_ID`);

--
-- Indexes for table `Parking_Space`
--
ALTER TABLE `Parking_Space`
  ADD PRIMARY KEY (`SPACE_ID`),
  ADD KEY `LOT_ID` (`LOT_ID`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `Permit`
--
ALTER TABLE `Permit`
  ADD PRIMARY KEY (`PERMIT_ID`),
  ADD KEY `VEHICLE_ID` (`VEHICLE_ID`),
  ADD KEY `DRIVER_ID` (`DRIVER_ID`),
  ADD KEY `PAYMENT_ID` (`PAYMENT_ID`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`VEHICLE_ID`),
  ADD KEY `DRIVER_ID` (`DRIVER_ID`);

--
-- Indexes for table `Violation`
--
ALTER TABLE `Violation`
  ADD PRIMARY KEY (`VIOLATION_ID`),
  ADD KEY `PAYMENT_ID` (`PAYMENT_ID`);

--
-- Indexes for table `Violation_Type`
--
ALTER TABLE `Violation_Type`
  ADD PRIMARY KEY (`VIOLATION_TYPE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Driver`
--
ALTER TABLE `Driver`
  MODIFY `DRIVER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Parking_Lot`
--
ALTER TABLE `Parking_Lot`
  MODIFY `LOT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Parking_Space`
--
ALTER TABLE `Parking_Space`
  MODIFY `SPACE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Permit`
--
ALTER TABLE `Permit`
  MODIFY `PERMIT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Vehicle`
--
ALTER TABLE `Vehicle`
  MODIFY `VEHICLE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Violation`
--
ALTER TABLE `Violation`
  MODIFY `VIOLATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Violation_Type`
--
ALTER TABLE `Violation_Type`
  MODIFY `VIOLATION_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Parking_Space`
--
ALTER TABLE `Parking_Space`
  ADD CONSTRAINT `parking_space_ibfk_1` FOREIGN KEY (`LOT_ID`) REFERENCES `Parking_Lot` (`LOT_ID`);

--
-- Constraints for table `Permit`
--
ALTER TABLE `Permit`
  ADD CONSTRAINT `permit_ibfk_1` FOREIGN KEY (`VEHICLE_ID`) REFERENCES `Vehicle` (`VEHICLE_ID`),
  ADD CONSTRAINT `permit_ibfk_2` FOREIGN KEY (`DRIVER_ID`) REFERENCES `Driver` (`DRIVER_ID`),
  ADD CONSTRAINT `permit_ibfk_3` FOREIGN KEY (`PAYMENT_ID`) REFERENCES `Payment` (`PAYMENT_ID`);

--
-- Constraints for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`DRIVER_ID`) REFERENCES `Driver` (`DRIVER_ID`);

--
-- Constraints for table `Violation`
--
ALTER TABLE `Violation`
  ADD CONSTRAINT `violation_ibfk_1` FOREIGN KEY (`PAYMENT_ID`) REFERENCES `Payment` (`PAYMENT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
