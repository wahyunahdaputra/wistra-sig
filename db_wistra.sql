-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 17.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wistra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wistra_lokasi`
--

CREATE TABLE `wistra_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lat_lng` varchar(245) NOT NULL,
  `nama_lokasi` varchar(245) NOT NULL,
  `keterangan` varchar(245) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wistra_lokasi`
--

INSERT INTO `wistra_lokasi` (`id_lokasi`, `lat_lng`, `nama_lokasi`, `keterangan`, `gambar`) VALUES
(22, '-4.125120, 122.149751', 'Puncak Ahuawali', 'Indah Sekali Bagus', 'puncak_ahuawali.jpg'),
(25, '-4.140107, 122.657204', 'Air Terjun Moramo', 'Cantik', 'moramo.jpeg'),
(32, '-4.515935, 122.125730', 'Taman Nasional Rawa Aopa', 'Cantik dan Indah', 'rawaaopa.jpg'),
(33, '-4.134258, 121.408845', 'Pulau Padamarang', 'Bagus', 'padamarang.jpg'),
(34, '-3.998254, 122.612209', 'Pantai Nambo', 'Bagus Sekali', 'nambo.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wistra_pengguna`
--

CREATE TABLE `wistra_pengguna` (
  `pengguna_id` int(20) NOT NULL,
  `pengguna_username` varchar(255) DEFAULT NULL,
  `pengguna_password` varchar(255) DEFAULT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_foto` text DEFAULT NULL,
  `pengguna_hak_akses` enum('Admin','User') DEFAULT NULL,
  `pengguna_date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `wistra_pengguna`
--

INSERT INTO `wistra_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_foto`, `pengguna_hak_akses`, `pengguna_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Wahyu Nahda', NULL, 'Admin', '2019-06-28 21:06:43'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Tamu', NULL, 'User', '2019-07-15 12:27:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wistra_lokasi`
--
ALTER TABLE `wistra_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `wistra_pengguna`
--
ALTER TABLE `wistra_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wistra_lokasi`
--
ALTER TABLE `wistra_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `wistra_pengguna`
--
ALTER TABLE `wistra_pengguna`
  MODIFY `pengguna_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
