-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 02.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eoffice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikators`
--

CREATE TABLE `indikators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indikator` varchar(255) NOT NULL,
  `satuan_pengukuran` varchar(255) NOT NULL,
  `target_kondisi_awal` varchar(255) NOT NULL,
  `target_tahun_2021` varchar(255) NOT NULL,
  `target_tahun_2022` varchar(255) NOT NULL,
  `target_tahun_2023` varchar(255) NOT NULL,
  `target_tahun_2024` varchar(255) NOT NULL,
  `target_tahun_2025` varchar(255) NOT NULL,
  `target_kondisi_akhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tujuan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indikators`
--

INSERT INTO `indikators` (`id`, `indikator`, `satuan_pengukuran`, `target_kondisi_awal`, `target_tahun_2021`, `target_tahun_2022`, `target_tahun_2023`, `target_tahun_2024`, `target_tahun_2025`, `target_kondisi_akhir`, `created_at`, `updated_at`, `tujuan_id`, `sasaran_id`) VALUES
(13, 'Indeks Pembangunan Manusia (IPM)', 'Indeks', '75', '78', '79', '80', '82', '83', '85', '2024-01-03 18:53:07', '2024-01-03 18:53:07', 5, NULL),
(14, 'Indeks Reformasi Birokrasi', 'Indeks', '82', '82', '83', '84', '84', '85', '85', '2024-01-03 18:54:12', '2024-01-03 18:54:12', 7, NULL),
(15, 'Pertumbuhan Ekonomi', '%', '-1,88', '2 - 3', '4', '4 - 5', '5', '5 - 6', '6,93', '2024-01-03 18:55:43', '2024-01-03 18:55:43', 6, NULL),
(16, 'Indeks Gini', 'Indeks', '0,380', '0,375', '0,370', '0,365', '0,360', '0,355', '0,350', '2024-01-03 18:57:10', '2024-01-03 18:57:10', 6, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator_sasarans`
--

CREATE TABLE `indikator_sasarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indikator` varchar(255) DEFAULT NULL,
  `satuan_pengukuran` varchar(255) NOT NULL,
  `target_kondisi_awal` varchar(255) NOT NULL,
  `target_tahun_2021` varchar(255) NOT NULL,
  `target_tahun_2022` varchar(255) NOT NULL,
  `target_tahun_2023` varchar(255) NOT NULL,
  `target_tahun_2024` varchar(255) NOT NULL,
  `target_tahun_2025` varchar(255) NOT NULL,
  `target_kondisi_akhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indikator_sasarans`
--

