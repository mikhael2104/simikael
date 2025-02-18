-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2025 at 11:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajuan_pkls`
--

CREATE TABLE `ajuan_pkls` (
  `id_ajuan` bigint UNSIGNED NOT NULL,
  `id_siswa` bigint UNSIGNED NOT NULL,
  `id_industri` bigint UNSIGNED NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `tanggal_pengajuan` timestamp NULL DEFAULT NULL,
  `status` enum('pending','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ajuan_pkls`
--

INSERT INTO `ajuan_pkls` (`id_ajuan`, `id_siswa`, `id_industri`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_pengajuan`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-02-17', '2025-02-17', '2025-02-16 17:00:00', 'disetujui', NULL, '2025-02-16 22:41:15', '2025-02-18 03:17:55'),
(2, 2, 2, '2025-02-07', '2025-03-08', '2025-02-17 17:00:00', 'pending', NULL, '2025-02-18 03:17:36', '2025-02-18 03:17:36'),
(3, 3, 1, '2025-02-18', '2025-02-18', '2025-02-17 17:00:00', 'pending', NULL, '2025-02-18 03:19:35', '2025-02-18 03:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1739778901),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1739778901;', 1739778901),
('livewire-rate-limiter:d25eec5675d67810b442a273a528f4bb6453d618', 'i:1;', 1739875599),
('livewire-rate-limiter:d25eec5675d67810b442a273a528f4bb6453d618:timer', 'i:1739875599;', 1739875599),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:169:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:8:\"adminpkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:17:\"view-any AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:17:\"view-any AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:13:\"view AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"view AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"create AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"create AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:15:\"update AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:15:\"update AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"delete AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:15:\"delete AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:19:\"delete-any AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:19:\"delete-any AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:18:\"replicate AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:18:\"replicate AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:16:\"restore AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:16:\"restore AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:20:\"restore-any AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:20:\"restore-any AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:16:\"reorder AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:16:\"reorder AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:21:\"force-delete AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:21:\"force-delete AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:25:\"force-delete-any AjuanPkl\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:25:\"force-delete-any AjuanPkl\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:3:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"view-any Guru\";s:1:\"c\";s:3:\"web\";}i:26;a:3:{s:1:\"a\";i:27;s:1:\"b\";s:13:\"view-any Guru\";s:1:\"c\";s:3:\"api\";}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:9:\"view Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:9:\"view Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:11:\"create Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:11:\"create Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:11:\"update Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:11:\"update Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:11:\"delete Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:11:\"delete Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:15:\"delete-any Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:15:\"delete-any Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:14:\"replicate Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:14:\"replicate Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:12:\"restore Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:12:\"restore Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:16:\"restore-any Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:16:\"restore-any Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:12:\"reorder Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:12:\"reorder Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:17:\"force-delete Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:17:\"force-delete Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:21:\"force-delete-any Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:21:\"force-delete-any Guru\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:17:\"view-any Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:17:\"view-any Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:13:\"view Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:13:\"view Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:15:\"create Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:15:\"create Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:15:\"update Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:15:\"update Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:15:\"delete Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:15:\"delete Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:19:\"delete-any Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:19:\"delete-any Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:18:\"replicate Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:18:\"replicate Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:16:\"restore Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:16:\"restore Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:20:\"restore-any Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:20:\"restore-any Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:16:\"reorder Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:16:\"reorder Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:21:\"force-delete Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:21:\"force-delete Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:25:\"force-delete-any Industri\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:25:\"force-delete-any Industri\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:19:\"view-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:19:\"view-any Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:15:\"view Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:15:\"view Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:17:\"create Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:17:\"create Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:17:\"update Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:17:\"update Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:17:\"delete Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:17:\"delete Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:21:\"delete-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:21:\"delete-any Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:20:\"replicate Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:20:\"replicate Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:18:\"restore Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:18:\"restore Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:22:\"restore-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:22:\"restore-any Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:18:\"reorder Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:18:\"reorder Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:23:\"force-delete Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:23:\"force-delete Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:27:\"force-delete-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:27:\"force-delete-any Permission\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:13:\"view-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:13:\"view-any Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:9:\"view Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:9:\"view Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:11:\"create Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:11:\"create Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:11:\"update Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:11:\"update Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:11:\"delete Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:11:\"delete Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:15:\"delete-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:15:\"delete-any Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:14:\"replicate Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:14:\"replicate Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:12:\"restore Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:12:\"restore Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:16:\"restore-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:16:\"restore-any Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:12:\"reorder Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:12:\"reorder Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:17:\"force-delete Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:17:\"force-delete Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:21:\"force-delete-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:21:\"force-delete-any Role\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:14:\"view-any Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:122;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:14:\"view-any Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:10:\"view Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:124;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:10:\"view Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:12:\"create Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:126;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:12:\"create Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:12:\"update Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:128;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:12:\"update Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:12:\"delete Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:130;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:12:\"delete Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:16:\"delete-any Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:132;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:16:\"delete-any Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:133;a:4:{s:1:\"a\";i:134;s:1:\"b\";s:15:\"replicate Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:134;a:4:{s:1:\"a\";i:135;s:1:\"b\";s:15:\"replicate Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:135;a:4:{s:1:\"a\";i:136;s:1:\"b\";s:13:\"restore Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:136;a:4:{s:1:\"a\";i:137;s:1:\"b\";s:13:\"restore Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:137;a:4:{s:1:\"a\";i:138;s:1:\"b\";s:17:\"restore-any Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:138;a:4:{s:1:\"a\";i:139;s:1:\"b\";s:17:\"restore-any Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:139;a:4:{s:1:\"a\";i:140;s:1:\"b\";s:13:\"reorder Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:140;a:4:{s:1:\"a\";i:141;s:1:\"b\";s:13:\"reorder Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:141;a:4:{s:1:\"a\";i:142;s:1:\"b\";s:18:\"force-delete Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:142;a:4:{s:1:\"a\";i:143;s:1:\"b\";s:18:\"force-delete Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:143;a:4:{s:1:\"a\";i:144;s:1:\"b\";s:22:\"force-delete-any Siswa\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:144;a:4:{s:1:\"a\";i:145;s:1:\"b\";s:22:\"force-delete-any Siswa\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:145;a:4:{s:1:\"a\";i:146;s:1:\"b\";s:13:\"view-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:146;a:4:{s:1:\"a\";i:147;s:1:\"b\";s:13:\"view-any User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:147;a:4:{s:1:\"a\";i:148;s:1:\"b\";s:9:\"view User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:148;a:4:{s:1:\"a\";i:149;s:1:\"b\";s:9:\"view User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:149;a:4:{s:1:\"a\";i:150;s:1:\"b\";s:11:\"create User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:150;a:4:{s:1:\"a\";i:151;s:1:\"b\";s:11:\"create User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:151;a:4:{s:1:\"a\";i:152;s:1:\"b\";s:11:\"update User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:152;a:4:{s:1:\"a\";i:153;s:1:\"b\";s:11:\"update User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:153;a:4:{s:1:\"a\";i:154;s:1:\"b\";s:11:\"delete User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:154;a:4:{s:1:\"a\";i:155;s:1:\"b\";s:11:\"delete User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:155;a:4:{s:1:\"a\";i:156;s:1:\"b\";s:15:\"delete-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:156;a:4:{s:1:\"a\";i:157;s:1:\"b\";s:15:\"delete-any User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:157;a:4:{s:1:\"a\";i:158;s:1:\"b\";s:14:\"replicate User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:158;a:4:{s:1:\"a\";i:159;s:1:\"b\";s:14:\"replicate User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:159;a:4:{s:1:\"a\";i:160;s:1:\"b\";s:12:\"restore User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:160;a:4:{s:1:\"a\";i:161;s:1:\"b\";s:12:\"restore User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:161;a:4:{s:1:\"a\";i:162;s:1:\"b\";s:16:\"restore-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:162;a:4:{s:1:\"a\";i:163;s:1:\"b\";s:16:\"restore-any User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:163;a:4:{s:1:\"a\";i:164;s:1:\"b\";s:12:\"reorder User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:164;a:4:{s:1:\"a\";i:165;s:1:\"b\";s:12:\"reorder User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:165;a:4:{s:1:\"a\";i:166;s:1:\"b\";s:17:\"force-delete User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:166;a:4:{s:1:\"a\";i:167;s:1:\"b\";s:17:\"force-delete User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:167;a:4:{s:1:\"a\";i:168;s:1:\"b\";s:21:\"force-delete-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:168;a:4:{s:1:\"a\";i:169;s:1:\"b\";s:21:\"force-delete-any User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"guru\";s:1:\"c\";s:3:\"web\";}}}', 1739961896);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id_guru` bigint UNSIGNED NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id_guru`, `nama_guru`, `nip`, `bidang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sonalita', '123674', 'Waka Kesiswaan', NULL, '2025-02-16 22:54:35', '2025-02-16 22:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `industris`
--

CREATE TABLE `industris` (
  `id_industri` bigint UNSIGNED NOT NULL,
  `nama_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industris`
--

INSERT INTO `industris` (`id_industri`, `nama_industri`, `alamat`, `kontak`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'USM TV', 'jl kokrosono aksnfebjndwadfwads', '089559800895', NULL, '2025-02-16 22:41:00', '2025-02-16 22:41:00'),
(2, 'smkn 10 semarang', 'jl kokrosono', '09876543456', NULL, '2025-02-18 03:16:43', '2025-02-18 03:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(54, '0001_01_01_000000_create_users_table', 1),
(55, '0001_01_01_000001_create_cache_table', 1),
(56, '0001_01_01_000002_create_jobs_table', 1),
(57, '2025_02_17_031147_create_siswas_table', 1),
(58, '2025_02_17_041946_create_industris_table', 1),
(59, '2025_02_17_043923_create_ajuan_pkls_table', 1),
(60, '2025_02_17_054911_create_gurus_table', 2),
(61, '2025_02_17_061958_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'adminpkl', 'web', '2025-02-16 23:23:44', '2025-02-16 23:23:44'),
(2, 'view-any AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(3, 'view-any AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(4, 'view AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(5, 'view AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(6, 'create AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(7, 'create AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(8, 'update AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(9, 'update AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(10, 'delete AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(11, 'delete AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(12, 'delete-any AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(13, 'delete-any AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(14, 'replicate AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(15, 'replicate AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(16, 'restore AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(17, 'restore AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(18, 'restore-any AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(19, 'restore-any AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(20, 'reorder AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(21, 'reorder AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(22, 'force-delete AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(23, 'force-delete AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(24, 'force-delete-any AjuanPkl', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(25, 'force-delete-any AjuanPkl', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(26, 'view-any Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(27, 'view-any Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(28, 'view Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(29, 'view Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(30, 'create Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(31, 'create Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(32, 'update Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(33, 'update Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(34, 'delete Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(35, 'delete Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(36, 'delete-any Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(37, 'delete-any Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(38, 'replicate Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(39, 'replicate Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(40, 'restore Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(41, 'restore Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(42, 'restore-any Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(43, 'restore-any Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(44, 'reorder Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(45, 'reorder Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(46, 'force-delete Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(47, 'force-delete Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(48, 'force-delete-any Guru', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(49, 'force-delete-any Guru', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(50, 'view-any Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(51, 'view-any Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(52, 'view Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(53, 'view Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(54, 'create Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(55, 'create Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(56, 'update Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(57, 'update Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(58, 'delete Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(59, 'delete Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(60, 'delete-any Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(61, 'delete-any Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(62, 'replicate Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(63, 'replicate Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(64, 'restore Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(65, 'restore Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(66, 'restore-any Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(67, 'restore-any Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(68, 'reorder Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(69, 'reorder Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(70, 'force-delete Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(71, 'force-delete Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(72, 'force-delete-any Industri', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(73, 'force-delete-any Industri', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(74, 'view-any Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(75, 'view-any Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(76, 'view Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(77, 'view Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(78, 'create Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(79, 'create Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(80, 'update Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(81, 'update Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(82, 'delete Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(83, 'delete Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(84, 'delete-any Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(85, 'delete-any Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(86, 'replicate Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(87, 'replicate Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(88, 'restore Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(89, 'restore Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(90, 'restore-any Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(91, 'restore-any Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(92, 'reorder Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(93, 'reorder Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(94, 'force-delete Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(95, 'force-delete Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(96, 'force-delete-any Permission', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(97, 'force-delete-any Permission', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(98, 'view-any Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(99, 'view-any Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(100, 'view Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(101, 'view Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(102, 'create Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(103, 'create Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(104, 'update Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(105, 'update Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(106, 'delete Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(107, 'delete Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(108, 'delete-any Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(109, 'delete-any Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(110, 'replicate Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(111, 'replicate Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(112, 'restore Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(113, 'restore Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(114, 'restore-any Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(115, 'restore-any Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(116, 'reorder Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(117, 'reorder Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(118, 'force-delete Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(119, 'force-delete Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(120, 'force-delete-any Role', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(121, 'force-delete-any Role', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(122, 'view-any Siswa', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(123, 'view-any Siswa', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(124, 'view Siswa', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(125, 'view Siswa', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(126, 'create Siswa', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(127, 'create Siswa', 'api', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(128, 'update Siswa', 'web', '2025-02-17 01:21:49', '2025-02-17 01:21:49'),
(129, 'update Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(130, 'delete Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(131, 'delete Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(132, 'delete-any Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(133, 'delete-any Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(134, 'replicate Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(135, 'replicate Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(136, 'restore Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(137, 'restore Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(138, 'restore-any Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(139, 'restore-any Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(140, 'reorder Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(141, 'reorder Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(142, 'force-delete Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(143, 'force-delete Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(144, 'force-delete-any Siswa', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(145, 'force-delete-any Siswa', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(146, 'view-any User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(147, 'view-any User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(148, 'view User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(149, 'view User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(150, 'create User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(151, 'create User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(152, 'update User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(153, 'update User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(154, 'delete User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(155, 'delete User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(156, 'delete-any User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(157, 'delete-any User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(158, 'replicate User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(159, 'replicate User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(160, 'restore User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(161, 'restore User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(162, 'restore-any User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(163, 'restore-any User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(164, 'reorder User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(165, 'reorder User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(166, 'force-delete User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(167, 'force-delete User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(168, 'force-delete-any User', 'web', '2025-02-17 01:21:50', '2025-02-17 01:21:50'),
(169, 'force-delete-any User', 'api', '2025-02-17 01:21:50', '2025-02-17 01:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-02-16 23:24:14', '2025-02-16 23:51:58'),
(2, 'guru', 'web', '2025-02-16 23:24:23', '2025-02-16 23:52:07'),
(3, 'siswa', 'web', '2025-02-16 23:24:29', '2025-02-16 23:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(2, 2),
(4, 2),
(6, 2),
(8, 2),
(10, 2),
(12, 2),
(14, 2),
(16, 2),
(18, 2),
(20, 2),
(22, 2),
(24, 2),
(30, 2),
(50, 2),
(54, 2),
(56, 2),
(58, 2),
(60, 2),
(62, 2),
(64, 2),
(66, 2),
(68, 2),
(70, 2),
(72, 2),
(122, 2),
(124, 2),
(125, 2),
(126, 2),
(128, 2),
(130, 2),
(132, 2),
(134, 2),
(136, 2),
(138, 2),
(140, 2),
(142, 2),
(144, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9Cbn4DQm9U0d1qGNBtgtV7yHQcu9HQD0NXSn4upr', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOGF2QWN4ZlV2OXRSdW1tRzRtS0VjbUJQR3BSWFA5b0ZpOVk4TUt2byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9zaW1pa2FlbC50ZXN0L2FkbWluIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJGU2TXRtWEVZNHNKT09PSGliYVhaTy5LT0l2RXBwZHhqT1NxZ2JrR2w5d2owc2FUZlo5cWpXIjt9', 1739875944);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` bigint UNSIGNED NOT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `nama_siswa`, `nis`, `kelas`, `jurusan`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mikhael Surya Adeputra', '22165', '12', 'Rekayasa Perangkat Lunak', 1, NULL, '2025-02-16 22:40:31', '2025-02-16 22:40:31'),
(2, 'Muhammad Fajar Ramadhan', '22166', '12', 'Rekayasa Perangkat Lunak', 3, NULL, '2025-02-17 02:43:29', '2025-02-17 02:43:29'),
(3, 'Anisa Tri Hanan', '22167', '12', 'Rekayasa Perangkat Lunak', 3, NULL, '2025-02-18 03:19:07', '2025-02-18 03:19:07'),
(4, 'Mikel', '098766', '12', 'Rekayasa Perangkat Lunak', 3, NULL, '2025-02-18 03:21:46', '2025-02-18 03:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminpkl', 'adminpkl1@example.com', NULL, '$2y$12$VwWjyf7yVw0tQ3euAAycLO2d2ib1I0z9LBdBmcuBmRhEQkcV4G5hq', NULL, '2025-02-16 22:40:05', '2025-02-16 23:32:39'),
(2, 'guru1', 'guru1@example.com', NULL, '$2y$12$e6MtmXEY4sJOOOHibaXZO.KOIvEppdxjOSqgbkGl9wj0saTfZ9qjW', NULL, '2025-02-16 23:33:33', '2025-02-16 23:33:33'),
(3, 'siswa1', 'siswa1@example.com', NULL, '$2y$12$IBHYU6Fs5GGsqDPpZhLcs.XV7VcHzhnfFcCwSucocLxFlcdCEOCkW', NULL, '2025-02-16 23:34:05', '2025-02-16 23:34:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajuan_pkls`
--
ALTER TABLE `ajuan_pkls`
  ADD PRIMARY KEY (`id_ajuan`),
  ADD KEY `ajuan_pkls_id_siswa_foreign` (`id_siswa`),
  ADD KEY `ajuan_pkls_id_industri_foreign` (`id_industri`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `industris`
--
ALTER TABLE `industris`
  ADD PRIMARY KEY (`id_industri`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `siswas_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajuan_pkls`
--
ALTER TABLE `ajuan_pkls`
  MODIFY `id_ajuan` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id_guru` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industris`
--
ALTER TABLE `industris`
  MODIFY `id_industri` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id_siswa` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ajuan_pkls`
--
ALTER TABLE `ajuan_pkls`
  ADD CONSTRAINT `ajuan_pkls_id_industri_foreign` FOREIGN KEY (`id_industri`) REFERENCES `industris` (`id_industri`) ON DELETE CASCADE,
  ADD CONSTRAINT `ajuan_pkls_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id_siswa`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
