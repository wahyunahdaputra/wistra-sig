-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2024 pada 04.10
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
-- Database: `wistra_sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wistra_lokasi`
--

CREATE TABLE `wistra_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lat_lng` varchar(245) NOT NULL,
  `nama_lokasi` varchar(245) NOT NULL,
  `kategori` varchar(245) NOT NULL,
  `keterangan` varchar(245) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wistra_lokasi`
--

INSERT INTO `wistra_lokasi` (`id_lokasi`, `lat_lng`, `nama_lokasi`, `kategori`, `keterangan`, `gambar`) VALUES
(22, '-4.035748, 122.101150', 'Puncak Ahuawali', 'Wisata Alam', 'Indah Sekali Bagus', 'puncak_ahuawali.jpg'),
(25, '-4.216938, 122.746469', 'Air Terjun Moramo', 'Wisata Perairan', 'Cantik', 'moramo.jpeg'),
(32, '-4.434847, 121.873456', 'Taman Nasional Rawa Aopa', 'Wisata Alam', 'Cantik dan Indah', 'rawaaopa.jpg'),
(33, '-4.127553, 121.413174', 'Pulau Padamarang', 'Wisata Alam', 'Bagus Sekali', 'padamarang.jpg'),
(34, '-3.999575, 122.616725', 'Pantai Nambo', 'Wisata Perairan', 'Bagus Sekali Indah', 'nambo.webp'),
(40, '-3.978130, 122.544558', 'Masjid Al-Alam Kendari', 'Wisata Religi', 'Tempat Ibadah Muslim', 'alalam.jpg'),
(41, '-3.977258, 122.517747', 'Museum Kota Kendari', 'Wisata Budaya', 'Tempat Wisata Budaya Kota Kendari', 'museumkdi.jpg'),
(48, '-3.894947, 122.665421', 'Pantai Toronipa', 'Wisata Perairan', 'Dekat, dan bagus pemandangannya', 'Toronipa.jpg'),
(49, '-4.060951, 123.136267', 'Air Terjun Tumburano', 'Wisata Perairan', 'Bagus sekali', 'tumburano.jfif'),
(50, '-4.929031, 122.756338', 'Pantai Meleura', 'Wisata Perairan', 'Cantik pemandangannya', 'meleura.jpg'),
(51, '-4.904287, 122.753237', 'Danau Napabale', 'Wisata Perairan', 'Sejuk airnya', 'napabale.jpg'),
(52, '-4.970133, 122.619639', 'Benteng Kotano Wuna', 'Wisata Budaya', 'Benteng tertua di muna', 'benteng.jfif'),
(53, '-4.972025, 122.609506', 'Masjid Tua Kerajaan Muna', 'Wisata Religi', 'Masjid tertua di muna', 'masjidmuna.jpg'),
(54, '-3.663375, 121.236013', 'Gunung Mekongga', 'Wisata Alam', 'Gunung tertinggi di sulawesi tenggara', 'mekongga.jpg'),
(55, '-4.817697, 121.699296', 'Padang Pajjongang', 'Wisata Alam', 'Padang savana bombana', 'pajjongang.jfif'),
(56, '-4.870905, 122.039394', 'Pantai Alo-alo', 'Wisata Perairan', 'Pantai cantik bombana', 'aloalo.webp'),
(57, '-5.307401, 121.955845', 'Gung Sabampolulu', 'Wisata Alam', 'Gunung tertinggi dipulau kabaena', 'sabampolulu.jpg'),
(58, '-5.225500, 121.947061', 'Goa Watuburi', 'Wisata Alam', 'Goa yang berada dipulau kabaena', 'watuburi.jpeg'),
(59, '-4.654475, 123.164372', 'Air Terjun Doule', 'Wisata Perairan', 'Keren dan sejuk airnya', 'doule.jpeg'),
(60, '-4.783216, 123.179552', 'Benteng Lipu Kulisusu', 'Wisata Budaya', 'Benteng di kulisusu', 'lipu.jfif'),
(61, '-5.503635, 122.668000', 'Air Terjun Samparona', 'Wisata Perairan', 'Air terjun indah di bau-bau', 'samparona.jpg'),
(62, '-5.490498, 122.688055', 'Hutan Pinus Samparona', 'Wisata Alam', 'Hutan pinus indah bau-bau', 'pinus.jpg'),
(63, '-5.473123, 122.601810', 'Benteng Keraton Buton', 'Wisata Budaya', 'Benteng tertua di buton', 'keraton.jpg');

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
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `wistra_pengguna`
--
ALTER TABLE `wistra_pengguna`
  MODIFY `pengguna_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
