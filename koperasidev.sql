-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2022 pada 08.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasidev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_fitur`
--

CREATE TABLE `content_fitur` (
  `id` int(11) NOT NULL,
  `tittle_fitur` varchar(255) NOT NULL,
  `content_fitur` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_fitur`
--

INSERT INTO `content_fitur` (`id`, `tittle_fitur`, `content_fitur`, `created_at`, `updated_at`) VALUES
(54, 'Dasboard Performa Bisnis', 'Adanya fitur dasboard performas bisnis ini  memudahkan kita untuk melihat perkembangan dan performa kita', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(55, 'Data Master', 'Data tersebut digunakan sebagai acuan informasi untuk melakukan transaksi seperti input, edit dan hapus', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(56, 'Log In Anggota', 'Setiap anggota bisa melakukan log in di aplikasi tersebut, sehingga bisa melakukan penggunaan aplikasi tersebut', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(57, 'Laporan Keuangan', 'Setiap anggota bisa melakukan log in di aplikasi tersebut, sehingga bisa melakukan penggunaan aplikasi tersebut', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(58, 'Pembukaan', 'Adanya fitur ini ada pembukaan yang bertujuan untuk membuat user lebih mengenal apa itu koperasi', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(59, 'Pengelolaan Simpanan', 'Adanya fitur ini memudahkan kita untuk mengelola penyimpanan kita di dalam aplikasi tersebut', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(60, 'Pengelolaan Pinjaman', 'Adanya fitur ini memudahkan kita untuk mengelola pinjaman kita di dalam aplikasi tersebut', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(61, 'Simpanan Hasil Usaha', 'Adanya fitur ini memudahkan kita untuk mengelola hasil usaha kita secara mudah dan transparan', '2022-08-22 00:07:38', '2022-08-22 00:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_keunggulan`
--

CREATE TABLE `content_keunggulan` (
  `id` int(11) NOT NULL,
  `tittle_keunggulan` varchar(255) NOT NULL,
  `content_keunggulan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_keunggulan`
--

INSERT INTO `content_keunggulan` (`id`, `tittle_keunggulan`, `content_keunggulan`, `created_at`, `updated_at`) VALUES
(33, 'Koperasi menjangkau', 'Koperasi ini menjangkau setiap lini masyarakat', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(34, 'Terintegrasi dengan e-money', 'Kartu anggota yang terintegrasi dengan e-money', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(35, 'Network', 'Diberikan paket khusus untuk komunikasi', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(36, 'Pelayanan', 'Pelayanan bisa dilakukan secara offline dan online', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(37, 'Akses', 'Aplikasi dapat di akses dimana saja dan kapan saja', '2022-08-22 00:07:38', '2022-08-22 00:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_keuntungan`
--

CREATE TABLE `content_keuntungan` (
  `id` int(11) NOT NULL,
  `tittle_keuntungan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_keuntungan`
--

INSERT INTO `content_keuntungan` (`id`, `tittle_keuntungan`, `created_at`, `updated_at`) VALUES
(25, 'Menyediakan jasa keagenan PPOB dengan banyak produk', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(26, 'Training dan pendampingan anggota', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(27, 'Layanan komunitas', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(28, 'Pemodalan via koperasi', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(29, 'Layanan umroh dan haji', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(30, 'Keagenan umroh dan haji', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(31, 'Pembelian ticket perjalanan secara online', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(32, 'Layanan penjualan via online dan offline', '2022-08-22 00:07:38', '2022-08-22 00:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_message`
--

CREATE TABLE `content_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_popular`
--

CREATE TABLE `content_popular` (
  `id` int(11) NOT NULL,
  `name_bisnis` varchar(255) NOT NULL,
  `logo_bisnis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_popular`
--

INSERT INTO `content_popular` (`id`, `name_bisnis`, `logo_bisnis`, `created_at`, `updated_at`) VALUES
(53, 'EVO Apps', '523610653.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(54, 'Evo Jasa', '584408767.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(55, 'EVO Merchant', '387924935.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(56, 'EVO Kasir', '1860051558.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(57, 'Modal Desa', '140369891.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(58, 'Marketplace', '1323103606.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(59, 'ABC Phone', '29390384.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38'),
(60, 'SUA', '1608037694.jpg', '2022-08-22 00:07:38', '2022-08-22 00:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_website`
--

CREATE TABLE `content_website` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `content_about` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_website`
--

INSERT INTO `content_website` (`id`, `nama`, `logo`, `tittle`, `content`, `alamat`, `email`, `no_telp`, `content_about`, `instagram`, `facebook`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(16, 'Koperasiku', '829816085.png', 'Koperasiku Aplikasi berbasis cloud', 'Aplikasi berbasis cloud serta mendukung koperasi  di Indonesia ke arah yang lebih maju dan siap menghadapi era revolusi digital 4.0', 'PT. Animus Bersama Cemerlang Beleza Office Tower, #21-7 Jl. Letjen Soetopo 34 Jakarta Selatan 12220, Indonesia', 'contactus@edoindo.com', '021 5020 0476', 'Koperasiku adalah aplikasi berbasi cloud serta mendukung Koperasi di Indonesia ke arah digital agar lebih siap dalam  menghadapi era Revolusi Industri  Digital era 4.0', 'instagram', 'facebook', 'twitter', 'youtube', '2022-08-22 00:07:38', '2022-08-22 00:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name_partner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `no_ktp`, `email`, `no_hp`, `pin`, `created_at`, `updated_at`) VALUES
(1, '32123782762672001', 'njajal@njajal.com', '081234567890', '123456', '2022-08-22 23:52:42', '2022-08-22 23:52:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `content_fitur`
--
ALTER TABLE `content_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_keunggulan`
--
ALTER TABLE `content_keunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_keuntungan`
--
ALTER TABLE `content_keuntungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_message`
--
ALTER TABLE `content_message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_popular`
--
ALTER TABLE `content_popular`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content_website`
--
ALTER TABLE `content_website`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `content_fitur`
--
ALTER TABLE `content_fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `content_keunggulan`
--
ALTER TABLE `content_keunggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `content_keuntungan`
--
ALTER TABLE `content_keuntungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `content_message`
--
ALTER TABLE `content_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `content_popular`
--
ALTER TABLE `content_popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `content_website`
--
ALTER TABLE `content_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
