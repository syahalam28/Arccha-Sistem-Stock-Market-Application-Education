-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2022 pada 01.59
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arcchasolve`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User'),
(3, 'superuser', 'Super User'),
(4, 'operator', 'write news and information');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 7),
(3, 4),
(4, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'izaazsyahalam@gmail.com', 1, '2022-02-03 02:43:09', 1),
(2, '::1', 'cahyani@gmail.com', 2, '2022-02-03 02:45:27', 1),
(3, '::1', 'izaazsyahalam', NULL, '2022-02-03 02:46:39', 0),
(4, '::1', 'izaazsyahalam@gmail.com', 1, '2022-02-03 02:46:49', 1),
(5, '::1', 'cahyani@gmail.com', 2, '2022-02-03 02:53:09', 1),
(6, '::1', 'izaazsyahalam@gmail.com', 1, '2022-02-03 02:54:38', 1),
(7, '::1', 'admin', NULL, '2022-03-04 05:27:06', 0),
(8, '::1', 'admin', NULL, '2022-03-04 05:27:14', 0),
(9, '::1', 'syahalam28', NULL, '2022-03-04 05:27:38', 0),
(10, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 05:28:10', 1),
(11, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 05:30:11', 1),
(12, '::1', 'cahyani@gmail.com', 2, '2022-03-04 08:38:05', 1),
(13, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 08:38:37', 1),
(14, '::1', 'izaazsyahalam', NULL, '2022-03-04 09:12:56', 0),
(15, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 09:13:06', 1),
(16, '::1', 'cahyani@gmail.com', 4, '2022-03-04 09:13:52', 1),
(17, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 09:14:14', 1),
(18, '::1', 'cahyani@gmail.com', 4, '2022-03-04 09:14:39', 1),
(19, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 09:15:35', 1),
(20, '::1', 'cahyani@gmail.com', 4, '2022-03-04 09:16:07', 1),
(21, '::1', 'admin', NULL, '2022-03-04 09:16:27', 0),
(22, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 09:16:35', 1),
(23, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:09:57', 1),
(24, '::1', 'izaazsyahalam', NULL, '2022-03-04 18:10:24', 0),
(25, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 18:10:35', 1),
(26, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:11:16', 1),
(27, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 18:14:16', 1),
(28, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:15:15', 1),
(29, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:16:02', 1),
(30, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:16:53', 1),
(31, '::1', 'zaissyahalam@gmail.com', 5, '2022-03-04 18:17:37', 1),
(32, '::1', 'cahyani@gmail.com', 4, '2022-03-04 18:17:58', 1),
(33, '::1', 'admin', NULL, '2022-03-04 18:18:15', 0),
(34, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 18:18:22', 1),
(35, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 20:20:16', 1),
(36, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 20:38:43', 1),
(37, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 21:07:03', 1),
(38, '::1', 'zaissyahalam@gmail.com', 5, '2022-03-04 21:19:57', 1),
(39, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 21:21:02', 1),
(40, '::1', 'admin@gmail.com', 6, '2022-03-04 21:39:17', 1),
(41, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 21:39:57', 1),
(42, '::1', 'admin@gmail.com', 6, '2022-03-04 21:41:53', 1),
(43, '::1', 'cahyani@gmail.com', 4, '2022-03-04 21:42:12', 1),
(44, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-04 23:05:43', 1),
(45, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-05 03:24:03', 1),
(46, '::1', 'admin@gmail.com', 6, '2022-03-05 04:04:16', 1),
(47, '::1', 'admin@gmail.com', 6, '2022-03-06 04:53:28', 1),
(48, '::1', 'admin@gmail.com', 6, '2022-03-06 04:56:48', 1),
(49, '::1', 'admin@gmail.com', 6, '2022-03-06 05:01:04', 1),
(50, '::1', 'admin@gmail.com', 6, '2022-03-06 05:01:54', 1),
(51, '::1', 'admin@gmail.com', 6, '2022-03-06 05:03:35', 1),
(52, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-06 06:58:09', 1),
(53, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-06 07:58:06', 1),
(54, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-06 08:13:14', 1),
(55, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-06 08:26:49', 1),
(56, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-09 20:01:27', 1),
(57, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-09 20:18:34', 1),
(58, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-09 21:17:55', 1),
(59, '::1', 'izaazazaam\' or\'1=1', NULL, '2022-03-09 21:35:11', 0),
(60, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-09 21:35:29', 1),
(61, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-16 08:17:41', 1),
(62, '::1', 'admin@gmail.com', 6, '2022-03-16 08:20:46', 1),
(63, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-16 08:23:07', 1),
(64, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-16 20:54:10', 1),
(65, '::1', 'admin@gmail.com', 6, '2022-03-16 21:51:23', 1),
(66, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 00:46:11', 1),
(67, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 04:37:54', 1),
(68, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 06:01:18', 1),
(69, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 06:15:01', 1),
(70, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 06:39:27', 1),
(71, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-17 08:20:46', 1),
(72, '::1', 'admin@gmail.com', 6, '2022-03-18 07:33:15', 1),
(73, '::1', 'admin@gmail.com', 6, '2022-03-18 08:38:11', 1),
(74, '::1', 'user@gmail.com', 7, '2022-03-18 08:39:20', 1),
(75, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-18 08:41:19', 1),
(76, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-20 05:01:53', 1),
(77, '::1', 'user@gmail.com', 7, '2022-03-20 05:19:37', 1),
(78, '::1', 'cahyani@gmail.com', 4, '2022-03-20 06:10:25', 1),
(79, '::1', 'admin@gmail.com', 6, '2022-03-20 06:12:24', 1),
(80, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-20 06:13:56', 1),
(81, '::1', 'cahyani@gmail.com', 4, '2022-03-20 06:14:25', 1),
(82, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-22 07:57:35', 1),
(83, '::1', 'user@gmail.com', 7, '2022-03-22 09:08:24', 1),
(84, '::1', 'user@gmail.com', 7, '2022-03-22 09:09:37', 1),
(85, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-22 09:10:31', 1),
(86, '::1', 'user@gmail.com', 7, '2022-03-22 09:13:17', 1),
(87, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-22 09:13:41', 1),
(88, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-22 09:14:15', 1),
(89, '::1', 'izaazsyahalam@gmail.com', 1, '2022-03-22 09:16:40', 1),
(90, '::1', 'user@gmail.com', 7, '2022-03-22 09:16:58', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `info_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`info_id`, `id`, `user_id`, `judul`, `deskripsi`, `sampul`, `date`) VALUES
(10, 1, 1, 'Pergerakan Saham Emiten Baru 2022 Tak Selalu Naik, Ini Penyebabnya', '<p><strong>KONTAN.CO.ID -&nbsp;JAKARTA.&nbsp;</strong>Bursa Efek Indonesia (BEI) telah mencatatkan 11 emiten baru sejak awal tahun sampai dengan 10 Maret 2022 dengan total dana yang dihimpun sebesar Rp 3,13 triliun. Tak seperti tahun-tahun sebelumnya, pergerakan harga saham emiten yang tercatat pada awal tahun ini tidak selalu cemerlang.</p>\r\n\r\n<p>Sebagian kecil saham-saham tersebut bergerak naik pada beberapa hari perdagangan awal, lalu perlahan turun maupun langsung jeblok ke bawah harga&nbsp;<em>initial public offering&nbsp;</em>(IPO). Bahkan, banyak juga yang langsung turun di hari perdagangan perdana.</p>\r\n\r\n<p>Hanya PT Adaro Minerals Indonesia Tbk (<a href=\"https://pusatdata.kontan.co.id/quote/ADMR\">ADMR</a>) yang harganya terus naik tinggi hingga ribuan persen seiring dengan rally harga batubara. Sejak tercatat tanggal 3 Januari 2022, harga ADMR melesat 1.595% menjadi Rp 1.695 per saham per perdagangan Rabu (16/3).</p>\r\n', '1647516805_67f462f5cd864cd84395.jpg', '2022-03-17'),
(11, 1, 1, 'STRATEGI FOREX MENGGUNAKAN FIBONACCI', '<p>Dalam bagian pertama kita membahas asal-usul rangkaian Fibonacci Forex, yang awalnya disajikan bersama dengan sistem angka Hindu&ndash;Arab dalam buku &lsquo;Liber Abaci&rsquo;, oleh Leonardo Pisano, yang dijuluki Fibonacci. Dalam urutan asli Fibonacci, setiap angka adalah jumlah dari dua angka sebelumnya: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, dan seterusnya. Membagi satu angka dengan angka yang mengikutinya menciptakan &lsquo;Rasio Emas&rsquo; (&phi;=1.618), misalnya: 8/13 = 61.53%, 34/55 = 61.81%.&nbsp;&nbsp;</p>\r\n\r\n<p>23.6%, 38.2%, 50%, dan 61.8% level Fibonacci memainkan peran penting di pasar keuangan, dan digunakan untuk menentukan poin-poin penting yang menyebabkan pembalikan harga. Fibonacci retracements membantu untuk menentukan tempat strategis masuk ke pasar dan mengatur stop loss, dan juga untuk menentukan area support atau resistance.</p>\r\n\r\n<p>Di bagian kedua ini kita akan membahas aplikasi Fibonacci yang paling kuat dan mudah dipahami dalam trading di pasar Forex.</p>\r\n', '1647516984_096fcad10010c8a22997.jpeg', '2022-03-17'),
(12, 2, 6, 'Esoteris Market Balance Analysis Theory', '<h3><strong>Materi</strong></h3>\r\n\r\n<ol>\r\n	<li>Introduction Gheometry Sebagai Keseimbangan Alam</li>\r\n	<li>Hubungan Gheometry Dengan Pasar Keuangan&nbsp;</li>\r\n	<li>Konsep, Theory dan Aplikasi Gheometry Trading dari berbagai sudut pandang ahli Scout Courney, Gartley</li>\r\n</ol>\r\n\r\n<hr />\r\n<h3><strong>Peserta Berhak Mendapatkan</strong></h3>\r\n\r\n<ul>\r\n	<li>Frequency Time Analysis By Heynana13</li>\r\n	<li>UFO</li>\r\n	<li>Rumus Untuk Mengconvert Harga Menjadi Waktu&nbsp;</li>\r\n	<li>Rumus Untuk Mengconvert Harga Menjadi Nilai Sudut</li>\r\n	<li>Indikator Akumulasi / Distribusi</li>\r\n</ul>\r\n\r\n<hr />\r\n<blockquote>\r\n<h3><em>8 X Pertemuan, Setiap Sabtu Voting Mekanisme dan Minggu</em></h3>\r\n</blockquote>\r\n', '1647608671_0f55a7d036c5615415c7.jpeg', '2022-03-18'),
(14, 2, 6, 'Screening Information Stock Analysis', '<blockquote>\r\n<h3>Potensi Saham Yang Akan Mengalami Kenaikan</h3>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n</blockquote>\r\n', '1647610499_73e36650ce37de8770e4.png', '2022-03-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `jenis_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `jenis_kategori`) VALUES
(1, 'Informasi'),
(2, 'Berita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1643875241, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'izaazsyahalam@gmail.com', 'izaazazaam', 'Izaaz Azaam Sy', '1646576039_8311605928975a0b0b8e.png', '$2y$10$dEvYsFY4k3HJxdxB7wUj8e5pyn1oGZEc6uSPJoPvg/yLW.jrlKKbK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-03 02:42:54', '2022-02-03 02:42:54', NULL),
(4, 'cahyani@gmail.com', 'user', NULL, 'default.svg', '$2y$10$rEmjNVTKoVQWxYEqqHkG3O13/Uo4aSFDsdWwWUUrQKwki9zvVtAHu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-04 09:13:48', '2022-03-04 09:13:48', NULL),
(6, 'admin@gmail.com', 'user1', '', '1646451572_dd31e86258424859a052.jpg', '$2y$10$0at3r1Q3RjPj43E3o7qoZOyPSFeGz.BH342fNLwF4FjRgNm4oGOhq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-04 21:39:10', '2022-03-04 21:39:10', NULL),
(7, 'user@gmail.com', 'user2', 'User', 'default.svg', '$2y$10$ZMt6AcLxm5xSMuOT5Yu2G.ywjIjBPwQz4l.WO4rWhK5LYnZqtRTdG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-18 08:39:13', '2022-03-18 08:39:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `informasi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
