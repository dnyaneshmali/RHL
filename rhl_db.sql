-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 02:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributer_user`
--

CREATE TABLE `distributer_user` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) DEFAULT NULL,
  `d_location` varchar(250) DEFAULT NULL,
  `d_contact` varchar(100) DEFAULT NULL,
  `d_email` varchar(100) DEFAULT NULL,
  `selocation` varchar(250) DEFAULT NULL,
  `ddate` varchar(100) DEFAULT NULL,
  `dtime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributer_user`
--

INSERT INTO `distributer_user` (`d_id`, `d_name`, `d_location`, `d_contact`, `d_email`, `selocation`, `ddate`, `dtime`) VALUES
(3, 'bvcbfgdssdfs', 'bvcbcfdsfdsfds', '4444444', 'vbcbcvbvc@fg.dfdsf', NULL, NULL, NULL),
(4, 'prashant', 'pune', '8600249455', 'prashant@mail.com', NULL, NULL, NULL),
(5, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(6, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(7, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(8, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(9, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(10, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(11, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(12, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(13, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(14, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(15, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(16, 'fgfdgfdg', 'fgfdgf', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(17, 'amit', 'pune', '4444444', 'hjhgj@gf.dgfg', NULL, NULL, NULL),
(18, 'prashant', 'pune', '8600249455', 'test@mail.com', 'Waterloo', NULL, NULL),
(19, 'prashant', 'pune', '8600249455', 'test@mail.com', 'Waterloo', NULL, NULL),
(25, 'prashant', 'pune', '8600249455', 'test@mail.com', 'Waterloo', '2017/3/10', '10:15 pm'),
(26, 'prashant', 'pune', '8600249455', 'prashant@mail.com', 'Waterloo', '2017/3/10', '10:15 pm'),
(29, 'fdf', 'fdsf', '1111111111', 'dfdsf@fgfdg.gf', 'Vanier', '2017/3/10', '10:15 pm');

-- --------------------------------------------------------

--
-- Table structure for table `sales_user`
--

CREATE TABLE `sales_user` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_contact` varchar(100) DEFAULT NULL,
  `s_username` varchar(100) DEFAULT NULL,
  `s_password` varchar(100) DEFAULT NULL,
  `desigantion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_user`
--

INSERT INTO `sales_user` (`s_id`, `s_name`, `s_email`, `s_contact`, `s_username`, `s_password`, `desigantion`) VALUES
(2, 'fdgfdg', 'hgfhgf@fdg.ghgfh', 'gfhgfhfg', 'admin', 'admin@123', 'SE'),
(3, 'fgfdgdg', 'fgfg@hfgf.gfdg', 'fdfdsfdsfds', 'fsdfsdfsd', 'dfdsfsdfsdfs', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_show_pass` varchar(100) NOT NULL,
  `user_number` varchar(20) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_territory` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `user_status` varchar(10) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `user_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `user_name`, `user_email`, `user_password`, `user_show_pass`, `user_number`, `user_state`, `user_territory`, `user_city`, `user_role`, `user_status`, `user_code`, `user_date`) VALUES
(1, 'Dnyanesh', 'M', 'admin', 'dnyanesh.mali@softinfology.com', '8adcb100cdf06ea1525a125786eca9b9', '', '9689483519', 'Maharashtra', '', 'Osmanabad', 'admin', '1', 'ASM/PUNE/2', '2017-03-15 00:00:00'),
(7, 'santosh', 'B', 'santoshb', 'santoshbhosale123@gmail.com', 'accc9105df5383111407fd5b41255e23', '', '345454544545', 'Maharashtra', '', 'Pune', 'ASM', '1', 'ASM/PUNE/1', '2017-03-16 07:48:09'),
(8, 'John', 'M', 'johnm', 'john@gmail.com', 'e358efa489f58062f10dd7316b65649e', '', '34343434', 'Uttar Pradesh', '', 'Kanpur', 'RSM', '0', 'RSM/KANPUR/1', '2017-03-16 08:00:16'),
(9, 'Pitter', 'L', 'pitterl', 'pitter@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '4545454545544', 'Maharashtra', 'Kharghar', 'Mumbai', 'TSO', '1', 'TSO/MUMBAI/1', '2017-03-16 13:29:23'),
(10, 'Mark', 'K', 'markk', 'mark@gmail.com', '1bbd886460827015e5d605ed44252251', '11111111', '343434343434', 'Bengal', 'Howrah', 'Kolkata', 'SE', '1', 'SE/KOLKATA/1', '2017-03-17 06:25:16'),
(11, 'Matt', 'R', 'mattr', 'matt@gmail.com', 'bae5e3208a3c700e3db642b6631e95b9', '22222222', '324324424', 'Maharashtra', 'Sayan', 'Mumbai', 'RSM', '', 'RSM/MUMBAI/1', '2017-03-17 11:53:43'),
(53, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'sdfdsf', 'ASM', '0', 'ASM/SDFDSF/2', '2017-03-17 14:09:51'),
(55, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'sdfdsf', 'ASM', '0', 'ASM/SDFDSF/1', '2017-03-17 14:14:28'),
(56, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'sdfdsf', 'ASM', '0', 'ASM/SDFDSF/1', '2017-03-17 14:14:56'),
(57, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'sdfdsf', 'ASM', '0', 'ASM/SDFDSF/1', '2017-03-17 14:15:41'),
(58, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'Pune', 'ASM', '0', 'ASM/PUNE/1', '2017-03-17 14:17:10'),
(59, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'Pune', 'ASM', '0', 'ASM/PUNE/2', '2017-03-17 14:19:28'),
(60, 'sdfsf', 'sdfsdf', 'sdfsfsdfsdf', 'sdfdfdfadfasd@dsfsdf.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '34534', 'sdfsf', 'dfdf', 'Pune', 'ASM', '0', 'ASM/PUNE/3', '2017-03-17 14:19:49'),
(61, 'testasm', 'p', 'testasmp', 'sdfadfasd@dsfsdfd.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '343434343', 'sdfsdf', 'sdfsdf', 'Pune', 'RSM', '0', 'RSM/PUNE/1', '2017-03-17 14:21:28'),
(62, 'testasm', 'p', 'testasmp', 'sdfadfasd@dsfsdfd.com', 'bbb8aae57c104cda40c93843ad5e6db8', '111111111', '343434343', 'sdfsdf', 'sdfsdf', 'Pune', 'ASM', '0', 'ASM/PUNE/2', '2017-03-17 14:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `desigantion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `desigantion`) VALUES
(1, 'admin', '8adcb100cdf06ea1525a125786eca9b9', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributer_user`
--
ALTER TABLE `distributer_user`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `sales_user`
--
ALTER TABLE `sales_user`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributer_user`
--
ALTER TABLE `distributer_user`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `sales_user`
--
ALTER TABLE `sales_user`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
