-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 03:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nomor`, `nama`, `nip`, `tgl_lahir`, `divisi`) VALUES
(39, 'Florenza', '201497382372675', '9/3/1985', 'Training'),
(25, 'Cybill', '201565636744038', '2/14/1966', 'Research and Development'),
(29, 'Doti', '30010397871586', '5/15/1975', 'Sales'),
(34, 'Griz', '30078265116079', '11/15/1966', 'Business Development'),
(16, 'Avis', '30111174442136', '12/23/1965', 'Marketing'),
(43, 'Rufus', '30141400680951', '12/18/1972', 'Marketing'),
(24, 'Gabriell', '30258847741210', '11/1/1978', 'Human Resources'),
(27, 'Hilde', '30559443576599', '2/10/1984', 'Accounting'),
(14, 'Alexina', '348472458613611', '9/30/1961', 'Sales'),
(37, 'Yvor', '3530710000765575', '7/30/1985', 'Research and Development'),
(31, 'Val', '3541390695025473', '7/16/1997', 'Engineering'),
(44, 'Marvin', '3545342282833039', '11/6/1970', 'Training'),
(17, 'Neils', '3547960911405479', '6/30/1977', 'Marketing'),
(38, 'Levi', '3559027946919356', '4/29/1966', 'Business Development'),
(32, 'Reeta', '3560584103936653', '4/30/1975', 'Human Resources'),
(41, 'Dael', '3562871693993980', '1/5/1992', 'Support'),
(8, 'Kayley', '3563532017677910', '7/4/1977', 'Engineering'),
(22, 'Kyle', '3563834163843118', '2/11/1994', 'Business Development'),
(12, 'Curt', '3564206849251389', '2/26/1971', 'Training'),
(1, 'Shayne', '3570027599314322', '10/7/1978', 'Business Development'),
(26, 'Paola', '3573482033939910', '5/7/1997', 'Accounting'),
(21, 'Shae', '3578757375486215', '10/4/1978', 'Product Management'),
(3, 'Lanni', '3579136417587711', '4/27/1983', 'Accounting'),
(13, 'Aundrea', '3586598661519271', '8/15/1973', 'Legal'),
(47, 'Hyacintha', '3589828719666403', '2/2/1969', 'Research and Development'),
(18, 'Tim', '36420789614383', '11/13/1985', 'Accounting'),
(4, 'Abrahan', '372301929088963', '1/25/1971', 'Product Management'),
(28, 'Velma', '374283578117756', '12/2/1975', 'Engineering'),
(35, 'Eveleen', '377946396656133', '10/21/1983', 'Human Resources'),
(9, 'Valdemar', '4017959809062', '3/4/1971', 'Sales'),
(15, 'Osbourne', '4405698802434500', '11/26/1965', 'Support'),
(5, 'Denice', '4844374217182972', '6/29/1993', 'Human Resources'),
(2, 'Nolan', '490360810087744677', '4/10/1990', 'Services'),
(42, 'Saloma', '4911539595315455', '3/5/1996', 'Engineering'),
(49, 'Dana', '5100179010656650', '4/10/1975', 'Legal'),
(48, 'Aloin', '5135498260915213', '7/12/1963', 'Research and Development'),
(50, 'Arlen', '5602213566267258', '8/23/1993', 'Legal'),
(45, 'Marris', '5602222390118033', '1/31/1990', 'Human Resources'),
(7, 'Breena', '5602256478985947', '6/23/1987', 'Human Resources'),
(11, 'Yves', '561008846543319213', '9/17/1970', 'Legal'),
(30, 'Phillipp', '5610537346726658', '9/5/1970', 'Accounting'),
(46, 'Jedd', '63047996996381556', '9/23/1961', 'Business Development'),
(40, 'Hillyer', '6331103173654236', '2/25/1976', 'Marketing'),
(36, 'Roana', '6334947243325392453', '8/8/1973', 'Legal'),
(10, 'Sinclair', '6379501462728699', '11/1/1964', 'Sales'),
(6, 'Tandy', '6706426587874400995', '6/13/1988', 'Product Management'),
(20, 'Gualterio', '670972874180567788', '3/16/1983', 'Product Management'),
(19, 'Valina', '6763132451270214698', '11/3/1992', 'Engineering'),
(33, 'Alexis', '6763357590824828947', '4/22/1972', 'Services'),
(23, 'Kerrie', '6771140222766653274', '6/3/1991', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD KEY `nip` (`nip`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
