-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 04:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `NIK` int(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `password`, `nama_lengkap`, `NIK`, `jk`, `no_hp`, `email`, `alamat`, `level`) VALUES
('a2', '202cb962ac59075b964b07152d234b70', 'muhammad naufal', 628789283, 'Laki - laki', '0813226378', 'naufal@gmail.com', 'jakarta utara', '2'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'rosyid', 372016662, 'Laki - laki', '08152456827', 'rosyid123@gmail.com', 'Semarang', '1'),
('azis ganteng', '202cb962ac59075b964b07152d234b70', 'azis cakep', 123, 'Laki - laki', '0874', 'akbfak@gmail.com', 'jetis\r\n\r\n\r\n\r\n\r\n\r\n', '2'),
('s3', '202cb962ac59075b964b07152d234b70', 'heru', 987123, 'Laki - laki', '661772898', 'ghail@gmail.com', 'Jakarta', '2'),
('Sasa', '81dc9bdb52d04dc20036dbd8313ed055', 'Rara', 5767657, 'Laki - laki', '64757657', 'gfcga@jgch', 'Jgcjgvjvjh', '2'),
('solsol', '538d91e850c122df4a755e9764fa600e', 'solsolsol', 2147483647, 'Laki - laki', '085815973515', 'faisaladitiya16@gmail.com', 'umaar 101', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_beli` int(11) NOT NULL,
  `tgl_psn` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `almt_tujuan` text NOT NULL,
  `sate_ayam` int(10) NOT NULL,
  `soto_ayam` int(10) NOT NULL,
  `nasgor` int(10) NOT NULL,
  `degan` int(10) NOT NULL,
  `scampur` int(10) NOT NULL,
  `dawet` int(10) NOT NULL,
  `martabak` int(10) NOT NULL,
  `onde` int(10) NOT NULL,
  `piscok` int(10) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_beli`, `tgl_psn`, `username`, `almt_tujuan`, `sate_ayam`, `soto_ayam`, `nasgor`, `degan`, `scampur`, `dawet`, `martabak`, `onde`, `piscok`, `subtotal`) VALUES
(1286381, '0000-00-00', 'a2', 'jln rowo sito gintung jalan kalijogo ponorogo', 4, 1, 1, 1, 1, 1, 1, 1, 1, 109000),
(1286390, '0000-00-00', 's3', '', 2, 1, 2, 3, 3, 4, 5, 2, 3, 156000),
(1286392, '0000-00-00', 'inqi azhar', '', 2, 5, 5, 5, 5, 5, 5, 5, 5, 275000),
(1286402, '2018-07-07', 'a2', 'jln teluk gong selatan 4  rt 2/ rw 17 no.35b kel.pejagalan kec.pejaringan jakarta utara', 4, 4, 4, 0, 0, 4, 4, 0, 4, 192000),
(1286405, '2017-01-01', 'a2', 'jalan raya kalijogo', 10, 0, 0, 0, 0, 0, 0, 0, 0, 150000),
(1286406, '2017-01-01', 'Sasa', 'gvh gc', 5, 5, 2, 0, 5, 0, 0, 0, 0, 189000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_beli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1286407;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
