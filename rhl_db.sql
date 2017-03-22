-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 02:36 PM
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
  `dtime` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributer_user`
--

INSERT INTO `distributer_user` (`d_id`, `d_name`, `d_location`, `d_contact`, `d_email`, `selocation`, `ddate`, `dtime`, `username`) VALUES
(28, 't1', 'Pune', '34343434', 't1@gmail.com', 'Dattwadi', '2017/3/21', '12:22 pm', 'adminse'),
(29, 't2', 'Pune', '34535345', 't2@gmail.com', 'Dattwadi', '2017/3/21', '1:17 pm', 'adminse'),
(30, 'd3', 'Pune', '3444545545', 'd3@gmail.com', 'Dattwadi', '2017/3/22', '10:10 am', 'adminse'),
(31, 'd4', 'Pune', '455565656', 'd4@gmail.com', 'Dattwadi', '2017/3/22', '10:10 am', 'adminse'),
(32, 'd5', 'Pune', '13565666', 'd5@gmail.com', 'Florida', '2017/3/22', '11:56 am', 'adminse'),
(33, 'd6', 'Pune', '13565666655', 'd53@gmail.com', 'EON Free Zone', '2017/3/22', '11:59 am', 'adminse'),
(47, 'd12', 'Pune', '34534534', 'd12@gmail.com', 'Bhavani Peth/411011/Shobhapur', '2017/3/22', '6:54 pm', 'adminse'),
(49, 'dd1', 'Pune', '4534543534', 'dd2@gmail.com', 'Tukaram Nagar/411014/Kharadi', '2017/3/22', '6:59 pm', 'adminse');

-- --------------------------------------------------------

--
-- Table structure for table `dist_appoint`
--

CREATE TABLE `dist_appoint` (
  `id` int(11) NOT NULL,
  `fr_name` varchar(250) DEFAULT NULL,
  `fr_address` varchar(250) DEFAULT NULL,
  `fr_contact` varchar(250) DEFAULT NULL,
  `fr_propname` varchar(250) DEFAULT NULL,
  `fr_email` varchar(250) DEFAULT NULL,
  `fr_tin` varchar(250) DEFAULT NULL,
  `fr_cst` varchar(250) DEFAULT NULL,
  `fr_pan` varchar(250) DEFAULT NULL,
  `fr_bank` varchar(250) DEFAULT NULL,
  `fr_baccont` varchar(250) DEFAULT NULL,
  `fr_bifsc` varchar(250) DEFAULT NULL,
  `fr_transport` varchar(250) DEFAULT NULL,
  `fr_holiday` varchar(250) DEFAULT NULL,
  `fr_agencurnt` varchar(250) DEFAULT NULL,
  `fr_agenprev` varchar(250) DEFAULT NULL,
  `fr_obusiness` varchar(250) DEFAULT NULL,
  `fr_mdistrb` varchar(250) DEFAULT NULL,
  `fr_exparea` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist_appoint`
--

