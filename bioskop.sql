-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 10:13 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `datastudio`
--

CREATE TABLE `datastudio` (
  `idStudio` int(11) NOT NULL,
  `namaStudio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahKursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datastudio`
--

INSERT INTO `datastudio` (`idStudio`, `namaStudio`, `jumlahKursi`) VALUES
(1, '1', 98),
(2, '2', 130);

-- --------------------------------------------------------

--
-- Table structure for table `detailpembelian`
--

CREATE TABLE `detailpembelian` (
  `no` int(11) NOT NULL,
  `noPembelian` varchar(25) NOT NULL,
  `noKursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpembelian`
--

INSERT INTO `detailpembelian` (`no`, `noPembelian`, `noKursi`) VALUES
(1, 'GYzi0001', 120),
(2, 'GYzi0001', 121),
(3, 'GYzi0001', 122);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `noFilm` int(11) NOT NULL,
  `judulFilm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsiFilm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sutradara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releaseDate` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`noFilm`, `judulFilm`, `deskripsiFilm`, `foto`, `pemain`, `sutradara`, `produser`, `releaseDate`, `durasi`, `genre`) VALUES
(14, 'Avengers - Infinity War 2', 'The Avengers dan sekutu mereka harus bersedia mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum ia berhasil menghancurkan alam semesta.', 'Avengers-Infinity-War.jpg', 'Robert Downey, Jr., Benedict Cumberbatch , Chris Pratt, Tom Holland', 'Anthony Russo, Joe Russo', 'Jeffrey Ford; Matthew Schmidt', '2018-06-19', 120, 'Action | Drama'),
(15, 'Black Panther', 'Sebagai Raja baru dari Wakanda, T’Challa (Chadwick Boseman) masih bergumul mengenai perasaannya atas meninggalnya sang ayah, T’Chaka (John Kani). Namun ia kemudian memutuskan untuk meneruskan perjuangan sang ayah. Ketika Wakanda berada dalam ancaman dua musuh berbahaya yang dapat mengancam keselamatan negara, Black Panther berusaha membuktikan diri sebagai raja sejati Wakanda. Ia harus menggunakan kostum barunya serta kekuatannya untuk membela Wakanda dan negara lainnya.', 'Black_Panther_film_poster.jpg', 'Chadwick Boseman, Lupita Nyong''o', 'Ryan Coogler', 'Marvel Production', '2018-07-08', 120, 'Action'),
(16, 'Bilal A New Breed of Hero', 'Film Bilal A New Breed of Hero berlatar sekitar seribu tahun yang lalu, berkisah pada seorang anak laki-laki bernama Bilal yang bermimpi untuk menjadi pejuang hebat. Namun ia diculik bersama dengan saudari perempuannya dan dibawa ke tanah yang jauh dari rumah.', 'Bilal_A_New_Breed_of_Hero_2018.jpg', 'Adewale Akinnuoy. China Anne McClain', ' Ayman Jamal, Khurram Alavi', ' Ayman Jamal', '2018-08-10', 120, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalfilm`
--

CREATE TABLE `jadwalfilm` (
  `idJadwal` int(11) NOT NULL,
  `noFilm` int(11) NOT NULL,
  `idStudio` int(11) NOT NULL,
  `tanggalTayang` date NOT NULL,
  `jadwalTayang` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwalfilm`
--

INSERT INTO `jadwalfilm` (`idJadwal`, `noFilm`, `idStudio`, `tanggalTayang`, `jadwalTayang`, `harga`) VALUES
(8, 14, 1, '2018-07-09', '12:00:00', 25000),
(9, 14, 1, '2018-07-09', '14:00:00', 25000),
(10, 15, 2, '2018-07-09', '17:00:00', 25000),
(11, 15, 2, '2018-10-09', '05:25:23', 25000),
(12, 15, 1, '2018-06-24', '11:32:00', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `noPembelian` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(100) NOT NULL,
  `tanggalPesan` date NOT NULL,
  `idJadwal` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`noPembelian`, `idUser`, `tanggalPesan`, `idJadwal`, `totalHarga`) VALUES
('GYzi0001', 6, '2018-10-01', 10, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `idTransaksi` int(11) NOT NULL,
  `username` int(255) NOT NULL,
  `tanggalBeli` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` enum('belum dikonfirmasi','dikonfirmasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`idTransaksi`, `username`, `tanggalBeli`, `jumlah`, `bukti`, `status`) VALUES
(10, 6, '2018-09-28', 30000, 'backgroundlaptop.jpg', 'dikonfirmasi'),
(11, 6, '2018-10-01', 70000, 'Cactus.jpg', 'dikonfirmasi'),
(12, 6, '2018-10-01', 80000, 'Capture3.PNG', 'dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `idUserAdmin` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','admin','superadmin','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` int(200) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`idUserAdmin`, `username`, `password`, `nama`, `alamat`, `telepon`, `email`, `level`, `saldo`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'malak', 'malang', '234567890', 'malak', 'admin', 0, 'original.jpg'),
(2, 'malak', '72ea813a17bcff1b9f07b286c5ff7de4', 'malak', 'malang', '0875674567', 'malakdiana@gmail.com', 'superadmin', 0, 'original.jpg'),
(3, 'diana', '3a23bb515e06d0e944ff916e79a7775c', 'diana', 'kediri', '0865674563726', 'diana@gmail.com', 'user', 0, ''),
(4, 'syilvi', 'da5fcd8387f0742bc9268b9cc7d8cbbe', 'syilvi', 'kediri', '085706809870', 'sylviaputri0@gmail.com', 'user', 0, ''),
(6, 'flora', '928949a8b13c59abd88eb44dd9afe489', 'flora zafina', 'Jombang', '0857454663646', 'flora@gmail.com', 'user', 380000, 'original.jpg'),
(8, 'yudha', '2b9633304de305ed5c03fe19b7a06afe', 'yudha', 'malang', '0857454663646', 'malakdiana00@gmail.com', 'user', 50000, 'tumblr_oagkstJhEY1vtwf0xo1_5001.jpg'),
(9, 'ikhsan', '4e9194a3bb65ab53e41247480905c391', 'ikhsan', 'malang', '085675645234', 'mlkdiana1@gmail.com', 'admin', 0, '6.PNG'),
(10, 'meli', '315fef7b8d30f99d6964f489ee4c9828', 'meli', 'malang', '0863534426733', 'mlkdiana1@gmail.com', 'user', 0, '5.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datastudio`
--
ALTER TABLE `datastudio`
  ADD PRIMARY KEY (`idStudio`);

--
-- Indexes for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_nopembelian` (`noPembelian`),
  ADD KEY `noPembelian` (`noPembelian`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`noFilm`);

--
-- Indexes for table `jadwalfilm`
--
ALTER TABLE `jadwalfilm`
  ADD PRIMARY KEY (`idJadwal`),
  ADD KEY `fk_nofilm` (`noFilm`),
  ADD KEY `fk_idstudio` (`idStudio`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`noPembelian`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idJadwal` (`idJadwal`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`idUserAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datastudio`
--
ALTER TABLE `datastudio`
  MODIFY `idStudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `noFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jadwalfilm`
--
ALTER TABLE `jadwalfilm`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `idUserAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwalfilm`
--
ALTER TABLE `jadwalfilm`
  ADD CONSTRAINT `jadwalfilm_ibfk_1` FOREIGN KEY (`noFilm`) REFERENCES `film` (`noFilm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwalfilm_ibfk_2` FOREIGN KEY (`idStudio`) REFERENCES `datastudio` (`idStudio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `useradmin` (`idUserAdmin`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`idJadwal`) REFERENCES `jadwalfilm` (`idJadwal`) ON DELETE CASCADE;

--
-- Constraints for table `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_ibfk_1` FOREIGN KEY (`username`) REFERENCES `useradmin` (`idUserAdmin`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
