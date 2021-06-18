-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebsdgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbadatb`
--

CREATE TABLE `dbadatb` (
  `id` int(5) NOT NULL,
  `nama_adat` varchar(100) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbadatb`
--

INSERT INTO `dbadatb` (`id`, `nama_adat`, `keterangan`, `gambar`) VALUES
(1, 'Upacara Ngaben', ' Ngaben adalah upacara pembakaran jenazah yang dilakukan oleh umat Hindu di Bali dan dimaksudkan sebagai pensucian roh orang yang sudah meninggal sebelum menuju ke peristirahatan terakhir.\r\n\r\n', 'ngaben.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dbbali`
--

CREATE TABLE `dbbali` (
  `id` int(5) NOT NULL,
  `nama_wisata` varchar(200) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbbali`
--

INSERT INTO `dbbali` (`id`, `nama_wisata`, `keterangan`, `gambar`) VALUES
(1, 'Pura Tanah Lot', 'Sesuai dengan namanya, saat anda liburan ke pura Tanah Lot, anda akan menemukan pura yang berada di atas batu karang besar dengan latar belakang laut selatan. Batu karang besar ini berada di tengah laut dan saat air pasang, batu karang terlihat terpisah dengan daratan.', 'tanahlot.jpg'),
(2, 'Pantai Kuta', 'Ombak di pantai Kuta lumayan besar dan cocok untuk aktivitas selancar pemula. Jika anda ingin berenang bersama anak-anak, maka anak anda harus selalu dalam pengawasan orang dewasa.\r\n\r\nAktivitas utama wisatawan saat liburan ke pantai Kuta adalah duduk santai di tepi pantai, berenang, dan melihat pemandangan sunset. Karena tingginya minat wisatawan liburan ke pantai Kuta, maka hampir setiap hari jalan raya sekitar pantai akan terjadi kemacetan.', 'kuta,jpg'),
(3, 'Pura Uluwatu', 'Uluwatu temple atau Pura Luhur Uluwatu selalu menjadi tempat wisata populer untuk wisatawan yang pertama kali liburan ke pulau Bali. Hal menarik yang wisatawan dapat lihat di pura Uluwatu seperti;', 'uluwatu.jpg'),
(9, 'ubud bali', 'knasdkbaiooaK', 'ubud.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dbjogja`
--

CREATE TABLE `dbjogja` (
  `id` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbjogja`
--

INSERT INTO `dbjogja` (`id`, `nama_wisata`, `keterangan`, `gambar`) VALUES
(1, 'candi Borobudur', 'Candi Borobudur adalah candi Buddha terbesar di dunia. Dibangun pada abad ke-9, Candi Borobudur sekarang menjadi magnet yang mampu menarik jutaan wisatawan setiap tahun. Temukan fakta menarik, sejarah, dan gambar Candi Borobudur di sini.', 'borobudur.jpg'),
(2, 'Candi Mendut', 'Candi Mendut merupakan Candi Buddha yang dibangun oleh Raja Indra dari Wangsa Syailendra. Relung Candi Mendut menjadi singgasana untuk arca Buddha berukuran besar.', 'mendut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trivia`
--

CREATE TABLE `trivia` (
  `id` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trivia`
--

INSERT INTO `trivia` (`id`, `keterangan`) VALUES
(1, 'Wisata Tanah Lot yang terletak di Desa Beraban, Kecamatan Kediri, Kabupaten Tabanan, Bali merupakan ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'cheva', 1234),
(2, 'satine@gmail.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbadatb`
--
ALTER TABLE `dbadatb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbbali`
--
ALTER TABLE `dbbali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbjogja`
--
ALTER TABLE `dbjogja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trivia`
--
ALTER TABLE `trivia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbadatb`
--
ALTER TABLE `dbadatb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dbbali`
--
ALTER TABLE `dbbali`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dbjogja`
--
ALTER TABLE `dbjogja`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trivia`
--
ALTER TABLE `trivia`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