INSERT INTO `dist_appoint` (`id`, `fr_name`, `fr_address`, `fr_contact`, `fr_propname`, `fr_email`, `fr_tin`, `fr_cst`, `fr_pan`, `fr_bank`, `fr_baccont`, `fr_bifsc`, `fr_transport`, `fr_holiday`, `fr_agencurnt`, `fr_agenprev`, `fr_obusiness`, `fr_mdistrb`, `fr_exparea`) VALUES
(7, 'test', 'test', '1111111', 'test', 'test@mail.com', 'hg', 'hh', 'hh', 'hh', 'hh', 'hh', 'hhh', 'hhh', 'hhh', 'hhhh', 'hhhhh', 'hhhhhhhh', 'hhhhhhhhhhhhhh'),
(8, 'IT Firm', 'Pune', '454545', 'Rick', 'rick@gmail.com', 'T-2012', 'C-3444', 'PAY56476M', 'SBI', '45645645646456', 'SBI0007', 'sdfdsf', 'Sunday', '3', '10', 'Yes', 'erw', 'dfsdfs'),
(9, 'IT', 'add', '7894632589654', 'ppp', 'hrtr@ddd', '463', '434', 'hrdgfc', 'ger4', '445522322332jhnj', 'gwe43', 'ujk', 'ii', 'po', 'oo', 'o', 'oo', 'o'),
(10, 'u', 'u', '7788876544', 'oi', 'iohjk@fdf', '88', '21', '2121242', '24545i', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_dsr`
--

CREATE TABLE `emp_dsr` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(250) DEFAULT NULL,
  `emp_design` varchar(250) DEFAULT NULL,
  `emp_terit` varchar(250) DEFAULT NULL,
  `emp_headqtr` varchar(250) DEFAULT NULL,
  `emp_state` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `emp_workwith` varchar(250) DEFAULT NULL,
  `emp_tradename` varchar(250) DEFAULT NULL,
  `emp_trdcon` varchar(250) DEFAULT NULL,
  `emp_trdadd` varchar(250) DEFAULT NULL,
  `emp_purvisit` varchar(250) DEFAULT NULL,
  `emp_orderb` varchar(250) DEFAULT NULL,
  `emp_ordamt` varchar(250) DEFAULT NULL,
  `emp_trdrmk` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_dsr`
--

INSERT INTO `emp_dsr` (`id`, `emp_name`, `emp_design`, `emp_terit`, `emp_headqtr`, `emp_state`, `date`, `emp_workwith`, `emp_tradename`, `emp_trdcon`, `emp_trdadd`, `emp_purvisit`, `emp_orderb`, `emp_ordamt`, `emp_trdrmk`) VALUES
(1, 'shivay', 'God Father', 'duniya', 'kailash', 'kailsh', '0/0/0000', 'vishnu', 'human', '9999999', 'mangal', 'murder', '25', 'fdsfsd', 'fdfds'),
(2, 'emp1', 'SE', 'sdffsd', 'sdfsdf', 'sdf', '2017/3/20', 'sdf', 'sdf', '23424234', 'sdfsdf', 'sdf', 'sfdsf', '34334', 'sdfsdf'),
(3, 'emp2', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '2017/3/20', 'sdfsdf', 'sdfsd', '234234234', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `ms_stock`
--

CREATE TABLE `ms_stock` (
  `id` int(11) NOT NULL,
  `fr_name` varchar(250) DEFAULT NULL,
  `fr_address` varchar(250) DEFAULT NULL,
  `fr_contact` varchar(250) DEFAULT NULL,
  `fr_propname` varchar(250) DEFAULT NULL,
  `fr_email` varchar(250) DEFAULT NULL,
  `fr_tin` varchar(250) DEFAULT NULL,
  `fr_cst` varchar(250) DEFAULT NULL,
  `fr_pan` varchar(250) DEFAULT NULL,
  `fr_bank` varchar(250) DEFAULT NULL,
  `fr_baccont` varchar(250) DEFAULT NULL,
  `fr_bifsc` varchar(250) DEFAULT NULL,
  `fr_transport` varchar(250) DEFAULT NULL,
  `fr_holiday` varchar(250) DEFAULT NULL,
  `fr_agencurnt` varchar(250) DEFAULT NULL,
  `fr_agenprev` varchar(250) DEFAULT NULL,
  `fr_obusiness` varchar(250) DEFAULT NULL,
  `fr_mdistrb` varchar(250) DEFAULT NULL,
  `fr_exparea` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_stock`
--

INSERT INTO `ms_stock` (`id`, `fr_name`, `fr_address`, `fr_contact`, `fr_propname`, `fr_email`, `fr_tin`, `fr_cst`, `fr_pan`, `fr_bank`, `fr_baccont`, `fr_bifsc`, `fr_transport`, `fr_holiday`, `fr_agencurnt`, `fr_agenprev`, `fr_obusiness`, `fr_mdistrb`, `fr_exparea`) VALUES
(8, 'shriram market', 'ayodhya', '8600249488', 'shriram', 'shriram@mail.com', 'shr111', 'shr111', 'shr777', 'ayodhybank', 'abk555', 'ifsc444', 'truck', 'sunday', 'ayodhya', 'ayodhya', 'nothing', 'nothing', 'nothing'),
(9, 'RamIT', 'WTC', '77777777777777', 'prashant', 'ramit@mail.com', 'f88', 'gf88', 'gg88', 'fd8', 'fgf888', 'fgfgf88', 'dfdf88', 'fdsfd', 'dfs', 'gfgd', 'gff', 'fgdg', 'hggh'),
(10, 'Consultacy Firm', 'Pune', '3432423432', 'asdf', 'sdfsf@gmail.com', 't-3434', 'c-565', 'fgdg44534', 'fgdg', '3453454355', 'rt45445', '454', '454', '545', '4', '4', '45', '45'),
(11, 'opok', 'kljkl', '9787868787', '78678', '7876@erter', '676', '676', '767', '6767', '6767675', '67676', '767', '7667', '', '', '', '', ''),
(12, 'oio', 'uoio', '4568696223', 'p[', 'gfdgd@fdfg', '6767', '767', '67676', '7676', '676', '676', '6767', '7676', '6767', '676', '767', 'jkjk', 'kkh');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `dis_name` varchar(250) DEFAULT NULL,
  `dis_town` varchar(250) DEFAULT NULL,
  `tso_name` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `pay_method` varchar(250) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`dis_name`, `dis_town`, `tso_name`, `contact`, `pay_method`, `id`) VALUES
('prashant', 'pune', 'ranjit', '8600249455', 'CHEQUE', 1),
('prashant', 'pune', 'ranjit', '8600249455', 'CHEQUE', 2),
('prashant', 'pune', 'ranjit', '8600249455', 'CHEQUE', 3),
('prashant', 'pune', 'ranjit', '8600249455', 'CHEQUE', 4),
('d1', 'Pune', 'TSOName', '23453454', 'CASH', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `product` varchar(250) DEFAULT NULL,
  `grams` varchar(250) DEFAULT NULL,
  `qunt_case` varchar(250) DEFAULT NULL,
  `percval` varchar(250) DEFAULT NULL,
  `tocase` varchar(250) DEFAULT NULL,
  `toamt` varchar(250) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product`, `grams`, `qunt_case`, `percval`, `tocase`, `toamt`, `order_id`) VALUES
(1, 'hgf', 'g', 'ghf', 'gh', 'gf', 'gh', 'gfh'),
(2, 'ASM', 'fdsfds', 'fdsf', 'dfdsf', 'fdsf', 'dfdsf', '111'),
(3, 'TSO', 'dfds', 'fdsf', 'dfsf', 'dfsfdsf', 'dfffds', '111'),
(4, 'ASM', '50', '2', '25', '50', '100', '111'),
(5, 'SE', '25', '1', '2', '20', '200', '111'),
(6, 'ASM', '10', '10', '10', '10', '1000', '0'),
(7, 'SE', '20', '20', '20', '200', '2000', '0'),
(8, 'ASM', '10', '10', '10', '10', '1000', '2'),
(9, 'SE', '20', '20', '20', '200', '2000', '2'),
(10, 'ASM', '10', '10', '10', '10', '1000', '3'),
(11, 'SE', '20', '20', '20', '200', '2000', '3'),
(12, 'SE', '20', '20', '20', '200', '2000', '3'),
(13, 'ASM', '10', '10', '10', '10', '1000', '4'),
(14, 'SE', '20', '20', '20', '200', '2000', '4'),
(15, 'SE', '20', '20', '20', '200', '2000', '4'),
(16, 'alovera Facewash', '4', '34', '343', '34', '34', '5'),
(17, 'alovera Facewash', '4', '34', '343', '34', '34', '5'),
(18, '', '', '', '', '', '', '6'),
(19, '', '', '', '', '', '', '6'),
(20, 'alovera Facewash', '3', '3', '3', '3', '3', '7'),
(21, 'alovera Facewash', '3', '3', '3', '3', '3', '7'),
(22, '', '', '', '', '', '', '8'),
(23, '', '', '', '', '', '', '8'),
(24, '', '', '', '', '', '', '9'),
(25, '', '', '', '', '', '', '9');

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
(3, 'fgfdgdg', 'fgfg@hfgf.gfdg', 'fdfdsfdsfds', 'admin', 'admin@123', 'TSO'),
(4, 'fgfdgdg', 'fgfg@hfgf.gfdg', 'fdfdsfdsfds', 'admin', 'admin@123', 'RSM');

-- --------------------------------------------------------

--
-- Table structure for table `sur_product`
--

CREATE TABLE `sur_product` (
  `id` int(11) NOT NULL,
  `br_hrproduct` varchar(255) DEFAULT NULL,
  `lo_hrproduct` varchar(255) DEFAULT NULL,
  `br_skproduct` varchar(255) DEFAULT NULL,
  `lo_skproduct` varchar(255) DEFAULT NULL,
  `br_pordpercnt` varchar(100) DEFAULT NULL,
  `lo_pordpercnt` varchar(100) DEFAULT NULL,
  `suser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sur_product`
--

INSERT INTO `sur_product` (`id`, `br_hrproduct`, `lo_hrproduct`, `br_skproduct`, `lo_skproduct`, `br_pordpercnt`, `lo_pordpercnt`, `suser_id`) VALUES
(1, 'jhgj,hgjhgj,hgjhgj,', 'hjhgj,hjgj,hjgj,', 'jhgjg,hgjhgj,jghj,', 'hjghj,hjhgj,jhgj,', '55', '55', 0),
(2, 'lav,lav,lav,', 'kush,kush,kush,', 'hanuman,hanuman,vali,', 'sugriv,vali,hanuman,', '2000', '1000', 20),
(3, 'fgh,klf,kjlfgd,', 'fgdjkl,lkfdg,lkhn,', 'klhghfkj,lghkjl,gkjlfd,', 'kjlghn,gjklfdgdjkl,kljgfdgfdhj,', '55', '55', 21),
(4, 'h1,h,hh,', 'hhh,hhhh,hhhh,', 's,ss,sss,', 'ssss,sssss,sssss,', '40', '10', 22),
(5, '9,909,909,', '900,909,9090,', '09,9808,0,', '09,090,090,', '09', '909', 23),
(6, ',,,', ',,,', ',,,', ',,,', '', '', 24),
(7, ',,,', ',,,', ',,,', ',,,', '', '', 25),
(8, 'P,P,O,', 'P,K,G no ,', 'Gh,H,H,', 'H,Y,H,', '88', '9', 26),
(9, 'h1,h2,21,', 'p1,2,r,', 'sdf,r,df,', 'df,df,sdf,', '4', '4', 27),
(10, 'Susilk,Dove,Ponds,', 'Laksmi,Vicko,Dabar,', 'Lorel,Clean Clear,Fair & Lovely,', 'Boro Plus,Barnol,Ayur,', '50', '30', 28);

-- --------------------------------------------------------

--
-- Table structure for table `sur_user`
--

CREATE TABLE `sur_user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `retail_no` int(11) DEFAULT NULL,
  `employe_no` int(11) DEFAULT NULL,
  `scheme` varchar(250) DEFAULT NULL,
  `advert` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sur_user`
--

INSERT INTO `sur_user` (`id`, `name`, `address`, `state`, `retail_no`, `employe_no`, `scheme`, `advert`) VALUES
(26, 'Pallavi ', 'Pune ', 'Maha', 89, 3, 'coupons,luckey draw,', 'TV,'),
(27, 'sdfdsf', 'ewerwer', 'sdsfds', 34, 4, 'coupons,priceoff,', 'TV,News,'),
(28, 'Dnyanesh', 'Pune', 'Maharashtra', 3, 5, 'priceoff,extra qty,', 'TV,News,');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_desc`, `product_date`) VALUES
(1, 'p', 10, 200, 'Test product', '2017-03-22 12:23:35'),
(2, 'p2', 10, 20, 'sample product', '2017-03-22 17:24:12'),
(3, 'p3', 10, 20, 'sample product', '2017-03-22 5:29 pm');

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
  `user_number` varchar(20) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_show_pass` varchar(250) NOT NULL,
  `user_territory` varchar(250) NOT NULL,
  `user_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `user_name`, `user_email`, `user_password`, `user_number`, `user_state`, `user_city`, `user_role`, `user_code`, `user_date`, `user_show_pass`, `user_territory`, `user_status`) VALUES
(1, 'Dnyanesh', 'M', 'admin', 'dnyanesh.mali@softinfology.com', '8adcb100cdf06ea1525a125786eca9b9', '9689483519', 'Maharashtra', 'Osmanabad', 'admin', '', '2017-03-15 00:00:00', '', '', 0),
(10, 'admin', 'se', 'adminse', 'admin@mail.com', 'e6e061838856bf47e1de730719fb2609', '8600249455', 'pune', 'pune', 'SE', 'SE/PUNE/1', '2017-03-18 06:29:33', 'admin@123', 'pune', 1),
(11, 'Matt', 'R', 'mattr', 'matt@gmail.com', '25f9e794323b453885f5181f1b624d0b', '343434343434', 'UP', 'Kanpur', 'ASM', 'ASM/KANPUR/1', '2017-03-20 06:07:38', '123456789', 'West', 1),
(12, 'Pitter', 'K', 'pitterk', 'pitter@gmail.com', 'bbb8aae57c104cda40c93843ad5e6db8', '333333333', 'UP', 'Kanpur', 'ASM', 'ASM/KANPUR/2', '2017-03-20 06:08:55', '111111111', 'West', 1),
(13, 'Kite', 'L', 'kitel', 'kite@gmail.com', '1bbd886460827015e5d605ed44252251', '343434', 'UP', 'Kanpur', 'TSO', 'TSO/KANPUR/1', '2017-03-20 06:10:17', '11111111', 'West', 0),
(14, 'John', 'M', 'johnm', 'john@gmail.com', 'bae5e3208a3c700e3db642b6631e95b9', '1112212121', 'UP', 'Kanpur', 'TSO', 'TSO/KANPUR/2', '2017-03-20 06:11:26', '22222222', 'West', 0),
(15, 'Patrick', 'P', 'patrickp', 'patrick@gmail.com', '1bbd886460827015e5d605ed44252251', '23423432423', 'Maharashtra', 'Mumbai', 'TSO', 'TSO/MUMBAI/1', '2017-03-20 06:13:22', '11111111', 'Kharghar', 0),
(16, 'Smith', 'W', 'smithw', 'smith@gmail.com', '1bbd886460827015e5d605ed44252251', '23232323', 'Maharashtra', 'Pune', 'ASM', 'ASM/PUNE/1', '2017-03-20 06:31:56', '11111111', 'Khardi', 0),
(17, 'Rick', 'C', 'rickc', 'rick@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5', '2323223', 'Maharashtra', 'Pune', 'ASM', 'ASM/PUNE/2', '2017-03-20 06:33:31', '1111111111', 'Shivajinagar', 0),
(18, 'Rabia', 'T', 'rabiat', 'rabia@gmail.com', '4aee3e28df37ea1af64bd636eca59dcb', '34343434', 'Maharashtra', 'Pune', 'TSO', 'TSO/PUNE/1', '2017-03-20 06:35:33', '3333333333', 'Shivajinagar', 0),
(19, 'Serena', 'M', 'serenam', 'serena@gmail.com', '3a08fe7b8c4da6ed09f21c3ef97efce2', '232323', 'Maharashtra', 'Mumbai', 'TSO', 'TSO/MUMBAI/2', '2017-03-20 06:42:52', '2222222222', 'Sayan', 0),
(20, 'Loren', 'L', 'lorenl', 'loren@gmail.com', 'bbb8aae57c104cda40c93843ad5e6db8', '343434', 'Maharashtra', 'Pune', 'RSM', 'RSM/PUNE/2', '2017-03-20 06:45:02', '111111111', 'Vimannagar', 1);

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
-- Indexes for table `dist_appoint`
--
ALTER TABLE `dist_appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_dsr`
--
ALTER TABLE `emp_dsr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_stock`
--
ALTER TABLE `ms_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_user`
--
ALTER TABLE `sales_user`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sur_product`
--
ALTER TABLE `sur_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_user`
--
ALTER TABLE `sur_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `dist_appoint`
--
ALTER TABLE `dist_appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `emp_dsr`
--
ALTER TABLE `emp_dsr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_stock`
--
ALTER TABLE `ms_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sales_user`
--
ALTER TABLE `sales_user`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sur_product`
--
ALTER TABLE `sur_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sur_user`
--
ALTER TABLE `sur_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
