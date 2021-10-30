-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 04:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `given_by` varchar(50) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `name`, `item`, `quantity`, `amount`, `date`, `given_by`, `status`) VALUES
(1, 'Emil', 'Iron rod', '3', 100, '07/Jan/2021', '', 0),
(2, 'Asare', 'cement block', '120', 1500, '07/Jan/2021', 'koby', 0),
(3, 'nhguik', 'vhhhhgvy', '5', 350, '12/15/2020', 'mnbhkjh', 0),
(4, 'nhguik', 'vhgvy', '6', 450, '12/15/2020', 'mnbhkjh', 0),
(5, 'dniel', 'hedpn', '3', 200, '11/10/2020', 'mnbhkjh', 0),
(6, 'nelson', 'megaphone', '2', 100, '30/Mar/2021', 'millicent', 0),
(7, 'nelson', 'curtin', '3', 48, '30/Mar/2021', 'koby', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `address`, `phone`, `email`, `occupation`) VALUES
(12, 'Ray', 'TESHIE', 2147483647, 'ray@gmail.com', 'banker'),
(13, 'Daniel', 'NUNGUA ESTATE', 2147483647, 'daniel@gmail.com', 'Footballer'),
(14, 'koby', 'Nima', 25485658, 'ryan@gmail.com', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `deposit_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`deposit_id`, `name`, `item`, `quantity`, `amount`, `date`, `status`) VALUES
(1, 'Kwame saah', 'Plastic Chairs', 40, 350, '2021/01/06', 0),
(2, 'klinogo gladys', 'carpet', 3, 120, '06/Jan/2021', 0),
(3, 'Abigail', 'Painting brush', 4, 230, '06/Jan/2021', 0),
(4, 'Kwame', 'Iron rod', 10, 540, '06/Jan/2021', 0),
(7, 'ray', 'pipe ', 20, 200, '14/Jan/2021', 0),
(8, 'nelson', 'vbbbb', 6, 560, '30/Mar/2021', 0),
(9, 'beki', 'iron rod', 5, 200, '2021/01/06', 0),
(10, 'nkkkkk', 'tiles', 120, 290, '30/Mar/2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(20) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` int(15) NOT NULL,
  `amount` float NOT NULL,
  `purchasedb` varchar(100) NOT NULL,
  `purchasedf` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `item`, `quantity`, `amount`, `purchasedb`, `purchasedf`, `date`) VALUES
(1, 'Bag of Water', 5, 30, 'daryl', 'alakedey', '2021-01-18'),
(2, 'Light Bill', 230, 2000, 'kwame nkasah', 'happy electronics', '2021/01/18');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order`
--

CREATE TABLE `invoice_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_receiver_name` varchar(150) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` decimal(10,2) NOT NULL,
  `order_total_after_tax` decimal(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_order`
--

INSERT INTO `invoice_order` (`order_id`, `user_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`) VALUES
(1, 1, '2021-01-19 16:58:54', 'elemawusi', 'Kasoa', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'M FINW'),
(2, 1, '2021-04-19 17:21:20', 'Happy home', 'Dabala', '575.00', '11.50', '2.00', '586.50', '510.00', '76.50', 'Item payed for'),
(3, 1, '2021-01-19 17:03:57', 'Gloryland', 'Dabala', '640.00', '32.00', '5.00', '672.00', '670.00', '2.00', 'amount paid'),
(4, 1, '2021-01-21 17:05:28', 'Gloryland', 'Dabala', '640.00', '32.00', '5.00', '672.00', '670.00', '2.00', 'amount paid'),
(5, 1, '2021-01-18 17:10:13', 'Jil corp', 'kasoa', '4800.00', '48.00', '1.00', '4848.00', '0.00', '4848.00', 'fully paid for'),
(6, 1, '2021-01-18 17:14:19', 'Jil corp', 'kasoa', '4800.00', '48.00', '1.00', '4848.00', '0.00', '4848.00', 'fully paid for'),
(7, 1, '2021-01-18 17:14:48', 'Jil corp', 'kasoa', '4800.00', '48.00', '1.00', '4848.00', '0.00', '4848.00', 'fully paid for'),
(8, 1, '2021-01-18 17:19:46', 'Jil corp', 'kasoa', '4800.00', '48.00', '1.00', '4848.00', '0.00', '4848.00', 'fully paid for'),
(9, 1, '2021-01-18 17:30:13', 'KNUST', 'KUMASI', '1000.00', '25.00', '2.50', '1025.00', '0.00', '1025.00', 'Fuel purchased'),
(10, 1, '2021-01-18 17:10:54', 'NellyTech', 'Accra', '11520.00', '2.00', '0.00', '11520.00', '0.00', '11520.00', 'paid'),
(11, 2, '2021-01-18 17:37:10', 'Nellytech', 'Kumasi', '8800.00', '88.00', '1.00', '8888.00', '0.00', '8888.00', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order_item`
--

CREATE TABLE `invoice_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`order_item_id`, `order_id`, `item_code`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(1, 1, '1', 'cement', '12.00', '26.00', '156.00'),
(4, 2, '1', 'chair', '10.00', '50.00', '500.00'),
(5, 2, '3', 'cement', '5.00', '15.00', '75.00'),
(6, 3, '3', 'paint', '5.00', '48.00', '240.00'),
(7, 3, '5', 'block', '8.00', '50.00', '400.00'),
(8, 4, '3', 'paint', '5.00', '48.00', '240.00'),
(9, 4, '5', 'block', '8.00', '50.00', '400.00'),
(10, 5, '6', 'Pliar', '12.00', '400.00', '4800.00'),
(11, 6, '6', 'Pliar', '12.00', '400.00', '4800.00'),
(12, 7, '6', 'Pliar', '12.00', '400.00', '4800.00'),
(13, 8, '6', 'Pliar', '12.00', '400.00', '4800.00'),
(14, 9, '007', 'Fuel', '20.00', '50.00', '1000.00'),
(15, 10, '009', 'carpet', '480.00', '24.00', '11520.00'),
(19, 11, '001', 'PAint', '10.00', '40.00', '400.00'),
(20, 11, '002', 'cement', '200.00', '40.00', '8000.00'),
(21, 11, '003', 'block', '100.00', '4.00', '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_user`
--

CREATE TABLE `invoice_user` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_user`
--

INSERT INTO `invoice_user` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(1, 'ativornelson2@gmail.com', '123456', 'ativor', 'nelson', '0248011187', 'Dabala'),
(2, 'glory@gmail.com', 'qwerty', 'agbokpe', 'gloria', '0248011187', 'Dabala');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `unit_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `item`, `quantity`, `brand`, `supplier`, `company`, `date`, `unit_price`) VALUES
(1, 'cement', 100, 'Diamond Cement', 'Francis dzrah', 'Diamond Cement', '2021-01-06', 40),
(2, 'paints', 400, 'deluxy acrylics', 'Adu Gyamfi', 'redmond brothers.com', '2021-01-06', 35),
(9, 'plastic chair', 100, 'hddsgg', 'cebo', 'djdsjhf', '0000-00-00', 35),
(10, 'Painting brush', 20, 'deluxy acrylic', 'Adu Gyan', 'redmond brothers.co', '0000-00-00', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`deposit_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_order`
--
ALTER TABLE `invoice_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `invoice_user`
--
ALTER TABLE `invoice_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `deposit_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_order`
--
ALTER TABLE `invoice_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoice_user`
--
ALTER TABLE `invoice_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
