-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 03:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrowwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `complaint_type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `email`, `complaint_type`, `description`, `created_at`) VALUES
(12, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'gamerammar343@gmail.com', 'Log in', 'I have faced some issues in the log in ', '2023-12-30 09:22:46'),
(13, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'gamerammar343@gmail.com', 'Log in', 'gnn', '2023-12-30 12:03:30'),
(14, '', '', '', '', '2023-12-30 12:03:34'),
(15, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'gamerammar343@gmail.com', 'Log in', 'rv', '2023-12-30 12:03:42'),
(16, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'amarelshaer45@gmail.com', 'ef', 'rv', '2023-12-30 12:04:42'),
(17, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'amarelshaer45@gmail.com', 'ef', 'log in ', '2023-12-31 07:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `empid` int(100) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`empid`, `Emp_Email`, `Emp_Password`) VALUES
(1, 'Admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_appointment`
--

CREATE TABLE `hospital_appointment` (
  `AppointmentID` int(10) NOT NULL,
  `PatientName` varchar(50) NOT NULL,
  `PatientEmail` varchar(50) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_appointment`
--

INSERT INTO `hospital_appointment` (`AppointmentID`, `PatientName`, `PatientEmail`, `AppointmentDate`, `Reason`) VALUES
(5, 'sqax', 'gamerammar343@gmail.com', '2024-01-04', 'lhoi');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_booking`
--

CREATE TABLE `hostel_booking` (
  `BookingID` int(10) NOT NULL,
  `RoomID` int(10) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `NumberOfNights` int(5) NOT NULL,
  `GuestName` varchar(50) NOT NULL,
  `GuestEmail` varchar(50) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `hostel_room` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room`
--

CREATE TABLE `hostel_room` (
  `RoomID` int(10) NOT NULL,
  `HostelID` int(10) NOT NULL,
  `RoomType` varchar(50) NOT NULL,
  `BedCount` int(5) NOT NULL,
  `hostelsName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_room`
--

INSERT INTO `hostel_room` (`RoomID`, `HostelID`, `RoomType`, `BedCount`, `hostelsName`) VALUES
(1, 1, 'Single Room', 1, NULL),
(2, 1, 'Dormitory', 6, NULL),
(3, 2, 'Double Room', 2, NULL),
(4, 0, '', 0, 'College Tun Fatimah'),
(5, 0, '', 0, 'College Tun Dr. Ismail'),
(6, 0, '', 0, 'College Tun Hussein Onn'),
(7, 0, '', 0, 'College Datin Seri Endon'),
(8, 0, '', 0, 'College Perdana'),
(9, 0, '', 0, 'Scholar’s Inn'),
(10, 0, '', 0, 'College Tun Razak'),
(11, 0, '', 0, 'College Rahman Putra'),
(12, 0, '', 0, 'College Tuanku Canselor'),
(13, 0, '', 0, 'College Dato Onn Jaafar'),
(14, 0, '', 0, 'College 9 & 10'),
(15, 0, '', 0, 'K Hotel Sdn. Bhd.'),
(16, 0, '', 0, 'KLG Campus Residence');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `NoofRoom` int(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `noofdays` int(30) NOT NULL,
  `roomtotal` double(8,2) NOT NULL,
  `bedtotal` double(8,2) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `mealtotal` double(8,2) NOT NULL,
  `finaltotal` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Name`, `Email`, `RoomType`, `Bed`, `NoofRoom`, `cin`, `cout`, `noofdays`, `roomtotal`, `bedtotal`, `meal`, `mealtotal`, `finaltotal`) VALUES
(41, 'Amar Hassan', 'amarelshaer45@gmail.com', 'Single Room', 'Single', 1, '2022-11-09', '2022-11-10', 1, 1000.00, 10.00, 'Room only', 0.00, 1010.00),
(51, 'AMAR HASSAN GOUDA YOUSSEF ELSH', 'gamerammar343@gmail.com', 'Superior Room', 'Double', 1, '2023-06-27', '2023-06-30', 3, 9000.00, 180.00, 'Breakfast', 360.00, 9540.00),
(52, 'Big ch ungus', 'shfjkaw@gmail.com', 'Guest House', 'Quad', 1, '2023-06-27', '2023-06-28', 1, 1500.00, 60.00, 'Breakfast', 120.00, 1680.00);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `bedding` varchar(50) NOT NULL,
  `hotel_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `hotel_name`) VALUES
(4, 'Superior Room', 'Single', NULL),
(6, 'Superior Room', 'Triple', NULL),
(7, 'Superior Room', 'Quad', NULL),
(8, 'Deluxe Room', 'Single', NULL),
(9, 'Deluxe Room', 'Double', NULL),
(10, 'Deluxe Room', 'Triple', NULL),
(11, 'Guest House', 'Single', NULL),
(12, 'Guest House', 'Double', NULL),
(13, 'Guest House', 'Triple', NULL),
(14, 'Guest House', 'Quad', NULL),
(16, 'Superior Room', 'Double', NULL),
(20, 'Single Room', 'Single', NULL),
(22, 'Superior Room', 'Single', NULL),
(23, 'Deluxe Room', 'Single', NULL),
(24, 'Deluxe Room', 'Triple', NULL),
(27, 'Guest House', 'Double', NULL),
(30, 'Deluxe Room', 'Single', NULL),
(31, '', '', 'Amari Johor Bahru'),
(32, '', '', 'Doubletree By Hilton Hotel Johor Bahru'),
(33, '', '', 'TROVE Johor Bahru'),
(34, '', '', 'Holiday Inn Johor Bahru City Centre, an IHG hotel'),
(35, '', '', 'Capri by Fraser Johor Bahru'),
(36, '', '', 'LEGOLAND Hotel Malaysia'),
(37, '', '', 'Tune Hotel Danga Bay'),
(38, '', '', 'St. Giles Southkey'),
(39, '', '', 'Hyatt Place Johor Bahru'),
(40, '', '', 'KSL Hotel & Resort');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `Meal` varchar(30) NOT NULL,
  `NoofRoom` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `hotel_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Name`, `Email`, `Country`, `Phone`, `RoomType`, `Bed`, `Meal`, `NoofRoom`, `cin`, `cout`, `nodays`, `stat`, `hotel_name`) VALUES
(52, 'Big ch ungus', 'shfjkaw@gmail.com', 'Anguilla', '0196667855', 'Guest House', 'Quad', 'Breakfast', '1', '2023-06-27', '2023-06-28', 1, 'Confirm', NULL),
(53, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'amarelshaer45@gmail.com', 'Malaysia', '+60189445132', 'Superior Room', 'Double', 'Breakfast', '1', '2023-12-18', '2024-01-05', 18, 'NotConfirm', NULL),
(54, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'gamerammar343@gmail.com', 'Malaysia', '0189445132', 'Deluxe Room', 'Single', 'Half Board', '1', '2023-12-20', '2024-01-01', 12, 'NotConfirm', NULL),
(55, 'AMAR HASSAN GOUDA YOUSSEF ELSHAER', 'gamerammar343@gmail.com', 'Andorra', '0189445132', 'Guest House', 'Single', 'Breakfast', '1', '2023-12-30', '2024-01-05', 6, 'NotConfirm', 'Doubletree By Hilton Hotel Johor Bahru'),
(56, 'efc', 'gamerammar343@gmail.com', 'Algeria', '0189445132', 'Superior Room', 'Single', 'Room only', '1', '2024-01-03', '2024-01-25', 22, 'NotConfirm', NULL),
(57, 'efc', 'gamerammar343@gmail.com', 'Algeria', '0189445132', 'Deluxe Room', 'Double', 'Room only', '1', '2024-01-03', '2024-01-18', 15, 'NotConfirm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Username`, `Email`, `Password`) VALUES
(1, 'Amar Hassan', 'amarelshaer45@gmail.com', '1234'),
(7, 'Fbfa23', 'gamerammar343@gmail.com', 'amar'),
(8, 'Fbfa23', 'amargouda@graduate.utm.my', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `work`) VALUES
(1, 'Amar Hassan', 'Manager'),
(3, 'Saeed', 'Cook'),
(4, 'Joe', 'Cook'),
(5, 'Youssef', 'Helper'),
(6, 'Yassin', 'Helper'),
(7, 'Haziq', 'cleaner'),
(8, 'Sondos', 'weighter'),
(9, 'Mostafa', 'weighter'),
(10, 'Ahmed', 'weighter'),
(11, 'Mohamed', 'Cook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `hospital_appointment`
--
ALTER TABLE `hospital_appointment`
  ADD PRIMARY KEY (`AppointmentID`);

--
-- Indexes for table `hostel_booking`
--
ALTER TABLE `hostel_booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `hostel_room`
--
ALTER TABLE `hostel_room`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `empid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_appointment`
--
ALTER TABLE `hospital_appointment`
  MODIFY `AppointmentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hostel_booking`
--
ALTER TABLE `hostel_booking`
  MODIFY `BookingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hostel_room`
--
ALTER TABLE `hostel_room`
  MODIFY `RoomID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
