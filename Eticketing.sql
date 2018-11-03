-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 03 Nov 2018 pada 23.12
-- Versi Server: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Eticketing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `photo`) VALUES
('1', 'emir', 'e10adc3949ba59abbe56e057f20f883e', 'emir', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jumlah_ticket` tinyint(4) DEFAULT NULL,
  `status` enum('pending','verified') DEFAULT NULL,
  `payment` decimal(15,2) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `no_hp`, `jumlah_ticket`, `status`, `payment`, `bukti_pembayaran`) VALUES
('5bd303b1ba9f1', 'Ahmad Emir Alfatah', 'ahmademir1201@gmail.com', '083187115996', 1, 'verified', '95000.00', '5bd303b1ba9f1.jpg'),
('5bd5e077e696f', 'Adityo Aji Pambudi', 'jessicajulia@gmail.com', '083187115996', 1, 'verified', '100000.00', '5bd5e077e696f.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `details`, `created_at`, `updated_at`, `photo`) VALUES
(13, 'Srifoton', 'Haloo guys ????\r\n.\r\nAkhirnya yang di tunggu-tunggu udah hadir loh ????\r\nSebelumnya Keluarga Besar Himpunan Mahasiswa Teknik Informatika Universitas Sriwijaya membuka secara resmi pendaftaran Kompetisi Sriwijaya Infomatic Exhibition 2018 dengan tema \"Be Ready to be an Inteligent and Innovative Generation for Palembang Future\" ????\r\n.\r\nApa saja Kompetisinya?\r\nJadi, ada 3 perlombaan antara lain :\r\n? Web Desain\r\n?App Development\r\n? Mobile Legends\r\nBeserta rangkaian acara seru lainnya\r\n.\r\nAyok jangan sampai ketinggalan dan jangan lupa untuk daftarkan diri kalian beserta tim kalian\r\n.\r\nSee you !! ????', 'Fasilkom Unsri', '2018-10-29 22:36:17', '2018-11-10', '13.jpg'),
(14, 'Technology Euphoria', 'Techphoria merupakan serangkaian acara IT tahunan dengan fokus utama kompetisi yang diperuntukan bagi Universitas/Politeknik se-Indonesia untuk meningkatkan kesadaran tentang peranan IT serta meningkatkan nilai keilmuan dan komprehensif di bidang ilmu teknologi informasi komputer, ajang ini sendiri diprakarsai oleh Mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya.', 'Grand Atyasa', '2018-10-29 22:37:54', '2018-10-13', '.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `username`, `email`, `password`, `name`, `tgllahir`, `photo`, `no_hp`) VALUES
('5bd3a53933025', 'criptdestroyer', 'ahmademir1201@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ahmad Emir Alfatah', '0000-00-00', NULL, '083187115996'),
('5bd3a7996700c', 'jeje', 'jessicajulia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jessica Julia', '0000-00-00', NULL, '083187115996'),
('5bd3b1349b9b9', 'Adityo', 'adityo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adityo Aji', '0000-00-00', NULL, '083187115996'),
('5bd3e95087f1b', 'laksamana', 'laksamana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'khairul amin', '0000-00-00', NULL, '083187115996');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `tiket_id` int(11) NOT NULL,
  `jenis_tiket` varchar(20) NOT NULL,
  `harga` decimal(15,2) NOT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`tiket_id`, `jenis_tiket`, `harga`, `id_event`) VALUES
(1, 'VIP', '120000.00', 13),
(2, 'Reguler', '100000.00', 13),
(3, 'Reguler', '95000.00', 14),
(4, 'VIP', '110000.00', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`tiket_id`),
  ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
