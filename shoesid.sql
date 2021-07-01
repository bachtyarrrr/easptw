-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesid`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `harga`, `deskripsi`, `file`, `stok`, `created_at`, `updated_at`) VALUES
(7, 'BJ0710', 'Sepatu VANS', 500000, 'Sepatu terbaru dari vans. yang bermotif kotak hitam putih seperti papan catur', '1.png', 8, '2021-06-30 19:12:13', '2021-06-30 19:12:13'),
(8, 'BJ0194', 'SEPATU SUPERNOVA', 1700000, 'SEPATU RUNNING RESPONSIF UNTUK MENAKLUKKAN JARAK LARI SEHARI-HARI.', 'OIP.jpg', 10, '2021-06-30 19:18:50', '2021-06-30 19:18:50'),
(9, 'BJ0135', 'sepatu RUNNING EQT', 1000000, 'SEPATU RUNNING RESPONSIF UNTUK MENAKLUKKAN JARAK LARI SEHARI-HARI.', 'adidas-equipment-adv---black-green-1_hgotpd.jpg', 10, '2021-06-30 19:19:33', '2021-06-30 19:19:33'),
(10, 'BJ0354', 'vans sk-8 high', 500000, 'sepatu masa kini yang sedang trending', 'original.jpg', 15, '2021-06-30 19:20:25', '2021-06-30 19:20:25'),
(11, 'BJ0336', 'vans dessert cammo', 700000, 'sepatu vans bermotif cammo', 'vans-authentic-desert-camo-checkerboard-4.jpg', 15, '2021-06-30 19:22:00', '2021-06-30 19:22:00'),
(12, 'BJ0629', 'NIKE RUNNING GREEN', 800000, 'sepatu running terbaru dari NIKE', 'SFT.png', 10, '2021-06-30 19:22:57', '2021-06-30 19:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargatotal` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2021_06_06_082620_baju', 1),
(37, '2021_06_13_084517_keranjang', 1),
(40, '2021_06_13_085721_pembayaran', 2),
(41, '2021_06_17_064449_pembelian', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kode_pembayaran`, `kode_barang`, `id_user`, `harga`, `jumlah`, `status_bayar`, `bukti`, `tanggal`, `created_at`, `updated_at`) VALUES
('BYR0140', 'BJ0635', 2, 640000, 2, 'Sudah Diterima', 'bukti 1.jpg', '2021-06-27', NULL, NULL),
('BYR0810', 'BJ002', 5, 800000, 2, 'Sudah Dikirim', 'bukti 1.jpg', '2021-06-27', NULL, NULL),
('BYR0716', 'BJ002', 5, 800000, 2, 'Sudah Dikirim', 'bukti 1.jpg', '2021-06-28', NULL, NULL),
('BYR0052', 'BJ004', 3, 200000, 5, 'Sudah Dikirim', 'bukti 1.jpg', '2021-06-28', NULL, NULL),
('BYR0253', 'BJ0635', 2, 320000, 1, 'Sudah Dikirim', 'bukti 1.jpg', '2021-07-01', NULL, NULL),
('BYR0694', 'BJ001', 6, 750000, 1, 'Sudah Diterima', 'bukti 2.jpg', '2021-07-01', NULL, NULL),
('BYR0252', 'BJ0710', 8, 500000, 1, 'Sudah Diterima', 'bukti 2.jpg', '2021-07-01', NULL, NULL),
('BYR0961', 'BJ0710', 8, 500000, 1, 'sudah bayar', 'bukti 2.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `no_telp`, `username`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 1, 'admin1@admin.com', NULL, '$2y$10$AXY4hyxlpdhISoEGQd2MteZwMSQuWxeliR3M1YW96cCN7po8nc1r2', NULL, '089688374045', 'admin1', 'Denpasar', NULL, NULL),
(6, 'nurmansyah', 2, 'tyartopeleven@gmail.com', NULL, '$2y$10$8r.9sO6eyBb2caHElPs0.eVmXhkbRa.CcJlgvbWvWYRm5xPN9eW0G', NULL, '081515985743', 'nurmansyah', 'Jl. Wonorejo 2', NULL, NULL),
(7, 'Maulana', 2, 'maulana@gmail.com', NULL, '$2y$10$Baes6xGZDLLQ7vNszSZvf.Ur6eV4pn.W1.XEDDT5zTggGuOeCV7xC', NULL, '081515985743', 'maulana', 'Surabaya', NULL, NULL),
(8, 'bachtyar', 2, 'bachtyar@gmail.com', NULL, '$2y$10$YYtaD2HPo7Xn/TeXNi3JAeThWux/BEw/J6LbfhYXqmaocPkekY8GW', NULL, '081515985752', 'bachtyar', 'Surabaya', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `baju_kode_baju_unique` (`kode_barang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keranjang_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
