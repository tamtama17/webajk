-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2018 pada 00.03
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camin-ajk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftaradmin`
--

CREATE TABLE `daftaradmin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NRP` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftaradmin`
--

INSERT INTO `daftaradmin` (`id`, `nama_admin`, `foto_admin`, `NRP`, `jabatan_admin`, `created_at`, `updated_at`) VALUES
(1, 'Ilham M Misbahuddin', '1527975355_1.jpg', '05111540000088', 'Coordinator', NULL, '2018-06-02 14:35:55'),
(2, 'Rohana Qudus', '', '05111540000045', 'Treasure and Internal', NULL, NULL),
(3, 'Gusti Ngurah Satria Aryawan', '', '05111540000066', 'Coordinator of Research and Development', NULL, NULL),
(4, 'Fuad Dary Rosyadi', '', '05111540000089', 'Research and Development', NULL, NULL),
(5, 'Hafara Firdausi', '', '05111540000043', 'Research and Development', NULL, NULL),
(6, 'Aguel Satria', '', '05111640000056', 'Research and Development', NULL, NULL),
(7, 'Khawari Muhammad Dzakwan', '', '05111640000088', 'Research and Development', NULL, NULL),
(8, 'Cahya Putra Hikmawan', '', '05111540000119', 'Coordinator of Maintenance', NULL, NULL),
(9, 'M Fariz Didin Andiyar', '', '05111540000118', 'Maintenance', NULL, NULL),
(10, 'Nahda Fauziyah Zahra', '', '05111540000141', 'Maintenance', NULL, NULL),
(11, 'Raldo Kusuma', '', '05111640000026', 'Maintenance', NULL, NULL),
(12, 'Afif Ridho Kamal Putra', '', '05111440000173', 'Dewan Penasehat', NULL, NULL),
(13, 'Fathoni Adi Kurniawan', '', '05111440000020', 'Dewan Penasehat', NULL, NULL),
(14, 'Fourir Akbar', '', '05111440000115', 'Dewan Penasehat', NULL, NULL),
(15, 'Syukron Rifa\'il Muttaqi', '', '05111440000093', 'Dewan Penasehat', NULL, NULL),
(16, 'Muhammad Al Fatih Abil Fida\'', '', '05111440000039', 'Dewan Penasehat', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `jenis_barang`, `merek_barang`, `jumlah_barang`, `created_at`, `updated_at`) VALUES
(6, 'Meja PC', 'Olympic', '28', NULL, NULL),
(7, 'Proyektor', 'Infocus', '1', NULL, NULL),
(8, 'Papan tulis putih', 'Yashika', '2', NULL, NULL),
(9, 'Layar Monitor', 'LG', '28', NULL, NULL),
(10, 'PC', 'Rakitan', '28', NULL, NULL),
(11, 'Keyboard', 'Logitech', '28', NULL, NULL),
(12, 'AC', 'Daikin', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_01_180209_create_daftaradmin_table', 2),
(4, '2018_06_01_180419_create_inventaris_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tamtam', 'admin@ajk', 'tamtama16@mhs.if.its.ac.id', '$2y$10$PRDtEdpKHMf04n3XPASKteNNsDEx7BSJq1POy4KSPV64l5/W.MW8O', '9J3okakmnXU8mOarhgajqorNV42urKQdGizDPp3bF2I2Phgb3OIvVnbTrPQG', '2018-06-01 10:28:07', '2018-06-01 10:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftaradmin`
--
ALTER TABLE `daftaradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftaradmin`
--
ALTER TABLE `daftaradmin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