INSERT INTO `indikator_sasarans` (`id`, `indikator`, `satuan_pengukuran`, `target_kondisi_awal`, `target_tahun_2021`, `target_tahun_2022`, `target_tahun_2023`, `target_tahun_2024`, `target_tahun_2025`, `target_kondisi_akhir`, `created_at`, `updated_at`, `sasaran_id`) VALUES
(6, 'Angka Rata-rata Lama Sekolah', 'Tahun', '10,95', '10,96', '10,97', '10,98', '10,99', '11,00', '11,01', '2024-01-04 17:17:03', '2024-01-04 17:17:03', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_030227_create_visis_table', 1),
(6, '2023_10_09_072457_create_misis_table', 1),
(7, '2023_10_24_065851_create_indikators_table', 1),
(8, '2023_11_02_054235_create_tujuans_table', 1),
(9, '2023_11_06_003546_create_sasarans_table', 1),
(10, '2023_11_15_075235_add_misi_id_to_tujuans_table', 1),
(11, '2023_11_15_075332_add_tujuan_id_to_indikators_table', 1),
(12, '2023_11_23_033148_create_indikator_sasarans_table', 1),
(13, '2023_11_30_062216_add_sasaran_id_to_misis_table', 1),
(14, '2023_11_30_062223_add_sasaran_id_to_visis_table', 1),
(15, '2023_11_30_062226_add_sasaran_id_to_indikators_table', 1),
(16, '2023_11_30_062232_add_sasaran_id_to_tujuans_table', 1),
(17, '2023_11_30_065907_add_sasaran_id_to_indikator_sasarans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misis`
--

CREATE TABLE `misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `misi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `misis`
--

INSERT INTO `misis` (`id`, `misi`, `created_at`, `updated_at`, `sasaran_id`) VALUES
(5, 'Meningkatkan Kualitas  Kehidupan Masyarakat yang  Sejahtera dan Berakhlak  Mulia', '2024-01-03 18:51:47', '2024-01-03 18:51:47', NULL),
(6, 'Meningkatkan  Pembangunan  Perekonomian Daerah yang  Berkelanjutan dengan  Kearifan Lokal dan Tetap  Menjaga Kelestarian  Lingkungan Hidup', '2024-01-03 18:51:59', '2024-01-03 18:51:59', NULL),
(7, 'Mewujudkan Tata Kelola  Pemerintahan yang  Amanah', '2024-01-03 18:52:08', '2024-01-03 18:52:08', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sasarans`
--

CREATE TABLE `sasarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_sasaran` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `indikator_tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sasarans`
--

INSERT INTO `sasarans` (`id`, `kode`, `nama_sasaran`, `misi`, `tujuan`, `indikator_tujuan`, `created_at`, `updated_at`) VALUES
(11, '11', 'Meningkatnya Kualitas Pendidikan Masyarakat', '5', '5', '13', '2024-01-03 20:16:04', '2024-01-03 20:16:04'),
(29, '12', 'Meningkatnya Kualitas Kesehatan Masyarakat', '5', '5', '13', '2024-01-04 16:58:49', '2024-01-04 16:58:49'),
(30, '13', 'Meningkatnya Kesetaraan gender', '5', '5', '13', '2024-01-04 17:03:01', '2024-01-04 17:03:01'),
(31, '14', 'Terjaganya Daya Beli Masyarakat', '5', '5', '13', '2024-01-04 17:03:17', '2024-01-04 17:03:17'),
(32, '15', 'Meningkatnya toleransi beragama, keamanan, \r\nkenyamanan, kesadaran hukum dan ketertiban \r\nmasyarakat', '5', '5', '13', '2024-01-04 17:03:57', '2024-01-04 17:03:57'),
(33, '21', 'Meningkatnya Kegiatan Perekonomian Kota', '6', '6', '15', '2024-01-04 17:04:36', '2024-01-04 17:04:36'),
(34, '22', 'Meningkatnya Pendapatan Asli Daerah dan Nilai \r\nInvestasi Daerah', '6', '6', '15', '2024-01-04 17:04:51', '2024-01-04 17:04:51'),
(35, '23', 'Menurunnya Kemiskinan dan Pengangguran', '6', '6', '15', '2024-01-04 17:05:06', '2024-01-04 17:05:06'),
(36, '24', 'Terjaganya Stabilitas Ketersediaan Pangan', '6', '6', '15', '2024-01-04 17:05:24', '2024-01-04 17:05:24'),
(37, '25', 'Meningkatnya Infrastruktur Kota yang \r\nBerkualitas', '6', '6', '15', '2024-01-04 17:05:58', '2024-01-04 17:05:58'),
(38, '26', 'Terjaganya Kelestarian Lingkungan Hidup', '6', '6', '16', '2024-01-04 17:06:21', '2024-01-04 17:06:21'),
(39, '31', 'Meningkatnya Akuntabilitas Kinerja Pemerintah \r\ndan Sistem Pengendalian Internal Pemerintah \r\nDaerah', '7', '7', '14', '2024-01-04 17:06:59', '2024-01-04 17:06:59'),
(40, '32', 'Meningkatnya Akuntabilitas Kinerja Pemerintah \r\ndan Sistem Pengendalian Internal Pemerintah \r\nDaerah', '7', '7', '14', '2024-01-04 17:10:31', '2024-01-04 17:10:31'),
(41, '33', 'Meningkatnya Kualitas Pelayanan Publik', '7', '7', '14', '2024-01-04 17:10:43', '2024-01-04 17:10:43'),
(42, '33', 'Meningkatnya Kualitas Layanan Informasi Publik \r\nPemerintah Daerah', '7', '7', '14', '2024-01-04 17:11:03', '2024-01-04 17:11:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuans`
--

CREATE TABLE `tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `misi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tujuans`
--

INSERT INTO `tujuans` (`id`, `tujuan`, `created_at`, `updated_at`, `misi_id`, `sasaran_id`) VALUES
(5, 'Meningkatkan Sumber Daya Manusia yang Berkualitas Berlandaskan Nilai Agama dan Budaya', '2024-01-03 18:52:29', '2024-01-03 18:52:29', 5, NULL),
(6, 'Meningkatkan Pertumbuhan Ekonomi Inklusif yang Berkelanjutan', '2024-01-03 18:53:24', '2024-01-03 18:53:24', 6, NULL),
(7, 'Mewujudkan tata kelola pemerintahan yang amanah', '2024-01-03 18:53:47', '2024-01-03 18:53:47', 7, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Admin',
  `password` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `nip`, `role`, `password`, `password_reset_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wijaya_Kesuma', 'wijaya345.wk@gmail.com', 'Wijaya', '197710172009031001', 'Admin', '$2y$10$tIUI8r86K4T5Z5tCva8whOl4FxKzh2xoFUt.UjQKHF7PJH.tSa2qu', NULL, NULL, '2023-12-21 18:52:10', '2023-12-21 18:52:10'),
(10, 'Muhammad_Nabil', 'nabil@gmail.com', 'nabil', '2003', 'Admin', '$2y$10$9GMmbSUCffy.ZpfVS8mf7.XmMdFJTQxJb6XnCDdKIcCCUMoe0E70W', NULL, NULL, '2023-12-21 18:53:53', '2023-12-21 18:53:53'),
(12, 'admin', 'admin@gmail.com', 'admin', '2003', 'Admin', '$2y$10$JAcyP2j8qiHLLbAjc.izE.3i5NhvA.44cqPMBmnYnkmcNM2llf26K', NULL, NULL, '2024-01-04 16:56:56', '2024-01-04 16:56:56'),
(13, 'Edo', 'Edo@gmail.com', 'edo', '1993', 'Admin', '$2y$10$tVTm9Me3T6uTYz1FzarIZeZpdKxGlOqjQVoWOEdYF4ekidnqmFQpW', NULL, NULL, '2024-01-04 16:56:56', '2024-01-04 16:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visis`
--

CREATE TABLE `visis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visis`
--

INSERT INTO `visis` (`id`, `visi`, `created_at`, `updated_at`, `sasaran_id`) VALUES
(1, 'BANJARBARU MAJU,  AGAMIS, DAN  SEJAHTERA  (BANJARBARU JUARA)', NULL, '2024-01-03 18:51:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `indikators`
--
ALTER TABLE `indikators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikators_tujuan_id_foreign` (`tujuan_id`),
  ADD KEY `indikators_sasaran_id_foreign` (`sasaran_id`);

--
-- Indeks untuk tabel `indikator_sasarans`
--
ALTER TABLE `indikator_sasarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_sasarans_sasaran_id_foreign` (`sasaran_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `misis_sasaran_id_foreign` (`sasaran_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sasarans`
--
ALTER TABLE `sasarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tujuans`
--
ALTER TABLE `tujuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tujuans_misi_id_foreign` (`misi_id`),
  ADD KEY `tujuans_sasaran_id_foreign` (`sasaran_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indeks untuk tabel `visis`
--
ALTER TABLE `visis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visis_sasaran_id_foreign` (`sasaran_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `indikators`
--
ALTER TABLE `indikators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `indikator_sasarans`
--
ALTER TABLE `indikator_sasarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `misis`
--
ALTER TABLE `misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sasarans`
--
ALTER TABLE `sasarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `visis`
--
ALTER TABLE `visis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `indikators`
--
ALTER TABLE `indikators`
  ADD CONSTRAINT `indikators_sasaran_id_foreign` FOREIGN KEY (`sasaran_id`) REFERENCES `sasarans` (`id`),
  ADD CONSTRAINT `indikators_tujuan_id_foreign` FOREIGN KEY (`tujuan_id`) REFERENCES `tujuans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `indikator_sasarans`
--
ALTER TABLE `indikator_sasarans`
  ADD CONSTRAINT `indikator_sasarans_sasaran_id_foreign` FOREIGN KEY (`sasaran_id`) REFERENCES `sasarans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `misis`
--
ALTER TABLE `misis`
  ADD CONSTRAINT `misis_sasaran_id_foreign` FOREIGN KEY (`sasaran_id`) REFERENCES `sasarans` (`id`);

--
-- Ketidakleluasaan untuk tabel `tujuans`
--
ALTER TABLE `tujuans`
  ADD CONSTRAINT `tujuans_misi_id_foreign` FOREIGN KEY (`misi_id`) REFERENCES `misis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tujuans_sasaran_id_foreign` FOREIGN KEY (`sasaran_id`) REFERENCES `sasarans` (`id`);

--
-- Ketidakleluasaan untuk tabel `visis`
--
ALTER TABLE `visis`
  ADD CONSTRAINT `visis_sasaran_id_foreign` FOREIGN KEY (`sasaran_id`) REFERENCES `sasarans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
