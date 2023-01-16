-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 10:52 AM
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
-- Database: `mbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `sno` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `balance` int(10) NOT NULL,
  `address` varchar(355) NOT NULL DEFAULT '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`sno`, `name`, `accno`, `email`, `phno`, `balance`, `address`) VALUES
(1, 'Arjun', '8888444422', 'arjun842@gmail.com', '8484848484', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(2, 'Karna', '8887774422', 'Karna17@gmail.com', '8484777484', 84500, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(3, 'Bheem', '8889898922', 'bheema.power@gmail.com', '8489898484', 78500, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(4, 'Dharma', '8881111112', 'dharma10@gmail.com', '8481039033', 81500, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(5, 'Nakula', '8823233322', 'nakula12@gmail.com', '8234234234', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(6, 'Sahadev', '8811112222', 'Sahadev99@gmail.com', '8484111184', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(7, 'Dhuryodhan', '8989898989', 'dhuryochana@gmail.com', '8989898484', 75500, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(8, 'Krish', '8143143143', 'krish143@gmail.com', '8414314312', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(9, 'Paanchali', '8786547522', 'paanchali19@gmail.com', '8798548687', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE '),
(10, 'Abhi', '8811122211', 'abhi.hero@gmail.com', '8411112221', 80000, '4-88-22/12/9 Angara hills, Cyberabad, State - PINCODE ');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(11) NOT NULL,
  `fname` varchar(33) NOT NULL,
  `tname` varchar(33) NOT NULL,
  `faccno` varchar(10) NOT NULL,
  `taccno` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sno`, `fname`, `tname`, `faccno`, `taccno`, `amount`, `date`) VALUES
(2, 'Bheem', 'Dharma', '8889898922', '8881111112', 1500, '2023-01-16 14:54:33'),
(3, 'Dhuryodhan', 'Karna', '8989898989', '8887774422', 4500, '2023-01-16 14:59:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
